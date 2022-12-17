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

/* _components/fieldtypes/PlainText/input.twig */
class __TwigTemplate_62f5c1c3432803b48a471535bfef952c74619b3e759d62f8cb03d446c4df5d90 extends Template
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
        craft\helpers\Template::beginProfile("template", "_components/fieldtypes/PlainText/input.twig");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/PlainText/input.twig", 1)->unwrap();
        // line 3
        $context["class"] = $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => "nicetext", 1 => ((craft\helpers\Template::attribute($this->env, $this->source,         // line 5
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 5, $this->source); })()), "code", [])) ? ("code") : ("")), 2 => (((craft\helpers\Template::attribute($this->env, $this->source,         // line 6
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "uiMode", []) == "enlarged")) ? ("readable") : (""))]);
        // line 8
        echo "
";
        // line 9
        $context["config"] = ["id" => ((        // line 10
$context["id"]) ?? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 10, $this->source); })()), "getInputId", [], "method"))), "describedBy" => craft\helpers\Template::attribute($this->env, $this->source,         // line 11
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 11, $this->source); })()), "describedBy", []), "name" =>         // line 12
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 12, $this->source); })()), "value" =>         // line 13
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()), "class" =>         // line 14
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 14, $this->source); })()), "maxlength" => craft\helpers\Template::attribute($this->env, $this->source,         // line 15
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 15, $this->source); })()), "charLimit", []), "showCharsLeft" => true, "placeholder" => ((craft\helpers\Template::attribute($this->env, $this->source,         // line 17
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 17, $this->source); })()), "placeholder", [])) ? ($this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 17, $this->source); })()), "placeholder", []), "site")) : ("")), "required" => craft\helpers\Template::attribute($this->env, $this->source,         // line 18
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 18, $this->source); })()), "required", []), "rows" => craft\helpers\Template::attribute($this->env, $this->source,         // line 19
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 19, $this->source); })()), "initialRows", []), "orientation" => ((        // line 20
$context["orientation"]) ?? (null))];
        // line 22
        echo "
";
        // line 23
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 23, $this->source); })()), "multiline", [])) {
            // line 24
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_textarea", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })())], 24, $context, $this->getSourceContext());
            echo "
";
        } else {
            // line 26
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_text", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })())], 26, $context, $this->getSourceContext());
            echo "
";
        }
        craft\helpers\Template::endProfile("template", "_components/fieldtypes/PlainText/input.twig");
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/PlainText/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  64 => 24,  62 => 23,  59 => 22,  57 => 20,  56 => 19,  55 => 18,  54 => 17,  53 => 15,  52 => 14,  51 => 13,  50 => 12,  49 => 11,  48 => 10,  47 => 9,  44 => 8,  42 => 6,  41 => 5,  40 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}

{%- set class = [
    'nicetext',
    field.code ? 'code',
    field.uiMode == 'enlarged' ? 'readable',
]|filter %}

{% set config = {
    id: id ?? field.getInputId(),
    describedBy: field.describedBy,
    name: name,
    value: value,
    class: class,
    maxlength: field.charLimit,
    showCharsLeft: true,
    placeholder: field.placeholder ? field.placeholder|t('site'),
    required: field.required,
    rows: field.initialRows,
    orientation: orientation ?? null,
} %}

{% if field.multiline %}
    {{ forms.textarea(config) }}
{% else %}
    {{ forms.text(config) }}
{% endif %}
", "_components/fieldtypes/PlainText/input.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_components/fieldtypes/PlainText/input.twig");
    }
}
