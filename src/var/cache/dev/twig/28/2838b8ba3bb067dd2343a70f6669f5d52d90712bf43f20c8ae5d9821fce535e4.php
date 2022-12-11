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

/* @PrestaShop/Admin/Common/Grid/Actions/Row/delete_category.html.twig */
class __TwigTemplate_171ee6a158740269b14a31c152d321bc4fd1e8d5006a8232b95aa0c23fee8103 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Row/delete_category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Row/delete_category.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["class"] = "btn tooltip-link js-delete-category-row-action";
        // line 27
        echo "
";
        // line 28
        if ($this->getAttribute(($context["attributes"] ?? null), "class", [], "any", true, true)) {
            // line 29
            echo "  ";
            $context["class"] = ((($context["class"] ?? $this->getContext($context, "class")) . " ") . $this->getAttribute(($context["attributes"] ?? $this->getContext($context, "attributes")), "class", []));
        }
        // line 31
        echo "
<a class=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        echo " grid-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "name", [])), "html", null, true);
        echo "-row-link\"
   href=\"#\"
   data-category-id=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "category_id_field", []), [], "array"), "html", null, true);
        echo "\"
   data-category-delete-url=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "category_delete_route", []));
        echo "\"
   ";
        // line 36
        if ($this->getAttribute(($context["attributes"] ?? $this->getContext($context, "attributes")), "tooltip_name", [])) {
            // line 37
            echo "     data-toggle=\"pstooltip\"
     data-placement=\"top\"
     data-original-title=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "name", []), "html", null, true);
            echo "\"
   ";
        }
        // line 41
        echo ">
  ";
        // line 42
        if ( !twig_test_empty($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", []))) {
            // line 43
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", []), "html", null, true);
            echo "</i>
  ";
        }
        // line 45
        echo "  ";
        if ( !$this->getAttribute(($context["attributes"] ?? $this->getContext($context, "attributes")), "tooltip_name", [])) {
            // line 46
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "name", []), "html", null, true);
            echo "
  ";
        }
        // line 48
        echo "</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/delete_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 48,  93 => 46,  90 => 45,  84 => 43,  82 => 42,  79 => 41,  74 => 39,  70 => 37,  68 => 36,  64 => 35,  60 => 34,  53 => 32,  50 => 31,  46 => 29,  44 => 28,  41 => 27,  39 => 26,  36 => 25,);
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

{% set class = 'btn tooltip-link js-delete-category-row-action' %}

{% if attributes.class is defined %}
  {% set class = class ~ ' ' ~ attributes.class %}
{% endif %}

<a class=\"{{ class }} grid-{{ action.name|lower }}-row-link\"
   href=\"#\"
   data-category-id=\"{{ record[action.options.category_id_field] }}\"
   data-category-delete-url=\"{{ path(action.options.category_delete_route) }}\"
   {% if attributes.tooltip_name %}
     data-toggle=\"pstooltip\"
     data-placement=\"top\"
     data-original-title=\"{{ action.name }}\"
   {% endif %}
>
  {% if action.icon is not empty %}
    <i class=\"material-icons\">{{ action.icon }}</i>
  {% endif %}
  {% if not attributes.tooltip_name %}
    {{ action.name }}
  {% endif %}
</a>
", "@PrestaShop/Admin/Common/Grid/Actions/Row/delete_category.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Row/delete_category.html.twig");
    }
}
