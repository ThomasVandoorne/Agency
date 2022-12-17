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

/* _layouts/components/global-sidebar */
class __TwigTemplate_3ca84c34e386255186f09001b2d6e39b70c8c29b0e2eea18e8e6c552889dcdf5 extends Template
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
        craft\helpers\Template::beginProfile("template", "_layouts/components/global-sidebar");
        // line 1
        echo "<header id=\"global-sidebar\" class=\"sidebar\">
    <a id=\"system-info\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) || array_key_exists("siteUrl", $context) ? $context["siteUrl"] : (function () { throw new RuntimeError('Variable "siteUrl" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" rel=\"noopener\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("View site", "app"), "html", null, true);
        echo "\">
        <div id=\"site-icon\">
            ";
        // line 4
        if ((isset($context["hasSystemIcon"]) || array_key_exists("hasSystemIcon", $context) ? $context["hasSystemIcon"] : (function () { throw new RuntimeError('Variable "hasSystemIcon" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 5, $this->source); })()), "rebrand", []), "icon", []), "url", []), "html", null, true);
            echo "\" alt=\"\">
            ";
        } else {
            // line 7
            echo "                ";
            echo $this->extensions['craft\web\twig\Extension']->attrFilter($this->extensions['craft\web\twig\Extension']->svgFunction("@appicons/c-outline.svg", null, true), ["aria" => ["hidden" => "true"]]);
            // line 9
            echo "
            ";
        }
        // line 11
        echo "        </div>
        <div id=\"system-name\">
            <span class=\"h2\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["systemName"]) || array_key_exists("systemName", $context) ? $context["systemName"] : (function () { throw new RuntimeError('Variable "systemName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</span>
        </div>
    </a>

    <nav id=\"nav\" aria-label=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Primary", "app"), "html", null, true);
        echo "\">
        <ul>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 19, $this->source); })()), "cp", []), "nav", [], "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "                ";
            $context["itemAttributes"] = ["id" => craft\helpers\Template::attribute($this->env, $this->source,             // line 21
$context["item"], "id", []), "class" => ((craft\helpers\Template::attribute($this->env, $this->source,             // line 22
$context["item"], "subnav", [])) ? ("has-subnav") : (""))];
            // line 24
            echo "                ";
            $context["linkAttributes"] = ["href" => craft\helpers\UrlHelper::url(craft\helpers\Template::attribute($this->env, $this->source,             // line 25
$context["item"], "url", [])), "class" => ((craft\helpers\Template::attribute($this->env, $this->source,             // line 26
$context["item"], "sel", [])) ? ("sel") : ("")), "aria" => ["current" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 28
$context["item"], "sel", []) &&  !craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "subnav", []))) ? ("page") : (false))]];
            // line 31
            echo "                <li ";
            echo craft\helpers\Html::renderTagAttributes((isset($context["itemAttributes"]) || array_key_exists("itemAttributes", $context) ? $context["itemAttributes"] : (function () { throw new RuntimeError('Variable "itemAttributes" does not exist.', 31, $this->source); })()));
            echo ">
                    <a ";
            // line 32
            echo craft\helpers\Html::renderTagAttributes((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 32, $this->source); })()));
            echo ">
                        <span class=\"icon icon-mask\" aria-hidden=\"true\">";
            // line 34
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "icon", [], "any", true, true)) {
                // line 35
                echo $this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "icon", []), true, true);
            } elseif (craft\helpers\Template::attribute($this->env, $this->source,             // line 36
$context["item"], "fontIcon", [], "any", true, true)) {
                // line 37
                echo "<span data-icon=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "fontIcon", []), "html", null, true);
                echo "\"></span>";
            } else {
                // line 39
                $this->loadTemplate("_includes/defaulticon.svg.twig", "_layouts/components/global-sidebar", 39)->display(twig_array_merge($context, ["label" => craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "label", [])]));
            }
            // line 41
            echo "</span>

                        <span class=\"label\">";
            // line 43
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "label", []), "html", null, true);
            echo "</span>";
            // line 45
            if (( !craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "sel", []) && craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "badgeCount", []))) {
                // line 46
                echo "<span class=\"badge\" aria-hidden=\"true\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->numberFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "badgeCount", []), 0), "html", null, true);
                echo "</span>
                            ";
                // line 47
                echo $this->extensions['craft\web\twig\Extension']->tagFunction("span", ["class" => "visually-hidden", "data" => ["notification" => true], "text" => $this->extensions['craft\web\twig\Extension']->translateFilter("{num, number} {num, plural, =1{notification} other{notifications}}", "app", ["num" => craft\helpers\Template::attribute($this->env, $this->source,                 // line 53
$context["item"], "badgeCount", [])])]);
            }
            // line 57
            echo "</a>
                    ";
            // line 58
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "subnav", [])) {
                // line 59
                echo "                        <ul class=\"subnav\">
                            ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "subnav", []));
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
                foreach ($context['_seq'] as $context["itemId"] => $context["item"]) {
                    // line 61
                    echo "                                ";
                    $context["itemIsSelected"] = ((                    // line 62
array_key_exists("selectedSubnavItem", $context) && ((isset($context["selectedSubnavItem"]) || array_key_exists("selectedSubnavItem", $context) ? $context["selectedSubnavItem"] : (function () { throw new RuntimeError('Variable "selectedSubnavItem" does not exist.', 62, $this->source); })()) == $context["itemId"])) || ( !                    // line 63
array_key_exists("selectedSubnavItem", $context) && craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "first", [])));
                    // line 65
                    $context["linkAttributes"] = ["href" => craft\helpers\UrlHelper::url(craft\helpers\Template::attribute($this->env, $this->source,                     // line 66
$context["item"], "url", [])), "class" => [0 => ((                    // line 68
(isset($context["itemIsSelected"]) || array_key_exists("itemIsSelected", $context) ? $context["itemIsSelected"] : (function () { throw new RuntimeError('Variable "itemIsSelected" does not exist.', 68, $this->source); })())) ? ("sel") : ("")), 1 => (((((craft\helpers\Template::attribute($this->env, $this->source,                     // line 69
$context["item"], "external", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "external", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "external", [])) : (false))) ? ("external") : (""))], "target" => (((((craft\helpers\Template::attribute($this->env, $this->source,                     // line 71
$context["item"], "external", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "external", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "external", [])) : (false))) ? ("_blank") : ("")), "aria" => ["current" => ((                    // line 73
(isset($context["itemIsSelected"]) || array_key_exists("itemIsSelected", $context) ? $context["itemIsSelected"] : (function () { throw new RuntimeError('Variable "itemIsSelected" does not exist.', 73, $this->source); })())) ? ("page") : (false))]];
                    // line 76
                    echo "
                                <li>
                                    <a ";
                    // line 78
                    echo craft\helpers\Html::renderTagAttributes((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 78, $this->source); })()));
                    echo ">
                                        ";
                    // line 79
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "label", []), "html", null, true);
                    // line 81
                    if (( !(isset($context["itemIsSelected"]) || array_key_exists("itemIsSelected", $context) ? $context["itemIsSelected"] : (function () { throw new RuntimeError('Variable "itemIsSelected" does not exist.', 81, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "badgeCount", [], "any", true, true))) {
                        // line 82
                        echo "<span class=\"badge\" aria-hidden=\"true\">";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->numberFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "badgeCount", []), 0), "html", null, true);
                        echo "</span>
                                            ";
                        // line 83
                        echo $this->extensions['craft\web\twig\Extension']->tagFunction("span", ["class" => "visually-hidden", "data" => ["notification" => true], "text" => $this->extensions['craft\web\twig\Extension']->translateFilter("{num, number} {num, plural, =1{notification} other{notifications}}", "app", ["num" => craft\helpers\Template::attribute($this->env, $this->source,                         // line 89
$context["item"], "badgeCount", [])])]);
                    }
                    // line 93
                    echo "</a>
                                </li>
                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['itemId'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "                        </ul>
                    ";
            }
            // line 98
            echo "                </li>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        </ul>
    </nav>

    ";
        // line 103
        if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 103, $this->source); })()), "admin", []) && (isset($context["devMode"]) || array_key_exists("devMode", $context) ? $context["devMode"] : (function () { throw new RuntimeError('Variable "devMode" does not exist.', 103, $this->source); })()))) {
            // line 104
            echo "        ";
            $context["devModeText"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Craft CMS is running in Dev Mode.", "app");
            // line 105
            echo "        <div id=\"devmode\">
            ";
            // line 106
            echo $this->extensions['craft\web\twig\Extension']->tagFunction("span", ["class" => "visually-hidden", "text" =>             // line 108
(isset($context["devModeText"]) || array_key_exists("devModeText", $context) ? $context["devModeText"] : (function () { throw new RuntimeError('Variable "devModeText" does not exist.', 108, $this->source); })())]);
            // line 109
            echo "
        </div>
    ";
        }
        // line 112
        echo "</header>
";
        craft\helpers\Template::endProfile("template", "_layouts/components/global-sidebar");
    }

    public function getTemplateName()
    {
        return "_layouts/components/global-sidebar";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 112,  257 => 109,  255 => 108,  254 => 106,  251 => 105,  248 => 104,  246 => 103,  241 => 100,  226 => 98,  222 => 96,  206 => 93,  203 => 89,  202 => 83,  197 => 82,  195 => 81,  193 => 79,  189 => 78,  185 => 76,  183 => 73,  182 => 71,  181 => 69,  180 => 68,  179 => 66,  178 => 65,  176 => 63,  175 => 62,  173 => 61,  156 => 60,  153 => 59,  151 => 58,  148 => 57,  145 => 53,  144 => 47,  139 => 46,  137 => 45,  134 => 43,  130 => 41,  127 => 39,  122 => 37,  120 => 36,  118 => 35,  116 => 34,  112 => 32,  107 => 31,  105 => 28,  104 => 26,  103 => 25,  101 => 24,  99 => 22,  98 => 21,  96 => 20,  79 => 19,  74 => 17,  67 => 13,  63 => 11,  59 => 9,  56 => 7,  50 => 5,  48 => 4,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"global-sidebar\" class=\"sidebar\">
    <a id=\"system-info\" href=\"{{ siteUrl }}\" rel=\"noopener\" target=\"_blank\" title=\"{{ 'View site'|t('app') }}\">
        <div id=\"site-icon\">
            {% if hasSystemIcon %}
                <img src=\"{{ craft.rebrand.icon.url }}\" alt=\"\">
            {% else %}
                {{ svg('@appicons/c-outline.svg', namespace=true)|attr({
                    aria: {hidden: 'true'},
                }) }}
            {% endif %}
        </div>
        <div id=\"system-name\">
            <span class=\"h2\">{{ systemName }}</span>
        </div>
    </a>

    <nav id=\"nav\" aria-label=\"{{ 'Primary'|t('app') }}\">
        <ul>
            {% for item in craft.cp.nav() %}
                {% set itemAttributes = {
                    id: item.id,
                    class: item.subnav ? 'has-subnav',
                } %}
                {% set linkAttributes = {
                    href: url(item.url),
                    class: item.sel ? 'sel',
                    aria: {
                        current: item.sel and not item.subnav ? 'page' : false,
                    },
                } %}
                <li {{ attr(itemAttributes) }}>
                    <a {{ attr(linkAttributes) }}>
                        <span class=\"icon icon-mask\" aria-hidden=\"true\">
                            {%- if item.icon is defined -%}
                                {{ svg(item.icon, sanitize=true, namespace=true) }}
                            {%- elseif item.fontIcon is defined -%}
                                <span data-icon=\"{{ item.fontIcon }}\"></span>
                            {%- else -%}
                                {% include \"_includes/defaulticon.svg.twig\" with { label: item.label } %}
                            {%- endif -%}
                        </span>

                        <span class=\"label\">{{ item.label }}</span>

                        {%- if not item.sel and item.badgeCount -%}
                            <span class=\"badge\" aria-hidden=\"true\">{{ item.badgeCount|number(decimals=0) }}</span>
                            {{ tag('span', {
                                class: 'visually-hidden',
                                data: {
                                    notification: true,
                                },
                                text: '{num, number} {num, plural, =1{notification} other{notifications}}'|t('app', {
                                    num: item.badgeCount,
                                }),
                            }) }}
                        {%- endif -%}
                    </a>
                    {% if item.subnav %}
                        <ul class=\"subnav\">
                            {% for itemId, item in item.subnav %}
                                {% set itemIsSelected = (
                                    (selectedSubnavItem is defined and selectedSubnavItem == itemId) or
                                    (selectedSubnavItem is not defined and loop.first)
                                ) -%}
                                {% set linkAttributes = {
                                    href: url(item.url),
                                    class: [
                                        itemIsSelected ? 'sel',
                                        (item.external ?? false) ? 'external',
                                    ],
                                    target: (item.external ?? false) ? '_blank',
                                    aria: {
                                        current: itemIsSelected ? 'page' : false,
                                    },
                                } %}

                                <li>
                                    <a {{ attr(linkAttributes) }}>
                                        {{ item.label }}

                                        {%- if not itemIsSelected and item.badgeCount is defined -%}
                                            <span class=\"badge\" aria-hidden=\"true\">{{ item.badgeCount|number(decimals=0) }}</span>
                                            {{ tag('span', {
                                                class: 'visually-hidden',
                                                data: {
                                                    notification: true,
                                                },
                                                text: '{num, number} {num, plural, =1{notification} other{notifications}}'|t('app', {
                                                    num: item.badgeCount,
                                                }),
                                            }) }}
                                        {%- endif -%}
                                    </a>
                                </li>
                            {% endfor %}
                        </ul>
                    {% endif %}
                </li>
            {% endfor %}
        </ul>
    </nav>

    {% if currentUser.admin and devMode %}
        {% set devModeText = 'Craft CMS is running in Dev Mode.'|t('app') %}
        <div id=\"devmode\">
            {{ tag('span', {
                class: 'visually-hidden',
                text: devModeText
            }) }}
        </div>
    {% endif %}
</header>
", "_layouts/components/global-sidebar", "/var/www/html/vendor/craftcms/cms/src/templates/_layouts/components/global-sidebar.twig");
    }
}
