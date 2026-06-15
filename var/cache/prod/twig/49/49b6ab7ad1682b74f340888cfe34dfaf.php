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

/* back/partials/tables/candidate/_work_experiences.html.twig */
class __TwigTemplate_c36b5c618ac5d34cf0570a72af667e40 extends Template
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
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "getWorkExperiences", [], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["workExperience"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getId", [], "method", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getPosition", [], "method", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getOrganization", [], "method", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getLocation", [], "method", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getStartDate", [], "method", false, false, false, 25), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getEndDate", [], "method", false, false, false, 26), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferenceName", [], "method", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferencePosition", [], "method", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferenceEmail", [], "method", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferencePhone", [], "method", false, false, false, 30), "html", null, true);
            echo "</td>
                <td><a class='btn btn-success bg-success text-white w-100' href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attestation-de-travail/" . twig_get_attribute($this->env, $this->source, $context["workExperience"], "getWorkFilename", [], "method", false, false, false, 31))), "html", null, true);
            echo "\" target=\"_blank\"><i class='bx bx-download me-1'></i> Télécharger l'attestation de travail</a></td>
                <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workExperience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
</table>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/tables/candidate/_work_experiences.html.twig";
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
        return array (  114 => 35,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  68 => 22,  64 => 21,  61 => 20,  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/tables/candidate/_work_experiences.html.twig", "/var/www/html/erecrutement/templates/back/partials/tables/candidate/_work_experiences.html.twig");
    }
}
