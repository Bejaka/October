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

/* /var/www/html/October/themes/demo/partials/calcresult.htm */
class __TwigTemplate_3c185d7d2c8dfc1903b9796e8089681d314c2273336b0318bc57e087464391a5 extends \Twig\Template
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
        if (($context["result"] ?? null)) {
            // line 2
            echo "    <span class=\"lead\">
        The result is <span class=\"label label-success\">";
            // line 3
            echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
            echo "</span>
    </span>
";
        } else {
            // line 6
            echo "    <span class=\"text-muted\">
        Click the <em>Calculate</em> button to find the answer.
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/October/themes/demo/partials/calcresult.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if result %}
    <span class=\"lead\">
        The result is <span class=\"label label-success\">{{ result }}</span>
    </span>
{% else %}
    <span class=\"text-muted\">
        Click the <em>Calculate</em> button to find the answer.
    </span>
{% endif %}", "/var/www/html/October/themes/demo/partials/calcresult.htm", "");
    }
}
