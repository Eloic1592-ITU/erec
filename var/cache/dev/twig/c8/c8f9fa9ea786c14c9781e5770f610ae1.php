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

/* front/partials/forms/work-experience/_form_init.html.twig */
class __TwigTemplate_e0c83dbb5476bd245eaf1061a85eb371 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/forms/work-experience/_form_init.html.twig"));

        // line 2
        echo "<div class=\"yon my-4 text-center\">
    <p>Avez-vous déjà occupé un poste ?</p>
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
        echo "    <div id=\"work-experience-forms\" class=\"step-4-forms\">
        ";
        // line 20
        if (twig_test_empty(($context["workExperienceForms"] ?? null))) {
            // line 21
            echo "            ";
            // line 22
            echo "        ";
        } else {
            // line 23
            echo "            <h4 class=\"border-bottom mt-4 pb-2\">Mes postes enregistrés</h4>
        ";
        }
        // line 25
        echo "
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["workExperienceForms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["workExperienceForm"]) {
            // line 27
            echo "            <div class=\"my-4 work-experience-form\">
                ";
            // line 28
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["workExperienceForm"], 'form_start', ["attr" => ["id" => ("work-experience-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 30
$context["workExperienceForm"], "vars", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)), "class" => "needs-validation", "novalidate" => ""]]);
            // line 34
            echo "
                
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"mb-3\">
                                ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "position", [], "any", false, false, false, 39), 'label');
            echo " <span class=\"star\">*</span>
                                ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "position", [], "any", false, false, false, 40), 'widget');
            echo "
                                ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "position", [], "any", false, false, false, 41), 'errors');
            echo "
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"mb-3\">
                                ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "organization", [], "any", false, false, false, 49), 'label');
            echo " <span class=\"star\">*</span>
                                ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "organization", [], "any", false, false, false, 50), 'widget');
            echo "
                                ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "organization", [], "any", false, false, false, 51), 'errors');
            echo "
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"mb-3\">
                                ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "location", [], "any", false, false, false, 56), 'label');
            echo " <span class=\"star\">*</span>
                                ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "location", [], "any", false, false, false, 57), 'widget');
            echo "
                                ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "location", [], "any", false, false, false, 58), 'errors');
            echo "
                            </div>
                        </div>  
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"mb-3\">
                                ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "start_date", [], "any", false, false, false, 66), 'label');
            echo " <span class=\"star\">*</span>
                                ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "start_date", [], "any", false, false, false, 67), 'widget');
            echo "
                                ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "start_date", [], "any", false, false, false, 68), 'errors');
            echo "
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"mb-3\">
                                ";
            // line 73
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "end_date", [], "any", false, false, false, 73), 'label');
            echo " <span class=\"star\">*</span>
                                ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "end_date", [], "any", false, false, false, 74), 'widget');
            echo "
                                ";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "end_date", [], "any", false, false, false, 75), 'errors');
            echo "
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"mb-3\">
                                ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "workFile", [], "any", false, false, false, 83), 'label');
            echo " <span class=\"star\">*</span>
                                ";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "workFile", [], "any", false, false, false, 84), 'widget');
            echo "
                                ";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "workFile", [], "any", false, false, false, 85), 'errors');
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
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "reference_name", [], "any", false, false, false, 96), 'widget');
            echo "
                                    </div>
                                    <div class=\"col-lg-6 mb-3 mb-lg-0\">
                                        ";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "reference_position", [], "any", false, false, false, 99), 'widget');
            echo "
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        ";
            // line 104
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "reference_phone", [], "any", false, false, false, 104), 'widget');
            echo "
                                        <div class=\"form-text mb-3 mb-lg-0\">
                                            Veuillez utiliser l'un des formats suivants : 032 XX XXX XX ou +261 32 XX XXX XX
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 mb-3 mb-lg-0\">
                                        ";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "reference_email", [], "any", false, false, false, 110), 'widget');
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
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "vars", [], "any", false, false, false, 128), "value", [], "any", false, false, false, 128), "id", [], "any", false, false, false, 128), "html", null, true);
            echo "\" 
                            data-url=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_work_experience_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["workExperienceForm"], "vars", [], "any", false, false, false, 129), "value", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129)]), "html", null, true);
            echo "\"
                        >
                            <i class=\"bx bx-trash\"></i> <span class=\"d-none d-lg-flex\">Supprimer ce poste</span>
                        </button>
                    </div>
                    
                ";
            // line 135
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["workExperienceForm"], 'form_end');
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workExperienceForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "    </div>

    ";
        // line 141
        echo "    <div class=\"new-work-experience-form\">
        <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 border-bottom mt-4 pb-3 gap-4\">
            <h4 class=\"mb-0\">Ajouter un poste</h4>

            <button 
                id=\"remove-all-work-experiences-form\" 
                type=\"button\" 
                class=\"remove-all-form btn btn-outline-danger d-flex align-items-center gap-1\"
                data-url=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_work_experiences_delete_all");
        echo "\"
            >
                <i class=\"bx bx-x\"></i> Annuler d'ajout de postes
            </button>
        </div>

        ";
        // line 155
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["newWorkExperienceForm"] ?? null), 'form_start', ["attr" => ["id" => "work-experience-new", "class" => "needs-validation", "novalidate" => ""]]);
        // line 161
        echo "
            
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"mb-3\">
                        ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "position", [], "any", false, false, false, 166), 'label');
        echo " <span class=\"star\">*</span>
                        ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "position", [], "any", false, false, false, 167), 'widget');
        echo "
                        ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "position", [], "any", false, false, false, 168), 'errors');
        echo "
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"mb-3\">
                        ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "organization", [], "any", false, false, false, 176), 'label');
        echo " <span class=\"star\">*</span>
                        ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "organization", [], "any", false, false, false, 177), 'widget');
        echo "
                        ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "organization", [], "any", false, false, false, 178), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"mb-3\">
                        ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "location", [], "any", false, false, false, 183), 'label');
        echo " <span class=\"star\">*</span>
                        ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "location", [], "any", false, false, false, 184), 'widget');
        echo "
                        ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "location", [], "any", false, false, false, 185), 'errors');
        echo "
                    </div>
                </div>  
            </div>

            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"mb-3\">
                        ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "start_date", [], "any", false, false, false, 193), 'label');
        echo " <span class=\"star\">*</span>
                        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "start_date", [], "any", false, false, false, 194), 'widget');
        echo "
                        ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "start_date", [], "any", false, false, false, 195), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"mb-3\">
                        ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "end_date", [], "any", false, false, false, 200), 'label');
        echo " <span class=\"star\">*</span>
                        ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "end_date", [], "any", false, false, false, 201), 'widget');
        echo "
                        ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "end_date", [], "any", false, false, false, 202), 'errors');
        echo "
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"mb-3\">
                        ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "workFile", [], "any", false, false, false, 210), 'label');
        echo " <span class=\"star\">*</span>
                        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "workFile", [], "any", false, false, false, 211), 'widget');
        echo "
                        ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "workFile", [], "any", false, false, false, 212), 'errors');
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
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "reference_name", [], "any", false, false, false, 223), 'widget');
        echo "
                            </div>
                            <div class=\"col-lg-6 mb-3 mb-lg-0\">
                                ";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "reference_position", [], "any", false, false, false, 226), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "reference_phone", [], "any", false, false, false, 231), 'widget');
        echo "
                                <div class=\"form-text mb-3 mb-lg-0\">
                                    Veuillez utiliser l'un des formats suivants : 032 XX XXX XX ou +261 32 XX XXX XX
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-3 mb-lg-0\">
                                ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newWorkExperienceForm"] ?? null), "reference_email", [], "any", false, false, false, 237), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class=\"d-flex justify-content-end\">
                <button 
                    id=\"work-experience-new-submit\"
                    type=\"submit\" 
                    class=\"add-form btn btn-primary d-flex align-items-center gap-1\"
                >
                    <i class=\"bx bx-plus\"></i> Ajouter le poste
                </button>
            
                <button id=\"work-experience-new-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
                    <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
                    <span role=\"status\">Enregistrement...</span>
                </button>
            </div>

        ";
        // line 259
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["newWorkExperienceForm"] ?? null), 'form_end');
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
        return "front/partials/forms/work-experience/_form_init.html.twig";
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
        return array (  462 => 259,  437 => 237,  428 => 231,  420 => 226,  414 => 223,  400 => 212,  396 => 211,  392 => 210,  381 => 202,  377 => 201,  373 => 200,  365 => 195,  361 => 194,  357 => 193,  346 => 185,  342 => 184,  338 => 183,  330 => 178,  326 => 177,  322 => 176,  311 => 168,  307 => 167,  303 => 166,  296 => 161,  294 => 155,  285 => 149,  275 => 141,  271 => 138,  262 => 135,  253 => 129,  249 => 128,  228 => 110,  219 => 104,  211 => 99,  205 => 96,  191 => 85,  187 => 84,  183 => 83,  172 => 75,  168 => 74,  164 => 73,  156 => 68,  152 => 67,  148 => 66,  137 => 58,  133 => 57,  129 => 56,  121 => 51,  117 => 50,  113 => 49,  102 => 41,  98 => 40,  94 => 39,  87 => 34,  85 => 30,  84 => 28,  81 => 27,  77 => 26,  74 => 25,  70 => 23,  67 => 22,  65 => 21,  63 => 20,  60 => 19,  54 => 15,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/forms/work-experience/_form_init.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\forms\\work-experience\\_form_init.html.twig");
    }
}
