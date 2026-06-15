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

/* back/partials/tables/candidate/_educations.html.twig */
class __TwigTemplate_f61e0f2b09e5cce899475e8d45a2e656 extends Template
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
        echo "<table id=\"data-list\" class=\"table table-striped nowrap\" style=\"width: 100%\">
    <thead>
        <tr>
            <th>ID</th>
            <th>Diplôme</th>
            <th>Filière / Domaine</th>
            <th>Spécialité / Option</th>
            <th>Etablissement / Institution</th>
            <th>Année d'obtention du diplôme</th>
            <th>Télécharger</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "getEducation", [], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["education"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getId", [], "method", false, false, false, 17), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["education"], "degree", [], "any", false, false, false, 18), "getName", [], "method", false, false, false, 18), "html", null, true);
            echo "</td>
                ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, $context["education"], "getOtherFieldOfStudy", [], "method", false, false, false, 19)) {
                // line 20
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getOtherFieldOfStudy", [], "method", false, false, false, 20), "html", null, true);
                echo "</td>
                ";
            } else {
                // line 22
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["education"], "fieldOfStudy", [], "any", false, false, false, 22), "getName", [], "method", false, false, false, 22), "html", null, true);
                echo "</td>
                ";
            }
            // line 24
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getSpecialty", [], "method", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getInstitution", [], "method", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getGraduationYear", [], "method", false, false, false, 26), "html", null, true);
            echo "</td>
                <td><a class='btn btn-success bg-success text-white w-100' href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/diplome/" . twig_get_attribute($this->env, $this->source, $context["education"], "getDegreeFilename", [], "method", false, false, false, 27))), "html", null, true);
            echo "\" target=\"_blank\"><i class='bx bx-download me-1'></i> Télécharger le diplôme</a></td>
                <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['education'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </tbody>
</table>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/tables/candidate/_educations.html.twig";
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
        return array (  105 => 31,  95 => 27,  91 => 26,  87 => 25,  82 => 24,  76 => 22,  70 => 20,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/tables/candidate/_educations.html.twig", "/var/www/html/erecrutement/templates/back/partials/tables/candidate/_educations.html.twig");
    }
}
