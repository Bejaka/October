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

/* /var/www/html/October/themes/demo/pages/404.htm */
class __TwigTemplate_a098429e820eaffa5b91581800c3ba38bdf997634d87fdf06c1850cf7e245985 extends \Twig\Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Hups, jokin meni vikaan...</h1>
        <p><a href=\"http://localhost/October/\">Tästä pääset takaisin pääsivulle.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/October/themes/demo/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Hups, jokin meni vikaan...</h1>
        <p><a href=\"http://localhost/October/\">Tästä pääset takaisin pääsivulle.</p>
    </div>
</div>", "/var/www/html/October/themes/demo/pages/404.htm", "");
    }
}
