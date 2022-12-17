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

/* settings */
class __TwigTemplate_d477b56cea417654b67f9255d1347dcba96580fdc3d757cc2473ba0802fb9d9a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "settings");
        // line 1
        Craft::$app->controller->requireAdmin();
        // line 4
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app");
        // line 3
        $this->parent = $this->loadTemplate("_layouts/cp", "settings", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "settings");
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 8, $this->source); })()), "cp", []), "settings", [0 => 80], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["category"] => $context["items"]) {
            // line 9
            echo "        <h2>";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</h2>

        <ul class=\"icons\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["items"]);
            foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
                // line 13
                echo "                ";
                $context["icon"] = (((craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "iconMask", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "iconMask", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "iconMask", [])) : (craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "icon", [])));
                // line 14
                echo "                <li>
                    <a href=\"";
                // line 15
                if (craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "url", [], "any", true, true)) {
                    echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "url", [])), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(("settings/" . $context["handle"])), "html", null, true);
                }
                echo "\">
                        <div class=\"icon";
                // line 16
                if (craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "iconMask", [], "any", true, true)) {
                    echo " icon-mask";
                }
                echo "\" aria-hidden=\"true\">
                            ";
                // line 17
                echo $this->extensions['craft\web\twig\Extension']->svgFunction((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 17, $this->source); })()), true, true);
                echo "
                        </div>
                        ";
                // line 19
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "label", []), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </ul>

        ";
            // line 25
            if ( !craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "last", [])) {
                // line 26
                echo "            <hr>
        ";
            }
            // line 28
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 28,  128 => 26,  126 => 25,  122 => 23,  112 => 19,  107 => 17,  101 => 16,  93 => 15,  90 => 14,  87 => 13,  83 => 12,  76 => 9,  58 => 8,  53 => 7,  47 => 3,  45 => 4,  43 => 1,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% requireAdmin %}

{% extends \"_layouts/cp\" %}
{% set title = \"Settings\"|t('app') %}


{% block content %}
    {% for category, items in craft.cp.settings(80) %}
        <h2>{{ category }}</h2>

        <ul class=\"icons\">
            {% for handle, item in items %}
                {% set icon = item.iconMask ?? item.icon %}
                <li>
                    <a href=\"{% if item.url is defined %}{{ url(item.url) }}{% else %}{{ url('settings/'~handle) }}{% endif %}\">
                        <div class=\"icon{% if item.iconMask is defined %} icon-mask{% endif %}\" aria-hidden=\"true\">
                            {{ svg(icon, sanitize=true, namespace=true) }}
                        </div>
                        {{ item.label }}
                    </a>
                </li>
            {% endfor %}
        </ul>

        {% if not loop.last %}
            <hr>
        {% endif %}
    {% endfor %}
{% endblock %}
", "settings", "/var/www/html/vendor/craftcms/cms/src/templates/settings/index.twig");
    }
}
