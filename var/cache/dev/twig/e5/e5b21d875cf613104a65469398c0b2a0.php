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

/* front/partials/recap/_recap9.html.twig */
class __TwigTemplate_00c9f215495bb416e29457b1cb960a70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/recap/_recap9.html.twig"));

        // line 1
        if (($context["engagement"] ?? null)) {
            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["engagement"] ?? null), "getSecondPosition", [], "method", false, false, false, 2) || twig_get_attribute($this->env, $this->source, ($context["engagement"] ?? null), "getThirdPosition", [], "method", false, false, false, 2))) {
                // line 3
                echo "        <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\"> 
            <div id=\"recap1\" class=\"d-flex flex-column gap-2\">
                <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Autres postes souhaités</h5>
                <div class=\"d-flex flex-column gap-1\">
                    <div class=\"info-group\">
                        ";
                // line 8
                if (twig_get_attribute($this->env, $this->source, ($context["engagement"] ?? null), "getSecondPosition", [], "method", false, false, false, 8)) {
                    // line 9
                    echo "                        <div class=\"info\">
                            <p class=\"info-label\">2ème poste souhaités</p>
                            <p class=\"info-value\">";
                    // line 11
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["engagement"] ?? null), "getSecondPosition", [], "method", false, false, false, 11), "html", null, true);
                    echo "</p>
                        </div>
                        ";
                }
                // line 14
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["engagement"] ?? null), "getThirdPosition", [], "method", false, false, false, 14)) {
                    // line 15
                    echo "                        <div class=\"info\">
                            <p class=\"info-label\">3ème poste souhaités</p>
                            <p class=\"info-value\">";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["engagement"] ?? null), "getThirdPosition", [], "method", false, false, false, 17), "html", null, true);
                    echo "</p>
                        </div>
                        ";
                }
                // line 20
                echo "                    </div>
                </div>
            </div>
        </div>
    ";
            }
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/recap/_recap9.html.twig";
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
        return array (  77 => 20,  71 => 17,  67 => 15,  64 => 14,  58 => 11,  54 => 9,  52 => 8,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/recap/_recap9.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\recap\\_recap9.html.twig");
    }
}
