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

/* __string_template__a234981ccadcdc12f959f62ce3e8b4527e536939c1d42a65bb7375021d22a03e */
class __TwigTemplate_4015ea5a7f716d797d40e6971375a50d704abaf786fb5f8aefbe29625b3d98dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "__string_template__a234981ccadcdc12f959f62ce3e8b4527e536939c1d42a65bb7375021d22a03e");
        // line 1
        echo craft\helpers\Template::attribute($this->env, $this->source, (((craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "section", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "section", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "section", [])) : (craft\helpers\Template::attribute($this->env, $this->source, ($context["object"] ?? null), "section", []))), "name", []);
        craft\helpers\Template::endProfile("template", "__string_template__a234981ccadcdc12f959f62ce3e8b4527e536939c1d42a65bb7375021d22a03e");
    }

    public function getTemplateName()
    {
        return "__string_template__a234981ccadcdc12f959f62ce3e8b4527e536939c1d42a65bb7375021d22a03e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ (_variables.section ?? object.section).name|raw|raw }}", "__string_template__a234981ccadcdc12f959f62ce3e8b4527e536939c1d42a65bb7375021d22a03e", "");
    }
}
