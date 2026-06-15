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

/* front/partials/_footer.html.twig */
class __TwigTemplate_504f9f7c7796beea67b180036c8ce7c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_footer.html.twig"));

        // line 1
        echo "<footer class=\"footer mt-auto py-3\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"d-flex flex-column align-items-center gap-2\">
          <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-bcm.png"), "html", null, true);
        echo "\" alt=\"logo-bcm\" width=\"40px\" />
          <h6 class=\"m-0 text-center\">BANKY FOIBEN'I MADAGASIKARA</h6>
        </div>
      </div>
      <div class=\"col-lg-4 d-flex justify-content-center align-items-center\">
        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketing");
        echo "\" class=\"faq-link\">FAQ</a>

      </div>
      <div class=\"col-lg-4\">
        <span>
            &copy; 2024
            <a href=\"https://www.banky-foibe.mg/\">Banky Foiben'i Madagasikara</a>. All rights reserved
        </span>
      </div>
    </div>
  </div>
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header px-4\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["degreeForm"] ?? null), "name", [], "any", false, false, false, 25), 'label');
        echo "
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body text-start p-3\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["degreeForm"] ?? null), "name", [], "any", false, false, false, 29), 'widget');
        echo "
      </div>
      <div class=\"modal-footer d-flex flex-nowrap gap-1 border-0 pb-4 px-4 pt-0\">
        <button type=\"submit\" class=\"btn btn-primary w-100 d-flex justify-content-center align-items-center gap-2 m-0\">
          <i class=\"bx bx-check\"></i> <span class=\"\">Enregistrer</span>
        </button>
      </div>
    </div>
  </div>
</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/_footer.html.twig";
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
        return array (  79 => 29,  72 => 25,  55 => 11,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/_footer.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\_footer.html.twig");
    }
}
