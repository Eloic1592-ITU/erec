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

/* front/partials/recap/_recap1.html.twig */
class __TwigTemplate_68c9efb9ea90070bad9b405ea51d96c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/recap/_recap1.html.twig"));

        // line 1
        if (($context["jobApplication"] ?? null)) {
            // line 2
            echo "<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">     
    <div id=\"recap1\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Poste demandé</h5>
        <div class=\"d-flex flex-column gap-1\">
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Poste demandé</p>
                    <p class=\"info-value\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9), "referencePosition", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Lieux d'affectation</p>
                    <p class=\"info-value\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getPrimaryLocation", [], "method", false, false, false, 13), "html", null, true);
            echo "</p>
                </div>
            </div>
            ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getSecondaryLocation", [], "method", false, false, false, 16) || twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getTertiaryLocation", [], "method", false, false, false, 16))) {
                // line 17
                echo "            <div class=\"info-group\">
                ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getSecondaryLocation", [], "method", false, false, false, 18)) {
                    // line 19
                    echo "                <div class=\"info\">
                    <p class=\"info-label\">2ème lieux d'affectation souhaité</p>
                    <p class=\"info-value\">";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getSecondaryLocation", [], "method", false, false, false, 21), "html", null, true);
                    echo "</p>
                </div>
                ";
                }
                // line 24
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getTertiaryLocation", [], "method", false, false, false, 24)) {
                    // line 25
                    echo "                <div class=\"info\">
                    <p class=\"info-label\">3ème lieux d'affectation souhaité</p>
                    <p class=\"info-value\">";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getTertiaryLocation", [], "method", false, false, false, 27), "html", null, true);
                    echo "</p>
                </div>
                ";
                }
                // line 30
                echo "            </div>
            ";
            }
            // line 32
            echo "        </div>
    </div>
</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/recap/_recap1.html.twig";
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
        return array (  98 => 32,  94 => 30,  88 => 27,  84 => 25,  81 => 24,  75 => 21,  71 => 19,  69 => 18,  66 => 17,  64 => 16,  58 => 13,  51 => 9,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/recap/_recap1.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\recap\\_recap1.html.twig");
    }
}
