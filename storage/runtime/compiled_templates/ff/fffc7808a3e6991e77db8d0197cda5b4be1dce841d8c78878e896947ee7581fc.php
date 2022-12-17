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

/* _layouts/components/crumbs */
class __TwigTemplate_4dce16f7ef7b9c8f076fa795c85681316475aeb8b20f6a134cd7f1d3c37e578b extends Template
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
        craft\helpers\Template::beginProfile("template", "_layouts/components/crumbs");
        // line 1
        echo "<div id=\"crumbs\"";
        if ( !(isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new RuntimeError('Variable "crumbs" does not exist.', 1, $this->source); })())) {
            echo " class=\"empty\"";
        }
        echo ">
    <button id=\"primary-nav-toggle\" class=\"nav-toggle\" title=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Show nav", "app"), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Show nav", "app"), "html", null, true);
        echo "\" aria-expanded=\"false\" aria-controls=\"global-sidebar\" aria-haspopup=\"true\"></button>
    ";
        // line 3
        if ((isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new RuntimeError('Variable "crumbs" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "        <nav aria-label=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Breadcrumbs", "app"), "html", null, true);
            echo "\">
            <ul class=\"breadcrumb-list\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new RuntimeError('Variable "crumbs" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 7
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["crumb"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["crumb"], "label", []), "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "            </ul>
        </nav>
    ";
        }
        // line 12
        echo "</div>
";
        craft\helpers\Template::endProfile("template", "_layouts/components/crumbs");
    }

    public function getTemplateName()
    {
        return "_layouts/components/crumbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 12,  74 => 9,  63 => 7,  59 => 6,  53 => 4,  51 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"crumbs\"{% if not crumbs %} class=\"empty\"{% endif %}>
    <button id=\"primary-nav-toggle\" class=\"nav-toggle\" title=\"{{ 'Show nav'|t('app') }}\" aria-label=\"{{ 'Show nav'|t('app') }}\" aria-expanded=\"false\" aria-controls=\"global-sidebar\" aria-haspopup=\"true\"></button>
    {% if crumbs %}
        <nav aria-label=\"{{ 'Breadcrumbs'|t('app') }}\">
            <ul class=\"breadcrumb-list\">
                {% for crumb in crumbs %}
                    <li><a href=\"{{ crumb.url }}\">{{ crumb.label }}</a></li>
                {% endfor %}
            </ul>
        </nav>
    {% endif %}
</div>
", "_layouts/components/crumbs", "/var/www/html/vendor/craftcms/cms/src/templates/_layouts/components/crumbs.twig");
    }
}
