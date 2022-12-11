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

/* @PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig */
class __TwigTemplate_6f1931d03cf26f0883858f3a1dc48eabd0359ab68f54e216d679d73da2a6115c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_catalog_form_table_row' => [$this, 'block_product_catalog_form_table_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig"));

        // line 25
        echo "<tbody
    ";
        // line 26
        if (($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"))) {
            echo "class=\"sortable\"";
        }
        // line 27
        echo "    last_sql=\"";
        echo twig_escape_filter($this->env, ($context["last_sql_query"] ?? $this->getContext($context, "last_sql_query")), "html_attr");
        echo "\"
>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 30
            echo "    ";
            $this->displayBlock('product_catalog_form_table_row', $context, $blocks);
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 152
            echo "<tr><td colspan=\"11\">
        ";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no result for this search. Update your filters to view other products.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "
    </td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_product_catalog_form_table_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_row"));

        // line 31
        echo "    <tr data-uniturl=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "unit_action_url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "unit_action_url", []), "#")) : ("#")), "html", null, true);
        echo "\" data-product-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "\">
        <td class=\"checkbox-column form-group\">
            <div class=\"md-checkbox md-checkbox-inline\">
                <label>
                    <input type=\"checkbox\" id=\"bulk_action_selected_products-";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "\" name=\"bulk_action_selected_products[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "\">
                    <i class=\"md-checkbox-control\"></i>
                </label>
            </div>
        </td>
        <td>
            <label class=\"form-check-label\" for=\"bulk_action_selected_products-";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "\">
                ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "
            </label>
        </td>
        <td>
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", []), "")) : ("")), "html", null, true);
        echo "#tab-step1\">";
        echo $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "image", []);
        echo "</a>
        </td>
        <td>
            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", []), "")) : ("")), "html", null, true);
        echo "#tab-step1\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "name", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "name", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
        echo "</a>
        </td>
        <td>
            ";
        // line 52
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "reference", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "reference", []), "")) : ("")), "html", null, true);
        echo "
        </td>
        <td>
            ";
        // line 55
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "name_category", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "name_category", []), "")) : ("")), "html", null, true);
        echo "
        </td>
        <td class=\"text-center\">
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", []), "")) : ("")), "html", null, true);
        echo "#tab-step2\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "price", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "price", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
        echo "</a>
        </td>
        <td class=\"text-center\">
            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", []), "")) : ("")), "html", null, true);
        echo "#tab-step2\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "price_final", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "price_final", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
        echo "</a>
        </td>

        ";
        // line 64
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 65
            echo "            <td class=\"product-sav-quantity text-center\" data-product-quantity-value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "sav_quantity", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "sav_quantity", []), "")) : ("")), "html", null, true);
            echo "\">
                <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", []), "")) : ("")), "html", null, true);
            echo "#tab-step3\">
                    ";
            // line 67
            if (($this->getAttribute(($context["product"] ?? null), "sav_quantity", [], "any", true, true) && ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "sav_quantity", []) > 0))) {
                // line 68
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "sav_quantity", []), "html", null, true);
                echo "
                    ";
            } else {
                // line 70
                echo "                        ";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "sav_quantity", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "sav_quantity", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "
                    ";
            }
            // line 72
            echo "                </a>
            </td>
        ";
        } else {
            // line 75
            echo "            <td></td>
        ";
        }
        // line 77
        echo "        <td class=\"text-center\">

          <div
            class=\"ps-switch ps-switch-sm ps-switch-nolabel ps-switch-center\"
            onclick=\"unitProductAction(this, ";
        // line 81
        if (((($this->getAttribute(($context["product"] ?? null), "active", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "active", []), 0)) : (0)) == 0)) {
            echo "'activate'";
        } else {
            echo "'deactivate'";
        }
        echo ");\"
          >
          <input type=\"radio\" name=\"input-";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "\" id=\"input-false-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "\" value=\"0\" ";
        if (((($this->getAttribute(($context["product"] ?? null), "active", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "active", []), 0)) : (0)) == 0)) {
            echo "checked";
        }
        echo " aria-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable %product_name% input", ["%product_name%" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", [])], "Admin.Global"), "html", null, true);
        echo "\">
              <label for=\"input-false-";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "\">Off</label>
              <input type=\"radio\" name=\"input-";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "\" id=\"input-true-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "\" value=\"1\" ";
        if (((($this->getAttribute(($context["product"] ?? null), "active", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "active", []), 0)) : (0)) != 0)) {
            echo "checked";
        }
        echo " aria-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable %product_name% input", ["%product_name%" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", [])], "Admin.Global"), "html", null, true);
        echo "\">
              <label for=\"input-true-";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "\">On</label>
              <span class=\"slide-button\"></span>
            </div>
      </td>
      ";
        // line 90
        if ($this->getAttribute(($context["product"] ?? null), "position", [], "any", true, true)) {
            // line 91
            echo "          <td ";
            if (($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"))) {
                echo "class=\"placeholder\"";
            }
            echo " style=\"cursor: pointer; cursor: hand;\">
              ";
            // line 92
            if (($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"))) {
                // line 93
                echo "                  <big><big>⇅</big></big>
              ";
            }
            // line 95
            echo "              <span class=\"position\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "position", []), "html", null, true);
            echo "</span>
              <input type=\"hidden\" name=\"mass_edit_action_sorted_products[]\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", []), "html", null, true);
            echo "\" />
              <input type=\"hidden\" name=\"mass_edit_action_sorted_positions[]\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "position", []), "html", null, true);
            echo "\" />
          </td>
      ";
        }
        // line 100
        echo "      <td class=\"text-right\">
          <div class=\"btn-group-action\">

                ";
        // line 103
        $context["buttons_action"] = [0 => ["href" => (($this->getAttribute(        // line 105
($context["product"] ?? null), "preview_url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "preview_url", []), "#")) : ("#")), "target" => "_blank", "icon" => "remove_red_eye", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Preview", [], "Admin.Actions")]];
        // line 111
        echo "
                ";
        // line 112
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? $this->getContext($context, "buttons_action")), [0 => ["onclick" => "unitProductAction(this, 'duplicate');", "icon" => "content_copy", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", [], "Admin.Actions")]]);
        // line 119
        echo "
                ";
        // line 120
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? $this->getContext($context, "buttons_action")), [0 => ["onclick" => "unitProductAction(this, 'delete');", "icon" => "delete", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions")]]);
        // line 127
        echo "
                ";
        // line 128
        if ((($context["productPageV2IsEnabled"] ?? $this->getContext($context, "productPageV2IsEnabled")) == true)) {
            // line 129
            echo "                    ";
            $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? $this->getContext($context, "buttons_action")), [0 => ["href" => (($this->getAttribute(            // line 131
($context["product"] ?? null), "url_v2", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url_v2", []), "#")) : ("#")), "icon" => "mode_edit", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit on experimental page", [], "Admin.Catalog.Feature")]]);
            // line 136
            echo "                ";
        }
        // line 137
        echo "
                ";
        // line 138
        $this->loadTemplate("@Product/CatalogPage/Forms/form_edit_dropdown.html.twig", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig", 138)->display(twig_array_merge($context, ["button_id" => (("product_list_id_" . $this->getAttribute(        // line 139
($context["product"] ?? $this->getContext($context, "product")), "id_product", [])) . "_menu"), "default_item" => ["href" => (($this->getAttribute(        // line 141
($context["product"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", []), "#")) : ("#")), "icon" => "mode_edit"], "right" => true, "items" =>         // line 145
($context["buttons_action"] ?? $this->getContext($context, "buttons_action"))]));
        // line 147
        echo "            </div>
        </td>
    </tr>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 147,  337 => 145,  336 => 141,  335 => 139,  334 => 138,  331 => 137,  328 => 136,  326 => 131,  324 => 129,  322 => 128,  319 => 127,  317 => 120,  314 => 119,  312 => 112,  309 => 111,  307 => 105,  306 => 103,  301 => 100,  295 => 97,  291 => 96,  286 => 95,  282 => 93,  280 => 92,  273 => 91,  271 => 90,  264 => 86,  252 => 85,  248 => 84,  236 => 83,  227 => 81,  221 => 77,  217 => 75,  212 => 72,  206 => 70,  200 => 68,  198 => 67,  194 => 66,  189 => 65,  187 => 64,  179 => 61,  171 => 58,  165 => 55,  159 => 52,  151 => 49,  143 => 46,  136 => 42,  132 => 41,  121 => 35,  111 => 31,  102 => 30,  85 => 153,  82 => 152,  68 => 30,  50 => 29,  44 => 27,  40 => 26,  37 => 25,);
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
<tbody
    {% if activate_drag_and_drop %}class=\"sortable\"{% endif %}
    last_sql=\"{{ last_sql_query|escape('html_attr') }}\"
>
    {% for product in products %}
    {% block product_catalog_form_table_row %}
    <tr data-uniturl=\"{{ product.unit_action_url|default('#') }}\" data-product-id=\"{{ product.id_product }}\">
        <td class=\"checkbox-column form-group\">
            <div class=\"md-checkbox md-checkbox-inline\">
                <label>
                    <input type=\"checkbox\" id=\"bulk_action_selected_products-{{ product.id_product }}\" name=\"bulk_action_selected_products[]\" value=\"{{ product.id_product }}\">
                    <i class=\"md-checkbox-control\"></i>
                </label>
            </div>
        </td>
        <td>
            <label class=\"form-check-label\" for=\"bulk_action_selected_products-{{ product.id_product }}\">
                {{ product.id_product }}
            </label>
        </td>
        <td>
            <a href=\"{{ product.url|default('') }}#tab-step1\">{{ product.image|raw }}</a>
        </td>
        <td>
            <a href=\"{{ product.url|default('') }}#tab-step1\">{{ product.name|default('N/A'|trans({}, 'Admin.Global')) }}</a>
        </td>
        <td>
            {{ product.reference|default('') }}
        </td>
        <td>
            {{ product.name_category|default('') }}
        </td>
        <td class=\"text-center\">
            <a href=\"{{ product.url|default('') }}#tab-step2\">{{ product.price|default('N/A'|trans({}, 'Admin.Global')) }}</a>
        </td>
        <td class=\"text-center\">
            <a href=\"{{ product.url|default('') }}#tab-step2\">{{ product.price_final|default('N/A'|trans({}, 'Admin.Global')) }}</a>
        </td>

        {% if configuration('PS_STOCK_MANAGEMENT') %}
            <td class=\"product-sav-quantity text-center\" data-product-quantity-value=\"{{ product.sav_quantity|default('') }}\">
                <a href=\"{{ product.url|default('') }}#tab-step3\">
                    {% if product.sav_quantity is defined and product.sav_quantity > 0 %}
                        {{ product.sav_quantity }}
                    {% else %}
                        {{ product.sav_quantity|default('N/A'|trans({}, 'Admin.Global')) }}
                    {% endif %}
                </a>
            </td>
        {% else %}
            <td></td>
        {% endif %}
        <td class=\"text-center\">

          <div
            class=\"ps-switch ps-switch-sm ps-switch-nolabel ps-switch-center\"
            onclick=\"unitProductAction(this, {% if product.active|default(0) == 0 %}'activate'{% else %}'deactivate'{% endif %});\"
          >
          <input type=\"radio\" name=\"input-{{ product.id_product }}\" id=\"input-false-{{ product.id_product }}\" value=\"0\" {% if product.active|default(0) == 0 %}checked{% endif %} aria-label=\"{{ \"Disable %product_name% input\"|trans({'%product_name%': product.name}, 'Admin.Global') }}\">
              <label for=\"input-false-{{ product.id_product }}\">Off</label>
              <input type=\"radio\" name=\"input-{{ product.id_product }}\" id=\"input-true-{{ product.id_product }}\" value=\"1\" {% if product.active|default(0) != 0 %}checked{% endif %} aria-label=\"{{ \"Enable %product_name% input\"|trans({'%product_name%': product.name}, 'Admin.Global') }}\">
              <label for=\"input-true-{{ product.id_product }}\">On</label>
              <span class=\"slide-button\"></span>
            </div>
      </td>
      {% if product.position is defined %}
          <td {% if activate_drag_and_drop %}class=\"placeholder\"{% endif %} style=\"cursor: pointer; cursor: hand;\">
              {% if activate_drag_and_drop %}
                  <big><big>⇅</big></big>
              {% endif %}
              <span class=\"position\">{{ product.position }}</span>
              <input type=\"hidden\" name=\"mass_edit_action_sorted_products[]\" value=\"{{ product.id_product }}\" />
              <input type=\"hidden\" name=\"mass_edit_action_sorted_positions[]\" value=\"{{ product.position }}\" />
          </td>
      {% endif %}
      <td class=\"text-right\">
          <div class=\"btn-group-action\">

                {% set buttons_action = [
                    {
                        \"href\": product.preview_url|default('#'),
                        \"target\": \"_blank\",
                        \"icon\": \"remove_red_eye\",
                        \"label\": \"Preview\"|trans({}, 'Admin.Actions')
                    }
                ] %}

                {% set buttons_action = buttons_action|merge([
                    {
                        \"onclick\": \"unitProductAction(this, 'duplicate');\",
                        \"icon\": \"content_copy\",
                        \"label\": \"Duplicate\"|trans({}, 'Admin.Actions')
                    }
                ]) %}

                {% set buttons_action = buttons_action|merge([
                    {
                        \"onclick\": \"unitProductAction(this, 'delete');\",
                        \"icon\": \"delete\",
                        \"label\": \"Delete\"|trans({}, 'Admin.Actions')
                    }
                ]) %}

                {% if productPageV2IsEnabled == true %}
                    {% set buttons_action = buttons_action|merge([
                        {
                          \"href\": product.url_v2|default('#'),
                          \"icon\": \"mode_edit\",
                          \"label\": \"Edit on experimental page\"|trans({}, 'Admin.Catalog.Feature')
                        }
                    ]) %}
                {% endif %}

                {% include '@Product/CatalogPage/Forms/form_edit_dropdown.html.twig' with {
                    'button_id': \"product_list_id_\" ~ product.id_product ~ \"_menu\",
                    'default_item': {
                        \"href\": product.url|default('#'),
                        \"icon\": \"mode_edit\"
                    },
                    'right': true,
                    'items': buttons_action
                } %}
            </div>
        </td>
    </tr>
    {% endblock %}
{% else %}
<tr><td colspan=\"11\">
        {{ \"There is no result for this search. Update your filters to view other products.\"|trans({}, 'Admin.Catalog.Notification') }}
    </td></tr>
{% endfor %}
", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Lists/list.html.twig");
    }
}
