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

/* _components/fieldtypes/PlainText/settings.twig */
class __TwigTemplate_2a7100ae8e673d6cf98ac9eb92cb6a869b61181cb2daac6b32d2f6ed133dbc27 extends Template
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
        craft\helpers\Template::beginProfile("template", "_components/fieldtypes/PlainText/settings.twig");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/PlainText/settings.twig", 1)->unwrap();
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
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Placeholder Text", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The text that will be shown if the field doesn’t have a value.", "app"), "id" => "placeholder", "name" => "placeholder", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 20
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 20, $this->source); })()), "placeholder", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 21
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 21, $this->source); })()), "getErrors", [0 => "placeholder"], "method")]], 15, $context, $this->getSourceContext());
        // line 22
        echo "

";
        // line 24
        $this->loadTemplate("_components/fieldtypes/PlainText/settings.twig", "_components/fieldtypes/PlainText/settings.twig", 24, "762810621")->display(twig_array_merge($context, ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Field Limit", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The maximum number of characters or bytes the field is allowed to have.", "app"), "id" => "fieldLimit", "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 28
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 28, $this->source); })()), "getErrors", [0 => ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 28, $this->source); })()), "byteLimit", [])) ? ("byteLimit") : ("charLimit"))], "method")]));
        // line 51
        echo "
<fieldset>
    ";
        // line 53
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Use a monospaced font", "app"), "name" => "code", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 56
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 56, $this->source); })()), "code", [])]], 53, $context, $this->getSourceContext());
        // line 57
        echo "

    ";
        // line 59
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Allow line breaks", "app"), "name" => "multiline", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 62
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 62, $this->source); })()), "multiline", []), "toggle" => "initialRowsContainer"]], 59, $context, $this->getSourceContext());
        // line 64
        echo "
</fieldset>

<div id=\"initialRowsContainer\" class=\"nested-fields";
        // line 67
        if ( !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 67, $this->source); })()), "multiline", [])) {
            echo " hidden";
        }
        echo "\">
    ";
        // line 68
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Initial Rows", "app"), "id" => "initialRows", "name" => "initialRows", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 72
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 72, $this->source); })()), "initialRows", []), "size" => 3, "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 74
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 74, $this->source); })()), "getErrors", [0 => "initialRows"], "method")]], 68, $context, $this->getSourceContext());
        // line 75
        echo "
</div>

";
        // line 78
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 78, $this->source); })()), "app", []), "db", []), "isMysql", [])) {
            // line 79
            echo "    <hr>
    <a class=\"fieldtoggle\" data-target=\"advanced\">";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Advanced", "app"), "html", null, true);
            echo "</a>
    <div id=\"advanced\" class=\"hidden\">
        ";
            // line 82
            echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Column Type", "app"), "id" => "column-type", "name" => "columnType", "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The type of column this field should get in the database.", "app"), "options" => [0 => ["value" => "auto", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Automatic", "app")], 1 => ["value" => "string", "label" => "varchar (255B)"], 2 => ["value" => "text", "label" => "text (~64KB)"], 3 => ["value" => "mediumtext", "label" => "mediumtext (~16MB)"]], "value" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 93
($context["field"] ?? null), "columnType", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["field"] ?? null), "columnType", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["field"] ?? null), "columnType", [])) : ("auto")), "warning" => ((craft\helpers\Template::attribute($this->env, $this->source,             // line 94
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 94, $this->source); })()), "id", [])) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "app")) : (""))]], 82, $context, $this->getSourceContext());
            // line 95
            echo "
    </div>
";
        }
        craft\helpers\Template::endProfile("template", "_components/fieldtypes/PlainText/settings.twig");
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/PlainText/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 95,  107 => 94,  106 => 93,  105 => 82,  100 => 80,  97 => 79,  95 => 78,  90 => 75,  88 => 74,  87 => 72,  86 => 68,  80 => 67,  75 => 64,  73 => 62,  72 => 59,  68 => 57,  66 => 56,  65 => 53,  61 => 51,  59 => 28,  58 => 24,  54 => 22,  52 => 21,  51 => 20,  50 => 15,  46 => 13,  44 => 12,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}

{{ forms.selectField({
    label: 'UI Mode'|t('app'),
    instructions: 'How the field should be presented in the control panel.'|t('app'),
    id: 'ui-mode',
    name: 'uiMode',
    options: [
        {label: 'Normal'|t('app'), value: 'normal'},
        {label: 'Enlarged'|t('app'), value: 'enlarged'},
    ],
    value: field.uiMode,
}) }}

{{ forms.textField({
    label: \"Placeholder Text\"|t('app'),
    instructions: \"The text that will be shown if the field doesn’t have a value.\"|t('app'),
    id: 'placeholder',
    name: 'placeholder',
    value: field.placeholder,
    errors: field.getErrors('placeholder')
}) }}

{% embed '_includes/forms/field' with {
    label: 'Field Limit'|t('app'),
    instructions: \"The maximum number of characters or bytes the field is allowed to have.\"|t('app'),
    id: 'fieldLimit',
    errors: field.getErrors(field.byteLimit ? 'byteLimit' : 'charLimit')
} %}
    {% import \"_includes/forms\" as forms %}
    {% block input %}
        <div class=\"flex\">
            {{ forms.text({
                id: 'fieldLimit',
                name: 'fieldLimit',
                value: field.charLimit ?? field.byteLimit,
                size: 3,
            }) }}
            {{ forms.select({
                id: 'limitUnit',
                name: 'limitUnit',
                options: [
                    { value: 'chars', label: 'Characters'|t('app') },
                    { value: 'bytes', label: 'Bytes'|t('app') },
                ],
                value: field.byteLimit ? 'bytes' : 'chars'
            }) }}
        </div>
    {% endblock %}
{% endembed %}

<fieldset>
    {{ forms.checkboxField({
        label: \"Use a monospaced font\"|t('app'),
        name: 'code',
        checked: field.code,
    }) }}

    {{ forms.checkboxField({
        label: \"Allow line breaks\"|t('app'),
        name: 'multiline',
        checked: field.multiline,
        toggle: 'initialRowsContainer'
    }) }}
</fieldset>

<div id=\"initialRowsContainer\" class=\"nested-fields{% if not field.multiline %} hidden{% endif %}\">
    {{ forms.textField({
        label: \"Initial Rows\"|t('app'),
        id: 'initialRows',
        name: 'initialRows',
        value: field.initialRows,
        size: 3,
        errors: field.getErrors('initialRows')
    }) }}
</div>

{% if craft.app.db.isMysql %}
    <hr>
    <a class=\"fieldtoggle\" data-target=\"advanced\">{{ \"Advanced\"|t('app') }}</a>
    <div id=\"advanced\" class=\"hidden\">
        {{ forms.selectField({
            label: \"Column Type\"|t('app'),
            id: 'column-type',
            name: 'columnType',
            instructions: \"The type of column this field should get in the database.\"|t('app'),
            options: [
                { value: 'auto', label: 'Automatic'|t('app') },
                { value: 'string', label: 'varchar (255B)' },
                { value: 'text', label: 'text (~64KB)' },
                { value: 'mediumtext', label: 'mediumtext (~16MB)' },
            ],
            value: field.columnType ?? 'auto',
            warning: (field.id ? \"Changing this may result in data loss.\"|t('app')),
        }) }}
    </div>
{% endif %}
", "_components/fieldtypes/PlainText/settings.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_components/fieldtypes/PlainText/settings.twig");
    }
}


/* _components/fieldtypes/PlainText/settings.twig */
class __TwigTemplate_2a7100ae8e673d6cf98ac9eb92cb6a869b61181cb2daac6b32d2f6ed133dbc27___762810621 extends Template
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
        // line 24
        return "_includes/forms/field";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_components/fieldtypes/PlainText/settings.twig");
        // line 30
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/PlainText/settings.twig", 30)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("_includes/forms/field", "_components/fieldtypes/PlainText/settings.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_components/fieldtypes/PlainText/settings.twig");
    }

    // line 31
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "input");
        // line 32
        echo "        <div class=\"flex\">
            ";
        // line 33
        echo twig_call_macro($macros["forms"], "macro_text", [["id" => "fieldLimit", "name" => "fieldLimit", "value" => (((craft\helpers\Template::attribute($this->env, $this->source,         // line 36
($context["field"] ?? null), "charLimit", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["field"] ?? null), "charLimit", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["field"] ?? null), "charLimit", [])) : (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 36, $this->source); })()), "byteLimit", []))), "size" => 3]], 33, $context, $this->getSourceContext());
        // line 38
        echo "
            ";
        // line 39
        echo twig_call_macro($macros["forms"], "macro_select", [["id" => "limitUnit", "name" => "limitUnit", "options" => [0 => ["value" => "chars", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Characters", "app")], 1 => ["value" => "bytes", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Bytes", "app")]], "value" => ((craft\helpers\Template::attribute($this->env, $this->source,         // line 46
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 46, $this->source); })()), "byteLimit", [])) ? ("bytes") : ("chars"))]], 39, $context, $this->getSourceContext());
        // line 47
        echo "
        </div>
    ";
        craft\helpers\Template::endProfile("block", "input");
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/PlainText/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 47,  286 => 46,  285 => 39,  282 => 38,  280 => 36,  279 => 33,  276 => 32,  271 => 31,  265 => 24,  263 => 30,  255 => 24,  109 => 95,  107 => 94,  106 => 93,  105 => 82,  100 => 80,  97 => 79,  95 => 78,  90 => 75,  88 => 74,  87 => 72,  86 => 68,  80 => 67,  75 => 64,  73 => 62,  72 => 59,  68 => 57,  66 => 56,  65 => 53,  61 => 51,  59 => 28,  58 => 24,  54 => 22,  52 => 21,  51 => 20,  50 => 15,  46 => 13,  44 => 12,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}

{{ forms.selectField({
    label: 'UI Mode'|t('app'),
    instructions: 'How the field should be presented in the control panel.'|t('app'),
    id: 'ui-mode',
    name: 'uiMode',
    options: [
        {label: 'Normal'|t('app'), value: 'normal'},
        {label: 'Enlarged'|t('app'), value: 'enlarged'},
    ],
    value: field.uiMode,
}) }}

{{ forms.textField({
    label: \"Placeholder Text\"|t('app'),
    instructions: \"The text that will be shown if the field doesn’t have a value.\"|t('app'),
    id: 'placeholder',
    name: 'placeholder',
    value: field.placeholder,
    errors: field.getErrors('placeholder')
}) }}

{% embed '_includes/forms/field' with {
    label: 'Field Limit'|t('app'),
    instructions: \"The maximum number of characters or bytes the field is allowed to have.\"|t('app'),
    id: 'fieldLimit',
    errors: field.getErrors(field.byteLimit ? 'byteLimit' : 'charLimit')
} %}
    {% import \"_includes/forms\" as forms %}
    {% block input %}
        <div class=\"flex\">
            {{ forms.text({
                id: 'fieldLimit',
                name: 'fieldLimit',
                value: field.charLimit ?? field.byteLimit,
                size: 3,
            }) }}
            {{ forms.select({
                id: 'limitUnit',
                name: 'limitUnit',
                options: [
                    { value: 'chars', label: 'Characters'|t('app') },
                    { value: 'bytes', label: 'Bytes'|t('app') },
                ],
                value: field.byteLimit ? 'bytes' : 'chars'
            }) }}
        </div>
    {% endblock %}
{% endembed %}

<fieldset>
    {{ forms.checkboxField({
        label: \"Use a monospaced font\"|t('app'),
        name: 'code',
        checked: field.code,
    }) }}

    {{ forms.checkboxField({
        label: \"Allow line breaks\"|t('app'),
        name: 'multiline',
        checked: field.multiline,
        toggle: 'initialRowsContainer'
    }) }}
</fieldset>

<div id=\"initialRowsContainer\" class=\"nested-fields{% if not field.multiline %} hidden{% endif %}\">
    {{ forms.textField({
        label: \"Initial Rows\"|t('app'),
        id: 'initialRows',
        name: 'initialRows',
        value: field.initialRows,
        size: 3,
        errors: field.getErrors('initialRows')
    }) }}
</div>

{% if craft.app.db.isMysql %}
    <hr>
    <a class=\"fieldtoggle\" data-target=\"advanced\">{{ \"Advanced\"|t('app') }}</a>
    <div id=\"advanced\" class=\"hidden\">
        {{ forms.selectField({
            label: \"Column Type\"|t('app'),
            id: 'column-type',
            name: 'columnType',
            instructions: \"The type of column this field should get in the database.\"|t('app'),
            options: [
                { value: 'auto', label: 'Automatic'|t('app') },
                { value: 'string', label: 'varchar (255B)' },
                { value: 'text', label: 'text (~64KB)' },
                { value: 'mediumtext', label: 'mediumtext (~16MB)' },
            ],
            value: field.columnType ?? 'auto',
            warning: (field.id ? \"Changing this may result in data loss.\"|t('app')),
        }) }}
    </div>
{% endif %}
", "_components/fieldtypes/PlainText/settings.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_components/fieldtypes/PlainText/settings.twig");
    }
}
