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

/* _/pages/team/_entry.twig */
class __TwigTemplate_95d102a485ade4e01e8dc74d12186c033a21ff07d7ac70d26dce51c0df2e1879 extends Template
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
        craft\helpers\Template::beginProfile("template", "_/pages/team/_entry.twig");
        $this->parent = $this->loadTemplate("_/layout/base.twig", "_/pages/team/_entry.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_/pages/team/_entry.twig");
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 3
        $context["nav"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 3, $this->source); })()), "navigationLinks", []), "all", [], "method");
        // line 4
        $context["team"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["nav"]) || array_key_exists("nav", $context) ? $context["nav"] : (function () { throw new RuntimeError('Variable "nav" does not exist.', 4, $this->source); })()), 1, [], "array");
        // line 5
        $context["dest"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 5, $this->source); })()), "linkDestination", []), "one", [], "method");
        // line 6
        echo "<div class=\"back\"><a class=\"back__link\" href=\" ";
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["dest"]) || array_key_exists("dest", $context) ? $context["dest"] : (function () { throw new RuntimeError('Variable "dest" does not exist.', 6, $this->source); })()), "url", []), "html", null, true);
        echo " \">←  Go Back </a ></div>
<h1 class=\"project__title\">";
        // line 7
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 7, $this->source); })()), "title", []), "html", null, true);
        echo "</h1>

<div class=\"project__info\">
    <img class=\"project__img\"src=\" ";
        // line 10
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 10, $this->source); })()), "photo", []), "one", [], "method"), "url", []), "html", null, true);
        echo " \" alt=\"\">
    <div class=\"project__text\"><p class=\"project__text--text\">";
        // line 11
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 11, $this->source); })()), "jobFunction", []), "one", [], "method"), "html", null, true);
        echo "</p>
    <p>";
        // line 12
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 12, $this->source); })()), "memberInfo", []), "html", null, true);
        echo "</p></div >
</div >
";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "_/pages/team/_entry.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  74 => 11,  70 => 10,  64 => 7,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_/layout/base.twig\" %}
{% block content %}
{% set nav = navigation.navigationLinks.all() %}
{% set team = nav[1] %}
{% set dest = team.linkDestination.one()%}
<div class=\"back\"><a class=\"back__link\" href=\" {{dest.url}} \">←  Go Back </a ></div>
<h1 class=\"project__title\">{{entry.title}}</h1>

<div class=\"project__info\">
    <img class=\"project__img\"src=\" {{entry.photo.one().url}} \" alt=\"\">
    <div class=\"project__text\"><p class=\"project__text--text\">{{entry.jobFunction.one()}}</p>
    <p>{{entry.memberInfo}}</p></div >
</div >
{% endblock %}", "_/pages/team/_entry.twig", "/var/www/html/templates/_/pages/team/_entry.twig");
    }
}
