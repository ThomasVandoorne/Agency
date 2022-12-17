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

/* _components/widgets/CraftSupport/body.twig */
class __TwigTemplate_8a49b6133c320d2221859becf788ee1f35a588dcecd641858eda18f05294a26f extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_components/widgets/CraftSupport/body.twig");
        // line 1
        $macros["links"] = $this->macros["links"] = $this->loadTemplate("_includes/links", "_components/widgets/CraftSupport/body.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 11
        echo "
";
        // line 148
        echo "
";
        // line 149
        $macros["__internal_parse_0"] = $this->macros["__internal_parse_0"] = $this;
        // line 150
        echo "

<div class=\"cs-screen cs-screen-home\">
    <button type=\"button\" class=\"cs-opt\" data-screen=\"help\" aria-controls=\"cs-screen-help\" aria-expanded=\"false\">
        <div class=\"cs-opt-icon\">";
        // line 154
        echo $this->extensions['craft\web\twig\Extension']->attrFilter($this->extensions['craft\web\twig\Extension']->svgFunction((isset($context["buoeyIcon"]) || array_key_exists("buoeyIcon", $context) ? $context["buoeyIcon"] : (function () { throw new RuntimeError('Variable "buoeyIcon" does not exist.', 154, $this->source); })()), false), ["aria-hidden" => "true"]);
        echo "</div>
        <h2>";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Get help", "app"), "html", null, true);
        echo "</h2>
        <p>";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("How-to’s and other questions", "app"), "html", null, true);
        echo "</p>
    </button>
    <button type=\"button\" class=\"cs-opt\" data-screen=\"feedback\" aria-controls=\"cs-screen-feedback\" aria-expanded=\"false\">
        <div class=\"cs-opt-icon\">";
        // line 159
        echo $this->extensions['craft\web\twig\Extension']->attrFilter($this->extensions['craft\web\twig\Extension']->svgFunction((isset($context["bullhornIcon"]) || array_key_exists("bullhornIcon", $context) ? $context["bullhornIcon"] : (function () { throw new RuntimeError('Variable "bullhornIcon" does not exist.', 159, $this->source); })()), false), ["aria-hidden" => "true"]);
        echo "</div>
        <h2>";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Give feedback", "app"), "html", null, true);
        echo "</h2>
        <p>";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Bug reports and feature requests", "app"), "html", null, true);
        echo "</p>
    </button>
</div>

";
        // line 165
        echo twig_call_macro($macros["__internal_parse_0"], "macro_screen", [(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 165, $this->source); })()), (isset($context["showBackupOption"]) || array_key_exists("showBackupOption", $context) ? $context["showBackupOption"] : (function () { throw new RuntimeError('Variable "showBackupOption" does not exist.', 165, $this->source); })()), (isset($context["bundleUrl"]) || array_key_exists("bundleUrl", $context) ? $context["bundleUrl"] : (function () { throw new RuntimeError('Variable "bundleUrl" does not exist.', 165, $this->source); })()), "help", $this->extensions['craft\web\twig\Extension']->translateFilter("Briefly describe your question.", "app"), (isset($context["seIcon"]) || array_key_exists("seIcon", $context) ? $context["seIcon"] : (function () { throw new RuntimeError('Variable "seIcon" does not exist.', 165, $this->source); })()), $this->extensions['craft\web\twig\Extension']->translateFilter("Similar questions on Stack Exchange", "app"), "https://craftcms.stackexchange.com/questions/ask", $this->extensions['craft\web\twig\Extension']->translateFilter("Ask on Stack Exchange", "app")], 165, $context, $this->getSourceContext());
        echo "

";
        // line 167
        echo twig_call_macro($macros["__internal_parse_0"], "macro_screen", [(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 167, $this->source); })()), (isset($context["showBackupOption"]) || array_key_exists("showBackupOption", $context) ? $context["showBackupOption"] : (function () { throw new RuntimeError('Variable "showBackupOption" does not exist.', 167, $this->source); })()), (isset($context["bundleUrl"]) || array_key_exists("bundleUrl", $context) ? $context["bundleUrl"] : (function () { throw new RuntimeError('Variable "bundleUrl" does not exist.', 167, $this->source); })()), "feedback", $this->extensions['craft\web\twig\Extension']->translateFilter("Briefly describe your issue or idea.", "app"), (isset($context["ghIcon"]) || array_key_exists("ghIcon", $context) ? $context["ghIcon"] : (function () { throw new RuntimeError('Variable "ghIcon" does not exist.', 167, $this->source); })()), $this->extensions['craft\web\twig\Extension']->translateFilter("Similar issues on GitHub", "app"), "https://github.com/craftcms/cms/issues/new", $this->extensions['craft\web\twig\Extension']->translateFilter("Post on GitHub", "app")], 167, $context, $this->getSourceContext());
        echo "
";
        craft\helpers\Template::endProfile("template", "_components/widgets/CraftSupport/body.twig");
    }

    // line 3
    public function macro_resourceLink($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "resourceLink");
            // line 4
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 4, $this->source); })()), "link", []), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener\">
        <h4 class=\"cs-resource-heading\">
            <img class=\"cs-logo-image\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 6, $this->source); })()), "bundleUrl", []), "html", null, true);
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 6, $this->source); })()), "iconPath", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 6, $this->source); })()), "title", []), "html", null, true);
            echo "\">
        </h4>
        <p>";
            // line 8
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 8, $this->source); })()), "description", []), "html", null, true);
            echo " ";
            echo twig_call_macro($macros["links"], "macro_externalLinkIcon", [], 8, $context, $this->getSourceContext());
            echo "</p>
    </a>
";
            craft\helpers\Template::endProfile("macro", "resourceLink");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 12
    public function macro_screen($__widget__ = null, $__showBackupOption__ = null, $__bundleUrl__ = null, $__screen__ = null, $__placeholder__ = null, $__resultsIcon__ = null, $__resultsHeading__ = null, $__formAction__ = null, $__submitText__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "widget" => $__widget__,
            "showBackupOption" => $__showBackupOption__,
            "bundleUrl" => $__bundleUrl__,
            "screen" => $__screen__,
            "placeholder" => $__placeholder__,
            "resultsIcon" => $__resultsIcon__,
            "resultsHeading" => $__resultsHeading__,
            "formAction" => $__formAction__,
            "submitText" => $__submitText__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "screen");
            // line 13
            echo "    ";
            $macros["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/CraftSupport/body.twig", 13)->unwrap();
            // line 14
            echo "    ";
            $context["idPrefix"] = (("cs-" . (isset($context["screen"]) || array_key_exists("screen", $context) ? $context["screen"] : (function () { throw new RuntimeError('Variable "screen" does not exist.', 14, $this->source); })())) . twig_random($this->env));
            // line 15
            echo "
    <div id=\"cs-screen-";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["screen"]) || array_key_exists("screen", $context) ? $context["screen"] : (function () { throw new RuntimeError('Variable "screen" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\" class=\"cs-screen cs-screen-2 cs-screen-";
            echo twig_escape_filter($this->env, (isset($context["screen"]) || array_key_exists("screen", $context) ? $context["screen"] : (function () { throw new RuntimeError('Variable "screen" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\" method=\"get\" target=\"_blank\" rel=\"noopener\">
        ";
            // line 17
            echo $this->extensions['craft\web\twig\Extension']->tagFunction("h2", ["text" =>             // line 18
(isset($context["submitText"]) || array_key_exists("submitText", $context) ? $context["submitText"] : (function () { throw new RuntimeError('Variable "submitText" does not exist.', 18, $this->source); })())]);
            // line 19
            echo "
        ";
            // line 20
            echo twig_call_macro($macros["forms"], "macro_textareaField", [["first" => true, "class" => "cs-body-text", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter(            // line 23
(isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 23, $this->source); })()), "app"), "rows" => 5]], 20, $context, $this->getSourceContext());
            // line 25
            echo "
        <div class=\"cs-search-results-container hidden\">
            <div class=\"cs-search-icon\">";
            // line 27
            echo $this->extensions['craft\web\twig\Extension']->svgFunction((isset($context["resultsIcon"]) || array_key_exists("resultsIcon", $context) ? $context["resultsIcon"] : (function () { throw new RuntimeError('Variable "resultsIcon" does not exist.', 27, $this->source); })()), false);
            echo "</div>
            <h2>";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["resultsHeading"]) || array_key_exists("resultsHeading", $context) ? $context["resultsHeading"] : (function () { throw new RuntimeError('Variable "resultsHeading" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "</h2>
            <ul class=\"cs-search-results\"></ul>
        </div>
        <div class=\"cs-forms\">
            <form class=\"cs-search-form\" action=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "\" method=\"get\" target=\"_blank\" rel=\"noopener\">
                <div class=\"cs-search-params\"></div>
                ";
            // line 34
            ob_start();
            // line 35
            echo "                    <button type=\"submit\" class=\"btn submit fullwidth disabled\">";
            echo twig_escape_filter($this->env, (isset($context["submitText"]) || array_key_exists("submitText", $context) ? $context["submitText"] : (function () { throw new RuntimeError('Variable "submitText" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "</button>
                    ";
            // line 36
            if (((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new RuntimeError('Variable "CraftEdition" does not exist.', 36, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new RuntimeError('Variable "CraftPro" does not exist.', 36, $this->source); })()))) {
                // line 37
                echo "                        <p>";
                echo $this->extensions['craft\web\twig\Extension']->translateFilter("or <a>send to Developer Support</a>", "app");
                echo "</p>
                    ";
            }
            // line 39
            echo "                    ";
            echo $this->extensions['craft\web\twig\Extension']->tagFunction("button", ["class" => "btn fullwidth cancel", "type" => "button", "text" => $this->extensions['craft\web\twig\Extension']->translateFilter("Cancel", "app")]);
            // line 43
            echo "
                ";
            echo craft\helpers\Html::tag("div", ob_get_clean(), ["class" => "cs-button-wrapper"]);
            // line 45
            echo "                <hr>
                <h3 class=\"cs-more-resources-heading\">";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("More Resources", "app"), "html", null, true);
            echo "</h3>
                <div class=\"cs-logo-resources\">
                    ";
            // line 48
            echo twig_call_macro($macros["_self"], "macro_resourceLink", [["link" => "https://craftcms.com/partners", "iconPath" => "/logos/craft-partners.svg", "title" => "Craft Partners", "description" => $this->extensions['craft\web\twig\Extension']->translateFilter("Find an official Craft Partner", "app"), "bundleUrl" =>             // line 53
(isset($context["bundleUrl"]) || array_key_exists("bundleUrl", $context) ? $context["bundleUrl"] : (function () { throw new RuntimeError('Variable "bundleUrl" does not exist.', 53, $this->source); })())]], 48, $context, $this->getSourceContext());
            // line 54
            echo "
                    ";
            // line 55
            echo twig_call_macro($macros["_self"], "macro_resourceLink", [["link" => "https://craftcms.com/discord", "iconPath" => "/logos/discord.svg", "title" => "Discord", "description" => $this->extensions['craft\web\twig\Extension']->translateFilter("Meet the Craft community", "app"), "bundleUrl" =>             // line 60
(isset($context["bundleUrl"]) || array_key_exists("bundleUrl", $context) ? $context["bundleUrl"] : (function () { throw new RuntimeError('Variable "bundleUrl" does not exist.', 60, $this->source); })())]], 55, $context, $this->getSourceContext());
            // line 61
            echo "
                    ";
            // line 62
            echo twig_call_macro($macros["_self"], "macro_resourceLink", [["link" => "https://craftquest.io", "iconPath" => "/logos/craftquest.svg", "title" => "CraftQuest", "description" => $this->extensions['craft\web\twig\Extension']->translateFilter("Unlimited video training", "app"), "bundleUrl" =>             // line 67
(isset($context["bundleUrl"]) || array_key_exists("bundleUrl", $context) ? $context["bundleUrl"] : (function () { throw new RuntimeError('Variable "bundleUrl" does not exist.', 67, $this->source); })())]], 62, $context, $this->getSourceContext());
            // line 68
            echo "
                </div>
                <div class=\"cs-icon-resources\">
                    ";
            // line 71
            ob_start();
            // line 72
            echo "                        ";
            echo $this->extensions['craft\web\twig\Extension']->attrFilter($this->extensions['craft\web\twig\Extension']->svgFunction("@appicons/book.svg"), ["aria-hidden" => "true"]);
            echo "
                        <span>";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Documentation", "app"), "html", null, true);
            echo "</span>
                    ";
            $context["documentationLinkHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 75
            echo "                    ";
            ob_start();
            // line 76
            echo "                        ";
            echo $this->extensions['craft\web\twig\Extension']->attrFilter($this->extensions['craft\web\twig\Extension']->svgFunction("@appicons/magnifying-glass.svg", null, true), ["aria-hidden" => "true"]);
            echo "
                        <span>";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Knowledge Base", "app"), "html", null, true);
            echo "</span>
                    ";
            $context["knowledgeBaseLinkHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 79
            echo "                    ";
            echo twig_call_macro($macros["links"], "macro_externalLink", [["link" => "https://craftcms.com/docs/4.x/", "text" =>             // line 81
(isset($context["documentationLinkHtml"]) || array_key_exists("documentationLinkHtml", $context) ? $context["documentationLinkHtml"] : (function () { throw new RuntimeError('Variable "documentationLinkHtml" does not exist.', 81, $this->source); })())]], 79, $context, $this->getSourceContext());
            // line 82
            echo "
                    ";
            // line 83
            echo twig_call_macro($macros["links"], "macro_externalLink", [["link" => "https://craftcms.com/knowledge-base", "text" =>             // line 85
(isset($context["knowledgeBaseLinkHtml"]) || array_key_exists("knowledgeBaseLinkHtml", $context) ? $context["knowledgeBaseLinkHtml"] : (function () { throw new RuntimeError('Variable "knowledgeBaseLinkHtml" does not exist.', 85, $this->source); })())]], 83, $context, $this->getSourceContext());
            // line 86
            echo "
                </div>
            </form>
            <form class=\"cs-support-form hidden\" action=\"";
            // line 89
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::actionUrl("dashboard/send-support-request"), "html", null, true);
            echo "\" method=\"post\" target=\"";
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new RuntimeError('Variable "idPrefix" does not exist.', 89, $this->source); })()), "html", null, true);
            echo "-iframe\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
                ";
            // line 90
            echo craft\helpers\Html::csrfInput();
            echo "
                ";
            // line 91
            echo craft\helpers\Html::hiddenInput("widgetId", craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 91, $this->source); })()), "id", []));
            echo "
                ";
            // line 92
            echo craft\helpers\Html::hiddenInput("message", "", ["class" => "cs-support-message"]);
            echo "

                ";
            // line 94
            $context["email"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 94, $this->source); })()), "email", []);
            // line 95
            echo "                ";
            if (twig_in_filter((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 95, $this->source); })()), [0 => "support@pixelandtonic.com", 1 => "support@craftcms.com"])) {
                // line 96
                echo "                    ";
                $context["email"] = "";
                // line 97
                echo "                ";
            }
            // line 98
            echo "
                ";
            // line 99
            echo twig_call_macro($macros["forms"], "macro_textField", [["first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Your Email", "app"), "name" => "fromEmail", "value" =>             // line 103
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 103, $this->source); })())]], 99, $context, $this->getSourceContext());
            // line 104
            echo "

                <a class=\"fieldtoggle\" data-target=\"";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new RuntimeError('Variable "idPrefix" does not exist.', 106, $this->source); })()), "html", null, true);
            echo "-support-more\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("More", "app"), "html", null, true);
            echo "</a>

                <div id=\"";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new RuntimeError('Variable "idPrefix" does not exist.', 108, $this->source); })()), "html", null, true);
            echo "-support-more\" class=\"cs-support-more hidden\">
                    <fieldset>
                        ";
            // line 110
            echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Attach error logs", "app"), "name" => "attachLogs", "checked" => true]], 110, $context, $this->getSourceContext());
            // line 114
            echo "

                        ";
            // line 116
            if ((isset($context["showBackupOption"]) || array_key_exists("showBackupOption", $context) ? $context["showBackupOption"] : (function () { throw new RuntimeError('Variable "showBackupOption" does not exist.', 116, $this->source); })())) {
                // line 117
                echo "                            ";
                echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Attach a database backup", "app"), "name" => "attachDbBackup", "checked" => true]], 117, $context, $this->getSourceContext());
                // line 121
                echo "
                        ";
            }
            // line 123
            echo "
                        ";
            // line 124
            echo twig_call_macro($macros["forms"], "macro_checkboxField", [["name" => "attachTemplates", "checked" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Include your template files", "app")]], 124, $context, $this->getSourceContext());
            // line 128
            echo "
                    </fieldset>

                    ";
            // line 131
            echo twig_call_macro($macros["forms"], "macro_fileField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Attach an additional file", "app"), "class" => "cs-support-attachment", "name" => "attachAdditionalFile"]], 131, $context, $this->getSourceContext());
            // line 135
            echo "
                </div>

                ";
            // line 138
            echo twig_call_macro($macros["forms"], "macro_submitButton", [["class" => [0 => "fullwidth", 1 => "disabled"], "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Send", "app"), "spinner" => true]], 138, $context, $this->getSourceContext());
            // line 142
            echo "
            </form>
        </div>
        <iframe id=\"";
            // line 145
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new RuntimeError('Variable "idPrefix" does not exist.', 145, $this->source); })()), "html", null, true);
            echo "-iframe\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new RuntimeError('Variable "idPrefix" does not exist.', 145, $this->source); })()), "html", null, true);
            echo "-iframe\" class=\"hidden\"></iframe>
    </div>
";
            craft\helpers\Template::endProfile("macro", "screen");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_components/widgets/CraftSupport/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 145,  386 => 142,  384 => 138,  379 => 135,  377 => 131,  372 => 128,  370 => 124,  367 => 123,  363 => 121,  360 => 117,  358 => 116,  354 => 114,  352 => 110,  347 => 108,  340 => 106,  336 => 104,  334 => 103,  333 => 99,  330 => 98,  327 => 97,  324 => 96,  321 => 95,  319 => 94,  314 => 92,  310 => 91,  306 => 90,  300 => 89,  295 => 86,  293 => 85,  292 => 83,  289 => 82,  287 => 81,  285 => 79,  280 => 77,  275 => 76,  272 => 75,  267 => 73,  262 => 72,  260 => 71,  255 => 68,  253 => 67,  252 => 62,  249 => 61,  247 => 60,  246 => 55,  243 => 54,  241 => 53,  240 => 48,  235 => 46,  232 => 45,  228 => 43,  225 => 39,  219 => 37,  217 => 36,  212 => 35,  210 => 34,  205 => 32,  198 => 28,  194 => 27,  190 => 25,  188 => 23,  187 => 20,  184 => 19,  182 => 18,  181 => 17,  173 => 16,  170 => 15,  167 => 14,  164 => 13,  142 => 12,  127 => 8,  119 => 6,  113 => 4,  99 => 3,  92 => 167,  87 => 165,  80 => 161,  76 => 160,  72 => 159,  66 => 156,  62 => 155,  58 => 154,  52 => 150,  50 => 149,  47 => 148,  44 => 11,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/links\" as links %}

{% macro resourceLink(config) %}
    <a href=\"{{ config.link }}\" target=\"_blank\" rel=\"noopener\">
        <h4 class=\"cs-resource-heading\">
            <img class=\"cs-logo-image\" src=\"{{ config.bundleUrl }}{{ config.iconPath }}\" alt=\"{{ config.title }}\">
        </h4>
        <p>{{ config.description }} {{ links.externalLinkIcon() }}</p>
    </a>
{% endmacro %}

{% macro screen(widget, showBackupOption, bundleUrl, screen, placeholder, resultsIcon, resultsHeading, formAction, submitText) %}
    {% import \"_includes/forms\" as forms %}
    {% set idPrefix = 'cs-'~screen~random() %}

    <div id=\"cs-screen-{{ screen }}\" class=\"cs-screen cs-screen-2 cs-screen-{{ screen }}\" action=\"{{ formAction }}\" method=\"get\" target=\"_blank\" rel=\"noopener\">
        {{ tag('h2', {
            text: submitText,
        }) }}
        {{ forms.textareaField({
            first: true,
            class: 'cs-body-text',
            label: placeholder|t('app'),
            rows: 5
        }) }}
        <div class=\"cs-search-results-container hidden\">
            <div class=\"cs-search-icon\">{{ svg(resultsIcon, sanitize=false) }}</div>
            <h2>{{ resultsHeading }}</h2>
            <ul class=\"cs-search-results\"></ul>
        </div>
        <div class=\"cs-forms\">
            <form class=\"cs-search-form\" action=\"{{ formAction }}\" method=\"get\" target=\"_blank\" rel=\"noopener\">
                <div class=\"cs-search-params\"></div>
                {% tag 'div' with { class: 'cs-button-wrapper' }%}
                    <button type=\"submit\" class=\"btn submit fullwidth disabled\">{{ submitText }}</button>
                    {% if CraftEdition == CraftPro %}
                        <p>{{ \"or <a>send to Developer Support</a>\"|t('app')|raw }}</p>
                    {% endif %}
                    {{ tag('button', {
                        class: 'btn fullwidth cancel',
                        type: 'button',
                        text: 'Cancel'|t('app'),
                    }) }}
                {% endtag %}
                <hr>
                <h3 class=\"cs-more-resources-heading\">{{ 'More Resources'|t('app') }}</h3>
                <div class=\"cs-logo-resources\">
                    {{ _self.resourceLink({
                        link: 'https://craftcms.com/partners',
                        iconPath: '/logos/craft-partners.svg',
                        title: 'Craft Partners',
                        description: 'Find an official Craft Partner'|t('app'),
                        bundleUrl: bundleUrl,
                    }) }}
                    {{ _self.resourceLink({
                        link: 'https://craftcms.com/discord',
                        iconPath: '/logos/discord.svg',
                        title: 'Discord',
                        description: 'Meet the Craft community'|t('app'),
                        bundleUrl: bundleUrl,
                    }) }}
                    {{ _self.resourceLink({
                        link: 'https://craftquest.io',
                        iconPath: '/logos/craftquest.svg',
                        title: 'CraftQuest',
                        description: 'Unlimited video training'|t('app'),
                        bundleUrl: bundleUrl,
                    }) }}
                </div>
                <div class=\"cs-icon-resources\">
                    {% set documentationLinkHtml %}
                        {{ svg('@appicons/book.svg')|attr({ 'aria-hidden': 'true' }) }}
                        <span>{{ 'Documentation'|t('app') }}</span>
                    {% endset %}
                    {% set knowledgeBaseLinkHtml %}
                        {{ svg('@appicons/magnifying-glass.svg', namespace=true)|attr({ 'aria-hidden': 'true' }) }}
                        <span>{{ 'Knowledge Base'|t('app') }}</span>
                    {% endset %}
                    {{ links.externalLink({
                        link: 'https://craftcms.com/docs/4.x/',
                        text: documentationLinkHtml
                    }) }}
                    {{ links.externalLink({
                        link: 'https://craftcms.com/knowledge-base',
                        text: knowledgeBaseLinkHtml
                    }) }}
                </div>
            </form>
            <form class=\"cs-support-form hidden\" action=\"{{ actionUrl('dashboard/send-support-request') }}\" method=\"post\" target=\"{{ idPrefix }}-iframe\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
                {{ csrfInput() }}
                {{ hiddenInput('widgetId', widget.id) }}
                {{ hiddenInput('message', '', {class: 'cs-support-message'}) }}

                {% set email = currentUser.email %}
                {% if email in ['support@pixelandtonic.com', 'support@craftcms.com'] %}
                    {% set email = '' %}
                {% endif %}

                {{ forms.textField({
                    first: true,
                    label: \"Your Email\"|t('app'),
                    name: 'fromEmail',
                    value: email
                }) }}

                <a class=\"fieldtoggle\" data-target=\"{{ idPrefix }}-support-more\">{{ \"More\"|t('app') }}</a>

                <div id=\"{{ idPrefix }}-support-more\" class=\"cs-support-more hidden\">
                    <fieldset>
                        {{ forms.checkboxField({
                            label: 'Attach error logs'|t('app'),
                            name: 'attachLogs',
                            checked: true
                        }) }}

                        {% if showBackupOption %}
                            {{ forms.checkboxField({
                                label: 'Attach a database backup'|t('app'),
                                name: 'attachDbBackup',
                                checked: true
                            }) }}
                        {% endif %}

                        {{ forms.checkboxField({
                            name: 'attachTemplates',
                            checked: true,
                            label: 'Include your template files'|t('app'),
                        }) }}
                    </fieldset>

                    {{ forms.fileField({
                        label: 'Attach an additional file'|t('app'),
                        class: 'cs-support-attachment',
                        name: 'attachAdditionalFile',
                    }) }}
                </div>

                {{ forms.submitButton({
                    class: ['fullwidth', 'disabled'],
                    label: 'Send'|t('app'),
                    spinner: true,
                }) }}
            </form>
        </div>
        <iframe id=\"{{ idPrefix }}-iframe\" name=\"{{ idPrefix }}-iframe\" class=\"hidden\"></iframe>
    </div>
{% endmacro %}

{% from _self import screen %}


<div class=\"cs-screen cs-screen-home\">
    <button type=\"button\" class=\"cs-opt\" data-screen=\"help\" aria-controls=\"cs-screen-help\" aria-expanded=\"false\">
        <div class=\"cs-opt-icon\">{{ svg(buoeyIcon, sanitize=false)|attr({ 'aria-hidden': 'true' }) }}</div>
        <h2>{{ \"Get help\"|t('app') }}</h2>
        <p>{{ \"How-to’s and other questions\"|t('app') }}</p>
    </button>
    <button type=\"button\" class=\"cs-opt\" data-screen=\"feedback\" aria-controls=\"cs-screen-feedback\" aria-expanded=\"false\">
        <div class=\"cs-opt-icon\">{{ svg(bullhornIcon, sanitize=false)|attr({ 'aria-hidden': 'true' }) }}</div>
        <h2>{{ \"Give feedback\"|t('app') }}</h2>
        <p>{{ \"Bug reports and feature requests\"|t('app') }}</p>
    </button>
</div>

{{ screen(widget, showBackupOption, bundleUrl, 'help', \"Briefly describe your question.\"|t('app'), seIcon, \"Similar questions on Stack Exchange\"|t('app'), 'https://craftcms.stackexchange.com/questions/ask', \"Ask on Stack Exchange\"|t('app')) }}

{{ screen(widget, showBackupOption, bundleUrl, 'feedback', \"Briefly describe your issue or idea.\"|t('app'), ghIcon, \"Similar issues on GitHub\"|t('app'), 'https://github.com/craftcms/cms/issues/new', \"Post on GitHub\"|t('app')) }}
", "_components/widgets/CraftSupport/body.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_components/widgets/CraftSupport/body.twig");
    }
}
