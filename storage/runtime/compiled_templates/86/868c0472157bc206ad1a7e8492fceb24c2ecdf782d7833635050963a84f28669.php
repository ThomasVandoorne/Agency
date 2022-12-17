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

/* settings/assets/_layout */
class __TwigTemplate_90ef2a8fad7ee117a2fd251a27193aa010aca08d11f7e90571abfb6d1b42b5f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "settings/assets/_layout");
        // line 2
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Asset Settings", "app");
        // line 4
        $context["crumbs"] = [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings")]];
        // line 8
        $context["navItems"] = ["volumes" => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Volumes", "app"), "url" => craft\helpers\UrlHelper::url("settings/assets")], "transforms" => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Image Transforms", "app"), "url" => craft\helpers\UrlHelper::url("settings/assets/transforms")], "settings" => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings/assets/settings")]];
        // line 14
        $context["docTitle"] = ((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["navItems"]) || array_key_exists("navItems", $context) ? $context["navItems"] : (function () { throw new RuntimeError('Variable "navItems" does not exist.', 14, $this->source); })()), (isset($context["selectedNavItem"]) || array_key_exists("selectedNavItem", $context) ? $context["selectedNavItem"] : (function () { throw new RuntimeError('Variable "selectedNavItem" does not exist.', 14, $this->source); })()), [], "array"), "label", []) . " - ") . (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 14, $this->source); })()));
        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/assets/_layout", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "settings/assets/_layout");
    }

    // line 16
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "sidebar");
        // line 17
        echo "    ";
        $this->loadTemplate("_includes/nav", "settings/assets/_layout", 17)->display(twig_to_array(["label" =>         // line 19
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 19, $this->source); })()), "items" =>         // line 20
(isset($context["navItems"]) || array_key_exists("navItems", $context) ? $context["navItems"] : (function () { throw new RuntimeError('Variable "navItems" does not exist.', 20, $this->source); })()), "selectedItem" =>         // line 21
(isset($context["selectedNavItem"]) || array_key_exists("selectedNavItem", $context) ? $context["selectedNavItem"] : (function () { throw new RuntimeError('Variable "selectedNavItem" does not exist.', 21, $this->source); })())]));
        craft\helpers\Template::endProfile("block", "sidebar");
    }

    public function getTemplateName()
    {
        return "settings/assets/_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  65 => 20,  64 => 19,  62 => 17,  57 => 16,  51 => 1,  49 => 14,  47 => 8,  45 => 4,  43 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}
{% set title = \"Asset Settings\"|t('app') %}

{% set crumbs = [
    { label: \"Settings\"|t('app'), url: url('settings') }
] %}

{% set navItems = {
    volumes: { label: \"Volumes\"|t('app'), url: url('settings/assets') },
    transforms: { label: \"Image Transforms\"|t('app'), url: url('settings/assets/transforms') },
    settings: { label: \"Settings\"|t('app'), url: url('settings/assets/settings') },
} %}

{% set docTitle = navItems[selectedNavItem].label~' - '~title %}

{% block sidebar %}
    {% include \"_includes/nav\"
        with {
            label: title,
            items: navItems,
            selectedItem: selectedNavItem,
        }
        only
    %}
{% endblock %}
", "settings/assets/_layout", "/var/www/html/vendor/craftcms/cms/src/templates/settings/assets/_layout.twig");
    }
}
