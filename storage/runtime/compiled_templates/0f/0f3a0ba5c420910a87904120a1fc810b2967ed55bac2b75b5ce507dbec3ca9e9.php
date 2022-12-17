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

/* _components/fieldtypes/elementfieldsettings */
class __TwigTemplate_7e25aebf8924dbbe512a9e6806bfab45a83a3da56d68fab9ac59c7eae965f648 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'fieldSettings' => [$this, 'block_fieldSettings'],
            'sourcesField' => [$this, 'block_sourcesField'],
            'selectionConditionField' => [$this, 'block_selectionConditionField'],
            'limitFields' => [$this, 'block_limitFields'],
            'viewModeField' => [$this, 'block_viewModeField'],
            'selectionLabelField' => [$this, 'block_selectionLabelField'],
            'validateRelatedElementsField' => [$this, 'block_validateRelatedElementsField'],
            'advancedSettings' => [$this, 'block_advancedSettings'],
            'targetSiteField' => [$this, 'block_targetSiteField'],
            'localizeRelationsField' => [$this, 'block_localizeRelationsField'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_components/fieldtypes/elementfieldsettings");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/elementfieldsettings", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["sourceOptions"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 3, $this->source); })()), "getSourceOptions", [], "method");
        // line 4
        $context["elementType"] = (($context["elementType"]) ?? ((isset($context["pluralElementType"]) || array_key_exists("pluralElementType", $context) ? $context["pluralElementType"] : (function () { throw new RuntimeError('Variable "pluralElementType" does not exist.', 4, $this->source); })())));
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('fieldSettings', $context, $blocks);
        craft\helpers\Template::endProfile("template", "_components/fieldtypes/elementfieldsettings");
    }

    public function block_fieldSettings($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "fieldSettings");
        // line 7
        echo "    ";
        $this->displayBlock('sourcesField', $context, $blocks);
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('selectionConditionField', $context, $blocks);
        // line 39
        echo "
    ";
        // line 40
        $this->displayBlock('limitFields', $context, $blocks);
        // line 67
        echo "
    ";
        // line 68
        $this->displayBlock('viewModeField', $context, $blocks);
        // line 71
        echo "
    ";
        // line 72
        $this->displayBlock('selectionLabelField', $context, $blocks);
        // line 83
        echo "
    ";
        // line 84
        $this->displayBlock('validateRelatedElementsField', $context, $blocks);
        // line 93
        echo "
    ";
        // line 94
        $this->displayBlock('advancedSettings', $context, $blocks);
        craft\helpers\Template::endProfile("block", "fieldSettings");
    }

    // line 7
    public function block_sourcesField($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "sourcesField");
        // line 8
        echo "        ";
        if ((isset($context["sourceOptions"]) || array_key_exists("sourceOptions", $context) ? $context["sourceOptions"] : (function () { throw new RuntimeError('Variable "sourceOptions" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "            ";
            if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 9, $this->source); })()), "allowMultipleSources", [])) {
                // line 10
                echo "                ";
                echo twig_call_macro($macros["forms"], "macro_checkboxSelectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Sources", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which sources do you want to select {type} from?", "app", ["type" =>                 // line 12
(isset($context["pluralElementType"]) || array_key_exists("pluralElementType", $context) ? $context["pluralElementType"] : (function () { throw new RuntimeError('Variable "pluralElementType" does not exist.', 12, $this->source); })())]), "id" => "sources", "name" => "sources", "options" =>                 // line 15
(isset($context["sourceOptions"]) || array_key_exists("sourceOptions", $context) ? $context["sourceOptions"] : (function () { throw new RuntimeError('Variable "sourceOptions" does not exist.', 15, $this->source); })()), "values" => craft\helpers\Template::attribute($this->env, $this->source,                 // line 16
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 16, $this->source); })()), "sources", []), "showAllOption" => true]], 10, $context, $this->getSourceContext());
                // line 18
                echo "
            ";
            } else {
                // line 20
                echo "                ";
                echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Source", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which source do you want to select {type} from?", "app", ["type" =>                 // line 22
(isset($context["pluralElementType"]) || array_key_exists("pluralElementType", $context) ? $context["pluralElementType"] : (function () { throw new RuntimeError('Variable "pluralElementType" does not exist.', 22, $this->source); })())]), "id" => "source", "name" => "source", "options" =>                 // line 25
(isset($context["sourceOptions"]) || array_key_exists("sourceOptions", $context) ? $context["sourceOptions"] : (function () { throw new RuntimeError('Variable "sourceOptions" does not exist.', 25, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->source,                 // line 26
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 26, $this->source); })()), "source", [])]], 20, $context, $this->getSourceContext());
                // line 27
                echo "
            ";
            }
            // line 29
            echo "        ";
        } else {
            // line 30
            echo "            ";
            echo twig_call_macro($macros["forms"], "macro_field", [["label" => ((craft\helpers\Template::attribute($this->env, $this->source,             // line 31
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 31, $this->source); })()), "allowMultipleSources", [])) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Sources", "app")) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Source", "app")))], (("<p class=\"error\">" . $this->extensions['craft\web\twig\Extension']->translateFilter("No sources exist yet.", "app")) . "</p>")], 30, $context, $this->getSourceContext());
            // line 32
            echo "
        ";
        }
        // line 34
        echo "    ";
        craft\helpers\Template::endProfile("block", "sourcesField");
    }

    // line 36
    public function block_selectionConditionField($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "selectionConditionField");
        // line 37
        echo "        ";
        echo (((($context["selectionCondition"]) ?? (false))) ? ((isset($context["selectionCondition"]) || array_key_exists("selectionCondition", $context) ? $context["selectionCondition"] : (function () { throw new RuntimeError('Variable "selectionCondition" does not exist.', 37, $this->source); })())) : (""));
        echo "
    ";
        craft\helpers\Template::endProfile("block", "selectionConditionField");
    }

    // line 40
    public function block_limitFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "limitFields");
        // line 41
        echo "        ";
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 41, $this->source); })()), "allowLimit", [])) {
            // line 42
            echo "            ";
            echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Min Relations", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The minimum number of {type} that may be selected.", "app", ["type" =>             // line 45
(isset($context["pluralElementType"]) || array_key_exists("pluralElementType", $context) ? $context["pluralElementType"] : (function () { throw new RuntimeError('Variable "pluralElementType" does not exist.', 45, $this->source); })())]), "id" => "min-relations", "name" => "minRelations", "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 49
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 49, $this->source); })()), "minRelations", []), "size" => 2, "errors" => craft\helpers\Template::attribute($this->env, $this->source,             // line 51
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 51, $this->source); })()), "getErrors", [0 => "minRelations"], "method")]], 42, $context, $this->getSourceContext());
            // line 52
            echo "

            ";
            // line 54
            echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Max Relations", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The maximum number of {type} that may be selected.", "app", ["type" =>             // line 57
(isset($context["pluralElementType"]) || array_key_exists("pluralElementType", $context) ? $context["pluralElementType"] : (function () { throw new RuntimeError('Variable "pluralElementType" does not exist.', 57, $this->source); })())]), "id" => "max-relations", "name" => "maxRelations", "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 61
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 61, $this->source); })()), "maxRelations", []), "size" => 2, "errors" => craft\helpers\Template::attribute($this->env, $this->source,             // line 63
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 63, $this->source); })()), "getErrors", [0 => "maxRelations"], "method")]], 54, $context, $this->getSourceContext());
            // line 64
            echo "
        ";
        }
        // line 66
        echo "    ";
        craft\helpers\Template::endProfile("block", "limitFields");
    }

    // line 68
    public function block_viewModeField($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "viewModeField");
        // line 69
        echo "        ";
        echo craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 69, $this->source); })()), "getViewModeFieldHtml", [], "method");
        echo "
    ";
        craft\helpers\Template::endProfile("block", "viewModeField");
    }

    // line 72
    public function block_selectionLabelField($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "selectionLabelField");
        // line 73
        echo "        ";
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Selection Label", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Enter the text you want to appear on the {type} selection input.", "app", ["type" =>         // line 75
(isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 75, $this->source); })())]), "id" => "selectionLabel", "name" => "selectionLabel", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 78
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 78, $this->source); })()), "selectionLabel", []), "placeholder" => craft\helpers\Template::attribute($this->env, $this->source,         // line 79
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 79, $this->source); })()), "defaultSelectionLabel", [], "method"), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 80
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 80, $this->source); })()), "getErrors", [0 => "selectionLabel"], "method")]], 73, $context, $this->getSourceContext());
        // line 81
        echo "
    ";
        craft\helpers\Template::endProfile("block", "selectionLabelField");
    }

    // line 84
    public function block_validateRelatedElementsField($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "validateRelatedElementsField");
        // line 85
        echo "        ";
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Validate related {type}", "app", ["type" =>         // line 86
(isset($context["pluralElementType"]) || array_key_exists("pluralElementType", $context) ? $context["pluralElementType"] : (function () { throw new RuntimeError('Variable "pluralElementType" does not exist.', 86, $this->source); })())]), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Whether validation errors on the related {type} should prevent the source element from being saved.", "app", ["type" =>         // line 87
(isset($context["pluralElementType"]) || array_key_exists("pluralElementType", $context) ? $context["pluralElementType"] : (function () { throw new RuntimeError('Variable "pluralElementType" does not exist.', 87, $this->source); })())]), "id" => "validate-related-elements", "name" => "validateRelatedElements", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 90
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 90, $this->source); })()), "validateRelatedElements", [])]], 85, $context, $this->getSourceContext());
        // line 91
        echo "
    ";
        craft\helpers\Template::endProfile("block", "validateRelatedElementsField");
    }

    // line 94
    public function block_advancedSettings($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "advancedSettings");
        // line 95
        echo "        <hr>

        <a class=\"fieldtoggle\" data-target=\"advanced\">";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Advanced", "app"), "html", null, true);
        echo "</a>
        <div id=\"advanced\" class=\"hidden\">

            ";
        // line 100
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Allow self relations", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Whether {type} elements should be allowed to relate to themselves.", "app", ["type" =>         // line 102
(isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 102, $this->source); })())]), "id" => "allow-self-relations", "name" => "allowSelfRelations", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 105
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 105, $this->source); })()), "allowSelfRelations", [])]], 100, $context, $this->getSourceContext());
        // line 106
        echo "

            ";
        // line 108
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 108, $this->source); })()), "app", []), "getIsMultiSite", [], "method")) {
            // line 109
            echo "
                ";
            // line 110
            $this->displayBlock('targetSiteField', $context, $blocks);
            // line 113
            echo "
                ";
            // line 114
            $this->displayBlock('localizeRelationsField', $context, $blocks);
            // line 122
            echo "            ";
        }
        // line 123
        echo "
        </div>
    ";
        craft\helpers\Template::endProfile("block", "advancedSettings");
    }

    // line 110
    public function block_targetSiteField($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "targetSiteField");
        // line 111
        echo "                    ";
        echo craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 111, $this->source); })()), "getTargetSiteFieldHtml", [], "method");
        echo "
                ";
        craft\helpers\Template::endProfile("block", "targetSiteField");
    }

    // line 114
    public function block_localizeRelationsField($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "localizeRelationsField");
        // line 115
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Manage relations on a per-site basis", "app"), "id" => "localize-relations", "name" => "localizeRelations", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 119
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 119, $this->source); })()), "localizeRelations", [])]], 115, $context, $this->getSourceContext());
        // line 120
        echo "
                ";
        craft\helpers\Template::endProfile("block", "localizeRelationsField");
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/elementfieldsettings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 120,  310 => 119,  308 => 115,  303 => 114,  295 => 111,  290 => 110,  283 => 123,  280 => 122,  278 => 114,  275 => 113,  273 => 110,  270 => 109,  268 => 108,  264 => 106,  262 => 105,  261 => 102,  260 => 100,  254 => 97,  250 => 95,  245 => 94,  239 => 91,  237 => 90,  236 => 87,  235 => 86,  233 => 85,  228 => 84,  222 => 81,  220 => 80,  219 => 79,  218 => 78,  217 => 75,  215 => 73,  210 => 72,  202 => 69,  197 => 68,  192 => 66,  188 => 64,  186 => 63,  185 => 61,  184 => 57,  183 => 54,  179 => 52,  177 => 51,  176 => 49,  175 => 45,  173 => 42,  170 => 41,  165 => 40,  157 => 37,  152 => 36,  147 => 34,  143 => 32,  141 => 31,  139 => 30,  136 => 29,  132 => 27,  130 => 26,  129 => 25,  128 => 22,  126 => 20,  122 => 18,  120 => 16,  119 => 15,  118 => 12,  116 => 10,  113 => 9,  110 => 8,  105 => 7,  100 => 94,  97 => 93,  95 => 84,  92 => 83,  90 => 72,  87 => 71,  85 => 68,  82 => 67,  80 => 40,  77 => 39,  75 => 36,  72 => 35,  69 => 7,  60 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}

{% set sourceOptions = field.getSourceOptions() %}
{% set elementType = elementType ?? pluralElementType %}

{% block fieldSettings %}
    {% block sourcesField %}
        {% if sourceOptions %}
            {% if field.allowMultipleSources %}
                {{ forms.checkboxSelectField({
                    label: \"Sources\"|t('app'),
                    instructions: \"Which sources do you want to select {type} from?\"|t('app', { type: pluralElementType }),
                    id: 'sources',
                    name: 'sources',
                    options: sourceOptions,
                    values: field.sources,
                    showAllOption: true,
                }) }}
            {% else %}
                {{ forms.selectField({
                    label: \"Source\"|t('app'),
                    instructions: \"Which source do you want to select {type} from?\"|t('app', { type: pluralElementType }),
                    id: 'source',
                    name: 'source',
                    options: sourceOptions,
                    value: field.source
                }) }}
            {% endif %}
        {% else %}
            {{ forms.field({
                label: (field.allowMultipleSources ? \"Sources\"|t('app') : \"Source\"|t('app'))
            }, '<p class=\"error\">' ~ \"No sources exist yet.\"|t('app') ~ '</p>') }}
        {% endif %}
    {% endblock %}

    {% block selectionConditionField %}
        {{ (selectionCondition ?? false) ? selectionCondition|raw }}
    {% endblock %}

    {% block limitFields %}
        {% if field.allowLimit %}
            {{ forms.textField({
                label: 'Min Relations'|t('app'),
                instructions: 'The minimum number of {type} that may be selected.'|t('app', {
                    type: pluralElementType,
                }),
                id: 'min-relations',
                name: 'minRelations',
                value: field.minRelations,
                size: 2,
                errors: field.getErrors('minRelations'),
            }) }}

            {{ forms.textField({
                label: 'Max Relations'|t('app'),
                instructions: 'The maximum number of {type} that may be selected.'|t('app', {
                    type: pluralElementType,
                }),
                id: 'max-relations',
                name: 'maxRelations',
                value: field.maxRelations,
                size: 2,
                errors: field.getErrors('maxRelations'),
            }) }}
        {% endif %}
    {% endblock %}

    {% block viewModeField %}
        {{ field.getViewModeFieldHtml()|raw }}
    {% endblock %}

    {% block selectionLabelField %}
        {{ forms.textField({
            label: \"Selection Label\"|t('app'),
            instructions: \"Enter the text you want to appear on the {type} selection input.\"|t('app', { type: elementType }),
            id: 'selectionLabel',
            name: 'selectionLabel',
            value: field.selectionLabel,
            placeholder: field.defaultSelectionLabel(),
            errors: field.getErrors('selectionLabel')
        }) }}
    {% endblock %}

    {% block validateRelatedElementsField %}
        {{ forms.checkboxField({
            label: 'Validate related {type}'|t('app', { type: pluralElementType }),
            instructions: 'Whether validation errors on the related {type} should prevent the source element from being saved.'|t('app', { type: pluralElementType }),
            id: 'validate-related-elements',
            name: 'validateRelatedElements',
            checked: field.validateRelatedElements
        }) }}
    {% endblock %}

    {% block advancedSettings %}
        <hr>

        <a class=\"fieldtoggle\" data-target=\"advanced\">{{ \"Advanced\"|t('app') }}</a>
        <div id=\"advanced\" class=\"hidden\">

            {{ forms.checkboxField({
                label: 'Allow self relations'|t('app'),
                instructions: 'Whether {type} elements should be allowed to relate to themselves.'|t('app', { type: elementType }),
                id: 'allow-self-relations',
                name: 'allowSelfRelations',
                checked: field.allowSelfRelations,
            }) }}

            {% if craft.app.getIsMultiSite() %}

                {% block targetSiteField %}
                    {{ field.getTargetSiteFieldHtml()|raw }}
                {% endblock %}

                {% block localizeRelationsField %}
                    {{ forms.checkboxField({
                        label: 'Manage relations on a per-site basis'|t('app'),
                        id: 'localize-relations',
                        name: 'localizeRelations',
                        checked: field.localizeRelations
                    }) }}
                {% endblock %}
            {% endif %}

        </div>
    {% endblock %}
{% endblock %}
", "_components/fieldtypes/elementfieldsettings", "/var/www/html/vendor/craftcms/cms/src/templates/_components/fieldtypes/elementfieldsettings.twig");
    }
}
