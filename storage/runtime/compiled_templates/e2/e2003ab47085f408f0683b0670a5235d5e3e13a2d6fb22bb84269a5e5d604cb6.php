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

/* _includes/forms/button */
class __TwigTemplate_dcfa1bacaecb71d8f9d508bf8fd39171cff3902c5eaf3dd04ab0def37fcfac60 extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/button");
        // line 1
        $context["spinner"] = (($context["spinner"]) ?? (false));
        // line 2
        $context["label"] = (($context["label"]) ?? (null));
        // line 3
        $context["attributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["type" => ((        // line 4
$context["type"]) ?? ("button")), "id" => ((        // line 5
$context["id"]) ?? (false)), "class" => $this->extensions['craft\web\twig\Extension']->mergeFilter(craft\helpers\Html::explodeClass(((        // line 6
$context["class"]) ?? ([]))), $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => "btn", 1 => (( !        // line 8
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 8, $this->source); })())) ? ("btn-empty") : (null))]))], ((        // line 10
$context["attributes"]) ?? ([])));
        // line 12
        ob_start();
        // line 13
        echo "    ";
        ob_start();
        // line 14
        echo "        ";
        echo (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 14, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->tagFunction("div", ["class" => "label", "text" =>         // line 16
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 16, $this->source); })())])) : (""));
        // line 17
        echo "
        ";
        // line 18
        if ((isset($context["spinner"]) || array_key_exists("spinner", $context) ? $context["spinner"] : (function () { throw new RuntimeError('Variable "spinner" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "            <div class=\"spinner spinner-absolute\"></div>
        ";
        }
        // line 21
        echo "    ";
        echo craft\helpers\Html::tag("button", ob_get_clean(),         // line 13
(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 13, $this->source); })()));
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo twig_spaceless($___internal_parse_1_);
        craft\helpers\Template::endProfile("template", "_includes/forms/button");
    }

    public function getTemplateName()
    {
        return "_includes/forms/button";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  69 => 13,  67 => 21,  63 => 19,  61 => 18,  58 => 17,  56 => 16,  54 => 14,  51 => 13,  49 => 12,  47 => 10,  46 => 8,  45 => 6,  44 => 5,  43 => 4,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set spinner = spinner ?? false -%}
{% set label = label ?? null %}
{% set attributes = {
    type: type ?? 'button',
    id: id ?? false,
    class: (class ?? [])|explodeClass|merge([
        'btn',
        not label ? 'btn-empty' : null,
    ]|filter),
}|merge(attributes ?? {}) -%}

{% apply spaceless %}
    {% tag 'button' with attributes %}
        {{ label ? tag('div', {
            class: 'label',
            text: label,
        }) }}
        {% if spinner %}
            <div class=\"spinner spinner-absolute\"></div>
        {% endif %}
    {% endtag %}
{% endapply -%}
", "_includes/forms/button", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms/button.twig");
    }
}
