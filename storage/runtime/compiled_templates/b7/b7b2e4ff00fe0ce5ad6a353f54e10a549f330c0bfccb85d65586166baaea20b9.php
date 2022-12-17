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

/* _/pages/home.twig */
class __TwigTemplate_a301263372a044c067f74d2330efc41d8ba316e776761cf146fe4b769ac4f349 extends Template
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
        craft\helpers\Template::beginProfile("template", "_/pages/home.twig");
        $this->parent = $this->loadTemplate("_/layout/base.twig", "_/pages/home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_/pages/home.twig");
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 4
        echo "
";
        // line 5
        $context["image"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 5, $this->source); })()), "foldImage", []), "one", [], "method");
        // line 6
        echo "
<div class=\"fold\">
    <h1 class=\"fold__title\">";
        // line 8
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 8, $this->source); })()), "foldTitle", []), "html", null, true);
        echo "</h1>
    <img class=\"fold__img\"src=\"";
        // line 9
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 9, $this->source); })()), "url", []), "html", null, true);
        echo "\">
    <div class=\"fold__text\">
      <p>";
        // line 11
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 11, $this->source); })()), "foldText", []), "html", null, true);
        echo "</p>
    </div >
</div >
";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "_/pages/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  66 => 9,  62 => 8,  58 => 6,  56 => 5,  53 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_/layout/base.twig\" %}

{% block content %}

{% set image = entry.foldImage.one() %}

<div class=\"fold\">
    <h1 class=\"fold__title\">{{ entry.foldTitle }}</h1>
    <img class=\"fold__img\"src=\"{{ image.url }}\">
    <div class=\"fold__text\">
      <p>{{entry.foldText}}</p>
    </div >
</div >
{% endblock %}", "_/pages/home.twig", "/var/www/html/templates/_/pages/home.twig");
    }
}
