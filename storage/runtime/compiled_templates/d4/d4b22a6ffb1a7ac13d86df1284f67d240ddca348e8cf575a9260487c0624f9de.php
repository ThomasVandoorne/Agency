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

/* _layouts/cp */
class __TwigTemplate_77b400ea0fcddbbea8d15874f4f1dcd5f8d12539b145e7d3ae125a217265040b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'mainFormAttributes' => [$this, 'block_mainFormAttributes'],
            'header' => [$this, 'block_header'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'main' => [$this, 'block_main'],
            'content' => [$this, 'block_content'],
            'actionButton' => [$this, 'block_actionButton'],
            'submitButton' => [$this, 'block_submitButton'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 42
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_layouts/cp");
        // line 45
        $context["queue"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 45, $this->source); })()), "app", []), "queue", []);
        // line 46
        ob_start();
        // line 47
        echo "    ";
        if ($this->env->getTest('instance of')->getCallable()((isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new RuntimeError('Variable "queue" does not exist.', 47, $this->source); })()), "craft\\queue\\QueueInterface")) {
            // line 48
            echo "        Craft.cp.setJobInfo(";
            echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new RuntimeError('Variable "queue" does not exist.', 48, $this->source); })()), "getJobInfo", [0 => 100], "method"));
            echo ", false);
        ";
            // line 49
            if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new RuntimeError('Variable "queue" does not exist.', 49, $this->source); })()), "getHasReservedJobs", [], "method")) {
                // line 50
                echo "            Craft.cp.trackJobProgress(true);
        ";
            } elseif (craft\helpers\Template::attribute($this->env, $this->source,             // line 51
(isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new RuntimeError('Variable "queue" does not exist.', 51, $this->source); })()), "getHasWaitingJobs", [], "method")) {
                // line 52
                echo "            Craft.cp.runQueue();
        ";
            }
            // line 54
            echo "    ";
        } else {
            // line 55
            echo "        Craft.cp.enableQueue = false;
    ";
        }
        craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        // line 59
        $context["hasSystemIcon"] = (((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new RuntimeError('Variable "CraftEdition" does not exist.', 59, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new RuntimeError('Variable "CraftPro" does not exist.', 59, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 59, $this->source); })()), "rebrand", []), "isIconUploaded", []));
        // line 60
        $context["fullPageForm"] = (array_key_exists("fullPageForm", $context) && (isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new RuntimeError('Variable "fullPageForm" does not exist.', 60, $this->source); })()));
        // line 62
        $context["editionName"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 62, $this->source); })()), "app", []), "getEditionName", [], "method");
        // line 63
        $context["canUpgradeEdition"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 63, $this->source); })()), "app", []), "getCanUpgradeEdition", [], "method");
        // line 64
        $context["licensedEdition"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 64, $this->source); })()), "app", []), "getLicensedEdition", [], "method");
        // line 65
        $context["isTrial"] = ( !((isset($context["licensedEdition"]) || array_key_exists("licensedEdition", $context) ? $context["licensedEdition"] : (function () { throw new RuntimeError('Variable "licensedEdition" does not exist.', 65, $this->source); })()) === null) &&  !((isset($context["licensedEdition"]) || array_key_exists("licensedEdition", $context) ? $context["licensedEdition"] : (function () { throw new RuntimeError('Variable "licensedEdition" does not exist.', 65, $this->source); })()) === (isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new RuntimeError('Variable "CraftEdition" does not exist.', 65, $this->source); })())));
        // line 67
        $context["contentNotice"] = twig_trim_filter((($context["contentNotice"]) ?? (((        $this->hasBlock("contentNotice", $context, $blocks)) ? (        $this->renderBlock("contentNotice", $context, $blocks)) : ("")))));
        // line 68
        $context["sidebar"] = twig_trim_filter((($context["sidebar"]) ?? (((        $this->hasBlock("sidebar", $context, $blocks)) ? (        $this->renderBlock("sidebar", $context, $blocks)) : ("")))));
        // line 69
        $context["contextMenu"] = twig_trim_filter((($context["contextMenu"]) ?? (((        $this->hasBlock("contextMenu", $context, $blocks)) ? (        $this->renderBlock("contextMenu", $context, $blocks)) : ("")))));
        // line 70
        $context["toolbar"] = twig_trim_filter((($context["toolbar"]) ?? (((        $this->hasBlock("toolbar", $context, $blocks)) ? (        $this->renderBlock("toolbar", $context, $blocks)) : ("")))));
        // line 71
        $context["actionButton"] = twig_trim_filter(((        $this->hasBlock("actionButton", $context, $blocks)) ? (        $this->renderBlock("actionButton", $context, $blocks)) : ("")));
        // line 72
        $context["additionalButtons"] = (($context["additionalButtons"]) ?? (null));
        // line 73
        $context["details"] = twig_trim_filter((($context["details"]) ?? (((        $this->hasBlock("details", $context, $blocks)) ? (        $this->renderBlock("details", $context, $blocks)) : ("")))));
        // line 74
        $context["footer"] = twig_trim_filter((($context["footer"]) ?? (((        $this->hasBlock("footer", $context, $blocks)) ? (        $this->renderBlock("footer", $context, $blocks)) : ("")))));
        // line 75
        $context["crumbs"] = (($context["crumbs"]) ?? (null));
        // line 76
        $context["tabs"] = ((($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (($context["tabs"]) ?? ([]))) > 1)) ? ((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 76, $this->source); })())) : (null));
        // line 78
        $context["mainContentClasses"] = $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => ((        // line 79
(isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new RuntimeError('Variable "sidebar" does not exist.', 79, $this->source); })())) ? ("has-sidebar") : ("")), 1 => ((        // line 80
(isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 80, $this->source); })())) ? ("has-details") : (""))]);
        // line 83
        $context["bodyClass"] = craft\helpers\Html::explodeClass((($context["bodyClass"]) ?? ([])));
        // line 84
        $context["showHeader"] = (($context["showHeader"]) ?? (true));
        // line 85
        if ( !(isset($context["showHeader"]) || array_key_exists("showHeader", $context) ? $context["showHeader"] : (function () { throw new RuntimeError('Variable "showHeader" does not exist.', 85, $this->source); })())) {
            // line 86
            $context["bodyClass"] = $this->extensions['craft\web\twig\Extension']->pushFilter((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new RuntimeError('Variable "bodyClass" does not exist.', 86, $this->source); })()), "no-header");
        }
        // line 88
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 88, $this->source); })()), "app", []), "hasModule", [0 => "debug"], "method")) {
            // line 89
            $context["bodyClass"] = $this->extensions['craft\web\twig\Extension']->pushFilter((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new RuntimeError('Variable "bodyClass" does not exist.', 89, $this->source); })()), "has-debug-toolbar");
        }
        // line 92
        $context["mainAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["id" => "main", "role" => "main"], ((        // line 95
$context["mainAttributes"]) ?? ([])));
        // line 97
        $context["formActions"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 97, $this->source); })()), "cp", []), "prepFormActions", [0 => (($context["formActions"]) ?? (null))], "method");
        // line 99
        $context["mainFormAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["id" => "main-form", "method" => "post", "accept-charset" => "UTF-8", "novalidate" => true, "data" => ["saveshortcut" => ((        // line 105
$context["saveShortcut"]) ?? (true)), "saveshortcut-redirect" => ((((        // line 106
$context["saveShortcutRedirect"]) ?? (false))) ? ($this->env->getFilter('hash')->getCallable()((isset($context["saveShortcutRedirect"]) || array_key_exists("saveShortcutRedirect", $context) ? $context["saveShortcutRedirect"] : (function () { throw new RuntimeError('Variable "saveShortcutRedirect" does not exist.', 106, $this->source); })()))) : (false)), "saveshortcut-scroll" => ((        // line 107
$context["retainScrollOnSaveShortcut"]) ?? (false)), "actions" => ((        // line 108
$context["formActions"]) ?? (false)), "confirm-unload" => true, "delta" => craft\helpers\Template::attribute($this->env, $this->source,         // line 110
(isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 110, $this->source); })()), "getIsDeltaRegistrationActive", [], "method"), "delta-names" => craft\helpers\Template::attribute($this->env, $this->source,         // line 111
(isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 111, $this->source); })()), "getDeltaNames", [], "method"), "initial-delta-values" => craft\helpers\Template::attribute($this->env, $this->source,         // line 112
(isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 112, $this->source); })()), "getInitialDeltaValues", [], "method"), "modified-delta-names" => (((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source,         // line 113
($context["craft"] ?? null), "app", [], "any", false, true), "request", [], "any", false, true), "getBodyParam", [0 => "modifiedDeltaNames"], "method", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, ($context["craft"] ?? null), "app", [], "any", false, true), "request", [], "any", false, true), "getBodyParam", [0 => "modifiedDeltaNames"], "method")))) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, ($context["craft"] ?? null), "app", [], "any", false, true), "request", [], "any", false, true), "getBodyParam", [0 => "modifiedDeltaNames"], "method")) : ([]))]], ((        // line 115
$context["mainFormAttributes"]) ?? ([])), true);
        // line 117
        ob_start();
        // line 118
        echo "    <div class=\"header-photo\">
        ";
        // line 119
        echo $this->extensions['craft\web\twig\Extension']->tagFunction("img", ["width" => 30, "height" => 30, "sizes" => "30px", "srcset" => (((craft\helpers\Template::attribute($this->env, $this->source,         // line 123
(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 123, $this->source); })()), "getThumbUrl", [0 => 30], "method") . " 30w, ") . craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 123, $this->source); })()), "getThumbUrl", [0 => 60], "method")) . " 60w"), "alt" => craft\helpers\Template::attribute($this->env, $this->source,         // line 124
(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 124, $this->source); })()), "getThumbAlt", [], "method")]);
        // line 125
        echo "
    </div>
";
        $context["userPhoto"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        ob_start();
        // line 130
        echo "    // Remove the hash so the browser doesn't scroll to it
    window.LOCATION_HASH = document.location.hash ? decodeURIComponent(document.location.hash.substr(1)) : null;
    history.replaceState(undefined, undefined, window.location.href.match(/^[^#]*/)[0]);
";
        craft\helpers\Template::js(ob_get_clean(), ['position' => 1]);
        // line 344
        if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 344, $this->source); })()), "can", [0 => "performUpdates"], "method") &&  !craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 344, $this->source); })()), "app", []), "updates", []), "getIsUpdateInfoCached", [], "method"))) {
            // line 345
            ob_start();
            // line 346
            echo "        Craft.cp.checkForUpdates();
    ";
            craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        }
        // line 42
        $this->parent = $this->loadTemplate("_layouts/basecp", "_layouts/cp", 42);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_layouts/cp");
    }

    // line 135
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "body");
        // line 136
        echo "    ";
        echo $this->extensions['craft\web\twig\Extension']->tagFunction("a", ["id" => "global-skip-link", "text" => $this->extensions['craft\web\twig\Extension']->translateFilter("Skip to content", "app"), "href" => "#main", "class" => "skip-link btn"]);
        // line 141
        echo "

    <div id=\"global-container\">
        ";
        // line 144
        $this->loadTemplate("_layouts/components/global-sidebar", "_layouts/cp", 144)->display($context);
        // line 145
        echo "
        <div id=\"page-container\">
            ";
        // line 147
        $this->loadTemplate("_layouts/components/alerts", "_layouts/cp", 147)->display($context);
        // line 148
        echo "
            <div id=\"global-header\" role=\"region\" aria-label=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("My Account", "app"), "html", null, true);
        echo "\">
                <div class=\"flex\">
                    ";
        // line 151
        $this->loadTemplate("_layouts/components/crumbs", "_layouts/cp", 151)->display($context);
        // line 152
        echo "                    <div class=\"flex-grow\"></div>
                    <button type=\"button\" id=\"announcements-btn\" class=\"btn hidden\" aria-label=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("What’s New", "app"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("What’s New", "app"), "html", null, true);
        echo "\">
                        ";
        // line 154
        echo $this->extensions['craft\web\twig\Extension']->svgFunction("@app/icons/gift.svg");
        echo "
                    </button>

                    ";
        // line 158
        echo "                    <div class=\"account-toggle-wrapper\">
                        <button
                            id=\"user-info\"
                            aria-controls=\"account-menu\"
                            class=\"btn menu-toggle\"
                            aria-label=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("My Account", "app"), "html", null, true);
        echo "\"
                            title=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("My Account", "app"), "html", null, true);
        echo "\"
                            data-disclosure-trigger>
                            ";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["userPhoto"]) || array_key_exists("userPhoto", $context) ? $context["userPhoto"] : (function () { throw new RuntimeError('Variable "userPhoto" does not exist.', 166, $this->source); })()), "html", null, true);
        echo "
                        </button>
                        <div id=\"account-menu\" class=\"menu menu--disclosure\" data-align=\"right\" data-align-to=\".header-photo\">
                            <ul>
                                <li>
                                    <a href=\"";
        // line 171
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("myaccount"), "html", null, true);
        echo "\" class=\"flex flex-nowrap\">
                                        ";
        // line 172
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 172, $this->source); })()), "photoId", [])) {
            // line 173
            echo "                                            ";
            echo twig_escape_filter($this->env, (isset($context["userPhoto"]) || array_key_exists("userPhoto", $context) ? $context["userPhoto"] : (function () { throw new RuntimeError('Variable "userPhoto" does not exist.', 173, $this->source); })()), "html", null, true);
            echo "
                                        ";
        }
        // line 175
        echo "                                        <div class=\"flex-grow\">
                                            <div>";
        // line 176
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 176, $this->source); })()), "username", []), "html", null, true);
        echo "</div>
                                            ";
        // line 177
        if ( !craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 177, $this->source); })()), "app", []), "config", []), "general", []), "useEmailAsUsername", [])) {
            // line 178
            echo "                                                <div class=\"smalltext\">";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 178, $this->source); })()), "email", []), "html", null, true);
            echo "</div>
                                            ";
        }
        // line 180
        echo "                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <hr>
                            <ul>
                                <li><a href=\"";
        // line 186
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("logout"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Sign out", "app"), "html", null, true);
        echo "</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id=\"main-container\">
                <main ";
        // line 194
        echo craft\helpers\Html::renderTagAttributes((isset($context["mainAttributes"]) || array_key_exists("mainAttributes", $context) ? $context["mainAttributes"] : (function () { throw new RuntimeError('Variable "mainAttributes" does not exist.', 194, $this->source); })()));
        echo ">

                    ";
        // line 196
        if ((isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new RuntimeError('Variable "fullPageForm" does not exist.', 196, $this->source); })())) {
            // line 197
            echo "<form ";
            $this->displayBlock('mainFormAttributes', $context, $blocks);
            echo ">";
            // line 198
            echo craft\helpers\Html::csrfInput();
        }
        // line 200
        echo "
                    ";
        // line 201
        if ((isset($context["showHeader"]) || array_key_exists("showHeader", $context) ? $context["showHeader"] : (function () { throw new RuntimeError('Variable "showHeader" does not exist.', 201, $this->source); })())) {
            // line 202
            echo "                        <div id=\"header-container\">
                            <header id=\"header\">
                                ";
            // line 204
            $this->displayBlock('header', $context, $blocks);
            // line 225
            echo "                            </header><!-- #header -->
                        </div>
                    ";
        }
        // line 228
        echo "
                    <div id=\"main-content\" class=\"";
        // line 229
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["mainContentClasses"]) || array_key_exists("mainContentClasses", $context) ? $context["mainContentClasses"] : (function () { throw new RuntimeError('Variable "mainContentClasses" does not exist.', 229, $this->source); })()), " "), "html", null, true);
        echo "\">
                        ";
        // line 231
        echo "                        ";
        if ((isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new RuntimeError('Variable "sidebar" does not exist.', 231, $this->source); })())) {
            // line 232
            echo "                            <div id=\"sidebar-toggle-container\">
                                <button type=\"button\" id=\"sidebar-toggle\" class=\"btn menubtn\" aria-controls=\"sidebar-container\" aria-expanded=\"false\">
                                    ";
            // line 234
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Show sidebar", "app"), "html", null, true);
            echo "
                                </button>
                            </div>
                            <div id=\"sidebar-container\">
                                <div id=\"sidebar\" class=\"sidebar\">
                                    ";
            // line 239
            echo (isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new RuntimeError('Variable "sidebar" does not exist.', 239, $this->source); })());
            echo "
                                </div>
                            </div>
                        ";
        }
        // line 243
        echo "
                        ";
        // line 245
        echo "                        <div id=\"content-container\">
                            ";
        // line 246
        if ((isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new RuntimeError('Variable "sidebar" does not exist.', 246, $this->source); })())) {
            // line 247
            echo "                                <h2 id=\"content-heading\"></h2>
                            ";
        }
        // line 249
        echo "                            ";
        $this->displayBlock('main', $context, $blocks);
        // line 280
        echo "                        </div><!-- #content-container -->

                        ";
        // line 282
        if ( !twig_test_empty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 282, $this->source); })()))) {
            // line 283
            echo "                            <div id=\"details-container\">
                                <div id=\"details\">
                                    <div class=\"details\">
                                        ";
            // line 286
            echo (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 286, $this->source); })());
            echo "
                                    </div>
                                </div>
                            </div>
                        ";
        }
        // line 291
        echo "                    </div><!-- #main-content -->

                    ";
        // line 293
        if ((isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new RuntimeError('Variable "fullPageForm" does not exist.', 293, $this->source); })())) {
            // line 294
            echo "</form><!-- #main-form -->";
        }
        // line 296
        echo "                </main><!-- #main -->
            </div><!-- #main-container -->

            <footer id=\"global-footer\">
                ";
        // line 300
        $context["fullEditionName"] = ($this->extensions['craft\web\twig\Extension']->translateFilter("{edition} edition", "app", ["edition" => (isset($context["editionName"]) || array_key_exists("editionName", $context) ? $context["editionName"] : (function () { throw new RuntimeError('Variable "editionName" does not exist.', 300, $this->source); })())]) . (((isset($context["isTrial"]) || array_key_exists("isTrial", $context) ? $context["isTrial"] : (function () { throw new RuntimeError('Variable "isTrial" does not exist.', 300, $this->source); })())) ? ((" " . $this->extensions['craft\web\twig\Extension']->translateFilter("(trial)", "app"))) : ("")));
        // line 301
        echo "                <div id=\"edition-logo\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["fullEditionName"]) || array_key_exists("fullEditionName", $context) ? $context["fullEditionName"] : (function () { throw new RuntimeError('Variable "fullEditionName" does not exist.', 301, $this->source); })()), "html", null, true);
        echo "\">
                    <div class=\"edition-name\" aria-hidden=\"true\">";
        // line 302
        echo twig_escape_filter($this->env, (isset($context["editionName"]) || array_key_exists("editionName", $context) ? $context["editionName"] : (function () { throw new RuntimeError('Variable "editionName" does not exist.', 302, $this->source); })()), "html", null, true);
        echo "</div>
                    ";
        // line 303
        echo $this->extensions['craft\web\twig\Extension']->tagFunction("span", ["class" => "visually-hidden", "text" =>         // line 305
(isset($context["fullEditionName"]) || array_key_exists("fullEditionName", $context) ? $context["fullEditionName"] : (function () { throw new RuntimeError('Variable "fullEditionName" does not exist.', 305, $this->source); })())]);
        // line 306
        echo "
                    ";
        // line 307
        if ((isset($context["isTrial"]) || array_key_exists("isTrial", $context) ? $context["isTrial"] : (function () { throw new RuntimeError('Variable "isTrial" does not exist.', 307, $this->source); })())) {
            // line 308
            echo "                        <div class=\"edition-trial\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Trial", "app"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 310
        echo "                </div>
                <div id=\"app-info\">
                    <span>Craft CMS ";
        // line 312
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 312, $this->source); })()), "app", []), "version", []), "html", null, true);
        echo "</span>
                    ";
        // line 313
        if ((isset($context["canUpgradeEdition"]) || array_key_exists("canUpgradeEdition", $context) ? $context["canUpgradeEdition"] : (function () { throw new RuntimeError('Variable "canUpgradeEdition" does not exist.', 313, $this->source); })())) {
            // line 314
            echo "                        ";
            $context["linkText"] = (((isset($context["isTrial"]) || array_key_exists("isTrial", $context) ? $context["isTrial"] : (function () { throw new RuntimeError('Variable "isTrial" does not exist.', 314, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Buy Craft Pro", "app")) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Upgrade to Craft Pro", "app")));
            // line 315
            echo "                        <span>
                            <a class=\"go\" href=\"";
            // line 316
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("plugin-store/upgrade-craft"), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, (isset($context["linkText"]) || array_key_exists("linkText", $context) ? $context["linkText"] : (function () { throw new RuntimeError('Variable "linkText" does not exist.', 316, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["linkText"]) || array_key_exists("linkText", $context) ? $context["linkText"] : (function () { throw new RuntimeError('Variable "linkText" does not exist.', 316, $this->source); })()), "html", null, true);
            echo "</a>
                        </span>
                    ";
        }
        // line 319
        echo "                </div>
            </footer>

        </div><!-- #page-container -->
    </div><!-- #global-container -->

    ";
        // line 325
        $this->loadTemplate("_layouts/components/notifications", "_layouts/cp", 325)->display($context);
        craft\helpers\Template::endProfile("block", "body");
    }

    // line 197
    public function block_mainFormAttributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "mainFormAttributes");
        echo craft\helpers\Html::renderTagAttributes((isset($context["mainFormAttributes"]) || array_key_exists("mainFormAttributes", $context) ? $context["mainFormAttributes"] : (function () { throw new RuntimeError('Variable "mainFormAttributes" does not exist.', 197, $this->source); })()));
        craft\helpers\Template::endProfile("block", "mainFormAttributes");
    }

    // line 204
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "header");
        // line 205
        echo "                                    <div id=\"page-title\" class=\"flex";
        if ((isset($context["toolbar"]) || array_key_exists("toolbar", $context) ? $context["toolbar"] : (function () { throw new RuntimeError('Variable "toolbar" does not exist.', 205, $this->source); })())) {
            echo " has-toolbar";
        }
        echo "\">
                                        ";
        // line 206
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 211
        echo "                                        ";
        echo (isset($context["contextMenu"]) || array_key_exists("contextMenu", $context) ? $context["contextMenu"] : (function () { throw new RuntimeError('Variable "contextMenu" does not exist.', 211, $this->source); })());
        echo "
                                    </div>
                                    ";
        // line 213
        if ((isset($context["toolbar"]) || array_key_exists("toolbar", $context) ? $context["toolbar"] : (function () { throw new RuntimeError('Variable "toolbar" does not exist.', 213, $this->source); })())) {
            // line 214
            echo "                                        <div id=\"toolbar\" class=\"flex\">
                                            ";
            // line 215
            echo (isset($context["toolbar"]) || array_key_exists("toolbar", $context) ? $context["toolbar"] : (function () { throw new RuntimeError('Variable "toolbar" does not exist.', 215, $this->source); })());
            echo "
                                        </div>
                                    ";
        }
        // line 218
        echo "                                    ";
        if (((isset($context["actionButton"]) || array_key_exists("actionButton", $context) ? $context["actionButton"] : (function () { throw new RuntimeError('Variable "actionButton" does not exist.', 218, $this->source); })()) || (isset($context["additionalButtons"]) || array_key_exists("additionalButtons", $context) ? $context["additionalButtons"] : (function () { throw new RuntimeError('Variable "additionalButtons" does not exist.', 218, $this->source); })()))) {
            // line 219
            echo "                                        <div id=\"action-buttons\" class=\"flex\">
                                            ";
            // line 220
            echo (isset($context["additionalButtons"]) || array_key_exists("additionalButtons", $context) ? $context["additionalButtons"] : (function () { throw new RuntimeError('Variable "additionalButtons" does not exist.', 220, $this->source); })());
            echo "
                                            ";
            // line 221
            echo (isset($context["actionButton"]) || array_key_exists("actionButton", $context) ? $context["actionButton"] : (function () { throw new RuntimeError('Variable "actionButton" does not exist.', 221, $this->source); })());
            echo "
                                        </div>
                                    ";
        }
        // line 224
        echo "                                ";
        craft\helpers\Template::endProfile("block", "header");
    }

    // line 206
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "pageTitle");
        // line 207
        echo "                                            ";
        if ((array_key_exists("title", $context) && $this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 207, $this->source); })())))) {
            // line 208
            echo "                                                <h1 class=\"screen-title\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 208, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 208, $this->source); })()), "html", null, true);
            echo "</h1>
                                            ";
        }
        // line 210
        echo "                                        ";
        craft\helpers\Template::endProfile("block", "pageTitle");
    }

    // line 249
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "main");
        // line 250
        echo "                                <div id=\"content\" class=\"content-pane\">
                                    ";
        // line 251
        if (((isset($context["contentNotice"]) || array_key_exists("contentNotice", $context) ? $context["contentNotice"] : (function () { throw new RuntimeError('Variable "contentNotice" does not exist.', 251, $this->source); })()) || (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 251, $this->source); })()))) {
            // line 252
            echo "                                        <header id=\"content-header\" class=\"pane-header\">
                                            ";
            // line 253
            echo (((isset($context["contentNotice"]) || array_key_exists("contentNotice", $context) ? $context["contentNotice"] : (function () { throw new RuntimeError('Variable "contentNotice" does not exist.', 253, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->tagFunction("div", ["id" => "content-notice", "html" =>             // line 255
(isset($context["contentNotice"]) || array_key_exists("contentNotice", $context) ? $context["contentNotice"] : (function () { throw new RuntimeError('Variable "contentNotice" does not exist.', 255, $this->source); })()), "role" => "status"])) : (""));
            // line 257
            echo "
                                            ";
            // line 258
            if ((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 258, $this->source); })())) {
                // line 259
                echo "                                                ";
                $this->loadTemplate("_includes/tabs", "_layouts/cp", 259)->display(twig_array_merge($context, ["containerAttributes" => ["id" => "tabs"]]));
                // line 264
                echo "                                            ";
            }
            // line 265
            echo "                                        </header>
                                    ";
        }
        // line 267
        echo "
                                    ";
        // line 268
        $this->displayBlock('content', $context, $blocks);
        // line 271
        echo "
                                    ";
        // line 273
        echo "                                    ";
        if ((isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 273, $this->source); })())) {
            // line 274
            echo "                                        <div id=\"footer\" class=\"flex\">
                                            ";
            // line 275
            echo (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 275, $this->source); })());
            echo "
                                        </div>
                                    ";
        }
        // line 278
        echo "                                </div>
                            ";
        craft\helpers\Template::endProfile("block", "main");
    }

    // line 268
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 269
        echo "                                        ";
        echo ((array_key_exists("content", $context)) ? ((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 269, $this->source); })())) : (""));
        echo "
                                    ";
        craft\helpers\Template::endProfile("block", "content");
    }

    // line 329
    public function block_actionButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "actionButton");
        // line 330
        echo "    ";
        if ((isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new RuntimeError('Variable "fullPageForm" does not exist.', 330, $this->source); })())) {
            // line 331
            echo "        <div class=\"btngroup\">
            ";
            // line 332
            $this->displayBlock('submitButton', $context, $blocks);
            // line 335
            echo "            ";
            if ((($context["formActions"]) ?? (false))) {
                // line 336
                echo "                <button type=\"button\" class=\"btn submit menubtn\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("More actions", "app"), "html", null, true);
                echo "\"></button>
                ";
                // line 337
                $this->loadTemplate("_layouts/components/form-action-menu", "_layouts/cp", 337)->display($context);
                // line 338
                echo "            ";
            }
            // line 339
            echo "        </div>
    ";
        }
        craft\helpers\Template::endProfile("block", "actionButton");
    }

    // line 332
    public function block_submitButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "submitButton");
        // line 333
        echo "                <button type=\"submit\" class=\"btn submit\">";
        echo twig_escape_filter($this->env, (($context["submitButtonLabel"]) ?? ($this->extensions['craft\web\twig\Extension']->translateFilter("Save", "app"))), "html", null, true);
        echo "</button>
            ";
        craft\helpers\Template::endProfile("block", "submitButton");
    }

    public function getTemplateName()
    {
        return "_layouts/cp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  664 => 333,  659 => 332,  652 => 339,  649 => 338,  647 => 337,  642 => 336,  639 => 335,  637 => 332,  634 => 331,  631 => 330,  626 => 329,  618 => 269,  613 => 268,  607 => 278,  601 => 275,  598 => 274,  595 => 273,  592 => 271,  590 => 268,  587 => 267,  583 => 265,  580 => 264,  577 => 259,  575 => 258,  572 => 257,  570 => 255,  569 => 253,  566 => 252,  564 => 251,  561 => 250,  556 => 249,  551 => 210,  543 => 208,  540 => 207,  535 => 206,  530 => 224,  524 => 221,  520 => 220,  517 => 219,  514 => 218,  508 => 215,  505 => 214,  503 => 213,  497 => 211,  495 => 206,  488 => 205,  483 => 204,  474 => 197,  469 => 325,  461 => 319,  451 => 316,  448 => 315,  445 => 314,  443 => 313,  439 => 312,  435 => 310,  429 => 308,  427 => 307,  424 => 306,  422 => 305,  421 => 303,  417 => 302,  412 => 301,  410 => 300,  404 => 296,  401 => 294,  399 => 293,  395 => 291,  387 => 286,  382 => 283,  380 => 282,  376 => 280,  373 => 249,  369 => 247,  367 => 246,  364 => 245,  361 => 243,  354 => 239,  346 => 234,  342 => 232,  339 => 231,  335 => 229,  332 => 228,  327 => 225,  325 => 204,  321 => 202,  319 => 201,  316 => 200,  313 => 198,  309 => 197,  307 => 196,  302 => 194,  289 => 186,  281 => 180,  275 => 178,  273 => 177,  269 => 176,  266 => 175,  260 => 173,  258 => 172,  254 => 171,  246 => 166,  241 => 164,  237 => 163,  230 => 158,  224 => 154,  218 => 153,  215 => 152,  213 => 151,  208 => 149,  205 => 148,  203 => 147,  199 => 145,  197 => 144,  192 => 141,  189 => 136,  184 => 135,  178 => 42,  173 => 346,  171 => 345,  169 => 344,  163 => 130,  161 => 129,  156 => 125,  154 => 124,  153 => 123,  152 => 119,  149 => 118,  147 => 117,  145 => 115,  144 => 113,  143 => 112,  142 => 111,  141 => 110,  140 => 108,  139 => 107,  138 => 106,  137 => 105,  136 => 99,  134 => 97,  132 => 95,  131 => 92,  128 => 89,  126 => 88,  123 => 86,  121 => 85,  119 => 84,  117 => 83,  115 => 80,  114 => 79,  113 => 78,  111 => 76,  109 => 75,  107 => 74,  105 => 73,  103 => 72,  101 => 71,  99 => 70,  97 => 69,  95 => 68,  93 => 67,  91 => 65,  89 => 64,  87 => 63,  85 => 62,  83 => 60,  81 => 59,  76 => 55,  73 => 54,  69 => 52,  67 => 51,  64 => 50,  62 => 49,  57 => 48,  54 => 47,  52 => 46,  50 => 45,  42 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("{#
┌────────────────────────────────────────────────────────────────────────────────────┐
│                                 #global-container                                  │
│   ┌─────┐   ┌──────────────────────────────────────────────────────────────────┐   │
│   │     │   │                         #page-container                          │   │
│   │     │   │   ┌──────────────────────────────────────────────────────────┐   │   │
│   │     │   │   │                      #global-header                      │   │   │
│   │     │   │   └──────────────────────────────────────────────────────────┘   │   │
│   │     │   │                                                                  │   │
│   │     │   │   ┌──────────────────────────────────────────────────────────┐   │   │
│   │     │   │   │                          #main                           │   │   │
│   │  #  │   │   │   ┌──────────────────────────────────────────────────┐   │   │   │
│   │  g  │   │   │   │                #header-container                 │   │   │   │
│   │  l  │   │   │   └──────────────────────────────────────────────────┘   │   │   │
│   │  o  │   │   │                                                          │   │   │
│   │  b  │   │   │   ┌──────────────────────────────────────────────────┐   │   │   │
│   │  a  │   │   │   │                  #main-content                   │   │   │   │
│   │  l  │   │   │   │   ┌─────┐   ┌──────────────────────┐   ┌─────┐   │   │   │   │
│   │  -  │   │   │   │   │     │   │                      │   │     │   │   │   │   │
│   │  s  │   │   │   │   │  #  │   │                      │   │  #  │   │   │   │   │
│   │  i  │   │   │   │   │  s  │   │                      │   │  d  │   │   │   │   │
│   │  d  │   │   │   │   │  i  │   │                      │   │  e  │   │   │   │   │
│   │  e  │   │   │   │   │  d  │   │       #content       │   │  t  │   │   │   │   │
│   │  b  │   │   │   │   │  e  │   │                      │   │  a  │   │   │   │   │
│   │  a  │   │   │   │   │  b  │   │                      │   │  i  │   │   │   │   │
│   │  r  │   │   │   │   │  a  │   │                      │   │  l  │   │   │   │   │
│   │     │   │   │   │   │  r  │   │                      │   │  s  │   │   │   │   │
│   │     │   │   │   │   │     │   │                      │   │     │   │   │   │   │
│   │     │   │   │   │   └─────┘   └──────────────────────┘   └─────┘   │   │   │   │
│   │     │   │   │   │                                                  │   │   │   │
│   │     │   │   │   └──────────────────────────────────────────────────┘   │   │   │
│   │     │   │   │                                                          │   │   │
│   │     │   │   └──────────────────────────────────────────────────────────┘   │   │
│   │     │   │   ┌──────────────────────────────────────────────────────────┐   │   │
│   │     │   │   │                      #global-footer                      │   │   │
│   │     │   │   └──────────────────────────────────────────────────────────┘   │   │
│   └─────┘   └──────────────────────────────────────────────────────────────────┘   │
│                                                                                    │
└────────────────────────────────────────────────────────────────────────────────────┘
#}

{% extends \"_layouts/basecp\" %}

{# The control panel only supports queue components that implement QueueInterface #}
{% set queue = craft.app.queue %}
{% js %}
    {% if queue is instance of(\"craft\\\\queue\\\\QueueInterface\") %}
        Craft.cp.setJobInfo({{ queue.getJobInfo(100)|json_encode|raw }}, false);
        {% if queue.getHasReservedJobs() %}
            Craft.cp.trackJobProgress(true);
        {% elseif queue.getHasWaitingJobs() %}
            Craft.cp.runQueue();
        {% endif %}
    {% else %}
        Craft.cp.enableQueue = false;
    {% endif %}
{% endjs %}

{% set hasSystemIcon = CraftEdition == CraftPro and craft.rebrand.isIconUploaded %}
{% set fullPageForm = (fullPageForm is defined and fullPageForm) %}

{% set editionName = craft.app.getEditionName() %}
{% set canUpgradeEdition = craft.app.getCanUpgradeEdition() %}
{% set licensedEdition = craft.app.getLicensedEdition() %}
{% set isTrial = licensedEdition is not same as(null) and licensedEdition is not same as(CraftEdition) %}

{% set contentNotice = (contentNotice ?? block('contentNotice') ?? '')|trim %}
{% set sidebar = (sidebar ?? block('sidebar') ?? '')|trim %}
{% set contextMenu = (contextMenu ?? block('contextMenu') ?? '')|trim %}
{% set toolbar = (toolbar ?? block('toolbar') ?? '')|trim %}
{% set actionButton = (block('actionButton') ?? '')|trim %}
{% set additionalButtons = additionalButtons ?? null %}
{% set details = (details ?? block('details') ?? '')|trim %}
{% set footer = (footer ?? block('footer') ?? '')|trim %}
{% set crumbs = crumbs ?? null %}
{% set tabs = (tabs ?? [])|length > 1 ? tabs : null %}

{% set mainContentClasses = [
    sidebar ? 'has-sidebar',
    details ? 'has-details',
]|filter %}

{% set bodyClass = (bodyClass ?? [])|explodeClass %}
{% set showHeader = showHeader ?? true %}
{% if not showHeader %}
    {% set bodyClass = bodyClass|push('no-header') -%}
{% endif %}
{% if craft.app.hasModule('debug') %}
    {% set bodyClass = bodyClass|push('has-debug-toolbar') %}
{% endif %}

{% set mainAttributes = {
    id: 'main',
    role: 'main',
}|merge(mainAttributes ?? []) %}

{% set formActions = craft.cp.prepFormActions(formActions ?? null) %}

{% set mainFormAttributes = {
    id: 'main-form',
    method: 'post',
    'accept-charset': 'UTF-8',
    novalidate: true,
    data: {
        saveshortcut: saveShortcut ?? true,
        'saveshortcut-redirect': (saveShortcutRedirect ?? false) ? saveShortcutRedirect|hash : false,
        'saveshortcut-scroll': retainScrollOnSaveShortcut ?? false,
        actions: formActions ?? false,
        'confirm-unload': true,
        delta: view.getIsDeltaRegistrationActive(),
        'delta-names': view.getDeltaNames(),
        'initial-delta-values': view.getInitialDeltaValues(),
        'modified-delta-names': craft.app.request.getBodyParam('modifiedDeltaNames') ?? [],
    },
}|merge(mainFormAttributes ?? [], recursive=true) %}

{% set userPhoto %}
    <div class=\"header-photo\">
        {{ tag('img', {
            width: 30,
            height: 30,
            sizes: '30px',
            srcset: \"#{currentUser.getThumbUrl(30)} 30w, #{currentUser.getThumbUrl(60)} 60w\",
            alt: currentUser.getThumbAlt(),
        }) }}
    </div>
{% endset %}

{% js at head %}
    // Remove the hash so the browser doesn't scroll to it
    window.LOCATION_HASH = document.location.hash ? decodeURIComponent(document.location.hash.substr(1)) : null;
    history.replaceState(undefined, undefined, window.location.href.match(/^[^#]*/)[0]);
{% endjs %}

{% block body %}
    {{ tag ('a', {
        id: 'global-skip-link',
        text: 'Skip to content'|t('app'),
        href: '#main',
        class: 'skip-link btn',
    }) }}

    <div id=\"global-container\">
        {% include '_layouts/components/global-sidebar' %}

        <div id=\"page-container\">
            {% include '_layouts/components/alerts' %}

            <div id=\"global-header\" role=\"region\" aria-label=\"{{ 'My Account'|t('app') }}\">
                <div class=\"flex\">
                    {% include '_layouts/components/crumbs' %}
                    <div class=\"flex-grow\"></div>
                    <button type=\"button\" id=\"announcements-btn\" class=\"btn hidden\" aria-label=\"{{ 'What’s New'|t('app') }}\" title=\"{{ 'What’s New'|t('app') }}\">
                        {{ svg('@app/icons/gift.svg') }}
                    </button>

                    {# New account dropdown #}
                    <div class=\"account-toggle-wrapper\">
                        <button
                            id=\"user-info\"
                            aria-controls=\"account-menu\"
                            class=\"btn menu-toggle\"
                            aria-label=\"{{ 'My Account'|t('app') }}\"
                            title=\"{{ 'My Account'|t('app') }}\"
                            data-disclosure-trigger>
                            {{ userPhoto }}
                        </button>
                        <div id=\"account-menu\" class=\"menu menu--disclosure\" data-align=\"right\" data-align-to=\".header-photo\">
                            <ul>
                                <li>
                                    <a href=\"{{ url('myaccount') }}\" class=\"flex flex-nowrap\">
                                        {% if currentUser.photoId %}
                                            {{ userPhoto }}
                                        {% endif %}
                                        <div class=\"flex-grow\">
                                            <div>{{ currentUser.username }}</div>
                                            {% if not craft.app.config.general.useEmailAsUsername %}
                                                <div class=\"smalltext\">{{ currentUser.email }}</div>
                                            {% endif %}
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <hr>
                            <ul>
                                <li><a href=\"{{ url('logout') }}\">{{ \"Sign out\"|t('app') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id=\"main-container\">
                <main {{ attr(mainAttributes) }}>

                    {% if fullPageForm -%}
                        <form {% block mainFormAttributes %}{{ attr(mainFormAttributes) }}{% endblock %}>
                            {{- csrfInput() }}
                    {%- endif %}

                    {% if showHeader %}
                        <div id=\"header-container\">
                            <header id=\"header\">
                                {% block header %}
                                    <div id=\"page-title\" class=\"flex{% if toolbar %} has-toolbar{% endif %}\">
                                        {% block pageTitle %}
                                            {% if title is defined and title|length %}
                                                <h1 class=\"screen-title\" title=\"{{ title }}\">{{ title }}</h1>
                                            {% endif %}
                                        {% endblock %}
                                        {{ contextMenu|raw }}
                                    </div>
                                    {% if toolbar %}
                                        <div id=\"toolbar\" class=\"flex\">
                                            {{ toolbar|raw }}
                                        </div>
                                    {% endif %}
                                    {% if actionButton or additionalButtons %}
                                        <div id=\"action-buttons\" class=\"flex\">
                                            {{ additionalButtons|raw }}
                                            {{ actionButton|raw }}
                                        </div>
                                    {% endif %}
                                {% endblock %}
                            </header><!-- #header -->
                        </div>
                    {% endif %}

                    <div id=\"main-content\" class=\"{{ mainContentClasses|join(' ') }}\">
                        {# sidebar #}
                        {% if sidebar %}
                            <div id=\"sidebar-toggle-container\">
                                <button type=\"button\" id=\"sidebar-toggle\" class=\"btn menubtn\" aria-controls=\"sidebar-container\" aria-expanded=\"false\">
                                    {{ 'Show sidebar'|t('app') }}
                                </button>
                            </div>
                            <div id=\"sidebar-container\">
                                <div id=\"sidebar\" class=\"sidebar\">
                                    {{ sidebar|raw }}
                                </div>
                            </div>
                        {% endif %}

                        {# content-container #}
                        <div id=\"content-container\">
                            {% if sidebar %}
                                <h2 id=\"content-heading\"></h2>
                            {% endif %}
                            {% block main %}
                                <div id=\"content\" class=\"content-pane\">
                                    {% if contentNotice or tabs %}
                                        <header id=\"content-header\" class=\"pane-header\">
                                            {{ contentNotice ? tag('div', {
                                                id: 'content-notice',
                                                html: contentNotice,
                                                role: 'status',
                                            }) }}
                                            {% if tabs %}
                                                {% include \"_includes/tabs\" with {
                                                    containerAttributes: {
                                                        id: 'tabs',
                                                    },
                                                } %}
                                            {% endif %}
                                        </header>
                                    {% endif %}

                                    {% block content %}
                                        {{ content is defined ? content|raw }}
                                    {% endblock %}

                                    {# footer #}
                                    {% if footer %}
                                        <div id=\"footer\" class=\"flex\">
                                            {{ footer|raw }}
                                        </div>
                                    {% endif %}
                                </div>
                            {% endblock %}
                        </div><!-- #content-container -->

                        {% if details is not empty %}
                            <div id=\"details-container\">
                                <div id=\"details\">
                                    <div class=\"details\">
                                        {{ details|raw }}
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    </div><!-- #main-content -->

                    {% if fullPageForm -%}
                        </form><!-- #main-form -->
                    {%- endif %}
                </main><!-- #main -->
            </div><!-- #main-container -->

            <footer id=\"global-footer\">
                {% set fullEditionName = '{edition} edition'|t('app', {edition: editionName}) ~ (isTrial ? ' ' ~ '(trial)'|t('app')) %}
                <div id=\"edition-logo\" title=\"{{ fullEditionName }}\">
                    <div class=\"edition-name\" aria-hidden=\"true\">{{ editionName }}</div>
                    {{ tag('span', {
                        class: 'visually-hidden',
                        text: fullEditionName,
                    }) }}
                    {% if isTrial %}
                        <div class=\"edition-trial\">{{ \"Trial\"|t('app') }}</div>
                    {% endif %}
                </div>
                <div id=\"app-info\">
                    <span>Craft CMS {{ craft.app.version }}</span>
                    {% if canUpgradeEdition %}
                        {% set linkText = isTrial ? 'Buy Craft Pro'|t('app') : 'Upgrade to Craft Pro'|t('app') %}
                        <span>
                            <a class=\"go\" href=\"{{ url('plugin-store/upgrade-craft') }}\" aria-label=\"{{ linkText }}\">{{ linkText }}</a>
                        </span>
                    {% endif %}
                </div>
            </footer>

        </div><!-- #page-container -->
    </div><!-- #global-container -->

    {% include '_layouts/components/notifications' %}
{% endblock %}


{% block actionButton %}
    {% if fullPageForm %}
        <div class=\"btngroup\">
            {% block submitButton %}
                <button type=\"submit\" class=\"btn submit\">{{ submitButtonLabel ?? 'Save'|t('app') }}</button>
            {% endblock %}
            {% if formActions ?? false %}
                <button type=\"button\" class=\"btn submit menubtn\" aria-label=\"{{ 'More actions'|t('app') }}\"></button>
                {% include '_layouts/components/form-action-menu' %}
            {% endif %}
        </div>
    {% endif %}
{% endblock %}


{% if currentUser.can('performUpdates') and not craft.app.updates.getIsUpdateInfoCached() %}
    {% js %}
        Craft.cp.checkForUpdates();
    {% endjs %}
{% endif %}
", "_layouts/cp", "/var/www/html/vendor/craftcms/cms/src/templates/_layouts/cp.twig");
    }
}
