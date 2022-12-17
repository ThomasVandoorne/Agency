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

/* _/pages/projects/projects.twig */
class __TwigTemplate_2af1e22e247bb26c3788dee9d4739f964cd2b6a4d1d3781ebda124655d4fac9b extends Template
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
        craft\helpers\Template::beginProfile("template", "_/pages/projects/projects.twig");
        $this->parent = $this->loadTemplate("_/layout/base.twig", "_/pages/projects/projects.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_/pages/projects/projects.twig");
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 4
        echo "<h1 class=\"projects\">Projects</h1>
    ";
        // line 5
        $context["projects"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 5, $this->source); })()), "entries", []), "section", [0 => "projects"], "method"), "all", [], "method");
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 7
            echo "    <div class=\"witruimte\"></div>
     <section class = \"project\">
         <img class=\"project__img\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["project"], "projectImage", []), "one", [], "method"), "url", []), "html", null, true);
            echo "\" alt=\"\">
            <div class=\"project__text\">
                <h2 class=\"project__text--title\"> ";
            // line 11
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["project"], "title", []), "html", null, true);
            echo "</h2>
                ";
            // line 12
            $context["category"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["project"], "workType", []), "one", [], "method");
            // line 13
            echo "                <p class=\"project__text--worktype\">";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 13, $this->source); })()), "title", []), "html", null, true);
            echo "</p>
               <p  class=\"project__text--text\">";
            // line 14
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["project"], "projectDescription", []), "html", null, true);
            echo "</p>
               <button class=\"project__text--button\"><a class=\"button\" href =\"";
            // line 15
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["project"], "url", []), "html", null, true);
            echo "\">More info → <a ></button
            </div >
     </section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "_/pages/projects/projects.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  83 => 14,  78 => 13,  76 => 12,  72 => 11,  67 => 9,  63 => 7,  58 => 6,  56 => 5,  53 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_/layout/base.twig\" %}

{% block content %}
<h1 class=\"projects\">Projects</h1>
    {% set projects = craft.entries.section('projects').all() %}
    {% for project in projects %}
    <div class=\"witruimte\"></div>
     <section class = \"project\">
         <img class=\"project__img\" src=\"{{ project.projectImage.one().url }}\" alt=\"\">
            <div class=\"project__text\">
                <h2 class=\"project__text--title\"> {{ project.title }}</h2>
                {% set category = project.workType.one() %}
                <p class=\"project__text--worktype\">{{ category.title }}</p>
               <p  class=\"project__text--text\">{{project.projectDescription}}</p>
               <button class=\"project__text--button\"><a class=\"button\" href =\"{{project.url}}\">More info → <a ></button
            </div >
     </section>
    {% endfor %}
{% endblock %}", "_/pages/projects/projects.twig", "/var/www/html/templates/_/pages/projects/projects.twig");
    }
}
