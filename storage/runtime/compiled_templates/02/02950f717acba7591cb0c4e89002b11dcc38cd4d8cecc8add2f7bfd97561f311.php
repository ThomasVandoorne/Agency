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

/* __string_template__98b958139828095f2f5f66f6a821a34ff090c3c859020464e83ea30e07f972ea */
class __TwigTemplate_c2db89ea221cc2d07e7f37fe2fdef663c56f9d5d475d105b2b5e5072326d5560 extends Template
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
        craft\helpers\Template::beginProfile("template", "__string_template__98b958139828095f2f5f66f6a821a34ff090c3c859020464e83ea30e07f972ea");
        // line 1
        echo "team/";
        echo (((craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "slug", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "slug", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "slug", [])) : (craft\helpers\Template::attribute($this->env, $this->source, ($context["object"] ?? null), "slug", [])));
        craft\helpers\Template::endProfile("template", "__string_template__98b958139828095f2f5f66f6a821a34ff090c3c859020464e83ea30e07f972ea");
    }

    public function getTemplateName()
    {
        return "__string_template__98b958139828095f2f5f66f6a821a34ff090c3c859020464e83ea30e07f972ea";
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
        return new Source("team/{{ (_variables.slug ?? object.slug)|raw }}", "__string_template__98b958139828095f2f5f66f6a821a34ff090c3c859020464e83ea30e07f972ea", "");
    }
}
