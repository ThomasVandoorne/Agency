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

/* _includes/tabs */
class __TwigTemplate_3677d3f7af2f1964c6ee725cf6bce6ae977a4f51b4a31f012975c1cd645e7139 extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/tabs");
        // line 1
        $context["containerAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["class" => $this->extensions['craft\web\twig\Extension']->mergeFilter([0 => "pane-tabs"], craft\helpers\Html::explodeClass(((        // line 2
$context["class"]) ?? ([]))))], ((        // line 3
$context["containerAttributes"]) ?? ([])), true);
        // line 4
        echo "
";
        // line 5
        $context["selectedTab"] = (($context["selectedTab"]) ?? (twig_first($this->env, twig_get_array_keys_filter((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 5, $this->source); })())))));
        // line 6
        $context["tablistLabel"] = (($context["tablistLabel"]) ?? ($this->extensions['craft\web\twig\Extension']->translateFilter("Primary fields", "app")));
        // line 7
        $context["tabs"] = twig_array_map($this->env, (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 7, $this->source); })()), function ($__tab__, $__tabId__) use ($context, $macros) { $context["tab"] = $__tab__; $context["tabId"] = $__tabId__; return $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 7, $this->source); })()), ["selected" => (        // line 8
(isset($context["tabId"]) || array_key_exists("tabId", $context) ? $context["tabId"] : (function () { throw new RuntimeError('Variable "tabId" does not exist.', 8, $this->source); })()) == (isset($context["selectedTab"]) || array_key_exists("selectedTab", $context) ? $context["selectedTab"] : (function () { throw new RuntimeError('Variable "selectedTab" does not exist.', 8, $this->source); })())), "class" => craft\helpers\Html::explodeClass((((craft\helpers\Template::attribute($this->env, $this->source,         // line 9
($context["tab"] ?? null), "class", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["tab"] ?? null), "class", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["tab"] ?? null), "class", [])) : ([])))]); });
        // line 11
        echo "
";
        // line 12
        ob_start();
        // line 13
        echo "    ";
        ob_start();
        // line 20
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["containerId"] => $context["tab"]) {
            // line 21
            echo "            ";
            ob_start();
            // line 35
            echo "                ";
            ob_start();
            // line 38
            echo "                    ";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["tab"], "label", []), "html", null, true);
            echo "
                    ";
            // line 39
            if (twig_in_filter("error", craft\helpers\Template::attribute($this->env, $this->source, $context["tab"], "class", []))) {
                // line 40
                echo "                        ";
                ob_start();
                // line 45
                echo "                            ";
                echo $this->extensions['craft\web\twig\Extension']->tagFunction("span", ["text" => $this->extensions['craft\web\twig\Extension']->translateFilter("This tab contains errors", "app"), "class" => "visually-hidden"]);
                // line 48
                echo "
                        ";
                echo craft\helpers\Html::tag("span", ob_get_clean(), ["data" => ["icon" => "alert"]]);
                // line 50
                echo "                    ";
            }
            // line 51
            echo "                ";
            echo craft\helpers\Html::tag("span", ob_get_clean(), ["class" => "tab-label"]);
            // line 52
            echo "            ";
            echo craft\helpers\Html::tag("a", ob_get_clean(), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 22
$context["tab"], "tabId", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["tab"], "tabId", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["tab"], "tabId", [])) : (("tab-" . $context["containerId"]))), "class" => $this->extensions['craft\web\twig\Extension']->mergeFilter(((craft\helpers\Template::attribute($this->env, $this->source,             // line 23
$context["tab"], "selected", [])) ? ([0 => "sel"]) : ([])), craft\helpers\Template::attribute($this->env, $this->source, $context["tab"], "class", [])), "tabindex" => ((craft\helpers\Template::attribute($this->env, $this->source,             // line 24
$context["tab"], "selected", [])) ? ("0") : ("-1")), "href" => craft\helpers\Template::attribute($this->env, $this->source,             // line 25
$context["tab"], "url", []), "role" => "tab", "data" => ["id" =>             // line 28
$context["containerId"]], "aria" => ["controls" =>             // line 31
$context["containerId"], "selected" => ((craft\helpers\Template::attribute($this->env, $this->source,             // line 32
$context["tab"], "selected", [])) ? ("true") : ("false"))]]);
            // line 53
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['containerId'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    ";
        echo craft\helpers\Html::tag("div", ob_get_clean(), ["class" => "scrollable", "role" => "tablist", "aria" => ["label" =>         // line 17
(isset($context["tablistLabel"]) || array_key_exists("tablistLabel", $context) ? $context["tablistLabel"] : (function () { throw new RuntimeError('Variable "tablistLabel" does not exist.', 17, $this->source); })())]]);
        // line 55
        echo "    ";
        echo $this->extensions['craft\web\twig\Extension']->tagFunction("button", ["type" => "button", "class" => "btn menubtn hidden", "title" => $this->extensions['craft\web\twig\Extension']->translateFilter("List all tabs", "app"), "aria" => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("List all tabs", "app")]]);
        // line 62
        echo "
    <div class=\"menu\">
        <ul class=\"padded\" role=\"listbox\">
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["containerId"] => $context["tab"]) {
            // line 66
            echo "                <li>
                    ";
            // line 67
            ob_start();
            // line 74
            echo "                        ";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["tab"], "label", []), "html", null, true);
            echo "
                        ";
            // line 75
            if (twig_in_filter("error", craft\helpers\Template::attribute($this->env, $this->source, $context["tab"], "class", []))) {
                // line 76
                echo "                            ";
                ob_start();
                // line 81
                echo "                                ";
                echo $this->extensions['craft\web\twig\Extension']->tagFunction("span", ["text" => $this->extensions['craft\web\twig\Extension']->translateFilter("This tab contains errors", "app"), "class" => "visually-hidden"]);
                // line 84
                echo "
                            ";
                echo craft\helpers\Html::tag("span", ob_get_clean(), ["data" => ["icon" => "alert"]]);
                // line 86
                echo "                        ";
            }
            // line 87
            echo "                    ";
            echo craft\helpers\Html::tag("a", ob_get_clean(), ["class" => ((craft\helpers\Template::attribute($this->env, $this->source,             // line 68
$context["tab"], "selected", [])) ? ("sel") : (null)), "href" => craft\helpers\Template::attribute($this->env, $this->source,             // line 69
$context["tab"], "url", []), "data" => ["id" =>             // line 71
$context["containerId"]]]);
            // line 88
            echo "                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['containerId'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        </ul>
    </div>
";
        echo craft\helpers\Html::tag("div", ob_get_clean(),         // line 12
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 12, $this->source); })()));
        craft\helpers\Template::endProfile("template", "_includes/tabs");
    }

    public function getTemplateName()
    {
        return "_includes/tabs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 12,  165 => 90,  158 => 88,  156 => 71,  155 => 69,  154 => 68,  152 => 87,  149 => 86,  145 => 84,  142 => 81,  139 => 76,  137 => 75,  132 => 74,  130 => 67,  127 => 66,  123 => 65,  118 => 62,  115 => 55,  113 => 17,  111 => 54,  105 => 53,  103 => 32,  102 => 31,  101 => 28,  100 => 25,  99 => 24,  98 => 23,  97 => 22,  95 => 52,  92 => 51,  89 => 50,  85 => 48,  82 => 45,  79 => 40,  77 => 39,  72 => 38,  69 => 35,  66 => 21,  61 => 20,  58 => 13,  56 => 12,  53 => 11,  51 => 9,  50 => 8,  49 => 7,  47 => 6,  45 => 5,  42 => 4,  40 => 3,  39 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set containerAttributes = {
    class: ['pane-tabs']|merge((class ?? [])|explodeClass),
}|merge(containerAttributes ?? [], recursive=true) %}

{% set selectedTab = selectedTab ?? tabs|keys|first %}
{% set tablistLabel = tablistLabel ?? 'Primary fields'|t('app') %}
{% set tabs = tabs|map((tab, tabId) => tab|merge({
    selected: tabId == selectedTab,
        class: (tab.class ?? [])|explodeClass,
})) %}

{% tag 'div' with containerAttributes %}
    {% tag 'div'  with {
        class: 'scrollable',
        role: 'tablist',
        aria: {
            label: tablistLabel,
        },
    } %}
        {% for containerId, tab in tabs %}
            {% tag 'a' with {
                id: tab.tabId ?? \"tab-#{containerId}\",
                class: (tab.selected ? ['sel'] : [])|merge(tab.class),
                tabindex: tab.selected ? '0' : '-1',
                href: tab.url,
                role: 'tab',
                data: {
                    id: containerId,
                },
                aria: {
                    controls: containerId,
                    selected: tab.selected ? 'true' : 'false',
                },
            } %}
                {% tag 'span' with {
                    class: 'tab-label',
                } %}
                    {{ tab.label }}
                    {% if 'error' in tab.class %}
                        {% tag 'span' with {
                            data: {
                                icon: 'alert',
                            },
                        } %}
                            {{ tag('span', {
                                text: 'This tab contains errors'|t('app'),
                                class: 'visually-hidden',
                            }) }}
                        {% endtag %}
                    {% endif %}
                {% endtag %}
            {% endtag %}
        {% endfor %}
    {%  endtag %}
    {{ tag('button', {
        type: 'button',
        class: 'btn menubtn hidden',
        title: 'List all tabs'|t('app'),
        aria: {
            label: 'List all tabs'|t('app'),
        },
    }) }}
    <div class=\"menu\">
        <ul class=\"padded\" role=\"listbox\">
            {% for containerId, tab in tabs %}
                <li>
                    {% tag 'a' with {
                        class: tab.selected ? 'sel' : null,
                        href: tab.url,
                        data: {
                            id: containerId,
                        },
                    } %}
                        {{ tab.label }}
                        {% if 'error' in tab.class %}
                            {% tag 'span' with {
                                data: {
                                    icon: 'alert',
                                },
                            } %}
                                {{ tag('span', {
                                    text: 'This tab contains errors'|t('app'),
                                    class: 'visually-hidden',
                                }) }}
                            {% endtag %}
                        {% endif %}
                    {% endtag %}
                </li>
            {% endfor %}
        </ul>
    </div>
{% endtag %}
", "_includes/tabs", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/tabs.twig");
    }
}
