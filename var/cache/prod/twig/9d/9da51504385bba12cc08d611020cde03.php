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

/* front/partials/steps/_step3.html.twig */
class __TwigTemplate_52804c535a98b80f39fee1ba7f47936f extends Template
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
        echo "<!-- Step 3 form fields here -->

<div class=\"step step-3\">
  <div class=\"d-flex align-items-start justify-content-between my-4 d-block d-lg-none gap-2\">
    <div class=\"text-center bg-primary text-white px-2 py-1 rounded-1\">
      3/9
    </div>
    <div class=\"d-flex flex-column text-end\">
      <h3 class=\"text-end text-primary mb-1\">Etudes académiques</h3>
      <p class=\"text-paragraph m-0\">Suivant : Certificats ou attestations</p>
    </div>
  </div>

  <p class=\"pb-4 border-bottom-dashed text-paragraph d-block d-lg-none\">Veuillez remplir les champs qui sont marqués obligatoires (<span class=\"text-danger\">*</span>)</p>
  <h3 class=\"d-none d-lg-flex justify-content-center py-3 mb-4 border-full-dashed\">
    Etudes académiques
  </h3>

  ";
        // line 20
        echo "  <div id=\"education-forms\">
    ";
        // line 21
        if (twig_test_empty(($context["educationForms"] ?? null))) {
            // line 22
            echo "      ";
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "      <h4 class=\"border-bottom mt-4 pb-2\">Mes diplôme enregistrés</h4>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["educationForms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["educationForm"]) {
            // line 28
            echo "      <div class=\"my-4 education-form\">
        ";
            // line 29
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["educationForm"], 'form_start', ["attr" => ["id" => ("education-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 31
$context["educationForm"], "vars", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)), "class" => "needs-validation", "novalidate" => ""]]);
            // line 35
            echo "
          <div class=\"row\">
            <div class=\"col-lg-6\">
              <div class=\"mb-3\">
                ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "degree", [], "any", false, false, false, 39), 'label');
            echo " <span class=\"star\">*</span>
                ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "degree", [], "any", false, false, false, 40), 'widget');
            echo "
                ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "degree", [], "any", false, false, false, 41), 'errors');
            echo "
              </div>
            </div>
            <div class=\"col-lg-6\">
              <div class=\"mb-3\">
                ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "degreeFile", [], "any", false, false, false, 46), 'label');
            echo " <span class=\"star\">*</span>
                ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "degreeFile", [], "any", false, false, false, 47), 'widget');
            echo "
                ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "degreeFile", [], "any", false, false, false, 48), 'errors');
            echo "
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col-lg-6\">
              <div class=\"mb-3\">
                ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "field_of_study", [], "any", false, false, false, 56), 'label');
            echo " <span class=\"star\">*</span>
                ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "field_of_study", [], "any", false, false, false, 57), 'widget', ["attr" => ["data-toggle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["educationForm"], "vars", [], "any", false, false, false, 57), "value", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]]);
            echo "
                ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "field_of_study", [], "any", false, false, false, 58), 'errors');
            echo "
              </div>
            </div>
            <div class=\"col-lg-6\">
              <div class=\"mb-3\">
                ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "specialty", [], "any", false, false, false, 63), 'label');
            echo " <span class=\"star\">*</span>
                ";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "specialty", [], "any", false, false, false, 64), 'widget');
            echo "
                ";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "specialty", [], "any", false, false, false, 65), 'errors');
            echo "
              </div>
            </div>
          </div>

          <div class=\"row\" class=\"other-field-of-study\" style=\"display: none;\">
            <div class=\"col-lg-12\">
              <div class=\"mb-3\">
                ";
            // line 73
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "other_field_of_study", [], "any", false, false, false, 73), 'label');
            echo "
                ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "other_field_of_study", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => ("form-control other-field-of-study-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["educationForm"], "vars", [], "any", false, false, false, 74), "value", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74))]]);
            echo "
                ";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "other_field_of_study", [], "any", false, false, false, 75), 'errors');
            echo "
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col-lg-6\">
              <div class=\"mb-3\">
                ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "institution", [], "any", false, false, false, 83), 'label');
            echo " <span class=\"star\">*</span>
                ";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "institution", [], "any", false, false, false, 84), 'widget');
            echo "
                ";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "institution", [], "any", false, false, false, 85), 'errors');
            echo "
              </div>
            </div>
            <div class=\"col-lg-6\">
              <div class=\"mb-3\">
                ";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "graduation_year", [], "any", false, false, false, 90), 'label');
            echo " <span class=\"star\">*</span>
                ";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "graduation_year", [], "any", false, false, false, 91), 'widget');
            echo "
                ";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["educationForm"], "graduation_year", [], "any", false, false, false, 92), 'errors');
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
              <span class=\"d-none d-lg-flex\">Mettre à jour ce diplôme</span>
            </button>
            <button 
              type=\"button\" 
              class=\"btn btn-danger d-flex align-items-center gap-1 delete-education\" 
              data-id=\"";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["educationForm"], "vars", [], "any", false, false, false, 108), "value", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108), "html", null, true);
            echo "\" 
              data-url=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_education_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["educationForm"], "vars", [], "any", false, false, false, 109), "value", [], "any", false, false, false, 109), "id", [], "any", false, false, false, 109)]), "html", null, true);
            echo "\"
            >
              <i class=\"bx bx-trash\"></i> <span class=\"d-none d-lg-flex\">Supprimer ce diplôme</span>
            </button>
          </div>
        ";
            // line 114
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["educationForm"], 'form_end');
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['educationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "  </div>

  ";
        // line 120
        echo "  <div class=\"new-education-form\">
    <h4 class=\"border-bottom mt-4 pb-2\">Ajouter un nouveau diplôme</h4>
       
    <p>Veuillez renseigner <b>uniquement</b> le diplôme <b>le plus élevé</b> dans <b>chaque domaine</b> et, au <b>maximum</b>, vos <b>5</b> diplômes les plus pertinents.</p>

    ";
        // line 125
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["newEducationForm"] ?? null), 'form_start', ["attr" => ["id" => "education-new", "class" => "needs-validation", "novalidate" => ""]]);
        // line 131
        echo "

      <div class=\"row\">
        <div class=\"col-lg-6\">
          <div class=\"mb-3\">
            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "degree", [], "any", false, false, false, 136), 'label');
        echo " <span class=\"star\">*</span>
            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "degree", [], "any", false, false, false, 137), 'widget');
        echo "
            ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "degree", [], "any", false, false, false, 138), 'errors');
        echo "
          </div>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"mb-3\">
            ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "degreeFile", [], "any", false, false, false, 143), 'label');
        echo " <span class=\"star\">*</span>
            ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "degreeFile", [], "any", false, false, false, 144), 'widget');
        echo "
            ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "degreeFile", [], "any", false, false, false, 145), 'errors');
        echo "
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-6\">
          <div class=\"mb-3\">
            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "field_of_study", [], "any", false, false, false, 153), 'label');
        echo " <span class=\"star\">*</span>
            ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "field_of_study", [], "any", false, false, false, 154), 'widget', ["attr" => ["data-toggle" => "new"]]);
        echo "
            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "field_of_study", [], "any", false, false, false, 155), 'errors');
        echo "
          </div>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"mb-3\">
            ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "specialty", [], "any", false, false, false, 160), 'label');
        echo " <span class=\"star\">*</span>
            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "specialty", [], "any", false, false, false, 161), 'widget');
        echo "
            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "specialty", [], "any", false, false, false, 162), 'errors');
        echo "
          </div>
        </div>
      </div>

      <div class=\"row\" class=\"other-field-of-study\" style=\"display: none;\">
        <div class=\"col-lg-12\">
          <div class=\"mb-3\">
            ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "other_field_of_study", [], "any", false, false, false, 170), 'label');
        echo "
            ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "other_field_of_study", [], "any", false, false, false, 171), 'widget', ["attr" => ["class" => "form-control other-field-of-study-new"]]);
        echo "
            ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "other_field_of_study", [], "any", false, false, false, 172), 'errors');
        echo "
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-6\">
          <div class=\"mb-3\">
            ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "institution", [], "any", false, false, false, 180), 'label');
        echo " <span class=\"star\">*</span>
            ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "institution", [], "any", false, false, false, 181), 'widget');
        echo "
            ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "institution", [], "any", false, false, false, 182), 'errors');
        echo "
          </div>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"mb-3\">
            ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "graduation_year", [], "any", false, false, false, 187), 'label');
        echo " <span class=\"star\">*</span>
            ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "graduation_year", [], "any", false, false, false, 188), 'widget');
        echo "
            ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newEducationForm"] ?? null), "graduation_year", [], "any", false, false, false, 189), 'errors');
        echo "
          </div>
        </div>
      </div>

      <div class=\"d-flex justify-content-end\">
        <button id=\"education-new-submit\" type=\"submit\" class=\"add-form btn btn-primary d-flex align-items-center gap-1\">
          <i class=\"bx bx-plus\"></i> 
          Enregistrer le diplôme
        </button>

        <button id=\"education-new-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
          <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
          <span role=\"status\">Enregistrement...</span>
        </button>
      </div>

    ";
        // line 206
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["newEducationForm"] ?? null), 'form_end');
        echo "
  </div>

  <div id=\"education-actions\" class=\"mt-4 pt-4 d-flex justify-content-between\">
    ";
        // line 210
        echo twig_include($this->env, $context, "front/partials/steps/_step_btn_prev.html.twig");
        echo "

    <button 
      type=\"button\" 
      class=\"next-step btn btn-success pe-lg-1 d-flex align-items-center gap-1\" 
      ";
        // line 215
        if (twig_test_empty(($context["educationForms"] ?? null))) {
            echo " 
        disabled 
      ";
        }
        // line 218
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
        return "front/partials/steps/_step3.html.twig";
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
        return array (  417 => 218,  411 => 215,  403 => 210,  396 => 206,  376 => 189,  372 => 188,  368 => 187,  360 => 182,  356 => 181,  352 => 180,  341 => 172,  337 => 171,  333 => 170,  322 => 162,  318 => 161,  314 => 160,  306 => 155,  302 => 154,  298 => 153,  287 => 145,  283 => 144,  279 => 143,  271 => 138,  267 => 137,  263 => 136,  256 => 131,  254 => 125,  247 => 120,  243 => 117,  234 => 114,  226 => 109,  222 => 108,  203 => 92,  199 => 91,  195 => 90,  187 => 85,  183 => 84,  179 => 83,  168 => 75,  164 => 74,  160 => 73,  149 => 65,  145 => 64,  141 => 63,  133 => 58,  129 => 57,  125 => 56,  114 => 48,  110 => 47,  106 => 46,  98 => 41,  94 => 40,  90 => 39,  84 => 35,  82 => 31,  81 => 29,  78 => 28,  74 => 27,  71 => 26,  67 => 24,  64 => 23,  62 => 22,  60 => 21,  57 => 20,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/steps/_step3.html.twig", "/var/www/html/erecrutement/templates/front/partials/steps/_step3.html.twig");
    }
}
