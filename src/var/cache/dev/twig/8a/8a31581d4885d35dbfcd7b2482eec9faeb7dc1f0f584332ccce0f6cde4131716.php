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

/* @Product/ProductPage/Panels/combinations.html.twig */
class __TwigTemplate_a82a9fadea4b1602d394070eb5d7c14ed283677fb362cdddd0e059470de91cd1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/combinations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/combinations.html.twig"));

        // line 25
        echo "<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step3\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          <div class=\"col-md-12\">

            <div id=\"quantities\" style=\"";
        // line 33
        if ((($context["has_combinations"] ?? $this->getContext($context, "has_combinations")) || ($this->getAttribute($this->getAttribute(($context["formDependsOnStocks"] ?? $this->getContext($context, "formDependsOnStocks")), "vars", []), "value", []) != "0"))) {
            echo "display: none;";
        }
        echo "\">
              <h2>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
              <fieldset class=\"form-group\">
                <div class=\"row\">
                  ";
        // line 37
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 38
            echo "                    <div class=\"col-md-4\">
                      <label class=\"form-control-label\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formStockQuantity"] ?? $this->getContext($context, "formStockQuantity")), "vars", []), "label", []), "html", null, true);
            echo "</label>
                      ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formStockQuantity"] ?? $this->getContext($context, "formStockQuantity")), 'errors');
            echo "
                      ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formStockQuantity"] ?? $this->getContext($context, "formStockQuantity")), 'widget');
            echo "
                    </div>
                  ";
        }
        // line 44
        echo "                  <div class=\"col-md-4\">
                    <label class=\"form-control-label\">
                      ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formStockMinimalQuantity"] ?? $this->getContext($context, "formStockMinimalQuantity")), "vars", []), "label", []), "html", null, true);
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    </label>
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formStockMinimalQuantity"] ?? $this->getContext($context, "formStockMinimalQuantity")), 'errors');
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formStockMinimalQuantity"] ?? $this->getContext($context, "formStockMinimalQuantity")), 'widget');
        echo "
                  </div>
                </div>
              </fieldset>

              <h2>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
              <fieldset class=\"form-group\">
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <label class=\"form-control-label\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formLocation"] ?? $this->getContext($context, "formLocation")), "vars", []), "label", []), "html", null, true);
        echo "</label>
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLocation"] ?? $this->getContext($context, "formLocation")), 'errors');
        echo "
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLocation"] ?? $this->getContext($context, "formLocation")), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <label class=\"form-control-label\">";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formLowStockThreshold"] ?? $this->getContext($context, "formLowStockThreshold")), "vars", []), "label", []), "html", null, true);
        echo "</label>
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLowStockThreshold"] ?? $this->getContext($context, "formLowStockThreshold")), 'errors');
        echo "
                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLowStockThreshold"] ?? $this->getContext($context, "formLowStockThreshold")), 'widget');
        echo "
                  </div>
                  <div class=\"col-md-8\">
                    <label class=\"form-control-label\">&nbsp;</label>
                    <div class=\"widget-checkbox-inline\">
                      ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLowStockAlert"] ?? $this->getContext($context, "formLowStockAlert")), 'errors');
        echo "
                      ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLowStockAlert"] ?? $this->getContext($context, "formLowStockAlert")), 'widget');
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\" data-html=\"true\" data-content=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]", ["[1]" => (("<a href=&quot;" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminEmployees")) . "&quot;>"), "[/1]" => "</a>"], "Admin.Catalog.Help");
        echo "\" ></span>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>

            <div id=\"virtual_product\" data-action=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_save_action", ["idProduct" => ($context["productId"] ?? $this->getContext($context, "productId"))]), "html", null, true);
        echo "\" data-action-remove=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_remove_action", ["idProduct" => ($context["productId"] ?? $this->getContext($context, "productId"))]), "html", null, true);
        echo "\">

              <div class=\"row\">
                <div class=\"col-md-4\">
                  <h2>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "vars", []), "label", []), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"col-md-8\">
                  <fieldset class=\"form-group\">
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "is_virtual_file", []), 'widget');
        echo "
                  </fieldset>
                </div>
              </div>

              <div id=\"virtual_product_content\" class=\"row col-md-8\">
                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), 'errors');
        echo "
                <div class=\"col-md-12\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">
                      ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "file", []), "vars", []), "label", []), "html", null, true);
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload a file from your computer (%maxUploadSize% max.)", ["%maxUploadSize%" => ($context["max_upload_size"] ?? $this->getContext($context, "max_upload_size"))], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    </label>
                    <div id=\"form_step3_virtual_product_file_input\" class=\"";
        // line 105
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "vars", [], "any", false, true), "value", [], "any", false, true), "filename", [], "any", true, true)) ? ("hide") : ("show"));
        echo "\">
                      ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "file", []), 'widget');
        echo "
                    </div>
                    <div id=\"form_step3_virtual_product_file_details\" class=\"";
        // line 108
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "vars", [], "any", false, true), "value", [], "any", false, true), "filename", [], "any", true, true)) ? ("show") : ("hide"));
        echo "\">
                      <a href=\"";
        // line 109
        (($this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "vars", [], "any", false, true), "value", [], "any", false, true), "file_download_link", [], "any", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "vars", []), "value", []), "file_download_link", []), "html", null, true))) : (print ("")));
        echo "\" class=\"btn btn-default btn-sm download\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download file", [], "Admin.Actions"), "html", null, true);
        echo "</a>
                      <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_remove_file_action", ["idProduct" => ($context["productId"] ?? $this->getContext($context, "productId"))]), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm delete\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete this file", [], "Admin.Actions"), "html", null, true);
        echo "</a>
                    </div>
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">
                      ";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "name", []), "vars", []), "label", []), "html", null, true);
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The full filename with its extension (e.g. Book.pdf)", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    </label>
                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "name", []), 'errors');
        echo "
                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "name", []), 'widget');
        echo "
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">
                      ";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "nb_downloadable", []), "vars", []), "label", []), "html", null, true);
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of downloads allowed per customer. Set to 0 for unlimited downloads.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    </label>
                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "nb_downloadable", []), 'errors');
        echo "
                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "nb_downloadable", []), 'widget');
        echo "
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">
                      ";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "expiration_date", []), "vars", []), "label", []), "html", null, true);
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    </label>
                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "expiration_date", []), 'errors');
        echo "
                    ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "expiration_date", []), 'widget');
        echo "
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">
                      ";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "nb_days", []), "vars", []), "label", []), "html", null, true);
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of days this file can be accessed by customers. Set to zero for unlimited access.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    </label>
                    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "nb_days", []), 'errors');
        echo "
                    ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "nb_days", []), 'widget');
        echo "
                  </fieldset>
                </div>
                <div class=\"col-md-12\">
                  ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "save", []), 'widget');
        echo "
                </div>
              </div>
            </div>

            ";
        // line 164
        if ((($context["asm_globally_activated"] ?? $this->getContext($context, "asm_globally_activated")) && ($this->getAttribute($this->getAttribute(($context["formType"] ?? $this->getContext($context, "formType")), "vars", []), "value", []) != "2"))) {
            // line 165
            echo "              <div class=\"form-group\" id=\"asm_quantity_management\">
                <label class=\"col-sm-2 control-label\" for=\"form_step3_advanced_stock_management\"></label>
                <div class=\"col-sm-10\">
                  ";
            // line 168
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formAdvancedStockManagement"] ?? $this->getContext($context, "formAdvancedStockManagement")), 'errors');
            echo "
                  ";
            // line 169
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formAdvancedStockManagement"] ?? $this->getContext($context, "formAdvancedStockManagement")), 'widget');
            echo "
                  ";
            // line 170
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", []), "type_product", []), "vars", []), "value", []) == "1")) {
                // line 171
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When enabling advanced stock management for a pack, please make sure it is also enabled for its product(s) – if you choose to decrement product quantities.", [], "Admin.Catalog.Notification"), "html", null, true);
                echo "
                  ";
            }
            // line 173
            echo "                </div>
              </div>
              <div class=\"form-group\" id=\"depends_on_stock_div\" style=\"";
            // line 175
            if ( !$this->getAttribute($this->getAttribute(($context["formAdvancedStockManagement"] ?? $this->getContext($context, "formAdvancedStockManagement")), "vars", []), "checked", [])) {
                echo "display: none;";
            }
            echo "\">
                <label class=\"col-sm-2 control-label\" for=\"form_step3_depends_on_stock\"></label>
                <div class=\"col-sm-10\">
                  ";
            // line 178
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formDependsOnStocks"] ?? $this->getContext($context, "formDependsOnStocks")), 'errors');
            echo "
                  ";
            // line 179
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formDependsOnStocks"] ?? $this->getContext($context, "formDependsOnStocks")), 'widget');
            echo "
                </div>
              </div>
            ";
        }
        // line 183
        echo "            ";
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 184
            echo "              <div id=\"pack_stock_type\">
                <h2>";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formPackStockType"] ?? $this->getContext($context, "formPackStockType")), "vars", []), "label", []), "html", null, true);
            echo "</h2>
                <div class=\"row col-md-4\">
                  <fieldset class=\"form-group\">
                    ";
            // line 188
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPackStockType"] ?? $this->getContext($context, "formPackStockType")), 'errors');
            echo "
                    ";
            // line 189
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPackStockType"] ?? $this->getContext($context, "formPackStockType")), 'widget');
            echo "
                  </fieldset>
                </div>
              </div>
            ";
        }
        // line 194
        echo "            ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_combinations.html.twig", ["form" => ($context["formStep3"] ?? $this->getContext($context, "formStep3")), "form_combination_bulk" => ($context["formCombinations"] ?? $this->getContext($context, "formCombinations"))]);
        echo "

            ";
        // line 196
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsQuantitiesStepBottom", ["id_product" => ($context["productId"] ?? $this->getContext($context, "productId"))]);
        echo "

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Panels/combinations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 196,  401 => 194,  393 => 189,  389 => 188,  383 => 185,  380 => 184,  377 => 183,  370 => 179,  366 => 178,  358 => 175,  354 => 173,  348 => 171,  346 => 170,  342 => 169,  338 => 168,  333 => 165,  331 => 164,  323 => 159,  316 => 155,  312 => 154,  307 => 152,  302 => 150,  293 => 144,  289 => 143,  284 => 141,  279 => 139,  270 => 133,  266 => 132,  261 => 130,  256 => 128,  247 => 122,  243 => 121,  238 => 119,  233 => 117,  221 => 110,  215 => 109,  211 => 108,  206 => 106,  202 => 105,  197 => 103,  192 => 101,  185 => 97,  176 => 91,  169 => 87,  160 => 83,  150 => 76,  146 => 75,  142 => 74,  134 => 69,  130 => 68,  126 => 67,  118 => 62,  114 => 61,  110 => 60,  103 => 56,  95 => 51,  91 => 50,  86 => 48,  81 => 46,  77 => 44,  71 => 41,  67 => 40,  63 => 39,  60 => 38,  58 => 37,  52 => 34,  46 => 33,  36 => 25,);
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
<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step3\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          <div class=\"col-md-12\">

            <div id=\"quantities\" style=\"{% if has_combinations or formDependsOnStocks.vars.value != \"0\" %}display: none;{% endif %}\">
              <h2>{{ 'Quantities'|trans({}, 'Admin.Catalog.Feature') }}</h2>
              <fieldset class=\"form-group\">
                <div class=\"row\">
                  {% if configuration('PS_STOCK_MANAGEMENT') %}
                    <div class=\"col-md-4\">
                      <label class=\"form-control-label\">{{ formStockQuantity.vars.label }}</label>
                      {{ form_errors(formStockQuantity) }}
                      {{ form_widget(formStockQuantity) }}
                    </div>
                  {% endif %}
                  <div class=\"col-md-4\">
                    <label class=\"form-control-label\">
                      {{ formStockMinimalQuantity.vars.label }}
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"{{ \"The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    </label>
                    {{ form_errors(formStockMinimalQuantity) }}
                    {{ form_widget(formStockMinimalQuantity) }}
                  </div>
                </div>
              </fieldset>

              <h2>{{ 'Stock'|trans({}, 'Admin.Catalog.Feature') }}</h2>
              <fieldset class=\"form-group\">
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <label class=\"form-control-label\">{{ formLocation.vars.label }}</label>
                    {{ form_errors(formLocation) }}
                    {{ form_widget(formLocation) }}
                  </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <label class=\"form-control-label\">{{ formLowStockThreshold.vars.label }}</label>
                    {{ form_errors(formLowStockThreshold) }}
                    {{ form_widget(formLowStockThreshold) }}
                  </div>
                  <div class=\"col-md-8\">
                    <label class=\"form-control-label\">&nbsp;</label>
                    <div class=\"widget-checkbox-inline\">
                      {{ form_errors(formLowStockAlert) }}
                      {{ form_widget(formLowStockAlert) }}
                      <span class=\"help-box\" data-toggle=\"popover\" data-html=\"true\" data-content=\"{{ \"The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]\"|trans({'[1]':'<a href=&quot;'~getAdminLink(\"AdminEmployees\")~'&quot;>','[/1]':'</a>'}, 'Admin.Catalog.Help')|raw }}\" ></span>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>

            <div id=\"virtual_product\" data-action=\"{{ path('admin_product_virtual_save_action', { 'idProduct': productId }) }}\" data-action-remove=\"{{ path('admin_product_virtual_remove_action', {'idProduct': productId }) }}\">

              <div class=\"row\">
                <div class=\"col-md-4\">
                  <h2>{{ formVirtualProduct.vars.label }}</h2>
                </div>
                <div class=\"col-md-8\">
                  <fieldset class=\"form-group\">
                    {{ form_widget(formVirtualProduct.is_virtual_file) }}
                  </fieldset>
                </div>
              </div>

              <div id=\"virtual_product_content\" class=\"row col-md-8\">
                {{ form_errors(formVirtualProduct) }}
                <div class=\"col-md-12\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">
                      {{ formVirtualProduct.file.vars.label }}
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"{{ \"Upload a file from your computer (%maxUploadSize% max.)\"|trans({'%maxUploadSize%': max_upload_size}, 'Admin.Catalog.Help') }}\" ></span>
                    </label>
                    <div id=\"form_step3_virtual_product_file_input\" class=\"{{ formVirtualProduct.vars.value.filename is defined ? 'hide' : 'show' }}\">
                      {{ form_widget(formVirtualProduct.file) }}
                    </div>
                    <div id=\"form_step3_virtual_product_file_details\" class=\"{{ formVirtualProduct.vars.value.filename is defined ? 'show' : 'hide' }}\">
                      <a href=\"{{ formVirtualProduct.vars.value.file_download_link is defined ? formVirtualProduct.vars.value.file_download_link : '' }}\" class=\"btn btn-default btn-sm download\">{{ 'Download file'|trans({}, 'Admin.Actions') }}</a>
                      <a href=\"{{ path('admin_product_virtual_remove_file_action', {'idProduct': productId}) }}\" class=\"btn btn-danger btn-sm delete\">{{ 'Delete this file'|trans({}, 'Admin.Actions') }}</a>
                    </div>
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">
                      {{ formVirtualProduct.name.vars.label }}
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"{{ \"The full filename with its extension (e.g. Book.pdf)\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    </label>
                    {{ form_errors(formVirtualProduct.name) }}
                    {{ form_widget(formVirtualProduct.name) }}
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">
                      {{ formVirtualProduct.nb_downloadable.vars.label }}
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"{{ \"Number of downloads allowed per customer. Set to 0 for unlimited downloads.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    </label>
                    {{ form_errors(formVirtualProduct.nb_downloadable) }}
                    {{ form_widget(formVirtualProduct.nb_downloadable) }}
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">
                      {{ formVirtualProduct.expiration_date.vars.label }}
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"{{ \"If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    </label>
                    {{ form_errors(formVirtualProduct.expiration_date) }}
                    {{ form_widget(formVirtualProduct.expiration_date) }}
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">
                      {{ formVirtualProduct.nb_days.vars.label }}
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"{{ \"Number of days this file can be accessed by customers. Set to zero for unlimited access.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    </label>
                    {{ form_errors(formVirtualProduct.nb_days) }}
                    {{ form_widget(formVirtualProduct.nb_days) }}
                  </fieldset>
                </div>
                <div class=\"col-md-12\">
                  {{ form_widget(formVirtualProduct.save) }}
                </div>
              </div>
            </div>

            {% if asm_globally_activated and formType.vars.value != \"2\" %}
              <div class=\"form-group\" id=\"asm_quantity_management\">
                <label class=\"col-sm-2 control-label\" for=\"form_step3_advanced_stock_management\"></label>
                <div class=\"col-sm-10\">
                  {{ form_errors(formAdvancedStockManagement) }}
                  {{ form_widget(formAdvancedStockManagement) }}
                  {% if form.step1.type_product.vars.value == \"1\" %}
                    {{ 'When enabling advanced stock management for a pack, please make sure it is also enabled for its product(s) – if you choose to decrement product quantities.'|trans({}, 'Admin.Catalog.Notification') }}
                  {% endif %}
                </div>
              </div>
              <div class=\"form-group\" id=\"depends_on_stock_div\" style=\"{% if not(formAdvancedStockManagement.vars.checked) %}display: none;{% endif %}\">
                <label class=\"col-sm-2 control-label\" for=\"form_step3_depends_on_stock\"></label>
                <div class=\"col-sm-10\">
                  {{ form_errors(formDependsOnStocks) }}
                  {{ form_widget(formDependsOnStocks) }}
                </div>
              </div>
            {% endif %}
            {% if configuration('PS_STOCK_MANAGEMENT') %}
              <div id=\"pack_stock_type\">
                <h2>{{ formPackStockType.vars.label }}</h2>
                <div class=\"row col-md-4\">
                  <fieldset class=\"form-group\">
                    {{ form_errors(formPackStockType) }}
                    {{ form_widget(formPackStockType) }}
                  </fieldset>
                </div>
              </div>
            {% endif %}
            {{ include('@Product/ProductPage/Forms/form_combinations.html.twig', {'form': formStep3, 'form_combination_bulk': formCombinations}) }}

            {{ renderhook('displayAdminProductsQuantitiesStepBottom', { 'id_product': productId }) }}

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
", "@Product/ProductPage/Panels/combinations.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Panels/combinations.html.twig");
    }
}
