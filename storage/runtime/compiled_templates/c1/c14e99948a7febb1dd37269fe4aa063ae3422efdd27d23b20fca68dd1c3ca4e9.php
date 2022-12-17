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

/* _components/elementactions/SetStatus/trigger.twig */
class __TwigTemplate_0c68daab36a9b0763aa310b0c6e87a00453ec8b2e248160cf9fa0f516f044d4b extends Template
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
        craft\helpers\Template::beginProfile("template", "_components/elementactions/SetStatus/trigger.twig");
        // line 1
        echo "<button type=\"button\" class=\"btn menubtn\" aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Set status", "app"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Set status", "app"), "html", null, true);
        echo "</button>
<div class=\"menu\">
    <ul>
        <li><a class=\"formsubmit\" data-param=\"status\" data-value=\"enabled\"><span class=\"status enabled\"></span> ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Enabled", "app"), "html", null, true);
        echo "</a></li>
        <li><a class=\"formsubmit\" data-param=\"status\" data-value=\"disabled\"><span class=\"status disabled\"></span> ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Disabled", "app"), "html", null, true);
        echo "</a></li>
    </ul>
</div>
";
        craft\helpers\Template::endProfile("template", "_components/elementactions/SetStatus/trigger.twig");
    }

    public function getTemplateName()
    {
        return "_components/elementactions/SetStatus/trigger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  47 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<button type=\"button\" class=\"btn menubtn\" aria-label=\"{{ \"Set status\"|t('app') }}\">{{ \"Set status\"|t('app') }}</button>
<div class=\"menu\">
    <ul>
        <li><a class=\"formsubmit\" data-param=\"status\" data-value=\"enabled\"><span class=\"status enabled\"></span> {{ \"Enabled\"|t('app') }}</a></li>
        <li><a class=\"formsubmit\" data-param=\"status\" data-value=\"disabled\"><span class=\"status disabled\"></span> {{ \"Disabled\"|t('app') }}</a></li>
    </ul>
</div>
", "_components/elementactions/SetStatus/trigger.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_components/elementactions/SetStatus/trigger.twig");
    }
}
