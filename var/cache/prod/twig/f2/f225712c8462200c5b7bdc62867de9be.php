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

/* front/partials/recap/_recap6.html.twig */
class __TwigTemplate_00b0c2f95a88fabdacdd9011b582e3b9 extends Template
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
        if (($context["workExperiences"] ?? null)) {
            // line 2
            echo "<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">    
    <div id=\"recap6\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Expériences professionnelles</h5>

        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["workExperiences"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["workExperience"]) {
                // line 7
                echo "        <div class=\"d-flex flex-column gap-1\">
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Poste occupé</p>
                    <p class=\"info-value\">";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getPosition", [], "method", false, false, false, 11), "html", null, true);
                echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Organisme ou Société</p>
                    <p class=\"info-value\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getOrganization", [], "method", false, false, false, 15), "html", null, true);
                echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Lieu</p>
                    <p class=\"info-value\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getLocation", [], "method", false, false, false, 21), "html", null, true);
                echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Début</p>
                    <p class=\"info-value\">";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getStartDate", [], "method", false, false, false, 25), "d/m/Y"), "html", null, true);
                echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Fin</p>
                    <p class=\"info-value\">";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getEndDate", [], "method", false, false, false, 31), "d/m/Y"), "html", null, true);
                echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Personne de référence</p>
                    <p class=\"info-value\">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferenceName", [], "method", false, false, false, 35), "html", null, true);
                echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Fonction de la personne de référence</p>
                    <p class=\"info-value\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferencePosition", [], "method", false, false, false, 41), "html", null, true);
                echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">e-mail de la personne de référence</p>
                    <p class=\"info-value\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferenceEmail", [], "method", false, false, false, 45), "html", null, true);
                echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Téléphone de la personne de référence</p>
                    <p class=\"info-value\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferencePhone", [], "method", false, false, false, 51), "html", null, true);
                echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Voir l'attestation de travail</p>
                    <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation-de-travail/" . twig_get_attribute($this->env, $this->source, $context["workExperience"], "getWorkFilename", [], "method", false, false, false, 55))), "html", null, true);
                echo "\" class=\"btn btn-primary mt-2\" target=\"_blank\">
                        Aperçu l'attestation de travail
                    </a>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workExperience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "    </div>
</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/recap/_recap6.html.twig";
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
        return array (  139 => 62,  126 => 55,  119 => 51,  110 => 45,  103 => 41,  94 => 35,  87 => 31,  78 => 25,  71 => 21,  62 => 15,  55 => 11,  49 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/recap/_recap6.html.twig", "/var/www/html/erecrutement/templates/front/partials/recap/_recap6.html.twig");
    }
}
