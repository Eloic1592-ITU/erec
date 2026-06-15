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

/* front/partials/steps/_step_btn_prev.html.twig */
class __TwigTemplate_68a705904dfa7d8719d4c287a9635077 extends Template
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
        echo "<button type=\"button\" class=\"btn btn-outline-secondary ps-lg-1 prev-step d-flex align-items-center gap-1\">
  <i class=\"bx bx-chevron-left\"></i> 
  <span class=\"d-none d-lg-flex\">Retour</span>
</button>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/steps/_step_btn_prev.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/steps/_step_btn_prev.html.twig", "/var/www/html/erecrutement/templates/front/partials/steps/_step_btn_prev.html.twig");
    }
}
