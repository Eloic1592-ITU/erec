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

/* front/partials/forms/internship/_form_init.html.twig */
class __TwigTemplate_43251b3181ccf86af3eaf2e1a77bc8f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/forms/internship/_form_init.html.twig"));

        // line 2
        echo "<div class=\"yon my-4 text-center\">
    <p>Avez-vous déjà suivi des stages ?</p>
    <div class=\"my-4 d-flex align-items-center justify-content-center gap-2\">
        <button type=\"button\" class=\"show-alert-btn btn btn-outline-danger d-flex align-items-center gap-1\">
            <i class=\"bx bx-x\"></i> Non
        </button>
        <button type=\"button\" class=\"form-items-btn btn btn-outline-primary d-flex align-items-center gap-1\">
            <i class=\"bx bx-check\"></i> Oui
        </button>
    </div>
</div>

";
        // line 15
        echo twig_include($this->env, $context, "front/partials/steps/_step_alert_success.html.twig");
        echo "

<div class=\"form-items\">
    ";
        // line 19
        echo "    <div id=\"internship-forms\" class=\"step-5-forms\">
        ";
        // line 20
        if (twig_test_empty(($context["internshipForms"] ?? null))) {
            // line 21
            echo "        ";
            // line 22
            echo "        ";
        } else {
            // line 23
            echo "        <h4 class=\"border-bottom mt-4 pb-2\">Mes stages enregistrés</h4>
        ";
        }
        // line 25
        echo "
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["internshipForms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["internshipForm"]) {
            // line 27
            echo "        <div class=\"my-4 internship-form\">
            ";
            // line 28
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["internshipForm"], 'form_start', ["attr" => ["id" => ("internship-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 30
$context["internshipForm"], "vars", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)), "class" => "needs-validation", "novalidate" => ""]]);
            // line 34
            echo "
            
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"mb-3\">
                    ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["internshipForm"], "theme", [], "any", false, false, false, 39), 'label');
            echo " <span class=\"star\">*</span>
                    ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["internshipForm"], "theme", [], "any", false, false, false, 40), 'widget');
            echo "
                    ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["internshipForm"], "theme", [], "any", false, false, false, 41), 'errors');
            echo "
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"mb-3\">
                    ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["internshipForm"], "organization", [], "any", false, false, false, 46), 'label');
            echo " <span class=\"star\">*</span>
                    ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["internshipForm"], "organization", [], "any", false, false, false, 47), 'widget');
            echo "
                    ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["internshipForm"], "organization", [], "any", false, false, false, 48), 'errors');
            echo "
                    </div>
                </div>
            </div>
            
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"mb-3\">
                        ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["internshipForm"], "internship_year", [], "any", false, false, false, 56), 'label');
            echo " <span class=\"star\">*</span>
                        ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["internshipForm"], "internship_year", [], "any", false, false, false, 57), 'widget');
            echo "
                        ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["internshipForm"], "internship_year", [], "any", false, false, false, 58), 'errors');
            echo "
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"mb-3\">
                        ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["internshipForm"], "duration", [], "any", false, false, false, 63), 'label');
            echo " <span class=\"star\">*</span>
                        ";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["internshipForm"], "duration", [], "any", false, false, false, 64), 'widget');
            echo "
                        ";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["internshipForm"], "duration", [], "any", false, false, false, 65), 'errors');
            echo "
                    </div>
                </div>  
            </div>
            
            <div class=\"d-flex justify-content-between\">
                <button 
                type=\"submit\" 
                class=\"btn btn-primary d-flex align-items-center gap-1\"
                >
                <i class=\"bx bx-edit\"></i> 
                <span class=\"d-none d-lg-flex\">Mettre à jour ce stage</span>
                </button>
                <button 
                type=\"button\" 
                class=\"btn btn-danger d-flex align-items-center gap-1 delete-internship\" 
                data-id=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["internshipForm"], "vars", [], "any", false, false, false, 81), "value", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81), "html", null, true);
            echo "\" 
                data-url=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_internship_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["internshipForm"], "vars", [], "any", false, false, false, 82), "value", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\"
                >
                <i class=\"bx bx-trash\"></i> <span class=\"d-none d-lg-flex\">Supprimer ce stage</span>
                </button>
            </div>
            ";
            // line 87
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["internshipForm"], 'form_end');
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['internshipForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "    </div>

    ";
        // line 93
        echo "    <div class=\"new-internship-form\">
        <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 border-bottom mt-4 pb-3 gap-4\">
            <h4 class=\"mb-0\">Ajouter un Stage</h4>
            <button 
                id=\"remove-all-internships-form\" 
                type=\"button\" 
                class=\"remove-all-form btn btn-outline-danger d-flex align-items-center gap-1\"
                data-url=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_internships_delete_all");
        echo "\"
            >
                <i class=\"bx bx-x\"></i> Annuler d'ajout de stages
            </button>
        </div>

        ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["newInternshipForm"] ?? null), 'form_start', ["attr" => ["id" => "internship-new", "class" => "needs-validation", "novalidate" => ""]]);
        // line 112
        echo "
            
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newInternshipForm"] ?? null), "theme", [], "any", false, false, false, 117), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newInternshipForm"] ?? null), "theme", [], "any", false, false, false, 118), 'widget');
        echo "
                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newInternshipForm"] ?? null), "theme", [], "any", false, false, false, 119), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newInternshipForm"] ?? null), "organization", [], "any", false, false, false, 124), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newInternshipForm"] ?? null), "organization", [], "any", false, false, false, 125), 'widget');
        echo "
                    ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newInternshipForm"] ?? null), "organization", [], "any", false, false, false, 126), 'errors');
        echo "
                </div>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newInternshipForm"] ?? null), "internship_year", [], "any", false, false, false, 134), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newInternshipForm"] ?? null), "internship_year", [], "any", false, false, false, 135), 'widget');
        echo "
                    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newInternshipForm"] ?? null), "internship_year", [], "any", false, false, false, 136), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newInternshipForm"] ?? null), "duration", [], "any", false, false, false, 141), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newInternshipForm"] ?? null), "duration", [], "any", false, false, false, 142), 'widget');
        echo "
                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newInternshipForm"] ?? null), "duration", [], "any", false, false, false, 143), 'errors');
        echo "
                </div>
            </div>  
        </div>
        
        <div class=\"d-flex justify-content-end\">
            <button id=\"internship-new-submit\" type=\"submit\" class=\"add-form btn btn-primary d-flex align-items-center gap-1\">
                <i class=\"bx bx-plus\"></i> Ajouter le stage
            </button>

            <button id=\"internship-new-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
                <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
                <span role=\"status\">Enregistrement...</span>
            </button>
        </div>
        
        ";
        // line 159
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["newInternshipForm"] ?? null), 'form_end');
        echo "
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/forms/internship/_form_init.html.twig";
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
        return array (  302 => 159,  283 => 143,  279 => 142,  275 => 141,  267 => 136,  263 => 135,  259 => 134,  248 => 126,  244 => 125,  240 => 124,  232 => 119,  228 => 118,  224 => 117,  217 => 112,  215 => 106,  206 => 100,  197 => 93,  193 => 90,  184 => 87,  176 => 82,  172 => 81,  153 => 65,  149 => 64,  145 => 63,  137 => 58,  133 => 57,  129 => 56,  118 => 48,  114 => 47,  110 => 46,  102 => 41,  98 => 40,  94 => 39,  87 => 34,  85 => 30,  84 => 28,  81 => 27,  77 => 26,  74 => 25,  70 => 23,  67 => 22,  65 => 21,  63 => 20,  60 => 19,  54 => 15,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/forms/internship/_form_init.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\forms\\internship\\_form_init.html.twig");
    }
}
