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

/* _includes/forms/fld/field-settings.twig */
class __TwigTemplate_e8d683179e6265bec0ab7f00e7a2cc591322cea95ca207d8db9709b090c422ff extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/fld/field-settings.twig");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_includes/forms/fld/field-settings.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["hideLabelChangeJs"] = ('' === $tmp = "if (this.checked) {
    \$(this).closest('.field').find('.text').addClass('disabled').prop('disabled', true);
  } else {
    \$(this).closest('.field').find('.text').removeClass('disabled').prop('disabled', false);
  }") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
";
        // line 11
        $this->loadTemplate("_includes/forms/fld/field-settings.twig", "_includes/forms/fld/field-settings.twig", 11, "272433545")->display(twig_array_merge($context, ["id" => "label", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Label", "app")]));
        // line 38
        echo "
";
        // line 39
        echo twig_call_macro($macros["forms"], "macro_textareaField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Instructions", "app"), "id" => "instructions", "class" => "nicetext", "name" => "instructions", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 44
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 44, $this->source); })()), "instructions", []), "placeholder" =>         // line 45
(isset($context["defaultInstructions"]) || array_key_exists("defaultInstructions", $context) ? $context["defaultInstructions"] : (function () { throw new RuntimeError('Variable "defaultInstructions" does not exist.', 45, $this->source); })())]], 39, $context, $this->getSourceContext());
        // line 46
        echo "
";
        craft\helpers\Template::endProfile("template", "_includes/forms/fld/field-settings.twig");
    }

    public function getTemplateName()
    {
        return "_includes/forms/fld/field-settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 46,  59 => 45,  58 => 44,  57 => 39,  54 => 38,  52 => 11,  49 => 10,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '_includes/forms' as forms %}

{% set hideLabelChangeJs -%}
  if (this.checked) {
    \$(this).closest('.field').find('.text').addClass('disabled').prop('disabled', true);
  } else {
    \$(this).closest('.field').find('.text').removeClass('disabled').prop('disabled', false);
  }
{%- endset %}

{% embed '_includes/forms/field' with {
  id: 'label',
  label: 'Label'|t('app'),
} %}
  {% block heading %}
    {{ parent() }}
    <div class=\"flex-grow\"></div>
    {% include '_includes/forms/checkbox' with {
      id: 'label-toggle',
      name: 'labelHidden',
      label: 'Hide'|t('app'),
      checked: labelHidden,
      inputAttributes: {
        onchange: hideLabelChangeJs,
      },
    } %}
  {% endblock %}
  {% block input %}
    {% include '_includes/forms/text' with {
      id: 'label',
      name: 'label',
      value: not labelHidden ? field.label,
      placeholder: defaultLabel,
      disabled: labelHidden,
    } %}
  {% endblock %}
{% endembed %}

{{ forms.textareaField({
  label: 'Instructions'|t('app'),
  id: 'instructions',
  class: 'nicetext',
  name: 'instructions',
  value: field.instructions,
  placeholder: defaultInstructions,
}) }}
", "_includes/forms/fld/field-settings.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms/fld/field-settings.twig");
    }
}


/* _includes/forms/fld/field-settings.twig */
class __TwigTemplate_e8d683179e6265bec0ab7f00e7a2cc591322cea95ca207d8db9709b090c422ff___272433545 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'heading' => [$this, 'block_heading'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "_includes/forms/field";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_includes/forms/fld/field-settings.twig");
        $this->parent = $this->loadTemplate("_includes/forms/field", "_includes/forms/fld/field-settings.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_includes/forms/fld/field-settings.twig");
    }

    // line 15
    public function block_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "heading");
        // line 16
        echo "    ";
        $this->displayParentBlock("heading", $context, $blocks);
        echo "
    <div class=\"flex-grow\"></div>
    ";
        // line 18
        $this->loadTemplate("_includes/forms/checkbox", "_includes/forms/fld/field-settings.twig", 18)->display(twig_array_merge($context, ["id" => "label-toggle", "name" => "labelHidden", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Hide", "app"), "checked" =>         // line 22
(isset($context["labelHidden"]) || array_key_exists("labelHidden", $context) ? $context["labelHidden"] : (function () { throw new RuntimeError('Variable "labelHidden" does not exist.', 22, $this->source); })()), "inputAttributes" => ["onchange" =>         // line 24
(isset($context["hideLabelChangeJs"]) || array_key_exists("hideLabelChangeJs", $context) ? $context["hideLabelChangeJs"] : (function () { throw new RuntimeError('Variable "hideLabelChangeJs" does not exist.', 24, $this->source); })())]]));
        // line 27
        echo "  ";
        craft\helpers\Template::endProfile("block", "heading");
    }

    // line 28
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "input");
        // line 29
        echo "    ";
        $this->loadTemplate("_includes/forms/text", "_includes/forms/fld/field-settings.twig", 29)->display(twig_array_merge($context, ["id" => "label", "name" => "label", "value" => (( !        // line 32
(isset($context["labelHidden"]) || array_key_exists("labelHidden", $context) ? $context["labelHidden"] : (function () { throw new RuntimeError('Variable "labelHidden" does not exist.', 32, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 32, $this->source); })()), "label", [])) : ("")), "placeholder" =>         // line 33
(isset($context["defaultLabel"]) || array_key_exists("defaultLabel", $context) ? $context["defaultLabel"] : (function () { throw new RuntimeError('Variable "defaultLabel" does not exist.', 33, $this->source); })()), "disabled" =>         // line 34
(isset($context["labelHidden"]) || array_key_exists("labelHidden", $context) ? $context["labelHidden"] : (function () { throw new RuntimeError('Variable "labelHidden" does not exist.', 34, $this->source); })())]));
        // line 36
        echo "  ";
        craft\helpers\Template::endProfile("block", "input");
    }

    public function getTemplateName()
    {
        return "_includes/forms/fld/field-settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 36,  197 => 34,  196 => 33,  195 => 32,  193 => 29,  188 => 28,  183 => 27,  181 => 24,  180 => 22,  179 => 18,  173 => 16,  168 => 15,  155 => 11,  61 => 46,  59 => 45,  58 => 44,  57 => 39,  54 => 38,  52 => 11,  49 => 10,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '_includes/forms' as forms %}

{% set hideLabelChangeJs -%}
  if (this.checked) {
    \$(this).closest('.field').find('.text').addClass('disabled').prop('disabled', true);
  } else {
    \$(this).closest('.field').find('.text').removeClass('disabled').prop('disabled', false);
  }
{%- endset %}

{% embed '_includes/forms/field' with {
  id: 'label',
  label: 'Label'|t('app'),
} %}
  {% block heading %}
    {{ parent() }}
    <div class=\"flex-grow\"></div>
    {% include '_includes/forms/checkbox' with {
      id: 'label-toggle',
      name: 'labelHidden',
      label: 'Hide'|t('app'),
      checked: labelHidden,
      inputAttributes: {
        onchange: hideLabelChangeJs,
      },
    } %}
  {% endblock %}
  {% block input %}
    {% include '_includes/forms/text' with {
      id: 'label',
      name: 'label',
      value: not labelHidden ? field.label,
      placeholder: defaultLabel,
      disabled: labelHidden,
    } %}
  {% endblock %}
{% endembed %}

{{ forms.textareaField({
  label: 'Instructions'|t('app'),
  id: 'instructions',
  class: 'nicetext',
  name: 'instructions',
  value: field.instructions,
  placeholder: defaultInstructions,
}) }}
", "_includes/forms/fld/field-settings.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms/fld/field-settings.twig");
    }
}
