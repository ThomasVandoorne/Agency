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

/* settings/categories/_edit.twig */
class __TwigTemplate_b070611302bb3d79c74e53e723e9ab5c1a403ffd6f9789c96465efea98e055f3 extends Template
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
        craft\helpers\Template::beginProfile("template", "settings/categories/_edit.twig");
        // line 3
        $context["fullPageForm"] = true;
        // line 5
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "settings/categories/_edit.twig", 5)->unwrap();
        // line 7
        $context["headlessMode"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 7, $this->source); })()), "app", []), "config", []), "general", []), "headlessMode", []);
        // line 130
        if ((isset($context["brandNewGroup"]) || array_key_exists("brandNewGroup", $context) ? $context["brandNewGroup"] : (function () { throw new RuntimeError('Variable "brandNewGroup" does not exist.', 130, $this->source); })())) {
            // line 131
            ob_start();
            // line 132
            echo "        new Craft.HandleGenerator('#name', '#handle');

        ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 134, $this->source); })()), "app", []), "sites", []), "getAllSites", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 135
                echo "            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "handle", []), "html", null, true);
                echo "\"] textarea[name\$=\"[uriFormat]\"]', { suffix: '/{slug}' });
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"";
                // line 136
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "handle", []), "html", null, true);
                echo "\"] textarea[name\$=\"[template]\"]', { suffix: '/_category' });
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "    ";
            craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        }
        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/categories/_edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "settings/categories/_edit.twig");
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 11
        echo "    ";
        echo craft\helpers\Html::actionInput("categories/save-group");
        echo "
    ";
        // line 12
        echo craft\helpers\Html::redirectInput("settings/categories");
        echo "

    ";
        // line 14
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new RuntimeError('Variable "categoryGroup" does not exist.', 14, $this->source); })()), "id", [])) {
            echo craft\helpers\Html::hiddenInput("groupId", craft\helpers\Template::attribute($this->env, $this->source, (isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new RuntimeError('Variable "categoryGroup" does not exist.', 14, $this->source); })()), "id", []));
        }
        // line 15
        echo "
    ";
        // line 16
        echo twig_call_macro($macros["forms"], "macro_textField", [["first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What this category group will be called in the control panel.", "app"), "id" => "name", "name" => "name", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 22
(isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new RuntimeError('Variable "categoryGroup" does not exist.', 22, $this->source); })()), "name", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 23
(isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new RuntimeError('Variable "categoryGroup" does not exist.', 23, $this->source); })()), "getErrors", [0 => "name"], "method"), "autofocus" => true, "required" => true]], 16, $context, $this->getSourceContext());
        // line 26
        echo "

    ";
        // line 28
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("How you’ll refer to this category group in the templates.", "app"), "id" => "handle", "name" => "handle", "class" => "code", "autocorrect" => false, "autocapitalize" => false, "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 36
(isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new RuntimeError('Variable "categoryGroup" does not exist.', 36, $this->source); })()), "handle", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 37
(isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new RuntimeError('Variable "categoryGroup" does not exist.', 37, $this->source); })()), "getErrors", [0 => "handle"], "method"), "required" => true]], 28, $context, $this->getSourceContext());
        // line 39
        echo "

    ";
        // line 41
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Max Levels", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The maximum number of levels this category group can have. Leave blank if you don’t care.", "app"), "id" => "maxLevels", "name" => "maxLevels", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 46
(isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new RuntimeError('Variable "categoryGroup" does not exist.', 46, $this->source); })()), "maxLevels", []), "size" => 5, "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 48
(isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new RuntimeError('Variable "categoryGroup" does not exist.', 48, $this->source); })()), "getErrors", [0 => "maxLevels"], "method")]], 41, $context, $this->getSourceContext());
        // line 49
        echo "

    ";
        // line 51
        echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Default {type} Placement", "app", ["type" => $this->extensions['craft\web\twig\Extension']->translateFilter("Category", "app")]), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Where new {type} should be placed by default in the structure.", "app", ["type" => $this->extensions['craft\web\twig\Extension']->translateFilter("categories", "app")]), "id" => "default-placement", "name" => "defaultPlacement", "options" => [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Before other {type}", "app", ["type" => $this->extensions['craft\web\twig\Extension']->translateFilter("categories", "app")]), "value" => "beginning"], 1 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("After other {type}", "app", ["type" => $this->extensions['craft\web\twig\Extension']->translateFilter("categories", "app")]), "value" => "end"]], "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 60
(isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new RuntimeError('Variable "categoryGroup" does not exist.', 60, $this->source); })()), "defaultPlacement", [])]], 51, $context, $this->getSourceContext());
        // line 61
        echo "

    <hr>

    ";
        // line 65
        $context["siteRows"] = [];
        // line 66
        echo "    ";
        $context["siteErrors"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new RuntimeError('Variable "categoryGroup" does not exist.', 66, $this->source); })()), "getErrors", [0 => "siteSettings"], "method");
        // line 67
        echo "
    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 68, $this->source); })()), "app", []), "sites", []), "getAllSites", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 69
            echo "        ";
            $context["siteSettings"] = (((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, ($context["categoryGroup"] ?? null), "siteSettings", [], "any", false, true), craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "id", []), [], "array", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, ($context["categoryGroup"] ?? null), "siteSettings", [], "any", false, true), craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "id", []), [], "array")))) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, ($context["categoryGroup"] ?? null), "siteSettings", [], "any", false, true), craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "id", []), [], "array")) : (null));
            // line 70
            echo "        ";
            if ((isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 70, $this->source); })())) {
                // line 71
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 71, $this->source); })()), "getErrors", [], "method"));
                foreach ($context['_seq'] as $context["attribute"] => $context["errors"]) {
                    // line 72
                    echo "                ";
                    $context["siteErrors"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["siteErrors"]) || array_key_exists("siteErrors", $context) ? $context["siteErrors"] : (function () { throw new RuntimeError('Variable "siteErrors" does not exist.', 72, $this->source); })()), $context["errors"]);
                    // line 73
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['errors'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "        ";
            }
            // line 75
            echo "        ";
            $context["siteRows"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["siteRows"]) || array_key_exists("siteRows", $context) ? $context["siteRows"] : (function () { throw new RuntimeError('Variable "siteRows" does not exist.', 75, $this->source); })()), [craft\helpers\Template::attribute($this->env, $this->source,             // line 76
$context["site"], "handle", []) => ["heading" => twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source,             // line 77
$context["site"], "name", []), "site")), "uriFormat" => ["value" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 79
($context["siteSettings"] ?? null), "uriFormat", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "uriFormat", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "uriFormat", [])) : (null)), "hasErrors" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 80
($context["siteSettings"] ?? null), "hasErrors", [0 => "uriFormat"], "method", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "hasErrors", [0 => "uriFormat"], "method")))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "hasErrors", [0 => "uriFormat"], "method")) : (false))], "template" => (( !            // line 82
(isset($context["headlessMode"]) || array_key_exists("headlessMode", $context) ? $context["headlessMode"] : (function () { throw new RuntimeError('Variable "headlessMode" does not exist.', 82, $this->source); })())) ? (["value" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 83
($context["siteSettings"] ?? null), "template", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "template", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "template", [])) : (null)), "hasErrors" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 84
($context["siteSettings"] ?? null), "hasErrors", [0 => "template"], "method", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "hasErrors", [0 => "template"], "method")))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "hasErrors", [0 => "template"], "method")) : (false))]) : (""))]]);
            // line 88
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
    ";
        // line 90
        echo twig_call_macro($macros["forms"], "macro_editableTableField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Site Settings", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Configure the category group’s site-specific settings.", "app"), "id" => "sites", "name" => "sites", "cols" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, ["heading" => ["type" => "heading", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Site", "app"), "class" => "thin"], "uriFormat" => ["type" => "singleline", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Category URI Format", "app"), "info" => $this->extensions['craft\web\twig\Extension']->translateFilter("What category URIs should look like for the site.", "app"), "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("Leave blank if categories don’t have URLs", "app"), "code" => true], "template" => (( !        // line 108
(isset($context["headlessMode"]) || array_key_exists("headlessMode", $context) ? $context["headlessMode"] : (function () { throw new RuntimeError('Variable "headlessMode" does not exist.', 108, $this->source); })())) ? (["type" => "template", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Template", "app"), "info" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which template should be loaded when a category’s URL is requested.", "app"), "code" => true]) : (""))]), "rows" =>         // line 115
(isset($context["siteRows"]) || array_key_exists("siteRows", $context) ? $context["siteRows"] : (function () { throw new RuntimeError('Variable "siteRows" does not exist.', 115, $this->source); })()), "allowAdd" => false, "allowDelete" => false, "allowReorder" => false, "errors" => array_unique(        // line 119
(isset($context["siteErrors"]) || array_key_exists("siteErrors", $context) ? $context["siteErrors"] : (function () { throw new RuntimeError('Variable "siteErrors" does not exist.', 119, $this->source); })()))]], 90, $context, $this->getSourceContext());
        // line 120
        echo "

    <hr>

    ";
        // line 124
        echo twig_call_macro($macros["forms"], "macro_fieldLayoutDesignerField", [["fieldLayout" => craft\helpers\Template::attribute($this->env, $this->source,         // line 125
(isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new RuntimeError('Variable "categoryGroup" does not exist.', 125, $this->source); })()), "getFieldLayout", [], "method")]], 124, $context, $this->getSourceContext());
        // line 126
        echo "
";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "settings/categories/_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 126,  205 => 125,  204 => 124,  198 => 120,  196 => 119,  195 => 115,  194 => 108,  193 => 90,  190 => 89,  184 => 88,  182 => 84,  181 => 83,  180 => 82,  179 => 80,  178 => 79,  177 => 77,  176 => 76,  174 => 75,  171 => 74,  165 => 73,  162 => 72,  157 => 71,  154 => 70,  151 => 69,  147 => 68,  144 => 67,  141 => 66,  139 => 65,  133 => 61,  131 => 60,  130 => 51,  126 => 49,  124 => 48,  123 => 46,  122 => 41,  118 => 39,  116 => 37,  115 => 36,  114 => 28,  110 => 26,  108 => 23,  107 => 22,  106 => 16,  103 => 15,  99 => 14,  94 => 12,  89 => 11,  84 => 10,  78 => 1,  74 => 138,  66 => 136,  61 => 135,  57 => 134,  53 => 132,  51 => 131,  49 => 130,  47 => 7,  45 => 5,  43 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}

{% set fullPageForm = true %}

{% import \"_includes/forms\" as forms %}

{% set headlessMode = craft.app.config.general.headlessMode %}


{% block content %}
    {{ actionInput('categories/save-group') }}
    {{ redirectInput('settings/categories') }}

    {% if categoryGroup.id %}{{ hiddenInput('groupId', categoryGroup.id) }}{% endif %}

    {{ forms.textField({
        first: true,
        label: \"Name\"|t('app'),
        instructions: \"What this category group will be called in the control panel.\"|t('app'),
        id: 'name',
        name: 'name',
        value: categoryGroup.name,
        errors: categoryGroup.getErrors('name'),
        autofocus: true,
        required: true,
    }) }}

    {{ forms.textField({
        label: \"Handle\"|t('app'),
        instructions: \"How you’ll refer to this category group in the templates.\"|t('app'),
        id: 'handle',
        name: 'handle',
        class: 'code',
        autocorrect: false,
        autocapitalize: false,
        value: categoryGroup.handle,
        errors: categoryGroup.getErrors('handle'),
        required: true
    }) }}

    {{ forms.textField({
        label: \"Max Levels\"|t('app'),
        instructions: \"The maximum number of levels this category group can have. Leave blank if you don’t care.\"|t('app'),
        id: 'maxLevels',
        name: 'maxLevels',
        value: categoryGroup.maxLevels,
        size: 5,
        errors: categoryGroup.getErrors('maxLevels')
    }) }}

    {{ forms.selectField({
        label: 'Default {type} Placement'|t('app', {type: 'Category'|t('app')}),
        instructions: 'Where new {type} should be placed by default in the structure.'|t('app', {type: 'categories'|t('app')}),
        id: 'default-placement',
        name: 'defaultPlacement',
        options: [
            {label: 'Before other {type}'|t('app', {type: 'categories'|t('app')}), value: 'beginning'},
            {label: 'After other {type}'|t('app', {type: 'categories'|t('app')}), value: 'end'},
        ],
        value: categoryGroup.defaultPlacement,
    }) }}

    <hr>

    {% set siteRows = [] %}
    {% set siteErrors = categoryGroup.getErrors('siteSettings') %}

    {% for site in craft.app.sites.getAllSites() %}
        {% set siteSettings = categoryGroup.siteSettings[site.id] ?? null %}
        {% if siteSettings %}
            {% for attribute, errors in siteSettings.getErrors() %}
                {% set siteErrors = siteErrors|merge(errors) %}
            {% endfor %}
        {% endif %}
        {% set siteRows = siteRows|merge({
            (site.handle): {
                heading: site.name|t('site')|e,
                uriFormat: {
                    value: siteSettings.uriFormat ?? null,
                    hasErrors: siteSettings.hasErrors('uriFormat') ?? false
                },
                template: not headlessMode ? {
                    value: siteSettings.template ?? null,
                    hasErrors: siteSettings.hasErrors('template') ?? false,
                }
            }
        }) %}
    {% endfor %}

    {{ forms.editableTableField({
        label: \"Site Settings\"|t('app'),
        instructions: \"Configure the category group’s site-specific settings.\"|t('app'),
        id: 'sites',
        name: 'sites',
        cols: {
            heading: {
                type: 'heading',
                heading: \"Site\"|t('app'),
                class: 'thin'
            },
            uriFormat: {
                type: 'singleline',
                heading: \"Category URI Format\"|t('app'),
                info: \"What category URIs should look like for the site.\"|t('app'),
                placeholder: \"Leave blank if categories don’t have URLs\"|t('app'),
                code: true
            },
            template: not headlessMode ? {
                type: 'template',
                heading: \"Template\"|t('app'),
                info: \"Which template should be loaded when a category’s URL is requested.\"|t('app'),
                code: true
            },
        }|filter,
        rows: siteRows,
        allowAdd: false,
        allowDelete: false,
        allowReorder: false,
        errors: siteErrors|unique
    }) }}

    <hr>

    {{ forms.fieldLayoutDesignerField({
        fieldLayout: categoryGroup.getFieldLayout(),
    }) }}
{% endblock %}


{% if brandNewGroup %}
    {% js %}
        new Craft.HandleGenerator('#name', '#handle');

        {% for site in craft.app.sites.getAllSites() %}
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"{{ site.handle }}\"] textarea[name\$=\"[uriFormat]\"]', { suffix: '/{slug}' });
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"{{ site.handle }}\"] textarea[name\$=\"[template]\"]', { suffix: '/_category' });
        {% endfor %}
    {% endjs %}
{% endif %}
", "settings/categories/_edit.twig", "/var/www/html/vendor/craftcms/cms/src/templates/settings/categories/_edit.twig");
    }
}
