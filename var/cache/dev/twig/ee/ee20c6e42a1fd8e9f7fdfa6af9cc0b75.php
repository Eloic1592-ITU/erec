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

/* front/partials/steps/_step1.html.twig */
class __TwigTemplate_bbc5c0af06002d920eb9ade376c24a43 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/steps/_step1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/steps/_step1.html.twig"));

        // line 1
        echo "<!-- Step 1 form fields here -->

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["jobApplicationForm"]) || array_key_exists("jobApplicationForm", $context) ? $context["jobApplicationForm"] : (function () { throw new RuntimeError('Variable "jobApplicationForm" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["id" => "job-application-form", "class" => "needs-validation", "novalidate" => ""]]);
        // line 9
        echo "

    <div class=\"step step-1\">
        <div class=\"d-flex align-items-start justify-content-between my-4 d-block d-lg-none gap-2\">
            <div class=\"text-center bg-primary text-white px-2 py-1 rounded-1\">
                1/9
            </div>
            <div class=\"d-flex flex-column text-end\">
                <h3 class=\"text-end text-primary mb-1\">Poste demandé</h3>
                <p class=\"text-paragraph m-0\">Suivant : Informations personnelles</p>
            </div>
        </div>

        <p class=\"pb-4 border-bottom-dashed text-paragraph d-block d-lg-none\">Veuillez remplir les champs qui sont marqués obligatoires (<span class=\"text-danger\">*</span>)</p>

        <h3 class=\"d-none d-lg-flex justify-content-center py-3 mb-4 border-full-dashed\">
            Poste demandé
        </h3>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"mb-3\">
                    <label class=\"form-label\">Poste demandé <span class=\"star\">*</span></label>
                    <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "referencePosition", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
        echo "\" readonly />
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"mb-3\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["jobApplicationForm"]) || array_key_exists("jobApplicationForm", $context) ? $context["jobApplicationForm"] : (function () { throw new RuntimeError('Variable "jobApplicationForm" does not exist.', 40, $this->source); })()), "primary_location", [], "any", false, false, false, 40), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["jobApplicationForm"]) || array_key_exists("jobApplicationForm", $context) ? $context["jobApplicationForm"] : (function () { throw new RuntimeError('Variable "jobApplicationForm" does not exist.', 41, $this->source); })()), "primary_location", [], "any", false, false, false, 41), 'widget');
        echo "
                    <div class=\"invalid-feedback\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["jobApplicationForm"]) || array_key_exists("jobApplicationForm", $context) ? $context["jobApplicationForm"] : (function () { throw new RuntimeError('Variable "jobApplicationForm" does not exist.', 43, $this->source); })()), "primary_location", [], "any", false, false, false, 43), 'errors');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"mb-3\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["jobApplicationForm"]) || array_key_exists("jobApplicationForm", $context) ? $context["jobApplicationForm"] : (function () { throw new RuntimeError('Variable "jobApplicationForm" does not exist.', 49, $this->source); })()), "secondary_location", [], "any", false, false, false, 49), 'label');
        echo "
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["jobApplicationForm"]) || array_key_exists("jobApplicationForm", $context) ? $context["jobApplicationForm"] : (function () { throw new RuntimeError('Variable "jobApplicationForm" does not exist.', 50, $this->source); })()), "secondary_location", [], "any", false, false, false, 50), 'widget');
        echo "
                    <div class=\"invalid-feedback\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["jobApplicationForm"]) || array_key_exists("jobApplicationForm", $context) ? $context["jobApplicationForm"] : (function () { throw new RuntimeError('Variable "jobApplicationForm" does not exist.', 52, $this->source); })()), "secondary_location", [], "any", false, false, false, 52), 'errors');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"mb-3\">
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["jobApplicationForm"]) || array_key_exists("jobApplicationForm", $context) ? $context["jobApplicationForm"] : (function () { throw new RuntimeError('Variable "jobApplicationForm" does not exist.', 58, $this->source); })()), "tertiary_location", [], "any", false, false, false, 58), 'label');
        echo "
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["jobApplicationForm"]) || array_key_exists("jobApplicationForm", $context) ? $context["jobApplicationForm"] : (function () { throw new RuntimeError('Variable "jobApplicationForm" does not exist.', 59, $this->source); })()), "tertiary_location", [], "any", false, false, false, 59), 'widget');
        echo "
                    <div class=\"invalid-feedback\">
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["jobApplicationForm"]) || array_key_exists("jobApplicationForm", $context) ? $context["jobApplicationForm"] : (function () { throw new RuntimeError('Variable "jobApplicationForm" does not exist.', 61, $this->source); })()), "tertiary_location", [], "any", false, false, false, 61), 'errors');
        echo "
                    </div>
                </div>
            </div>
        </div>

        <div class=\"mt-4 pt-4 d-flex justify-content-end\">
            <div id=\"job-application-actions\" class=\"d-flex gap-2\">
                <button id=\"job-application-submit\" type=\"submit\" class=\"btn btn-outline-primary d-flex align-items-center gap-2\">
                    <i class='bx bx-check'></i> <span class=\"\">Enregistrer</span>
                </button>

                <button id=\"job-application-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
                    <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
                    <span role=\"status\">Enregistrement...</span>
                </button>

                <button 
                    type=\"button\" 
                    class=\"next-step btn btn-success pe-lg-1 d-flex align-items-center gap-1\" 
                    ";
        // line 81
        if ( !(isset($context["is_job_application_edit"]) || array_key_exists("is_job_application_edit", $context) ? $context["is_job_application_edit"] : (function () { throw new RuntimeError('Variable "is_job_application_edit" does not exist.', 81, $this->source); })())) {
            echo " 
                        disabled 
                    ";
        }
        // line 84
        echo "                >
                    <span class=\"d-none d-lg-flex\">Continuer</span> <i class=\"bx bx-chevron-right\"></i>
                </button>
                
            </div>
        </div>
    </div>

";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["jobApplicationForm"]) || array_key_exists("jobApplicationForm", $context) ? $context["jobApplicationForm"] : (function () { throw new RuntimeError('Variable "jobApplicationForm" does not exist.', 92, $this->source); })()), 'form_end');
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
        return "front/partials/steps/_step1.html.twig";
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
        return array (  169 => 92,  159 => 84,  153 => 81,  130 => 61,  125 => 59,  121 => 58,  112 => 52,  107 => 50,  103 => 49,  94 => 43,  89 => 41,  85 => 40,  74 => 32,  49 => 9,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Step 1 form fields here -->

{{ form_start(jobApplicationForm, {
    'attr': {
        'id': 'job-application-form', 
        'class': 'needs-validation',
        'novalidate': '',
    }
}) }}

    <div class=\"step step-1\">
        <div class=\"d-flex align-items-start justify-content-between my-4 d-block d-lg-none gap-2\">
            <div class=\"text-center bg-primary text-white px-2 py-1 rounded-1\">
                1/9
            </div>
            <div class=\"d-flex flex-column text-end\">
                <h3 class=\"text-end text-primary mb-1\">Poste demandé</h3>
                <p class=\"text-paragraph m-0\">Suivant : Informations personnelles</p>
            </div>
        </div>

        <p class=\"pb-4 border-bottom-dashed text-paragraph d-block d-lg-none\">Veuillez remplir les champs qui sont marqués obligatoires (<span class=\"text-danger\">*</span>)</p>

        <h3 class=\"d-none d-lg-flex justify-content-center py-3 mb-4 border-full-dashed\">
            Poste demandé
        </h3>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"mb-3\">
                    <label class=\"form-label\">Poste demandé <span class=\"star\">*</span></label>
                    <input type=\"text\" class=\"form-control\" placeholder=\"{{ app.user.referencePosition.name }}\" readonly />
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"mb-3\">
                    {{ form_label(jobApplicationForm.primary_location) }} <span class=\"star\">*</span>
                    {{ form_widget(jobApplicationForm.primary_location) }}
                    <div class=\"invalid-feedback\">
                        {{ form_errors(jobApplicationForm.primary_location) }}
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"mb-3\">
                    {{ form_label(jobApplicationForm.secondary_location) }}
                    {{ form_widget(jobApplicationForm.secondary_location) }}
                    <div class=\"invalid-feedback\">
                        {{ form_errors(jobApplicationForm.secondary_location) }}
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"mb-3\">
                    {{ form_label(jobApplicationForm.tertiary_location) }}
                    {{ form_widget(jobApplicationForm.tertiary_location) }}
                    <div class=\"invalid-feedback\">
                        {{ form_errors(jobApplicationForm.tertiary_location) }}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"mt-4 pt-4 d-flex justify-content-end\">
            <div id=\"job-application-actions\" class=\"d-flex gap-2\">
                <button id=\"job-application-submit\" type=\"submit\" class=\"btn btn-outline-primary d-flex align-items-center gap-2\">
                    <i class='bx bx-check'></i> <span class=\"\">Enregistrer</span>
                </button>

                <button id=\"job-application-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
                    <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
                    <span role=\"status\">Enregistrement...</span>
                </button>

                <button 
                    type=\"button\" 
                    class=\"next-step btn btn-success pe-lg-1 d-flex align-items-center gap-1\" 
                    {% if not is_job_application_edit %} 
                        disabled 
                    {% endif %}
                >
                    <span class=\"d-none d-lg-flex\">Continuer</span> <i class=\"bx bx-chevron-right\"></i>
                </button>
                
            </div>
        </div>
    </div>

{{ form_end(jobApplicationForm) }}
", "front/partials/steps/_step1.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\steps\\_step1.html.twig");
    }
}
