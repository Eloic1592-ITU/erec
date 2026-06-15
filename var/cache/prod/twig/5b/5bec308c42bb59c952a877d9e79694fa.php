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
class __TwigTemplate_f2f8c22f6c8233ee6b0677e68d6542c1 extends Template
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
        return array (  82 => 26,  79 => 25,  69 => 21,  65 => 20,  58 => 19,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/modals/_positions.html.twig", "/var/www/html/erecrutement/templates/partials/modals/_positions.html.twig");
    }
}
