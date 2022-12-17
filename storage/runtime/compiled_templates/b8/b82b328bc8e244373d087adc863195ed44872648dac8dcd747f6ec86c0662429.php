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

/* _elements/modalbody.twig */
class __TwigTemplate_491f7fb983c46324a38622b76137c48410e9ec90714dcd18bb705c6b7981c3dc extends Template
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
        craft\helpers\Template::beginProfile("template", "_elements/modalbody.twig");
        // line 1
        echo "<div class=\"content";
        if ((isset($context["showSidebar"]) || array_key_exists("showSidebar", $context) ? $context["showSidebar"] : (function () { throw new RuntimeError('Variable "showSidebar" does not exist.', 1, $this->source); })())) {
            echo " has-sidebar";
        }
        echo "\">
    <div class=\"sidebar";
        // line 2
        if ( !(isset($context["showSidebar"]) || array_key_exists("showSidebar", $context) ? $context["showSidebar"] : (function () { throw new RuntimeError('Variable "showSidebar" does not exist.', 2, $this->source); })())) {
            echo " hidden";
        }
        echo "\">
        <nav>
            ";
        // line 4
        $this->loadTemplate("_elements/sources", "_elements/modalbody.twig", 4)->display($context);
        // line 5
        echo "        </nav>
    </div>

    <div class=\"main\">
        <div class=\"toolbar flex\">
            ";
        // line 10
        $this->loadTemplate("_elements/toolbar", "_elements/modalbody.twig", 10)->display($context);
        // line 11
        echo "        </div>
        <div class=\"elements\"></div>
    </div>
</div>
";
        craft\helpers\Template::endProfile("template", "_elements/modalbody.twig");
    }

    public function getTemplateName()
    {
        return "_elements/modalbody.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  54 => 5,  52 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content{% if showSidebar %} has-sidebar{% endif %}\">
    <div class=\"sidebar{% if not showSidebar %} hidden{% endif %}\">
        <nav>
            {% include \"_elements/sources\" %}
        </nav>
    </div>

    <div class=\"main\">
        <div class=\"toolbar flex\">
            {% include '_elements/toolbar' %}
        </div>
        <div class=\"elements\"></div>
    </div>
</div>
", "_elements/modalbody.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_elements/modalbody.twig");
    }
}
