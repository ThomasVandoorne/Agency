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

/* settings/sections/_index.twig */
class __TwigTemplate_1d61ba3bea112bb284f6d6e0e9bcbf910ceacf9b6083eebcac674fd166443508 extends Template
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
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "settings/sections/_index.twig");
        // line 2
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Sections", "app");
        // line 4
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 4, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\admintable\\AdminTableAsset"], "method");
        // line 6
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 6, $this->source); })()), "registerTranslations", [0 => "app", 1 => [0 => "Are you sure you want to delete “{name}” and all its entries?", 1 => "Edit entry type", 2 => "Edit entry types ({count})", 3 => "Edit entry types", 4 => "Entry Types", 5 => "Handle", 6 => "Name", 7 => "No sections exist yet.", 8 => "Type"]], "method");
        // line 18
        $context["crumbs"] = [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings")]];
        // line 31
        $context["tableData"] = [];
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 33
            $context["isSingle"] = ((craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "type", []) == "single") && ($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "getEntryTypes", [], "method")) == 1));
            // line 34
            $context["menuItems"] = [];
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "getEntryTypes", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["entryTypeObject"]) {
                // line 37
                $context["menuItems"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["menuItems"]) || array_key_exists("menuItems", $context) ? $context["menuItems"] : (function () { throw new RuntimeError('Variable "menuItems" does not exist.', 37, $this->source); })()), [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source,                 // line 38
$context["entryTypeObject"], "name", []), "site"), "url" => craft\helpers\Template::attribute($this->env, $this->source,                 // line 39
$context["entryTypeObject"], "getCpEditUrl", [], "method")]]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryTypeObject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            $context["tableData"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 43, $this->source); })()), [0 => ["id" => craft\helpers\Template::attribute($this->env, $this->source,             // line 44
$context["section"], "id", []), "name" => twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source,             // line 45
$context["section"], "name", []), "site")), "title" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source,             // line 46
$context["section"], "name", []), "site"), "url" => craft\helpers\UrlHelper::url(("settings/sections/" . craft\helpers\Template::attribute($this->env, $this->source,             // line 47
$context["section"], "id", []))), "handle" => craft\helpers\Template::attribute($this->env, $this->source,             // line 48
$context["section"], "handle", []), "type" => twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(twig_title_string_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source,             // line 49
$context["section"], "type", [])), "app")), "menu" => ["showItems" =>  !            // line 51
(isset($context["isSingle"]) || array_key_exists("isSingle", $context) ? $context["isSingle"] : (function () { throw new RuntimeError('Variable "isSingle" does not exist.', 51, $this->source); })()), "menuBtnTitle" => $this->extensions['craft\web\twig\Extension']->translateFilter("Entry Types", "app"), "label" => ((            // line 53
(isset($context["isSingle"]) || array_key_exists("isSingle", $context) ? $context["isSingle"] : (function () { throw new RuntimeError('Variable "isSingle" does not exist.', 53, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Edit entry type", "app")) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Edit entry types", "app"))), "url" => ((            // line 54
(isset($context["isSingle"]) || array_key_exists("isSingle", $context) ? $context["isSingle"] : (function () { throw new RuntimeError('Variable "isSingle" does not exist.', 54, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "getEntryTypes", [], "method"), 0, [], "array"), "getCpEditUrl", [], "method")) : (craft\helpers\UrlHelper::url((("settings/sections/" . craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "id", [])) . "/entrytypes")))), "items" =>             // line 55
(isset($context["menuItems"]) || array_key_exists("menuItems", $context) ? $context["menuItems"] : (function () { throw new RuntimeError('Variable "menuItems" does not exist.', 55, $this->source); })())]]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        ob_start();
        // line 61
        echo "    var columns = [
        { name: '__slot:title', title: Craft.t('app', 'Name') },
        { name: '__slot:handle', title: Craft.t('app', 'Handle') },
        { name: 'type', title: Craft.t('app', 'Type') },
        { name: '__slot:menu', title: Craft.t('app', 'Entry Types') }
    ];

    new Craft.VueAdminTable({
        columns: columns,
        container: '#sections-vue-admin-table',
        deleteAction: 'sections/delete-section',
        deleteConfirmationMessage: Craft.t('app', \"Are you sure you want to delete “{name}” and all its entries?\"),
        emptyMessage: Craft.t('app', 'No sections exist yet.'),
        tableData: ";
        // line 74
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 74, $this->source); })()));
        echo "
    });
";
        craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/sections/_index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "settings/sections/_index.twig");
    }

    // line 22
    public function block_actionButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "actionButton");
        // line 23
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("settings/sections/new"), "html", null, true);
        echo "\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New section", "app"), "html", null, true);
        echo "</a>
";
        craft\helpers\Template::endProfile("block", "actionButton");
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 28
        echo "    <div id=\"sections-vue-admin-table\"></div>
";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "settings/sections/_index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 28,  134 => 27,  124 => 23,  119 => 22,  113 => 1,  107 => 74,  92 => 61,  90 => 60,  84 => 55,  83 => 54,  82 => 53,  81 => 51,  80 => 49,  79 => 48,  78 => 47,  77 => 46,  76 => 45,  75 => 44,  74 => 43,  68 => 39,  67 => 38,  66 => 37,  62 => 36,  60 => 34,  58 => 33,  54 => 32,  52 => 31,  50 => 18,  48 => 6,  46 => 4,  44 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}
{% set title = \"Sections\"|t('app') %}

{% do view.registerAssetBundle('craft\\\\web\\\\assets\\\\admintable\\\\AdminTableAsset') -%}

{% do view.registerTranslations('app', [
    \"Are you sure you want to delete “{name}” and all its entries?\",
    \"Edit entry type\",
    \"Edit entry types ({count})\",
    \"Edit entry types\",
    \"Entry Types\",
    \"Handle\",
    \"Name\",
    \"No sections exist yet.\",
    \"Type\",
]) %}

{% set crumbs = [
    { label: \"Settings\"|t('app'), url: url('settings') }
] %}

{% block actionButton %}
    <a href=\"{{ url('settings/sections/new') }}\" class=\"btn submit add icon\">{{ \"New section\"|t('app') }}</a>
{% endblock %}


{% block content %}
    <div id=\"sections-vue-admin-table\"></div>
{% endblock %}

{% set tableData = [] %}
{% for section in sections %}
    {% set isSingle = section.type == 'single' and section.getEntryTypes()|length == 1 %}
    {% set menuItems = [] %}

    {% for entryTypeObject in section.getEntryTypes() %}
        {% set menuItems = menuItems|merge([{
            label: entryTypeObject.name|t('site'),
            url: entryTypeObject.getCpEditUrl(),
        }]) %}
    {% endfor %}

    {% set tableData = tableData|merge([{
        id: section.id,
        name: section.name|t('site')|e,
        title: section.name|t('site'),
        url: url('settings/sections/' ~ section.id),
        handle: section.handle,
        type: section.type|title|t('app')|e,
        menu: {
            showItems: not isSingle,
            menuBtnTitle: 'Entry Types'|t('app'),
            label: isSingle ? 'Edit entry type'|t('app') : 'Edit entry types'|t('app'),
            url: isSingle ? section.getEntryTypes()[0].getCpEditUrl() : url('settings/sections/' ~ section.id ~ '/entrytypes'),
            items: menuItems,
        }
    }]) %}
{% endfor %}

{% js %}
    var columns = [
        { name: '__slot:title', title: Craft.t('app', 'Name') },
        { name: '__slot:handle', title: Craft.t('app', 'Handle') },
        { name: 'type', title: Craft.t('app', 'Type') },
        { name: '__slot:menu', title: Craft.t('app', 'Entry Types') }
    ];

    new Craft.VueAdminTable({
        columns: columns,
        container: '#sections-vue-admin-table',
        deleteAction: 'sections/delete-section',
        deleteConfirmationMessage: Craft.t('app', \"Are you sure you want to delete “{name}” and all its entries?\"),
        emptyMessage: Craft.t('app', 'No sections exist yet.'),
        tableData: {{ tableData|json_encode|raw }}
    });
{% endjs %}
", "settings/sections/_index.twig", "/var/www/html/vendor/craftcms/cms/src/templates/settings/sections/_index.twig");
    }
}
