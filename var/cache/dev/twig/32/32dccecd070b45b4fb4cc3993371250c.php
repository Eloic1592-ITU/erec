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

/* back/partials/modals/_editPosition.html.twig */
class __TwigTemplate_683f0a1ad00cc12f7637c465e3fbbe65 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/modals/_editPosition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/modals/_editPosition.html.twig"));

        // line 1
        echo "<!-- Edit position -->

<div
  id=\"position-";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["positionForm"]) || array_key_exists("positionForm", $context) ? $context["positionForm"] : (function () { throw new RuntimeError('Variable "positionForm" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\"
  class=\"modal modal-sm fade\"
  data-bs-backdrop=\"static\"
  data-bs-keyboard=\"false\"
  tabindex=\"-1\"
  aria-hidden=\"true\"
>
  ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["positionForm"]) || array_key_exists("positionForm", $context) ? $context["positionForm"] : (function () { throw new RuntimeError('Variable "positionForm" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["id" => ("position-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["positionForm"]) || array_key_exists("positionForm", $context) ? $context["positionForm"] : (function () { throw new RuntimeError('Variable "positionForm" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13)), "class" => "needs-validation", "novalidate" => ""]]);
        // line 17
        echo "
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header px-4\">
          ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["positionForm"]) || array_key_exists("positionForm", $context) ? $context["positionForm"] : (function () { throw new RuntimeError('Variable "positionForm" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), 'label');
        echo "
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body text-start p-3\">
          <div class=\"mb-2\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["positionForm"]) || array_key_exists("positionForm", $context) ? $context["positionForm"] : (function () { throw new RuntimeError('Variable "positionForm" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), 'widget');
        echo "
          </div>

          <div>
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["positionForm"]) || array_key_exists("positionForm", $context) ? $context["positionForm"] : (function () { throw new RuntimeError('Variable "positionForm" does not exist.', 30, $this->source); })()), "reference", [], "any", false, false, false, 30), 'widget');
        echo "
          </div>
        </div>
        <div class=\"modal-footer d-flex flex-nowrap gap-1 border-0 pb-4 px-4 pt-0\">
          <button type=\"submit\" class=\"btn btn-primary w-100 d-flex justify-content-center align-items-center gap-2 m-0\">
            <i class=\"bx bx-check\"></i> <span class=\"\">Enregistrer</span>
          </button>
        </div>
      </div>
    </div>
  ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["positionForm"]) || array_key_exists("positionForm", $context) ? $context["positionForm"] : (function () { throw new RuntimeError('Variable "positionForm" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
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
        return "back/partials/modals/_editPosition.html.twig";
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
        return array (  95 => 40,  82 => 30,  75 => 26,  67 => 21,  61 => 17,  59 => 13,  58 => 11,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Edit position -->

<div
  id=\"position-{{ positionForm.vars.value.id }}\"
  class=\"modal modal-sm fade\"
  data-bs-backdrop=\"static\"
  data-bs-keyboard=\"false\"
  tabindex=\"-1\"
  aria-hidden=\"true\"
>
  {{ form_start(positionForm, {
    'attr': {
      'id': 'position-' ~ positionForm.vars.value.id,
      'class': 'needs-validation',
      'novalidate': '',
    }
  }) }}
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header px-4\">
          {{ form_label(positionForm.name) }}
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body text-start p-3\">
          <div class=\"mb-2\">
            {{ form_widget(positionForm.name) }}
          </div>

          <div>
            {{ form_widget(positionForm.reference) }}
          </div>
        </div>
        <div class=\"modal-footer d-flex flex-nowrap gap-1 border-0 pb-4 px-4 pt-0\">
          <button type=\"submit\" class=\"btn btn-primary w-100 d-flex justify-content-center align-items-center gap-2 m-0\">
            <i class=\"bx bx-check\"></i> <span class=\"\">Enregistrer</span>
          </button>
        </div>
      </div>
    </div>
  {{ form_end(positionForm) }}
</div>

", "back/partials/modals/_editPosition.html.twig", "/var/www/html/erecrutement/templates/back/partials/modals/_editPosition.html.twig");
    }
}
