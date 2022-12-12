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

/* @PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_general.html.twig */
class __TwigTemplate_90bcd5a2c83e20421f9ef961ad1d242e8a5d85bed61e815081954098dc6cdc53 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_preferences_general' => [$this, 'block_product_preferences_general'],
            'product_general_preferences_form_rest' => [$this, 'block_product_general_preferences_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_general.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_general.html.twig"));

        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_general.html.twig", 27)->unwrap();
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('product_preferences_general', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_product_preferences_general($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_preferences_general"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_preferences_general"));

        // line 30
        echo "<div class=\"row justify-content-center\">
  <div class=\"col\">
    <div class=\"card\" id=\"configuration_fieldset_products\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products (general)", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"form-group row\">
            ";
        // line 39
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catalog mode", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catalog mode disables the shopping cart on your store. Visitors will be able to browse your products catalog, but not buy them.", [], "Admin.Shopparameters.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "catalog_mode", []), 'errors');
        echo "
              ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "catalog_mode", []), 'widget');
        echo "
              <small class=\"form-text\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Have specific needs? Edit particular groups to let them see prices or not.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group row catalog-mode-option\">
            ";
        // line 47
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show prices", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display product prices when in catalog mode.", [], "Admin.Shopparameters.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "catalog_mode_with_prices", []), 'errors');
        echo "
              ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "catalog_mode_with_prices", []), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of days for which the product is considered 'new'", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
            </label>
            <div class=\"col-sm\">
              ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "new_days_number", []), 'errors');
        echo "
              ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "new_days_number", []), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group row\">
            ";
        // line 63
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max size of product summary", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set the maximum size of the summary of your product description (in characters).", [], "Admin.Shopparameters.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "short_description_limit", []), 'errors');
        echo "
              ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "short_description_limit", []), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group row\">
            ";
        // line 70
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity discounts based on", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How to calculate quantity discounts.", [], "Admin.Shopparameters.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "quantity_discount", []), 'errors');
        echo "
              ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "quantity_discount", []), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group row\">
            ";
        // line 77
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Force update of friendly URL", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When active, friendly URL will be updated on every save.", [], "Admin.Shopparameters.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "force_friendly_url", []), 'errors');
        echo "
              ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "force_friendly_url", []), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group row\">
            ";
        // line 84
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default activation status", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When active, new products will be activated by default during creation.", [], "Admin.Shopparameters.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "default_status", []), 'errors');
        echo "
              ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "default_status", []), 'widget');
        echo "
            </div>
          </div>

          ";
        // line 91
        $this->displayBlock('product_general_preferences_form_rest', $context, $blocks);
        // line 94
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-general-save-button\">";
        // line 98
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

    // line 91
    public function block_product_general_preferences_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_general_preferences_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_general_preferences_form_rest"));

        // line 92
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generalForm"] ?? $this->getContext($context, "generalForm")), 'rest');
        echo "
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 92,  221 => 91,  204 => 98,  198 => 94,  196 => 91,  189 => 87,  185 => 86,  180 => 84,  173 => 80,  169 => 79,  164 => 77,  157 => 73,  153 => 72,  148 => 70,  141 => 66,  137 => 65,  132 => 63,  125 => 59,  121 => 58,  115 => 55,  107 => 50,  103 => 49,  98 => 47,  91 => 43,  87 => 42,  83 => 41,  78 => 39,  70 => 34,  64 => 30,  46 => 29,  43 => 28,  41 => 27,  38 => 25,);
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

{% block product_preferences_general %}
<div class=\"row justify-content-center\">
  <div class=\"col\">
    <div class=\"card\" id=\"configuration_fieldset_products\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i> {{ 'Products (general)'|trans }}
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"form-group row\">
            {{ ps.label_with_help(('Catalog mode'|trans), ('Catalog mode disables the shopping cart on your store. Visitors will be able to browse your products catalog, but not buy them.'|trans({}, 'Admin.Shopparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(generalForm.catalog_mode) }}
              {{ form_widget(generalForm.catalog_mode) }}
              <small class=\"form-text\">{{ 'Have specific needs? Edit particular groups to let them see prices or not.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
            </div>
          </div>
          <div class=\"form-group row catalog-mode-option\">
            {{ ps.label_with_help(('Show prices'|trans), ('Display product prices when in catalog mode.'|trans({}, 'Admin.Shopparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(generalForm.catalog_mode_with_prices) }}
              {{ form_widget(generalForm.catalog_mode_with_prices) }}
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Number of days for which the product is considered \\'new\\''|trans }}
            </label>
            <div class=\"col-sm\">
              {{ form_errors(generalForm.new_days_number) }}
              {{ form_widget(generalForm.new_days_number) }}
            </div>
          </div>
          <div class=\"form-group row\">
            {{ ps.label_with_help(('Max size of product summary'|trans), ('Set the maximum size of the summary of your product description (in characters).'|trans({}, 'Admin.Shopparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(generalForm.short_description_limit) }}
              {{ form_widget(generalForm.short_description_limit) }}
            </div>
          </div>
          <div class=\"form-group row\">
            {{ ps.label_with_help(('Quantity discounts based on'|trans), ('How to calculate quantity discounts.'|trans({}, 'Admin.Shopparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(generalForm.quantity_discount) }}
              {{ form_widget(generalForm.quantity_discount) }}
            </div>
          </div>
          <div class=\"form-group row\">
            {{ ps.label_with_help(('Force update of friendly URL'|trans), ('When active, friendly URL will be updated on every save.'|trans({}, 'Admin.Shopparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(generalForm.force_friendly_url) }}
              {{ form_widget(generalForm.force_friendly_url) }}
            </div>
          </div>
          <div class=\"form-group row\">
            {{ ps.label_with_help(('Default activation status'|trans), ('When active, new products will be activated by default during creation.'|trans({}, 'Admin.Shopparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(generalForm.default_status) }}
              {{ form_widget(generalForm.default_status) }}
            </div>
          </div>

          {% block product_general_preferences_form_rest %}
            {{ form_rest(generalForm) }}
          {% endblock %}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-general-save-button\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_general.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/Blocks/product_preferences_general.html.twig");
    }
}
