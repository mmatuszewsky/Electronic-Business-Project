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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig */
class __TwigTemplate_b888b1c93aae2a71acf5211b2748a9bbf42ad13a65507d3c31fa6259842f0c54 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'backup_warning' => [$this, 'block_backup_warning'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig"));

        // line 26
        echo "
";
        // line 27
        $this->displayBlock('backup_warning', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_backup_warning($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "backup_warning"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "backup_warning"));

        // line 28
        echo "  <div class=\"alert alert-warning\" role=\"alert\">
    <h4>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disclaimer before creating a new backup", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</h4>
    <ol>
      <li>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PrestaShop is not responsible for your database, its backups and/or recovery.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PrestaShop is open-source software. You are using it at your own risk under the license agreement.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You should back up your data on a regular basis (both files and database).", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This function only backs up your database, not your files.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("By default, your existing database tables will be dropped during the backup recovery (see \"Backup options\" below).", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Always verify the quality and integrity of your backup files!", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Always verify that your backup files are complete, up-to-date and valid, even if you had a success message appear during the backup process.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Always check your data.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Never restore a backup on a live site.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
    </ol>

    ";
        // line 42
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig", 42)->display($context);
        // line 43
        echo "  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 43,  104 => 42,  98 => 39,  94 => 38,  90 => 37,  86 => 36,  82 => 35,  78 => 34,  74 => 33,  70 => 32,  66 => 31,  61 => 29,  58 => 28,  40 => 27,  37 => 26,);
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

{% block backup_warning %}
  <div class=\"alert alert-warning\" role=\"alert\">
    <h4>{{ 'Disclaimer before creating a new backup'|trans({}, 'Admin.Advparameters.Notification') }}</h4>
    <ol>
      <li>{{ 'PrestaShop is not responsible for your database, its backups and/or recovery.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'PrestaShop is open-source software. You are using it at your own risk under the license agreement.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'You should back up your data on a regular basis (both files and database).'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'This function only backs up your database, not your files.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'By default, your existing database tables will be dropped during the backup recovery (see \"Backup options\" below).'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'Always verify the quality and integrity of your backup files!'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'Always verify that your backup files are complete, up-to-date and valid, even if you had a success message appear during the backup process.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'Always check your data.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'Never restore a backup on a live site.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
    </ol>

    {% include '@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig' %}
  </div>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig");
    }
}
