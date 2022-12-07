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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig */
class __TwigTemplate_44f29c4567d886a7300b2fe43fdb91926b98908b86c13547569016a44b75b539 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'backup_options_card' => [$this, 'block_backup_options_card'],
            'backup_options_rest' => [$this, 'block_backup_options_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig"));

        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('backup_options_card', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_backup_options_card($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "backup_options_card"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "backup_options_card"));

        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["backupForm"] ?? $this->getContext($context, "backupForm")), 'form_start');
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Backup options", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ignore statistics tables", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
          <div class=\"col-sm\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? $this->getContext($context, "backupForm")), "backup_options", []), "backup_all", []), 'errors');
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? $this->getContext($context, "backupForm")), "backup_options", []), "backup_all", []), 'widget');
        echo "

            <small class=\"form-text\">
              ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop existing tables during import.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo " <br>
              ";
        // line 45
        echo twig_escape_filter($this->env, twig_replace_filter("%prefix%connections, %prefix%connections_page %prefix%connections_source, %prefix%guest, %prefix%statssearch", ["%prefix%" => ($context["dbPrefix"] ?? $this->getContext($context, "dbPrefix"))]), "html", null, true);
        echo "
            </small>
          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 51
        $context["helpMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If enabled, the backup script will drop your tables prior to restoring data.", [], "Admin.Advparameters.Help");
        // line 52
        echo "          ";
        $context["helpMessage"] = ((($context["helpMessage"] ?? $this->getContext($context, "helpMessage")) . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(ie. \"DROP TABLE IF EXISTS\")", [], "Admin.Advparameters.Help"));
        // line 53
        echo "
          ";
        // line 54
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop existing tables during import", [], "Admin.Advparameters.Feature"), ($context["helpMessage"] ?? $this->getContext($context, "helpMessage")));
        echo "
          <div class=\"col-sm\">
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? $this->getContext($context, "backupForm")), "backup_options", []), "backup_drop_tables", []), 'errors');
        echo "
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? $this->getContext($context, "backupForm")), "backup_options", []), "backup_drop_tables", []), 'widget');
        echo "
          </div>
        </div>

        ";
        // line 61
        $this->displayBlock('backup_options_rest', $context, $blocks);
        // line 64
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
  ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["backupForm"] ?? $this->getContext($context, "backupForm")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_backup_options_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "backup_options_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "backup_options_rest"));

        // line 62
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["backupForm"] ?? $this->getContext($context, "backupForm")), 'rest');
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 62,  158 => 61,  146 => 72,  139 => 68,  133 => 64,  131 => 61,  124 => 57,  120 => 56,  115 => 54,  112 => 53,  109 => 52,  107 => 51,  98 => 45,  94 => 44,  88 => 41,  84 => 40,  79 => 38,  71 => 33,  64 => 30,  46 => 29,  43 => 28,  41 => 27,  38 => 25,);
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
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{% block backup_options_card %}
  {{ form_start(backupForm) }}
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> {{ 'Backup options'|trans({}, 'Admin.Advparameters.Feature') }}
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label class=\"form-control-label\">{{ 'Ignore statistics tables'|trans }}</label>
          <div class=\"col-sm\">
            {{ form_errors(backupForm.backup_options.backup_all) }}
            {{ form_widget(backupForm.backup_options.backup_all) }}

            <small class=\"form-text\">
              {{ 'Drop existing tables during import.'|trans({}, 'Admin.Advparameters.Help') }} <br>
              {{ '%prefix%connections, %prefix%connections_page %prefix%connections_source, %prefix%guest, %prefix%statssearch'|replace({'%prefix%': dbPrefix}) }}
            </small>
          </div>
        </div>

        <div class=\"form-group row\">
          {% set helpMessage = 'If enabled, the backup script will drop your tables prior to restoring data.'|trans({}, 'Admin.Advparameters.Help') %}
          {% set helpMessage = helpMessage ~ ' ' ~ '(ie. \"DROP TABLE IF EXISTS\")'|trans({}, 'Admin.Advparameters.Help') %}

          {{ ps.label_with_help(('Drop existing tables during import'|trans), helpMessage) }}
          <div class=\"col-sm\">
            {{ form_errors(backupForm.backup_options.backup_drop_tables) }}
            {{ form_widget(backupForm.backup_options.backup_drop_tables) }}
          </div>
        </div>

        {% block backup_options_rest %}
          {{ form_rest(backupForm) }}
        {% endblock %}
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>
  </div>
  {{ form_end(backupForm) }}
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig");
    }
}
