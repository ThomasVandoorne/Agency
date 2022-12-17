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

/* _/pages/team/team.twig */
class __TwigTemplate_9061a53f674fdf87fdc982d62e5f5f5cd826c7a3b265c496ea797990aa4d7d7e extends Template
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
        craft\helpers\Template::beginProfile("template", "_/pages/team/team.twig");
        $this->parent = $this->loadTemplate("_/layout/base.twig", "_/pages/team/team.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_/pages/team/team.twig");
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 4
        echo "<div class=\"members\">
    <h1 class=\"members__title\">Our Team</h1>
    ";
        // line 6
        $context["team"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 6, $this->source); })()), "entries", []), "section", [0 => "team"], "method"), "all", [], "method");
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 8
            echo "        ";
            $context["photo"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["member"], "photo", []), "one", [], "method");
            // line 9
            echo "    
    <div class= \"members__member\">
            <div class=\"member__container\"><img class=\"members__member--img\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["photo"]) || array_key_exists("photo", $context) ? $context["photo"] : (function () { throw new RuntimeError('Variable "photo" does not exist.', 11, $this->source); })()), "url", []), "html", null, true);
            echo "\" alt=\"\"></div >
            <h3 class=\"members__member--name\">";
            // line 12
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["member"], "title", []), "html", null, true);
            echo "</h2>
            ";
            // line 13
            $context["category"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["member"], "jobFunction", []), "one", [], "method");
            // line 14
            echo "                
            <p class=\"members__member--function\">";
            // line 15
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 15, $this->source); })()), "title", []), "html", null, true);
            echo "</p>
            <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["member"], "url", []), "html", null, true);
            echo "\" class=\"members__member--button\"><p>About me</p></a>
    </div >
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</div>
";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "_/pages/team/team.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 19,  88 => 16,  84 => 15,  81 => 14,  79 => 13,  75 => 12,  71 => 11,  67 => 9,  64 => 8,  59 => 7,  57 => 6,  53 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_/layout/base.twig\" %}

{% block content %}
<div class=\"members\">
    <h1 class=\"members__title\">Our Team</h1>
    {% set team = craft.entries.section('team').all() %}
    {% for member in team %}
        {% set photo = member.photo.one() %}
    
    <div class= \"members__member\">
            <div class=\"member__container\"><img class=\"members__member--img\" src=\"{{photo.url}}\" alt=\"\"></div >
            <h3 class=\"members__member--name\">{{member.title}}</h2>
            {% set category = member.jobFunction.one() %}
                
            <p class=\"members__member--function\">{{category.title}}</p>
            <a href=\"{{member.url}}\" class=\"members__member--button\"><p>About me</p></a>
    </div >
    {% endfor %}
</div>
{% endblock %}", "_/pages/team/team.twig", "/var/www/html/templates/_/pages/team/team.twig");
    }
}
