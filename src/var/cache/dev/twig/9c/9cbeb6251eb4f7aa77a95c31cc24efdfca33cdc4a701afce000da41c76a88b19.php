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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig */
class __TwigTemplate_3edaa5edba1547d556bd65e70128d0782541400fb145e35f5941dd6d351a350d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <div class=\"card-block\">
    <nav>
      <ol class=\"breadcrumb\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentCategoryView"] ?? $this->getContext($context, "currentCategoryView")), "breadcrumb_tree", []));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 31
            echo "          ";
            $context["isRootCategory"] = ($this->getAttribute($context["category"], "id_parent", []) == 0);
            // line 32
            echo "          <li class=\"breadcrumb-item\">
            ";
            // line 33
            if ((($context["isRootCategory"] ?? $this->getContext($context, "isRootCategory")) && ($context["isSingleShopContext"] ?? $this->getContext($context, "isSingleShopContext")))) {
                // line 34
                echo "              ";
                if (($this->getAttribute($context["category"], "id_category", []) == $this->getAttribute(($context["currentCategoryView"] ?? $this->getContext($context, "currentCategoryView")), "id", []))) {
                    // line 35
                    echo "                <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                    echo "</span>
              ";
                } else {
                    // line 37
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_index");
                    echo "\">
                  ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                    echo "
                </a>
              ";
                }
                // line 41
                echo "            ";
            } elseif (($this->getAttribute($context["category"], "id_category", []) == $this->getAttribute(($context["currentCategoryView"] ?? $this->getContext($context, "currentCategoryView")), "id", []))) {
                // line 42
                echo "              <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                echo "</span>
                ";
                // line 43
                if ( !($context["isRootCategory"] ?? $this->getContext($context, "isRootCategory"))) {
                    // line 44
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_edit", ["categoryId" => $this->getAttribute($context["category"], "id_category", [])]), "html", null, true);
                    echo "\">
                    <i style=\"font-size: 16px;\" class=\"material-icons\">edit</i>
                    ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                    echo "
                  </a>
                ";
                }
                // line 49
                echo "            ";
            } else {
                // line 50
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_index", ["categoryId" => $this->getAttribute($context["category"], "id_category", [])]), "html", null, true);
                echo "\">
                ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                echo "
              </a>
            ";
            }
            // line 54
            echo "          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "      </ol>
    </nav>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 56,  111 => 54,  105 => 51,  100 => 50,  97 => 49,  91 => 46,  85 => 44,  83 => 43,  78 => 42,  75 => 41,  69 => 38,  64 => 37,  58 => 35,  55 => 34,  53 => 33,  50 => 32,  47 => 31,  43 => 30,  36 => 25,);
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

<div class=\"card\">
  <div class=\"card-block\">
    <nav>
      <ol class=\"breadcrumb\">
        {% for category in currentCategoryView.breadcrumb_tree %}
          {% set isRootCategory = (category.id_parent == 0) %}
          <li class=\"breadcrumb-item\">
            {% if isRootCategory and isSingleShopContext %}
              {% if category.id_category == currentCategoryView.id %}
                <span>{{ category.name }}</span>
              {% else %}
                <a href=\"{{ path('admin_categories_index') }}\">
                  {{ category.name }}
                </a>
              {% endif %}
            {% elseif category.id_category == currentCategoryView.id %}
              <span>{{ category.name }}</span>
                {% if not isRootCategory %}
                  <a href=\"{{ path('admin_categories_edit', {'categoryId': category.id_category}) }}\">
                    <i style=\"font-size: 16px;\" class=\"material-icons\">edit</i>
                    {{ 'Edit'|trans({}, 'Admin.Actions') }}
                  </a>
                {% endif %}
            {% else %}
              <a href=\"{{ path('admin_categories_index', {'categoryId': category.id_category}) }}\">
                {{ category.name }}
              </a>
            {% endif %}
          </li>
        {% endfor %}
      </ol>
    </nav>
  </div>
</div>
", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig");
    }
}
