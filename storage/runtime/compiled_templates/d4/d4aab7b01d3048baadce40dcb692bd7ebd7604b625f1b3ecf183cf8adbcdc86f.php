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

/* _components/fieldtypes/Assets/input.twig */
class __TwigTemplate_c1d05e7d1d2287eb47932b1d3be26584a1cd69877a9bc416788883df9b2cd9c1 extends Template
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
        craft\helpers\Template::beginProfile("template", "_components/fieldtypes/Assets/input.twig");
        // line 1
        if ((($context["name"]) ?? (false))) {
            // line 2
            echo "    ";
            echo craft\helpers\Html::hiddenInput((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 2, $this->source); })()), "");
            echo "
";
        }
        // line 5
        $context["elements"] = (($context["elements"]) ?? ([]));
        // line 6
        $context["jsClass"] = (($context["jsClass"]) ?? ("Craft.BaseElementSelectInput"));
        // line 7
        $context["sources"] = (($context["sources"]) ?? (null));
        // line 8
        $context["condition"] = (($context["condition"]) ?? (null));
        // line 9
        $context["criteria"] = (($context["criteria"]) ?? (null));
        // line 10
        $context["storageKey"] = (($context["storageKey"]) ?? (null));
        // line 11
        $context["disabled"] = (((($context["disabled"]) ?? (false))) ? (true) : (false));
        // line 12
        echo "
<div id=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\" class=\"elementselect\">
    <div class=\"elements ";
        // line 14
        if (((isset($context["viewMode"]) || array_key_exists("viewMode", $context) ? $context["viewMode"] : (function () { throw new RuntimeError('Variable "viewMode" does not exist.', 14, $this->source); })()) == "large")) {
            echo "flex-row flex-wrap";
        }
        echo "\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 15, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 16
            echo "            ";
            $this->loadTemplate("_elements/element", "_components/fieldtypes/Assets/input.twig", 16)->display(twig_array_merge($context, ["context" => "field", "size" => (((            // line 18
(isset($context["viewMode"]) || array_key_exists("viewMode", $context) ? $context["viewMode"] : (function () { throw new RuntimeError('Variable "viewMode" does not exist.', 18, $this->source); })()) == "large")) ? ("large") : ("small"))]));
            // line 20
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>

    <div class=\"flex\">
        ";
        // line 24
        if ((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "            ";
            echo $this->extensions['craft\web\twig\Extension']->tagFunction("button", ["type" => "button", "text" =>             // line 27
(isset($context["selectionLabel"]) || array_key_exists("selectionLabel", $context) ? $context["selectionLabel"] : (function () { throw new RuntimeError('Variable "selectionLabel" does not exist.', 27, $this->source); })()), "class" => [0 => "btn", 1 => "add", 2 => "icon", 3 => "dashed", 4 => ((            // line 33
(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 33, $this->source); })())) ? ("disabled") : ("")), 5 => (((            // line 34
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 34, $this->source); })()) && ($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 34, $this->source); })())) >= (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 34, $this->source); })())))) ? ("hidden") : (""))], "aria" => ["label" =>             // line 37
(isset($context["selectionLabel"]) || array_key_exists("selectionLabel", $context) ? $context["selectionLabel"] : (function () { throw new RuntimeError('Variable "selectionLabel" does not exist.', 37, $this->source); })()), "describedby" => ((            // line 38
$context["describedBy"]) ?? (false))]]);
            // line 40
            echo "
        ";
        }
        // line 42
        echo "        <div class=\"spinner hidden\"></div>
    </div>
</div>

";
        // line 46
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 46, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\prismjs\\PrismJsAsset"], "method");
        // line 47
        echo "
";
        // line 48
        $context["jsSettings"] = ["id" => $this->env->getFilter('namespaceInputId')->getCallable()(        // line 49
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })())), "name" => $this->env->getFilter('namespaceInputName')->getCallable()(        // line 50
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 50, $this->source); })())), "elementType" =>         // line 51
(isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 51, $this->source); })()), "sources" =>         // line 52
(isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 52, $this->source); })()), "condition" => ((        // line 53
(isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 53, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 53, $this->source); })()), "getConfig", [], "method")) : (null)), "criteria" =>         // line 54
(isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 54, $this->source); })()), "sourceElementId" =>         // line 55
(isset($context["sourceElementId"]) || array_key_exists("sourceElementId", $context) ? $context["sourceElementId"] : (function () { throw new RuntimeError('Variable "sourceElementId" does not exist.', 55, $this->source); })()), "viewMode" =>         // line 56
(isset($context["viewMode"]) || array_key_exists("viewMode", $context) ? $context["viewMode"] : (function () { throw new RuntimeError('Variable "viewMode" does not exist.', 56, $this->source); })()), "limit" =>         // line 57
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 57, $this->source); })()), "modalStorageKey" =>         // line 58
(isset($context["storageKey"]) || array_key_exists("storageKey", $context) ? $context["storageKey"] : (function () { throw new RuntimeError('Variable "storageKey" does not exist.', 58, $this->source); })()), "fieldId" =>         // line 59
(isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new RuntimeError('Variable "fieldId" does not exist.', 59, $this->source); })()), "prevalidate" => ((        // line 60
$context["prevalidate"]) ?? (false)), "canUpload" =>         // line 61
(isset($context["canUpload"]) || array_key_exists("canUpload", $context) ? $context["canUpload"] : (function () { throw new RuntimeError('Variable "canUpload" does not exist.', 61, $this->source); })()), "defaultFieldLayoutId" =>         // line 62
(isset($context["defaultFieldLayoutId"]) || array_key_exists("defaultFieldLayoutId", $context) ? $context["defaultFieldLayoutId"] : (function () { throw new RuntimeError('Variable "defaultFieldLayoutId" does not exist.', 62, $this->source); })()), "modalSettings" => ["hideSidebar" =>         // line 64
(isset($context["hideSidebar"]) || array_key_exists("hideSidebar", $context) ? $context["hideSidebar"] : (function () { throw new RuntimeError('Variable "hideSidebar" does not exist.', 64, $this->source); })()), "defaultSource" =>         // line 65
(isset($context["defaultUploadLocation"]) || array_key_exists("defaultUploadLocation", $context) ? $context["defaultUploadLocation"] : (function () { throw new RuntimeError('Variable "defaultUploadLocation" does not exist.', 65, $this->source); })())], "describedBy" => ((((        // line 67
$context["describedBy"]) ?? (false))) ? (twig_join_filter(twig_array_map($this->env, twig_split_filter($this->env, (isset($context["describedBy"]) || array_key_exists("describedBy", $context) ? $context["describedBy"] : (function () { throw new RuntimeError('Variable "describedBy" does not exist.', 67, $this->source); })()), " "), function ($__id__) use ($context, $macros) { $context["id"] = $__id__; return $this->env->getFilter('namespaceInputId')->getCallable()((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 67, $this->source); })())); }), " ")) : (null))];
        // line 69
        echo "
";
        // line 70
        ob_start();
        // line 71
        echo "    new ";
        echo twig_escape_filter($this->env, (isset($context["jsClass"]) || array_key_exists("jsClass", $context) ? $context["jsClass"] : (function () { throw new RuntimeError('Variable "jsClass" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "(";
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["jsSettings"]) || array_key_exists("jsSettings", $context) ? $context["jsSettings"] : (function () { throw new RuntimeError('Variable "jsSettings" does not exist.', 71, $this->source); })()));
        echo ");
";
        craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        craft\helpers\Template::endProfile("template", "_components/fieldtypes/Assets/input.twig");
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Assets/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 71,  160 => 70,  157 => 69,  155 => 67,  154 => 65,  153 => 64,  152 => 62,  151 => 61,  150 => 60,  149 => 59,  148 => 58,  147 => 57,  146 => 56,  145 => 55,  144 => 54,  143 => 53,  142 => 52,  141 => 51,  140 => 50,  139 => 49,  138 => 48,  135 => 47,  133 => 46,  127 => 42,  123 => 40,  121 => 38,  120 => 37,  119 => 34,  118 => 33,  117 => 27,  115 => 25,  113 => 24,  108 => 21,  94 => 20,  92 => 18,  90 => 16,  73 => 15,  67 => 14,  63 => 13,  60 => 12,  58 => 11,  56 => 10,  54 => 9,  52 => 8,  50 => 7,  48 => 6,  46 => 5,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if name ?? false %}
    {{ hiddenInput(name, '') }}
{% endif -%}

{% set elements = elements ?? [] -%}
{% set jsClass = jsClass ?? 'Craft.BaseElementSelectInput' -%}
{% set sources = sources ?? null -%}
{% set condition = condition ?? null -%}
{% set criteria = criteria ?? null -%}
{% set storageKey = storageKey ?? null -%}
{% set disabled = (disabled ?? false) ? true : false %}

<div id=\"{{ id }}\" class=\"elementselect\">
    <div class=\"elements {% if viewMode == 'large' %}flex-row flex-wrap{% endif %}\">
        {% for element in elements %}
            {% include \"_elements/element\" with {
                context: 'field',
                size: (viewMode == 'large' ? 'large' : 'small')
            } %}
        {% endfor %}
    </div>

    <div class=\"flex\">
        {% if sources %}
            {{ tag('button', {
                type: 'button',
                text: selectionLabel,
                class: [
                    'btn',
                    'add',
                    'icon',
                    'dashed',
                    disabled ? 'disabled',
                    limit and elements|length >= limit ? 'hidden',
                ],
                aria: {
                    label: selectionLabel,
                    describedby: describedBy ?? false,
                },
            }) }}
        {% endif %}
        <div class=\"spinner hidden\"></div>
    </div>
</div>

{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\prismjs\\\\PrismJsAsset\") %}

{% set jsSettings = {
    id: id|namespaceInputId,
    name: name|namespaceInputName,
    elementType: elementType,
    sources: sources,
    condition: condition ? condition.getConfig() : null,
    criteria: criteria,
    sourceElementId: sourceElementId,
    viewMode: viewMode,
    limit: limit,
    modalStorageKey: storageKey,
    fieldId: fieldId,
    prevalidate: prevalidate ?? false,
    canUpload: canUpload,
    defaultFieldLayoutId: defaultFieldLayoutId,
    modalSettings: {
        hideSidebar: hideSidebar,
        defaultSource: defaultUploadLocation
    },
    describedBy: (describedBy ?? false) ? describedBy|split(' ')|map(id => id|namespaceInputId)|join(' ') : null,
} %}

{% js %}
    new {{ jsClass }}({{ jsSettings|json_encode|raw }});
{% endjs %}
", "_components/fieldtypes/Assets/input.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_components/fieldtypes/Assets/input.twig");
    }
}
