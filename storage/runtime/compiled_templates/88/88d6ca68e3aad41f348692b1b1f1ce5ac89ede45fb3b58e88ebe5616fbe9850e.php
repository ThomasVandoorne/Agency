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

/* settings/fields */
class __TwigTemplate_65381e5b1ad79eed9e9627eead06da5b760987e3f17b40519c246ad29e8c394a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actionButton' => [$this, 'block_actionButton'],
            'sidebar' => [$this, 'block_sidebar'],
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
        craft\helpers\Template::beginProfile("template", "settings/fields");
        // line 1
        Craft::$app->controller->requireAdmin();
        // line 4
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Fields", "app");
        // line 6
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 6, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\fields\\FieldsAsset"], "method");
        // line 7
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 7, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\admintable\\AdminTableAsset"], "method");
        // line 9
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 9, $this->source); })()), "registerTranslations", [0 => "app", 1 => [0 => "What do you want to name the group?", 1 => "Could not create the group:", 2 => "Could not create the group:", 3 => "Are you sure you want to delete this group and all its fields?", 4 => "Could not delete the group.", 5 => "Group renamed.", 6 => "Name", 7 => "Handle", 8 => "Type", 9 => "Group", 10 => "This field’s values are used as search keywords.", 11 => "This group doesn’t have any fields yet.", 12 => "No fields exist yet."]], "method");
        // line 25
        $context["crumbs"] = [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings")]];
        // line 29
        $context["groups"] = craft\helpers\ArrayHelper::index(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 29, $this->source); })()), "app", []), "fields", []), "getAllGroups", [], "method"), "id");
        // line 31
        if (array_key_exists("groupId", $context)) {
            // line 32
            if ( !craft\helpers\Template::attribute($this->env, $this->source, ($context["groups"] ?? null), (isset($context["groupId"]) || array_key_exists("groupId", $context) ? $context["groupId"] : (function () { throw new RuntimeError('Variable "groupId" does not exist.', 32, $this->source); })()), [], "array", true, true)) {
                // line 33
                throw new yii\web\NotFoundHttpException();
            }
            // line 36
            $context["fields"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 36, $this->source); })()), (isset($context["groupId"]) || array_key_exists("groupId", $context) ? $context["groupId"] : (function () { throw new RuntimeError('Variable "groupId" does not exist.', 36, $this->source); })()), [], "array"), "getFields", [], "method");
            // line 37
            $context["emptyMessage"] = $this->extensions['craft\web\twig\Extension']->translateFilter("This group doesn’t have any fields yet.", "app");
        } else {
            // line 39
            $context["emptyMessage"] = $this->extensions['craft\web\twig\Extension']->translateFilter("No fields exist yet.", "app");
            // line 40
            $context["fields"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 40, $this->source); })()), "app", []), "fields", []), "getAllFields", [], "method");
        }
        // line 82
        $context["tableData"] = [];
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 84
            $context["fieldIsMissing"] = false;
            // line 86
            if ($this->env->getTest('missing')->getCallable()($context["field"])) {
                // line 87
                $context["fieldIsMissing"] = true;
            }
            // line 90
            $context["group"] = craft\helpers\Template::attribute($this->env, $this->source, $context["field"], "getGroup", [], "method");
            // line 92
            $context["tableData"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 92, $this->source); })()), [0 => ["id" => craft\helpers\Template::attribute($this->env, $this->source,             // line 93
$context["field"], "id", []), "title" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source,             // line 94
$context["field"], "name", []), "site"), "translatable" => ((craft\helpers\Template::attribute($this->env, $this->source,             // line 95
$context["field"], "getIsTranslatable", [], "method")) ? ((((craft\helpers\Template::attribute($this->env, $this->source, $context["field"], "getTranslationDescription", [], "method", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["field"], "getTranslationDescription", [], "method")))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["field"], "getTranslationDescription", [], "method")) : ($this->extensions['craft\web\twig\Extension']->translateFilter("This field is translatable.", "app")))) : ("")), "searchable" => ((craft\helpers\Template::attribute($this->env, $this->source,             // line 96
$context["field"], "searchable", [])) ? (true) : (false)), "url" => craft\helpers\UrlHelper::url(("settings/fields/edit/" . craft\helpers\Template::attribute($this->env, $this->source,             // line 97
$context["field"], "id", []))), "handle" => craft\helpers\Template::attribute($this->env, $this->source,             // line 98
$context["field"], "handle", []), "type" => ["isMissing" =>             // line 100
(isset($context["fieldIsMissing"]) || array_key_exists("fieldIsMissing", $context) ? $context["fieldIsMissing"] : (function () { throw new RuntimeError('Variable "fieldIsMissing" does not exist.', 100, $this->source); })()), "label" => ((            // line 101
(isset($context["fieldIsMissing"]) || array_key_exists("fieldIsMissing", $context) ? $context["fieldIsMissing"] : (function () { throw new RuntimeError('Variable "fieldIsMissing" does not exist.', 101, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["field"], "expectedType", [])) : (craft\helpers\Template::attribute($this->env, $this->source, $context["field"], "displayName", [], "method")))], "group" => ((            // line 103
(isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 103, $this->source); })())) ? (twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 103, $this->source); })()), "name", []), "site"))) : ((("<span class=\"error\">" . $this->extensions['craft\web\twig\Extension']->translateFilter("(Ungrouped)", "app")) . "</span>")))]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        ob_start();
        // line 108
        echo "    var columns = [
        { name: '__slot:title', title: Craft.t('app', 'Name') },
        {
            name: 'searchable',
            titleClass: 'thin',
            callback: value => {
                if (!value) {
                    return null;
                }
                return `<div class=\"badge-icon\" data-icon=\"search\" title=\"\${Craft.t('app', 'This field’s values are used as search keywords.')}\" aria-label=\"\${Craft.t('app', 'This field’s values are used as search keywords.')}\" role=\"img\"></div>`;
            }
        },
        ";
        // line 120
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 120, $this->source); })()), "app", []), "isMultiSite", [])) {
            // line 121
            echo "        {
            name: 'translatable',
            titleClass: 'thin',
            callback: value => {
                if (!value) {
                    return null;
                }
                return `<div class=\"badge-icon\" data-icon=\"language\" title=\"\${value}\" aria-label=\"\${value}\" role=\"img\"></div>`;
            }
        },
        ";
        }
        // line 132
        echo "        { name: '__slot:handle', title: Craft.t('app', 'Handle') },
        {
            name: 'type',
            title: Craft.t('app', 'Type'),
            callback: function(value) {
                if (value.isMissing) {
                    return '<span class=\"error\">' + value.label + '</span>'
                }

                return value.label
            }
        },
    ];

    ";
        // line 146
        if ( !array_key_exists("groupId", $context)) {
            // line 147
            echo "        columns.push({
            name: 'group',
            title: Craft.t('app', 'Group'),
        })
    ";
        }
        // line 152
        echo "
    new Craft.VueAdminTable({
        columns: columns,
        container: '#fields-vue-admin-table',
        deleteAction: 'fields/delete-field',
        emptyMessage: Craft.t('app', '";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["emptyMessage"]) || array_key_exists("emptyMessage", $context) ? $context["emptyMessage"] : (function () { throw new RuntimeError('Variable "emptyMessage" does not exist.', 157, $this->source); })()), "html", null, true);
        echo "'),
        tableData: ";
        // line 158
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 158, $this->source); })()));
        echo ",
    });
";
        craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        // line 3
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/fields", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "settings/fields");
    }

    // line 44
    public function block_actionButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "actionButton");
        // line 45
        echo "    ";
        if ((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "        ";
            $context["newFieldUrl"] = craft\helpers\UrlHelper::url("settings/fields/new", ((array_key_exists("groupId", $context)) ? (["groupId" => (isset($context["groupId"]) || array_key_exists("groupId", $context) ? $context["groupId"] : (function () { throw new RuntimeError('Variable "groupId" does not exist.', 46, $this->source); })())]) : (null)));
            // line 47
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["newFieldUrl"]) || array_key_exists("newFieldUrl", $context) ? $context["newFieldUrl"] : (function () { throw new RuntimeError('Variable "newFieldUrl" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "\" class=\"submit btn add icon\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New field", "app"), "html", null, true);
            echo "</a>
    ";
        }
        craft\helpers\Template::endProfile("block", "actionButton");
    }

    // line 52
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "sidebar");
        // line 53
        echo "    <nav>
        <ul id=\"groups\">
            <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("settings/fields"), "html", null, true);
        echo "\"";
        if ( !array_key_exists("groupId", $context)) {
            echo " class=\"sel\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("All Fields", "app"), "html", null, true);
        echo "</a></li>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 57
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(("settings/fields/" . craft\helpers\Template::attribute($this->env, $this->source, $context["group"], "id", []))), "html", null, true);
            echo "\"";
            if ((array_key_exists("groupId", $context) && (craft\helpers\Template::attribute($this->env, $this->source, $context["group"], "id", []) == (isset($context["groupId"]) || array_key_exists("groupId", $context) ? $context["groupId"] : (function () { throw new RuntimeError('Variable "groupId" does not exist.', 57, $this->source); })())))) {
                echo " class=\"sel\"";
            }
            echo " data-id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["group"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["group"], "name", []), "site"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </ul>
    </nav>

    <div class=\"buttons\">
        <button type=\"button\" id=\"newgroupbtn\" class=\"btn add icon\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New group", "app"), "html", null, true);
        echo "</button>

        ";
        // line 65
        if (array_key_exists("groupId", $context)) {
            // line 66
            echo "            <button type=\"button\" id=\"groupsettingsbtn\" class=\"btn settings icon menubtn\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "html", null, true);
            echo "\"></button>
            <div class=\"menu\">
                <ul>
                    <li><a data-action=\"rename\" role=\"button\">";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Rename selected group", "app"), "html", null, true);
            echo "</a></li>
                    <li><a data-action=\"delete\" role=\"button\">";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete selected group", "app"), "html", null, true);
            echo "</a></li>
                </ul>
            </div>
        ";
        }
        // line 74
        echo "    </div>
";
        craft\helpers\Template::endProfile("block", "sidebar");
    }

    // line 78
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 79
        echo "    <div id=\"fields-vue-admin-table\"></div>
";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "settings/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 79,  286 => 78,  280 => 74,  273 => 70,  269 => 69,  260 => 66,  258 => 65,  253 => 63,  247 => 59,  230 => 57,  226 => 56,  216 => 55,  212 => 53,  207 => 52,  196 => 47,  193 => 46,  190 => 45,  185 => 44,  179 => 3,  173 => 158,  169 => 157,  162 => 152,  155 => 147,  153 => 146,  137 => 132,  124 => 121,  122 => 120,  108 => 108,  106 => 107,  100 => 103,  99 => 101,  98 => 100,  97 => 98,  96 => 97,  95 => 96,  94 => 95,  93 => 94,  92 => 93,  91 => 92,  89 => 90,  86 => 87,  84 => 86,  82 => 84,  78 => 83,  76 => 82,  73 => 40,  71 => 39,  68 => 37,  66 => 36,  63 => 33,  61 => 32,  59 => 31,  57 => 29,  55 => 25,  53 => 9,  51 => 7,  49 => 6,  47 => 4,  45 => 1,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% requireAdmin %}

{% extends \"_layouts/cp\" %}
{% set title = \"Fields\"|t('app') %}

{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\fields\\\\FieldsAsset\") %}
{% do view.registerAssetBundle('craft\\\\web\\\\assets\\\\admintable\\\\AdminTableAsset') -%}

{% do view.registerTranslations('app', [
    \"What do you want to name the group?\",
    \"Could not create the group:\",
    \"Could not create the group:\",
    \"Are you sure you want to delete this group and all its fields?\",
    \"Could not delete the group.\",
    \"Group renamed.\",
    \"Name\",
    \"Handle\",
    \"Type\",
    \"Group\",
    \"This field’s values are used as search keywords.\",
    \"This group doesn’t have any fields yet.\",
    \"No fields exist yet.\",
]) %}

{% set crumbs = [
    { label: \"Settings\"|t('app'), url: url('settings') }
] %}

{% set groups = craft.app.fields.getAllGroups()|index('id') %}

{% if groupId is defined %}
    {% if groups[groupId] is not defined %}
        {% exit 404 %}
    {% endif %}

    {% set fields = groups[groupId].getFields() %}
    {% set emptyMessage = \"This group doesn’t have any fields yet.\"|t('app') %}
{% else %}
    {% set emptyMessage = \"No fields exist yet.\"|t('app') %}
    {% set fields = craft.app.fields.getAllFields() %}
{% endif %}


{% block actionButton %}
    {% if groups %}
        {% set newFieldUrl = url('settings/fields/new', (groupId is defined ? { groupId: groupId } : null)) %}
        <a href=\"{{ newFieldUrl }}\" class=\"submit btn add icon\">{{ \"New field\"|t('app') }}</a>
    {% endif %}
{% endblock %}


{% block sidebar %}
    <nav>
        <ul id=\"groups\">
            <li><a href=\"{{ url('settings/fields') }}\"{% if groupId is not defined %} class=\"sel\"{% endif %}>{{ \"All Fields\"|t('app') }}</a></li>
            {% for group in groups %}
                <li><a href=\"{{ url('settings/fields/'~group.id) }}\"{% if groupId is defined and group.id == groupId %} class=\"sel\"{% endif %} data-id=\"{{ group.id }}\">{{ group.name|t('site') }}</a></li>
            {% endfor %}
        </ul>
    </nav>

    <div class=\"buttons\">
        <button type=\"button\" id=\"newgroupbtn\" class=\"btn add icon\">{{ \"New group\"|t('app') }}</button>

        {% if groupId is defined %}
            <button type=\"button\" id=\"groupsettingsbtn\" class=\"btn settings icon menubtn\" title=\"{{ 'Settings'|t('app') }}\" aria-label=\"{{ 'Settings'|t('app') }}\"></button>
            <div class=\"menu\">
                <ul>
                    <li><a data-action=\"rename\" role=\"button\">{{ \"Rename selected group\"|t('app') }}</a></li>
                    <li><a data-action=\"delete\" role=\"button\">{{ \"Delete selected group\"|t('app') }}</a></li>
                </ul>
            </div>
        {% endif %}
    </div>
{% endblock %}


{% block content %}
    <div id=\"fields-vue-admin-table\"></div>
{% endblock %}

{% set tableData = [] %}
{% for field in fields %}
    {% set fieldIsMissing = false %}

    {% if field is missing %}
        {% set fieldIsMissing = true %}
    {% endif %}

    {% set group = field.getGroup() %}

    {% set tableData = tableData|merge([{
        id: field.id,
        title: field.name|t('site'),
        translatable: field.getIsTranslatable() ? (field.getTranslationDescription() ?? 'This field is translatable.'|t('app')),
        searchable: field.searchable ? true : false,
        url: url('settings/fields/edit/' ~ field.id),
        handle: field.handle,
        type: {
            isMissing: fieldIsMissing,
            label: fieldIsMissing ? field.expectedType : field.displayName()
        },
        group: group ? group.name|t('site')|e : \"<span class=\\\"error\\\">#{'(Ungrouped)'|t('app')}</span>\",
    }]) %}
{% endfor %}

{% js %}
    var columns = [
        { name: '__slot:title', title: Craft.t('app', 'Name') },
        {
            name: 'searchable',
            titleClass: 'thin',
            callback: value => {
                if (!value) {
                    return null;
                }
                return `<div class=\"badge-icon\" data-icon=\"search\" title=\"\${Craft.t('app', 'This field’s values are used as search keywords.')}\" aria-label=\"\${Craft.t('app', 'This field’s values are used as search keywords.')}\" role=\"img\"></div>`;
            }
        },
        {% if craft.app.isMultiSite %}
        {
            name: 'translatable',
            titleClass: 'thin',
            callback: value => {
                if (!value) {
                    return null;
                }
                return `<div class=\"badge-icon\" data-icon=\"language\" title=\"\${value}\" aria-label=\"\${value}\" role=\"img\"></div>`;
            }
        },
        {% endif %}
        { name: '__slot:handle', title: Craft.t('app', 'Handle') },
        {
            name: 'type',
            title: Craft.t('app', 'Type'),
            callback: function(value) {
                if (value.isMissing) {
                    return '<span class=\"error\">' + value.label + '</span>'
                }

                return value.label
            }
        },
    ];

    {% if groupId is not defined %}
        columns.push({
            name: 'group',
            title: Craft.t('app', 'Group'),
        })
    {% endif %}

    new Craft.VueAdminTable({
        columns: columns,
        container: '#fields-vue-admin-table',
        deleteAction: 'fields/delete-field',
        emptyMessage: Craft.t('app', '{{ emptyMessage }}'),
        tableData: {{ tableData|json_encode|raw }},
    });
{% endjs %}
", "settings/fields", "/var/www/html/vendor/craftcms/cms/src/templates/settings/fields/index.twig");
    }
}
