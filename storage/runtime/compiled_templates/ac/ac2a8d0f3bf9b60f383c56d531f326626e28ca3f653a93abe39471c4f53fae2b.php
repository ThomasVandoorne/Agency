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

/* settings/sections/_layout */
class __TwigTemplate_0d5a9592d2af872af491dc7947094c46d2d9d3a44207d08d10ddfa040944cc10 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        craft\helpers\Template::beginProfile("template", "settings/sections/_layout");
        // line 3
        $context["crumbs"] = [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings")], 1 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Sections", "app"), "url" => craft\helpers\UrlHelper::url("settings/sections")]];
        // line 14
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 14, $this->source); })()), "id", [])) {
            // line 15
            $context["crumbs"] = $this->extensions['craft\web\twig\Extension']->pushFilter((isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new RuntimeError('Variable "crumbs" does not exist.', 15, $this->source); })()), ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source,             // line 16
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 16, $this->source); })()), "name", []), "site"), "url" => craft\helpers\UrlHelper::url(("settings/sections/" . craft\helpers\Template::attribute($this->env, $this->source,             // line 17
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 17, $this->source); })()), "id", [])))]);
            // line 20
            $context["tabs"] = ["settings" => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url(("settings/sections/" . craft\helpers\Template::attribute($this->env, $this->source,             // line 23
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 23, $this->source); })()), "id", [])))], "entryTypes" => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Entry Types", "app"), "url" => craft\helpers\UrlHelper::url((("settings/sections/" . craft\helpers\Template::attribute($this->env, $this->source,             // line 27
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 27, $this->source); })()), "id", [])) . "/entrytypes"))]];
        }
        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/sections/_layout", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "settings/sections/_layout");
    }

    public function getTemplateName()
    {
        return "settings/sections/_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,  52 => 27,  51 => 23,  50 => 20,  48 => 17,  47 => 16,  46 => 15,  44 => 14,  42 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}

{% set crumbs = [
    {
        label: 'Settings'|t('app'),
        url: url('settings'),
    },
    {
        label: 'Sections'|t('app'),
        url: url('settings/sections'),
    },
] %}

{% if section.id %}
    {% set crumbs = crumbs|push({
        label: section.name|t('site'),
        url: url(\"settings/sections/#{section.id}\"),
    }) %}

    {% set tabs = {
        settings: {
            label: 'Settings'|t('app'),
            url: url(\"settings/sections/#{section.id}\"),
        },
        entryTypes: {
            label: 'Entry Types'|t('app'),
            url: url(\"settings/sections/#{section.id}/entrytypes\"),
        },
    } %}
{% endif %}
", "settings/sections/_layout", "/var/www/html/vendor/craftcms/cms/src/templates/settings/sections/_layout.twig");
    }
}
