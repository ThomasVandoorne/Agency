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

/* _/layout/base.twig */
class __TwigTemplate_6eb6bb948b0e294e11d544463e8dfd7bc4e858ca2b4438ee606211010be1e7ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_/layout/base.twig");
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 2, $this->source); })()), "app", []), "language", []), "html", null, true);
        echo "\">
  <head>
    <meta charset=\"utf-8\"/>
    <title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["siteName"]) || array_key_exists("siteName", $context) ? $context["siteName"] : (function () { throw new RuntimeError('Variable "siteName" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    ";
        // line 7
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 7, $this->source); })()), "vite", []), "script", [0 => "src/js/app.js"], "method"), "html", null, true);
        echo "
  ";
        // line 8
        $this->env->getFunction('head')->getCallable()();
        echo "</head>
  <body>";
        // line 9
        $this->env->getFunction('beginBody')->getCallable()();
        echo "
<header>
  <nav> 
    <a  class=\"header__link\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) || array_key_exists("siteUrl", $context) ? $context["siteUrl"] : (function () { throw new RuntimeError('Variable "siteUrl" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\"><p>Home</p></a>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 13, $this->source); })()), "navigationLinks", []), "all", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 14
            echo "      ";
            $context["destination"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["link"], "linkDestination", []), "one", [], "method");
            // line 15
            echo "      <a  class=\"header__link\" href=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 15, $this->source); })()), "url", []), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["link"], "linkText", []), "html", null, true);
            echo "</p></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </nav>
</header>

    <div>
      ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "    </div>
    <footer>
  <p>";
        // line 26
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 26, $this->source); })()), "globalText", []), "html", null, true);
        echo "</p>
    </footer>
  ";
        // line 28
        $this->env->getFunction('endBody')->getCallable()();
        echo "</body>";
        craft\helpers\Template::endProfile("template", "_/layout/base.twig");
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 22
        echo "      
      ";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "_/layout/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 22,  112 => 21,  106 => 28,  101 => 26,  97 => 24,  95 => 21,  89 => 17,  78 => 15,  75 => 14,  71 => 13,  67 => 12,  61 => 9,  57 => 8,  53 => 7,  48 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ craft.app.language }}\">
  <head>
    <meta charset=\"utf-8\"/>
    <title>{{ siteName }}</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    {{ craft.vite.script(\"src/js/app.js\") }}
  </head>
  <body>
<header>
  <nav> 
    <a  class=\"header__link\" href=\"{{siteUrl}}\"><p>Home</p></a>
    {% for link in navigation.navigationLinks.all() %}
      {% set destination = link.linkDestination.one() %}
      <a  class=\"header__link\" href=\"{{ destination.url }}\"><p>{{link.linkText}}</p></a>
    {% endfor %}
  </nav>
</header>

    <div>
      {% block content %}
      
      {% endblock %}
    </div>
    <footer>
  <p>{{footer.globalText}}</p>
    </footer>
  </body>", "_/layout/base.twig", "/var/www/html/templates/_/layout/base.twig");
    }
}
