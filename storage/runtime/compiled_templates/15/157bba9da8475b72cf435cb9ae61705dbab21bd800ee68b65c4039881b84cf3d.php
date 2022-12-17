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

/* assets */
class __TwigTemplate_5c561999b7697226fb820e2a6bf1cc5f97548b27038c1309cbf0a872052f1bc1 extends Template
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
        craft\helpers\Template::beginProfile("template", "assets");
        // line 2
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Assets", "app");
        // line 3
        $context["elementType"] = "craft\\elements\\Asset";
        // line 5
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 5, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\fileupload\\FileUploadAsset"], "method");
        // line 6
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 6, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\prismjs\\PrismJsAsset"], "method");
        // line 8
        if (array_key_exists("defaultSource", $context)) {
            // line 9
            ob_start();
            // line 10
            echo "        window.defaultSource = \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["defaultSource"]) || array_key_exists("defaultSource", $context) ? $context["defaultSource"] : (function () { throw new RuntimeError('Variable "defaultSource" does not exist.', 10, $this->source); })()), "js"), "html", null, true);
            echo "\";
    ";
            craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        }
        // line 1
        $this->parent = $this->loadTemplate("_layouts/elementindex", "assets", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "assets");
    }

    public function getTemplateName()
    {
        return "assets";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 1,  54 => 10,  52 => 9,  50 => 8,  48 => 6,  46 => 5,  44 => 3,  42 => 2,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/elementindex\" %}
{% set title = \"Assets\"|t('app') %}
{% set elementType = 'craft\\\\elements\\\\Asset' %}

{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\fileupload\\\\FileUploadAsset\") %}
{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\prismjs\\\\PrismJsAsset\") %}

{% if defaultSource is defined %}
    {% js %}
        window.defaultSource = \"{{ defaultSource|e('js') }}\";
    {% endjs %}
{% endif %}
", "assets", "/var/www/html/vendor/craftcms/cms/src/templates/assets/index.twig");
    }
}
