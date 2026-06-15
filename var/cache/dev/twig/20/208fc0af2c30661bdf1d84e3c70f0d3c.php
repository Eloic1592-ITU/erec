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
class __TwigTemplate_1adeec1494c92c7910ef0b23e97f4006 extends Template
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

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/tables/candidate/_index.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["candidates"]) || array_key_exists("candidates", $context) ? $context["candidates"] : (function () { throw new RuntimeError('Variable "candidates" does not exist.', 37, $this->source); })()));
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  245 => 83,  235 => 79,  231 => 78,  227 => 77,  223 => 76,  219 => 75,  215 => 74,  211 => 73,  207 => 72,  204 => 71,  200 => 70,  194 => 68,  192 => 67,  188 => 66,  184 => 65,  180 => 64,  176 => 63,  172 => 62,  168 => 61,  164 => 60,  160 => 59,  156 => 58,  152 => 57,  148 => 56,  142 => 55,  138 => 54,  135 => 53,  131 => 52,  125 => 50,  123 => 49,  120 => 48,  116 => 47,  110 => 45,  108 => 44,  104 => 43,  100 => 42,  96 => 41,  92 => 40,  88 => 39,  85 => 38,  81 => 37,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table id=\"data-list\" class=\"table table-striped nowrap\" style=\"width: 100%\">
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
        {% for candidate in candidates %}
            <tr>
                <td>{{ candidate.getId() }}</td>
                <td>{{ candidate.profile.civility.getName() }}</td>
                <td>{{ candidate.getLastName() }}</td>
                <td>{{ candidate.getFirstName() }}</td>
                <td>{{ candidate.referencePosition.name }}</td>
                {% if candidate.engagement.getSecondPosition() %}
                    <td>{{ candidate.engagement.getSecondPosition() }}</td>
                {% else %}
                    <td>Aucun</td>
                {% endif %} 
                {% if candidate.engagement.getThirdPosition() %}
                    <td>{{ candidate.engagement.getThirdPosition() }}</td>
                {% else %}
                    <td>Aucun</td>
                {% endif %} 
                <td>{{ candidate.getBirthDate()|date('d/m/Y') }}</td>
                <td>{{ candidate.profile.getBirthCity() }} - {{ candidate.profile.getBirthCountry() }}</td>
                <td>{{ candidate.getCin() }}</td>
                <td>{{ candidate.profile.getCinIssueDate()|date('d/m/Y') }}</td>
                <td>{{ candidate.profile.getCinIssuePlace() }}</td>
                <td>{{ candidate.profile.getAddress() }}</td>
                <td>{{ candidate.profile.getPostalCode() }}</td>
                <td>{{ candidate.profile.getCity() }}</td>
                <td>{{ candidate.profile.getCountry() }}</td>
                <td>{{ candidate.profile.getNationality() }}</td>
                <td>{{ candidate.profile.maritalStatus.getName() }}</td>
                <td>{{ candidate.profile.getNumberOfChildren() }}</td>
                <td>{{ candidate.profile.getPhone1() }}</td>
                {% if candidate.profile.getPhone2() %}
                    <td>{{ candidate.profile.getPhone2() }}</td>
                {% else %}
                    <td>Aucun</td>
                {% endif %} 
                <td>{{ candidate.getEmail() }}</td>
                <td><a class='btn btn-primary bg-primary text-white w-100' href=\"{{path('admin_candidate_education', { 'id': candidate.getId() })}}\" target=\"_blank\"><i class=\"nav-icon fas fa-graduation-cap\"></i> Voir les diplômes</a></td>
                <td><a class='btn btn-primary bg-primary text-white w-100' href=\"{{path('admin_candidate_certification', { 'id': candidate.getId() })}}\" target=\"_blank\"><i class=\"nav-icon fas fa-certificate\"></i> Voir les certifications</a></td>
                <td><a class='btn btn-primary bg-primary text-white w-100' href=\"{{path('admin_candidate_internship', { 'id': candidate.getId() })}}\" target=\"_blank\"><i class=\"nav-icon fas fa-briefcase\"></i> Voir les stages</a></td>
                <td><a class='btn btn-primary bg-primary text-white w-100' href=\"{{path('admin_candidate_experience', { 'id': candidate.getId() })}}\" target=\"_blank\"><i class=\"nav-icon fas fa-briefcase\"></i> Voir les expériences</a></td>
                <td><a class='btn btn-primary bg-primary text-white w-100' href=\"{{path('admin_candidate_skill', { 'id': candidate.getId() })}}\" target=\"_blank\"><i class=\"nav-icon fas fa-cogs\"></i> Voir les compétences</a></td>
                <td><a class='btn btn-success bg-success text-white w-100' href=\"{{ asset('uploads/cv/' ~ candidate.document.getCvFilename()) }}\" target=\"_blank\"><i class='bx bx-download me-1'></i> Télécharger le CV</a></td>
                <td><a class='btn btn-success bg-success text-white w-100' href=\"{{ asset('uploads/lm/' ~ candidate.document.getLmFilename()) }}\" target=\"_blank\"><i class='bx bx-download me-1'></i> Télécharger la LM</a></td>
                <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
            </tr>
        {% endfor %}
    </tbody>
</table>", "back/partials/tables/candidate/_index.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\back\\partials\\tables\\candidate\\_index.html.twig");
    }
}
