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
class __TwigTemplate_90c3c5c73b5e6c1c08fab3f6b16edb49 extends Template
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

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/recap/_recap2.html.twig"));

        // line 1
        if ((isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 1, $this->source); })())) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 9, $this->source); })()), "civility", [], "any", false, false, false, 9), "getName", [], "method", false, false, false, 9), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Nom</p>
                    <p class=\"info-value\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "getLastName", [], "method", false, false, false, 13), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Prénom(s)</p>
                    <p class=\"info-value\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "getFirstName", [], "method", false, false, false, 19), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Date de naissance</p>
                    <p class=\"info-value\">";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "getBirthDate", [], "method", false, false, false, 23), "d/m/Y"), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Lieu de naissance</p>
                    <p class=\"info-value\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 29, $this->source); })()), "getBirthCity", [], "method", false, false, false, 29), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 29, $this->source); })()), "getCountry", [], "method", false, false, false, 29), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">N° CIN</p>
                    <p class=\"info-value\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "getCin", [], "method", false, false, false, 33), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Date de délivrance du CIN</p>
                    <p class=\"info-value\">";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 39, $this->source); })()), "getCinIssueDate", [], "method", false, false, false, 39), "d/m/Y"), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Lieu de délivrance</p>
                    <p class=\"info-value\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 43, $this->source); })()), "getCinIssuePlace", [], "method", false, false, false, 43), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Adresse</p>
                    <p class=\"info-value\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 49, $this->source); })()), "getAddress", [], "method", false, false, false, 49), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Code postal</p>
                    <p class=\"info-value\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 53, $this->source); })()), "getPostalCode", [], "method", false, false, false, 53), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Ville</p>
                    <p class=\"info-value\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 59, $this->source); })()), "getCity", [], "method", false, false, false, 59), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Pays</p>
                    <p class=\"info-value\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 63, $this->source); })()), "getCountry", [], "method", false, false, false, 63), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Nationalité</p>
                    <p class=\"info-value\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 69, $this->source); })()), "getNationality", [], "method", false, false, false, 69), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Situation familiale actuelle</p>
                    <p class=\"info-value\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 73, $this->source); })()), "maritalStatus", [], "any", false, false, false, 73), "getName", [], "method", false, false, false, 73), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Nombre d'enfants</p>
                    <p class=\"info-value\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 79, $this->source); })()), "getNumberOfChildren", [], "method", false, false, false, 79), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Téléphone 1</p>
                    <p class=\"info-value\">";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 83, $this->source); })()), "getPhone1", [], "method", false, false, false, 83), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 87, $this->source); })()), "getPhone2", [], "method", false, false, false, 87)) {
                // line 88
                echo "                <div class=\"info\">
                    <p class=\"info-label\">Téléphone 2</p>
                    <p class=\"info-value\">";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 90, $this->source); })()), "getPhone2", [], "method", false, false, false, 90), "html", null, true);
                echo "</p>
                </div>
                ";
            }
            // line 93
            echo "                <div class=\"info\">
                    <p class=\"info-label\">Courier électronique</p>
                    <p class=\"info-value\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "getEmail", [], "method", false, false, false, 95), "html", null, true);
            echo "</p>
                </div>
            </div>
            
        </div>
    </div>
</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  198 => 95,  194 => 93,  188 => 90,  184 => 88,  182 => 87,  175 => 83,  168 => 79,  159 => 73,  152 => 69,  143 => 63,  136 => 59,  127 => 53,  120 => 49,  111 => 43,  104 => 39,  95 => 33,  86 => 29,  77 => 23,  70 => 19,  61 => 13,  54 => 9,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if profile %}
<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">      
    <div id=\"recap2\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Informations personnelles</h5>
        <div class=\"d-flex flex-column gap-1\">
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Civilité</p>
                    <p class=\"info-value\">{{ profile.civility.getName() }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Nom</p>
                    <p class=\"info-value\">{{ app.user.getLastName() }}</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Prénom(s)</p>
                    <p class=\"info-value\">{{ app.user.getFirstName() }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Date de naissance</p>
                    <p class=\"info-value\">{{ app.user.getBirthDate()|date('d/m/Y') }}</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Lieu de naissance</p>
                    <p class=\"info-value\">{{ profile.getBirthCity() }} - {{ profile.getCountry() }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">N° CIN</p>
                    <p class=\"info-value\">{{ app.user.getCin() }}</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Date de délivrance du CIN</p>
                    <p class=\"info-value\">{{ profile.getCinIssueDate()|date('d/m/Y') }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Lieu de délivrance</p>
                    <p class=\"info-value\">{{ profile.getCinIssuePlace() }}</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Adresse</p>
                    <p class=\"info-value\">{{ profile.getAddress() }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Code postal</p>
                    <p class=\"info-value\">{{ profile.getPostalCode() }}</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Ville</p>
                    <p class=\"info-value\">{{ profile.getCity() }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Pays</p>
                    <p class=\"info-value\">{{ profile.getCountry() }}</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Nationalité</p>
                    <p class=\"info-value\">{{ profile.getNationality() }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Situation familiale actuelle</p>
                    <p class=\"info-value\">{{ profile.maritalStatus.getName() }}</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Nombre d'enfants</p>
                    <p class=\"info-value\">{{ profile.getNumberOfChildren() }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Téléphone 1</p>
                    <p class=\"info-value\">{{ profile.getPhone1() }}</p>
                </div>
            </div>
            <div class=\"info-group\">
                {% if profile.getPhone2() %}
                <div class=\"info\">
                    <p class=\"info-label\">Téléphone 2</p>
                    <p class=\"info-value\">{{ profile.getPhone2() }}</p>
                </div>
                {% endif %}
                <div class=\"info\">
                    <p class=\"info-label\">Courier électronique</p>
                    <p class=\"info-value\">{{ app.user.getEmail() }}</p>
                </div>
            </div>
            
        </div>
    </div>
</div>
{% endif %}
", "front/partials/recap/_recap2.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\recap\\_recap2.html.twig");
    }
}
