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

/* _includes/forms/time */
class __TwigTemplate_ffbd716124309ffeab8b218562a8364617303306880c1f16cb46b2038d3dbf37 extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/time");
        // line 1
        $context["hasOuterContainer"] = (($context["hasOuterContainer"]) ?? (false));
        // line 2
        $context["id"] = ((($context["id"]) ?? (("time" . twig_random($this->env)))) . "-time");
        // line 3
        $context["name"] = (($context["name"]) ?? (null));
        // line 4
        $context["value"] = (($context["value"]) ?? (null));
        // line 5
        $context["outputTzParam"] = (($context["outputTzParam"]) ?? (true));
        // line 6
        $context["isMobile"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 6, $this->source); })()), "app", []), "request", []), "isMobileBrowser", []);
        // line 7
        $context["isDateTime"] = (($context["isDateTime"]) ?? (false));
        // line 8
        echo "
";
        // line 9
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 9, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\timepicker\\TimepickerAsset"], "method");
        // line 11
        $context["containerAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["class" => $this->extensions['craft\web\twig\Extension']->mergeFilter([0 => "timewrapper"], craft\helpers\Html::explodeClass(((        // line 12
$context["class"]) ?? ([]))))], ((        // line 13
$context["containerAttributes"]) ?? ([])), true);
        // line 15
        if (        $this->hasBlock("attr", $context, $blocks)) {
            // line 16
            $context["containerAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 16, $this->source); })()), $this->extensions['craft\web\twig\Extension']->parseAttrFilter((("<div " .             $this->renderBlock("attr", $context, $blocks)) . ">")), true);
        }
        // line 18
        echo "
";
        // line 19
        if ( !(isset($context["hasOuterContainer"]) || array_key_exists("hasOuterContainer", $context) ? $context["hasOuterContainer"] : (function () { throw new RuntimeError('Variable "hasOuterContainer" does not exist.', 19, $this->source); })())) {
            echo "<div class=\"datetimewrapper\">";
        }
        // line 20
        echo "
";
        // line 21
        ob_start();
        // line 22
        echo "    ";
        if ( !(isset($context["isMobile"]) || array_key_exists("isMobile", $context) ? $context["isMobile"] : (function () { throw new RuntimeError('Variable "isMobile" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "        ";
            $context["formatRefId"] = ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 23, $this->source); })()) . "-format");
            // line 24
            echo "        ";
            $context["describedBy"] = twig_join_filter($this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => (isset($context["formatRefId"]) || array_key_exists("formatRefId", $context) ? $context["formatRefId"] : (function () { throw new RuntimeError('Variable "formatRefId" does not exist.', 24, $this->source); })()), 1 => (($context["describedBy"]) ?? (null))]), " ");
            // line 25
            echo "        <span id=\"";
            echo twig_escape_filter($this->env, (isset($context["formatRefId"]) || array_key_exists("formatRefId", $context) ? $context["formatRefId"] : (function () { throw new RuntimeError('Variable "formatRefId" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "\" class=\"visually-hidden\">
            ";
            // line 26
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 26, $this->source); })()), "app", []), "getFormattingLocale", [], "method"), "getTimeFormat", [0 => "short", 1 => "human"], "method"), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 29
        $this->loadTemplate("_includes/forms/text", "_includes/forms/time", 29)->display(twig_array_merge($context, ["type" => ((        // line 30
(isset($context["isMobile"]) || array_key_exists("isMobile", $context) ? $context["isMobile"] : (function () { throw new RuntimeError('Variable "isMobile" does not exist.', 30, $this->source); })())) ? ("time") : ("text")), "class" => (((        // line 31
(isset($context["isMobile"]) || array_key_exists("isMobile", $context) ? $context["isMobile"] : (function () { throw new RuntimeError('Variable "isMobile" does not exist.', 31, $this->source); })()) &&  !(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 31, $this->source); })()))) ? ("empty-value") : (false)), "name" => ((        // line 32
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 32, $this->source); })())) ? (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 32, $this->source); })()) . "[time]")) : (null)), "autocomplete" => false, "size" => 10, "placeholder" => " ", "value" => ((        // line 36
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 36, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->timeFilter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 36, $this->source); })()), (((isset($context["isMobile"]) || array_key_exists("isMobile", $context) ? $context["isMobile"] : (function () { throw new RuntimeError('Variable "isMobile" does not exist.', 36, $this->source); })())) ? ("H:i") : ("short")))) : ("")), "inputAttributes" => ["aria" => ["label" => ((        // line 39
(isset($context["isDateTime"]) || array_key_exists("isDateTime", $context) ? $context["isDateTime"] : (function () { throw new RuntimeError('Variable "isDateTime" does not exist.', 39, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Time", "app")) : (false))]]]));
        // line 43
        echo "<div data-icon=\"time\"></div>";
        // line 44
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 44, $this->source); })()) && (isset($context["outputTzParam"]) || array_key_exists("outputTzParam", $context) ? $context["outputTzParam"] : (function () { throw new RuntimeError('Variable "outputTzParam" does not exist.', 44, $this->source); })()))) {
            // line 45
            echo craft\helpers\Html::hiddenInput(((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 45, $this->source); })()) . "[timezone]"), craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 45, $this->source); })()), "app", []), "getTimeZone", [], "method"));
        }
        echo craft\helpers\Html::tag("div", ob_get_clean(),         // line 21
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 21, $this->source); })()));
        // line 49
        if ( !(isset($context["hasOuterContainer"]) || array_key_exists("hasOuterContainer", $context) ? $context["hasOuterContainer"] : (function () { throw new RuntimeError('Variable "hasOuterContainer" does not exist.', 49, $this->source); })())) {
            echo "</div>";
        }
        // line 51
        if ( !(isset($context["isMobile"]) || array_key_exists("isMobile", $context) ? $context["isMobile"] : (function () { throw new RuntimeError('Variable "isMobile" does not exist.', 51, $this->source); })())) {
            // line 52
            $context["options"] = $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, ["minTime" => ((            // line 53
$context["minTime"]) ?? (null)), "maxTime" => ((            // line 54
$context["maxTime"]) ?? (null)), "disableTimeRanges" => ((            // line 55
$context["disableTimeRanges"]) ?? (null)), "step" => ((            // line 56
$context["minuteIncrement"]) ?? (null)), "forceRoundTime" => ((            // line 57
$context["forceRoundTime"]) ?? (false))]);
            // line 61
            $context["jsonOptions"] = (((twig_constant("JSON_HEX_TAG") | twig_constant("JSON_HEX_AMP")) | twig_constant("JSON_HEX_QUOT")) | twig_constant("JSON_FORCE_OBJECT"));
            // line 63
            ob_start();
            // line 64
            echo "var \$timePicker = \$('#";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getFilter('namespaceInputId')->getCallable()((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 64, $this->source); })())), "js"), "html", null, true);
            echo "');
        \$timePicker.timepicker(\$.extend(";
            // line 65
            echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 65, $this->source); })()), (isset($context["jsonOptions"]) || array_key_exists("jsonOptions", $context) ? $context["jsonOptions"] : (function () { throw new RuntimeError('Variable "jsonOptions" does not exist.', 65, $this->source); })()));
            echo ", Craft.timepickerOptions));";
            // line 67
            if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 67, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->source, ($context["value"] ?? null), "format", [], "any", true, true))) {
                // line 68
                echo "\$timePicker.timepicker('setTime', ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 68, $this->source); })()), "format", [0 => "G"], "method"), "html", null, true);
                echo "*3600 + ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 68, $this->source); })()), "format", [0 => "i"], "method"), "html", null, true);
                echo "*60 + ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 68, $this->source); })()), "format", [0 => "s"], "method"), "html", null, true);
                echo ");";
            }
            craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        }
        craft\helpers\Template::endProfile("template", "_includes/forms/time");
    }

    public function getTemplateName()
    {
        return "_includes/forms/time";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 68,  139 => 67,  136 => 65,  131 => 64,  129 => 63,  127 => 61,  125 => 57,  124 => 56,  123 => 55,  122 => 54,  121 => 53,  120 => 52,  118 => 51,  114 => 49,  112 => 21,  109 => 45,  107 => 44,  105 => 43,  103 => 39,  102 => 36,  101 => 32,  100 => 31,  99 => 30,  98 => 29,  92 => 26,  87 => 25,  84 => 24,  81 => 23,  78 => 22,  76 => 21,  73 => 20,  69 => 19,  66 => 18,  63 => 16,  61 => 15,  59 => 13,  58 => 12,  57 => 11,  55 => 9,  52 => 8,  50 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set hasOuterContainer = hasOuterContainer ?? false %}
{% set id = (id ?? \"time#{random()}\") ~ '-time' -%}
{% set name = name ?? null -%}
{% set value = value ?? null -%}
{% set outputTzParam = outputTzParam ?? true %}
{% set isMobile = craft.app.request.isMobileBrowser %}
{% set isDateTime = isDateTime ?? false %}

{% do view.registerAssetBundle('craft\\\\web\\\\assets\\\\timepicker\\\\TimepickerAsset') -%}

{% set containerAttributes = {
    class: ['timewrapper']|merge((class ?? [])|explodeClass),
}|merge(containerAttributes ?? [], recursive=true) %}

{%- if block('attr') is defined %}
    {%- set containerAttributes = containerAttributes|merge(('<div ' ~ block('attr') ~ '>')|parseAttr, recursive=true) %}
{% endif %}

{% if not hasOuterContainer %}<div class=\"datetimewrapper\">{% endif %}

{% tag 'div' with containerAttributes %}
    {% if not isMobile %}
        {% set formatRefId = \"#{id}-format\" %}
        {% set describedBy = [formatRefId, describedBy ?? null]|filter|join(' ') %}
        <span id=\"{{ formatRefId }}\" class=\"visually-hidden\">
            {{ craft.app.getFormattingLocale().getTimeFormat('short', 'human') }}
        </span>
    {% endif %}
    {%- include \"_includes/forms/text\" with {
        type: isMobile ? 'time' : 'text',
        class: isMobile and not value ? 'empty-value' : false,
        name: name ? \"#{name}[time]\" : null,
        autocomplete: false,
        size: 10,
        placeholder: ' ',
        value: value ? value|time(isMobile ? 'H:i' : 'short') : '',
        inputAttributes: {
            aria: {
                label: isDateTime ? 'Time'|t('app') : false,
            },
        },
    } -%}
    <div data-icon=\"time\"></div>
    {%- if name and outputTzParam -%}
        {{- hiddenInput(\"#{name}[timezone]\", craft.app.getTimeZone()) -}}
    {%- endif -%}
{% endtag -%}

{% if not hasOuterContainer %}</div>{% endif %}

{%- if not isMobile -%}
    {% set options = {
        minTime: minTime ?? null,
        maxTime: maxTime ?? null,
        disableTimeRanges: disableTimeRanges ?? null,
        step: minuteIncrement ?? null,
        forceRoundTime: forceRoundTime ?? false,
    }|filter %}

    {#- include JSON_FORCE_OBJECT in the json_encode options -#}
    {%- set jsonOptions = constant('JSON_HEX_TAG') b-or constant('JSON_HEX_AMP') b-or constant('JSON_HEX_QUOT') b-or constant('JSON_FORCE_OBJECT') -%}

    {%- js -%}
        var \$timePicker = \$('#{{ id|namespaceInputId|e('js') }}');
        \$timePicker.timepicker(\$.extend({{ options|json_encode(jsonOptions)|raw }}, Craft.timepickerOptions));

        {%- if value and value.format is defined -%}
            \$timePicker.timepicker('setTime', {{ value.format('G') }}*3600 + {{ value.format('i') }}*60 + {{ value.format('s') }});
        {%- endif -%}
    {%- endjs -%}
{%- endif -%}
", "_includes/forms/time", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms/time.twig");
    }
}
