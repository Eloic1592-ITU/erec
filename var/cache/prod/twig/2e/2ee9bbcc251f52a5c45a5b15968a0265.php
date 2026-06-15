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
class __TwigTemplate_d4e627b117f4fa82636053f9068739e0 extends Template
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
        echo "<!-- Step 1 form fields here -->

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["jobApplicationForm"] ?? null), 'form_start', ["attr" => ["id" => "job-application-form", "class" => "needs-validation", "novalidate" => ""]]);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 32), "referencePosition", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
        echo "\" readonly />
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"mb-3\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["jobApplicationForm"] ?? null), "primary_location", [], "any", false, false, false, 40), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["jobApplicationForm"] ?? null), "primary_location", [], "any", false, false, false, 41), 'widget');
        echo "
                    <div class=\"invalid-feedback\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["jobApplicationForm"] ?? null), "primary_location", [], "any", false, false, false, 43), 'errors');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"mb-3\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["jobApplicationForm"] ?? null), "secondary_location", [], "any", false, false, false, 49), 'label');
        echo "
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["jobApplicationForm"] ?? null), "secondary_location", [], "any", false, false, false, 50), 'widget');
        echo "
                    <div class=\"invalid-feedback\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["jobApplicationForm"] ?? null), "secondary_location", [], "any", false, false, false, 52), 'errors');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"mb-3\">
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["jobApplicationForm"] ?? null), "tertiary_location", [], "any", false, false, false, 58), 'label');
        echo "
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["jobApplicationForm"] ?? null), "tertiary_location", [], "any", false, false, false, 59), 'widget');
        echo "
                    <div class=\"invalid-feedback\">
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["jobApplicationForm"] ?? null), "tertiary_location", [], "any", false, false, false, 61), 'errors');
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
        if ( !($context["is_job_application_edit"] ?? null)) {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["jobApplicationForm"] ?? null), 'form_end');
        echo "
";
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
        return array (  163 => 92,  153 => 84,  147 => 81,  124 => 61,  119 => 59,  115 => 58,  106 => 52,  101 => 50,  97 => 49,  88 => 43,  83 => 41,  79 => 40,  68 => 32,  43 => 9,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/steps/_step1.html.twig", "/var/www/html/erecrutement/templates/front/partials/steps/_step1.html.twig");
    }
}
