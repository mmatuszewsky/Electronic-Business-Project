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

/* @Product/ProductPage/Forms/form_combination.html.twig */
class __TwigTemplate_abf66c56a6a5bf3feae39d1f04194febe4b7b952349cea0223c15b89c292eb23 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_combination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_combination.html.twig"));

        // line 25
        echo "<tr class=\"combination loaded\" id=\"attribute_";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\" data=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\">
  <td width=\"1%\"><input class=\"js-combination\" type=\"checkbox\" data-id=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\"></td>
  <td class=\"img\"><div class=\"fake-img\"></div></td>
    <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "name", []), "html", null, true);
        echo "</td>
    <td class=\"attribute-price\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
        // line 32
        echo twig_escape_filter($this->env, ($context["default_currency_symbol"] ?? $this->getContext($context, "default_currency_symbol")), "html", null, true);
        echo "</span>
            </div>
            <input type=\"text\" class=\"attribute_priceTE form-control text-sm-right\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "attribute_price", []), "html", null, true);
        echo "\">
        </div>
    </td>
    <td class=\"attribute-finalprice text-sm-right\">
      <div>
        <span class=\"final-price\" data-price=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "final_price", []), "html", null, true);
        echo "\" data-uniqid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "final_price", []), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, ($context["default_currency_symbol"] ?? $this->getContext($context, "default_currency_symbol")), "html", null, true);
        echo "
      </div>
      ";
        // line 41
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_USE_ECOTAX") != 0)) {
            // line 42
            echo "        ";
            $context["attributeEcotax"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "attribute_ecotax", []);
            // line 43
            echo "        ";
            if ((($context["attributeEcotax"] ?? $this->getContext($context, "attributeEcotax")) == 0)) {
                // line 44
                echo "          ";
                $context["attributeEcotax"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "product_ecotax", []);
                // line 45
                echo "        ";
            }
            // line 46
            echo "        <div class=\"attribute-ecotax-preview";
            if ((($context["attributeEcotax"] ?? $this->getContext($context, "attributeEcotax")) == 0)) {
                echo " d-none";
            }
            echo "\">
          ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ecotax", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
          <span class=\"attribute-ecotax\">";
            // line 48
            echo twig_escape_filter($this->env, twig_round(($context["attributeEcotax"] ?? $this->getContext($context, "attributeEcotax")), 2), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, ($context["default_currency_symbol"] ?? $this->getContext($context, "default_currency_symbol")), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 51
        echo "    </td>
    ";
        // line 52
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 53
            echo "      <td class=\"attribute-quantity\">
          <div>
              <input type=\"text\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "attribute_quantity", []), "html", null, true);
            echo "\" class=\"form-control text-sm-right\">
          </div>
      </td>
    ";
        }
        // line 59
        echo "
    <td class=\"attribute-actions\">
        <div class=\"btn-group btn-group-sm\" role=\"group\">
            <a href=\"#combination_form_";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\" class=\"btn btn-open tooltip-link btn-sm\"><i class=\"material-icons\">mode_edit</i></a>
        </div>
        <div id=\"combination_form_";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\" data=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\" class=\"combination-form hide row\">
            <div class=\"col-sm-12 nav\">
                ";
        // line 67
        echo "                <a class=\"btn-sensitive prev\"><i class=\"material-icons\">keyboard_arrow_left</i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prev. combination", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</a>
                <a class=\"next btn-sensitive\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next combination", [], "Admin.Catalog.Feature"), "html", null, true);
        echo " <i class=\"material-icons\">keyboard_arrow_right</i></a>
            </div>
            <div class=\"panel col-md-12 p-2\">
                <div class=\"float-left\">
                    <button type=\"button\" class=\"back-to-product btn btn-outline-secondary btn-back\"><i class=\"material-icons\">arrow_back</i> ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to product", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
                </div>
                <h2 class=\"title pt-2\">
                  ";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination details", [], "Admin.Catalog.Feature"), "html", null, true);
        echo " -
                  ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "name", []), "html", null, true);
        echo "
                </h2>
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_default", []), 'widget');
        echo "
                <div class=\"row\">
                  ";
        // line 80
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 81
            echo "                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_quantity", []), "vars", []), "label", []), "html", null, true);
            echo "
                          </label>
                          ";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_quantity", []), 'errors');
            echo "
                          ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_quantity", []), 'widget');
            echo "
                      </fieldset>
                    </div>
                  ";
        }
        // line 91
        echo "                    <div class=\"col-md-3\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_date_attribute", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                          ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_date_attribute", []), 'errors');
        echo "
                          ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_date_attribute", []), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_minimal_quantity", []), "vars", []), "label", []), "html", null, true);
        echo "
                            <span class=\"help-box\" data-toggle=\"popover\"
                              data-content=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                          </label>
                          ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_minimal_quantity", []), 'errors');
        echo "
                          ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_minimal_quantity", []), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_reference", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                          ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_reference", []), 'errors');
        echo "
                          ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_reference", []), 'widget');
        echo "
                      </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                  <div class=\"col-md-3\">
                    <fieldset class=\"form-group\">
                      <label class=\"form-control-label\">";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_location", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                      ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_location", []), 'errors');
        echo "
                      ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_location", []), 'widget');
        echo "
                    </fieldset>
                  </div>
                  <div class=\"col-md-3\">
                    <fieldset class=\"form-group\">
                      <label class=\"form-control-label\">";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_low_stock_threshold", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                      ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_low_stock_threshold", []), 'errors');
        echo "
                      ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_low_stock_threshold", []), 'widget');
        echo "
                    </fieldset>
                  </div>
                  <div class=\"col-md-9\">
                    <fieldset class=\"form-group widget-checkbox-inline\">
                      <label class=\"form-control-label\">&nbsp;</label>
                      <div class=\"widget-checkbox-inline\">
                        ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_low_stock_alert", []), 'errors');
        echo "
                        ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_low_stock_alert", []), 'widget');
        echo "
                        <span class=\"help-box\" data-toggle=\"popover\" data-html=\"true\" data-content=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]", ["[1]" => (("<a href=&quot;" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminEmployees")) . "&quot;>"), "[/1]" => "</a>"], "Admin.Catalog.Help");
        echo "\" ></span>
                      </div>
                    </fieldset>
                  </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price and impact", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_wholesale_price", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_wholesale_price", []), 'errors');
        echo "
                            ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_wholesale_price", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              ";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_price", []), "vars", []), "label", []), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Does this combination have a different price? Is it cheaper or more expensive than the default retail price?", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            </label>
                            ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_price", []), 'errors');
        echo "
                            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_price", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_priceTI", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                            ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_priceTI", []), 'errors');
        echo "
                            ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_priceTI", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                      <div class=\"form-control-label vcenter\">";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final retail price (tax excl.) will be", [], "Admin.Catalog.Feature"), "html", null, true);
        echo " <span class=\"final-price\" data-price=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "final_price", []), "html", null, true);
        echo "\" data-uniqid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "final_price", []), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, ($context["default_currency_symbol"] ?? $this->getContext($context, "default_currency_symbol")), "html", null, true);
        echo "</div>
                      <div class=\"form-control-label vcenter\">";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final retail price (tax incl.) will be", [], "Admin.Catalog.Feature"), "html", null, true);
        echo " <span class=\"final-price-tax-included\" data-price=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "final_price_tax_included", []), "html", null, true);
        echo "\" data-uniqid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "final_price_tax_included", []), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, ($context["default_currency_symbol"] ?? $this->getContext($context, "default_currency_symbol")), "html", null, true);
        echo "</div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3 ";
        // line 181
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_USE_ECOTAX") != 1)) {
            echo "hide";
        }
        echo "\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ecotax", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                            ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ecotax", []), 'errors');
        echo "
                            ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ecotax", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              ";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_unity", []), "vars", []), "label", []), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Does this combination have a different price per unit?", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\" ></span>
                            </label>
                            ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_unity", []), 'errors');
        echo "
                            ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_unity", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 201
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_weight", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_WEIGHT_UNIT"), "html", null, true);
        echo "</span>
                                </div>
                                ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_weight", []), 'errors');
        echo "
                                ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_weight", []), 'widget');
        echo "
                            </div>
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specific references", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_isbn", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                            ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_isbn", []), 'errors');
        echo "
                            ";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_isbn", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              ";
        // line 226
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ean13", []), "vars", []), "label", []), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            </label>
                            ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ean13", []), 'errors');
        echo "
                            ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ean13", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_upc", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                            ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_upc", []), 'errors');
        echo "
                            ";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_upc", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_mpn", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                            ";
        // line 244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_mpn", []), 'errors');
        echo "
                            ";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_mpn", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Images", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <fieldset class=\"form-group js-combination-images\">
                            <label>
                                <small class=\"form-control-label\">";
        // line 256
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_image_attr", []), "vars", []), "label", []), "html", null, true);
        echo "</small>
                                <small class=\"form-control-label number-of-images\"></small>
                            </label>
                            ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_image_attr", []), 'errors');
        echo "
                            ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_image_attr", []), 'widget');
        echo "
                        </fieldset>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 267
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsCombinationBottom", ["id_product" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product", []), "id_product_attribute" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", [])]);
        echo "
                    </div>
                </div>

                ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_product_attribute", []), 'widget');
        echo "
            </div>
        </div>
    </td>
    <td width=\"5%\">
      <a href=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_attribute", ["idProduct" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product", [])]), "html", null, true);
        echo "\" class=\"btn tooltip-link btn-sm delete\" data=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\"><i class=\"material-icons\">delete</i></a>
    </td>
    <td>
      ";
        // line 279
        $context["checked"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "attribute_default", []) == 1)) ? ("checked") : (""));
        // line 280
        echo "      <input class=\"attribute-default\" type=\"radio\" ";
        echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
        echo " data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id_product_attribute", []), "html", null, true);
        echo "\">
    </td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_combination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  614 => 280,  612 => 279,  604 => 276,  596 => 271,  589 => 267,  579 => 260,  575 => 259,  569 => 256,  560 => 250,  552 => 245,  548 => 244,  544 => 243,  536 => 238,  532 => 237,  528 => 236,  520 => 231,  516 => 230,  511 => 228,  506 => 226,  497 => 220,  493 => 219,  489 => 218,  481 => 213,  472 => 207,  468 => 206,  463 => 204,  457 => 201,  449 => 196,  445 => 195,  440 => 193,  435 => 191,  426 => 185,  422 => 184,  418 => 183,  411 => 181,  396 => 177,  384 => 176,  377 => 172,  373 => 171,  369 => 170,  361 => 165,  357 => 164,  352 => 162,  347 => 160,  338 => 154,  334 => 153,  330 => 152,  322 => 147,  313 => 141,  309 => 140,  305 => 139,  295 => 132,  291 => 131,  287 => 130,  279 => 125,  275 => 124,  271 => 123,  263 => 118,  255 => 113,  251 => 112,  247 => 111,  239 => 106,  235 => 105,  230 => 103,  225 => 101,  216 => 95,  212 => 94,  208 => 93,  204 => 91,  197 => 87,  193 => 86,  188 => 84,  183 => 81,  181 => 80,  176 => 78,  171 => 76,  167 => 75,  161 => 72,  154 => 68,  149 => 67,  142 => 64,  137 => 62,  132 => 59,  125 => 55,  121 => 53,  119 => 52,  116 => 51,  108 => 48,  104 => 47,  97 => 46,  94 => 45,  91 => 44,  88 => 43,  85 => 42,  83 => 41,  72 => 39,  64 => 34,  59 => 32,  52 => 28,  45 => 26,  36 => 25,);
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
<tr class=\"combination loaded\" id=\"attribute_{{ form.vars.value.id_product_attribute }}\" data=\"{{ form.vars.value.id_product_attribute }}\" data-index=\"{{ form.vars.value.id_product_attribute }}\">
  <td width=\"1%\"><input class=\"js-combination\" type=\"checkbox\" data-id=\"{{ form.vars.value.id_product_attribute }}\" data-index=\"{{ form.vars.value.id_product_attribute }}\"></td>
  <td class=\"img\"><div class=\"fake-img\"></div></td>
    <td>{{ form.vars.value.name }}</td>
    <td class=\"attribute-price\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">{{ default_currency_symbol }}</span>
            </div>
            <input type=\"text\" class=\"attribute_priceTE form-control text-sm-right\" value=\"{{ form.vars.value.attribute_price }}\">
        </div>
    </td>
    <td class=\"attribute-finalprice text-sm-right\">
      <div>
        <span class=\"final-price\" data-price=\"{{ form.vars.value.final_price }}\" data-uniqid=\"{{ form.vars.value.id_product_attribute }}\">{{ form.vars.value.final_price }}</span> {{ default_currency_symbol }}
      </div>
      {% if 'PS_USE_ECOTAX'|configuration != 0 %}
        {% set attributeEcotax = form.vars.value.attribute_ecotax %}
        {% if attributeEcotax == 0 %}
          {% set attributeEcotax = form.vars.value.product_ecotax %}
        {% endif %}
        <div class=\"attribute-ecotax-preview{% if attributeEcotax == 0 %} d-none{% endif %}\">
          {{ 'Ecotax'|trans({}, 'Admin.Catalog.Feature') }}
          <span class=\"attribute-ecotax\">{{ attributeEcotax|round(2) }}</span> {{ default_currency_symbol }}
        </div>
      {% endif %}
    </td>
    {% if configuration('PS_STOCK_MANAGEMENT') %}
      <td class=\"attribute-quantity\">
          <div>
              <input type=\"text\" value=\"{{ form.vars.value.attribute_quantity }}\" class=\"form-control text-sm-right\">
          </div>
      </td>
    {% endif %}

    <td class=\"attribute-actions\">
        <div class=\"btn-group btn-group-sm\" role=\"group\">
            <a href=\"#combination_form_{{ form.vars.value.id_product_attribute }}\" class=\"btn btn-open tooltip-link btn-sm\"><i class=\"material-icons\">mode_edit</i></a>
        </div>
        <div id=\"combination_form_{{ form.vars.value.id_product_attribute }}\" data=\"{{ form.vars.value.id_product_attribute }}\" class=\"combination-form hide row\">
            <div class=\"col-sm-12 nav\">
                {# \"Prev.\" is short for \"Previous\" #}
                <a class=\"btn-sensitive prev\"><i class=\"material-icons\">keyboard_arrow_left</i> {{ 'Prev. combination'|trans({}, 'Admin.Catalog.Feature') }}</a>
                <a class=\"next btn-sensitive\">{{ 'Next combination'|trans({}, 'Admin.Catalog.Feature') }} <i class=\"material-icons\">keyboard_arrow_right</i></a>
            </div>
            <div class=\"panel col-md-12 p-2\">
                <div class=\"float-left\">
                    <button type=\"button\" class=\"back-to-product btn btn-outline-secondary btn-back\"><i class=\"material-icons\">arrow_back</i> {{ 'Back to product'|trans({}, 'Admin.Catalog.Feature') }}</button>
                </div>
                <h2 class=\"title pt-2\">
                  {{ \"Combination details\"|trans({}, 'Admin.Catalog.Feature') }} -
                  {{ form.vars.value.name }}
                </h2>
                {{ form_widget(form.attribute_default) }}
                <div class=\"row\">
                  {% if configuration('PS_STOCK_MANAGEMENT') %}
                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            {{ form.attribute_quantity.vars.label }}
                          </label>
                          {{ form_errors(form.attribute_quantity) }}
                          {{ form_widget(form.attribute_quantity) }}
                      </fieldset>
                    </div>
                  {% endif %}
                    <div class=\"col-md-3\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">{{ form.available_date_attribute.vars.label }}</label>
                          {{ form_errors(form.available_date_attribute) }}
                          {{ form_widget(form.available_date_attribute) }}
                      </fieldset>
                    </div>
                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            {{ form.attribute_minimal_quantity.vars.label }}
                            <span class=\"help-box\" data-toggle=\"popover\"
                              data-content=\"{{ \"The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                          </label>
                          {{ form_errors(form.attribute_minimal_quantity) }}
                          {{ form_widget(form.attribute_minimal_quantity) }}
                      </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">{{ form.attribute_reference.vars.label }}</label>
                          {{ form_errors(form.attribute_reference) }}
                          {{ form_widget(form.attribute_reference) }}
                      </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  {{ 'Stock'|trans({}, 'Admin.Catalog.Feature') }}
                </h2>
                <div class=\"row\">
                  <div class=\"col-md-3\">
                    <fieldset class=\"form-group\">
                      <label class=\"form-control-label\">{{ form.attribute_location.vars.label }}</label>
                      {{ form_errors(form.attribute_location) }}
                      {{ form_widget(form.attribute_location) }}
                    </fieldset>
                  </div>
                  <div class=\"col-md-3\">
                    <fieldset class=\"form-group\">
                      <label class=\"form-control-label\">{{ form.attribute_low_stock_threshold.vars.label }}</label>
                      {{ form_errors(form.attribute_low_stock_threshold) }}
                      {{ form_widget(form.attribute_low_stock_threshold) }}
                    </fieldset>
                  </div>
                  <div class=\"col-md-9\">
                    <fieldset class=\"form-group widget-checkbox-inline\">
                      <label class=\"form-control-label\">&nbsp;</label>
                      <div class=\"widget-checkbox-inline\">
                        {{ form_errors(form.attribute_low_stock_alert) }}
                        {{ form_widget(form.attribute_low_stock_alert) }}
                        <span class=\"help-box\" data-toggle=\"popover\" data-html=\"true\" data-content=\"{{ \"The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]\"|trans({'[1]':'<a href=&quot;'~getAdminLink(\"AdminEmployees\")~'&quot;>','[/1]':'</a>'}, 'Admin.Catalog.Help')|raw }}\" ></span>
                      </div>
                    </fieldset>
                  </div>
                </div>
                <h2 class=\"title\">
                  {{ \"Price and impact\"|trans({}, 'Admin.Catalog.Feature') }}
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_wholesale_price.vars.label }}</label>
                            {{ form_errors(form.attribute_wholesale_price) }}
                            {{ form_widget(form.attribute_wholesale_price) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              {{ form.attribute_price.vars.label }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"Does this combination have a different price? Is it cheaper or more expensive than the default retail price?\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            </label>
                            {{ form_errors(form.attribute_price) }}
                            {{ form_widget(form.attribute_price) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_priceTI.vars.label }}</label>
                            {{ form_errors(form.attribute_priceTI) }}
                            {{ form_widget(form.attribute_priceTI) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                      <div class=\"form-control-label vcenter\">{{ \"Final retail price (tax excl.) will be\"|trans({}, 'Admin.Catalog.Feature') }} <span class=\"final-price\" data-price=\"{{ form.vars.value.final_price }}\" data-uniqid=\"{{ form.vars.value.id_product_attribute }}\">{{ form.vars.value.final_price }}</span> {{ default_currency_symbol }}</div>
                      <div class=\"form-control-label vcenter\">{{ \"Final retail price (tax incl.) will be\"|trans({}, 'Admin.Catalog.Feature') }} <span class=\"final-price-tax-included\" data-price=\"{{ form.vars.value.final_price_tax_included }}\" data-uniqid=\"{{ form.vars.value.id_product_attribute }}\">{{ form.vars.value.final_price_tax_included }}</span> {{ default_currency_symbol }}</div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3 {% if configuration('PS_USE_ECOTAX') != 1 %}hide{% endif %}\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_ecotax.vars.label }}</label>
                            {{ form_errors(form.attribute_ecotax) }}
                            {{ form_widget(form.attribute_ecotax) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              {{ form.attribute_unity.vars.label }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"Does this combination have a different price per unit?\"|trans({}, 'Admin.Catalog.Feature') }}\" ></span>
                            </label>
                            {{ form_errors(form.attribute_unity) }}
                            {{ form_widget(form.attribute_unity) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_weight.vars.label }}</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">{{ configuration('PS_WEIGHT_UNIT') }}</span>
                                </div>
                                {{ form_errors(form.attribute_weight) }}
                                {{ form_widget(form.attribute_weight) }}
                            </div>
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  {{ \"Specific references\"|trans({}, 'Admin.Catalog.Feature') }}
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_isbn.vars.label }}</label>
                            {{ form_errors(form.attribute_isbn) }}
                            {{ form_widget(form.attribute_isbn) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              {{ form.attribute_ean13.vars.label }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            </label>
                            {{ form_errors(form.attribute_ean13) }}
                            {{ form_widget(form.attribute_ean13) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_upc.vars.label }}</label>
                            {{ form_errors(form.attribute_upc) }}
                            {{ form_widget(form.attribute_upc) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_mpn.vars.label }}</label>
                            {{ form_errors(form.attribute_mpn) }}
                            {{ form_widget(form.attribute_mpn) }}
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  {{ \"Images\"|trans({}, 'Admin.Catalog.Feature') }}
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <fieldset class=\"form-group js-combination-images\">
                            <label>
                                <small class=\"form-control-label\">{{ form.id_image_attr.vars.label }}</small>
                                <small class=\"form-control-label number-of-images\"></small>
                            </label>
                            {{ form_errors(form.id_image_attr) }}
                            {{ form_widget(form.id_image_attr) }}
                        </fieldset>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        {{ renderhook('displayAdminProductsCombinationBottom', { 'id_product': form.vars.value.id_product, 'id_product_attribute': form.vars.value.id_product_attribute }) }}
                    </div>
                </div>

                {{ form_widget(form.id_product_attribute) }}
            </div>
        </div>
    </td>
    <td width=\"5%\">
      <a href=\"{{ path('admin_delete_attribute', {'idProduct': form.vars.value.id_product}) }}\" class=\"btn tooltip-link btn-sm delete\" data=\"{{ form.vars.value.id_product_attribute }}\"><i class=\"material-icons\">delete</i></a>
    </td>
    <td>
      {% set checked = form.vars.value.attribute_default == 1 ? 'checked' : '' %}
      <input class=\"attribute-default\" type=\"radio\" {{ checked }} data-id=\"{{ form.vars.value.id_product_attribute }}\">
    </td>
</tr>
", "@Product/ProductPage/Forms/form_combination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_combination.html.twig");
    }
}
