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

/* plugin-store/_index.twig */
class __TwigTemplate_1b392965a7598b65b0c07a9233ee62a1537583a87e8277170ab48923686dffa6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actionButton' => [$this, 'block_actionButton'],
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
        craft\helpers\Template::beginProfile("template", "plugin-store/_index.twig");
        // line 3
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Plugin Store", "app");
        // line 42
        $context["content"] = ('' === $tmp = "    <div id=\"app\"></div>
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "plugin-store/_index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "plugin-store/_index.twig");
    }

    // line 5
    public function block_actionButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "actionButton");
        // line 6
        echo "    <div id=\"pluginstore-actions-spinner\" class=\"spinner lg hidden\"></div>

    <div id=\"pluginstore-actions\" class=\"hidden\">

        <a id=\"cart-button\" role=\"button\" tabindex=\"0\">";
        // line 10
        echo $this->extensions['craft\web\twig\Extension']->svgFunction("@appicons/shopping-cart.svg", null, true);
        echo " <span class=\"badge\">0</span></a>

        <a id=\"craftid-account\" class=\"menubtn hidden\"><span class=\"photo\">";
        // line 12
        echo $this->extensions['craft\web\twig\Extension']->svgFunction("@appicons/craftid.svg", null, true);
        echo "</span><span class=\"label\">Account</span></a>

        <div class=\"menu\">
            <ul>
                <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 16, $this->source); })()), "cp", []), "craftIdAccountUrl", [], "method"), "html", null, true);
        echo "\" rel=\"noopener\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Manage your Craft ID", "app"), "html", null, true);
        echo "</a></li>
                ";
        // line 26
        echo "            </ul>
        </div>

        ";
        // line 39
        echo "    </div>
";
        craft\helpers\Template::endProfile("block", "actionButton");
    }

    public function getTemplateName()
    {
        return "plugin-store/_index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 39,  83 => 26,  77 => 16,  70 => 12,  65 => 10,  59 => 6,  54 => 5,  48 => 1,  45 => 42,  43 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}

{% set title = 'Plugin Store'|t('app') %}

{% block actionButton %}
    <div id=\"pluginstore-actions-spinner\" class=\"spinner lg hidden\"></div>

    <div id=\"pluginstore-actions\" class=\"hidden\">

        <a id=\"cart-button\" role=\"button\" tabindex=\"0\">{{ svg('@appicons/shopping-cart.svg', namespace=true) }} <span class=\"badge\">0</span></a>

        <a id=\"craftid-account\" class=\"menubtn hidden\"><span class=\"photo\">{{ svg('@appicons/craftid.svg', namespace=true) }}</span><span class=\"label\">Account</span></a>

        <div class=\"menu\">
            <ul>
                <li><a href=\"{{ craft.cp.craftIdAccountUrl() }}\" rel=\"noopener\" target=\"_blank\">{{ \"Manage your Craft ID\"|t('app') }}</a></li>
                {#
                <li>
                    <form method=\"post\" id=\"disconnect\">
                        {{ csrfInput() }}
                        {{ actionInput('plugin-store/disconnect') }}
                        <a onclick=\"document.getElementById('disconnect').submit();\">{{ \"Sign out from Craft ID\"|t('app') }}</a>
                    </form>
                </li>
                #}
            </ul>
        </div>

        {#
        <form id=\"craftid-connect-form\" method=\"post\">
            {{ csrfInput() }}
            {{ actionInput('plugin-store/connect') }}
            <div class=\"ssl-status light\" title=\"{{ craft.app.request.isSecureConnection ? \"Your connection is secure\"|t('app') : \"Your connection is insecure\"|t('app') }}\" aria-label=\"{{ craft.app.request.isSecureConnection ? \"Your connection is secure\"|t('app') : \"Your connection is insecure\"|t('app') }}\">
                <i class=\"{{ craft.app.request.isSecureConnection ? \"secure\" : \"insecure\" }} icon\"></i>
            </div>
            <a onclick=\"document.getElementById('craftid-connect-form').submit();\">{{ 'Sign into Craft ID'|t('app') }}</a>
        </form>
        #}
    </div>
{% endblock %}

{% set content %}
    <div id=\"app\"></div>
{% endset %}
", "plugin-store/_index.twig", "/var/www/html/vendor/craftcms/cms/src/templates/plugin-store/_index.twig");
    }
}
