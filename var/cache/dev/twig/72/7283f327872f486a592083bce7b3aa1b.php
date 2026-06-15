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

/* back/partials/tables/candidate/_index.html.twig */
class __TwigTemplate_dccb5e7e5142350eec26d6d430d71068 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/tables/candidate/_index.html.twig"));

        // line 1
        echo "<table id=\"data-list\" class=\"table table-striped nowrap\" style=\"width: 100%\">
    <thead>
        <tr>
            <th>ID</th>
            <th>Civilité</th>
            <th>Nom</th>
            <th>Prénom(s)</th>
            <th>Poste demandé</th>
            <th>2ème postes demandé</th>
            <th>3ème postes demandé</th>
            <th>Date de Naissance</th>
            <th>Lieu de Naissance</th>
            <th>N° CIN</th>
            <th>Date de délivrance du CIN</th>
            <th>Lieu de délivrance</th>
            <th>Adresse</th>
            <th>Code postal</th>
            <th>Ville</th>
            <th>Pays</th>
            <th>Nationalité</th>
            <th>Situation familiale actuelle</th>
            <th>Nombre d'enfants</th>
            <th>Téléphone 1</th>
            <th>Téléphone 2</th>
            <th>Courier électronique</th>
            <th>Diplômes</th>
            <th>Certifications</th>
            <th>Stages</th>
            <th>Expériences</th>
            <th>Compétences</th>
            <th>CV</th>
            <th>Lettre de motivation</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["candidates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 38
            echo "            <tr>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "getId", [], "method", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "profile", [], "any", false, false, false, 40), "civility", [], "any", false, false, false, 40), "getName", [], "method", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "getLastName", [], "method", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "getFirstName", [], "method", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "referencePosition", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "engagement", [], "any", false, false, false, 44), "getSecondPosition", [], "method", false, false, false, 44)) {
                // line 45
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "engagement", [], "any", false, false, false, 45), "getSecondPosition", [], "method", false, false, false, 45), "html", null, true);
                echo "</td>
                ";
            } else {
                // line 47
                echo "                    <td>Aucun</td>
                ";
            }
            // line 48
            echo " 
                ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "engagement", [], "any", false, false, false, 49), "getThirdPosition", [], "method", false, false, false, 49)) {
                // line 50
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "engagement", [], "any", false, false, false, 50), "getThirdPosition", [], "method", false, false, false, 50), "html", null, true);
                echo "</td>
                ";
            } else {
                // line 52
                echo "                    <td>Aucun</td>
                ";
            }
            // line 53
            echo " 
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "getBirthDate", [], "method", false, false, false, 54), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "profile", [], "any", false, false, false, 55), "getBirthCity", [], "method", false, false, false, 55), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "profile", [], "any", false, false, false, 55), "getBirthCountry", [], "method", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "getCin", [], "method", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "profile", [], "any", false, false, false, 57), "getCinIssueDate", [], "method", false, false, false, 57), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "profile", [], "any", false, false, false, 58), "getCinIssuePlace", [], "method", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "profile", [], "any", false, false, false, 59), "getAddress", [], "method", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "profile", [], "any", false, false, false, 60), "getPostalCode", [], "method", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "profile", [], "any", false, false, false, 61), "getCity", [], "method", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "profile", [], "any", false, false, false, 62), "getCountry", [], "method", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "profile", [], "any", false, false, false, 63), "getNationality", [], "method", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "profile", [], "any", false, false, false, 64), "maritalStatus", [], "any", false, false, false, 64), "getName", [], "method", false, false, false, 64), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "profile", [], "any", false, false, false, 65), "getNumberOfChildren", [], "method", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "profile", [], "any", false, false, false, 66), "getPhone1", [], "method", false, false, false, 66), "html", null, true);
            echo "</td>
                ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "profile", [], "any", false, false, false, 67), "getPhone2", [], "method", false, false, false, 67)) {
                // line 68
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "profile", [], "any", false, false, false, 68), "getPhone2", [], "method", false, false, false, 68), "html", null, true);
                echo "</td>
                ";
            } else {
                // line 70
                echo "                    <td>Aucun</td>
                ";
            }
            // line 71
            echo " 
                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "getEmail", [], "method", false, false, false, 72), "html", null, true);
            echo "</td>
                <td><a class='btn btn-primary bg-primary text-white w-100' href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_candidate_education", ["id" => twig_get_attribute($this->env, $this->source, $context["candidate"], "getId", [], "method", false, false, false, 73)]), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"nav-icon fas fa-graduation-cap\"></i> Voir les diplômes</a></td>
                <td><a class='btn btn-primary bg-primary text-white w-100' href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_candidate_certification", ["id" => twig_get_attribute($this->env, $this->source, $context["candidate"], "getId", [], "method", false, false, false, 74)]), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"nav-icon fas fa-certificate\"></i> Voir les certifications</a></td>
                <td><a class='btn btn-primary bg-primary text-white w-100' href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_candidate_internship", ["id" => twig_get_attribute($this->env, $this->source, $context["candidate"], "getId", [], "method", false, false, false, 75)]), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"nav-icon fas fa-briefcase\"></i> Voir les stages</a></td>
                <td><a class='btn btn-primary bg-primary text-white w-100' href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_candidate_experience", ["id" => twig_get_attribute($this->env, $this->source, $context["candidate"], "getId", [], "method", false, false, false, 76)]), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"nav-icon fas fa-briefcase\"></i> Voir les expériences</a></td>
                <td><a class='btn btn-primary bg-primary text-white w-100' href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_candidate_skill", ["id" => twig_get_attribute($this->env, $this->source, $context["candidate"], "getId", [], "method", false, false, false, 77)]), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"nav-icon fas fa-cogs\"></i> Voir les compétences</a></td>
                <td><a class='btn btn-success bg-success text-white w-100' href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cv/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "document", [], "any", false, false, false, 78), "getCvFilename", [], "method", false, false, false, 78))), "html", null, true);
            echo "\" target=\"_blank\"><i class='bx bx-download me-1'></i> Télécharger le CV</a></td>
                <td><a class='btn btn-success bg-success text-white w-100' href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/lm/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "document", [], "any", false, false, false, 79), "getLmFilename", [], "method", false, false, false, 79))), "html", null, true);
            echo "\" target=\"_blank\"><i class='bx bx-download me-1'></i> Télécharger la LM</a></td>
                <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "    </tbody>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/tables/candidate/_index.html.twig";
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
        return array (  242 => 83,  232 => 79,  228 => 78,  224 => 77,  220 => 76,  216 => 75,  212 => 74,  208 => 73,  204 => 72,  201 => 71,  197 => 70,  191 => 68,  189 => 67,  185 => 66,  181 => 65,  177 => 64,  173 => 63,  169 => 62,  165 => 61,  161 => 60,  157 => 59,  153 => 58,  149 => 57,  145 => 56,  139 => 55,  135 => 54,  132 => 53,  128 => 52,  122 => 50,  120 => 49,  117 => 48,  113 => 47,  107 => 45,  105 => 44,  101 => 43,  97 => 42,  93 => 41,  89 => 40,  85 => 39,  82 => 38,  78 => 37,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/tables/candidate/_index.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\back\\partials\\tables\\candidate\\_index.html.twig");
    }
}
