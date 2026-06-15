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
class __TwigTemplate_3c5f94b9fff35b7133560733156e51dc extends Template
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
        echo "<!-- Step 7 form fields here -->

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["otherInfoForm"] ?? null), 'form_start', ["attr" => ["id" => "other-info-form", "class" => "needs-validation", "novalidate" => ""]]);
        // line 9
        echo "

  ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "_token", [], "any", false, false, false, 11), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "malagasy_reading_level", [], "any", false, false, false, 38), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "malagasy_writing_level", [], "any", false, false, false, 41), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "malagasy_speaking_level", [], "any", false, false, false, 44), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "french_reading_level", [], "any", false, false, false, 52), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "french_writing_level", [], "any", false, false, false, 55), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "french_speaking_level", [], "any", false, false, false, 58), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "english_reading_level", [], "any", false, false, false, 66), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "english_writing_level", [], "any", false, false, false, 69), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "english_speaking_level", [], "any", false, false, false, 72), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "other_language_name", [], "any", false, false, false, 80), 'widget');
        echo "
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "other_language_reading_level", [], "any", false, false, false, 85), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "other_language_writing_level", [], "any", false, false, false, 88), 'widget');
        echo "
            </div>
            <div class=\"col-lg-4 mb-3 mb-lg-0\">
              ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "other_language_speaking_level", [], "any", false, false, false, 91), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_word_level", [], "any", false, false, false, 112), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_word_level", [], "any", false, false, false, 113), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_excel_level", [], "any", false, false, false, 118), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_excel_level", [], "any", false, false, false, 119), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_powerPoint_level", [], "any", false, false, false, 124), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_powerPoint_level", [], "any", false, false, false, 125), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_oneNote_level", [], "any", false, false, false, 130), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_oneNote_level", [], "any", false, false, false, 131), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_outlook_level", [], "any", false, false, false, 136), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_outlook_level", [], "any", false, false, false, 137), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_publisher_level", [], "any", false, false, false, 142), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_publisher_level", [], "any", false, false, false, 143), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_access_level", [], "any", false, false, false, 148), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_access_level", [], "any", false, false, false, 149), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_visio_level", [], "any", false, false, false, 154), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_visio_level", [], "any", false, false, false, 155), 'widget');
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"mb-3\">
          ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_project_level", [], "any", false, false, false, 160), 'label');
        echo " <span class=\"star\">*</span>
          ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "microsoft_project_level", [], "any", false, false, false, 161), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "other_skills", [], "any", false, false, false, 184), 'widget');
        echo "
        </div>
      </div>
    </div>

    <div class=\"row border-top pt-4 mt-4\">
      <div class=\"col-lg-12\">
        <h5>Autres compétences non informatiques</h5>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"d-block w-100\">
          ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["otherInfoForm"] ?? null), "otherNotInfoSkills", [], "any", false, false, false, 197), 'widget');
        echo "
        </div>
      </div>
    </div>

    <div class=\"mt-4 pt-4 d-flex justify-content-between\">
      ";
        // line 203
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
        // line 218
        if (twig_test_empty(($context["is_other_info_edit"] ?? null))) {
            echo " 
            disabled 
          ";
        }
        // line 221
        echo "        >
          <span class=\"d-none d-lg-flex\">Continuer</span> <i class=\"bx bx-chevron-right\"></i>
        </button>

      </div>
    </div>
  </div>

  <!-- Modals -->
  ";
        // line 230
        echo twig_include($this->env, $context, "front/partials/modals/_addOtherSkill.html.twig");
        echo "

";
        // line 232
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["otherInfoForm"] ?? null), 'form_end');
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
        return array (  382 => 232,  377 => 230,  366 => 221,  360 => 218,  342 => 203,  333 => 197,  317 => 184,  291 => 161,  287 => 160,  279 => 155,  275 => 154,  267 => 149,  263 => 148,  255 => 143,  251 => 142,  243 => 137,  239 => 136,  231 => 131,  227 => 130,  219 => 125,  215 => 124,  207 => 119,  203 => 118,  195 => 113,  191 => 112,  176 => 99,  166 => 91,  160 => 88,  154 => 85,  146 => 80,  135 => 72,  129 => 69,  123 => 66,  112 => 58,  106 => 55,  100 => 52,  89 => 44,  83 => 41,  77 => 38,  47 => 11,  43 => 9,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/steps/_step7.html.twig", "/var/www/html/erecrutement/templates/front/partials/steps/_step7.html.twig");
    }
}
