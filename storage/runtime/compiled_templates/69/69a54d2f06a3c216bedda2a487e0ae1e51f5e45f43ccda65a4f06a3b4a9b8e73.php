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

/* __string_template__7f41cbc86fee6bf3ccf0fa1f26b09169e24506eef3022bfc64967735b27ca318 */
class __TwigTemplate_0c08ab70ae843563f748c4ede68f31b015583de8fce37c0e87136d902f268df4 extends Template
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
        craft\helpers\Template::beginProfile("template", "__string_template__7f41cbc86fee6bf3ccf0fa1f26b09169e24506eef3022bfc64967735b27ca318");
        // line 1
        echo (((craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "cpEditUrl", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "cpEditUrl", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "cpEditUrl", [])) : (craft\helpers\Template::attribute($this->env, $this->source, ($context["object"] ?? null), "cpEditUrl", [])));
        craft\helpers\Template::endProfile("template", "__string_template__7f41cbc86fee6bf3ccf0fa1f26b09169e24506eef3022bfc64967735b27ca318");
    }

    public function getTemplateName()
    {
        return "__string_template__7f41cbc86fee6bf3ccf0fa1f26b09169e24506eef3022bfc64967735b27ca318";
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
        return new Source("{{ (_variables.cpEditUrl ?? object.cpEditUrl)|raw }}", "__string_template__7f41cbc86fee6bf3ccf0fa1f26b09169e24506eef3022bfc64967735b27ca318", "");
    }
}
