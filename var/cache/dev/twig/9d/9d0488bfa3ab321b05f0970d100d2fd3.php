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

/* back/partials/tables/work-experience/_index.html.twig */
class __TwigTemplate_4a145a532ed451c95e10f6b2474db7f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/tables/work-experience/_index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/tables/work-experience/_index.html.twig"));

        // line 1
        echo "<table id=\"data-list\" class=\"table table-striped nowrap\" style=\"width: 100%\">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom complet</th>
            <th>Poste occupé</th>
            <th>Organisme ou Société</th>
            <th>Lieu</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Personne de référence</th>
            <th>Fonction de la personne de référence</th>
            <th>e-mail de la personne de référence</th>
            <th>Téléphone de la personne de référence</th>
            <th>Attestation de travail</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experiences"]) || array_key_exists("experiences", $context) ? $context["experiences"] : (function () { throw new RuntimeError('Variable "experiences" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["workExperience"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getId", [], "method", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["workExperience"], "user", [], "any", false, false, false, 23), "getLastName", [], "method", false, false, false, 23), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["workExperience"], "user", [], "any", false, false, false, 23), "getFirstName", [], "method", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getPosition", [], "method", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getOrganization", [], "method", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getLocation", [], "method", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getStartDate", [], "method", false, false, false, 27), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getEndDate", [], "method", false, false, false, 28), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferenceName", [], "method", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferencePosition", [], "method", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferenceEmail", [], "method", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferencePhone", [], "method", false, false, false, 32), "html", null, true);
            echo "</td>
                <td><a class='btn btn-success bg-success text-white w-100' href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation-de-travail/" . twig_get_attribute($this->env, $this->source, $context["workExperience"], "getWorkFilename", [], "method", false, false, false, 33))), "html", null, true);
            echo "\" target=\"_blank\"><i class='bx bx-download me-1'></i> Télécharger l'attestation de travail</a></td>
                <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workExperience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
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
        return "back/partials/tables/work-experience/_index.html.twig";
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
        return array (  127 => 37,  117 => 33,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  75 => 23,  71 => 22,  68 => 21,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table id=\"data-list\" class=\"table table-striped nowrap\" style=\"width: 100%\">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom complet</th>
            <th>Poste occupé</th>
            <th>Organisme ou Société</th>
            <th>Lieu</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Personne de référence</th>
            <th>Fonction de la personne de référence</th>
            <th>e-mail de la personne de référence</th>
            <th>Téléphone de la personne de référence</th>
            <th>Attestation de travail</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        {% for workExperience in experiences %}
            <tr>
                <td>{{ workExperience.getId() }}</td>
                <td>{{ workExperience.user.getLastName() }} {{ workExperience.user.getFirstName() }}</td>
                <td>{{ workExperience.getPosition() }}</td>
                <td>{{ workExperience.getOrganization() }}</td>
                <td>{{ workExperience.getLocation() }}</td>
                <td>{{ workExperience.getStartDate()|date('d/m/Y') }}</td>
                <td>{{ workExperience.getEndDate()|date('d/m/Y') }}</td>
                <td>{{ workExperience.getReferenceName() }}</td>
                <td>{{ workExperience.getReferencePosition() }}</td>
                <td>{{ workExperience.getReferenceEmail() }}</td>
                <td>{{ workExperience.getReferencePhone() }}</td>
                <td><a class='btn btn-success bg-success text-white w-100' href=\"{{ asset('uploads/attestation-de-travail/' ~ workExperience.getWorkFilename()) }}\" target=\"_blank\"><i class='bx bx-download me-1'></i> Télécharger l'attestation de travail</a></td>
                <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
            </tr>
        {% endfor %}
    </tbody>
</table>", "back/partials/tables/work-experience/_index.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\back\\partials\\tables\\work-experience\\_index.html.twig");
    }
}
