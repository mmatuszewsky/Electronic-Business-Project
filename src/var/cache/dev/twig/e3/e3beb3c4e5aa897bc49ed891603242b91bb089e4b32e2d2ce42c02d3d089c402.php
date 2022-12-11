<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_d1b006c2a60ceb100b6615f347212b1175040c302b091877ff6d04ed68663cc8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
            'product_catalog_tools' => [$this, 'block_product_catalog_tools'],
            'product_catalog_filters' => [$this, 'block_product_catalog_filters'],
            'product_catalog_form' => [$this, 'block_product_catalog_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["categories"] ?? $this->getContext($context, "categories")), [0 => "@PrestaShop/Admin/Product/Themes/categories_theme.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/product_catalog.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/catalog.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/jquery/ui/jquery.ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/catalog.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 42
        echo "  <div class=\"products-catalog\">

    ";
        // line 44
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("legacy_block_kpi", ["kpi_controller" => "AdminProductsController"]);
        echo "

    <div class=\"content container-fluid\">

      ";
        // line 48
        if (twig_length_filter($this->env, ($context["permission_error"] ?? $this->getContext($context, "permission_error")))) {
            // line 49
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              ";
            // line 56
            echo twig_escape_filter($this->env, ($context["permission_error"] ?? $this->getContext($context, "permission_error")), "html", null, true);
            echo "
            </p>
          </div>
        </div>
      </div>
      ";
        }
        // line 62
        echo "
      <div class=\"row align-items-start\">
        ";
        // line 64
        $this->displayBlock('product_catalog_tools', $context, $blocks);
        // line 67
        echo "
        ";
        // line 68
        $this->displayBlock('product_catalog_filters', $context, $blocks);
        // line 77
        echo "      </div>

      ";
        // line 79
        $this->displayBlock('product_catalog_form', $context, $blocks);
        // line 103
        echo "
    </div>
  </div>

  ";
        // line 108
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 108, "2143629994")->display(twig_array_merge($context, ["id" => "catalog_duplicate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_duplicate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 127
        echo "

  ";
        // line 130
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 130, "1105294160")->display(twig_array_merge($context, ["id" => "catalog_activate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_activate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 149
        echo "

  ";
        // line 152
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 152, "856785698")->display(twig_array_merge($context, ["id" => "catalog_deactivate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_deactivate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 171
        echo "

  ";
        // line 174
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 174, "1632915338")->display(twig_array_merge($context, ["id" => "catalog_delete_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_delete_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 193
        echo "

  ";
        // line 196
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 196, "29824722")->display(twig_array_merge($context, ["id" => "catalog_deletion_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete products?", [], "Admin.Catalog.Feature"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete now", [], "Admin.Actions"), "value" => "confirm", "class" => "btn btn-primary btn-lg"]]]));
        // line 213
        echo "
  ";
        // line 214
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 214, "814567000")->display(twig_array_merge($context, ["id" => "catalog_sql_query_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", [], "Admin.Global"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", [], "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg"]]]));
        // line 234
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_product_catalog_tools($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_tools"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_tools"));

        // line 65
        echo "          ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Blocks/tools.html.twig", ["import_link" => ($context["import_link"] ?? $this->getContext($context, "import_link"))]);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_product_catalog_filters($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filters"));

        // line 69
        echo "          ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Blocks/filters.html.twig", ["limit" =>         // line 70
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 71
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 72
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 73
($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))]);
        // line 75
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_product_catalog_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form"));

        // line 80
        echo "        ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Forms/form_products.html.twig", ["limit" =>         // line 81
($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" =>         // line 82
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "offset" =>         // line 83
($context["offset"] ?? $this->getContext($context, "offset")), "sortOrder" =>         // line 84
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "filter_category" =>         // line 85
($context["filter_category"] ?? $this->getContext($context, "filter_category")), "filter_column_id_product" =>         // line 86
($context["filter_column_id_product"] ?? $this->getContext($context, "filter_column_id_product")), "filter_column_name" =>         // line 87
($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "filter_column_reference" =>         // line 88
($context["filter_column_reference"] ?? $this->getContext($context, "filter_column_reference")), "filter_column_name_category" =>         // line 89
($context["filter_column_name_category"] ?? $this->getContext($context, "filter_column_name_category")), "filter_column_price" =>         // line 90
($context["filter_column_price"] ?? $this->getContext($context, "filter_column_price")), "filter_column_sav_quantity" =>         // line 91
($context["filter_column_sav_quantity"] ?? $this->getContext($context, "filter_column_sav_quantity")), "filter_column_active" =>         // line 92
($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")), "has_category_filter" =>         // line 93
($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")), "activate_drag_and_drop" =>         // line 94
($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop")), "products" =>         // line 95
($context["products"] ?? $this->getContext($context, "products")), "last_sql" =>         // line 96
($context["last_sql"] ?? $this->getContext($context, "last_sql")), "product_count_filtered" =>         // line 97
($context["product_count_filtered"] ?? $this->getContext($context, "product_count_filtered")), "pagination_parameters" =>         // line 98
($context["pagination_parameters"] ?? $this->getContext($context, "pagination_parameters")), "pagination_limit_choices" =>         // line 99
($context["pagination_limit_choices"] ?? $this->getContext($context, "pagination_limit_choices"))]);
        // line 101
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 101,  311 => 99,  310 => 98,  309 => 97,  308 => 96,  307 => 95,  306 => 94,  305 => 93,  304 => 92,  303 => 91,  302 => 90,  301 => 89,  300 => 88,  299 => 87,  298 => 86,  297 => 85,  296 => 84,  295 => 83,  294 => 82,  293 => 81,  291 => 80,  282 => 79,  271 => 75,  269 => 73,  268 => 72,  267 => 71,  266 => 70,  264 => 69,  255 => 68,  242 => 65,  233 => 64,  222 => 234,  220 => 214,  217 => 213,  214 => 196,  210 => 193,  207 => 174,  203 => 171,  200 => 152,  196 => 149,  193 => 130,  189 => 127,  186 => 108,  180 => 103,  178 => 79,  174 => 77,  172 => 68,  169 => 67,  167 => 64,  163 => 62,  154 => 56,  145 => 49,  143 => 48,  136 => 44,  132 => 42,  123 => 41,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  90 => 33,  81 => 32,  68 => 29,  59 => 28,  48 => 25,  46 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories '@PrestaShop/Admin/Product/Themes/categories_theme.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product_catalog.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row align-items-start\">
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}

        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_d1b006c2a60ceb100b6615f347212b1175040c302b091877ff6d04ed68663cc8___2143629994 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 108
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 108);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 118
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 119
        echo "      <div class=\"modal-body\">
        ";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  642 => 122,  637 => 120,  634 => 119,  625 => 118,  603 => 108,  313 => 101,  311 => 99,  310 => 98,  309 => 97,  308 => 96,  307 => 95,  306 => 94,  305 => 93,  304 => 92,  303 => 91,  302 => 90,  301 => 89,  300 => 88,  299 => 87,  298 => 86,  297 => 85,  296 => 84,  295 => 83,  294 => 82,  293 => 81,  291 => 80,  282 => 79,  271 => 75,  269 => 73,  268 => 72,  267 => 71,  266 => 70,  264 => 69,  255 => 68,  242 => 65,  233 => 64,  222 => 234,  220 => 214,  217 => 213,  214 => 196,  210 => 193,  207 => 174,  203 => 171,  200 => 152,  196 => 149,  193 => 130,  189 => 127,  186 => 108,  180 => 103,  178 => 79,  174 => 77,  172 => 68,  169 => 67,  167 => 64,  163 => 62,  154 => 56,  145 => 49,  143 => 48,  136 => 44,  132 => 42,  123 => 41,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  90 => 33,  81 => 32,  68 => 29,  59 => 28,  48 => 25,  46 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories '@PrestaShop/Admin/Product/Themes/categories_theme.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product_catalog.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row align-items-start\">
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}

        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_d1b006c2a60ceb100b6615f347212b1175040c302b091877ff6d04ed68663cc8___1105294160 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 130
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 130);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 140
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 141
        echo "      <div class=\"modal-body\">
        ";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  974 => 144,  969 => 142,  966 => 141,  957 => 140,  935 => 130,  642 => 122,  637 => 120,  634 => 119,  625 => 118,  603 => 108,  313 => 101,  311 => 99,  310 => 98,  309 => 97,  308 => 96,  307 => 95,  306 => 94,  305 => 93,  304 => 92,  303 => 91,  302 => 90,  301 => 89,  300 => 88,  299 => 87,  298 => 86,  297 => 85,  296 => 84,  295 => 83,  294 => 82,  293 => 81,  291 => 80,  282 => 79,  271 => 75,  269 => 73,  268 => 72,  267 => 71,  266 => 70,  264 => 69,  255 => 68,  242 => 65,  233 => 64,  222 => 234,  220 => 214,  217 => 213,  214 => 196,  210 => 193,  207 => 174,  203 => 171,  200 => 152,  196 => 149,  193 => 130,  189 => 127,  186 => 108,  180 => 103,  178 => 79,  174 => 77,  172 => 68,  169 => 67,  167 => 64,  163 => 62,  154 => 56,  145 => 49,  143 => 48,  136 => 44,  132 => 42,  123 => 41,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  90 => 33,  81 => 32,  68 => 29,  59 => 28,  48 => 25,  46 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories '@PrestaShop/Admin/Product/Themes/categories_theme.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product_catalog.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row align-items-start\">
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}

        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_d1b006c2a60ceb100b6615f347212b1175040c302b091877ff6d04ed68663cc8___856785698 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 152
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 152);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 162
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 163
        echo "      <div class=\"modal-body\">
        ";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1306 => 166,  1301 => 164,  1298 => 163,  1289 => 162,  1267 => 152,  974 => 144,  969 => 142,  966 => 141,  957 => 140,  935 => 130,  642 => 122,  637 => 120,  634 => 119,  625 => 118,  603 => 108,  313 => 101,  311 => 99,  310 => 98,  309 => 97,  308 => 96,  307 => 95,  306 => 94,  305 => 93,  304 => 92,  303 => 91,  302 => 90,  301 => 89,  300 => 88,  299 => 87,  298 => 86,  297 => 85,  296 => 84,  295 => 83,  294 => 82,  293 => 81,  291 => 80,  282 => 79,  271 => 75,  269 => 73,  268 => 72,  267 => 71,  266 => 70,  264 => 69,  255 => 68,  242 => 65,  233 => 64,  222 => 234,  220 => 214,  217 => 213,  214 => 196,  210 => 193,  207 => 174,  203 => 171,  200 => 152,  196 => 149,  193 => 130,  189 => 127,  186 => 108,  180 => 103,  178 => 79,  174 => 77,  172 => 68,  169 => 67,  167 => 64,  163 => 62,  154 => 56,  145 => 49,  143 => 48,  136 => 44,  132 => 42,  123 => 41,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  90 => 33,  81 => 32,  68 => 29,  59 => 28,  48 => 25,  46 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories '@PrestaShop/Admin/Product/Themes/categories_theme.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product_catalog.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row align-items-start\">
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}

        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_d1b006c2a60ceb100b6615f347212b1175040c302b091877ff6d04ed68663cc8___1632915338 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 174
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 174);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 184
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 185
        echo "      <div class=\"modal-body\">
        ";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1638 => 188,  1633 => 186,  1630 => 185,  1621 => 184,  1599 => 174,  1306 => 166,  1301 => 164,  1298 => 163,  1289 => 162,  1267 => 152,  974 => 144,  969 => 142,  966 => 141,  957 => 140,  935 => 130,  642 => 122,  637 => 120,  634 => 119,  625 => 118,  603 => 108,  313 => 101,  311 => 99,  310 => 98,  309 => 97,  308 => 96,  307 => 95,  306 => 94,  305 => 93,  304 => 92,  303 => 91,  302 => 90,  301 => 89,  300 => 88,  299 => 87,  298 => 86,  297 => 85,  296 => 84,  295 => 83,  294 => 82,  293 => 81,  291 => 80,  282 => 79,  271 => 75,  269 => 73,  268 => 72,  267 => 71,  266 => 70,  264 => 69,  255 => 68,  242 => 65,  233 => 64,  222 => 234,  220 => 214,  217 => 213,  214 => 196,  210 => 193,  207 => 174,  203 => 171,  200 => 152,  196 => 149,  193 => 130,  189 => 127,  186 => 108,  180 => 103,  178 => 79,  174 => 77,  172 => 68,  169 => 67,  167 => 64,  163 => 62,  154 => 56,  145 => 49,  143 => 48,  136 => 44,  132 => 42,  123 => 41,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  90 => 33,  81 => 32,  68 => 29,  59 => 28,  48 => 25,  46 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories '@PrestaShop/Admin/Product/Themes/categories_theme.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product_catalog.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row align-items-start\">
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}

        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_d1b006c2a60ceb100b6615f347212b1175040c302b091877ff6d04ed68663cc8___29824722 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 196
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 196);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 207
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 208
        echo "      <div class=\"modal-body\">
        ";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These products will be deleted for good. Please confirm.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1965 => 209,  1962 => 208,  1953 => 207,  1931 => 196,  1638 => 188,  1633 => 186,  1630 => 185,  1621 => 184,  1599 => 174,  1306 => 166,  1301 => 164,  1298 => 163,  1289 => 162,  1267 => 152,  974 => 144,  969 => 142,  966 => 141,  957 => 140,  935 => 130,  642 => 122,  637 => 120,  634 => 119,  625 => 118,  603 => 108,  313 => 101,  311 => 99,  310 => 98,  309 => 97,  308 => 96,  307 => 95,  306 => 94,  305 => 93,  304 => 92,  303 => 91,  302 => 90,  301 => 89,  300 => 88,  299 => 87,  298 => 86,  297 => 85,  296 => 84,  295 => 83,  294 => 82,  293 => 81,  291 => 80,  282 => 79,  271 => 75,  269 => 73,  268 => 72,  267 => 71,  266 => 70,  264 => 69,  255 => 68,  242 => 65,  233 => 64,  222 => 234,  220 => 214,  217 => 213,  214 => 196,  210 => 193,  207 => 174,  203 => 171,  200 => 152,  196 => 149,  193 => 130,  189 => 127,  186 => 108,  180 => 103,  178 => 79,  174 => 77,  172 => 68,  169 => 67,  167 => 64,  163 => 62,  154 => 56,  145 => 49,  143 => 48,  136 => 44,  132 => 42,  123 => 41,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  90 => 33,  81 => 32,  68 => 29,  59 => 28,  48 => 25,  46 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories '@PrestaShop/Admin/Product/Themes/categories_theme.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product_catalog.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row align-items-start\">
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}

        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_d1b006c2a60ceb100b6615f347212b1175040c302b091877ff6d04ed68663cc8___814567000 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 214
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 214);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 225
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 226
        echo "      <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, ($context["sql_manager_add_link"] ?? $this->getContext($context, "sql_manager_add_link")), "html", null, true);
        echo "\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2288 => 226,  2279 => 225,  2257 => 214,  1965 => 209,  1962 => 208,  1953 => 207,  1931 => 196,  1638 => 188,  1633 => 186,  1630 => 185,  1621 => 184,  1599 => 174,  1306 => 166,  1301 => 164,  1298 => 163,  1289 => 162,  1267 => 152,  974 => 144,  969 => 142,  966 => 141,  957 => 140,  935 => 130,  642 => 122,  637 => 120,  634 => 119,  625 => 118,  603 => 108,  313 => 101,  311 => 99,  310 => 98,  309 => 97,  308 => 96,  307 => 95,  306 => 94,  305 => 93,  304 => 92,  303 => 91,  302 => 90,  301 => 89,  300 => 88,  299 => 87,  298 => 86,  297 => 85,  296 => 84,  295 => 83,  294 => 82,  293 => 81,  291 => 80,  282 => 79,  271 => 75,  269 => 73,  268 => 72,  267 => 71,  266 => 70,  264 => 69,  255 => 68,  242 => 65,  233 => 64,  222 => 234,  220 => 214,  217 => 213,  214 => 196,  210 => 193,  207 => 174,  203 => 171,  200 => 152,  196 => 149,  193 => 130,  189 => 127,  186 => 108,  180 => 103,  178 => 79,  174 => 77,  172 => 68,  169 => 67,  167 => 64,  163 => 62,  154 => 56,  145 => 49,  143 => 48,  136 => 44,  132 => 42,  123 => 41,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  90 => 33,  81 => 32,  68 => 29,  59 => 28,  48 => 25,  46 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories '@PrestaShop/Admin/Product/Themes/categories_theme.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product_catalog.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row align-items-start\">
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}

        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}
