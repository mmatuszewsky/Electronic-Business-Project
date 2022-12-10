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

/* @Modules/ps_linklist/views/templates/admin/link_block/form.html.twig */
class __TwigTemplate_ffe49d615494f8ae2ebc28e2fc9471fc963a7f22e89cb0b6c5765e0e12d958d5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'link_block_form' => [$this, 'block_link_block_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 19
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/views/templates/admin/link_block/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/views/templates/admin/link_block/form.html.twig"));

        // line 21
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), [0 => "@Modules/ps_linklist/views/templates/admin/fields.html.twig"], true);
        // line 19
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@Modules/ps_linklist/views/templates/admin/link_block/form.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? null), "vars", [], "any", false, true), "data", [], "any", false, true), "link_block", [], "any", false, true), "id_link_block", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), "vars", []), "data", []), "link_block", []), "id_link_block", [])))) {
            // line 25
            echo "        ";
            $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_link_block_edit_process", ["linkBlockId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), "vars", []), "data", []), "link_block", []), "id_link_block", [])]);
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "        ";
            $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_link_block_create_process");
            // line 28
            echo "    ";
        }
        // line 29
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), 'form_start', ["action" => ($context["formAction"] ?? $this->getContext($context, "formAction")), "attr" => ["class" => "form", "id" => "link_block_form"]]);
        echo "
    <div class=\"row justify-content-center\">
        ";
        // line 31
        $this->displayBlock('link_block_form', $context, $blocks);
        // line 73
        echo "    </div>
    ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_link_block_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link_block_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link_block_form"));

        // line 32
        echo "            <div class=\"col-xl-10\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">mode_edit</i>
                        ";
        // line 36
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? null), "vars", [], "any", false, true), "data", [], "any", false, true), "link_block", [], "any", false, true), "id_link_block", [], "any", true, true)) {
            // line 37
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit the link block.", [], "Modules.Linklist.Admin"), "html", null, true);
            echo "
                        ";
        } else {
            // line 39
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New link block", [], "Modules.Linklist.Admin"), "html", null, true);
            echo "
                        ";
        }
        // line 41
        echo "                    </h3>
                    <div class=\"card-block row\">
                        <div class=\"card-text\">
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), "link_block", []), "block_name", []), 'row');
        echo "
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), "link_block", []), "id_hook", []), 'row');
        echo "
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), "link_block", []), "cms", []), 'row');
        echo "
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), "link_block", []), "product", []), 'row');
        echo "
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), "link_block", []), "category", []), 'row');
        echo "
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), "link_block", []), "static", []), 'row');
        echo "
                            ";
        // line 50
        if ($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? null), "link_block", [], "any", false, true), "shop_association", [], "any", true, true)) {
            // line 51
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), "link_block", []), "shop_association", []), 'row');
            echo "
                            ";
        }
        // line 53
        echo "                            <div class=\"form-group\">
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), "link_block", []), "custom", []), 'row');
        echo "
                                <div class=\"d-flex justify-content-end\">
                                    <button data-collection-id=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), "link_block", []), "custom", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"btn btn-primary add-collection-btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), "link_block", []), 'rest');
        echo "
                            ";
        // line 60
        $this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), "link_block", []), "setRendered", []);
        // line 61
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["linkBlockForm"] ?? $this->getContext($context, "linkBlockForm")), 'rest');
        echo "
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_link_block_list");
        echo "\" class=\"btn btn-secondary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "</a>
                            <button class=\"btn btn-primary\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../modules/ps_linklist/views/public/form.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/views/templates/admin/link_block/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 80,  231 => 78,  222 => 77,  206 => 67,  200 => 66,  191 => 61,  189 => 60,  185 => 59,  177 => 56,  172 => 54,  169 => 53,  163 => 51,  161 => 50,  157 => 49,  153 => 48,  149 => 47,  145 => 46,  141 => 45,  137 => 44,  132 => 41,  126 => 39,  120 => 37,  118 => 36,  112 => 32,  103 => 31,  91 => 74,  88 => 73,  86 => 31,  80 => 29,  77 => 28,  74 => 27,  71 => 26,  68 => 25,  65 => 24,  56 => 23,  45 => 19,  43 => 21,  31 => 19,);
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
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Design.Feature\" %}
{% form_theme linkBlockForm '@Modules/ps_linklist/views/templates/admin/fields.html.twig' %}

{% block content %}
    {% if linkBlockForm.vars.data.link_block.id_link_block is defined and linkBlockForm.vars.data.link_block.id_link_block is not null %}
        {% set formAction = url('admin_link_block_edit_process', {'linkBlockId': linkBlockForm.vars.data.link_block.id_link_block}) %}
    {% else %}
        {% set formAction = url('admin_link_block_create_process') %}
    {% endif %}
    {{ form_start(linkBlockForm, {'action': formAction, 'attr': {'class': 'form', 'id': 'link_block_form'}}) }}
    <div class=\"row justify-content-center\">
        {% block link_block_form %}
            <div class=\"col-xl-10\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">mode_edit</i>
                        {% if linkBlockForm.vars.data.link_block.id_link_block is defined %}
                            {{ 'Edit the link block.'|trans({}, 'Modules.Linklist.Admin') }}
                        {% else %}
                        {{ 'New link block'|trans({}, 'Modules.Linklist.Admin') }}
                        {% endif %}
                    </h3>
                    <div class=\"card-block row\">
                        <div class=\"card-text\">
                            {{ form_row(linkBlockForm.link_block.block_name) }}
                            {{ form_row(linkBlockForm.link_block.id_hook) }}
                            {{ form_row(linkBlockForm.link_block.cms) }}
                            {{ form_row(linkBlockForm.link_block.product) }}
                            {{ form_row(linkBlockForm.link_block.category) }}
                            {{ form_row(linkBlockForm.link_block.static) }}
                            {% if linkBlockForm.link_block.shop_association is defined %}
                                {{ form_row(linkBlockForm.link_block.shop_association) }}
                            {% endif %}
                            <div class=\"form-group\">
                                {{ form_row(linkBlockForm.link_block.custom) }}
                                <div class=\"d-flex justify-content-end\">
                                    <button data-collection-id=\"{{ linkBlockForm.link_block.custom.vars.id }}\" class=\"btn btn-primary add-collection-btn\">{{ 'Add'|trans({}, 'Admin.Actions') }}</button>
                                </div>
                            </div>
                            {{ form_rest(linkBlockForm.link_block) }}
                            {% do linkBlockForm.link_block.setRendered %}
                            {{ form_rest(linkBlockForm) }}
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"{{ url('admin_link_block_list') }}\" class=\"btn btn-secondary\">{{ 'Cancel'|trans({}, 'Admin.Actions') }}</a>
                            <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        {% endblock %}
    </div>
    {{ form_end(linkBlockForm) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('../modules/ps_linklist/views/public/form.bundle.js') }}\"></script>
{% endblock %}
", "@Modules/ps_linklist/views/templates/admin/link_block/form.html.twig", "/var/www/html/modules/ps_linklist/views/templates/admin/link_block/form.html.twig");
    }
}
