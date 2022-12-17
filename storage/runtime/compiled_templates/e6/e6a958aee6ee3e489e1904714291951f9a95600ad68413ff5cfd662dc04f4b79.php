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

/* _elements/sources */
class __TwigTemplate_d0c2504ec90daf02c7ff2a45643892509655b2c887859f4d12afac95ed2072d0 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_elements/sources");
        // line 1
        ob_start();
        // line 2
        $context["keyPrefix"] = (($context["keyPrefix"]) ?? (""));
        // line 3
        $context["isTopLevel"] =  !(isset($context["keyPrefix"]) || array_key_exists("keyPrefix", $context) ? $context["keyPrefix"] : (function () { throw new RuntimeError('Variable "keyPrefix" does not exist.', 3, $this->source); })());
        // line 4
        echo "
";
        // line 5
        if ((isset($context["isTopLevel"]) || array_key_exists("isTopLevel", $context) ? $context["isTopLevel"] : (function () { throw new RuntimeError('Variable "isTopLevel" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "    ";
            $context["elementInstance"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 6, $this->source); })()), "app", []), "elements", []), "createElement", [0 => (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 6, $this->source); })())], "method");
            // line 7
            echo "    ";
            $context["baseSortOptions"] = array_values(twig_array_map($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["elementInstance"]) || array_key_exists("elementInstance", $context) ? $context["elementInstance"] : (function () { throw new RuntimeError('Variable "elementInstance" does not exist.', 7, $this->source); })()), "sortOptions", [], "method"), function ($__option__, $__key__) use ($context, $macros) { $context["option"] = $__option__; $context["key"] = $__key__; return ["label" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 8
($context["option"] ?? null), "label", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["option"] ?? null), "label", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["option"] ?? null), "label", [])) : ((isset($context["option"]) || array_key_exists("option", $context) ? $context["option"] : (function () { throw new RuntimeError('Variable "option" does not exist.', 8, $this->source); })()))), "attr" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 9
($context["option"] ?? null), "attribute", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["option"] ?? null), "attribute", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["option"] ?? null), "attribute", [])) : ((((craft\helpers\Template::attribute($this->env, $this->source, ($context["option"] ?? null), "orderBy", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["option"] ?? null), "orderBy", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["option"] ?? null), "orderBy", [])) : ((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 9, $this->source); })()))))), "defaultDir" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 10
($context["option"] ?? null), "defaultDir", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["option"] ?? null), "defaultDir", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["option"] ?? null), "defaultDir", [])) : ("asc"))]; }));
            // line 12
            echo "    ";
            $context["tableColumns"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 12, $this->source); })()), "app", []), "elementSources", []), "getAvailableTableAttributes", [0 => (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 12, $this->source); })())], "method");
        }
        // line 14
        echo "
";
        // line 51
        echo "
";
        // line 78
        echo "
";
        // line 79
        $context["nestedUnderHeading"] = false;
        // line 80
        echo "
";
        // line 81
        ob_start();
        // line 84
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 84, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
            // line 85
            echo "        ";
            if (((((craft\helpers\Template::attribute($this->env, $this->source, $context["source"], "type", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["source"], "type", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["source"], "type", [])) : (null)) == "heading")) {
                // line 86
                echo "            ";
                if ((isset($context["nestedUnderHeading"]) || array_key_exists("nestedUnderHeading", $context) ? $context["nestedUnderHeading"] : (function () { throw new RuntimeError('Variable "nestedUnderHeading" does not exist.', 86, $this->source); })())) {
                    // line 87
                    echo "                    </ul>
                </li>
            ";
                }
                // line 90
                echo "            <li class=\"heading\">
                <span>";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["source"], "heading", []), "site"), "html", null, true);
                echo "</span>
                <ul>
            ";
                // line 93
                $context["nestedUnderHeading"] = true;
                // line 94
                echo "        ";
            } else {
                // line 95
                echo "            ";
                $context["key"] = (((craft\helpers\Template::attribute($this->env, $this->source, $context["source"], "keyPath", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["source"], "keyPath", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["source"], "keyPath", [])) : (((isset($context["keyPrefix"]) || array_key_exists("keyPrefix", $context) ? $context["keyPrefix"] : (function () { throw new RuntimeError('Variable "keyPrefix" does not exist.', 95, $this->source); })()) . craft\helpers\Template::attribute($this->env, $this->source, $context["source"], "key", []))));
                // line 96
                echo "            ";
                ob_start();
                // line 101
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_sourceLink", [(isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 101, $this->source); })()), $context["source"], (isset($context["isTopLevel"]) || array_key_exists("isTopLevel", $context) ? $context["isTopLevel"] : (function () { throw new RuntimeError('Variable "isTopLevel" does not exist.', 101, $this->source); })()), (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 101, $this->source); })()), (($context["baseSortOptions"]) ?? (null)), (($context["tableColumns"]) ?? (null))], 101, $context, $this->getSourceContext());
                echo "
                ";
                // line 102
                if ((craft\helpers\Template::attribute($this->env, $this->source, $context["source"], "nested", [], "any", true, true) &&  !twig_test_empty(craft\helpers\Template::attribute($this->env, $this->source, $context["source"], "nested", [])))) {
                    // line 103
                    echo "                    <button class=\"toggle\" aria-expanded=\"false\" aria-label=\"";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Show nested sources", "app"), "html", null, true);
                    echo "\"></button>
                    ";
                    // line 104
                    $this->loadTemplate("_elements/sources", "_elements/sources", 104)->display(twig_array_merge($context, ["keyPrefix" => (                    // line 105
(isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 105, $this->source); })()) . "/"), "sources" => craft\helpers\Template::attribute($this->env, $this->source,                     // line 106
$context["source"], "nested", [])]));
                    // line 108
                    echo "                ";
                }
                // line 109
                echo "            ";
                echo craft\helpers\Html::tag("li", ob_get_clean(), ["class" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => (((((craft\helpers\Template::attribute($this->env, $this->source,                 // line 98
$context["source"], "disabled", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["source"], "disabled", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["source"], "disabled", [])) : (false))) ? ("hidden") : (null))])]);
                // line 110
                echo "        ";
            }
            // line 111
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "    ";
        if ((isset($context["nestedUnderHeading"]) || array_key_exists("nestedUnderHeading", $context) ? $context["nestedUnderHeading"] : (function () { throw new RuntimeError('Variable "nestedUnderHeading" does not exist.', 112, $this->source); })())) {
            // line 113
            echo "            </ul>
        </li>
    ";
        }
        echo craft\helpers\Html::tag("ul", ob_get_clean(), ["class" => ((        // line 82
(isset($context["keyPrefix"]) || array_key_exists("keyPrefix", $context) ? $context["keyPrefix"] : (function () { throw new RuntimeError('Variable "keyPrefix" does not exist.', 82, $this->source); })())) ? ("nested") : (null))]);
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_0_);
        craft\helpers\Template::endProfile("template", "_elements/sources");
    }

    // line 15
    public function macro_sourceLink($__key__ = null, $__source__ = null, $__isTopLevel__ = null, $__elementType__ = null, $__baseSortOptions__ = null, $__tableColumns__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "key" => $__key__,
            "source" => $__source__,
            "isTopLevel" => $__isTopLevel__,
            "elementType" => $__elementType__,
            "baseSortOptions" => $__baseSortOptions__,
            "tableColumns" => $__tableColumns__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "sourceLink");
            // line 16
            echo "    ";
            $context["hasStructure"] = boolval((((craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "structureId", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "structureId", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "structureId", [])) : (null)));
            // line 17
            echo "    ";
            echo $this->extensions['craft\web\twig\Extension']->tagFunction("a", ["data" => $this->extensions['craft\web\twig\Extension']->mergeFilter(["key" =>             // line 19
(isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 19, $this->source); })()), "has-thumbs" => (((((craft\helpers\Template::attribute($this->env, $this->source,             // line 20
($context["source"] ?? null), "hasThumbs", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "hasThumbs", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "hasThumbs", [])) : (false))) ? (true) : (false)), "has-structure" =>             // line 21
(isset($context["hasStructure"]) || array_key_exists("hasStructure", $context) ? $context["hasStructure"] : (function () { throw new RuntimeError('Variable "hasStructure" does not exist.', 21, $this->source); })()), "default-sort" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 22
($context["source"] ?? null), "defaultSort", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "defaultSort", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "defaultSort", [])) : (false)), "sort-opts" => ((            // line 23
(isset($context["isTopLevel"]) || array_key_exists("isTopLevel", $context) ? $context["isTopLevel"] : (function () { throw new RuntimeError('Variable "isTopLevel" does not exist.', 23, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->mergeFilter($this->extensions['craft\web\twig\Extension']->mergeFilter($this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => ((            // line 24
(isset($context["hasStructure"]) || array_key_exists("hasStructure", $context) ? $context["hasStructure"] : (function () { throw new RuntimeError('Variable "hasStructure" does not exist.', 24, $this->source); })())) ? (["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Structure", "app"), "attr" => "structure", "defaultDir" => "asc"]) : (null))]),             // line 25
(isset($context["baseSortOptions"]) || array_key_exists("baseSortOptions", $context) ? $context["baseSortOptions"] : (function () { throw new RuntimeError('Variable "baseSortOptions" does not exist.', 25, $this->source); })())), array_values(twig_array_map($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source,             // line 26
(isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 26, $this->source); })()), "app", []), "elementSources", []), "getSourceSortOptions", [0 => (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 26, $this->source); })()), 1 => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 26, $this->source); })())], "method"), function ($__option__) use ($context, $macros) { $context["option"] = $__option__; return ["label" => craft\helpers\Template::attribute($this->env, $this->source,             // line 27
(isset($context["option"]) || array_key_exists("option", $context) ? $context["option"] : (function () { throw new RuntimeError('Variable "option" does not exist.', 27, $this->source); })()), "label", []), "attr" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 28
($context["option"] ?? null), "attribute", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["option"] ?? null), "attribute", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["option"] ?? null), "attribute", [])) : (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["option"]) || array_key_exists("option", $context) ? $context["option"] : (function () { throw new RuntimeError('Variable "option" does not exist.', 28, $this->source); })()), "orderBy", []))), "defaultDir" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 29
($context["option"] ?? null), "defaultDir", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["option"] ?? null), "defaultDir", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["option"] ?? null), "defaultDir", [])) : ("asc"))]; })))) : (false)), "table-col-opts" => ((            // line 32
(isset($context["isTopLevel"]) || array_key_exists("isTopLevel", $context) ? $context["isTopLevel"] : (function () { throw new RuntimeError('Variable "isTopLevel" does not exist.', 32, $this->source); })())) ? (array_values(twig_array_map($this->env, $this->extensions['craft\web\twig\Extension']->mergeFilter(            // line 33
(isset($context["tableColumns"]) || array_key_exists("tableColumns", $context) ? $context["tableColumns"] : (function () { throw new RuntimeError('Variable "tableColumns" does not exist.', 33, $this->source); })()), craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source,             // line 34
(isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 34, $this->source); })()), "app", []), "elementSources", []), "getSourceTableAttributes", [0 => (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 34, $this->source); })()), 1 => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 34, $this->source); })())], "method")),             // line 35
function ($__a__, $__key__) use ($context, $macros) { $context["a"] = $__a__; $context["key"] = $__key__; return $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 35, $this->source); })()), ["attr" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 35, $this->source); })())]); }))) : (false)), "default-table-cols" => ((            // line 38
(isset($context["isTopLevel"]) || array_key_exists("isTopLevel", $context) ? $context["isTopLevel"] : (function () { throw new RuntimeError('Variable "isTopLevel" does not exist.', 38, $this->source); })())) ? (array_values($this->extensions['craft\web\twig\Extension']->filterFilter($this->env, twig_array_map($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source,             // line 39
(isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 39, $this->source); })()), "app", []), "elementSources", []), "getTableAttributes", [0 => (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 39, $this->source); })()), 1 => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 39, $this->source); })())], "method"),             // line 40
function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return craft\helpers\Template::attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 40, $this->source); })()), 0, [], "array"); }),             // line 41
function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return ((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 41, $this->source); })()) != "title"); }))) : (false)), "sites" => (((((craft\helpers\Template::attribute($this->env, $this->source,             // line 44
($context["source"] ?? null), "sites", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "sites", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "sites", [])) : (false))) ? (twig_join_filter(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 44, $this->source); })()), "sites", []), ",")) : (false)), "override-status" => (((((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source,             // line 45
($context["source"] ?? null), "criteria", [], "any", false, true), "status", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "criteria", [], "any", false, true), "status", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "criteria", [], "any", false, true), "status", [])) : (false))) ? (true) : (false)), "disabled" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 46
($context["source"] ?? null), "disabled", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "disabled", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "disabled", [])) : (false))], (((craft\helpers\Template::attribute($this->env, $this->source,             // line 47
($context["source"] ?? null), "data", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "data", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "data", [])) : ([]))), "html" => twig_call_macro($macros["_self"], "macro_sourceInnerHtml", [            // line 48
(isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 48, $this->source); })())], 48, $context, $this->getSourceContext())]);
            // line 49
            echo "
";
            craft\helpers\Template::endProfile("macro", "sourceLink");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 52
    public function macro_sourceInnerHtml($__source__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "source" => $__source__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "sourceInnerHtml");
            // line 53
            echo "    ";
            if (craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "status", [], "any", true, true)) {
                // line 54
                echo "        <span class=\"status ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 54, $this->source); })()), "status", []), "html", null, true);
                echo "\"></span>
    ";
            } elseif (craft\helpers\Template::attribute($this->env, $this->source,             // line 55
($context["source"] ?? null), "icon", [], "any", true, true)) {
                // line 56
                echo "        <span class=\"icon\">
            ";
                // line 57
                echo (($this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 57, $this->source); })()), "icon", []), true, true)) ? ($this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 57, $this->source); })()), "icon", []), true, true)) : ((("<span data-icon='" . craft\helpers\Template::attribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 57, $this->source); })()), "icon", [])) . "'></span>")));
                echo "
        </span>
    ";
            } elseif (craft\helpers\Template::attribute($this->env, $this->source,             // line 59
($context["source"] ?? null), "iconMask", [], "any", true, true)) {
                // line 60
                echo "        <span class=\"icon icon-mask\">
            ";
                // line 61
                echo (($this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 61, $this->source); })()), "iconMask", []), true, true)) ? ($this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 61, $this->source); })()), "iconMask", []), true, true)) : ((("<span data-icon='" . craft\helpers\Template::attribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 61, $this->source); })()), "iconMask", [])) . "'></span>")));
                echo "
        </span>
    ";
            }
            // line 64
            echo "    <span class=\"label\">";
            echo twig_escape_filter($this->env, (( !(twig_trim_filter(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 64, $this->source); })()), "label", [])) === "")) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 64, $this->source); })()), "label", [])) : ($this->extensions['craft\web\twig\Extension']->translateFilter("(blank)", "app"))), "html", null, true);
            echo "</span>
    ";
            // line 65
            if (craft\helpers\Template::attribute($this->env, $this->source, ($context["source"] ?? null), "badgeCount", [], "any", true, true)) {
                // line 66
                echo "        <span class=\"badge\" aria-hidden=\"true\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->numberFilter(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 66, $this->source); })()), "badgeCount", []), 0), "html", null, true);
                echo "</span>
        ";
                // line 67
                echo $this->extensions['craft\web\twig\Extension']->tagFunction("span", ["class" => "visually-hidden", "data" => ["notification" => true], "text" => $this->extensions['craft\web\twig\Extension']->translateFilter("{num, number} {num, plural, =1{notification} other{notifications}}", "app", ["num" => craft\helpers\Template::attribute($this->env, $this->source,                 // line 73
(isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 73, $this->source); })()), "badgeCount", [])])]);
                // line 75
                echo "
    ";
            }
            craft\helpers\Template::endProfile("macro", "sourceInnerHtml");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_elements/sources";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 75,  299 => 73,  298 => 67,  293 => 66,  291 => 65,  286 => 64,  280 => 61,  277 => 60,  275 => 59,  270 => 57,  267 => 56,  265 => 55,  260 => 54,  257 => 53,  243 => 52,  232 => 49,  230 => 48,  229 => 47,  228 => 46,  227 => 45,  226 => 44,  225 => 41,  224 => 40,  223 => 39,  222 => 38,  221 => 35,  220 => 34,  219 => 33,  218 => 32,  217 => 29,  216 => 28,  215 => 27,  214 => 26,  213 => 25,  212 => 24,  211 => 23,  210 => 22,  209 => 21,  208 => 20,  207 => 19,  205 => 17,  202 => 16,  183 => 15,  178 => 1,  175 => 82,  170 => 113,  167 => 112,  153 => 111,  150 => 110,  148 => 98,  146 => 109,  143 => 108,  141 => 106,  140 => 105,  139 => 104,  134 => 103,  132 => 102,  127 => 101,  124 => 96,  121 => 95,  118 => 94,  116 => 93,  111 => 91,  108 => 90,  103 => 87,  100 => 86,  97 => 85,  79 => 84,  77 => 81,  74 => 80,  72 => 79,  69 => 78,  66 => 51,  63 => 14,  59 => 12,  57 => 10,  56 => 9,  55 => 8,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set keyPrefix = keyPrefix ?? '' %}
{% set isTopLevel = not keyPrefix %}

{% if isTopLevel %}
    {% set elementInstance = craft.app.elements.createElement(elementType) %}
    {% set baseSortOptions = elementInstance.sortOptions()|map((option, key) => {
        label: option.label ?? option,
        attr: option.attribute ?? option.orderBy ?? key,
        defaultDir: option.defaultDir ?? 'asc',
    })|values %}
    {% set tableColumns = craft.app.elementSources.getAvailableTableAttributes(elementType) %}
{% endif %}

{% macro sourceLink(key, source, isTopLevel, elementType, baseSortOptions, tableColumns) %}
    {% set hasStructure = (source.structureId ?? null)|boolean %}
    {{ tag('a', {
        data: {
            key: key,
            'has-thumbs': (source.hasThumbs ?? false) ? true : false,
            'has-structure': hasStructure,
            'default-sort': source.defaultSort ?? false,
            'sort-opts': isTopLevel
                ? [hasStructure ? {label: 'Structure'|t('app'), attr: 'structure', defaultDir: 'asc'} : null]|filter
                    |merge(baseSortOptions)
                    |merge(craft.app.elementSources.getSourceSortOptions(elementType, key)|map(option => {
                        label: option.label,
                        attr: option.attribute ?? option.orderBy,
                        defaultDir: option.defaultDir ?? 'asc'
                    })|values)
                : false,
            'table-col-opts': isTopLevel
                ? tableColumns
                    |merge(craft.app.elementSources.getSourceTableAttributes(elementType, key))
                    |map((a, key) => a|merge({attr: key}))
                    |values
                : false,
            'default-table-cols': isTopLevel
                ? craft.app.elementSources.getTableAttributes(elementType, key)
                    |map(a => a[0])
                    |filter(a => a != 'title')
                    |values
                : false,
            sites: (source.sites ?? false) ? source.sites|join(',') : false,
            'override-status': (source.criteria.status ?? false) ? true : false,
            disabled: source.disabled ?? false,
        }|merge(source.data ?? {}),
        html: _self.sourceInnerHtml(source)
    }) }}
{% endmacro %}

{% macro sourceInnerHtml(source) %}
    {% if source.status is defined %}
        <span class=\"status {{ source.status }}\"></span>
    {% elseif source.icon is defined %}
        <span class=\"icon\">
            {{ (svg(source.icon, sanitize=true, namespace=true) ?: \"<span data-icon='#{source.icon}'></span>\")|raw }}
        </span>
    {% elseif source.iconMask is defined %}
        <span class=\"icon icon-mask\">
            {{ (svg(source.iconMask, sanitize=true, namespace=true) ?: \"<span data-icon='#{source.iconMask}'></span>\")|raw }}
        </span>
    {% endif %}
    <span class=\"label\">{{ source.label|trim is not same as('') ? source.label : '(blank)'|t('app') }}</span>
    {% if source.badgeCount is defined %}
        <span class=\"badge\" aria-hidden=\"true\">{{ source.badgeCount|number(decimals=0) }}</span>
        {{ tag('span', {
            class: 'visually-hidden',
            data: {
                notification: true,
            },
            text: '{num, number} {num, plural, =1{notification} other{notifications}}'|t('app', {
                num: source.badgeCount,
            }),
        }) }}
    {% endif %}
{% endmacro %}

{% set nestedUnderHeading = false %}

{% tag 'ul' with {
    class: keyPrefix ? 'nested' : null,
} %}
    {% for source in sources %}
        {% if (source.type ?? null) == 'heading' %}
            {% if nestedUnderHeading %}
                    </ul>
                </li>
            {% endif %}
            <li class=\"heading\">
                <span>{{ source.heading|t('site') }}</span>
                <ul>
            {% set nestedUnderHeading = true %}
        {% else %}
            {% set key = source.keyPath ?? (keyPrefix ~ source.key) %}
            {% tag 'li' with {
                class: [
                    (source.disabled ?? false) ? 'hidden' : null,
                ]|filter,
            } %}
                {{ _self.sourceLink(key, source, isTopLevel, elementType, baseSortOptions ?? null, tableColumns ?? null) }}
                {% if source.nested is defined and source.nested is not empty %}
                    <button class=\"toggle\" aria-expanded=\"false\" aria-label=\"{{ 'Show nested sources'|t('app') }}\"></button>
                    {% include \"_elements/sources\" with {
                        keyPrefix: key ~ '/',
                        sources: source.nested
                    } %}
                {% endif %}
            {% endtag %}
        {% endif %}
    {% endfor %}
    {% if nestedUnderHeading %}
            </ul>
        </li>
    {% endif %}
{% endtag %}
{% endapply %}
", "_elements/sources", "/var/www/html/vendor/craftcms/cms/src/templates/_elements/sources.twig");
    }
}
