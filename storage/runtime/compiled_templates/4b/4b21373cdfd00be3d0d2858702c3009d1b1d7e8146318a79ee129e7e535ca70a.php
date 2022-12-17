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

/* _components/fieldtypes/Categories/settings.twig */
class __TwigTemplate_b3d294145e30afddf7dc52e785fc926fba996d086c2df0c71fafde64fa46627e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fieldSettings' => [$this, 'block_fieldSettings'],
            'branchLimitField' => [$this, 'block_branchLimitField'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_components/fieldtypes/elementfieldsettings";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_components/fieldtypes/Categories/settings.twig");
        // line 3
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Categories/settings.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("_components/fieldtypes/elementfieldsettings", "_components/fieldtypes/Categories/settings.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_components/fieldtypes/Categories/settings.twig");
    }

    // line 6
    public function block_fieldSettings($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "fieldSettings");
        // line 7
        echo "    ";
        $this->displayBlock("sourcesField", $context, $blocks);
        echo "

    ";
        // line 9
        $this->displayBlock('branchLimitField', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock("viewModeField", $context, $blocks);
        echo "
    ";
        // line 22
        $this->displayBlock("selectionLabelField", $context, $blocks);
        echo "
    ";
        // line 23
        $this->displayBlock("validateRelatedElementsField", $context, $blocks);
        echo "
    ";
        // line 24
        $this->displayBlock("advancedSettings", $context, $blocks);
        echo "
";
        craft\helpers\Template::endProfile("block", "fieldSettings");
    }

    // line 9
    public function block_branchLimitField($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "branchLimitField");
        // line 10
        echo "        ";
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Branch Limit", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Limit the number of selectable category branches.", "app"), "id" => "branchLimit", "name" => "branchLimit", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 15
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 15, $this->source); })()), "branchLimit", []), "size" => 2, "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 17
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 17, $this->source); })()), "getErrors", [0 => "branchLimit"], "method")]], 10, $context, $this->getSourceContext());
        // line 18
        echo "
    ";
        craft\helpers\Template::endProfile("block", "branchLimitField");
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Categories/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 18,  95 => 17,  94 => 15,  92 => 10,  87 => 9,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  65 => 20,  63 => 9,  57 => 7,  52 => 6,  46 => 1,  44 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_components/fieldtypes/elementfieldsettings\" %}

{% import \"_includes/forms\" as forms %}


{% block fieldSettings %}
    {{ block('sourcesField') }}

    {% block branchLimitField %}
        {{ forms.textField({
            label: \"Branch Limit\"|t('app'),
            instructions: \"Limit the number of selectable category branches.\"|t('app'),
            id: 'branchLimit',
            name: 'branchLimit',
            value: field.branchLimit,
            size: 2,
            errors: field.getErrors('branchLimit')
        }) }}
    {% endblock %}

    {{ block('viewModeField') }}
    {{ block('selectionLabelField') }}
    {{ block('validateRelatedElementsField') }}
    {{ block('advancedSettings') }}
{% endblock %}
", "_components/fieldtypes/Categories/settings.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_components/fieldtypes/Categories/settings.twig");
    }
}
