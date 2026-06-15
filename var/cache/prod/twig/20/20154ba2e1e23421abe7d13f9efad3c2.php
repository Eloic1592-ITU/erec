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

/* front/partials/steps/_step_alert_success.html.twig */
class __TwigTemplate_59ba66a8f8ecdec6d5957abfe687ba06 extends Template
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
        echo "<div class=\"d-flex justify-content-center my-4\">
    <div class=\"alert alert-success text-center animate__animated animate__fadeIn px-4 mb-0\">
        <span class=\"d-flex align-items-center gap-2\"><i class=\"bx bx-check\"></i> Passez directement à l'étape suivante !</span>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/steps/_step_alert_success.html.twig";
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
        return new Source("", "front/partials/steps/_step_alert_success.html.twig", "/var/www/html/erecrutement/templates/front/partials/steps/_step_alert_success.html.twig");
    }
}
