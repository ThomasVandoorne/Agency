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

/* _includes/forms/fs */
class __TwigTemplate_2961a142ad4c221266f0cf1ab8681f3f2b410ad10ff007e5af97ac82cfbf0fe9 extends Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/fs");
        // line 1
        $context["id"] = (($context["id"]) ?? (("fs" . twig_random($this->env))));
        // line 2
        echo "
";
        // line 3
        $context["addOptionFn"] = ('' === $tmp = "(createOption, selectize) => {
    const slideout = new Craft.CpScreenSlideout('fs/edit');
    slideout.on('submit', ev => {
        createOption({
            text: ev.data.name,
            value: ev.data.handle,
            hint: ev.data.handle,
        });
    });
    slideout.on('close', () => {
        selectize.focus();
    });
}
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        echo "
";
        // line 19
        $this->loadTemplate("_includes/forms/selectize", "_includes/forms/fs", 19)->display(twig_array_merge($context, ["options" => ((        // line 20
$context["options"]) ?? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 20, $this->source); })()), "cp", []), "getFsOptions", [], "method"))), "addOptionLabel" => $this->extensions['craft\web\twig\Extension']->translateFilter("Create a new filesystem…", "app")]));
        craft\helpers\Template::endProfile("template", "_includes/forms/fs");
    }

    public function getTemplateName()
    {
        return "_includes/forms/fs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  61 => 19,  58 => 18,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set id = id ?? \"fs#{random()}\" %}

{% set addOptionFn %}
(createOption, selectize) => {
    const slideout = new Craft.CpScreenSlideout('fs/edit');
    slideout.on('submit', ev => {
        createOption({
            text: ev.data.name,
            value: ev.data.handle,
            hint: ev.data.handle,
        });
    });
    slideout.on('close', () => {
        selectize.focus();
    });
}
{% endset %}

{% include '_includes/forms/selectize' with {
    options: options ?? craft.cp.getFsOptions(),
    addOptionLabel: 'Create a new filesystem…'|t('app'),
} %}
", "_includes/forms/fs", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms/fs.twig");
    }
}
