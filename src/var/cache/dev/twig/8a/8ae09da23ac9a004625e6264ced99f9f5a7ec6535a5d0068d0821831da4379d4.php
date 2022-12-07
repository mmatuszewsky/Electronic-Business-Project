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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig */
class __TwigTemplate_73570ce52af1361217f7d62077b67b231b85df86b4b7c782ec0379944076676f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'backup_info' => [$this, 'block_backup_info'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('backup_info', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_backup_info($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "backup_info"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "backup_info"));

        // line 27
        echo "  <div class=\"alert alert-info\" role=\"alert\">
    ";
        // line 28
        if (($context["isHostMode"] ?? $this->getContext($context, "isHostMode"))) {
            // line 29
            echo "      <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How to restore a database backup", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</h4>
      <p>";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you need to restore a database backup, we invite you to subscribe to a [1][2]technical support plan[/2][/1].", ["[1]" => "<strong>", "[/1]" => "</strong>", "[2]" => "<a class=\"_blank\" href=\"https://addons.prestashop.com/support/16298-support-essentiel-plan.html\">", "[/2]" => "</a>"], "Admin.Advparameters.Notification");
            echo "</p>
      <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Our team will take care of restoring your database safely.", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</p>
      <br>
      <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Why can't I restore it by myself?", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</p>
      <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your shop is hosted by PrestaShop. Although you can create backup files here below, there are core settings you cannot access for security reasons, like the database management. Thus, only our team can proceed to a restoration.", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 36
            echo "      <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How to restore a database backup in 10 easy steps", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</h4>
      <ol class=\"mb-0\">
        <li>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set \"Enable Shop\" to \"No\" in the \"Maintenance\" page under the \"Preferences\" menu.", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download the backup from the list below or from your FTP server (in the folder \"admin/backups\").", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check the backup integrity: Look for errors, incomplete file, etc... Be sure to verify all of your data.", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please ask your hosting provider for \"phpMyAdmin\" access to your database.", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connect to \"phpMyAdmin\" and select your current database.", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unless you enabled the \"Drop existing tables\" option, you must delete all tables from your current database.", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("At the top of the screen, please select the \"Import\" tab", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Click on the \"Browse\" button and select the backup file from your hard drive.", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>
          ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check the maximum filesize allowed (e.g. Max: 16MB)", [], "Admin.Advparameters.Help"), "html", null, true);
            echo " <br>
          ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If your backup file exceeds this limit, contact your hosting provider for assistance. ", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "
        </li>
        <li>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Click on the \"Go\" button and please wait patiently for the import process to conclude. This may take several minutes.", [], "Admin.Advparameters.Help"), "html", null, true);
            echo " <br></li>
      </ol>
    ";
        }
        // line 53
        echo "  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 53,  134 => 50,  129 => 48,  125 => 47,  120 => 45,  116 => 44,  112 => 43,  108 => 42,  104 => 41,  100 => 40,  96 => 39,  92 => 38,  86 => 36,  81 => 34,  77 => 33,  72 => 31,  68 => 30,  63 => 29,  61 => 28,  58 => 27,  40 => 26,  37 => 25,);
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

{% block backup_info %}
  <div class=\"alert alert-info\" role=\"alert\">
    {% if isHostMode %}
      <h4>{{ 'How to restore a database backup'|trans({}, 'Admin.Advparameters.Notification') }}</h4>
      <p>{{ 'If you need to restore a database backup, we invite you to subscribe to a [1][2]technical support plan[/2][/1].'|trans({'[1]': '<strong>',  '[/1]': '</strong>', '[2]': '<a class=\"_blank\" href=\"https://addons.prestashop.com/support/16298-support-essentiel-plan.html\">', '[/2]': '</a>'}, 'Admin.Advparameters.Notification')|raw }}</p>
      <p>{{ 'Our team will take care of restoring your database safely.'|trans({}, 'Admin.Advparameters.Notification') }}</p>
      <br>
      <p>{{ 'Why can\\'t I restore it by myself?'|trans({}, 'Admin.Advparameters.Notification') }}</p>
      <p>{{ 'Your shop is hosted by PrestaShop. Although you can create backup files here below, there are core settings you cannot access for security reasons, like the database management. Thus, only our team can proceed to a restoration.'|trans({}, 'Admin.Advparameters.Notification') }}</p>
    {% else %}
      <h4>{{ 'How to restore a database backup in 10 easy steps'|trans({}, 'Admin.Advparameters.Help') }}</h4>
      <ol class=\"mb-0\">
        <li>{{ 'Set \"Enable Shop\" to \"No\" in the \"Maintenance\" page under the \"Preferences\" menu.'|trans({}, 'Admin.Advparameters.Help') }}</li>
        <li>{{ 'Download the backup from the list below or from your FTP server (in the folder \"admin/backups\").'|trans({}, 'Admin.Advparameters.Help') }}</li>
        <li>{{ 'Check the backup integrity: Look for errors, incomplete file, etc... Be sure to verify all of your data.'|trans({}, 'Admin.Advparameters.Help') }}</li>
        <li>{{ 'Please ask your hosting provider for \"phpMyAdmin\" access to your database.'|trans({}, 'Admin.Advparameters.Help') }}</li>
        <li>{{ 'Connect to \"phpMyAdmin\" and select your current database.'|trans({}, 'Admin.Advparameters.Help') }}</li>
        <li>{{ 'Unless you enabled the \"Drop existing tables\" option, you must delete all tables from your current database.'|trans({}, 'Admin.Advparameters.Help') }}</li>
        <li>{{ 'At the top of the screen, please select the \"Import\" tab'|trans({}, 'Admin.Advparameters.Help') }}</li>
        <li>{{ 'Click on the \"Browse\" button and select the backup file from your hard drive.'|trans({}, 'Admin.Advparameters.Help') }}</li>
        <li>
          {{ 'Check the maximum filesize allowed (e.g. Max: 16MB)'|trans({}, 'Admin.Advparameters.Help') }} <br>
          {{ 'If your backup file exceeds this limit, contact your hosting provider for assistance. '|trans({}, 'Admin.Advparameters.Help') }}
        </li>
        <li>{{ 'Click on the \"Go\" button and please wait patiently for the import process to conclude. This may take several minutes.'|trans({}, 'Admin.Advparameters.Help') }} <br></li>
      </ol>
    {% endif %}
  </div>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig");
    }
}
