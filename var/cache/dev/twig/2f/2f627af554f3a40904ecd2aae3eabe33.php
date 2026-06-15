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

/* front/partials/steps/_step7.html.twig */
class __TwigTemplate_75b91dff5c5228b7cde83018f38416ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/steps/_step7.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/steps/_step7.html.twig"));

        // line 1
        echo "<!-- Step 7 form fields here -->

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["id" => "other-info-form", "class" => "needs-validation", "novalidate" => ""]]);
        // line 9
        echo "

  ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 11, $this->source); })()), "_token", [], "any", false, false, false, 11), 'row');
        echo "

  <div class=\"step step-7\">
    <div class=\"d-flex align-items-start justify-content-between my-4 d-block d-lg-none gap-2\">
      <div class=\"text-center bg-primary text-white px-2 py-1 rounded-1\">
        7/9
      </div>
      <div class=\"d-flex flex-column text-end\">
        <h3 class=\"text-end text-primary mb-1\">Autres Informations</h3>
        <p class=\"text-paragraph m-0\">Suivant : CV et Lettre de motivation</p>
      </div>
    </div>

    <p class=\"pb-4 border-bottom-dashed text-paragraph d-block d-lg-none\">Veuillez remplir les champs qui sont marqués obligatoires (<span class=\"text-danger\">*</span>)</p>

    <h3 class=\"d-none d-lg-flex justify-content-center py-3 mb-4 border-full-dashed\">
      Autres Informations
    </h3>

    <h4 class=\"mb-4 border-bottom pb-2\">Niveau de langue</h4>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"mb-3\">
          <label for=\"step7_mg_read\" class=\"form-label\">Malagasy <span class=\"star\">*</span></label>
          <div class=\"row\">
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 38, $this->source); })()), "malagasy_reading_level", [], "any", false, false, false, 38), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 41, $this->source); })()), "malagasy_writing_level", [], "any", false, false, false, 41), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 44, $this->source); })()), "malagasy_speaking_level", [], "any", false, false, false, 44), 'widget');
        echo "
            </div>
          </div>
        </div>
        <div class=\"mb-3\">
          <label for=\"step7_fr_read\" class=\"form-label\">Français <span class=\"star\">*</span></label>
          <div class=\"row\">
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 52, $this->source); })()), "french_reading_level", [], "any", false, false, false, 52), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 55, $this->source); })()), "french_writing_level", [], "any", false, false, false, 55), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 58, $this->source); })()), "french_speaking_level", [], "any", false, false, false, 58), 'widget');
        echo "
            </div>
          </div>
        </div>
        <div class=\"mb-3\">
          <label for=\"step7_eng_read\" class=\"form-label\">Anglais <span class=\"star\">*</span></label>
          <div class=\"row\">
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 66, $this->source); })()), "english_reading_level", [], "any", false, false, false, 66), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 69, $this->source); })()), "english_writing_level", [], "any", false, false, false, 69), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 72, $this->source); })()), "english_speaking_level", [], "any", false, false, false, 72), 'widget');
        echo "
            </div>
          </div>
        </div>
        <div class=\"mb-3\">
          <label for=\"step7_other\" class=\"form-label\">Autre langue</label>
          <div class=\"row mb-3\">
            <div class=\"col-lg-12 mb-3 mb-lg-0\">
              ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 80, $this->source); })()), "other_language_name", [], "any", false, false, false, 80), 'widget');
        echo "
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 85, $this->source); })()), "other_language_reading_level", [], "any", false, false, false, 85), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 88, $this->source); })()), "other_language_writing_level", [], "any", false, false, false, 88), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 91, $this->source); })()), "other_language_speaking_level", [], "any", false, false, false, 91), 'widget');
        echo "
            </div>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 99
        echo "
    <h4 class=\"mb-4 border-bottom mt-4 pb-2\">Compétences Informatique</h4>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h5>Informatique Bureautique</h5>
        <p>Veiller sélectionner votre niveau correspondant à chaque logiciel.</p>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 112, $this->source); })()), "microsoft_word_level", [], "any", false, false, false, 112), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 113, $this->source); })()), "microsoft_word_level", [], "any", false, false, false, 113), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 118, $this->source); })()), "microsoft_excel_level", [], "any", false, false, false, 118), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 119, $this->source); })()), "microsoft_excel_level", [], "any", false, false, false, 119), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 124, $this->source); })()), "microsoft_powerPoint_level", [], "any", false, false, false, 124), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 125, $this->source); })()), "microsoft_powerPoint_level", [], "any", false, false, false, 125), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 130, $this->source); })()), "microsoft_oneNote_level", [], "any", false, false, false, 130), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 131, $this->source); })()), "microsoft_oneNote_level", [], "any", false, false, false, 131), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 136, $this->source); })()), "microsoft_outlook_level", [], "any", false, false, false, 136), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 137, $this->source); })()), "microsoft_outlook_level", [], "any", false, false, false, 137), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 142, $this->source); })()), "microsoft_publisher_level", [], "any", false, false, false, 142), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 143, $this->source); })()), "microsoft_publisher_level", [], "any", false, false, false, 143), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 148, $this->source); })()), "microsoft_access_level", [], "any", false, false, false, 148), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 149, $this->source); })()), "microsoft_access_level", [], "any", false, false, false, 149), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 154, $this->source); })()), "microsoft_visio_level", [], "any", false, false, false, 154), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 155, $this->source); })()), "microsoft_visio_level", [], "any", false, false, false, 155), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 160, $this->source); })()), "microsoft_project_level", [], "any", false, false, false, 160), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 161, $this->source); })()), "microsoft_project_level", [], "any", false, false, false, 161), 'widget');
        echo "
        </div>
      </div>
    </div>

    <div class=\"row border-top pt-4 mt-4\">
      <div class=\"col-lg-12\">
        <h5>Autres compétences informatiques</h5>

        <p class=\"mb-0\">Sélectionner une/des compétence(s) dans la liste.</p>
        <p>Si la compétence informatique ne figure pas dans la liste proposée, veuillez la préciser.</p>

        <div class=\"d-flex justify-content-end mb-2\">
          <button type=\"button\" class=\"btn btn-primary d-flex align-items-center gap-2\" data-bs-toggle=\"modal\" data-bs-target=\"#addOtherSkill\">
            <i class=\"bx bx-plus\"></i> <span class=\"d-none d-lg-flex\">Ajouter une compétence</span>
          </button>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"d-block w-100\">
          ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 184, $this->source); })()), "other_skills", [], "any", false, false, false, 184), 'widget');
        echo "
        </div>
      </div>
    </div>

    <div class=\"mt-4 pt-4 d-flex justify-content-between\">
      ";
        // line 190
        echo twig_include($this->env, $context, "front/partials/steps/_step_btn_prev.html.twig");
        echo "
      
      <div id=\"other-info-actions\" class=\"d-flex gap-2\">
        <button id=\"other-info-submit\" type=\"submit\" class=\"btn btn-outline-primary d-flex align-items-center gap-2\">
          <i class='bx bx-check'></i> <span class=\"d-none d-lg-flex\">Enregistrer</span>
        </button>

        <button id=\"other-info-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
          <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
          <span role=\"status\">Enregistrement...</span>
        </button>

        <button 
          type=\"button\" 
          class=\"next-step btn btn-success pe-lg-1 d-flex align-items-center gap-1\" 
          ";
        // line 205
        if (twig_test_empty((isset($context["is_other_info_edit"]) || array_key_exists("is_other_info_edit", $context) ? $context["is_other_info_edit"] : (function () { throw new RuntimeError('Variable "is_other_info_edit" does not exist.', 205, $this->source); })()))) {
            echo " 
            disabled 
          ";
        }
        // line 208
        echo "        >
          <span class=\"d-none d-lg-flex\">Continuer</span> <i class=\"bx bx-chevron-right\"></i>
        </button>

      </div>
    </div>
  </div>

  <!-- Modals -->
  ";
        // line 217
        echo twig_include($this->env, $context, "front/partials/modals/_addOtherSkill.html.twig");
        echo "

";
        // line 219
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["otherInfoForm"]) || array_key_exists("otherInfoForm", $context) ? $context["otherInfoForm"] : (function () { throw new RuntimeError('Variable "otherInfoForm" does not exist.', 219, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/steps/_step7.html.twig";
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
        return array (  372 => 219,  367 => 217,  356 => 208,  350 => 205,  332 => 190,  323 => 184,  297 => 161,  293 => 160,  285 => 155,  281 => 154,  273 => 149,  269 => 148,  261 => 143,  257 => 142,  249 => 137,  245 => 136,  237 => 131,  233 => 130,  225 => 125,  221 => 124,  213 => 119,  209 => 118,  201 => 113,  197 => 112,  182 => 99,  172 => 91,  166 => 88,  160 => 85,  152 => 80,  141 => 72,  135 => 69,  129 => 66,  118 => 58,  112 => 55,  106 => 52,  95 => 44,  89 => 41,  83 => 38,  53 => 11,  49 => 9,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Step 7 form fields here -->

{{ form_start(otherInfoForm, {
  'attr': {
      'id': 'other-info-form', 
      'class': 'needs-validation',
      'novalidate': '',
  }
}) }}

  {{ form_row(otherInfoForm._token) }}

  <div class=\"step step-7\">
    <div class=\"d-flex align-items-start justify-content-between my-4 d-block d-lg-none gap-2\">
      <div class=\"text-center bg-primary text-white px-2 py-1 rounded-1\">
        7/9
      </div>
      <div class=\"d-flex flex-column text-end\">
        <h3 class=\"text-end text-primary mb-1\">Autres Informations</h3>
        <p class=\"text-paragraph m-0\">Suivant : CV et Lettre de motivation</p>
      </div>
    </div>

    <p class=\"pb-4 border-bottom-dashed text-paragraph d-block d-lg-none\">Veuillez remplir les champs qui sont marqués obligatoires (<span class=\"text-danger\">*</span>)</p>

    <h3 class=\"d-none d-lg-flex justify-content-center py-3 mb-4 border-full-dashed\">
      Autres Informations
    </h3>

    <h4 class=\"mb-4 border-bottom pb-2\">Niveau de langue</h4>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"mb-3\">
          <label for=\"step7_mg_read\" class=\"form-label\">Malagasy <span class=\"star\">*</span></label>
          <div class=\"row\">
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              {{ form_widget(otherInfoForm.malagasy_reading_level) }}
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              {{ form_widget(otherInfoForm.malagasy_writing_level) }}
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              {{ form_widget(otherInfoForm.malagasy_speaking_level) }}
            </div>
          </div>
        </div>
        <div class=\"mb-3\">
          <label for=\"step7_fr_read\" class=\"form-label\">Français <span class=\"star\">*</span></label>
          <div class=\"row\">
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              {{ form_widget(otherInfoForm.french_reading_level) }}
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              {{ form_widget(otherInfoForm.french_writing_level) }}
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              {{ form_widget(otherInfoForm.french_speaking_level) }}
            </div>
          </div>
        </div>
        <div class=\"mb-3\">
          <label for=\"step7_eng_read\" class=\"form-label\">Anglais <span class=\"star\">*</span></label>
          <div class=\"row\">
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              {{ form_widget(otherInfoForm.english_reading_level) }}
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              {{ form_widget(otherInfoForm.english_writing_level) }}
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              {{ form_widget(otherInfoForm.english_speaking_level) }}
            </div>
          </div>
        </div>
        <div class=\"mb-3\">
          <label for=\"step7_other\" class=\"form-label\">Autre langue</label>
          <div class=\"row mb-3\">
            <div class=\"col-lg-12 mb-3 mb-lg-0\">
              {{ form_widget(otherInfoForm.other_language_name) }}
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              {{ form_widget(otherInfoForm.other_language_reading_level) }}
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              {{ form_widget(otherInfoForm.other_language_writing_level) }}
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              {{ form_widget(otherInfoForm.other_language_speaking_level) }}
            </div>
          </div>
        </div>
      </div>
    </div>

    {# ---------------------------------------------------- #}

    <h4 class=\"mb-4 border-bottom mt-4 pb-2\">Compétences Informatique</h4>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h5>Informatique Bureautique</h5>
        <p>Veiller sélectionner votre niveau correspondant à chaque logiciel.</p>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          {{ form_label(otherInfoForm.microsoft_word_level) }} <span class=\"star\">*</span>
          {{ form_widget(otherInfoForm.microsoft_word_level) }}
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          {{ form_label(otherInfoForm.microsoft_excel_level) }} <span class=\"star\">*</span>
          {{ form_widget(otherInfoForm.microsoft_excel_level) }}
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          {{ form_label(otherInfoForm.microsoft_powerPoint_level) }} <span class=\"star\">*</span>
          {{ form_widget(otherInfoForm.microsoft_powerPoint_level) }}
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          {{ form_label(otherInfoForm.microsoft_oneNote_level) }} <span class=\"star\">*</span>
          {{ form_widget(otherInfoForm.microsoft_oneNote_level) }}
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          {{ form_label(otherInfoForm.microsoft_outlook_level) }} <span class=\"star\">*</span>
          {{ form_widget(otherInfoForm.microsoft_outlook_level) }}
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          {{ form_label(otherInfoForm.microsoft_publisher_level) }} <span class=\"star\">*</span>
          {{ form_widget(otherInfoForm.microsoft_publisher_level) }}
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          {{ form_label(otherInfoForm.microsoft_access_level) }} <span class=\"star\">*</span>
          {{ form_widget(otherInfoForm.microsoft_access_level) }}
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          {{ form_label(otherInfoForm.microsoft_visio_level) }} <span class=\"star\">*</span>
          {{ form_widget(otherInfoForm.microsoft_visio_level) }}
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          {{ form_label(otherInfoForm.microsoft_project_level) }} <span class=\"star\">*</span>
          {{ form_widget(otherInfoForm.microsoft_project_level) }}
        </div>
      </div>
    </div>

    <div class=\"row border-top pt-4 mt-4\">
      <div class=\"col-lg-12\">
        <h5>Autres compétences informatiques</h5>

        <p class=\"mb-0\">Sélectionner une/des compétence(s) dans la liste.</p>
        <p>Si la compétence informatique ne figure pas dans la liste proposée, veuillez la préciser.</p>

        <div class=\"d-flex justify-content-end mb-2\">
          <button type=\"button\" class=\"btn btn-primary d-flex align-items-center gap-2\" data-bs-toggle=\"modal\" data-bs-target=\"#addOtherSkill\">
            <i class=\"bx bx-plus\"></i> <span class=\"d-none d-lg-flex\">Ajouter une compétence</span>
          </button>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"d-block w-100\">
          {{ form_widget(otherInfoForm.other_skills) }}
        </div>
      </div>
    </div>

    <div class=\"mt-4 pt-4 d-flex justify-content-between\">
      {{ include('front/partials/steps/_step_btn_prev.html.twig') }}
      
      <div id=\"other-info-actions\" class=\"d-flex gap-2\">
        <button id=\"other-info-submit\" type=\"submit\" class=\"btn btn-outline-primary d-flex align-items-center gap-2\">
          <i class='bx bx-check'></i> <span class=\"d-none d-lg-flex\">Enregistrer</span>
        </button>

        <button id=\"other-info-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
          <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
          <span role=\"status\">Enregistrement...</span>
        </button>

        <button 
          type=\"button\" 
          class=\"next-step btn btn-success pe-lg-1 d-flex align-items-center gap-1\" 
          {% if is_other_info_edit is empty %} 
            disabled 
          {% endif %}
        >
          <span class=\"d-none d-lg-flex\">Continuer</span> <i class=\"bx bx-chevron-right\"></i>
        </button>

      </div>
    </div>
  </div>

  <!-- Modals -->
  {{ include('front/partials/modals/_addOtherSkill.html.twig') }}

{{ form_end(otherInfoForm) }}", "front/partials/steps/_step7.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\steps\\_step7.html.twig");
    }
}
