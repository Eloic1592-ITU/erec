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

/* front/partials/recap/_recap3.html.twig */
class __TwigTemplate_e23363a0eb2484f0bd05d35e12d9a7d4 extends Template
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
        if (($context["educations"] ?? null)) {
            // line 2
            echo "<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">      
    <div id=\"recap3\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Diplôme académiques</h5>

        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["educations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["education"]) {
                // line 7
                echo "        <div class=\"d-flex flex-column gap-1\">
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Diplôme</p>
                    <p class=\"info-value\">";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["education"], "degree", [], "any", false, false, false, 11), "getName", [], "method", false, false, false, 11), "html", null, true);
                echo "</p>
                </div>

                ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["education"], "getOtherFieldOfStudy", [], "method", false, false, false, 14)) {
                    // line 15
                    echo "                <div class=\"info\">
                    <p class=\"info-label\">Filière / Domaine</p>
                    <p class=\"info-value\">";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getOtherFieldOfStudy", [], "method", false, false, false, 17), "html", null, true);
                    echo "</p>
                </div>
                ";
                } else {
                    // line 20
                    echo "                <div class=\"info\">
                    <p class=\"info-label\">Filière / Domaine</p>
                    <p class=\"info-value\">";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["education"], "fieldOfStudy", [], "any", false, false, false, 22), "getName", [], "method", false, false, false, 22), "html", null, true);
                    echo "</p>
                </div>
                ";
                }
                // line 25
                echo "
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Spécialité / Option</p>
                    <p class=\"info-value\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getSpecialty", [], "method", false, false, false, 30), "html", null, true);
                echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Etablissement / Institution</p>
                    <p class=\"info-value\">";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getInstitution", [], "method", false, false, false, 34), "html", null, true);
                echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Année d'obtention du diplôme</p>
                    <p class=\"info-value\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getGraduationYear", [], "method", false, false, false, 40), "html", null, true);
                echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Voir le diplôme</p>
                    <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/diplome/" . twig_get_attribute($this->env, $this->source, $context["education"], "getDegreeFilename", [], "method", false, false, false, 44))), "html", null, true);
                echo "\" class=\"btn btn-primary mt-2\" target=\"_blank\">
                        Aperçu du diplôme
                    </a>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['education'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
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
        return "front/partials/recap/_recap3.html.twig";
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
        return array (  126 => 51,  113 => 44,  106 => 40,  97 => 34,  90 => 30,  83 => 25,  77 => 22,  73 => 20,  67 => 17,  63 => 15,  61 => 14,  55 => 11,  49 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/recap/_recap3.html.twig", "/var/www/html/erecrutement/templates/front/partials/recap/_recap3.html.twig");
    }
}
