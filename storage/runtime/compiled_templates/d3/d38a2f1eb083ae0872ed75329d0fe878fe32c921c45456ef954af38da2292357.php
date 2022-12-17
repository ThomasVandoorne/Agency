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

/* _includes/forms/date */
class __TwigTemplate_55ed98c0f9f07237278436baccd140540fd70faffc2b8823275d32622dc6c457 extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/date");
        // line 1
        $context["hasOuterContainer"] = (($context["hasOuterContainer"]) ?? (false));
        // line 2
        $context["id"] = ((($context["id"]) ?? (("date" . twig_random($this->env)))) . "-date");
        // line 3
        $context["name"] = (($context["name"]) ?? (null));
        // line 4
        $context["value"] = (((($context["value"]) ?? (false))) ? ($this->extensions['craft\web\twig\Extension']->dateFunction($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 4, $this->source); })()), false)) : (null));
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
        $context["containerAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["class" => $this->extensions['craft\web\twig\Extension']->mergeFilter([0 => "datewrapper"], craft\helpers\Html::explodeClass(((        // line 10
$context["class"]) ?? ([]))))], ((        // line 11
$context["containerAttributes"]) ?? ([])), true);
        // line 13
        if (        $this->hasBlock("attr", $context, $blocks)) {
            // line 14
            $context["containerAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 14, $this->source); })()), $this->extensions['craft\web\twig\Extension']->parseAttrFilter((("<div " .             $this->renderBlock("attr", $context, $blocks)) . ">")), true);
        }
        // line 16
        echo "
";
        // line 17
        if ( !(isset($context["hasOuterContainer"]) || array_key_exists("hasOuterContainer", $context) ? $context["hasOuterContainer"] : (function () { throw new RuntimeError('Variable "hasOuterContainer" does not exist.', 17, $this->source); })())) {
            echo "<div class=\"datetimewrapper\">";
        }
        // line 18
        echo "
";
        // line 19
        ob_start();
        // line 20
        echo "    ";
        if ( !(isset($context["isMobile"]) || array_key_exists("isMobile", $context) ? $context["isMobile"] : (function () { throw new RuntimeError('Variable "isMobile" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "        ";
            $context["formatRefId"] = ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })()) . "-format");
            // line 22
            echo "        ";
            $context["describedBy"] = twig_join_filter($this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => (isset($context["formatRefId"]) || array_key_exists("formatRefId", $context) ? $context["formatRefId"] : (function () { throw new RuntimeError('Variable "formatRefId" does not exist.', 22, $this->source); })()), 1 => (($context["describedBy"]) ?? (null))]), " ");
            // line 23
            echo "        <span id=\"";
            echo twig_escape_filter($this->env, (isset($context["formatRefId"]) || array_key_exists("formatRefId", $context) ? $context["formatRefId"] : (function () { throw new RuntimeError('Variable "formatRefId" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\" class=\"visually-hidden\">
            ";
            // line 24
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 24, $this->source); })()), "app", []), "getFormattingLocale", [], "method"), "getDateFormat", [0 => "short", 1 => "human"], "method"), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 27
        $this->loadTemplate("_includes/forms/text", "_includes/forms/date", 27)->display(twig_array_merge($context, ["type" => ((        // line 28
(isset($context["isMobile"]) || array_key_exists("isMobile", $context) ? $context["isMobile"] : (function () { throw new RuntimeError('Variable "isMobile" does not exist.', 28, $this->source); })())) ? ("date") : ("text")), "class" => (((        // line 29
(isset($context["isMobile"]) || array_key_exists("isMobile", $context) ? $context["isMobile"] : (function () { throw new RuntimeError('Variable "isMobile" does not exist.', 29, $this->source); })()) &&  !(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 29, $this->source); })()))) ? ("empty-value") : (false)), "name" => ((        // line 30
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 30, $this->source); })())) ? (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 30, $this->source); })()) . "[date]")) : (null)), "autocomplete" => false, "size" => 10, "placeholder" => " ", "value" => ((        // line 34
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 34, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->dateFilter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 34, $this->source); })()), (((isset($context["isMobile"]) || array_key_exists("isMobile", $context) ? $context["isMobile"] : (function () { throw new RuntimeError('Variable "isMobile" does not exist.', 34, $this->source); })())) ? ("Y-m-d") : ("short")))) : ("")), "inputAttributes" => ["aria" => ["label" => ((        // line 37
(isset($context["isDateTime"]) || array_key_exists("isDateTime", $context) ? $context["isDateTime"] : (function () { throw new RuntimeError('Variable "isDateTime" does not exist.', 37, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Date", "app")) : (false))]]]));
        // line 41
        echo "<div data-icon=\"date\"></div>";
        // line 42
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 42, $this->source); })()) && (isset($context["outputTzParam"]) || array_key_exists("outputTzParam", $context) ? $context["outputTzParam"] : (function () { throw new RuntimeError('Variable "outputTzParam" does not exist.', 42, $this->source); })()))) {
            // line 43
            echo craft\helpers\Html::hiddenInput(((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 43, $this->source); })()) . "[timezone]"), craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 43, $this->source); })()), "app", []), "getTimeZone", [], "method"));
        }
        echo craft\helpers\Html::tag("div", ob_get_clean(),         // line 19
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 19, $this->source); })()));
        // line 46
        echo "
";
        // line 47
        if ( !(isset($context["hasOuterContainer"]) || array_key_exists("hasOuterContainer", $context) ? $context["hasOuterContainer"] : (function () { throw new RuntimeError('Variable "hasOuterContainer" does not exist.', 47, $this->source); })())) {
            echo "</div>";
        }
        // line 49
        if ( !(isset($context["isMobile"]) || array_key_exists("isMobile", $context) ? $context["isMobile"] : (function () { throw new RuntimeError('Variable "isMobile" does not exist.', 49, $this->source); })())) {
            // line 50
            ob_start();
            // line 51
            echo "\$('#";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getFilter('namespaceInputId')->getCallable()((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 51, $this->source); })())), "js"), "html", null, true);
            echo "').datepicker(\$.extend({
            defaultDate: new Date(";
            // line 52
            if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 52, $this->source); })())) {
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 52, $this->source); })()), "format", [0 => "Y"], "method"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 52, $this->source); })()), "format", [0 => "n"], "method") - 1), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 52, $this->source); })()), "format", [0 => "j"], "method"), "html", null, true);
            }
            echo ")
        }, Craft.datepickerOptions));";
            craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        }
        craft\helpers\Template::endProfile("template", "_includes/forms/date");
    }

    public function getTemplateName()
    {
        return "_includes/forms/date";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 52,  123 => 51,  121 => 50,  119 => 49,  115 => 47,  112 => 46,  110 => 19,  107 => 43,  105 => 42,  103 => 41,  101 => 37,  100 => 34,  99 => 30,  98 => 29,  97 => 28,  96 => 27,  90 => 24,  85 => 23,  82 => 22,  79 => 21,  76 => 20,  74 => 19,  71 => 18,  67 => 17,  64 => 16,  61 => 14,  59 => 13,  57 => 11,  56 => 10,  55 => 9,  52 => 8,  50 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set hasOuterContainer = hasOuterContainer ?? false %}
{% set id = (id ?? \"date#{random()}\") ~ '-date' -%}
{% set name = name ?? null -%}
{% set value = (value ?? false) ? date(value, false) : null -%}
{% set outputTzParam = outputTzParam ?? true %}
{% set isMobile = craft.app.request.isMobileBrowser %}
{% set isDateTime = isDateTime ?? false %}

{% set containerAttributes = {
    class: ['datewrapper']|merge((class ?? [])|explodeClass),
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
            {{ craft.app.getFormattingLocale().getDateFormat('short', 'human') }}
        </span>
    {% endif %}
    {%- include \"_includes/forms/text\" with {
        type: isMobile ? 'date' : 'text',
        class: isMobile and not value ? 'empty-value' : false,
        name: name ? \"#{name}[date]\" : null,
        autocomplete: false,
        size: 10,
        placeholder: ' ',
        value: value ? value|date(isMobile ? 'Y-m-d' : 'short') : '',
        inputAttributes: {
            aria: {
                label: isDateTime ? 'Date'|t('app') : false,
            },
        },
    } -%}
    <div data-icon=\"date\"></div>
    {%- if name and outputTzParam -%}
        {{- hiddenInput(\"#{name}[timezone]\", craft.app.getTimeZone()) -}}
    {%- endif -%}
{% endtag %}

{% if not hasOuterContainer %}</div>{% endif %}

{%- if not isMobile -%}
    {%- js -%}
        \$('#{{ id|namespaceInputId|e('js') }}').datepicker(\$.extend({
            defaultDate: new Date({% if value %}{{ value.format('Y') }}, {{ value.format('n')-1 }}, {{ value.format('j') }}{% endif %})
        }, Craft.datepickerOptions));
    {%- endjs -%}
{%- endif -%}
", "_includes/forms/date", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms/date.twig");
    }
}
