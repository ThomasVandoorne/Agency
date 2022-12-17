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

/* _includes/forms/editableTable */
class __TwigTemplate_ac4319401dab9784092737788208079a71571b0d9708d7731666afb4df3a11f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'tablecell' => [$this, 'block_tablecell'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_includes/forms/editableTable");
        // line 1
        $context["static"] = (($context["static"]) ?? (false));
        // line 2
        $context["fullWidth"] = (($context["fullWidth"]) ?? (true));
        // line 3
        $context["cols"] = (($context["cols"]) ?? ([]));
        // line 4
        $context["rows"] = (($context["rows"]) ?? ([]));
        // line 5
        $context["initJs"] = ( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 5, $this->source); })()) && (($context["initJs"]) ?? (true)));
        // line 6
        $context["minRows"] = (($context["minRows"]) ?? (null));
        // line 7
        $context["maxRows"] = (($context["maxRows"]) ?? (null));
        // line 8
        $context["describedBy"] = (($context["describedBy"]) ?? (null));
        // line 10
        $context["totalRows"] = $this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 10, $this->source); })()));
        // line 11
        $context["staticRows"] = (((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 11, $this->source); })()) || (($context["staticRows"]) ?? (false))) || ((((isset($context["minRows"]) || array_key_exists("minRows", $context) ? $context["minRows"] : (function () { throw new RuntimeError('Variable "minRows" does not exist.', 11, $this->source); })()) == 1) && ((isset($context["maxRows"]) || array_key_exists("maxRows", $context) ? $context["maxRows"] : (function () { throw new RuntimeError('Variable "maxRows" does not exist.', 11, $this->source); })()) == 1)) && ((isset($context["totalRows"]) || array_key_exists("totalRows", $context) ? $context["totalRows"] : (function () { throw new RuntimeError('Variable "totalRows" does not exist.', 11, $this->source); })()) == 1)));
        // line 12
        $context["allowAdd"] = ((($context["allowAdd"]) ?? (false)) &&  !(isset($context["staticRows"]) || array_key_exists("staticRows", $context) ? $context["staticRows"] : (function () { throw new RuntimeError('Variable "staticRows" does not exist.', 12, $this->source); })()));
        // line 13
        $context["allowReorder"] = ((($context["allowReorder"]) ?? (false)) &&  !(isset($context["staticRows"]) || array_key_exists("staticRows", $context) ? $context["staticRows"] : (function () { throw new RuntimeError('Variable "staticRows" does not exist.', 13, $this->source); })()));
        // line 14
        $context["allowDelete"] = ((($context["allowDelete"]) ?? (false)) &&  !(isset($context["staticRows"]) || array_key_exists("staticRows", $context) ? $context["staticRows"] : (function () { throw new RuntimeError('Variable "staticRows" does not exist.', 14, $this->source); })()));
        // line 15
        echo "
";
        // line 16
        if ( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "    ";
            echo craft\helpers\Html::hiddenInput((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 17, $this->source); })()), "");
            echo "
";
        }
        // line 19
        echo "
";
        // line 39
        echo "
";
        // line 40
        $context["tableAttributes"] = ["id" =>         // line 41
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 41, $this->source); })()), "class" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => "editable", 1 => ((        // line 44
(isset($context["fullWidth"]) || array_key_exists("fullWidth", $context) ? $context["fullWidth"] : (function () { throw new RuntimeError('Variable "fullWidth" does not exist.', 44, $this->source); })())) ? ("fullwidth") : ("")), 2 => ((        // line 45
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 45, $this->source); })())) ? ("static") : ("")), 3 => (((        // line 46
(isset($context["totalRows"]) || array_key_exists("totalRows", $context) ? $context["totalRows"] : (function () { throw new RuntimeError('Variable "totalRows" does not exist.', 46, $this->source); })()) == 0)) ? ("hidden") : (""))])];
        // line 50
        if (        $this->hasBlock("attr", $context, $blocks)) {
            // line 51
            $context["tableAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["tableAttributes"]) || array_key_exists("tableAttributes", $context) ? $context["tableAttributes"] : (function () { throw new RuntimeError('Variable "tableAttributes" does not exist.', 51, $this->source); })()), $this->extensions['craft\web\twig\Extension']->parseAttrFilter((("<div " .             $this->renderBlock("attr", $context, $blocks)) . ">")), true);
        }
        // line 53
        echo "
<span aria-live=\"assertive\" class=\"visually-hidden\" data-status-message></span>
";
        // line 55
        ob_start();
        // line 56
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new RuntimeError('Variable "cols" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 57
            echo "        <col>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    ";
        if (((isset($context["allowDelete"]) || array_key_exists("allowDelete", $context) ? $context["allowDelete"] : (function () { throw new RuntimeError('Variable "allowDelete" does not exist.', 59, $this->source); })()) && (isset($context["allowReorder"]) || array_key_exists("allowReorder", $context) ? $context["allowReorder"] : (function () { throw new RuntimeError('Variable "allowReorder" does not exist.', 59, $this->source); })()))) {
            // line 60
            echo "        <colgroup span=\"2\"></colgroup>
    ";
        } else {
            // line 62
            echo "        ";
            if ((isset($context["allowDelete"]) || array_key_exists("allowDelete", $context) ? $context["allowDelete"] : (function () { throw new RuntimeError('Variable "allowDelete" does not exist.', 62, $this->source); })())) {
                echo "<col>";
            }
            // line 63
            echo "        ";
            if ((isset($context["allowReorder"]) || array_key_exists("allowReorder", $context) ? $context["allowReorder"] : (function () { throw new RuntimeError('Variable "allowReorder" does not exist.', 63, $this->source); })())) {
                echo "<col>";
            }
            // line 64
            echo "    ";
        }
        // line 65
        echo "    <thead>
        <tr>
            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new RuntimeError('Variable "cols" does not exist.', 67, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 68
            switch (craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "type", [])) {
                case "time":
                {
                    // line 70
                    craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 70, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\timepicker\\TimepickerAsset"], "method");
                    break;
                }
                case "template":
                {
                    // line 72
                    craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 72, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\vue\\VueAsset"], "method");
                    break;
                }
            }
            // line 74
            echo "                ";
            $context["columnHeadingId"] = (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 74, $this->source); })()) . "-heading-") . craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "index", []));
            // line 75
            echo "                <th id=\"";
            echo twig_escape_filter($this->env, (isset($context["columnHeadingId"]) || array_key_exists("columnHeadingId", $context) ? $context["columnHeadingId"] : (function () { throw new RuntimeError('Variable "columnHeadingId" does not exist.', 75, $this->source); })()), "html", null, true);
            echo "\" scope=\"col\" class=\"";
            echo twig_call_macro($macros["_self"], "macro_cellClass", [(isset($context["fullWidth"]) || array_key_exists("fullWidth", $context) ? $context["fullWidth"] : (function () { throw new RuntimeError('Variable "fullWidth" does not exist.', 75, $this->source); })()), $context["col"], (((craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "class", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "class", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "class", [])) : ([]))], 75, $context, $this->getSourceContext());
            echo "\">";
            // line 76
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "headingHtml", [], "any", true, true)) {
                // line 77
                echo craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "headingHtml", []);
            } elseif ((((craft\helpers\Template::attribute($this->env, $this->source,             // line 78
$context["col"], "heading", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "heading", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "heading", [])) : (false))) {
                // line 79
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "heading", []), "html", null, true);
            } else {
                // line 81
                echo "                        &nbsp;";
            }
            // line 83
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "info", [], "any", true, true)) {
                // line 84
                echo "<span class=\"info\">";
                echo $this->extensions['craft\web\twig\Extension']->markdownFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "info", []));
                echo "</span>";
            }
            // line 86
            echo "</th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            ";
        if (((isset($context["allowDelete"]) || array_key_exists("allowDelete", $context) ? $context["allowDelete"] : (function () { throw new RuntimeError('Variable "allowDelete" does not exist.', 88, $this->source); })()) || (isset($context["allowReorder"]) || array_key_exists("allowReorder", $context) ? $context["allowReorder"] : (function () { throw new RuntimeError('Variable "allowReorder" does not exist.', 88, $this->source); })()))) {
            // line 89
            echo "                <th colspan=\"";
            echo ((( !(isset($context["allowDelete"]) || array_key_exists("allowDelete", $context) ? $context["allowDelete"] : (function () { throw new RuntimeError('Variable "allowDelete" does not exist.', 89, $this->source); })()) ||  !(isset($context["allowReorder"]) || array_key_exists("allowReorder", $context) ? $context["allowReorder"] : (function () { throw new RuntimeError('Variable "allowReorder" does not exist.', 89, $this->source); })()))) ? (1) : (2));
            echo "\" scope=\"colgroup\"><span class=\"visually-hidden\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Row actions", "app"), "html", null, true);
            echo "</span></th>
            ";
        }
        // line 91
        echo "        </tr>
    </thead>
    <tbody>
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 94, $this->source); })()));
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
        foreach ($context['_seq'] as $context["rowId"] => $context["row"]) {
            // line 95
            echo "            ";
            $context["rowNumber"] = craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "index", []);
            // line 96
            echo "            <tr data-id=\"";
            echo twig_escape_filter($this->env, $context["rowId"], "html", null, true);
            echo "\">
                ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new RuntimeError('Variable "cols" does not exist.', 97, $this->source); })()));
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
            foreach ($context['_seq'] as $context["colId"] => $context["col"]) {
                // line 98
                echo "                    ";
                $context["cell"] = ((craft\helpers\Template::attribute($this->env, $this->source, $context["row"], $context["colId"], [], "array", true, true)) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["row"], $context["colId"], [], "array")) : ((((craft\helpers\Template::attribute($this->env, $this->source, ($context["defaultValues"] ?? null), $context["colId"], [], "array", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["defaultValues"] ?? null), $context["colId"], [], "array")))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["defaultValues"] ?? null), $context["colId"], [], "array")) : (null))));
                // line 99
                echo "                    ";
                $context["value"] = ((craft\helpers\Template::attribute($this->env, $this->source, ($context["cell"] ?? null), "value", [], "any", true, true)) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cell"]) || array_key_exists("cell", $context) ? $context["cell"] : (function () { throw new RuntimeError('Variable "cell" does not exist.', 99, $this->source); })()), "value", [])) : ((isset($context["cell"]) || array_key_exists("cell", $context) ? $context["cell"] : (function () { throw new RuntimeError('Variable "cell" does not exist.', 99, $this->source); })())));
                // line 100
                echo "                    ";
                if ((craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "type", []) == "heading")) {
                    // line 101
                    echo "                        <th scope=\"row\" class=\"";
                    echo twig_call_macro($macros["_self"], "macro_cellClass", [(isset($context["fullWidth"]) || array_key_exists("fullWidth", $context) ? $context["fullWidth"] : (function () { throw new RuntimeError('Variable "fullWidth" does not exist.', 101, $this->source); })()), $context["col"], (((craft\helpers\Template::attribute($this->env, $this->source, ($context["cell"] ?? null), "class", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["cell"] ?? null), "class", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["cell"] ?? null), "class", [])) : ((((craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "class", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "class", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "class", [])) : ([]))))], 101, $context, $this->getSourceContext());
                    echo "\"";
                    if ((((craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "width", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "width", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "width", [])) : (false))) {
                        echo " width=\"";
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "width", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 101, $this->source); })());
                    echo "</th>
                    ";
                } elseif ((craft\helpers\Template::attribute($this->env, $this->source,                 // line 102
$context["col"], "type", []) == "html")) {
                    // line 103
                    echo "                        <td class=\"";
                    echo twig_call_macro($macros["_self"], "macro_cellClass", [(isset($context["fullWidth"]) || array_key_exists("fullWidth", $context) ? $context["fullWidth"] : (function () { throw new RuntimeError('Variable "fullWidth" does not exist.', 103, $this->source); })()), $context["col"], (((craft\helpers\Template::attribute($this->env, $this->source, ($context["cell"] ?? null), "class", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["cell"] ?? null), "class", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["cell"] ?? null), "class", [])) : ((((craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "class", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "class", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "class", [])) : ([]))))], 103, $context, $this->getSourceContext());
                    echo "\"";
                    if ((((craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "width", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "width", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "width", [])) : (false))) {
                        echo " width=\"";
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "width", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 103, $this->source); })());
                    echo "</td>
                    ";
                } else {
                    // line 105
                    echo "                        ";
                    $context["headingId"] = (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 105, $this->source); })()) . "-heading-") . craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "index", []));
                    // line 106
                    echo "                        ";
                    $context["hasErrors"] = (((craft\helpers\Template::attribute($this->env, $this->source, ($context["cell"] ?? null), "hasErrors", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["cell"] ?? null), "hasErrors", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["cell"] ?? null), "hasErrors", [])) : (false));
                    // line 107
                    echo "                        ";
                    $context["cellName"] = ((((((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 107, $this->source); })()) . "[") . $context["rowId"]) . "][") . $context["colId"]) . "]");
                    // line 108
                    echo "                        ";
                    $context["isCode"] = ((((craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "code", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "code", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "code", [])) : (false)) || (craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "type", []) == "color"));
                    // line 109
                    echo "                        <td class=\"";
                    echo twig_call_macro($macros["_self"], "macro_cellClass", [(isset($context["fullWidth"]) || array_key_exists("fullWidth", $context) ? $context["fullWidth"] : (function () { throw new RuntimeError('Variable "fullWidth" does not exist.', 109, $this->source); })()), $context["col"], (((craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "class", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "class", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "class", [])) : ([]))], 109, $context, $this->getSourceContext());
                    echo " ";
                    if ((isset($context["isCode"]) || array_key_exists("isCode", $context) ? $context["isCode"] : (function () { throw new RuntimeError('Variable "isCode" does not exist.', 109, $this->source); })())) {
                        echo "code";
                    }
                    echo " ";
                    if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 109, $this->source); })())) {
                        echo "error";
                    }
                    echo "\"";
                    if ((((craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "width", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "width", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "width", [])) : (false))) {
                        echo " width=\"";
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["col"], "width", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 110
                    $this->displayBlock('tablecell', $context, $blocks);
                    // line 197
                    echo "                        </td>
                    ";
                }
                // line 199
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['colId'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "                ";
            if ((isset($context["allowReorder"]) || array_key_exists("allowReorder", $context) ? $context["allowReorder"] : (function () { throw new RuntimeError('Variable "allowReorder" does not exist.', 200, $this->source); })())) {
                // line 201
                echo "<td class=\"thin action\"><a class=\"move icon\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                echo "\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                echo "\" type=\"button\" role=\"button\"></a></td>";
            }
            // line 203
            if ((isset($context["allowDelete"]) || array_key_exists("allowDelete", $context) ? $context["allowDelete"] : (function () { throw new RuntimeError('Variable "allowDelete" does not exist.', 203, $this->source); })())) {
                // line 204
                echo "<td class=\"thin action\">
                        ";
                // line 205
                echo $this->extensions['craft\web\twig\Extension']->tagFunction("button", ["class" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => "delete", 1 => "icon", 2 => (((                // line 209
(isset($context["minRows"]) || array_key_exists("minRows", $context) ? $context["minRows"] : (function () { throw new RuntimeError('Variable "minRows" does not exist.', 209, $this->source); })()) && ((isset($context["totalRows"]) || array_key_exists("totalRows", $context) ? $context["totalRows"] : (function () { throw new RuntimeError('Variable "totalRows" does not exist.', 209, $this->source); })()) <= (isset($context["minRows"]) || array_key_exists("minRows", $context) ? $context["minRows"] : (function () { throw new RuntimeError('Variable "minRows" does not exist.', 209, $this->source); })())))) ? ("disabled") : (null))]), "type" => "button", "disabled" => (                // line 212
(isset($context["minRows"]) || array_key_exists("minRows", $context) ? $context["minRows"] : (function () { throw new RuntimeError('Variable "minRows" does not exist.', 212, $this->source); })()) && ((isset($context["totalRows"]) || array_key_exists("totalRows", $context) ? $context["totalRows"] : (function () { throw new RuntimeError('Variable "totalRows" does not exist.', 212, $this->source); })()) <= (isset($context["minRows"]) || array_key_exists("minRows", $context) ? $context["minRows"] : (function () { throw new RuntimeError('Variable "minRows" does not exist.', 212, $this->source); })()))), "title" => $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "aria" => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Delete row {index}", "app", ["index" =>                 // line 216
(isset($context["rowNumber"]) || array_key_exists("rowNumber", $context) ? $context["rowNumber"] : (function () { throw new RuntimeError('Variable "rowNumber" does not exist.', 216, $this->source); })())])]]);
                // line 219
                echo "
                    </td>";
            }
            // line 222
            echo "</tr>
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
        unset($context['_seq'], $context['_iterated'], $context['rowId'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "    </tbody>
";
        echo craft\helpers\Html::tag("table", ob_get_clean(),         // line 55
(isset($context["tableAttributes"]) || array_key_exists("tableAttributes", $context) ? $context["tableAttributes"] : (function () { throw new RuntimeError('Variable "tableAttributes" does not exist.', 55, $this->source); })()));
        // line 226
        echo "
";
        // line 227
        if ((isset($context["allowAdd"]) || array_key_exists("allowAdd", $context) ? $context["allowAdd"] : (function () { throw new RuntimeError('Variable "allowAdd" does not exist.', 227, $this->source); })())) {
            // line 228
            echo "    ";
            $context["buttonText"] = (($context["addRowLabel"]) ?? ($this->extensions['craft\web\twig\Extension']->translateFilter("Add a row", "app")));
            // line 229
            echo "    <button type=\"button\" class=\"btn dashed add icon\" aria-label=\"";
            echo twig_escape_filter($this->env, (isset($context["buttonText"]) || array_key_exists("buttonText", $context) ? $context["buttonText"] : (function () { throw new RuntimeError('Variable "buttonText" does not exist.', 229, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["buttonText"]) || array_key_exists("buttonText", $context) ? $context["buttonText"] : (function () { throw new RuntimeError('Variable "buttonText" does not exist.', 229, $this->source); })()), "html", null, true);
            echo "</button>
";
        }
        // line 231
        echo "
";
        // line 232
        if ((isset($context["initJs"]) || array_key_exists("initJs", $context) ? $context["initJs"] : (function () { throw new RuntimeError('Variable "initJs" does not exist.', 232, $this->source); })())) {
            // line 233
            echo "    ";
            $context["jsId"] = twig_escape_filter($this->env, $this->env->getFilter('namespaceInputId')->getCallable()((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 233, $this->source); })())), "js");
            // line 234
            echo "    ";
            $context["jsName"] = twig_escape_filter($this->env, $this->env->getFilter('namespaceInputName')->getCallable()((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 234, $this->source); })())), "js");
            // line 235
            echo "    ";
            $context["jsCols"] = $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new RuntimeError('Variable "cols" does not exist.', 235, $this->source); })()));
            // line 236
            echo "    ";
            $context["defaultValues"] = (($context["defaultValues"]) ?? (null));
            // line 237
            echo "    ";
            ob_start();
            // line 238
            echo "        new Craft.EditableTable(\"";
            echo twig_escape_filter($this->env, (isset($context["jsId"]) || array_key_exists("jsId", $context) ? $context["jsId"] : (function () { throw new RuntimeError('Variable "jsId" does not exist.', 238, $this->source); })()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, (isset($context["jsName"]) || array_key_exists("jsName", $context) ? $context["jsName"] : (function () { throw new RuntimeError('Variable "jsName" does not exist.', 238, $this->source); })()), "html", null, true);
            echo "\", ";
            echo (isset($context["jsCols"]) || array_key_exists("jsCols", $context) ? $context["jsCols"] : (function () { throw new RuntimeError('Variable "jsCols" does not exist.', 238, $this->source); })());
            echo ", {
            defaultValues: ";
            // line 239
            echo (((isset($context["defaultValues"]) || array_key_exists("defaultValues", $context) ? $context["defaultValues"] : (function () { throw new RuntimeError('Variable "defaultValues" does not exist.', 239, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["defaultValues"]) || array_key_exists("defaultValues", $context) ? $context["defaultValues"] : (function () { throw new RuntimeError('Variable "defaultValues" does not exist.', 239, $this->source); })()))) : ("{}"));
            echo ",
            allowAdd: ";
            // line 240
            echo (((isset($context["allowAdd"]) || array_key_exists("allowAdd", $context) ? $context["allowAdd"] : (function () { throw new RuntimeError('Variable "allowAdd" does not exist.', 240, $this->source); })())) ? ("true") : ("false"));
            echo ",
            allowDelete: ";
            // line 241
            echo (((isset($context["allowDelete"]) || array_key_exists("allowDelete", $context) ? $context["allowDelete"] : (function () { throw new RuntimeError('Variable "allowDelete" does not exist.', 241, $this->source); })())) ? ("true") : ("false"));
            echo ",
            allowReorder: ";
            // line 242
            echo (((isset($context["allowReorder"]) || array_key_exists("allowReorder", $context) ? $context["allowReorder"] : (function () { throw new RuntimeError('Variable "allowReorder" does not exist.', 242, $this->source); })())) ? ("true") : ("false"));
            echo ",
            minRows: ";
            // line 243
            (((isset($context["minRows"]) || array_key_exists("minRows", $context) ? $context["minRows"] : (function () { throw new RuntimeError('Variable "minRows" does not exist.', 243, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["minRows"]) || array_key_exists("minRows", $context) ? $context["minRows"] : (function () { throw new RuntimeError('Variable "minRows" does not exist.', 243, $this->source); })()), "html", null, true))) : (print ("null")));
            echo ",
            maxRows: ";
            // line 244
            (((isset($context["maxRows"]) || array_key_exists("maxRows", $context) ? $context["maxRows"] : (function () { throw new RuntimeError('Variable "maxRows" does not exist.', 244, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["maxRows"]) || array_key_exists("maxRows", $context) ? $context["maxRows"] : (function () { throw new RuntimeError('Variable "maxRows" does not exist.', 244, $this->source); })()), "html", null, true))) : (print ("null")));
            echo "
        });
    ";
            craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        }
        craft\helpers\Template::endProfile("template", "_includes/forms/editableTable");
    }

    // line 110
    public function block_tablecell($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "tablecell");
        // line 111
        switch (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 111, $this->source); })()), "type", [])) {
            case "checkbox":
            {
                // line 113
                echo "<div class=\"checkbox-wrapper\">
                                            ";
                // line 114
                $this->loadTemplate("_includes/forms/checkbox", "_includes/forms/editableTable", 114)->display(twig_to_array(["name" =>                 // line 115
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new RuntimeError('Variable "cellName" does not exist.', 115, $this->source); })()), "value" => (((craft\helpers\Template::attribute($this->env, $this->source,                 // line 116
($context["col"] ?? null), "value", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "value", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "value", [])) : (1)), "checked" =>  !twig_test_empty(                // line 117
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 117, $this->source); })())), "disabled" =>                 // line 118
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 118, $this->source); })()), "labelledBy" =>                 // line 119
(isset($context["headingId"]) || array_key_exists("headingId", $context) ? $context["headingId"] : (function () { throw new RuntimeError('Variable "headingId" does not exist.', 119, $this->source); })()), "describedBy" =>                 // line 120
(isset($context["describedBy"]) || array_key_exists("describedBy", $context) ? $context["describedBy"] : (function () { throw new RuntimeError('Variable "describedBy" does not exist.', 120, $this->source); })())]));
                // line 122
                echo "                                        </div>";
                break;
            }
            case "color":
            {
                // line 124
                $this->loadTemplate("_includes/forms/color", "_includes/forms/editableTable", 124)->display(twig_to_array(["name" =>                 // line 125
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new RuntimeError('Variable "cellName" does not exist.', 125, $this->source); })()), "value" =>                 // line 126
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 126, $this->source); })()), "small" => true, "disabled" =>                 // line 128
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 128, $this->source); })()), "labelledBy" =>                 // line 129
(isset($context["headingId"]) || array_key_exists("headingId", $context) ? $context["headingId"] : (function () { throw new RuntimeError('Variable "headingId" does not exist.', 129, $this->source); })()), "describedBy" =>                 // line 130
(isset($context["describedBy"]) || array_key_exists("describedBy", $context) ? $context["describedBy"] : (function () { throw new RuntimeError('Variable "describedBy" does not exist.', 130, $this->source); })())]));
                break;
            }
            case "date":
            {
                // line 133
                $this->loadTemplate("_includes/forms/date", "_includes/forms/editableTable", 133)->display(twig_to_array(["name" =>                 // line 134
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new RuntimeError('Variable "cellName" does not exist.', 134, $this->source); })()), "value" =>                 // line 135
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 135, $this->source); })()), "disabled" =>                 // line 136
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 136, $this->source); })()), "labelledBy" =>                 // line 137
(isset($context["headingId"]) || array_key_exists("headingId", $context) ? $context["headingId"] : (function () { throw new RuntimeError('Variable "headingId" does not exist.', 137, $this->source); })()), "describedBy" =>                 // line 138
(isset($context["describedBy"]) || array_key_exists("describedBy", $context) ? $context["describedBy"] : (function () { throw new RuntimeError('Variable "describedBy" does not exist.', 138, $this->source); })())]));
                break;
            }
            case "lightswitch":
            {
                // line 141
                $this->loadTemplate("_includes/forms/lightswitch", "_includes/forms/editableTable", 141)->display(twig_to_array(["name" =>                 // line 142
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new RuntimeError('Variable "cellName" does not exist.', 142, $this->source); })()), "on" =>                 // line 143
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 143, $this->source); })()), "value" => (((craft\helpers\Template::attribute($this->env, $this->source,                 // line 144
($context["col"] ?? null), "value", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "value", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "value", [])) : (1)), "small" => true, "disabled" =>                 // line 146
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 146, $this->source); })()), "labelledBy" =>                 // line 147
(isset($context["headingId"]) || array_key_exists("headingId", $context) ? $context["headingId"] : (function () { throw new RuntimeError('Variable "headingId" does not exist.', 147, $this->source); })()), "describedBy" =>                 // line 148
(isset($context["describedBy"]) || array_key_exists("describedBy", $context) ? $context["describedBy"] : (function () { throw new RuntimeError('Variable "describedBy" does not exist.', 148, $this->source); })())]));
                // line 150
                echo "                                    ";
                break;
            }
            case "select":
            {
                // line 151
                $this->loadTemplate("_includes/forms/select", "_includes/forms/editableTable", 151)->display(twig_to_array(["class" => "small", "name" =>                 // line 153
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new RuntimeError('Variable "cellName" does not exist.', 153, $this->source); })()), "options" => (((craft\helpers\Template::attribute($this->env, $this->source,                 // line 154
($context["cell"] ?? null), "options", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["cell"] ?? null), "options", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["cell"] ?? null), "options", [])) : (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 154, $this->source); })()), "options", []))), "value" =>                 // line 155
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 155, $this->source); })()), "disabled" =>                 // line 156
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 156, $this->source); })()), "labelledBy" =>                 // line 157
(isset($context["headingId"]) || array_key_exists("headingId", $context) ? $context["headingId"] : (function () { throw new RuntimeError('Variable "headingId" does not exist.', 157, $this->source); })()), "describedBy" =>                 // line 158
(isset($context["describedBy"]) || array_key_exists("describedBy", $context) ? $context["describedBy"] : (function () { throw new RuntimeError('Variable "describedBy" does not exist.', 158, $this->source); })())]));
                break;
            }
            case "time":
            {
                // line 161
                $this->loadTemplate("_includes/forms/time", "_includes/forms/editableTable", 161)->display(twig_to_array(["name" =>                 // line 162
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new RuntimeError('Variable "cellName" does not exist.', 162, $this->source); })()), "value" =>                 // line 163
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 163, $this->source); })()), "disabled" =>                 // line 164
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 164, $this->source); })()), "labelledBy" =>                 // line 165
(isset($context["headingId"]) || array_key_exists("headingId", $context) ? $context["headingId"] : (function () { throw new RuntimeError('Variable "headingId" does not exist.', 165, $this->source); })()), "describedBy" =>                 // line 166
(isset($context["describedBy"]) || array_key_exists("describedBy", $context) ? $context["describedBy"] : (function () { throw new RuntimeError('Variable "describedBy" does not exist.', 166, $this->source); })())]));
                break;
            }
            case "email":
            case "url":
            {
                // line 169
                $this->loadTemplate("_includes/forms/text", "_includes/forms/editableTable", 169)->display(twig_to_array(["type" => craft\helpers\Template::attribute($this->env, $this->source,                 // line 170
(isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 170, $this->source); })()), "type", []), "name" =>                 // line 171
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new RuntimeError('Variable "cellName" does not exist.', 171, $this->source); })()), "placeholder" => (((craft\helpers\Template::attribute($this->env, $this->source,                 // line 172
($context["col"] ?? null), "placeholder", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "placeholder", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "placeholder", [])) : (null)), "value" =>                 // line 173
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 173, $this->source); })()), "disabled" =>                 // line 174
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 174, $this->source); })()), "labelledBy" =>                 // line 175
(isset($context["headingId"]) || array_key_exists("headingId", $context) ? $context["headingId"] : (function () { throw new RuntimeError('Variable "headingId" does not exist.', 175, $this->source); })()), "describedBy" =>                 // line 176
(isset($context["describedBy"]) || array_key_exists("describedBy", $context) ? $context["describedBy"] : (function () { throw new RuntimeError('Variable "describedBy" does not exist.', 176, $this->source); })())]));
                break;
            }
            case "autosuggest":
            case "template":
            {
                // line 179
                $this->loadTemplate("_includes/forms/autosuggest", "_includes/forms/editableTable", 179)->display(twig_to_array(["name" =>                 // line 180
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new RuntimeError('Variable "cellName" does not exist.', 180, $this->source); })()), "suggestions" => (((craft\helpers\Template::attribute($this->env, $this->source,                 // line 181
(isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 181, $this->source); })()), "type", []) == "template")) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 181, $this->source); })()), "cp", []), "getTemplateSuggestions", [], "method")) : ([])), "suggestEnvVars" => (((craft\helpers\Template::attribute($this->env, $this->source,                 // line 182
($context["col"] ?? null), "suggestEnvVars", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "suggestEnvVars", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "suggestEnvVars", [])) : (false)), "suggestAliases" => (((craft\helpers\Template::attribute($this->env, $this->source,                 // line 183
($context["col"] ?? null), "suggestAliases", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "suggestAliases", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "suggestAliases", [])) : (false)), "value" =>                 // line 184
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 184, $this->source); })()), "disabled" =>                 // line 185
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 185, $this->source); })()), "labelledBy" =>                 // line 186
(isset($context["headingId"]) || array_key_exists("headingId", $context) ? $context["headingId"] : (function () { throw new RuntimeError('Variable "headingId" does not exist.', 186, $this->source); })()), "describedBy" =>                 // line 187
(isset($context["describedBy"]) || array_key_exists("describedBy", $context) ? $context["describedBy"] : (function () { throw new RuntimeError('Variable "describedBy" does not exist.', 187, $this->source); })())]));
                break;
            }
            default:
            {
                // line 190
                if ((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 190, $this->source); })())) {
                    // line 191
                    echo "                                            <pre class=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 191, $this->source); })()), "html", null, true);
                    echo "</pre>
                                        ";
                } else {
                    // line 193
                    echo "                                            <textarea aria-labelledby=\"";
                    echo twig_escape_filter($this->env, (isset($context["headingId"]) || array_key_exists("headingId", $context) ? $context["headingId"] : (function () { throw new RuntimeError('Variable "headingId" does not exist.', 193, $this->source); })()), "html", null, true);
                    echo "\" aria-describedby=\"";
                    echo twig_escape_filter($this->env, (isset($context["describedBy"]) || array_key_exists("describedBy", $context) ? $context["describedBy"] : (function () { throw new RuntimeError('Variable "describedBy" does not exist.', 193, $this->source); })()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, (isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new RuntimeError('Variable "cellName" does not exist.', 193, $this->source); })()), "html", null, true);
                    echo "\" rows=\"";
                    (((craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "rows", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "rows", [])))) ? (print (twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "rows", []), "html", null, true))) : (print (1)));
                    echo "\"";
                    if (craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "placeholder", [], "any", true, true)) {
                        echo " placeholder=\"";
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 193, $this->source); })()), "placeholder", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 193, $this->source); })()), "html", null, true);
                    echo "</textarea>
                                        ";
                }
            }
        }
        craft\helpers\Template::endProfile("block", "tablecell");
    }

    // line 20
    public function macro_cellClass($__fullWidth__ = null, $__col__ = null, $__class__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fullWidth" => $__fullWidth__,
            "col" => $__col__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "cellClass");
            // line 21
            echo twig_escape_filter($this->env, twig_join_filter($this->extensions['craft\web\twig\Extension']->mergeFilter(((twig_test_iterable((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 21, $this->source); })()))) ? ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 21, $this->source); })())) : ([0 => (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 21, $this->source); })())])), $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => (craft\helpers\Template::attribute($this->env, $this->source,             // line 22
(isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 22, $this->source); })()), "type", []) . "-cell"), 1 => ((twig_in_filter(craft\helpers\Template::attribute($this->env, $this->source,             // line 23
(isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 23, $this->source); })()), "type", []), [0 => "autosuggest", 1 => "color", 2 => "date", 3 => "email", 4 => "multiline", 5 => "number", 6 => "singleline", 7 => "template", 8 => "time", 9 => "url"])) ? ("textual") : (null)), 2 => (((            // line 35
(isset($context["fullWidth"]) || array_key_exists("fullWidth", $context) ? $context["fullWidth"] : (function () { throw new RuntimeError('Variable "fullWidth" does not exist.', 35, $this->source); })()) && (((craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "thin", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "thin", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["col"] ?? null), "thin", [])) : (false)))) ? ("thin") : (null)), 3 => ((craft\helpers\Template::attribute($this->env, $this->source,             // line 36
($context["col"] ?? null), "info", [], "any", true, true)) ? ("has-info") : (null))])), " "), "html", null, true);
            craft\helpers\Template::endProfile("macro", "cellClass");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/editableTable";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  644 => 36,  643 => 35,  642 => 23,  641 => 22,  640 => 21,  624 => 20,  599 => 193,  593 => 191,  591 => 190,  585 => 187,  584 => 186,  583 => 185,  582 => 184,  581 => 183,  580 => 182,  579 => 181,  578 => 180,  577 => 179,  570 => 176,  569 => 175,  568 => 174,  567 => 173,  566 => 172,  565 => 171,  564 => 170,  563 => 169,  556 => 166,  555 => 165,  554 => 164,  553 => 163,  552 => 162,  551 => 161,  545 => 158,  544 => 157,  543 => 156,  542 => 155,  541 => 154,  540 => 153,  539 => 151,  533 => 150,  531 => 148,  530 => 147,  529 => 146,  528 => 144,  527 => 143,  526 => 142,  525 => 141,  519 => 138,  518 => 137,  517 => 136,  516 => 135,  515 => 134,  514 => 133,  508 => 130,  507 => 129,  506 => 128,  505 => 126,  504 => 125,  503 => 124,  497 => 122,  495 => 120,  494 => 119,  493 => 118,  492 => 117,  491 => 116,  490 => 115,  489 => 114,  486 => 113,  482 => 111,  477 => 110,  467 => 244,  463 => 243,  459 => 242,  455 => 241,  451 => 240,  447 => 239,  438 => 238,  435 => 237,  432 => 236,  429 => 235,  426 => 234,  423 => 233,  421 => 232,  418 => 231,  410 => 229,  407 => 228,  405 => 227,  402 => 226,  400 => 55,  397 => 224,  382 => 222,  378 => 219,  376 => 216,  375 => 212,  374 => 209,  373 => 205,  370 => 204,  368 => 203,  361 => 201,  358 => 200,  344 => 199,  340 => 197,  338 => 110,  319 => 109,  316 => 108,  313 => 107,  310 => 106,  307 => 105,  293 => 103,  291 => 102,  278 => 101,  275 => 100,  272 => 99,  269 => 98,  252 => 97,  247 => 96,  244 => 95,  227 => 94,  222 => 91,  214 => 89,  211 => 88,  196 => 86,  191 => 84,  189 => 83,  186 => 81,  183 => 79,  181 => 78,  179 => 77,  177 => 76,  171 => 75,  168 => 74,  163 => 72,  157 => 70,  153 => 68,  136 => 67,  132 => 65,  129 => 64,  124 => 63,  119 => 62,  115 => 60,  112 => 59,  105 => 57,  100 => 56,  98 => 55,  94 => 53,  91 => 51,  89 => 50,  87 => 46,  86 => 45,  85 => 44,  84 => 41,  83 => 40,  80 => 39,  77 => 19,  71 => 17,  69 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  58 => 11,  56 => 10,  54 => 8,  52 => 7,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set static = static ?? false %}
{%- set fullWidth = fullWidth ?? true %}
{%- set cols = cols ?? [] %}
{%- set rows = rows ?? [] %}
{%- set initJs = not static and (initJs ?? true) -%}
{%- set minRows = minRows ?? null %}
{%- set maxRows = maxRows ?? null %}
{%- set describedBy = describedBy ?? null %}

{%- set totalRows = rows|length %}
{%- set staticRows = static or (staticRows ?? false) or (minRows == 1 and maxRows == 1 and totalRows == 1) %}
{%- set allowAdd = (allowAdd ?? false) and not staticRows %}
{%- set allowReorder = (allowReorder ?? false) and not staticRows %}
{%- set allowDelete = (allowDelete ?? false) and not staticRows %}

{% if not static %}
    {{ hiddenInput(name, '') }}
{% endif %}

{% macro cellClass(fullWidth, col, class) %}
    {{- (class is iterable ? class : [class])|merge([
        \"#{col.type}-cell\",
        col.type in [
            'autosuggest',
            'color',
            'date',
            'email',
            'multiline',
            'number',
            'singleline',
            'template',
            'time',
            'url',
        ] ? 'textual' : null,
        fullWidth and (col.thin ?? false) ? 'thin' : null,
        col.info is defined ? 'has-info' : null,
    ]|filter)|join(' ') -}}
{% endmacro %}

{% set tableAttributes = {
    id: id,
    class: [
        'editable',
        fullWidth ? 'fullwidth',
        static ? 'static',
        totalRows == 0 ? 'hidden',
    ]|filter,
} %}

{%- if block('attr') is defined %}
  {%- set tableAttributes = tableAttributes|merge(('<div ' ~ block('attr') ~ '>')|parseAttr, recursive=true) %}
{% endif %}

<span aria-live=\"assertive\" class=\"visually-hidden\" data-status-message></span>
{% tag 'table' with tableAttributes %}
    {% for col in cols %}
        <col>
    {% endfor %}
    {% if (allowDelete and allowReorder) %}
        <colgroup span=\"2\"></colgroup>
    {% else %}
        {% if allowDelete %}<col>{% endif %}
        {% if allowReorder %}<col>{% endif %}
    {% endif %}
    <thead>
        <tr>
            {% for col in cols %}
                {%- switch col.type %}
                    {%- case 'time' %}
                        {%- do view.registerAssetBundle('craft\\\\web\\\\assets\\\\timepicker\\\\TimepickerAsset') %}
                    {%- case 'template' %}
                        {%- do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\vue\\\\VueAsset\") %}
                {%- endswitch %}
                {% set columnHeadingId = \"#{id}-heading-#{loop.index}\" %}
                <th id=\"{{ columnHeadingId }}\" scope=\"col\" class=\"{{ _self.cellClass(fullWidth, col, col.class ?? []) }}\">
                    {%- if col.headingHtml is defined %}
                        {{- col.headingHtml|raw }}
                    {%- elseif col.heading ?? false %}
                        {{- col.heading }}
                    {%- else %}
                        &nbsp;
                    {%- endif %}
                    {%- if col.info is defined -%}
                        <span class=\"info\">{{ col.info|md|raw }}</span>
                    {%- endif -%}
                </th>
            {% endfor %}
            {% if (allowDelete or allowReorder) %}
                <th colspan=\"{{ not allowDelete or not allowReorder ? 1 : 2 }}\" scope=\"colgroup\"><span class=\"visually-hidden\">{{ 'Row actions'|t('app') }}</span></th>
            {% endif %}
        </tr>
    </thead>
    <tbody>
        {% for rowId, row in rows %}
            {% set rowNumber = loop.index %}
            <tr data-id=\"{{ rowId }}\">
                {% for colId, col in cols %}
                    {% set cell = row[colId] is defined ? row[colId] : (defaultValues[colId] ?? null) %}
                    {% set value = cell.value is defined ? cell.value : cell %}
                    {% if col.type == 'heading' %}
                        <th scope=\"row\" class=\"{{ _self.cellClass(fullWidth, col, cell.class ?? col.class ?? []) }}\"{% if col.width ?? false %} width=\"{{ col.width }}\"{% endif %}>{{ value|raw }}</th>
                    {% elseif col.type == 'html' %}
                        <td class=\"{{ _self.cellClass(fullWidth, col, cell.class ?? col.class ?? []) }}\"{% if col.width ?? false %} width=\"{{ col.width }}\"{% endif %}>{{ value|raw }}</td>
                    {% else %}
                        {% set headingId = \"#{id}-heading-#{loop.index}\" %}
                        {% set hasErrors = cell.hasErrors ?? false %}
                        {% set cellName = name~'['~rowId~']['~colId~']' %}
                        {% set isCode = (col.code ?? false) or col.type == 'color' %}
                        <td class=\"{{ _self.cellClass(fullWidth, col, col.class ?? []) }} {% if isCode %}code{% endif %} {% if hasErrors %}error{% endif %}\"{% if col.width ?? false %} width=\"{{ col.width }}\"{% endif %}>
                            {% block tablecell %}
                                {%- switch col.type -%}
                                    {%- case 'checkbox' -%}
                                        <div class=\"checkbox-wrapper\">
                                            {% include \"_includes/forms/checkbox\" with {
                                                name: cellName,
                                                value:  col.value ?? 1,
                                                checked: value is not empty,
                                                disabled: static,
                                                labelledBy: headingId,
                                                describedBy: describedBy,
                                            } only %}
                                        </div>
                                    {%- case 'color' -%}
                                        {% include \"_includes/forms/color\" with {
                                            name: cellName,
                                            value: value,
                                            small: true,
                                            disabled: static,
                                            labelledBy: headingId,
                                            describedBy: describedBy,
                                        } only %}
                                    {%- case 'date' -%}
                                        {% include \"_includes/forms/date\" with {
                                            name: cellName,
                                            value: value,
                                            disabled: static,
                                            labelledBy: headingId,
                                            describedBy: describedBy,
                                        } only %}
                                    {%- case 'lightswitch' -%}
                                        {% include \"_includes/forms/lightswitch\" with {
                                            name: cellName,
                                            on: value,
                                            value: col.value ?? 1,
                                            small: true,
                                            disabled: static,
                                            labelledBy: headingId,
                                            describedBy: describedBy,
                                        } only %}
                                    {% case 'select' -%}
                                        {% include \"_includes/forms/select\" with {
                                            class: 'small',
                                            name: cellName,
                                            options: cell.options ?? col.options,
                                            value: value,
                                            disabled: static,
                                            labelledBy: headingId,
                                            describedBy: describedBy,
                                        } only %}
                                    {%- case 'time' -%}
                                        {% include \"_includes/forms/time\" with {
                                            name: cellName,
                                            value: value,
                                            disabled: static,
                                            labelledBy: headingId,
                                            describedBy: describedBy,
                                        } only %}
                                    {%- case 'email' or 'url' -%}
                                        {% include \"_includes/forms/text\" with {
                                            type: col.type,
                                            name: cellName,
                                            placeholder: col.placeholder ?? null,
                                            value:  value,
                                            disabled: static,
                                            labelledBy: headingId,
                                            describedBy: describedBy,
                                        } only %}
                                    {%- case 'autosuggest' or 'template' -%}
                                        {% include \"_includes/forms/autosuggest\" with {
                                            name: cellName,
                                            suggestions: col.type == 'template' ? craft.cp.getTemplateSuggestions() : [],
                                            suggestEnvVars: col.suggestEnvVars ?? false,
                                            suggestAliases: col.suggestAliases ?? false,
                                            value: value,
                                            disabled: static,
                                            labelledBy: headingId,
                                            describedBy: describedBy,
                                        } only %}
                                    {%- default -%}
                                        {% if static %}
                                            <pre class=\"disabled\">{{ value }}</pre>
                                        {% else %}
                                            <textarea aria-labelledby=\"{{ headingId }}\" aria-describedby=\"{{ describedBy }}\" name=\"{{ cellName }}\" rows=\"{{ col.rows ?? 1 }}\"{% if col.placeholder is defined %} placeholder=\"{{ col.placeholder }}\"{% endif %}>{{ value }}</textarea>
                                        {% endif %}
                                {%- endswitch -%}
                            {% endblock %}
                        </td>
                    {% endif %}
                {% endfor %}
                {% if allowReorder -%}
                    <td class=\"thin action\"><a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\" aria-label=\"{{ 'Reorder'|t('app') }}\" type=\"button\" role=\"button\"></a></td>
                {%- endif -%}
                {%- if allowDelete -%}
                    <td class=\"thin action\">
                        {{ tag('button', {
                            class: [
                                'delete',
                                'icon',
                                minRows and totalRows <= minRows ? 'disabled' : null,
                            ]|filter,
                            type: 'button',
                            disabled: minRows and totalRows <= minRows,
                            title: 'Delete'|t('app'),
                            aria: {
                                label: 'Delete row {index}'|t('app', {
                                    index: rowNumber,
                                }),
                            }
                        }) }}
                    </td>
                {%- endif -%}
            </tr>
        {% endfor %}
    </tbody>
{% endtag %}

{% if allowAdd %}
    {% set buttonText = addRowLabel ?? \"Add a row\"|t('app') %}
    <button type=\"button\" class=\"btn dashed add icon\" aria-label=\"{{ buttonText }}\">{{ buttonText }}</button>
{% endif %}

{% if initJs %}
    {% set jsId = id|namespaceInputId|e('js') %}
    {% set jsName = name|namespaceInputName|e('js') %}
    {% set jsCols = cols|json_encode %}
    {% set defaultValues = defaultValues ?? null %}
    {% js %}
        new Craft.EditableTable(\"{{ jsId }}\", \"{{ jsName }}\", {{ jsCols|raw }}, {
            defaultValues: {{ defaultValues ? defaultValues|json_encode|raw : '{}' }},
            allowAdd: {{ allowAdd ? 'true' : 'false' }},
            allowDelete: {{ allowDelete ? 'true' : 'false' }},
            allowReorder: {{ allowReorder ? 'true' : 'false' }},
            minRows: {{ minRows ? minRows : 'null' }},
            maxRows: {{ maxRows ? maxRows : 'null' }}
        });
    {% endjs %}
{% endif %}
", "_includes/forms/editableTable", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms/editableTable.twig");
    }
}
