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

/* __string_template__1855e90788f6dbf9b24f40c2ab58a0a8061e2b3cc33aa24e09907ee1d1a932f2 */
class __TwigTemplate_51704468adb5e06b0cb84ae9ac32186fa94a9af09c632faf3bf27af0174c70f9 extends Template
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
        craft\helpers\Template::beginProfile("template", "__string_template__1855e90788f6dbf9b24f40c2ab58a0a8061e2b3cc33aa24e09907ee1d1a932f2");
        // line 1
        echo "work/";
        echo (((craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "slug", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "slug", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "slug", [])) : (craft\helpers\Template::attribute($this->env, $this->source, ($context["object"] ?? null), "slug", [])));
        craft\helpers\Template::endProfile("template", "__string_template__1855e90788f6dbf9b24f40c2ab58a0a8061e2b3cc33aa24e09907ee1d1a932f2");
    }

    public function getTemplateName()
    {
        return "__string_template__1855e90788f6dbf9b24f40c2ab58a0a8061e2b3cc33aa24e09907ee1d1a932f2";
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
        return new Source("work/{{ (_variables.slug ?? object.slug)|raw }}", "__string_template__1855e90788f6dbf9b24f40c2ab58a0a8061e2b3cc33aa24e09907ee1d1a932f2", "");
    }
}
