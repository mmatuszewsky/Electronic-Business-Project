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

/* @PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/settings_panel.html.twig */
class __TwigTemplate_1880ee9d520e846f57ce0643a4772ba2c2eb5f0b5b67636ee8b0822ec81ee8e7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'request_sql_settings' => [$this, 'block_request_sql_settings'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/settings_panel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/settings_panel.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestSqlSettingsForm"] ?? $this->getContext($context, "requestSqlSettingsForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_sql_requests_process_settings")]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i>
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label class=\"form-control-label col-sm-2\" for=\"form_settings_default_file_encoding\">
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select your default file encoding", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["requestSqlSettingsForm"] ?? $this->getContext($context, "requestSqlSettingsForm")), "settings", []), "default_file_encoding", []), 'errors');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["requestSqlSettingsForm"] ?? $this->getContext($context, "requestSqlSettingsForm")), "settings", []), "default_file_encoding", []), 'widget');
        echo "
          </div>
        </div>

        ";
        // line 46
        $this->displayBlock('request_sql_settings', $context, $blocks);
        // line 49
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary pull-right\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestSqlSettingsForm"] ?? $this->getContext($context, "requestSqlSettingsForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_request_sql_settings($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "request_sql_settings"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "request_sql_settings"));

        // line 47
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["requestSqlSettingsForm"] ?? $this->getContext($context, "requestSqlSettingsForm")), 'rest');
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/settings_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 47,  103 => 46,  91 => 57,  84 => 53,  78 => 49,  76 => 46,  69 => 42,  65 => 41,  59 => 38,  50 => 32,  43 => 28,  40 => 27,  37 => 25,);
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

{% trans_default_domain 'Admin.Advparameters.Feature' %}

{{ form_start(requestSqlSettingsForm, {'action': path('admin_sql_requests_process_settings') }) }}
  <div class=\"card\">
    <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i>
        {{ 'Settings'|trans({}, 'Admin.Global') }}
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label class=\"form-control-label col-sm-2\" for=\"form_settings_default_file_encoding\">
            {{ 'Select your default file encoding'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(requestSqlSettingsForm.settings.default_file_encoding) }}
            {{ form_widget(requestSqlSettingsForm.settings.default_file_encoding) }}
          </div>
        </div>

        {% block request_sql_settings %}
          {{ form_rest(requestSqlSettingsForm) }}
        {% endblock %}
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary pull-right\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>
  </div>
{{ form_end(requestSqlSettingsForm) }}
", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/settings_panel.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/RequestSql/Blocks/settings_panel.html.twig");
    }
}
