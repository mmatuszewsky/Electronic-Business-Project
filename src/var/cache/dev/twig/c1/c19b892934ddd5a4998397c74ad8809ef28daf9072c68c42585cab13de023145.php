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

/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_9c01f9ed3a9fdc422a3207fc32c1cf37d0fc72c2adc9caadf6b560c815fb8727 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        // line 28
        $context["layoutTitle"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme & Logo", [], "Admin.Navigation.Menu") . " > ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme", [], "Admin.Design.Feature"));
        // line 29
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_import"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new theme", [], "Admin.Design.Feature"), "icon" => "add"], "export" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_export_current"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export current theme", [], "Admin.Design.Feature"), "icon" => "cloud_download"]];
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "  <div id=\"themes-logo-page\">
    <div class=\"row\">
      <div class=\"col\">

        ";
        // line 47
        if ( !($context["isSingleShopContext"] ?? $this->getContext($context, "isSingleShopContext"))) {
            // line 48
            echo "          <div class=\"alert alert-info\">
            <p class=\"alert-text\">
              ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You must select a shop from the above list if you wish to choose a theme.", [], "Admin.Design.Help"), "html", null, true);
            echo "
            </p>
          </div>
        ";
        }
        // line 54
        echo "
        ";
        // line 55
        if (($context["isInstalledRtlLanguage"] ?? $this->getContext($context, "isInstalledRtlLanguage"))) {
            // line 56
            echo "            ";
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 56)->display($context);
            // line 57
            echo "        ";
        }
        // line 58
        echo "
        ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "shop_logos", []), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_upload_logos")]);
        echo "
          ";
        // line 60
        if ((( !($context["isInstalledRtlLanguage"] ?? $this->getContext($context, "isInstalledRtlLanguage")) && ($context["isSingleShopContext"] ?? $this->getContext($context, "isSingleShopContext"))) && ($context["isMultiShopFeatureUsed"] ?? $this->getContext($context, "isMultiShopFeatureUsed")))) {
            // line 61
            echo "            ";
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 61)->display($context);
            // line 62
            echo "          ";
        }
        // line 63
        echo "          <div class=\"card\">
            <div class=\"card-header\">
              ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logo", [], "Admin.Global"), "html", null, true);
        echo "
            </div>
            <div class=\"card-body logo-configuration-card-body\">
              ";
        // line 68
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 68)->display($context);
        // line 69
        echo "            </div>
            <div class=\"card-footer\">
              <button class=\"btn btn-primary float-right\">
                ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
              </button>
              <div class=\"clearfix\">&nbsp;</div>
            </div>
          </div>
        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "shop_logos", []), 'rest');
        echo "
        ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "shop_logos", []), 'form_end');
        echo "

        <div class=\"card\">
          <div class=\"card-header\">
            ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My theme for %name% shop", ["%name%" => ($context["shopName"] ?? $this->getContext($context, "shopName"))], "Admin.Design.Feature"), "html", null, true);
        echo "
          </div>
          <div class=\"card-body row\">

            ";
        // line 86
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 86, "1574584413")->display(twig_array_merge($context, ["themeName" => $this->getAttribute(        // line 87
($context["currentlyUsedTheme"] ?? $this->getContext($context, "currentlyUsedTheme")), "name", []), "themeVersion" => $this->getAttribute(        // line 88
($context["currentlyUsedTheme"] ?? $this->getContext($context, "currentlyUsedTheme")), "get", [0 => "version"], "method"), "themeAuthor" => $this->getAttribute(        // line 89
($context["currentlyUsedTheme"] ?? $this->getContext($context, "currentlyUsedTheme")), "get", [0 => "author.name"], "method"), "isActive" => true]));
        // line 102
        echo "
            ";
        // line 103
        if ( !twig_test_empty(($context["notUsedThemes"] ?? $this->getContext($context, "notUsedThemes")))) {
            // line 104
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notUsedThemes"] ?? $this->getContext($context, "notUsedThemes")));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 105
                echo "                ";
                $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 105, "127464283")->display(twig_array_merge($context, ["themeName" => $this->getAttribute(                // line 106
$context["theme"], "name", []), "themeVersion" => $this->getAttribute(                // line 107
$context["theme"], "get", [0 => "version"], "method"), "themeAuthor" => $this->getAttribute(                // line 108
$context["theme"], "get", [0 => "author.name"], "method"), "isActive" => false]));
                // line 134
                echo "              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "
              ";
            // line 136
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 136)->display($context);
            // line 137
            echo "              ";
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 137)->display($context);
            // line 138
            echo "            ";
        }
        // line 139
        echo "
            ";
        // line 140
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 140, "417338545")->display($context);
        // line 156
        echo "
            ";
        // line 157
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 157)->display($context);
        // line 158
        echo "          </div>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 165
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 166
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/themes.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 168,  247 => 166,  238 => 165,  223 => 158,  221 => 157,  218 => 156,  216 => 140,  213 => 139,  210 => 138,  207 => 137,  205 => 136,  202 => 135,  188 => 134,  186 => 108,  185 => 107,  184 => 106,  182 => 105,  164 => 104,  162 => 103,  159 => 102,  157 => 89,  156 => 88,  155 => 87,  154 => 86,  147 => 82,  140 => 78,  136 => 77,  128 => 72,  123 => 69,  121 => 68,  115 => 65,  111 => 63,  108 => 62,  105 => 61,  103 => 60,  99 => 59,  96 => 58,  93 => 57,  90 => 56,  88 => 55,  85 => 54,  78 => 50,  74 => 48,  72 => 47,  66 => 43,  57 => 42,  47 => 26,  45 => 29,  43 => 28,  22 => 26,);
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

{% set layoutTitle = 'Theme & Logo'|trans({}, 'Admin.Navigation.Menu') ~ ' > ' ~ 'Theme'|trans({}, 'Admin.Design.Feature') %}
{% set layoutHeaderToolbarBtn = {
  'add': {
    'href': path('admin_themes_import'),
    'desc': 'Add new theme'|trans({}, 'Admin.Design.Feature'),
    'icon': 'add'
  },
  'export': {
    'href': path('admin_themes_export_current'),
    'desc': 'Export current theme'|trans({}, 'Admin.Design.Feature'),
    'icon': 'cloud_download'
  }
} %}

{% block content %}
  <div id=\"themes-logo-page\">
    <div class=\"row\">
      <div class=\"col\">

        {% if not isSingleShopContext %}
          <div class=\"alert alert-info\">
            <p class=\"alert-text\">
              {{ 'You must select a shop from the above list if you wish to choose a theme.'|trans({}, 'Admin.Design.Help') }}
            </p>
          </div>
        {% endif %}

        {% if isInstalledRtlLanguage %}
            {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig' %}
        {% endif %}

        {{ form_start(shopLogosForm.shop_logos, {'action': path('admin_themes_upload_logos')}) }}
          {% if not isInstalledRtlLanguage and isSingleShopContext and isMultiShopFeatureUsed %}
            {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig' %}
          {% endif %}
          <div class=\"card\">
            <div class=\"card-header\">
              {{ 'Logo'|trans({}, 'Admin.Global') }}
            </div>
            <div class=\"card-body logo-configuration-card-body\">
              {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig' %}
            </div>
            <div class=\"card-footer\">
              <button class=\"btn btn-primary float-right\">
                {{ 'Save'|trans({}, 'Admin.Actions') }}
              </button>
              <div class=\"clearfix\">&nbsp;</div>
            </div>
          </div>
        {{ form_rest(shopLogosForm.shop_logos) }}
        {{ form_end(shopLogosForm.shop_logos) }}

        <div class=\"card\">
          <div class=\"card-header\">
            {{ 'My theme for %name% shop'|trans({'%name%': shopName}, 'Admin.Design.Feature') }}
          </div>
          <div class=\"card-body row\">

            {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
              'themeName': currentlyUsedTheme.name,
              'themeVersion': currentlyUsedTheme.get('version'),
              'themeAuthor': currentlyUsedTheme.get('author.name'),
              'isActive': true
            } %}
              {% block image %}
                <img src=\"{{ baseShopUrl }}{{ currentlyUsedTheme.get('preview') }}\" alt=\"{{ currentlyUsedTheme.name }}\">
              {% endblock %}
              {% block button_container %}
                <button class=\"btn action-button\">
                  <i class=\"material-icons icon-current-theme\">done</i>
                  {{ 'My current theme'|trans({}, 'Admin.Design.Feature') }}
                </button>
              {% endblock %}
            {% endembed %}

            {% if notUsedThemes is not empty %}
              {% for theme in notUsedThemes %}
                {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
                  'themeName': theme.name,
                  'themeVersion': theme.get('version'),
                  'themeAuthor': theme.get('author.name'),
                  'isActive': false
                }  %}
                  {% block image %}
                    <img src=\"{{ baseShopUrl }}{{ theme.get('preview') }}\" alt=\"{{ theme.name }}\">
                  {% endblock %}
                  {% block button_container %}
                    <form action=\"{{ path('admin_themes_enable', {'themeName': theme.name}) }}\" method=\"post\" class=\"d-inline\">
                      <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('enable-theme') }}\" />
                      <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" {{ (not isSingleShopContext) ? 'disabled' : '' }}>
                        <i class=\"material-icons\">
                          present_to_all
                        </i>
                        <span>{{ 'Use this theme'|trans({}, 'Admin.Design.Feature') }}</span>
                      </button>
                    </form>
                    <form action=\"{{ path('admin_themes_delete', {'themeName': theme.name}) }}\" method=\"post\" class=\"d-inline\">
                      <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-theme') }}\" />
                      <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                        <i class=\"material-icons\">
                          delete
                        </i>
                      </button>
                    </form>
                  {% endblock %}
                {% endembed %}
              {% endfor %}

              {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig' %}
              {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig' %}
            {% endif %}

            {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_catalog_card.html.twig' %}
              {% block image %}
                <img src=\"{{ asset('themes/new-theme/scss/img/pages/themes/icon_themes.png') }}\" alt=\"{{ 'Visit the theme catalog'|trans({}, 'Admin.Design.Feature') }}\">
              {% endblock %}

              {% block description %}
                {{ 'Explore more than a thousand themes'|trans({}, 'Admin.Design.Feature') }}
              {% endblock %}

              {% block button_container %}
                <a class=\"btn btn-primary\" href=\"{{ themeCatalogUrl }}\" target=\"_blank\">
                  {{ 'Visit the theme catalog'|trans({}, 'Admin.Design.Feature') }}
                </a>
              {% endblock %}

            {% endembed %}

            {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig' %}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/themes.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_9c01f9ed3a9fdc422a3207fc32c1cf37d0fc72c2adc9caadf6b560c815fb8727___1574584413 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 86
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 86);
        $this->blocks = [
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 92
    public function block_image($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        // line 93
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, ($context["baseShopUrl"] ?? $this->getContext($context, "baseShopUrl")), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentlyUsedTheme"] ?? $this->getContext($context, "currentlyUsedTheme")), "get", [0 => "preview"], "method"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentlyUsedTheme"] ?? $this->getContext($context, "currentlyUsedTheme")), "name", []), "html", null, true);
        echo "\">
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_button_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        // line 96
        echo "                <button class=\"btn action-button\">
                  <i class=\"material-icons icon-current-theme\">done</i>
                  ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My current theme", [], "Admin.Design.Feature"), "html", null, true);
        echo "
                </button>
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 98,  535 => 96,  526 => 95,  510 => 93,  501 => 92,  471 => 86,  253 => 168,  247 => 166,  238 => 165,  223 => 158,  221 => 157,  218 => 156,  216 => 140,  213 => 139,  210 => 138,  207 => 137,  205 => 136,  202 => 135,  188 => 134,  186 => 108,  185 => 107,  184 => 106,  182 => 105,  164 => 104,  162 => 103,  159 => 102,  157 => 89,  156 => 88,  155 => 87,  154 => 86,  147 => 82,  140 => 78,  136 => 77,  128 => 72,  123 => 69,  121 => 68,  115 => 65,  111 => 63,  108 => 62,  105 => 61,  103 => 60,  99 => 59,  96 => 58,  93 => 57,  90 => 56,  88 => 55,  85 => 54,  78 => 50,  74 => 48,  72 => 47,  66 => 43,  57 => 42,  47 => 26,  45 => 29,  43 => 28,  22 => 26,);
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

{% set layoutTitle = 'Theme & Logo'|trans({}, 'Admin.Navigation.Menu') ~ ' > ' ~ 'Theme'|trans({}, 'Admin.Design.Feature') %}
{% set layoutHeaderToolbarBtn = {
  'add': {
    'href': path('admin_themes_import'),
    'desc': 'Add new theme'|trans({}, 'Admin.Design.Feature'),
    'icon': 'add'
  },
  'export': {
    'href': path('admin_themes_export_current'),
    'desc': 'Export current theme'|trans({}, 'Admin.Design.Feature'),
    'icon': 'cloud_download'
  }
} %}

{% block content %}
  <div id=\"themes-logo-page\">
    <div class=\"row\">
      <div class=\"col\">

        {% if not isSingleShopContext %}
          <div class=\"alert alert-info\">
            <p class=\"alert-text\">
              {{ 'You must select a shop from the above list if you wish to choose a theme.'|trans({}, 'Admin.Design.Help') }}
            </p>
          </div>
        {% endif %}

        {% if isInstalledRtlLanguage %}
            {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig' %}
        {% endif %}

        {{ form_start(shopLogosForm.shop_logos, {'action': path('admin_themes_upload_logos')}) }}
          {% if not isInstalledRtlLanguage and isSingleShopContext and isMultiShopFeatureUsed %}
            {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig' %}
          {% endif %}
          <div class=\"card\">
            <div class=\"card-header\">
              {{ 'Logo'|trans({}, 'Admin.Global') }}
            </div>
            <div class=\"card-body logo-configuration-card-body\">
              {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig' %}
            </div>
            <div class=\"card-footer\">
              <button class=\"btn btn-primary float-right\">
                {{ 'Save'|trans({}, 'Admin.Actions') }}
              </button>
              <div class=\"clearfix\">&nbsp;</div>
            </div>
          </div>
        {{ form_rest(shopLogosForm.shop_logos) }}
        {{ form_end(shopLogosForm.shop_logos) }}

        <div class=\"card\">
          <div class=\"card-header\">
            {{ 'My theme for %name% shop'|trans({'%name%': shopName}, 'Admin.Design.Feature') }}
          </div>
          <div class=\"card-body row\">

            {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
              'themeName': currentlyUsedTheme.name,
              'themeVersion': currentlyUsedTheme.get('version'),
              'themeAuthor': currentlyUsedTheme.get('author.name'),
              'isActive': true
            } %}
              {% block image %}
                <img src=\"{{ baseShopUrl }}{{ currentlyUsedTheme.get('preview') }}\" alt=\"{{ currentlyUsedTheme.name }}\">
              {% endblock %}
              {% block button_container %}
                <button class=\"btn action-button\">
                  <i class=\"material-icons icon-current-theme\">done</i>
                  {{ 'My current theme'|trans({}, 'Admin.Design.Feature') }}
                </button>
              {% endblock %}
            {% endembed %}

            {% if notUsedThemes is not empty %}
              {% for theme in notUsedThemes %}
                {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
                  'themeName': theme.name,
                  'themeVersion': theme.get('version'),
                  'themeAuthor': theme.get('author.name'),
                  'isActive': false
                }  %}
                  {% block image %}
                    <img src=\"{{ baseShopUrl }}{{ theme.get('preview') }}\" alt=\"{{ theme.name }}\">
                  {% endblock %}
                  {% block button_container %}
                    <form action=\"{{ path('admin_themes_enable', {'themeName': theme.name}) }}\" method=\"post\" class=\"d-inline\">
                      <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('enable-theme') }}\" />
                      <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" {{ (not isSingleShopContext) ? 'disabled' : '' }}>
                        <i class=\"material-icons\">
                          present_to_all
                        </i>
                        <span>{{ 'Use this theme'|trans({}, 'Admin.Design.Feature') }}</span>
                      </button>
                    </form>
                    <form action=\"{{ path('admin_themes_delete', {'themeName': theme.name}) }}\" method=\"post\" class=\"d-inline\">
                      <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-theme') }}\" />
                      <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                        <i class=\"material-icons\">
                          delete
                        </i>
                      </button>
                    </form>
                  {% endblock %}
                {% endembed %}
              {% endfor %}

              {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig' %}
              {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig' %}
            {% endif %}

            {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_catalog_card.html.twig' %}
              {% block image %}
                <img src=\"{{ asset('themes/new-theme/scss/img/pages/themes/icon_themes.png') }}\" alt=\"{{ 'Visit the theme catalog'|trans({}, 'Admin.Design.Feature') }}\">
              {% endblock %}

              {% block description %}
                {{ 'Explore more than a thousand themes'|trans({}, 'Admin.Design.Feature') }}
              {% endblock %}

              {% block button_container %}
                <a class=\"btn btn-primary\" href=\"{{ themeCatalogUrl }}\" target=\"_blank\">
                  {{ 'Visit the theme catalog'|trans({}, 'Admin.Design.Feature') }}
                </a>
              {% endblock %}

            {% endembed %}

            {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig' %}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/themes.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_9c01f9ed3a9fdc422a3207fc32c1cf37d0fc72c2adc9caadf6b560c815fb8727___127464283 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 105
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 105);
        $this->blocks = [
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 111
    public function block_image($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        // line 112
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, ($context["baseShopUrl"] ?? $this->getContext($context, "baseShopUrl")), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? $this->getContext($context, "theme")), "get", [0 => "preview"], "method"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? $this->getContext($context, "theme")), "name", []), "html", null, true);
        echo "\">
                  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_button_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        // line 115
        echo "                    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_enable", ["themeName" => $this->getAttribute(($context["theme"] ?? $this->getContext($context, "theme")), "name", [])]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                      <input type=\"hidden\" name=\"token\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("enable-theme"), "html", null, true);
        echo "\" />
                      <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" ";
        // line 117
        echo (( !($context["isSingleShopContext"] ?? $this->getContext($context, "isSingleShopContext"))) ? ("disabled") : (""));
        echo ">
                        <i class=\"material-icons\">
                          present_to_all
                        </i>
                        <span>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use this theme", [], "Admin.Design.Feature"), "html", null, true);
        echo "</span>
                      </button>
                    </form>
                    <form action=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_delete", ["themeName" => $this->getAttribute(($context["theme"] ?? $this->getContext($context, "theme")), "name", [])]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                      <input type=\"hidden\" name=\"token\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-theme"), "html", null, true);
        echo "\" />
                      <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                        <i class=\"material-icons\">
                          delete
                        </i>
                      </button>
                    </form>
                  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  848 => 125,  844 => 124,  838 => 121,  831 => 117,  827 => 116,  822 => 115,  813 => 114,  797 => 112,  788 => 111,  758 => 105,  539 => 98,  535 => 96,  526 => 95,  510 => 93,  501 => 92,  471 => 86,  253 => 168,  247 => 166,  238 => 165,  223 => 158,  221 => 157,  218 => 156,  216 => 140,  213 => 139,  210 => 138,  207 => 137,  205 => 136,  202 => 135,  188 => 134,  186 => 108,  185 => 107,  184 => 106,  182 => 105,  164 => 104,  162 => 103,  159 => 102,  157 => 89,  156 => 88,  155 => 87,  154 => 86,  147 => 82,  140 => 78,  136 => 77,  128 => 72,  123 => 69,  121 => 68,  115 => 65,  111 => 63,  108 => 62,  105 => 61,  103 => 60,  99 => 59,  96 => 58,  93 => 57,  90 => 56,  88 => 55,  85 => 54,  78 => 50,  74 => 48,  72 => 47,  66 => 43,  57 => 42,  47 => 26,  45 => 29,  43 => 28,  22 => 26,);
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

{% set layoutTitle = 'Theme & Logo'|trans({}, 'Admin.Navigation.Menu') ~ ' > ' ~ 'Theme'|trans({}, 'Admin.Design.Feature') %}
{% set layoutHeaderToolbarBtn = {
  'add': {
    'href': path('admin_themes_import'),
    'desc': 'Add new theme'|trans({}, 'Admin.Design.Feature'),
    'icon': 'add'
  },
  'export': {
    'href': path('admin_themes_export_current'),
    'desc': 'Export current theme'|trans({}, 'Admin.Design.Feature'),
    'icon': 'cloud_download'
  }
} %}

{% block content %}
  <div id=\"themes-logo-page\">
    <div class=\"row\">
      <div class=\"col\">

        {% if not isSingleShopContext %}
          <div class=\"alert alert-info\">
            <p class=\"alert-text\">
              {{ 'You must select a shop from the above list if you wish to choose a theme.'|trans({}, 'Admin.Design.Help') }}
            </p>
          </div>
        {% endif %}

        {% if isInstalledRtlLanguage %}
            {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig' %}
        {% endif %}

        {{ form_start(shopLogosForm.shop_logos, {'action': path('admin_themes_upload_logos')}) }}
          {% if not isInstalledRtlLanguage and isSingleShopContext and isMultiShopFeatureUsed %}
            {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig' %}
          {% endif %}
          <div class=\"card\">
            <div class=\"card-header\">
              {{ 'Logo'|trans({}, 'Admin.Global') }}
            </div>
            <div class=\"card-body logo-configuration-card-body\">
              {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig' %}
            </div>
            <div class=\"card-footer\">
              <button class=\"btn btn-primary float-right\">
                {{ 'Save'|trans({}, 'Admin.Actions') }}
              </button>
              <div class=\"clearfix\">&nbsp;</div>
            </div>
          </div>
        {{ form_rest(shopLogosForm.shop_logos) }}
        {{ form_end(shopLogosForm.shop_logos) }}

        <div class=\"card\">
          <div class=\"card-header\">
            {{ 'My theme for %name% shop'|trans({'%name%': shopName}, 'Admin.Design.Feature') }}
          </div>
          <div class=\"card-body row\">

            {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
              'themeName': currentlyUsedTheme.name,
              'themeVersion': currentlyUsedTheme.get('version'),
              'themeAuthor': currentlyUsedTheme.get('author.name'),
              'isActive': true
            } %}
              {% block image %}
                <img src=\"{{ baseShopUrl }}{{ currentlyUsedTheme.get('preview') }}\" alt=\"{{ currentlyUsedTheme.name }}\">
              {% endblock %}
              {% block button_container %}
                <button class=\"btn action-button\">
                  <i class=\"material-icons icon-current-theme\">done</i>
                  {{ 'My current theme'|trans({}, 'Admin.Design.Feature') }}
                </button>
              {% endblock %}
            {% endembed %}

            {% if notUsedThemes is not empty %}
              {% for theme in notUsedThemes %}
                {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
                  'themeName': theme.name,
                  'themeVersion': theme.get('version'),
                  'themeAuthor': theme.get('author.name'),
                  'isActive': false
                }  %}
                  {% block image %}
                    <img src=\"{{ baseShopUrl }}{{ theme.get('preview') }}\" alt=\"{{ theme.name }}\">
                  {% endblock %}
                  {% block button_container %}
                    <form action=\"{{ path('admin_themes_enable', {'themeName': theme.name}) }}\" method=\"post\" class=\"d-inline\">
                      <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('enable-theme') }}\" />
                      <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" {{ (not isSingleShopContext) ? 'disabled' : '' }}>
                        <i class=\"material-icons\">
                          present_to_all
                        </i>
                        <span>{{ 'Use this theme'|trans({}, 'Admin.Design.Feature') }}</span>
                      </button>
                    </form>
                    <form action=\"{{ path('admin_themes_delete', {'themeName': theme.name}) }}\" method=\"post\" class=\"d-inline\">
                      <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-theme') }}\" />
                      <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                        <i class=\"material-icons\">
                          delete
                        </i>
                      </button>
                    </form>
                  {% endblock %}
                {% endembed %}
              {% endfor %}

              {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig' %}
              {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig' %}
            {% endif %}

            {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_catalog_card.html.twig' %}
              {% block image %}
                <img src=\"{{ asset('themes/new-theme/scss/img/pages/themes/icon_themes.png') }}\" alt=\"{{ 'Visit the theme catalog'|trans({}, 'Admin.Design.Feature') }}\">
              {% endblock %}

              {% block description %}
                {{ 'Explore more than a thousand themes'|trans({}, 'Admin.Design.Feature') }}
              {% endblock %}

              {% block button_container %}
                <a class=\"btn btn-primary\" href=\"{{ themeCatalogUrl }}\" target=\"_blank\">
                  {{ 'Visit the theme catalog'|trans({}, 'Admin.Design.Feature') }}
                </a>
              {% endblock %}

            {% endembed %}

            {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig' %}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/themes.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_9c01f9ed3a9fdc422a3207fc32c1cf37d0fc72c2adc9caadf6b560c815fb8727___417338545 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 140
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_catalog_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 140);
        $this->blocks = [
            'image' => [$this, 'block_image'],
            'description' => [$this, 'block_description'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_catalog_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 141
    public function block_image($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        // line 142
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/scss/img/pages/themes/icon_themes.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Visit the theme catalog", [], "Admin.Design.Feature"), "html", null, true);
        echo "\">
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_description($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        // line 146
        echo "                ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Explore more than a thousand themes", [], "Admin.Design.Feature"), "html", null, true);
        echo "
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 149
    public function block_button_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        // line 150
        echo "                <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, ($context["themeCatalogUrl"] ?? $this->getContext($context, "themeCatalogUrl")), "html", null, true);
        echo "\" target=\"_blank\">
                  ";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Visit the theme catalog", [], "Admin.Design.Feature"), "html", null, true);
        echo "
                </a>
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1163 => 151,  1158 => 150,  1149 => 149,  1136 => 146,  1127 => 145,  1112 => 142,  1103 => 141,  1072 => 140,  848 => 125,  844 => 124,  838 => 121,  831 => 117,  827 => 116,  822 => 115,  813 => 114,  797 => 112,  788 => 111,  758 => 105,  539 => 98,  535 => 96,  526 => 95,  510 => 93,  501 => 92,  471 => 86,  253 => 168,  247 => 166,  238 => 165,  223 => 158,  221 => 157,  218 => 156,  216 => 140,  213 => 139,  210 => 138,  207 => 137,  205 => 136,  202 => 135,  188 => 134,  186 => 108,  185 => 107,  184 => 106,  182 => 105,  164 => 104,  162 => 103,  159 => 102,  157 => 89,  156 => 88,  155 => 87,  154 => 86,  147 => 82,  140 => 78,  136 => 77,  128 => 72,  123 => 69,  121 => 68,  115 => 65,  111 => 63,  108 => 62,  105 => 61,  103 => 60,  99 => 59,  96 => 58,  93 => 57,  90 => 56,  88 => 55,  85 => 54,  78 => 50,  74 => 48,  72 => 47,  66 => 43,  57 => 42,  47 => 26,  45 => 29,  43 => 28,  22 => 26,);
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

{% set layoutTitle = 'Theme & Logo'|trans({}, 'Admin.Navigation.Menu') ~ ' > ' ~ 'Theme'|trans({}, 'Admin.Design.Feature') %}
{% set layoutHeaderToolbarBtn = {
  'add': {
    'href': path('admin_themes_import'),
    'desc': 'Add new theme'|trans({}, 'Admin.Design.Feature'),
    'icon': 'add'
  },
  'export': {
    'href': path('admin_themes_export_current'),
    'desc': 'Export current theme'|trans({}, 'Admin.Design.Feature'),
    'icon': 'cloud_download'
  }
} %}

{% block content %}
  <div id=\"themes-logo-page\">
    <div class=\"row\">
      <div class=\"col\">

        {% if not isSingleShopContext %}
          <div class=\"alert alert-info\">
            <p class=\"alert-text\">
              {{ 'You must select a shop from the above list if you wish to choose a theme.'|trans({}, 'Admin.Design.Help') }}
            </p>
          </div>
        {% endif %}

        {% if isInstalledRtlLanguage %}
            {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig' %}
        {% endif %}

        {{ form_start(shopLogosForm.shop_logos, {'action': path('admin_themes_upload_logos')}) }}
          {% if not isInstalledRtlLanguage and isSingleShopContext and isMultiShopFeatureUsed %}
            {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig' %}
          {% endif %}
          <div class=\"card\">
            <div class=\"card-header\">
              {{ 'Logo'|trans({}, 'Admin.Global') }}
            </div>
            <div class=\"card-body logo-configuration-card-body\">
              {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig' %}
            </div>
            <div class=\"card-footer\">
              <button class=\"btn btn-primary float-right\">
                {{ 'Save'|trans({}, 'Admin.Actions') }}
              </button>
              <div class=\"clearfix\">&nbsp;</div>
            </div>
          </div>
        {{ form_rest(shopLogosForm.shop_logos) }}
        {{ form_end(shopLogosForm.shop_logos) }}

        <div class=\"card\">
          <div class=\"card-header\">
            {{ 'My theme for %name% shop'|trans({'%name%': shopName}, 'Admin.Design.Feature') }}
          </div>
          <div class=\"card-body row\">

            {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
              'themeName': currentlyUsedTheme.name,
              'themeVersion': currentlyUsedTheme.get('version'),
              'themeAuthor': currentlyUsedTheme.get('author.name'),
              'isActive': true
            } %}
              {% block image %}
                <img src=\"{{ baseShopUrl }}{{ currentlyUsedTheme.get('preview') }}\" alt=\"{{ currentlyUsedTheme.name }}\">
              {% endblock %}
              {% block button_container %}
                <button class=\"btn action-button\">
                  <i class=\"material-icons icon-current-theme\">done</i>
                  {{ 'My current theme'|trans({}, 'Admin.Design.Feature') }}
                </button>
              {% endblock %}
            {% endembed %}

            {% if notUsedThemes is not empty %}
              {% for theme in notUsedThemes %}
                {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
                  'themeName': theme.name,
                  'themeVersion': theme.get('version'),
                  'themeAuthor': theme.get('author.name'),
                  'isActive': false
                }  %}
                  {% block image %}
                    <img src=\"{{ baseShopUrl }}{{ theme.get('preview') }}\" alt=\"{{ theme.name }}\">
                  {% endblock %}
                  {% block button_container %}
                    <form action=\"{{ path('admin_themes_enable', {'themeName': theme.name}) }}\" method=\"post\" class=\"d-inline\">
                      <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('enable-theme') }}\" />
                      <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" {{ (not isSingleShopContext) ? 'disabled' : '' }}>
                        <i class=\"material-icons\">
                          present_to_all
                        </i>
                        <span>{{ 'Use this theme'|trans({}, 'Admin.Design.Feature') }}</span>
                      </button>
                    </form>
                    <form action=\"{{ path('admin_themes_delete', {'themeName': theme.name}) }}\" method=\"post\" class=\"d-inline\">
                      <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-theme') }}\" />
                      <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                        <i class=\"material-icons\">
                          delete
                        </i>
                      </button>
                    </form>
                  {% endblock %}
                {% endembed %}
              {% endfor %}

              {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig' %}
              {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig' %}
            {% endif %}

            {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_catalog_card.html.twig' %}
              {% block image %}
                <img src=\"{{ asset('themes/new-theme/scss/img/pages/themes/icon_themes.png') }}\" alt=\"{{ 'Visit the theme catalog'|trans({}, 'Admin.Design.Feature') }}\">
              {% endblock %}

              {% block description %}
                {{ 'Explore more than a thousand themes'|trans({}, 'Admin.Design.Feature') }}
              {% endblock %}

              {% block button_container %}
                <a class=\"btn btn-primary\" href=\"{{ themeCatalogUrl }}\" target=\"_blank\">
                  {{ 'Visit the theme catalog'|trans({}, 'Admin.Design.Feature') }}
                </a>
              {% endblock %}

            {% endembed %}

            {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig' %}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/themes.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}
