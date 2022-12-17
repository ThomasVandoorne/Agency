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

/* _components/widgets/Updates/body.twig */
class __TwigTemplate_78fbe257a2e8a96872738de5e6bcb50725fd31a17eb46f72214205df03eb1a8e extends Template
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
        craft\helpers\Template::beginProfile("template", "_components/widgets/Updates/body.twig");
        // line 1
        if ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <p class=\"centeralign\">
        ";
            // line 3
            if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 3, $this->source); })()) == 1)) {
                // line 4
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("One update available!", "app"), "html", null, true);
                echo "
        ";
            } else {
                // line 6
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("{total} updates available!", "app", ["total" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 6, $this->source); })())]), "html", null, true);
                echo "
        ";
            }
            // line 8
            echo "        <a class=\"go nowrap\" href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("utilities/updates"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Go to Updates", "app"), "html", null, true);
            echo "</a>
    </p>
";
        } else {
            // line 11
            echo "    <p class=\"centeralign\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Congrats! You’re up to date.", "app"), "html", null, true);
            echo "</p>
    <p class=\"centeralign\">
        <button type=\"button\" class=\"btn\" data-icon=\"refresh\" aria-label=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Check again", "app"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Check again", "app"), "html", null, true);
            echo "</button>
    </p>
";
        }
        craft\helpers\Template::endProfile("template", "_components/widgets/Updates/body.twig");
    }

    public function getTemplateName()
    {
        return "_components/widgets/Updates/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  66 => 11,  57 => 8,  51 => 6,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if total %}
    <p class=\"centeralign\">
        {% if total == 1 %}
            {{ \"One update available!\"|t('app') }}
        {% else %}
            {{ \"{total} updates available!\"|t('app', { total: total }) }}
        {% endif %}
        <a class=\"go nowrap\" href=\"{{ url('utilities/updates') }}\">{{ \"Go to Updates\"|t('app') }}</a>
    </p>
{% else %}
    <p class=\"centeralign\">{{ \"Congrats! You’re up to date.\"|t('app') }}</p>
    <p class=\"centeralign\">
        <button type=\"button\" class=\"btn\" data-icon=\"refresh\" aria-label=\"{{ 'Check again'|t('app') }}\">{{ 'Check again'|t('app') }}</button>
    </p>
{% endif %}
", "_components/widgets/Updates/body.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_components/widgets/Updates/body.twig");
    }
}
