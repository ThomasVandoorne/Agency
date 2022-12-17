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

/* __string_template__dc037687011e1f44c7e4f093b5ed6b09b0ceac184165cd60040cb83cd5886b0d */
class __TwigTemplate_6a9debb2c18d13e6a85607973553aa0186c7fb451edaf27fac32a3b27bb029a3 extends Template
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
        craft\helpers\Template::beginProfile("template", "__string_template__dc037687011e1f44c7e4f093b5ed6b09b0ceac184165cd60040cb83cd5886b0d");
        // line 1
        echo "settings/fields/";
        echo (((craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "groupId", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "groupId", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "groupId", [])) : (craft\helpers\Template::attribute($this->env, $this->source, ($context["object"] ?? null), "groupId", [])));
        craft\helpers\Template::endProfile("template", "__string_template__dc037687011e1f44c7e4f093b5ed6b09b0ceac184165cd60040cb83cd5886b0d");
    }

    public function getTemplateName()
    {
        return "__string_template__dc037687011e1f44c7e4f093b5ed6b09b0ceac184165cd60040cb83cd5886b0d";
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
        return new Source("settings/fields/{{ (_variables.groupId ?? object.groupId)|raw }}", "__string_template__dc037687011e1f44c7e4f093b5ed6b09b0ceac184165cd60040cb83cd5886b0d", "");
    }
}
