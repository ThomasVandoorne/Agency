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

/* redactor/_field_settings */
class __TwigTemplate_23b2d8b206f864d8c9714dfcf4898d02202bd778790f9a35599c4a82ffe6ba77 extends Template
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
        craft\helpers\Template::beginProfile("template", "redactor/_field_settings");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "redactor/_field_settings", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("UI Mode", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("How the field should be presented in the control panel.", "app"), "id" => "ui-mode", "name" => "uiMode", "options" => [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Normal", "app"), "value" => "normal"], 1 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Enlarged", "app"), "value" => "enlarged"]], "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 12
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 12, $this->source); })()), "uiMode", [])]], 3, $context, $this->getSourceContext());
        // line 13
        echo "

";
        // line 15
        ob_start();
        // line 16
        echo "  <div class=\"flex\">
    ";
        // line 17
        echo twig_call_macro($macros["forms"], "macro_select", [["name" => "configSelectionMode", "options" => [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Choose a config file", "redactor"), "value" => "choose"], 1 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Enter a custom config", "redactor"), "value" => "manual"]], "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 23
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 23, $this->source); })()), "configSelectionMode", []), "toggle" => true, "targetPrefix" => ".csm-"]], 17, $context, $this->getSourceContext());
        // line 26
        echo "

    ";
        // line 28
        echo twig_call_macro($macros["forms"], "macro_select", [["id" => "redactorConfig", "name" => "redactorConfig", "class" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => "csm-choose", 1 => (((craft\helpers\Template::attribute($this->env, $this->source,         // line 31
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 31, $this->source); })()), "configSelectionMode", []) == "manual")) ? ("hidden") : (""))]), "options" =>         // line 32
(isset($context["redactorConfigOptions"]) || array_key_exists("redactorConfigOptions", $context) ? $context["redactorConfigOptions"] : (function () { throw new RuntimeError('Variable "redactorConfigOptions" does not exist.', 32, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 33
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 33, $this->source); })()), "redactorConfig", [])]], 28, $context, $this->getSourceContext());
        // line 34
        echo "
  </div>
";
        $context["configInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo "
";
        // line 38
        echo twig_call_macro($macros["forms"], "macro_field", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Redactor Config", "redactor"), "id" => "config", "instructions" => ((($this->extensions['craft\web\twig\Extension']->translateFilter("You can save custom Redactor configs as `.json` files in `config/redactor/`, or you can enter a custom config.", "redactor") . " <a href=\"http://imperavi.com/redactor/docs/settings/\" rel=\"noopener\" target=\"_blank\" class=\"go\">") . $this->extensions['craft\web\twig\Extension']->translateFilter("View available settings", "redactor")) . "</a>"), "required" => true],         // line 44
(isset($context["configInput"]) || array_key_exists("configInput", $context) ? $context["configInput"] : (function () { throw new RuntimeError('Variable "configInput" does not exist.', 44, $this->source); })())], 38, $context, $this->getSourceContext());
        echo "

";
        // line 46
        echo twig_call_macro($macros["forms"], "macro_textareaField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Custom Redactor Config", "redactor"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The config must be entered as valid JSON.", "redactor"), "fieldClass" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => "csm-manual", 1 => (((craft\helpers\Template::attribute($this->env, $this->source,         // line 49
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 49, $this->source); })()), "configSelectionMode", []) == "choose")) ? ("hidden") : (""))]), "class" => [0 => "code", 1 => "ltr"], "name" => "manualConfig", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 52
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 52, $this->source); })()), "manualConfig", []), "rows" => 10, "cols" => 50, "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 55
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 55, $this->source); })()), "getErrors", [0 => "manualConfig"], "method")]], 46, $context, $this->getSourceContext());
        // line 56
        echo "

";
        // line 58
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Show the “HTML” button for non-admin users", "redactor"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Whether the “HTML” button should be visible for non-admin users.", "redactor"), "id" => "showHtmlButtonForNonAdmins", "name" => "showHtmlButtonForNonAdmins", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 63
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 63, $this->source); })()), "showHtmlButtonForNonAdmins", [])]], 58, $context, $this->getSourceContext());
        // line 64
        echo "

";
        // line 66
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Show unpermitted volumes", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Whether to show volumes that the user doesn’t have permission to view.", "app"), "id" => "showUnpermittedVolumes", "name" => "showUnpermittedVolumes", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 71
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 71, $this->source); })()), "showUnpermittedVolumes", [])]], 66, $context, $this->getSourceContext());
        // line 72
        echo "

";
        // line 74
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Show unpermitted files", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Whether to show files that the user doesn’t have permission to view, per the “View files uploaded by other users” permission.", "app"), "id" => "showUnpermittedFiles", "name" => "showUnpermittedFiles", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 79
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 79, $this->source); })()), "showUnpermittedFiles", [])]], 74, $context, $this->getSourceContext());
        // line 80
        echo "

";
        // line 82
        echo twig_call_macro($macros["forms"], "macro_checkboxSelectField", [["id" => "availableVolumes", "name" => "availableVolumes", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Available Volumes", "redactor"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The volumes that should be available when selecting assets (if the selected config has an Image or File button).", "redactor"), "options" =>         // line 87
(isset($context["volumeOptions"]) || array_key_exists("volumeOptions", $context) ? $context["volumeOptions"] : (function () { throw new RuntimeError('Variable "volumeOptions" does not exist.', 87, $this->source); })()), "values" => craft\helpers\Template::attribute($this->env, $this->source,         // line 88
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 88, $this->source); })()), "availableVolumes", []), "showAllOption" => (($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env,         // line 89
(isset($context["volumeOptions"]) || array_key_exists("volumeOptions", $context) ? $context["volumeOptions"] : (function () { throw new RuntimeError('Variable "volumeOptions" does not exist.', 89, $this->source); })()))) ? (true) : (false))]], 82, $context, $this->getSourceContext());
        // line 90
        echo "

";
        // line 92
        echo twig_call_macro($macros["forms"], "macro_checkboxSelectField", [["id" => "availableTransforms", "name" => "availableTransforms", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Available Transforms", "redactor"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The transforms that should be available when inserting images.", "redactor"), "options" =>         // line 97
(isset($context["transformOptions"]) || array_key_exists("transformOptions", $context) ? $context["transformOptions"] : (function () { throw new RuntimeError('Variable "transformOptions" does not exist.', 97, $this->source); })()), "values" => craft\helpers\Template::attribute($this->env, $this->source,         // line 98
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 98, $this->source); })()), "availableTransforms", []), "showAllOption" => (($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env,         // line 99
(isset($context["transformOptions"]) || array_key_exists("transformOptions", $context) ? $context["transformOptions"] : (function () { throw new RuntimeError('Variable "transformOptions" does not exist.', 99, $this->source); })()))) ? (true) : (false))]], 92, $context, $this->getSourceContext());
        // line 100
        echo "

";
        // line 102
        echo twig_call_macro($macros["forms"], "macro_selectField", [["id" => "defaultTransform", "name" => "defaultTransform", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Default Transform", "redactor"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The default transform that should be applied when inserting images.", "redactor"), "options" =>         // line 107
(isset($context["defaultTransformOptions"]) || array_key_exists("defaultTransformOptions", $context) ? $context["defaultTransformOptions"] : (function () { throw new RuntimeError('Variable "defaultTransformOptions" does not exist.', 107, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 108
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 108, $this->source); })()), "defaultTransform", [])]], 102, $context, $this->getSourceContext());
        // line 109
        echo "

<hr>
<a class=\"fieldtoggle\" data-target=\"advanced\">";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Advanced", "redactor"), "html", null, true);
        echo "</a>
<div id=\"advanced\" class=\"hidden\">
  <div class=\"field\">
    <div class=\"heading\">
      <label>";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Clean up HTML", "redactor"), "html", null, true);
        echo "</label>
      <div class=\"instructions\">
        ";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("The cleanup actions that should be executed on save.", "redactor"), "html", null, true);
        echo "
      </div>
    </div>

    <div>
      ";
        // line 123
        echo twig_call_macro($macros["forms"], "macro_checkbox", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Remove inline styles", "redactor"), "id" => "removeInlineStyles", "name" => "removeInlineStyles", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 127
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 127, $this->source); })()), "removeInlineStyles", [])]], 123, $context, $this->getSourceContext());
        // line 128
        echo "
    </div>

    <div>
      ";
        // line 132
        echo twig_call_macro($macros["forms"], "macro_checkbox", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Remove empty tags", "redactor"), "id" => "removeEmptyTags", "name" => "removeEmptyTags", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 136
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 136, $this->source); })()), "removeEmptyTags", [])]], 132, $context, $this->getSourceContext());
        // line 137
        echo "
    </div>

    <div>
      ";
        // line 141
        echo twig_call_macro($macros["forms"], "macro_checkbox", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Replace non-breaking spaces with regular spaces", "redactor"), "id" => "removeNbsp", "name" => "removeNbsp", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 145
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 145, $this->source); })()), "removeNbsp", [])]], 141, $context, $this->getSourceContext());
        // line 146
        echo "
    </div>
  </div>

  ";
        // line 150
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Purify HTML", "redactor"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Removes any potentially-malicious code on save, by running the submitted data through <a href=\"http://htmlpurifier.org/\" rel=\"noopener\" target=\"_blank\">HTML Purifier</a>.", "redactor"), "warning" => $this->extensions['craft\web\twig\Extension']->translateFilter("Disable this at your own risk!", "redactor"), "id" => "purifyHtml", "name" => "purifyHtml", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 156
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 156, $this->source); })()), "purifyHtml", []), "toggle" => "purifier-config-container"]], 150, $context, $this->getSourceContext());
        // line 158
        echo "

  <div id=\"purifier-config-container\"";
        // line 160
        if ( !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 160, $this->source); })()), "purifyHtml", [])) {
            echo " class=\"hidden\"";
        }
        echo ">
    ";
        // line 161
        echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("HTML Purifier Config", "redactor"), "instructions" => ((($this->extensions['craft\web\twig\Extension']->translateFilter("You can save custom {name} configs as {ext} files in {path}.", "redactor", ["name" => "HTML Purifier Config", "ext" => "`.json`", "path" => "`config/htmlpurifier/`"]) . " <a href=\"http://htmlpurifier.org/live/configdoc/plain.html\" rel=\"noopener\" target=\"_blank\">") . $this->extensions['craft\web\twig\Extension']->translateFilter("View available settings", "redactor")) . "</a>"), "id" => "purifierConfig", "name" => "purifierConfig", "options" =>         // line 171
(isset($context["purifierConfigOptions"]) || array_key_exists("purifierConfigOptions", $context) ? $context["purifierConfigOptions"] : (function () { throw new RuntimeError('Variable "purifierConfigOptions" does not exist.', 171, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 172
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 172, $this->source); })()), "purifierConfig", [])]], 161, $context, $this->getSourceContext());
        // line 173
        echo "
  </div>

  ";
        // line 176
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 176, $this->source); })()), "app", []), "db", []), "isMysql", [])) {
            // line 177
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Column Type", "redactor"), "id" => "column-type", "name" => "columnType", "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The type of column this field should get in the database.", "redactor"), "options" => [0 => ["value" => "text", "label" => "text (~64KB)"], 1 => ["value" => "mediumtext", "label" => "mediumtext (~16MB)"]], "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 186
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 186, $this->source); })()), "columnType", []), "warning" => ((craft\helpers\Template::attribute($this->env, $this->source,             // line 187
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 187, $this->source); })()), "id", [])) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "redactor")) : (""))]], 177, $context, $this->getSourceContext());
            // line 188
            echo "
  ";
        }
        // line 190
        echo "</div>
";
        craft\helpers\Template::endProfile("template", "redactor/_field_settings");
    }

    public function getTemplateName()
    {
        return "redactor/_field_settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 190,  214 => 188,  212 => 187,  211 => 186,  209 => 177,  207 => 176,  202 => 173,  200 => 172,  199 => 171,  198 => 161,  192 => 160,  188 => 158,  186 => 156,  185 => 150,  179 => 146,  177 => 145,  176 => 141,  170 => 137,  168 => 136,  167 => 132,  161 => 128,  159 => 127,  158 => 123,  150 => 118,  145 => 116,  138 => 112,  133 => 109,  131 => 108,  130 => 107,  129 => 102,  125 => 100,  123 => 99,  122 => 98,  121 => 97,  120 => 92,  116 => 90,  114 => 89,  113 => 88,  112 => 87,  111 => 82,  107 => 80,  105 => 79,  104 => 74,  100 => 72,  98 => 71,  97 => 66,  93 => 64,  91 => 63,  90 => 58,  86 => 56,  84 => 55,  83 => 52,  82 => 49,  81 => 46,  76 => 44,  75 => 38,  72 => 37,  67 => 34,  65 => 33,  64 => 32,  63 => 31,  62 => 28,  58 => 26,  56 => 23,  55 => 17,  52 => 16,  50 => 15,  46 => 13,  44 => 12,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '_includes/forms' as forms %}

{{ forms.selectField({
  label: 'UI Mode'|t('app'),
  instructions: 'How the field should be presented in the control panel.'|t('app'),
  id: 'ui-mode',
  name: 'uiMode',
  options: [
    { label: 'Normal'|t('app'), value: 'normal' },
    { label: 'Enlarged'|t('app'), value: 'enlarged' },
  ],
  value: field.uiMode,
}) }}

{% set configInput %}
  <div class=\"flex\">
    {{ forms.select({
      name: 'configSelectionMode',
      options: [
        { label: 'Choose a config file'|t('redactor'), value: 'choose' },
        { label: 'Enter a custom config'|t('redactor'), value: 'manual' }
      ],
      value: field.configSelectionMode,
      toggle: true,
      targetPrefix: '.csm-'
    }) }}

    {{ forms.select({
      id: 'redactorConfig',
      name: 'redactorConfig',
      class: ['csm-choose', field.configSelectionMode == 'manual' ? 'hidden']|filter,
      options: redactorConfigOptions,
      value: field.redactorConfig
    }) }}
  </div>
{% endset %}

{{ forms.field({
  label: \"Redactor Config\"|t('redactor'),
  id: 'config',
  instructions: \"You can save custom Redactor configs as `.json` files in `config/redactor/`, or you can enter a custom config.\"|t('redactor')
      ~ ' <a href=\"http://imperavi.com/redactor/docs/settings/\" rel=\"noopener\" target=\"_blank\" class=\"go\">'~\"View available settings\"|t('redactor')~'</a>',
  required: true,
}, configInput) }}

{{ forms.textareaField({
  label: \"Custom Redactor Config\"|t('redactor'),
  instructions: 'The config must be entered as valid JSON.'|t('redactor'),
  fieldClass: ['csm-manual', field.configSelectionMode == 'choose' ? 'hidden']|filter,
  class: ['code', 'ltr'],
  name: 'manualConfig',
  value: field.manualConfig,
  rows: 10,
  cols: 50,
  errors: field.getErrors('manualConfig'),
}) }}

{{ forms.checkboxField({
  label: 'Show the “HTML” button for non-admin users'|t('redactor'),
  instructions: 'Whether the “HTML” button should be visible for non-admin users.'|t('redactor'),
  id: 'showHtmlButtonForNonAdmins',
  name: 'showHtmlButtonForNonAdmins',
  checked: field.showHtmlButtonForNonAdmins,
}) }}

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

{{ forms.checkboxSelectField({
  id: 'availableVolumes',
  name: 'availableVolumes',
  label: 'Available Volumes'|t('redactor'),
  instructions: 'The volumes that should be available when selecting assets (if the selected config has an Image or File button).'|t('redactor'),
  options: volumeOptions,
  values: field.availableVolumes,
  showAllOption: volumeOptions|length ? true : false
}) }}

{{ forms.checkboxSelectField({
  id: 'availableTransforms',
  name: 'availableTransforms',
  label: 'Available Transforms'|t('redactor'),
  instructions: 'The transforms that should be available when inserting images.'|t('redactor'),
  options: transformOptions,
  values: field.availableTransforms,
  showAllOption: transformOptions|length ? true : false
}) }}

{{ forms.selectField({
  id: 'defaultTransform',
  name: 'defaultTransform',
  label: 'Default Transform'|t('redactor'),
  instructions: 'The default transform that should be applied when inserting images.'|t('redactor'),
  options: defaultTransformOptions,
  value: field.defaultTransform,
}) }}

<hr>
<a class=\"fieldtoggle\" data-target=\"advanced\">{{ \"Advanced\"|t('redactor') }}</a>
<div id=\"advanced\" class=\"hidden\">
  <div class=\"field\">
    <div class=\"heading\">
      <label>{{ \"Clean up HTML\"|t('redactor') }}</label>
      <div class=\"instructions\">
        {{ \"The cleanup actions that should be executed on save.\"|t('redactor') }}
      </div>
    </div>

    <div>
      {{ forms.checkbox({
        label: \"Remove inline styles\"|t('redactor'),
        id: 'removeInlineStyles',
        name: 'removeInlineStyles',
        checked: field.removeInlineStyles
      }) }}
    </div>

    <div>
      {{ forms.checkbox({
        label: \"Remove empty tags\"|t('redactor'),
        id: 'removeEmptyTags',
        name: 'removeEmptyTags',
        checked: field.removeEmptyTags
      }) }}
    </div>

    <div>
      {{ forms.checkbox({
        label: \"Replace non-breaking spaces with regular spaces\"|t('redactor'),
        id: 'removeNbsp',
        name: 'removeNbsp',
        checked: field.removeNbsp
      }) }}
    </div>
  </div>

  {{ forms.checkboxField({
    label: \"Purify HTML\"|t('redactor'),
    instructions: 'Removes any potentially-malicious code on save, by running the submitted data through <a href=\"http://htmlpurifier.org/\" rel=\"noopener\" target=\"_blank\">HTML Purifier</a>.'|t('redactor'),
    warning: 'Disable this at your own risk!'|t('redactor'),
    id: 'purifyHtml',
    name: 'purifyHtml',
    checked: field.purifyHtml,
    toggle: 'purifier-config-container'
  }) }}

  <div id=\"purifier-config-container\"{% if not field.purifyHtml %} class=\"hidden\"{% endif %}>
    {{ forms.selectField({
      label: \"HTML Purifier Config\"|t('redactor'),
      instructions: \"You can save custom {name} configs as {ext} files in {path}.\"|t('redactor', {
        name: 'HTML Purifier Config',
        ext: '`.json`',
        path: '`config/htmlpurifier/`'
      }) ~
      ' <a href=\"http://htmlpurifier.org/live/configdoc/plain.html\" rel=\"noopener\" target=\"_blank\">'~\"View available settings\"|t('redactor')~'</a>',
      id: 'purifierConfig',
      name: 'purifierConfig',
      options: purifierConfigOptions,
      value: field.purifierConfig
    }) }}
  </div>

  {% if craft.app.db.isMysql %}
    {{ forms.selectField({
      label: \"Column Type\"|t('redactor'),
      id: 'column-type',
      name: 'columnType',
      instructions: \"The type of column this field should get in the database.\"|t('redactor'),
      options: [
        { value: 'text', label: 'text (~64KB)' },
        { value: 'mediumtext', label: 'mediumtext (~16MB)' },
      ],
      value: field.columnType,
      warning: (field.id ? \"Changing this may result in data loss.\"|t('redactor')),
    }) }}
  {% endif %}
</div>
", "redactor/_field_settings", "/var/www/html/vendor/craftcms/redactor/src/templates/_field_settings.html");
    }
}
