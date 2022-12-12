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

/* @PrestaShop/Admin/Improve/Design/positions.html.twig */
class __TwigTemplate_fedb98f243042faac8b3e230c170d7cde55d2dd7199a78b6f41a62b6827b8cbf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/positions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/positions.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/positions.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "  <div class=\"row m-0\">
    ";
        // line 30
        if ( !($context["canMove"] ?? $this->getContext($context, "canMove"))) {
            // line 31
            echo "      <p class=\"alert alert-warning alert-can-move\">
        ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you want to order/move the following data, please select a shop from the shop list.", [], "Admin.Design.Notification"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 35
        echo "
    <div class=\"card col-9\">
      <div class=\"card-body\">
        <div class=\"card\">
          <form class=\"mt-2\" id=\"position-filters\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"row col-md-12 col-lg-6\">
                  <label class=\"form-control-label col-4 text-left mt-1\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show", [], "Admin.Actions"), "html", null, true);
        echo "</label>
                  <div class=\"col-8\">
                    <select id=\"show-modules\" class=\"filter\">
                      <option value=\"all\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All modules", [], "Admin.Design.Feature"), "html", null, true);
        echo "&nbsp;</option>
                      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 48
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", []), "html", null, true);
            echo "\"";
            if ((($context["selectedModule"] ?? $this->getContext($context, "selectedModule")) == $this->getAttribute($context["module"], "id", []))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "displayName", []), "html", null, true);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </select>
                  </div>
                </div>

                <div class=\"row col-md-12 col-lg-6\">
                  <label class=\"form-control-label col-5 text-center mt-1\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search for a hook", [], "Admin.Design.Feature"), "html", null, true);
        echo "</label>
                  <div class=\"input-group col-7\">
                    <div class=\"input-group-prepend\">
                      <div class=\"input-group-text\">
                        <i class=\"material-icons\">search</i>
                      </div>
                    </div>
                    <input type=\"text\" class=\"form-control\" id=\"hook-search\" name=\"hook-search\" placeholder=\"\">
                  </div>
                </div>
              </div>
            </div>

            <div class=\"container mt-3\">
              <div class=\"row\">
                <div class=\"col-lg-12\">
                  <p class=\"checkbox\">
                    <label class=\"form-control-label\" for=\"hook-position\">
                      <input type=\"checkbox\" id=\"hook-position\" />
                      <label class=\"selectbox\" for=\"hook-position\"><i class=\"material-icons done\">done</i></label>
                      ";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display non-positionable hooks", [], "Admin.Design.Feature"), "html", null, true);
        echo "
                    </label>
                  </p>
                </div>
              </div>
            </div>
          </form>
        </div>

        <form id=\"module-positions-form\" method=\"post\" action=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_modules_positions_unhook");
        echo "\" data-update-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_improve_design_positions_update");
        echo "\" data-togglestatus-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_modules_positions_toggle_status");
        echo "\">
          ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? $this->getContext($context, "hooks")));
        foreach ($context['_seq'] as $context["_key"] => $context["hook"]) {
            // line 86
            echo "            <section class=\"hook-panel";
            if ( !$this->getAttribute($context["hook"], "position", [], "array")) {
                echo " hook-position";
            }
            echo "\"";
            if ( !$this->getAttribute($context["hook"], "position", [], "array")) {
                echo " style=\"display:none;\"";
            }
            echo ">
              <a name=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "name", [], "array"), "html", null, true);
            echo "\"></a>
              <header class=\"hook-panel-header\">
                <span class=\"hook-status\">
                   <input
                      class=\"switch-input-md hook-switch-action\"
                      data-toggle=\"switch\"
                      data-hook-id=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", [], "array"), "html", null, true);
            echo "\"
                      type=\"checkbox\"
                      value=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "active", [], "array"), "html", null, true);
            echo "\"
                      ";
            // line 96
            echo (($this->getAttribute($context["hook"], "active", [], "array")) ? ("checked=\"checked\"") : (""));
            echo "
                    />
                </span>
                <span class=\"hook-name\">";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "name", [], "array"), "html", null, true);
            echo "</span>
                <label class=\"badge badge-pill float-right\">
                  ";
            // line 101
            if (($this->getAttribute($context["hook"], "modules_count", [], "array") && ($context["canMove"] ?? $this->getContext($context, "canMove")))) {
                // line 102
                echo "                    <input type=\"checkbox\" class=\"hook-checker\" id=\"Ghook";
                echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", [], "array"), "html", null, true);
                echo "\" data-hook-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", [], "array"), "html", null, true);
                echo "\" />
                    <label class=\"selectbox\" for=\"Ghook";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", [], "array"), "html", null, true);
                echo "\"><i class=\"material-icons done\">done</i></label>
                  ";
            }
            // line 105
            echo "
                  ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "modules_count", [], "array"), "html", null, true);
            echo "
                  ";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((($this->getAttribute($context["hook"], "modules_count", [], "array") > 1)) ? ("Modules") : ("Module")), [], "Admin.Global"), "html", null, true);
            echo "
                </label>

                ";
            // line 110
            if ($this->getAttribute($context["hook"], "description", [], "array", true, true)) {
                // line 111
                echo "                  <div class=\"hook_description\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "description", [], "array"), "html", null, true);
                echo "</div>
                ";
            }
            // line 113
            echo "              </header>

              ";
            // line 115
            if ($this->getAttribute($context["hook"], "modules_count", [], "array")) {
                // line 116
                echo "                <section class=\"module-list";
                if ( !$this->getAttribute($context["hook"], "active", [], "array")) {
                    echo "-disabled";
                }
                echo "\">
                  <ul class=\"list-unstyled";
                // line 117
                if (($this->getAttribute($context["hook"], "modules_count", [], "array") > 1)) {
                    echo " sortable";
                }
                echo "\">
                    ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["hook"], "modules", [], "array"));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    if ($this->getAttribute(($context["modules"] ?? null), $this->getAttribute($context["module"], "id_module", [], "array"), [], "array", true, true)) {
                        // line 119
                        echo "                      ";
                        $context["moduleInstance"] = $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), $this->getAttribute($context["module"], "id_module", [], "array"), [], "array");
                        // line 120
                        echo "                      <li id=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["hook"], "id_hook", [], "array") . "_") . $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", [])), "html", null, true);
                        echo "\"
                        class=\"module-position-";
                        // line 121
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", []), "html", null, true);
                        echo " module-item";
                        if ((($context["canMove"] ?? $this->getContext($context, "canMove")) && ($this->getAttribute($context["hook"], "modules_count", [], "array") >= 2))) {
                            echo " draggable";
                        }
                        echo "\">

                        <div class=\"module-column-select\">
                          <i class=\"material-icons drag_indicator\">drag_indicator</i>
                          <input type=\"checkbox\" id=\"selecterbox";
                        // line 125
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["hook"], "id_hook", [], "array") . "_") . $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", [])), "html", null, true);
                        echo "\" data-hook-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", [], "array"), "html", null, true);
                        echo "\" class=\"modules-position-checkbox hook";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", [], "array"), "html", null, true);
                        echo "\" name=\"unhooks[]\" value=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["hook"], "id_hook", [], "array") . "_") . $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", [])), "html", null, true);
                        echo "\"/>
                          <label class=\"selectbox\" for=\"selecterbox";
                        // line 126
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["hook"], "id_hook", [], "array") . "_") . $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", [])), "html", null, true);
                        echo "\"><i class=\"material-icons done\">done</i></label>
                        </div>

                        <div class=\"module-column-icon\">
                          <img src=\"";
                        // line 130
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("../modules/" . $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "name", [])) . "/logo.png")), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "displayName", []));
                        echo "\" />
                        </div>

                        <div class=\"module-column-infos\">
                          <span class=\"module-name\">
                            ";
                        // line 135
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "displayName", []));
                        echo "
                            ";
                        // line 136
                        if ($this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "version", [])) {
                            // line 137
                            echo "                              <small class=\"text-muted\">&nbsp;-&nbsp;";
                            echo twig_escape_filter($this->env, sprintf("v%s", $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "version", [])), "html", null, true);
                            echo "</small>
                            ";
                        }
                        // line 139
                        echo "                          </span>
                        </div>

                        <div class=\"module-column-description";
                        // line 142
                        if (( !($context["selectedModule"] ?? $this->getContext($context, "selectedModule")) && ($this->getAttribute($context["hook"], "modules_count", [], "array") > 1))) {
                            echo " hasColumnPosition";
                        }
                        echo " d-none d-md-table-cell\">
                          <span class=\"module-description\">";
                        // line 143
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "description", []));
                        echo "</span>
                        </div>

                        ";
                        // line 146
                        if (( !($context["selectedModule"] ?? $this->getContext($context, "selectedModule")) && ($this->getAttribute($context["hook"], "modules_count", [], "array") > 1))) {
                            // line 147
                            echo "                          <div class=\"btn-toolbar text-center module-column-position";
                            if ((($context["canMove"] ?? $this->getContext($context, "canMove")) && ($this->getAttribute($context["hook"], "modules_count", [], "array") >= 2))) {
                                echo " dragHandle";
                            }
                            echo "\" id=\"td_";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["hook"], "id_hook", [], "array") . "_") . $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", [])), "html", null, true);
                            echo "\">
                            <div class=\"btn-group\">
                              <span class=\"index-position\">";
                            // line 149
                            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                            echo "</span>
                            </div>
                          </div>
                        ";
                        }
                        // line 153
                        echo "
                        <div class=\"module-column-actions\">
                          <div class=\"btn-group\">
                            ";
                        // line 156
                        $context["linkParams"] = ["id_module" => $this->getAttribute(                        // line 157
($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", []), "id_hook" => $this->getAttribute(                        // line 158
$context["hook"], "id_hook", [], "array"), "editGraft" => 1];
                        // line 161
                        echo "                            ";
                        if (($context["selectedModule"] ?? $this->getContext($context, "selectedModule"))) {
                            // line 162
                            echo "                              ";
                            $context["linkParams"] = twig_array_merge(($context["linkParams"] ?? $this->getContext($context, "linkParams")), ["show_modules" => ($context["selectedModule"] ?? $this->getContext($context, "selectedModule"))]);
                            // line 163
                            echo "                            ";
                        }
                        // line 164
                        echo "
                            <a class=\"btn tooltip-link\" href=\"";
                        // line 165
                        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminModulesPositions", true, ($context["linkParams"] ?? $this->getContext($context, "linkParams"))), "html", null, true);
                        echo "\" aria-label=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                        echo "\">
                              <i class=\"material-icons\">edit</i>
                            </a>

                            <a class=\"btn tooltip-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-reference=\"parent\">
                            </a>

                            <div class=\"dropdown-menu\">
                              <a class=\"dropdown-item\" href=\"";
                        // line 173
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_modules_positions_unhook", ["moduleId" => $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "id", []), "hookId" => $this->getAttribute($context["hook"], "id_hook", [], "array")]), "html", null, true);
                        echo "\">
                                <i class=\"material-icons\">indeterminate_check_box</i>
                                ";
                        // line 175
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unhook", [], "Admin.Design.Feature"), "html", null, true);
                        echo "
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class=\"module-column-description d-block d-md-none w-100\">
                          <span class=\"module-description\">";
                        // line 182
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? $this->getContext($context, "moduleInstance")), "description", []));
                        echo "</span>
                        </div>
                      </li>
                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "                  </ul>
                </section>
              ";
            }
            // line 189
            echo "            </section>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hook'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "
          <div id=\"unhook-button-position-bottom\">
            <button type=\"submit\" class=\"btn btn-default\" name=\"unhookform\">
              <i class=\"material-icons\">indeterminate_check_box</i>
              ";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unhook the selection", [], "Admin.Design.Feature"), "html", null, true);
        echo "
            </button>
          </div>
        </form>
      </div>
    </div>

    <div class=\"col-3\">
      <div class=\"card\" id=\"modules-position-selection-panel\">
        <h3 class=\"card-header\"><i class=\"material-icons\">checked</i> ";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Selection", [], "Admin.Global"), "html", null, true);
        echo "</h3>
        <div class=\"card-body\">
          <p>
            <span id=\"modules-position-single-selection\">";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("1 module selected", [], "Admin.Design.Feature"), "html", null, true);
        echo "</span>
            <span id=\"modules-position-multiple-selection\">
              <span id=\"modules-position-selection-count\"></span> ";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modules selected", [], "Admin.Design.Feature"), "html", null, true);
        echo "
            </span>
          </p>
          <div class=\"text-center\">
            <button class=\"btn btn-primary\"><i class=\"icon-remove\"></i> ";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unhook the selection", [], "Admin.Design.Feature"), "html", null, true);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 221
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 222
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/improve_design_positions.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/positions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 223,  506 => 222,  497 => 221,  480 => 213,  473 => 209,  468 => 207,  462 => 204,  450 => 195,  444 => 191,  437 => 189,  432 => 186,  418 => 182,  408 => 175,  403 => 173,  388 => 165,  385 => 164,  382 => 163,  379 => 162,  376 => 161,  374 => 158,  373 => 157,  372 => 156,  367 => 153,  360 => 149,  350 => 147,  348 => 146,  342 => 143,  336 => 142,  331 => 139,  325 => 137,  323 => 136,  319 => 135,  309 => 130,  302 => 126,  292 => 125,  281 => 121,  276 => 120,  273 => 119,  262 => 118,  256 => 117,  249 => 116,  247 => 115,  243 => 113,  237 => 111,  235 => 110,  229 => 107,  225 => 106,  222 => 105,  217 => 103,  210 => 102,  208 => 101,  203 => 99,  197 => 96,  193 => 95,  188 => 93,  179 => 87,  168 => 86,  164 => 85,  156 => 84,  144 => 75,  121 => 55,  114 => 50,  99 => 48,  95 => 47,  91 => 46,  85 => 43,  75 => 35,  69 => 32,  66 => 31,  64 => 30,  61 => 29,  52 => 28,  30 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Design.Feature\" %}

{% block content %}
  <div class=\"row m-0\">
    {% if not canMove %}
      <p class=\"alert alert-warning alert-can-move\">
        {{ 'If you want to order/move the following data, please select a shop from the shop list.' | trans({}, 'Admin.Design.Notification') }}
      </p>
    {% endif %}

    <div class=\"card col-9\">
      <div class=\"card-body\">
        <div class=\"card\">
          <form class=\"mt-2\" id=\"position-filters\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"row col-md-12 col-lg-6\">
                  <label class=\"form-control-label col-4 text-left mt-1\">{{ 'Show' | trans({}, 'Admin.Actions') }}</label>
                  <div class=\"col-8\">
                    <select id=\"show-modules\" class=\"filter\">
                      <option value=\"all\">{{ 'All modules' | trans }}&nbsp;</option>
                      {% for module in modules %}
                        <option value=\"{{ module.id }}\"{% if selectedModule == module.id %} selected=\"selected\"{% endif %}>{{ module.displayName }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>

                <div class=\"row col-md-12 col-lg-6\">
                  <label class=\"form-control-label col-5 text-center mt-1\">{{ 'Search for a hook' | trans }}</label>
                  <div class=\"input-group col-7\">
                    <div class=\"input-group-prepend\">
                      <div class=\"input-group-text\">
                        <i class=\"material-icons\">search</i>
                      </div>
                    </div>
                    <input type=\"text\" class=\"form-control\" id=\"hook-search\" name=\"hook-search\" placeholder=\"\">
                  </div>
                </div>
              </div>
            </div>

            <div class=\"container mt-3\">
              <div class=\"row\">
                <div class=\"col-lg-12\">
                  <p class=\"checkbox\">
                    <label class=\"form-control-label\" for=\"hook-position\">
                      <input type=\"checkbox\" id=\"hook-position\" />
                      <label class=\"selectbox\" for=\"hook-position\"><i class=\"material-icons done\">done</i></label>
                      {{ 'Display non-positionable hooks' | trans }}
                    </label>
                  </p>
                </div>
              </div>
            </div>
          </form>
        </div>

        <form id=\"module-positions-form\" method=\"post\" action=\"{{ path('admin_modules_positions_unhook') }}\" data-update-url=\"{{ path('api_improve_design_positions_update') }}\" data-togglestatus-url=\"{{ path('admin_modules_positions_toggle_status') }}\">
          {% for hook in hooks %}
            <section class=\"hook-panel{% if not hook['position'] %} hook-position{% endif %}\"{% if not hook['position'] %} style=\"display:none;\"{% endif %}>
              <a name=\"{{ hook['name'] }}\"></a>
              <header class=\"hook-panel-header\">
                <span class=\"hook-status\">
                   <input
                      class=\"switch-input-md hook-switch-action\"
                      data-toggle=\"switch\"
                      data-hook-id=\"{{ hook['id_hook'] }}\"
                      type=\"checkbox\"
                      value=\"{{ hook['active'] }}\"
                      {{ hook['active'] ? 'checked=\"checked\"' : '' }}
                    />
                </span>
                <span class=\"hook-name\">{{ hook['name'] }}</span>
                <label class=\"badge badge-pill float-right\">
                  {% if hook['modules_count'] and canMove %}
                    <input type=\"checkbox\" class=\"hook-checker\" id=\"Ghook{{ hook['id_hook'] }}\" data-hook-id=\"{{ hook['id_hook'] }}\" />
                    <label class=\"selectbox\" for=\"Ghook{{ hook['id_hook'] }}\"><i class=\"material-icons done\">done</i></label>
                  {% endif %}

                  {{ hook['modules_count'] }}
                  {{ ((hook['modules_count'] > 1) ? 'Modules' : 'Module') | trans({}, 'Admin.Global') }}
                </label>

                {% if hook['description'] is defined %}
                  <div class=\"hook_description\">{{ hook['description'] }}</div>
                {% endif %}
              </header>

              {% if hook['modules_count'] %}
                <section class=\"module-list{% if not hook['active'] %}-disabled{% endif %}\">
                  <ul class=\"list-unstyled{% if hook['modules_count'] > 1 %} sortable{% endif %}\">
                    {% for module in hook['modules'] if modules[module['id_module']] is defined %}
                      {% set moduleInstance = modules[module['id_module']] %}
                      <li id=\"{{ hook['id_hook'] ~ '_' ~ moduleInstance.id }}\"
                        class=\"module-position-{{ moduleInstance.id }} module-item{% if canMove and hook['modules_count'] >= 2 %} draggable{% endif %}\">

                        <div class=\"module-column-select\">
                          <i class=\"material-icons drag_indicator\">drag_indicator</i>
                          <input type=\"checkbox\" id=\"selecterbox{{ hook['id_hook'] ~ '_' ~ moduleInstance.id }}\" data-hook-id=\"{{ hook['id_hook'] }}\" class=\"modules-position-checkbox hook{{ hook['id_hook'] }}\" name=\"unhooks[]\" value=\"{{ hook['id_hook'] ~ '_' ~ moduleInstance.id }}\"/>
                          <label class=\"selectbox\" for=\"selecterbox{{ hook['id_hook'] ~ '_' ~ moduleInstance.id }}\"><i class=\"material-icons done\">done</i></label>
                        </div>

                        <div class=\"module-column-icon\">
                          <img src=\"{{ asset('../modules/' ~ moduleInstance.name ~ '/logo.png') }}\" alt=\"{{ moduleInstance.displayName| escape }}\" />
                        </div>

                        <div class=\"module-column-infos\">
                          <span class=\"module-name\">
                            {{ moduleInstance.displayName| escape }}
                            {% if moduleInstance.version %}
                              <small class=\"text-muted\">&nbsp;-&nbsp;{{ 'v%s' | format(moduleInstance.version) }}</small>
                            {% endif %}
                          </span>
                        </div>

                        <div class=\"module-column-description{% if not selectedModule and hook['modules_count'] > 1 %} hasColumnPosition{% endif %} d-none d-md-table-cell\">
                          <span class=\"module-description\">{{ moduleInstance.description | escape }}</span>
                        </div>

                        {% if not selectedModule and hook['modules_count'] > 1 %}
                          <div class=\"btn-toolbar text-center module-column-position{% if canMove and hook['modules_count'] >= 2 %} dragHandle{% endif %}\" id=\"td_{{ hook['id_hook'] ~ '_' ~ moduleInstance.id }}\">
                            <div class=\"btn-group\">
                              <span class=\"index-position\">{{ loop.index }}</span>
                            </div>
                          </div>
                        {% endif %}

                        <div class=\"module-column-actions\">
                          <div class=\"btn-group\">
                            {% set linkParams = {
                              'id_module': moduleInstance.id,
                              'id_hook': hook['id_hook'],
                              'editGraft': 1
                            } %}
                            {% if selectedModule %}
                              {% set linkParams = linkParams|merge({'show_modules': selectedModule}) %}
                            {% endif %}

                            <a class=\"btn tooltip-link\" href=\"{{ getAdminLink('AdminModulesPositions', true, linkParams) }}\" aria-label=\"{{ 'Edit' | trans({}, 'Admin.Actions') }}\" title=\"{{ 'Edit' | trans({}, 'Admin.Actions') }}\">
                              <i class=\"material-icons\">edit</i>
                            </a>

                            <a class=\"btn tooltip-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-reference=\"parent\">
                            </a>

                            <div class=\"dropdown-menu\">
                              <a class=\"dropdown-item\" href=\"{{ path('admin_modules_positions_unhook', {moduleId: moduleInstance.id, hookId: hook['id_hook']}) }}\">
                                <i class=\"material-icons\">indeterminate_check_box</i>
                                {{ 'Unhook' | trans({}, 'Admin.Design.Feature') }}
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class=\"module-column-description d-block d-md-none w-100\">
                          <span class=\"module-description\">{{ moduleInstance.description | escape }}</span>
                        </div>
                      </li>
                    {% endfor %}
                  </ul>
                </section>
              {% endif %}
            </section>
          {% endfor %}

          <div id=\"unhook-button-position-bottom\">
            <button type=\"submit\" class=\"btn btn-default\" name=\"unhookform\">
              <i class=\"material-icons\">indeterminate_check_box</i>
              {{ 'Unhook the selection' | trans({}, 'Admin.Design.Feature') }}
            </button>
          </div>
        </form>
      </div>
    </div>

    <div class=\"col-3\">
      <div class=\"card\" id=\"modules-position-selection-panel\">
        <h3 class=\"card-header\"><i class=\"material-icons\">checked</i> {{ 'Selection' | trans({}, 'Admin.Global') }}</h3>
        <div class=\"card-body\">
          <p>
            <span id=\"modules-position-single-selection\">{{ '1 module selected' | trans }}</span>
            <span id=\"modules-position-multiple-selection\">
              <span id=\"modules-position-selection-count\"></span> {{ 'modules selected' | trans({}, 'Admin.Design.Feature') }}
            </span>
          </p>
          <div class=\"text-center\">
            <button class=\"btn btn-primary\"><i class=\"icon-remove\"></i> {{ 'Unhook the selection' | trans }}</button>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/new-theme/public/improve_design_positions.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/positions.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/positions.html.twig");
    }
}
