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

/* @PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig */
class __TwigTemplate_88f71b64e8a65586c4ca882af241b3211a5bccbeb7247d75f36237086c879069 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_preferences_stock' => [$this, 'block_product_preferences_stock'],
            'product_stock_preferences_form_rest' => [$this, 'block_product_stock_preferences_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig"));

        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig", 27)->unwrap();
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('product_preferences_stock', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_product_preferences_stock($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_preferences_stock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_preferences_stock"));

        // line 30
        echo "<div class=\"row justify-content-center\">
  <div class=\"col\">
    <div class=\"card\" id=\"configuration_fieldset_stock\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">shop</i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products stock", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"form-group row\">
            ";
        // line 39
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow ordering of out-of-stock products", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("By default, the \"%add_to_cart_label%\" button is hidden when a product is unavailable. You can choose to have it displayed in all cases.", ["%add_to_cart_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add to cart", [], "Shop.Theme.Actions")], "Admin.Shopparameters.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "allow_ordering_oos", []), 'errors');
        echo "
              ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "allow_ordering_oos", []), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable stock management", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
            </label>
            <div class=\"col-sm\">
              ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "stock_management", []), 'errors');
        echo "
              ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "stock_management", []), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Label of in-stock products", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
            </label>
            <div class=\"col-sm\">
              ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "stock_management", []), 'errors');
        echo "
              ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "in_stock_label", []), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Label of out-of-stock products with allowed backorders", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
            </label>
            <div class=\"col-sm\">
              ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_allowed_backorders", []), 'errors');
        echo "
              ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_allowed_backorders", []), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Label of out-of-stock products with denied backorders", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
            </label>
            <div class=\"col-sm\">
              ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_denied_backorders", []), 'errors');
        echo "
              ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_denied_backorders", []), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group row\">
            ";
        // line 82
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery time of in-stock products", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advised for European merchants to be legally compliant (eg: Delivered within 3-4 days)", [], "Admin.Shopparameters.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "delivery_time", []), 'errors');
        echo "
              ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "delivery_time", []), 'widget');
        echo "
              <small class=\"form-text\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave empty to disable", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group row\">
            ";
        // line 90
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery time of out-of-stock products with allowed backorders", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advised for European merchants to be legally compliant (eg: Delivered within 5-7 days)", [], "Admin.Shopparameters.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_delivery_time", []), 'errors');
        echo "
              ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_delivery_time", []), 'widget');
        echo "
              <small class=\"form-text\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave empty to disable", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group row\">
            ";
        // line 98
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default pack stock management", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When selling packs of products, how do you want your stock to be calculated?", [], "Admin.Shopparameters.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "pack_stock_management", []), 'errors');
        echo "
              ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "pack_stock_management", []), 'widget');
        echo "
            </div>
          </div>
          ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? $this->getContext($context, "stockForm")), "oos_show_label_listing_pages", []), 'row');
        echo "
          ";
        // line 105
        $this->displayBlock('product_stock_preferences_form_rest', $context, $blocks);
        // line 108
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-stock-save-button\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_product_stock_preferences_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_stock_preferences_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_stock_preferences_form_rest"));

        // line 106
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["stockForm"] ?? $this->getContext($context, "stockForm")), 'rest');
        echo "
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 106,  250 => 105,  233 => 112,  227 => 108,  225 => 105,  221 => 104,  215 => 101,  211 => 100,  206 => 98,  199 => 94,  195 => 93,  191 => 92,  186 => 90,  179 => 86,  175 => 85,  171 => 84,  166 => 82,  159 => 78,  155 => 77,  149 => 74,  141 => 69,  137 => 68,  131 => 65,  123 => 60,  119 => 59,  113 => 56,  105 => 51,  101 => 50,  95 => 47,  87 => 42,  83 => 41,  78 => 39,  70 => 34,  64 => 30,  46 => 29,  43 => 28,  41 => 27,  38 => 25,);
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

{% trans_default_domain \"Admin.Shopparameters.Feature\" %}
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{% block product_preferences_stock %}
<div class=\"row justify-content-center\">
  <div class=\"col\">
    <div class=\"card\" id=\"configuration_fieldset_stock\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">shop</i> {{ 'Products stock'|trans }}
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"form-group row\">
            {{ ps.label_with_help(('Allow ordering of out-of-stock products'|trans), ('By default, the \"%add_to_cart_label%\" button is hidden when a product is unavailable. You can choose to have it displayed in all cases.'|trans({'%add_to_cart_label%': 'Add to cart'|trans({}, 'Shop.Theme.Actions')}, 'Admin.Shopparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(stockForm.allow_ordering_oos) }}
              {{ form_widget(stockForm.allow_ordering_oos) }}
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Enable stock management'|trans }}
            </label>
            <div class=\"col-sm\">
              {{ form_errors(stockForm.stock_management) }}
              {{ form_widget(stockForm.stock_management) }}
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Label of in-stock products'|trans }}
            </label>
            <div class=\"col-sm\">
              {{ form_errors(stockForm.stock_management) }}
              {{ form_widget(stockForm.in_stock_label) }}
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Label of out-of-stock products with allowed backorders'|trans }}
            </label>
            <div class=\"col-sm\">
              {{ form_errors(stockForm.oos_allowed_backorders) }}
              {{ form_widget(stockForm.oos_allowed_backorders) }}
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Label of out-of-stock products with denied backorders'|trans }}
            </label>
            <div class=\"col-sm\">
              {{ form_errors(stockForm.oos_denied_backorders) }}
              {{ form_widget(stockForm.oos_denied_backorders) }}
            </div>
          </div>
          <div class=\"form-group row\">
            {{ ps.label_with_help(('Delivery time of in-stock products'|trans), ('Advised for European merchants to be legally compliant (eg: Delivered within 3-4 days)'|trans({}, 'Admin.Shopparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(stockForm.delivery_time) }}
              {{ form_widget(stockForm.delivery_time) }}
              <small class=\"form-text\">{{ 'Leave empty to disable'|trans }}</small>
            </div>
          </div>
          <div class=\"form-group row\">
            {{ ps.label_with_help(('Delivery time of out-of-stock products with allowed backorders'|trans), ('Advised for European merchants to be legally compliant (eg: Delivered within 5-7 days)'|trans({}, 'Admin.Shopparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(stockForm.oos_delivery_time) }}
              {{ form_widget(stockForm.oos_delivery_time) }}
              <small class=\"form-text\">{{ 'Leave empty to disable'|trans }}</small>
            </div>
          </div>
          <div class=\"form-group row\">
            {{ ps.label_with_help(('Default pack stock management'|trans), ('When selling packs of products, how do you want your stock to be calculated?'|trans({}, 'Admin.Shopparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(stockForm.pack_stock_management) }}
              {{ form_widget(stockForm.pack_stock_management) }}
            </div>
          </div>
          {{ form_row(stockForm.oos_show_label_listing_pages) }}
          {% block product_stock_preferences_form_rest %}
            {{ form_rest(stockForm) }}
          {% endblock %}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-stock-save-button\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig");
    }
}
