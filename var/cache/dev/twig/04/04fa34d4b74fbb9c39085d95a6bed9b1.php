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

/* front/partials/forms/work-experience/_form.html.twig */
class __TwigTemplate_16dc42ef7e3c5e42e5887e54a10fe819 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/forms/work-experience/_form.html.twig"));

        // line 1
        echo "<div class=\"my-4 work-experience-form\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => ("work-experience-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["form"] ?? null), "vars", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4)), "class" => "needs-validation", "novalidate" => "", "data-edit-url" =>         // line 7
($context["work_experience_edit_url"] ?? null), "data-delete-url" =>         // line 8
($context["work_experience_delete_url"] ?? null)]]);
        // line 10
        echo "
        
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"mb-3\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "position", [], "any", false, false, false, 15), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "position", [], "any", false, false, false, 16), 'widget');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "position", [], "any", false, false, false, 17), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "organization", [], "any", false, false, false, 25), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "organization", [], "any", false, false, false, 26), 'widget');
        echo "
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "organization", [], "any", false, false, false, 27), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "location", [], "any", false, false, false, 32), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "location", [], "any", false, false, false, 33), 'widget');
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "location", [], "any", false, false, false, 34), 'errors');
        echo "
                </div>
            </div>  
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "start_date", [], "any", false, false, false, 42), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "start_date", [], "any", false, false, false, 43), 'widget');
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "start_date", [], "any", false, false, false, 44), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "end_date", [], "any", false, false, false, 49), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "end_date", [], "any", false, false, false, 50), 'widget');
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "end_date", [], "any", false, false, false, 51), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"mb-3\">
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "workFile", [], "any", false, false, false, 59), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "workFile", [], "any", false, false, false, 60), 'widget');
        echo "
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "workFile", [], "any", false, false, false, 61), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"mb-3\">
                    <label class=\"form-label\">Personne de référence <span class=\"star\">*</span></label>
                    <div class=\"row mb-0 mb-lg-3\">
                        <div class=\"col-lg-6 mb-3 mb-lg-0\">
                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reference_name", [], "any", false, false, false, 72), 'widget');
        echo "
                        </div>
                        <div class=\"col-lg-6 mb-3 mb-lg-0\">
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reference_position", [], "any", false, false, false, 75), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reference_phone", [], "any", false, false, false, 80), 'widget');
        echo "
                            <div class=\"form-text mb-3 mb-lg-0\">
                                Veuillez utiliser l'un des formats suivants : 032 XX XXX XX ou +261 32 XX XXX XX
                            </div>
                        </div>
                        <div class=\"col-lg-6 mb-3 mb-lg-0\">
                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reference_email", [], "any", false, false, false, 86), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"d-flex justify-content-between\">
            <button 
                type=\"submit\" 
                class=\"btn btn-primary d-flex align-items-center gap-1\"
            >
                <i class=\"bx bx-edit\"></i> 
                <span class=\"d-none d-lg-flex\">Mettre à jour ce poste</span>
            </button>
            <button 
                type=\"button\" 
                class=\"btn btn-danger d-flex align-items-center gap-1 delete-work-experience\" 
                data-id=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workExperience"] ?? null), "id", [], "any", false, false, false, 104), "html", null, true);
        echo "\" 
                data-url=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_work_experience_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["workExperience"] ?? null), "id", [], "any", false, false, false, 105)]), "html", null, true);
        echo "\"
            >
                <i class=\"bx bx-trash\"></i> 
                <span class=\"d-none d-lg-flex\">Supprimer ce poste</span>
            </button>
        </div>

    ";
        // line 112
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/forms/work-experience/_form.html.twig";
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
        return array (  224 => 112,  214 => 105,  210 => 104,  189 => 86,  180 => 80,  172 => 75,  166 => 72,  152 => 61,  148 => 60,  144 => 59,  133 => 51,  129 => 50,  125 => 49,  117 => 44,  113 => 43,  109 => 42,  98 => 34,  94 => 33,  90 => 32,  82 => 27,  78 => 26,  74 => 25,  63 => 17,  59 => 16,  55 => 15,  48 => 10,  46 => 8,  45 => 7,  44 => 4,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/forms/work-experience/_form.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\forms\\work-experience\\_form.html.twig");
    }
}
