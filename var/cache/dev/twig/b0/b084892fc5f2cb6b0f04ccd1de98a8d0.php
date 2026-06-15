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

/* front/partials/recap/_recap5.html.twig */
class __TwigTemplate_3ffb10f56919ebb8165cc4e71c64ac33 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/recap/_recap5.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/recap/_recap5.html.twig"));

        // line 1
        if ((isset($context["internships"]) || array_key_exists("internships", $context) ? $context["internships"] : (function () { throw new RuntimeError('Variable "internships" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">       
    <div id=\"recap5\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Stages suivis</h5>

        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["internships"]) || array_key_exists("internships", $context) ? $context["internships"] : (function () { throw new RuntimeError('Variable "internships" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["internship"]) {
                // line 7
                echo "        <div class=\"d-flex flex-column gap-1\">
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Thème</p>
                    <p class=\"info-value\">";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getTheme", [], "method", false, false, false, 11), "html", null, true);
                echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Organisation ou Société</p>
                    <p class=\"info-value\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getOrganization", [], "method", false, false, false, 15), "html", null, true);
                echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Année de stage</p>
                    <p class=\"info-value\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getInternshipYear", [], "method", false, false, false, 21), "html", null, true);
                echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Durée</p>
                    <p class=\"info-value\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getDuration", [], "method", false, false, false, 25), "html", null, true);
                echo " mois</p>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['internship'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>
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
        return "front/partials/recap/_recap5.html.twig";
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
        return array (  95 => 30,  84 => 25,  77 => 21,  68 => 15,  61 => 11,  55 => 7,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if internships %}
<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">       
    <div id=\"recap5\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Stages suivis</h5>

        {% for internship in internships %}
        <div class=\"d-flex flex-column gap-1\">
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Thème</p>
                    <p class=\"info-value\">{{ internship.getTheme() }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Organisation ou Société</p>
                    <p class=\"info-value\">{{ internship.getOrganization() }}</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Année de stage</p>
                    <p class=\"info-value\">{{ internship.getInternshipYear() }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Durée</p>
                    <p class=\"info-value\">{{ internship.getDuration() }} mois</p>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endif %}
", "front/partials/recap/_recap5.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\recap\\_recap5.html.twig");
    }
}
