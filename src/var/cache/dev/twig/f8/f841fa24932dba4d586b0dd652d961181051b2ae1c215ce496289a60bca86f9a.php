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

/* @Product/ProductPage/Blocks/footer.html.twig */
class __TwigTemplate_baf241e229a8444253cc99ce711702a23c671558baa7dd39ea19647fee82723f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_footer' => [$this, 'block_product_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Blocks/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Blocks/footer.html.twig"));

        // line 25
        $this->displayBlock('product_footer', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_product_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_footer"));

        // line 26
        echo "  <div class=\"product-footer justify-content-md-center\">
    <div class=\"col-lg-4\">
      <a
        href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", ["action" => "delete", "id" => ($context["productId"] ?? $this->getContext($context, "productId"))]), "html", null, true);
        echo "\"
        class=\"tooltip-link btn btn-lg delete\"
        data-toggle=\"pstooltip\"
        id=\"product_form_delete_btn\"
        title=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Permanently delete this product.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
        data-placement=\"left\"
        data-original-title=\"Delete\"
      >
        <i class=\"material-icons\">delete</i>
      </a>
      <a
        href=\"\"
        data-seo-url=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["seo_link"] ?? $this->getContext($context, "seo_link")), "html", null, true);
        echo "\"
        data-redirect=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["preview_link"] ?? $this->getContext($context, "preview_link")), "html", null, true);
        echo "\"
        data-url-deactive=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["preview_link_deactivate"] ?? $this->getContext($context, "preview_link_deactivate")), "html", null, true);
        echo "\"
        target=\"_blank\"
        class=\"btn btn-secondary preview\"
        data-toggle=\"pstooltip\"
        id=\"product_form_preview_btn\"
        title=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("See how your product sheet will look online: ALT+SHIFT+V", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
      >
        ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Preview", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      ";
        // line 52
        if (($context["editable"] ?? $this->getContext($context, "editable"))) {
            // line 53
            echo "        <h2 class=\"for-switch online-title\" ";
            if ( !($context["is_active"] ?? $this->getContext($context, "is_active"))) {
                echo "style=\"display:none;\"";
            }
            echo " data-toggle=\"pstooltip\"
          title=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable the product on your shop: ALT+SHIFT+O", [], "Admin.Catalog.Help"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Online", [], "Admin.Global"), "html", null, true);
            echo "</h2>
        <h2 class=\"for-switch offline-title\" ";
            // line 55
            if (($context["is_active"] ?? $this->getContext($context, "is_active"))) {
                echo "style=\"display:none;\"";
            }
            echo " data-toggle=\"pstooltip\"
          title=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable the product on your shop: ALT+SHIFT+O", [], "Admin.Catalog.Help"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Offline", [], "Admin.Global"), "html", null, true);
            echo "</h2>
        <input
          class=\"switch-input-lg\"
          id=\"form_step1_active\"
          data-toggle=\"switch\"
          type=\"checkbox\"
          name=\"form[step1][active]\"
          value=\"1\"
          ";
            // line 64
            echo ((($context["is_active"] ?? $this->getContext($context, "is_active"))) ? ("checked=\"checked\"") : (""));
            echo "
        />
      ";
        }
        // line 67
        echo "    </div>
    <div class=\"col-sm-5 col-lg-7 text-right\">
      <input
        id=\"submit\"
        type=\"submit\"
        class=\"btn btn-primary save uppercase ml-3\"
        value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "\"
        data-toggle=\"pstooltip\"
        title=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save the product and stay on the current page: ALT+SHIFT+S", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
      />
      ";
        // line 77
        if (($context["is_shop_context"] ?? $this->getContext($context, "is_shop_context"))) {
            // line 78
            echo "        <button
          type=\"button\"
          class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase duplicate ml-3\"
          id=\"product_form_save_duplicate_btn\"
          data-redirect=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", ["action" => "duplicate", "id" => ($context["productId"] ?? $this->getContext($context, "productId"))]), "html", null, true);
            echo "\"
          data-toggle=\"pstooltip\"
          title=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and duplicate this product, then go to the new product: ALT+SHIFT+D", [], "Admin.Catalog.Help"), "html", null, true);
            echo "\"
        >
          ";
            // line 86
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", [], "Admin.Actions");
            echo "
        </button>
      ";
        }
        // line 89
        echo "      <button
        type=\"button\"
        class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase go-catalog ml-3\"
        id=\"product_form_save_go_to_catalog_btn\"
        data-redirect=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", ["offset" => "last", "limit" => "last"]), "html", null, true);
        echo "\"
        data-toggle=\"pstooltip\"
        title=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and go back to the catalog: ALT+SHIFT+Q", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
      >
        ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to catalog", [], "Admin.Catalog.Feature");
        echo "
      </button>
      <button
        type=\"button\"
        class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase new-product ml-3\"
        id=\"product_form_save_new_btn\"
        data-redirect=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
        data-toggle=\"pstooltip\"
        title=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and create a new product: ALT+SHIFT+P", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
      >
        ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new product", [], "Admin.Catalog.Feature");
        echo "
      </button>
      ";
        // line 109
        if (((($context["isProductPageV2Enabled"] ?? $this->getContext($context, "isProductPageV2Enabled")) == true) && (($context["isCreationMode"] ?? $this->getContext($context, "isCreationMode")) === true))) {
            // line 110
            echo "        <a
          class=\"btn btn-outline-primary ml-3\"
          href=\"";
            // line 112
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_products_v2_create");
            echo "\"
        >
          ";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New product on experimental page", [], "Admin.Catalog.Feature");
            echo "
        </a>
      ";
        }
        // line 117
        echo "      ";
        if (((($context["isProductPageV2Enabled"] ?? $this->getContext($context, "isProductPageV2Enabled")) == true) && (($context["isCreationMode"] ?? $this->getContext($context, "isCreationMode")) === false))) {
            // line 118
            echo "        <a
          class=\"btn btn-outline-primary ml-3\"
          href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_products_v2_edit", ["productId" => ($context["productId"] ?? $this->getContext($context, "productId"))]), "html", null, true);
            echo "\"
        >
          ";
            // line 122
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit on experimental page", [], "Admin.Catalog.Feature");
            echo "
        </a>
      ";
        }
        // line 125
        echo "
      <div class=\"js-spinner spinner hide btn-primary-reverse onclick mr-1 btn\"></div>
      <div class=\"btn-group hide dropdown\">
        <button
          class=\"btn btn-primary js-btn-save ml-3\"
          type=\"submit\"
        >
          <span>";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</span>
        </button><button
                   class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"
                   type=\"button\"
                   id=\"dropdownMenu\"
                   data-toggle=\"dropdown\"
                   aria-expanded=\"false\"
                 >
          <span class=\"sr-only\">Toggle Dropdown</span>
        </button>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          ";
        // line 143
        if (($context["is_shop_context"] ?? $this->getContext($context, "is_shop_context"))) {
            // line 144
            echo "            <a
              class=\"dropdown-item duplicate js-btn-save\"
              href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", ["action" => "duplicate", "id" => ($context["productId"] ?? $this->getContext($context, "productId"))]), "html", null, true);
            echo "\"
            >
              ";
            // line 148
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", [], "Admin.Actions");
            echo "
            </a>
          ";
        }
        // line 151
        echo "          <a
            class=\"dropdown-item go-catalog js-btn-save\"
            href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", ["offset" => "last", "limit" => "last"]), "html", null, true);
        echo "\"
          >
            ";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to catalog", [], "Admin.Catalog.Feature");
        echo "
          </a>
          <a
            class=\"dropdown-item new-product js-btn-save\"
            href=\"";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
          >
            ";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new product", [], "Admin.Catalog.Feature");
        echo "
          </a>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Blocks/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  322 => 161,  317 => 159,  310 => 155,  305 => 153,  301 => 151,  295 => 148,  290 => 146,  286 => 144,  284 => 143,  270 => 132,  261 => 125,  255 => 122,  250 => 120,  246 => 118,  243 => 117,  237 => 114,  232 => 112,  228 => 110,  226 => 109,  221 => 107,  216 => 105,  211 => 103,  202 => 97,  197 => 95,  192 => 93,  186 => 89,  180 => 86,  175 => 84,  170 => 82,  164 => 78,  162 => 77,  157 => 75,  152 => 73,  144 => 67,  138 => 64,  125 => 56,  119 => 55,  113 => 54,  106 => 53,  104 => 52,  99 => 50,  94 => 48,  86 => 43,  82 => 42,  78 => 41,  67 => 33,  60 => 29,  55 => 26,  37 => 25,);
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
{% block product_footer %}
  <div class=\"product-footer justify-content-md-center\">
    <div class=\"col-lg-4\">
      <a
        href=\"{{ path('admin_product_unit_action', {action: 'delete', id: productId}) }}\"
        class=\"tooltip-link btn btn-lg delete\"
        data-toggle=\"pstooltip\"
        id=\"product_form_delete_btn\"
        title=\"{{ 'Permanently delete this product.'|trans({}, 'Admin.Catalog.Help') }}\"
        data-placement=\"left\"
        data-original-title=\"Delete\"
      >
        <i class=\"material-icons\">delete</i>
      </a>
      <a
        href=\"\"
        data-seo-url=\"{{ seo_link }}\"
        data-redirect=\"{{ preview_link }}\"
        data-url-deactive=\"{{ preview_link_deactivate }}\"
        target=\"_blank\"
        class=\"btn btn-secondary preview\"
        data-toggle=\"pstooltip\"
        id=\"product_form_preview_btn\"
        title=\"{{ 'See how your product sheet will look online: ALT+SHIFT+V'|trans({}, 'Admin.Catalog.Help') }}\"
      >
        {{ 'Preview'|trans({}, 'Admin.Actions')}}
      </a>
      {% if editable %}
        <h2 class=\"for-switch online-title\" {% if not is_active %}style=\"display:none;\"{% endif %} data-toggle=\"pstooltip\"
          title=\"{{ 'Enable or disable the product on your shop: ALT+SHIFT+O'|trans({}, 'Admin.Catalog.Help') }}\">{{ 'Online'|trans({}, 'Admin.Global') }}</h2>
        <h2 class=\"for-switch offline-title\" {% if is_active %}style=\"display:none;\"{% endif %} data-toggle=\"pstooltip\"
          title=\"{{ 'Enable or disable the product on your shop: ALT+SHIFT+O'|trans({}, 'Admin.Catalog.Help') }}\">{{ 'Offline'|trans({}, 'Admin.Global') }}</h2>
        <input
          class=\"switch-input-lg\"
          id=\"form_step1_active\"
          data-toggle=\"switch\"
          type=\"checkbox\"
          name=\"form[step1][active]\"
          value=\"1\"
          {{ is_active ? 'checked=\"checked\"' : '' }}
        />
      {% endif %}
    </div>
    <div class=\"col-sm-5 col-lg-7 text-right\">
      <input
        id=\"submit\"
        type=\"submit\"
        class=\"btn btn-primary save uppercase ml-3\"
        value=\"{{ 'Save'|trans({}, 'Admin.Actions') }}\"
        data-toggle=\"pstooltip\"
        title=\"{{ 'Save the product and stay on the current page: ALT+SHIFT+S'|trans({}, 'Admin.Catalog.Help') }}\"
      />
      {% if is_shop_context %}
        <button
          type=\"button\"
          class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase duplicate ml-3\"
          id=\"product_form_save_duplicate_btn\"
          data-redirect=\"{{ path('admin_product_unit_action', {action: 'duplicate', id: productId}) }}\"
          data-toggle=\"pstooltip\"
          title=\"{{ 'Save and duplicate this product, then go to the new product: ALT+SHIFT+D'|trans({}, 'Admin.Catalog.Help') }}\"
        >
          {{ 'Duplicate'|trans({}, 'Admin.Actions')|raw }}
        </button>
      {% endif %}
      <button
        type=\"button\"
        class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase go-catalog ml-3\"
        id=\"product_form_save_go_to_catalog_btn\"
        data-redirect=\"{{ path('admin_product_catalog', {'offset': 'last', 'limit': 'last'}) }}\"
        data-toggle=\"pstooltip\"
        title=\"{{ 'Save and go back to the catalog: ALT+SHIFT+Q'|trans({}, 'Admin.Catalog.Help') }}\"
      >
        {{ 'Go to catalog'|trans({}, 'Admin.Catalog.Feature')|raw }}
      </button>
      <button
        type=\"button\"
        class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase new-product ml-3\"
        id=\"product_form_save_new_btn\"
        data-redirect=\"{{ path('admin_product_new') }}\"
        data-toggle=\"pstooltip\"
        title=\"{{ 'Save and create a new product: ALT+SHIFT+P'|trans({}, 'Admin.Catalog.Help') }}\"
      >
        {{ 'Add new product'|trans({}, 'Admin.Catalog.Feature')|raw }}
      </button>
      {% if isProductPageV2Enabled == true and isCreationMode is same as(true) %}
        <a
          class=\"btn btn-outline-primary ml-3\"
          href=\"{{ path('admin_products_v2_create') }}\"
        >
          {{ 'New product on experimental page'|trans({}, 'Admin.Catalog.Feature')|raw }}
        </a>
      {% endif %}
      {% if isProductPageV2Enabled == true and isCreationMode is same as(false) %}
        <a
          class=\"btn btn-outline-primary ml-3\"
          href=\"{{ path('admin_products_v2_edit', {'productId': productId}) }}\"
        >
          {{ 'Edit on experimental page'|trans({}, 'Admin.Catalog.Feature')|raw }}
        </a>
      {% endif %}

      <div class=\"js-spinner spinner hide btn-primary-reverse onclick mr-1 btn\"></div>
      <div class=\"btn-group hide dropdown\">
        <button
          class=\"btn btn-primary js-btn-save ml-3\"
          type=\"submit\"
        >
          <span>{{ 'Save'|trans({}, 'Admin.Actions') }}</span>
        </button><button
                   class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"
                   type=\"button\"
                   id=\"dropdownMenu\"
                   data-toggle=\"dropdown\"
                   aria-expanded=\"false\"
                 >
          <span class=\"sr-only\">Toggle Dropdown</span>
        </button>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          {% if is_shop_context %}
            <a
              class=\"dropdown-item duplicate js-btn-save\"
              href=\"{{ path('admin_product_unit_action', {action: 'duplicate', id: productId}) }}\"
            >
              {{ 'Duplicate'|trans({}, 'Admin.Actions')|raw }}
            </a>
          {% endif %}
          <a
            class=\"dropdown-item go-catalog js-btn-save\"
            href=\"{{ path('admin_product_catalog', {'offset': 'last', 'limit': 'last'}) }}\"
          >
            {{ 'Go to catalog'|trans({}, 'Admin.Catalog.Feature')|raw }}
          </a>
          <a
            class=\"dropdown-item new-product js-btn-save\"
            href=\"{{ path('admin_product_new') }}\"
          >
            {{ 'Add new product'|trans({}, 'Admin.Catalog.Feature')|raw }}
          </a>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "@Product/ProductPage/Blocks/footer.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Blocks/footer.html.twig");
    }
}
