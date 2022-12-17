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

/* settings/globals/_edit.twig */
class __TwigTemplate_86715f79f8ca1fdf0a91c29d2d6bf3a891ecd586e747efad4568f494ee4c0c88 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "settings/globals/_edit.twig");
        // line 2
        $context["fullPageForm"] = true;
        // line 4
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "settings/globals/_edit.twig", 4)->unwrap();
        // line 46
        if ( !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new RuntimeError('Variable "globalSet" does not exist.', 46, $this->source); })()), "handle", [])) {
            // line 47
            ob_start();
            // line 48
            echo "        new Craft.HandleGenerator('#name', '#handle');
    ";
            craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        }
        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/globals/_edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "settings/globals/_edit.twig");
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 8
        echo "    ";
        echo craft\helpers\Html::actionInput("globals/save-set");
        echo "
    ";
        // line 9
        echo craft\helpers\Html::redirectInput("settings/globals");
        echo "

    ";
        // line 11
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new RuntimeError('Variable "globalSet" does not exist.', 11, $this->source); })()), "id", [])) {
            echo craft\helpers\Html::hiddenInput("setId", craft\helpers\Template::attribute($this->env, $this->source, (isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new RuntimeError('Variable "globalSet" does not exist.', 11, $this->source); })()), "id", []));
        }
        // line 12
        echo "
    ";
        // line 13
        echo twig_call_macro($macros["forms"], "macro_textField", [["first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What this global set will be called in the control panel.", "app"), "id" => "name", "name" => "name", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 19
(isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new RuntimeError('Variable "globalSet" does not exist.', 19, $this->source); })()), "name", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 20
(isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new RuntimeError('Variable "globalSet" does not exist.', 20, $this->source); })()), "getErrors", [0 => "name"], "method"), "autofocus" => true, "required" => true]], 13, $context, $this->getSourceContext());
        // line 23
        echo "

    ";
        // line 25
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("How you’ll refer to this global set in the templates.", "app"), "id" => "handle", "name" => "handle", "class" => "code", "autocorrect" => false, "autocapitalize" => false, "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 33
(isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new RuntimeError('Variable "globalSet" does not exist.', 33, $this->source); })()), "handle", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 34
(isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new RuntimeError('Variable "globalSet" does not exist.', 34, $this->source); })()), "getErrors", [0 => "handle"], "method"), "required" => true]], 25, $context, $this->getSourceContext());
        // line 36
        echo "

    <hr>

    ";
        // line 40
        echo twig_call_macro($macros["forms"], "macro_fieldLayoutDesignerField", [["fieldLayout" => craft\helpers\Template::attribute($this->env, $this->source,         // line 41
(isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new RuntimeError('Variable "globalSet" does not exist.', 41, $this->source); })()), "getFieldLayout", [], "method")]], 40, $context, $this->getSourceContext());
        // line 42
        echo "
";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "settings/globals/_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 42,  103 => 41,  102 => 40,  96 => 36,  94 => 34,  93 => 33,  92 => 25,  88 => 23,  86 => 20,  85 => 19,  84 => 13,  81 => 12,  77 => 11,  72 => 9,  67 => 8,  62 => 7,  56 => 1,  51 => 48,  49 => 47,  47 => 46,  45 => 4,  43 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}
{% set fullPageForm = true %}

{% import \"_includes/forms\" as forms %}


{% block content %}
    {{ actionInput('globals/save-set') }}
    {{ redirectInput('settings/globals') }}

    {% if globalSet.id %}{{ hiddenInput('setId', globalSet.id) }}{% endif %}

    {{ forms.textField({
        first: true,
        label: \"Name\"|t('app'),
        instructions: \"What this global set will be called in the control panel.\"|t('app'),
        id: 'name',
        name: 'name',
        value: globalSet.name,
        errors: globalSet.getErrors('name'),
        autofocus: true,
        required: true,
    }) }}

    {{ forms.textField({
        label: \"Handle\"|t('app'),
        instructions: \"How you’ll refer to this global set in the templates.\"|t('app'),
        id: 'handle',
        name: 'handle',
        class: 'code',
        autocorrect: false,
        autocapitalize: false,
        value: globalSet.handle,
        errors: globalSet.getErrors('handle'),
        required: true
    }) }}

    <hr>

    {{ forms.fieldLayoutDesignerField({
        fieldLayout: globalSet.getFieldLayout(),
    }) }}
{% endblock %}


{% if not globalSet.handle %}
    {% js %}
        new Craft.HandleGenerator('#name', '#handle');
    {% endjs %}
{% endif %}
", "settings/globals/_edit.twig", "/var/www/html/vendor/craftcms/cms/src/templates/settings/globals/_edit.twig");
    }
}
