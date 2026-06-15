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
class __TwigTemplate_40552d95cfe7524256098038670a8079 extends Template
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

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/recap/_recap9.html.twig"));

        // line 1
        if ((isset($context["engagement"]) || array_key_exists("engagement", $context) ? $context["engagement"] : (function () { throw new RuntimeError('Variable "engagement" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["engagement"]) || array_key_exists("engagement", $context) ? $context["engagement"] : (function () { throw new RuntimeError('Variable "engagement" does not exist.', 2, $this->source); })()), "getSecondPosition", [], "method", false, false, false, 2) || twig_get_attribute($this->env, $this->source, (isset($context["engagement"]) || array_key_exists("engagement", $context) ? $context["engagement"] : (function () { throw new RuntimeError('Variable "engagement" does not exist.', 2, $this->source); })()), "getThirdPosition", [], "method", false, false, false, 2))) {
                // line 3
                echo "        <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\"> 
            <div id=\"recap1\" class=\"d-flex flex-column gap-2\">
                <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Autres postes souhaités</h5>
                <div class=\"d-flex flex-column gap-1\">
                    <div class=\"info-group\">
                        ";
                // line 8
                if (twig_get_attribute($this->env, $this->source, (isset($context["engagement"]) || array_key_exists("engagement", $context) ? $context["engagement"] : (function () { throw new RuntimeError('Variable "engagement" does not exist.', 8, $this->source); })()), "getSecondPosition", [], "method", false, false, false, 8)) {
                    // line 9
                    echo "                        <div class=\"info\">
                            <p class=\"info-label\">2ème poste souhaités</p>
                            <p class=\"info-value\">";
                    // line 11
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["engagement"]) || array_key_exists("engagement", $context) ? $context["engagement"] : (function () { throw new RuntimeError('Variable "engagement" does not exist.', 11, $this->source); })()), "getSecondPosition", [], "method", false, false, false, 11), "html", null, true);
                    echo "</p>
                        </div>
                        ";
                }
                // line 14
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["engagement"]) || array_key_exists("engagement", $context) ? $context["engagement"] : (function () { throw new RuntimeError('Variable "engagement" does not exist.', 14, $this->source); })()), "getThirdPosition", [], "method", false, false, false, 14)) {
                    // line 15
                    echo "                        <div class=\"info\">
                            <p class=\"info-label\">3ème poste souhaités</p>
                            <p class=\"info-value\">";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["engagement"]) || array_key_exists("engagement", $context) ? $context["engagement"] : (function () { throw new RuntimeError('Variable "engagement" does not exist.', 17, $this->source); })()), "getThirdPosition", [], "method", false, false, false, 17), "html", null, true);
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  80 => 20,  74 => 17,  70 => 15,  67 => 14,  61 => 11,  57 => 9,  55 => 8,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if engagement %}
    {% if engagement.getSecondPosition() or engagement.getThirdPosition() %}
        <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\"> 
            <div id=\"recap1\" class=\"d-flex flex-column gap-2\">
                <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Autres postes souhaités</h5>
                <div class=\"d-flex flex-column gap-1\">
                    <div class=\"info-group\">
                        {% if engagement.getSecondPosition() %}
                        <div class=\"info\">
                            <p class=\"info-label\">2ème poste souhaités</p>
                            <p class=\"info-value\">{{ engagement.getSecondPosition() }}</p>
                        </div>
                        {% endif %}
                        {% if engagement.getThirdPosition() %}
                        <div class=\"info\">
                            <p class=\"info-label\">3ème poste souhaités</p>
                            <p class=\"info-value\">{{ engagement.getThirdPosition() }}</p>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endif %}", "front/partials/recap/_recap9.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\recap\\_recap9.html.twig");
    }
}
