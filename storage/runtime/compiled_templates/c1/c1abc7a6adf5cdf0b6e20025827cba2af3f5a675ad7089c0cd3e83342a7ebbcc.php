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

/* _layouts/components/alerts */
class __TwigTemplate_f01cfd00fdc1033fe11260db25537505bb57c505e749106a477c18d6a29458fa extends Template
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
        craft\helpers\Template::beginProfile("template", "_layouts/components/alerts");
        // line 1
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 1, $this->source); })()), "cp", []), "areAlertsCached", [], "method")) {
            // line 2
            echo "  ";
            $context["alerts"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 2, $this->source); })()), "cp", []), "getAlerts", [], "method");
            // line 3
            echo "  ";
            if ((isset($context["alerts"]) || array_key_exists("alerts", $context) ? $context["alerts"] : (function () { throw new RuntimeError('Variable "alerts" does not exist.', 3, $this->source); })())) {
                // line 4
                echo "    ";
                $this->loadTemplate("_layouts/components/alerts", "_layouts/components/alerts", 4, "1502511558")->display(twig_to_array(["alerts" =>                 // line 5
(isset($context["alerts"]) || array_key_exists("alerts", $context) ? $context["alerts"] : (function () { throw new RuntimeError('Variable "alerts" does not exist.', 5, $this->source); })()), "type" => "ul", "attributes" => ["id" => "alerts"], "style" => ["display" => "block", "position" => "relative", "background-color" => "var(--red-050)", "border-left" => "5px solid var(--error-color)", "padding" => "11px 0", "text-align" => "center", "color" => "var(--error-color)"]]));
                // line 44
                echo "  ";
            }
        } else {
            // line 46
            echo "  ";
            ob_start();
            // line 47
            echo "    Craft.cp.fetchAlerts().then(alerts => {
      Craft.cp.displayAlerts(alerts);
    });
  ";
            craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        }
        craft\helpers\Template::endProfile("template", "_layouts/components/alerts");
    }

    public function getTemplateName()
    {
        return "_layouts/components/alerts";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 47,  54 => 46,  50 => 44,  48 => 5,  46 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if craft.cp.areAlertsCached() %}
  {% set alerts = craft.cp.getAlerts() %}
  {% if alerts %}
    {% embed '_layouts/components/tag.twig' with {
      alerts: alerts,
      type: 'ul',
      attributes: {
        id: 'alerts',
      },
      style: {
        'display': 'block',
        'position': 'relative',
        'background-color': 'var(--red-050)',
        'border-left': '5px solid var(--error-color)',
        'padding': '11px 0',
        'text-align': 'center',
        'color': 'var(--error-color)',
      },
    } only %}
      {% block content %}
        {% for alert in alerts %}
          {% embed '_layouts/components/tag.twig' with {
            alert: alert,
            type: 'li',
            style: {
              'display': 'block',
              'padding': '4px var(--xl)',
            },
          } only %}
            {% block content %}
              {% include '_layouts/components/tag.twig' with {
                type: 'span',
                attributes: {
                  'aria-label': 'Error'|t('app'),
                  'data-icon': 'alert',
                },
              } only %}
              {{ alert|raw }}
            {% endblock %}
          {% endembed %}
        {% endfor %}
      {% endblock %}
    {% endembed %}
  {% endif %}
{% else %}
  {% js %}
    Craft.cp.fetchAlerts().then(alerts => {
      Craft.cp.displayAlerts(alerts);
    });
  {% endjs %}
{% endif %}
", "_layouts/components/alerts", "/var/www/html/vendor/craftcms/cms/src/templates/_layouts/components/alerts.twig");
    }
}


/* _layouts/components/alerts */
class __TwigTemplate_f01cfd00fdc1033fe11260db25537505bb57c505e749106a477c18d6a29458fa___1502511558 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return "_layouts/components/tag.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_layouts/components/alerts");
        $this->parent = $this->loadTemplate("_layouts/components/tag.twig", "_layouts/components/alerts", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_layouts/components/alerts");
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 21
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alerts"]) || array_key_exists("alerts", $context) ? $context["alerts"] : (function () { throw new RuntimeError('Variable "alerts" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 22
            echo "          ";
            $this->loadTemplate("_layouts/components/alerts", "_layouts/components/alerts", 22, "158173502")->display(twig_to_array(["alert" =>             // line 23
$context["alert"], "type" => "li", "style" => ["display" => "block", "padding" => "4px var(--xl)"]]));
            // line 41
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "      ";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "_layouts/components/alerts";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 42,  186 => 41,  184 => 23,  182 => 22,  177 => 21,  172 => 20,  159 => 4,  57 => 47,  54 => 46,  50 => 44,  48 => 5,  46 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if craft.cp.areAlertsCached() %}
  {% set alerts = craft.cp.getAlerts() %}
  {% if alerts %}
    {% embed '_layouts/components/tag.twig' with {
      alerts: alerts,
      type: 'ul',
      attributes: {
        id: 'alerts',
      },
      style: {
        'display': 'block',
        'position': 'relative',
        'background-color': 'var(--red-050)',
        'border-left': '5px solid var(--error-color)',
        'padding': '11px 0',
        'text-align': 'center',
        'color': 'var(--error-color)',
      },
    } only %}
      {% block content %}
        {% for alert in alerts %}
          {% embed '_layouts/components/tag.twig' with {
            alert: alert,
            type: 'li',
            style: {
              'display': 'block',
              'padding': '4px var(--xl)',
            },
          } only %}
            {% block content %}
              {% include '_layouts/components/tag.twig' with {
                type: 'span',
                attributes: {
                  'aria-label': 'Error'|t('app'),
                  'data-icon': 'alert',
                },
              } only %}
              {{ alert|raw }}
            {% endblock %}
          {% endembed %}
        {% endfor %}
      {% endblock %}
    {% endembed %}
  {% endif %}
{% else %}
  {% js %}
    Craft.cp.fetchAlerts().then(alerts => {
      Craft.cp.displayAlerts(alerts);
    });
  {% endjs %}
{% endif %}
", "_layouts/components/alerts", "/var/www/html/vendor/craftcms/cms/src/templates/_layouts/components/alerts.twig");
    }
}


/* _layouts/components/alerts */
class __TwigTemplate_f01cfd00fdc1033fe11260db25537505bb57c505e749106a477c18d6a29458fa___158173502 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 22
        return "_layouts/components/tag.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_layouts/components/alerts");
        $this->parent = $this->loadTemplate("_layouts/components/tag.twig", "_layouts/components/alerts", 22);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "_layouts/components/alerts");
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "content");
        // line 31
        echo "              ";
        $this->loadTemplate("_layouts/components/tag.twig", "_layouts/components/alerts", 31)->display(twig_to_array(["type" => "span", "attributes" => ["aria-label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Error", "app"), "data-icon" => "alert"]]));
        // line 38
        echo "              ";
        echo (isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 38, $this->source); })());
        echo "
            ";
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "_layouts/components/alerts";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 38,  307 => 31,  302 => 30,  289 => 22,  192 => 42,  186 => 41,  184 => 23,  182 => 22,  177 => 21,  172 => 20,  159 => 4,  57 => 47,  54 => 46,  50 => 44,  48 => 5,  46 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if craft.cp.areAlertsCached() %}
  {% set alerts = craft.cp.getAlerts() %}
  {% if alerts %}
    {% embed '_layouts/components/tag.twig' with {
      alerts: alerts,
      type: 'ul',
      attributes: {
        id: 'alerts',
      },
      style: {
        'display': 'block',
        'position': 'relative',
        'background-color': 'var(--red-050)',
        'border-left': '5px solid var(--error-color)',
        'padding': '11px 0',
        'text-align': 'center',
        'color': 'var(--error-color)',
      },
    } only %}
      {% block content %}
        {% for alert in alerts %}
          {% embed '_layouts/components/tag.twig' with {
            alert: alert,
            type: 'li',
            style: {
              'display': 'block',
              'padding': '4px var(--xl)',
            },
          } only %}
            {% block content %}
              {% include '_layouts/components/tag.twig' with {
                type: 'span',
                attributes: {
                  'aria-label': 'Error'|t('app'),
                  'data-icon': 'alert',
                },
              } only %}
              {{ alert|raw }}
            {% endblock %}
          {% endembed %}
        {% endfor %}
      {% endblock %}
    {% endembed %}
  {% endif %}
{% else %}
  {% js %}
    Craft.cp.fetchAlerts().then(alerts => {
      Craft.cp.displayAlerts(alerts);
    });
  {% endjs %}
{% endif %}
", "_layouts/components/alerts", "/var/www/html/vendor/craftcms/cms/src/templates/_layouts/components/alerts.twig");
    }
}
