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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_6f14d58d0a85c72472f989a45b87183d12d51f8d7302c5e7f80444d18a6d1ddd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 26);
        // line 27
        echo "
<div class=\"card-group\">
  ";
        // line 29
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 29, "374371074")->display($context);
        // line 50
        echo "
  ";
        // line 51
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 51, "1005678281")->display($context);
        // line 123
        echo "
  ";
        // line 124
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 124, "1514523386")->display($context);
        // line 153
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 153,  55 => 124,  52 => 123,  50 => 51,  47 => 50,  45 => 29,  41 => 27,  39 => 26,  36 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

<div class=\"card-group\">
  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.shop_logos.header_logo_is_restricted_to_shop) }} {{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.'|trans({'%height%': '40px', '%width%': '200px'}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"{{ headerLogoPath }}\"
          alt=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
          title=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
        >
      </div>

      {{ ps.form_group_row(shopLogosForm.shop_logos.header_logo) }}
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% block card_title %}
      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.shop_logos.mail_logo_is_restricted_to_shop) }}
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            {{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.shop_logos.invoice_logo_is_restricted_to_shop) }}
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             {{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
      </ul>
    {% endblock %}
    {% block card_content %}
      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on email headers. If undefined, the header logo will be used.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"{{ mailLogoPath }}\"
              alt=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.shop_logos.mail_logo, {}, {'help': headerLogoPath == mailLogoPath ? 'Warning: if no email logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Notification') : '' }) }}
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on invoice headers.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"{{ invoiceLogoPath }}\"
              alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.shop_logos.invoice_logo, {}, {'help': headerLogoPath == invoiceLogoPath ? 'Warning: if no invoice logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Help') : '' }) }}
          </div>
        </div>
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.shop_logos.favicon_is_restricted_to_shop) }} {{ 'Favicon'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'It is the small icon that appears in browser tabs, next to the title.'|trans({}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"{{ faviconPath }}\"
            alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          {{ ps.form_widget_with_error(shopLogosForm.shop_logos.favicon) }}
          <small class=\"form-text\">
            {{ 'Use our [1]favicon generator on PrestaShop Marketplace[/1] to boost your brand image!'|trans({'[1]': '<a href=\"https://addons.prestashop.com/create-favicon.php?pab=1\" target=\"_blank\">', '[/1]': '</a>'}, 'Admin.Design.Help')|raw }}
          </small>
        </div>
      </div>

    {% endblock %}
  {% endembed %}
</div>
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_6f14d58d0a85c72472f989a45b87183d12d51f8d7302c5e7f80444d18a6d1ddd___374371074 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 29
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 29);
        $this->blocks = [
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_card_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        // line 31
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "shop_logos", []), "header_logo_is_restricted_to_shop", []), 'widget');
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Header logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_card_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        // line 34
        echo "      <p class=\"logo-card-description\">
        ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.", ["%height%" => "40px", "%width%" => "200px"], "Admin.Design.Help"), "html", null, true);
        echo "
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["headerLogoPath"] ?? $this->getContext($context, "headerLogoPath")), "html", null, true);
        echo "\"
          alt=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Header logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
          title=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Header logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
        >
      </div>

      ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "form_group_row", [0 => $this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "shop_logos", []), "header_logo", [])], "method"), "html", null, true);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 47,  341 => 43,  337 => 42,  333 => 41,  324 => 35,  321 => 34,  312 => 33,  297 => 31,  288 => 30,  258 => 29,  57 => 153,  55 => 124,  52 => 123,  50 => 51,  47 => 50,  45 => 29,  41 => 27,  39 => 26,  36 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

<div class=\"card-group\">
  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.shop_logos.header_logo_is_restricted_to_shop) }} {{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.'|trans({'%height%': '40px', '%width%': '200px'}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"{{ headerLogoPath }}\"
          alt=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
          title=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
        >
      </div>

      {{ ps.form_group_row(shopLogosForm.shop_logos.header_logo) }}
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% block card_title %}
      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.shop_logos.mail_logo_is_restricted_to_shop) }}
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            {{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.shop_logos.invoice_logo_is_restricted_to_shop) }}
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             {{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
      </ul>
    {% endblock %}
    {% block card_content %}
      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on email headers. If undefined, the header logo will be used.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"{{ mailLogoPath }}\"
              alt=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.shop_logos.mail_logo, {}, {'help': headerLogoPath == mailLogoPath ? 'Warning: if no email logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Notification') : '' }) }}
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on invoice headers.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"{{ invoiceLogoPath }}\"
              alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.shop_logos.invoice_logo, {}, {'help': headerLogoPath == invoiceLogoPath ? 'Warning: if no invoice logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Help') : '' }) }}
          </div>
        </div>
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.shop_logos.favicon_is_restricted_to_shop) }} {{ 'Favicon'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'It is the small icon that appears in browser tabs, next to the title.'|trans({}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"{{ faviconPath }}\"
            alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          {{ ps.form_widget_with_error(shopLogosForm.shop_logos.favicon) }}
          <small class=\"form-text\">
            {{ 'Use our [1]favicon generator on PrestaShop Marketplace[/1] to boost your brand image!'|trans({'[1]': '<a href=\"https://addons.prestashop.com/create-favicon.php?pab=1\" target=\"_blank\">', '[/1]': '</a>'}, 'Admin.Design.Help')|raw }}
          </small>
        </div>
      </div>

    {% endblock %}
  {% endembed %}
</div>
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_6f14d58d0a85c72472f989a45b87183d12d51f8d7302c5e7f80444d18a6d1ddd___1005678281 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 51
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 51);
        $this->blocks = [
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 52
    public function block_card_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        // line 53
        echo "      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "shop_logos", []), "mail_logo_is_restricted_to_shop", []), 'widget');
        echo "
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "
          </a>
        </li>
        <li class=\"nav-item\">
          ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "shop_logos", []), "invoice_logo_is_restricted_to_shop", []), 'widget');
        echo "
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             ";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "
          </a>
        </li>
      </ul>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_card_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        // line 85
        echo "      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Will appear on email headers. If undefined, the header logo will be used.", [], "Admin.Design.Help"), "html", null, true);
        echo "
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["mailLogoPath"] ?? $this->getContext($context, "mailLogoPath")), "html", null, true);
        echo "\"
              alt=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
              title=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
            >
          </div>
          <div class=\"input-in-tab\">
            ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "form_group_row", [0 => $this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "shop_logos", []), "mail_logo", []), 1 => [], 2 => ["help" => (((($context["headerLogoPath"] ?? $this->getContext($context, "headerLogoPath")) == ($context["mailLogoPath"] ?? $this->getContext($context, "mailLogoPath")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning: if no email logo is available, the main logo will be used instead.", [], "Admin.Design.Notification")) : (""))]], "method"), "html", null, true);
        echo "
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            ";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Will appear on invoice headers.", [], "Admin.Design.Help"), "html", null, true);
        echo "
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["invoiceLogoPath"] ?? $this->getContext($context, "invoiceLogoPath")), "html", null, true);
        echo "\"
              alt=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
              title=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
            >
          </div>
          <div class=\"input-in-tab\">
            ";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "form_group_row", [0 => $this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "shop_logos", []), "invoice_logo", []), 1 => [], 2 => ["help" => (((($context["headerLogoPath"] ?? $this->getContext($context, "headerLogoPath")) == ($context["invoiceLogoPath"] ?? $this->getContext($context, "invoiceLogoPath")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning: if no invoice logo is available, the main logo will be used instead.", [], "Admin.Design.Help")) : (""))]], "method"), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  711 => 117,  704 => 113,  700 => 112,  696 => 111,  687 => 105,  679 => 100,  672 => 96,  668 => 95,  664 => 94,  655 => 88,  650 => 85,  641 => 84,  626 => 79,  613 => 69,  606 => 65,  593 => 55,  589 => 53,  580 => 52,  550 => 51,  348 => 47,  341 => 43,  337 => 42,  333 => 41,  324 => 35,  321 => 34,  312 => 33,  297 => 31,  288 => 30,  258 => 29,  57 => 153,  55 => 124,  52 => 123,  50 => 51,  47 => 50,  45 => 29,  41 => 27,  39 => 26,  36 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

<div class=\"card-group\">
  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.shop_logos.header_logo_is_restricted_to_shop) }} {{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.'|trans({'%height%': '40px', '%width%': '200px'}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"{{ headerLogoPath }}\"
          alt=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
          title=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
        >
      </div>

      {{ ps.form_group_row(shopLogosForm.shop_logos.header_logo) }}
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% block card_title %}
      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.shop_logos.mail_logo_is_restricted_to_shop) }}
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            {{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.shop_logos.invoice_logo_is_restricted_to_shop) }}
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             {{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
      </ul>
    {% endblock %}
    {% block card_content %}
      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on email headers. If undefined, the header logo will be used.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"{{ mailLogoPath }}\"
              alt=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.shop_logos.mail_logo, {}, {'help': headerLogoPath == mailLogoPath ? 'Warning: if no email logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Notification') : '' }) }}
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on invoice headers.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"{{ invoiceLogoPath }}\"
              alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.shop_logos.invoice_logo, {}, {'help': headerLogoPath == invoiceLogoPath ? 'Warning: if no invoice logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Help') : '' }) }}
          </div>
        </div>
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.shop_logos.favicon_is_restricted_to_shop) }} {{ 'Favicon'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'It is the small icon that appears in browser tabs, next to the title.'|trans({}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"{{ faviconPath }}\"
            alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          {{ ps.form_widget_with_error(shopLogosForm.shop_logos.favicon) }}
          <small class=\"form-text\">
            {{ 'Use our [1]favicon generator on PrestaShop Marketplace[/1] to boost your brand image!'|trans({'[1]': '<a href=\"https://addons.prestashop.com/create-favicon.php?pab=1\" target=\"_blank\">', '[/1]': '</a>'}, 'Admin.Design.Help')|raw }}
          </small>
        </div>
      </div>

    {% endblock %}
  {% endembed %}
</div>
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_6f14d58d0a85c72472f989a45b87183d12d51f8d7302c5e7f80444d18a6d1ddd___1514523386 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 124
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 124);
        $this->blocks = [
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 125
    public function block_card_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        // line 126
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "shop_logos", []), "favicon_is_restricted_to_shop", []), 'widget');
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Favicon", [], "Admin.Design.Feature"), "html", null, true);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_card_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        // line 129
        echo "      <p class=\"logo-card-description\">
        ";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("It is the small icon that appears in browser tabs, next to the title.", [], "Admin.Design.Help"), "html", null, true);
        echo "
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"";
        // line 136
        echo twig_escape_filter($this->env, ($context["faviconPath"] ?? $this->getContext($context, "faviconPath")), "html", null, true);
        echo "\"
            alt=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
            title=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          ";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "form_widget_with_error", [0 => $this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), "shop_logos", []), "favicon", [])], "method"), "html", null, true);
        echo "
          <small class=\"form-text\">
            ";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use our [1]favicon generator on PrestaShop Marketplace[/1] to boost your brand image!", ["[1]" => "<a href=\"https://addons.prestashop.com/create-favicon.php?pab=1\" target=\"_blank\">", "[/1]" => "</a>"], "Admin.Design.Help");
        echo "
          </small>
        </div>
      </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1013 => 146,  1008 => 144,  999 => 138,  995 => 137,  991 => 136,  982 => 130,  979 => 129,  970 => 128,  955 => 126,  946 => 125,  916 => 124,  711 => 117,  704 => 113,  700 => 112,  696 => 111,  687 => 105,  679 => 100,  672 => 96,  668 => 95,  664 => 94,  655 => 88,  650 => 85,  641 => 84,  626 => 79,  613 => 69,  606 => 65,  593 => 55,  589 => 53,  580 => 52,  550 => 51,  348 => 47,  341 => 43,  337 => 42,  333 => 41,  324 => 35,  321 => 34,  312 => 33,  297 => 31,  288 => 30,  258 => 29,  57 => 153,  55 => 124,  52 => 123,  50 => 51,  47 => 50,  45 => 29,  41 => 27,  39 => 26,  36 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

<div class=\"card-group\">
  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.shop_logos.header_logo_is_restricted_to_shop) }} {{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.'|trans({'%height%': '40px', '%width%': '200px'}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"{{ headerLogoPath }}\"
          alt=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
          title=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
        >
      </div>

      {{ ps.form_group_row(shopLogosForm.shop_logos.header_logo) }}
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% block card_title %}
      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.shop_logos.mail_logo_is_restricted_to_shop) }}
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            {{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.shop_logos.invoice_logo_is_restricted_to_shop) }}
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             {{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
      </ul>
    {% endblock %}
    {% block card_content %}
      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on email headers. If undefined, the header logo will be used.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"{{ mailLogoPath }}\"
              alt=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.shop_logos.mail_logo, {}, {'help': headerLogoPath == mailLogoPath ? 'Warning: if no email logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Notification') : '' }) }}
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on invoice headers.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"{{ invoiceLogoPath }}\"
              alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.shop_logos.invoice_logo, {}, {'help': headerLogoPath == invoiceLogoPath ? 'Warning: if no invoice logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Help') : '' }) }}
          </div>
        </div>
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.shop_logos.favicon_is_restricted_to_shop) }} {{ 'Favicon'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'It is the small icon that appears in browser tabs, next to the title.'|trans({}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"{{ faviconPath }}\"
            alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          {{ ps.form_widget_with_error(shopLogosForm.shop_logos.favicon) }}
          <small class=\"form-text\">
            {{ 'Use our [1]favicon generator on PrestaShop Marketplace[/1] to boost your brand image!'|trans({'[1]': '<a href=\"https://addons.prestashop.com/create-favicon.php?pab=1\" target=\"_blank\">', '[/1]': '</a>'}, 'Admin.Design.Help')|raw }}
          </small>
        </div>
      </div>

    {% endblock %}
  {% endembed %}
</div>
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}
