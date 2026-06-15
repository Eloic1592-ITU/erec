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

/* front/partials/steps/_step8.html.twig */
class __TwigTemplate_5e41fb350462d61b70cac48050f7353c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/steps/_step8.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/steps/_step8.html.twig"));

        // line 1
        echo "<!-- Step 8 form fields here -->

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["documentForm"]) || array_key_exists("documentForm", $context) ? $context["documentForm"] : (function () { throw new RuntimeError('Variable "documentForm" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["id" => "document-form", "class" => "needs-validation", "novalidate" => ""]]);
        // line 9
        echo "

";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["documentForm"]) || array_key_exists("documentForm", $context) ? $context["documentForm"] : (function () { throw new RuntimeError('Variable "documentForm" does not exist.', 11, $this->source); })()), "_token", [], "any", false, false, false, 11), 'row');
        echo "

<div class=\"step step-8\">
  <div class=\"d-flex align-items-start justify-content-between my-4 d-block d-lg-none gap-2\">
    <div class=\"text-center bg-primary text-white px-2 py-1 rounded-1\">
      8/9
    </div>
    <div class=\"d-flex flex-column text-end\">
      <h3 class=\"text-end text-primary mb-1\">CV et Lettre de motivation </h3>
      <p class=\"text-paragraph m-0\">Suivant : Engagement</p>
    </div>
  </div>

  <p class=\"pb-4 border-bottom-dashed text-paragraph d-block d-lg-none\">Veuillez remplir les champs qui sont marqués obligatoires (<span class=\"text-danger\">*</span>)</p>

  <h3 class=\"d-none d-lg-flex justify-content-center py-3 mb-4 border-full-dashed\">
    CV et Lettre de motivation
  </h3>

  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["documentForm"]) || array_key_exists("documentForm", $context) ? $context["documentForm"] : (function () { throw new RuntimeError('Variable "documentForm" does not exist.', 33, $this->source); })()), "cv", [], "any", false, false, false, 33), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["documentForm"]) || array_key_exists("documentForm", $context) ? $context["documentForm"] : (function () { throw new RuntimeError('Variable "documentForm" does not exist.', 34, $this->source); })()), "cv", [], "any", false, false, false, 34), 'widget');
        echo "
      </div>
    </div>
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["documentForm"]) || array_key_exists("documentForm", $context) ? $context["documentForm"] : (function () { throw new RuntimeError('Variable "documentForm" does not exist.', 39, $this->source); })()), "lm", [], "any", false, false, false, 39), 'label');
        echo " <span class=\"star\">*</span>
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["documentForm"]) || array_key_exists("documentForm", $context) ? $context["documentForm"] : (function () { throw new RuntimeError('Variable "documentForm" does not exist.', 40, $this->source); })()), "lm", [], "any", false, false, false, 40), 'widget');
        echo "
      </div>
    </div>
  </div>

  <div class=\"mt-4 pt-4 d-flex justify-content-between\">
      ";
        // line 46
        echo twig_include($this->env, $context, "front/partials/steps/_step_btn_prev.html.twig");
        echo "
      
      <div id=\"document-actions\" class=\"d-flex gap-2\">
        <button id=\"document-submit\" type=\"submit\" class=\"btn btn-outline-primary d-flex align-items-center gap-2\">
          <i class='bx bx-check'></i> <span class=\"d-none d-lg-flex\">Enregistrer</span>
        </button>

        <button id=\"document-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
          <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
          <span role=\"status\">Enregistrement...</span>
        </button>

        <button 
          type=\"button\" 
          class=\"next-step btn btn-success pe-lg-1 d-flex align-items-center gap-1\" 
          ";
        // line 61
        if (twig_test_empty((isset($context["is_document_edit"]) || array_key_exists("is_document_edit", $context) ? $context["is_document_edit"] : (function () { throw new RuntimeError('Variable "is_document_edit" does not exist.', 61, $this->source); })()))) {
            echo " 
            disabled 
          ";
        }
        // line 64
        echo "        >
          <span class=\"d-none d-lg-flex\">Continuer</span> <i class=\"bx bx-chevron-right\"></i>
        </button>
        
      </div>
    </div>
</div>

";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["documentForm"]) || array_key_exists("documentForm", $context) ? $context["documentForm"] : (function () { throw new RuntimeError('Variable "documentForm" does not exist.', 72, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/steps/_step8.html.twig";
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
        return array (  137 => 72,  127 => 64,  121 => 61,  103 => 46,  94 => 40,  90 => 39,  82 => 34,  78 => 33,  53 => 11,  49 => 9,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Step 8 form fields here -->

{{ form_start(documentForm, {
  'attr': {
      'id': 'document-form', 
      'class': 'needs-validation',
      'novalidate': '',
  }
}) }}

{{ form_row(documentForm._token) }}

<div class=\"step step-8\">
  <div class=\"d-flex align-items-start justify-content-between my-4 d-block d-lg-none gap-2\">
    <div class=\"text-center bg-primary text-white px-2 py-1 rounded-1\">
      8/9
    </div>
    <div class=\"d-flex flex-column text-end\">
      <h3 class=\"text-end text-primary mb-1\">CV et Lettre de motivation </h3>
      <p class=\"text-paragraph m-0\">Suivant : Engagement</p>
    </div>
  </div>

  <p class=\"pb-4 border-bottom-dashed text-paragraph d-block d-lg-none\">Veuillez remplir les champs qui sont marqués obligatoires (<span class=\"text-danger\">*</span>)</p>

  <h3 class=\"d-none d-lg-flex justify-content-center py-3 mb-4 border-full-dashed\">
    CV et Lettre de motivation
  </h3>

  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        {{ form_label(documentForm.cv) }} <span class=\"star\">*</span>
        {{ form_widget(documentForm.cv) }}
      </div>
    </div>
    <div class=\"col-lg-6\">
      <div class=\"mb-3\">
        {{ form_label(documentForm.lm) }} <span class=\"star\">*</span>
        {{ form_widget(documentForm.lm) }}
      </div>
    </div>
  </div>

  <div class=\"mt-4 pt-4 d-flex justify-content-between\">
      {{ include('front/partials/steps/_step_btn_prev.html.twig') }}
      
      <div id=\"document-actions\" class=\"d-flex gap-2\">
        <button id=\"document-submit\" type=\"submit\" class=\"btn btn-outline-primary d-flex align-items-center gap-2\">
          <i class='bx bx-check'></i> <span class=\"d-none d-lg-flex\">Enregistrer</span>
        </button>

        <button id=\"document-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
          <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
          <span role=\"status\">Enregistrement...</span>
        </button>

        <button 
          type=\"button\" 
          class=\"next-step btn btn-success pe-lg-1 d-flex align-items-center gap-1\" 
          {% if is_document_edit is empty %} 
            disabled 
          {% endif %}
        >
          <span class=\"d-none d-lg-flex\">Continuer</span> <i class=\"bx bx-chevron-right\"></i>
        </button>
        
      </div>
    </div>
</div>

{{ form_end(documentForm) }}
", "front/partials/steps/_step8.html.twig", "/var/www/html/erecrutement/templates/front/partials/steps/_step8.html.twig");
    }
}
