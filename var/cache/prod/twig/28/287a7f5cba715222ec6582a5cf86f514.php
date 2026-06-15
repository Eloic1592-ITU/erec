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
class __TwigTemplate_afa60890ae5c86477e49cf23943121a5 extends Template
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
            &copy; 2025
            <a href=\"https://www.banky-foibe.mg/\">Banky Foiben'i Madagasikara</a>. All rights reserved
        </span>
      </div>
    </div>
  </div>
  ";
        // line 22
        if (array_key_exists("degreeForm", $context)) {
            // line 23
            echo "    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header px-4\">
          ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["degreeForm"] ?? null), "name", [], "any", false, false, false, 26), 'label');
            echo "
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body text-start p-3\">
          ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["degreeForm"] ?? null), "name", [], "any", false, false, false, 30), 'widget');
            echo "
        </div>
        <div class=\"modal-footer d-flex flex-nowrap gap-1 border-0 pb-4 px-4 pt-0\">
          <button type=\"submit\" class=\"btn btn-primary w-100 d-flex justify-content-center align-items-center gap-2 m-0\">
            <i class=\"bx bx-check\"></i> <span class=\"\">Enregistrer</span>
          </button>
        </div>
      </div>
    </div>
  ";
        }
        // line 40
        echo "</footer>
";
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
        return array (  93 => 40,  80 => 30,  73 => 26,  68 => 23,  66 => 22,  52 => 11,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/_footer.html.twig", "/var/www/html/erecrutement/templates/front/partials/_footer.html.twig");
    }
}
