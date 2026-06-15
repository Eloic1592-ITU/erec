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

/* front/partials/steps/_step4.html.twig */
class __TwigTemplate_fa9b53956a3398ac457e8cb21cca9b8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/steps/_step4.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/steps/_step4.html.twig"));

        // line 1
        echo "<!-- Step 4 form fields here -->

<div class=\"step step-4\">
  <div class=\"d-flex align-items-start justify-content-between my-4 d-block d-lg-none gap-2\">
    <div class=\"text-center bg-primary text-white px-2 py-1 rounded-1\">
      4/9
    </div>
    <div class=\"d-flex flex-column text-end\">
      <h3 class=\"text-end text-primary mb-1\">Certificats ou attestations</h3>
      <p class=\"text-paragraph m-0\">Suivant : Stages suivis</p>
    </div>
  </div>

  <p class=\"pb-4 border-bottom-dashed text-paragraph d-block d-lg-none\">Veuillez remplir les champs qui sont marqués obligatoires (<span class=\"text-danger\">*</span>)</p>
  
  <h3 class=\"d-none d-lg-flex justify-content-center py-3 mb-4 border-full-dashed\">
    Certificats ou attestations
  </h3>

  ";
        // line 20
        if (twig_test_empty((isset($context["certificationForms"]) || array_key_exists("certificationForms", $context) ? $context["certificationForms"] : (function () { throw new RuntimeError('Variable "certificationForms" does not exist.', 20, $this->source); })()))) {
            // line 21
            echo "    <div class =\"empty-list\">
      ";
            // line 22
            echo twig_include($this->env, $context, "front/partials/forms/certification/_form_init.html.twig");
            echo "
    </div>
  ";
        } else {
            // line 25
            echo "    <div class =\"not-empty-list\">
      ";
            // line 26
            echo twig_include($this->env, $context, "front/partials/forms/certification/_form_init.html.twig");
            echo "
    </div>
  ";
        }
        // line 29
        echo "
  <div id=\"certification-actions\" class=\"step-4-actions mt-4 pt-4 d-flex justify-content-between\">
    ";
        // line 31
        echo twig_include($this->env, $context, "front/partials/steps/_step_btn_prev.html.twig");
        echo "

    <button 
      type=\"button\" 
      class=\"next-step btn btn-success pe-lg-1 d-flex align-items-center gap-1\" 
      ";
        // line 36
        if (twig_test_empty((isset($context["certificationForms"]) || array_key_exists("certificationForms", $context) ? $context["certificationForms"] : (function () { throw new RuntimeError('Variable "certificationForms" does not exist.', 36, $this->source); })()))) {
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/steps/_step4.html.twig";
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
        return array (  102 => 39,  96 => 36,  88 => 31,  84 => 29,  78 => 26,  75 => 25,  69 => 22,  66 => 21,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Step 4 form fields here -->

<div class=\"step step-4\">
  <div class=\"d-flex align-items-start justify-content-between my-4 d-block d-lg-none gap-2\">
    <div class=\"text-center bg-primary text-white px-2 py-1 rounded-1\">
      4/9
    </div>
    <div class=\"d-flex flex-column text-end\">
      <h3 class=\"text-end text-primary mb-1\">Certificats ou attestations</h3>
      <p class=\"text-paragraph m-0\">Suivant : Stages suivis</p>
    </div>
  </div>

  <p class=\"pb-4 border-bottom-dashed text-paragraph d-block d-lg-none\">Veuillez remplir les champs qui sont marqués obligatoires (<span class=\"text-danger\">*</span>)</p>
  
  <h3 class=\"d-none d-lg-flex justify-content-center py-3 mb-4 border-full-dashed\">
    Certificats ou attestations
  </h3>

  {% if certificationForms is empty %}
    <div class =\"empty-list\">
      {{ include('front/partials/forms/certification/_form_init.html.twig') }}
    </div>
  {% else %}
    <div class =\"not-empty-list\">
      {{ include('front/partials/forms/certification/_form_init.html.twig') }}
    </div>
  {% endif %}

  <div id=\"certification-actions\" class=\"step-4-actions mt-4 pt-4 d-flex justify-content-between\">
    {{ include('front/partials/steps/_step_btn_prev.html.twig') }}

    <button 
      type=\"button\" 
      class=\"next-step btn btn-success pe-lg-1 d-flex align-items-center gap-1\" 
      {% if certificationForms is empty %} 
        disabled 
      {% endif %}
    >
      <span class=\"d-none d-lg-flex\">Continuer</span> <i class=\"bx bx-chevron-right\"></i>
    </button>
    
  </div>
</div>
", "front/partials/steps/_step4.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\steps\\_step4.html.twig");
    }
}
