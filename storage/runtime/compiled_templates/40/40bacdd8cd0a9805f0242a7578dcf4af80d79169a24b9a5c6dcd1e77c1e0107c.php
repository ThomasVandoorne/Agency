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

/* _includes/forms/elementSelect.twig */
class __TwigTemplate_e7fffcf8ad29cec48b1a0668df1bd8073c8c3401a409e233bd19d3eea7052768 extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/elementSelect.twig");
        // line 1
        if ((($context["name"]) ?? (false))) {
            // line 2
            echo "    ";
            echo craft\helpers\Html::hiddenInput((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 2, $this->source); })()), "");
            echo "
";
        }
        // line 5
        $context["id"] = (($context["id"]) ?? (("elementselect" . twig_random($this->env))));
        // line 6
        $context["elements"] = (($context["elements"]) ?? ([]));
        // line 7
        $context["jsClass"] = (($context["jsClass"]) ?? ("Craft.BaseElementSelectInput"));
        // line 8
        $context["sources"] = (($context["sources"]) ?? (null));
        // line 9
        $context["condition"] = (($context["condition"]) ?? (null));
        // line 10
        $context["criteria"] = (($context["criteria"]) ?? (null));
        // line 11
        $context["sourceElementId"] = (($context["sourceElementId"]) ?? (null));
        // line 12
        $context["storageKey"] = (($context["storageKey"]) ?? (null));
        // line 13
        $context["viewMode"] = (($context["viewMode"]) ?? ("list"));
        // line 14
        $context["sortable"] = (($context["sortable"]) ?? (true));
        // line 15
        $context["prevalidate"] = (($context["prevalidate"]) ?? (false));
        // line 16
        $context["fieldId"] = (($context["fieldId"]) ?? (null));
        // line 17
        $context["single"] = (($context["single"]) ?? (false));
        // line 18
        $context["limit"] = (((isset($context["single"]) || array_key_exists("single", $context) ? $context["single"] : (function () { throw new RuntimeError('Variable "single" does not exist.', 18, $this->source); })())) ? (1) : ((($context["limit"]) ?? (null))));
        // line 19
        $context["disabled"] = (((($context["disabled"]) ?? (false))) ? (true) : (false));
        // line 20
        echo "
";
        // line 21
        $context["containerAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["id" =>         // line 22
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 22, $this->source); })()), "class" => $this->extensions['craft\web\twig\Extension']->mergeFilter([0 => "elementselect"], craft\helpers\Html::explodeClass(((        // line 23
$context["class"]) ?? ([]))))], ((        // line 24
$context["containerAttributes"]) ?? ([])), true);
        // line 26
        if (        $this->hasBlock("attr", $context, $blocks)) {
            // line 27
            $context["containerAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 27, $this->source); })()), $this->extensions['craft\web\twig\Extension']->parseAttrFilter((("<div " .             $this->renderBlock("attr", $context, $blocks)) . ">")), true);
        }
        // line 29
        echo "
";
        // line 30
        ob_start();
        // line 31
        echo "    <div class=\"elements\">
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 32, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 33
            echo "            ";
            $context["element"] = twig_include($this->env, $context, "_elements/element", ["context" => "field", "size" => (((            // line 35
(isset($context["viewMode"]) || array_key_exists("viewMode", $context) ? $context["viewMode"] : (function () { throw new RuntimeError('Variable "viewMode" does not exist.', 35, $this->source); })()) == "large")) ? ("large") : ("small"))]);
            // line 37
            echo "            ";
            if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 37, $this->source); })())) {
                // line 38
                echo "                ";
                $context["element"] = $this->extensions['craft\web\twig\Extension']->removeClassFilter($context["element"], "removable");
                // line 39
                echo "            ";
            }
            // line 40
            echo "            ";
            echo $context["element"];
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </div>

    <div class=\"flex flex-nowrap\">
        ";
        // line 45
        echo $this->extensions['craft\web\twig\Extension']->tagFunction("button", ["type" => "button", "class" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => "btn", 1 => "add", 2 => "icon", 3 => "dashed", 4 => ((        // line 52
(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 52, $this->source); })())) ? ("disabled") : ("")), 5 => (((        // line 53
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 53, $this->source); })()) && ($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 53, $this->source); })())) >= (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 53, $this->source); })())))) ? ("hidden") : (""))]), "text" => ((        // line 55
$context["selectionLabel"]) ?? ($this->extensions['craft\web\twig\Extension']->translateFilter("Choose", "app"))), "disabled" =>         // line 56
(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 56, $this->source); })()), "aria" => ["label" => ((        // line 58
$context["selectionLabel"]) ?? ($this->extensions['craft\web\twig\Extension']->translateFilter("Choose", "app"))), "describedby" => ((        // line 59
$context["describedBy"]) ?? (false))]]);
        // line 61
        echo "
        <div class=\"spinner hidden\"></div>
    </div>
";
        echo craft\helpers\Html::tag("div", ob_get_clean(),         // line 30
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 30, $this->source); })()));
        // line 65
        echo "
";
        // line 66
        if ( !(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 66, $this->source); })())) {
            // line 67
            echo "    ";
            $context["jsSettings"] = ["id" => $this->env->getFilter('namespaceInputId')->getCallable()(            // line 68
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 68, $this->source); })())), "name" => $this->env->getFilter('namespaceInputName')->getCallable()(            // line 69
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 69, $this->source); })())), "elementType" =>             // line 70
(isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 70, $this->source); })()), "sources" =>             // line 71
(isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 71, $this->source); })()), "condition" => ((            // line 72
(isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 72, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 72, $this->source); })()), "getConfig", [], "method")) : (null)), "criteria" =>             // line 73
(isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 73, $this->source); })()), "allowSelfRelations" => ((            // line 74
$context["allowSelfRelations"]) ?? (false)), "sourceElementId" =>             // line 75
(isset($context["sourceElementId"]) || array_key_exists("sourceElementId", $context) ? $context["sourceElementId"] : (function () { throw new RuntimeError('Variable "sourceElementId" does not exist.', 75, $this->source); })()), "disabledElementIds" => ((            // line 76
$context["disabledElementIds"]) ?? (null)), "viewMode" =>             // line 77
(isset($context["viewMode"]) || array_key_exists("viewMode", $context) ? $context["viewMode"] : (function () { throw new RuntimeError('Variable "viewMode" does not exist.', 77, $this->source); })()), "single" =>             // line 78
(isset($context["single"]) || array_key_exists("single", $context) ? $context["single"] : (function () { throw new RuntimeError('Variable "single" does not exist.', 78, $this->source); })()), "limit" =>             // line 79
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 79, $this->source); })()), "showSiteMenu" => ((            // line 80
$context["showSiteMenu"]) ?? (false)), "modalStorageKey" =>             // line 81
(isset($context["storageKey"]) || array_key_exists("storageKey", $context) ? $context["storageKey"] : (function () { throw new RuntimeError('Variable "storageKey" does not exist.', 81, $this->source); })()), "fieldId" =>             // line 82
(isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new RuntimeError('Variable "fieldId" does not exist.', 82, $this->source); })()), "sortable" =>             // line 83
(isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 83, $this->source); })()), "prevalidate" =>             // line 84
(isset($context["prevalidate"]) || array_key_exists("prevalidate", $context) ? $context["prevalidate"] : (function () { throw new RuntimeError('Variable "prevalidate" does not exist.', 84, $this->source); })()), "modalSettings" => ((            // line 85
$context["modalSettings"]) ?? ([]))];
            // line 87
            echo "
    ";
            // line 88
            ob_start();
            // line 89
            echo "        new ";
            echo twig_escape_filter($this->env, (isset($context["jsClass"]) || array_key_exists("jsClass", $context) ? $context["jsClass"] : (function () { throw new RuntimeError('Variable "jsClass" does not exist.', 89, $this->source); })()), "html", null, true);
            echo "(";
            echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["jsSettings"]) || array_key_exists("jsSettings", $context) ? $context["jsSettings"] : (function () { throw new RuntimeError('Variable "jsSettings" does not exist.', 89, $this->source); })()));
            echo ");
    ";
            craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        }
        craft\helpers\Template::endProfile("template", "_includes/forms/elementSelect.twig");
    }

    public function getTemplateName()
    {
        return "_includes/forms/elementSelect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 89,  193 => 88,  190 => 87,  188 => 85,  187 => 84,  186 => 83,  185 => 82,  184 => 81,  183 => 80,  182 => 79,  181 => 78,  180 => 77,  179 => 76,  178 => 75,  177 => 74,  176 => 73,  175 => 72,  174 => 71,  173 => 70,  172 => 69,  171 => 68,  169 => 67,  167 => 66,  164 => 65,  162 => 30,  157 => 61,  155 => 59,  154 => 58,  153 => 56,  152 => 55,  151 => 53,  150 => 52,  149 => 45,  144 => 42,  127 => 40,  124 => 39,  121 => 38,  118 => 37,  116 => 35,  114 => 33,  97 => 32,  94 => 31,  92 => 30,  89 => 29,  86 => 27,  84 => 26,  82 => 24,  81 => 23,  80 => 22,  79 => 21,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  58 => 11,  56 => 10,  54 => 9,  52 => 8,  50 => 7,  48 => 6,  46 => 5,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if name ?? false %}
    {{ hiddenInput(name, '') }}
{% endif -%}

{% set id = id ?? \"elementselect#{random()}\" -%}
{% set elements = elements ?? [] -%}
{% set jsClass = jsClass ?? 'Craft.BaseElementSelectInput' -%}
{% set sources = sources ?? null -%}
{% set condition = condition ?? null -%}
{% set criteria = criteria ?? null -%}
{% set sourceElementId = sourceElementId ?? null -%}
{% set storageKey = storageKey ?? null -%}
{% set viewMode = viewMode ?? 'list' %}
{% set sortable = sortable ?? true %}
{% set prevalidate = prevalidate ?? false %}
{% set fieldId = fieldId ?? null %}
{% set single = single ?? false %}
{% set limit = single ? 1 : (limit ?? null) %}
{% set disabled = (disabled ?? false) ? true : false %}

{% set containerAttributes = {
    id: id,
    class: ['elementselect']|merge((class ?? [])|explodeClass),
}|merge(containerAttributes ?? [], recursive=true) %}

{%- if block('attr') is defined %}
    {%- set containerAttributes = containerAttributes|merge(('<div ' ~ block('attr') ~ '>')|parseAttr, recursive=true) %}
{% endif %}

{% tag 'div' with containerAttributes %}
    <div class=\"elements\">
        {% for element in elements %}
            {% set element = include('_elements/element', {
                context: 'field',
                size: (viewMode == 'large' ? 'large' : 'small')
            }) %}
            {% if disabled %}
                {% set element = element|removeClass('removable') %}
            {% endif %}
            {{ element|raw }}
        {% endfor %}
    </div>

    <div class=\"flex flex-nowrap\">
        {{ tag('button', {
            type: 'button',
            class: [
                'btn',
                'add',
                'icon',
                'dashed',
                disabled ? 'disabled',
                limit and elements|length >= limit ? 'hidden',
            ]|filter,
            text: selectionLabel ?? 'Choose'|t('app'),
            disabled: disabled,
            aria: {
                label: selectionLabel ?? 'Choose'|t('app'),
                describedby: describedBy ?? false,
            }
        }) }}
        <div class=\"spinner hidden\"></div>
    </div>
{% endtag %}

{% if not disabled %}
    {% set jsSettings = {
        id: id|namespaceInputId,
        name: name|namespaceInputName,
        elementType: elementType,
        sources: sources,
        condition: condition ? condition.getConfig() : null,
        criteria: criteria,
        allowSelfRelations: allowSelfRelations ?? false,
        sourceElementId: sourceElementId,
        disabledElementIds: disabledElementIds ?? null,
        viewMode: viewMode,
        single: single,
        limit: limit,
        showSiteMenu: showSiteMenu ?? false,
        modalStorageKey: storageKey,
        fieldId: fieldId,
        sortable: sortable,
        prevalidate: prevalidate,
        modalSettings: modalSettings ?? {},
    } %}

    {% js %}
        new {{ jsClass }}({{ jsSettings|json_encode|raw }});
    {% endjs %}
{% endif %}
", "_includes/forms/elementSelect.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms/elementSelect.twig");
    }
}
