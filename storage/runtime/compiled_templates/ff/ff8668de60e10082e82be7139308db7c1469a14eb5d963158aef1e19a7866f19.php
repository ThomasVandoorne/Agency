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

/* _includes/forms */
class __TwigTemplate_fba82a8f5dcd7b5949d0b6db0b30a2090c12e7a19a00ca2d1b3ffe004ae0b17b extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_includes/forms");
        // line 4
        echo "

";
        // line 7
        echo "

";
        // line 12
        echo "

";
        // line 21
        echo "

";
        // line 24
        echo "

";
        // line 29
        echo "

";
        // line 34
        echo "

";
        // line 39
        echo "

";
        // line 44
        echo "

";
        // line 49
        echo "

";
        // line 54
        echo "

";
        // line 59
        echo "

";
        // line 64
        echo "

";
        // line 69
        echo "

";
        // line 74
        echo "

";
        // line 79
        echo "

";
        // line 84
        echo "

";
        // line 89
        echo "

";
        // line 94
        echo "

";
        // line 99
        echo "

";
        // line 104
        echo "

";
        // line 109
        echo "

";
        // line 114
        echo "

";
        // line 119
        echo "

";
        // line 124
        echo "

";
        // line 129
        echo "

";
        // line 134
        echo "

";
        // line 139
        echo "

";
        // line 144
        echo "

";
        // line 149
        echo "

";
        // line 154
        echo "

";
        // line 159
        echo "

";
        // line 162
        echo "

";
        // line 167
        echo "

";
        // line 173
        echo "

";
        // line 179
        echo "

";
        // line 185
        echo "

";
        // line 191
        echo "

";
        // line 197
        echo "

";
        // line 206
        echo "

";
        // line 215
        echo "

";
        // line 221
        echo "

";
        // line 227
        echo "

";
        // line 240
        echo "

";
        // line 246
        echo "

";
        // line 259
        echo "

";
        // line 268
        echo "

";
        // line 277
        echo "

";
        // line 286
        echo "

";
        // line 292
        echo "

";
        // line 302
        echo "

";
        // line 308
        echo "

";
        // line 314
        echo "

";
        // line 341
        echo "

";
        // line 354
        echo "

";
        // line 365
        echo "

";
        // line 376
        echo "

";
        // line 389
        echo "

";
        // line 397
        echo "

";
        // line 403
        echo "

";
        // line 406
        echo "

";
        // line 411
        echo "
";
        craft\helpers\Template::endProfile("template", "_includes/forms");
    }

    // line 1
    public function macro_errorList($__errors__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "errors" => $__errors__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "errorList");
            // line 2
            echo "    ";
            $this->loadTemplate("_includes/forms/errorList", "_includes/forms", 2)->display($context);
            craft\helpers\Template::endProfile("macro", "errorList");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 9
    public function macro_button($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "button");
            // line 10
            echo "    ";
            $this->loadTemplate("_includes/forms/button", "_includes/forms", 10)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "button");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 14
    public function macro_submitButton($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "submitButton");
            // line 15
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_button", [$this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), ["type" => "submit", "class" => $this->extensions['craft\web\twig\Extension']->mergeFilter(craft\helpers\Html::explodeClass((((craft\helpers\Template::attribute($this->env, $this->source,             // line 17
($context["config"] ?? null), "class", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "class", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "class", [])) : ([]))), [0 => "submit"]), "label" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 18
($context["config"] ?? null), "label", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "label", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "label", [])) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Submit", "app")))])], 15, $context, $this->getSourceContext());
            // line 19
            echo "
";
            craft\helpers\Template::endProfile("macro", "submitButton");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 26
    public function macro_hidden($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "hidden");
            // line 27
            $this->loadTemplate("_includes/forms/hidden", "_includes/forms", 27)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "hidden");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 31
    public function macro_text($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "text");
            // line 32
            echo "    ";
            $this->loadTemplate("_includes/forms/text", "_includes/forms", 32)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "text");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 36
    public function macro_password($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "password");
            // line 37
            echo "    ";
            $this->loadTemplate("_includes/forms/password", "_includes/forms", 37)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 37, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "password");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 41
    public function macro_copytext($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "copytext");
            // line 42
            echo "    ";
            $this->loadTemplate("_includes/forms/copytext", "_includes/forms", 42)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "copytext");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 46
    public function macro_date($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "date");
            // line 47
            echo "    ";
            $this->loadTemplate("_includes/forms/date", "_includes/forms", 47)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 47, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "date");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 51
    public function macro_time($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "time");
            // line 52
            echo "    ";
            $this->loadTemplate("_includes/forms/time", "_includes/forms", 52)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 52, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "time");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 56
    public function macro_color($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "color");
            // line 57
            echo "    ";
            $this->loadTemplate("_includes/forms/color", "_includes/forms", 57)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 57, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "color");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 61
    public function macro_textarea($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "textarea");
            // line 62
            echo "    ";
            $this->loadTemplate("_includes/forms/textarea", "_includes/forms", 62)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 62, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "textarea");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 66
    public function macro_select($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "select");
            // line 67
            echo "    ";
            $this->loadTemplate("_includes/forms/select", "_includes/forms", 67)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 67, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "select");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 71
    public function macro_selectize($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "selectize");
            // line 72
            echo "    ";
            $this->loadTemplate("_includes/forms/selectize", "_includes/forms", 72)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 72, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "selectize");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 76
    public function macro_multiselect($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "multiselect");
            // line 77
            echo "    ";
            $this->loadTemplate("_includes/forms/multiselect", "_includes/forms", 77)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 77, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "multiselect");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 81
    public function macro_checkbox($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "checkbox");
            // line 82
            echo "    ";
            $this->loadTemplate("_includes/forms/checkbox", "_includes/forms", 82)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 82, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "checkbox");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 86
    public function macro_checkboxGroup($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "checkboxGroup");
            // line 87
            echo "    ";
            $this->loadTemplate("_includes/forms/checkboxGroup", "_includes/forms", 87)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 87, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "checkboxGroup");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 91
    public function macro_checkboxSelect($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "checkboxSelect");
            // line 92
            echo "    ";
            $this->loadTemplate("_includes/forms/checkboxSelect", "_includes/forms", 92)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 92, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "checkboxSelect");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 96
    public function macro_radio($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "radio");
            // line 97
            echo "    ";
            $this->loadTemplate("_includes/forms/radio", "_includes/forms", 97)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 97, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "radio");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 101
    public function macro_radioGroup($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "radioGroup");
            // line 102
            echo "    ";
            $this->loadTemplate("_includes/forms/radioGroup", "_includes/forms", 102)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 102, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "radioGroup");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 106
    public function macro_file($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "file");
            // line 107
            echo "    ";
            $this->loadTemplate("_includes/forms/file", "_includes/forms", 107)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 107, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "file");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 111
    public function macro_lightswitch($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "lightswitch");
            // line 112
            echo "    ";
            $this->loadTemplate("_includes/forms/lightswitch", "_includes/forms", 112)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 112, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "lightswitch");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 116
    public function macro_editableTable($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "editableTable");
            // line 117
            echo "    ";
            $this->loadTemplate("_includes/forms/editableTable", "_includes/forms", 117)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 117, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "editableTable");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 121
    public function macro_elementSelect($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "elementSelect");
            // line 122
            echo "    ";
            $this->loadTemplate("_includes/forms/elementSelect", "_includes/forms", 122)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 122, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "elementSelect");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 126
    public function macro_autosuggest($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "autosuggest");
            // line 127
            echo "    ";
            $this->loadTemplate("_includes/forms/autosuggest", "_includes/forms", 127)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 127, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "autosuggest");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 131
    public function macro_timeZone($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "timeZone");
            // line 132
            echo "    ";
            $this->loadTemplate("_includes/forms/timeZone", "_includes/forms", 132)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 132, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "timeZone");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 136
    public function macro_fs($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "fs");
            // line 137
            echo "    ";
            $this->loadTemplate("_includes/forms/fs", "_includes/forms", 137)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 137, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "fs");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 141
    public function macro_volume($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "volume");
            // line 142
            echo "    ";
            $this->loadTemplate("_includes/forms/volume", "_includes/forms", 142)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 142, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "volume");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 146
    public function macro_booleanMenu($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "booleanMenu");
            // line 147
            echo "    ";
            $this->loadTemplate("_includes/forms/booleanMenu", "_includes/forms", 147)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 147, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "booleanMenu");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 151
    public function macro_fieldLayoutDesigner($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "fieldLayoutDesigner");
            // line 152
            echo "    ";
            $this->loadTemplate("_includes/forms/fieldLayoutDesigner", "_includes/forms", 152)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 152, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "fieldLayoutDesigner");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 156
    public function macro_money($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "money");
            // line 157
            echo "    ";
            $this->loadTemplate("_includes/forms/money", "_includes/forms", 157)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 157, $this->source); })())));
            craft\helpers\Template::endProfile("macro", "money");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 164
    public function macro_field($__config__ = null, $__input__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "input" => $__input__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "field");
            // line 165
            echo "    ";
            echo craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 165, $this->source); })()), "cp", []), "field", [0 => (($context["input"]) ?? ("")), 1 => (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 165, $this->source); })())], "method");
            echo "
";
            craft\helpers\Template::endProfile("macro", "field");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 169
    public function macro_textField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "textField");
            // line 170
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 170, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("text" . twig_random($this->env))))]);
            // line 171
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 171, $this->source); })()), "template:_includes/forms/text"], 171, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "textField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 175
    public function macro_copytextField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "copytextField");
            // line 176
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 176, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("copytext" . twig_random($this->env))))]);
            // line 177
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 177, $this->source); })()), "template:_includes/forms/copytext"], 177, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "copytextField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 181
    public function macro_passwordField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "passwordField");
            // line 182
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 182, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("password" . twig_random($this->env))))]);
            // line 183
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 183, $this->source); })()), "template:_includes/forms/password"], 183, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "passwordField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 187
    public function macro_dateField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "dateField");
            // line 188
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 188, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("date" . twig_random($this->env))))]);
            // line 189
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 189, $this->source); })()), "template:_includes/forms/date"], 189, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "dateField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 193
    public function macro_timeField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "timeField");
            // line 194
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 194, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("time" . twig_random($this->env))))]);
            // line 195
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 195, $this->source); })()), "template:_includes/forms/time"], 195, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "timeField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 199
    public function macro_colorField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "colorField");
            // line 200
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 200, $this->source); })()), ["fieldset" => true, "id" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 202
($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("color" . twig_random($this->env))))]);
            // line 204
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 204, $this->source); })()), "template:_includes/forms/color"], 204, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "colorField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 208
    public function macro_dateTimeField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "dateTimeField");
            // line 209
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 209, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 210
($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("datetime" . twig_random($this->env)))), "fieldset" => true]);
            // line 213
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 213, $this->source); })()), "template:_includes/forms/datetime"], 213, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "dateTimeField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 217
    public function macro_textareaField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "textareaField");
            // line 218
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 218, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("textarea" . twig_random($this->env))))]);
            // line 219
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 219, $this->source); })()), "template:_includes/forms/textarea"], 219, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "textareaField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 223
    public function macro_selectField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "selectField");
            // line 224
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 224, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("select" . twig_random($this->env))))]);
            // line 225
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 225, $this->source); })()), "template:_includes/forms/select"], 225, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "selectField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 229
    public function macro_selectizeField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "selectizeField");
            // line 230
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 230, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("selectize" . twig_random($this->env))))]);
            // line 231
            echo "    ";
            if ((((((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "includeEnvVars", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "includeEnvVars", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "includeEnvVars", [])) : (false)) &&  !craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "tip", [], "any", true, true)) && (twig_slice($this->env, (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [])) : ("")), 0, 1) != "\$"))) {
                // line 232
                echo "        ";
                $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 232, $this->source); })()), ["tip" => (( !craft\helpers\Template::attribute($this->env, $this->source,                 // line 233
($context["config"] ?? null), "allowedEnvValues", [], "any", true, true)) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("This can be set to an environment variable matching one of the option values.", "app")) : ($this->extensions['craft\web\twig\Extension']->translateFilter("This can be set to an environment variable.", "app")))]);
                // line 237
                echo "    ";
            }
            // line 238
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 238, $this->source); })()), "template:_includes/forms/selectize"], 238, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "selectizeField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 242
    public function macro_multiselectField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "multiselectField");
            // line 243
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 243, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("multiselect" . twig_random($this->env))))]);
            // line 244
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 244, $this->source); })()), "template:_includes/forms/multiselect"], 244, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "multiselectField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 248
    public function macro_checkboxField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "checkboxField");
            // line 249
            echo "    ";
            // line 250
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->withoutKeyFilter($this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 250, $this->source); })()), ["fieldset" => craft\helpers\Template::attribute($this->env, $this->source,             // line 251
($context["config"] ?? null), "fieldLabel", [], "any", true, true), "fieldClass" => $this->extensions['craft\web\twig\Extension']->pushFilter(craft\helpers\Html::explodeClass((((craft\helpers\Template::attribute($this->env, $this->source,             // line 252
($context["config"] ?? null), "fieldClass", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "fieldClass", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "fieldClass", [])) : ([]))), "checkboxfield"), "id" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 253
($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("checkbox" . twig_random($this->env)))), "checkboxLabel" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 254
($context["config"] ?? null), "label", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "label", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "label", [])) : (null)), "instructionsPosition" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 255
($context["config"] ?? null), "instructionsPosition", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "instructionsPosition", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "instructionsPosition", [])) : ("after"))]), "label");
            // line 257
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 257, $this->source); })()), "template:_includes/forms/checkbox"], 257, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "checkboxField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 261
    public function macro_checkboxGroupField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "checkboxGroupField");
            // line 262
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 262, $this->source); })()), ["fieldset" => true, "id" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 264
($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("checkboxgroup" . twig_random($this->env))))]);
            // line 266
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 266, $this->source); })()), "template:_includes/forms/checkboxGroup"], 266, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "checkboxGroupField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 270
    public function macro_checkboxSelectField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "checkboxSelectField");
            // line 271
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 271, $this->source); })()), ["fieldset" => true, "id" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 273
($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("checkboxselect" . twig_random($this->env))))]);
            // line 275
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 275, $this->source); })()), "template:_includes/forms/checkboxSelect"], 275, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "checkboxSelectField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 279
    public function macro_radioGroupField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "radioGroupField");
            // line 280
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 280, $this->source); })()), ["fieldset" => true, "id" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 282
($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("radiogroup" . twig_random($this->env))))]);
            // line 284
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 284, $this->source); })()), "template:_includes/forms/radioGroup"], 284, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "radioGroupField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 288
    public function macro_fileField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "fileField");
            // line 289
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 289, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("file" . twig_random($this->env))))]);
            // line 290
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 290, $this->source); })()), "template:_includes/forms/file"], 290, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "fileField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 294
    public function macro_lightswitchField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "lightswitchField");
            // line 295
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->withoutKeyFilter($this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 295, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 296
($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("lightswitch" . twig_random($this->env)))), "fieldClass" => $this->extensions['craft\web\twig\Extension']->pushFilter(craft\helpers\Html::explodeClass((((craft\helpers\Template::attribute($this->env, $this->source,             // line 297
($context["config"] ?? null), "fieldClass", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "fieldClass", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "fieldClass", [])) : ([]))), "lightswitch-field"), "fieldLabel" => (((craft\helpers\Template::attribute($this->env, $this->source,             // line 298
($context["config"] ?? null), "fieldLabel", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "fieldLabel", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "fieldLabel", [])) : ((((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "label", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "label", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "label", [])) : (null))))]), "label");
            // line 300
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 300, $this->source); })()), "template:_includes/forms/lightswitch"], 300, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "lightswitchField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 304
    public function macro_editableTableField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "editableTableField");
            // line 305
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 305, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("editabletable" . twig_random($this->env))))]);
            // line 306
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 306, $this->source); })()), "template:_includes/forms/editableTable"], 306, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "editableTableField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 310
    public function macro_elementSelectField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "elementSelectField");
            // line 311
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 311, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("elementselect" . twig_random($this->env))))]);
            // line 312
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 312, $this->source); })()), "template:_includes/forms/elementSelect"], 312, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "elementSelectField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 316
    public function macro_autosuggestField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "autosuggestField");
            // line 317
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 317, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("autosuggest" . twig_random($this->env))))]);
            // line 318
            echo "
    ";
            // line 320
            echo "    ";
            if ((((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "suggestEnvVars", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "suggestEnvVars", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "suggestEnvVars", [])) : (false))) {
                // line 321
                echo "        ";
                $context["value"] = (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [])) : (""));
                // line 322
                echo "        ";
                if (( !craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "tip", [], "any", true, true) && !twig_in_filter(twig_slice($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 322, $this->source); })()), 0, 1), [0 => "\$", 1 => "@"]))) {
                    // line 323
                    echo "            ";
                    $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 323, $this->source); })()), ["tip" => (((((((craft\helpers\Template::attribute($this->env, $this->source,                     // line 324
($context["config"] ?? null), "suggestAliases", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "suggestAliases", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "suggestAliases", [])) : (false))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("This can be set to an environment variable, or begin with an alias.", "app")) : ($this->extensions['craft\web\twig\Extension']->translateFilter("This can be set to an environment variable.", "app"))) . " ") . $this->extensions['craft\web\twig\Extension']->tagFunction("a", ["href" => "https://craftcms.com/docs/4.x/config/#control-panel-settings", "class" => "go", "text" => $this->extensions['craft\web\twig\Extension']->translateFilter("Learn more", "app")]))]);
                    // line 332
                    echo "        ";
                } elseif ((( !craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "warning", [], "any", true, true) && (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 332, $this->source); })()) == "@web") || (twig_slice($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 332, $this->source); })()), 0, 5) == "@web/"))) && craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 332, $this->source); })()), "app", []), "request", []), "isWebAliasSetDynamically", []))) {
                    // line 333
                    echo "            ";
                    $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 333, $this->source); })()), ["warning" => $this->extensions['craft\web\twig\Extension']->translateFilter("The `@web` alias is not recommended if it is determined automatically.", "app")]);
                    // line 336
                    echo "        ";
                }
                // line 337
                echo "    ";
            }
            // line 338
            echo "
    ";
            // line 339
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 339, $this->source); })()), "template:_includes/forms/autosuggest"], 339, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "autosuggestField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 343
    public function macro_timeZoneField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "timeZoneField");
            // line 344
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 344, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("timezone" . twig_random($this->env))))]);
            // line 345
            echo "    ";
            if ((((((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "includeEnvVars", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "includeEnvVars", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "includeEnvVars", [])) : (false)) &&  !craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "tip", [], "any", true, true)) && (twig_slice($this->env, (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [])) : ("")), 0, 1) != "\$"))) {
                // line 346
                echo "        ";
                $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 346, $this->source); })()), ["tip" => $this->extensions['craft\web\twig\Extension']->translateFilter("This can be set to an environment variable with a value of a [supported time zone]({url}).", "app", ["url" => "https://www.php.net/manual/en/timezones.php"])]);
                // line 351
                echo "    ";
            }
            // line 352
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 352, $this->source); })()), "template:_includes/forms/timeZone"], 352, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "timeZoneField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 356
    public function macro_fsField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "fsField");
            // line 357
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 357, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("fs" . twig_random($this->env))))]);
            // line 358
            echo "    ";
            if ((((((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "includeEnvVars", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "includeEnvVars", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "includeEnvVars", [])) : (false)) &&  !craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "tip", [], "any", true, true)) && (twig_slice($this->env, (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [])) : ("")), 0, 1) != "\$"))) {
                // line 359
                echo "        ";
                $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 359, $this->source); })()), ["tip" => $this->extensions['craft\web\twig\Extension']->translateFilter("This can be set to an environment variable matching one of the option values.", "app")]);
                // line 362
                echo "    ";
            }
            // line 363
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 363, $this->source); })()), "template:_includes/forms/fs"], 363, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "fsField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 367
    public function macro_volumeField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "volumeField");
            // line 368
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 368, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("volume" . twig_random($this->env))))]);
            // line 369
            echo "    ";
            if ((((((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "includeEnvVars", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "includeEnvVars", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "includeEnvVars", [])) : (false)) &&  !craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "tip", [], "any", true, true)) && (twig_slice($this->env, (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [])) : ("")), 0, 1) != "\$"))) {
                // line 370
                echo "        ";
                $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 370, $this->source); })()), ["tip" => $this->extensions['craft\web\twig\Extension']->translateFilter("This can be set to an environment variable matching one of the option values.", "app")]);
                // line 373
                echo "    ";
            }
            // line 374
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 374, $this->source); })()), "template:_includes/forms/volume"], 374, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "volumeField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 378
    public function macro_booleanMenuField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "booleanMenuField");
            // line 379
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 379, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("booleanmenu" . twig_random($this->env))))]);
            // line 380
            echo "    ";
            if ((((((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "includeEnvVars", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "includeEnvVars", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "includeEnvVars", [])) : (false)) &&  !craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "tip", [], "any", true, true)) && (twig_slice($this->env, (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [])) : ("")), 0, 1) != "\$"))) {
                // line 381
                echo "        ";
                $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 381, $this->source); })()), ["tip" => $this->extensions['craft\web\twig\Extension']->translateFilter("This can be set to an environment variable with a boolean value ({examples}).", "app", ["examples" => "`yes`/`no`/`true`/`false`/`on`/`off`/`0`/`1`"])]);
                // line 386
                echo "    ";
            }
            // line 387
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 387, $this->source); })()), "template:_includes/forms/booleanMenu"], 387, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "booleanMenuField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 391
    public function macro_fieldLayoutDesignerField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "fieldLayoutDesignerField");
            // line 392
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [$this->extensions['craft\web\twig\Extension']->mergeFilter(["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Field Layout", "app"), "errors" => (((((craft\helpers\Template::attribute($this->env, $this->source,             // line 394
($context["config"] ?? null), "fieldLayout", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "fieldLayout", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "fieldLayout", [])) : (false))) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 394, $this->source); })()), "fieldLayout", []), "getErrorSummary", [0 => true], "method")) : (""))],             // line 395
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 395, $this->source); })())), "template:_includes/forms/fieldLayoutDesigner"], 392, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "fieldLayoutDesignerField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 399
    public function macro_moneyField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "moneyField");
            // line 400
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 400, $this->source); })()), ["id" => (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [])) : (("money" . twig_random($this->env))))]);
            // line 401
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 401, $this->source); })()), "template:_includes/forms/money"], 401, $context, $this->getSourceContext());
            echo "
";
            craft\helpers\Template::endProfile("macro", "moneyField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 408
    public function macro_optionShortcutLabel($__key__ = null, $__shift__ = null, $__alt__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "key" => $__key__,
            "shift" => $__shift__,
            "alt" => $__alt__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "optionShortcutLabel");
            // line 409
            echo "<span class=\"shortcut\">";
            echo twig_call_macro($macros["_self"], "macro_shortcutText", [(isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 409, $this->source); })()), (isset($context["shift"]) || array_key_exists("shift", $context) ? $context["shift"] : (function () { throw new RuntimeError('Variable "shift" does not exist.', 409, $this->source); })()), (isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 409, $this->source); })())], 409, $context, $this->getSourceContext());
            echo "</span>";
            craft\helpers\Template::endProfile("macro", "optionShortcutLabel");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 412
    public function macro_shortcutText($__key__ = null, $__shift__ = null, $__alt__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "key" => $__key__,
            "shift" => $__shift__,
            "alt" => $__alt__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            craft\helpers\Template::beginProfile("macro", "shortcutText");
            // line 413
            switch (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 413, $this->source); })()), "app", []), "request", []), "getClientOs", [], "method")) {
                case "Mac":
                {
                    // line 415
                    echo twig_escape_filter($this->env, ((((((isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 415, $this->source); })())) ? ("⌥") : ("")) . (((isset($context["shift"]) || array_key_exists("shift", $context) ? $context["shift"] : (function () { throw new RuntimeError('Variable "shift" does not exist.', 415, $this->source); })())) ? ("⇧") : (""))) . "⌘") . (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 415, $this->source); })())), "html", null, true);
                    break;
                }
                default:
                {
                    // line 417
                    echo twig_escape_filter($this->env, ((("Ctrl+" . (((isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 417, $this->source); })())) ? ("Alt+") : (""))) . (((isset($context["shift"]) || array_key_exists("shift", $context) ? $context["shift"] : (function () { throw new RuntimeError('Variable "shift" does not exist.', 417, $this->source); })())) ? ("Shift+") : (""))) . (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 417, $this->source); })())), "html", null, true);
                }
            }
            craft\helpers\Template::endProfile("macro", "shortcutText");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1995 => 417,  1989 => 415,  1985 => 413,  1969 => 412,  1957 => 409,  1941 => 408,  1928 => 401,  1925 => 400,  1911 => 399,  1899 => 395,  1898 => 394,  1896 => 392,  1882 => 391,  1869 => 387,  1866 => 386,  1863 => 381,  1860 => 380,  1857 => 379,  1843 => 378,  1830 => 374,  1827 => 373,  1824 => 370,  1821 => 369,  1818 => 368,  1804 => 367,  1791 => 363,  1788 => 362,  1785 => 359,  1782 => 358,  1779 => 357,  1765 => 356,  1752 => 352,  1749 => 351,  1746 => 346,  1743 => 345,  1740 => 344,  1726 => 343,  1714 => 339,  1711 => 338,  1708 => 337,  1705 => 336,  1702 => 333,  1699 => 332,  1697 => 324,  1695 => 323,  1692 => 322,  1689 => 321,  1686 => 320,  1683 => 318,  1680 => 317,  1666 => 316,  1653 => 312,  1650 => 311,  1636 => 310,  1623 => 306,  1620 => 305,  1606 => 304,  1593 => 300,  1591 => 298,  1590 => 297,  1589 => 296,  1587 => 295,  1573 => 294,  1560 => 290,  1557 => 289,  1543 => 288,  1530 => 284,  1528 => 282,  1526 => 280,  1512 => 279,  1499 => 275,  1497 => 273,  1495 => 271,  1481 => 270,  1468 => 266,  1466 => 264,  1464 => 262,  1450 => 261,  1437 => 257,  1435 => 255,  1434 => 254,  1433 => 253,  1432 => 252,  1431 => 251,  1429 => 250,  1427 => 249,  1413 => 248,  1400 => 244,  1397 => 243,  1383 => 242,  1370 => 238,  1367 => 237,  1365 => 233,  1363 => 232,  1360 => 231,  1357 => 230,  1343 => 229,  1330 => 225,  1327 => 224,  1313 => 223,  1300 => 219,  1297 => 218,  1283 => 217,  1270 => 213,  1268 => 210,  1266 => 209,  1252 => 208,  1239 => 204,  1237 => 202,  1235 => 200,  1221 => 199,  1208 => 195,  1205 => 194,  1191 => 193,  1178 => 189,  1175 => 188,  1161 => 187,  1148 => 183,  1145 => 182,  1131 => 181,  1118 => 177,  1115 => 176,  1101 => 175,  1088 => 171,  1085 => 170,  1071 => 169,  1058 => 165,  1043 => 164,  1032 => 157,  1018 => 156,  1007 => 152,  993 => 151,  982 => 147,  968 => 146,  957 => 142,  943 => 141,  932 => 137,  918 => 136,  907 => 132,  893 => 131,  882 => 127,  868 => 126,  857 => 122,  843 => 121,  832 => 117,  818 => 116,  807 => 112,  793 => 111,  782 => 107,  768 => 106,  757 => 102,  743 => 101,  732 => 97,  718 => 96,  707 => 92,  693 => 91,  682 => 87,  668 => 86,  657 => 82,  643 => 81,  632 => 77,  618 => 76,  607 => 72,  593 => 71,  582 => 67,  568 => 66,  557 => 62,  543 => 61,  532 => 57,  518 => 56,  507 => 52,  493 => 51,  482 => 47,  468 => 46,  457 => 42,  443 => 41,  432 => 37,  418 => 36,  407 => 32,  393 => 31,  383 => 27,  369 => 26,  358 => 19,  356 => 18,  355 => 17,  353 => 15,  339 => 14,  328 => 10,  314 => 9,  303 => 2,  289 => 1,  283 => 411,  279 => 406,  275 => 403,  271 => 397,  267 => 389,  263 => 376,  259 => 365,  255 => 354,  251 => 341,  247 => 314,  243 => 308,  239 => 302,  235 => 292,  231 => 286,  227 => 277,  223 => 268,  219 => 259,  215 => 246,  211 => 240,  207 => 227,  203 => 221,  199 => 215,  195 => 206,  191 => 197,  187 => 191,  183 => 185,  179 => 179,  175 => 173,  171 => 167,  167 => 162,  163 => 159,  159 => 154,  155 => 149,  151 => 144,  147 => 139,  143 => 134,  139 => 129,  135 => 124,  131 => 119,  127 => 114,  123 => 109,  119 => 104,  115 => 99,  111 => 94,  107 => 89,  103 => 84,  99 => 79,  95 => 74,  91 => 69,  87 => 64,  83 => 59,  79 => 54,  75 => 49,  71 => 44,  67 => 39,  63 => 34,  59 => 29,  55 => 24,  51 => 21,  47 => 12,  43 => 7,  39 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro errorList(errors) %}
    {% include \"_includes/forms/errorList\" %}
{% endmacro %}


{# Inputs #}


{% macro button(config) %}
    {% include '_includes/forms/button' with config only %}
{% endmacro %}


{% macro submitButton(config) %}
    {{ _self.button(config|merge({
        type: 'submit',
        class: (config.class ?? [])|explodeClass|merge(['submit']),
        label: config.label ?? 'Submit'|t('app'),
    })) }}
{% endmacro %}


{# Inputs #}


{% macro hidden(config) -%}
    {% include \"_includes/forms/hidden\" with config only %}
{%- endmacro %}


{% macro text(config) %}
    {% include \"_includes/forms/text\" with config only %}
{% endmacro %}


{% macro password(config) %}
    {% include \"_includes/forms/password\" with config only %}
{% endmacro %}


{% macro copytext(config) %}
    {% include \"_includes/forms/copytext\" with config only %}
{% endmacro %}


{% macro date(config) %}
    {% include \"_includes/forms/date\" with config only %}
{% endmacro %}


{% macro time(config) %}
    {% include \"_includes/forms/time\" with config only %}
{% endmacro %}


{% macro color(config) %}
    {% include \"_includes/forms/color\" with config only %}
{% endmacro %}


{% macro textarea(config) %}
    {% include \"_includes/forms/textarea\" with config only %}
{% endmacro %}


{% macro select(config) %}
    {% include \"_includes/forms/select\" with config only %}
{% endmacro %}


{% macro selectize(config) %}
    {% include \"_includes/forms/selectize\" with config only %}
{% endmacro %}


{% macro multiselect(config) %}
    {% include \"_includes/forms/multiselect\" with config only %}
{% endmacro %}


{% macro checkbox(config) %}
    {% include \"_includes/forms/checkbox\" with config only %}
{% endmacro %}


{% macro checkboxGroup(config) %}
    {% include \"_includes/forms/checkboxGroup\" with config only %}
{% endmacro %}


{% macro checkboxSelect(config) %}
    {% include \"_includes/forms/checkboxSelect\" with config only %}
{% endmacro %}


{% macro radio(config) %}
    {% include \"_includes/forms/radio\" with config only %}
{% endmacro %}


{% macro radioGroup(config) %}
    {% include \"_includes/forms/radioGroup\" with config only %}
{% endmacro %}


{% macro file(config) %}
    {% include \"_includes/forms/file\" with config only %}
{% endmacro %}


{% macro lightswitch(config) %}
    {% include \"_includes/forms/lightswitch\" with config only %}
{% endmacro %}


{% macro editableTable(config) %}
    {% include \"_includes/forms/editableTable\" with config only %}
{% endmacro %}


{% macro elementSelect(config) %}
    {% include \"_includes/forms/elementSelect\" with config only %}
{% endmacro %}


{% macro autosuggest(config) %}
    {% include \"_includes/forms/autosuggest\" with config only %}
{% endmacro %}


{% macro timeZone(config) %}
    {% include \"_includes/forms/timeZone\" with config only %}
{% endmacro %}


{% macro fs(config) %}
    {% include \"_includes/forms/fs\" with config only %}
{% endmacro %}


{% macro volume(config) %}
    {% include \"_includes/forms/volume\" with config only %}
{% endmacro %}


{% macro booleanMenu(config) %}
    {% include \"_includes/forms/booleanMenu\" with config only %}
{% endmacro %}


{% macro fieldLayoutDesigner(config) %}
    {% include \"_includes/forms/fieldLayoutDesigner\" with config only %}
{% endmacro %}


{% macro money(config) %}
    {% include \"_includes/forms/money\" with config only %}
{% endmacro %}


{# Fields #}


{% macro field(config, input) %}
    {{ craft.cp.field(input ?? '', config)|raw }}
{% endmacro %}


{% macro textField(config) %}
    {% set config = config|merge({id: config.id ?? \"text#{random()}\"}) %}
    {{ _self.field(config, 'template:_includes/forms/text') }}
{% endmacro %}


{% macro copytextField(config) %}
    {% set config = config|merge({id: config.id ?? \"copytext#{random()}\"}) %}
    {{ _self.field(config, 'template:_includes/forms/copytext') }}
{% endmacro %}


{% macro passwordField(config) %}
    {% set config = config|merge({id: config.id ?? \"password#{random()}\"}) %}
    {{ _self.field(config, 'template:_includes/forms/password') }}
{% endmacro %}


{% macro dateField(config) %}
    {% set config = config|merge({id: config.id ?? \"date#{random()}\"}) %}
    {{ _self.field(config, 'template:_includes/forms/date') }}
{% endmacro %}


{% macro timeField(config) %}
    {% set config = config|merge({id: config.id ?? \"time#{random()}\"}) %}
    {{ _self.field(config, 'template:_includes/forms/time') }}
{% endmacro %}


{% macro colorField(config) %}
    {% set config = config|merge({
        fieldset: true,
        id: config.id ?? \"color#{random()}\"
    }) %}
    {{ _self.field(config, 'template:_includes/forms/color') }}
{% endmacro %}


{% macro dateTimeField(config) %}
    {% set config = config|merge({
        id: config.id ?? \"datetime#{random()}\",
        fieldset: true,
    }) %}
    {{ _self.field(config, 'template:_includes/forms/datetime') }}
{% endmacro %}


{% macro textareaField(config) %}
    {% set config = config|merge({id: config.id ?? \"textarea#{random()}\"}) %}
    {{ _self.field(config, 'template:_includes/forms/textarea') }}
{% endmacro %}


{% macro selectField(config) %}
    {% set config = config|merge({id: config.id ?? \"select#{random()}\"}) %}
    {{ _self.field(config, 'template:_includes/forms/select') }}
{% endmacro %}


{% macro selectizeField(config) %}
    {% set config = config|merge({id: config.id ?? \"selectize#{random()}\"}) %}
    {% if (config.includeEnvVars ?? false) and config.tip is not defined and (config.value ?? '')[0:1] != '\$' %}
        {% set config = config|merge({
            tip: (config.allowedEnvValues is not defined)
            ? 'This can be set to an environment variable matching one of the option values.'|t('app')
            : 'This can be set to an environment variable.'|t('app'),
        }) %}
    {% endif %}
    {{ _self.field(config, 'template:_includes/forms/selectize') }}
{% endmacro %}


{% macro multiselectField(config) %}
    {% set config = config|merge({id: config.id ?? \"multiselect#{random()}\"}) %}
    {{ _self.field(config, 'template:_includes/forms/multiselect') }}
{% endmacro %}


{% macro checkboxField(config) %}
    {# label --> checkboxLabel #}
    {% set config = config|merge({
        fieldset: config.fieldLabel is defined,
        fieldClass: (config.fieldClass ?? [])|explodeClass|push('checkboxfield'),
        id: config.id ?? \"checkbox#{random()}\",
        checkboxLabel: config.label ?? null,
        instructionsPosition: config.instructionsPosition ?? 'after',
    })|withoutKey('label') %}
    {{ _self.field(config, 'template:_includes/forms/checkbox') }}
{% endmacro %}


{% macro checkboxGroupField(config) %}
    {% set config = config|merge({
        fieldset: true,
        id: config.id ?? \"checkboxgroup#{random()}\",
    }) %}
    {{ _self.field(config, 'template:_includes/forms/checkboxGroup') }}
{% endmacro %}


{% macro checkboxSelectField(config) %}
    {% set config = config|merge({
        fieldset: true,
        id: config.id ?? \"checkboxselect#{random()}\",
    }) %}
    {{ _self.field(config, 'template:_includes/forms/checkboxSelect') }}
{% endmacro %}


{% macro radioGroupField(config) %}
    {% set config = config|merge({
        fieldset: true,
        id: config.id ?? \"radiogroup#{random()}\",
    }) %}
    {{ _self.field(config, 'template:_includes/forms/radioGroup') }}
{% endmacro %}


{% macro fileField(config) %}
    {% set config = config|merge({id: config.id ?? \"file#{random()}\"}) %}
    {{ _self.field(config, 'template:_includes/forms/file') }}
{% endmacro %}


{% macro lightswitchField(config) %}
    {% set config = config|merge({
        id: config.id ?? \"lightswitch#{random()}\",
        fieldClass: (config.fieldClass ?? [])|explodeClass|push('lightswitch-field'),
        fieldLabel: config.fieldLabel ?? config.label ?? null,
    })|withoutKey('label') %}
    {{ _self.field(config, 'template:_includes/forms/lightswitch') }}
{% endmacro %}


{% macro editableTableField(config) %}
    {% set config = config|merge({id: config.id ?? \"editabletable#{random()}\"}) %}
    {{ _self.field(config, 'template:_includes/forms/editableTable') }}
{% endmacro %}


{% macro elementSelectField(config) %}
    {% set config = config|merge({id: config.id ?? \"elementselect#{random()}\"}) %}
    {{ _self.field(config, 'template:_includes/forms/elementSelect') }}
{% endmacro %}


{% macro autosuggestField(config) %}
    {% set config = config|merge({id: config.id ?? \"autosuggest#{random()}\"}) %}

    {# Suggest an environment variable / alias? #}
    {% if (config.suggestEnvVars ?? false) %}
        {% set value = config.value ?? '' %}
        {% if config.tip is not defined and value[0:1] not in ['\$', '@'] %}
            {% set config = config|merge({
                tip: ((config.suggestAliases ?? false)
                ? 'This can be set to an environment variable, or begin with an alias.'|t('app')
                : 'This can be set to an environment variable.'|t('app')) ~ ' ' ~ tag('a', {
                    href: 'https://craftcms.com/docs/4.x/config/#control-panel-settings',
                    class: 'go',
                    text: 'Learn more'|t('app'),
                }),
            }) %}
        {% elseif config.warning is not defined and (value == '@web' or value[0:5] == '@web/') and craft.app.request.isWebAliasSetDynamically %}
            {% set config = config|merge({
                warning: 'The `@web` alias is not recommended if it is determined automatically.'|t('app')
            }) %}
        {% endif %}
    {% endif %}

    {{ _self.field(config, 'template:_includes/forms/autosuggest') }}
{% endmacro %}


{% macro timeZoneField(config) %}
    {% set config = config|merge({id: config.id ?? \"timezone#{random()}\"}) %}
    {% if (config.includeEnvVars ?? false) and config.tip is not defined and (config.value ?? '')[0:1] != '\$' %}
        {% set config = config|merge({
            tip: 'This can be set to an environment variable with a value of a [supported time zone]({url}).'|t('app', {
                url: 'https://www.php.net/manual/en/timezones.php',
            }),
        }) %}
    {% endif %}
    {{ _self.field(config, 'template:_includes/forms/timeZone') }}
{% endmacro %}


{% macro fsField(config) %}
    {% set config = config|merge({id: config.id ?? \"fs#{random()}\"}) %}
    {% if (config.includeEnvVars ?? false) and config.tip is not defined and (config.value ?? '')[0:1] != '\$' %}
        {% set config = config|merge({
            tip: 'This can be set to an environment variable matching one of the option values.'|t('app'),
        }) %}
    {% endif %}
    {{ _self.field(config, 'template:_includes/forms/fs') }}
{% endmacro %}


{% macro volumeField(config) %}
    {% set config = config|merge({id: config.id ?? \"volume#{random()}\"}) %}
    {% if (config.includeEnvVars ?? false) and config.tip is not defined and (config.value ?? '')[0:1] != '\$' %}
        {% set config = config|merge({
            tip: 'This can be set to an environment variable matching one of the option values.'|t('app'),
        }) %}
    {% endif %}
    {{ _self.field(config, 'template:_includes/forms/volume') }}
{% endmacro %}


{% macro booleanMenuField(config) %}
    {% set config = config|merge({id: config.id ?? \"booleanmenu#{random()}\"}) %}
    {% if (config.includeEnvVars ?? false) and config.tip is not defined and (config.value ?? '')[0:1] != '\$' %}
        {% set config = config|merge({
            tip: 'This can be set to an environment variable with a boolean value ({examples}).'|t('app', {
                examples: '`yes`/`no`/`true`/`false`/`on`/`off`/`0`/`1`',
            }),
        }) %}
    {% endif %}
    {{ _self.field(config, 'template:_includes/forms/booleanMenu') }}
{% endmacro %}


{% macro fieldLayoutDesignerField(config) %}
    {{ _self.field({
        label: 'Field Layout'|t('app'),
        errors: (config.fieldLayout ?? false) ? config.fieldLayout.getErrorSummary(true),
    }|merge(config), 'template:_includes/forms/fieldLayoutDesigner') }}
{% endmacro %}


{% macro moneyField(config) %}
    {% set config = config|merge({id: config.id ?? \"money#{random()}\"}) %}
    {{ _self.field(config, 'template:_includes/forms/money') }}
{% endmacro %}


{# Other #}


{% macro optionShortcutLabel(key, shift, alt) -%}
    <span class=\"shortcut\">{{ _self.shortcutText(key, shift, alt) }}</span>
{%- endmacro %}

{% macro shortcutText(key, shift, alt) %}
    {%- switch craft.app.request.getClientOs() %}
    {%- case 'Mac' %}
        {{- (alt ? '⌥') ~ (shift ? '⇧') ~ '⌘' ~ key }}
    {%- default %}
        {{- 'Ctrl+' ~ (alt ? 'Alt+') ~ (shift ? 'Shift+') ~ key }}
    {%- endswitch %}
{%- endmacro %}
", "_includes/forms", "/var/www/html/vendor/craftcms/cms/src/templates/_includes/forms.twig");
    }
}
