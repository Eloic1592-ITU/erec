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

/* front/partials/recap/_recap2.html.twig */
class __TwigTemplate_788587a06d14694e3c031750e385c120 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/recap/_recap2.html.twig"));

        // line 1
        if (($context["profile"] ?? null)) {
            // line 2
            echo "<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">      
    <div id=\"recap2\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Informations personnelles</h5>
        <div class=\"d-flex flex-column gap-1\">
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Civilité</p>
                    <p class=\"info-value\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "civility", [], "any", false, false, false, 9), "getName", [], "method", false, false, false, 9), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Nom</p>
                    <p class=\"info-value\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13), "getLastName", [], "method", false, false, false, 13), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Prénom(s)</p>
                    <p class=\"info-value\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19), "getFirstName", [], "method", false, false, false, 19), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Date de naissance</p>
                    <p class=\"info-value\">";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "getBirthDate", [], "method", false, false, false, 23), "d/m/Y"), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Lieu de naissance</p>
                    <p class=\"info-value\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getBirthCity", [], "method", false, false, false, 29), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getCountry", [], "method", false, false, false, 29), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">N° CIN</p>
                    <p class=\"info-value\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 33), "getCin", [], "method", false, false, false, 33), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Date de délivrance du CIN</p>
                    <p class=\"info-value\">";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getCinIssueDate", [], "method", false, false, false, 39), "d/m/Y"), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Lieu de délivrance</p>
                    <p class=\"info-value\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getCinIssuePlace", [], "method", false, false, false, 43), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Adresse</p>
                    <p class=\"info-value\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getAddress", [], "method", false, false, false, 49), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Code postal</p>
                    <p class=\"info-value\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getPostalCode", [], "method", false, false, false, 53), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Ville</p>
                    <p class=\"info-value\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getCity", [], "method", false, false, false, 59), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Pays</p>
                    <p class=\"info-value\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getCountry", [], "method", false, false, false, 63), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Nationalité</p>
                    <p class=\"info-value\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getNationality", [], "method", false, false, false, 69), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Situation familiale actuelle</p>
                    <p class=\"info-value\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "maritalStatus", [], "any", false, false, false, 73), "getName", [], "method", false, false, false, 73), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Nombre d'enfants</p>
                    <p class=\"info-value\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getNumberOfChildren", [], "method", false, false, false, 79), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Téléphone 1</p>
                    <p class=\"info-value\">";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getPhone1", [], "method", false, false, false, 83), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getPhone2", [], "method", false, false, false, 87)) {
                // line 88
                echo "                <div class=\"info\">
                    <p class=\"info-label\">Téléphone 2</p>
                    <p class=\"info-value\">";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getPhone2", [], "method", false, false, false, 90), "html", null, true);
                echo "</p>
                </div>
                ";
            }
            // line 93
            echo "                <div class=\"info\">
                    <p class=\"info-label\">Courier électronique</p>
                    <p class=\"info-value\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 95), "getEmail", [], "method", false, false, false, 95), "html", null, true);
            echo "</p>
                </div>
            </div>
            
        </div>
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
        return "front/partials/recap/_recap2.html.twig";
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
        return array (  195 => 95,  191 => 93,  185 => 90,  181 => 88,  179 => 87,  172 => 83,  165 => 79,  156 => 73,  149 => 69,  140 => 63,  133 => 59,  124 => 53,  117 => 49,  108 => 43,  101 => 39,  92 => 33,  83 => 29,  74 => 23,  67 => 19,  58 => 13,  51 => 9,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/recap/_recap2.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\recap\\_recap2.html.twig");
    }
}
