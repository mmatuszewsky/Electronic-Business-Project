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

/* @PrestaShop/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig */
class __TwigTemplate_dc1d8730374c0ba0ba2461b86be814e7bf453d2dae9377763b589f3dfdb13f14 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'payment_methods_module_list' => [$this, 'block_payment_methods_module_list'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig"));

        // line 26
        echo "
";
        // line 27
        $this->displayBlock('payment_methods_module_list', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_payment_methods_module_list($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_methods_module_list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_methods_module_list"));

        // line 28
        echo "  ";
        if ((twig_length_filter($this->env, ($context["paymentModules"] ?? $this->getContext($context, "paymentModules"))) > 0)) {
            // line 29
            echo "  <div class=\"module-item-list\">
  ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["paymentModules"] ?? $this->getContext($context, "paymentModules")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 31
                echo "    <div class=\"row module-item-wrapper-list border-bottom mb-sm-3\">
      <div class=\"col-12 col-sm-2 col-md-1 col-lg-1\">
        <div class=\"module-logo-thumb-list text-center\">
          <img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "img", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "\"/>
        </div>
      </div>
      <div class=\"col-12 col-sm-6 col-md-8 col-lg-9 pl-0\">
        <p class=\"mb-0\">
          ";
                // line 39
                echo $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []);
                echo "
          <span class=\"text-muted\">
            ";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("v%version% - by %author%", ["%version%" => $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "version", []), "%author%" => $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "author", [])], "Admin.Modules.Feature"), "html", null, true);
                echo "
          </span>
        </p>
        <p class=\"text-muted\">
          ";
                // line 45
                echo $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "description", []);
                echo "
        </p>
      </div>
      ";
                // line 48
                if ($this->getAttribute($this->getAttribute($context["module"], "attributes", []), "is_configurable", [])) {
                    // line 49
                    echo "      <div class=\"col-12 col-sm-4 col-md-3 col-lg-2 mb-3\">
        <div class=\"text-center\">
          <a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_configure_action", ["module_name" => $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "name", [])]), "html", null, true);
                    echo "\"
             class=\"btn btn-primary-reverse btn-outline-primary light-button\"
          >
            ";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure", [], "Admin.Global"), "html", null, true);
                    echo "
          </a>
        </div>
      </div>
      ";
                }
                // line 59
                echo "    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "  </div>
  ";
        } else {
            // line 63
            echo "    <div class=\"alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">
        ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("It seems there are no recommended payment solutions for your country.", [], "Admin.Payment.Notification"), "html", null, true);
            echo " <br>
        <a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://www.prestashop.com/en/contact-us\">";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do you think there should be one? Let us know!", [], "Admin.Shipping.Feature"), "html", null, true);
            echo "</a>
      </p>
    </div>
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 66,  136 => 65,  132 => 63,  128 => 61,  121 => 59,  113 => 54,  107 => 51,  103 => 49,  101 => 48,  95 => 45,  88 => 41,  83 => 39,  73 => 34,  68 => 31,  64 => 30,  61 => 29,  58 => 28,  40 => 27,  37 => 26,);
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
{% trans_default_domain 'Admin.Payment.Feature' %}

{% block payment_methods_module_list %}
  {% if paymentModules|length > 0 %}
  <div class=\"module-item-list\">
  {% for module in paymentModules %}
    <div class=\"row module-item-wrapper-list border-bottom mb-sm-3\">
      <div class=\"col-12 col-sm-2 col-md-1 col-lg-1\">
        <div class=\"module-logo-thumb-list text-center\">
          <img src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\"/>
        </div>
      </div>
      <div class=\"col-12 col-sm-6 col-md-8 col-lg-9 pl-0\">
        <p class=\"mb-0\">
          {{ module.attributes.displayName|raw }}
          <span class=\"text-muted\">
            {{ 'v%version% - by %author%'|trans({ '%version%' : module.attributes.version, '%author%' : module.attributes.author}, 'Admin.Modules.Feature') }}
          </span>
        </p>
        <p class=\"text-muted\">
          {{ module.attributes.description|raw }}
        </p>
      </div>
      {% if module.attributes.is_configurable %}
      <div class=\"col-12 col-sm-4 col-md-3 col-lg-2 mb-3\">
        <div class=\"text-center\">
          <a href=\"{{ path('admin_module_configure_action', {'module_name': module.attributes.name}) }}\"
             class=\"btn btn-primary-reverse btn-outline-primary light-button\"
          >
            {{ 'Configure'|trans({}, 'Admin.Global') }}
          </a>
        </div>
      </div>
      {% endif %}
    </div>
  {% endfor %}
  </div>
  {% else %}
    <div class=\"alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">
        {{ 'It seems there are no recommended payment solutions for your country.'|trans({}, 'Admin.Payment.Notification') }} <br>
        <a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://www.prestashop.com/en/contact-us\">{{ 'Do you think there should be one? Let us know!'|trans({}, 'Admin.Shipping.Feature') }}</a>
      </p>
    </div>
  {% endif %}
{% endblock %}
", "@PrestaShop/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig");
    }
}
