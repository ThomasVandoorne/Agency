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

/* settings/globals */
class __TwigTemplate_82635f2850bf19c86cc5394a9ec9db58ece31a0f10ecec66d1a3a55fdf889d98 extends Template
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
        // line 3
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "settings/globals");
        // line 1
        Craft::$app->controller->requireAdmin();
        // line 4
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Globals", "app");
        // line 6
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 6, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\admintable\\AdminTableAsset"], "method");
        // line 8
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 8, $this->source); })()), "registerTranslations", [0 => "app", 1 => [0 => "Global Set Name", 1 => "Handle", 2 => "No global sets exist yet."]], "method");
        // line 18
        $context["crumbs"] = [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings")]];
        // line 22
        $context["globalSets"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 22, $this->source); })()), "app", []), "globals", []), "getAllSets", [], "method");
        // line 28
        $context["tableData"] = [];
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["globalSets"]) || array_key_exists("globalSets", $context) ? $context["globalSets"] : (function () { throw new RuntimeError('Variable "globalSets" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["globalSet"]) {
            // line 30
            $context["tableData"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 30, $this->source); })()), [0 => ["id" => craft\helpers\Template::attribute($this->env, $this->source,             // line 31
$context["globalSet"], "id", []), "title" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source,             // line 32
$context["globalSet"], "name", []), "site"), "url" => craft\helpers\UrlHelper::url(("settings/globals/" . craft\helpers\Template::attribute($this->env, $this->source,             // line 33
$context["globalSet"], "id", []))), "handle" => craft\helpers\Template::attribute($this->env, $this->source,             // line 34
$context["globalSet"], "handle", [])]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['globalSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        ob_start();
        // line 39
        echo "var columns = [
    {
        name: '__slot:title',
        title: Craft.t('app', 'Global Set Name'),
    },
    {
        name: '__slot:handle',
        title: Craft.t('app', 'Handle'),
    },
];

new Craft.VueAdminTable({
    columns: columns,
    container: '#sets-vue-admin-table',
    deleteAction: 'globals/delete-set',
    emptyMessage: Craft.t('app', 'No global sets exist yet.'),
    reorderAction: '";
        // line 55
        echo ((($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["globalSets"]) || array_key_exists("globalSets", $context) ? $context["globalSets"] : (function () { throw new RuntimeError('Variable "globalSets" does not exist.', 55, $this->source); })())) > 1)) ? ("globals/reorder-sets") : (""));
        echo "',
    tableData: ";
        // line 56
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 56, $this->source); })()));
        echo "
});
";
        craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        // line 3
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/globals", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "settings/globals");
    }

    // line 14
    public function block_actionButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "actionButton");
        // line 15
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("settings/globals/new"), "html", null, true);
        echo "\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New global set", "app"), "html", null, true);
        echo "</a>
";
        craft\helpers\Template::endProfile("block", "actionButton");
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 25
        echo "    <div id=\"sets-vue-admin-table\"></div>
";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "settings/globals";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 25,  123 => 24,  113 => 15,  108 => 14,  102 => 3,  96 => 56,  92 => 55,  74 => 39,  72 => 38,  66 => 34,  65 => 33,  64 => 32,  63 => 31,  62 => 30,  58 => 29,  56 => 28,  54 => 22,  52 => 18,  50 => 8,  48 => 6,  46 => 4,  44 => 1,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% requireAdmin %}

{% extends \"_layouts/cp\" %}
{% set title = \"Globals\"|t('app') %}

{% do view.registerAssetBundle('craft\\\\web\\\\assets\\\\admintable\\\\AdminTableAsset') -%}

{% do view.registerTranslations('app', [
    \"Global Set Name\",
    \"Handle\",
    \"No global sets exist yet.\",
]) %}

{% block actionButton %}
    <a href=\"{{ url('settings/globals/new') }}\" class=\"btn submit add icon\">{{ \"New global set\"|t('app') }}</a>
{% endblock %}

{% set crumbs = [
    { label: \"Settings\"|t('app'), url: url('settings') }
] %}

{% set globalSets = craft.app.globals.getAllSets() %}

{% block content %}
    <div id=\"sets-vue-admin-table\"></div>
{% endblock %}

{% set tableData = [] %}
{% for globalSet in globalSets %}
    {% set tableData = tableData|merge([{
        id: globalSet.id,
        title: globalSet.name|t('site'),
        url: url('settings/globals/' ~ globalSet.id),
        handle: globalSet.handle,
    }]) %}
{% endfor %}

{% js %}
var columns = [
    {
        name: '__slot:title',
        title: Craft.t('app', 'Global Set Name'),
    },
    {
        name: '__slot:handle',
        title: Craft.t('app', 'Handle'),
    },
];

new Craft.VueAdminTable({
    columns: columns,
    container: '#sets-vue-admin-table',
    deleteAction: 'globals/delete-set',
    emptyMessage: Craft.t('app', 'No global sets exist yet.'),
    reorderAction: '{{ globalSets|length > 1 ? 'globals/reorder-sets' : ''}}',
    tableData: {{ tableData|json_encode|raw }}
});
{% endjs %}
", "settings/globals", "/var/www/html/vendor/craftcms/cms/src/templates/settings/globals/index.twig");
    }
}
