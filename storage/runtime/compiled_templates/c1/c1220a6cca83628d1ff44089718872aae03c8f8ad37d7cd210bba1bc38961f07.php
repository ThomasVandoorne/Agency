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

/* _components/fieldtypes/Matrix/settings.twig */
class __TwigTemplate_a398b4ef18770868a1a40b666a86305f777d7ac50789fe561d86b973d99cc9a7 extends Template
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
        craft\helpers\Template::beginProfile("template", "_components/fieldtypes/Matrix/settings.twig");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Matrix/settings.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "    <div class=\"mc-sidebar block-types\">
        <div class=\"mc-col-inner-container\">
            <div class=\"mc-col-heading\">
                <h5>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Block Types", "app"), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"mc-col-items\">
                <div class=\"mc-blocktypes\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) || array_key_exists("blockTypes", $context) ? $context["blockTypes"] : (function () { throw new RuntimeError('Variable "blockTypes" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["blockTypeId"] => $context["blockType"]) {
            // line 12
            echo "                        <div class=\"matrixconfigitem mci-blocktype";
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "hasFieldErrors", [])) {
                echo " error";
            }
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $context["blockTypeId"], "html", null, true);
            echo "\"";
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "hasErrors", [], "method")) {
                echo " data-errors=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "getErrors", [], "method")), "html", null, true);
                echo "\"";
            }
            echo ">
                            <div class=\"mci-name\">
                                ";
            // line 14
            ob_start();
            // line 17
            echo "                                    ";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "name", []), "html", null, true);
            echo "
                                    ";
            // line 18
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "hasFieldErrors", [])) {
                // line 19
                echo "                                        <span data-icon=\"alert\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Error", "app"), "html", null, true);
                echo "\"></span>
                                    ";
            }
            // line 21
            echo "                                ";
            echo craft\helpers\Html::tag("h4", ob_get_clean(), ["title" => craft\helpers\Template::attribute($this->env, $this->source,             // line 15
$context["blockType"], "name", [])]);
            // line 22
            echo "                                ";
            echo $this->extensions['craft\web\twig\Extension']->tagFunction("div", ["class" => [0 => "smalltext", 1 => "light", 2 => "code"], "text" => craft\helpers\Template::attribute($this->env, $this->source,             // line 24
$context["blockType"], "handle", []), "title" => craft\helpers\Template::attribute($this->env, $this->source,             // line 25
$context["blockType"], "handle", [])]);
            // line 26
            echo "
                            </div>
                            <a class=\"settings icon";
            // line 28
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "hasErrors", [], "method")) {
                echo " error";
            }
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "html", null, true);
            echo "\" role=\"button\"></a>
                            <a class=\"move icon\" title=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
            echo "\" role=\"button\"></a>
                            <input class=\"hidden\" name=\"blockTypes[";
            // line 30
            echo twig_escape_filter($this->env, $context["blockTypeId"], "html", null, true);
            echo "][name]\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "name", []), "html", null, true);
            echo "\">
                            <input class=\"hidden\" name=\"blockTypes[";
            // line 31
            echo twig_escape_filter($this->env, $context["blockTypeId"], "html", null, true);
            echo "][handle]\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["blockType"], "handle", []), "html", null, true);
            echo "\">
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['blockTypeId'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </div>
                <button type=\"button\" class=\"btn add icon\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New block type", "app"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
    <div class=\"mc-sidebar mc-fields\">
        <div class=\"mc-col-inner-container hidden\">
            <div class=\"mc-col-heading\">
                <h5>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Fields", "app"), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"mc-col-items\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) || array_key_exists("blockTypes", $context) ? $context["blockTypes"] : (function () { throw new RuntimeError('Variable "blockTypes" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["blockTypeId"] => $context["blockType"]) {
            // line 46
            echo "                    <div data-id=\"";
            echo twig_escape_filter($this->env, $context["blockTypeId"], "html", null, true);
            echo "\" class=\"hidden\">
                        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["blockTypeFields"]) || array_key_exists("blockTypeFields", $context) ? $context["blockTypeFields"] : (function () { throw new RuntimeError('Variable "blockTypeFields" does not exist.', 47, $this->source); })()), $context["blockTypeId"], [], "array"));
            foreach ($context['_seq'] as $context["fieldId"] => $context["layoutElement"]) {
                // line 48
                echo "                            ";
                $context["field"] = craft\helpers\Template::attribute($this->env, $this->source, $context["layoutElement"], "getField", [], "method");
                // line 49
                echo "                            ";
                $context["hasName"] = (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 49, $this->source); })()), "name", []) && (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 49, $this->source); })()), "name", []) != "__blank__"));
                // line 50
                echo "                            <div class=\"matrixconfigitem mci-field";
                if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 50, $this->source); })()), "hasErrors", [], "method")) {
                    echo " error";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $context["fieldId"], "html", null, true);
                echo "\">
                                <div class=\"mci-name\">
                                    ";
                // line 52
                ob_start();
                // line 56
                if ((isset($context["hasName"]) || array_key_exists("hasName", $context) ? $context["hasName"] : (function () { throw new RuntimeError('Variable "hasName" does not exist.', 56, $this->source); })())) {
                    // line 57
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 57, $this->source); })()), "name", []), "html", null, true);
                } else {
                    // line 59
                    echo "<em class=\"light\">";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("(blank)", "app"), "html", null, true);
                    echo "</em>";
                }
                // line 61
                if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 61, $this->source); })()), "hasErrors", [], "method")) {
                    echo " <span data-icon=\"alert\" aria-label=\"";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Error", "app"), "html", null, true);
                    echo "\"></span>";
                }
                echo craft\helpers\Html::tag("h4", ob_get_clean(), ["class" => ((craft\helpers\Template::attribute($this->env, $this->source,                 // line 53
$context["layoutElement"], "required", [])) ? ("mci-required") : (null)), "title" => ((                // line 54
(isset($context["hasName"]) || array_key_exists("hasName", $context) ? $context["hasName"] : (function () { throw new RuntimeError('Variable "hasName" does not exist.', 54, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 54, $this->source); })()), "name", [])) : (null))]);
                // line 63
                echo "                                    ";
                echo $this->extensions['craft\web\twig\Extension']->tagFunction("div", ["class" => [0 => "smalltext", 1 => "light", 2 => "code"], "text" => craft\helpers\Template::attribute($this->env, $this->source,                 // line 65
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 65, $this->source); })()), "handle", []), "title" => craft\helpers\Template::attribute($this->env, $this->source,                 // line 66
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 66, $this->source); })()), "handle", [])]);
                // line 67
                echo "
                                </div>
                                <a class=\"move icon\" title=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                echo "\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                echo "\" role=\"button\"></a>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldId'], $context['layoutElement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['blockTypeId'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                <button type=\"button\" class=\"btn add icon\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New field", "app"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
    <div class=\"mc-field-settings\">
        <div class=\"mc-col-inner-container hidden\">
            <div class=\"mc-col-heading\">
                <h5>";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Field Settings", "app"), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"mc-col-items\">
                ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) || array_key_exists("blockTypes", $context) ? $context["blockTypes"] : (function () { throw new RuntimeError('Variable "blockTypes" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["blockTypeId"] => $context["blockType"]) {
            // line 85
            echo "                    <div data-id=\"";
            echo twig_escape_filter($this->env, $context["blockTypeId"], "html", null, true);
            echo "\">
                        ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["blockTypeFields"]) || array_key_exists("blockTypeFields", $context) ? $context["blockTypeFields"] : (function () { throw new RuntimeError('Variable "blockTypeFields" does not exist.', 86, $this->source); })()), $context["blockTypeId"], [], "array"));
            foreach ($context['_seq'] as $context["fieldId"] => $context["layoutElement"]) {
                // line 87
                echo "                            ";
                $context["field"] = craft\helpers\Template::attribute($this->env, $this->source, $context["layoutElement"], "getField", [], "method");
                // line 88
                echo "                            <div data-id=\"";
                echo twig_escape_filter($this->env, $context["fieldId"], "html", null, true);
                echo "\" class=\"hidden\">
                                ";
                // line 89
                $_namespace = (((("blockTypes[" . $context["blockTypeId"]) . "][fields][") . $context["fieldId"]) . "]");
                if ($_namespace) {
                    $_originalNamespace = Craft::$app->getView()->getNamespace();
                    Craft::$app->getView()->setNamespace(Craft::$app->getView()->namespaceInputName($_namespace));
                    ob_start();
                    try {
                        // line 90
                        echo "                                    ";
                        if (craft\helpers\Template::attribute($this->env, $this->source, $context["layoutElement"], "uid", [])) {
                            // line 91
                            echo "                                        ";
                            echo craft\helpers\Html::hiddenInput("uid", craft\helpers\Template::attribute($this->env, $this->source, $context["layoutElement"], "uid", []));
                            echo "
                                    ";
                        }
                        // line 93
                        echo "
                                    ";
                        // line 94
                        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 94, $this->source); })()), "columnSuffix", [])) {
                            // line 95
                            echo "                                        ";
                            echo craft\helpers\Html::hiddenInput("columnSuffix", craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 95, $this->source); })()), "columnSuffix", []));
                            echo "
                                    ";
                        }
                        // line 97
                        echo "
                                    ";
                        // line 98
                        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "id" => "name", "name" => "name", "value" => (((craft\helpers\Template::attribute($this->env, $this->source,                         // line 102
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 102, $this->source); })()), "name", []) != "__blank__")) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 102, $this->source); })()), "name", [])) : ("")), "errors" => craft\helpers\Template::attribute($this->env, $this->source,                         // line 103
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 103, $this->source); })()), "getErrors", [0 => "name"], "method"), "first" => true, "autofocus" => true]], 98, $context, $this->getSourceContext());
                        // line 106
                        echo "

                                    ";
                        // line 108
                        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "id" => "handle", "name" => "handle", "class" => "code", "autocorrect" => false, "autocapitalize" => false, "maxlength" => 64, "value" => craft\helpers\Template::attribute($this->env, $this->source,                         // line 116
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 116, $this->source); })()), "handle", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,                         // line 117
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 117, $this->source); })()), "getErrors", [0 => "handle"], "method"), "required" => true]], 108, $context, $this->getSourceContext());
                        // line 119
                        echo "

                                    ";
                        // line 121
                        echo twig_call_macro($macros["forms"], "macro_textareaField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Instructions", "app"), "id" => "instructions", "class" => "nicetext", "name" => "instructions", "value" => craft\helpers\Template::attribute($this->env, $this->source,                         // line 126
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 126, $this->source); })()), "instructions", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,                         // line 127
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 127, $this->source); })()), "getErrors", [0 => "instructions"], "method")]], 121, $context, $this->getSourceContext());
                        // line 128
                        echo "

                                    <fieldset>
                                        ";
                        // line 131
                        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("This field is required", "app"), "id" => "required", "name" => "required", "checked" => craft\helpers\Template::attribute($this->env, $this->source,                         // line 135
$context["layoutElement"], "required", [])]], 131, $context, $this->getSourceContext());
                        // line 136
                        echo "

                                        ";
                        // line 138
                        echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Use this field’s values as search keywords", "app"), "id" => "searchable", "name" => "searchable", "checked" => craft\helpers\Template::attribute($this->env, $this->source,                         // line 142
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 142, $this->source); })()), "searchable", [])]], 138, $context, $this->getSourceContext());
                        // line 143
                        echo "
                                    </fieldset>

                                    ";
                        // line 146
                        echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Field Type", "app"), "warning" => ((( !craft\helpers\Template::attribute($this->env, $this->source,                         // line 148
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 148, $this->source); })()), "getIsNew", [], "method") &&  !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 148, $this->source); })()), "hasErrors", [0 => "type"], "method"))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "app")) : ("")), "id" => "type", "name" => "type", "options" => (((twig_slice($this->env,                         // line 151
$context["fieldId"], 0, 3) != "new")) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["fieldTypes"]) || array_key_exists("fieldTypes", $context) ? $context["fieldTypes"] : (function () { throw new RuntimeError('Variable "fieldTypes" does not exist.', 151, $this->source); })()), $context["fieldId"], [], "array")) : (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["fieldTypes"]) || array_key_exists("fieldTypes", $context) ? $context["fieldTypes"] : (function () { throw new RuntimeError('Variable "fieldTypes" does not exist.', 151, $this->source); })()), "new", []))), "value" => get_class(                        // line 152
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 152, $this->source); })())), "errors" => (((craft\helpers\Template::attribute($this->env, $this->source,                         // line 153
($context["field"] ?? null), "getErrors", [0 => "type"], "method", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["field"] ?? null), "getErrors", [0 => "type"], "method")))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["field"] ?? null), "getErrors", [0 => "type"], "method")) : (null))]], 146, $context, $this->getSourceContext());
                        // line 154
                        echo "

                                    ";
                        // line 156
                        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 156, $this->source); })()), "app", []), "getIsMultiSite", [], "method")) {
                            // line 157
                            echo "                                        ";
                            $context["translationMethods"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 157, $this->source); })()), "supportedTranslationMethods", []);
                            // line 158
                            echo "                                        <div id=\"translation-settings\"";
                            if (($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 158, $this->source); })())) < 2)) {
                                echo " class=\"hidden\"";
                            }
                            echo ">
                                            ";
                            // line 159
                            echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Method", "app"), "id" => "translation-method", "name" => "translationMethod", "options" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => ((twig_in_filter("none",                             // line 164
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 164, $this->source); })()))) ? (["value" => "none", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Not translatable", "app")]) : ("")), 1 => ((twig_in_filter("site",                             // line 165
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 165, $this->source); })()))) ? (["value" => "site", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site", "app")]) : ("")), 2 => ((twig_in_filter("siteGroup",                             // line 166
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 166, $this->source); })()))) ? (["value" => "siteGroup", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site group", "app")]) : ("")), 3 => ((twig_in_filter("language",                             // line 167
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 167, $this->source); })()))) ? (["value" => "language", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each language", "app")]) : ("")), 4 => ((twig_in_filter("custom",                             // line 168
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 168, $this->source); })()))) ? (["value" => "custom", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Custom…", "app")]) : (""))]), "value" => craft\helpers\Template::attribute($this->env, $this->source,                             // line 170
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 170, $this->source); })()), "translationMethod", []), "toggle" => true, "targetPrefix" => "translation-method-"]], 159, $context, $this->getSourceContext());
                            // line 173
                            echo "

                                            ";
                            // line 175
                            if (twig_in_filter("custom", (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 175, $this->source); })()))) {
                                // line 176
                                echo "                                                <div id=\"translation-method-custom\" ";
                                if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 176, $this->source); })()), "translationMethod", []) != "custom")) {
                                    echo "class=\"hidden\"";
                                }
                                echo ">
                                                    ";
                                // line 177
                                echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Key Format", "app"), "id" => "translation-key-format", "name" => "translationKeyFormat", "value" => craft\helpers\Template::attribute($this->env, $this->source,                                 // line 181
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 181, $this->source); })()), "translationKeyFormat", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,                                 // line 182
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 182, $this->source); })()), "getErrors", [0 => "translationKeyFormat"], "method")]], 177, $context, $this->getSourceContext());
                                // line 183
                                echo "
                                                </div>
                                            ";
                            }
                            // line 186
                            echo "                                        </div>
                                    ";
                        }
                        // line 188
                        echo "
                                    ";
                        // line 189
                        echo craft\helpers\Html::hiddenInput("width", craft\helpers\Template::attribute($this->env, $this->source, $context["layoutElement"], "width", []), ["id" => "width"]);
                        // line 191
                        echo "
                                ";
                    } catch (Exception $e) {
                        ob_end_clean();

                        throw $e;
                    }
                    echo craft\helpers\Html::namespaceHtml(ob_get_clean(), $_namespace, false);
                    Craft::$app->getView()->setNamespace($_originalNamespace);
                } else {
                    // line 90
                    echo "                                    ";
                    if (craft\helpers\Template::attribute($this->env, $this->source, $context["layoutElement"], "uid", [])) {
                        // line 91
                        echo "                                        ";
                        echo craft\helpers\Html::hiddenInput("uid", craft\helpers\Template::attribute($this->env, $this->source, $context["layoutElement"], "uid", []));
                        echo "
                                    ";
                    }
                    // line 93
                    echo "
                                    ";
                    // line 94
                    if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 94, $this->source); })()), "columnSuffix", [])) {
                        // line 95
                        echo "                                        ";
                        echo craft\helpers\Html::hiddenInput("columnSuffix", craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 95, $this->source); })()), "columnSuffix", []));
                        echo "
                                    ";
                    }
                    // line 97
                    echo "
                                    ";
                    // line 98
                    echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "id" => "name", "name" => "name", "value" => (((craft\helpers\Template::attribute($this->env, $this->source,                     // line 102
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 102, $this->source); })()), "name", []) != "__blank__")) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 102, $this->source); })()), "name", [])) : ("")), "errors" => craft\helpers\Template::attribute($this->env, $this->source,                     // line 103
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 103, $this->source); })()), "getErrors", [0 => "name"], "method"), "first" => true, "autofocus" => true]], 98, $context, $this->getSourceContext());
                    // line 106
                    echo "

                                    ";
                    // line 108
                    echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "id" => "handle", "name" => "handle", "class" => "code", "autocorrect" => false, "autocapitalize" => false, "maxlength" => 64, "value" => craft\helpers\Template::attribute($this->env, $this->source,                     // line 116
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 116, $this->source); })()), "handle", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,                     // line 117
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 117, $this->source); })()), "getErrors", [0 => "handle"], "method"), "required" => true]], 108, $context, $this->getSourceContext());
                    // line 119
                    echo "

                                    ";
                    // line 121
                    echo twig_call_macro($macros["forms"], "macro_textareaField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Instructions", "app"), "id" => "instructions", "class" => "nicetext", "name" => "instructions", "value" => craft\helpers\Template::attribute($this->env, $this->source,                     // line 126
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 126, $this->source); })()), "instructions", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,                     // line 127
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 127, $this->source); })()), "getErrors", [0 => "instructions"], "method")]], 121, $context, $this->getSourceContext());
                    // line 128
                    echo "

                                    <fieldset>
                                        ";
                    // line 131
                    echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("This field is required", "app"), "id" => "required", "name" => "required", "checked" => craft\helpers\Template::attribute($this->env, $this->source,                     // line 135
$context["layoutElement"], "required", [])]], 131, $context, $this->getSourceContext());
                    // line 136
                    echo "

                                        ";
                    // line 138
                    echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Use this field’s values as search keywords", "app"), "id" => "searchable", "name" => "searchable", "checked" => craft\helpers\Template::attribute($this->env, $this->source,                     // line 142
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 142, $this->source); })()), "searchable", [])]], 138, $context, $this->getSourceContext());
                    // line 143
                    echo "
                                    </fieldset>

                                    ";
                    // line 146
                    echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Field Type", "app"), "warning" => ((( !craft\helpers\Template::attribute($this->env, $this->source,                     // line 148
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 148, $this->source); })()), "getIsNew", [], "method") &&  !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 148, $this->source); })()), "hasErrors", [0 => "type"], "method"))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "app")) : ("")), "id" => "type", "name" => "type", "options" => (((twig_slice($this->env,                     // line 151
$context["fieldId"], 0, 3) != "new")) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["fieldTypes"]) || array_key_exists("fieldTypes", $context) ? $context["fieldTypes"] : (function () { throw new RuntimeError('Variable "fieldTypes" does not exist.', 151, $this->source); })()), $context["fieldId"], [], "array")) : (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["fieldTypes"]) || array_key_exists("fieldTypes", $context) ? $context["fieldTypes"] : (function () { throw new RuntimeError('Variable "fieldTypes" does not exist.', 151, $this->source); })()), "new", []))), "value" => get_class(                    // line 152
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 152, $this->source); })())), "errors" => (((craft\helpers\Template::attribute($this->env, $this->source,                     // line 153
($context["field"] ?? null), "getErrors", [0 => "type"], "method", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["field"] ?? null), "getErrors", [0 => "type"], "method")))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["field"] ?? null), "getErrors", [0 => "type"], "method")) : (null))]], 146, $context, $this->getSourceContext());
                    // line 154
                    echo "

                                    ";
                    // line 156
                    if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 156, $this->source); })()), "app", []), "getIsMultiSite", [], "method")) {
                        // line 157
                        echo "                                        ";
                        $context["translationMethods"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 157, $this->source); })()), "supportedTranslationMethods", []);
                        // line 158
                        echo "                                        <div id=\"translation-settings\"";
                        if (($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 158, $this->source); })())) < 2)) {
                            echo " class=\"hidden\"";
                        }
                        echo ">
                                            ";
                        // line 159
                        echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Method", "app"), "id" => "translation-method", "name" => "translationMethod", "options" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => ((twig_in_filter("none",                         // line 164
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 164, $this->source); })()))) ? (["value" => "none", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Not translatable", "app")]) : ("")), 1 => ((twig_in_filter("site",                         // line 165
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 165, $this->source); })()))) ? (["value" => "site", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site", "app")]) : ("")), 2 => ((twig_in_filter("siteGroup",                         // line 166
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 166, $this->source); })()))) ? (["value" => "siteGroup", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site group", "app")]) : ("")), 3 => ((twig_in_filter("language",                         // line 167
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 167, $this->source); })()))) ? (["value" => "language", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each language", "app")]) : ("")), 4 => ((twig_in_filter("custom",                         // line 168
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 168, $this->source); })()))) ? (["value" => "custom", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Custom…", "app")]) : (""))]), "value" => craft\helpers\Template::attribute($this->env, $this->source,                         // line 170
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 170, $this->source); })()), "translationMethod", []), "toggle" => true, "targetPrefix" => "translation-method-"]], 159, $context, $this->getSourceContext());
                        // line 173
                        echo "

                                            ";
                        // line 175
                        if (twig_in_filter("custom", (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new RuntimeError('Variable "translationMethods" does not exist.', 175, $this->source); })()))) {
                            // line 176
                            echo "                                                <div id=\"translation-method-custom\" ";
                            if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 176, $this->source); })()), "translationMethod", []) != "custom")) {
                                echo "class=\"hidden\"";
                            }
                            echo ">
                                                    ";
                            // line 177
                            echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Key Format", "app"), "id" => "translation-key-format", "name" => "translationKeyFormat", "value" => craft\helpers\Template::attribute($this->env, $this->source,                             // line 181
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 181, $this->source); })()), "translationKeyFormat", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,                             // line 182
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 182, $this->source); })()), "getErrors", [0 => "translationKeyFormat"], "method")]], 177, $context, $this->getSourceContext());
                            // line 183
                            echo "
                                                </div>
                                            ";
                        }
                        // line 186
                        echo "                                        </div>
                                    ";
                    }
                    // line 188
                    echo "
                                    ";
                    // line 189
                    echo craft\helpers\Html::hiddenInput("width", craft\helpers\Template::attribute($this->env, $this->source, $context["layoutElement"], "width", []), ["id" => "width"]);
                    // line 191
                    echo "
                                ";
                }
                unset($_originalNamespace, $_namespace);
                // line 193
                echo "
                                <hr>

                                <div class=\"mc-fieldtype-settings\">
                                    <div>
                                        ";
                // line 198
                $_namespace = (((("blockTypes[" . $context["blockTypeId"]) . "][fields][") . $context["fieldId"]) . "][typesettings]");
                if ($_namespace) {
                    $_originalNamespace = Craft::$app->getView()->getNamespace();
                    Craft::$app->getView()->setNamespace(Craft::$app->getView()->namespaceInputName($_namespace));
                    ob_start();
                    try {
                        // line 199
                        echo "                                            ";
                        echo craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 199, $this->source); })()), "getSettingsHtml", [], "method");
                        echo "
                                        ";
                    } catch (Exception $e) {
                        ob_end_clean();

                        throw $e;
                    }
                    echo craft\helpers\Html::namespaceHtml(ob_get_clean(), $_namespace, false);
                    Craft::$app->getView()->setNamespace($_originalNamespace);
                } else {
                    echo "                                            ";
                    echo craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 199, $this->source); })()), "getSettingsHtml", [], "method");
                    echo "
                                        ";
                }
                unset($_originalNamespace, $_namespace);
                // line 201
                echo "                                    </div>
                                </div>

                                <hr>

                                <a class=\"error delete\">";
                // line 206
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                echo "</a>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldId'], $context['layoutElement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['blockTypeId'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "            </div>
        </div>
    </div>
";
        $context["blockTypeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 215
        echo "
";
        // line 216
        echo craft\helpers\Html::hiddenInput("blockTypes", "");
        echo "

<div id=\"matrix-configurator\" class=\"matrix-configurator\">
    ";
        // line 219
        echo twig_call_macro($macros["forms"], "macro_field", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Configuration", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Define the types of blocks that can be created within this Matrix field, as well as the fields each block type is made up of.", "app"), "name" => "config", "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 223
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new RuntimeError('Variable "matrixField" does not exist.', 223, $this->source); })()), "getErrors", [0 => "blockTypes"], "method")],         // line 224
(isset($context["blockTypeInput"]) || array_key_exists("blockTypeInput", $context) ? $context["blockTypeInput"] : (function () { throw new RuntimeError('Variable "blockTypeInput" does not exist.', 224, $this->source); })())], 219, $context, $this->getSourceContext());
        echo "
</div>

";
        // line 227
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 227, $this->source); })()), "app", []), "getIsMultiSite", [], "method")) {
            // line 228
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Propagation Method", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which sites should blocks be saved to?", "app"), "id" => "propagationMethod", "name" => "propagationMethod", "options" => [0 => ["value" => "none", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Only save blocks to the site they were created in", "app")], 1 => ["value" => "siteGroup", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Save blocks to other sites in the same site group", "app")], 2 => ["value" => "language", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Save blocks to other sites with the same language", "app")], 3 => ["value" => "all", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Save blocks to all sites the owner element is saved in", "app")], 4 => ["value" => "custom", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Custom…", "app")]], "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 240
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new RuntimeError('Variable "matrixField" does not exist.', 240, $this->source); })()), "propagationMethod", []), "toggle" => true, "targetPrefix" => "propagation-method-"]], 228, $context, $this->getSourceContext());
            // line 243
            echo "

    ";
            // line 245
            ob_start();
            // line 249
            echo "        ";
            echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Propagation Key Format", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Template that defines the field’s custom “propagation key” format. Blocks will be saved to all sites that produce the same key.", "app"), "id" => "propagation-key-format", "class" => "code", "name" => "propagationKeyFormat", "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 255
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new RuntimeError('Variable "matrixField" does not exist.', 255, $this->source); })()), "propagationKeyFormat", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,             // line 256
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new RuntimeError('Variable "matrixField" does not exist.', 256, $this->source); })()), "getErrors", [0 => "propagationKeyFormat"], "method")]], 249, $context, $this->getSourceContext());
            // line 257
            echo "
    ";
            echo craft\helpers\Html::tag("div", ob_get_clean(), ["id" => "propagation-method-custom", "class" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 247
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new RuntimeError('Variable "matrixField" does not exist.', 247, $this->source); })()), "propagationMethod", []) != "custom")) ? ("hidden") : (null))]);
            // line 259
            echo "
    ";
            // line 260
            if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new RuntimeError('Variable "matrixField" does not exist.', 260, $this->source); })()), "id", []) && (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new RuntimeError('Variable "matrixField" does not exist.', 260, $this->source); })()), "propagationMethod", []) != "none"))) {
                // line 261
                echo "        ";
                ob_start();
                // line 262
                echo "            (function() {
                var showingWarning = false;
                \$(\"#";
                // line 264
                echo twig_escape_filter($this->env, $this->env->getFilter('namespaceInputId')->getCallable()("propagationMethod"), "html", null, true);
                echo "\").on('change', function() {
                    if (\$(this).val() !== '";
                // line 265
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new RuntimeError('Variable "matrixField" does not exist.', 265, $this->source); })()), "propagationMethod", []), "html", null, true);
                echo "') {
                        if (!showingWarning) {
                            \$('<p/>', {'class': 'warning', text: \"";
                // line 267
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Applying this change to existing blocks can take some time.", "app"), "js"), "html", null, true);
                echo "\"})
                                .appendTo(\$(\"#";
                // line 268
                echo twig_escape_filter($this->env, $this->env->getFilter('namespaceInputId')->getCallable()("propagationMethod-field"), "html", null, true);
                echo "\"));
                            showingWarning = true;
                        }
                    } else if (showingWarning) {
                        \$(\"#";
                // line 272
                echo twig_escape_filter($this->env, $this->env->getFilter('namespaceInputId')->getCallable()("propagationMethod-field"), "html", null, true);
                echo " .warning\").remove();
                        showingWarning = false;
                    }
                });
            })();
        ";
                craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
                // line 278
                echo "    ";
            }
        }
        // line 280
        echo "
";
        // line 281
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Min Blocks", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The minimum number of blocks the field is allowed to have.", "app"), "id" => "minBlocks", "name" => "minBlocks", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 286
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new RuntimeError('Variable "matrixField" does not exist.', 286, $this->source); })()), "minBlocks", []), "size" => 3, "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 288
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new RuntimeError('Variable "matrixField" does not exist.', 288, $this->source); })()), "getErrors", [0 => "minBlocks"], "method")]], 281, $context, $this->getSourceContext());
        // line 289
        echo "

";
        // line 291
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Max Blocks", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The maximum number of blocks the field is allowed to have.", "app"), "id" => "maxBlocks", "name" => "maxBlocks", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 296
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new RuntimeError('Variable "matrixField" does not exist.', 296, $this->source); })()), "maxBlocks", []), "size" => 3, "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 298
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new RuntimeError('Variable "matrixField" does not exist.', 298, $this->source); })()), "getErrors", [0 => "maxBlocks"], "method")]], 291, $context, $this->getSourceContext());
        // line 299
        echo "
";
        craft\helpers\Template::endProfile("template", "_components/fieldtypes/Matrix/settings.twig");
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Matrix/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  704 => 299,  702 => 298,  701 => 296,  700 => 291,  696 => 289,  694 => 288,  693 => 286,  692 => 281,  689 => 280,  685 => 278,  676 => 272,  669 => 268,  665 => 267,  660 => 265,  656 => 264,  652 => 262,  649 => 261,  647 => 260,  644 => 259,  642 => 247,  639 => 257,  637 => 256,  636 => 255,  634 => 249,  632 => 245,  628 => 243,  626 => 240,  624 => 228,  622 => 227,  616 => 224,  615 => 223,  614 => 219,  608 => 216,  605 => 215,  599 => 211,  592 => 209,  583 => 206,  576 => 201,  557 => 199,  550 => 198,  543 => 193,  538 => 191,  536 => 189,  533 => 188,  529 => 186,  524 => 183,  522 => 182,  521 => 181,  520 => 177,  513 => 176,  511 => 175,  507 => 173,  505 => 170,  504 => 168,  503 => 167,  502 => 166,  501 => 165,  500 => 164,  499 => 159,  492 => 158,  489 => 157,  487 => 156,  483 => 154,  481 => 153,  480 => 152,  479 => 151,  478 => 148,  477 => 146,  472 => 143,  470 => 142,  469 => 138,  465 => 136,  463 => 135,  462 => 131,  457 => 128,  455 => 127,  454 => 126,  453 => 121,  449 => 119,  447 => 117,  446 => 116,  445 => 108,  441 => 106,  439 => 103,  438 => 102,  437 => 98,  434 => 97,  428 => 95,  426 => 94,  423 => 93,  417 => 91,  414 => 90,  403 => 191,  401 => 189,  398 => 188,  394 => 186,  389 => 183,  387 => 182,  386 => 181,  385 => 177,  378 => 176,  376 => 175,  372 => 173,  370 => 170,  369 => 168,  368 => 167,  367 => 166,  366 => 165,  365 => 164,  364 => 159,  357 => 158,  354 => 157,  352 => 156,  348 => 154,  346 => 153,  345 => 152,  344 => 151,  343 => 148,  342 => 146,  337 => 143,  335 => 142,  334 => 138,  330 => 136,  328 => 135,  327 => 131,  322 => 128,  320 => 127,  319 => 126,  318 => 121,  314 => 119,  312 => 117,  311 => 116,  310 => 108,  306 => 106,  304 => 103,  303 => 102,  302 => 98,  299 => 97,  293 => 95,  291 => 94,  288 => 93,  282 => 91,  279 => 90,  272 => 89,  267 => 88,  264 => 87,  260 => 86,  255 => 85,  251 => 84,  245 => 81,  234 => 74,  227 => 72,  216 => 69,  212 => 67,  210 => 66,  209 => 65,  207 => 63,  205 => 54,  204 => 53,  198 => 61,  193 => 59,  190 => 57,  188 => 56,  186 => 52,  176 => 50,  173 => 49,  170 => 48,  166 => 47,  161 => 46,  157 => 45,  151 => 42,  141 => 35,  138 => 34,  127 => 31,  121 => 30,  115 => 29,  105 => 28,  101 => 26,  99 => 25,  98 => 24,  96 => 22,  94 => 15,  92 => 21,  86 => 19,  84 => 18,  79 => 17,  77 => 14,  61 => 12,  57 => 11,  50 => 7,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}

{% set blockTypeInput %}
    <div class=\"mc-sidebar block-types\">
        <div class=\"mc-col-inner-container\">
            <div class=\"mc-col-heading\">
                <h5>{{ \"Block Types\"|t('app') }}</h5>
            </div>
            <div class=\"mc-col-items\">
                <div class=\"mc-blocktypes\">
                    {% for blockTypeId, blockType in blockTypes %}
                        <div class=\"matrixconfigitem mci-blocktype{% if blockType.hasFieldErrors %} error{% endif %}\" data-id=\"{{ blockTypeId }}\"{% if blockType.hasErrors() %} data-errors=\"{{ blockType.getErrors() | json_encode }}\"{% endif %}>
                            <div class=\"mci-name\">
                                {% tag 'h4' with {
                                    title: blockType.name,
                                } %}
                                    {{ blockType.name }}
                                    {% if blockType.hasFieldErrors %}
                                        <span data-icon=\"alert\" aria-label=\"{{ 'Error'|t('app') }}\"></span>
                                    {% endif %}
                                {% endtag %}
                                {{ tag('div', {
                                    class: ['smalltext', 'light', 'code'],
                                    text: blockType.handle,
                                    title: blockType.handle,
                                }) }}
                            </div>
                            <a class=\"settings icon{% if blockType.hasErrors() %} error{% endif %}\" title=\"{{ 'Settings'|t('app') }}\" aria-label=\"{{ 'Settings'|t('app') }}\" role=\"button\"></a>
                            <a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\" aria-label=\"{{ 'Reorder'|t('app') }}\" role=\"button\"></a>
                            <input class=\"hidden\" name=\"blockTypes[{{ blockTypeId }}][name]\" value=\"{{ blockType.name }}\">
                            <input class=\"hidden\" name=\"blockTypes[{{ blockTypeId }}][handle]\" value=\"{{ blockType.handle }}\">
                        </div>
                    {% endfor %}
                </div>
                <button type=\"button\" class=\"btn add icon\">{{ \"New block type\"|t('app') }}</button>
            </div>
        </div>
    </div>
    <div class=\"mc-sidebar mc-fields\">
        <div class=\"mc-col-inner-container hidden\">
            <div class=\"mc-col-heading\">
                <h5>{{ \"Fields\"|t('app') }}</h5>
            </div>
            <div class=\"mc-col-items\">
                {% for blockTypeId, blockType in blockTypes %}
                    <div data-id=\"{{ blockTypeId }}\" class=\"hidden\">
                        {% for fieldId, layoutElement in blockTypeFields[blockTypeId] %}
                            {% set field = layoutElement.getField() %}
                            {% set hasName = field.name and field.name != '__blank__' %}
                            <div class=\"matrixconfigitem mci-field{% if field.hasErrors() %} error{% endif %}\" data-id=\"{{ fieldId }}\">
                                <div class=\"mci-name\">
                                    {% tag 'h4' with {
                                        class: layoutElement.required ? 'mci-required' : null,
                                        title: hasName ? field.name : null,
                                    } %}
                                        {%- if hasName -%}
                                            {{ field.name }}
                                        {%- else -%}
                                            <em class=\"light\">{{ '(blank)'|t('app') }}</em>
                                        {%- endif -%}
                                        {%- if field.hasErrors() %} <span data-icon=\"alert\" aria-label=\"{{ 'Error'|t('app') }}\"></span>{% endif -%}
                                    {% endtag %}
                                    {{ tag('div', {
                                        class: ['smalltext', 'light', 'code'],
                                        text: field.handle,
                                        title: field.handle,
                                    }) }}
                                </div>
                                <a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\" aria-label=\"{{ 'Reorder'|t('app') }}\" role=\"button\"></a>
                            </div>
                        {% endfor %}
                    </div>
                {% endfor %}
                <button type=\"button\" class=\"btn add icon\">{{ \"New field\"|t('app') }}</button>
            </div>
        </div>
    </div>
    <div class=\"mc-field-settings\">
        <div class=\"mc-col-inner-container hidden\">
            <div class=\"mc-col-heading\">
                <h5>{{ \"Field Settings\"|t('app') }}</h5>
            </div>
            <div class=\"mc-col-items\">
                {% for blockTypeId, blockType in blockTypes %}
                    <div data-id=\"{{ blockTypeId }}\">
                        {% for fieldId, layoutElement in blockTypeFields[blockTypeId] %}
                            {% set field = layoutElement.getField() %}
                            <div data-id=\"{{ fieldId }}\" class=\"hidden\">
                                {% namespace 'blockTypes['~blockTypeId~'][fields]['~fieldId~']' %}
                                    {% if layoutElement.uid %}
                                        {{ hiddenInput('uid', layoutElement.uid) }}
                                    {% endif %}

                                    {% if field.columnSuffix %}
                                        {{ hiddenInput('columnSuffix', field.columnSuffix) }}
                                    {% endif %}

                                    {{ forms.textField({
                                        label: \"Name\"|t('app'),
                                        id: 'name',
                                        name: 'name',
                                        value: (field.name != '__blank__' ? field.name),
                                        errors: field.getErrors('name'),
                                        first: true,
                                        autofocus: true
                                    }) }}

                                    {{ forms.textField({
                                        label: \"Handle\"|t('app'),
                                        id: 'handle',
                                        name: 'handle',
                                        class: 'code',
                                        autocorrect: false,
                                        autocapitalize: false,
                                        maxlength: 64,
                                        value: field.handle,
                                        errors: field.getErrors('handle'),
                                        required: true,
                                    }) }}

                                    {{ forms.textareaField({
                                        label: \"Instructions\"|t('app'),
                                        id: 'instructions',
                                        class: 'nicetext',
                                        name: 'instructions',
                                        value: field.instructions,
                                        errors: field.getErrors('instructions'),
                                    }) }}

                                    <fieldset>
                                        {{ forms.checkboxField({
                                            label: \"This field is required\"|t('app'),
                                            id: 'required',
                                            name: 'required',
                                            checked: layoutElement.required
                                        }) }}

                                        {{ forms.checkboxField({
                                            label: 'Use this field’s values as search keywords'|t('app'),
                                            id: 'searchable',
                                            name: 'searchable',
                                            checked: field.searchable
                                        }) }}
                                    </fieldset>

                                    {{ forms.selectField({
                                        label: \"Field Type\"|t('app'),
                                        warning: (not field.getIsNew() and not field.hasErrors('type') ? \"Changing this may result in data loss.\"|t('app')),
                                        id: 'type',
                                        name: 'type',
                                        options: fieldId[0:3] != 'new' ? fieldTypes[fieldId] : fieldTypes.new,
                                        value: className(field),
                                        errors: field.getErrors('type') ?? null
                                    }) }}

                                    {% if craft.app.getIsMultiSite() %}
                                        {% set translationMethods = field.supportedTranslationMethods %}
                                        <div id=\"translation-settings\"{% if translationMethods|length < 2 %} class=\"hidden\"{% endif %}>
                                            {{ forms.selectField({
                                                label: \"Translation Method\"|t('app'),
                                                id: 'translation-method',
                                                name: 'translationMethod',
                                                options: [
                                                    'none' in translationMethods ? { value: 'none', label: \"Not translatable\"|t('app') },
                                                    'site' in translationMethods ? { value: 'site', label: \"Translate for each site\"|t('app') },
                                                    'siteGroup' in translationMethods ? { value: 'siteGroup', label: \"Translate for each site group\"|t('app') },
                                                    'language' in translationMethods ? { value: 'language', label: \"Translate for each language\"|t('app') },
                                                    'custom' in translationMethods ? { value: 'custom', label: \"Custom…\"|t('app') }
                                                ]|filter,
                                                value: field.translationMethod,
                                                toggle: true,
                                                targetPrefix: 'translation-method-'
                                            }) }}

                                            {% if 'custom' in translationMethods %}
                                                <div id=\"translation-method-custom\" {% if field.translationMethod != 'custom' %}class=\"hidden\"{% endif %}>
                                                    {{ forms.textField({
                                                        label: \"Translation Key Format\"|t('app'),
                                                        id: 'translation-key-format',
                                                        name: 'translationKeyFormat',
                                                        value: field.translationKeyFormat,
                                                        errors: field.getErrors('translationKeyFormat')
                                                    }) }}
                                                </div>
                                            {% endif %}
                                        </div>
                                    {% endif %}

                                    {{ hiddenInput('width', layoutElement.width, {
                                        id: 'width',
                                    }) }}
                                {% endnamespace %}

                                <hr>

                                <div class=\"mc-fieldtype-settings\">
                                    <div>
                                        {% namespace 'blockTypes['~blockTypeId~'][fields]['~fieldId~'][typesettings]' %}
                                            {{ field.getSettingsHtml()|raw  }}
                                        {% endnamespace %}
                                    </div>
                                </div>

                                <hr>

                                <a class=\"error delete\">{{ \"Delete\"|t('app') }}</a>
                            </div>
                        {% endfor %}
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endset %}

{{ hiddenInput('blockTypes', '') }}

<div id=\"matrix-configurator\" class=\"matrix-configurator\">
    {{ forms.field({
        label: \"Configuration\"|t('app'),
        instructions: \"Define the types of blocks that can be created within this Matrix field, as well as the fields each block type is made up of.\"|t('app'),
        name: 'config',
        errors: matrixField.getErrors('blockTypes'),
    }, blockTypeInput) }}
</div>

{% if craft.app.getIsMultiSite() %}
    {{ forms.selectField({
        label: 'Propagation Method'|t('app'),
        instructions: 'Which sites should blocks be saved to?'|t('app'),
        id: 'propagationMethod',
        name: 'propagationMethod',
        options: [
            { value: 'none', label: 'Only save blocks to the site they were created in'|t('app') },
            { value: 'siteGroup', label: 'Save blocks to other sites in the same site group'|t('app') },
            { value: 'language', label: 'Save blocks to other sites with the same language'|t('app') },
            { value: 'all', label: 'Save blocks to all sites the owner element is saved in'|t('app') },
            { value: 'custom', label: 'Custom…'|t('app') },
        ],
        value: matrixField.propagationMethod,
        toggle: true,
        targetPrefix: 'propagation-method-',
    }) }}

    {% tag 'div' with {
        id: 'propagation-method-custom',
        class: matrixField.propagationMethod != 'custom' ? 'hidden' : null,
    } %}
        {{ forms.textField({
            label: 'Propagation Key Format'|t('app'),
            instructions: 'Template that defines the field’s custom “propagation key” format. Blocks will be saved to all sites that produce the same key.'|t('app'),
            id: 'propagation-key-format',
            class: 'code',
            name: 'propagationKeyFormat',
            value: matrixField.propagationKeyFormat,
            errors: matrixField.getErrors('propagationKeyFormat'),
        }) }}
    {% endtag %}

    {% if matrixField.id and matrixField.propagationMethod != 'none' %}
        {% js %}
            (function() {
                var showingWarning = false;
                \$(\"#{{ 'propagationMethod'|namespaceInputId }}\").on('change', function() {
                    if (\$(this).val() !== '{{ matrixField.propagationMethod }}') {
                        if (!showingWarning) {
                            \$('<p/>', {'class': 'warning', text: \"{{ 'Applying this change to existing blocks can take some time.'|t('app')|e('js') }}\"})
                                .appendTo(\$(\"#{{ 'propagationMethod-field'|namespaceInputId }}\"));
                            showingWarning = true;
                        }
                    } else if (showingWarning) {
                        \$(\"#{{ 'propagationMethod-field'|namespaceInputId }} .warning\").remove();
                        showingWarning = false;
                    }
                });
            })();
        {% endjs %}
    {% endif %}
{% endif %}

{{ forms.textField({
    label: \"Min Blocks\"|t('app'),
    instructions: \"The minimum number of blocks the field is allowed to have.\"|t('app'),
    id: 'minBlocks',
    name: 'minBlocks',
    value: matrixField.minBlocks,
    size: 3,
    errors: matrixField.getErrors('minBlocks')
}) }}

{{ forms.textField({
    label: \"Max Blocks\"|t('app'),
    instructions: \"The maximum number of blocks the field is allowed to have.\"|t('app'),
    id: 'maxBlocks',
    name: 'maxBlocks',
    value: matrixField.maxBlocks,
    size: 3,
    errors: matrixField.getErrors('maxBlocks')
}) }}
", "_components/fieldtypes/Matrix/settings.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_components/fieldtypes/Matrix/settings.twig");
    }
}
