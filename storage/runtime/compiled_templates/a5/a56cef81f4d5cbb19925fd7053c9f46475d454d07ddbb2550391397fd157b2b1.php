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

/* _components/fs/Local/settings.twig */
class __TwigTemplate_0bded414dda4b620f2ebd82b65ecf2b44c7afe1bfe8c0b3e6a9fbb83ac0bef36 extends Template
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
        craft\helpers\Template::beginProfile("template", "_components/fs/Local/settings.twig");
        // line 1
        $macros["__internal_parse_0"] = $this->macros["__internal_parse_0"] = $this->loadTemplate("_includes/forms", "_components/fs/Local/settings.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        echo twig_call_macro($macros["__internal_parse_0"], "macro_autosuggestField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Base Path", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The base folder path that should be used as the root of the filesystem.", "app"), "id" => "path", "class" => "ltr", "name" => "path", "suggestEnvVars" => true, "suggestAliases" => true, "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 11
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 11, $this->source); })()), "path", []), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 12
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 12, $this->source); })()), "getErrors", [0 => "path"], "method"), "required" => true, "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("/path/to/folder", "app")]], 3, $context, $this->getSourceContext());
        // line 15
        echo "
";
        craft\helpers\Template::endProfile("template", "_components/fs/Local/settings.twig");
    }

    public function getTemplateName()
    {
        return "_components/fs/Local/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  45 => 12,  44 => 11,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% from \"_includes/forms\" import autosuggestField %}

{{ autosuggestField({
    label: \"Base Path\"|t('app'),
    instructions: \"The base folder path that should be used as the root of the filesystem.\"|t('app'),
    id: 'path',
    class: 'ltr',
    name: 'path',
    suggestEnvVars: true,
    suggestAliases: true,
    value: volume.path,
    errors: volume.getErrors('path'),
    required: true,
    placeholder: \"/path/to/folder\"|t('app')
}) }}
", "_components/fs/Local/settings.twig", "/var/www/html/vendor/craftcms/cms/src/templates/_components/fs/Local/settings.twig");
    }
}
