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

/* assets/_previews/image.twig */
class __TwigTemplate_f71cf6a3dc6332fe361c219ec5347744e43c97f596f7f2bff3fea02f79ad48a6 extends Template
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
        craft\helpers\Template::beginProfile("template", "assets/_previews/image.twig");
        // line 1
        echo "<div class=\"button-fade asset-image-preview\">
    <div class=\"buttons\">
        <div class=\"btn\" id=\"toggle-focal\">
        </div>
    </div>
    ";
        // line 6
        echo $this->extensions['craft\web\twig\Extension']->tagFunction("img", ["src" =>         // line 7
(isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 7, $this->source); })()), "width" => craft\helpers\Template::attribute($this->env, $this->source,         // line 8
(isset($context["asset"]) || array_key_exists("asset", $context) ? $context["asset"] : (function () { throw new RuntimeError('Variable "asset" does not exist.', 8, $this->source); })()), "width", []), "height" => craft\helpers\Template::attribute($this->env, $this->source,         // line 9
(isset($context["asset"]) || array_key_exists("asset", $context) ? $context["asset"] : (function () { throw new RuntimeError('Variable "asset" does not exist.', 9, $this->source); })()), "height", []), "alt" => craft\helpers\Template::attribute($this->env, $this->source,         // line 10
(isset($context["asset"]) || array_key_exists("asset", $context) ? $context["asset"] : (function () { throw new RuntimeError('Variable "asset" does not exist.', 10, $this->source); })()), "alt", []), "data" => ["uid" => craft\helpers\Template::attribute($this->env, $this->source,         // line 12
(isset($context["asset"]) || array_key_exists("asset", $context) ? $context["asset"] : (function () { throw new RuntimeError('Variable "asset" does not exist.', 12, $this->source); })()), "uid", []), "focal" => twig_join_filter(craft\helpers\Template::attribute($this->env, $this->source,         // line 13
(isset($context["asset"]) || array_key_exists("asset", $context) ? $context["asset"] : (function () { throw new RuntimeError('Variable "asset" does not exist.', 13, $this->source); })()), "focalPoint", []), ";"), "maxWidth" => craft\helpers\Template::attribute($this->env, $this->source,         // line 14
(isset($context["asset"]) || array_key_exists("asset", $context) ? $context["asset"] : (function () { throw new RuntimeError('Variable "asset" does not exist.', 14, $this->source); })()), "width", []), "maxHeight" => craft\helpers\Template::attribute($this->env, $this->source,         // line 15
(isset($context["asset"]) || array_key_exists("asset", $context) ? $context["asset"] : (function () { throw new RuntimeError('Variable "asset" does not exist.', 15, $this->source); })()), "height", [])], "onload" => "resizePreviewImage()"]);
        // line 18
        echo "
</div>

";
        // line 21
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 21, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\focalpoint\\FocalPointAsset"], "method");
        // line 22
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 22, $this->source); })()), "registerTranslations", [0 => "app", 1 => [0 => "Enable focal point", 1 => "Disable focal point", 2 => "Saving…"]], "method");
        // line 27
        echo "
";
        // line 28
        ob_start();
        // line 29
        echo "if (window.imageFocalPoint) {
    delete window.imageFocalPoint;
}
window.imageFocalPoint = new Craft.FocalPoint(Craft.PreviewFileModal.openInstance.\$container.find('.asset-image-preview'), \$('#toggle-focal'), ";
        // line 32
        echo twig_escape_filter($this->env, ((array_key_exists("editFocal", $context)) ? (_twig_default_filter((isset($context["editFocal"]) || array_key_exists("editFocal", $context) ? $context["editFocal"] : (function () { throw new RuntimeError('Variable "editFocal" does not exist.', 32, $this->source); })()), false)) : (false)), "html", null, true);
        echo ");

function resizePreviewImage() {
    var instance = Craft.PreviewFileModal.openInstance;
    var containerHeight = Garnish.\$win.height() * 0.66;

    var containerWidth = Math.min(containerHeight / 3 * 4, Garnish.\$win.width() - instance.settings.minGutter * 2);
    containerHeight = containerWidth / 4 * 3;

    var \$img = instance.\$container.find('img');

    \$img.css({
        width: containerWidth,
        height: containerHeight
    });

    if (instance.loaded && \$img.length) {
        // Make sure we maintain the ratio

        var maxWidth = \$img.data('maxwidth'),
            maxHeight = \$img.data('maxheight'),
            imageRatio = maxWidth / maxHeight,
            desiredWidth = instance.desiredWidth ? instance.desiredWidth : instance.getWidth(),
            desiredHeight = instance.desiredHeight ? instance.desiredHeight : instance.getHeight(),
            width = Math.min(desiredWidth, maxWidth),
            height = Math.round(Math.min(maxHeight, width / imageRatio));

        width = Math.round(height * imageRatio);

        \$img.css({'width': width, 'height': height});
        instance._resizeContainer(width, height);

        instance.desiredWidth = width;
        instance.desiredHeight = height;
    }

    instance.base();

    if (instance.loaded && \$img.length) {
        // Correct anomalities
        var containerWidth = Math.round(Math.min(Math.max(\$img.height() * imageRatio), Garnish.\$win.width() - (instance.settings.minGutter * 2))),
            containerHeight = Math.round(Math.min(Math.max(containerWidth / imageRatio), Garnish.\$win.height() - (instance.settings.minGutter * 2)));
        containerWidth = Math.round(containerHeight * imageRatio);

        // This might actually have put width over the viewport limits, so doublecheck that
        if (containerWidth > Math.min(containerWidth, Garnish.\$win.width() - instance.settings.minGutter * 2)) {
            containerWidth =  Math.min(containerWidth, Garnish.\$win.width() - instance.settings.minGutter * 2);
            containerHeight = containerWidth / imageRatio;
        }

        instance._resizeContainer(containerWidth, containerHeight);
        \$img.css({'width': containerWidth, 'height': containerHeight});
        window.imageFocalPoint.renderFocal();
    }
}
";
        craft\helpers\Template::js(ob_get_clean(), ['position' => 3]);
        craft\helpers\Template::endProfile("template", "assets/_previews/image.twig");
    }

    public function getTemplateName()
    {
        return "assets/_previews/image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 32,  69 => 29,  67 => 28,  64 => 27,  62 => 22,  60 => 21,  55 => 18,  53 => 15,  52 => 14,  51 => 13,  50 => 12,  49 => 10,  48 => 9,  47 => 8,  46 => 7,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"button-fade asset-image-preview\">
    <div class=\"buttons\">
        <div class=\"btn\" id=\"toggle-focal\">
        </div>
    </div>
    {{ tag('img', {
        src: url,
        width: asset.width,
        height: asset.height,
        alt: asset.alt,
        data: {
            uid: asset.uid,
            focal: asset.focalPoint|join(';'),
            maxWidth: asset.width,
            maxHeight: asset.height,
        },
        onload: 'resizePreviewImage()',
    }) }}
</div>

{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\focalpoint\\\\FocalPointAsset\") %}
{% do view.registerTranslations('app', [
    'Enable focal point',
    'Disable focal point',
    'Saving…',
]) %}

{% js %}
if (window.imageFocalPoint) {
    delete window.imageFocalPoint;
}
window.imageFocalPoint = new Craft.FocalPoint(Craft.PreviewFileModal.openInstance.\$container.find('.asset-image-preview'), \$('#toggle-focal'), {{ editFocal|default(false) }});

function resizePreviewImage() {
    var instance = Craft.PreviewFileModal.openInstance;
    var containerHeight = Garnish.\$win.height() * 0.66;

    var containerWidth = Math.min(containerHeight / 3 * 4, Garnish.\$win.width() - instance.settings.minGutter * 2);
    containerHeight = containerWidth / 4 * 3;

    var \$img = instance.\$container.find('img');

    \$img.css({
        width: containerWidth,
        height: containerHeight
    });

    if (instance.loaded && \$img.length) {
        // Make sure we maintain the ratio

        var maxWidth = \$img.data('maxwidth'),
            maxHeight = \$img.data('maxheight'),
            imageRatio = maxWidth / maxHeight,
            desiredWidth = instance.desiredWidth ? instance.desiredWidth : instance.getWidth(),
            desiredHeight = instance.desiredHeight ? instance.desiredHeight : instance.getHeight(),
            width = Math.min(desiredWidth, maxWidth),
            height = Math.round(Math.min(maxHeight, width / imageRatio));

        width = Math.round(height * imageRatio);

        \$img.css({'width': width, 'height': height});
        instance._resizeContainer(width, height);

        instance.desiredWidth = width;
        instance.desiredHeight = height;
    }

    instance.base();

    if (instance.loaded && \$img.length) {
        // Correct anomalities
        var containerWidth = Math.round(Math.min(Math.max(\$img.height() * imageRatio), Garnish.\$win.width() - (instance.settings.minGutter * 2))),
            containerHeight = Math.round(Math.min(Math.max(containerWidth / imageRatio), Garnish.\$win.height() - (instance.settings.minGutter * 2)));
        containerWidth = Math.round(containerHeight * imageRatio);

        // This might actually have put width over the viewport limits, so doublecheck that
        if (containerWidth > Math.min(containerWidth, Garnish.\$win.width() - instance.settings.minGutter * 2)) {
            containerWidth =  Math.min(containerWidth, Garnish.\$win.width() - instance.settings.minGutter * 2);
            containerHeight = containerWidth / imageRatio;
        }

        instance._resizeContainer(containerWidth, containerHeight);
        \$img.css({'width': containerWidth, 'height': containerHeight});
        window.imageFocalPoint.renderFocal();
    }
}
{% endjs %}
", "assets/_previews/image.twig", "/var/www/html/vendor/craftcms/cms/src/templates/assets/_previews/image.twig");
    }
}
