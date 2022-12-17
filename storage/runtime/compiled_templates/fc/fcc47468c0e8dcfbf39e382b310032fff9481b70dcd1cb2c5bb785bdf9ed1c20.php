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

/* settings/fields/_type-settings */
class __TwigTemplate_de56eba07fa9756e1fd72e8c5d4297367a4382a9e8e35915619942924fbb645b extends Template
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
        craft\helpers\Template::beginProfile("template", "settings/fields/_type-settings");
        // line 1
        $_namespace = (($context["namespace"]) ?? (null));
        if ($_namespace) {
            $_originalNamespace = Craft::$app->getView()->getNamespace();
            Craft::$app->getView()->setNamespace(Craft::$app->getView()->namespaceInputName($_namespace));
            ob_start();
            try {
                // line 2
                echo "    ";
                echo craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 2, $this->source); })()), "getSettingsHtml", [], "method");
                echo "
";
            } catch (Exception $e) {
                ob_end_clean();

                throw $e;
            }
            echo craft\helpers\Html::namespaceHtml(ob_get_clean(), $_namespace, false);
            Craft::$app->getView()->setNamespace($_originalNamespace);
        } else {
            echo "    ";
            echo craft\helpers\Template::attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 2, $this->source); })()), "getSettingsHtml", [], "method");
            echo "
";
        }
        unset($_originalNamespace, $_namespace);
        craft\helpers\Template::endProfile("template", "settings/fields/_type-settings");
    }

    public function getTemplateName()
    {
        return "settings/fields/_type-settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% namespace namespace ?? null %}
    {{ field.getSettingsHtml()|raw }}
{% endnamespace %}
", "settings/fields/_type-settings", "/var/www/html/vendor/craftcms/cms/src/templates/settings/fields/_type-settings.twig");
    }
}
