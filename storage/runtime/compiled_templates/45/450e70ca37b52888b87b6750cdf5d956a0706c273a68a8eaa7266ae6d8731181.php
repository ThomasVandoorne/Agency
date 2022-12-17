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

/* _components/fieldtypes/Assets/settings.twig */
class __TwigTemplate_23545788eeec558c27dd867dd4006af7a99fb8f4742a052ff4a48a59c2d39cd8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fieldSettings' => [$this, 'block_fieldSettings'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_components/fieldtypes/elementfieldsettings";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_components/fieldtypes/Assets/settings.twig");
        // line 2
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Assets/settings.twig", 2)->unwrap();
        // line 31
        $context["dynamicPathTip"] = $this->extensions['craft\web\twig\Extension']->translateFilter("The path can contain variables like `{slug}` or `{author.username}`.", "app");
        // line 32
        if (twig_in_filter("craft\\fields\\Matrix", craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 32, $this->source); })()), "app", []), "view", []), "getNamespace", [], "method"))) {
            // line 33
            $context["dynamicPathTip"] = $this->extensions['craft\web\twig\Extension']->replaceFilter((isset($context["dynamicPathTip"]) || array_key_exists("dynamicPathTip", $context) ? $context["dynamicPathTip"] : (function () { throw new RuntimeError('Variable "dynamicPathTip" does not exist.', 33, $this->source); })()), ["{slug}" => "{owner.slug}", "{author.username}" => "{owner.author.username}"]);
        }
        // line 1
        $this->parent = $this->loadTemplate("_components/fieldtypes/elementfieldsettings", "_components/fieldtypes/Assets/settings.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_components/fieldtypes/Assets/settings.twig");
    }

    // line 40
    public function block_fieldSettings($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "fieldSettings");
        // line 41
        echo "    ";
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Restrict assets to a single location", "app"), "name" => "restrictLocation", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 44
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 44, $this->source); })()), "restrictLocation", []), "toggle" => "restricted-location-settings", "reverseToggle" => "unrestricted-location-settings"]], 41, $context, $this->getSourceContext());
        // line 47
        echo "

    ";
        // line 49
        ob_start();
        // line 53
        echo "        ";
        echo twig_call_macro($macros["_self"], "macro_uploadLocationField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Asset Location", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The location where assets can be selected from.", "app"), "tip" =>         // line 56
(isset($context["dynamicPathTip"]) || array_key_exists("dynamicPathTip", $context) ? $context["dynamicPathTip"] : (function () { throw new RuntimeError('Variable "dynamicPathTip" does not exist.', 56, $this->source); })()), "name" => "restrictedLocation", "sourceOptions" =>         // line 58
(isset($context["sourceOptions"]) || array_key_exists("sourceOptions", $context) ? $context["sourceOptions"] : (function () { throw new RuntimeError('Variable "sourceOptions" does not exist.', 58, $this->source); })()), "sourceValue" => craft\helpers\Template::attribute($this->env, $this->source,         // line 59
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 59, $this->source); })()), "restrictedLocationSource", []), "subpathValue" => craft\helpers\Template::attribute($this->env, $this->source,         // line 60
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 60, $this->source); })()), "restrictedLocationSubpath", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 61
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 61, $this->source); })()), "getErrors", [0 => "restrictedLocationSubpath"], "method")]], 53, $context, $this->getSourceContext());
        // line 62
        echo "

        ";
        // line 64
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Allow subfolders", "app"), "name" => "allowSubfolders", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 67
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 67, $this->source); })()), "allowSubfolders", []), "toggle" => "allow-subfolders-settings"]], 64, $context, $this->getSourceContext());
        // line 69
        echo "

        ";
        // line 71
        ob_start();
        // line 75
        echo "            ";
        echo twig_call_macro($macros["forms"], "macro_textField", [["class" => "ltr", "name" => "restrictedDefaultUploadSubpath", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Default Upload Location", "app"), "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 79
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 79, $this->source); })()), "restrictedDefaultUploadSubpath", []), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Where assets should be stored (relative to **Asset Location**) when they are uploaded directly to the field.", "app"), "tip" =>         // line 81
(isset($context["dynamicPathTip"]) || array_key_exists("dynamicPathTip", $context) ? $context["dynamicPathTip"] : (function () { throw new RuntimeError('Variable "dynamicPathTip" does not exist.', 81, $this->source); })()), "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("path/to/subfolder", "app")]], 75, $context, $this->getSourceContext());
        // line 83
        echo "
        ";
        echo craft\helpers\Html::tag("div", ob_get_clean(), ["id" => "allow-subfolders-settings", "class" => (( !craft\helpers\Template::attribute($this->env, $this->source,         // line 73
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 73, $this->source); })()), "allowSubfolders", [])) ? ("hidden") : (false))]);
        // line 85
        echo "    ";
        echo craft\helpers\Html::tag("div", ob_get_clean(), ["id" => "restricted-location-settings", "class" => (( !craft\helpers\Template::attribute($this->env, $this->source,         // line 51
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 51, $this->source); })()), "restrictLocation", [])) ? ("hidden") : (false))]);
        // line 86
        echo "
    ";
        // line 87
        ob_start();
        // line 91
        echo "        ";
        $this->displayBlock("sourcesField", $context, $blocks);
        echo "

        ";
        // line 93
        echo twig_call_macro($macros["_self"], "macro_uploadLocationField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Default Upload Location", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Where assets should be stored when they are uploaded directly to the field.", "app"), "tip" =>         // line 96
(isset($context["dynamicPathTip"]) || array_key_exists("dynamicPathTip", $context) ? $context["dynamicPathTip"] : (function () { throw new RuntimeError('Variable "dynamicPathTip" does not exist.', 96, $this->source); })()), "name" => "defaultUploadLocation", "sourceOptions" =>         // line 98
(isset($context["sourceOptions"]) || array_key_exists("sourceOptions", $context) ? $context["sourceOptions"] : (function () { throw new RuntimeError('Variable "sourceOptions" does not exist.', 98, $this->source); })()), "sourceValue" => craft\helpers\Template::attribute($this->env, $this->source,         // line 99
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 99, $this->source); })()), "defaultUploadLocationSource", []), "subpathValue" => craft\helpers\Template::attribute($this->env, $this->source,         // line 100
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 100, $this->source); })()), "defaultUploadLocationSubpath", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 101
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 101, $this->source); })()), "getErrors", [0 => "defaultUploadLocationSubpath"], "method")]], 93, $context, $this->getSourceContext());
        // line 102
        echo "
    ";
        echo craft\helpers\Html::tag("div", ob_get_clean(), ["id" => "unrestricted-location-settings", "class" => ((craft\helpers\Template::attribute($this->env, $this->source,         // line 89
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 89, $this->source); })()), "restrictLocation", [])) ? ("hidden") : (false))]);
        // line 104
        echo "
    <hr>

    ";
        // line 107
        $this->displayBlock("selectionConditionField", $context, $blocks);
        echo "

    ";
        // line 109
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Show unpermitted volumes", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Whether to show volumes that the user doesn’t have permission to view.", "app"), "id" => "showUnpermittedVolumes", "name" => "showUnpermittedVolumes", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 114
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 114, $this->source); })()), "showUnpermittedVolumes", [])]], 109, $context, $this->getSourceContext());
        // line 115
        echo "

    ";
        // line 117
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Show unpermitted files", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Whether to show files that the user doesn’t have permission to view, per the “View files uploaded by other users” permission.", "app"), "id" => "showUnpermittedFiles", "name" => "showUnpermittedFiles", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 122
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 122, $this->source); })()), "showUnpermittedFiles", [])]], 117, $context, $this->getSourceContext());
        // line 123
        echo "

    ";
        // line 125
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Restrict allowed file types", "app"), "class" => "restrictFiles", "id" => "restrictFiles", "name" => "restrictFiles", "value" => 1, "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 131
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 131, $this->source); })()), "restrictFiles", []), "toggle" => "restrict-allowed-types"]], 125, $context, $this->getSourceContext());
        // line 133
        echo "

    <fieldset id=\"restrict-allowed-types\"";
        // line 135
        if ( !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 135, $this->source); })()), "restrictFiles", [])) {
            echo " class=\"hidden indent\"";
        }
        echo ">
        ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 136, $this->source); })()), "getFileKindOptions", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 137
            echo "            ";
            echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => craft\helpers\Template::attribute($this->env, $this->source,             // line 138
$context["option"], "label", []), "id" => ("allowedKinds-" . craft\helpers\Template::attribute($this->env, $this->source,             // line 139
$context["option"], "value", [])), "name" => "allowedKinds[]", "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 141
$context["option"], "value", []), "checked" => twig_in_filter(craft\helpers\Template::attribute($this->env, $this->source,             // line 142
$context["option"], "value", []), craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 142, $this->source); })()), "allowedKinds", []))]], 137, $context, $this->getSourceContext());
            // line 143
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "        ";
        echo twig_call_macro($macros["forms"], "macro_errorList", [craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 145, $this->source); })()), "getErrors", [0 => "allowedKinds"], "method")], 145, $context, $this->getSourceContext());
        echo "
    </fieldset>

    ";
        // line 148
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Allow uploading directly to the field", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Whether authors should be able to upload files directly to the field, rather than requiring them to select/upload assets via the selection modal.", "app"), "id" => "allow-uploads", "name" => "allowUploads", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 153
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 153, $this->source); })()), "allowUploads", [])]], 148, $context, $this->getSourceContext());
        // line 154
        echo "

    ";
        // line 156
        $this->displayBlock("limitFields", $context, $blocks);
        echo "
    ";
        // line 157
        $this->displayBlock("viewModeField", $context, $blocks);
        echo "
    ";
        // line 158
        $this->displayBlock("selectionLabelField", $context, $blocks);
        echo "
    ";
        // line 159
        $this->displayBlock("validateRelatedElementsField", $context, $blocks);
        echo "

    <hr>

    ";
        // line 163
        echo twig_call_macro($macros["forms"], "macro_selectField", [["id" => "preview-mode", "name" => "previewMode", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Preview Mode", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("How the related {type} should be displayed within element indexes.", "app", ["type" =>         // line 168
(isset($context["pluralElementType"]) || array_key_exists("pluralElementType", $context) ? $context["pluralElementType"] : (function () { throw new RuntimeError('Variable "pluralElementType" does not exist.', 168, $this->source); })())]), "options" => [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Show thumbnails and titles", "app"), "value" => "full"], 1 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Show thumbnails only", "app"), "value" => "thumbs"]], "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 174
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 174, $this->source); })()), "previewMode", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 175
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 175, $this->source); })()), "getErrors", [0 => "previewMode"], "method")]], 163, $context, $this->getSourceContext());
        // line 176
        echo "

    ";
        // line 178
        $this->displayBlock("advancedSettings", $context, $blocks);
        echo "
";
        craft\helpers\Template::endProfile("block", "fieldSettings");
    }

    // line 4
    public function macro_uploadLocationField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "uploadLocationField");
            // line 5
            echo "    ";
            $this->loadTemplate("_components/fieldtypes/Assets/settings.twig", "_components/fieldtypes/Assets/settings.twig", 5, "1836630536")->display(twig_array_merge($context, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 5, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "uploadLocationField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Assets/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 5,  236 => 4,  229 => 178,  225 => 176,  223 => 175,  222 => 174,  221 => 168,  220 => 163,  213 => 159,  209 => 158,  205 => 157,  201 => 156,  197 => 154,  195 => 153,  194 => 148,  187 => 145,  180 => 143,  178 => 142,  177 => 141,  176 => 139,  175 => 138,  173 => 137,  169 => 136,  163 => 135,  159 => 133,  157 => 131,  156 => 125,  152 => 123,  150 => 122,  149 => 117,  145 => 115,  143 => 114,  142 => 109,  137 => 107,  132 => 104,  130 => 89,  127 => 102,  125 => 101,  124 => 100,  123 => 99,  122 => 98,  121 => 96,  120 => 93,  114 => 91,  112 => 87,  109 => 86,  107 => 51,  105 => 85,  103 => 73,  100 => 83,  98 => 81,  97 => 79,  95 => 75,  93 => 71,  89 => 69,  87 => 67,  86 => 64,  82 => 62,  80 => 61,  79 => 60,  78 => 59,  77 => 58,  76 => 56,  74 => 53,  72 => 49,  68 => 47,  66 => 44,  64 => 41,  59 => 40,  53 => 1,  50 => 33,  48 => 32,  46 => 31,  44 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_components/fieldtypes/elementfieldsettings\" %}
{% import \"_includes/forms\" as forms %}

{% macro uploadLocationField(config) %}
    {% embed '_includes/forms/field' with config %}
        {% block input %}
            {% import '_includes/forms' as forms %}
            <div class=\"flex flex-nowrap\">
                <div>
                    {{ forms.select({
                        name: \"#{config.name}Source\",
                        options: config.sourceOptions,
                        value: config.sourceValue,
                        describedBy: describedBy,
                    }) }}
                </div>
                <div class=\"flex-grow\">
                    {{ forms.text({
                        class: 'ltr',
                        name: \"#{config.name}Subpath\",
                        value: config.subpathValue,
                        placeholder: \"path/to/subfolder\"|t('app'),
                        describedBy: describedBy,
                    }) }}
                </div>
            </div>
        {% endblock %}
    {% endembed %}
{% endmacro %}

{% set dynamicPathTip = \"The path can contain variables like `{slug}` or `{author.username}`.\"|t('app') %}
{% if 'craft\\\\fields\\\\Matrix' in craft.app.view.getNamespace() %}
    {% set dynamicPathTip = dynamicPathTip|replace({
        '{slug}': '{owner.slug}',
        '{author.username}': '{owner.author.username}'
    }) %}
{% endif %}


{% block fieldSettings %}
    {{ forms.checkboxField({
        label: 'Restrict assets to a single location'|t('app'),
        name: 'restrictLocation',
        checked: field.restrictLocation,
        toggle: 'restricted-location-settings',
        reverseToggle: 'unrestricted-location-settings'
    }) }}

    {% tag('div') with {
        id: 'restricted-location-settings',
        class: not field.restrictLocation ? 'hidden' : false,
    } %}
        {{ _self.uploadLocationField({
            label: 'Asset Location'|t('app'),
            instructions: 'The location where assets can be selected from.'|t('app'),
            tip: dynamicPathTip,
            name: 'restrictedLocation',
            sourceOptions: sourceOptions,
            sourceValue: field.restrictedLocationSource,
            subpathValue: field.restrictedLocationSubpath,
            errors: field.getErrors('restrictedLocationSubpath')
        }) }}

        {{ forms.checkboxField({
            label: 'Allow subfolders'|t('app'),
            name: 'allowSubfolders',
            checked: field.allowSubfolders,
            toggle: 'allow-subfolders-settings',
        }) }}

        {% tag('div') with {
            id: 'allow-subfolders-settings',
            class: not field.allowSubfolders ? 'hidden' : false,
        } %}
            {{ forms.textField({
                class: 'ltr',
                name: 'restrictedDefaultUploadSubpath',
                label: 'Default Upload Location'|t('app'),
                value: field.restrictedDefaultUploadSubpath,
                instructions: 'Where assets should be stored (relative to **Asset Location**) when they are uploaded directly to the field.'|t('app'),
                tip: dynamicPathTip,
                placeholder: 'path/to/subfolder'|t('app'),
            }) }}
        {% endtag %}
    {% endtag %}

    {% tag('div') with {
        id: 'unrestricted-location-settings',
        class: field.restrictLocation ? 'hidden' : false,
    } %}
        {{ block('sourcesField') }}

        {{ _self.uploadLocationField({
            label: 'Default Upload Location'|t('app'),
            instructions: 'Where assets should be stored when they are uploaded directly to the field.'|t('app'),
            tip: dynamicPathTip,
            name: 'defaultUploadLocation',
            sourceOptions: sourceOptions,
            sourceValue: field.defaultUploadLocationSource,
            subpathValue: field.defaultUploadLocationSubpath,
            errors: field.getErrors('defaultUploadLocationSubpath')
        }) }}
    {% endtag %}

    <hr>

    {{ block('selectionConditionField') }}

    {{ forms.checkboxField({
        label: 'Show unpermitted volumes'|t('app'),
        instructions: 'Whether to show volumes that the user doesn’t have permission to view.'|t('app'),
        id: 'showUnpermittedVolumes',
        name: 'showUnpermittedVolumes',
        checked: field.showUnpermittedVolumes,
    }) }}

    {{ forms.checkboxField({
        label: 'Show unpermitted files'|t('app'),
        instructions: 'Whether to show files that the user doesn’t have permission to view, per the “View files uploaded by other users” permission.'|t('app'),
        id: 'showUnpermittedFiles',
        name: 'showUnpermittedFiles',
        checked: field.showUnpermittedFiles,
    }) }}

    {{ forms.checkboxField({
        label: 'Restrict allowed file types'|t('app'),
        class: 'restrictFiles',
        id: 'restrictFiles',
        name: 'restrictFiles',
        value: 1,
        checked: field.restrictFiles,
        toggle: 'restrict-allowed-types'
    }) }}

    <fieldset id=\"restrict-allowed-types\"{% if not field.restrictFiles %} class=\"hidden indent\"{% endif %}>
        {% for option in field.getFileKindOptions() %}
            {{ forms.checkboxField({
                label: option.label,
                id: 'allowedKinds-'~option.value,
                name: 'allowedKinds[]',
                value: option.value,
                checked: (option.value in field.allowedKinds)
            }) }}
        {% endfor %}
        {{ forms.errorList(field.getErrors('allowedKinds')) }}
    </fieldset>

    {{ forms.checkboxField({
        label: 'Allow uploading directly to the field'|t('app'),
        instructions: 'Whether authors should be able to upload files directly to the field, rather than requiring them to select/upload assets via the selection modal.'|t('app'),
        id: 'allow-uploads',
        name: 'allowUploads',
        checked: field.allowUploads,
    }) }}

    {{ block('limitFields') }}
    {{ block('viewModeField') }}
    {{ block('selectionLabelField') }}
    {{ block('validateRelatedElementsField') }}

    <hr>

    {{ forms.selectField({
        id: 'preview-mode',
        name: 'previewMode',
        label: 'Preview Mode'|t('app'),
        instructions: 'How the related {type} should be displayed within element indexes.'|t('app', {
            type: pluralElementType,
        }),
        options: [
            {label: 'Show thumbnails and titles'|t('app'), value: 'full'},
            {label: 'Show thumbnails only'|t('app'), value: 'thumbs'},
        ],
        value: field.previewMode,
        errors: field.getErrors('previewMode'),
    }) }}

    {{ block('advancedSettings') }}
{% endblock %}
", "_components/fieldtypes/Assets/settings.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_components/fieldtypes/Assets/settings.twig");
    }
}


/* _components/fieldtypes/Assets/settings.twig */
class __TwigTemplate_23545788eeec558c27dd867dd4006af7a99fb8f4742a052ff4a48a59c2d39cd8___1836630536 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "_includes/forms/field";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_components/fieldtypes/Assets/settings.twig");
        $this->parent = $this->loadTemplate("_includes/forms/field", "_components/fieldtypes/Assets/settings.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_components/fieldtypes/Assets/settings.twig");
    }

    // line 6
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "input");
        // line 7
        echo "            ";
        $macros["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Assets/settings.twig", 7)->unwrap();
        // line 8
        echo "            <div class=\"flex flex-nowrap\">
                <div>
                    ";
        // line 10
        echo twig_call_macro($macros["forms"], "macro_select", [["name" => (craft\helpers\Template::attribute($this->env, $this->source,         // line 11
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "name", []) . "Source"), "options" => craft\helpers\Template::attribute($this->env, $this->source,         // line 12
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 12, $this->source); })()), "sourceOptions", []), "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 13
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "sourceValue", []), "describedBy" =>         // line 14
(isset($context["describedBy"]) || array_key_exists("describedBy", $context) ? $context["describedBy"] : (function () { throw new RuntimeError('Variable "describedBy" does not exist.', 14, $this->source); })())]], 10, $context, $this->getSourceContext());
        // line 15
        echo "
                </div>
                <div class=\"flex-grow\">
                    ";
        // line 18
        echo twig_call_macro($macros["forms"], "macro_text", [["class" => "ltr", "name" => (craft\helpers\Template::attribute($this->env, $this->source,         // line 20
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "name", []) . "Subpath"), "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 21
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "subpathValue", []), "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("path/to/subfolder", "app"), "describedBy" =>         // line 23
(isset($context["describedBy"]) || array_key_exists("describedBy", $context) ? $context["describedBy"] : (function () { throw new RuntimeError('Variable "describedBy" does not exist.', 23, $this->source); })())]], 18, $context, $this->getSourceContext());
        // line 24
        echo "
                </div>
            </div>
        ";
        craft\helpers\Template::endProfile("block", "input");
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Assets/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 24,  519 => 23,  518 => 21,  517 => 20,  516 => 18,  511 => 15,  509 => 14,  508 => 13,  507 => 12,  506 => 11,  505 => 10,  501 => 8,  498 => 7,  493 => 6,  250 => 5,  236 => 4,  229 => 178,  225 => 176,  223 => 175,  222 => 174,  221 => 168,  220 => 163,  213 => 159,  209 => 158,  205 => 157,  201 => 156,  197 => 154,  195 => 153,  194 => 148,  187 => 145,  180 => 143,  178 => 142,  177 => 141,  176 => 139,  175 => 138,  173 => 137,  169 => 136,  163 => 135,  159 => 133,  157 => 131,  156 => 125,  152 => 123,  150 => 122,  149 => 117,  145 => 115,  143 => 114,  142 => 109,  137 => 107,  132 => 104,  130 => 89,  127 => 102,  125 => 101,  124 => 100,  123 => 99,  122 => 98,  121 => 96,  120 => 93,  114 => 91,  112 => 87,  109 => 86,  107 => 51,  105 => 85,  103 => 73,  100 => 83,  98 => 81,  97 => 79,  95 => 75,  93 => 71,  89 => 69,  87 => 67,  86 => 64,  82 => 62,  80 => 61,  79 => 60,  78 => 59,  77 => 58,  76 => 56,  74 => 53,  72 => 49,  68 => 47,  66 => 44,  64 => 41,  59 => 40,  53 => 1,  50 => 33,  48 => 32,  46 => 31,  44 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_components/fieldtypes/elementfieldsettings\" %}
{% import \"_includes/forms\" as forms %}

{% macro uploadLocationField(config) %}
    {% embed '_includes/forms/field' with config %}
        {% block input %}
            {% import '_includes/forms' as forms %}
            <div class=\"flex flex-nowrap\">
                <div>
                    {{ forms.select({
                        name: \"#{config.name}Source\",
                        options: config.sourceOptions,
                        value: config.sourceValue,
                        describedBy: describedBy,
                    }) }}
                </div>
                <div class=\"flex-grow\">
                    {{ forms.text({
                        class: 'ltr',
                        name: \"#{config.name}Subpath\",
                        value: config.subpathValue,
                        placeholder: \"path/to/subfolder\"|t('app'),
                        describedBy: describedBy,
                    }) }}
                </div>
            </div>
        {% endblock %}
    {% endembed %}
{% endmacro %}

{% set dynamicPathTip = \"The path can contain variables like `{slug}` or `{author.username}`.\"|t('app') %}
{% if 'craft\\\\fields\\\\Matrix' in craft.app.view.getNamespace() %}
    {% set dynamicPathTip = dynamicPathTip|replace({
        '{slug}': '{owner.slug}',
        '{author.username}': '{owner.author.username}'
    }) %}
{% endif %}


{% block fieldSettings %}
    {{ forms.checkboxField({
        label: 'Restrict assets to a single location'|t('app'),
        name: 'restrictLocation',
        checked: field.restrictLocation,
        toggle: 'restricted-location-settings',
        reverseToggle: 'unrestricted-location-settings'
    }) }}

    {% tag('div') with {
        id: 'restricted-location-settings',
        class: not field.restrictLocation ? 'hidden' : false,
    } %}
        {{ _self.uploadLocationField({
            label: 'Asset Location'|t('app'),
            instructions: 'The location where assets can be selected from.'|t('app'),
            tip: dynamicPathTip,
            name: 'restrictedLocation',
            sourceOptions: sourceOptions,
            sourceValue: field.restrictedLocationSource,
            subpathValue: field.restrictedLocationSubpath,
            errors: field.getErrors('restrictedLocationSubpath')
        }) }}

        {{ forms.checkboxField({
            label: 'Allow subfolders'|t('app'),
            name: 'allowSubfolders',
            checked: field.allowSubfolders,
            toggle: 'allow-subfolders-settings',
        }) }}

        {% tag('div') with {
            id: 'allow-subfolders-settings',
            class: not field.allowSubfolders ? 'hidden' : false,
        } %}
            {{ forms.textField({
                class: 'ltr',
                name: 'restrictedDefaultUploadSubpath',
                label: 'Default Upload Location'|t('app'),
                value: field.restrictedDefaultUploadSubpath,
                instructions: 'Where assets should be stored (relative to **Asset Location**) when they are uploaded directly to the field.'|t('app'),
                tip: dynamicPathTip,
                placeholder: 'path/to/subfolder'|t('app'),
            }) }}
        {% endtag %}
    {% endtag %}

    {% tag('div') with {
        id: 'unrestricted-location-settings',
        class: field.restrictLocation ? 'hidden' : false,
    } %}
        {{ block('sourcesField') }}

        {{ _self.uploadLocationField({
            label: 'Default Upload Location'|t('app'),
            instructions: 'Where assets should be stored when they are uploaded directly to the field.'|t('app'),
            tip: dynamicPathTip,
            name: 'defaultUploadLocation',
            sourceOptions: sourceOptions,
            sourceValue: field.defaultUploadLocationSource,
            subpathValue: field.defaultUploadLocationSubpath,
            errors: field.getErrors('defaultUploadLocationSubpath')
        }) }}
    {% endtag %}

    <hr>

    {{ block('selectionConditionField') }}

    {{ forms.checkboxField({
        label: 'Show unpermitted volumes'|t('app'),
        instructions: 'Whether to show volumes that the user doesn’t have permission to view.'|t('app'),
        id: 'showUnpermittedVolumes',
        name: 'showUnpermittedVolumes',
        checked: field.showUnpermittedVolumes,
    }) }}

    {{ forms.checkboxField({
        label: 'Show unpermitted files'|t('app'),
        instructions: 'Whether to show files that the user doesn’t have permission to view, per the “View files uploaded by other users” permission.'|t('app'),
        id: 'showUnpermittedFiles',
        name: 'showUnpermittedFiles',
        checked: field.showUnpermittedFiles,
    }) }}

    {{ forms.checkboxField({
        label: 'Restrict allowed file types'|t('app'),
        class: 'restrictFiles',
        id: 'restrictFiles',
        name: 'restrictFiles',
        value: 1,
        checked: field.restrictFiles,
        toggle: 'restrict-allowed-types'
    }) }}

    <fieldset id=\"restrict-allowed-types\"{% if not field.restrictFiles %} class=\"hidden indent\"{% endif %}>
        {% for option in field.getFileKindOptions() %}
            {{ forms.checkboxField({
                label: option.label,
                id: 'allowedKinds-'~option.value,
                name: 'allowedKinds[]',
                value: option.value,
                checked: (option.value in field.allowedKinds)
            }) }}
        {% endfor %}
        {{ forms.errorList(field.getErrors('allowedKinds')) }}
    </fieldset>

    {{ forms.checkboxField({
        label: 'Allow uploading directly to the field'|t('app'),
        instructions: 'Whether authors should be able to upload files directly to the field, rather than requiring them to select/upload assets via the selection modal.'|t('app'),
        id: 'allow-uploads',
        name: 'allowUploads',
        checked: field.allowUploads,
    }) }}

    {{ block('limitFields') }}
    {{ block('viewModeField') }}
    {{ block('selectionLabelField') }}
    {{ block('validateRelatedElementsField') }}

    <hr>

    {{ forms.selectField({
        id: 'preview-mode',
        name: 'previewMode',
        label: 'Preview Mode'|t('app'),
        instructions: 'How the related {type} should be displayed within element indexes.'|t('app', {
            type: pluralElementType,
        }),
        options: [
            {label: 'Show thumbnails and titles'|t('app'), value: 'full'},
            {label: 'Show thumbnails only'|t('app'), value: 'thumbs'},
        ],
        value: field.previewMode,
        errors: field.getErrors('previewMode'),
    }) }}

    {{ block('advancedSettings') }}
{% endblock %}
", "_components/fieldtypes/Assets/settings.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_components/fieldtypes/Assets/settings.twig");
    }
}
