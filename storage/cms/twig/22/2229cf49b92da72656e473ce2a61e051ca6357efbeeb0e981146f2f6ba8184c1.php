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

/* /var/www/html/October/themes/demo/layouts/default.htm */
class __TwigTemplate_d180476121cb4ff7b9cb00aaacc9b2ee4b0fb52a8e1eac16835f7fdf01ec174e extends \Twig\Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <script src=\"https://code.jquery.com/jquery-1.11.3.js\"></script>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
        <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/css1.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 17
        echo "
        <script>
        \$(function() {
            console.log( \"ready!\" );
            \$(document).on(\"mouseover\", \"spoiler\", function() {
                \$(\"spoiler div\").show();
            });


        });
        
        </script>
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 40
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 51
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 52
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 53
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/October/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 53,  147 => 52,  136 => 51,  132 => 50,  128 => 49,  124 => 48,  119 => 45,  115 => 44,  109 => 40,  107 => 39,  101 => 35,  97 => 34,  78 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <script src=\"https://code.jquery.com/jquery-1.11.3.js\"></script>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
        <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/css1.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}

        <script>
        \$(function() {
            console.log( \"ready!\" );
            \$(document).on(\"mouseover\", \"spoiler\", function() {
                \$(\"spoiler div\").show();
            });


        });
        
        </script>
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "/var/www/html/October/themes/demo/layouts/default.htm", "");
    }
}
