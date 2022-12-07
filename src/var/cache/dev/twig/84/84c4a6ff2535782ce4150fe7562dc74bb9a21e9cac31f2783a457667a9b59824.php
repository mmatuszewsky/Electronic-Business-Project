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

/* @PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig */
class __TwigTemplate_d6b2d95569aa596ea7130db0e62d3b9a954093515b3d8bf5e85efea228241683 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'sql_manager_info_block' => [$this, 'block_sql_manager_info_block'],
            'sql_manager_warning_block' => [$this, 'block_sql_manager_warning_block'],
            'sql_manager_list_panel' => [$this, 'block_sql_manager_list_panel'],
            'sql_manager_settings_panel' => [$this, 'block_sql_manager_settings_panel'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "    ";
        $this->displayBlock('sql_manager_info_block', $context, $blocks);
        // line 45
        echo "
    ";
        // line 46
        $this->displayBlock('sql_manager_warning_block', $context, $blocks);
        // line 55
        echo "
    ";
        // line 56
        $this->displayBlock('sql_manager_list_panel', $context, $blocks);
        // line 63
        echo "
    ";
        // line 64
        $this->displayBlock('sql_manager_settings_panel', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_sql_manager_info_block($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_info_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_info_block"));

        // line 31
        echo "        <div class=\"row\">
            <div class=\"col\">
                <div class=\"alert alert-info\" role=\"alert\">
                    <p class=\"alert-text\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How do I create a new SQL query?", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</p>
                    <ul>
                        <li>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Click \"Add New\".", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
                        <li>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fill in the fields and click \"Save\".", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
                        <li>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can then view the query results by clicking on the Edit action in the dropdown menu", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
                        <li>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can also export the query results as a CSV file by clicking on the Export button", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
                    </ul>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_sql_manager_warning_block($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_warning_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_warning_block"));

        // line 47
        echo "        <div class=\"row\">
            <div class=\"col\">
                <div class=\"alert alert-warning\" role=\"alert\">
                    <p class=\"alert-text\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When saving the query, only the \"SELECT\" SQL statement is allowed.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_sql_manager_list_panel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_list_panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_list_panel"));

        // line 57
        echo "        <div class=\"row\">
            <div class=\"col\">
                ";
        // line 59
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig", 59)->display(twig_array_merge($context, ["grid" => ($context["requestSqlGrid"] ?? $this->getContext($context, "requestSqlGrid"))]));
        // line 60
        echo "            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_sql_manager_settings_panel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_settings_panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sql_manager_settings_panel"));

        // line 65
        echo "        <div class=\"row justify-content-center\">
            <div class=\"col\">
                ";
        // line 67
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/settings_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig", 67)->display($context);
        // line 68
        echo "            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/sql_manager.bundle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 77,  236 => 76,  230 => 74,  221 => 73,  209 => 68,  207 => 67,  203 => 65,  194 => 64,  182 => 60,  180 => 59,  176 => 57,  167 => 56,  152 => 50,  147 => 47,  138 => 46,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  105 => 34,  100 => 31,  91 => 30,  81 => 64,  78 => 63,  76 => 56,  73 => 55,  71 => 46,  68 => 45,  65 => 30,  56 => 29,  22 => 26,);
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
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}

{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Advparameters.Feature\" %}

{% block content %}
    {% block sql_manager_info_block %}
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"alert alert-info\" role=\"alert\">
                    <p class=\"alert-text\">{{ 'How do I create a new SQL query?'|trans({}, 'Admin.Advparameters.Help') }}</p>
                    <ul>
                        <li>{{ 'Click \"Add New\".'|trans({}, 'Admin.Advparameters.Help') }}</li>
                        <li>{{ 'Fill in the fields and click \"Save\".'|trans({}, 'Admin.Advparameters.Help') }}</li>
                        <li>{{ 'You can then view the query results by clicking on the Edit action in the dropdown menu'|trans({}, 'Admin.Advparameters.Help') }}</li>
                        <li>{{ 'You can also export the query results as a CSV file by clicking on the Export button'|trans({}, 'Admin.Advparameters.Help') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    {% endblock %}

    {% block sql_manager_warning_block %}
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"alert alert-warning\" role=\"alert\">
                    <p class=\"alert-text\">{{ 'When saving the query, only the \"SELECT\" SQL statement is allowed.'|trans({}, 'Admin.Advparameters.Notification') }}</p>
                </div>
            </div>
        </div>
    {% endblock %}

    {% block sql_manager_list_panel %}
        <div class=\"row\">
            <div class=\"col\">
                {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': requestSqlGrid} %}
            </div>
        </div>
    {% endblock %}

    {% block sql_manager_settings_panel %}
        <div class=\"row justify-content-center\">
            <div class=\"col\">
                {% include '@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/settings_panel.html.twig' %}
            </div>
        </div>
    {% endblock %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('themes/new-theme/public/sql_manager.bundle.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/RequestSql/index.html.twig");
    }
}
