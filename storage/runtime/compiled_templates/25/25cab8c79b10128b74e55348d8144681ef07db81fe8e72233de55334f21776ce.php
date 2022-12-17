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

/* _layouts/components/form-action-menu */
class __TwigTemplate_877ad625a820a7d74195381a439e0f1199cc2fd407b792724b11e221e0cd5c7a extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_layouts/components/form-action-menu");
        // line 29
        echo "
";
        // line 30
        $context["safeActions"] = $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, (isset($context["formActions"]) || array_key_exists("formActions", $context) ? $context["formActions"] : (function () { throw new RuntimeError('Variable "formActions" does not exist.', 30, $this->source); })()), function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return  !(((craft\helpers\Template::attribute($this->env, $this->source, ($context["a"] ?? null), "destructive", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["a"] ?? null), "destructive", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["a"] ?? null), "destructive", [])) : (false)); });
        // line 31
        $context["destructiveActions"] = $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, (isset($context["formActions"]) || array_key_exists("formActions", $context) ? $context["formActions"] : (function () { throw new RuntimeError('Variable "formActions" does not exist.', 31, $this->source); })()), function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return (((craft\helpers\Template::attribute($this->env, $this->source, ($context["a"] ?? null), "destructive", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["a"] ?? null), "destructive", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["a"] ?? null), "destructive", [])) : (false)); });
        // line 32
        echo "
<div class=\"menu\" data-align=\"right\">
    ";
        // line 34
        if ((isset($context["safeActions"]) || array_key_exists("safeActions", $context) ? $context["safeActions"] : (function () { throw new RuntimeError('Variable "safeActions" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_actionList", [(isset($context["safeActions"]) || array_key_exists("safeActions", $context) ? $context["safeActions"] : (function () { throw new RuntimeError('Variable "safeActions" does not exist.', 35, $this->source); })()), false], 35, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 37
        echo "    ";
        if (((isset($context["safeActions"]) || array_key_exists("safeActions", $context) ? $context["safeActions"] : (function () { throw new RuntimeError('Variable "safeActions" does not exist.', 37, $this->source); })()) && (isset($context["destructiveActions"]) || array_key_exists("destructiveActions", $context) ? $context["destructiveActions"] : (function () { throw new RuntimeError('Variable "destructiveActions" does not exist.', 37, $this->source); })()))) {
            // line 38
            echo "        <hr>
    ";
        }
        // line 40
        echo "    ";
        if ((isset($context["destructiveActions"]) || array_key_exists("destructiveActions", $context) ? $context["destructiveActions"] : (function () { throw new RuntimeError('Variable "destructiveActions" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_actionList", [(isset($context["destructiveActions"]) || array_key_exists("destructiveActions", $context) ? $context["destructiveActions"] : (function () { throw new RuntimeError('Variable "destructiveActions" does not exist.', 41, $this->source); })()), true], 41, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 43
        echo "</div>
";
        craft\helpers\Template::endProfile("template", "_layouts/components/form-action-menu");
    }

    // line 1
    public function macro_actionList($__actions__ = null, $__destructive__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "actions" => $__actions__,
            "destructive" => $__destructive__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "actionList");
            // line 2
            echo "    ";
            $macros["forms"] = $this->loadTemplate("_includes/forms", "_layouts/components/form-action-menu", 2)->unwrap();
            // line 3
            echo "    <ul>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 5
                echo "            <li>
                ";
                // line 6
                $context["linkAttributes"] = ["class" => [0 => "formsubmit", 1 => ((((                // line 9
$context["destructive"]) ?? (false))) ? ("error") : (""))], "data" => ["action" => (((craft\helpers\Template::attribute($this->env, $this->source,                 // line 12
$context["action"], "action", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "action", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "action", [])) : (false)), "redirect" => (((craft\helpers\Template::attribute($this->env, $this->source,                 // line 13
$context["action"], "redirect", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "redirect", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "redirect", [])) : (false)), "confirm" => (((craft\helpers\Template::attribute($this->env, $this->source,                 // line 14
$context["action"], "confirm", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "confirm", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "confirm", [])) : (false)), "params" => (((craft\helpers\Template::attribute($this->env, $this->source,                 // line 15
$context["action"], "params", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "params", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "params", [])) : (false)), "event-data" => (((craft\helpers\Template::attribute($this->env, $this->source,                 // line 16
$context["action"], "eventData", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "eventData", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "eventData", [])) : (false))]];
                // line 19
                echo "                <a ";
                echo craft\helpers\Html::renderTagAttributes((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 19, $this->source); })()));
                echo ">
                    ";
                // line 20
                if ((((craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "shortcut", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "shortcut", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "shortcut", [])) : (false))) {
                    // line 21
                    echo "                        ";
                    echo twig_call_macro($macros["forms"], "macro_optionShortcutLabel", ["S", (((craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "shift", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "shift", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "shift", [])) : (false))], 21, $context, $this->getSourceContext());
                    echo "
                    ";
                }
                // line 23
                echo "                    ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["action"], "label", []), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </ul>
";
            craft\helpers\Template::endProfile("macro", "actionList");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_layouts/components/form-action-menu";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 27,  129 => 23,  123 => 21,  121 => 20,  116 => 19,  114 => 16,  113 => 15,  112 => 14,  111 => 13,  110 => 12,  109 => 9,  108 => 6,  105 => 5,  101 => 4,  98 => 3,  95 => 2,  80 => 1,  74 => 43,  68 => 41,  65 => 40,  61 => 38,  58 => 37,  52 => 35,  50 => 34,  46 => 32,  44 => 31,  42 => 30,  39 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro actionList(actions, destructive) %}
    {% import '_includes/forms' as forms %}
    <ul>
        {% for action in actions %}
            <li>
                {% set linkAttributes = {
                    class: [
                        'formsubmit',
                        (destructive ?? false) ? 'error',
                    ],
                    data: {
                        action: action.action ?? false,
                        redirect: action.redirect ?? false,
                        confirm: action.confirm ?? false,
                        params: action.params ?? false,
                        'event-data': action.eventData ?? false,
                    },
                } %}
                <a {{ attr(linkAttributes) }}>
                    {% if action.shortcut ?? false %}
                        {{ forms.optionShortcutLabel('S', action.shift ?? false) }}
                    {% endif %}
                    {{ action.label }}
                </a>
            </li>
        {% endfor %}
    </ul>
{% endmacro %}

{% set safeActions = formActions|filter(a => not (a.destructive ?? false)) %}
{% set destructiveActions = formActions|filter(a => a.destructive ?? false) %}

<div class=\"menu\" data-align=\"right\">
    {% if safeActions %}
        {{ _self.actionList(safeActions, false) }}
    {% endif %}
    {% if safeActions and destructiveActions %}
        <hr>
    {% endif %}
    {% if destructiveActions %}
        {{ _self.actionList(destructiveActions, true) }}
    {% endif %}
</div>
", "_layouts/components/form-action-menu", "/var/www/html/vendor/craftcms/cms/src/templates/_layouts/components/form-action-menu.twig");
    }
}
