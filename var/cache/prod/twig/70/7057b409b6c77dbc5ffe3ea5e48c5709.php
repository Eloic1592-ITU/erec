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

/* front/partials/recap/_recap8.html.twig */
class __TwigTemplate_a0532e79eee99151c9945fec573b7167 extends Template
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
        if (($context["document"] ?? null)) {
            // line 2
            echo "<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">   
    <div id=\"recap1\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">CV et Lettre de motivation</h5>
        <div class=\"d-flex flex-column gap-1\">
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Mon CV</p>
                    <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cv/" . twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "getCvFilename", [], "method", false, false, false, 9))), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2 w-100\" target=\"_blank\">
                        Aperçu de mon CV
                    </a>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Ma lettre de motivation</p>
                    <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/lm/" . twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "getLmFilename", [], "method", false, false, false, 15))), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2 w-100\" target=\"_blank\">
                        Aperçu de ma lettre de motivation
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/recap/_recap8.html.twig";
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
        return array (  57 => 15,  48 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/recap/_recap8.html.twig", "/var/www/html/erecrutement/templates/front/partials/recap/_recap8.html.twig");
    }
}
