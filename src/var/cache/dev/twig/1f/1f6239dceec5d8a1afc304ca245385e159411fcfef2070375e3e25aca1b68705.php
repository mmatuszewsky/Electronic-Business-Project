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

/* @Product/CatalogPage/Forms/form_products.html.twig */
class __TwigTemplate_f0e1786d62d44b5994dc9882b29dd97612634b19c073ba37fcd2125a32b081ba extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_catalog_form_table' => [$this, 'block_product_catalog_form_table'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Forms/form_products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Forms/form_products.html.twig"));

        // line 25
        echo "<form
  name=\"product_catalog_list\"
  id=\"product_catalog_list\"
  method=\"post\"
  action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", ["limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))]), "html", null, true);
        echo "\"
  orderingurl=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", ["offset" => 0, "limit" => 300, "orderBy" => "position_ordering", "sortOrder" => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))]), "html", null, true);
        echo "\"
  newproducturl=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("filter_category", $context)) ? (_twig_default_filter(($context["filter_category"] ?? $this->getContext($context, "filter_category")), "")) : ("")), "html", null, true);
        echo "\" />
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-12\">
      ";
        // line 41
        $this->displayBlock('product_catalog_form_table', $context, $blocks);
        // line 62
        echo "    </div>
  </div>

  ";
        // line 65
        if ((($context["product_count_filtered"] ?? $this->getContext($context, "product_count_filtered")) > 20)) {
            // line 66
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">

        ";
            // line 69
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:pagination", ["limit" =>             // line 70
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>             // line 71
($context["offset"] ?? $this->getContext($context, "offset")), "total" =>             // line 72
($context["product_count_filtered"] ?? $this->getContext($context, "product_count_filtered")), "caller_route" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 73
($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route"], "method"), "caller_parameters" =>             // line 74
($context["pagination_parameters"] ?? $this->getContext($context, "pagination_parameters")), "limit_choices" =>             // line 75
($context["pagination_limit_choices"] ?? $this->getContext($context, "pagination_limit_choices"))]));
            // line 76
            echo "
      </div>
    </div>
  ";
        }
        // line 80
        echo "</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_product_catalog_form_table($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table"));

        // line 42
        echo "        ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Lists/products_table.html.twig", ["limit" =>         // line 43
($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" =>         // line 44
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "offset" =>         // line 45
($context["offset"] ?? $this->getContext($context, "offset")), "sortOrder" =>         // line 46
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "filter_category" =>         // line 47
($context["filter_category"] ?? $this->getContext($context, "filter_category")), "filter_column_id_product" =>         // line 48
($context["filter_column_id_product"] ?? $this->getContext($context, "filter_column_id_product")), "filter_column_name" =>         // line 49
($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "filter_column_reference" =>         // line 50
($context["filter_column_reference"] ?? $this->getContext($context, "filter_column_reference")), "filter_column_name_category" =>         // line 51
($context["filter_column_name_category"] ?? $this->getContext($context, "filter_column_name_category")), "filter_column_price" =>         // line 52
($context["filter_column_price"] ?? $this->getContext($context, "filter_column_price")), "filter_column_sav_quantity" =>         // line 53
($context["filter_column_sav_quantity"] ?? $this->getContext($context, "filter_column_sav_quantity")), "filter_column_active" =>         // line 54
($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")), "has_category_filter" =>         // line 55
($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")), "activate_drag_and_drop" =>         // line 56
($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop")), "products" =>         // line 57
($context["products"] ?? $this->getContext($context, "products")), "last_sql" =>         // line 58
($context["last_sql"] ?? $this->getContext($context, "last_sql"))]);
        // line 60
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Forms/form_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 60,  132 => 58,  131 => 57,  130 => 56,  129 => 55,  128 => 54,  127 => 53,  126 => 52,  125 => 51,  124 => 50,  123 => 49,  122 => 48,  121 => 47,  120 => 46,  119 => 45,  118 => 44,  117 => 43,  115 => 42,  106 => 41,  95 => 80,  89 => 76,  87 => 75,  86 => 74,  85 => 73,  84 => 72,  83 => 71,  82 => 70,  81 => 69,  76 => 66,  74 => 65,  69 => 62,  67 => 41,  58 => 35,  51 => 31,  47 => 30,  43 => 29,  37 => 25,);
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
<form
  name=\"product_catalog_list\"
  id=\"product_catalog_list\"
  method=\"post\"
  action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
  orderingurl=\"{{ path('admin_product_catalog', {offset: 0, 'limit': 300, 'orderBy': 'position_ordering', 'sortOrder': sortOrder}) }}\"
  newproducturl=\"{{ path('admin_product_new') }}\"
>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-12\">
      {% block product_catalog_form_table %}
        {{ include('@Product/CatalogPage/Lists/products_table.html.twig', {
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
          'filter_column_active':filter_column_active,
          'has_category_filter': has_category_filter,
          'activate_drag_and_drop': activate_drag_and_drop,
          'products': products,
          'last_sql': last_sql
          })
        }}
      {% endblock %}
    </div>
  </div>

  {% if product_count_filtered > 20 %}
    <div class=\"row\">
      <div class=\"col-md-12\">

        {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination', {
          'limit': limit,
          'offset': offset,
          'total': product_count_filtered,
          'caller_route': app.request.attributes.get('_route'),
          'caller_parameters': pagination_parameters,
          'limit_choices': pagination_limit_choices
          })) }}
      </div>
    </div>
  {% endif %}
</form>
", "@Product/CatalogPage/Forms/form_products.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Forms/form_products.html.twig");
    }
}
