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

/* _includes/links */
class __TwigTemplate_5b1ae4856105a296ab6a22eb2497714fea2a14a8e243ebe105e261e7d1de9257 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_includes/links");
        // line 8
        echo "
";
        craft\helpers\Template::endProfile("template", "_includes/links");
    }

    // line 1
    public function macro_externalLinkIcon(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "externalLinkIcon");
            // line 2
            echo "    ";
            echo $this->extensions['craft\web\twig\Extension']->tagFunction("span", ["data-icon" => "external", "role" => "img", "aria-label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Opens in a new window", "app")]);
            // line 6
            echo "
";
            craft\helpers\Template::endProfile("macro", "externalLinkIcon");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 9
    public function macro_externalLink($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "externalLink");
            // line 10
            echo "    ";
            $context["linkAttributes"] = ["href" => craft\helpers\Template::attribute($this->env, $this->source,             // line 11
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "link", []), "target" => "_blank", "rel" => "noopener", "html" => (craft\helpers\Template::attribute($this->env, $this->source,             // line 14
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "text", []) . twig_call_macro($macros["_self"], "macro_externalLinkIcon", [], 14, $context, $this->getSourceContext()))];
            // line 16
            echo "    ";
            echo $this->extensions['craft\web\twig\Extension']->tagFunction("a", (isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 16, $this->source); })()));
            echo "
";
            craft\helpers\Template::endProfile("macro", "externalLink");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_includes/links";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 16,  89 => 14,  88 => 11,  86 => 10,  72 => 9,  61 => 6,  58 => 2,  45 => 1,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro externalLinkIcon() %}
    {{ tag('span', {
        'data-icon': 'external',
        'role': 'img',
        'aria-label': 'Opens in a new window'|t('app'),
    }) }}
{% endmacro %}

{% macro externalLink(config) %}
    {% set linkAttributes = {
        href: config.link,
        target: '_blank',
        rel: 'noopener',
        html: config.text ~ _self.externalLinkIcon()
    } %}
    {{ tag('a', linkAttributes) }}
{% endmacro %}", "_includes/links", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/links.twig");
    }
}
