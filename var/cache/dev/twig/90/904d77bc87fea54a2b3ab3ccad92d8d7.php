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
class __TwigTemplate_926c54af6391410a9bb7eeade130586c extends Template
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

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/recap/_recap1.html.twig"));

        // line 1
        if ((isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 1, $this->source); })())) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "referencePosition", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Lieux d'affectation</p>
                    <p class=\"info-value\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 13, $this->source); })()), "getPrimaryLocation", [], "method", false, false, false, 13), "html", null, true);
            echo "</p>
                </div>
            </div>
            ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, (isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 16, $this->source); })()), "getSecondaryLocation", [], "method", false, false, false, 16) || twig_get_attribute($this->env, $this->source, (isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 16, $this->source); })()), "getTertiaryLocation", [], "method", false, false, false, 16))) {
                // line 17
                echo "            <div class=\"info-group\">
                ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, (isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 18, $this->source); })()), "getSecondaryLocation", [], "method", false, false, false, 18)) {
                    // line 19
                    echo "                <div class=\"info\">
                    <p class=\"info-label\">2ème lieux d'affectation souhaité</p>
                    <p class=\"info-value\">";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 21, $this->source); })()), "getSecondaryLocation", [], "method", false, false, false, 21), "html", null, true);
                    echo "</p>
                </div>
                ";
                }
                // line 24
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 24, $this->source); })()), "getTertiaryLocation", [], "method", false, false, false, 24)) {
                    // line 25
                    echo "                <div class=\"info\">
                    <p class=\"info-label\">3ème lieux d'affectation souhaité</p>
                    <p class=\"info-value\">";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 27, $this->source); })()), "getTertiaryLocation", [], "method", false, false, false, 27), "html", null, true);
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  101 => 32,  97 => 30,  91 => 27,  87 => 25,  84 => 24,  78 => 21,  74 => 19,  72 => 18,  69 => 17,  67 => 16,  61 => 13,  54 => 9,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if jobApplication %}
<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">     
    <div id=\"recap1\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Poste demandé</h5>
        <div class=\"d-flex flex-column gap-1\">
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Poste demandé</p>
                    <p class=\"info-value\">{{ app.user.referencePosition.name }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Lieux d'affectation</p>
                    <p class=\"info-value\">{{ jobApplication.getPrimaryLocation() }}</p>
                </div>
            </div>
            {% if jobApplication.getSecondaryLocation() or jobApplication.getTertiaryLocation() %}
            <div class=\"info-group\">
                {% if jobApplication.getSecondaryLocation() %}
                <div class=\"info\">
                    <p class=\"info-label\">2ème lieux d'affectation souhaité</p>
                    <p class=\"info-value\">{{ jobApplication.getSecondaryLocation() }}</p>
                </div>
                {% endif %}
                {% if jobApplication.getTertiaryLocation() %}
                <div class=\"info\">
                    <p class=\"info-label\">3ème lieux d'affectation souhaité</p>
                    <p class=\"info-value\">{{ jobApplication.getTertiaryLocation() }}</p>
                </div>
                {% endif %}
            </div>
            {% endif %}
        </div>
    </div>
</div>
{% endif %}
", "front/partials/recap/_recap1.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\recap\\_recap1.html.twig");
    }
}
