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

/* settings/assets/volumes/_edit.twig */
class __TwigTemplate_f6f71228f28b104b559c89ee5bbd5391f06186fc8869e414e4e8946e5fdbc117 extends Template
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
        craft\helpers\Template::beginProfile("template", "settings/assets/volumes/_edit.twig");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "settings/assets/volumes/_edit.twig", 1)->unwrap();
        // line 2
        echo "

";
        // line 4
        if ( !(isset($context["isNewVolume"]) || array_key_exists("isNewVolume", $context) ? $context["isNewVolume"] : (function () { throw new RuntimeError('Variable "isNewVolume" does not exist.', 4, $this->source); })())) {
            echo craft\helpers\Html::hiddenInput("volumeId", craft\helpers\Template::attribute($this->env, $this->source, (isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 4, $this->source); })()), "id", []));
        }
        // line 5
        echo "
";
        // line 6
        echo twig_call_macro($macros["forms"], "macro_textField", [["first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "id" => "name", "name" => "name", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 11
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 11, $this->source); })()), "name", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 12
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 12, $this->source); })()), "getErrors", [0 => "name"], "method"), "autofocus" => true, "required" => true]], 6, $context, $this->getSourceContext());
        // line 15
        echo "

";
        // line 17
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "id" => "handle", "name" => "handle", "class" => "code", "autocorrect" => false, "autocapitalize" => false, "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 24
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 24, $this->source); })()), "handle", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 25
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 25, $this->source); })()), "getErrors", [0 => "handle"], "method"), "required" => true]], 17, $context, $this->getSourceContext());
        // line 27
        echo "

<hr>

";
        // line 31
        echo twig_call_macro($macros["forms"], "macro_fsField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Asset Filesystem", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Choose which filesystem assets should be stored in.", "app"), "id" => "fs-handle", "name" => "fsHandle", "includeEnvVars" => true, "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 37
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 37, $this->source); })()), "getFsHandle", [0 => false], "method"), "options" =>         // line 38
(isset($context["fsOptions"]) || array_key_exists("fsOptions", $context) ? $context["fsOptions"] : (function () { throw new RuntimeError('Variable "fsOptions" does not exist.', 38, $this->source); })())]], 31, $context, $this->getSourceContext());
        // line 39
        echo "

";
        // line 41
        echo twig_call_macro($macros["forms"], "macro_fsField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Transform Filesystem", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Choose which filesystem image transforms should be stored in.", "app"), "id" => "transform-fs-handle", "name" => "transformFsHandle", "includeEnvVars" => true, "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 47
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 47, $this->source); })()), "transformFsHandle", [0 => false], "method"), "options" => $this->extensions['craft\web\twig\Extension']->mergeFilter([0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Same as asset filesystem", "app"), "value" => null]], craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source,         // line 48
(isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 48, $this->source); })()), "cp", []), "getFsOptions", [], "method"))]], 41, $context, $this->getSourceContext());
        // line 49
        echo "

";
        // line 51
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Transform Subpath", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Where transforms should be stored on the filesystem.", "app"), "id" => "transformSubpath", "name" => "transformSubpath", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 56
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 56, $this->source); })()), "transformSubpath", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 57
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 57, $this->source); })()), "getErrors", [0 => "transformSubpath"], "method")]], 51, $context, $this->getSourceContext());
        // line 58
        echo "

";
        // line 60
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 60, $this->source); })()), "app", []), "getIsMultiSite", [], "method")) {
            // line 61
            echo "    <hr>

    ";
            // line 63
            echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Title Translation Method", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("How should {type} titles be translated?", "app", ["type" =>             // line 66
(isset($context["lowerTypeName"]) || array_key_exists("lowerTypeName", $context) ? $context["lowerTypeName"] : (function () { throw new RuntimeError('Variable "lowerTypeName" does not exist.', 66, $this->source); })())]), "id" => "translation-method", "name" => "titleTranslationMethod", "options" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => ["value" => "none", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Not translatable", "app")], 1 => ["value" => "site", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site", "app")], 2 => ["value" => "siteGroup", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site group", "app")], 3 => ["value" => "language", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each language", "app")], 4 => ["value" => "custom", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Custom…", "app")]]), "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 77
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 77, $this->source); })()), "titleTranslationMethod", []), "toggle" => true, "targetPrefix" => "translation-method-"]], 63, $context, $this->getSourceContext());
            // line 80
            echo "

    <div id=\"translation-method-custom\" ";
            // line 82
            if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 82, $this->source); })()), "titleTranslationMethod", []) != "custom")) {
                echo "class=\"hidden\"";
            }
            echo ">
        ";
            // line 83
            echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Title Translation Key Format", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Template that defines the Title field’s custom “translation key” format. {type} titles will be copied to all sites that produce the same key. For example, to make titles translatable based on the first two characters of the site handle, you could enter `{site.handle[:2]}`.", "app", ["type" =>             // line 86
(isset($context["typeName"]) || array_key_exists("typeName", $context) ? $context["typeName"] : (function () { throw new RuntimeError('Variable "typeName" does not exist.', 86, $this->source); })())]), "id" => "translation-key-format", "name" => "titleTranslationKeyFormat", "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 90
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 90, $this->source); })()), "titleTranslationKeyFormat", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,             // line 91
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 91, $this->source); })()), "getErrors", [0 => "titleTranslationKeyFormat"], "method")]], 83, $context, $this->getSourceContext());
            // line 92
            echo "
    </div>
";
        }
        // line 95
        echo "
<hr>

";
        // line 98
        echo twig_call_macro($macros["forms"], "macro_fieldLayoutDesignerField", [["fieldLayout" => craft\helpers\Template::attribute($this->env, $this->source,         // line 99
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 99, $this->source); })()), "getFieldLayout", [], "method")]], 98, $context, $this->getSourceContext());
        // line 100
        echo "


";
        // line 103
        if (( !array_key_exists("volume", $context) ||  !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 103, $this->source); })()), "handle", []))) {
            // line 104
            echo "    ";
            ob_start();
            // line 105
            echo "      new Craft.HandleGenerator(\"#";
            echo twig_escape_filter($this->env, $this->env->getFilter('namespaceInputId')->getCallable()("name"), "html", null, true);
            echo "\", \"#";
            echo twig_escape_filter($this->env, $this->env->getFilter('namespaceInputId')->getCallable()("handle"), "html", null, true);
            echo "\");
    ";
            craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        }
        craft\helpers\Template::endProfile("template", "settings/assets/volumes/_edit.twig");
    }

    public function getTemplateName()
    {
        return "settings/assets/volumes/_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 105,  138 => 104,  136 => 103,  131 => 100,  129 => 99,  128 => 98,  123 => 95,  118 => 92,  116 => 91,  115 => 90,  114 => 86,  113 => 83,  107 => 82,  103 => 80,  101 => 77,  100 => 66,  99 => 63,  95 => 61,  93 => 60,  89 => 58,  87 => 57,  86 => 56,  85 => 51,  81 => 49,  79 => 48,  78 => 47,  77 => 41,  73 => 39,  71 => 38,  70 => 37,  69 => 31,  63 => 27,  61 => 25,  60 => 24,  59 => 17,  55 => 15,  53 => 12,  52 => 11,  51 => 6,  48 => 5,  44 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}


{% if not isNewVolume %}{{ hiddenInput('volumeId', volume.id) }}{% endif %}

{{ forms.textField({
    first: true,
    label: \"Name\"|t('app'),
    id: 'name',
    name: 'name',
    value: volume.name,
    errors: volume.getErrors('name'),
    autofocus: true,
    required: true,
}) }}

{{ forms.textField({
    label: \"Handle\"|t('app'),
    id: 'handle',
    name: 'handle',
    class: 'code',
    autocorrect: false,
    autocapitalize: false,
    value: volume.handle,
    errors: volume.getErrors('handle'),
    required: true,
}) }}

<hr>

{{ forms.fsField({
    label: 'Asset Filesystem'|t('app'),
    instructions: 'Choose which filesystem assets should be stored in.'|t('app'),
    id: 'fs-handle',
    name: 'fsHandle',
    includeEnvVars: true,
    value: volume.getFsHandle(false),
    options: fsOptions
}) }}

{{ forms.fsField({
    label: 'Transform Filesystem'|t('app'),
    instructions: 'Choose which filesystem image transforms should be stored in.'|t('app'),
    id: 'transform-fs-handle',
    name: 'transformFsHandle',
    includeEnvVars: true,
    value: volume.transformFsHandle(false),
    options: [{label: 'Same as asset filesystem'|t('app'), value: null}]|merge(craft.cp.getFsOptions())
}) }}

{{ forms.textField({
    label: 'Transform Subpath'|t('app'),
    instructions: 'Where transforms should be stored on the filesystem.'|t('app'),
    id: 'transformSubpath',
    name: 'transformSubpath',
    value: volume.transformSubpath,
    errors: volume.getErrors('transformSubpath'),
}) }}

{% if craft.app.getIsMultiSite() %}
    <hr>

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
        value: volume.titleTranslationMethod,
        toggle: true,
        targetPrefix: 'translation-method-'
    }) }}

    <div id=\"translation-method-custom\" {% if volume.titleTranslationMethod != 'custom' %}class=\"hidden\"{% endif %}>
        {{ forms.textField({
            label: 'Title Translation Key Format'|t('app'),
            instructions: 'Template that defines the Title field’s custom “translation key” format. {type} titles will be copied to all sites that produce the same key. For example, to make titles translatable based on the first two characters of the site handle, you could enter `{site.handle[:2]}`.'|t('app', {
                type: typeName,
            }),
            id: 'translation-key-format',
            name: 'titleTranslationKeyFormat',
            value: volume.titleTranslationKeyFormat,
            errors: volume.getErrors('titleTranslationKeyFormat')
        }) }}
    </div>
{% endif %}

<hr>

{{ forms.fieldLayoutDesignerField({
    fieldLayout: volume.getFieldLayout(),
}) }}


{% if volume is not defined or not volume.handle %}
    {% js %}
      new Craft.HandleGenerator(\"#{{ 'name'|namespaceInputId }}\", \"#{{ 'handle'|namespaceInputId }}\");
    {% endjs %}
{% endif %}
", "settings/assets/volumes/_edit.twig", "/var/www/html/vendor/craftcms/cms/src/templates/settings/assets/volumes/_edit.twig");
    }
}
