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

/* __string_template__3fd801d414b964e54fbecdf54be287c9863b8798b2907882a50f680f8b1ae324 */
class __TwigTemplate_7640e7bb1da68748811a699ae04b09c98ca39eb68fd54e86f359e7a091a96aea extends Template
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
        craft\helpers\Template::beginProfile("template", "__string_template__3fd801d414b964e54fbecdf54be287c9863b8798b2907882a50f680f8b1ae324");
        // line 1
        echo "type/";
        echo (((craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "slug", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "slug", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "slug", [])) : (craft\helpers\Template::attribute($this->env, $this->source, ($context["object"] ?? null), "slug", [])));
        craft\helpers\Template::endProfile("template", "__string_template__3fd801d414b964e54fbecdf54be287c9863b8798b2907882a50f680f8b1ae324");
    }

    public function getTemplateName()
    {
        return "__string_template__3fd801d414b964e54fbecdf54be287c9863b8798b2907882a50f680f8b1ae324";
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
        return new Source("type/{{ (_variables.slug ?? object.slug)|raw }}", "__string_template__3fd801d414b964e54fbecdf54be287c9863b8798b2907882a50f680f8b1ae324", "");
    }
}
