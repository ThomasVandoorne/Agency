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

/* _elements/element */
class __TwigTemplate_5df3cd28375851d5989d6cb913fef70bb29b2c6f83ae8d92495727eab2a537b5 extends Template
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
        craft\helpers\Template::beginProfile("template", "_elements/element");
        // line 1
        echo \Craft::$app->getView()->invokeHook("cp.elements.element", $context);

        craft\helpers\Template::endProfile("template", "_elements/element");
    }

    public function getTemplateName()
    {
        return "_elements/element";
    }

    public function getDebugInfo()
    {
        return array (  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% hook \"cp.elements.element\" %}
", "_elements/element", "/var/www/html/vendor/craftcms/cms/src/templates/_elements/element.twig");
    }
}
