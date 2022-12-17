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

/* _includes/forms/checkbox */
class __TwigTemplate_05f86ba9d008955c1bc18cd4a57d0335ca07239bf3c862190ef82e0b30338a56 extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/checkbox");
        // line 1
        ob_start();
        // line 2
        echo "
";
        // line 3
        $context["id"] = (($context["id"]) ?? (("checkbox" . twig_random($this->env))));
        // line 4
        $context["label"] = (($context["checkboxLabel"]) ?? ((($context["label"]) ?? (null))));
        // line 5
        echo "
";
        // line 6
        $context["inputAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["id" =>         // line 7
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()), "class" => $this->extensions['craft\web\twig\Extension']->mergeFilter(craft\helpers\Html::explodeClass(((        // line 8
$context["class"]) ?? ([]))), $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => ((((        // line 9
$context["toggle"]) ?? ((($context["reverseToggle"]) ?? (false))))) ? ("fieldtoggle") : (null)), 1 => "checkbox"])), "checked" => (((        // line 12
$context["checked"]) ?? (false)) && (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 12, $this->source); })())), "autofocus" => (((        // line 13
$context["autofocus"]) ?? (false)) &&  !craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 13, $this->source); })()), "app", []), "request", []), "isMobileBrowser", [0 => true], "method")), "disabled" => ((((        // line 14
$context["disabled"]) ?? (false))) ? (true) : (false)), "aria" => ["labelledby" => ((        // line 16
$context["labelledBy"]) ?? (false)), "describedby" => ((        // line 17
$context["describedBy"]) ?? (false))], "data" => ["target" => ((        // line 20
$context["toggle"]) ?? (false)), "reverse-target" => ((        // line 21
$context["reverseToggle"]) ?? (false))]], ((        // line 23
$context["inputAttributes"]) ?? ([])), true);
        // line 24
        echo "
";
        // line 25
        if (        $this->hasBlock("attr", $context, $blocks)) {
            // line 26
            $context["inputAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 26, $this->source); })()), $this->extensions['craft\web\twig\Extension']->parseAttrFilter((("<div " .             $this->renderBlock("attr", $context, $blocks)) . ">")), true);
        }
        // line 28
        echo "
";
        // line 29
        if ((array_key_exists("name", $context) && (($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 29, $this->source); })())) < 3) || (twig_slice($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 29, $this->source); })()),  -2) != "[]")))) {
            // line 30
            echo "    ";
            echo craft\helpers\Html::hiddenInput((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 30, $this->source); })()), "");
            echo "
";
        }
        // line 32
        echo "
";
        // line 33
        echo craft\helpers\Html::input("checkbox", (($context["name"]) ?? (null)), (($context["value"]) ?? (1)), (isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 33, $this->source); })()));
        echo "

<label for=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "
    ";
        // line 37
        if ((($context["info"]) ?? (null))) {
            // line 38
            echo "        <span class=\"info\">";
            echo $this->extensions['craft\web\twig\Extension']->markdownFilter((isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 38, $this->source); })()));
            echo "</span>
    ";
        }
        // line 40
        echo "</label>

";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_0_);
        craft\helpers\Template::endProfile("template", "_includes/forms/checkbox");
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkbox";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 1,  106 => 40,  100 => 38,  98 => 37,  94 => 36,  90 => 35,  85 => 33,  82 => 32,  76 => 30,  74 => 29,  71 => 28,  68 => 26,  66 => 25,  63 => 24,  61 => 23,  60 => 21,  59 => 20,  58 => 17,  57 => 16,  56 => 14,  55 => 13,  54 => 12,  53 => 9,  52 => 8,  51 => 7,  50 => 6,  47 => 5,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- apply spaceless %}

{% set id = id ?? \"checkbox#{random()}\" %}
{% set label = checkboxLabel ?? label ?? null %}

{% set inputAttributes = {
    id: id,
    class: (class ?? [])|explodeClass|merge([
        (toggle ?? reverseToggle ?? false) ? 'fieldtoggle' : null,
        'checkbox'
    ]|filter),
    checked: (checked ?? false) and checked,
    autofocus: (autofocus ?? false) and not craft.app.request.isMobileBrowser(true),
    disabled: (disabled ?? false) ? true : false,
    aria: {
        labelledby: labelledBy ?? false,
        describedby: describedBy ?? false,
    },
    data: {
        target: toggle ?? false,
        'reverse-target': reverseToggle ?? false,
    }
}|merge(inputAttributes ?? [], recursive=true) %}

{% if block('attr') is defined %}
    {%- set inputAttributes = inputAttributes|merge(('<div ' ~ block('attr') ~ '>')|parseAttr, recursive=true) %}
{% endif %}

{% if name is defined and (name|length < 3 or name|slice(-2) != '[]') %}
    {{ hiddenInput(name, '') }}
{% endif %}

{{ input('checkbox', name ?? null, value ?? 1, inputAttributes) }}

<label for=\"{{ id }}\">
    {{ label }}
    {% if info ?? null %}
        <span class=\"info\">{{ info|md|raw }}</span>
    {% endif %}
</label>

{% endapply -%}
", "_includes/forms/checkbox", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms/checkbox.twig");
    }
}
