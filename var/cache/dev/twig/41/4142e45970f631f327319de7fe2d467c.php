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
class __TwigTemplate_707ead99bead5c668a61678b4f7357c3 extends Template
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

        // line 1
        if (($context["certifications"] ?? null)) {
            // line 2
            echo "<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">    
    <div id=\"recap4\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Certificats ou attestations</h5>

        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["certifications"] ?? null));
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
        return array (  103 => 38,  90 => 31,  81 => 25,  74 => 21,  65 => 15,  58 => 11,  52 => 7,  48 => 6,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/recap/_recap4.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\recap\\_recap4.html.twig");
    }
}
