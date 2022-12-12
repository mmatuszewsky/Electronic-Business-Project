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

/* @Common/HelpBox/helpbox.html.twig */
class __TwigTemplate_207d75b9833ac42aaafe9108513a98f5e0e6b13a1808ef9614b2ca80cd16d262 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Common/HelpBox/helpbox.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Common/HelpBox/helpbox.html.twig"));

        // line 25
        echo "
 <span
   class=\"help-box";
        // line 27
        if (array_key_exists("classes", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["classes"] ?? $this->getContext($context, "classes")), "html", null, true);
        }
        echo "\"
   data-toggle=\"popover\"
   data-trigger=\"hover\"
   data-html=\"true\"
   ";
        // line 31
        if (array_key_exists("content", $context)) {
            // line 32
            echo "     data-content=\"";
            echo twig_escape_filter($this->env, ($context["content"] ?? $this->getContext($context, "content")), "html", null, true);
            echo "\"
   ";
        }
        // line 34
        echo "
   ";
        // line 35
        if (array_key_exists("placement", $context)) {
            // line 36
            echo "     data-placement=\"";
            echo twig_escape_filter($this->env, ($context["placement"] ?? $this->getContext($context, "placement")), "html", null, true);
            echo "\"
   ";
        }
        // line 38
        echo "
   ";
        // line 39
        if (array_key_exists("title", $context)) {
            // line 40
            echo "     data-title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "\"
   ";
        }
        // line 42
        echo " >
 </span>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Common/HelpBox/helpbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 42,  74 => 40,  72 => 39,  69 => 38,  63 => 36,  61 => 35,  58 => 34,  52 => 32,  50 => 31,  40 => 27,  36 => 25,);
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

 <span
   class=\"help-box{% if classes is defined %} {{ classes }}{% endif %}\"
   data-toggle=\"popover\"
   data-trigger=\"hover\"
   data-html=\"true\"
   {% if content is defined %}
     data-content=\"{{ content }}\"
   {% endif %}

   {% if placement is defined %}
     data-placement=\"{{ placement}}\"
   {% endif %}

   {% if title is defined %}
     data-title=\"{{ title }}\"
   {% endif %}
 >
 </span>
", "@Common/HelpBox/helpbox.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/HelpBox/helpbox.html.twig");
    }
}
