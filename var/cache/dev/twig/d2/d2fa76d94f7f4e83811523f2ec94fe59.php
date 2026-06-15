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

/* back/partials/tables/education/_index.html.twig */
class __TwigTemplate_4122e1129e52b07c1fc56476eef124b2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/tables/education/_index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/tables/education/_index.html.twig"));

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
            <th>Propriétaire</th>
            <th>Télécharger</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educations"]) || array_key_exists("educations", $context) ? $context["educations"] : (function () { throw new RuntimeError('Variable "educations" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["education"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getId", [], "method", false, false, false, 18), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["education"], "degree", [], "any", false, false, false, 19), "getName", [], "method", false, false, false, 19), "html", null, true);
            echo "</td>
                ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, $context["education"], "getOtherFieldOfStudy", [], "method", false, false, false, 20)) {
                // line 21
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getOtherFieldOfStudy", [], "method", false, false, false, 21), "html", null, true);
                echo "</td>
                ";
            } else {
                // line 23
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["education"], "fieldOfStudy", [], "any", false, false, false, 23), "getName", [], "method", false, false, false, 23), "html", null, true);
                echo "</td>
                ";
            }
            // line 25
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getSpecialty", [], "method", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getInstitution", [], "method", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getGraduationYear", [], "method", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["education"], "user", [], "any", false, false, false, 28), "getLastName", [], "method", false, false, false, 28), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["education"], "user", [], "any", false, false, false, 28), "getFirstName", [], "method", false, false, false, 28), "html", null, true);
            echo "</td>
                <td><a class='btn btn-success bg-success text-white w-100' href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/diplome/" . twig_get_attribute($this->env, $this->source, $context["education"], "getDegreeFilename", [], "method", false, false, false, 29))), "html", null, true);
            echo "\" target=\"_blank\"><i class='bx bx-download me-1'></i> Télécharger le diplôme</a></td>
                <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['education'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
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
        return "back/partials/tables/education/_index.html.twig";
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
        return array (  118 => 33,  108 => 29,  102 => 28,  98 => 27,  94 => 26,  89 => 25,  83 => 23,  77 => 21,  75 => 20,  71 => 19,  67 => 18,  64 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table id=\"data-list\" class=\"table table-striped nowrap\" style=\"width: 100%\">
    <thead>
        <tr>
            <th>ID</th>
            <th>Diplôme</th>
            <th>Filière / Domaine</th>
            <th>Spécialité / Option</th>
            <th>Etablissement / Institution</th>
            <th>Année d'obtention du diplôme</th>
            <th>Propriétaire</th>
            <th>Télécharger</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        {% for education in educations %}
            <tr>
                <td>{{ education.getId() }}</td>
                <td>{{ education.degree.getName() }}</td>
                {% if education.getOtherFieldOfStudy() %}
                    <td>{{ education.getOtherFieldOfStudy() }}</td>
                {% else %}
                    <td>{{ education.fieldOfStudy.getName() }}</td>
                {% endif %}
                <td>{{ education.getSpecialty() }}</td>
                <td>{{ education.getInstitution() }}</td>
                <td>{{ education.getGraduationYear() }}</td>
                <td>{{ education.user.getLastName() }} {{ education.user.getFirstName() }}</td>
                <td><a class='btn btn-success bg-success text-white w-100' href=\"{{ asset('uploads/diplome/' ~ education.getDegreeFilename()) }}\" target=\"_blank\"><i class='bx bx-download me-1'></i> Télécharger le diplôme</a></td>
                <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
            </tr>
        {% endfor %}
    </tbody>
</table>", "back/partials/tables/education/_index.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\back\\partials\\tables\\education\\_index.html.twig");
    }
}
