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

/* utilities/_index.twig */
class __TwigTemplate_71f65ebfe116bcbf55ae10ce45c1d94d2de3742cefccef4c00bbbe7c4d6e0f65 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sidebar' => [$this, 'block_sidebar'],
            'toolbar' => [$this, 'block_toolbar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
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
        craft\helpers\Template::beginProfile("template", "utilities/_index.twig");
        // line 3
        $context["title"] = (isset($context["displayName"]) || array_key_exists("displayName", $context) ? $context["displayName"] : (function () { throw new RuntimeError('Variable "displayName" does not exist.', 3, $this->source); })());
        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "utilities/_index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "utilities/_index.twig");
    }

    // line 5
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "sidebar");
        // line 6
        echo "    <nav aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Utilities", "app"), "html", null, true);
        echo "\">
        <ul>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilities"]) || array_key_exists("utilities", $context) ? $context["utilities"] : (function () { throw new RuntimeError('Variable "utilities" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utility"]) {
            // line 9
            echo "                ";
            $context["selected"] = (craft\helpers\Template::attribute($this->env, $this->source, $context["utility"], "id", []) == (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 9, $this->source); })()));
            // line 10
            echo "                <li>
                    <a class=\"";
            // line 11
            if ((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 11, $this->source); })())) {
                echo "sel";
            } elseif (craft\helpers\Template::attribute($this->env, $this->source, $context["utility"], "badgeCount", [])) {
                echo "has-badge";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(("utilities/" . craft\helpers\Template::attribute($this->env, $this->source, $context["utility"], "id", []))), "html", null, true);
            echo "\">
                        <span class=\"icon icon-mask\" aria-hidden=\"true\">";
            // line 12
            echo $this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->source, $context["utility"], "iconSvg", []), false);
            echo "</span>
                        <span class=\"label\">";
            // line 13
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["utility"], "displayName", []), "html", null, true);
            echo "</span>
                        ";
            // line 14
            if (( !(isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 14, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->source, $context["utility"], "badgeCount", []))) {
                // line 15
                echo "                            <span class=\"badge\" aria-hidden=\"true\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->numberFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["utility"], "badgeCount", []), 0), "html", null, true);
                echo "</span>
                            ";
                // line 16
                echo $this->extensions['craft\web\twig\Extension']->tagFunction("span", ["class" => "visually-hidden", "data" => ["notification" => true], "text" => $this->extensions['craft\web\twig\Extension']->translateFilter("{num, number} {num, plural, =1{notification} other{notifications}}", "app", ["num" => craft\helpers\Template::attribute($this->env, $this->source,                 // line 22
$context["utility"], "badgeCount", [])])]);
                // line 24
                echo "
                        ";
            }
            // line 26
            echo "                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utility'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </ul>
    </nav>
";
        craft\helpers\Template::endProfile("block", "sidebar");
    }

    // line 33
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "toolbar");
        // line 34
        echo "    ";
        echo (isset($context["toolbarHtml"]) || array_key_exists("toolbarHtml", $context) ? $context["toolbarHtml"] : (function () { throw new RuntimeError('Variable "toolbarHtml" does not exist.', 34, $this->source); })());
        echo "
";
        craft\helpers\Template::endProfile("block", "toolbar");
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 38
        echo "    ";
        echo (isset($context["contentHtml"]) || array_key_exists("contentHtml", $context) ? $context["contentHtml"] : (function () { throw new RuntimeError('Variable "contentHtml" does not exist.', 38, $this->source); })());
        echo "
";
        craft\helpers\Template::endProfile("block", "content");
    }

    // line 41
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "footer");
        // line 42
        echo "    ";
        echo (isset($context["footerHtml"]) || array_key_exists("footerHtml", $context) ? $context["footerHtml"] : (function () { throw new RuntimeError('Variable "footerHtml" does not exist.', 42, $this->source); })());
        echo "
";
        craft\helpers\Template::endProfile("block", "footer");
    }

    public function getTemplateName()
    {
        return "utilities/_index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 42,  148 => 41,  140 => 38,  135 => 37,  127 => 34,  122 => 33,  115 => 29,  107 => 26,  103 => 24,  101 => 22,  100 => 16,  95 => 15,  93 => 14,  89 => 13,  85 => 12,  75 => 11,  72 => 10,  69 => 9,  65 => 8,  59 => 6,  54 => 5,  48 => 1,  46 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}

{% set title = displayName %}

{% block sidebar %}
    <nav aria-label=\"{{ 'Utilities'|t('app') }}\">
        <ul>
            {% for utility in utilities %}
                {% set selected = utility.id == id %}
                <li>
                    <a class=\"{% if selected %}sel{% elseif utility.badgeCount %}has-badge{% endif %}\" href=\"{{ url('utilities/'~utility.id) }}\">
                        <span class=\"icon icon-mask\" aria-hidden=\"true\">{{ svg(utility.iconSvg, sanitize=false) }}</span>
                        <span class=\"label\">{{ utility.displayName }}</span>
                        {% if not selected and utility.badgeCount %}
                            <span class=\"badge\" aria-hidden=\"true\">{{ utility.badgeCount|number(decimals=0) }}</span>
                            {{ tag('span', {
                                class: 'visually-hidden',
                                data: {
                                    notification: true,
                                },
                                text: '{num, number} {num, plural, =1{notification} other{notifications}}'|t('app', {
                                   num: utility.badgeCount,
                                }),
                            }) }}
                        {% endif %}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </nav>
{% endblock %}

{% block toolbar %}
    {{ toolbarHtml|raw }}
{% endblock %}

{% block content %}
    {{ contentHtml|raw }}
{% endblock %}

{% block footer %}
    {{ footerHtml|raw }}
{% endblock %}
", "utilities/_index.twig", "/var/www/html/vendor/craftcms/cms/src/templates/utilities/_index.twig");
    }
}
