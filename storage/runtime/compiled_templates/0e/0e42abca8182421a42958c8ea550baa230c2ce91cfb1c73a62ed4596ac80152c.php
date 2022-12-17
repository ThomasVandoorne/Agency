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

/* _/pages/projects/_entry.twig */
class __TwigTemplate_8c79f725acbbbddfbe5a20c31b303914a535a8462b2646d2d078e40711c54183 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_/layout/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_/pages/projects/_entry.twig");
        $this->parent = $this->loadTemplate("_/layout/base.twig", "_/pages/projects/_entry.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_/pages/projects/_entry.twig");
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 3
        $context["nav"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 3, $this->source); })()), "navigationLinks", []), "one", [], "method");
        // line 4
        $context["dest"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["nav"]) || array_key_exists("nav", $context) ? $context["nav"] : (function () { throw new RuntimeError('Variable "nav" does not exist.', 4, $this->source); })()), "linkDestination", []), "one", [], "method");
        // line 5
        echo "<div class=\"back\"><a class=\"back__link\" href=\" ";
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["dest"]) || array_key_exists("dest", $context) ? $context["dest"] : (function () { throw new RuntimeError('Variable "dest" does not exist.', 5, $this->source); })()), "url", []), "html", null, true);
        echo " \">←  Go Back </a ></div>
<h1 class=\"project__title\">";
        // line 6
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 6, $this->source); })()), "title", []), "html", null, true);
        echo "</h1>
<div class=\"project__info\">
    <img class=\"project__img\"src=\" ";
        // line 8
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 8, $this->source); })()), "projectImage", []), "one", [], "method"), "url", []), "html", null, true);
        echo " \" alt=\"\">
    <div class=\"project__text\"><p class=\"project__text--text\">";
        // line 9
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 9, $this->source); })()), "globalText", []), "html", null, true);
        echo "</p></div >
</div >
";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "_/pages/projects/_entry.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 9,  67 => 8,  62 => 6,  57 => 5,  55 => 4,  53 => 3,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_/layout/base.twig\" %}
{% block content %}
{% set nav = navigation.navigationLinks.one() %}
{% set dest = nav.linkDestination.one()%}
<div class=\"back\"><a class=\"back__link\" href=\" {{dest.url}} \">←  Go Back </a ></div>
<h1 class=\"project__title\">{{entry.title}}</h1>
<div class=\"project__info\">
    <img class=\"project__img\"src=\" {{entry.projectImage.one().url}} \" alt=\"\">
    <div class=\"project__text\"><p class=\"project__text--text\">{{entry.globalText}}</p></div >
</div >
{% endblock %}", "_/pages/projects/_entry.twig", "/var/www/html/templates/_/pages/projects/_entry.twig");
    }
}
