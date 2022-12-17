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

/* settings/filesystems/_edit.twig */
class __TwigTemplate_67a1e362d08c58ec1f10d47c06e2d7c83297ef2d9942c207b544c3238477fee6 extends Template
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
        craft\helpers\Template::beginProfile("template", "settings/filesystems/_edit.twig");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "settings/filesystems/_edit.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ((isset($context["oldHandle"]) || array_key_exists("oldHandle", $context) ? $context["oldHandle"] : (function () { throw new RuntimeError('Variable "oldHandle" does not exist.', 3, $this->source); })())) {
            echo craft\helpers\Html::hiddenInput("oldHandle", (isset($context["oldHandle"]) || array_key_exists("oldHandle", $context) ? $context["oldHandle"] : (function () { throw new RuntimeError('Variable "oldHandle" does not exist.', 3, $this->source); })()));
        }
        // line 4
        echo "
";
        // line 5
        echo twig_call_macro($macros["forms"], "macro_textField", [["first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "id" => "name", "name" => "name", "value" => ((        // line 10
array_key_exists("filesystem", $context)) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["filesystem"]) || array_key_exists("filesystem", $context) ? $context["filesystem"] : (function () { throw new RuntimeError('Variable "filesystem" does not exist.', 10, $this->source); })()), "name", [])) : (null)), "errors" => ((        // line 11
array_key_exists("filesystem", $context)) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["filesystem"]) || array_key_exists("filesystem", $context) ? $context["filesystem"] : (function () { throw new RuntimeError('Variable "filesystem" does not exist.', 11, $this->source); })()), "getErrors", [0 => "name"], "method")) : (null)), "autofocus" => true, "required" => true]], 5, $context, $this->getSourceContext());
        // line 14
        echo "

";
        // line 16
        echo twig_call_macro($macros["forms"], "macro_textField", [["first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "id" => "handle", "name" => "handle", "class" => "code", "autocorrect" => false, "autocapitalize" => false, "value" => ((        // line 24
array_key_exists("filesystem", $context)) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["filesystem"]) || array_key_exists("filesystem", $context) ? $context["filesystem"] : (function () { throw new RuntimeError('Variable "filesystem" does not exist.', 24, $this->source); })()), "handle", [])) : (null)), "errors" => ((        // line 25
array_key_exists("filesystem", $context)) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["filesystem"]) || array_key_exists("filesystem", $context) ? $context["filesystem"] : (function () { throw new RuntimeError('Variable "filesystem" does not exist.', 25, $this->source); })()), "getErrors", [0 => "handle"], "method")) : (null)), "required" => true]], 16, $context, $this->getSourceContext());
        // line 27
        echo "

";
        // line 29
        echo twig_call_macro($macros["forms"], "macro_lightswitchField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Files in this filesystem have public URLs", "app"), "name" => "hasUrls", "on" => craft\helpers\Template::attribute($this->env, $this->source,         // line 32
(isset($context["filesystem"]) || array_key_exists("filesystem", $context) ? $context["filesystem"] : (function () { throw new RuntimeError('Variable "filesystem" does not exist.', 32, $this->source); })()), "hasUrls", []), "toggle" => "url-field"]], 29, $context, $this->getSourceContext());
        // line 34
        echo "

<div id=\"url-field\" class=\"";
        // line 36
        if ( !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["filesystem"]) || array_key_exists("filesystem", $context) ? $context["filesystem"] : (function () { throw new RuntimeError('Variable "filesystem" does not exist.', 36, $this->source); })()), "hasUrls", [])) {
            echo "hidden";
        }
        echo "\">
    ";
        // line 37
        echo twig_call_macro($macros["forms"], "macro_autosuggestField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Base URL", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The base URL to the files in this filesystem.", "app"), "id" => "url", "class" => [0 => "ltr", 1 => "fs-url"], "name" => "url", "suggestEnvVars" => true, "suggestAliases" => true, "value" => ((        // line 45
array_key_exists("filesystem", $context)) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["filesystem"]) || array_key_exists("filesystem", $context) ? $context["filesystem"] : (function () { throw new RuntimeError('Variable "filesystem" does not exist.', 45, $this->source); })()), "url", [])) : (null)), "errors" => ((        // line 46
array_key_exists("filesystem", $context)) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["filesystem"]) || array_key_exists("filesystem", $context) ? $context["filesystem"] : (function () { throw new RuntimeError('Variable "filesystem" does not exist.', 46, $this->source); })()), "getErrors", [0 => "url"], "method")) : (null)), "required" => true, "placeholder" => "//example.com/path/to/folder"]], 37, $context, $this->getSourceContext());
        // line 49
        echo "
</div>

<hr>

";
        // line 54
        if ($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["fsOptions"]) || array_key_exists("fsOptions", $context) ? $context["fsOptions"] : (function () { throw new RuntimeError('Variable "fsOptions" does not exist.', 54, $this->source); })()))) {
            // line 55
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Filesystem Type", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What type of filesystem is this?", "app"), "id" => "type", "name" => "type", "options" =>             // line 60
(isset($context["fsOptions"]) || array_key_exists("fsOptions", $context) ? $context["fsOptions"] : (function () { throw new RuntimeError('Variable "fsOptions" does not exist.', 60, $this->source); })()), "value" => get_class(            // line 61
(isset($context["filesystem"]) || array_key_exists("filesystem", $context) ? $context["filesystem"] : (function () { throw new RuntimeError('Variable "filesystem" does not exist.', 61, $this->source); })())), "toggle" => true]], 55, $context, $this->getSourceContext());
            // line 63
            echo "
";
        }
        // line 65
        echo "
";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fsTypes"]) || array_key_exists("fsTypes", $context) ? $context["fsTypes"] : (function () { throw new RuntimeError('Variable "fsTypes" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fsType"]) {
            // line 67
            echo "    ";
            $context["isCurrent"] = ($context["fsType"] == get_class((isset($context["filesystem"]) || array_key_exists("filesystem", $context) ? $context["filesystem"] : (function () { throw new RuntimeError('Variable "filesystem" does not exist.', 67, $this->source); })())));
            // line 68
            echo "
    <div id=\"";
            // line 69
            echo twig_escape_filter($this->env, craft\helpers\Html::id($context["fsType"]), "html", null, true);
            echo "\"";
            if ( !(isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new RuntimeError('Variable "isCurrent" does not exist.', 69, $this->source); })())) {
                echo " class=\"hidden\"";
            }
            echo ">
        ";
            // line 70
            $_namespace = (("types[" . $context["fsType"]) . "]");
            if ($_namespace) {
                $_originalNamespace = Craft::$app->getView()->getNamespace();
                Craft::$app->getView()->setNamespace(Craft::$app->getView()->namespaceInputName($_namespace));
                ob_start();
                try {
                    // line 71
                    echo "            ";
                    if ((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new RuntimeError('Variable "isCurrent" does not exist.', 71, $this->source); })())) {
                        // line 72
                        echo "                ";
                        echo craft\helpers\Template::attribute($this->env, $this->source, (isset($context["filesystem"]) || array_key_exists("filesystem", $context) ? $context["filesystem"] : (function () { throw new RuntimeError('Variable "filesystem" does not exist.', 72, $this->source); })()), "getSettingsHtml", [], "method");
                        echo "
            ";
                    } else {
                        // line 74
                        echo "                ";
                        echo craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["fsInstances"]) || array_key_exists("fsInstances", $context) ? $context["fsInstances"] : (function () { throw new RuntimeError('Variable "fsInstances" does not exist.', 74, $this->source); })()), $context["fsType"], [], "array"), "getSettingsHtml", [], "method");
                        echo "
            ";
                    }
                    // line 76
                    echo "        ";
                } catch (Exception $e) {
                    ob_end_clean();

                    throw $e;
                }
                echo craft\helpers\Html::namespaceHtml(ob_get_clean(), $_namespace, false);
                Craft::$app->getView()->setNamespace($_originalNamespace);
            } else {
                // line 71
                echo "            ";
                if ((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new RuntimeError('Variable "isCurrent" does not exist.', 71, $this->source); })())) {
                    // line 72
                    echo "                ";
                    echo craft\helpers\Template::attribute($this->env, $this->source, (isset($context["filesystem"]) || array_key_exists("filesystem", $context) ? $context["filesystem"] : (function () { throw new RuntimeError('Variable "filesystem" does not exist.', 72, $this->source); })()), "getSettingsHtml", [], "method");
                    echo "
            ";
                } else {
                    // line 74
                    echo "                ";
                    echo craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["fsInstances"]) || array_key_exists("fsInstances", $context) ? $context["fsInstances"] : (function () { throw new RuntimeError('Variable "fsInstances" does not exist.', 74, $this->source); })()), $context["fsType"], [], "array"), "getSettingsHtml", [], "method");
                    echo "
            ";
                }
                // line 76
                echo "        ";
            }
            unset($_originalNamespace, $_namespace);
            // line 77
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fsType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "

";
        // line 81
        if (( !array_key_exists("filesystem", $context) ||  !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["filesystem"]) || array_key_exists("filesystem", $context) ? $context["filesystem"] : (function () { throw new RuntimeError('Variable "filesystem" does not exist.', 81, $this->source); })()), "handle", []))) {
            // line 82
            echo "    ";
            ob_start();
            // line 83
            echo "        new Craft.HandleGenerator(\"#";
            echo twig_escape_filter($this->env, $this->env->getFilter('namespaceInputId')->getCallable()("name"), "html", null, true);
            echo "\", \"#";
            echo twig_escape_filter($this->env, $this->env->getFilter('namespaceInputId')->getCallable()("handle"), "html", null, true);
            echo "\");
    ";
            craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        }
        craft\helpers\Template::endProfile("template", "settings/filesystems/_edit.twig");
    }

    public function getTemplateName()
    {
        return "settings/filesystems/_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 83,  186 => 82,  184 => 81,  180 => 79,  173 => 77,  169 => 76,  163 => 74,  157 => 72,  154 => 71,  144 => 76,  138 => 74,  132 => 72,  129 => 71,  122 => 70,  114 => 69,  111 => 68,  108 => 67,  104 => 66,  101 => 65,  97 => 63,  95 => 61,  94 => 60,  92 => 55,  90 => 54,  83 => 49,  81 => 46,  80 => 45,  79 => 37,  73 => 36,  69 => 34,  67 => 32,  66 => 29,  62 => 27,  60 => 25,  59 => 24,  58 => 16,  54 => 14,  52 => 11,  51 => 10,  50 => 5,  47 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}

{% if oldHandle %}{{ hiddenInput('oldHandle', oldHandle) }}{% endif %}

{{ forms.textField({
    first: true,
    label: \"Name\"|t('app'),
    id: 'name',
    name: 'name',
    value: (filesystem is defined ? filesystem.name : null),
    errors: (filesystem is defined ? filesystem.getErrors('name') : null),
    autofocus: true,
    required: true,
}) }}

{{ forms.textField({
    first: true,
    label: \"Handle\"|t('app'),
    id: 'handle',
    name: 'handle',
    class: 'code',
    autocorrect: false,
    autocapitalize: false,
    value: (filesystem is defined ? filesystem.handle : null),
    errors: (filesystem is defined ? filesystem.getErrors('handle') : null),
    required: true,
}) }}

{{ forms.lightswitchField({
    label: 'Files in this filesystem have public URLs'|t('app'),
    name: 'hasUrls',
    on:   filesystem.hasUrls,
    toggle: \"url-field\"
}) }}

<div id=\"url-field\" class=\"{% if not filesystem.hasUrls %}hidden{% endif %}\">
    {{ forms.autosuggestField({
        label: \"Base URL\"|t('app'),
        instructions: \"The base URL to the files in this filesystem.\"|t('app'),
        id: 'url',
        class: ['ltr', 'fs-url'],
        name: 'url',
        suggestEnvVars: true,
        suggestAliases: true,
        value: (filesystem is defined ? filesystem.url : null),
        errors: (filesystem is defined ? filesystem.getErrors('url') : null),
        required: true,
        placeholder: \"//example.com/path/to/folder\"
    }) }}
</div>

<hr>

{% if fsOptions|length %}
    {{ forms.selectField({
        label: 'Filesystem Type'|t('app'),
        instructions: \"What type of filesystem is this?\"|t('app'),
        id: 'type',
        name: 'type',
        options: fsOptions,
        value: className(filesystem),
        toggle: true
    }) }}
{% endif %}

{% for fsType in fsTypes %}
    {% set isCurrent = (fsType == className(filesystem)) %}

    <div id=\"{{ fsType|id }}\"{% if not isCurrent %} class=\"hidden\"{% endif %}>
        {% namespace 'types['~fsType~']' %}
            {% if isCurrent %}
                {{ filesystem.getSettingsHtml()|raw }}
            {% else %}
                {{ fsInstances[fsType].getSettingsHtml()|raw }}
            {% endif %}
        {% endnamespace %}
    </div>
{% endfor %}


{% if filesystem is not defined or not filesystem.handle %}
    {% js %}
        new Craft.HandleGenerator(\"#{{ 'name'|namespaceInputId }}\", \"#{{ 'handle'|namespaceInputId }}\");
    {% endjs %}
{% endif %}
", "settings/filesystems/_edit.twig", "/var/www/html/vendor/craftcms/cms/src/templates/settings/filesystems/_edit.twig");
    }
}
