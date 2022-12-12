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

/* @PrestaShop/Admin/Module/common.html.twig */
class __TwigTemplate_ee2dfcf38e37b0905674333e8252a69412096b8050a6c5991a57c0995da4ef1f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/common.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/common.html.twig"));

        // line 55
        $context["js_translatable"] = twig_array_merge(["Bulk Action - One module minimum" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You need to select at least one module to use the bulk action.", [], "Admin.Modules.Notification"), "Bulk Action - Request not found" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The action \"[1]\" is not available, impossible to perform your request.", [], "Admin.Modules.Notification"), "Bulk Action - Request not available for module" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The action [1] is not available for module [2]. Skipped.", [], "Admin.Modules.Notification")],         // line 59
($context["js_translatable"] ?? $this->getContext($context, "js_translatable")));
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Module/common.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
    var moduleURLs = {
      'catalogRefresh': '";
        // line 31
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_catalog_refresh"), "js"), "html", null, true);
        echo "',
      'configurationPage': '";
        // line 32
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_configure_action", ["module_name" => ":number:"]), "js"), "html", null, true);
        echo "',
      'moduleImport': '";
        // line 33
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_import"), "js"), "html", null, true);
        echo "',
      'notificationsCount': '";
        // line 34
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_notification_count"), "js"), "html", null, true);
        echo "',
      'maintenancePage': '";
        // line 35
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_maintenance"), "js"), "html", null, true);
        echo "',
    };

    var moduleTranslations = {
      'singleModuleModalUpdateTitle': '";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to upgrade this module?", [], "Admin.Modules.Notification"), "html", null, true);
        echo "',
      'multipleModuleModalUpdateTitle': '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to upgrade these modules?", [], "Admin.Modules.Notification"), "html", null, true);
        echo "',
      'moduleModalUpdateCancel': '";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "',
      'moduleModalUpdateMaintenance': '";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to maintenance page", [], "Admin.Actions"), "html", null, true);
        echo "',
      'moduleModalUpdateUpgrade': '";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upgrade", [], "Admin.Actions"), "html", null, true);
        echo "',
      'upgradeAnywayButtonText': '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upgrade anyway", [], "Admin.Actions"), "html", null, true);
        echo "',
      'moduleModalUpdateConfirmMessage': '";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("We strongly advise you to upgrade the modules on maintenance mode to avoid any cache issues.", [], "Admin.Modules.Notification"), "html", null, true);
        echo "',
    };

    // Need to come from the backend
    var isShopMaintenance = !";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->intCast($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_SHOP_ENABLE")), "html", null, true);
        echo ";
  </script>
  <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/plugins/jquery.pstagger.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/module.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 52,  130 => 51,  125 => 49,  118 => 45,  114 => 44,  110 => 43,  106 => 42,  102 => 41,  98 => 40,  94 => 39,  87 => 35,  83 => 34,  79 => 33,  75 => 32,  71 => 31,  64 => 28,  55 => 27,  44 => 25,  42 => 59,  41 => 55,  29 => 25,);
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

{% block javascripts %}
  {{ parent() }}
  <script>
    var moduleURLs = {
      'catalogRefresh': '{{ path('admin_module_catalog_refresh')|e('js') }}',
      'configurationPage': '{{ path('admin_module_configure_action', {'module_name': ':number:'})|e('js') }}',
      'moduleImport': '{{ path('admin_module_import')|e('js') }}',
      'notificationsCount': '{{ path('admin_module_notification_count')|e('js') }}',
      'maintenancePage': '{{ path('admin_maintenance')|e('js') }}',
    };

    var moduleTranslations = {
      'singleModuleModalUpdateTitle': '{{ \"Are you sure you want to upgrade this module?\"|trans({}, 'Admin.Modules.Notification') }}',
      'multipleModuleModalUpdateTitle': '{{ \"Are you sure you want to upgrade these modules?\"|trans({}, 'Admin.Modules.Notification') }}',
      'moduleModalUpdateCancel': '{{ \"Cancel\"|trans({}, 'Admin.Actions') }}',
      'moduleModalUpdateMaintenance': '{{ \"Go to maintenance page\"|trans({}, 'Admin.Actions') }}',
      'moduleModalUpdateUpgrade': '{{ \"Upgrade\"|trans({}, 'Admin.Actions') }}',
      'upgradeAnywayButtonText': '{{ \"Upgrade anyway\"|trans({}, 'Admin.Actions') }}',
      'moduleModalUpdateConfirmMessage': '{{ \"We strongly advise you to upgrade the modules on maintenance mode to avoid any cache issues.\"|trans({}, 'Admin.Modules.Notification') }}',
    };

    // Need to come from the backend
    var isShopMaintenance = !{{ 'PS_SHOP_ENABLE'|configuration|intCast }};
  </script>
  <script src=\"{{ asset('themes/default/js/bundle/plugins/jquery.pstagger.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/module.bundle.js') }}\"></script>
{% endblock %}

{% set js_translatable = {
  \"Bulk Action - One module minimum\": \"You need to select at least one module to use the bulk action.\"|trans({}, 'Admin.Modules.Notification'),
  \"Bulk Action - Request not found\": 'The action \"[1]\" is not available, impossible to perform your request.'|trans({}, 'Admin.Modules.Notification'),
  \"Bulk Action - Request not available for module\": \"The action [1] is not available for module [2]. Skipped.\"|trans({}, 'Admin.Modules.Notification'),
}|merge(js_translatable)
%}
", "@PrestaShop/Admin/Module/common.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/common.html.twig");
    }
}
