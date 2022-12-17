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

/* login */
class __TwigTemplate_cac561777b0b740526fd96568fd7124feb978103229c0a5f7bbe780a55acb654 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "login");
        // line 2
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "login", 2)->unwrap();
        // line 3
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Sign In", "app");
        // line 4
        $context["bodyClass"] = "login";
        // line 5
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 5, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\login\\LoginAsset"], "method");
        // line 7
        $context["generalConfig"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 7, $this->source); })()), "app", []), "config", []), "general", []);
        // line 8
        $context["username"] = ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["generalConfig"]) || array_key_exists("generalConfig", $context) ? $context["generalConfig"] : (function () { throw new RuntimeError('Variable "generalConfig" does not exist.', 8, $this->source); })()), "rememberUsernameDuration", [])) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 8, $this->source); })()), "app", []), "user", []), "getRememberedUsername", [], "method")) : (""));
        // line 10
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["generalConfig"]) || array_key_exists("generalConfig", $context) ? $context["generalConfig"] : (function () { throw new RuntimeError('Variable "generalConfig" does not exist.', 10, $this->source); })()), "useEmailAsUsername", [])) {
            // line 11
            $context["usernameLabel"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Email", "app");
            // line 12
            $context["usernameType"] = "email";
        } else {
            // line 14
            $context["usernameLabel"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Username or Email", "app");
            // line 15
            $context["usernameType"] = "text";
        }
        // line 18
        $context["hasLogo"] = (((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new RuntimeError('Variable "CraftEdition" does not exist.', 18, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new RuntimeError('Variable "CraftPro" does not exist.', 18, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 18, $this->source); })()), "rebrand", []), "isLogoUploaded", []));
        // line 20
        $context["formAttributes"] = ["id" => "login-form", "method" => "post", "class" => ((craft\helpers\Template::attribute($this->env, $this->source,         // line 23
(isset($context["generalConfig"]) || array_key_exists("generalConfig", $context) ? $context["generalConfig"] : (function () { throw new RuntimeError('Variable "generalConfig" does not exist.', 23, $this->source); })()), "rememberedUserSessionDuration", [])) ? ("remember-me") : ("")), "accept-charset" => "UTF-8"];
        // line 27
        if ((isset($context["hasLogo"]) || array_key_exists("hasLogo", $context) ? $context["hasLogo"] : (function () { throw new RuntimeError('Variable "hasLogo" does not exist.', 27, $this->source); })())) {
            // line 28
            $context["logo"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 28, $this->source); })()), "rebrand", []), "logo", []);
        }
        // line 31
        ob_start();
        // line 32
        echo "    <main>
        <div id=\"login\">

            <h1>
                ";
        // line 36
        if ((isset($context["hasLogo"]) || array_key_exists("hasLogo", $context) ? $context["hasLogo"] : (function () { throw new RuntimeError('Variable "hasLogo" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "                    ";
            echo $this->extensions['craft\web\twig\Extension']->tagFunction("img", ["id" => "login-logo", "src" => craft\helpers\Template::attribute($this->env, $this->source,             // line 39
(isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 39, $this->source); })()), "url", []), "alt" =>             // line 40
(isset($context["systemName"]) || array_key_exists("systemName", $context) ? $context["systemName"] : (function () { throw new RuntimeError('Variable "systemName" does not exist.', 40, $this->source); })()), "width" => craft\helpers\Template::attribute($this->env, $this->source,             // line 41
(isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 41, $this->source); })()), "width", []), "height" => craft\helpers\Template::attribute($this->env, $this->source,             // line 42
(isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 42, $this->source); })()), "height", [])]);
            // line 43
            echo "
                ";
        } else {
            // line 45
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["systemName"]) || array_key_exists("systemName", $context) ? $context["systemName"] : (function () { throw new RuntimeError('Variable "systemName" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "
                ";
        }
        // line 47
        echo "            </h1>

            <form ";
        // line 49
        echo craft\helpers\Html::renderTagAttributes((isset($context["formAttributes"]) || array_key_exists("formAttributes", $context) ? $context["formAttributes"] : (function () { throw new RuntimeError('Variable "formAttributes" does not exist.', 49, $this->source); })()));
        echo ">

                <div id=\"login-form-top\">
                    ";
        // line 52
        echo twig_call_macro($macros["forms"], "macro_textField", [["id" => "loginName", "name" => "username", "placeholder" =>         // line 55
(isset($context["usernameLabel"]) || array_key_exists("usernameLabel", $context) ? $context["usernameLabel"] : (function () { throw new RuntimeError('Variable "usernameLabel" does not exist.', 55, $this->source); })()), "value" =>         // line 56
(isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 56, $this->source); })()), "autocomplete" => "username", "autocapitalize" => false, "type" =>         // line 59
(isset($context["usernameType"]) || array_key_exists("usernameType", $context) ? $context["usernameType"] : (function () { throw new RuntimeError('Variable "usernameType" does not exist.', 59, $this->source); })()), "inputAttributes" => ["aria" => ["label" =>         // line 62
(isset($context["usernameLabel"]) || array_key_exists("usernameLabel", $context) ? $context["usernameLabel"] : (function () { throw new RuntimeError('Variable "usernameLabel" does not exist.', 62, $this->source); })()), "required" => "true"]]]], 52, $context, $this->getSourceContext());
        // line 66
        echo "
                    ";
        // line 67
        echo twig_call_macro($macros["forms"], "macro_passwordField", [["id" => "password", "name" => "password", "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("Password", "app"), "autocomplete" => "current-password", "inputAttributes" => ["aria" => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Password", "app"), "required" => "true"]]]], 67, $context, $this->getSourceContext());
        // line 78
        echo "
                </div>

                <div id=\"login-form-bottom\">
                    ";
        // line 82
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["generalConfig"]) || array_key_exists("generalConfig", $context) ? $context["generalConfig"] : (function () { throw new RuntimeError('Variable "generalConfig" does not exist.', 82, $this->source); })()), "rememberedUserSessionDuration", [])) {
            // line 83
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_checkboxField", [["id" => "rememberMe", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Keep me signed in for {duration}", "app", ["duration" => craft\helpers\DateTimeHelper::humanDuration(craft\helpers\Template::attribute($this->env, $this->source,             // line 86
(isset($context["generalConfig"]) || array_key_exists("generalConfig", $context) ? $context["generalConfig"] : (function () { throw new RuntimeError('Variable "generalConfig" does not exist.', 86, $this->source); })()), "getRememberedUserSessionDuration", [], "method"))])]], 83, $context, $this->getSourceContext());
            // line 88
            echo "
                    ";
        }
        // line 90
        echo "                </div>

                <div id=\"login-form-buttons\" class=\"buttons\">
                    ";
        // line 93
        echo twig_call_macro($macros["forms"], "macro_submitButton", [["id" => "submit", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Sign in", "app"), "spinner" => true]], 93, $context, $this->getSourceContext());
        // line 97
        echo "
                </div>

                <div id=\"login-form-extra\">
                    <button id=\"forgot-password\" type=\"button\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Forgot your password?", "app"), "html", null, true);
        echo "</button>
                    <button id=\"remember-password\" type=\"button\">";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Remember your password?", "app"), "html", null, true);
        echo "</button>
                </div>
            </form>

            <div id=\"login-errors\" role=\"alert\">
            </div>

            <a id=\"poweredby\" href=\"http://craftcms.com/\" title=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Powered by Craft CMS", "app"), "html", null, true);
        echo "\" aria-label=\"Craft CMS\">
                ";
        // line 110
        echo $this->extensions['craft\web\twig\Extension']->svgFunction("@app/web/assets/cp/dist/images/craftcms.svg");
        echo "
            </a>

        </div>

    </main>
";
        $context["formHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        ob_start();
        // line 119
        echo "    <main>
        <div class=\"message-container no-access\">
            <div class=\"pane notice\">
                <p>";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Cookies must be enabled to access the Craft CMS control panel.", "app"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </main>
";
        $context["noCookiesHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("_layouts/basecp", "login", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        craft\helpers\Template::endProfile("template", "login");
    }

    // line 128
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("block", "body");
        // line 129
        echo "    <script type=\"text/javascript\">
        var cookieTest = 'CraftCookieTest='+Math.floor(Math.random() * 1000000);
        document.cookie = cookieTest;
        if (document.cookie.search(cookieTest) != -1) {
            document.cookie = cookieTest + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            document.write(";
        // line 134
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["formHtml"]) || array_key_exists("formHtml", $context) ? $context["formHtml"] : (function () { throw new RuntimeError('Variable "formHtml" does not exist.', 134, $this->source); })()));
        echo ");
        } else {
            document.write(";
        // line 136
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["noCookiesHtml"]) || array_key_exists("noCookiesHtml", $context) ? $context["noCookiesHtml"] : (function () { throw new RuntimeError('Variable "noCookiesHtml" does not exist.', 136, $this->source); })()));
        echo ");
        }
    </script>
";
        craft\helpers\Template::endProfile("block", "body");
    }

    public function getTemplateName()
    {
        return "login";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 136,  215 => 134,  208 => 129,  203 => 128,  197 => 1,  189 => 122,  184 => 119,  182 => 118,  172 => 110,  168 => 109,  158 => 102,  154 => 101,  148 => 97,  146 => 93,  141 => 90,  137 => 88,  135 => 86,  133 => 83,  131 => 82,  125 => 78,  123 => 67,  120 => 66,  118 => 62,  117 => 59,  116 => 56,  115 => 55,  114 => 52,  108 => 49,  104 => 47,  98 => 45,  94 => 43,  92 => 42,  91 => 41,  90 => 40,  89 => 39,  87 => 37,  85 => 36,  79 => 32,  77 => 31,  74 => 28,  72 => 27,  70 => 23,  69 => 20,  67 => 18,  64 => 15,  62 => 14,  59 => 12,  57 => 11,  55 => 10,  53 => 8,  51 => 7,  49 => 5,  47 => 4,  45 => 3,  43 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/basecp\" %}
{% import \"_includes/forms\" as forms %}
{% set title = \"Sign In\"|t('app') %}
{% set bodyClass = 'login' %}
{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\login\\\\LoginAsset\") %}

{% set generalConfig = craft.app.config.general %}
{% set username = generalConfig.rememberUsernameDuration ? craft.app.user.getRememberedUsername(): '' %}

{% if generalConfig.useEmailAsUsername %}
    {% set usernameLabel = 'Email'|t('app') %}
    {% set usernameType = 'email' %}
{% else %}
    {% set usernameLabel = 'Username or Email'|t('app') %}
    {% set usernameType = 'text' %}
{% endif %}

{% set hasLogo = CraftEdition == CraftPro and craft.rebrand.isLogoUploaded %}

{% set formAttributes = {
    id: 'login-form',
    method: 'post',
    class: generalConfig.rememberedUserSessionDuration ? 'remember-me' : '',
    'accept-charset': 'UTF-8',
} %}

{% if hasLogo %}
    {% set logo = craft.rebrand.logo %}
{% endif %}

{% set formHtml %}
    <main>
        <div id=\"login\">

            <h1>
                {% if hasLogo %}
                    {{ tag('img', {
                        id: 'login-logo',
                        src: logo.url,
                        alt: systemName,
                        width: logo.width,
                        height: logo.height,
                    }) }}
                {% else %}
                    {{ systemName }}
                {% endif %}
            </h1>

            <form {{ attr(formAttributes) }}>

                <div id=\"login-form-top\">
                    {{ forms.textField({
                        id: 'loginName',
                        name: 'username',
                        placeholder: usernameLabel,
                        value: username,
                        autocomplete: 'username',
                        autocapitalize: false,
                        type: usernameType,
                        inputAttributes: {
                            aria: {
                                label: usernameLabel,
                                required: 'true',
                            },
                        },
                    }) }}
                    {{ forms.passwordField({
                        id: 'password',
                        name: 'password',
                        placeholder: 'Password'|t('app'),
                        autocomplete: 'current-password',
                        inputAttributes: {
                            aria: {
                                label: 'Password'|t('app'),
                                required: 'true',
                            },
                        },
                    }) }}
                </div>

                <div id=\"login-form-bottom\">
                    {% if generalConfig.rememberedUserSessionDuration %}
                        {{ forms.checkboxField({
                            id: 'rememberMe',
                            label: 'Keep me signed in for {duration}'|t('app', {
                                duration: generalConfig.getRememberedUserSessionDuration()|duration,
                            })
                        }) }}
                    {% endif %}
                </div>

                <div id=\"login-form-buttons\" class=\"buttons\">
                    {{ forms.submitButton({
                        id: 'submit',
                        label: 'Sign in'|t('app'),
                        spinner: true,
                    }) }}
                </div>

                <div id=\"login-form-extra\">
                    <button id=\"forgot-password\" type=\"button\">{{ 'Forgot your password?'|t('app') }}</button>
                    <button id=\"remember-password\" type=\"button\">{{ 'Remember your password?'|t('app') }}</button>
                </div>
            </form>

            <div id=\"login-errors\" role=\"alert\">
            </div>

            <a id=\"poweredby\" href=\"http://craftcms.com/\" title=\"{{ 'Powered by Craft CMS'|t('app') }}\" aria-label=\"Craft CMS\">
                {{ svg('@app/web/assets/cp/dist/images/craftcms.svg') }}
            </a>

        </div>

    </main>
{% endset %}

{% set noCookiesHtml %}
    <main>
        <div class=\"message-container no-access\">
            <div class=\"pane notice\">
                <p>{{ 'Cookies must be enabled to access the Craft CMS control panel.'|t('app') }}</p>
            </div>
        </div>
    </main>
{% endset %}

{% block body %}
    <script type=\"text/javascript\">
        var cookieTest = 'CraftCookieTest='+Math.floor(Math.random() * 1000000);
        document.cookie = cookieTest;
        if (document.cookie.search(cookieTest) != -1) {
            document.cookie = cookieTest + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            document.write({{ formHtml|json_encode|raw }});
        } else {
            document.write({{ noCookiesHtml|json_encode|raw }});
        }
    </script>
{% endblock %}
", "login", "/var/www/html/vendor/craftcms/cms/src/templates/login.twig");
    }
}
