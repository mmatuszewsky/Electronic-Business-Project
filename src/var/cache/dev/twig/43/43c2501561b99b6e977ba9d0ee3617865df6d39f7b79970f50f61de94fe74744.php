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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig */
class __TwigTemplate_7b45400af023c78842db6eb8c9b476ed07edecde398235bd9ba5cab974cd6ed6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'meta_form_rest' => [$this, 'block_meta_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["metaForm"] ?? $this->getContext($context, "metaForm")), 'form_start');
        echo "
  <div class=\"card\">
    <div class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta tags", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </div>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["metaForm"] ?? $this->getContext($context, "metaForm")), 'errors');
        echo "

        ";
        // line 37
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["metaForm"] ?? $this->getContext($context, "metaForm")), "page_name", []), ["attr" => ["class" => "js-meta-page-name", "data-toggle" => "select2", "data-minimumResultsForSearch" => "7"]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Page name", [], "Admin.Shopparameters.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name of the related page.", [], "Admin.Shopparameters.Help")]);
        // line 46
        echo "

        ";
        // line 48
        ob_start();
        // line 49
        echo "          ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title of this page.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 50
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Shopparameters.Help") . "  <>={}"), "html", null, true);
        echo "
        ";
        $context["pageTitleHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
        ";
        // line 53
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["metaForm"] ?? $this->getContext($context, "metaForm")), "page_title", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Page title", [], "Admin.Shopparameters.Feature"), "help" =>         // line 55
($context["pageTitleHelpLabel"] ?? $this->getContext($context, "pageTitleHelpLabel"))]);
        // line 56
        echo "

        ";
        // line 58
        ob_start();
        // line 59
        echo "          ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A short description of your shop.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 60
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Shopparameters.Help") . " <>={}"), "html", null, true);
        echo "
        ";
        $context["metaDescriptionHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "
        ";
        // line 63
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["metaForm"] ?? $this->getContext($context, "metaForm")), "meta_description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta description", [], "Admin.Global"), "help" =>         // line 65
($context["metaDescriptionHelpLabel"] ?? $this->getContext($context, "metaDescriptionHelpLabel"))]);
        // line 66
        echo "

        ";
        // line 68
        ob_start();
        // line 69
        echo "          ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of keywords for search engines.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To add tags, click in the field, write something, and then press the \"Enter\" key.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 71
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Shopparameters.Help") . " <>={}"), "html", null, true);
        echo "
        ";
        $context["metaKeywordsHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "
        ";
        // line 74
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["metaForm"] ?? $this->getContext($context, "metaForm")), "meta_keywords", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta keywords", [], "Admin.Global"), "help" =>         // line 76
($context["metaKeywordsHelpLabel"] ?? $this->getContext($context, "metaKeywordsHelpLabel"))]);
        // line 77
        echo "

        ";
        // line 79
        ob_start();
        // line 80
        echo "          ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("For instance, \"contacts\" for http://example.com/shop/contacts to redirect to http://example.com/shop/contact-form.php", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Only letters and hyphens are allowed.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
        ";
        $context["rewriteUrlHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "
        ";
        // line 84
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["metaForm"] ?? $this->getContext($context, "metaForm")), "url_rewrite", []), ["attr" => ["class" => "js-url-rewrite"]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Rewritten URL", [], "Admin.Shopparameters.Feature"), "help" =>         // line 86
($context["rewriteUrlHelpLabel"] ?? $this->getContext($context, "rewriteUrlHelpLabel"))]);
        // line 87
        echo "

        ";
        // line 89
        $this->displayBlock('meta_form_rest', $context, $blocks);
        // line 92
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_metas_index");
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
      </div>
      <div class=\"d-inline-flex float-right\">
        <button class=\"btn btn-primary\" id=\"save-button\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["metaForm"] ?? $this->getContext($context, "metaForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 89
    public function block_meta_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_form_rest"));

        // line 90
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["metaForm"] ?? $this->getContext($context, "metaForm")), 'rest');
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 90,  199 => 89,  187 => 105,  180 => 101,  173 => 97,  169 => 96,  163 => 92,  161 => 89,  157 => 87,  155 => 86,  154 => 84,  151 => 83,  146 => 81,  141 => 80,  139 => 79,  135 => 77,  133 => 76,  132 => 74,  129 => 73,  124 => 71,  120 => 70,  115 => 69,  113 => 68,  109 => 66,  107 => 65,  106 => 63,  103 => 62,  98 => 60,  93 => 59,  91 => 58,  87 => 56,  85 => 55,  84 => 53,  81 => 52,  76 => 50,  71 => 49,  69 => 48,  65 => 46,  63 => 37,  58 => 35,  51 => 31,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{{ form_start(metaForm) }}
  <div class=\"card\">
    <div class=\"card-header\">
      {{ 'Meta tags'|trans({}, 'Admin.Shopparameters.Feature') }}
    </div>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        {{ form_errors(metaForm) }}

        {{ ps.form_group_row(metaForm.page_name, {
          'attr': {
            'class': 'js-meta-page-name',
            'data-toggle': 'select2',
            'data-minimumResultsForSearch': '7'
          }
        }, {
          'label': 'Page name'|trans({}, 'Admin.Shopparameters.Feature'),
          'help': 'Name of the related page.'|trans({}, 'Admin.Shopparameters.Help')
        }) }}

        {% set pageTitleHelpLabel %}
          {{ 'Title of this page.'|trans({}, 'Admin.Shopparameters.Help') }}
          {{ 'Invalid characters:'|trans({}, 'Admin.Shopparameters.Help') ~ '  <>={}'}}
        {% endset %}

        {{ ps.form_group_row(metaForm.page_title, {}, {
          'label': 'Page title'|trans({}, 'Admin.Shopparameters.Feature'),
          'help': pageTitleHelpLabel
        }) }}

        {% set metaDescriptionHelpLabel %}
          {{ 'A short description of your shop.'|trans({}, 'Admin.Shopparameters.Help') }}
          {{ 'Invalid characters:'|trans({}, 'Admin.Shopparameters.Help') ~ ' <>={}' }}
        {% endset %}

        {{ ps.form_group_row(metaForm.meta_description, {}, {
          'label': 'Meta description'|trans({}, 'Admin.Global'),
          'help': metaDescriptionHelpLabel
        }) }}

        {% set metaKeywordsHelpLabel %}
          {{ 'List of keywords for search engines.'|trans({}, 'Admin.Shopparameters.Help') }}
          {{ 'To add tags, click in the field, write something, and then press the \"Enter\" key.'|trans({}, 'Admin.Shopparameters.Help') }}
          {{ 'Invalid characters:'|trans({}, 'Admin.Shopparameters.Help') ~ ' <>={}' }}
        {% endset %}

        {{ ps.form_group_row(metaForm.meta_keywords, {}, {
          'label': 'Meta keywords'|trans({}, 'Admin.Global'),
          'help': metaKeywordsHelpLabel
        }) }}

        {% set rewriteUrlHelpLabel %}
          {{ 'For instance, \"contacts\" for http://example.com/shop/contacts to redirect to http://example.com/shop/contact-form.php'|trans({}, 'Admin.Shopparameters.Help') }}
          {{ 'Only letters and hyphens are allowed.'|trans({}, 'Admin.Shopparameters.Help') }}
        {% endset %}

        {{ ps.form_group_row(metaForm.url_rewrite, {'attr': {'class': 'js-url-rewrite'}}, {
          'label': 'Rewritten URL'|trans({}, 'Admin.Shopparameters.Feature'),
          'help': rewriteUrlHelpLabel
        }) }}

        {% block meta_form_rest %}
          {{ form_rest(metaForm) }}
        {% endblock %}
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"{{ path('admin_metas_index') }}\" class=\"btn btn-outline-secondary\">
          {{ 'Cancel'|trans({}, 'Admin.Actions') }}
        </a>
      </div>
      <div class=\"d-inline-flex float-right\">
        <button class=\"btn btn-primary\" id=\"save-button\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>
  </div>
{{ form_end(metaForm) }}
", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig");
    }
}
