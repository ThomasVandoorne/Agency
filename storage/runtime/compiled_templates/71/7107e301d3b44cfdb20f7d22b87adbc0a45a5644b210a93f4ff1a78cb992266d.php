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

/* globals/_edit.twig */
class __TwigTemplate_b77b4ce5ff9de55de24a848b5a99aadaa93cf2d83904606643daa8a7eb7be109 extends Template
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
        craft\helpers\Template::beginProfile("template", "globals/_edit.twig");
        // line 2
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new RuntimeError('Variable "globalSet" does not exist.', 2, $this->source); })()), "name", []), "site");
        // line 3
        $context["fullPageForm"] = true;
        // line 4
        $context["retainScrollOnSaveShortcut"] = true;
        // line 6
        echo \Craft::$app->getView()->invokeHook("cp.globals.edit", $context);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "globals/_edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "globals/_edit.twig");
    }

    // line 8
    public function block_contextMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "contextMenu");
        // line 9
        echo "    ";
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 9, $this->source); })()), "app", []), "getIsMultiSite", [], "method")) {
            // line 10
            echo "        ";
            $this->loadTemplate("_elements/sitemenu", "globals/_edit.twig", 10)->display(twig_array_merge($context, ["selectedSiteId" => craft\helpers\Template::attribute($this->env, $this->source,             // line 11
(isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new RuntimeError('Variable "globalSet" does not exist.', 11, $this->source); })()), "siteId", []), "urlFormat" => craft\helpers\UrlHelper::cpUrl(("globals/" . craft\helpers\Template::attribute($this->env, $this->source,             // line 12
(isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new RuntimeError('Variable "globalSet" does not exist.', 12, $this->source); })()), "handle", [])), ["site" => "{handle}"])]));
            // line 14
            echo "    ";
        }
        craft\helpers\Template::endProfile("block", "contextMenu");
    }

    // line 18
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "sidebar");
        // line 19
        echo "    <nav>
        <ul>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["editableGlobalSets"]) || array_key_exists("editableGlobalSets", $context) ? $context["editableGlobalSets"] : (function () { throw new RuntimeError('Variable "editableGlobalSets" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["theGlobalSet"]) {
            // line 22
            echo "                <li><a";
            if ((craft\helpers\Template::attribute($this->env, $this->source, $context["theGlobalSet"], "handle", []) == craft\helpers\Template::attribute($this->env, $this->source, (isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new RuntimeError('Variable "globalSet" does not exist.', 22, $this->source); })()), "handle", []))) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["theGlobalSet"], "getCpEditUrl", [], "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["theGlobalSet"], "name", []), "site"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theGlobalSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </ul>
    </nav>
";
        craft\helpers\Template::endProfile("block", "sidebar");
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 30
        echo "    ";
        echo craft\helpers\Html::actionInput("globals/save-content");
        echo "
    ";
        // line 31
        echo craft\helpers\Html::hiddenInput("setId", craft\helpers\Template::attribute($this->env, $this->source, (isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new RuntimeError('Variable "globalSet" does not exist.', 31, $this->source); })()), "id", []));
        echo "
    ";
        // line 32
        echo craft\helpers\Html::hiddenInput("siteId", craft\helpers\Template::attribute($this->env, $this->source, (isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new RuntimeError('Variable "globalSet" does not exist.', 32, $this->source); })()), "siteId", []));
        echo "
    ";
        // line 33
        echo craft\helpers\Html::csrfInput();
        echo "

    ";
        // line 35
        if ($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new RuntimeError('Variable "globalSet" does not exist.', 35, $this->source); })()), "getFieldLayout", [], "method"), "getTabs", [], "method"))) {
            // line 36
            echo "        <div id=\"fields\">
            ";
            // line 37
            echo (isset($context["fieldsHtml"]) || array_key_exists("fieldsHtml", $context) ? $context["fieldsHtml"] : (function () { throw new RuntimeError('Variable "fieldsHtml" does not exist.', 37, $this->source); })());
            echo "
        </div>
    ";
        } else {
            // line 40
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("This global set doesn’t have any fields assigned to it in its field layout.", "app"), "html", null, true);
            echo "
    ";
        }
        // line 42
        echo "
    ";
        // line 44
        echo "    ";
        echo \Craft::$app->getView()->invokeHook("cp.globals.edit.content", $context);

        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "globals/_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 44,  154 => 42,  148 => 40,  142 => 37,  139 => 36,  137 => 35,  132 => 33,  128 => 32,  124 => 31,  119 => 30,  114 => 29,  107 => 24,  92 => 22,  88 => 21,  84 => 19,  79 => 18,  73 => 14,  71 => 12,  70 => 11,  68 => 10,  65 => 9,  60 => 8,  54 => 1,  51 => 6,  49 => 4,  47 => 3,  45 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}
{% set title = globalSet.name|t('site') %}
{% set fullPageForm = true %}
{% set retainScrollOnSaveShortcut = true %}

{% hook \"cp.globals.edit\" %}

{% block contextMenu %}
    {% if craft.app.getIsMultiSite() %}
        {% include \"_elements/sitemenu\" with {
            selectedSiteId: globalSet.siteId,
            urlFormat: cpUrl(\"globals/#{globalSet.handle}\", {site: '{handle}'}),
        } %}
    {% endif %}
{% endblock %}


{% block sidebar %}
    <nav>
        <ul>
            {% for theGlobalSet in editableGlobalSets %}
                <li><a{% if theGlobalSet.handle == globalSet.handle %} class=\"sel\"{% endif %} href=\"{{ theGlobalSet.getCpEditUrl() }}\">{{ theGlobalSet.name|t('site') }}</a></li>
            {% endfor %}
        </ul>
    </nav>
{% endblock %}


{% block content %}
    {{ actionInput('globals/save-content') }}
    {{ hiddenInput('setId', globalSet.id) }}
    {{ hiddenInput('siteId', globalSet.siteId) }}
    {{ csrfInput() }}

    {% if globalSet.getFieldLayout().getTabs()|length %}
        <div id=\"fields\">
            {{ fieldsHtml|raw }}
        </div>
    {% else %}
        {{ \"This global set doesn’t have any fields assigned to it in its field layout.\"|t('app') }}
    {% endif %}

    {# Give plugins a chance to add other things here #}
    {% hook \"cp.globals.edit.content\" %}
{% endblock %}
", "globals/_edit.twig", "/var/www/html/vendor/craftcms/cms/src/templates/globals/_edit.twig");
    }
}
