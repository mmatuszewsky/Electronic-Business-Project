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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig */
class __TwigTemplate_3d8ea01cf53f618a2d2d7423947dd519456c235cfe8a854850d99fcda12eaa2b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'import_file_history_block' => [$this, 'block_import_file_history_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", 26);
        // line 28
        echo "
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importForm"] ?? $this->getContext($context, "importForm")), 'form_start', ["attr" => ["data-file-upload-url" => ($context["importFileUploadUrl"] ?? $this->getContext($context, "importFileUploadUrl")), "data-delete-confirm-message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure that you would like to delete this entity:", [], "Admin.Advparameters.Notification"), "class" => "js-import-form"]]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">import_export</i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import", [], "Admin.Actions"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can read information on import at:", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("http://doc.prestashop.com/display/PS17/Import", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\" class=\"_blank\">
          ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("http://doc.prestashop.com/display/PS17/Import", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        </a>
      </p>
      <p class=\"alert-text\">
        ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read more about the CSV format at:", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("https://en.wikipedia.org/wiki/Comma-separated_values", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\" class=\"_blank\">
          ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("https://en.wikipedia.org/wiki/Comma-separated_values", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        </a>
      </p>
    </div>

    <hr>

    <div class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("What do you want to import?", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
      ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "entity", []), 'errors');
        echo "
      ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "entity", []), 'widget', ["attr" => ["class" => "js-entity-select"]]);
        echo "
    </div>

    <div class=\"alert alert-warning js-entity-alert\" role=\"alert\">
      <ul>
        <li>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Note that the Category import does not support having two categories with the same name.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
        <li>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Note that you can have several products with the same reference.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      </ul>
    </div>

    <hr>

    <div class=\"form-group hidden-xs-up\">
      ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "csv", []), 'errors');
        echo "
      ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "csv", []), 'widget', ["attr" => ["class" => "js-import-file-input"]]);
        echo "
    </div>

    <div class=\"form-group js-file-upload-form-group\">
      <label class=\"form-control-label\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select a file to import", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
      <div class=\"row\">
        <div class=\"col\">
          ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "file", []), 'errors');
        echo "
          ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "file", []), 'widget', ["attr" => ["class" => "js-import-file", "data-max-file-upload-size" => ($context["maxFileUploadSize"] ?? $this->getContext($context, "maxFileUploadSize"))]]);
        echo "
        </div>
        <div class=\"col\">
          <span>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or", [], "Admin.Global"), "html", null, true);
        echo "</span>
          <button type=\"button\"
                  class=\"btn btn-outline-primary btn-sm js-from-files-history-btn\"
                  ";
        // line 83
        if (twig_test_empty(($context["importFileNames"] ?? $this->getContext($context, "importFileNames")))) {
            echo "disabled";
        }
        // line 84
        echo "          >
            <span class=\"badge badge-primary js-files-history-number\">";
        // line 85
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["importFileNames"] ?? $this->getContext($context, "importFileNames"))), "html", null, true);
        echo "</span>
            ";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose from history / FTP", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
      <small class=\"form-text\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allowed formats: .csv, .xls, .xlsx, .xlst, .ods, .ots", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
      <small class=\"form-text\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Only UTF-8 and ISO 8859-1 encodings are allowed", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
      <small class=\"form-text\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can also upload your file via FTP to the following directory: %s .", ["%s" => ($context["importDirectory"] ?? $this->getContext($context, "importDirectory"))], "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
    </div>

    <div class=\"alert alert-danger d-none js-import-file-error\" role=\"alert\">
      <p class=\"alert-text\">
        <strong class=\"js-file-data\"></strong>: <span class=\"js-error-message\"></span>
      </p>
    </div>

    <div class=\"alert alert-success d-none js-import-file-alert\" role=\"alert\">
      <button type=\"button\"
              class=\"close btn btn-outline-secondary js-change-import-file-btn\"
              aria-label=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change", [], "Admin.Actions"), "html", null, true);
        echo "\"
      >
        <span aria-hidden=\"true\"><i class=\"material-icons\">edit</i></span>
      </button>
      <p class=\"alert-text js-import-file\"></p>
    </div>

    ";
        // line 111
        $this->displayBlock('import_file_history_block', $context, $blocks);
        // line 114
        echo "
    <hr>

    <div class=\"form-group\">
      ";
        // line 118
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language of the file", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The locale must be installed", [], "Admin.Advparameters.Notification"));
        echo "
      ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "iso_lang", []), 'errors');
        echo "
      ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "iso_lang", []), 'widget');
        echo "
    </div>

    <div class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Field separator", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
      ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "separator", []), 'errors');
        echo "
      ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "separator", []), 'widget');
        echo "
      <small class=\"form-text\">";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("e.g. ", [], "Admin.Advparameters.Help"), "html", null, true);
        echo " 1; Blouse; 129.90; 5</small>
    </div>

    <div class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Multiple value separator", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
      ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "multiple_value_separator", []), 'errors');
        echo "
      ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "multiple_value_separator", []), 'widget');
        echo "
      <small class=\"form-text\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("e.g. ", [], "Admin.Advparameters.Help"), "html", null, true);
        echo " Blouse; red.jpg, blue.jpg, green.jpg; 129.90</small>
    </div>

    <hr>

    <div class=\"form-group js-truncate-form-group\">
      <label class=\"form-control-label\">
        ";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete all [1]categories[/1] before import", ["[1]" => "<span class=\"js-entity-name\">", "[/1]" => "</span>"], "Admin.Advparameters.Feature");
        echo "
      </label>
      ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "truncate", []), 'errors');
        echo "
      ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "truncate", []), 'widget');
        echo "
    </div>

    <div class=\"form-group js-match-ref-form-group\">
      ";
        // line 148
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use product reference as key", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If enabled, the product's reference number MUST be unique!", [], "Admin.Advparameters.Help"));
        echo "
      ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "match_ref", []), 'errors');
        echo "
      ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "match_ref", []), 'widget');
        echo "
    </div>

    <div class=\"form-group js-regenerate-form-group\">
      <label class=\"form-control-label\">";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Skip thumbnails regeneration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
      ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "regenerate", []), 'errors');
        echo "
      ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "regenerate", []), 'widget');
        echo "
    </div>

    <div class=\"form-group js-force-ids-form-group\">
      ";
        // line 160
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Force all ID numbers", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you enable this option, your imported items' ID number will be used as is. If you do not enable this option, the imported ID numbers will be ignored, and PrestaShop will instead create auto-incremented ID numbers for all the imported items.", [], "Admin.Advparameters.Help"));
        echo "
      ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "forceIDs", []), 'errors');
        echo "
      ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "forceIDs", []), 'widget');
        echo "
    </div>

    <div class=\"form-group\">
      ";
        // line 166
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send notification email", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sends an email to let you know your import is complete. It can be useful when handling large files, as the import may take some time.", [], "Admin.Advparameters.Help"));
        echo "
      ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "sendemail", []), 'errors');
        echo "
      ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "sendemail", []), 'widget');
        echo "
    </div>

    ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["importForm"] ?? $this->getContext($context, "importForm")), 'rest');
        echo "
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\" name=\"submitImportFile\">
        ";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next step", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        <i class=\"material-icons\">navigate_next</i>
      </button>
    </div>
  </div>
</div>
";
        // line 182
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importForm"] ?? $this->getContext($context, "importForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 111
    public function block_import_file_history_block($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "import_file_history_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "import_file_history_block"));

        // line 112
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", 112)->display($context);
        // line 113
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 113,  384 => 112,  375 => 111,  363 => 182,  354 => 176,  346 => 171,  340 => 168,  336 => 167,  332 => 166,  325 => 162,  321 => 161,  317 => 160,  310 => 156,  306 => 155,  302 => 154,  295 => 150,  291 => 149,  287 => 148,  280 => 144,  276 => 143,  271 => 141,  261 => 134,  257 => 133,  253 => 132,  249 => 131,  242 => 127,  238 => 126,  234 => 125,  230 => 124,  223 => 120,  219 => 119,  215 => 118,  209 => 114,  207 => 111,  197 => 104,  182 => 92,  178 => 91,  174 => 90,  167 => 86,  163 => 85,  160 => 84,  156 => 83,  150 => 80,  144 => 77,  140 => 76,  134 => 73,  127 => 69,  123 => 68,  113 => 61,  109 => 60,  101 => 55,  97 => 54,  93 => 53,  82 => 45,  78 => 44,  74 => 43,  67 => 39,  63 => 38,  59 => 37,  51 => 32,  45 => 29,  42 => 28,  40 => 26,  37 => 25,);
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
{% trans_default_domain 'Admin.Advparameters.Feature' %}

{{ form_start(importForm, {'attr': { 'data-file-upload-url': importFileUploadUrl, 'data-delete-confirm-message': ('Are you sure that you would like to delete this entity:'|trans({}, 'Admin.Advparameters.Notification')), 'class': 'js-import-form' }}) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">import_export</i> {{ 'Import'|trans({}, 'Admin.Actions') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        {{ 'You can read information on import at:'|trans({}, 'Admin.Advparameters.Help') }}
        <a href=\"{{ 'http://doc.prestashop.com/display/PS17/Import'|trans({}, 'Admin.Advparameters.Help') }}\" class=\"_blank\">
          {{ 'http://doc.prestashop.com/display/PS17/Import'|trans({}, 'Admin.Advparameters.Help') }}
        </a>
      </p>
      <p class=\"alert-text\">
        {{ 'Read more about the CSV format at:'|trans({}, 'Admin.Advparameters.Help') }}
        <a href=\"{{ 'https://en.wikipedia.org/wiki/Comma-separated_values'|trans({}, 'Admin.Advparameters.Help') }}\" class=\"_blank\">
          {{ 'https://en.wikipedia.org/wiki/Comma-separated_values'|trans({}, 'Admin.Advparameters.Help') }}
        </a>
      </p>
    </div>

    <hr>

    <div class=\"form-group\">
      <label class=\"form-control-label\">{{ 'What do you want to import?'|trans }}</label>
      {{ form_errors(importForm.entity) }}
      {{ form_widget(importForm.entity, {'attr': {'class': 'js-entity-select'}}) }}
    </div>

    <div class=\"alert alert-warning js-entity-alert\" role=\"alert\">
      <ul>
        <li>{{ 'Note that the Category import does not support having two categories with the same name.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
        <li>{{ 'Note that you can have several products with the same reference.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      </ul>
    </div>

    <hr>

    <div class=\"form-group hidden-xs-up\">
      {{ form_errors(importForm.csv) }}
      {{ form_widget(importForm.csv, {'attr': {'class': 'js-import-file-input'}}) }}
    </div>

    <div class=\"form-group js-file-upload-form-group\">
      <label class=\"form-control-label\">{{ 'Select a file to import'|trans }}</label>
      <div class=\"row\">
        <div class=\"col\">
          {{ form_errors(importForm.file) }}
          {{ form_widget(importForm.file, {'attr': {'class': 'js-import-file', 'data-max-file-upload-size': maxFileUploadSize }}) }}
        </div>
        <div class=\"col\">
          <span>{{ 'or'|trans({}, 'Admin.Global') }}</span>
          <button type=\"button\"
                  class=\"btn btn-outline-primary btn-sm js-from-files-history-btn\"
                  {% if importFileNames is empty %}disabled{% endif %}
          >
            <span class=\"badge badge-primary js-files-history-number\">{{ importFileNames|length }}</span>
            {{ 'Choose from history / FTP'|trans({}, 'Admin.Advparameters.Feature') }}
          </button>
        </div>
      </div>
      <small class=\"form-text\">{{ 'Allowed formats: .csv, .xls, .xlsx, .xlst, .ods, .ots'|trans({}, 'Admin.Advparameters.Help') }}</small>
      <small class=\"form-text\">{{ 'Only UTF-8 and ISO 8859-1 encodings are allowed'|trans({}, 'Admin.Advparameters.Help') }}</small>
      <small class=\"form-text\">{{ 'You can also upload your file via FTP to the following directory: %s .'|trans({'%s': importDirectory}, 'Admin.Advparameters.Help') }}</small>
    </div>

    <div class=\"alert alert-danger d-none js-import-file-error\" role=\"alert\">
      <p class=\"alert-text\">
        <strong class=\"js-file-data\"></strong>: <span class=\"js-error-message\"></span>
      </p>
    </div>

    <div class=\"alert alert-success d-none js-import-file-alert\" role=\"alert\">
      <button type=\"button\"
              class=\"close btn btn-outline-secondary js-change-import-file-btn\"
              aria-label=\"{{ 'Change'|trans({}, 'Admin.Actions') }}\"
      >
        <span aria-hidden=\"true\"><i class=\"material-icons\">edit</i></span>
      </button>
      <p class=\"alert-text js-import-file\"></p>
    </div>

    {% block import_file_history_block %}
      {% include '@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig' %}
    {% endblock %}

    <hr>

    <div class=\"form-group\">
      {{ ps.label_with_help(('Language of the file'|trans), ('The locale must be installed'|trans({}, 'Admin.Advparameters.Notification'))) }}
      {{ form_errors(importForm.iso_lang) }}
      {{ form_widget(importForm.iso_lang) }}
    </div>

    <div class=\"form-group\">
      <label class=\"form-control-label\">{{ 'Field separator'|trans }}</label>
      {{ form_errors(importForm.separator) }}
      {{ form_widget(importForm.separator) }}
      <small class=\"form-text\">{{ 'e.g. '|trans({}, 'Admin.Advparameters.Help') }} 1; Blouse; 129.90; 5</small>
    </div>

    <div class=\"form-group\">
      <label class=\"form-control-label\">{{ 'Multiple value separator'|trans }}</label>
      {{ form_errors(importForm.multiple_value_separator) }}
      {{ form_widget(importForm.multiple_value_separator) }}
      <small class=\"form-text\">{{ 'e.g. '|trans({}, 'Admin.Advparameters.Help') }} Blouse; red.jpg, blue.jpg, green.jpg; 129.90</small>
    </div>

    <hr>

    <div class=\"form-group js-truncate-form-group\">
      <label class=\"form-control-label\">
        {{ 'Delete all [1]categories[/1] before import'|trans({'[1]': '<span class=\"js-entity-name\">', '[/1]': '</span>'})|raw }}
      </label>
      {{ form_errors(importForm.truncate) }}
      {{ form_widget(importForm.truncate) }}
    </div>

    <div class=\"form-group js-match-ref-form-group\">
      {{ ps.label_with_help(('Use product reference as key'|trans), ('If enabled, the product\\'s reference number MUST be unique!'|trans({}, 'Admin.Advparameters.Help'))) }}
      {{ form_errors(importForm.match_ref) }}
      {{ form_widget(importForm.match_ref) }}
    </div>

    <div class=\"form-group js-regenerate-form-group\">
      <label class=\"form-control-label\">{{ 'Skip thumbnails regeneration'|trans }}</label>
      {{ form_errors(importForm.regenerate) }}
      {{ form_widget(importForm.regenerate) }}
    </div>

    <div class=\"form-group js-force-ids-form-group\">
      {{ ps.label_with_help(('Force all ID numbers'|trans), (\"If you enable this option, your imported items' ID number will be used as is. If you do not enable this option, the imported ID numbers will be ignored, and PrestaShop will instead create auto-incremented ID numbers for all the imported items.\"|trans({}, 'Admin.Advparameters.Help'))) }}
      {{ form_errors(importForm.forceIDs) }}
      {{ form_widget(importForm.forceIDs) }}
    </div>

    <div class=\"form-group\">
      {{ ps.label_with_help(('Send notification email'|trans), ('Sends an email to let you know your import is complete. It can be useful when handling large files, as the import may take some time.'|trans({}, 'Admin.Advparameters.Help'))) }}
      {{ form_errors(importForm.sendemail) }}
      {{ form_widget(importForm.sendemail) }}
    </div>

    {{ form_rest(importForm) }}
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\" name=\"submitImportFile\">
        {{ 'Next step'|trans({}, 'Admin.Advparameters.Feature') }}
        <i class=\"material-icons\">navigate_next</i>
      </button>
    </div>
  </div>
</div>
{{ form_end(importForm) }}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig");
    }
}
