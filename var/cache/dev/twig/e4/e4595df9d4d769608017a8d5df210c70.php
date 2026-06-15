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
class __TwigTemplate_c73c21c8c772b078ea1847d2efd29e02 extends Template
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

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/steps/_step2.html.twig"));

        // line 1
        echo "<!-- Step 2 form fields here -->

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["id" => "profile-form", "class" => "needs-validation", "novalidate" => ""]]);
        // line 9
        echo "

";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 11, $this->source); })()), "_token", [], "any", false, false, false, 11), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 33, $this->source); })()), "civility", [], "any", false, false, false, 33), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 34, $this->source); })()), "civility", [], "any", false, false, false, 34), 'widget');
        echo "
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        <label class=\"form-label\">Nom <span class=\"star\">*</span></label>
        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "getLastName", [], "method", false, false, false, 40), "html", null, true);
        echo "\" readonly />
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        <label class=\"form-label\">Prénom <span class=\"star\">*</span></label>
        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "getFirstName", [], "method", false, false, false, 46), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "getBirthDate", [], "method", false, false, false, 55), "d/m/Y"), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 65, $this->source); })()), "birth_country", [], "any", false, false, false, 65), 'widget');
        echo "
            </div>
            
            ";
        // line 69
        echo "            <div class=\"d-flex flex-column w-100\">
              ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 70, $this->source); })()), "birth_city", [], "any", false, false, false, 70), 'widget');
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "getCin", [], "method", false, false, false, 82), "html", null, true);
        echo "\" readonly />
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 87, $this->source); })()), "cin_issue_date", [], "any", false, false, false, 87), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 88, $this->source); })()), "cin_issue_date", [], "any", false, false, false, 88), 'widget');
        echo "
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        ";
        // line 94
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 94, $this->source); })()), "cin_issue_place", [], "any", false, false, false, 94), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 95, $this->source); })()), "cin_issue_place", [], "any", false, false, false, 95), 'widget');
        echo "
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 103, $this->source); })()), "address", [], "any", false, false, false, 103), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 104, $this->source); })()), "address", [], "any", false, false, false, 104), 'widget');
        echo "
      </div>
    </div>
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        ";
        // line 110
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 110, $this->source); })()), "postal_code", [], "any", false, false, false, 110), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 111, $this->source); })()), "postal_code", [], "any", false, false, false, 111), 'widget');
        echo "
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 119, $this->source); })()), "city", [], "any", false, false, false, 119), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 120, $this->source); })()), "city", [], "any", false, false, false, 120), 'widget');
        echo "
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 125, $this->source); })()), "country", [], "any", false, false, false, 125), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 126, $this->source); })()), "country", [], "any", false, false, false, 126), 'widget');
        echo "
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 131, $this->source); })()), "nationality", [], "any", false, false, false, 131), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 132, $this->source); })()), "nationality", [], "any", false, false, false, 132), 'widget');
        echo "
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 140, $this->source); })()), "marital_status", [], "any", false, false, false, 140), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 141, $this->source); })()), "marital_status", [], "any", false, false, false, 141), 'widget');
        echo "
      </div>
    </div>
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 146, $this->source); })()), "number_of_children", [], "any", false, false, false, 146), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 147, $this->source); })()), "number_of_children", [], "any", false, false, false, 147), 'widget');
        echo "
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div>
        ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 155, $this->source); })()), "phone1", [], "any", false, false, false, 155), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 156, $this->source); })()), "phone1", [], "any", false, false, false, 156), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 164, $this->source); })()), "phone2", [], "any", false, false, false, 164), 'label');
        echo "
        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 165, $this->source); })()), "phone2", [], "any", false, false, false, 165), 'widget');
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 177, $this->source); })()), "user", [], "any", false, false, false, 177), "getEmail", [], "method", false, false, false, 177), "html", null, true);
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
        if ( !(isset($context["is_profile_edit"]) || array_key_exists("is_profile_edit", $context) ? $context["is_profile_edit"] : (function () { throw new RuntimeError('Variable "is_profile_edit" does not exist.', 198, $this->source); })())) {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["jobApplicationForm"]) || array_key_exists("jobApplicationForm", $context) ? $context["jobApplicationForm"] : (function () { throw new RuntimeError('Variable "jobApplicationForm" does not exist.', 209, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  357 => 209,  347 => 201,  341 => 198,  323 => 183,  314 => 177,  299 => 165,  295 => 164,  284 => 156,  280 => 155,  269 => 147,  265 => 146,  257 => 141,  253 => 140,  242 => 132,  238 => 131,  230 => 126,  226 => 125,  218 => 120,  214 => 119,  203 => 111,  198 => 110,  190 => 104,  186 => 103,  175 => 95,  170 => 94,  162 => 88,  158 => 87,  150 => 82,  135 => 70,  132 => 69,  126 => 65,  123 => 64,  112 => 55,  100 => 46,  91 => 40,  82 => 34,  78 => 33,  53 => 11,  49 => 9,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Step 2 form fields here -->

{{ form_start(profileForm, {
  'attr': {
    'id': 'profile-form', 
    'class': 'needs-validation',
    'novalidate': '',
  }
}) }}

{{ form_row(profileForm._token) }}

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
        {{ form_label(profileForm.civility) }} <span class=\"star\">*</span>
        {{ form_widget(profileForm.civility) }}
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        <label class=\"form-label\">Nom <span class=\"star\">*</span></label>
        <input type=\"text\" class=\"form-control\" placeholder=\"{{ app.user.getLastName() }}\" readonly />
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        <label class=\"form-label\">Prénom <span class=\"star\">*</span></label>
        <input type=\"text\" class=\"form-control\" placeholder=\"{{ app.user.getFirstName() }}\" readonly />
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        <label class=\"form-label\">Date de naissance <span class=\"star\">*</span></label>
        <input type=\"text\" class=\"form-control\" placeholder=\"{{ app.user.getBirthDate()|date('d/m/Y') }}\" readonly />
      </div>
    </div>
    <div class=\"col-lg-8\">
      <div class=\"mb-3\">
        <label for=\"pdn\" class=\"form-label\">Lieu de naissance <span class=\"star\">*</span></label>
        <div class=\"row\">
          <div class=\"col-lg-12 d-flex flex-wrap flex-md-nowrap gap-4\">
            {# Pays de naissance #}
            <div class=\"d-flex flex-column w-100\">
              {{ form_widget(profileForm.birth_country) }}
            </div>
            
            {# Lieu de naissance #}
            <div class=\"d-flex flex-column w-100\">
              {{ form_widget(profileForm.birth_city) }}
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
        <input type=\"text\" class=\"form-control\" placeholder=\"{{ app.user.getCin() }}\" readonly />
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        {{ form_label(profileForm.cin_issue_date) }} <span class=\"star\">*</span>
        {{ form_widget(profileForm.cin_issue_date) }}
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        {# Lieu de délivrance #}
        {{ form_label(profileForm.cin_issue_place) }} <span class=\"star\">*</span>
        {{ form_widget(profileForm.cin_issue_place) }}
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        {{ form_label(profileForm.address) }} <span class=\"star\">*</span>
        {{ form_widget(profileForm.address) }}
      </div>
    </div>
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        {# Code postal #}
        {{ form_label(profileForm.postal_code) }} <span class=\"star\">*</span>
        {{ form_widget(profileForm.postal_code) }}
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        {{ form_label(profileForm.city) }} <span class=\"star\">*</span>
        {{ form_widget(profileForm.city) }}
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        {{ form_label(profileForm.country) }} <span class=\"star\">*</span>
        {{ form_widget(profileForm.country) }}
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"mb-3\">
        {{ form_label(profileForm.nationality) }} <span class=\"star\">*</span>
        {{ form_widget(profileForm.nationality) }}
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        {{ form_label(profileForm.marital_status) }} <span class=\"star\">*</span>
        {{ form_widget(profileForm.marital_status) }}
      </div>
    </div>
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        {{ form_label(profileForm.number_of_children) }} <span class=\"star\">*</span>
        {{ form_widget(profileForm.number_of_children) }}
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div>
        {{ form_label(profileForm.phone1) }} <span class=\"star\">*</span>
        {{ form_widget(profileForm.phone1) }}
      </div>
      <div class=\"form-text mb-3\">
        Veuillez utiliser l'un des formats suivants : 032 XX XXX XX ou +261 32 XX XXX XX
      </div>
    </div>
    <div class=\"col-lg-6\">
      <div>
        {{ form_label(profileForm.phone2) }}
        {{ form_widget(profileForm.phone2) }}
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
        <input type=\"email\" class=\"form-control\" placeholder=\"{{ app.user.getEmail() }}\" readonly />
      </div>
    </div>
  </div>

  <div class=\"mt-4 pt-4 d-flex justify-content-between\">
    {{ include('front/partials/steps/_step_btn_prev.html.twig') }}
    
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
        {% if not is_profile_edit %} 
          disabled 
        {% endif %}
      >
        <span class=\"d-none d-lg-flex\">Continuer</span> <i class=\"bx bx-chevron-right\"></i>
      </button>

    </div>
  </div>
</div>

{{ form_end(jobApplicationForm) }}", "front/partials/steps/_step2.html.twig", "/var/www/html/erecrutement/templates/front/partials/steps/_step2.html.twig");
    }
}
