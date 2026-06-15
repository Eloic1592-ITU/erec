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

/* back/partials/tables/internship/_index.html.twig */
class __TwigTemplate_09ece070ef2e499ee44def9ba521d85a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/tables/internship/_index.html.twig"));

        // line 1
        echo "<table id=\"data-list\" class=\"table table-striped nowrap\" style=\"width: 100%\">
    <thead>
        <tr>
            <th>ID</th>
            <th>Thème</th>
            <th>Organisation ou Société</th>
            <th>Année de stage</th>
            <th>Durée</th> 
            <th>Le Stagiaire</th> 
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["internships"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["internship"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getId", [], "method", false, false, false, 16), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getTheme", [], "method", false, false, false, 17), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getOrganization", [], "method", false, false, false, 18), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getInternshipYear", [], "method", false, false, false, 19), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getDuration", [], "method", false, false, false, 20), "html", null, true);
            echo " mois</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["internship"], "user", [], "any", false, false, false, 21), "getLastName", [], "method", false, false, false, 21), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["internship"], "user", [], "any", false, false, false, 21), "getFirstName", [], "method", false, false, false, 21), "html", null, true);
            echo "</td>
                <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['internship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </tbody>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/tables/internship/_index.html.twig";
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
        return array (  94 => 25,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  59 => 15,  55 => 14,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/tables/internship/_index.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\back\\partials\\tables\\internship\\_index.html.twig");
    }
}
