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

/* /var/www/html/October/themes/demo/pages/4041.htm */
class __TwigTemplate_f7c3b936b6c1e0818fe45c3f02524fcd3042311e3cdb60ad875f2b0706192559 extends \Twig\Template
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
        <h1>Tämä on Dev-sivu</h1>
        <p>Alla olevasta listasta löydät kaikki mahdolliset sivut. Myös error-sivut.
                <ul>
                    <li><a href=\"http://localhost/October/404\">Error 404</a></li>
                    <li>Linkki2</li>
                    <li>Linkki3</li>
                </ul>
            <br><a href=\"http://localhost/October/\">Tästä pääset takaisin pääsivulle.</a></p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/October/themes/demo/pages/4041.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Tämä on Dev-sivu</h1>
        <p>Alla olevasta listasta löydät kaikki mahdolliset sivut. Myös error-sivut.
                <ul>
                    <li><a href=\"http://localhost/October/404\">Error 404</a></li>
                    <li>Linkki2</li>
                    <li>Linkki3</li>
                </ul>
            <br><a href=\"http://localhost/October/\">Tästä pääset takaisin pääsivulle.</a></p>
    </div>
</div>", "/var/www/html/October/themes/demo/pages/4041.htm", "");
    }
}
