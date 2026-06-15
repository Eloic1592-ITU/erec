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

/* front/partials/steps/_step2.html.twig */
class __TwigTemplate_7a81721876e01af92361d8221a62f686 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/steps/_step2.html.twig"));

        // line 1
        echo "<!-- Step 2 form fields here -->

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["profileForm"] ?? null), 'form_start', ["attr" => ["id" => "profile-form", "class" => "needs-validation", "novalidate" => ""]]);
        // line 9
        echo "

";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "_token", [], "any", false, false, false, 11), 'row');
        echo "

<div class=\"step step-2\">
  <div class=\"d-flex align-items-start justify-content-between my-4 d-block d-lg-none gap-2\">
    <div class=\"text-center bg-primary text-white px-2 py-1 rounded-1\">
      2/9
    </div>
    <div class=\"d-flex flex-column text-end\">
      <h3 class=\"text-end text-primary mb-1\">Informations personnelles</h3>
      <p class=\"text-paragraph m-0\">Suivant : Etudes académiques</p>
    </div>
  </div>

  <p class=\"pb-4 border-bottom-dashed text-paragraph d-block d-lg-none\">Veuillez remplir les champs qui sont marqués obligatoires (<span class=\"text-danger\">*</span>)</p>

  <h3 class=\"d-none d-lg-flex justify-content-center py-3 mb-4 border-full-dashed\">
    Informations personnelles
  </h3>

  <div class=\"row\">
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "civility", [], "any", false, false, false, 33), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "civility", [], "any", false, false, false, 34), 'widget');
        echo "
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        <label class=\"form-label\">Nom <span class=\"star\">*</span></label>
        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 40), "getLastName", [], "method", false, false, false, 40), "html", null, true);
        echo "\" readonly />
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        <label class=\"form-label\">Prénom <span class=\"star\">*</span></label>
        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 46), "getFirstName", [], "method", false, false, false, 46), "html", null, true);
        echo "\" readonly />
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        <label class=\"form-label\">Date de naissance <span class=\"star\">*</span></label>
        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 55), "getBirthDate", [], "method", false, false, false, 55), "d/m/Y"), "html", null, true);
        echo "\" readonly />
      </div>
    </div>
    <div class=\"col-lg-8\">
      <div class=\"mb-3\">
        <label for=\"pdn\" class=\"form-label\">Lieu de naissance <span class=\"star\">*</span></label>
        <div class=\"row\">
          <div class=\"col-lg-12 d-flex flex-wrap flex-md-nowrap gap-4\">
            ";
        // line 64
        echo "            <div class=\"d-flex flex-column w-100\">
              ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "birth_country", [], "any", false, false, false, 65), 'widget');
        echo "
            </div>
            
            ";
        // line 69
        echo "            <div class=\"d-flex flex-column w-100\">
              ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "birth_city", [], "any", false, false, false, 70), 'widget');
        echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        <label class=\"form-label\">N° CIN <span class=\"star\">*</span></label>
        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 82), "getCin", [], "method", false, false, false, 82), "html", null, true);
        echo "\" readonly />
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "cin_issue_date", [], "any", false, false, false, 87), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "cin_issue_date", [], "any", false, false, false, 88), 'widget');
        echo "
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        ";
        // line 94
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "cin_issue_place", [], "any", false, false, false, 94), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "cin_issue_place", [], "any", false, false, false, 95), 'widget');
        echo "
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "address", [], "any", false, false, false, 103), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "address", [], "any", false, false, false, 104), 'widget');
        echo "
      </div>
    </div>
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        ";
        // line 110
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "postal_code", [], "any", false, false, false, 110), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "postal_code", [], "any", false, false, false, 111), 'widget');
        echo "
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "city", [], "any", false, false, false, 119), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "city", [], "any", false, false, false, 120), 'widget');
        echo "
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "country", [], "any", false, false, false, 125), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "country", [], "any", false, false, false, 126), 'widget');
        echo "
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "nationality", [], "any", false, false, false, 131), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "nationality", [], "any", false, false, false, 132), 'widget');
        echo "
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "marital_status", [], "any", false, false, false, 140), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "marital_status", [], "any", false, false, false, 141), 'widget');
        echo "
      </div>
    </div>
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "number_of_children", [], "any", false, false, false, 146), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "number_of_children", [], "any", false, false, false, 147), 'widget');
        echo "
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div>
        ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "phone1", [], "any", false, false, false, 155), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "phone1", [], "any", false, false, false, 156), 'widget');
        echo "
      </div>
      <div class=\"form-text mb-3\">
        Veuillez utiliser l'un des formats suivants : 032 XX XXX XX ou +261 32 XX XXX XX
      </div>
    </div>
    <div class=\"col-lg-6\">
      <div>
        ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "phone2", [], "any", false, false, false, 164), 'label');
        echo "
        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "phone2", [], "any", false, false, false, 165), 'widget');
        echo "
      </div>
      <div class=\"form-text mb-3\">
        Veuillez utiliser l'un des formats suivants : 032 XX XXX XX ou +261 32 XX XXX XX
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"mb-3\">
        <label class=\"form-label\">Courier électronique <span class=\"star\">*</span></label>
        <input type=\"email\" class=\"form-control\" placeholder=\"";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 177), "getEmail", [], "method", false, false, false, 177), "html", null, true);
        echo "\" readonly />
      </div>
    </div>
  </div>

  <div class=\"mt-4 pt-4 d-flex justify-content-between\">
    ";
        // line 183
        echo twig_include($this->env, $context, "front/partials/steps/_step_btn_prev.html.twig");
        echo "
    
    <div id=\"profile-actions\" class=\"d-flex gap-2\">
      <button id=\"profile-submit\" type=\"submit\" class=\"btn btn-outline-primary d-flex align-items-center gap-2\">
        <i class='bx bx-check'></i> <span class=\"\">Enregistrer</span>
      </button>

      <button id=\"profile-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
        <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
        <span role=\"status\">Enregistrement...</span>
      </button>

      <button 
        type=\"button\" 
        class=\"next-step btn btn-success pe-lg-1 d-flex align-items-center gap-1\" 
        ";
        // line 198
        if ( !($context["is_profile_edit"] ?? null)) {
            echo " 
          disabled 
        ";
        }
        // line 201
        echo "      >
        <span class=\"d-none d-lg-flex\">Continuer</span> <i class=\"bx bx-chevron-right\"></i>
      </button>

    </div>
  </div>
</div>

";
        // line 209
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["jobApplicationForm"] ?? null), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/steps/_step2.html.twig";
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
        return array (  354 => 209,  344 => 201,  338 => 198,  320 => 183,  311 => 177,  296 => 165,  292 => 164,  281 => 156,  277 => 155,  266 => 147,  262 => 146,  254 => 141,  250 => 140,  239 => 132,  235 => 131,  227 => 126,  223 => 125,  215 => 120,  211 => 119,  200 => 111,  195 => 110,  187 => 104,  183 => 103,  172 => 95,  167 => 94,  159 => 88,  155 => 87,  147 => 82,  132 => 70,  129 => 69,  123 => 65,  120 => 64,  109 => 55,  97 => 46,  88 => 40,  79 => 34,  75 => 33,  50 => 11,  46 => 9,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/steps/_step2.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\steps\\_step2.html.twig");
    }
}
