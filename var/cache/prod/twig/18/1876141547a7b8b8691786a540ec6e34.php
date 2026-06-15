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

/* back/partials/modals/_newPosition.html.twig */
class __TwigTemplate_aec3c5e3d2f49df82fd5209acf794d49 extends Template
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
        echo "<!-- Add position -->

<div
  id=\"position-modal\"
  class=\"modal modal-sm fade\"
  data-bs-backdrop=\"static\"
  data-bs-keyboard=\"false\"
  tabindex=\"-1\"
  aria-hidden=\"true\"
>
  ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["newPositionForm"] ?? null), 'form_start', ["attr" => ["id" => "position-new", "class" => "needs-validation", "novalidate" => ""]]);
        // line 17
        echo "
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header px-4\">
          ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newPositionForm"] ?? null), "name", [], "any", false, false, false, 21), 'label');
        echo "
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body text-start p-3\">
          <div class=\"mb-2\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newPositionForm"] ?? null), "name", [], "any", false, false, false, 26), 'widget');
        echo "
          </div>

          <div>
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newPositionForm"] ?? null), "reference", [], "any", false, false, false, 30), 'widget');
        echo "
          </div>
        </div>
        <div class=\"modal-footer d-flex flex-nowrap gap-1 border-0 pb-4 px-4 pt-0\">
          <button id=\"position-new-submit\" type=\"submit\" type=\"button\" class=\"btn btn-primary w-100 d-flex justify-content-center align-items-center gap-2 m-0\">
            <i class=\"bx bx-check\"></i> <span class=\"\">Enregistrer</span>
          </button>

          <button id=\"position-new-loader\" class=\"btn btn-primary m-0 w-100 d-none\" type=\"button\" disabled>
            <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
            <span role=\"status\">Enregistrement...</span>
          </button>
        </div>
      </div>
    </div>
  ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["newPositionForm"] ?? null), 'form_end');
        echo "
</div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/modals/_newPosition.html.twig";
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
        return array (  90 => 45,  72 => 30,  65 => 26,  57 => 21,  51 => 17,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/modals/_newPosition.html.twig", "/var/www/html/erecrutement/templates/back/partials/modals/_newPosition.html.twig");
    }
}
