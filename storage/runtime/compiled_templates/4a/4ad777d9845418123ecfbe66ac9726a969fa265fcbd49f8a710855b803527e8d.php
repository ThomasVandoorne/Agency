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

/* _components/widgets/QuickPost/settings.twig */
class __TwigTemplate_483f02d847460ea93347e684be94dd645544190d65ca0f87f80534c9a15cf5aa extends Template
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
        craft\helpers\Template::beginProfile("template", "_components/widgets/QuickPost/settings.twig");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/QuickPost/settings.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "
    ";
            // line 5
            if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 5, $this->source); })()), "app", []), "getIsMultiSite", [], "method")) {
                // line 6
                echo "        ";
                $context["editableSites"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 6, $this->source); })()), "app", []), "sites", []), "getEditableSites", [], "method");
                // line 7
                echo "
        ";
                // line 8
                if (($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["editableSites"]) || array_key_exists("editableSites", $context) ? $context["editableSites"] : (function () { throw new RuntimeError('Variable "editableSites" does not exist.', 8, $this->source); })())) > 1)) {
                    // line 9
                    echo "            ";
                    ob_start();
                    // line 10
                    echo "                <div class=\"select\">
                    <select id=\"site-id\" name=\"siteId\">
                        ";
                    // line 12
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["editableSites"]) || array_key_exists("editableSites", $context) ? $context["editableSites"] : (function () { throw new RuntimeError('Variable "editableSites" does not exist.', 12, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                        // line 13
                        echo "                            <option value=\"";
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "id", []), "html", null, true);
                        echo "\"";
                        if ((craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "id", []) == craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 13, $this->source); })()), "siteId", []))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "name", []), "site"), "html", null, true);
                        echo "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "                    </select>
                </div>
            ";
                    $context["siteInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 18
                    echo "
            ";
                    // line 19
                    echo twig_call_macro($macros["forms"], "macro_field", [["id" => "site-id", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Site", "app")],                     // line 22
(isset($context["siteInput"]) || array_key_exists("siteInput", $context) ? $context["siteInput"] : (function () { throw new RuntimeError('Variable "siteInput" does not exist.', 22, $this->source); })())], 19, $context, $this->getSourceContext());
                    echo "
        ";
                }
                // line 24
                echo "    ";
            }
            // line 25
            echo "
    ";
            // line 26
            $context["sectionOptions"] = [];
            // line 27
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 28
                echo "        ";
                $context["sectionOptions"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["sectionOptions"]) || array_key_exists("sectionOptions", $context) ? $context["sectionOptions"] : (function () { throw new RuntimeError('Variable "sectionOptions" does not exist.', 28, $this->source); })()), [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "name", []), "site"), "value" => craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "id", [])]]);
                // line 29
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Section", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which section do you want to save entries to?", "app"), "id" => "section", "name" => "section", "options" =>             // line 35
(isset($context["sectionOptions"]) || array_key_exists("sectionOptions", $context) ? $context["sectionOptions"] : (function () { throw new RuntimeError('Variable "sectionOptions" does not exist.', 35, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 36
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 36, $this->source); })()), "section", []), "toggle" => true, "targetPrefix" => "section"]], 30, $context, $this->getSourceContext());
            // line 39
            echo "

    ";
            // line 41
            $context["selectedSectionId"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 41, $this->source); })()), "section", []);
            // line 42
            echo "
    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 43, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 44
                echo "        ";
                $context["showSection"] = (( !(isset($context["selectedSectionId"]) || array_key_exists("selectedSectionId", $context) ? $context["selectedSectionId"] : (function () { throw new RuntimeError('Variable "selectedSectionId" does not exist.', 44, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "first", [])) || ((isset($context["selectedSectionId"]) || array_key_exists("selectedSectionId", $context) ? $context["selectedSectionId"] : (function () { throw new RuntimeError('Variable "selectedSectionId" does not exist.', 44, $this->source); })()) == craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "id", [])));
                // line 45
                echo "        <div id=\"section";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "id", []), "html", null, true);
                echo "\"";
                if ( !(isset($context["showSection"]) || array_key_exists("showSection", $context) ? $context["showSection"] : (function () { throw new RuntimeError('Variable "showSection" does not exist.', 45, $this->source); })())) {
                    echo " class=\"hidden\"";
                }
                echo ">

            ";
                // line 47
                $context["entryTypeOptions"] = [];
                // line 48
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "getEntryTypes", [], "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
                    // line 49
                    echo "                ";
                    $context["entryTypeOptions"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["entryTypeOptions"]) || array_key_exists("entryTypeOptions", $context) ? $context["entryTypeOptions"] : (function () { throw new RuntimeError('Variable "entryTypeOptions" does not exist.', 49, $this->source); })()), [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["entryType"], "name", []), "site"), "value" => craft\helpers\Template::attribute($this->env, $this->source, $context["entryType"], "id", [])]]);
                    // line 50
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "
            ";
                // line 52
                if (($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["entryTypeOptions"]) || array_key_exists("entryTypeOptions", $context) ? $context["entryTypeOptions"] : (function () { throw new RuntimeError('Variable "entryTypeOptions" does not exist.', 52, $this->source); })())) == 1)) {
                    // line 53
                    echo "                ";
                    echo craft\helpers\Html::hiddenInput((("sections[" . craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "id", [])) . "][entryType]"), craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 53, $this->source); })()), "entryType", []));
                    echo "
            ";
                } else {
                    // line 55
                    echo "                ";
                    echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Entry Type", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which type of entries do you want to create?", "app"), "id" => "entryType", "name" => (("sections[" . craft\helpers\Template::attribute($this->env, $this->source,                     // line 59
$context["section"], "id", [])) . "][entryType]"), "options" =>                     // line 60
(isset($context["entryTypeOptions"]) || array_key_exists("entryTypeOptions", $context) ? $context["entryTypeOptions"] : (function () { throw new RuntimeError('Variable "entryTypeOptions" does not exist.', 60, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->source,                     // line 61
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 61, $this->source); })()), "entryType", []), "toggle" => true, "targetPrefix" => (("section" . craft\helpers\Template::attribute($this->env, $this->source,                     // line 63
$context["section"], "id", [])) . "-type")]], 55, $context, $this->getSourceContext());
                    // line 64
                    echo "
            ";
                }
                // line 66
                echo "
            ";
                // line 67
                ob_start();
                // line 68
                echo "                ";
                $context["entryTypes"] = craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "getEntryTypes", [], "method");
                // line 69
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["entryTypes"]) || array_key_exists("entryTypes", $context) ? $context["entryTypes"] : (function () { throw new RuntimeError('Variable "entryTypes" does not exist.', 69, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
                    // line 70
                    echo "                    ";
                    $context["showEntryType"] = (((( !(isset($context["showSection"]) || array_key_exists("showSection", $context) ? $context["showSection"] : (function () { throw new RuntimeError('Variable "showSection" does not exist.', 70, $this->source); })()) ||  !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 70, $this->source); })()), "entryType", [])) && craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "first", [])) || (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 70, $this->source); })()), "entryType", []) == craft\helpers\Template::attribute($this->env, $this->source, $context["entryType"], "id", []))) || ($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["entryTypes"]) || array_key_exists("entryTypes", $context) ? $context["entryTypes"] : (function () { throw new RuntimeError('Variable "entryTypes" does not exist.', 70, $this->source); })())) == 1));
                    // line 71
                    echo "                    <div id=\"section";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "id", []), "html", null, true);
                    echo "-type";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["entryType"], "id", []), "html", null, true);
                    echo "\"";
                    if ( !(isset($context["showEntryType"]) || array_key_exists("showEntryType", $context) ? $context["showEntryType"] : (function () { throw new RuntimeError('Variable "showEntryType" does not exist.', 71, $this->source); })())) {
                        echo " class=\"hidden\"";
                    }
                    echo ">
                        ";
                    // line 72
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((((craft\helpers\Template::attribute($this->env, $this->source, ($context["fieldsByEntryTypeId"] ?? null), craft\helpers\Template::attribute($this->env, $this->source, $context["entryType"], "id", []), [], "array", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["fieldsByEntryTypeId"] ?? null), craft\helpers\Template::attribute($this->env, $this->source, $context["entryType"], "id", []), [], "array")))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["fieldsByEntryTypeId"] ?? null), craft\helpers\Template::attribute($this->env, $this->source, $context["entryType"], "id", []), [], "array")) : ([])));
                    foreach ($context['_seq'] as $context["_key"] => $context["layoutElement"]) {
                        // line 73
                        echo "                            ";
                        $context["field"] = craft\helpers\Template::attribute($this->env, $this->source, $context["layoutElement"], "getField", [], "method");
                        // line 74
                        echo "                            <div>
                                ";
                        // line 75
                        echo twig_call_macro($macros["forms"], "macro_checkbox", [["label" => craft\helpers\Template::raw((twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source,                         // line 76
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 76, $this->source); })()), "name", [])) . ((craft\helpers\Template::attribute($this->env, $this->source, $context["layoutElement"], "required", [])) ? ("<span class=\"required\"></span>") : ("")))), "name" => (("sections[" . craft\helpers\Template::attribute($this->env, $this->source,                         // line 77
$context["section"], "id", [])) . "][fields][]"), "value" => craft\helpers\Template::attribute($this->env, $this->source,                         // line 78
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 78, $this->source); })()), "id", []), "checked" => (craft\helpers\Template::attribute($this->env, $this->source,                         // line 79
$context["layoutElement"], "required", []) || twig_in_filter(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 79, $this->source); })()), "id", []), craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 79, $this->source); })()), "fields", []))), "disabled" => craft\helpers\Template::attribute($this->env, $this->source,                         // line 80
$context["layoutElement"], "required", [])]], 75, $context, $this->getSourceContext());
                        // line 81
                        echo "
                            </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layoutElement'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 84
                    echo "                    </div>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "            ";
                $context["fieldsInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 87
                echo "
            ";
                // line 88
                echo twig_call_macro($macros["forms"], "macro_field", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Fields", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which fields should be visible in the widget?", "app")],                 // line 91
(isset($context["fieldsInput"]) || array_key_exists("fieldsInput", $context) ? $context["fieldsInput"] : (function () { throw new RuntimeError('Variable "fieldsInput" does not exist.', 91, $this->source); })())], 88, $context, $this->getSourceContext());
                echo "
        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "
";
        } else {
            // line 96
            echo "
    <p>";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No sections are available.", "app"), "html", null, true);
            echo "</p>

";
        }
        craft\helpers\Template::endProfile("template", "_components/widgets/QuickPost/settings.twig");
    }

    public function getTemplateName()
    {
        return "_components/widgets/QuickPost/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 97,  310 => 96,  306 => 94,  289 => 91,  288 => 88,  285 => 87,  282 => 86,  267 => 84,  259 => 81,  257 => 80,  256 => 79,  255 => 78,  254 => 77,  253 => 76,  252 => 75,  249 => 74,  246 => 73,  242 => 72,  231 => 71,  228 => 70,  210 => 69,  207 => 68,  205 => 67,  202 => 66,  198 => 64,  196 => 63,  195 => 61,  194 => 60,  193 => 59,  191 => 55,  185 => 53,  183 => 52,  180 => 51,  174 => 50,  171 => 49,  166 => 48,  164 => 47,  154 => 45,  151 => 44,  134 => 43,  131 => 42,  129 => 41,  125 => 39,  123 => 36,  122 => 35,  120 => 30,  114 => 29,  111 => 28,  106 => 27,  104 => 26,  101 => 25,  98 => 24,  93 => 22,  92 => 19,  89 => 18,  84 => 15,  69 => 13,  65 => 12,  61 => 10,  58 => 9,  56 => 8,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}

{% if sections %}

    {% if craft.app.getIsMultiSite() %}
        {% set editableSites = craft.app.sites.getEditableSites() %}

        {% if editableSites|length > 1 %}
            {% set siteInput %}
                <div class=\"select\">
                    <select id=\"site-id\" name=\"siteId\">
                        {% for site in editableSites %}
                            <option value=\"{{ site.id }}\"{% if site.id == widget.siteId %} selected{% endif %}>{{ site.name|t('site') }}</option>
                        {% endfor %}
                    </select>
                </div>
            {% endset %}

            {{ forms.field({
                id: 'site-id',
                label: \"Site\"|t('app'),
            }, siteInput) }}
        {% endif %}
    {% endif %}

    {% set sectionOptions = [] %}
    {% for section in sections %}
        {% set sectionOptions = sectionOptions|merge([{ label: section.name|t('site'), value: section.id }]) %}
    {% endfor %}
    {{ forms.selectField({
        label: \"Section\"|t('app'),
        instructions: 'Which section do you want to save entries to?'|t('app'),
        id: 'section',
        name: 'section',
        options: sectionOptions,
        value: widget.section,
        toggle: true,
        targetPrefix: 'section'
    }) }}

    {% set selectedSectionId = widget.section %}

    {% for section in sections %}
        {% set showSection = ((not selectedSectionId and loop.first) or selectedSectionId == section.id) %}
        <div id=\"section{{ section.id }}\"{% if not showSection %} class=\"hidden\"{% endif %}>

            {% set entryTypeOptions = [] %}
            {% for entryType in section.getEntryTypes() %}
                {% set entryTypeOptions = entryTypeOptions|merge([{ label: entryType.name|t('site'), value: entryType.id }]) %}
            {% endfor %}

            {% if entryTypeOptions|length == 1 %}
                {{ hiddenInput(\"sections[#{section.id}][entryType]\", widget.entryType) }}
            {% else %}
                {{ forms.selectField({
                    label: \"Entry Type\"|t('app'),
                    instructions: \"Which type of entries do you want to create?\"|t('app'),
                    id: 'entryType',
                    name: 'sections['~section.id~'][entryType]',
                    options: entryTypeOptions,
                    value: widget.entryType,
                    toggle: true,
                    targetPrefix: 'section'~section.id~'-type'
                }) }}
            {% endif %}

            {% set fieldsInput %}
                {% set entryTypes = section.getEntryTypes() %}
                {% for entryType in entryTypes %}
                    {% set showEntryType = (((not showSection or not widget.entryType) and loop.first) or widget.entryType == entryType.id or entryTypes|length == 1) %}
                    <div id=\"section{{ section.id }}-type{{ entryType.id }}\"{% if not showEntryType %} class=\"hidden\"{% endif %}>
                        {% for layoutElement in fieldsByEntryTypeId[entryType.id] ?? [] %}
                            {% set field = layoutElement.getField() %}
                            <div>
                                {{ forms.checkbox({
                                    label: raw(field.name|e ~ (layoutElement.required ? '<span class=\"required\"></span>')),
                                    name: 'sections['~section.id~'][fields][]',
                                    value: field.id,
                                    checked: (layoutElement.required or field.id in widget.fields),
                                    disabled: layoutElement.required
                                }) }}
                            </div>
                        {% endfor %}
                    </div>
                {% endfor %}
            {% endset %}

            {{ forms.field({
                label: \"Fields\"|t('app'),
                instructions: \"Which fields should be visible in the widget?\"|t('app')
            }, fieldsInput) }}
        </div>
    {% endfor %}

{% else %}

    <p>{{ \"No sections are available.\"|t('app') }}</p>

{% endif %}
", "_components/widgets/QuickPost/settings.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_components/widgets/QuickPost/settings.twig");
    }
}
