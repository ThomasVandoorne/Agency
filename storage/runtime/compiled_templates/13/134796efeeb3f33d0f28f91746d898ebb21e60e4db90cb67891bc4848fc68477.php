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

/* _elements/toolbar */
class __TwigTemplate_514c935e04d7341f9f4904b6aa20af9efbb6f11cb4c15c7dfb1e93d439732842 extends Template
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
        craft\helpers\Template::beginProfile("template", "_elements/toolbar");
        // line 1
        $macros["__internal_parse_1"] = $this->macros["__internal_parse_1"] = $this->loadTemplate("_includes/forms", "_elements/toolbar", 1)->unwrap();
        // line 3
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 3, $this->source); })()), "registerTranslations", [0 => "app", 1 => [0 => "Sort by {attribute}", 1 => "Score", 2 => "Structure", 3 => "Display in a table", 4 => "Display hierarchically", 5 => "Display as thumbnails"]], "method");
        // line 11
        echo "
";
        // line 12
        $context["elementInstance"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 12, $this->source); })()), "app", []), "elements", []), "createElement", [0 => (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 12, $this->source); })())], "method");
        // line 13
        $context["context"] = ((array_key_exists("context", $context)) ? ((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 13, $this->source); })())) : ("index"));
        // line 14
        $context["showStatusMenu"] = (((array_key_exists("showStatusMenu", $context) && ((isset($context["showStatusMenu"]) || array_key_exists("showStatusMenu", $context) ? $context["showStatusMenu"] : (function () { throw new RuntimeError('Variable "showStatusMenu" does not exist.', 14, $this->source); })()) != "auto"))) ? ((isset($context["showStatusMenu"]) || array_key_exists("showStatusMenu", $context) ? $context["showStatusMenu"] : (function () { throw new RuntimeError('Variable "showStatusMenu" does not exist.', 14, $this->source); })())) : (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["elementInstance"]) || array_key_exists("elementInstance", $context) ? $context["elementInstance"] : (function () { throw new RuntimeError('Variable "elementInstance" does not exist.', 14, $this->source); })()), "hasStatuses", [], "method")));
        // line 15
        $context["showSiteMenu"] = ((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 15, $this->source); })()), "app", []), "getIsMultiSite", [], "method")) ? ((($context["showSiteMenu"]) ?? ("auto"))) : (false));
        // line 16
        if (((isset($context["showSiteMenu"]) || array_key_exists("showSiteMenu", $context) ? $context["showSiteMenu"] : (function () { throw new RuntimeError('Variable "showSiteMenu" does not exist.', 16, $this->source); })()) == "auto")) {
            // line 17
            echo "    ";
            $context["showSiteMenu"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["elementInstance"]) || array_key_exists("elementInstance", $context) ? $context["elementInstance"] : (function () { throw new RuntimeError('Variable "elementInstance" does not exist.', 17, $this->source); })()), "isLocalized", [], "method");
        }
        // line 19
        $context["idPrefix"] = (("elementtoolbar" . twig_random($this->env)) . "-");
        // line 20
        echo "
";
        // line 21
        if (((isset($context["showStatusMenu"]) || array_key_exists("showStatusMenu", $context) ? $context["showStatusMenu"] : (function () { throw new RuntimeError('Variable "showStatusMenu" does not exist.', 21, $this->source); })()) || ((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 21, $this->source); })()) == "index"))) {
            // line 22
            echo "    <div>
        <label id=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new RuntimeError('Variable "idPrefix" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "status-label\" class=\"visually-hidden\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Status", "app"), "html", null, true);
            echo "</label>
        <button id=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new RuntimeError('Variable "idPrefix" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "status-button\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new RuntimeError('Variable "idPrefix" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "status-label\" type=\"button\" class=\"btn menubtn statusmenubtn\"><span class=\"status all\"></span>";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("All", "app"), "html", null, true);
            echo "</button>
        <div class=\"menu\">
            <ul class=\"padded\">
                <li><a data-status=\"\" class=\"sel\"><span class=\"status all\"></span>";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("All", "app"), "html", null, true);
            echo "</a></li>
                ";
            // line 28
            if ((isset($context["showStatusMenu"]) || array_key_exists("showStatusMenu", $context) ? $context["showStatusMenu"] : (function () { throw new RuntimeError('Variable "showStatusMenu" does not exist.', 28, $this->source); })())) {
                // line 29
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["elementInstance"]) || array_key_exists("elementInstance", $context) ? $context["elementInstance"] : (function () { throw new RuntimeError('Variable "elementInstance" does not exist.', 29, $this->source); })()), "statuses", [], "method"));
                foreach ($context['_seq'] as $context["status"] => $context["info"]) {
                    // line 30
                    echo "                        ";
                    $context["label"] = (((craft\helpers\Template::attribute($this->env, $this->source, $context["info"], "label", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["info"], "label", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["info"], "label", [])) : ($context["info"]));
                    // line 31
                    echo "                        ";
                    $context["color"] = (((craft\helpers\Template::attribute($this->env, $this->source, $context["info"], "color", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["info"], "color", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["info"], "color", [])) : (""));
                    // line 32
                    echo "                        <li><a data-status=\"";
                    echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                    echo "\"><span class=\"status ";
                    echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 32, $this->source); })()), "html", null, true);
                    echo "\"></span>";
                    echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 32, $this->source); })()), "html", null, true);
                    echo "</a></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['status'], $context['info'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "                ";
            }
            // line 35
            echo "            </ul>
            ";
            // line 36
            if (((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 36, $this->source); })()) == "index")) {
                // line 37
                echo "                ";
                if ((isset($context["showStatusMenu"]) || array_key_exists("showStatusMenu", $context) ? $context["showStatusMenu"] : (function () { throw new RuntimeError('Variable "showStatusMenu" does not exist.', 37, $this->source); })())) {
                    echo "<hr class=\"padded\">";
                }
                // line 38
                echo "                <ul class=\"padded\">
                    ";
                // line 39
                if ((($context["canHaveDrafts"]) ?? (false))) {
                    // line 40
                    echo "                        <li><a data-drafts><span class=\"icon\" data-icon=\"draft\" aria-hidden=\"true\"></span>";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Drafts", "app"), "html", null, true);
                    echo "</a></li>
                    ";
                }
                // line 42
                echo "                    <li><a data-trashed><span class=\"icon\" data-icon=\"trash\" aria-hidden=\"true\"></span>";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Trashed", "app"), "html", null, true);
                echo "</a></li>
                </ul>
            ";
            }
            // line 45
            echo "        </div>
    </div>
";
        }
        // line 48
        if ((isset($context["showSiteMenu"]) || array_key_exists("showSiteMenu", $context) ? $context["showSiteMenu"] : (function () { throw new RuntimeError('Variable "showSiteMenu" does not exist.', 48, $this->source); })())) {
            // line 49
            echo "    ";
            $this->loadTemplate("_elements/sitemenu", "_elements/toolbar", 49)->display($context);
        }
        // line 51
        echo "<div class=\"flex-grow texticon search icon has-filter-btn\">
    ";
        // line 52
        echo twig_call_macro($macros["__internal_parse_1"], "macro_text", [["class" => "clearable", "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("Search", "app"), "inputAttributes" => ["aria" => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Search", "app")]]]], 52, $context, $this->getSourceContext());
        // line 60
        echo "
    ";
        // line 61
        echo $this->extensions['craft\web\twig\Extension']->tagFunction("button", ["role" => "button", "class" => "clear-btn hidden", "title" => $this->extensions['craft\web\twig\Extension']->translateFilter("Clear search", "app"), "aria" => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Clear search", "app")]]);
        // line 68
        echo "
    <button class=\"filter-btn\" title=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Filter results", "app"), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Filter results", "app"), "html", null, true);
        echo "\" aria-expanded=\"false\"></button>
</div>
";
        craft\helpers\Template::endProfile("template", "_elements/toolbar");
    }

    public function getTemplateName()
    {
        return "_elements/toolbar";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 69,  169 => 68,  167 => 61,  164 => 60,  162 => 52,  159 => 51,  155 => 49,  153 => 48,  148 => 45,  141 => 42,  135 => 40,  133 => 39,  130 => 38,  125 => 37,  123 => 36,  120 => 35,  117 => 34,  102 => 32,  99 => 31,  96 => 30,  91 => 29,  89 => 28,  85 => 27,  75 => 24,  69 => 23,  66 => 22,  64 => 21,  61 => 20,  59 => 19,  55 => 17,  53 => 16,  51 => 15,  49 => 14,  47 => 13,  45 => 12,  42 => 11,  40 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% from \"_includes/forms\" import text -%}

{% do view.registerTranslations('app', [
    \"Sort by {attribute}\",
    \"Score\",
    \"Structure\",
    \"Display in a table\",
    \"Display hierarchically\",
    \"Display as thumbnails\",
]) %}

{% set elementInstance = craft.app.elements.createElement(elementType) %}
{% set context = context is defined ? context : 'index' %}
{% set showStatusMenu = (showStatusMenu is defined and showStatusMenu != 'auto' ? showStatusMenu : elementInstance.hasStatuses()) %}
{% set showSiteMenu = (craft.app.getIsMultiSite() ? (showSiteMenu ?? 'auto') : false) %}
{% if showSiteMenu == 'auto' %}
    {% set showSiteMenu = elementInstance.isLocalized() %}
{% endif %}
{% set idPrefix = \"elementtoolbar#{random()}-\" %}

{% if showStatusMenu or context == 'index' %}
    <div>
        <label id=\"{{ idPrefix }}status-label\" class=\"visually-hidden\">{{ \"Status\"|t('app') }}</label>
        <button id=\"{{ idPrefix }}status-button\" aria-labelledby=\"{{ idPrefix }}status-label\" type=\"button\" class=\"btn menubtn statusmenubtn\"><span class=\"status all\"></span>{{ \"All\"|t('app') }}</button>
        <div class=\"menu\">
            <ul class=\"padded\">
                <li><a data-status=\"\" class=\"sel\"><span class=\"status all\"></span>{{ \"All\"|t('app') }}</a></li>
                {% if showStatusMenu %}
                    {% for status, info in elementInstance.statuses() %}
                        {% set label = info.label ?? info %}
                        {% set color = info.color ?? '' %}
                        <li><a data-status=\"{{ status }}\"><span class=\"status {{ status }} {{ color }}\"></span>{{ label }}</a></li>
                    {% endfor %}
                {% endif %}
            </ul>
            {% if context == 'index' %}
                {% if showStatusMenu %}<hr class=\"padded\">{% endif %}
                <ul class=\"padded\">
                    {% if canHaveDrafts ?? false %}
                        <li><a data-drafts><span class=\"icon\" data-icon=\"draft\" aria-hidden=\"true\"></span>{{ 'Drafts'|t('app') }}</a></li>
                    {% endif %}
                    <li><a data-trashed><span class=\"icon\" data-icon=\"trash\" aria-hidden=\"true\"></span>{{ \"Trashed\"|t('app') }}</a></li>
                </ul>
            {% endif %}
        </div>
    </div>
{% endif %}
{% if showSiteMenu %}
    {% include \"_elements/sitemenu\" %}
{% endif %}
<div class=\"flex-grow texticon search icon has-filter-btn\">
    {{ text({
        class: 'clearable',
        placeholder: \"Search\"|t('app'),
        inputAttributes: {
            aria: {
                label: 'Search'|t('app'),
            },
        },
    }) }}
    {{ tag('button', {
        role: 'button',
        class: 'clear-btn hidden',
        title: 'Clear search'|t('app'),
        aria: {
            label: 'Clear search'|t('app'),
        },
    }) }}
    <button class=\"filter-btn\" title=\"{{ 'Filter results'|t('app') }}\" aria-label=\"{{ 'Filter results'|t('app') }}\" aria-expanded=\"false\"></button>
</div>
", "_elements/toolbar", "/var/www/html/vendor/craftcms/cms/src/templates/_elements/toolbar.twig");
    }
}
