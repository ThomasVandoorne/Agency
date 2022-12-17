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

/* _/pages/contact.twig */
class __TwigTemplate_34452474f2b8b9a78e5ce60b993a0b92252d79cc4b49aa67c2a9589f87aa68f1 extends Template
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
        craft\helpers\Template::beginProfile("template", "_/pages/contact.twig");
        $this->parent = $this->loadTemplate("_/layout/base.twig", "_/pages/contact.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_/pages/contact.twig");
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 3
        echo "    <h1 class=\"project__title\"> ";
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 3, $this->source); })()), "title", []), "html", null, true);
        echo "</h1>
                    <img src=\" ";
        // line 4
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 4, $this->source); })()), "contactImage", []), "html", null, true);
        echo "\" alt=\"\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 5, $this->source); })()), "socialMedia", []), "all", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 6
            echo "                <div class=\"socials\"> 
                <img class=\"socials__img\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["social"], "socialImage", []), "one", [], "method"), "url", []), "html", null, true);
            echo "\" alt=\"\">
                <p>";
            // line 8
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["social"], "socialName", []), "html", null, true);
            echo "</p>
                </div >
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "_/pages/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 8,  69 => 7,  66 => 6,  62 => 5,  58 => 4,  53 => 3,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_/layout/base.twig\" %}
{% block content %}
    <h1 class=\"project__title\"> {{ entry.title }}</h1>
                    <img src=\" {{ entry.contactImage}}\" alt=\"\">
        {% for social in entry.socialMedia.all() %}
                <div class=\"socials\"> 
                <img class=\"socials__img\" src=\"{{ social.socialImage.one().url }}\" alt=\"\">
                <p>{{social.socialName}}</p>
                </div >
    {% endfor %}
{% endblock %}", "_/pages/contact.twig", "/var/www/html/templates/_/pages/contact.twig");
    }
}
