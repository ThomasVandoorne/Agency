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

/* __string_template__80690fc9807305f523afbbe83a8a934d35517b57e39db266ee8702a909da0513 */
class __TwigTemplate_82566c79d5c1b75a0d5453226bdb8411ccfdf5156c28489dc3263d01b218432a extends Template
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
        craft\helpers\Template::beginProfile("template", "__string_template__80690fc9807305f523afbbe83a8a934d35517b57e39db266ee8702a909da0513");
        // line 1
        echo "function/";
        echo (((craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "slug", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "slug", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "slug", [])) : (craft\helpers\Template::attribute($this->env, $this->source, ($context["object"] ?? null), "slug", [])));
        craft\helpers\Template::endProfile("template", "__string_template__80690fc9807305f523afbbe83a8a934d35517b57e39db266ee8702a909da0513");
    }

    public function getTemplateName()
    {
        return "__string_template__80690fc9807305f523afbbe83a8a934d35517b57e39db266ee8702a909da0513";
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
        return new Source("function/{{ (_variables.slug ?? object.slug)|raw }}", "__string_template__80690fc9807305f523afbbe83a8a934d35517b57e39db266ee8702a909da0513", "");
    }
}
