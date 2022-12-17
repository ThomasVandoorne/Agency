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

/* categories/_index.twig */
class __TwigTemplate_480f6fd7caf24a98e4878f1368e9aef61d03839e1ebffef3c11a770242ae45fe extends Template
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
        craft\helpers\Template::beginProfile("template", "categories/_index.twig");
        // line 2
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Categories", "app");
        // line 3
        $context["elementType"] = "craft\\elements\\Category";
        // line 4
        $context["canHaveDrafts"] = true;
        // line 7
        if (array_key_exists("groupHandle", $context)) {
            // line 8
            ob_start();
            // line 9
            echo "        window.defaultGroupHandle = '";
            echo twig_escape_filter($this->env, (isset($context["groupHandle"]) || array_key_exists("groupHandle", $context) ? $context["groupHandle"] : (function () { throw new RuntimeError('Variable "groupHandle" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "';
    ";
            craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        }
        // line 1
        $this->parent = $this->loadTemplate("_layouts/elementindex", "categories/_index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "categories/_index.twig");
    }

    public function getTemplateName()
    {
        return "categories/_index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 1,  52 => 9,  50 => 8,  48 => 7,  46 => 4,  44 => 3,  42 => 2,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/elementindex\" %}
{% set title = \"Categories\"|t('app') %}
{% set elementType = 'craft\\\\elements\\\\Category' %}
{% set canHaveDrafts = true %}


{% if groupHandle is defined %}
    {% js %}
        window.defaultGroupHandle = '{{ groupHandle }}';
    {% endjs %}
{% endif %}
", "categories/_index.twig", "/var/www/html/vendor/craftcms/cms/src/templates/categories/_index.twig");
    }
}
