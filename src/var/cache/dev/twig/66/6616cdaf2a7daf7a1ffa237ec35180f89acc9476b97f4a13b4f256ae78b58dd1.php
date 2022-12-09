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

/* @PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig */
class __TwigTemplate_bba41badcb182d8ed061ab71f408940e94052876ee78beaebc6e93401b6dedb7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig"));

        // line 25
        $context["ats"] = $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []);
        // line 26
        list($context["name"], $context["displayName"], $context["nbRates"], $context["starsRate"], $context["img"], $context["serviceUrl"], $context["version"], $context["cover"], $context["additionalDescription"], $context["fullDescription"], $context["changeLog"], $context["customerBenefits"], $context["demoVideo"], $context["author"], $context["notFoundImg"], $context["features"], $context["badges"]) =         [$this->getAttribute(        // line 29
($context["ats"] ?? $this->getContext($context, "ats")), "name", []), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "displayName", []), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "nbRates", []), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "starsRate", []), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "img", []), ((($this->getAttribute(        // line 30
($context["ats"] ?? null), "serviceUrl", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "serviceUrl", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "serviceUrl", [])) : (false)), $this->getAttribute(        // line 31
($context["ats"] ?? $this->getContext($context, "ats")), "version", []), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "cover", []), ((($this->getAttribute(        // line 32
($context["ats"] ?? null), "additionalDescription", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "additionalDescription", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "additionalDescription", [])) : (false)), ((($this->getAttribute(        // line 33
($context["ats"] ?? null), "fullDescription", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "fullDescription", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "fullDescription", [])) : (false)), ((($this->getAttribute(        // line 34
($context["ats"] ?? null), "changeLog", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "changeLog", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "changeLog", [])) : (false)), ((($this->getAttribute(        // line 35
($context["ats"] ?? null), "customer_benefits", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "customer_benefits", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "customer_benefits", [])) : (false)), ((($this->getAttribute(        // line 36
($context["ats"] ?? null), "demo_video", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "demo_video", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "demo_video", [])) : (false)), $this->getAttribute(        // line 37
($context["ats"] ?? $this->getContext($context, "ats")), "author", []), "https://cdn4.iconfinder.com/data/icons/ballicons-2-free/100/box-512.png", $this->getAttribute(        // line 38
($context["ats"] ?? $this->getContext($context, "ats")), "features", []), ((($this->getAttribute(        // line 39
($context["ats"] ?? null), "badges", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "badges", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "badges", [])) : (false))];
        // line 41
        echo "<div class=\"modal-dialog module-modal-dialog\">
  <!-- Modal content-->
  <div class=\"modal-content module-modal-content no-padding\">
    <div class=\"modal-header module-modal-header\">
      ";
        // line 45
        if ((($context["nbRates"] ?? $this->getContext($context, "nbRates")) > 0)) {
            // line 46
            echo "        <div class=\"read-more-stars module-star-ranking-grid-";
            echo twig_escape_filter($this->env, ($context["starsRate"] ?? $this->getContext($context, "starsRate")), "html", null, true);
            echo "\">
          (
          ";
            // line 48
            echo twig_escape_filter($this->env, ($context["nbRates"] ?? $this->getContext($context, "nbRates")), "html", null, true);
            echo "
          )
        </div>
      ";
        }
        // line 52
        echo "      <div>
        <img class=\"module-logo-thumb\" height=\"57\" width=\"57\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["img"] ?? $this->getContext($context, "img")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? $this->getContext($context, "displayName")), "html", null, true);
        echo "\"/>
        <div class=\"modal-title module-modal-title\">
          <h1>";
        // line 55
        echo twig_escape_filter($this->env, ($context["displayName"] ?? $this->getContext($context, "displayName")), "html", null, true);
        echo "<br>
            <small class=\"version small-text\">
              ";
        // line 57
        if ((array_key_exists("serviceUrl", $context) && (twig_length_filter($this->env, ($context["serviceUrl"] ?? $this->getContext($context, "serviceUrl"))) > 0))) {
            // line 58
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Service by %author%", ["%author%" => ($context["author"] ?? $this->getContext($context, "author"))], "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        } else {
            // line 60
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("v%version% by %author%", ["%version%" => ($context["version"] ?? $this->getContext($context, "version")), "%author%" => ($context["author"] ?? $this->getContext($context, "author"))], "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        }
        // line 62
        echo "            </small>
          </h1>

        </div>
      </div>
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>

    <div class=\"modal-body row module-modal-body\">
      <div class=\"col-md-12 module-big-cover\">
        <img src=\"";
        // line 74
        if ($this->getAttribute(($context["cover"] ?? null), "big", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cover"] ?? $this->getContext($context, "cover")), "big", []), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, ($context["notFoundImg"] ?? $this->getContext($context, "notFoundImg")), "html", null, true);
        }
        echo "\"/>
      </div>
      <div class=\"col-md-12 module-menu-readmore\">
        <nav class=\"navbar navbar-light\">
          ";
        // line 79
        echo "          <ul class=\"nav nav-pills\">
            <li class=\"nav-item\">
              <a class=\"nav-link module-readmore-tab active\" data-toggle=\"tab\" href=\"#overview-";
        // line 81
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Overview", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</a>
            </li>
            ";
        // line 83
        if (($context["additionalDescription"] ?? $this->getContext($context, "additionalDescription"))) {
            // line 84
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#additional-";
            // line 85
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional information", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 88
        echo "            ";
        if (($context["customerBenefits"] ?? $this->getContext($context, "customerBenefits"))) {
            // line 89
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#customer_benefits-";
            // line 90
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Benefits", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 93
        echo "            ";
        if (($context["features"] ?? $this->getContext($context, "features"))) {
            // line 94
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#features-";
            // line 95
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 98
        echo "            ";
        if (($context["demoVideo"] ?? $this->getContext($context, "demoVideo"))) {
            // line 99
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#demo_video-";
            // line 100
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Demo video", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 103
        echo "            ";
        if (($context["changeLog"] ?? $this->getContext($context, "changeLog"))) {
            // line 104
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#changelog-";
            // line 105
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changelog", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 108
        echo "            ";
        // line 109
        echo "          </ul>
        </nav>
        <div class=\"tab-content\">
          ";
        // line 113
        echo "          <div id=\"overview-";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade in active show\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 115
        if (($context["fullDescription"] ?? $this->getContext($context, "fullDescription"))) {
            // line 116
            echo "                ";
            echo ($context["fullDescription"] ?? $this->getContext($context, "fullDescription"));
            echo "
              ";
        } else {
            // line 118
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No description found for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 120
        echo "            </p>
            ";
        // line 121
        if (($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", [], "any", false, true), "multistoreCompatibility", [], "any", true, true) &&  !($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "multistoreCompatibility", []) === twig_constant("\\Module::MULTISTORE_COMPATIBILITY_UNKNOWN")))) {
            // line 122
            echo "              <div class=\"module-readmore-multistore-content\">
                <h3>";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Multistore compatibility:", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</h3>
                ";
            // line 124
            if (($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "multistoreCompatibility", []) === twig_constant("\\Module::MULTISTORE_COMPATIBILITY_YES"))) {
                // line 125
                echo "                  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This module is compatible with the multistore feature. It can be either:", [], "Admin.Modules.Feature"), "html", null, true);
                echo "
                  <ul>
                    <li>";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("configured differently from one store to another;", [], "Admin.Modules.Feature"), "html", null, true);
                echo "</li>
                    <li>";
                // line 128
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("configured quickly in the same way on all stores thanks to the all shops context or to the group of shops;", [], "Admin.Modules.Feature"), "html", null, true);
                echo "</li>
                    <li>";
                // line 129
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or even activated for one store and deactivated for another.", [], "Admin.Modules.Feature"), "html", null, true);
                echo "</li>
                  </ul>
                ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 131
($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "multistoreCompatibility", []) === twig_constant("\\Module::MULTISTORE_COMPATIBILITY_PARTIAL"))) {
                // line 132
                echo "                  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This module is partially compatible with the multistore feature. Some of its options might not be available.", [], "Admin.Modules.Feature"), "html", null, true);
                echo "
                ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 133
($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "multistoreCompatibility", []) === twig_constant("\\Module::MULTISTORE_COMPATIBILITY_NOT_CONCERNED"))) {
                // line 134
                echo "                  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This module is not compatible with the multistore feature because it would not be useful.", [], "Admin.Modules.Feature"), "html", null, true);
                echo "
                ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 135
($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "multistoreCompatibility", []) === twig_constant("\\Module::MULTISTORE_COMPATIBILITY_NO"))) {
                // line 136
                echo "                  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This module is not compatible with the multistore feature. It means that its configuration applies to all stores.", [], "Admin.Modules.Feature"), "html", null, true);
                echo "
                ";
            }
            // line 138
            echo "              </div>
            ";
        }
        // line 140
        echo "          </div>

          <div id=\"additional-";
        // line 142
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 144
        if (($context["additionalDescription"] ?? $this->getContext($context, "additionalDescription"))) {
            // line 145
            echo "                ";
            echo ($context["additionalDescription"] ?? $this->getContext($context, "additionalDescription"));
            echo "
              ";
        } else {
            // line 147
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No additional description provided for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 149
        echo "            </p>
          </div>

          <div id=\"features-";
        // line 152
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 154
        if (($context["features"] ?? $this->getContext($context, "features"))) {
            // line 155
            echo "                ";
            echo ($context["features"] ?? $this->getContext($context, "features"));
            echo "
              ";
        } else {
            // line 157
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No feature list provided for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 159
        echo "            </p>
          </div>

          <div id=\"customer_benefits-";
        // line 162
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 164
        if (($context["customerBenefits"] ?? $this->getContext($context, "customerBenefits"))) {
            // line 165
            echo "                ";
            echo ($context["customerBenefits"] ?? $this->getContext($context, "customerBenefits"));
            echo "
              ";
        } else {
            // line 167
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No customer benefits notes found for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 169
        echo "            </p>
          </div>

          <div id=\"demo_video-";
        // line 172
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 174
        if (($context["demoVideo"] ?? $this->getContext($context, "demoVideo"))) {
            // line 175
            echo "                ";
            echo $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getYoutubeLink(($context["demoVideo"] ?? $this->getContext($context, "demoVideo")));
            echo "
              ";
        } else {
            // line 177
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No demonstration video found for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 179
        echo "            </p>
          </div>

          <div id=\"changelog-";
        // line 182
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            ";
        // line 183
        if (($context["changeLog"] ?? $this->getContext($context, "changeLog"))) {
            // line 184
            echo "              <ul class=\"module-readmore-tab-content\">
                ";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->arrayCast(($context["changeLog"] ?? $this->getContext($context, "changeLog")))));
            foreach ($context['_seq'] as $context["version"] => $context["lines"]) {
                // line 186
                echo "                  <li>
                    <b>";
                // line 187
                echo twig_escape_filter($this->env, $context["version"], "html", null, true);
                echo ":</b>
                    ";
                // line 188
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["lines"]);
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 189
                    echo "                      ";
                    echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                    echo "<br/>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "                  </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['version'], $context['lines'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "              </ul>
            ";
        } else {
            // line 195
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No changelog provided for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
            ";
        }
        // line 197
        echo "          </div>
          ";
        // line 199
        echo "        </div>
      </div>
    </div>

    <div class=\"modal-footer module-modal-footer\">
      <div class=\"module-stars-price\">
        <div class=\"module-price text-sm-right\">
          ";
        // line 206
        if ((($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "url_active", []) == "buy") && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "price", []), "raw", []) != "0.00"))) {
            // line 207
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "price", []), "displayPrice", []), "html", null, true);
            echo "
          ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 208
($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "url_active", []) != "buy")) {
            // line 209
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free", [], "Admin.Modules.Feature"), "html", null, true);
            echo "
          ";
        }
        // line 211
        echo "        </div>
      </div>
      <div class=\"module-badges-action\">
        <div class=\"float-left module-badges-display\">
          ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["badges"] ?? $this->getContext($context, "badges")));
        foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
            // line 216
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "img", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "label", []), "html", null, true);
            echo "\"/>
            ";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "label", []), "html", null, true);
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "        </div>
        <div class=\"float-right module-action\">
          ";
        // line 221
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig", 221)->display(twig_array_merge($context, ["module" => ($context["module"] ?? $this->getContext($context, "module")), "level" => ($context["level"] ?? $this->getContext($context, "level"))]));
        // line 222
        echo "        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 222,  498 => 221,  494 => 219,  486 => 217,  479 => 216,  475 => 215,  469 => 211,  463 => 209,  461 => 208,  456 => 207,  454 => 206,  445 => 199,  442 => 197,  436 => 195,  432 => 193,  425 => 191,  416 => 189,  412 => 188,  408 => 187,  405 => 186,  401 => 185,  398 => 184,  396 => 183,  392 => 182,  387 => 179,  381 => 177,  375 => 175,  373 => 174,  368 => 172,  363 => 169,  357 => 167,  351 => 165,  349 => 164,  344 => 162,  339 => 159,  333 => 157,  327 => 155,  325 => 154,  320 => 152,  315 => 149,  309 => 147,  303 => 145,  301 => 144,  296 => 142,  292 => 140,  288 => 138,  282 => 136,  280 => 135,  275 => 134,  273 => 133,  268 => 132,  266 => 131,  261 => 129,  257 => 128,  253 => 127,  247 => 125,  245 => 124,  241 => 123,  238 => 122,  236 => 121,  233 => 120,  227 => 118,  221 => 116,  219 => 115,  213 => 113,  208 => 109,  206 => 108,  198 => 105,  195 => 104,  192 => 103,  184 => 100,  181 => 99,  178 => 98,  170 => 95,  167 => 94,  164 => 93,  156 => 90,  153 => 89,  150 => 88,  142 => 85,  139 => 84,  137 => 83,  130 => 81,  126 => 79,  115 => 74,  101 => 62,  95 => 60,  89 => 58,  87 => 57,  82 => 55,  75 => 53,  72 => 52,  65 => 48,  59 => 46,  57 => 45,  51 => 41,  49 => 39,  48 => 38,  47 => 37,  46 => 36,  45 => 35,  44 => 34,  43 => 33,  42 => 32,  41 => 31,  40 => 30,  39 => 29,  38 => 26,  36 => 25,);
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
{% set ats = module.attributes %}
{% set name, displayName, nbRates,
  starsRate, img, serviceUrl, version, cover, additionalDescription,
  fullDescription, changeLog, customerBenefits, demoVideo, author, notFoundImg, features, badges =
  ats.name, ats.displayName, ats.nbRates, ats.starsRate, ats.img,
  ats.serviceUrl is defined and ats.serviceUrl|length > 0 ? ats.serviceUrl : false,
  ats.version, ats.cover,
  ats.additionalDescription is defined and ats.additionalDescription|length > 0 ? ats.additionalDescription : false,
  ats.fullDescription is defined and ats.fullDescription|length > 0 ? ats.fullDescription : false,
  ats.changeLog is defined and ats.changeLog|length > 0 ? ats.changeLog : false,
  ats.customer_benefits is defined and ats.customer_benefits|length > 0 ? ats.customer_benefits : false,
  ats.demo_video is defined and ats.demo_video|length > 0 ? ats.demo_video : false,
  ats.author, 'https://cdn4.iconfinder.com/data/icons/ballicons-2-free/100/box-512.png',
  ats.features,
  ats.badges is defined and ats.badges|length > 0 ? ats.badges : false
%}
<div class=\"modal-dialog module-modal-dialog\">
  <!-- Modal content-->
  <div class=\"modal-content module-modal-content no-padding\">
    <div class=\"modal-header module-modal-header\">
      {% if nbRates > 0 %}
        <div class=\"read-more-stars module-star-ranking-grid-{{ starsRate }}\">
          (
          {{ nbRates }}
          )
        </div>
      {% endif %}
      <div>
        <img class=\"module-logo-thumb\" height=\"57\" width=\"57\" src=\"{{ img }}\" alt=\"{{ displayName }}\"/>
        <div class=\"modal-title module-modal-title\">
          <h1>{{ displayName }}<br>
            <small class=\"version small-text\">
              {% if serviceUrl is defined and serviceUrl|length > 0 %}
                {{ 'Service by %author%'|trans({'%author%' : author}, 'Admin.Modules.Feature') }}
              {% else %}
                {{ 'v%version% by %author%'|trans({ '%version%' : version, '%author%' : author }, 'Admin.Modules.Feature') }}
              {% endif %}
            </small>
          </h1>

        </div>
      </div>
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>

    <div class=\"modal-body row module-modal-body\">
      <div class=\"col-md-12 module-big-cover\">
        <img src=\"{% if cover.big is defined %}{{ cover.big }}{% else %}{{ notFoundImg }}{% endif %}\"/>
      </div>
      <div class=\"col-md-12 module-menu-readmore\">
        <nav class=\"navbar navbar-light\">
          {# tab list #}
          <ul class=\"nav nav-pills\">
            <li class=\"nav-item\">
              <a class=\"nav-link module-readmore-tab active\" data-toggle=\"tab\" href=\"#overview-{{ name }}\">{{ 'Overview'|trans({}, 'Admin.Modules.Feature') }}</a>
            </li>
            {% if additionalDescription %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#additional-{{ name }}\">{{ 'Additional information'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if customerBenefits %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#customer_benefits-{{ name }}\">{{ 'Benefits'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if features %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#features-{{ name }}\">{{ 'Features'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if demoVideo %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#demo_video-{{ name }}\">{{ 'Demo video'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if changeLog %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#changelog-{{ name }}\">{{ 'Changelog'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {# end tab list #}
          </ul>
        </nav>
        <div class=\"tab-content\">
          {# tab content list #}
          <div id=\"overview-{{ name }}\" class=\"tab-pane fade in active show\">
            <p class=\"module-readmore-tab-content\">
              {% if fullDescription %}
                {{ fullDescription|raw }}
              {% else %}
                {{ 'No description found for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
            {% if module.attributes.multistoreCompatibility is defined and module.attributes.multistoreCompatibility is not same as(constant('\\\\Module::MULTISTORE_COMPATIBILITY_UNKNOWN')) %}
              <div class=\"module-readmore-multistore-content\">
                <h3>{{ 'Multistore compatibility:'|trans({}, 'Admin.Modules.Feature') }}</h3>
                {% if module.attributes.multistoreCompatibility is same as(constant('\\\\Module::MULTISTORE_COMPATIBILITY_YES')) %}
                  {{ 'This module is compatible with the multistore feature. It can be either:'|trans({}, 'Admin.Modules.Feature') }}
                  <ul>
                    <li>{{ 'configured differently from one store to another;'|trans({}, 'Admin.Modules.Feature') }}</li>
                    <li>{{ 'configured quickly in the same way on all stores thanks to the all shops context or to the group of shops;'|trans({}, 'Admin.Modules.Feature') }}</li>
                    <li>{{ 'or even activated for one store and deactivated for another.'|trans({}, 'Admin.Modules.Feature') }}</li>
                  </ul>
                {% elseif module.attributes.multistoreCompatibility is same as(constant('\\\\Module::MULTISTORE_COMPATIBILITY_PARTIAL')) %}
                  {{ 'This module is partially compatible with the multistore feature. Some of its options might not be available.'|trans({}, 'Admin.Modules.Feature') }}
                {% elseif module.attributes.multistoreCompatibility is same as(constant('\\\\Module::MULTISTORE_COMPATIBILITY_NOT_CONCERNED')) %}
                  {{ 'This module is not compatible with the multistore feature because it would not be useful.'|trans({}, 'Admin.Modules.Feature') }}
                {% elseif module.attributes.multistoreCompatibility is same as(constant('\\\\Module::MULTISTORE_COMPATIBILITY_NO')) %}
                  {{ 'This module is not compatible with the multistore feature. It means that its configuration applies to all stores.'|trans({}, 'Admin.Modules.Feature') }}
                {% endif %}
              </div>
            {% endif %}
          </div>

          <div id=\"additional-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if additionalDescription %}
                {{ additionalDescription|raw }}
              {% else %}
                {{ 'No additional description provided for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"features-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if features %}
                {{ features|raw }}
              {% else %}
                {{ 'No feature list provided for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"customer_benefits-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if customerBenefits %}
                {{ customerBenefits|raw }}
              {% else %}
                {{ 'No customer benefits notes found for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"demo_video-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if demoVideo %}
                {{ youtube_link(demoVideo)|raw }}
              {% else %}
                {{ 'No demonstration video found for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"changelog-{{ name }}\" class=\"tab-pane fade\">
            {% if changeLog %}
              <ul class=\"module-readmore-tab-content\">
                {% for version, lines in changeLog|arrayCast|reverse %}
                  <li>
                    <b>{{version}}:</b>
                    {% for line in lines %}
                      {{line}}<br/>
                    {% endfor %}
                  </li>
                {% endfor %}
              </ul>
            {% else %}
              {{ 'No changelog provided for this module :('|trans({}, 'Admin.Modules.Notification') }}
            {% endif %}
          </div>
          {# end tab content list #}
        </div>
      </div>
    </div>

    <div class=\"modal-footer module-modal-footer\">
      <div class=\"module-stars-price\">
        <div class=\"module-price text-sm-right\">
          {% if module.attributes.url_active == 'buy' and module.attributes.price.raw != '0.00' %}
            {{ module.attributes.price.displayPrice }}
          {% elseif module.attributes.url_active != 'buy' %}
            {{ 'Free'|trans({}, 'Admin.Modules.Feature') }}
          {% endif %}
        </div>
      </div>
      <div class=\"module-badges-action\">
        <div class=\"float-left module-badges-display\">
          {% for badge in badges %}
            <img src=\"{{badge.img}}\" alt=\"{{badge.label}}\"/>
            {{badge.label}}
          {% endfor %}
        </div>
        <div class=\"float-right module-action\">
          {% include '@PrestaShop/Admin/Module/Includes/action_menu.html.twig' with { 'module': module, 'level' : level } %}
        </div>
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_read_more_content.html.twig");
    }
}
