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

/* _elements/tableview/elements */
class __TwigTemplate_4caa4cfa9ff53db56c6b48c7feb25f5f0e10ea5b2ebb8b7c53bb412c54928b7c extends Template
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
        craft\helpers\Template::beginProfile("template", "_elements/tableview/elements");
        // line 1
        ob_start();
        // line 2
        echo "
";
        // line 3
        $context["structure"] = ((array_key_exists("structure", $context)) ? ((isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 3, $this->source); })())) : (null));
        // line 4
        $context["structureEditable"] = ((array_key_exists("structureEditable", $context)) ? ((isset($context["structureEditable"]) || array_key_exists("structureEditable", $context) ? $context["structureEditable"] : (function () { throw new RuntimeError('Variable "structureEditable" does not exist.', 4, $this->source); })())) : (false));
        // line 6
        if ((isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 6, $this->source); })())) {
            // line 7
            $context["basePadding"] = ((((isset($context["showCheckboxes"]) || array_key_exists("showCheckboxes", $context) ? $context["showCheckboxes"] : (function () { throw new RuntimeError('Variable "showCheckboxes" does not exist.', 7, $this->source); })())) ? (14) : (24)) + (((isset($context["structureEditable"]) || array_key_exists("structureEditable", $context) ? $context["structureEditable"] : (function () { throw new RuntimeError('Variable "structureEditable" does not exist.', 7, $this->source); })())) ? (34) : (0)));
            // line 8
            echo "    ";
            $context["padding"] = (((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 8, $this->source); })()), "app", []), "locale", []), "getOrientation", [], "method") == "ltr")) ? ("left") : ("right"));
        }
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 10, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 11
            echo "    ";
            $context["totalDescendants"] = (((isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 11, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source,             // line 12
$context["element"], "getDescendants", [], "method"), "status", [0 => null], "method"), "drafts", [0 => null], "method"), "draftOf", [0 => false], "method"), "count", [], "method")) : (0));
            // line 18
            echo "    ";
            $context["elementTitle"] = ((craft\helpers\Template::attribute($this->env, $this->source, $context["element"], "title", [])) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["element"], "title", [])) : (craft\helpers\Template::attribute($this->env, $this->source, $context["element"], "id", [])));
            // line 19
            echo "    <tr data-id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["element"], "id", []), "html", null, true);
            echo "\"";
            if ((isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 19, $this->source); })())) {
                echo " data-title=\"";
                echo twig_escape_filter($this->env, (isset($context["elementTitle"]) || array_key_exists("elementTitle", $context) ? $context["elementTitle"] : (function () { throw new RuntimeError('Variable "elementTitle" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "\" data-level=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["element"], "level", []), "html", null, true);
                echo "\" data-descendants=\"";
                (((array_key_exists("totalDescendants", $context) &&  !(null === (isset($context["totalDescendants"]) || array_key_exists("totalDescendants", $context) ? $context["totalDescendants"] : (function () { throw new RuntimeError('Variable "totalDescendants" does not exist.', 19, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["totalDescendants"]) || array_key_exists("totalDescendants", $context) ? $context["totalDescendants"] : (function () { throw new RuntimeError('Variable "totalDescendants" does not exist.', 19, $this->source); })()), "html", null, true))) : (print (0)));
                echo "\"";
            }
            if (twig_in_filter(craft\helpers\Template::attribute($this->env, $this->source, $context["element"], "id", []), (isset($context["disabledElementIds"]) || array_key_exists("disabledElementIds", $context) ? $context["disabledElementIds"] : (function () { throw new RuntimeError('Variable "disabledElementIds" does not exist.', 19, $this->source); })()))) {
                echo " class=\"disabled\"";
            }
            echo ">
        ";
            // line 20
            if ((isset($context["showCheckboxes"]) || array_key_exists("showCheckboxes", $context) ? $context["showCheckboxes"] : (function () { throw new RuntimeError('Variable "showCheckboxes" does not exist.', 20, $this->source); })())) {
                // line 21
                echo "            <td class=\"checkbox-cell\">
                ";
                // line 22
                echo $this->extensions['craft\web\twig\Extension']->tagFunction("div", ["class" => "checkbox", "title" => $this->extensions['craft\web\twig\Extension']->translateFilter("Select", "app"), "role" => "checkbox", "aria" => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Select", "app")]]);
                // line 29
                echo "
            </td>
        ";
            }
            // line 32
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 32, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 33
                echo "            ";
                if (craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "first", [])) {
                    // line 34
                    echo "                <th data-title=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["attribute"], 1, [], "array"), "label", []), "html", null, true);
                    echo "\"";
                    if ((isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 34, $this->source); })())) {
                        echo " style=\"padding-";
                        echo twig_escape_filter($this->env, (isset($context["padding"]) || array_key_exists("padding", $context) ? $context["padding"] : (function () { throw new RuntimeError('Variable "padding" does not exist.', 34, $this->source); })()), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, ((isset($context["basePadding"]) || array_key_exists("basePadding", $context) ? $context["basePadding"] : (function () { throw new RuntimeError('Variable "basePadding" does not exist.', 34, $this->source); })()) * craft\helpers\Template::attribute($this->env, $this->source, $context["element"], "level", [])), "html", null, true);
                        echo "px;\"";
                    }
                    echo " data-titlecell=\"\" scope=\"row\">";
                    // line 35
                    if ((isset($context["structureEditable"]) || array_key_exists("structureEditable", $context) ? $context["structureEditable"] : (function () { throw new RuntimeError('Variable "structureEditable" does not exist.', 35, $this->source); })())) {
                        echo "<a class=\"move icon\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                        echo "\" aria-label=\"";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                        echo "\" role=\"button\">&nbsp;</a>";
                    }
                    // line 36
                    if (((isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 36, $this->source); })()) && (isset($context["totalDescendants"]) || array_key_exists("totalDescendants", $context) ? $context["totalDescendants"] : (function () { throw new RuntimeError('Variable "totalDescendants" does not exist.', 36, $this->source); })()))) {
                        // line 37
                        echo "                        ";
                        $context["toggleLabel"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Show {title} children", "app", ["title" => (isset($context["elementTitle"]) || array_key_exists("elementTitle", $context) ? $context["elementTitle"] : (function () { throw new RuntimeError('Variable "elementTitle" does not exist.', 37, $this->source); })())]);
                        // line 38
                        echo "                        <button type=\"button\" class=\"toggle";
                        if (!twig_in_filter(craft\helpers\Template::attribute($this->env, $this->source, $context["element"], "id", []), (isset($context["collapsedElementIds"]) || array_key_exists("collapsedElementIds", $context) ? $context["collapsedElementIds"] : (function () { throw new RuntimeError('Variable "collapsedElementIds" does not exist.', 38, $this->source); })()))) {
                            echo " expanded";
                        }
                        // line 39
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Show/hide children", "app"), "html", null, true);
                        echo "\" aria-label=\"";
                        echo twig_escape_filter($this->env, (isset($context["toggleLabel"]) || array_key_exists("toggleLabel", $context) ? $context["toggleLabel"] : (function () { throw new RuntimeError('Variable "toggleLabel" does not exist.', 39, $this->source); })()), "html", null, true);
                        echo "\"
                        aria-expanded=\"";
                        // line 40
                        echo ((!twig_in_filter(craft\helpers\Template::attribute($this->env, $this->source, $context["element"], "id", []), (isset($context["collapsedElementIds"]) || array_key_exists("collapsedElementIds", $context) ? $context["collapsedElementIds"] : (function () { throw new RuntimeError('Variable "collapsedElementIds" does not exist.', 40, $this->source); })()))) ? ("true") : ("false"));
                        echo "\"></button>
                    ";
                    }
                    // line 42
                    $this->loadTemplate("_elements/element", "_elements/tableview/elements", 42)->display(twig_array_merge($context, ["autoReload" => false]));
                    // line 45
                    echo "</th>
            ";
                } else {
                    // line 47
                    echo "                <td data-title=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["attribute"], 1, [], "array"), "label", []), "html", null, true);
                    echo "\" data-attr=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["attribute"], 0, [], "array"), "html", null, true);
                    echo "\">";
                    // line 48
                    echo craft\helpers\Template::attribute($this->env, $this->source, $context["element"], "getTableAttributeHtml", [0 => craft\helpers\Template::attribute($this->env, $this->source, $context["attribute"], 0, [], "array")], "method");
                    // line 49
                    echo "</td>
            ";
                }
                // line 51
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "    </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_0_);
        craft\helpers\Template::endProfile("template", "_elements/tableview/elements");
    }

    public function getTemplateName()
    {
        return "_elements/tableview/elements";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 1,  219 => 54,  204 => 52,  190 => 51,  186 => 49,  184 => 48,  178 => 47,  174 => 45,  172 => 42,  167 => 40,  160 => 39,  155 => 38,  152 => 37,  150 => 36,  142 => 35,  130 => 34,  127 => 33,  109 => 32,  104 => 29,  102 => 22,  99 => 21,  97 => 20,  79 => 19,  76 => 18,  74 => 12,  72 => 11,  55 => 10,  51 => 8,  49 => 7,  47 => 6,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}

{% set structure = structure is defined ? structure : null -%}
{% set structureEditable = structureEditable is defined ? structureEditable : false -%}

{% if structure -%}
    {% set basePadding = (showCheckboxes ? 14 : 24) + (structureEditable ? 34 : 0) %}
    {% set padding = craft.app.locale.getOrientation() == 'ltr' ? 'left' : 'right' -%}
{% endif -%}
{% for element in elements %}
    {% set totalDescendants = structure
        ? element.getDescendants()
            .status(null)
            .drafts(null)
            .draftOf(false)
            .count()
        : 0 %}
    {% set elementTitle = element.title ?: element.id %}
    <tr data-id=\"{{ element.id }}\"{% if structure %} data-title=\"{{ elementTitle }}\" data-level=\"{{ element.level }}\" data-descendants=\"{{ totalDescendants ?? 0 }}\"{% endif %}{% if element.id in disabledElementIds %} class=\"disabled\"{% endif %}>
        {% if showCheckboxes %}
            <td class=\"checkbox-cell\">
                {{ tag('div', {
                    class: 'checkbox',
                    title: 'Select'|t('app'),
                    role: 'checkbox',
                    aria: {
                        label: 'Select'|t('app'),
                    },
                }) }}
            </td>
        {% endif %}
        {% for attribute in attributes %}
            {% if loop.first %}
                <th data-title=\"{{ attribute[1].label }}\"{% if structure %} style=\"padding-{{ padding }}: {{ basePadding * element.level }}px;\"{% endif %} data-titlecell=\"\" scope=\"row\">
                    {%- if structureEditable %}<a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\" aria-label=\"{{ 'Reorder'|t('app') }}\" role=\"button\">&nbsp;</a>{% endif %}
                    {%- if structure and totalDescendants %}
                        {% set toggleLabel = 'Show {title} children'|t('app', {title: elementTitle}) %}
                        <button type=\"button\" class=\"toggle{% if element.id not in collapsedElementIds %} expanded{% endif
                        %}\" title=\"{{ 'Show/hide children'|t('app') }}\" aria-label=\"{{ toggleLabel }}\"
                        aria-expanded=\"{{  element.id not in collapsedElementIds ? 'true' : 'false' }}\"></button>
                    {% endif %}
                    {%- include '_elements/element' with {
                        autoReload: false,
                    } -%}
                </th>
            {% else %}
                <td data-title=\"{{ attribute[1].label }}\" data-attr=\"{{ attribute[0] }}\">
                    {{- element.getTableAttributeHtml(attribute[0])|raw -}}
                </td>
            {% endif %}
        {% endfor %}
    </tr>
{% endfor %}

{% endapply -%}
", "_elements/tableview/elements", "/var/www/html/vendor/craftcms/cms/src/templates/_elements/tableview/elements.twig");
    }
}
