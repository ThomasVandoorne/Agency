<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* _components/fieldtypes/Matrix/input.twig */
class __TwigTemplate_1547b482168dff70599705a03df49bdadcf68599ec1c12a6ee63de33209833c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_components/fieldtypes/Matrix/input.twig");
        // line 1
        echo craft\helpers\Html::hiddenInput((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 1, $this->source); })()), "");
        echo "

<div class=\"matrix matrix-field\" id=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
    <span aria-live=\"assertive\" class=\"visually-hidden\" data-status-message></span>
    <div class=\"blocks\" role=\"list\">
        ";
        // line 6
        $context["totalNewBlocks"] = 0;
        // line 7
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 8
            echo "            ";
            $context["blockType"] = craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "getType", [], "method");
            // line 9
            echo "            ";
            $context["blockTypeName"] = $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["blockType"]) || array_key_exists("blockType", $context) ? $context["blockType"] : (function () { throw new RuntimeError('Variable "blockType" does not exist.', 9, $this->source); })()), "name", []), "site");
            // line 10
            echo "            ";
            $context["blockId"] = craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "id", []);
            // line 11
            echo "            ";
            $context["blockIsNew"] = twig_test_empty((isset($context["blockId"]) || array_key_exists("blockId", $context) ? $context["blockId"] : (function () { throw new RuntimeError('Variable "blockId" does not exist.', 11, $this->source); })()));
            // line 12
            echo "            ";
            if ((isset($context["blockIsNew"]) || array_key_exists("blockIsNew", $context) ? $context["blockIsNew"] : (function () { throw new RuntimeError('Variable "blockIsNew" does not exist.', 12, $this->source); })())) {
                // line 13
                echo "                ";
                $context["totalNewBlocks"] = ((isset($context["totalNewBlocks"]) || array_key_exists("totalNewBlocks", $context) ? $context["totalNewBlocks"] : (function () { throw new RuntimeError('Variable "totalNewBlocks" does not exist.', 13, $this->source); })()) + 1);
                // line 14
                echo "                ";
                $context["blockId"] = ("new" . (isset($context["totalNewBlocks"]) || array_key_exists("totalNewBlocks", $context) ? $context["totalNewBlocks"] : (function () { throw new RuntimeError('Variable "totalNewBlocks" does not exist.', 14, $this->source); })()));
                // line 15
                echo "            ";
            }
            // line 16
            echo "            ";
            $context["baseInputName"] = ((((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 16, $this->source); })()) . "[blocks][") . (isset($context["blockId"]) || array_key_exists("blockId", $context) ? $context["blockId"] : (function () { throw new RuntimeError('Variable "blockId" does not exist.', 16, $this->source); })())) . "]");
            // line 17
            echo "            ";
            $context["blockAttributes"] = ["class" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => "matrixblock", 1 => (( !craft\helpers\Template::attribute($this->env, $this->source,             // line 20
$context["block"], "enabled", [])) ? ("disabled") : ("")), 2 => ((            // line 21
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 21, $this->source); })())) ? ("static") : (""))]), "data" => ["id" =>             // line 24
(isset($context["blockId"]) || array_key_exists("blockId", $context) ? $context["blockId"] : (function () { throw new RuntimeError('Variable "blockId" does not exist.', 24, $this->source); })()), "type" => craft\helpers\Template::attribute($this->env, $this->source,             // line 25
(isset($context["blockType"]) || array_key_exists("blockType", $context) ? $context["blockType"] : (function () { throw new RuntimeError('Variable "blockType" does not exist.', 25, $this->source); })()), "handle", []), "type-name" =>             // line 26
(isset($context["blockTypeName"]) || array_key_exists("blockTypeName", $context) ? $context["blockTypeName"] : (function () { throw new RuntimeError('Variable "blockTypeName" does not exist.', 26, $this->source); })()), "collapsed" => craft\helpers\Template::attribute($this->env, $this->source,             // line 27
$context["block"], "collapsed", [])], "role" => "listitem"];
            // line 31
            echo "
            ";
            // line 32
            $context["actionBtnLabel"] = (((isset($context["blockTypeName"]) || array_key_exists("blockTypeName", $context) ? $context["blockTypeName"] : (function () { throw new RuntimeError('Variable "blockTypeName" does not exist.', 32, $this->source); })()) . " ") . $this->extensions['craft\web\twig\Extension']->translateFilter("Actions", "app"));
            // line 33
            echo "            ";
            $context["actionMenuId"] = ("matrixblock-action-menu-" . (isset($context["blockId"]) || array_key_exists("blockId", $context) ? $context["blockId"] : (function () { throw new RuntimeError('Variable "blockId" does not exist.', 33, $this->source); })()));
            // line 34
            echo "
            ";
            // line 35
            $context["actionBtnAttributes"] = ["class" => [0 => "btn", 1 => "settings", 2 => "icon", 3 => "menubtn"], "type" => "button", "role" => "button", "title" => $this->extensions['craft\web\twig\Extension']->translateFilter("Actions", "app"), "aria" => ["controls" =>             // line 41
(isset($context["actionMenuId"]) || array_key_exists("actionMenuId", $context) ? $context["actionMenuId"] : (function () { throw new RuntimeError('Variable "actionMenuId" does not exist.', 41, $this->source); })()), "label" =>             // line 42
(isset($context["actionBtnLabel"]) || array_key_exists("actionBtnLabel", $context) ? $context["actionBtnLabel"] : (function () { throw new RuntimeError('Variable "actionBtnLabel" does not exist.', 42, $this->source); })())], "data" => ["disclosure-trigger" => true]];
            // line 48
            echo "
            <div ";
            // line 49
            echo craft\helpers\Html::renderTagAttributes((isset($context["blockAttributes"]) || array_key_exists("blockAttributes", $context) ? $context["blockAttributes"] : (function () { throw new RuntimeError('Variable "blockAttributes" does not exist.', 49, $this->source); })()));
            echo ">
                ";
            // line 50
            if ( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 50, $this->source); })())) {
                // line 51
                echo "                    ";
                echo craft\helpers\Html::hiddenInput(((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 51, $this->source); })()) . "[sortOrder][]"), (isset($context["blockId"]) || array_key_exists("blockId", $context) ? $context["blockId"] : (function () { throw new RuntimeError('Variable "blockId" does not exist.', 51, $this->source); })()));
                echo "
                    ";
                // line 53
                echo "                    ";
                if ( !(isset($context["blockIsNew"]) || array_key_exists("blockIsNew", $context) ? $context["blockIsNew"] : (function () { throw new RuntimeError('Variable "blockIsNew" does not exist.', 53, $this->source); })())) {
                    // line 54
                    echo "                        ";
                    craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 54, $this->source); })()), "registerDeltaName", [0 => (isset($context["baseInputName"]) || array_key_exists("baseInputName", $context) ? $context["baseInputName"] : (function () { throw new RuntimeError('Variable "baseInputName" does not exist.', 54, $this->source); })())], "method");
                    // line 55
                    echo "                    ";
                }
                // line 56
                echo "                    ";
                echo craft\helpers\Html::hiddenInput(((isset($context["baseInputName"]) || array_key_exists("baseInputName", $context) ? $context["baseInputName"] : (function () { throw new RuntimeError('Variable "baseInputName" does not exist.', 56, $this->source); })()) . "[type]"), craft\helpers\Template::attribute($this->env, $this->source, (isset($context["blockType"]) || array_key_exists("blockType", $context) ? $context["blockType"] : (function () { throw new RuntimeError('Variable "blockType" does not exist.', 56, $this->source); })()), "handle", []));
                echo "
                    ";
                // line 57
                echo craft\helpers\Html::hiddenInput(((isset($context["baseInputName"]) || array_key_exists("baseInputName", $context) ? $context["baseInputName"] : (function () { throw new RuntimeError('Variable "baseInputName" does not exist.', 57, $this->source); })()) . "[enabled]"), ((craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "enabled", [])) ? ("1") : ("")));
                echo "
                    <div class=\"titlebar\">
                        <div class=\"blocktype";
                // line 59
                if (craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "hasErrors", [], "method")) {
                    echo " error";
                }
                echo "\">
                            ";
                // line 60
                echo twig_escape_filter($this->env, (isset($context["blockTypeName"]) || array_key_exists("blockTypeName", $context) ? $context["blockTypeName"] : (function () { throw new RuntimeError('Variable "blockTypeName" does not exist.', 60, $this->source); })()), "html", null, true);
                echo "
                            ";
                // line 61
                if (craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "hasErrors", [], "method")) {
                    echo "<span data-icon=\"alert\" aria-label=\"";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Error", "app"), "html", null, true);
                    echo "\"></span>";
                }
                // line 62
                echo "                        </div>
                        <div class=\"preview\"></div>
                    </div>
                    <div class=\"checkbox\" title=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Select", "app"), "html", null, true);
                echo "\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Select", "app"), "html", null, true);
                echo "\"></div>
                    <div class=\"actions\">
                        <div class=\"status off\" title=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Disabled", "app"), "html", null, true);
                echo "\">
                            ";
                // line 68
                echo $this->extensions['craft\web\twig\Extension']->tagFunction("span", ["class" => "visually-hidden", "html" => $this->extensions['craft\web\twig\Extension']->translateFilter("Disabled", "app")]);
                // line 71
                echo "
                        </div>
                      
                        <div>
                            <button ";
                // line 75
                echo craft\helpers\Html::renderTagAttributes((isset($context["actionBtnAttributes"]) || array_key_exists("actionBtnAttributes", $context) ? $context["actionBtnAttributes"] : (function () { throw new RuntimeError('Variable "actionBtnAttributes" does not exist.', 75, $this->source); })()));
                echo "></button>
                            <div id=\"";
                // line 76
                echo twig_escape_filter($this->env, (isset($context["actionMenuId"]) || array_key_exists("actionMenuId", $context) ? $context["actionMenuId"] : (function () { throw new RuntimeError('Variable "actionMenuId" does not exist.', 76, $this->source); })()), "html", null, true);
                echo "\" class=\"menu menu--disclosure\">
                                <ul class=\"padded\">
                                  <li><a data-icon=\"collapse\" data-action=\"collapse\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Collapse", "app"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Collapse", "app"), "html", null, true);
                echo "</a></li>
                                  <li class=\"hidden\"><a data-icon=\"expand\" data-action=\"expand\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Expand", "app"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Expand", "app"), "html", null, true);
                echo "</a></li>
                                  <li";
                // line 80
                if ( !craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "enabled", [])) {
                    echo " class=\"hidden\"";
                }
                echo "><a data-icon=\"disabled\" data-action=\"disable\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Disable", "app"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Disable", "app"), "html", null, true);
                echo "</a></li>
                                  <li";
                // line 81
                if (craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "enabled", [])) {
                    echo " class=\"hidden\"";
                }
                echo "><a data-icon=\"enabled\" data-action=\"enable\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Enable", "app"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Enable", "app"), "html", null, true);
                echo "</a></li>
                                  <li><a data-icon=\"uarr\" data-action=\"moveUp\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Move up", "app"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Move up", "app"), "html", null, true);
                echo "</a></li>
                                  <li><a data-icon=\"darr\" data-action=\"moveDown\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Move down", "app"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Move down", "app"), "html", null, true);
                echo "</a></li>
                                </ul>
                                ";
                // line 85
                if ( !(isset($context["staticBlocks"]) || array_key_exists("staticBlocks", $context) ? $context["staticBlocks"] : (function () { throw new RuntimeError('Variable "staticBlocks" does not exist.', 85, $this->source); })())) {
                    // line 86
                    echo "                                <hr class=\"padded\">
                                <ul class=\"padded\">
                                  <li><a class=\"error\" data-icon=\"remove\" data-action=\"delete\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                    echo "</a></li>
                                </ul>
                                <hr class=\"padded\">
                                <ul class=\"padded\">
                                    ";
                    // line 92
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) || array_key_exists("blockTypes", $context) ? $context["blockTypes"] : (function () { throw new RuntimeError('Variable "blockTypes" does not exist.', 92, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                        // line 93
                        echo "                                      <li><a data-icon=\"plus\" data-action=\"add\" data-type=\"";
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "handle", []), "html", null, true);
                        echo "\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Add {type} above", "app", ["type" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "name", []), "site")]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Add {type} above", "app", ["type" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "name", []), "site")]), "html", null, true);
                        echo "</a></li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 95
                    echo "                                </ul>
                                ";
                }
                // line 97
                echo "                            </div>
                        </div>
                        <a class=\"move icon\" title=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                echo "\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                echo "\" role=\"button\"></a>
                    </div>
                ";
            }
            // line 102
            echo "                <div class=\"fields\">
                    ";
            // line 103
            $_namespace = (isset($context["baseInputName"]) || array_key_exists("baseInputName", $context) ? $context["baseInputName"] : (function () { throw new RuntimeError('Variable "baseInputName" does not exist.', 103, $this->source); })());
            if ($_namespace) {
                $_originalNamespace = Craft::$app->getView()->getNamespace();
                Craft::$app->getView()->setNamespace(Craft::$app->getView()->namespaceInputName($_namespace));
                ob_start();
                try {
                    // line 104
                    echo "                        ";
                    echo craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "getFieldLayout", [], "method"), "createForm", [0 => $context["block"], 1 => (isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 104, $this->source); })())], "method"), "render", [], "method");
                    echo "
                    ";
                } catch (Exception $e) {
                    ob_end_clean();

                    throw $e;
                }
                echo craft\helpers\Html::namespaceHtml(ob_get_clean(), $_namespace, false);
                Craft::$app->getView()->setNamespace($_originalNamespace);
            } else {
                echo "                        ";
                echo craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "getFieldLayout", [], "method"), "createForm", [0 => $context["block"], 1 => (isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 104, $this->source); })())], "method"), "render", [], "method");
                echo "
                    ";
            }
            unset($_originalNamespace, $_namespace);
            // line 106
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "    </div>
    ";
        // line 110
        if (( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 110, $this->source); })()) &&  !(isset($context["staticBlocks"]) || array_key_exists("staticBlocks", $context) ? $context["staticBlocks"] : (function () { throw new RuntimeError('Variable "staticBlocks" does not exist.', 110, $this->source); })()))) {
            // line 111
            echo "        <div class=\"buttons\">
            <div class=\"btngroup\">
                ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) || array_key_exists("blockTypes", $context) ? $context["blockTypes"] : (function () { throw new RuntimeError('Variable "blockTypes" does not exist.', 113, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                // line 114
                echo "                    <button type=\"button\" class=\"btn dashed";
                if (craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "first", [])) {
                    echo " add icon";
                }
                echo "\" data-type=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "handle", []), "html", null, true);
                echo "\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "name", []), "site"), "html", null, true);
                echo "\" aria-describedby=\"";
                echo twig_escape_filter($this->env, (isset($context["labelId"]) || array_key_exists("labelId", $context) ? $context["labelId"] : (function () { throw new RuntimeError('Variable "labelId" does not exist.', 114, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "name", []), "site"), "html", null, true);
                echo "</button>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "            </div>

            <button type=\"button\" class=\"btn dashed add icon menubtn hidden\">";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Add a block", "app"), "html", null, true);
            echo "</button>
            <div class=\"menu\">
                <ul>
                    ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) || array_key_exists("blockTypes", $context) ? $context["blockTypes"] : (function () { throw new RuntimeError('Variable "blockTypes" does not exist.', 121, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                // line 122
                echo "                        <li><a data-type=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "handle", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "name", []), "site"), "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                </ul>
            </div>
        </div>
    ";
        }
        // line 128
        echo "</div>
";
        craft\helpers\Template::endProfile("template", "_components/fieldtypes/Matrix/input.twig");
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Matrix/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 128,  397 => 124,  386 => 122,  382 => 121,  376 => 118,  372 => 116,  345 => 114,  328 => 113,  324 => 111,  322 => 110,  319 => 109,  311 => 106,  292 => 104,  285 => 103,  282 => 102,  274 => 99,  270 => 97,  266 => 95,  253 => 93,  249 => 92,  240 => 88,  236 => 86,  234 => 85,  227 => 83,  221 => 82,  211 => 81,  201 => 80,  195 => 79,  189 => 78,  184 => 76,  180 => 75,  174 => 71,  172 => 68,  168 => 67,  161 => 65,  156 => 62,  150 => 61,  146 => 60,  140 => 59,  135 => 57,  130 => 56,  127 => 55,  124 => 54,  121 => 53,  116 => 51,  114 => 50,  110 => 49,  107 => 48,  105 => 42,  104 => 41,  103 => 35,  100 => 34,  97 => 33,  95 => 32,  92 => 31,  90 => 27,  89 => 26,  88 => 25,  87 => 24,  86 => 21,  85 => 20,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  56 => 8,  51 => 7,  49 => 6,  43 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ hiddenInput(name, '') }}

<div class=\"matrix matrix-field\" id=\"{{ id }}\">
    <span aria-live=\"assertive\" class=\"visually-hidden\" data-status-message></span>
    <div class=\"blocks\" role=\"list\">
        {% set totalNewBlocks = 0 %}
        {% for block in blocks %}
            {% set blockType = block.getType() %}
            {% set blockTypeName = blockType.name|t('site') %}
            {% set blockId = block.id %}
            {% set blockIsNew = blockId is empty %}
            {% if blockIsNew %}
                {% set totalNewBlocks = totalNewBlocks + 1 %}
                {% set blockId = 'new'~totalNewBlocks %}
            {% endif %}
            {% set baseInputName = \"#{name}[blocks][#{blockId}]\" %}
            {% set blockAttributes = {
                class: [
                    'matrixblock',
                    not block.enabled ? 'disabled',
                    static ? 'static',
                ]|filter,
                data: {
                    id: blockId,
                    type: blockType.handle,
                    'type-name': blockTypeName,
                    collapsed: block.collapsed,
                },
                role: 'listitem',
            } %}

            {% set actionBtnLabel = \"#{blockTypeName} #{'Actions'|t('app')}\" %}
            {% set actionMenuId = \"matrixblock-action-menu-#{blockId}\" %}

            {% set actionBtnAttributes = {
                class: ['btn', 'settings', 'icon', 'menubtn'],
                type: 'button',
                role: 'button',
                title: 'Actions'|t('app'),
                aria: {
                    controls: actionMenuId,
                    label: actionBtnLabel,
                },
                data: {
                    'disclosure-trigger': true,
                }
            } %}

            <div {{ attr(blockAttributes) }}>
                {% if not static %}
                    {{ hiddenInput(\"#{name}[sortOrder][]\", blockId) }}
                    {# only register a delta name for this block if it’s not new #}
                    {% if not blockIsNew %}
                        {% do view.registerDeltaName(baseInputName) %}
                    {% endif %}
                    {{ hiddenInput(\"#{baseInputName}[type]\", blockType.handle) }}
                    {{ hiddenInput(\"#{baseInputName}[enabled]\", block.enabled ? '1' : '') }}
                    <div class=\"titlebar\">
                        <div class=\"blocktype{% if block.hasErrors() %} error{% endif %}\">
                            {{ blockTypeName }}
                            {% if block.hasErrors() %}<span data-icon=\"alert\" aria-label=\"{{ 'Error'|t('app') }}\"></span>{% endif %}
                        </div>
                        <div class=\"preview\"></div>
                    </div>
                    <div class=\"checkbox\" title=\"{{ 'Select'|t('app') }}\" aria-label=\"{{ 'Select'|t('app') }}\"></div>
                    <div class=\"actions\">
                        <div class=\"status off\" title=\"{{ 'Disabled'|t('app') }}\">
                            {{ tag('span', {
                                class: 'visually-hidden',
                                html: 'Disabled'|t('app'),
                            }) }}
                        </div>
                      
                        <div>
                            <button {{ attr(actionBtnAttributes) }}></button>
                            <div id=\"{{ actionMenuId }}\" class=\"menu menu--disclosure\">
                                <ul class=\"padded\">
                                  <li><a data-icon=\"collapse\" data-action=\"collapse\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"{{ 'Collapse'|t('app') }}\">{{ \"Collapse\"|t('app') }}</a></li>
                                  <li class=\"hidden\"><a data-icon=\"expand\" data-action=\"expand\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"{{ 'Expand'|t('app') }}\">{{ \"Expand\"|t('app') }}</a></li>
                                  <li{% if not block.enabled %} class=\"hidden\"{% endif %}><a data-icon=\"disabled\" data-action=\"disable\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"{{ 'Disable'|t('app') }}\">{{ \"Disable\"|t('app') }}</a></li>
                                  <li{% if block.enabled %} class=\"hidden\"{% endif %}><a data-icon=\"enabled\" data-action=\"enable\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"{{ 'Enable'|t('app') }}\">{{ \"Enable\"|t('app') }}</a></li>
                                  <li><a data-icon=\"uarr\" data-action=\"moveUp\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"{{ 'Move up'|t('app') }}\">{{ 'Move up'|t('app') }}</a></li>
                                  <li><a data-icon=\"darr\" data-action=\"moveDown\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"{{ 'Move down'|t('app') }}\">{{ 'Move down'|t('app') }}</a></li>
                                </ul>
                                {% if not staticBlocks %}
                                <hr class=\"padded\">
                                <ul class=\"padded\">
                                  <li><a class=\"error\" data-icon=\"remove\" data-action=\"delete\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"{{ 'Delete'|t('app') }}\">{{ \"Delete\"|t('app') }}</a></li>
                                </ul>
                                <hr class=\"padded\">
                                <ul class=\"padded\">
                                    {% for blockType in blockTypes %}
                                      <li><a data-icon=\"plus\" data-action=\"add\" data-type=\"{{ blockType.handle }}\" href=\"#\" type=\"button\" role=\"button\" aria-label=\"{{ 'Add {type} above'|t('app', { type: blockType.name|t('site') }) }}\">{{ \"Add {type} above\"|t('app', { type: blockType.name|t('site') }) }}</a></li>
                                    {% endfor %}
                                </ul>
                                {% endif %}
                            </div>
                        </div>
                        <a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\" aria-label=\"{{ 'Reorder'|t('app') }}\" role=\"button\"></a>
                    </div>
                {% endif %}
                <div class=\"fields\">
                    {% namespace baseInputName %}
                        {{ block.getFieldLayout().createForm(block, static).render()|raw }}
                    {% endnamespace %}
                </div>
            </div>
        {% endfor %}
    </div>
    {% if not static and not staticBlocks %}
        <div class=\"buttons\">
            <div class=\"btngroup\">
                {% for blockType in blockTypes %}
                    <button type=\"button\" class=\"btn dashed{% if loop.first %} add icon{% endif %}\" data-type=\"{{ blockType.handle }}\" aria-label=\"{{ blockType.name|t('site') }}\" aria-describedby=\"{{ labelId }}\">{{ blockType.name|t('site') }}</button>
                {% endfor %}
            </div>

            <button type=\"button\" class=\"btn dashed add icon menubtn hidden\">{{ \"Add a block\"|t('app') }}</button>
            <div class=\"menu\">
                <ul>
                    {% for blockType in blockTypes %}
                        <li><a data-type=\"{{ blockType.handle }}\">{{ blockType.name|t('site') }}</a></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    {% endif %}
</div>
", "_components/fieldtypes/Matrix/input.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_components/fieldtypes/Matrix/input.twig");
    }
}
