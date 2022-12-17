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

/* _includes/forms/selectize */
class __TwigTemplate_45930cfcdf3b96ce3057350bb57c5274fc5fad7cf4ae9b9011fde37188ec9001 extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/selectize");
        // line 1
        $context["id"] = (($context["id"]) ?? (("selectize" . twig_random($this->env))));
        // line 2
        $context["selectizeOptions"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["dropdownParent" => "body"], ((        // line 4
$context["selectizeOptions"]) ?? ([])));
        // line 5
        echo "
";
        // line 7
        $context["options"] = twig_array_map($this->env, (($context["options"]) ?? ([])), function ($__o__, $__k__) use ($context, $macros) { $context["o"] = $__o__; $context["k"] = $__k__; return (((craft\helpers\Template::attribute($this->env, $this->source, ($context["o"] ?? null), "optgroup", [], "any", true, true) || craft\helpers\Template::attribute($this->env, $this->source, ($context["o"] ?? null), "value", [], "any", true, true))) ? ((isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 7, $this->source); })())) : (["value" =>         // line 8
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 8, $this->source); })()), "label" => ((craft\helpers\Template::attribute($this->env, $this->source,         // line 9
($context["o"] ?? null), "label", [], "any", true, true)) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 9, $this->source); })()), "label", [])) : ((isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 9, $this->source); })())))])); });
        // line 11
        echo "
";
        // line 12
        if ((($context["includeEnvVars"]) ?? (false))) {
            // line 13
            echo "    ";
            if ( !array_key_exists("allowedEnvValues", $context)) {
                // line 14
                echo "        ";
                $context["allowedEnvValues"] = twig_array_map($this->env, $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 14, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return  !craft\helpers\Template::attribute($this->env, $this->source, ($context["o"] ?? null), "optgroup", [], "any", true, true); }), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return craft\helpers\Template::attribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 14, $this->source); })()), "value", []); });
                // line 15
                echo "    ";
            }
            // line 16
            echo "    ";
            $context["options"] = twig_array_map($this->env, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 16, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return ((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, ($context["o"] ?? null), "data", [], "any", false, true), "data", [], "any", false, true), "hint", [], "any", true, true)) ? ((isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 16, $this->source); })())) : ($this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 16, $this->source); })()), ["data" => ["data" => ["hint" => craft\helpers\Template::attribute($this->env, $this->source,             // line 19
(isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 19, $this->source); })()), "value", [])]]], true))); });
        }
        // line 24
        echo "
";
        // line 25
        if ((array_key_exists("addOptionFn", $context) && array_key_exists("addOptionLabel", $context))) {
            // line 26
            echo "    ";
            if (twig_test_empty((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 26, $this->source); })()))) {
                // line 27
                echo "        ";
                $context["selectizeOptions"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["selectizeOptions"]) || array_key_exists("selectizeOptions", $context) ? $context["selectizeOptions"] : (function () { throw new RuntimeError('Variable "selectizeOptions" does not exist.', 27, $this->source); })()), ["allowEmptyOption" => true]);
                // line 30
                echo "        ";
                $context["options"] = [0 => ["value" => "", "label" => " "]];
                // line 33
                echo "    ";
            }
            // line 34
            echo "    ";
            $context["options"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 34, $this->source); })()), [0 => ["label" =>             // line 36
(isset($context["addOptionLabel"]) || array_key_exists("addOptionLabel", $context) ? $context["addOptionLabel"] : (function () { throw new RuntimeError('Variable "addOptionLabel" does not exist.', 36, $this->source); })()), "value" => "__add__", "data" => ["data" => ["addOption" => true]]]]);
        }
        // line 46
        echo "
";
        // line 47
        if ((($context["includeEnvVars"]) ?? (false))) {
            // line 48
            echo "    ";
            $context["options"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 48, $this->source); })()), craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 48, $this->source); })()), "cp", []), "getEnvOptions", [0 => (isset($context["allowedEnvValues"]) || array_key_exists("allowedEnvValues", $context) ? $context["allowedEnvValues"] : (function () { throw new RuntimeError('Variable "allowedEnvValues" does not exist.', 48, $this->source); })())], "method"));
        }
        // line 50
        echo "
";
        // line 51
        $this->loadTemplate("_includes/forms/select", "_includes/forms/selectize", 51)->display(twig_array_merge($context, ["class" => array_unique($this->extensions['craft\web\twig\Extension']->pushFilter(craft\helpers\Html::explodeClass(((        // line 52
$context["class"]) ?? ([]))), "selectize"))]));
        // line 54
        echo "
";
        // line 55
        ob_start();
        // line 56
        echo "(() => {
    const label = (data, showHint) => {
        let label = '';
        if (data.addOption) {
            label += '<span class=\"icon add\"></span> ';
        }
        const status = (() => {
            if (typeof data.status !== 'undefined') {
                return data.status;
            }
            if (typeof data.boolean !== 'undefined') {
                return data.boolean ? 'green' : 'white';
            }
            return null;
        })();
        if (status) {
            label += `<span class=\"status \${status}\"></span>`;
        }
        label += `<span>\${Craft.escapeHtml(data.text)}</span>`;
        if (showHint && typeof data.hint === 'string' && data.hint !== '') {
            label += `<span class=\"light\">– \${Craft.escapeHtml(data.hint)}</span>`;
        }
        return `<div class=\"flex flex-nowrap\">\${label}</div>`;
    };

    const \$select = \$(\"#";
        // line 81
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getFilter('namespaceInputId')->getCallable()((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 81, $this->source); })())), "js"), "html", null, true);
        echo "\");

    const onChange = () => {
        const selectize = \$select.data('selectize');
        const \$item = selectize.\$wrapper.find('.item');

        const boolean = \$item.data('boolean');
        if (typeof boolean !== 'undefined') {
            \$select.data('boolean', !!boolean);
        } else {
            \$select.removeData('boolean');
        }

        ";
        // line 94
        if ((array_key_exists("addOptionFn", $context) && array_key_exists("addOptionLabel", $context))) {
            // line 95
            echo "        if (\$item.data('add-option')) {
            selectize.setValue('', true);
            (";
            // line 97
            echo (isset($context["addOptionFn"]) || array_key_exists("addOptionFn", $context) ? $context["addOptionFn"] : (function () { throw new RuntimeError('Variable "addOptionFn" does not exist.', 97, $this->source); })());
            echo ")(item => {
                selectize.addOption(item);

                // Remove the “Create” option and re-place it at the end
                selectize.removeOption('__add__', true);
                selectize.addOption({
                    text: ";
            // line 103
            echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["addOptionLabel"]) || array_key_exists("addOptionLabel", $context) ? $context["addOptionLabel"] : (function () { throw new RuntimeError('Variable "addOptionLabel" does not exist.', 103, $this->source); })()));
            echo " ,
                    value: '__add__',
                    addOption: true,
                    hint: null,
                });

                selectize.refreshOptions(false);
                selectize.setValue(item.value);
            }, selectize);
        }
        ";
        }
        // line 114
        echo "    };

    \$select.selectize(\$.extend({
        searchField: ['text', 'hint', 'value', 'keywords'],
        render: {
            option: data => {
                const classes = ['option'];
                if (data.value === '') {
                    classes.push('selectize-dropdown-emptyoptionlabel');
                }
                return `<div class=\"\${classes.join(' ')}\">\${label(data, true)}</div>`;
            },
            item: data => {
                const attrs = ['class=\"item\"'];
                if (typeof data.boolean !== 'undefined') {
                    attrs.push(`data-boolean=\"\${data.boolean ? '1' : ''}\"`);
                }
                if (typeof data.addOption !== 'undefined') {
                    attrs.push('data-add-option=\"1\"');
                }
                return `<div \${attrs.join(' ')}>\${label(data, false)}</div>`;
            },
        },
        onChange: onChange,
        onInitialize: function () {
            // Copy all ARIA attributes from initial select to selectize
            var s = this;
            var attrs = {}
            var initialSelect = \$(this.\$input)[0];
            \$(initialSelect.attributes).filter(function (index, attribute) {
                return /^aria-/.test(attribute.name);
            })
            .each(function (index, attribute) {
                attrs[attribute.name] = attribute.value;
            });
            \$(this.\$control_input).attr(attrs);
        }
    }, ";
        // line 151
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["selectizeOptions"]) || array_key_exists("selectizeOptions", $context) ? $context["selectizeOptions"] : (function () { throw new RuntimeError('Variable "selectizeOptions" does not exist.', 151, $this->source); })()));
        echo "));

    onChange();
})()
";
        craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        craft\helpers\Template::endProfile("template", "_includes/forms/selectize");
    }

    public function getTemplateName()
    {
        return "_includes/forms/selectize";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 151,  183 => 114,  169 => 103,  160 => 97,  156 => 95,  154 => 94,  138 => 81,  111 => 56,  109 => 55,  106 => 54,  104 => 52,  103 => 51,  100 => 50,  96 => 48,  94 => 47,  91 => 46,  88 => 36,  86 => 34,  83 => 33,  80 => 30,  77 => 27,  74 => 26,  72 => 25,  69 => 24,  66 => 19,  64 => 16,  61 => 15,  58 => 14,  55 => 13,  53 => 12,  50 => 11,  48 => 9,  47 => 8,  46 => 7,  43 => 5,  41 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set id = id ?? \"selectize#{random()}\" %}
{% set selectizeOptions = {
    dropdownParent: 'body',
}|merge(selectizeOptions ?? []) %}

{# Normalize the options #}
{% set options = (options ?? [])|map((o, k) => (o.optgroup is defined or o.value is defined) ? o : {
    value: k,
    label: o.label is defined ? o.label : o,
}) %}

{% if includeEnvVars ?? false %}
    {% if allowedEnvValues is not defined %}
        {% set allowedEnvValues = options|filter(o => o.optgroup is not defined)|map(o => o.value) %}
    {% endif %}
    {% set options = options|map(o => o.data.data.hint is defined ? o : o|merge({
        data: {
            data: {
                hint: o.value,
            }
        },
    }, recursive=true)) %}
{% endif %}

{% if addOptionFn is defined and addOptionLabel is defined %}
    {% if options is empty %}
        {% set selectizeOptions = selectizeOptions|merge({
            allowEmptyOption: true,
        }) %}
        {% set options = [
            {value: '', label: ' '},
        ] %}
    {% endif %}
    {% set options = options|merge([
        {
            label: addOptionLabel ,
            value: '__add__',
            data: {
                data: {
                    addOption: true,
                },
            },
        },
    ]) %}
{% endif %}

{% if includeEnvVars ?? false %}
    {% set options = options|merge(craft.cp.getEnvOptions(allowedEnvValues)) %}
{% endif %}

{% include '_includes/forms/select' with {
    class: (class ?? [])|explodeClass|push('selectize')|unique,
} %}

{% js %}
(() => {
    const label = (data, showHint) => {
        let label = '';
        if (data.addOption) {
            label += '<span class=\"icon add\"></span> ';
        }
        const status = (() => {
            if (typeof data.status !== 'undefined') {
                return data.status;
            }
            if (typeof data.boolean !== 'undefined') {
                return data.boolean ? 'green' : 'white';
            }
            return null;
        })();
        if (status) {
            label += `<span class=\"status \${status}\"></span>`;
        }
        label += `<span>\${Craft.escapeHtml(data.text)}</span>`;
        if (showHint && typeof data.hint === 'string' && data.hint !== '') {
            label += `<span class=\"light\">– \${Craft.escapeHtml(data.hint)}</span>`;
        }
        return `<div class=\"flex flex-nowrap\">\${label}</div>`;
    };

    const \$select = \$(\"#{{ id|namespaceInputId|e('js') }}\");

    const onChange = () => {
        const selectize = \$select.data('selectize');
        const \$item = selectize.\$wrapper.find('.item');

        const boolean = \$item.data('boolean');
        if (typeof boolean !== 'undefined') {
            \$select.data('boolean', !!boolean);
        } else {
            \$select.removeData('boolean');
        }

        {% if addOptionFn is defined and addOptionLabel is defined %}
        if (\$item.data('add-option')) {
            selectize.setValue('', true);
            ({{ addOptionFn|raw }})(item => {
                selectize.addOption(item);

                // Remove the “Create” option and re-place it at the end
                selectize.removeOption('__add__', true);
                selectize.addOption({
                    text: {{ addOptionLabel|json_encode|raw }} ,
                    value: '__add__',
                    addOption: true,
                    hint: null,
                });

                selectize.refreshOptions(false);
                selectize.setValue(item.value);
            }, selectize);
        }
        {% endif %}
    };

    \$select.selectize(\$.extend({
        searchField: ['text', 'hint', 'value', 'keywords'],
        render: {
            option: data => {
                const classes = ['option'];
                if (data.value === '') {
                    classes.push('selectize-dropdown-emptyoptionlabel');
                }
                return `<div class=\"\${classes.join(' ')}\">\${label(data, true)}</div>`;
            },
            item: data => {
                const attrs = ['class=\"item\"'];
                if (typeof data.boolean !== 'undefined') {
                    attrs.push(`data-boolean=\"\${data.boolean ? '1' : ''}\"`);
                }
                if (typeof data.addOption !== 'undefined') {
                    attrs.push('data-add-option=\"1\"');
                }
                return `<div \${attrs.join(' ')}>\${label(data, false)}</div>`;
            },
        },
        onChange: onChange,
        onInitialize: function () {
            // Copy all ARIA attributes from initial select to selectize
            var s = this;
            var attrs = {}
            var initialSelect = \$(this.\$input)[0];
            \$(initialSelect.attributes).filter(function (index, attribute) {
                return /^aria-/.test(attribute.name);
            })
            .each(function (index, attribute) {
                attrs[attribute.name] = attribute.value;
            });
            \$(this.\$control_input).attr(attrs);
        }
    }, {{ selectizeOptions|json_encode|raw }}));

    onChange();
})()
{% endjs %}
", "_includes/forms/selectize", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms/selectize.twig");
    }
}
