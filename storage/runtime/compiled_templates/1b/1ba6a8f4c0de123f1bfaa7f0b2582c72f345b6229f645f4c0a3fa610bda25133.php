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

/* settings/sections/_entrytypes/edit.twig */
class __TwigTemplate_048685a051a4ab30e02ee52792dd578b29a6d680d810b452fab24782e8123e31 extends Template
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
        craft\helpers\Template::beginProfile("template", "settings/sections/_entrytypes/edit.twig");
        // line 2
        $context["fullPageForm"] = true;
        // line 3
        $context["formActions"] = [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Save and continue editing", "app"), "redirect" => $this->env->getFilter('hash')->getCallable()((("settings/sections/" . craft\helpers\Template::attribute($this->env, $this->source,         // line 6
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 6, $this->source); })()), "id", [])) . "/entrytypes/{id}")), "shortcut" => true, "retainScroll" => true]];
        // line 12
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "settings/sections/_entrytypes/edit.twig", 12)->unwrap();
        // line 122
        if ( !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 122, $this->source); })()), "handle", [])) {
            // line 123
            craft\helpers\Template::js("new Craft.HandleGenerator('#name', '#handle');", ['position' => 3]);
        }
        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/sections/_entrytypes/edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "settings/sections/_entrytypes/edit.twig");
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 16
        echo "    ";
        echo craft\helpers\Html::actionInput("sections/save-entry-type");
        echo "

    ";
        // line 18
        if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 18, $this->source); })()), "type", []) == "single")) {
            // line 19
            echo "        ";
            echo craft\helpers\Html::redirectInput("settings/sections");
            echo "
    ";
        } else {
            // line 21
            echo "        ";
            echo craft\helpers\Html::redirectInput((("settings/sections/" . craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 21, $this->source); })()), "id", [])) . "/entrytypes"));
            echo "
    ";
        }
        // line 23
        echo "    ";
        echo craft\helpers\Html::hiddenInput("sectionId", craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 23, $this->source); })()), "id", []));
        echo "
    ";
        // line 24
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 24, $this->source); })()), "id", [])) {
            echo craft\helpers\Html::hiddenInput("entryTypeId", craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 24, $this->source); })()), "id", []));
        }
        // line 25
        echo "
    ";
        // line 26
        if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 26, $this->source); })()), "type", []) != "single")) {
            // line 27
            echo "        ";
            echo twig_call_macro($macros["forms"], "macro_textField", [["first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What this entry type will be called in the control panel.", "app"), "id" => "name", "name" => "name", "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 33
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 33, $this->source); })()), "name", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,             // line 34
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 34, $this->source); })()), "getErrors", [0 => "name"], "method"), "autofocus" => true, "required" => true]], 27, $context, $this->getSourceContext());
            // line 37
            echo "

        ";
            // line 39
            echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("How you’ll refer to this entry type in the templates.", "app"), "id" => "handle", "name" => "handle", "class" => "code", "autocorrect" => false, "autocapitalize" => false, "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 47
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 47, $this->source); })()), "handle", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,             // line 48
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 48, $this->source); })()), "getErrors", [0 => "handle"], "method"), "required" => true]], 39, $context, $this->getSourceContext());
            // line 50
            echo "

        <hr>

    ";
        }
        // line 55
        echo "
    ";
        // line 56
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["first" => (craft\helpers\Template::attribute($this->env, $this->source,         // line 57
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 57, $this->source); })()), "type", []) == "single"), "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Show the Title field", "app"), "name" => "hasTitleField", "toggle" => "title-container", "reverseToggle" => "#titleFormat-container, .fld-title-field-icon", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 62
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 62, $this->source); })()), "hasTitleField", [])]], 56, $context, $this->getSourceContext());
        // line 63
        echo "

    ";
        // line 65
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 65, $this->source); })()), "app", []), "getIsMultiSite", [], "method")) {
            // line 66
            echo "        <div id=\"title-container\"";
            if ( !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 66, $this->source); })()), "hasTitleField", [])) {
                echo " class=\"hidden\"";
            }
            echo ">
            ";
            // line 67
            echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Title Translation Method", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("How should {type} titles be translated?", "app", ["type" =>             // line 70
(isset($context["lowerTypeName"]) || array_key_exists("lowerTypeName", $context) ? $context["lowerTypeName"] : (function () { throw new RuntimeError('Variable "lowerTypeName" does not exist.', 70, $this->source); })())]), "id" => "translation-method", "name" => "titleTranslationMethod", "options" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => ["value" => "none", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Not translatable", "app")], 1 => ["value" => "site", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site", "app")], 2 => ["value" => "siteGroup", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site group", "app")], 3 => ["value" => "language", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each language", "app")], 4 => ["value" => "custom", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Custom…", "app")]]), "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 81
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 81, $this->source); })()), "titleTranslationMethod", []), "toggle" => true, "targetPrefix" => "translation-method-"]], 67, $context, $this->getSourceContext());
            // line 84
            echo "

            <div id=\"translation-method-custom\" ";
            // line 86
            if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 86, $this->source); })()), "titleTranslationMethod", []) != "custom")) {
                echo "class=\"hidden\"";
            }
            echo ">
                ";
            // line 87
            echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Title Translation Key Format", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Template that defines the Title field’s custom “translation key” format. {type} titles will be copied to all sites that produce the same key. For example, to make titles translatable based on the first two characters of the site handle, you could enter `{site.handle[:2]}`.", "app", ["type" =>             // line 90
(isset($context["typeName"]) || array_key_exists("typeName", $context) ? $context["typeName"] : (function () { throw new RuntimeError('Variable "typeName" does not exist.', 90, $this->source); })())]), "id" => "translation-key-format", "name" => "titleTranslationKeyFormat", "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 94
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 94, $this->source); })()), "titleTranslationKeyFormat", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,             // line 95
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 95, $this->source); })()), "getErrors", [0 => "titleTranslationKeyFormat"], "method")]], 87, $context, $this->getSourceContext());
            // line 96
            echo "
            </div>
        </div>
    ";
        }
        // line 100
        echo "
    <div id=\"titleFormat-container\"";
        // line 101
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 101, $this->source); })()), "hasTitleField", [])) {
            echo " class=\"hidden\"";
        }
        echo ">
        ";
        // line 102
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Title Format", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What the auto-generated entry titles should look like. You can include tags that output entry properties, such as {ex}.", "app", ["ex" => "<code>{myCustomField}</code>"]), "id" => "titleFormat", "name" => "titleFormat", "class" => "code", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 108
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 108, $this->source); })()), "titleFormat", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 109
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 109, $this->source); })()), "getErrors", [0 => "titleFormat"], "method"), "required" => true]], 102, $context, $this->getSourceContext());
        // line 111
        echo "
    </div>

    <hr>

    ";
        // line 116
        echo twig_call_macro($macros["forms"], "macro_fieldLayoutDesignerField", [["fieldLayout" => craft\helpers\Template::attribute($this->env, $this->source,         // line 117
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new RuntimeError('Variable "entryType" does not exist.', 117, $this->source); })()), "getFieldLayout", [], "method")]], 116, $context, $this->getSourceContext());
        // line 118
        echo "
";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "settings/sections/_entrytypes/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 118,  186 => 117,  185 => 116,  178 => 111,  176 => 109,  175 => 108,  174 => 102,  168 => 101,  165 => 100,  159 => 96,  157 => 95,  156 => 94,  155 => 90,  154 => 87,  148 => 86,  144 => 84,  142 => 81,  141 => 70,  140 => 67,  133 => 66,  131 => 65,  127 => 63,  125 => 62,  124 => 57,  123 => 56,  120 => 55,  113 => 50,  111 => 48,  110 => 47,  109 => 39,  105 => 37,  103 => 34,  102 => 33,  100 => 27,  98 => 26,  95 => 25,  91 => 24,  86 => 23,  80 => 21,  74 => 19,  72 => 18,  66 => 16,  61 => 15,  55 => 1,  52 => 123,  50 => 122,  48 => 12,  46 => 6,  45 => 3,  43 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}
{% set fullPageForm = true %}
{% set formActions = [
    {
        label: 'Save and continue editing'|t('app'),
        redirect: \"settings/sections/#{section.id}/entrytypes/{id}\"|hash,
        shortcut: true,
        retainScroll: true,
    },
] %}

{% import \"_includes/forms\" as forms %}


{% block content %}
    {{ actionInput('sections/save-entry-type') }}

    {% if section.type == 'single' %}
        {{ redirectInput('settings/sections') }}
    {% else %}
        {{ redirectInput('settings/sections/'~section.id~'/entrytypes') }}
    {% endif %}
    {{ hiddenInput('sectionId', section.id) }}
    {% if entryType.id %}{{ hiddenInput('entryTypeId', entryType.id) }}{% endif %}

    {% if section.type != 'single' %}
        {{ forms.textField({
            first: true,
            label: \"Name\"|t('app'),
            instructions: \"What this entry type will be called in the control panel.\"|t('app'),
            id: 'name',
            name: 'name',
            value: entryType.name,
            errors: entryType.getErrors('name'),
            autofocus: true,
            required: true
        }) }}

        {{ forms.textField({
            label: \"Handle\"|t('app'),
            instructions: \"How you’ll refer to this entry type in the templates.\"|t('app'),
            id: 'handle',
            name: 'handle',
            class: 'code',
            autocorrect: false,
            autocapitalize: false,
            value: entryType.handle,
            errors: entryType.getErrors('handle'),
            required: true
        }) }}

        <hr>

    {% endif %}

    {{ forms.checkboxField({
        first: (section.type == 'single'),
        label: \"Show the Title field\"|t('app'),
        name: 'hasTitleField',
        toggle: 'title-container',
        reverseToggle: '#titleFormat-container, .fld-title-field-icon',
        checked: entryType.hasTitleField
    }) }}

    {% if craft.app.getIsMultiSite() %}
        <div id=\"title-container\"{% if not entryType.hasTitleField %} class=\"hidden\"{% endif %}>
            {{ forms.selectField({
                label: 'Title Translation Method'|t('app'),
                instructions: 'How should {type} titles be translated?'|t('app', {
                    type: lowerTypeName,
                }),
                id: 'translation-method',
                name: 'titleTranslationMethod',
                options: [
                    { value: 'none', label: 'Not translatable'|t('app') },
                    { value: 'site', label: 'Translate for each site'|t('app') },
                    { value: 'siteGroup', label: 'Translate for each site group'|t('app') },
                    { value: 'language', label: 'Translate for each language'|t('app') },
                    { value: 'custom', label: 'Custom…'|t('app') },
                ]|filter,
                value: entryType.titleTranslationMethod,
                toggle: true,
                targetPrefix: 'translation-method-'
            }) }}

            <div id=\"translation-method-custom\" {% if entryType.titleTranslationMethod != 'custom' %}class=\"hidden\"{% endif %}>
                {{ forms.textField({
                    label: 'Title Translation Key Format'|t('app'),
                    instructions: 'Template that defines the Title field’s custom “translation key” format. {type} titles will be copied to all sites that produce the same key. For example, to make titles translatable based on the first two characters of the site handle, you could enter `{site.handle[:2]}`.'|t('app', {
                        type: typeName,
                    }),
                    id: 'translation-key-format',
                    name: 'titleTranslationKeyFormat',
                    value: entryType.titleTranslationKeyFormat,
                    errors: entryType.getErrors('titleTranslationKeyFormat')
                }) }}
            </div>
        </div>
    {% endif %}

    <div id=\"titleFormat-container\"{% if entryType.hasTitleField %} class=\"hidden\"{% endif %}>
        {{ forms.textField({
            label: \"Title Format\"|t('app'),
            instructions: \"What the auto-generated entry titles should look like. You can include tags that output entry properties, such as {ex}.\"|t('app', { ex: '<code>{myCustomField}</code>' }),
            id: 'titleFormat',
            name: 'titleFormat',
            class: 'code',
            value: entryType.titleFormat,
            errors: entryType.getErrors('titleFormat'),
            required: true
        }) }}
    </div>

    <hr>

    {{ forms.fieldLayoutDesignerField({
        fieldLayout: entryType.getFieldLayout(),
    }) }}
{% endblock %}


{% if not entryType.handle %}
    {% js \"new Craft.HandleGenerator('#name', '#handle');\" %}
{% endif %}
", "settings/sections/_entrytypes/edit.twig", "/var/www/html/vendor/craftcms/cms/src/templates/settings/sections/_entrytypes/edit.twig");
    }
}
