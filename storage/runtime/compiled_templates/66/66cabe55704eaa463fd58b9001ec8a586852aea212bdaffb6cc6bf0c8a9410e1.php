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

/* _layouts/elementindex */
class __TwigTemplate_ddd576cb7d423666b3e19dcac24442af4836007ace1c659f8f5819b67c5a68e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contextMenu' => [$this, 'block_contextMenu'],
            'sidebar' => [$this, 'block_sidebar'],
            'toolbar' => [$this, 'block_toolbar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'initJs' => [$this, 'block_initJs'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_layouts/elementindex");
        // line 3
        $context["elementInstance"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 3, $this->source); })()), "app", []), "elements", []), "createElement", [0 => (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 3, $this->source); })())], "method");
        // line 4
        $context["title"] = (($context["title"]) ?? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["elementInstance"]) || array_key_exists("elementInstance", $context) ? $context["elementInstance"] : (function () { throw new RuntimeError('Variable "elementInstance" does not exist.', 4, $this->source); })()), "pluralDisplayName", [], "method")));
        // line 5
        $context["context"] = "index";
        // line 7
        if ( !(isset($context["elementInstance"]) || array_key_exists("elementInstance", $context) ? $context["elementInstance"] : (function () { throw new RuntimeError('Variable "elementInstance" does not exist.', 7, $this->source); })())) {
            // line 8
            throw new yii\web\NotFoundHttpException();
        }
        // line 11
        $context["sources"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 11, $this->source); })()), "app", []), "elementSources", []), "getSources", [0 => (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 11, $this->source); })()), 1 => "index", 2 => true], "method");
        // line 13
        $context["showSiteMenu"] = ((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 13, $this->source); })()), "app", []), "getIsMultiSite", [], "method")) ? ((($context["showSiteMenu"]) ?? ("auto"))) : (false));
        // line 14
        if (((isset($context["showSiteMenu"]) || array_key_exists("showSiteMenu", $context) ? $context["showSiteMenu"] : (function () { throw new RuntimeError('Variable "showSiteMenu" does not exist.', 14, $this->source); })()) == "auto")) {
            // line 15
            $context["showSiteMenu"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["elementInstance"]) || array_key_exists("elementInstance", $context) ? $context["elementInstance"] : (function () { throw new RuntimeError('Variable "elementInstance" does not exist.', 15, $this->source); })()), "isLocalized", [], "method");
        }
        // line 74
        craft\helpers\Template::js(        $this->renderBlock("initJs", $context, $blocks), ['position' => 3]);
        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "_layouts/elementindex", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_layouts/elementindex");
    }

    // line 19
    public function block_contextMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "contextMenu");
        // line 20
        echo "    ";
        if ((isset($context["showSiteMenu"]) || array_key_exists("showSiteMenu", $context) ? $context["showSiteMenu"] : (function () { throw new RuntimeError('Variable "showSiteMenu" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "        ";
            $this->loadTemplate("_elements/sitemenu", "_layouts/elementindex", 21)->display($context);
            // line 22
            echo "    ";
        }
        craft\helpers\Template::endProfile("block", "contextMenu");
    }

    // line 26
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "sidebar");
        // line 27
        echo "    ";
        if ( !twig_test_empty((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 27, $this->source); })()))) {
            // line 28
            echo "        <nav aria-label=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Sources", "app"), "html", null, true);
            echo "\">
            ";
            // line 29
            $this->loadTemplate("_elements/sources", "_layouts/elementindex", 29)->display($context);
            // line 30
            echo "        </nav>

        <div id=\"source-actions\" class=\"buttons\"></div>
    ";
        }
        craft\helpers\Template::endProfile("block", "sidebar");
    }

    // line 37
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "toolbar");
        // line 38
        echo "    ";
        $this->loadTemplate("_elements/toolbar", "_layouts/elementindex", 38)->display(twig_array_merge($context, ["showSiteMenu" => false]));
        craft\helpers\Template::endProfile("block", "toolbar");
    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 45
        echo "    <div class=\"main\">
        <a class=\"skip-link btn\" href=\"#footer\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Skip to {title}", "app", ["title" => $this->extensions['craft\web\twig\Extension']->translateFilter("Footer")]), "html", null, true);
        echo "</a>
        <div class=\"elements busy\">
            <div class=\"update-spinner spinner spinner-absolute\"></div>
        </div>
    </div>
";
        craft\helpers\Template::endProfile("block", "content");
    }

    // line 54
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "footer");
        // line 55
        echo "    <div id=\"count-spinner\" class=\"spinner small hidden\"></div>
    <div id=\"count-container\" class=\"light flex-grow\">&nbsp;</div>
    <div id=\"actions-container\" class=\"flex\"></div>
    <button type=\"button\" id=\"export-btn\" class=\"btn hidden\" aria-expanded=\"false\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Export…", "app"), "html", null, true);
        echo "</button>
";
        craft\helpers\Template::endProfile("block", "footer");
    }

    // line 62
    public function block_initJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "initJs");
        // line 63
        echo "    Craft.elementIndex = Craft.createElementIndex('";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 63, $this->source); })()), "js"), "html", null, true);
        echo "', \$('#page-container'), {
        elementTypeName: '";
        // line 64
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["elementInstance"]) || array_key_exists("elementInstance", $context) ? $context["elementInstance"] : (function () { throw new RuntimeError('Variable "elementInstance" does not exist.', 64, $this->source); })()), "displayName", [], "method"), "js"), "html", null, true);
        echo "',
        elementTypePluralName: '";
        // line 65
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["elementInstance"]) || array_key_exists("elementInstance", $context) ? $context["elementInstance"] : (function () { throw new RuntimeError('Variable "elementInstance" does not exist.', 65, $this->source); })()), "pluralDisplayName", [], "method"), "js"), "html", null, true);
        echo "',
        context: '";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "',
        storageKey: 'elementindex.";
        // line 67
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 67, $this->source); })()), "js"), "html", null, true);
        echo "',
        criteria: Craft.defaultIndexCriteria,
        toolbarSelector: '#toolbar',
        canHaveDrafts: ";
        // line 70
        echo (((($context["canHaveDrafts"]) ?? (false))) ? ("true") : ("false"));
        echo ",
    });
";
        craft\helpers\Template::endProfile("block", "initJs");
    }

    public function getTemplateName()
    {
        return "_layouts/elementindex";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 70,  186 => 67,  182 => 66,  178 => 65,  174 => 64,  169 => 63,  164 => 62,  157 => 58,  152 => 55,  147 => 54,  136 => 46,  133 => 45,  128 => 44,  122 => 38,  117 => 37,  108 => 30,  106 => 29,  101 => 28,  98 => 27,  93 => 26,  87 => 22,  84 => 21,  81 => 20,  76 => 19,  70 => 1,  68 => 74,  65 => 15,  63 => 14,  61 => 13,  59 => 11,  56 => 8,  54 => 7,  52 => 5,  50 => 4,  48 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}

{% set elementInstance = craft.app.elements.createElement(elementType) %}
{% set title = title ?? elementInstance.pluralDisplayName() %}
{% set context = 'index' %}

{% if not elementInstance %}
    {% exit 404 %}
{% endif %}

{% set sources = craft.app.elementSources.getSources(elementType, 'index', true) %}

{% set showSiteMenu = (craft.app.getIsMultiSite() ? (showSiteMenu ?? 'auto') : false) %}
{% if showSiteMenu == 'auto' %}
    {% set showSiteMenu = elementInstance.isLocalized() %}
{% endif %}


{% block contextMenu %}
    {% if showSiteMenu %}
        {% include \"_elements/sitemenu\" %}
    {% endif %}
{% endblock %}


{% block sidebar %}
    {% if sources is not empty %}
        <nav aria-label=\"{{ 'Sources'|t('app') }}\">
            {% include \"_elements/sources\" %}
        </nav>

        <div id=\"source-actions\" class=\"buttons\"></div>
    {% endif %}
{% endblock %}


{% block toolbar %}
    {% include '_elements/toolbar' with {
        showSiteMenu: false,
    } %}
{% endblock %}


{% block content %}
    <div class=\"main\">
        <a class=\"skip-link btn\" href=\"#footer\">{{ 'Skip to {title}'|t('app', { title: 'Footer'|t }) }}</a>
        <div class=\"elements busy\">
            <div class=\"update-spinner spinner spinner-absolute\"></div>
        </div>
    </div>
{% endblock %}


{% block footer %}
    <div id=\"count-spinner\" class=\"spinner small hidden\"></div>
    <div id=\"count-container\" class=\"light flex-grow\">&nbsp;</div>
    <div id=\"actions-container\" class=\"flex\"></div>
    <button type=\"button\" id=\"export-btn\" class=\"btn hidden\" aria-expanded=\"false\">{{ 'Export…'|t('app') }}</button>
{% endblock %}


{% block initJs %}
    Craft.elementIndex = Craft.createElementIndex('{{ elementType|e(\"js\") }}', \$('#page-container'), {
        elementTypeName: '{{ elementInstance.displayName()|e(\"js\") }}',
        elementTypePluralName: '{{ elementInstance.pluralDisplayName()|e(\"js\") }}',
        context: '{{ context }}',
        storageKey: 'elementindex.{{ elementType|e(\"js\") }}',
        criteria: Craft.defaultIndexCriteria,
        toolbarSelector: '#toolbar',
        canHaveDrafts: {{ (canHaveDrafts ?? false) ? 'true' : 'false' }},
    });
{% endblock %}

{% js block('initJs') %}
", "_layouts/elementindex", "/var/www/html/vendor/craftcms/cms/src/templates/_layouts/elementindex.twig");
    }
}
