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

/* settings/sections/_entrytypes/index.twig */
class __TwigTemplate_954c02e72f716bb9cd8f80a1d42794f5e0098167e3c506c3f77cdbb70f7a0e7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actionButton' => [$this, 'block_actionButton'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "settings/sections/_layout";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "settings/sections/_entrytypes/index.twig");
        // line 2
        $context["selectedTab"] = "entryTypes";
        // line 4
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 4, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\admintable\\AdminTableAsset"], "method");
        // line 6
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 6, $this->source); })()), "registerTranslations", [0 => "app", 1 => [0 => "Name", 1 => "Handle"]], "method");
        // line 11
        $context["entryTypes"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 11, $this->source); })()), "getEntryTypes", [], "method");
        // line 12
        $context["multiple"] = ($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["entryTypes"]) || array_key_exists("entryTypes", $context) ? $context["entryTypes"] : (function () { throw new RuntimeError('Variable "entryTypes" does not exist.', 12, $this->source); })())) > 1);
        // line 24
        $context["tableData"] = [];
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entryTypes"]) || array_key_exists("entryTypes", $context) ? $context["entryTypes"] : (function () { throw new RuntimeError('Variable "entryTypes" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
            // line 26
            $context["tableData"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 26, $this->source); })()), [0 => ["id" => craft\helpers\Template::attribute($this->env, $this->source,             // line 27
$context["entryType"], "id", []), "title" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source,             // line 28
$context["entryType"], "name", []), "site"), "url" => craft\helpers\UrlHelper::url(((("settings/sections/" . craft\helpers\Template::attribute($this->env, $this->source,             // line 29
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 29, $this->source); })()), "id", [])) . "/entrytypes/") . craft\helpers\Template::attribute($this->env, $this->source, $context["entryType"], "id", []))), "name" => twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source,             // line 30
$context["entryType"], "name", []), "site")), "handle" => craft\helpers\Template::attribute($this->env, $this->source,             // line 31
$context["entryType"], "handle", [])]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        ob_start();
        // line 36
        echo "var columns = [
    { name: '__slot:title', title: Craft.t('app', 'Name') },
    { name: '__slot:handle', title: Craft.t('app', 'Handle') },
];

new Craft.VueAdminTable({
    fullPane: false,
    columns: columns,
    container: '#entrytypes-vue-admin-table',
    deleteAction: '";
        // line 45
        echo (((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 45, $this->source); })()), "type", []) != "single")) ? ("sections/delete-entry-type") : (""));
        echo "',
    reorderAction: '";
        // line 46
        echo (((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 46, $this->source); })()), "type", []) != "single")) ? ("sections/reorder-entry-types") : (""));
        echo "',
    tableData: ";
        // line 47
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 47, $this->source); })()));
        echo ",
    minItems: 1
});
";
        craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        // line 1
        $this->parent = $this->loadTemplate("settings/sections/_layout", "settings/sections/_entrytypes/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "settings/sections/_entrytypes/index.twig");
    }

    // line 14
    public function block_actionButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "actionButton");
        // line 15
        echo "    ";
        if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 15, $this->source); })()), "type", []) != "single")) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url((("settings/sections/" . craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 16, $this->source); })()), "id", [])) . "/entrytypes/new")), "html", null, true);
            echo "\" class=\"btn submit add icon\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New entry type", "app"), "html", null, true);
            echo "</a>
    ";
        }
        craft\helpers\Template::endProfile("block", "actionButton");
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 21
        echo "    <div id=\"entrytypes-vue-admin-table\"></div>
";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "settings/sections/_entrytypes/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 21,  124 => 20,  113 => 16,  110 => 15,  105 => 14,  99 => 1,  92 => 47,  88 => 46,  84 => 45,  73 => 36,  71 => 35,  65 => 31,  64 => 30,  63 => 29,  62 => 28,  61 => 27,  60 => 26,  56 => 25,  54 => 24,  52 => 12,  50 => 11,  48 => 6,  46 => 4,  44 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'settings/sections/_layout' %}
{% set selectedTab = 'entryTypes' %}

{% do view.registerAssetBundle('craft\\\\web\\\\assets\\\\admintable\\\\AdminTableAsset') -%}

{% do view.registerTranslations('app', [
    \"Name\",
    \"Handle\",
]) %}

{% set entryTypes = section.getEntryTypes() %}
{% set multiple  = (entryTypes|length > 1) %}

{% block actionButton %}
    {% if section.type != 'single' %}
        <a href=\"{{ url('settings/sections/' ~ section.id ~ '/entrytypes/new') }}\" class=\"btn submit add icon\">{{ \"New entry type\"|t('app') }}</a>
    {% endif %}
{% endblock %}

{% block content %}
    <div id=\"entrytypes-vue-admin-table\"></div>
{% endblock %}

{% set tableData = [] %}
{% for entryType in entryTypes %}
    {% set tableData = tableData|merge([{
        id: entryType.id,
        title: entryType.name|t('site'),
        url: url('settings/sections/' ~ section.id ~ '/entrytypes/' ~ entryType.id),
        name: entryType.name|t('site')|e,
        handle: entryType.handle,
    }]) %}
{% endfor %}

{% js %}
var columns = [
    { name: '__slot:title', title: Craft.t('app', 'Name') },
    { name: '__slot:handle', title: Craft.t('app', 'Handle') },
];

new Craft.VueAdminTable({
    fullPane: false,
    columns: columns,
    container: '#entrytypes-vue-admin-table',
    deleteAction: '{{ section.type != 'single' ? 'sections/delete-entry-type' : '' }}',
    reorderAction: '{{ section.type != 'single' ? 'sections/reorder-entry-types' : '' }}',
    tableData: {{ tableData|json_encode|raw }},
    minItems: 1
});
{% endjs %}
", "settings/sections/_entrytypes/index.twig", "/var/www/html/vendor/craftcms/cms/src/templates/settings/sections/_entrytypes/index.twig");
    }
}
