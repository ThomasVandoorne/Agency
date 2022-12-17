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

/* _includes/nav */
class __TwigTemplate_af57b1d21c0793e1d0f4bbb458d425ccc8e6f3d1b61ad7aac15a1337a682af61 extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/nav");
        // line 1
        echo "<nav ";
        if ((array_key_exists("label", $context) && (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 1, $this->source); })()))) {
            echo "aria-label=\"";
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 1, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo ">
    <ul>
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 3, $this->source); })()));
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
            // line 4
            echo "            ";
            if ($context["item"]) {
                // line 5
                echo "                ";
                $context["itemIsSelected"] = (( !array_key_exists("selectedItem", $context) && craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "first", [])) || (array_key_exists("selectedItem", $context) && ((isset($context["selectedItem"]) || array_key_exists("selectedItem", $context) ? $context["selectedItem"] : (function () { throw new RuntimeError('Variable "selectedItem" does not exist.', 5, $this->source); })()) == $context["itemId"])));
                // line 6
                echo "<li><a";
                if ((isset($context["itemIsSelected"]) || array_key_exists("itemIsSelected", $context) ? $context["itemIsSelected"] : (function () { throw new RuntimeError('Variable "itemIsSelected" does not exist.', 6, $this->source); })())) {
                    echo " class=\"sel\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "label", []), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 8
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
        unset($context['_seq'], $context['_iterated'], $context['itemId'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
</nav>
";
        craft\helpers\Template::endProfile("template", "_includes/nav");
    }

    public function getTemplateName()
    {
        return "_includes/nav";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 9,  83 => 8,  71 => 6,  68 => 5,  65 => 4,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav {% if label is defined and label %}aria-label=\"{{ label }}\"{% endif %}>
    <ul>
        {% for itemId, item in items %}
            {% if item %}
                {% set itemIsSelected = ((selectedItem is not defined and loop.first) or (selectedItem is defined and selectedItem == itemId)) -%}
                <li><a{% if itemIsSelected %} class=\"sel\"{% endif %} href=\"{{ item.url }}\">{{ item.label }}</a></li>
            {% endif %}
        {% endfor %}
    </ul>
</nav>
", "_includes/nav", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/nav.twig");
    }
}
