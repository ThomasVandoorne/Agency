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

/* settings/fields/_edit.twig */
class __TwigTemplate_37a00f6c2fce288b6cfc242b280194c969f29ced885bf10849c25e92644ecae3 extends Template
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
        craft\helpers\Template::beginProfile("template", "settings/fields/_edit.twig");
        // line 2
        $context["fullPageForm"] = true;
        // line 3
        $context["formActions"] = $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Save and continue editing", "app"), "redirect" => $this->env->getFilter('hash')->getCallable()("settings/fields/edit/{id}"), "shortcut" => true, "retainScroll" => true], 1 => ((((        // line 10
$context["fieldId"]) ?? (false))) ? (["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "action" => "fields/delete-field", "redirect" => $this->env->getFilter('hash')->getCallable()("settings/fields"), "destructive" => true, "confirm" => $this->extensions['craft\web\twig\Extension']->translateFilter("Are you sure you want to delete “{name}”?", "app", ["name" => craft\helpers\Template::attribute($this->env, $this->source,         // line 16
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 16, $this->source); })()), "name", [])])]) : (""))]);
        // line 21
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "settings/fields/_edit.twig", 21)->unwrap();
        // line 150
        if ((twig_test_empty((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 150, $this->source); })())) || twig_test_empty(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 150, $this->source); })()), "handle", [])))) {
            // line 151
            ob_start();
            // line 152
            echo "        new Craft.HandleGenerator('#name', '#handle');
    ";
            craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        }
        // line 156
        ob_start();
        // line 157
        echo "    Craft.supportedTranslationMethods = ";
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["supportedTranslationMethods"]) || array_key_exists("supportedTranslationMethods", $context) ? $context["supportedTranslationMethods"] : (function () { throw new RuntimeError('Variable "supportedTranslationMethods" does not exist.', 157, $this->source); })()));
        echo ";

    Craft.updateTranslationMethodSettings = function(type, container) {
        var \$container = \$(container);
        if (!Craft.supportedTranslationMethods[type] || Craft.supportedTranslationMethods[type].length == 1) {
            \$container.addClass('hidden');
        } else {
            \$container.removeClass('hidden');
            // Rebuild the options based on the field type's supported translation methods
            \$container.find('select').html(
                (\$.inArray('none', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"none\">";
        // line 167
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Not translatable", "app"), "js"), "html", null, true);
        echo "</option>' : '') +
                (\$.inArray('site', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"site\">";
        // line 168
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site", "app"), "js"), "html", null, true);
        echo "</option>' : '') +
                (\$.inArray('siteGroup', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"siteGroup\">";
        // line 169
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site group", "app"), "js"), "html", null, true);
        echo "</option>' : '') +
                (\$.inArray('language', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"language\">";
        // line 170
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each language", "app"), "js"), "html", null, true);
        echo "</option>' : '') +
                (\$.inArray('custom', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"custom\">";
        // line 171
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Custom…", "app"), "js"), "html", null, true);
        echo "</option>' : '')
            );
        }
    }

    var \$fieldTypeInput = \$(\"#";
        // line 176
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getFilter('namespaceInputId')->getCallable()("type"), "js"), "html", null, true);
        echo "\"),
        \$translationSettings = \$(\"#";
        // line 177
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getFilter('namespaceInputId')->getCallable()("translation-settings"), "js"), "html", null, true);
        echo "\");

    \$fieldTypeInput.change(function(e) {
        Craft.updateTranslationMethodSettings(\$(this).val(), \$translationSettings);
    });
";
        craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/fields/_edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "settings/fields/_edit.twig");
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 24
        echo "    ";
        echo craft\helpers\Html::actionInput("fields/save-field");
        echo "
    ";
        // line 25
        echo craft\helpers\Html::redirectInput("settings/fields/{groupId}");
        echo "
    ";
        // line 26
        if ((array_key_exists("fieldId", $context) && (isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new RuntimeError('Variable "fieldId" does not exist.', 26, $this->source); })()))) {
            // line 27
            echo "        ";
            echo craft\helpers\Html::hiddenInput("fieldId", (isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new RuntimeError('Variable "fieldId" does not exist.', 27, $this->source); })()));
            echo "
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        echo twig_call_macro($macros["forms"], "macro_selectField", [["first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Group", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which group should this field be displayed in?", "app"), "id" => "group", "name" => "group", "options" =>         // line 36
(isset($context["groupOptions"]) || array_key_exists("groupOptions", $context) ? $context["groupOptions"] : (function () { throw new RuntimeError('Variable "groupOptions" does not exist.', 36, $this->source); })()), "value" =>         // line 37
(isset($context["groupId"]) || array_key_exists("groupId", $context) ? $context["groupId"] : (function () { throw new RuntimeError('Variable "groupId" does not exist.', 37, $this->source); })()), "required" => true, "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 39
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 39, $this->source); })()), "getErrors", [0 => "groupId"], "method")]], 30, $context, $this->getSourceContext());
        // line 40
        echo "

    ";
        // line 42
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What this field will be called in the control panel.", "app"), "id" => "name", "name" => "name", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 47
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 47, $this->source); })()), "name", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 48
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 48, $this->source); })()), "getErrors", [0 => "name"], "method"), "required" => true, "autofocus" => true]], 42, $context, $this->getSourceContext());
        // line 51
        echo "

    ";
        // line 53
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("How you’ll refer to this field in the templates.", "app"), "id" => "handle", "name" => "handle", "class" => "code", "autocorrect" => false, "autocapitalize" => false, "maxlength" => 64, "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 62
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 62, $this->source); })()), "handle", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 63
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 63, $this->source); })()), "getErrors", [0 => "handle"], "method"), "required" => true]], 53, $context, $this->getSourceContext());
        // line 65
        echo "

    ";
        // line 67
        echo twig_call_macro($macros["forms"], "macro_textareaField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Default Instructions", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Helper text to guide the author.", "app"), "id" => "instructions", "class" => "nicetext", "name" => "instructions", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 73
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 73, $this->source); })()), "instructions", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 74
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 74, $this->source); })()), "getErrors", [0 => "instructions"], "method")]], 67, $context, $this->getSourceContext());
        // line 75
        echo "

    ";
        // line 77
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Use this field’s values as search keywords", "app"), "id" => "searchable", "name" => "searchable", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 81
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 81, $this->source); })()), "searchable", [])]], 77, $context, $this->getSourceContext());
        // line 82
        echo "

    ";
        // line 84
        echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Field Type", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What type of field is this?", "app"), "warning" => ((( !twig_test_empty(        // line 87
(isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new RuntimeError('Variable "fieldId" does not exist.', 87, $this->source); })())) &&  !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 87, $this->source); })()), "hasErrors", [0 => "type"], "method"))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "app")) : ("")), "id" => "type", "name" => "type", "options" =>         // line 90
(isset($context["fieldTypeOptions"]) || array_key_exists("fieldTypeOptions", $context) ? $context["fieldTypeOptions"] : (function () { throw new RuntimeError('Variable "fieldTypeOptions" does not exist.', 90, $this->source); })()), "value" => (($this->env->getTest('missing')->getCallable()(        // line 91
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 91, $this->source); })()))) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 91, $this->source); })()), "expectedType", [])) : (get_class((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 91, $this->source); })())))), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 92
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 92, $this->source); })()), "getErrors", [0 => "type"], "method")]], 84, $context, $this->getSourceContext());
        // line 93
        echo "

    ";
        // line 95
        echo (isset($context["missingFieldPlaceholder"]) || array_key_exists("missingFieldPlaceholder", $context) ? $context["missingFieldPlaceholder"] : (function () { throw new RuntimeError('Variable "missingFieldPlaceholder" does not exist.', 95, $this->source); })());
        echo "

    ";
        // line 97
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 97, $this->source); })()), "app", []), "getIsMultiSite", [], "method")) {
            // line 98
            echo "        ";
            $context["translationMethods"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 98, $this->source); })()), "supportedTranslationMethods", []);
            // line 99
            echo "        ";
            if (($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 99, $this->source); })())) > 1)) {
                // line 100
                echo "            <div id=\"translation-settings\">
                ";
                // line 101
                echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Method", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("How should this field’s values be translated?", "app"), "id" => "translation-method", "name" => "translationMethod", "options" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => ((twig_in_filter("none",                 // line 107
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 107, $this->source); })()))) ? (["value" => "none", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Not translatable", "app")]) : ("")), 1 => ((twig_in_filter("site",                 // line 108
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 108, $this->source); })()))) ? (["value" => "site", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site", "app")]) : ("")), 2 => ((twig_in_filter("siteGroup",                 // line 109
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 109, $this->source); })()))) ? (["value" => "siteGroup", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site group", "app")]) : ("")), 3 => ((twig_in_filter("language",                 // line 110
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 110, $this->source); })()))) ? (["value" => "language", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each language", "app")]) : ("")), 4 => ((twig_in_filter("custom",                 // line 111
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 111, $this->source); })()))) ? (["value" => "custom", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Custom…", "app")]) : (""))]), "value" => craft\helpers\Template::attribute($this->env, $this->source,                 // line 113
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 113, $this->source); })()), "translationMethod", []), "toggle" => true, "targetPrefix" => "translation-method-"]], 101, $context, $this->getSourceContext());
                // line 116
                echo "

                ";
                // line 118
                if (twig_in_filter("custom", (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 118, $this->source); })()))) {
                    // line 119
                    echo "                    ";
                    ob_start();
                    // line 123
                    echo "                        ";
                    echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Key Format", "app"), "instructions" => "Template that defines the field’s custom “translation key” format. Field values will be copied to all sites that produce the same key. For example, to make the field translatable based on the first two characters of the site handle, you could enter `{site.handle[:2]}`.", "id" => "translation-key-format", "class" => "code", "name" => "translationKeyFormat", "value" => craft\helpers\Template::attribute($this->env, $this->source,                     // line 129
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 129, $this->source); })()), "translationKeyFormat", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,                     // line 130
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 130, $this->source); })()), "getErrors", [0 => "translationKeyFormat"], "method")]], 123, $context, $this->getSourceContext());
                    // line 131
                    echo "
                    ";
                    echo craft\helpers\Html::tag("div", ob_get_clean(), ["id" => "translation-method-custom", "class" => (((craft\helpers\Template::attribute($this->env, $this->source,                     // line 121
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 121, $this->source); })()), "translationMethod", []) != "custom")) ? ("hidden") : (null))]);
                    // line 133
                    echo "                ";
                }
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        // line 137
        echo "
    <hr>

    <div id=\"settings\">
        <div id=\"";
        // line 141
        echo twig_escape_filter($this->env, craft\helpers\Html::id(get_class((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 141, $this->source); })()))), "html", null, true);
        echo "\">
            ";
        // line 142
        $this->loadTemplate("settings/fields/_type-settings", "settings/fields/_edit.twig", 142)->display(twig_array_merge($context, ["namespace" => (("types[" . get_class(        // line 143
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 143, $this->source); })()))) . "]")]));
        // line 145
        echo "        </div>
    </div>
";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "settings/fields/_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 145,  258 => 143,  257 => 142,  253 => 141,  247 => 137,  244 => 136,  240 => 134,  237 => 133,  235 => 121,  232 => 131,  230 => 130,  229 => 129,  227 => 123,  224 => 119,  222 => 118,  218 => 116,  216 => 113,  215 => 111,  214 => 110,  213 => 109,  212 => 108,  211 => 107,  210 => 101,  207 => 100,  204 => 99,  201 => 98,  199 => 97,  194 => 95,  190 => 93,  188 => 92,  187 => 91,  186 => 90,  185 => 87,  184 => 84,  180 => 82,  178 => 81,  177 => 77,  173 => 75,  171 => 74,  170 => 73,  169 => 67,  165 => 65,  163 => 63,  162 => 62,  161 => 53,  157 => 51,  155 => 48,  154 => 47,  153 => 42,  149 => 40,  147 => 39,  146 => 37,  145 => 36,  144 => 30,  141 => 29,  135 => 27,  133 => 26,  129 => 25,  124 => 24,  119 => 23,  113 => 1,  104 => 177,  100 => 176,  92 => 171,  88 => 170,  84 => 169,  80 => 168,  76 => 167,  62 => 157,  60 => 156,  55 => 152,  53 => 151,  51 => 150,  49 => 21,  47 => 16,  46 => 10,  45 => 3,  43 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}
{% set fullPageForm = true %}
{% set formActions = [
    {
        label: 'Save and continue editing'|t('app'),
        redirect: 'settings/fields/edit/{id}'|hash,
        shortcut: true,
        retainScroll: true,
    },
    fieldId ?? false ? {
        label: 'Delete'|t('app'),
        action: 'fields/delete-field',
        redirect: 'settings/fields'|hash,
        destructive: true,
        confirm: 'Are you sure you want to delete “{name}”?'|t('app', {
            name: field.name,
        }),
    },
]|filter %}

{% import \"_includes/forms\" as forms %}

{% block content %}
    {{ actionInput('fields/save-field') }}
    {{ redirectInput('settings/fields/{groupId}') }}
    {% if fieldId is defined and fieldId %}
        {{ hiddenInput('fieldId', fieldId) }}
    {% endif %}

    {{ forms.selectField({
        first: true,
        label: \"Group\"|t('app'),
        instructions: \"Which group should this field be displayed in?\"|t('app'),
        id: 'group',
        name: 'group',
        options: groupOptions,
        value: groupId,
        required: true,
        errors: field.getErrors('groupId'),
    }) }}

    {{ forms.textField({
        label: \"Name\"|t('app'),
        instructions: \"What this field will be called in the control panel.\"|t('app'),
        id: 'name',
        name: 'name',
        value: field.name,
        errors: field.getErrors('name'),
        required: true,
        autofocus: true
    }) }}

    {{ forms.textField({
        label: \"Handle\"|t('app'),
        instructions: \"How you’ll refer to this field in the templates.\"|t('app'),
        id: 'handle',
        name: 'handle',
        class: 'code',
        autocorrect: false,
        autocapitalize: false,
        maxlength: 64,
        value: field.handle,
        errors: field.getErrors('handle'),
        required: true,
    }) }}

    {{ forms.textareaField({
        label: \"Default Instructions\"|t('app'),
        instructions: \"Helper text to guide the author.\"|t('app'),
        id: 'instructions',
        class: 'nicetext',
        name: 'instructions',
        value: field.instructions,
        errors: field.getErrors('instructions'),
    }) }}

    {{ forms.checkboxField({
        label: 'Use this field’s values as search keywords'|t('app'),
        id: 'searchable',
        name: 'searchable',
        checked: field.searchable
    }) }}

    {{ forms.selectField({
        label: \"Field Type\"|t('app'),
        instructions: \"What type of field is this?\"|t('app'),
        warning: (fieldId is not empty and not field.hasErrors('type') ? \"Changing this may result in data loss.\"|t('app')),
        id: 'type',
        name: 'type',
        options: fieldTypeOptions,
        value: field is missing ? field.expectedType : className(field),
        errors: field.getErrors('type'),
    }) }}

    {{ missingFieldPlaceholder|raw }}

    {% if craft.app.getIsMultiSite() %}
        {% set translationMethods = field.supportedTranslationMethods %}
        {% if translationMethods|length > 1 %}
            <div id=\"translation-settings\">
                {{ forms.selectField({
                    label: \"Translation Method\"|t('app'),
                    instructions: \"How should this field’s values be translated?\"|t('app'),
                    id: 'translation-method',
                    name: 'translationMethod',
                    options: [
                        'none' in translationMethods ? { value: 'none', label: \"Not translatable\"|t('app') },
                        'site' in translationMethods ? { value: 'site', label: \"Translate for each site\"|t('app') },
                        'siteGroup' in translationMethods ? { value: 'siteGroup', label: \"Translate for each site group\"|t('app') },
                        'language' in translationMethods ? { value: 'language', label: \"Translate for each language\"|t('app') },
                        'custom' in translationMethods ? { value: 'custom', label: \"Custom…\"|t('app') }
                    ]|filter,
                    value: field.translationMethod,
                    toggle: true,
                    targetPrefix: 'translation-method-'
                }) }}

                {% if 'custom' in translationMethods %}
                    {% tag 'div' with {
                        id: 'translation-method-custom',
                        class: field.translationMethod != 'custom' ? 'hidden' : null,
                    } %}
                        {{ forms.textField({
                            label: \"Translation Key Format\"|t('app'),
                            instructions: \"Template that defines the field’s custom “translation key” format. Field values will be copied to all sites that produce the same key. For example, to make the field translatable based on the first two characters of the site handle, you could enter `{site.handle[:2]}`.\",
                            id: 'translation-key-format',
                            class: 'code',
                            name: 'translationKeyFormat',
                            value: field.translationKeyFormat,
                            errors: field.getErrors('translationKeyFormat')
                        }) }}
                    {% endtag %}
                {% endif %}
            </div>
        {% endif %}
    {% endif %}

    <hr>

    <div id=\"settings\">
        <div id=\"{{ className(field)|id }}\">
            {% include 'settings/fields/_type-settings' with {
                namespace: 'types['~className(field)~']'
            } %}
        </div>
    </div>
{% endblock %}


{% if field is empty or field.handle is empty %}
    {% js %}
        new Craft.HandleGenerator('#name', '#handle');
    {% endjs %}
{% endif %}

{% js %}
    Craft.supportedTranslationMethods = {{ supportedTranslationMethods|json_encode|raw }};

    Craft.updateTranslationMethodSettings = function(type, container) {
        var \$container = \$(container);
        if (!Craft.supportedTranslationMethods[type] || Craft.supportedTranslationMethods[type].length == 1) {
            \$container.addClass('hidden');
        } else {
            \$container.removeClass('hidden');
            // Rebuild the options based on the field type's supported translation methods
            \$container.find('select').html(
                (\$.inArray('none', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"none\">{{ \"Not translatable\"|t('app')|e('js') }}</option>' : '') +
                (\$.inArray('site', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"site\">{{ \"Translate for each site\"|t('app')|e('js') }}</option>' : '') +
                (\$.inArray('siteGroup', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"siteGroup\">{{ \"Translate for each site group\"|t('app')|e('js') }}</option>' : '') +
                (\$.inArray('language', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"language\">{{ \"Translate for each language\"|t('app')|e('js') }}</option>' : '') +
                (\$.inArray('custom', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"custom\">{{ \"Custom…\"|t('app')|e('js') }}</option>' : '')
            );
        }
    }

    var \$fieldTypeInput = \$(\"#{{ 'type'|namespaceInputId|e('js') }}\"),
        \$translationSettings = \$(\"#{{ 'translation-settings'|namespaceInputId|e('js') }}\");

    \$fieldTypeInput.change(function(e) {
        Craft.updateTranslationMethodSettings(\$(this).val(), \$translationSettings);
    });
{% endjs %}
", "settings/fields/_edit.twig", "/var/www/html/vendor/craftcms/cms/src/templates/settings/fields/_edit.twig");
    }
}
