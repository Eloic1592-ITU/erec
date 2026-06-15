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

/* front/partials/steps/_step9.html.twig */
class __TwigTemplate_a541aa5df63cb3e9d30390b48bcf529a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/steps/_step9.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/steps/_step9.html.twig"));

        // line 1
        echo "<!-- Step 9 form fields here -->

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["engagementForm"]) || array_key_exists("engagementForm", $context) ? $context["engagementForm"] : (function () { throw new RuntimeError('Variable "engagementForm" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["id" => "engagement-form", "class" => "needs-validation", "novalidate" => ""]]);
        // line 9
        echo "

<div class=\"step step-9\">

  <div class=\"d-flex align-items-start justify-content-between my-4 d-block d-lg-none gap-2\">
    <div class=\"text-center bg-primary text-white px-2 py-1 rounded-1\">
      9/9
    </div>
    <div class=\"d-flex flex-column text-end\">
      <h3 class=\"text-end text-primary mb-1\">Engagement</h3>
      <p class=\"text-paragraph m-0\">Suivant : Validation de ma candidature</p>
    </div>
  </div>
  <p class=\"pb-4 border-bottom-dashed text-paragraph d-block d-lg-none\">Veuillez remplir les champs qui sont marqués obligatoires (<span class=\"text-danger\">*</span>)</p>

  <h3 class=\"d-none d-lg-flex justify-content-center py-3 mb-4 border-full-dashed\">
    Engagement
  </h3>

  <div class=\"row\">
    <div class=\"col-lg-12\">
      <p class=\"text-center text-md-start\">Je sousigné <span class=\"commitment-user\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "getLastName", [], "method", false, false, false, 30), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "getFirstName", [], "method", false, false, false, 30), "html", null, true);
        echo "</span> certifie sur l'honneur l'exactitude des renseignements ci-dessus.</p>
      <div class=\"d-flex justify-content-center justify-content-md-end\">
        <p>Fait à ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["engagementForm"]) || array_key_exists("engagementForm", $context) ? $context["engagementForm"] : (function () { throw new RuntimeError('Variable "engagementForm" does not exist.', 32, $this->source); })()), "city", [], "any", false, false, false, 32), 'widget');
        echo ", le <span class=\"commitment-date\"></span></p>
      </div>
    </div>
  </div>

  <h3 class=\"d-flex justify-content-center py-3 my-4 border-full-dashed\">
    Autres postes souhaités
  </h3>

  <div class=\"row\">
    <div class=\"col-lg-12\">
      <p class=\"text-center text-md-start\">
        Au cas où vos compétences peuvent éventuellement satisfaire plusieurs postes, veuillez choisir un ou deux postes secondaires.
      </p>
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <div class=\"mb-3\">
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["engagementForm"]) || array_key_exists("engagementForm", $context) ? $context["engagementForm"] : (function () { throw new RuntimeError('Variable "engagementForm" does not exist.', 49, $this->source); })()), "second_position", [], "any", false, false, false, 49), 'label');
        echo " 
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["engagementForm"]) || array_key_exists("engagementForm", $context) ? $context["engagementForm"] : (function () { throw new RuntimeError('Variable "engagementForm" does not exist.', 50, $this->source); })()), "second_position", [], "any", false, false, false, 50), 'widget');
        echo "
          </div>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"mb-3\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["engagementForm"]) || array_key_exists("engagementForm", $context) ? $context["engagementForm"] : (function () { throw new RuntimeError('Variable "engagementForm" does not exist.', 55, $this->source); })()), "third_position", [], "any", false, false, false, 55), 'label');
        echo " 
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["engagementForm"]) || array_key_exists("engagementForm", $context) ? $context["engagementForm"] : (function () { throw new RuntimeError('Variable "engagementForm" does not exist.', 56, $this->source); })()), "third_position", [], "any", false, false, false, 56), 'widget');
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"mt-4 pt-4 d-flex justify-content-between\">
    ";
        // line 64
        echo twig_include($this->env, $context, "front/partials/steps/_step_btn_prev.html.twig");
        echo "

    <div id=\"engagement-actions\" class=\"d-flex gap-2\">
      <button id=\"engagement-submit\" type=\"submit\" class=\"btn btn-primary d-flex align-items-center gap-2\">
        <i class=\"bx bx-check\"></i> <span class=\"d-none d-lg-flex\">Enregistrer ma candidature</span>
      </button>

      <button id=\"engagement-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
        <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
        <span role=\"status\">Enregistrement...</span>
      </button>

      <a 
        ";
        // line 77
        if ((isset($context["is_engagement_edit"]) || array_key_exists("is_engagement_edit", $context) ? $context["is_engagement_edit"] : (function () { throw new RuntimeError('Variable "is_engagement_edit" does not exist.', 77, $this->source); })())) {
            echo " 
          href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details");
            echo "\" 
        ";
        } else {
            // line 80
            echo "          href=\"#\" 
        ";
        }
        // line 82
        echo "        class=\"next-step btn btn-success d-flex align-items-center gap-2 ";
        if ( !(isset($context["is_engagement_edit"]) || array_key_exists("is_engagement_edit", $context) ? $context["is_engagement_edit"] : (function () { throw new RuntimeError('Variable "is_engagement_edit" does not exist.', 82, $this->source); })())) {
            echo " disabled ";
        }
        echo "\"
      >
        <i class=\"bx bx-send\"></i> <span class=\"d-none d-lg-flex\">Valider ma candidature</span>
      </a>

    </div>
  </div>

</div>

";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["engagementForm"]) || array_key_exists("engagementForm", $context) ? $context["engagementForm"] : (function () { throw new RuntimeError('Variable "engagementForm" does not exist.', 92, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/steps/_step9.html.twig";
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
        return array (  171 => 92,  155 => 82,  151 => 80,  146 => 78,  142 => 77,  126 => 64,  115 => 56,  111 => 55,  103 => 50,  99 => 49,  79 => 32,  72 => 30,  49 => 9,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Step 9 form fields here -->

{{ form_start(engagementForm, {
  'attr': {
      'id': 'engagement-form', 
      'class': 'needs-validation',
      'novalidate': '',
  }
}) }}

<div class=\"step step-9\">

  <div class=\"d-flex align-items-start justify-content-between my-4 d-block d-lg-none gap-2\">
    <div class=\"text-center bg-primary text-white px-2 py-1 rounded-1\">
      9/9
    </div>
    <div class=\"d-flex flex-column text-end\">
      <h3 class=\"text-end text-primary mb-1\">Engagement</h3>
      <p class=\"text-paragraph m-0\">Suivant : Validation de ma candidature</p>
    </div>
  </div>
  <p class=\"pb-4 border-bottom-dashed text-paragraph d-block d-lg-none\">Veuillez remplir les champs qui sont marqués obligatoires (<span class=\"text-danger\">*</span>)</p>

  <h3 class=\"d-none d-lg-flex justify-content-center py-3 mb-4 border-full-dashed\">
    Engagement
  </h3>

  <div class=\"row\">
    <div class=\"col-lg-12\">
      <p class=\"text-center text-md-start\">Je sousigné <span class=\"commitment-user\">{{ app.user.getLastName() }} {{ app.user.getFirstName() }}</span> certifie sur l'honneur l'exactitude des renseignements ci-dessus.</p>
      <div class=\"d-flex justify-content-center justify-content-md-end\">
        <p>Fait à {{ form_widget(engagementForm.city) }}, le <span class=\"commitment-date\"></span></p>
      </div>
    </div>
  </div>

  <h3 class=\"d-flex justify-content-center py-3 my-4 border-full-dashed\">
    Autres postes souhaités
  </h3>

  <div class=\"row\">
    <div class=\"col-lg-12\">
      <p class=\"text-center text-md-start\">
        Au cas où vos compétences peuvent éventuellement satisfaire plusieurs postes, veuillez choisir un ou deux postes secondaires.
      </p>
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <div class=\"mb-3\">
            {{ form_label(engagementForm.second_position) }} 
            {{ form_widget(engagementForm.second_position) }}
          </div>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"mb-3\">
            {{ form_label(engagementForm.third_position) }} 
            {{ form_widget(engagementForm.third_position) }}
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"mt-4 pt-4 d-flex justify-content-between\">
    {{ include('front/partials/steps/_step_btn_prev.html.twig') }}

    <div id=\"engagement-actions\" class=\"d-flex gap-2\">
      <button id=\"engagement-submit\" type=\"submit\" class=\"btn btn-primary d-flex align-items-center gap-2\">
        <i class=\"bx bx-check\"></i> <span class=\"d-none d-lg-flex\">Enregistrer ma candidature</span>
      </button>

      <button id=\"engagement-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
        <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
        <span role=\"status\">Enregistrement...</span>
      </button>

      <a 
        {% if is_engagement_edit %} 
          href=\"{{ path('app_details') }}\" 
        {% else %}
          href=\"#\" 
        {% endif %}
        class=\"next-step btn btn-success d-flex align-items-center gap-2 {% if not is_engagement_edit %} disabled {% endif %}\"
      >
        <i class=\"bx bx-send\"></i> <span class=\"d-none d-lg-flex\">Valider ma candidature</span>
      </a>

    </div>
  </div>

</div>

{{ form_end(engagementForm) }}", "front/partials/steps/_step9.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\steps\\_step9.html.twig");
    }
}
