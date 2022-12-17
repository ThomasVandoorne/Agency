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

/* __string_template__ad4eecbe8596b21053652b8fe030df7431e1c12cd36ee0cbf04a8f0978f11607 */
class __TwigTemplate_a07c8561ef9000926eaa4c6329e256c75edbc302ca4ff128dcfe02bf69e29636 extends Template
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
        craft\helpers\Template::beginProfile("template", "__string_template__ad4eecbe8596b21053652b8fe030df7431e1c12cd36ee0cbf04a8f0978f11607");
        // line 1
        echo "projects/";
        echo (((craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "slug", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "slug", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "slug", [])) : (craft\helpers\Template::attribute($this->env, $this->source, ($context["object"] ?? null), "slug", [])));
        craft\helpers\Template::endProfile("template", "__string_template__ad4eecbe8596b21053652b8fe030df7431e1c12cd36ee0cbf04a8f0978f11607");
    }

    public function getTemplateName()
    {
        return "__string_template__ad4eecbe8596b21053652b8fe030df7431e1c12cd36ee0cbf04a8f0978f11607";
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
        return new Source("projects/{{ (_variables.slug ?? object.slug)|raw }}", "__string_template__ad4eecbe8596b21053652b8fe030df7431e1c12cd36ee0cbf04a8f0978f11607", "");
    }
}
