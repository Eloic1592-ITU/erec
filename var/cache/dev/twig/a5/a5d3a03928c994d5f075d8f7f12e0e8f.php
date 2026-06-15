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
class __TwigTemplate_f8a1d5e29175427814dcd9164d8ce050 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/recap/_recap6.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/recap/_recap6.html.twig"));

        // line 1
        if ((isset($context["workExperiences"]) || array_key_exists("workExperiences", $context) ? $context["workExperiences"] : (function () { throw new RuntimeError('Variable "workExperiences" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">    
    <div id=\"recap6\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Expériences professionnelles</h5>

        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["workExperiences"]) || array_key_exists("workExperiences", $context) ? $context["workExperiences"] : (function () { throw new RuntimeError('Variable "workExperiences" does not exist.', 6, $this->source); })()));
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  145 => 62,  132 => 55,  125 => 51,  116 => 45,  109 => 41,  100 => 35,  93 => 31,  84 => 25,  77 => 21,  68 => 15,  61 => 11,  55 => 7,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if workExperiences %}
<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">    
    <div id=\"recap6\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Expériences professionnelles</h5>

        {% for workExperience in workExperiences %}
        <div class=\"d-flex flex-column gap-1\">
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Poste occupé</p>
                    <p class=\"info-value\">{{ workExperience.getPosition() }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Organisme ou Société</p>
                    <p class=\"info-value\">{{ workExperience.getOrganization() }}</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Lieu</p>
                    <p class=\"info-value\">{{ workExperience.getLocation() }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Début</p>
                    <p class=\"info-value\">{{ workExperience.getStartDate()|date('d/m/Y') }}</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Fin</p>
                    <p class=\"info-value\">{{ workExperience.getEndDate()|date('d/m/Y') }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Personne de référence</p>
                    <p class=\"info-value\">{{ workExperience.getReferenceName() }}</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Fonction de la personne de référence</p>
                    <p class=\"info-value\">{{ workExperience.getReferencePosition() }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">e-mail de la personne de référence</p>
                    <p class=\"info-value\">{{ workExperience.getReferenceEmail() }}</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Téléphone de la personne de référence</p>
                    <p class=\"info-value\">{{ workExperience.getReferencePhone() }}</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Voir l'attestation de travail</p>
                    <a href=\"{{ asset('uploads/attestation-de-travail/' ~ workExperience.getWorkFilename()) }}\" class=\"btn btn-primary mt-2\" target=\"_blank\">
                        Aperçu l'attestation de travail
                    </a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endif %}
", "front/partials/recap/_recap6.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\recap\\_recap6.html.twig");
    }
}
