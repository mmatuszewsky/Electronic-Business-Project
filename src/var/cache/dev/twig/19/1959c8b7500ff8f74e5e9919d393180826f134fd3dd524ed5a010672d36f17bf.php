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

/* @Product/ProductPage/Forms/form_combinations.html.twig */
class __TwigTemplate_6a09f3368cec7d181f523095f999e8b1d30988ffba69df3f54fad947e62168ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_combinations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_combinations.html.twig"));

        // line 25
        echo "<div class=\"row\" id=\"combinations\">
  <div class=\"col-md-9\">
    <h2>
      ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage your product combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      <span
        class=\"help-box\"
        data-toggle=\"popover\"
        data-content=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. To create a combination, you need to create your product attributes first. Go to Catalog > Attributes & Features for this!", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
      ></span>
    </h2>
    <div id=\"attributes-generator\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 38
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To add combinations, you first need to create proper attributes and values in [1]%attributes_and_features_label%[/1]. <br> When done, you may enter the wanted attributes (like \"size\" or \"color\") and their respective values (\"XS\", \"red\", \"all\", etc.) in the field below; or simply select them from the right column. Then click on \"%generate_label%\": it will automatically create all the combinations for you!", ["%attributes_and_features_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attributes & Features", [], "Admin.Navigation.Menu"), "%generate_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate", [], "Admin.Actions")], "Admin.Catalog.Help"), ["[1]" => (("<a class=\"alert-link\" href=" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminAttributesGroups")) . " target=\"_blank\">"), "[/1]" => "</a>"]);
        echo "
        </p>
      </div>
      <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9\">
          <fieldset class=\"form-group\">
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attributes", []), 'errors');
        echo "
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attributes", []), 'widget');
        echo "
          </fieldset>
        </div>
        <div class=\"col-xl-2 col-lg-3\">
          <button class=\"btn btn-outline-primary\" id=\"create-combinations\">
            Generate
          </button>
        </div>
      </div>
    </div>

    <div id=\"combinations-bulk-form\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <p
            class=\"form-control bulk-action\"
            data-toggle=\"collapse\"
            href=\"#bulk-combinations-container\"
            aria-expanded=\"false\"
            aria-controls=\"bulk-combinations-container\"
          >
            ";
        // line 67
        echo "            <strong>";
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk actions ([1]/[2] combination(s) selected)", [], "Admin.Catalog.Feature"), ["[1]" => "<span class=\"js-bulk-combinations\">0</span>", "[2]" => (("<span id=\"js-bulk-combinations-total\">" . ($context["combinations_count"] ?? $this->getContext($context, "combinations_count"))) . "</span>")]);
        echo "</strong>
            <i class=\"material-icons float-right\">keyboard_arrow_down</i>
          </p>
        </div>
        <div class=\"col-md-12 collapse js-collapse\" id=\"bulk-combinations-container\">
          <div class=\"border p-3\">
            ";
        // line 73
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_combinations_bulk.html.twig", ["form" => ($context["form_combination_bulk"] ?? $this->getContext($context, "form_combination_bulk"))]);
        echo "
          </div>
        </div>
      </div>
    </div>

    <div class=\"combinations-list\">
      <table class=\"table\">
        <thead class=\"thead-default\" id=\"combinations_thead\" ";
        // line 81
        if ( !($context["has_combinations"] ?? $this->getContext($context, "has_combinations"))) {
            echo "style=\"display: none;\"";
        }
        echo ">
          <tr>
            <th>
              <input type=\"checkbox\" id=\"toggle-all-combinations\" >
            </th>
            <th></th>
            <th>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
            <th>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Impact on price (tax excl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
            <th>";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final price (tax excl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
            ";
        // line 90
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 91
            echo "                <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
            ";
        }
        // line 93
        echo "            <th colspan=\"3\" class=\"text-sm-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default combination", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
          </tr>
        </thead>
        <tbody class=\"js-combinations-list panel-group accordion\" id=\"accordion_combinations\" data-action-delete-all=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_all_attributes", ["idProduct" => 1]);
        echo "\" data-weight-unit=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_WEIGHT_UNIT"), "html", null, true);
        echo "\" data-action-refresh-images=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_get_form_images_combination", ["idProduct" => 1]);
        echo "\"  data-id-product= ";
        echo twig_escape_filter($this->env, ($context["id_product"] ?? $this->getContext($context, "id_product")), "html", null, true);
        echo " data-ids-product-attribute=\"";
        echo twig_escape_filter($this->env, ($context["ids_product_attribute"] ?? $this->getContext($context, "ids_product_attribute")), "html", null, true);
        echo "\" data-combinations-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_combination_generate_form", ["combinationIds" => ":numbers"]);
        echo "\">
          ";
        // line 97
        if (($context["has_combinations"] ?? $this->getContext($context, "has_combinations"))) {
            // line 98
            echo "            <tr class=\"combination loading timeline-wrapper\" id=\"loading-attribute\">
              <td class=\"timeline-item\" width=\"1%\">
              </td>
              <td class=\"timeline-item img\">
                <div class=\"animated-background\"></div>
              </td>
              <td>
                <div class=\"animated-background\"></div>
              </td>
              <td class=\"attribute-price\">
                <div class=\"animated-background\"></div>
              </td>
              <td class=\"attribute-finalprice\">
                <div class=\"animated-background\"></div>
              </td>
              ";
            // line 113
            if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
                // line 114
                echo "                <td class=\"attribute-quantity\">
                  <div class=\"animated-background\"></div>
                </td>
              ";
            }
            // line 118
            echo "              <td colspan=\"6\"></td>
            </tr>
          ";
        }
        // line 121
        echo "        </tbody>
      </table>
    </div>
  </div>

  <div id=\"attributes-list\" class=\"col-md-3\">
    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? $this->getContext($context, "attribute_groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
            // line 128
            echo "      <div class=\"attribute-group\">
        <a
          class=\"attribute-group-name ";
            // line 130
            if ((($this->getAttribute($context["loop"], "index", []) > 3) || ($context["has_combinations"] ?? $this->getContext($context, "has_combinations")))) {
                echo " collapsed ";
            }
            echo "\"
          data-toggle=\"collapse\"
          href=\"#attribute-group-";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["attribute_group"], "id", []), "html", null, true);
            echo "\"
          aria-expanded=\"";
            // line 133
            if ((($this->getAttribute($context["loop"], "index", []) <= 3) ||  !($context["has_combinations"] ?? $this->getContext($context, "has_combinations")))) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\"
        >
          ";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["attribute_group"], "name", []), "html", null, true);
            echo "
        </a>
        <div class=\"collapse ";
            // line 137
            if ((($this->getAttribute($context["loop"], "index", []) <= 3) &&  !($context["has_combinations"] ?? $this->getContext($context, "has_combinations")))) {
                echo " show ";
            }
            echo " attributes \" id=\"attribute-group-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["attribute_group"], "id", []), "html", null, true);
            echo "\">
          <div class=\"attributes-overflow ";
            // line 138
            if ((twig_length_filter($this->env, $this->getAttribute($context["attribute_group"], "attributes", [])) > 7)) {
                echo " two-columns ";
            }
            echo "\">
            ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attributes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 140
                echo "              <div class=\"attribute\">
                <input
                  class=\"js-attribute-checkbox\"
                  id=\"attribute-";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "id", []), "html", null, true);
                echo "\"
                  data-label=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute_group"], "name", []), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", []), "html", null, true);
                echo "\"
                  data-value=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "id", []), "html", null, true);
                echo "\"
                  data-group-id=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute_group"], "id", []), "html", null, true);
                echo "\"
                  type=\"checkbox\"
                >
                <label class=\"attribute-label\" for=\"attribute-";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "id", []), "html", null, true);
                echo "\">
                  <span
                    class=\"pretty-checkbox ";
                // line 151
                if ((twig_test_empty($this->getAttribute($context["attribute"], "color", [])) && twig_test_empty($this->getAttribute($context["attribute"], "texture", [])))) {
                    echo " not-color ";
                }
                echo "\"
                    ";
                // line 152
                if ( !twig_test_empty($this->getAttribute($context["attribute"], "texture", []))) {
                    echo " style=\"content: url(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "texture", []), "html", null, true);
                    echo ")\"
                    ";
                } elseif ( !twig_test_empty($this->getAttribute(                // line 153
$context["attribute"], "color", []))) {
                    echo " style=\"background-color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "color", []), "html", null, true);
                    echo "\"
                    ";
                }
                // line 155
                echo "                  >
                  </span>
                  ";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", []), "html", null, true);
                echo "
                </label>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "          </div>
        </div>
      </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "  </div>
</div>

<div class=\"form-group\">
  <div class=\"row\">

    <div class=\"col-md-12\">
      <h2>";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Availability preferences", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
    </div>
    ";
        // line 174
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 175
            echo "      <div class=\"col-md-12\">
        <label class=\"form-control-label\">";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Behavior when out of stock", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</label>
        ";
            // line 177
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "out_of_stock", []), 'errors');
            echo "
        ";
            // line 178
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "out_of_stock", []), 'widget');
            echo "
      </div>

      <div class=\"col-md-4\">
        <label class=\"form-control-label\">";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_now", []), "vars", []), "label", []), "html", null, true);
            echo "</label>
        ";
            // line 183
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_now", []), 'errors');
            echo "
        ";
            // line 184
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_now", []), 'widget');
            echo "
      </div>

      <div class=\"col-md-4 \">
        <label class=\"form-control-label\">";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_later", []), "vars", []), "label", []), "html", null, true);
            echo "</label>
        ";
            // line 189
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_later", []), 'errors');
            echo "
        ";
            // line 190
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_later", []), 'widget');
            echo "
      </div>
    ";
        } else {
            // line 193
            echo "      <div class=\"col-md-12\">
        <h3>";
            // line 194
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock management is disabled", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h3>
      </div>
    ";
        }
        // line 197
        echo "
    ";
        // line 198
        if ( !($context["has_combinations"] ?? $this->getContext($context, "has_combinations"))) {
            // line 199
            echo "    <div class=\"col-md-4 \">
      <label class=\"form-control-label\">";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_date", []), "vars", []), "label", []), "html", null, true);
            echo "</label>
      ";
            // line 201
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_date", []), 'errors');
            echo "
      ";
            // line 202
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_date", []), 'widget');
            echo "
    </div>
    ";
        }
        // line 205
        echo "
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_combinations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 205,  439 => 202,  435 => 201,  431 => 200,  428 => 199,  426 => 198,  423 => 197,  417 => 194,  414 => 193,  408 => 190,  404 => 189,  400 => 188,  393 => 184,  389 => 183,  385 => 182,  378 => 178,  374 => 177,  370 => 176,  367 => 175,  365 => 174,  360 => 172,  351 => 165,  334 => 161,  324 => 157,  320 => 155,  313 => 153,  307 => 152,  301 => 151,  296 => 149,  290 => 146,  286 => 145,  280 => 144,  276 => 143,  271 => 140,  267 => 139,  261 => 138,  253 => 137,  248 => 135,  239 => 133,  235 => 132,  228 => 130,  224 => 128,  207 => 127,  199 => 121,  194 => 118,  188 => 114,  186 => 113,  169 => 98,  167 => 97,  153 => 96,  146 => 93,  140 => 91,  138 => 90,  134 => 89,  130 => 88,  126 => 87,  115 => 81,  104 => 73,  94 => 67,  70 => 45,  66 => 44,  57 => 38,  48 => 32,  41 => 28,  36 => 25,);
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
<div class=\"row\" id=\"combinations\">
  <div class=\"col-md-9\">
    <h2>
      {{ 'Manage your product combinations'|trans({}, 'Admin.Catalog.Feature') }}
      <span
        class=\"help-box\"
        data-toggle=\"popover\"
        data-content=\"{{ \"Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. To create a combination, you need to create your product attributes first. Go to Catalog > Attributes & Features for this!\"|trans({}, 'Admin.Catalog.Help') }}\"
      ></span>
    </h2>
    <div id=\"attributes-generator\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          {{ 'To add combinations, you first need to create proper attributes and values in [1]%attributes_and_features_label%[/1]. <br> When done, you may enter the wanted attributes (like \"size\" or \"color\") and their respective values (\"XS\", \"red\", \"all\", etc.) in the field below; or simply select them from the right column. Then click on \"%generate_label%\": it will automatically create all the combinations for you!'|trans({'%attributes_and_features_label%': 'Attributes & Features'|trans({}, 'Admin.Navigation.Menu'), '%generate_label%': 'Generate'|trans({}, 'Admin.Actions')}, 'Admin.Catalog.Help')|replace({'[1]': '<a class=\"alert-link\" href=' ~ getAdminLink(\"AdminAttributesGroups\") ~ ' target=\"_blank\">', '[/1]': '</a>'})|raw }}
        </p>
      </div>
      <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9\">
          <fieldset class=\"form-group\">
            {{ form_errors(form.attributes) }}
            {{ form_widget(form.attributes) }}
          </fieldset>
        </div>
        <div class=\"col-xl-2 col-lg-3\">
          <button class=\"btn btn-outline-primary\" id=\"create-combinations\">
            Generate
          </button>
        </div>
      </div>
    </div>

    <div id=\"combinations-bulk-form\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <p
            class=\"form-control bulk-action\"
            data-toggle=\"collapse\"
            href=\"#bulk-combinations-container\"
            aria-expanded=\"false\"
            aria-controls=\"bulk-combinations-container\"
          >
            {# First tag [1] is number of combinations selected. Second tag [2] is the total of combinations available. #}
            <strong>{{ 'Bulk actions ([1]/[2] combination(s) selected)'|trans({}, 'Admin.Catalog.Feature')|replace({ '[1]': '<span class=\"js-bulk-combinations\">0</span>', '[2]': '<span id=\"js-bulk-combinations-total\">' ~ combinations_count ~ '</span>' })|raw }}</strong>
            <i class=\"material-icons float-right\">keyboard_arrow_down</i>
          </p>
        </div>
        <div class=\"col-md-12 collapse js-collapse\" id=\"bulk-combinations-container\">
          <div class=\"border p-3\">
            {{ include('@Product/ProductPage/Forms/form_combinations_bulk.html.twig', { 'form': form_combination_bulk }) }}
          </div>
        </div>
      </div>
    </div>

    <div class=\"combinations-list\">
      <table class=\"table\">
        <thead class=\"thead-default\" id=\"combinations_thead\" {% if not has_combinations %}style=\"display: none;\"{% endif %}>
          <tr>
            <th>
              <input type=\"checkbox\" id=\"toggle-all-combinations\" >
            </th>
            <th></th>
            <th>{{ 'Combinations'|trans({}, 'Admin.Catalog.Feature') }}</th>
            <th>{{ 'Impact on price (tax excl.)'|trans({}, 'Admin.Catalog.Feature') }}</th>
            <th>{{ 'Final price (tax excl.)'|trans({}, 'Admin.Catalog.Feature') }}</th>
            {% if configuration('PS_STOCK_MANAGEMENT') %}
                <th>{{ 'Quantity'|trans({}, 'Admin.Catalog.Feature') }}</th>
            {% endif %}
            <th colspan=\"3\" class=\"text-sm-right\">{{ 'Default combination'|trans({}, 'Admin.Catalog.Feature') }}</th>
          </tr>
        </thead>
        <tbody class=\"js-combinations-list panel-group accordion\" id=\"accordion_combinations\" data-action-delete-all=\"{{ path('admin_delete_all_attributes', { 'idProduct': 1 }) }}\" data-weight-unit=\"{{ configuration('PS_WEIGHT_UNIT') }}\" data-action-refresh-images=\"{{ path('admin_get_form_images_combination', { 'idProduct': 1 }) }}\"  data-id-product= {{ id_product }} data-ids-product-attribute=\"{{ ids_product_attribute }}\" data-combinations-url=\"{{ path('admin_combination_generate_form', { 'combinationIds': ':numbers' }) }}\">
          {% if has_combinations %}
            <tr class=\"combination loading timeline-wrapper\" id=\"loading-attribute\">
              <td class=\"timeline-item\" width=\"1%\">
              </td>
              <td class=\"timeline-item img\">
                <div class=\"animated-background\"></div>
              </td>
              <td>
                <div class=\"animated-background\"></div>
              </td>
              <td class=\"attribute-price\">
                <div class=\"animated-background\"></div>
              </td>
              <td class=\"attribute-finalprice\">
                <div class=\"animated-background\"></div>
              </td>
              {% if configuration('PS_STOCK_MANAGEMENT') %}
                <td class=\"attribute-quantity\">
                  <div class=\"animated-background\"></div>
                </td>
              {% endif %}
              <td colspan=\"6\"></td>
            </tr>
          {% endif %}
        </tbody>
      </table>
    </div>
  </div>

  <div id=\"attributes-list\" class=\"col-md-3\">
    {% for attribute_group in attribute_groups %}
      <div class=\"attribute-group\">
        <a
          class=\"attribute-group-name {% if loop.index > 3 or has_combinations %} collapsed {% endif %}\"
          data-toggle=\"collapse\"
          href=\"#attribute-group-{{ attribute_group.id }}\"
          aria-expanded=\"{% if loop.index <= 3 or not has_combinations %}true{% else %}false{% endif %}\"
        >
          {{ attribute_group.name }}
        </a>
        <div class=\"collapse {% if loop.index <= 3 and not has_combinations %} show {% endif %} attributes \" id=\"attribute-group-{{ attribute_group.id }}\">
          <div class=\"attributes-overflow {% if attribute_group.attributes|length > 7 %} two-columns {% endif %}\">
            {% for attribute in attribute_group.attributes %}
              <div class=\"attribute\">
                <input
                  class=\"js-attribute-checkbox\"
                  id=\"attribute-{{ attribute.id }}\"
                  data-label=\"{{ attribute_group.name }} : {{ attribute.name }}\"
                  data-value=\"{{ attribute.id }}\"
                  data-group-id=\"{{ attribute_group.id }}\"
                  type=\"checkbox\"
                >
                <label class=\"attribute-label\" for=\"attribute-{{ attribute.id }}\">
                  <span
                    class=\"pretty-checkbox {% if attribute.color is empty and attribute.texture is empty %} not-color {% endif %}\"
                    {% if attribute.texture is not empty %} style=\"content: url({{ attribute.texture }})\"
                    {% elseif attribute.color is not empty %} style=\"background-color: {{ attribute.color }}\"
                    {% endif %}
                  >
                  </span>
                  {{ attribute.name }}
                </label>
              </div>
            {% endfor %}
          </div>
        </div>
      </div>
    {% endfor %}
  </div>
</div>

<div class=\"form-group\">
  <div class=\"row\">

    <div class=\"col-md-12\">
      <h2>{{ 'Availability preferences'|trans({}, 'Admin.Catalog.Feature') }}</h2>
    </div>
    {% if configuration('PS_STOCK_MANAGEMENT') %}
      <div class=\"col-md-12\">
        <label class=\"form-control-label\">{{ 'Behavior when out of stock'|trans({}, 'Admin.Catalog.Feature') }}</label>
        {{ form_errors(form.out_of_stock) }}
        {{ form_widget(form.out_of_stock) }}
      </div>

      <div class=\"col-md-4\">
        <label class=\"form-control-label\">{{ form.available_now.vars.label }}</label>
        {{ form_errors(form.available_now) }}
        {{ form_widget(form.available_now) }}
      </div>

      <div class=\"col-md-4 \">
        <label class=\"form-control-label\">{{ form.available_later.vars.label }}</label>
        {{ form_errors(form.available_later) }}
        {{ form_widget(form.available_later) }}
      </div>
    {% else %}
      <div class=\"col-md-12\">
        <h3>{{  'Stock management is disabled'|trans({}, 'Admin.Catalog.Feature') }}</h3>
      </div>
    {% endif %}

    {% if not has_combinations %}
    <div class=\"col-md-4 \">
      <label class=\"form-control-label\">{{ form.available_date.vars.label }}</label>
      {{ form_errors(form.available_date) }}
      {{ form_widget(form.available_date) }}
    </div>
    {% endif %}

  </div>
</div>
", "@Product/ProductPage/Forms/form_combinations.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_combinations.html.twig");
    }
}
