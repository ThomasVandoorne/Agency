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

/* _special/updater.twig */
class __TwigTemplate_34160e0758bc6e11b479bfdd041e84e1ca034ffacb1953d150078f7432d7fae7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_special/updater.twig");
        $this->parent = $this->loadTemplate("_layouts/basecp", "_special/updater.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_special/updater.twig");
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "body");
        // line 4
        echo "    <div id=\"graphic\" class=\"spinner big over-bg\"></div>
    <div id=\"status\"></div>
";
        craft\helpers\Template::endProfile("block", "body");
    }

    public function getTemplateName()
    {
        return "_special/updater.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/basecp\" %}

{% block body %}
    <div id=\"graphic\" class=\"spinner big over-bg\"></div>
    <div id=\"status\"></div>
{% endblock %}
", "_special/updater.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_special/updater.twig");
    }
}
