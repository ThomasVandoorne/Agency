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

/* _layouts/components/tag.twig */
class __TwigTemplate_7a88f8001c20c1cf9f1c66b775ce03bd3e8ce1561215ab1ab48bd4e4b9d76cff extends Template
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
        craft\helpers\Template::beginProfile("template", "_layouts/components/tag.twig");
        // line 1
        $context["attributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((($context["attributes"]) ?? ([])), ["style" => twig_array_map($this->env, $this->extensions['craft\web\twig\Extension']->mergeFilter($this->extensions['craft\web\twig\Extension']->mergeFilter(["animation-name" => "none", "appearance" => "auto", "aspect-ratio" => "auto", "background-color" => "transparent", "background-image" => "none", "bottom" => "auto", "color" => "inherit", "display" => "inline", "filter" => "none", "font-size" => "inherit", "font-weight" => "inherit", "height" => "auto", "left" => "auto", "max-height" => "none", "max-width" => "none", "opacity" => "1", "position" => "static", "right" => "auto", "rotate" => "none", "top" => "auto", "transform" => "none", "width" => "auto"], ((        // line 27
$context["style"]) ?? ([]))), craft\helpers\Html::explodeStyle((((craft\helpers\Template::attribute($this->env, $this->source,         // line 28
($context["attribtes"] ?? null), "style", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["attribtes"] ?? null), "style", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["attribtes"] ?? null), "style", [])) : ([])))),         // line 29
function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 29, $this->source); })()) . " !important"); })]);
        // line 33
        echo $this->extensions['craft\web\twig\Extension']->tagFunction((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 33, $this->source); })()), $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 33, $this->source); })()), ["html" => ((        // line 34
$context["content"]) ?? (((        $this->hasBlock("content", $context, $blocks)) ? (        $this->renderBlock("content", $context, $blocks)) : (""))))]));
        // line 35
        echo "
";
        craft\helpers\Template::endProfile("template", "_layouts/components/tag.twig");
    }

    public function getTemplateName()
    {
        return "_layouts/components/tag.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 35,  44 => 34,  43 => 33,  41 => 29,  40 => 28,  39 => 27,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set attributes = (attributes ?? {})
  |merge({
    style: {
      'animation-name': 'none',
      'appearance': 'auto',
      'aspect-ratio': 'auto',
      'background-color': 'transparent',
      'background-image': 'none',
      'bottom': 'auto',
      'color': 'inherit',
      'display': 'inline',
      'filter': 'none',
      'font-size': 'inherit',
      'font-weight': 'inherit',
      'height': 'auto',
      'left': 'auto',
      'max-height': 'none',
      'max-width': 'none',
      'opacity': '1',
      'position': 'static',
      'right': 'auto',
      'rotate': 'none',
      'top': 'auto',
      'transform': 'none',
      'width': 'auto',
    }
      |merge(style ?? {})
      |merge((attribtes.style ?? {})|explodeStyle)
      |map(v => \"#{v} !important\")
  })
%}

{{- tag(type, attributes|merge({
  html: content ?? block('content') ?? ''
})) }}
", "_layouts/components/tag.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_layouts/components/tag.twig");
    }
}
