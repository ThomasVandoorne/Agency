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

/* _includes/revisionmenu.twig */
class __TwigTemplate_e9b7fd9ad959096690c9d6580428541a14054658b32a85be2e072e3f1d626991 extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/revisionmenu.twig");
        // line 6
        echo "
";
        // line 7
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_includes/revisionmenu.twig", 7)->unwrap();
        // line 8
        echo "
";
        // line 9
        $context["showDrafts"] = (($context["showDrafts"]) ?? (false));
        // line 10
        $context["drafts"] = (((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 10, $this->source); })()), "id", []) && (isset($context["showDrafts"]) || array_key_exists("showDrafts", $context) ? $context["showDrafts"] : (function () { throw new RuntimeError('Variable "showDrafts" does not exist.', 10, $this->source); })()))) ? ($this->extensions['craft\web\twig\Extension']->filterFilter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 10, $this->source); })()), "find", [], "method"), "draftOf", [0 =>         // line 11
(isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 11, $this->source); })())], "method"), "siteId", [0 => craft\helpers\Template::attribute($this->env, $this->source,         // line 12
(isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 12, $this->source); })()), "siteId", [])], "method"), "status", [0 => null], "method"), "orderBy", [0 => ["dateUpdated" =>         // line 14
(isset($context["SORT_DESC"]) || array_key_exists("SORT_DESC", $context) ? $context["SORT_DESC"] : (function () { throw new RuntimeError('Variable "SORT_DESC" does not exist.', 14, $this->source); })())]], "method"), "with", [0 => [0 => "draftCreator"]], "method"), "all", [], "method"),         // line 16
function ($__d__) use ($context, $macros) { $context["d"] = $__d__; return $this->env->getFunction('canView')->getCallable()((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 16, $this->source); })())); })) : ([]));
        // line 17
        echo "
";
        // line 18
        $context["maxRevisions"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 18, $this->source); })()), "app", []), "config", []), "general", []), "maxRevisions", []);
        // line 19
        if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 19, $this->source); })()), "id", []) && ( !(isset($context["maxRevisions"]) || array_key_exists("maxRevisions", $context) ? $context["maxRevisions"] : (function () { throw new RuntimeError('Variable "maxRevisions" does not exist.', 19, $this->source); })()) || ((isset($context["maxRevisions"]) || array_key_exists("maxRevisions", $context) ? $context["maxRevisions"] : (function () { throw new RuntimeError('Variable "maxRevisions" does not exist.', 19, $this->source); })()) > 1)))) {
            // line 20
            echo "    ";
            $context["revisions"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 20, $this->source); })()), "find", [], "method"), "revisionOf", [0 => craft\helpers\Template::attribute($this->env, $this->source,             // line 21
(isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 21, $this->source); })()), "getCanonicalId", [], "method")], "method"), "siteId", [0 => craft\helpers\Template::attribute($this->env, $this->source,             // line 22
(isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 22, $this->source); })()), "siteId", [])], "method"), "status", [0 => null], "method"), "offset", [0 => 1], "method"), "limit", [0 => ((            // line 25
(isset($context["maxRevisions"]) || array_key_exists("maxRevisions", $context) ? $context["maxRevisions"] : (function () { throw new RuntimeError('Variable "maxRevisions" does not exist.', 25, $this->source); })())) ? (min(((isset($context["maxRevisions"]) || array_key_exists("maxRevisions", $context) ? $context["maxRevisions"] : (function () { throw new RuntimeError('Variable "maxRevisions" does not exist.', 25, $this->source); })()) - 1), 10)) : (10))], "method"), "orderBy", [0 => ["dateCreated" =>             // line 26
(isset($context["SORT_DESC"]) || array_key_exists("SORT_DESC", $context) ? $context["SORT_DESC"] : (function () { throw new RuntimeError('Variable "SORT_DESC" does not exist.', 26, $this->source); })())]], "method"), "with", [0 => [0 => "revisionCreator"]], "method"), "all", [], "method");
        } else {
            // line 30
            echo "    ";
            $context["revisions"] = [];
        }
        // line 32
        echo "
";
        // line 33
        $context["baseParams"] = $this->extensions['craft\web\twig\Extension']->withoutKeyFilter($this->extensions['craft\web\twig\Extension']->withoutKeyFilter($this->extensions['craft\web\twig\Extension']->withoutKeyFilter($this->extensions['craft\web\twig\Extension']->withoutKeyFilter(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 33, $this->source); })()), "app", []), "request", []), "queryParams", []), "draftId"), "revisionId"), "siteId"), "fresh");
        // line 34
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 34, $this->source); })()), "app", []), "config", []), "general", []), "pathParam", [])) {
            // line 35
            echo "    ";
            $context["baseParams"] = $this->extensions['craft\web\twig\Extension']->withoutKeyFilter((isset($context["baseParams"]) || array_key_exists("baseParams", $context) ? $context["baseParams"] : (function () { throw new RuntimeError('Variable "baseParams" does not exist.', 35, $this->source); })()), craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 35, $this->source); })()), "app", []), "config", []), "general", []), "pathParam", []));
        }
        // line 37
        $context["supportedSiteIds"] = (($context["supportedSiteIds"]) ?? (craft\helpers\ArrayHelper::getColumn(((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 37, $this->source); })()), "app", []), "isMultiSite", [])) ? ($this->extensions['craft\web\twig\Extension']->filterFilter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 37, $this->source); })()), "getSupportedSites", [], "method"), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (((craft\helpers\Template::attribute($this->env, $this->source, ($context["s"] ?? null), "propagate", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["s"] ?? null), "propagate", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["s"] ?? null), "propagate", [])) : (true)); })) : ([0 => craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 37, $this->source); })()), "siteId", [])])), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (((craft\helpers\Template::attribute($this->env, $this->source, ($context["s"] ?? null), "siteId", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["s"] ?? null), "siteId", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["s"] ?? null), "siteId", [])) : ((isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 37, $this->source); })()))); })));
        // line 38
        $context["editableSiteIds"] = (($context["editableSiteIds"]) ?? (array_intersect((isset($context["supportedSiteIds"]) || array_key_exists("supportedSiteIds", $context) ? $context["supportedSiteIds"] : (function () { throw new RuntimeError('Variable "supportedSiteIds" does not exist.', 38, $this->source); })()), craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 38, $this->source); })()), "app", []), "sites", []), "getEditableSiteIds", [], "method"))));
        // line 39
        $context["isMultiSiteElement"] = ($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["supportedSiteIds"]) || array_key_exists("supportedSiteIds", $context) ? $context["supportedSiteIds"] : (function () { throw new RuntimeError('Variable "supportedSiteIds" does not exist.', 39, $this->source); })())) > 1);
        // line 40
        $context["canEditMultipleSites"] = ($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["editableSiteIds"]) || array_key_exists("editableSiteIds", $context) ? $context["editableSiteIds"] : (function () { throw new RuntimeError('Variable "editableSiteIds" does not exist.', 40, $this->source); })())) > 1);
        // line 41
        $context["isProvisionalDraft"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 41, $this->source); })()), "isProvisionalDraft", []);
        // line 42
        $context["originalElement"] = (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 42, $this->source); })());
        // line 43
        if ((isset($context["isProvisionalDraft"]) || array_key_exists("isProvisionalDraft", $context) ? $context["isProvisionalDraft"] : (function () { throw new RuntimeError('Variable "isProvisionalDraft" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "    ";
            $context["element"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 44, $this->source); })()), "getCanonical", [0 => true], "method");
        }
        // line 46
        $context["isDraft"] = ( !(isset($context["isProvisionalDraft"]) || array_key_exists("isProvisionalDraft", $context) ? $context["isProvisionalDraft"] : (function () { throw new RuntimeError('Variable "isProvisionalDraft" does not exist.', 46, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 46, $this->source); })()), "getIsDraft", [], "method"));
        // line 47
        $context["isRevision"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 47, $this->source); })()), "getIsRevision", [], "method");
        // line 48
        $context["showSiteLabel"] = (($context["showSiteLabel"]) ?? ((isset($context["isMultiSiteElement"]) || array_key_exists("isMultiSiteElement", $context) ? $context["isMultiSiteElement"] : (function () { throw new RuntimeError('Variable "isMultiSiteElement" does not exist.', 48, $this->source); })())));
        // line 49
        $context["showRevisionLabel"] = (($context["showRevisionLabel"]) ?? (((isset($context["showDrafts"]) || array_key_exists("showDrafts", $context) ? $context["showDrafts"] : (function () { throw new RuntimeError('Variable "showDrafts" does not exist.', 49, $this->source); })()) || $this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["revisions"]) || array_key_exists("revisions", $context) ? $context["revisions"] : (function () { throw new RuntimeError('Variable "revisions" does not exist.', 49, $this->source); })())))));
        // line 50
        $context["cpEditUrl"] = craft\helpers\UrlHelper::cpUrl(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 50, $this->source); })()), "getCpEditUrl", [], "method"), ["draftId" => null, "revisionId" => null]);
        // line 54
        if ((isset($context["isDraft"]) || array_key_exists("isDraft", $context) ? $context["isDraft"] : (function () { throw new RuntimeError('Variable "isDraft" does not exist.', 54, $this->source); })())) {
            // line 55
            echo "    ";
            $context["baseUrl"] = craft\helpers\UrlHelper::url((isset($context["cpEditUrl"]) || array_key_exists("cpEditUrl", $context) ? $context["cpEditUrl"] : (function () { throw new RuntimeError('Variable "cpEditUrl" does not exist.', 55, $this->source); })()), $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["baseParams"]) || array_key_exists("baseParams", $context) ? $context["baseParams"] : (function () { throw new RuntimeError('Variable "baseParams" does not exist.', 55, $this->source); })()), ["draftId" => craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 55, $this->source); })()), "draftId", [])]));
        } elseif (        // line 56
(isset($context["isRevision"]) || array_key_exists("isRevision", $context) ? $context["isRevision"] : (function () { throw new RuntimeError('Variable "isRevision" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "    ";
            $context["baseUrl"] = craft\helpers\UrlHelper::url((isset($context["cpEditUrl"]) || array_key_exists("cpEditUrl", $context) ? $context["cpEditUrl"] : (function () { throw new RuntimeError('Variable "cpEditUrl" does not exist.', 57, $this->source); })()), $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["baseParams"]) || array_key_exists("baseParams", $context) ? $context["baseParams"] : (function () { throw new RuntimeError('Variable "baseParams" does not exist.', 57, $this->source); })()), ["revisionId" => craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 57, $this->source); })()), "revisionId", [])]));
        } else {
            // line 59
            echo "    ";
            $context["baseUrl"] = (isset($context["cpEditUrl"]) || array_key_exists("cpEditUrl", $context) ? $context["cpEditUrl"] : (function () { throw new RuntimeError('Variable "cpEditUrl" does not exist.', 59, $this->source); })());
        }
        // line 61
        echo "
";
        // line 62
        $context["showRevisions"] = ((isset($context["showRevisionLabel"]) || array_key_exists("showRevisionLabel", $context) ? $context["showRevisionLabel"] : (function () { throw new RuntimeError('Variable "showRevisionLabel" does not exist.', 62, $this->source); })()) &&  !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 62, $this->source); })()), "getIsUnpublishedDraft", [], "method"));
        // line 63
        $context["showMenu"] = (($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["editableSiteIds"]) || array_key_exists("editableSiteIds", $context) ? $context["editableSiteIds"] : (function () { throw new RuntimeError('Variable "editableSiteIds" does not exist.', 63, $this->source); })())) > 1) || (isset($context["showRevisions"]) || array_key_exists("showRevisions", $context) ? $context["showRevisions"] : (function () { throw new RuntimeError('Variable "showRevisions" does not exist.', 63, $this->source); })()));
        // line 64
        echo "
<div class=\"context-btngroup btngroup\">
    ";
        // line 66
        ob_start();
        // line 70
        echo "        ";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Context", "app"), "html", null, true);
        echo "
    ";
        echo craft\helpers\Html::tag("label", ob_get_clean(), ["class" => "visually-hidden", "id" => "context-label"]);
        // line 72
        echo "    ";
        ob_start();
        // line 88
        if ((isset($context["showSiteLabel"]) || array_key_exists("showSiteLabel", $context) ? $context["showSiteLabel"] : (function () { throw new RuntimeError('Variable "showSiteLabel" does not exist.', 88, $this->source); })())) {
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["originalElement"]) || array_key_exists("originalElement", $context) ? $context["originalElement"] : (function () { throw new RuntimeError('Variable "originalElement" does not exist.', 89, $this->source); })()), "getSite", [], "method"), "name", []), "site"), "html", null, true);
        }
        // line 91
        if (((isset($context["showSiteLabel"]) || array_key_exists("showSiteLabel", $context) ? $context["showSiteLabel"] : (function () { throw new RuntimeError('Variable "showSiteLabel" does not exist.', 91, $this->source); })()) && (isset($context["showRevisionLabel"]) || array_key_exists("showRevisionLabel", $context) ? $context["showRevisionLabel"] : (function () { throw new RuntimeError('Variable "showRevisionLabel" does not exist.', 91, $this->source); })()))) {
            echo " – ";
        }
        // line 92
        if ((isset($context["showRevisionLabel"]) || array_key_exists("showRevisionLabel", $context) ? $context["showRevisionLabel"] : (function () { throw new RuntimeError('Variable "showRevisionLabel" does not exist.', 92, $this->source); })())) {
            // line 93
            echo "<span class=\"revision-label\">";
            // line 94
            if ((isset($context["isDraft"]) || array_key_exists("isDraft", $context) ? $context["isDraft"] : (function () { throw new RuntimeError('Variable "isDraft" does not exist.', 94, $this->source); })())) {
                // line 95
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 95, $this->source); })()), "getDraftName", [], "method"), "html", null, true);
            } elseif (            // line 96
(isset($context["isRevision"]) || array_key_exists("isRevision", $context) ? $context["isRevision"] : (function () { throw new RuntimeError('Variable "isRevision" does not exist.', 96, $this->source); })())) {
                // line 97
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 97, $this->source); })()), "getRevisionLabel", [], "method"), "html", null, true);
            } else {
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Current", "app"), "html", null, true);
                // line 100
                if ((isset($context["isProvisionalDraft"]) || array_key_exists("isProvisionalDraft", $context) ? $context["isProvisionalDraft"] : (function () { throw new RuntimeError('Variable "isProvisionalDraft" does not exist.', 100, $this->source); })())) {
                    // line 101
                    echo "<span> — ";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Edited", "app"), "html", null, true);
                    echo "</span>";
                }
            }
            // line 104
            echo "</span>";
        }
        echo craft\helpers\Html::tag("button", ob_get_clean(), ["type" => "button", "class" => [0 => "context-btn", 1 => "btn", 2 => "btngroup-btn-first", 3 => "btngroup-btn-last", 4 => ((        // line 79
(isset($context["showMenu"]) || array_key_exists("showMenu", $context) ? $context["showMenu"] : (function () { throw new RuntimeError('Variable "showMenu" does not exist.', 79, $this->source); })())) ? ("menubtn") : ("disabled"))], "data" => ["icon" => ((        // line 82
(isset($context["showSiteLabel"]) || array_key_exists("showSiteLabel", $context) ? $context["showSiteLabel"] : (function () { throw new RuntimeError('Variable "showSiteLabel" does not exist.', 82, $this->source); })())) ? ("world") : (null))], "aria" => ["labelledby" => "context-label"]]);
        // line 107
        echo "
    <div class=\"revision-menu menu padded";
        // line 108
        if ( !(isset($context["showMenu"]) || array_key_exists("showMenu", $context) ? $context["showMenu"] : (function () { throw new RuntimeError('Variable "showMenu" does not exist.', 108, $this->source); })())) {
            echo " hidden";
        }
        echo "\">
        ";
        // line 109
        $context["enabledSiteIds"] = ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 109, $this->source); })()), "id", [])) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 109, $this->source); })()), "app", []), "elements", []), "getEnabledSiteIdsForElement", [0 => craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 109, $this->source); })()), "id", [])], "method")) : ([]));
        // line 110
        echo "        ";
        $context["siteGroups"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 110, $this->source); })()), "app", []), "sites", []), "getAllGroups", [], "method");
        // line 111
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["siteGroups"]) || array_key_exists("siteGroups", $context) ? $context["siteGroups"] : (function () { throw new RuntimeError('Variable "siteGroups" does not exist.', 111, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 112
            echo "            ";
            $context["groupSites"] = craft\helpers\Template::attribute($this->env, $this->source, $context["group"], "getSites", [], "method");
            // line 113
            echo "            ";
            if ($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["groupSites"]) || array_key_exists("groupSites", $context) ? $context["groupSites"] : (function () { throw new RuntimeError('Variable "groupSites" does not exist.', 113, $this->source); })()))) {
                // line 114
                echo "                ";
                $context["groupIsVisible"] = ((isset($context["canEditMultipleSites"]) || array_key_exists("canEditMultipleSites", $context) ? $context["canEditMultipleSites"] : (function () { throw new RuntimeError('Variable "canEditMultipleSites" does not exist.', 114, $this->source); })()) && $this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, array_intersect(craft\helpers\ArrayHelper::getColumn((isset($context["groupSites"]) || array_key_exists("groupSites", $context) ? $context["groupSites"] : (function () { throw new RuntimeError('Variable "groupSites" does not exist.', 114, $this->source); })()), "id"), (isset($context["editableSiteIds"]) || array_key_exists("editableSiteIds", $context) ? $context["editableSiteIds"] : (function () { throw new RuntimeError('Variable "editableSiteIds" does not exist.', 114, $this->source); })()))));
                // line 115
                echo "                <div class=\"site-group";
                if ( !(isset($context["groupIsVisible"]) || array_key_exists("groupIsVisible", $context) ? $context["groupIsVisible"] : (function () { throw new RuntimeError('Variable "groupIsVisible" does not exist.', 115, $this->source); })())) {
                    echo " hidden";
                }
                echo "\">
                    ";
                // line 116
                if (($this->extensions['craft\web\twig\Extension']->lengthFilter($this->env, (isset($context["siteGroups"]) || array_key_exists("siteGroups", $context) ? $context["siteGroups"] : (function () { throw new RuntimeError('Variable "siteGroups" does not exist.', 116, $this->source); })())) > 1)) {
                    echo "<h6 cass=\"padded\">";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["group"], "name", []), "site"), "html", null, true);
                    echo "</h6>";
                }
                // line 117
                echo "                    <ul class=\"padded\">
                        ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["groupSites"]) || array_key_exists("groupSites", $context) ? $context["groupSites"] : (function () { throw new RuntimeError('Variable "groupSites" does not exist.', 118, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                    // line 119
                    echo "                            ";
                    $context["status"] = (((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 119, $this->source); })()), "enabled", []) && twig_in_filter(craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "id", []), (isset($context["enabledSiteIds"]) || array_key_exists("enabledSiteIds", $context) ? $context["enabledSiteIds"] : (function () { throw new RuntimeError('Variable "enabledSiteIds" does not exist.', 119, $this->source); })())))) ? ("enabled") : ("disabled"));
                    // line 120
                    echo "                            ";
                    $context["isSelected"] = (craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "id", []) == craft\helpers\Template::attribute($this->env, $this->source, (isset($context["originalElement"]) || array_key_exists("originalElement", $context) ? $context["originalElement"] : (function () { throw new RuntimeError('Variable "originalElement" does not exist.', 120, $this->source); })()), "siteId", []));
                    // line 121
                    echo "                            ";
                    ob_start();
                    // line 127
                    echo "                                ";
                    if ((isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 127, $this->source); })())) {
                        // line 128
                        echo "                                    <a class=\"site-option sel\">
                                        <div class=\"status ";
                        // line 129
                        echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 129, $this->source); })()), "html", null, true);
                        echo "\"></div>";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "name", []), "site"), "html", null, true);
                        echo "
                                    </a>
                                ";
                    } else {
                        // line 132
                        echo "                                    ";
                        $context["url"] = craft\helpers\UrlHelper::url((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 132, $this->source); })()), ["site" => craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "handle", [])]);
                        // line 133
                        echo "                                    <a class=\"site-option\" href=\"";
                        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 133, $this->source); })()), "html", null, true);
                        echo "\" data-site-id=\"";
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "id", []), "html", null, true);
                        echo "\">
                                        <div class=\"status ";
                        // line 134
                        echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 134, $this->source); })()), "html", null, true);
                        echo "\"></div>";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "name", []), "site"), "html", null, true);
                        echo "
                                    </a>
                                ";
                    }
                    // line 137
                    echo "                            ";
                    echo craft\helpers\Html::tag("li", ob_get_clean(), ["class" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => ((!twig_in_filter(craft\helpers\Template::attribute($this->env, $this->source,                     // line 123
$context["site"], "id", []), (isset($context["editableSiteIds"]) || array_key_exists("editableSiteIds", $context) ? $context["editableSiteIds"] : (function () { throw new RuntimeError('Variable "editableSiteIds" does not exist.', 123, $this->source); })()))) ? ("hidden") : (null)), 1 => ((                    // line 124
(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 124, $this->source); })())) ? ("sel") : (null))])]);
                    // line 138
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "                    </ul>
                </div>
            ";
            }
            // line 142
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "
        ";
        // line 144
        if ((isset($context["showRevisions"]) || array_key_exists("showRevisions", $context) ? $context["showRevisions"] : (function () { throw new RuntimeError('Variable "showRevisions" does not exist.', 144, $this->source); })())) {
            // line 145
            echo "            <hr class=\"revision-hr";
            if ( !(isset($context["canEditMultipleSites"]) || array_key_exists("canEditMultipleSites", $context) ? $context["canEditMultipleSites"] : (function () { throw new RuntimeError('Variable "canEditMultipleSites" does not exist.', 145, $this->source); })())) {
                echo " hidden";
            }
            echo "\">
            <ul class=\"padded revision-group-current\">
                ";
            // line 147
            $context["currentRevision"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 147, $this->source); })()), "getCurrentRevision", [], "method");
            // line 148
            echo "                ";
            $context["currentRevisionEditTime"] = (((craft\helpers\Template::attribute($this->env, $this->source, ($context["currentRevision"] ?? null), "dateCreated", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["currentRevision"] ?? null), "dateCreated", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["currentRevision"] ?? null), "dateCreated", [])) : (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 148, $this->source); })()), "dateUpdated", [])));
            // line 149
            echo "                ";
            $context["currentRevisionCreator"] = (((isset($context["currentRevision"]) || array_key_exists("currentRevision", $context) ? $context["currentRevision"] : (function () { throw new RuntimeError('Variable "currentRevision" does not exist.', 149, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentRevision"]) || array_key_exists("currentRevision", $context) ? $context["currentRevision"] : (function () { throw new RuntimeError('Variable "currentRevision" does not exist.', 149, $this->source); })()), "getCreator", [], "method")) : (""));
            // line 150
            echo "                ";
            $context["isSelected"] = ( !(isset($context["isDraft"]) || array_key_exists("isDraft", $context) ? $context["isDraft"] : (function () { throw new RuntimeError('Variable "isDraft" does not exist.', 150, $this->source); })()) &&  !(isset($context["isRevision"]) || array_key_exists("isRevision", $context) ? $context["isRevision"] : (function () { throw new RuntimeError('Variable "isRevision" does not exist.', 150, $this->source); })()));
            // line 151
            echo "                ";
            ob_start();
            // line 157
            echo "                    ";
            ob_start();
            // line 161
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Current", "app"), "html", null, true);
            echo "
                        <div class=\"smalltext\">
                            ";
            // line 163
            echo twig_escape_filter($this->env, (((isset($context["currentRevisionCreator"]) || array_key_exists("currentRevisionCreator", $context) ? $context["currentRevisionCreator"] : (function () { throw new RuntimeError('Variable "currentRevisionCreator" does not exist.', 163, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Saved {timestamp} by {creator}", "app", ["timestamp" => $this->extensions['craft\web\twig\Extension']->timestampFilter(            // line 164
(isset($context["currentRevisionEditTime"]) || array_key_exists("currentRevisionEditTime", $context) ? $context["currentRevisionEditTime"] : (function () { throw new RuntimeError('Variable "currentRevisionEditTime" does not exist.', 164, $this->source); })()), "short", true), "creator" => craft\helpers\Template::attribute($this->env, $this->source,             // line 165
(isset($context["currentRevisionCreator"]) || array_key_exists("currentRevisionCreator", $context) ? $context["currentRevisionCreator"] : (function () { throw new RuntimeError('Variable "currentRevisionCreator" does not exist.', 165, $this->source); })()), "name", [])])) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Last saved {timestamp}", "app", ["timestamp" => $this->extensions['craft\web\twig\Extension']->timestampFilter(            // line 167
(isset($context["currentRevisionEditTime"]) || array_key_exists("currentRevisionEditTime", $context) ? $context["currentRevisionEditTime"] : (function () { throw new RuntimeError('Variable "currentRevisionEditTime" does not exist.', 167, $this->source); })()), "short", true)]))), "html", null, true);
            // line 168
            echo "
                        </div>
                    ";
            echo craft\helpers\Html::tag("a", ob_get_clean(), ["class" => ((            // line 158
(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 158, $this->source); })())) ? ("sel") : (false)), "href" =>             // line 159
(isset($context["cpEditUrl"]) || array_key_exists("cpEditUrl", $context) ? $context["cpEditUrl"] : (function () { throw new RuntimeError('Variable "cpEditUrl" does not exist.', 159, $this->source); })())]);
            // line 171
            echo "                ";
            echo craft\helpers\Html::tag("li", ob_get_clean(), ["class" => $this->extensions['craft\web\twig\Extension']->filterFilter($this->env, [0 => "current-revision", 1 => ((            // line 154
(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 154, $this->source); })())) ? ("sel") : (null))])]);
            // line 172
            echo "            </ul>
        ";
        }
        // line 174
        echo "
        ";
        // line 175
        if ((isset($context["drafts"]) || array_key_exists("drafts", $context) ? $context["drafts"] : (function () { throw new RuntimeError('Variable "drafts" does not exist.', 175, $this->source); })())) {
            // line 176
            echo "            <h6 class=\"padded\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Drafts", "app"), "html", null, true);
            echo "</h6>
            <ul class=\"padded revision-group-drafts\">
                ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["drafts"]) || array_key_exists("drafts", $context) ? $context["drafts"] : (function () { throw new RuntimeError('Variable "drafts" does not exist.', 178, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["draft"]) {
                // line 179
                echo "                    ";
                $context["url"] = craft\helpers\UrlHelper::url((isset($context["cpEditUrl"]) || array_key_exists("cpEditUrl", $context) ? $context["cpEditUrl"] : (function () { throw new RuntimeError('Variable "cpEditUrl" does not exist.', 179, $this->source); })()), $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["baseParams"]) || array_key_exists("baseParams", $context) ? $context["baseParams"] : (function () { throw new RuntimeError('Variable "baseParams" does not exist.', 179, $this->source); })()), ["draftId" => craft\helpers\Template::attribute($this->env, $this->source, $context["draft"], "draftId", [])]));
                // line 180
                echo "                    ";
                $context["creator"] = craft\helpers\Template::attribute($this->env, $this->source, $context["draft"], "getCreator", [], "method");
                // line 181
                echo "                    ";
                $context["isSelected"] = (craft\helpers\Template::attribute($this->env, $this->source, $context["draft"], "draftId", []) == craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 181, $this->source); })()), "draftId", []));
                // line 182
                echo "                    ";
                ob_start();
                // line 185
                echo "                        ";
                ob_start();
                // line 189
                echo "                            <div class=\"draft-name\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["draft"], "draftName", []), "html", null, true);
                echo "</div>
                            <div class=\"draft-meta smalltext\">
                                ";
                // line 191
                echo twig_escape_filter($this->env, (((isset($context["creator"]) || array_key_exists("creator", $context) ? $context["creator"] : (function () { throw new RuntimeError('Variable "creator" does not exist.', 191, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Saved {timestamp} by {creator}", "app", ["timestamp" => $this->extensions['craft\web\twig\Extension']->timestampFilter(craft\helpers\Template::attribute($this->env, $this->source,                 // line 192
$context["draft"], "dateUpdated", []), "short", true), "creator" => craft\helpers\Template::attribute($this->env, $this->source,                 // line 193
(isset($context["creator"]) || array_key_exists("creator", $context) ? $context["creator"] : (function () { throw new RuntimeError('Variable "creator" does not exist.', 193, $this->source); })()), "name", [])])) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Saved {timestamp}", "app", ["timestamp" => $this->extensions['craft\web\twig\Extension']->timestampFilter(craft\helpers\Template::attribute($this->env, $this->source,                 // line 195
$context["draft"], "dateUpdated", []), "short", true)]))), "html", null, true);
                // line 196
                echo "
                            </div>
                        ";
                echo craft\helpers\Html::tag("a", ob_get_clean(), ["class" => ((                // line 186
(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 186, $this->source); })())) ? ("sel") : (false)), "href" =>                 // line 187
(isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 187, $this->source); })())]);
                // line 199
                echo "                    ";
                echo craft\helpers\Html::tag("li", ob_get_clean(), ["class" => ((                // line 183
(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 183, $this->source); })())) ? ("sel") : (false))]);
                // line 200
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draft'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            echo "            </ul>
        ";
        }
        // line 203
        echo "
        ";
        // line 204
        if ((isset($context["revisions"]) || array_key_exists("revisions", $context) ? $context["revisions"] : (function () { throw new RuntimeError('Variable "revisions" does not exist.', 204, $this->source); })())) {
            // line 205
            echo "            <h6 class=\"padded\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Recent Revisions", "app"), "html", null, true);
            echo "</h6>
            <ul class=\"revision-group-revisions padded\">
                ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) || array_key_exists("revisions", $context) ? $context["revisions"] : (function () { throw new RuntimeError('Variable "revisions" does not exist.', 207, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
                // line 208
                echo "                    ";
                $context["url"] = craft\helpers\UrlHelper::url((isset($context["cpEditUrl"]) || array_key_exists("cpEditUrl", $context) ? $context["cpEditUrl"] : (function () { throw new RuntimeError('Variable "cpEditUrl" does not exist.', 208, $this->source); })()), $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["baseParams"]) || array_key_exists("baseParams", $context) ? $context["baseParams"] : (function () { throw new RuntimeError('Variable "baseParams" does not exist.', 208, $this->source); })()), ["revisionId" => craft\helpers\Template::attribute($this->env, $this->source, $context["revision"], "revisionId", [])]));
                // line 209
                echo "                    ";
                $context["creator"] = craft\helpers\Template::attribute($this->env, $this->source, $context["revision"], "getCreator", [], "method");
                // line 210
                echo "                    ";
                $context["isSelected"] = (craft\helpers\Template::attribute($this->env, $this->source, $context["revision"], "revisionId", []) == craft\helpers\Template::attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 210, $this->source); })()), "revisionId", []));
                // line 211
                echo "                    ";
                ob_start();
                // line 214
                echo "                        ";
                ob_start();
                // line 218
                echo "                            ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["revision"], "getRevisionLabel", [], "method"), "html", null, true);
                echo "
                            <div class=\"smalltext\">
                                ";
                // line 220
                echo twig_escape_filter($this->env, (((isset($context["creator"]) || array_key_exists("creator", $context) ? $context["creator"] : (function () { throw new RuntimeError('Variable "creator" does not exist.', 220, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Saved {timestamp} by {creator}", "app", ["timestamp" => $this->extensions['craft\web\twig\Extension']->timestampFilter(craft\helpers\Template::attribute($this->env, $this->source,                 // line 221
$context["revision"], "dateCreated", []), "short", true), "creator" => craft\helpers\Template::attribute($this->env, $this->source,                 // line 222
(isset($context["creator"]) || array_key_exists("creator", $context) ? $context["creator"] : (function () { throw new RuntimeError('Variable "creator" does not exist.', 222, $this->source); })()), "name", [])])) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Saved {timestamp}", "app", ["timestamp" => $this->extensions['craft\web\twig\Extension']->timestampFilter(craft\helpers\Template::attribute($this->env, $this->source,                 // line 224
$context["revision"], "dateCreated", []), "short", true)]))), "html", null, true);
                // line 225
                echo "
                            </div>
                        ";
                echo craft\helpers\Html::tag("a", ob_get_clean(), ["class" => ((                // line 215
(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 215, $this->source); })())) ? ("sel") : (false)), "href" =>                 // line 216
(isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 216, $this->source); })())]);
                // line 228
                echo "                    ";
                echo craft\helpers\Html::tag("li", ob_get_clean(), ["class" => ((                // line 212
(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 212, $this->source); })())) ? ("sel") : (false))]);
                // line 229
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo "            </ul>
        ";
        }
        // line 232
        echo "    </div>
</div>
";
        craft\helpers\Template::endProfile("template", "_includes/revisionmenu.twig");
    }

    public function getTemplateName()
    {
        return "_includes/revisionmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 232,  474 => 230,  468 => 229,  466 => 212,  464 => 228,  462 => 216,  461 => 215,  457 => 225,  455 => 224,  454 => 222,  453 => 221,  452 => 220,  446 => 218,  443 => 214,  440 => 211,  437 => 210,  434 => 209,  431 => 208,  427 => 207,  421 => 205,  419 => 204,  416 => 203,  412 => 201,  406 => 200,  404 => 183,  402 => 199,  400 => 187,  399 => 186,  395 => 196,  393 => 195,  392 => 193,  391 => 192,  390 => 191,  384 => 189,  381 => 185,  378 => 182,  375 => 181,  372 => 180,  369 => 179,  365 => 178,  359 => 176,  357 => 175,  354 => 174,  350 => 172,  348 => 154,  346 => 171,  344 => 159,  343 => 158,  339 => 168,  337 => 167,  336 => 165,  335 => 164,  334 => 163,  328 => 161,  325 => 157,  322 => 151,  319 => 150,  316 => 149,  313 => 148,  311 => 147,  303 => 145,  301 => 144,  298 => 143,  292 => 142,  287 => 139,  281 => 138,  279 => 124,  278 => 123,  276 => 137,  268 => 134,  261 => 133,  258 => 132,  250 => 129,  247 => 128,  244 => 127,  241 => 121,  238 => 120,  235 => 119,  231 => 118,  228 => 117,  222 => 116,  215 => 115,  212 => 114,  209 => 113,  206 => 112,  201 => 111,  198 => 110,  196 => 109,  190 => 108,  187 => 107,  185 => 82,  184 => 79,  181 => 104,  175 => 101,  173 => 100,  171 => 99,  168 => 97,  166 => 96,  164 => 95,  162 => 94,  160 => 93,  158 => 92,  154 => 91,  151 => 89,  149 => 88,  146 => 72,  140 => 70,  138 => 66,  134 => 64,  132 => 63,  130 => 62,  127 => 61,  123 => 59,  119 => 57,  117 => 56,  114 => 55,  112 => 54,  110 => 50,  108 => 49,  106 => 48,  104 => 47,  102 => 46,  98 => 44,  96 => 43,  94 => 42,  92 => 41,  90 => 40,  88 => 39,  86 => 38,  84 => 37,  80 => 35,  78 => 34,  76 => 33,  73 => 32,  69 => 30,  66 => 26,  65 => 25,  64 => 22,  63 => 21,  61 => 20,  59 => 19,  57 => 18,  54 => 17,  52 => 16,  51 => 14,  50 => 12,  49 => 11,  48 => 10,  46 => 9,  43 => 8,  41 => 7,  38 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Shows a revision menu for an element.

    Only an existing element should be passed to this.
#}

{% import \"_includes/forms\" as forms %}

{% set showDrafts = showDrafts ?? false %}
{% set drafts = element.id and showDrafts ? element.find()
    .draftOf(element)
    .siteId(element.siteId)
    .status(null)
    .orderBy({dateUpdated: SORT_DESC})
    .with(['draftCreator'])
    .all()|filter(d => canView(d)) : [] %}

{% set maxRevisions = craft.app.config.general.maxRevisions %}
{% if element.id and (not maxRevisions or maxRevisions > 1) %}
    {% set revisions = element.find()
        .revisionOf(element.getCanonicalId())
        .siteId(element.siteId)
        .status(null)
        .offset(1)
        .limit(maxRevisions ? min(maxRevisions - 1, 10) : 10)
        .orderBy({dateCreated: SORT_DESC})
        .with(['revisionCreator'])
        .all() %}
{% else %}
    {% set revisions = [] %}
{% endif %}

{% set baseParams = craft.app.request.queryParams|withoutKey('draftId')|withoutKey('revisionId')|withoutKey('siteId')|withoutKey('fresh') %}
{% if craft.app.config.general.pathParam %}
    {% set baseParams = baseParams|withoutKey(craft.app.config.general.pathParam) %}
{% endif %}
{% set supportedSiteIds = supportedSiteIds ?? (craft.app.isMultiSite ? element.getSupportedSites()|filter(s => s.propagate ?? true) : [element.siteId])|column(s => s.siteId ?? s) %}
{% set editableSiteIds = editableSiteIds ?? supportedSiteIds|intersect(craft.app.sites.getEditableSiteIds()) %}
{% set isMultiSiteElement = supportedSiteIds|length > 1 %}
{% set canEditMultipleSites = editableSiteIds|length > 1 %}
{% set isProvisionalDraft = element.isProvisionalDraft %}
{% set originalElement = element %}
{% if isProvisionalDraft %}
    {% set element = element.getCanonical(true) %}
{% endif %}
{% set isDraft = not isProvisionalDraft and element.getIsDraft() %}
{% set isRevision = element.getIsRevision() %}
{% set showSiteLabel = showSiteLabel ?? isMultiSiteElement %}
{% set showRevisionLabel = showRevisionLabel ?? (showDrafts or revisions|length) %}
{% set cpEditUrl = cpUrl(element.getCpEditUrl(), {
    draftId: null,
    revisionId: null,
}) %}
{% if isDraft %}
    {% set baseUrl = url(cpEditUrl, baseParams|merge({ draftId: element.draftId })) %}
{% elseif isRevision %}
    {% set baseUrl = url(cpEditUrl, baseParams|merge({ revisionId: element.revisionId })) %}
{% else %}
    {% set baseUrl = cpEditUrl %}
{% endif %}

{% set showRevisions = showRevisionLabel and not element.getIsUnpublishedDraft() %}
{% set showMenu = editableSiteIds|length > 1 or showRevisions %}

<div class=\"context-btngroup btngroup\">
    {% tag 'label' with {
        class: 'visually-hidden',
        id: 'context-label',
    } %}
        {{ 'Context'|t('app') }}
    {% endtag %}
    {% tag 'button' with {
        type: 'button',
        class: [
            'context-btn',
            'btn',
            'btngroup-btn-first',
            'btngroup-btn-last',
            showMenu ? 'menubtn' : 'disabled',
        ],
        data: {
            icon: showSiteLabel ? 'world' : null,
        },
        aria: {
            'labelledby': 'context-label',
        }
    } %}
        {%- if showSiteLabel %}
            {{- originalElement.getSite().name|t('site') }}
        {%- endif %}
        {%- if showSiteLabel and showRevisionLabel %} – {% endif %}
        {%- if showRevisionLabel -%}
            <span class=\"revision-label\">
                {%- if isDraft %}
                    {{- element.getDraftName() }}
                {%- elseif isRevision %}
                    {{- element.getRevisionLabel() }}
                {%- else %}
                    {{- 'Current'|t('app') }}
                    {%- if isProvisionalDraft -%}
                        <span> — {{ 'Edited'|t('app') }}</span>
                    {%- endif %}
                {%- endif -%}
            </span>
        {%- endif -%}
    {% endtag %}

    <div class=\"revision-menu menu padded{% if not showMenu %} hidden{% endif %}\">
        {% set enabledSiteIds = element.id ? craft.app.elements.getEnabledSiteIdsForElement(element.id) : [] %}
        {% set siteGroups = craft.app.sites.getAllGroups() %}
        {% for group in siteGroups %}
            {% set groupSites = group.getSites() %}
            {% if groupSites|length %}
                {% set groupIsVisible = canEditMultipleSites and groupSites|column('id')|intersect(editableSiteIds)|length %}
                <div class=\"site-group{% if not groupIsVisible %} hidden{% endif %}\">
                    {% if siteGroups|length > 1 %}<h6 cass=\"padded\">{{ group.name|t('site') }}</h6>{% endif %}
                    <ul class=\"padded\">
                        {% for site in groupSites %}
                            {% set status = element.enabled and site.id in enabledSiteIds ? 'enabled' : 'disabled' %}
                            {% set isSelected = site.id == originalElement.siteId %}
                            {% tag 'li' with {
                                class: [
                                    site.id not in editableSiteIds ? 'hidden' : null,
                                    isSelected ? 'sel' : null,
                                ]|filter,
                            } %}
                                {% if isSelected %}
                                    <a class=\"site-option sel\">
                                        <div class=\"status {{ status }}\"></div>{{ site.name|t('site') }}
                                    </a>
                                {% else %}
                                    {% set url = url(baseUrl, { site: site.handle }) %}
                                    <a class=\"site-option\" href=\"{{ url }}\" data-site-id=\"{{ site.id }}\">
                                        <div class=\"status {{ status }}\"></div>{{ site.name|t('site') }}
                                    </a>
                                {% endif %}
                            {% endtag %}
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}
        {% endfor %}

        {% if showRevisions %}
            <hr class=\"revision-hr{% if not canEditMultipleSites %} hidden{% endif %}\">
            <ul class=\"padded revision-group-current\">
                {% set currentRevision = element.getCurrentRevision() %}
                {% set currentRevisionEditTime = currentRevision.dateCreated ?? element.dateUpdated %}
                {% set currentRevisionCreator = currentRevision ? currentRevision.getCreator() %}
                {% set isSelected = not isDraft and not isRevision %}
                {% tag 'li' with {
                    class: [
                        'current-revision',
                        isSelected ? 'sel' : null,
                    ]|filter,
                } %}
                    {% tag 'a' with {
                        class: isSelected ? 'sel' : false,
                        href: cpEditUrl,
                    } %}
                        {{ 'Current'|t('app') }}
                        <div class=\"smalltext\">
                            {{ currentRevisionCreator ? 'Saved {timestamp} by {creator}'|t('app', {
                                timestamp: currentRevisionEditTime|timestamp('short', withPreposition=true),
                                creator: currentRevisionCreator.name,
                            }) : 'Last saved {timestamp}'|t('app', {
                                timestamp: currentRevisionEditTime|timestamp('short', withPreposition=true),
                            }) }}
                        </div>
                    {% endtag %}
                {% endtag %}
            </ul>
        {% endif %}

        {% if drafts %}
            <h6 class=\"padded\">{{ \"Drafts\"|t('app') }}</h6>
            <ul class=\"padded revision-group-drafts\">
                {% for draft in drafts %}
                    {% set url = url(cpEditUrl, baseParams|merge({ draftId: draft.draftId })) %}
                    {% set creator = draft.getCreator() %}
                    {% set isSelected = draft.draftId == element.draftId %}
                    {% tag 'li' with {
                        class: isSelected ? 'sel' : false,
                    } %}
                        {% tag 'a' with {
                            class: isSelected ? 'sel' : false,
                            href: url,
                        } %}
                            <div class=\"draft-name\">{{ draft.draftName }}</div>
                            <div class=\"draft-meta smalltext\">
                                {{ creator ? 'Saved {timestamp} by {creator}'|t('app', {
                                    timestamp: draft.dateUpdated|timestamp('short', withPreposition=true),
                                    creator: creator.name,
                                }) : 'Saved {timestamp}'|t('app', {
                                    timestamp: draft.dateUpdated|timestamp('short', withPreposition=true),
                                }) }}
                            </div>
                        {% endtag %}
                    {% endtag %}
                {% endfor %}
            </ul>
        {% endif %}

        {% if revisions %}
            <h6 class=\"padded\">{{ \"Recent Revisions\"|t('app') }}</h6>
            <ul class=\"revision-group-revisions padded\">
                {% for revision in revisions %}
                    {% set url = url(cpEditUrl, baseParams|merge({ revisionId: revision.revisionId })) %}
                    {% set creator = revision.getCreator() %}
                    {% set isSelected = revision.revisionId == element.revisionId %}
                    {% tag 'li' with {
                        class: isSelected ? 'sel' : false,
                    } %}
                        {% tag 'a' with {
                            class: isSelected ? 'sel' : false,
                            href: url,
                        } %}
                            {{ revision.getRevisionLabel() }}
                            <div class=\"smalltext\">
                                {{ creator ? 'Saved {timestamp} by {creator}'|t('app', {
                                    timestamp: revision.dateCreated|timestamp('short', withPreposition=true),
                                    creator: creator.name,
                                }) : 'Saved {timestamp}'|t('app', {
                                    timestamp: revision.dateCreated|timestamp('short', withPreposition=true),
                                }) }}
                            </div>
                        {% endtag %}
                    {% endtag %}
                {% endfor %}
            </ul>
        {% endif %}
    </div>
</div>
", "_includes/revisionmenu.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/revisionmenu.twig");
    }
}
