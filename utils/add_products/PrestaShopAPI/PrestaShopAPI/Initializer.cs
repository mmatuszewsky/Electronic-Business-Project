using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Net.Http;
using System.Text.Json;
using System.Text.RegularExpressions;
using System.Threading.Tasks;
using System.Web;
using Bukimedia.PrestaSharp.Entities;
using Bukimedia.PrestaSharp.Entities.AuxEntities;
using Bukimedia.PrestaSharp.Factories;
using Microsoft.Extensions.Configuration;
using Microsoft.Extensions.Logging;
using PrestaShopAPI.Entities;
using PrestaShopAPI.Extensions;
using category = Bukimedia.PrestaSharp.Entities.AuxEntities.category;
using language = Bukimedia.PrestaSharp.Entities.AuxEntities.language;
using product = Bukimedia.PrestaSharp.Entities.product;
using product_feature = Bukimedia.PrestaSharp.Entities.AuxEntities.product_feature;
using product_option_value = Bukimedia.PrestaSharp.Entities.product_option_value;

namespace PrestaShopAPI
{
    public class Initializer
    {
        private readonly HttpClient _imgHttpClient;
        private readonly IConfiguration _config;
        private readonly ProductFactory productFactory;
        private readonly StockAvailableFactory stockAvailableFactory;
        private readonly ProductOptionFactory productOptionFactory;
        private readonly ProductOptionValueFactory productOptionValueFactory;
        private readonly ProductFeatureValueFactory productFeatureValueFactory;
        private readonly ProductFeatureFactory productFeatureFactory;
        private readonly ImageFactory imageFactory;
        private readonly CombinationFactory combinationsFactory;
        private readonly CategoryFactory categoryFactory;
        private readonly ILogger<Initializer> _logger;

        public Initializer(IHttpClientFactory httpClientFactory, IConfiguration configuration, ILogger<Initializer> logger)
        {
            _imgHttpClient = httpClientFactory.CreateClient();
            _imgHttpClient.Timeout = TimeSpan.FromMinutes(10);
            _config = configuration;
            string BaseUrl = _config.GetSection("prestaShopApi").GetValue<string>("address");
            string Account = _config.GetSection("prestaShopApi").GetValue<string>("key");
            string Password = "";
            productFactory = new ProductFactory(BaseUrl, Account, Password);
            stockAvailableFactory = new StockAvailableFactory(BaseUrl, Account, Password);
            productOptionFactory = new ProductOptionFactory(BaseUrl, Account, Password);
            productOptionValueFactory = new ProductOptionValueFactory(BaseUrl, Account, Password);
            productFeatureValueFactory = new ProductFeatureValueFactory(BaseUrl, Account, Password);
            productFeatureFactory = new ProductFeatureFactory(BaseUrl, Account, Password);
            imageFactory = new ImageFactory(BaseUrl, Account, Password);
            combinationsFactory = new CombinationFactory(BaseUrl, Account, Password);
            categoryFactory = new CategoryFactory(BaseUrl, Account, Password);
            _logger = logger;
        }

        public async Task<List<Category>> InitializeCategories(List<Course> courses)
        {
            int mainCategoryId = 2;

            var categoriesCat = new Bukimedia.PrestaSharp.Entities.category()
            {
                active = 1,
                id_parent = mainCategoryId,
                name = new List<language>
                    {
                        new language(1, "Kategorie".ToPrestaName())
                    },
                link_rewrite = new List<language>
                    {
                        new language(1, "kategorie".Slugify())
                    }
            };

            categoriesCat = await categoryFactory.AddAsync(categoriesCat);

            var categories = courses.GroupBy(c => c.Category).Select(g => g.First()).Select(c => new Category
            {
                Name = c.Category,
                ParentId = categoriesCat.id.Value
            }).Distinct().ToList();

            // add categories and set their IDs in internal entities
            foreach (var category in categories)
            {
                var innerCategory = new Bukimedia.PrestaSharp.Entities.category()
                {
                    active = 1,
                    id_parent = category.ParentId,
                    name = new List<language>
                        {
                            new language(1, category.Name.ToPrestaName())
                        },
                    link_rewrite = new List<language>
                        {
                            new language(1, category.Name.ToLower().Slugify())
                        }
                };
                innerCategory = await categoryFactory.AddAsync(innerCategory);
                await Task.Delay(1 * 10);
                category.Id = innerCategory.id.Value;
            }

            var subcategories = courses.GroupBy(c => c.Subcategory).Select(g => g.First()).Select(c => new Category
            {
                Name = c.Subcategory,
                ParentId = categories.First(cat => cat.Name == c.Category).Id
            }).Distinct().ToList();

            // add subcategories and set their IDs in internal entities
            foreach (var category in subcategories)
            {
                var innerCategory = new Bukimedia.PrestaSharp.Entities.category()
                {
                    active = 1,
                    id_parent = category.ParentId,
                    name = new List<language>
                        {
                            new language(1, category.Name.ToPrestaName())
                        },
                    link_rewrite = new List<language>
                        {
                            new language(1, category.Name.ToLower().Slugify())
                        }
                };
                innerCategory = await categoryFactory.AddAsync(innerCategory);
                await Task.Delay(1 * 10);
                category.Id = innerCategory.id.Value;
            }

            var allCategories = categories;
            allCategories.AddRange(subcategories);

            return subcategories;
        }

        public async Task FixProductsCategoryTree(List<Bukimedia.PrestaSharp.Entities.product> products)
        {
            var categories = await categoryFactory.GetAllAsync();
            foreach (var product in products)
            {
                var currentCatId = product.associations.categories.First().id;
                var currentCat = categories.First(c => c.id == currentCatId);
                while (currentCat.id_parent.HasValue && currentCat.id_parent != 0)
                {
                    currentCatId = currentCat.id_parent.Value;
                    if (product.associations.categories.All(c => c.id != currentCatId))
                    {
                        product.associations.categories.Add(new category(currentCatId));
                    }
                    currentCat = categories.First(c => c.id == currentCatId);
                }

                await productFactory.UpdateAsync(product);
            }
        }

        public async Task FixProductDescriptionHardSpace(List<Bukimedia.PrestaSharp.Entities.product> products)
        {
            var counter = 0;

            foreach (var product in products)
            {
                var encoded = HttpUtility.HtmlEncode(product.description.First().Value);//.Replace("&amp;amp;nbsp", " ");
                if (encoded.Contains("&amp;amp;nbsp"))
                {
                    ++counter;
                    product.description.First().Value = HttpUtility.HtmlDecode(encoded.Replace("&amp;amp;nbsp", " ").Replace("&amp", " ").Replace("nbsp", " "));
                    try
                    {
                        await productFactory.UpdateAsync(product);
                    }
                    catch (Exception e)
                    {
                        _logger.LogError("Not working id: {id}", product.id);
                    }
                }
            }

        }

        public async Task InitializeProducts()
        {
            try
            {
                var jsonString = await File.ReadAllTextAsync(_config.GetSection("products").GetValue<string>("jsonFilePath"));
                var allCourses = JsonSerializer.Deserialize<List<Course>>(jsonString);

                var uniqueNames = allCourses.Select(c => c.Title).Distinct().ToList();

                var courses = new List<Course>();
                uniqueNames.ForEach(n =>
                {
                    courses.Add(allCourses.First(c => c.Title == n));
                });

                var subcategories = await InitializeCategories(courses);

                var materialsOption = new product_option()
                {
                    name = new List<language>
                    {
                        new language(1, "Materiały")
                    },
                    public_name = new List<language>
                    {
                        new language(1, "Materiały")
                    },
                    group_type = "select",
                };
                materialsOption = await productOptionFactory.AddAsync(materialsOption);
                await Task.Delay(1 * 10);
                var withoutMaterialsOptionValue = new product_option_value()
                {
                    id_attribute_group = materialsOption.id,
                    name = new List<language>
                    {
                        new language(1, "Bez materiałów"),
                    }
                };
                var withMaterialsOptionValue = new product_option_value()
                {
                    id_attribute_group = materialsOption.id,
                    name = new List<language>
                    {
                        new language(1, "Z materiałami"),
                    }
                };
                withMaterialsOptionValue = await productOptionValueFactory.AddAsync(withMaterialsOptionValue);
                await Task.Delay(1 * 10);
                withoutMaterialsOptionValue = await productOptionValueFactory.AddAsync(withoutMaterialsOptionValue);
                await Task.Delay(1 * 10);

                var certificateOption = new product_option()
                {
                    name = new List<language>
                    {
                        new language(1, "Certyfikaty")
                    },
                    public_name = new List<language>
                    {
                        new language(1, "Certyfikaty")
                    },
                    group_type = "select",
                };
                certificateOption = await productOptionFactory.AddAsync(certificateOption);
                await Task.Delay(1 * 10);
                var withoutCertificateOptionValue = new product_option_value()
                {
                    id_attribute_group = certificateOption.id,
                    name = new List<language>
                    {
                        new language(1, "Bez certyfikatu"),
                    }
                };
                var withCertificateOptionValue = new product_option_value()
                {
                    id_attribute_group = certificateOption.id,
                    name = new List<language>
                    {
                        new language(1, "Z certyfikatem"),
                    }
                };
                withCertificateOptionValue = await productOptionValueFactory.AddAsync(withCertificateOptionValue);
                await Task.Delay(1 * 10);
                withoutCertificateOptionValue = await productOptionValueFactory.AddAsync(withoutCertificateOptionValue);
                await Task.Delay(1 * 10);


                var authorFeature = new Bukimedia.PrestaSharp.Entities.product_feature
                {
                    name = new List<language>
                    {
                        new language(1, "Autor")
                    }
                };

                authorFeature = await productFeatureFactory.AddAsync(authorFeature);
                await Task.Delay(1 * 10);
                var levelFeature = new Bukimedia.PrestaSharp.Entities.product_feature
                {
                    name = new List<language>
                    {
                        new language(1, "Poziom")
                    }
                };

                levelFeature = await productFeatureFactory.AddAsync(levelFeature);
                await Task.Delay(1 * 10);
                var ratingFeature = new Bukimedia.PrestaSharp.Entities.product_feature
                {
                    name = new List<language>
                    {
                        new language(1, "Ocena")
                    }
                };

                ratingFeature = await productFeatureFactory.AddAsync(ratingFeature);
                await Task.Delay(1 * 10);
                var lengthFeature = new Bukimedia.PrestaSharp.Entities.product_feature
                {
                    name = new List<language>
                    {
                        new language(1, "Czas trwania")
                    }
                };

                lengthFeature = await productFeatureFactory.AddAsync(lengthFeature);
                await Task.Delay(1 * 10);



                var authors = courses.Select(c => c.Author).Distinct().ToList();
                var authorValues = new List<Bukimedia.PrestaSharp.Entities.product_feature_value>();
                foreach (var author in authors)
                {
                    var authorFeatureValue = new Bukimedia.PrestaSharp.Entities.product_feature_value()
                    {
                        id_feature = authorFeature.id,
                        value = new List<language>
                        {
                            new language(1, author)
                        }
                    };
                    authorFeatureValue = await productFeatureValueFactory.AddAsync(authorFeatureValue);
                    authorValues.Add(authorFeatureValue);
                }
                var levels = courses.Select(c => c.Level).Distinct().ToList();
                var levelValues = new List<Bukimedia.PrestaSharp.Entities.product_feature_value>();
                foreach (var level in levels)
                {
                    var levelFeatureValue = new Bukimedia.PrestaSharp.Entities.product_feature_value()
                    {
                        id_feature = levelFeature.id,
                        value = new List<language>
                        {
                            new language(1, level)
                        }
                    };
                    levelFeatureValue = await productFeatureValueFactory.AddAsync(levelFeatureValue);
                    levelValues.Add(levelFeatureValue);
                }
                var ratings = courses.Select(c => c.Rating).Distinct().ToList();
                var ratingValues = new List<Bukimedia.PrestaSharp.Entities.product_feature_value>();
                foreach (var rating in ratings)
                {
                    var ratingFeatureValue = new Bukimedia.PrestaSharp.Entities.product_feature_value()
                    {
                        id_feature = ratingFeature.id,
                        value = new List<language>
                        {
                            new language(1, rating)
                        }
                    };
                    ratingFeatureValue = await productFeatureValueFactory.AddAsync(ratingFeatureValue);
                    ratingValues.Add(ratingFeatureValue);
                }
                var lengths = courses.Select(c => c.Length).Distinct().ToList();
                var lengthValues = new List<Bukimedia.PrestaSharp.Entities.product_feature_value>();
                foreach (var length in lengths)
                {
                    if(length != "")
                    {
                        var lengthFeatureValue = new Bukimedia.PrestaSharp.Entities.product_feature_value()
                        {
                            id_feature = lengthFeature.id,
                            value = new List<language>
                        {
                            new language(1, length)
                        }
                        };
                        lengthFeatureValue = await productFeatureValueFactory.AddAsync(lengthFeatureValue);
                        lengthValues.Add(lengthFeatureValue);
                    }

                }

                var combinations = new List<combination>()
                {
                    new combination()
                    {
                        quantity = 999,
                        default_on = 1,
                        associations = new AssociationsCombination()
                        {
                            product_option_values = new List<Bukimedia.PrestaSharp.Entities.AuxEntities.product_option_value>
                            {
                                new Bukimedia.PrestaSharp.Entities.AuxEntities.product_option_value()
                                {
                                    id = withMaterialsOptionValue.id.Value
                                },
                                new Bukimedia.PrestaSharp.Entities.AuxEntities.product_option_value()
                                {
                                    id = withCertificateOptionValue.id.Value
                                }
                            }
                        },
                        minimal_quantity = 1,
                        price = decimal.Round(120 / (decimal) 1.23),
                    },
                    new combination()
                    {
                        quantity = 999,
            
                        associations = new AssociationsCombination()
                        {
                            product_option_values = new List<Bukimedia.PrestaSharp.Entities.AuxEntities.product_option_value>
                            {
                                new Bukimedia.PrestaSharp.Entities.AuxEntities.product_option_value()
                                {
                                    id = withoutMaterialsOptionValue.id.Value
                                },
                                new Bukimedia.PrestaSharp.Entities.AuxEntities.product_option_value()
                                {
                                    id = withoutCertificateOptionValue.id.Value
                                }
                            }
                        },
                        minimal_quantity = 1,
                        price = 0
                    },
                    new combination()
                    {
                        quantity = 999,
                        associations = new AssociationsCombination()
                        {
                            product_option_values = new List<Bukimedia.PrestaSharp.Entities.AuxEntities.product_option_value>
                            {
                                new Bukimedia.PrestaSharp.Entities.AuxEntities.product_option_value()
                                {
                                    id = withoutMaterialsOptionValue.id.Value
                                },
                                new Bukimedia.PrestaSharp.Entities.AuxEntities.product_option_value()
                                {
                                    id = withCertificateOptionValue.id.Value
                                }
                            }
                        },
                        minimal_quantity = 1,
                        price = decimal.Round(100 / (decimal) 1.23)
                    },
                    new combination()
                    {
                        quantity = 999,
                        associations = new AssociationsCombination()
                        {
                            product_option_values = new List<Bukimedia.PrestaSharp.Entities.AuxEntities.product_option_value>
                            {

                                new Bukimedia.PrestaSharp.Entities.AuxEntities.product_option_value()
                                {
                                    id = withMaterialsOptionValue.id.Value
                                },
                                new Bukimedia.PrestaSharp.Entities.AuxEntities.product_option_value()
                                {
                                    id = withoutCertificateOptionValue.id.Value
                                }
                            }
                        },
                        minimal_quantity = 1,
                        price = decimal.Round(20 / (decimal) 1.23)
                    }
                };

                var counter = 0;

                foreach (var course in courses)
                {
                    var categoryId = subcategories.First(sc => sc.Name == course.Subcategory).Id;


                    var regex = new Regex(@"<(div|/div)[^>]{0,}>");

                    var description = regex.Replace(course.ExtendedDescription, "");

                    regex = new Regex(@"<button(.*)");

                    description = regex.Replace(description, "").FilterDescription();



                    var product = new Bukimedia.PrestaSharp.Entities.product()
                    {
                        active = 1,
                        state = 1,
                        name = new List<language>
                        {
                            new language(1, course.Title.ToPrestaName())
                        },
                        link_rewrite = new List<language>
                        {
                            new language(1, course.Title.ToLower().Slugify())
                        },
                        available_for_order = 1,
                        price = decimal.Round(decimal.Parse(course.Price.FilterToParsableDecimal()) / (decimal)1.23, 2),
                        id_tax_rules_group = 1,
                        visibility = "both",
                        type = "simple",
                        show_price = 1,
                        minimal_quantity = 1,
                        id_category_default = categoryId,
                        description = new List<language>
                        {
                            new language(1, description)
                        },
                        associations = new AssociationsProduct()
                        {
                            categories = new List<category>
                            {
                                new category(categoryId)
                            },
                            product_features = new List<product_feature>
                            {
                                new product_feature
                                {
                                    id = authorFeature.id.Value,
                                    id_feature_value = authorValues.First(av => av.value.First().Value == course.Author).id.Value
                                },
                                new product_feature
                                {
                                    id = levelFeature.id.Value,
                                    id_feature_value = levelValues.First(av => av.value.First().Value == course.Level).id.Value
                                },
                                new product_feature
                                {
                                    id = ratingFeature.id.Value,
                                    id_feature_value = ratingValues.First(av => av.value.First().Value == course.Rating).id.Value
                                },
                                new product_feature
                                {
                                    id = lengthFeature.id.Value,
                                    id_feature_value = lengthValues.First(av => av.value.First().Value == course.Length).id.Value
                                },
                            }
                        },
                        description_short = new List<language>
                        {
                            new language(1, course.Description)
                        }
                    };

                    regex = new Regex(@"((.*)course/)(.*)(/)");
                    var output = regex.Match(course.URL);
                    var imageName = output.Groups[3].Value;
                    var imagePath = string.Concat(_config.GetSection("products").GetValue<string>("imageFilePath"), imageName, ".jpg");

                    if (!File.Exists(imagePath))
                    {
                        course.ImageSource = course.ImageSource.Replace("240x135", "750x422");
                        var response = await _imgHttpClient.GetAsync(course.ImageSource);
                        await Task.Delay(1 * 10);
                        var imgBytes = await response.Content.ReadAsByteArrayAsync();
                        File.WriteAllBytes(imagePath, imgBytes);
                    }

                    product = await productFactory.AddAsync(product);
                    await imageFactory.AddProductImageAsync(product.id.Value, imagePath);
                    await Task.Delay(1 * 500);

                    for (var i = 0; i < combinations.Count; i++)
                    {
                        combinations[i].id_product = product.id;
                        combinations[i] = await combinationsFactory.AddAsync(combinations[i]);
                    }

                    combinations.ForEach(c => c.quantity = 10);

                    await combinationsFactory.UpdateListAsync(combinations);

                    product = await productFactory.GetAsync(product.id.Value);

                    foreach (var associationsStockAvailable in product.associations.stock_availables)
                    {
                        var stockAvailable = await stockAvailableFactory.GetAsync(associationsStockAvailable.id);
                        await Task.Delay(1 * 10);
                        stockAvailable.quantity = 999;
                        stockAvailable.out_of_stock = 1;
                        await stockAvailableFactory.UpdateAsync(stockAvailable);
                        await Task.Delay(1 * 10);
                    }


                    var products = await productFactory.GetAllAsync();
                    await FixProductsCategoryTree(products);

                    var prods = await productFactory.GetAllAsync();
                    await FixProductDescriptionHardSpace(prods);
                }
            }
            catch (Exception e)
            {
                Console.WriteLine(e);
                throw;
            }

        }
    }
}
