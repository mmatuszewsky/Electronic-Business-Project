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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig */
class __TwigTemplate_4c590611499429f84d81e317a5c91aacfce8e2b04d000b7d2e625d4a31776ae3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig"));

        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig", 27);
        // line 28
        echo "
<div class=\"card\">
    <h3 class=\"card-header\">
        <i class=\"material-icons\">file_download</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download sample csv files", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block\">
        <div class=\"list-group\">
            ";
        // line 36
        echo $context["ps"]->getimport_file_sample("Sample Categories file", "categories_import");
        echo "
            ";
        // line 37
        echo $context["ps"]->getimport_file_sample("Sample Products file", "products_import");
        echo "
            ";
        // line 38
        echo $context["ps"]->getimport_file_sample("Sample Combinations file", "combinations_import");
        echo "
            ";
        // line 39
        echo $context["ps"]->getimport_file_sample("Sample Customers file", "customers_import");
        echo "
            ";
        // line 40
        echo $context["ps"]->getimport_file_sample("Sample Addresses file", "addresses_import");
        echo "
            ";
        // line 41
        echo $context["ps"]->getimport_file_sample("Sample Brands file", "manufacturers_import");
        echo "
            ";
        // line 42
        echo $context["ps"]->getimport_file_sample("Sample Suppliers file", "suppliers_import");
        echo "
            ";
        // line 43
        echo $context["ps"]->getimport_file_sample("Sample Aliases file", "alias_import");
        echo "
            ";
        // line 44
        echo $context["ps"]->getimport_file_sample("Sample Store Contacts file", "store_contacts");
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 44,  82 => 43,  78 => 42,  74 => 41,  70 => 40,  66 => 39,  62 => 38,  58 => 37,  54 => 36,  46 => 31,  41 => 28,  39 => 27,  36 => 25,);
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

{% trans_default_domain 'Admin.Advparameters.Feature' %}
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

<div class=\"card\">
    <h3 class=\"card-header\">
        <i class=\"material-icons\">file_download</i> {{ 'Download sample csv files'|trans({}, 'Admin.Advparameters.Feature') }}
    </h3>

    <div class=\"card-block\">
        <div class=\"list-group\">
            {{ ps.import_file_sample('Sample Categories file', 'categories_import') }}
            {{ ps.import_file_sample('Sample Products file', 'products_import') }}
            {{ ps.import_file_sample('Sample Combinations file', 'combinations_import') }}
            {{ ps.import_file_sample('Sample Customers file', 'customers_import') }}
            {{ ps.import_file_sample('Sample Addresses file', 'addresses_import') }}
            {{ ps.import_file_sample('Sample Brands file', 'manufacturers_import') }}
            {{ ps.import_file_sample('Sample Suppliers file', 'suppliers_import') }}
            {{ ps.import_file_sample('Sample Aliases file', 'alias_import') }}
            {{ ps.import_file_sample('Sample Store Contacts file', 'store_contacts') }}
        </div>
    </div>
</div>
", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig");
    }
}
