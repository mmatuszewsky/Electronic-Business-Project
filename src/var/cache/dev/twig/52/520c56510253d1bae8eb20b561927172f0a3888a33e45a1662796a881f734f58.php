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

/* @PrestaShop/Admin/Module/Includes/tab-module-line.html.twig */
class __TwigTemplate_1ae7c0ec373cdfa137c8821b8a914a3b809ff2e31caf78b90ace566b61ecc0e6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig"));

        // line 26
        $context["moduleImage"] = (((null === $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "img", []))) ? ((((twig_constant("_MODULE_DIR_") . $this->getAttribute($this->getAttribute(        // line 27
($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "name", [])) . "/") . $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "logo", []))) : ($this->getAttribute($this->getAttribute(        // line 28
($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "img", [])));
        // line 30
        echo "<tr>
  <td class=\"fixed-with-sm center\">
    <img
      class=\"img-thumbnail\"
      alt=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "name", []), "html", null, true);
        echo "\"
      src=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["moduleImage"] ?? $this->getContext($context, "moduleImage")), "html", null, true);
        echo "\"
    />
  </td>
  <td>
    <div id=\"anchor";
        // line 39
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "name", [])), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "displayName", []), "html", null, true);
        echo "\">
      <div class=\"module_name\">
        <span style=\"display:none\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "name", []), "html", null, true);
        echo "</span>
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "displayName", []), "html", null, true);
        echo "
        <small class=\"text-muted\">v";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "version", []), "html", null, true);
        echo " - by ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "author", []), "html", null, true);
        echo "</small>
        ";
        // line 44
        if (( !twig_test_empty($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "type", [])) && ($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "type", []) == "addonsBought"))) {
            // line 45
            echo "        - <span class=\"module-badge-bought help-tooltip text-warning\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You bought this module on PrestaShop Addons. Thank You.", [], "Admin.Modules.Help"), "html", null, true);
            echo "\"><i class=\"icon-pushpin\"></i> <small>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bought", [], "Admin.Modules.Help"), "html", null, true);
            echo "</small></span>
        ";
        } elseif (( !twig_test_empty($this->getAttribute($this->getAttribute(        // line 46
($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "type", [])) && ($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "type", []) == "addonsMustHave"))) {
            // line 47
            echo "        - <span class=\"module-badge-popular help-tooltip text-primary\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This module is available on PrestaShop Addons.", [], "Admin.Modules.Help"), "html", null, true);
            echo "\"><i class=\"icon-group\"></i> <small>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Popular", [], "Admin.Modules.Help"), "html", null, true);
            echo "</small></span>
        ";
        } elseif (( !twig_test_empty($this->getAttribute($this->getAttribute(        // line 48
($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "type", [])) && ($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "type", []) == "addonsPartner"))) {
            // line 49
            echo "        - <span class=\"module-badge-partner help-tooltip text-warning\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This module is available for free thanks to our partner.", [], "Admin.Modules.Help"), "html", null, true);
            echo "\"><i class=\"icon-pushpin\"></i> <small>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Official", [], "Admin.Modules.Help"), "html", null, true);
            echo "</small></span>
        ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 50
($context["module"] ?? null), "attributes", [], "any", false, true), "id", [], "any", true, true) && ($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "id", []) >= 0))) {
            // line 51
            echo "          ";
            if (($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", [], "any", false, true), "version_addons", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "version_addons", []))) {
                // line 52
                echo "            <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Need update", [], "Admin.Modules.Help"), "html", null, true);
                echo "</span>
          ";
            }
            // line 54
            echo "        ";
        }
        // line 55
        echo "      </div>
      <p class=\"module_description\">
        ";
        // line 57
        if (($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", [], "any", false, true), "description", [], "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "description", [])))) {
            // line 58
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "description", []), "html", null, true);
            echo "
        ";
        }
        // line 60
        echo "      </p>
      ";
        // line 61
        if ((($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", [], "any", false, true), "message", [], "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "name", []))) && (( !$this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", [], "any", false, true), "type", [], "any", true, true) || ($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "type", []) != "addonsMustHave")) || ($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "type", []) != "addonsNative")))) {
            // line 62
            echo "        <div class=\"alert alert-success\" role=\"alert\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
          <p class=\"alert-text\">
            ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "message", []), "html", null, true);
            echo "
          </p>
        </div>
      ";
        }
        // line 69
        echo "    </div>
  </td>
  <td class=\"module-container module-quick-action-list clearfix\">
    ";
        // line 72
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", ["module" => ($context["module"] ?? $this->getContext($context, "module"))]);
        echo "
  </td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 72,  148 => 69,  141 => 65,  136 => 62,  134 => 61,  131 => 60,  125 => 58,  123 => 57,  119 => 55,  116 => 54,  110 => 52,  107 => 51,  105 => 50,  98 => 49,  96 => 48,  89 => 47,  87 => 46,  80 => 45,  78 => 44,  72 => 43,  68 => 42,  64 => 41,  57 => 39,  50 => 35,  46 => 34,  40 => 30,  38 => 28,  37 => 27,  36 => 26,);
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
{%
  set moduleImage = module.attributes.img is null ?
    constant('_MODULE_DIR_') ~ module.attributes.name ~ '/' ~ module.attributes.logo :
    module.attributes.img
%}
<tr>
  <td class=\"fixed-with-sm center\">
    <img
      class=\"img-thumbnail\"
      alt=\"{{ module.attributes.name }}\"
      src=\"{{ moduleImage }}\"
    />
  </td>
  <td>
    <div id=\"anchor{{ module.attributes.name|capitalize }}\" title=\"{{ module.attributes.displayName }}\">
      <div class=\"module_name\">
        <span style=\"display:none\">{{ module.attributes.name }}</span>
        {{ module.attributes.displayName }}
        <small class=\"text-muted\">v{{ module.attributes.version }} - by {{ module.attributes.author }}</small>
        {% if module.attributes.type is not empty and module.attributes.type == 'addonsBought' %}
        - <span class=\"module-badge-bought help-tooltip text-warning\" data-title=\"{{ 'You bought this module on PrestaShop Addons. Thank You.'|trans({}, 'Admin.Modules.Help') }}\"><i class=\"icon-pushpin\"></i> <small>{{ 'Bought'|trans({}, 'Admin.Modules.Help') }}</small></span>
        {% elseif module.attributes.type is not empty and module.attributes.type == 'addonsMustHave' %}
        - <span class=\"module-badge-popular help-tooltip text-primary\" data-title=\"{{ 'This module is available on PrestaShop Addons.'|trans({}, 'Admin.Modules.Help') }}\"><i class=\"icon-group\"></i> <small>{{ 'Popular'|trans({}, 'Admin.Modules.Help') }}</small></span>
        {% elseif module.attributes.type is not empty and module.attributes.type == 'addonsPartner' %}
        - <span class=\"module-badge-partner help-tooltip text-warning\" data-title=\"{{ 'This module is available for free thanks to our partner.'|trans({}, 'Admin.Modules.Help') }}\"><i class=\"icon-pushpin\"></i> <small>{{ 'Official'|trans({}, 'Admin.Modules.Help') }}</small></span>
        {% elseif module.attributes.id is defined and module.attributes.id >= 0 %}
          {% if module.attributes.version_addons is defined and module.attributes.version_addons %}
            <span class=\"label label-warning\">{{ 'Need update'|trans({}, 'Admin.Modules.Help') }}</span>
          {% endif %}
        {% endif %}
      </div>
      <p class=\"module_description\">
        {% if module.attributes.description is defined and module.attributes.description is not empty %}
          {{ module.attributes.description }}
        {% endif %}
      </p>
      {% if (module.attributes.message is defined and module.attributes.name is not empty) and (module.attributes.type is not defined or module.attributes.type != 'addonsMustHave' or module.attributes.type != 'addonsNative') %}
        <div class=\"alert alert-success\" role=\"alert\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
          <p class=\"alert-text\">
            {{ module.attributes.message }}
          </p>
        </div>
      {% endif %}
    </div>
  </td>
  <td class=\"module-container module-quick-action-list clearfix\">
    {{ include('@PrestaShop/Admin/Module/Includes/action_menu.html.twig', {'module': module}) }}
  </td>
</tr>
", "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/tab-module-line.html.twig");
    }
}
