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

/* partials/modals/_positions.html.twig */
class __TwigTemplate_c088262e0357caf72a3e748403bca64b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/modals/_positions.html.twig"));

        // line 1
        echo "<div 
  id=\"positionsModal\" 
  class=\"modal fade\" 
  data-bs-backdrop=\"static\" 
  data-bs-keyboard=\"false\" 
  tabindex=\"-1\" 
  aria-labelledby=\"positionsModalLabel\" 
  aria-hidden=\"true\"
>
  <div class=\"modal-dialog modal-dialog-scrollable modal-lg\">
    <div class=\"modal-content rounded-4\">
      <div class=\"modal-header px-4\">
        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Choisissez le poste qui vous convient</h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body p-3\">
        <div class=\"d-flex flex-column gap-2\">
          ";
        // line 18
        if ((array_key_exists("positions", $context) && ($context["positions"] ?? null))) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["positions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                echo "  
              <a class=\"position\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registeration", ["ref" => twig_get_attribute($this->env, $this->source, $context["position"], "getReference", [], "method", false, false, false, 20)]), "html", null, true);
                echo "\">
                ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "getName", [], "method", false, false, false, 21), "html", null, true);
                echo "
                <i class='bx bx-right-arrow-alt'></i>
              </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "          ";
        }
        // line 26
        echo "        </div>
        
      </div>
    </div>
  </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/modals/_positions.html.twig";
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
        return array (  85 => 26,  82 => 25,  72 => 21,  68 => 20,  61 => 19,  59 => 18,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/modals/_positions.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\partials\\modals\\_positions.html.twig");
    }
}
