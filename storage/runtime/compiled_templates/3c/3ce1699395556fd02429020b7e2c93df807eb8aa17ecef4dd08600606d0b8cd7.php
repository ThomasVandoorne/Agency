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

/* _/pages/team.twig */
class __TwigTemplate_0366e50a38ed373b030c76a45bea4096b480daa7986cdf4a974acf53673dfc28 extends Template
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
        craft\helpers\Template::beginProfile("template", "_/pages/team.twig");
        $this->parent = $this->loadTemplate("_/layout/base.twig", "_/pages/team.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_/pages/team.twig");
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 6, $this->source); })()), "members", []), "all", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 7
            echo "        ";
            $context["photo"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["member"], "photo", []), "one", [], "method");
            // line 8
            echo "    
    <div class= \"members__member\">
            <div class=\"member__container\"><img class=\"members__member--img\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["photo"]) || array_key_exists("photo", $context) ? $context["photo"] : (function () { throw new RuntimeError('Variable "photo" does not exist.', 10, $this->source); })()), "url", []), "html", null, true);
            echo "\" alt=\"\"></div >
            <h3 class=\"members__member--name\">";
            // line 11
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["member"], "namemember", []), "html", null, true);
            echo "</h2>
            ";
            // line 12
            $context["category"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["member"], "jobFunction", []), "one", [], "method");
            // line 13
            echo "                
            <p class=\"members__member--function\">";
            // line 14
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 14, $this->source); })()), "title", []), "html", null, true);
            echo "</p>
            <a class=\"members__member--button\"><p>About me</p></a>
    </div >
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>
";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "_/pages/team.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 18,  81 => 14,  78 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 8,  61 => 7,  57 => 6,  53 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_/layout/base.twig\" %}

{% block content %}
<div class=\"members\">
    <h1 class=\"members__title\">Our Team</h1>
    {% for member in entry.members.all() %}
        {% set photo = member.photo.one() %}
    
    <div class= \"members__member\">
            <div class=\"member__container\"><img class=\"members__member--img\" src=\"{{photo.url}}\" alt=\"\"></div >
            <h3 class=\"members__member--name\">{{member.namemember}}</h2>
            {% set category = member.jobFunction.one() %}
                
            <p class=\"members__member--function\">{{category.title}}</p>
            <a class=\"members__member--button\"><p>About me</p></a>
    </div >
    {% endfor %}
</div>
{% endblock %}", "_/pages/team.twig", "/var/www/html/templates/_/pages/team.twig");
    }
}
