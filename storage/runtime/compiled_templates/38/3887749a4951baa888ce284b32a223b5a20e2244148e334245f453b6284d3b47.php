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

/* _includes/forms/datetime.twig */
class __TwigTemplate_716267114fbb570003fa0e1b2e68674b5979b4c0f7c8d6e11e80656b57c0adf4 extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/datetime.twig");
        // line 1
        echo "<div class=\"datetimewrapper\">
    ";
        // line 2
        $this->loadTemplate("_includes/forms/date", "_includes/forms/datetime.twig", 2)->display(twig_array_merge($context, ["hasOuterContainer" => true, "isDateTime" => true]));
        // line 6
        echo "    ";
        $this->loadTemplate("_includes/forms/time", "_includes/forms/datetime.twig", 6)->display(twig_array_merge($context, ["hasOuterContainer" => true, "isDateTime" => true, "outputTzParam" => false]));
        // line 11
        echo "</div>
";
        craft\helpers\Template::endProfile("template", "_includes/forms/datetime.twig");
    }

    public function getTemplateName()
    {
        return "_includes/forms/datetime.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  43 => 6,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"datetimewrapper\">
    {% include '_includes/forms/date' with {
        hasOuterContainer: true,
        isDateTime: true,
    } %}
    {% include '_includes/forms/time' with {
        hasOuterContainer: true,
        isDateTime: true,
        outputTzParam: false,
    } %}
</div>
", "_includes/forms/datetime.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms/datetime.twig");
    }
}
