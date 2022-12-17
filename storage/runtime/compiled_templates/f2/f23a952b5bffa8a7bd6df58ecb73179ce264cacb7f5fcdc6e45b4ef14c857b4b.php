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

/* _includes/forms/text */
class __TwigTemplate_e778d0df2d417c22275b9e22a88a7766542257a5ebeac22b94425c0d518aa922 extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/text");
        // line 1
        $context["type"] = (($context["type"]) ?? ("text"));
        // line 2
        $context["autocomplete"] = (($context["autocomplete"]) ?? (false));
        // line 4
        $context["class"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(craft\helpers\Html::explodeClass((($context["class"]) ?? ([]))), $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => "text", 1 => ((((        // line 6
$context["disabled"]) ?? (false))) ? ("disabled") : (null)), 2 => (( !((        // line 7
$context["size"]) ?? (false))) ? ("fullwidth") : (null))]));
        // line 10
        $context["orientation"] = (($context["orientation"]) ?? ((((craft\helpers\Template::attribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "dir", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "dir", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "dir", [])) : (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 10, $this->source); })()), "app", []), "locale", []), "getOrientation", [], "method")))));
        // line 12
        $context["inputAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["class" =>         // line 13
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 13, $this->source); })()), "type" =>         // line 14
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 14, $this->source); })()), "id" => ((        // line 15
$context["id"]) ?? (false)), "inputmode" => ((        // line 16
$context["inputmode"]) ?? (false)), "size" => ((        // line 17
$context["size"]) ?? (false)), "name" => ((        // line 18
$context["name"]) ?? (false)), "value" => ((        // line 19
$context["value"]) ?? (false)), "maxlength" => ((        // line 20
$context["maxlength"]) ?? (false)), "autofocus" => (((        // line 21
$context["autofocus"]) ?? (false)) &&  !craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 21, $this->source); })()), "app", []), "request", []), "isMobileBrowser", [0 => true], "method")), "autocomplete" => (($this->env->getTest('boolean')->getCallable()(        // line 22
(isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new RuntimeError('Variable "autocomplete" does not exist.', 22, $this->source); })()))) ? ((((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new RuntimeError('Variable "autocomplete" does not exist.', 22, $this->source); })())) ? ("on") : ("off"))) : ((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new RuntimeError('Variable "autocomplete" does not exist.', 22, $this->source); })()))), "autocorrect" => ((((        // line 23
$context["autocorrect"]) ?? (true))) ? (false) : ("off")), "autocapitalize" => ((((        // line 24
$context["autocapitalize"]) ?? (true))) ? (false) : ("none")), "disabled" => ((        // line 25
$context["disabled"]) ?? (false)), "readonly" => ((        // line 26
$context["readonly"]) ?? (false)), "title" => ((        // line 27
$context["title"]) ?? (false)), "placeholder" => ((        // line 28
$context["placeholder"]) ?? (false)), "step" => ((        // line 29
$context["step"]) ?? (false)), "min" => ((        // line 30
$context["min"]) ?? (false)), "max" => ((        // line 31
$context["max"]) ?? (false)), "dir" =>         // line 32
(isset($context["orientation"]) || array_key_exists("orientation", $context) ? $context["orientation"] : (function () { throw new RuntimeError('Variable "orientation" does not exist.', 32, $this->source); })()), "aria" => ["labelledby" => ((        // line 34
$context["labelledBy"]) ?? (false)), "describedby" => ((        // line 35
$context["describedBy"]) ?? (false))]], ((        // line 37
$context["inputAttributes"]) ?? ([])), true);
        // line 39
        if (        $this->hasBlock("attr", $context, $blocks)) {
            // line 40
            $context["inputAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 40, $this->source); })()), $this->extensions['craft\web\twig\Extension']->parseAttrFilter((("<div " .             $this->renderBlock("attr", $context, $blocks)) . ">")), true);
        }
        // line 43
        if ((($context["showCharsLeft"]) ?? (false))) {
            // line 44
            $context["inputAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 44, $this->source); })()), ["data" => ["show-chars-left" =>             // line 46
(isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context) ? $context["showCharsLeft"] : (function () { throw new RuntimeError('Variable "showCharsLeft" does not exist.', 46, $this->source); })())], "style" => [("padding-" . (((            // line 49
(isset($context["orientation"]) || array_key_exists("orientation", $context) ? $context["orientation"] : (function () { throw new RuntimeError('Variable "orientation" does not exist.', 49, $this->source); })()) == "ltr")) ? ("right") : ("left"))) => (((($context["maxlength"]) ?? (false))) ? ((((7.2000000000000002 * $this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new RuntimeError('Variable "maxlength" does not exist.', 49, $this->source); })()))) + 14) . "px")) : (""))]], true);
        }
        // line 54
        $context["input"] = $this->extensions['craft\web\twig\Extension']->tagFunction("input", (isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 54, $this->source); })()));
        // line 56
        if ((($context["unit"]) ?? (false))) {
            // line 57
            echo "    <div class=\"flex\">
        <div class=\"textwrapper\">";
            // line 58
            echo (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 58, $this->source); })());
            echo "</div>
        <div class=\"label light\">";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["unit"]) || array_key_exists("unit", $context) ? $context["unit"] : (function () { throw new RuntimeError('Variable "unit" does not exist.', 59, $this->source); })()), "html", null, true);
            echo "</div>
    </div>";
        } else {
            // line 62
            echo (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 62, $this->source); })());
        }
        craft\helpers\Template::endProfile("template", "_includes/forms/text");
    }

    public function getTemplateName()
    {
        return "_includes/forms/text";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 62,  96 => 59,  92 => 58,  89 => 57,  87 => 56,  85 => 54,  82 => 49,  81 => 46,  80 => 44,  78 => 43,  75 => 40,  73 => 39,  71 => 37,  70 => 35,  69 => 34,  68 => 32,  67 => 31,  66 => 30,  65 => 29,  64 => 28,  63 => 27,  62 => 26,  61 => 25,  60 => 24,  59 => 23,  58 => 22,  57 => 21,  56 => 20,  55 => 19,  54 => 18,  53 => 17,  52 => 16,  51 => 15,  50 => 14,  49 => 13,  48 => 12,  46 => 10,  44 => 7,  43 => 6,  42 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set type = type ?? 'text' %}
{%- set autocomplete = autocomplete ?? false %}

{%- set class = (class ?? [])|explodeClass|merge([
    'text',
    (disabled ?? false) ? 'disabled' : null,
    not (size ?? false) ? 'fullwidth' : null,
]|filter) %}

{%- set orientation = orientation ?? inputAttributes.dir ?? craft.app.locale.getOrientation() %}

{%- set inputAttributes = {
    class: class,
    type: type,
    id: id ?? false,
    inputmode: inputmode ?? false,
    size: size ?? false,
    name: name ?? false,
    value: value ?? false,
    maxlength: maxlength ?? false,
    autofocus: (autofocus ?? false) and not craft.app.request.isMobileBrowser(true),
    autocomplete: autocomplete is boolean ? (autocomplete ? 'on' : 'off') : autocomplete,
    autocorrect: (autocorrect ?? true) ? false : 'off',
    autocapitalize: (autocapitalize ?? true) ? false : 'none',
    disabled: disabled ?? false,
    readonly: readonly ?? false,
    title: title ?? false,
    placeholder: placeholder ?? false,
    step: step ?? false,
    min: min ?? false,
    max: max ?? false,
    dir: orientation,
    aria: {
        labelledby: labelledBy ?? false,
        describedby: describedBy ?? false,
    },
}|merge(inputAttributes ?? [], recursive=true) %}

{%- if block('attr') is defined %}
    {%- set inputAttributes = inputAttributes|merge(('<div ' ~ block('attr') ~ '>')|parseAttr, recursive=true) %}
{%- endif %}

{%- if showCharsLeft ?? false %}
    {%- set inputAttributes = inputAttributes|merge({
        data: {
            'show-chars-left': showCharsLeft,
        },
        style: {
            (\"padding-#{orientation == 'ltr' ? 'right' : 'left'}\"): (maxlength ?? false) ? \"#{7.2*maxlength|length+14}px\",
        },
    }, recursive=true) %}
{%- endif %}

{%- set input = tag('input', inputAttributes) %}

{%- if unit ?? false %}
    <div class=\"flex\">
        <div class=\"textwrapper\">{{ input|raw }}</div>
        <div class=\"label light\">{{ unit }}</div>
    </div>
{%- else %}
    {{- input|raw }}
{%- endif %}
", "_includes/forms/text", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms/text.twig");
    }
}
