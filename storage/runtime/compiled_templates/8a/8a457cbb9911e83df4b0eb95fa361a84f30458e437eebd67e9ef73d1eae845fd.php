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

/* _includes/forms/errorList */
class __TwigTemplate_2280c69cafcf608701e9d123bd996e198316a72adb204610ce600eef41bed3d2 extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/errorList");
        // line 1
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            ob_start();
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 7
                echo "            <li>
                ";
                // line 8
                echo $this->extensions['craft\web\twig\Extension']->tagFunction("span", ["class" => "visually-hidden", "text" => $this->extensions['craft\web\twig\Extension']->translateFilter("Error:", "app")]);
                // line 11
                echo "
                ";
                // line 12
                echo $this->extensions['craft\web\twig\Extension']->replaceFilter($this->extensions['craft\web\twig\Extension']->markdownFilter(twig_escape_filter($this->env, $context["error"]), null, true), "/&amp;(\\w+);/", "&\$1;");
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
            echo craft\helpers\Html::tag("ul", ob_get_clean(), ["id" => ((            // line 3
$context["id"]) ?? (false)), "class" => "errors"]);
        }
        craft\helpers\Template::endProfile("template", "_includes/forms/errorList");
    }

    public function getTemplateName()
    {
        return "_includes/forms/errorList";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 3,  65 => 15,  56 => 12,  53 => 11,  51 => 8,  48 => 7,  43 => 6,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- if errors %}
    {% tag 'ul' with {
        id: id ?? false,
        class: 'errors',
    } %}
        {% for error in errors %}
            <li>
                {{ tag('span', {
                    class: 'visually-hidden',
                    text: 'Error:'|t('app'),
                }) }}
                {{ error|e|md(inlineOnly=true)|replace('/&amp;(\\\\w+);/', '&\$1;')|raw }}
            </li>
        {% endfor %}
    {% endtag %}
{%- endif %}
", "_includes/forms/errorList", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms/errorList.twig");
    }
}
