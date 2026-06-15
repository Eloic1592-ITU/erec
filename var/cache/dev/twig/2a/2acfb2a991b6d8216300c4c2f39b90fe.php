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

/* front/partials/steps/_step5.html.twig */
class __TwigTemplate_f4aa8130308fe9c9ad3d4851a098f318 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/steps/_step5.html.twig"));

        // line 1
        echo "<!-- Step 5 form fields here -->

<div class=\"step step-5\">
  <div class=\"d-flex align-items-start justify-content-between my-4 d-block d-lg-none gap-2\">
    <div class=\"text-center bg-primary text-white px-2 py-1 rounded-1\">
      5/9
    </div>
    <div class=\"d-flex flex-column text-end\">
      <h3 class=\"text-end text-primary mb-1\">Stages suivis</h3>
      <p class=\"text-paragraph m-0\">Suivant : Expériences professionnelles</p>
    </div>
  </div>

  <p class=\"pb-4 border-bottom-dashed text-paragraph d-block d-lg-none\">Veuillez remplir les champs qui sont marqués obligatoires (<span class=\"text-danger\">*</span>)</p>
  
  <h3 class=\"d-none d-lg-flex justify-content-center py-3 mb-4 border-full-dashed\">
    Stages suivis
  </h3>

  ";
        // line 20
        if (twig_test_empty(($context["internshipForms"] ?? null))) {
            // line 21
            echo "    <div class =\"empty-list\">
      ";
            // line 22
            echo twig_include($this->env, $context, "front/partials/forms/internship/_form_init.html.twig");
            echo "
    </div>
  ";
        } else {
            // line 25
            echo "    <div class =\"not-empty-list\">
      ";
            // line 26
            echo twig_include($this->env, $context, "front/partials/forms/internship/_form_init.html.twig");
            echo "
    </div>
  ";
        }
        // line 29
        echo "
  <div id=\"internship-actions\" class=\"step-5-actions mt-4 pt-4 d-flex justify-content-between\">
    ";
        // line 31
        echo twig_include($this->env, $context, "front/partials/steps/_step_btn_prev.html.twig");
        echo "

    <button 
      type=\"button\" 
      class=\"next-step btn btn-success pe-lg-1 d-flex align-items-center gap-1\" 
      ";
        // line 36
        if (twig_test_empty(($context["internshipForms"] ?? null))) {
            echo " 
        disabled 
      ";
        }
        // line 39
        echo "    >
      <span class=\"d-none d-lg-flex\">Continuer</span> <i class=\"bx bx-chevron-right\"></i>
    </button>

  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/steps/_step5.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  99 => 39,  93 => 36,  85 => 31,  81 => 29,  75 => 26,  72 => 25,  66 => 22,  63 => 21,  61 => 20,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/steps/_step5.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\steps\\_step5.html.twig");
    }
}
