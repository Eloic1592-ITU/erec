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

/* front/partials/steps/_step_btn_next.html.twig */
class __TwigTemplate_67161088e20228f9bcc8a9e250224f20 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/steps/_step_btn_next.html.twig"));

        // line 1
        echo "<div class=\"d-flex gap-2\">
  <button type=\"button\" class=\"btn btn-outline-primary d-flex align-items-center gap-2\">
    <i class=\"bx bx-download\"></i> <span class=\"d-none d-lg-flex\">Enregistrer ma candidature</span>
  </button>
  <button type=\"button\" class=\"btn btn-outline-success pe-lg-1 next-step d-flex align-items-center gap-1\">
    <span class=\"d-none d-lg-flex\">Continuer</span> <i class=\"bx bx-chevron-right\"></i>
  </button>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/steps/_step_btn_next.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/steps/_step_btn_next.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\steps\\_step_btn_next.html.twig");
    }
}
