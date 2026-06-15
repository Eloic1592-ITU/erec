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

/* front/partials/steps/_step6.html.twig */
class __TwigTemplate_3dc21411f7439371b5fe8994e59e989a extends Template
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
        echo "<!-- Step 6 form fields here -->

<div class=\"step step-6\">
  <div class=\"d-flex align-items-start justify-content-between my-4 d-block d-lg-none gap-2\">
    <div class=\"text-center bg-primary text-white px-2 py-1 rounded-1\">
      6/9
    </div>
    <div class=\"d-flex flex-column text-end\">
      <h3 class=\"text-end text-primary mb-1\">Expériences professionnelles</h3>
      <p class=\"text-paragraph m-0\">Suivant : Autres Informations</p>
    </div>
  </div>

  <p class=\"pb-4 border-bottom-dashed text-paragraph d-block d-lg-none\">Veuillez remplir les champs qui sont marqués obligatoires (<span class=\"text-danger\">*</span>)</p>

  <h3 class=\"d-none d-lg-flex justify-content-center py-3 mb-4 border-full-dashed\">
    Expériences professionnelles
  </h3>

  ";
        // line 20
        if (twig_test_empty(($context["workExperienceForms"] ?? null))) {
            // line 21
            echo "    <div class =\"empty-list\">
      ";
            // line 22
            echo twig_include($this->env, $context, "front/partials/forms/work-experience/_form_init.html.twig");
            echo "
    </div>
  ";
        } else {
            // line 25
            echo "    <div class =\"not-empty-list\">
      ";
            // line 26
            echo twig_include($this->env, $context, "front/partials/forms/work-experience/_form_init.html.twig");
            echo "
    </div>
  ";
        }
        // line 29
        echo "
  <div id=\"work-experience-actions\" class=\"step-6-actions mt-4 pt-4 d-flex justify-content-between\">
    ";
        // line 31
        echo twig_include($this->env, $context, "front/partials/steps/_step_btn_prev.html.twig");
        echo "
    
    <button 
      type=\"button\" 
      class=\"next-step btn btn-success pe-lg-1 d-flex align-items-center gap-1\" 
      ";
        // line 36
        if (twig_test_empty(($context["workExperienceForms"] ?? null))) {
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
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/steps/_step6.html.twig";
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
        return array (  96 => 39,  90 => 36,  82 => 31,  78 => 29,  72 => 26,  69 => 25,  63 => 22,  60 => 21,  58 => 20,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/steps/_step6.html.twig", "/var/www/html/erecrutement/templates/front/partials/steps/_step6.html.twig");
    }
}
