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

/* settings/sections/_edit.twig */
class __TwigTemplate_620b84e820000ee5c543755d8febb761cc27741facd7874a138fc5f2b5b0e146 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'submitButton' => [$this, 'block_submitButton'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "settings/sections/_layout";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "settings/sections/_edit.twig");
        // line 2
        $context["selectedTab"] = "settings";
        // line 3
        $context["fullPageForm"] = true;
        // line 4
        $context["formActions"] = [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Save and continue editing", "app"), "redirect" => $this->env->getFilter('hash')->getCallable()("settings/sections/{id}"), "shortcut" => true, "retainScroll" => true]];
        // line 13
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "settings/sections/_edit.twig", 13)->unwrap();
        // line 15
        $context["headlessMode"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 15, $this->source); })()), "app", []), "config", []), "general", []), "headlessMode", []);
        // line 263
        if ((isset($context["brandNewSection"]) || array_key_exists("brandNewSection", $context) ? $context["brandNewSection"] : (function () { throw new RuntimeError('Variable "brandNewSection" does not exist.', 263, $this->source); })())) {
            // line 264
            ob_start();
            // line 265
            echo "        new Craft.HandleGenerator('#name', '#handle');

        ";
            // line 267
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 267, $this->source); })()), "app", []), "sites", []), "getAllSites", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 268
                echo "            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "handle", []), "html", null, true);
                echo "\"] textarea[name\$=\"[singleUri]\"]');
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"";
                // line 269
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "handle", []), "html", null, true);
                echo "\"] textarea[name\$=\"[uriFormat]\"]', { suffix: '/{slug}' });
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"";
                // line 270
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "handle", []), "html", null, true);
                echo "\"] input[name\$=\"[template]\"]', { suffix: '/_entry' });
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "    ";
            craft\helpers\Template::js(ob_get_clean(), ['position' => 4]);
        }
        // line 1
        $this->parent = $this->loadTemplate("settings/sections/_layout", "settings/sections/_edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "settings/sections/_edit.twig");
    }

    // line 18
    public function block_submitButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "submitButton");
        // line 19
        echo "    ";
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 19, $this->source); })()), "id", [])) {
            // line 20
            echo "        ";
            $this->displayParentBlock("submitButton", $context, $blocks);
            echo "
    ";
        } else {
            // line 22
            echo "        <button type=\"submit\" class=\"btn submit\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save and edit entry types", "app"), "html", null, true);
            echo "</button>
    ";
        }
        craft\helpers\Template::endProfile("block", "submitButton");
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 28
        echo "    ";
        echo craft\helpers\Html::actionInput("sections/save-section");
        echo "
    ";
        // line 29
        echo craft\helpers\Html::redirectInput(((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 29, $this->source); })()), "id", [])) ? ("settings/sections") : ("settings/sections/{id}/entrytypes")));
        echo "

    ";
        // line 31
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 31, $this->source); })()), "id", [])) {
            echo craft\helpers\Html::hiddenInput("sectionId", craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 31, $this->source); })()), "id", []));
        }
        // line 32
        echo "
    ";
        // line 33
        echo twig_call_macro($macros["forms"], "macro_textField", [["first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What this section will be called in the control panel.", "app"), "id" => "name", "name" => "name", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 39
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 39, $this->source); })()), "name", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 40
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 40, $this->source); })()), "getErrors", [0 => "name"], "method"), "autofocus" => true, "required" => true]], 33, $context, $this->getSourceContext());
        // line 43
        echo "

    ";
        // line 45
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("How you’ll refer to this section in the templates.", "app"), "id" => "handle", "name" => "handle", "class" => "code", "autocorrect" => false, "autocapitalize" => false, "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 53
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 53, $this->source); })()), "handle", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 54
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 54, $this->source); })()), "getErrors", [0 => "handle"], "method"), "required" => true]], 45, $context, $this->getSourceContext());
        // line 56
        echo "

    ";
        // line 58
        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Enable versioning for entries in this section", "app"), "id" => "enableVersioning", "name" => "enableVersioning", "checked" => craft\helpers\Template::attribute($this->env, $this->source,         // line 62
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 62, $this->source); })()), "enableVersioning", [])]], 58, $context, $this->getSourceContext());
        // line 63
        echo "

    ";
        // line 65
        echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Section Type", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What type of section is this?", "app"), "warning" => (((craft\helpers\Template::attribute($this->env, $this->source,         // line 68
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 68, $this->source); })()), "id", []) && (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 68, $this->source); })()), "type", []) != "single"))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "app")) : ("")), "id" => "type", "name" => "type", "options" =>         // line 71
(isset($context["typeOptions"]) || array_key_exists("typeOptions", $context) ? $context["typeOptions"] : (function () { throw new RuntimeError('Variable "typeOptions" does not exist.', 71, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 72
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 72, $this->source); })()), "type", []), "toggle" => true, "targetPrefix" => ".type-", "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 75
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 75, $this->source); })()), "getErrors", [0 => "type"], "method")]], 65, $context, $this->getSourceContext());
        // line 76
        echo "

    <hr>

    ";
        // line 80
        $context["siteRows"] = [];
        // line 81
        echo "    ";
        $context["siteErrors"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 81, $this->source); })()), "getErrors", [0 => "siteSettings"], "method");
        // line 82
        echo "
    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 83, $this->source); })()), "app", []), "sites", []), "getAllSites", [], "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 84
            echo "        ";
            $context["siteSettings"] = (((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, ($context["section"] ?? null), "siteSettings", [], "any", false, true), craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "id", []), [], "array", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, ($context["section"] ?? null), "siteSettings", [], "any", false, true), craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "id", []), [], "array")))) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, ($context["section"] ?? null), "siteSettings", [], "any", false, true), craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "id", []), [], "array")) : (null));
            // line 85
            echo "        ";
            if ((isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 85, $this->source); })())) {
                // line 86
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 86, $this->source); })()), "getErrors", [], "method"));
                foreach ($context['_seq'] as $context["attribute"] => $context["errors"]) {
                    // line 87
                    echo "                ";
                    $context["siteErrors"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["siteErrors"]) || array_key_exists("siteErrors", $context) ? $context["siteErrors"] : (function () { throw new RuntimeError('Variable "siteErrors" does not exist.', 87, $this->source); })()), $context["errors"]);
                    // line 88
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['errors'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "        ";
            }
            // line 90
            echo "        ";
            $context["siteRows"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["siteRows"]) || array_key_exists("siteRows", $context) ? $context["siteRows"] : (function () { throw new RuntimeError('Variable "siteRows" does not exist.', 90, $this->source); })()), [craft\helpers\Template::attribute($this->env, $this->source,             // line 91
$context["site"], "handle", []) => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, ["heading" => twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source,             // line 92
$context["site"], "name", []), "site")), "enabled" => twig_include($this->env, $context, "_includes/forms/lightswitch", ["name" => (("sites[" . craft\helpers\Template::attribute($this->env, $this->source,             // line 94
$context["site"], "handle", [])) . "][enabled]"), "on" => (            // line 95
(isset($context["brandNewSection"]) || array_key_exists("brandNewSection", $context) ? $context["brandNewSection"] : (function () { throw new RuntimeError('Variable "brandNewSection" does not exist.', 95, $this->source); })()) || (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 95, $this->source); })())), "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 96
$context["site"], "id", []), "small" => true]), "singleHomepage" => ["value" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 100
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 100, $this->source); })()), "type", []) == "single") && (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 100, $this->source); })())) && (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 100, $this->source); })()), "uriFormat", []) == "__home__"))], "singleUri" => ["value" => (((((craft\helpers\Template::attribute($this->env, $this->source,             // line 103
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 103, $this->source); })()), "type", []) == "single") && (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 103, $this->source); })())) && (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 103, $this->source); })()), "uriFormat", []) != "__home__"))) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 103, $this->source); })()), "uriFormat", [])) : ("")), "hasErrors" => ((((craft\helpers\Template::attribute($this->env, $this->source,             // line 104
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 104, $this->source); })()), "type", []) == "single") && (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 104, $this->source); })()))) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 104, $this->source); })()), "hasErrors", [0 => "uriFormat"], "method")) : (""))], "uriFormat" => ["value" => ((            // line 107
(isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 107, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 107, $this->source); })()), "uriFormat", [])) : ("")), "hasErrors" => ((((craft\helpers\Template::attribute($this->env, $this->source,             // line 108
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 108, $this->source); })()), "type", []) != "single") && (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 108, $this->source); })()))) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 108, $this->source); })()), "hasErrors", [0 => "uriFormat"], "method")) : (""))], "template" => (( !            // line 110
(isset($context["headlessMode"]) || array_key_exists("headlessMode", $context) ? $context["headlessMode"] : (function () { throw new RuntimeError('Variable "headlessMode" does not exist.', 110, $this->source); })())) ? (["value" => ((            // line 111
(isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 111, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 111, $this->source); })()), "template", [])) : ("")), "hasErrors" => ((            // line 112
(isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 112, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 112, $this->source); })()), "hasErrors", [0 => "template"], "method")) : (""))]) : ("")), "enabledByDefault" => ((            // line 114
(isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 114, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new RuntimeError('Variable "siteSettings" does not exist.', 114, $this->source); })()), "enabledByDefault", [])) : (true))])]);
            // line 117
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
    ";
        // line 119
        echo twig_call_macro($macros["forms"], "macro_editableTableField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Site Settings", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Choose which sites this section should be available in, and configure the site-specific settings.", "app"), "id" => "sites", "name" => "sites", "cols" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, ["heading" => ["type" => "heading", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Site", "app"), "thin" => true], "enabled" => ["type" => "heading", "thin" => true, "class" => (( !craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source,         // line 133
(isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 133, $this->source); })()), "app", []), "getIsMultiSite", [], "method")) ? ("hidden") : (""))], "singleHomepage" => ["type" => "checkbox", "headingHtml" => $this->extensions['craft\web\twig\Extension']->tagFunction("div", ["data" => ["icon" => "home"], "title" => $this->extensions['craft\web\twig\Extension']->translateFilter("Homepage", "app")]), "thin" => true, "class" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => "single-homepage", 1 => "type-single", 2 => (((craft\helpers\Template::attribute($this->env, $this->source,         // line 142
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 142, $this->source); })()), "type", []) != "single")) ? ("hidden") : (""))])], "singleUri" => ["type" => "singleline", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("URI", "app"), "info" => $this->extensions['craft\web\twig\Extension']->translateFilter("What the entry URI should be for the site. Leave blank if the entry doesn’t have a URL.", "app"), "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("Leave blank if the entry doesn’t have a URL", "app"), "code" => true, "width" => ((        // line 150
(isset($context["headlessMode"]) || array_key_exists("headlessMode", $context) ? $context["headlessMode"] : (function () { throw new RuntimeError('Variable "headlessMode" does not exist.', 150, $this->source); })())) ? (500) : ("")), "class" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => "single-uri", 1 => "type-single", 2 => (((craft\helpers\Template::attribute($this->env, $this->source,         // line 151
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 151, $this->source); })()), "type", []) != "single")) ? ("hidden") : (""))])], "uriFormat" => ["type" => "singleline", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Entry URI Format", "app"), "info" => $this->extensions['craft\web\twig\Extension']->translateFilter("What entry URIs should look like for the site. Leave blank if entries don’t have URLs.", "app"), "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("Leave blank if entries don’t have URLs", "app"), "code" => true, "width" => ((        // line 159
(isset($context["headlessMode"]) || array_key_exists("headlessMode", $context) ? $context["headlessMode"] : (function () { throw new RuntimeError('Variable "headlessMode" does not exist.', 159, $this->source); })())) ? (500) : ("")), "class" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => "type-channel", 1 => "type-structure", 2 => (((craft\helpers\Template::attribute($this->env, $this->source,         // line 160
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 160, $this->source); })()), "type", []) == "single")) ? (" hidden") : (""))])], "template" => (( !        // line 162
(isset($context["headlessMode"]) || array_key_exists("headlessMode", $context) ? $context["headlessMode"] : (function () { throw new RuntimeError('Variable "headlessMode" does not exist.', 162, $this->source); })())) ? (["type" => "template", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Template", "app"), "info" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which template should be loaded when an entry’s URL is requested.", "app"), "code" => true]) : ("")), "enabledByDefault" => ["type" => "lightswitch", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Default Status", "app"), "thin" => true, "class" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => "type-channel", 1 => "type-structure", 2 => (((craft\helpers\Template::attribute($this->env, $this->source,         // line 172
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 172, $this->source); })()), "type", []) == "single")) ? (" hidden") : (""))])]]), "rows" =>         // line 175
(isset($context["siteRows"]) || array_key_exists("siteRows", $context) ? $context["siteRows"] : (function () { throw new RuntimeError('Variable "siteRows" does not exist.', 175, $this->source); })()), "fullWidth" => true, "allowAdd" => false, "allowDelete" => false, "allowReorder" => false, "errors" => array_unique(        // line 180
(isset($context["siteErrors"]) || array_key_exists("siteErrors", $context) ? $context["siteErrors"] : (function () { throw new RuntimeError('Variable "siteErrors" does not exist.', 180, $this->source); })()))]], 119, $context, $this->getSourceContext());
        // line 181
        echo "

    ";
        // line 183
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 183, $this->source); })()), "app", []), "getIsMultiSite", [], "method")) {
            // line 184
            echo "        <div class=\"field type-channel type-structure ";
            if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 184, $this->source); })()), "type", []) == "single")) {
                echo "hidden";
            }
            echo "\">
            ";
            // line 185
            echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Propagation Method", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Of the enabled sites above, which sites should entries in this section be saved to?", "app"), "warning" => ((((craft\helpers\Template::attribute($this->env, $this->source,             // line 188
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 188, $this->source); })()), "id", []) && (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 188, $this->source); })()), "propagationMethod", []) != "none")) && ($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 188, $this->source); })()), "siteSettings", [])) > 1))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "app")) : ("")), "id" => "propagationMethod", "name" => "propagationMethod", "options" => [0 => ["value" => "none", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Only save entries to the site they were created in", "app")], 1 => ["value" => "siteGroup", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Save entries to other sites in the same site group", "app")], 2 => ["value" => "language", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Save entries to other sites with the same language", "app")], 3 => ["value" => "all", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Save entries to all sites enabled for this section", "app")], 4 => ["value" => "custom", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Let each entry choose which sites it should be saved to", "app")]], "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 198
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 198, $this->source); })()), "propagationMethod", [])]], 185, $context, $this->getSourceContext());
            // line 199
            echo "
        </div>
    ";
        }
        // line 202
        echo "
    <div class=\"field type-structure ";
        // line 203
        if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 203, $this->source); })()), "type", []) != "structure")) {
            echo "hidden";
        }
        echo "\">
        ";
        // line 204
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Max Levels", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The maximum number of levels this section can have. Leave blank if you don’t care.", "app"), "id" => "maxLevels", "name" => "maxLevels", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 209
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 209, $this->source); })()), "maxLevels", []), "size" => 5, "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 211
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 211, $this->source); })()), "getErrors", [0 => "maxLevels"], "method")]], 204, $context, $this->getSourceContext());
        // line 212
        echo "

        ";
        // line 214
        echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Default {type} Placement", "app", ["type" => $this->extensions['craft\web\twig\Extension']->translateFilter("Entry", "app")]), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Where new {type} should be placed by default in the structure.", "app", ["type" => $this->extensions['craft\web\twig\Extension']->translateFilter("entries", "app")]), "id" => "default-placement", "name" => "defaultPlacement", "options" => [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Before other {type}", "app", ["type" => $this->extensions['craft\web\twig\Extension']->translateFilter("entries", "app")]), "value" => "beginning"], 1 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("After other {type}", "app", ["type" => $this->extensions['craft\web\twig\Extension']->translateFilter("entries", "app")]), "value" => "end"]], "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 223
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 223, $this->source); })()), "defaultPlacement", [])]], 214, $context, $this->getSourceContext());
        // line 224
        echo "
    </div>

    ";
        // line 227
        if (((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new RuntimeError('Variable "CraftEdition" does not exist.', 227, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new RuntimeError('Variable "CraftPro" does not exist.', 227, $this->source); })()))) {
            // line 228
            echo "        ";
            echo twig_call_macro($macros["forms"], "macro_editableTableField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Preview Targets", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Locations that should be available for previewing entries in this section.", "app"), "id" => "previewTargets", "name" => "previewTargets", "cols" => ["label" => ["type" => "singleline", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Label", "app")], "urlFormat" => ["type" => "singleline", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("URL Format", "app"), "info" => $this->extensions['craft\web\twig\Extension']->translateFilter("The URL/URI to use for this target.", "app"), "code" => true], "refresh" => ["type" => "checkbox", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Auto-refresh", "app"), "info" => $this->extensions['craft\web\twig\Extension']->translateFilter("Whether preview frames should be automatically refreshed when content changes.", "app"), "thin" => true]], "defaultValues" => ["refresh" => true], "allowAdd" => true, "allowReorder" => true, "allowDelete" => true, "rows" => craft\helpers\Template::attribute($this->env, $this->source,             // line 257
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 257, $this->source); })()), "previewTargets", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,             // line 258
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 258, $this->source); })()), "getErrors", [0 => "previewTargets"], "method")]], 228, $context, $this->getSourceContext());
            // line 259
            echo "
    ";
        }
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "settings/sections/_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 259,  319 => 258,  318 => 257,  316 => 228,  314 => 227,  309 => 224,  307 => 223,  306 => 214,  302 => 212,  300 => 211,  299 => 209,  298 => 204,  292 => 203,  289 => 202,  284 => 199,  282 => 198,  281 => 188,  280 => 185,  273 => 184,  271 => 183,  267 => 181,  265 => 180,  264 => 175,  263 => 172,  262 => 162,  261 => 160,  260 => 159,  259 => 151,  258 => 150,  257 => 142,  256 => 133,  255 => 119,  252 => 118,  238 => 117,  236 => 114,  235 => 112,  234 => 111,  233 => 110,  232 => 108,  231 => 107,  230 => 104,  229 => 103,  228 => 100,  227 => 96,  226 => 95,  225 => 94,  224 => 92,  223 => 91,  221 => 90,  218 => 89,  212 => 88,  209 => 87,  204 => 86,  201 => 85,  198 => 84,  181 => 83,  178 => 82,  175 => 81,  173 => 80,  167 => 76,  165 => 75,  164 => 72,  163 => 71,  162 => 68,  161 => 65,  157 => 63,  155 => 62,  154 => 58,  150 => 56,  148 => 54,  147 => 53,  146 => 45,  142 => 43,  140 => 40,  139 => 39,  138 => 33,  135 => 32,  131 => 31,  126 => 29,  121 => 28,  116 => 27,  107 => 22,  101 => 20,  98 => 19,  93 => 18,  87 => 1,  83 => 272,  75 => 270,  71 => 269,  66 => 268,  62 => 267,  58 => 265,  56 => 264,  54 => 263,  52 => 15,  50 => 13,  48 => 4,  46 => 3,  44 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'settings/sections/_layout' %}
{% set selectedTab = 'settings' %}
{% set fullPageForm = true %}
{% set formActions = [
    {
        label: 'Save and continue editing'|t('app'),
        redirect: 'settings/sections/{id}'|hash,
        shortcut: true,
        retainScroll: true,
    },
] %}

{% import \"_includes/forms\" as forms %}

{% set headlessMode = craft.app.config.general.headlessMode %}


{% block submitButton %}
    {% if section.id %}
        {{ parent() }}
    {% else %}
        <button type=\"submit\" class=\"btn submit\">{{ 'Save and edit entry types'|t('app') }}</button>
    {% endif %}
{% endblock %}


{% block content %}
    {{ actionInput('sections/save-section') }}
    {{ redirectInput(section.id ? 'settings/sections' : \"settings/sections/{id}/entrytypes\") }}

    {% if section.id %}{{ hiddenInput('sectionId', section.id) }}{% endif %}

    {{ forms.textField({
        first: true,
        label: \"Name\"|t('app'),
        instructions: \"What this section will be called in the control panel.\"|t('app'),
        id: 'name',
        name: 'name',
        value: section.name,
        errors: section.getErrors('name'),
        autofocus: true,
        required: true,
    }) }}

    {{ forms.textField({
        label: \"Handle\"|t('app'),
        instructions: \"How you’ll refer to this section in the templates.\"|t('app'),
        id: 'handle',
        name: 'handle',
        class: 'code',
        autocorrect: false,
        autocapitalize: false,
        value: section.handle,
        errors: section.getErrors('handle'),
        required: true
    }) }}

    {{ forms.checkboxField({
        label: 'Enable versioning for entries in this section'|t('app'),
        id: 'enableVersioning',
        name: 'enableVersioning',
        checked: section.enableVersioning
    }) }}

    {{ forms.selectField({
        label: \"Section Type\"|t('app'),
        instructions: \"What type of section is this?\"|t('app'),
        warning: section.id and section.type != 'single' ? 'Changing this may result in data loss.'|t('app'),
        id: 'type',
        name: 'type',
        options: typeOptions,
        value: section.type,
        toggle: true,
        targetPrefix: '.type-',
        errors: section.getErrors('type')
    }) }}

    <hr>

    {% set siteRows = [] %}
    {% set siteErrors = section.getErrors('siteSettings') %}

    {% for site in craft.app.sites.getAllSites() %}
        {% set siteSettings = section.siteSettings[site.id] ?? null %}
        {% if siteSettings %}
            {% for attribute, errors in siteSettings.getErrors() %}
                {% set siteErrors = siteErrors|merge(errors) %}
            {% endfor %}
        {% endif %}
        {% set siteRows = siteRows|merge({
            (site.handle): {
                heading: site.name|t('site')|e,
                enabled: include('_includes/forms/lightswitch', {
                    name: 'sites['~site.handle~'][enabled]',
                    on: brandNewSection or siteSettings,
                    value: site.id,
                    small: true
                }),
                singleHomepage: {
                    value: (section.type == 'single' and siteSettings and siteSettings.uriFormat == '__home__')
                },
                singleUri: {
                   value: (section.type == 'single' and siteSettings and siteSettings.uriFormat != '__home__') ? siteSettings.uriFormat,
                   hasErrors: (section.type == 'single' and siteSettings ? siteSettings.hasErrors('uriFormat'))
                },
                uriFormat: {
                    value: siteSettings ? siteSettings.uriFormat,
                    hasErrors: (section.type != 'single' and siteSettings ? siteSettings.hasErrors('uriFormat'))
                },
                template: not headlessMode ? {
                    value: siteSettings ? siteSettings.template,
                    hasErrors: siteSettings ? siteSettings.hasErrors('template'),
                },
                enabledByDefault: siteSettings ? siteSettings.enabledByDefault : true,
            }|filter
        }) %}
    {% endfor %}

    {{ forms.editableTableField({
        label: \"Site Settings\"|t('app'),
        instructions: \"Choose which sites this section should be available in, and configure the site-specific settings.\"|t('app'),
        id: 'sites',
        name: 'sites',
        cols: {
            heading: {
                type: 'heading',
                heading: \"Site\"|t('app'),
                thin: true
            },
            enabled: {
                type: 'heading',
                thin: true,
                class: not craft.app.getIsMultiSite() ? 'hidden'
            },
            singleHomepage: {
                type: 'checkbox',
                headingHtml: tag('div', {
                    data: {icon: 'home'},
                    title: 'Homepage'|t('app')
                }),
                thin: true,
                class: ['single-homepage', 'type-single', section.type != 'single' ? 'hidden']|filter
            },
            singleUri: {
                type: 'singleline',
                heading: \"URI\"|t('app'),
                info: \"What the entry URI should be for the site. Leave blank if the entry doesn’t have a URL.\"|t('app'),
                placeholder: 'Leave blank if the entry doesn’t have a URL'|t('app'),
                code: true,
                width: headlessMode ? 500,
                class: ['single-uri', 'type-single', section.type != 'single' ? 'hidden']|filter
            },
            uriFormat: {
                type: 'singleline',
                heading: \"Entry URI Format\"|t('app'),
                info: \"What entry URIs should look like for the site. Leave blank if entries don’t have URLs.\"|t('app'),
                placeholder: 'Leave blank if entries don’t have URLs'|t('app'),
                code: true,
                width: headlessMode ? 500,
                class: ['type-channel', 'type-structure', section.type == 'single' ? ' hidden']|filter
            },
            template: not headlessMode ? {
                type: 'template',
                heading: \"Template\"|t('app'),
                info: \"Which template should be loaded when an entry’s URL is requested.\"|t('app'),
                code: true
            },
            enabledByDefault: {
                type: 'lightswitch',
                heading: \"Default Status\"|t('app'),
                thin: true,
                class: ['type-channel', 'type-structure', section.type == 'single' ? ' hidden']|filter
            }
        }|filter,
        rows: siteRows,
        fullWidth: true,
        allowAdd: false,
        allowDelete: false,
        allowReorder: false,
        errors: siteErrors|unique
    }) }}

    {% if craft.app.getIsMultiSite() %}
        <div class=\"field type-channel type-structure {% if section.type == 'single' %}hidden{% endif %}\">
            {{ forms.selectField({
                label: 'Propagation Method'|t('app'),
                instructions: 'Of the enabled sites above, which sites should entries in this section be saved to?'|t('app'),
                warning: section.id and section.propagationMethod != 'none' and section.siteSettings|length > 1 ? 'Changing this may result in data loss.'|t('app'),
                id: 'propagationMethod',
                name: 'propagationMethod',
                options: [
                    { value: 'none', label: 'Only save entries to the site they were created in'|t('app') },
                    { value: 'siteGroup', label: 'Save entries to other sites in the same site group'|t('app') },
                    { value: 'language', label: 'Save entries to other sites with the same language'|t('app') },
                    { value: 'all', label: 'Save entries to all sites enabled for this section'|t('app') },
                    { value: 'custom', label: 'Let each entry choose which sites it should be saved to'|t('app') },
                ],
                value: section.propagationMethod
            }) }}
        </div>
    {% endif %}

    <div class=\"field type-structure {% if section.type != 'structure' %}hidden{% endif %}\">
        {{ forms.textField({
            label: \"Max Levels\"|t('app'),
            instructions: \"The maximum number of levels this section can have. Leave blank if you don’t care.\"|t('app'),
            id: 'maxLevels',
            name: 'maxLevels',
            value: section.maxLevels,
            size: 5,
            errors: section.getErrors('maxLevels')
        }) }}

        {{ forms.selectField({
            label: 'Default {type} Placement'|t('app', {type: 'Entry'|t('app')}),
            instructions: 'Where new {type} should be placed by default in the structure.'|t('app', {type: 'entries'|t('app')}),
            id: 'default-placement',
            name: 'defaultPlacement',
            options: [
                {label: 'Before other {type}'|t('app', {type: 'entries'|t('app')}), value: 'beginning'},
                {label: 'After other {type}'|t('app', {type: 'entries'|t('app')}), value: 'end'},
            ],
            value: section.defaultPlacement,
        }) }}
    </div>

    {% if CraftEdition == CraftPro %}
        {{ forms.editableTableField({
            label: 'Preview Targets'|t('app'),
            instructions: 'Locations that should be available for previewing entries in this section.'|t('app'),
            id: 'previewTargets',
            name: 'previewTargets',
            cols: {
                label: {
                    type: 'singleline',
                    heading: 'Label'|t('app'),
                },
                urlFormat: {
                    type: 'singleline',
                    heading: 'URL Format'|t('app'),
                    info: 'The URL/URI to use for this target.'|t('app'),
                    code: true,
                },
                refresh: {
                    type: 'checkbox',
                    heading: 'Auto-refresh'|t('app'),
                    info: 'Whether preview frames should be automatically refreshed when content changes.'|t('app'),
                    thin: true,
                }
            },
            defaultValues: {
                refresh: true,
            },
            allowAdd: true,
            allowReorder: true,
            allowDelete: true,
            rows: section.previewTargets,
            errors: section.getErrors('previewTargets')
        }) }}
    {% endif %}
{% endblock %}

{% if brandNewSection %}
    {% js on ready %}
        new Craft.HandleGenerator('#name', '#handle');

        {% for site in craft.app.sites.getAllSites() %}
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"{{ site.handle }}\"] textarea[name\$=\"[singleUri]\"]');
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"{{ site.handle }}\"] textarea[name\$=\"[uriFormat]\"]', { suffix: '/{slug}' });
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"{{ site.handle }}\"] input[name\$=\"[template]\"]', { suffix: '/_entry' });
        {% endfor %}
    {% endjs %}
{% endif %}
", "settings/sections/_edit.twig", "/var/www/html/vendor/craftcms/cms/src/templates/settings/sections/_edit.twig");
    }
}
