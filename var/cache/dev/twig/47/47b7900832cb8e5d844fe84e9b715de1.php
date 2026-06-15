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

/* front/partials/recap/_recap4.html.twig */
class __TwigTemplate_bf6139f8b54b59d82ecf40f7b96089b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/recap/_recap4.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/recap/_recap4.html.twig"));

        // line 1
        if ((isset($context["certifications"]) || array_key_exists("certifications", $context) ? $context["certifications"] : (function () { throw new RuntimeError('Variable "certifications" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">    
    <div id=\"recap4\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Certificats ou attestations</h5>

        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["certifications"]) || array_key_exists("certifications", $context) ? $context["certifications"] : (function () { throw new RuntimeError('Variable "certifications" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["certification"]) {
                // line 7
                echo "        <div class=\"d-flex flex-column gap-1\">
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Certificat / Attestation</p>
                    <p class=\"info-value\">";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certification"], "getCertification", [], "method", false, false, false, 11), "html", null, true);
                echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Spécialitér</p>
                    <p class=\"info-value\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certification"], "getSpecialty", [], "method", false, false, false, 15), "html", null, true);
                echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Etablissement / Institution</p>
                    <p class=\"info-value\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certification"], "getInstitution", [], "method", false, false, false, 21), "html", null, true);
                echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Année d'obtention</p>
                    <p class=\"info-value\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certification"], "getCertificationYear", [], "method", false, false, false, 25), "html", null, true);
                echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Voir de la Certificat / Attestation</p>
                    <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/certification/" . twig_get_attribute($this->env, $this->source, $context["certification"], "getCertificationFilename", [], "method", false, false, false, 31))), "html", null, true);
                echo "\" class=\"btn btn-primary mt-2\" target=\"_blank\">
                        Aperçu du Certificat / Attestation
                    </a>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
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
        return "front/partials/recap/_recap4.html.twig";
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
        return array (  106 => 38,  93 => 31,  84 => 25,  77 => 21,  68 => 15,  61 => 11,  55 => 7,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if certifications %}
<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">    
    <div id=\"recap4\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Certificats ou attestations</h5>

        {% for certification in certifications %}
        <div class=\"d-flex flex-column gap-1\">
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Certificat / Attestation</p>
                    <p class=\"info-value\">{{ certification.getCertification() }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Spécialitér</p>
                    <p class=\"info-value\">{{ certification.getSpecialty() }}</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Etablissement / Institution</p>
                    <p class=\"info-value\">{{ certification.getInstitution() }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Année d'obtention</p>
                    <p class=\"info-value\">{{ certification.getCertificationYear() }}</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Voir de la Certificat / Attestation</p>
                    <a href=\"{{ asset('uploads/certification/' ~ certification.getCertificationFilename()) }}\" class=\"btn btn-primary mt-2\" target=\"_blank\">
                        Aperçu du Certificat / Attestation
                    </a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endif %}", "front/partials/recap/_recap4.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\recap\\_recap4.html.twig");
    }
}
