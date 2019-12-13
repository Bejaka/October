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

/* /var/www/html/October/themes/demo/pages/error.htm */
class __TwigTemplate_19fb3e619c48b85e906cd2287c90d453fdef51ba9898ec03f829a90d321dce9f extends \Twig\Template
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
            <h1>Error</h1>
            <p>Emme voi näyttää tätä sivua, teknisistä ongelmista johtuen.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/October/themes/demo/pages/error.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron\">
    <div class=\"container\">
            <h1>Error</h1>
            <p>Emme voi näyttää tätä sivua, teknisistä ongelmista johtuen.</p>
    </div>
</div>", "/var/www/html/October/themes/demo/pages/error.htm", "");
    }
}
