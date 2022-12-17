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

/* _elements/tableview/container */
class __TwigTemplate_52cb0b331521e9c9d57d2f25b1653e5a488245d20b64411fd21883c81e3bb4d6 extends Template
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
        craft\helpers\Template::beginProfile("template", "_elements/tableview/container");
        // line 1
        $context["tableName"] = (($context["tableName"]) ?? (""));
        // line 2
        $context["instructionId"] = (($context["instructionId"]) ?? (("sort-instructions-" . twig_random($this->env))));
        // line 3
        echo "
<div class=\"tableview";
        // line 4
        if (((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 4, $this->source); })()) == "index")) {
            echo " tablepane";
        }
        echo "\">
    <span class=\"visually-hidden\" data-status-message aria-live=\"assertive\"></span>
    <table class=\"data fullwidth\"";
        // line 6
        if ((array_key_exists("structureEditable", $context) && (isset($context["structureEditable"]) || array_key_exists("structureEditable", $context) ? $context["structureEditable"] : (function () { throw new RuntimeError('Variable "structureEditable" does not exist.', 6, $this->source); })()))) {
            echo " data-structure-id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 6, $this->source); })()), "id", []), "html", null, true);
            echo "\" data-max-levels=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 6, $this->source); })()), "maxLevels", []), "html", null, true);
            echo "\"";
        }
        echo " data-name=\"";
        echo twig_escape_filter($this->env, (isset($context["tableName"]) || array_key_exists("tableName", $context) ? $context["tableName"] : (function () { throw new RuntimeError('Variable "tableName" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\">
        <caption class=\"visually-hidden\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["tableName"]) || array_key_exists("tableName", $context) ? $context["tableName"] : (function () { throw new RuntimeError('Variable "tableName" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "<span id=\"";
        echo twig_escape_filter($this->env, (isset($context["instructionId"]) || array_key_exists("instructionId", $context) ? $context["instructionId"] : (function () { throw new RuntimeError('Variable "instructionId" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\" data-sort-instructions>, ";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Column headers with buttons are sortable", "app"), "html", null, true);
        echo "</span></caption>
        <thead>
        <tr>
            ";
        // line 10
        if ((isset($context["showCheckboxes"]) || array_key_exists("showCheckboxes", $context) ? $context["showCheckboxes"] : (function () { throw new RuntimeError('Variable "showCheckboxes" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "                <th class=\"checkbox-cell selectallcontainer\"></th>
            ";
        }
        // line 13
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 14
            echo "                ";
            $context["icon"] = (((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["attribute"], 1, [], "array", false, true), "icon", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["attribute"], 1, [], "array", false, true), "icon", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["attribute"], 1, [], "array", false, true), "icon", [])) : (false));
            // line 15
            echo "                ";
            ob_start();
            // line 22
            echo "                    ";
            if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 22, $this->source); })())) {
                // line 23
                echo "                        <span data-icon=\"";
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 23, $this->source); })()), "html", null, true);
                echo "\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">";
                // line 24
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["attribute"], 1, [], "array"), "label", []), "html", null, true);
                echo "</span>
                    ";
            } else {
                // line 26
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["attribute"], 1, [], "array"), "label", []), "site"), "html", null, true);
                echo "
                    ";
            }
            // line 28
            echo "                    <div class=\"spinner\"></div>
                ";
            echo craft\helpers\Html::tag("th", ob_get_clean(), ["scope" => "col", "title" => ((            // line 17
(isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 17, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["attribute"], 1, [], "array"), "label", [])) : (false)), "data" => ["attribute" => craft\helpers\Template::attribute($this->env, $this->source,             // line 19
$context["attribute"], 0, [], "array")]]);
            // line 30
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tr>
        </thead>
        <tbody>
            ";
        // line 34
        $this->loadTemplate("_elements/tableview/elements", "_elements/tableview/container", 34)->display($context);
        // line 35
        echo "        </tbody>
    </table>
</div>
";
        craft\helpers\Template::endProfile("template", "_elements/tableview/container");
    }

    public function getTemplateName()
    {
        return "_elements/tableview/container";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 35,  127 => 34,  122 => 31,  116 => 30,  114 => 19,  113 => 17,  110 => 28,  104 => 26,  99 => 24,  94 => 23,  91 => 22,  88 => 15,  85 => 14,  80 => 13,  76 => 11,  74 => 10,  64 => 7,  52 => 6,  45 => 4,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set tableName = tableName ?? '' %}
{% set instructionId = instructionId ?? \"sort-instructions-#{random()}\" %}

<div class=\"tableview{% if context == 'index' %} tablepane{% endif %}\">
    <span class=\"visually-hidden\" data-status-message aria-live=\"assertive\"></span>
    <table class=\"data fullwidth\"{% if structureEditable is defined and structureEditable %} data-structure-id=\"{{ structure.id }}\" data-max-levels=\"{{ structure.maxLevels }}\"{% endif %} data-name=\"{{ tableName }}\">
        <caption class=\"visually-hidden\">{{ tableName }}<span id=\"{{ instructionId }}\" data-sort-instructions>, {{ 'Column headers with buttons are sortable'|t('app') }}</span></caption>
        <thead>
        <tr>
            {% if showCheckboxes %}
                <th class=\"checkbox-cell selectallcontainer\"></th>
            {% endif %}
            {% for attribute in attributes %}
                {% set icon = attribute[1].icon ?? false %}
                {% tag 'th' with {
                    scope: 'col',
                    title: icon ? attribute[1].label : false,
                    data: {
                        attribute: attribute[0],
                    },
                } %}
                    {% if icon %}
                        <span data-icon=\"{{ icon }}\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">{{ attribute[1].label }}</span>
                    {% else %}
                        {{ attribute[1].label|t('site') }}
                    {% endif %}
                    <div class=\"spinner\"></div>
                {% endtag %}
            {% endfor %}
        </tr>
        </thead>
        <tbody>
            {% include \"_elements/tableview/elements\" %}
        </tbody>
    </table>
</div>
", "_elements/tableview/container", "/var/www/html/vendor/craftcms/cms/src/templates/_elements/tableview/container.twig");
    }
}
