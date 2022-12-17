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

/* _components/fieldtypes/Categories/input.twig */
class __TwigTemplate_5b2413a8b4fd3461c4c846e615c367efcaab8e218fe32265cc3b1d69c7d1485e extends Template
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
        craft\helpers\Template::beginProfile("template", "_components/fieldtypes/Categories/input.twig");
        // line 1
        echo craft\helpers\Html::hiddenInput((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 1, $this->source); })()), "");
        echo "
<div id=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" class=\"categoriesfield\">
    <ul class=\"elements structure\">
        ";
        if (isset($context['nav'])) {
            $_nav = $context['nav'];
        }
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 4, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            $_thisItemLevel = (int)craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["category"], 'level', [], Twig\Template::ANY_CALL, false, true);
            $_thisItemLft = (int)craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["category"], 'lft', [], Twig\Template::ANY_CALL, false, true);
            $_thisItemRgt = (int)craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["category"], 'rgt', [], Twig\Template::ANY_CALL, false, true);
            if (isset($_contextsByLevel)) {
                if (
                    $_thisItemLevel > $context['nav']['level'] + 1 ||
                    (isset($_contextsByLevel[$_thisItemLevel-1]['nav']['rgt']) && $_thisItemLft > $_contextsByLevel[$_thisItemLevel-1]['nav']['rgt'])
                ) {
                    continue;
                }
                $_tmpContext = $context;
                $context = $_contextsByLevel[$context['nav']['level']];
                if ($_thisItemLevel > $context['nav']['level']) {
                    for ($_i = $context['nav']['level']; $_i < $_thisItemLevel; $_i++) {
                        // line 12
                        echo "                    <ul>
                        ";
                    }
                } else {
                    // line 16
                    echo "            </li>
        ";
                    if ($_thisItemLevel < $context['nav']['level']) {
                        for ($_i = $context['nav']['level']-1; $_i >= $_thisItemLevel; $_i--) {
                            if (isset($_contextsByLevel[$_i])) {
                                $context = $_contextsByLevel[$_i];
                                // line 14
                                echo "                    </ul>
                ";
                                // line 16
                                echo "            </li>
        ";
                                unset($_contextsByLevel[$_i]);
                            }
                        }
                    }
                }
                $context = $_tmpContext;
                unset($_tmpContext);
            } else {
                $_firstItemLevel = $_thisItemLevel;
            }
            $context['nav'] = [
                'level' => $_thisItemLevel,
                'lft' => $_thisItemLft,
                'rgt' => $_thisItemRgt,
            ];
            if (isset($_contextsByLevel[$_thisItemLevel-1])) {
                $context['nav']['parent'] = $_contextsByLevel[$_thisItemLevel-1];
                if (method_exists($context["category"], 'setParent')) {
                    $context["category"]->setParent($context['nav']['parent']["category"]);
                }
            } else {
                $context['nav']['parent'] = null;
            }
            $_contextsByLevel[$_thisItemLevel] = $context;
            // line 5
            echo "            <li id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "-category-";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["category"], "id", []), "html", null, true);
            echo "\">
                ";
            // line 6
            $context["indent"] = ((craft\helpers\Template::attribute($this->env, $this->source, $context["category"], "level", []) - 1) * 35);
            // line 7
            echo "                <div class=\"row\" style=\"margin-left: -";
            echo twig_escape_filter($this->env, (isset($context["indent"]) || array_key_exists("indent", $context) ? $context["indent"] : (function () { throw new RuntimeError('Variable "indent" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "px; padding-left: ";
            echo twig_escape_filter($this->env, (isset($context["indent"]) || array_key_exists("indent", $context) ? $context["indent"] : (function () { throw new RuntimeError('Variable "indent" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "px;\">";
            // line 8
            $this->loadTemplate("_elements/element", "_components/fieldtypes/Categories/input.twig", 8)->display(twig_array_merge($context, ["element" => $context["category"], "context" => "field"]));
            // line 9
            echo "</div>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (isset($_thisItemLevel)) {
            $_tmpContext = $context;
            if ($_thisItemLevel > $_firstItemLevel) {
                for ($_i = $_thisItemLevel; $_i > $_firstItemLevel; $_i--) {
                    if (isset($_contextsByLevel[$_i])) {
                        $context = $_contextsByLevel[$_i];
                                                // line 16
                        echo "            </li>
        ";
                                                // line 14
                        echo "                    </ul>
                ";
                    }
                }
            }
            $context = $_contextsByLevel[$_firstItemLevel];
            // line 16
            echo "            </li>
        ";
            $context = $_tmpContext;
            unset($_thisItemLevel, $_firstItemLevel, $_i, $_contextsByLevel, $_tmpContext);
        }
        if (isset($_nav)) {
            $context['nav'] = $_nav;
            unset($_nav);
        }
        // line 18
        echo "    </ul>

    <div class=\"flex flex-nowrap\">
        ";
        // line 21
        echo $this->extensions['craft\web\twig\Extension']->tagFunction("button", ["type" => "button", "text" =>         // line 23
(isset($context["selectionLabel"]) || array_key_exists("selectionLabel", $context) ? $context["selectionLabel"] : (function () { throw new RuntimeError('Variable "selectionLabel" does not exist.', 23, $this->source); })()), "class" => [0 => "btn", 1 => "add", 2 => "icon", 3 => "dashed"], "aria" => ["label" =>         // line 31
(isset($context["selectionLabel"]) || array_key_exists("selectionLabel", $context) ? $context["selectionLabel"] : (function () { throw new RuntimeError('Variable "selectionLabel" does not exist.', 31, $this->source); })()), "describedby" => ((        // line 32
$context["describedBy"]) ?? (false))]]);
        // line 34
        echo "
        <div class=\"spinner hidden\"></div>
    </div>
</div>

";
        // line 39
        if (array_key_exists("jsClass", $context)) {
            // line 40
            echo "    ";
            ob_start();
            // line 41
            echo "        new ";
            echo twig_escape_filter($this->env, (isset($context["jsClass"]) || array_key_exists("jsClass", $context) ? $context["jsClass"] : (function () { throw new RuntimeError('Variable "jsClass" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "({
            id: \"";
            // line 42
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getFilter('namespaceInputId')->getCallable()((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 42, $this->source); })())), "js"), "html", null, true);
            echo "\",
            name: \"";
            // line 43
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getFilter('namespaceInputName')->getCallable()((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 43, $this->source); })())), "js"), "html", null, true);
            echo "\",
            elementType: \"";
            // line 44
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new RuntimeError('Variable "elementType" does not exist.', 44, $this->source); })()), "js"), "html", null, true);
            echo "\",
            sources: ";
            // line 45
            echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 45, $this->source); })()));
            echo ",
            criteria: ";
            // line 46
            echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 46, $this->source); })()));
            echo ",
            sourceElementId: ";
            // line 47
            (((isset($context["sourceElementId"]) || array_key_exists("sourceElementId", $context) ? $context["sourceElementId"] : (function () { throw new RuntimeError('Variable "sourceElementId" does not exist.', 47, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["sourceElementId"]) || array_key_exists("sourceElementId", $context) ? $context["sourceElementId"] : (function () { throw new RuntimeError('Variable "sourceElementId" does not exist.', 47, $this->source); })()), "html", null, true))) : (print ("null")));
            echo ",
            prevalidate: ";
            // line 48
            echo (((($context["prevalidate"]) ?? (false))) ? ("true") : ("false"));
            echo ",
            branchLimit: ";
            // line 49
            (((isset($context["branchLimit"]) || array_key_exists("branchLimit", $context) ? $context["branchLimit"] : (function () { throw new RuntimeError('Variable "branchLimit" does not exist.', 49, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["branchLimit"]) || array_key_exists("branchLimit", $context) ? $context["branchLimit"] : (function () { throw new RuntimeError('Variable "branchLimit" does not exist.', 49, $this->source); })()), "html", null, true))) : (print ("null")));
            echo ",
            showSiteMenu: ";
            // line 50
            echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((($context["showSiteMenu"]) ?? (false)));
            echo ",
            modalStorageKey: \"";
            // line 51
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["storageKey"]) || array_key_exists("storageKey", $context) ? $context["storageKey"] : (function () { throw new RuntimeError('Variable "storageKey" does not exist.', 51, $this->source); })()), "js"), "html", null, true);
            echo "\",
            selectionLabel: \"";
            // line 52
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["selectionLabel"]) || array_key_exists("selectionLabel", $context) ? $context["selectionLabel"] : (function () { throw new RuntimeError('Variable "selectionLabel" does not exist.', 52, $this->source); })()), "js"), "html", null, true);
            echo "\"
        });
    ";
            craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        }
        craft\helpers\Template::endProfile("template", "_components/fieldtypes/Categories/input.twig");
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Categories/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 52,  245 => 51,  241 => 50,  237 => 49,  233 => 48,  229 => 47,  225 => 46,  221 => 45,  217 => 44,  213 => 43,  209 => 42,  204 => 41,  201 => 40,  199 => 39,  192 => 34,  190 => 32,  189 => 31,  188 => 23,  187 => 21,  182 => 18,  172 => 16,  165 => 14,  162 => 16,  140 => 9,  138 => 8,  132 => 7,  130 => 6,  123 => 5,  96 => 16,  93 => 14,  86 => 16,  81 => 12,  50 => 4,  42 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ hiddenInput(name, '') }}
<div id=\"{{ id }}\" class=\"categoriesfield\">
    <ul class=\"elements structure\">
        {% nav category in elements %}
            <li id=\"{{ id }}-category-{{ category.id }}\">
                {% set indent = (category.level - 1) * 35 %}
                <div class=\"row\" style=\"margin-left: -{{ indent }}px; padding-left: {{ indent }}px;\">
                    {%- include \"_elements/element\" with { element: category, context: 'field' } -%}
                </div>

                {% ifchildren %}
                    <ul>
                        {% children %}
                    </ul>
                {% endifchildren %}
            </li>
        {% endnav %}
    </ul>

    <div class=\"flex flex-nowrap\">
        {{ tag('button', {
            type: 'button',
            text: selectionLabel,
            class: [
                'btn',
                'add',
                'icon',
                'dashed',
            ],
            aria: {
                label: selectionLabel,
                describedby: describedBy ?? false,
            },
        }) }}
        <div class=\"spinner hidden\"></div>
    </div>
</div>

{% if jsClass is defined %}
    {% js %}
        new {{ jsClass }}({
            id: \"{{ id   | namespaceInputId   | e('js') }}\",
            name: \"{{ name | namespaceInputName | e('js') }}\",
            elementType: \"{{ elementType|e('js') }}\",
            sources: {{ sources|json_encode|raw }},
            criteria: {{ criteria|json_encode|raw }},
            sourceElementId: {{ sourceElementId ?: 'null' }},
            prevalidate: {{ (prevalidate ?? false) ? 'true' : 'false' }},
            branchLimit: {{ branchLimit ?: 'null' }},
            showSiteMenu: {{ (showSiteMenu ?? false)|json_encode|raw }},
            modalStorageKey: \"{{ storageKey|e('js') }}\",
            selectionLabel: \"{{ selectionLabel|e('js') }}\"
        });
    {% endjs %}
{% endif %}
", "_components/fieldtypes/Categories/input.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_components/fieldtypes/Categories/input.twig");
    }
}
