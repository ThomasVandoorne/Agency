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

/* _includes/forms/fieldLayoutDesigner */
class __TwigTemplate_3b6d2219def43530f8cc76d8f03b4e41c8e353a17e0a36119ae88e3ea050faec extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/fieldLayoutDesigner");
        // line 1
        $context["fieldLayout"] = (($context["fieldLayout"]) ?? (Craft::createObject("craft\\models\\FieldLayout")));
        // line 2
        echo craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 2, $this->source); })()), "cp", []), "fieldLayoutDesigner", [0 => (isset($context["fieldLayout"]) || array_key_exists("fieldLayout", $context) ? $context["fieldLayout"] : (function () { throw new RuntimeError('Variable "fieldLayout" does not exist.', 2, $this->source); })()), 1 => $context], "method");
        echo "
";
        craft\helpers\Template::endProfile("template", "_includes/forms/fieldLayoutDesigner");
    }

    public function getTemplateName()
    {
        return "_includes/forms/fieldLayoutDesigner";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set fieldLayout = fieldLayout ?? create('craft\\\\models\\\\FieldLayout') %}
{{ craft.cp.fieldLayoutDesigner(fieldLayout, _context)|raw }}
", "_includes/forms/fieldLayoutDesigner", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms/fieldLayoutDesigner.twig");
    }
}
