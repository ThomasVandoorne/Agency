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

/* settings/categories/index.twig */
class __TwigTemplate_7bf51a8f4c7b64db92b96defc94e9be8c8010cdff376b3508a7d38530edc2ed5 extends Template
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
        craft\helpers\Template::beginProfile("template", "settings/categories/index.twig");
        // line 2
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Category Groups", "app");
        // line 4
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 4, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\admintable\\AdminTableAsset"], "method");
        // line 6
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 6, $this->source); })()), "registerTranslations", [0 => "app", 1 => [0 => "Name", 1 => "Handle", 2 => "Manage categories", 3 => "No category groups exist yet."]], "method");
        // line 18
        $context["crumbs"] = [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings")]];
        // line 26
        $context["tableData"] = [];
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryGroups"]) || array_key_exists("categoryGroups", $context) ? $context["categoryGroups"] : (function () { throw new RuntimeError('Variable "categoryGroups" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 28
            $context["tableData"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 28, $this->source); })()), [0 => ["id" => craft\helpers\Template::attribute($this->env, $this->source,             // line 29
$context["group"], "id", []), "title" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source,             // line 30
$context["group"], "name", []), "site"), "url" => craft\helpers\UrlHelper::url(("settings/categories/" . craft\helpers\Template::attribute($this->env, $this->source,             // line 31
$context["group"], "id", []))), "name" => twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source,             // line 32
$context["group"], "name", []), "site")), "handle" => craft\helpers\Template::attribute($this->env, $this->source,             // line 33
$context["group"], "handle", []), "manageCategories" => craft\helpers\UrlHelper::url(("categories/" . craft\helpers\Template::attribute($this->env, $this->source,             // line 34
$context["group"], "handle", [])))]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        ob_start();
        // line 39
        echo "    var columns = [
        {
            name: '__slot:title',
            title: Craft.t('app', 'Name'),
        },
        {
            name: '__slot:handle',
            title: Craft.t('app', 'Handle'),
        },
        {
            name: 'manageCategories',
            title: \"\",
            callback: function(value) {
                return '<a href=\"'+value+'\">' + Craft.escapeHtml(Craft.t('app', \"Manage categories\")) + '</a>';
            }
        },
    ];

    new Craft.VueAdminTable({
        columns: columns,
        container: '#categorygroups-vue-admin-table',
        deleteAction: 'categories/delete-category-group',
        emptyMessage: Craft.t('app', 'No category groups exist yet.'),
        tableData: ";
        // line 62
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 62, $this->source); })()));
        echo "
    });
";
        craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/categories/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "settings/categories/index.twig");
    }

    // line 13
    public function block_actionButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "actionButton");
        // line 14
        echo "    ";
        $context["buttonLabel"] = $this->extensions['craft\web\twig\Extension']->translateFilter("New category group", "app");
        // line 15
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("settings/categories/new"), "html", null, true);
        echo "\" class=\"btn submit add icon\" aria-label=\"";
        echo twig_escape_filter($this->env, (isset($context["buttonLabel"]) || array_key_exists("buttonLabel", $context) ? $context["buttonLabel"] : (function () { throw new RuntimeError('Variable "buttonLabel" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["buttonLabel"]) || array_key_exists("buttonLabel", $context) ? $context["buttonLabel"] : (function () { throw new RuntimeError('Variable "buttonLabel" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</a>
";
        craft\helpers\Template::endProfile("block", "actionButton");
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 23
        echo "    <div id=\"categorygroups-vue-admin-table\"></div>
";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "settings/categories/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 23,  129 => 22,  117 => 15,  114 => 14,  109 => 13,  103 => 1,  97 => 62,  72 => 39,  70 => 38,  64 => 34,  63 => 33,  62 => 32,  61 => 31,  60 => 30,  59 => 29,  58 => 28,  54 => 27,  52 => 26,  50 => 18,  48 => 6,  46 => 4,  44 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}
{% set title = \"Category Groups\"|t('app') %}

{% do view.registerAssetBundle('craft\\\\web\\\\assets\\\\admintable\\\\AdminTableAsset') -%}

{% do view.registerTranslations('app', [
    \"Name\",
    \"Handle\",
    \"Manage categories\",
    \"No category groups exist yet.\",
]) %}

{% block actionButton %}
    {% set buttonLabel = \"New category group\"|t('app') %}
    <a href=\"{{ url('settings/categories/new') }}\" class=\"btn submit add icon\" aria-label=\"{{ buttonLabel }}\">{{ buttonLabel }}</a>
{% endblock %}

{% set crumbs = [
    { label: \"Settings\"|t('app'), url: url('settings') }
] %}

{% block content %}
    <div id=\"categorygroups-vue-admin-table\"></div>
{% endblock %}

{% set tableData = [] %}
{% for group in categoryGroups %}
    {% set tableData = tableData|merge([{
        id: group.id,
        title: group.name|t('site'),
        url: url('settings/categories/' ~ group.id),
        name: group.name|t('site')|e,
        handle: group.handle,
        manageCategories: url('categories/'~group.handle),
    }]) %}
{% endfor %}

{% js %}
    var columns = [
        {
            name: '__slot:title',
            title: Craft.t('app', 'Name'),
        },
        {
            name: '__slot:handle',
            title: Craft.t('app', 'Handle'),
        },
        {
            name: 'manageCategories',
            title: \"\",
            callback: function(value) {
                return '<a href=\"'+value+'\">' + Craft.escapeHtml(Craft.t('app', \"Manage categories\")) + '</a>';
            }
        },
    ];

    new Craft.VueAdminTable({
        columns: columns,
        container: '#categorygroups-vue-admin-table',
        deleteAction: 'categories/delete-category-group',
        emptyMessage: Craft.t('app', 'No category groups exist yet.'),
        tableData: {{ tableData|json_encode|raw }}
    });
{% endjs %}
", "settings/categories/index.twig", "/var/www/html/vendor/craftcms/cms/src/templates/settings/categories/index.twig");
    }
}
