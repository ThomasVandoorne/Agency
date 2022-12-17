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

/* entries */
class __TwigTemplate_c5a5133dab1772f43ce3ff0dee3fd12c3bc807d9719af8795f2b546db425a4a8 extends Template
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
        return "_layouts/elementindex";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "entries");
        // line 2
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Entries", "app");
        // line 3
        $context["elementType"] = "craft\\elements\\Entry";
        // line 4
        $context["canHaveDrafts"] = true;
        // line 6
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 6, $this->source); })()), "registerTranslations", [0 => "app", 1 => [0 => "New entry"]], "method");
        // line 10
        if (array_key_exists("sectionHandle", $context)) {
            // line 11
            ob_start();
            // line 12
            echo "        window.defaultSectionHandle = \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["sectionHandle"]) || array_key_exists("sectionHandle", $context) ? $context["sectionHandle"] : (function () { throw new RuntimeError('Variable "sectionHandle" does not exist.', 12, $this->source); })()), "js"), "html", null, true);
            echo "\";
    ";
            craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        }
        // line 1
        $this->parent = $this->loadTemplate("_layouts/elementindex", "entries", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "entries");
    }

    public function getTemplateName()
    {
        return "entries";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 1,  54 => 12,  52 => 11,  50 => 10,  48 => 6,  46 => 4,  44 => 3,  42 => 2,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/elementindex\" %}
{% set title = \"Entries\"|t('app') %}
{% set elementType = 'craft\\\\elements\\\\Entry' %}
{% set canHaveDrafts = true %}

{% do view.registerTranslations('app', [
    'New entry',
]) %}

{% if sectionHandle is defined %}
    {% js %}
        window.defaultSectionHandle = \"{{ sectionHandle|e('js') }}\";
    {% endjs %}
{% endif %}

", "entries", "/var/www/html/vendor/craftcms/cms/src/templates/entries/index.twig");
    }
}
