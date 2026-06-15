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

/* front/partials/modals/_addOtherSkill.html.twig */
class __TwigTemplate_1e808d99837b530db0b8247ceba26c2d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/modals/_addOtherSkill.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/modals/_addOtherSkill.html.twig"));

        // line 1
        echo "<!-- Add Other Skill -->

<div
  id=\"addOtherSkill\"
  class=\"modal modal-sm fade\"
  data-bs-backdrop=\"static\"
  data-bs-keyboard=\"false\"
  tabindex=\"-1\"
  aria-labelledby=\"addOtherSkillLabel\"
  aria-hidden=\"true\"
>
  <form>
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-body text-center\">
          <label class=\"modal-title fs-5 mb-3\" for=\"other_skill\">Ajouter une compétence</label>
          <input type=\"text\" class=\"form-control\" id=\"other_skill\" placeholder=\"Nom de la compétence\" />
        </div>
        <div class=\"modal-footer d-flex flex-nowrap gap-1 border-0 pb-3 pt-0\">
          <button type=\"button\" class=\"btn btn-sm btn-danger w-100 d-flex justify-content-center align-items-center gap-2\" data-bs-dismiss=\"modal\">
            <i class=\"bx bx-x\"></i> <span class=\"d-none d-lg-flex\">Annuler</span>
          </button>
          <button id=\"submitAddOtherSkill\" type=\"button\" class=\"btn btn-sm btn-success w-100 d-flex justify-content-center align-items-center gap-2\">
            <i class=\"bx bx-check\"></i> <span class=\"d-none d-lg-flex\">Ajouter</span>
          </button>
        </div>
      </div>
    </div>
  </form>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/modals/_addOtherSkill.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Add Other Skill -->

<div
  id=\"addOtherSkill\"
  class=\"modal modal-sm fade\"
  data-bs-backdrop=\"static\"
  data-bs-keyboard=\"false\"
  tabindex=\"-1\"
  aria-labelledby=\"addOtherSkillLabel\"
  aria-hidden=\"true\"
>
  <form>
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-body text-center\">
          <label class=\"modal-title fs-5 mb-3\" for=\"other_skill\">Ajouter une compétence</label>
          <input type=\"text\" class=\"form-control\" id=\"other_skill\" placeholder=\"Nom de la compétence\" />
        </div>
        <div class=\"modal-footer d-flex flex-nowrap gap-1 border-0 pb-3 pt-0\">
          <button type=\"button\" class=\"btn btn-sm btn-danger w-100 d-flex justify-content-center align-items-center gap-2\" data-bs-dismiss=\"modal\">
            <i class=\"bx bx-x\"></i> <span class=\"d-none d-lg-flex\">Annuler</span>
          </button>
          <button id=\"submitAddOtherSkill\" type=\"button\" class=\"btn btn-sm btn-success w-100 d-flex justify-content-center align-items-center gap-2\">
            <i class=\"bx bx-check\"></i> <span class=\"d-none d-lg-flex\">Ajouter</span>
          </button>
        </div>
      </div>
    </div>
  </form>
</div>

", "front/partials/modals/_addOtherSkill.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\modals\\_addOtherSkill.html.twig");
    }
}
