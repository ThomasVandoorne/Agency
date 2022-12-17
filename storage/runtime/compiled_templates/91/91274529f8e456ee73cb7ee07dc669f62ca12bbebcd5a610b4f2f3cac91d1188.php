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

/* __string_template__088f8dcdfdea4718aa54d4bc499bc0ff002c9d7f819d0e4261b4f4dbc2ca3386 */
class __TwigTemplate_93fe944c2a3cbe0a0f95e324d97251e31208ab343689038adcf76b88d1e07763 extends Template
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
        craft\helpers\Template::beginProfile("template", "__string_template__088f8dcdfdea4718aa54d4bc499bc0ff002c9d7f819d0e4261b4f4dbc2ca3386");
        // line 1
        echo "settings/sections/";
        echo (((craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "id", [])) : (craft\helpers\Template::attribute($this->env, $this->source, ($context["object"] ?? null), "id", [])));
        echo "/entrytypes";
        craft\helpers\Template::endProfile("template", "__string_template__088f8dcdfdea4718aa54d4bc499bc0ff002c9d7f819d0e4261b4f4dbc2ca3386");
    }

    public function getTemplateName()
    {
        return "__string_template__088f8dcdfdea4718aa54d4bc499bc0ff002c9d7f819d0e4261b4f4dbc2ca3386";
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
        return new Source("settings/sections/{{ (_variables.id ?? object.id)|raw }}/entrytypes", "__string_template__088f8dcdfdea4718aa54d4bc499bc0ff002c9d7f819d0e4261b4f4dbc2ca3386", "");
    }
}
