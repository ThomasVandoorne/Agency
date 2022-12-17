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

/* _includes/forms/textarea */
class __TwigTemplate_705f7dc288c4a2f40828eccc233b63da998a402519dea6679c290e86e92548ed extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/textarea");
        // line 1
        $context["class"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(craft\helpers\Html::explodeClass((($context["class"]) ?? ([]))), $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => "text", 1 => ((((        // line 3
$context["disabled"]) ?? (false))) ? ("disabled") : ("")), 2 => (( !((        // line 4
$context["cols"]) ?? (false))) ? ("fullwidth") : (""))]));
        // line 7
        $context["inputAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["class" =>         // line 8
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 8, $this->source); })()), "id" => ((        // line 9
$context["id"]) ?? (false)), "inputmode" => ((        // line 10
$context["inputmode"]) ?? (false)), "rows" => ((        // line 11
$context["rows"]) ?? (2)), "cols" => ((        // line 12
$context["cols"]) ?? (50)), "name" => ((        // line 13
$context["name"]) ?? (false)), "maxlength" => ((        // line 14
$context["maxlength"]) ?? (false)), "autofocus" => (((        // line 15
$context["autofocus"]) ?? (false)) &&  !craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 15, $this->source); })()), "app", []), "request", []), "isMobileBrowser", [0 => true], "method")), "disabled" => ((        // line 16
$context["disabled"]) ?? (false)), "readonly" => ((        // line 17
$context["readonly"]) ?? (false)), "title" => ((        // line 18
$context["title"]) ?? (false)), "placeholder" => ((        // line 19
$context["placeholder"]) ?? (false)), "text" => ((        // line 20
$context["value"]) ?? ("")), "aria" => ["describedby" => ((        // line 22
$context["describedBy"]) ?? (false))], "data" => ["show-chars-left" => ((        // line 25
$context["showCharsLeft"]) ?? (false))]], ((        // line 27
$context["inputAttributes"]) ?? ([])), true);
        // line 29
        if (        $this->hasBlock("attr", $context, $blocks)) {
            // line 30
            $context["inputAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 30, $this->source); })()), $this->extensions['craft\web\twig\Extension']->parseAttrFilter((("<div " .             $this->renderBlock("attr", $context, $blocks)) . ">")), true);
        }
        // line 33
        echo $this->extensions['craft\web\twig\Extension']->tagFunction("textarea", (isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 33, $this->source); })()));
        echo "
";
        craft\helpers\Template::endProfile("template", "_includes/forms/textarea");
    }

    public function getTemplateName()
    {
        return "_includes/forms/textarea";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 33,  62 => 30,  60 => 29,  58 => 27,  57 => 25,  56 => 22,  55 => 20,  54 => 19,  53 => 18,  52 => 17,  51 => 16,  50 => 15,  49 => 14,  48 => 13,  47 => 12,  46 => 11,  45 => 10,  44 => 9,  43 => 8,  42 => 7,  40 => 4,  39 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set class = (class ?? [])|explodeClass|merge([
    'text',
    (disabled ?? false) ? 'disabled',
    not (cols ?? false) ? 'fullwidth',
]|filter) %}

{%- set inputAttributes = {
    class: class,
    id: id ?? false,
    inputmode: inputmode ?? false,
    rows: rows ?? 2,
    cols: cols ?? 50,
    name: name ?? false,
    maxlength: maxlength ?? false,
    autofocus: (autofocus ?? false) and not craft.app.request.isMobileBrowser(true),
    disabled: disabled ?? false,
    readonly: readonly ?? false,
    title: title ?? false,
    placeholder: placeholder ?? false,
    text: value ?? '',
    aria: {
        describedby: describedBy ?? false,
    },
    data: {
        'show-chars-left': showCharsLeft ?? false,
    },
}|merge(inputAttributes ?? [], recursive=true) %}

{%- if block('attr') is defined %}
    {%- set inputAttributes = inputAttributes|merge(('<div ' ~ block('attr') ~ '>')|parseAttr, recursive=true) %}
{%- endif %}

{{- tag('textarea', inputAttributes) }}
", "_includes/forms/textarea", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms/textarea.twig");
    }
}
