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
class __TwigTemplate_4b5e27957e942bb5af051b7f14197991 extends Template
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
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/modals/_addOtherSkill.html.twig", "/var/www/html/erecrutement/templates/front/partials/modals/_addOtherSkill.html.twig");
    }
}
