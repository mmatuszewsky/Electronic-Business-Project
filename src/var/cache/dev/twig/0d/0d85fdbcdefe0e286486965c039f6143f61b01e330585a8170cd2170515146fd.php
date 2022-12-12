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

/* @PrestaShop/Admin/Module/updates.html.twig */
class __TwigTemplate_c1e065272df5a97646ebc8de735914f816187b04c317aa6c4802cd4f1c6f1dd3 extends \Twig\Template
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
        // line 25
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/updates.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/updates.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@PrestaShop/Admin/Module/updates.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "  ";
        // line 29
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig", "@PrestaShop/Admin/Module/updates.html.twig", 29)->display(twig_array_merge($context, ["level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage"))]));
        // line 30
        echo "  ";
        // line 31
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm_prestatrust.html.twig", "@PrestaShop/Admin/Module/updates.html.twig", 31)->display($context);
        // line 32
        echo "  ";
        // line 33
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "@PrestaShop/Admin/Module/updates.html.twig", 33)->display(twig_array_merge($context, ["level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage"))]));
        // line 34
        echo "  ";
        // line 35
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-lg-10\">
      <div id=\"module-short-list-update\" class=\"module-short-list\">
        <span class=\"module-search-result-title module-search-result-wording\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% modules to update", ["%nbModules%" => twig_length_filter($this->env, ($context["modules"] ?? $this->getContext($context, "modules")))], "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
        ";
        // line 39
        $this->loadTemplate("@Common/HelpBox/helpbox.html.twig", "@PrestaShop/Admin/Module/updates.html.twig", 39)->display(twig_array_merge($context, ["content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update these modules to enjoy their latest versions.", [], "Admin.Modules.Help"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modules to update", [], "Admin.Modules.Feature")]));
        // line 40
        echo "
        ";
        // line 41
        if (((twig_length_filter($this->env, ($context["modules"] ?? $this->getContext($context, "modules"))) > 1) && (($context["level"] ?? $this->getContext($context, "level")) >= twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE")))) {
            // line 42
            echo "          <a class=\"btn btn-primary-reverse float-right btn-outline-primary light-button module_action_menu_upgrade_all\" href=\"#\" data-confirm_modal=\"module-modal-confirm-upgrade-all\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upgrade All", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
        ";
        }
        // line 44
        echo "      </div>
      ";
        // line 45
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_notification_update.html.twig", "@PrestaShop/Admin/Module/updates.html.twig", 45)->display(twig_array_merge($context, ["modules" => ($context["modules"] ?? $this->getContext($context, "modules")), "display_type" => "list", "id" => "update", "level" => ($context["level"] ?? $this->getContext($context, "level")), "category" => "notification"]));
        // line 46
        echo "    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/updates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 46,  102 => 45,  99 => 44,  93 => 42,  91 => 41,  88 => 40,  86 => 39,  82 => 38,  77 => 35,  75 => 34,  72 => 33,  70 => 32,  67 => 31,  65 => 30,  62 => 29,  60 => 28,  51 => 27,  29 => 25,);
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
{% extends '@PrestaShop/Admin/Module/common.html.twig' %}

{% block content %}
  {# Addons connect modal #}
  {% include '@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
  {# PrestaTrust modal #}
  {% include '@PrestaShop/Admin/Module/Includes/modal_confirm_prestatrust.html.twig' %}
  {# Contains toolbar-nav for module page #}
  {% include '@PrestaShop/Admin/Module/Includes/modal_import.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
  {# Actual Page Content #}
  <div class=\"row justify-content-center\">
    <div class=\"col-lg-10\">
      <div id=\"module-short-list-update\" class=\"module-short-list\">
        <span class=\"module-search-result-title module-search-result-wording\">{{ '%nbModules% modules to update'|trans({'%nbModules%' : modules|length}, 'Admin.Modules.Feature') }}</span>
        {% include '@Common/HelpBox/helpbox.html.twig' with { 'content' : \"Update these modules to enjoy their latest versions.\"|trans({}, 'Admin.Modules.Help'), 'title' : \"Modules to update\"|trans({}, 'Admin.Modules.Feature') } %}

        {% if (modules|length > 1) and (level >= constant('PrestaShopBundle\\\\Security\\\\Voter\\\\PageVoter::LEVEL_UPDATE')) %}
          <a class=\"btn btn-primary-reverse float-right btn-outline-primary light-button module_action_menu_upgrade_all\" href=\"#\" data-confirm_modal=\"module-modal-confirm-upgrade-all\">{{ \"Upgrade All\"|trans({}, 'Admin.Modules.Feature') }}</a>
        {% endif %}
      </div>
      {% include '@PrestaShop/Admin/Module/Includes/grid_notification_update.html.twig' with { 'modules': modules, 'display_type': 'list', id: 'update', 'level' : level, 'category': 'notification' } %}
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Module/updates.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/updates.html.twig");
    }
}
