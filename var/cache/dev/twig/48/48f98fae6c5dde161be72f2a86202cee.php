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

/* back/partials/tables/state/_index.html.twig */
class __TwigTemplate_dba08cc979ec9c7e28e65fd3d2988964 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/tables/state/_index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/tables/state/_index.html.twig"));

        // line 1
        echo "<table id=\"data-list-state\" class=\"table table-striped nowrap\" style=\"width: 100%\">
    <thead>
    <tr>
        <th>Postes</th>
        <th>Nombre de candidats</th>
        <th>Télécharger la liste des candidats</th>
        <th>Détails</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["positions"]) || array_key_exists("positions", $context) ? $context["positions"] : (function () { throw new RuntimeError('Variable "positions" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 12
            echo "        <tr>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "getName", [], "method", false, false, false, 13), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "getSubmittedApplicationCount", [], "method", false, false, false, 14), "html", null, true);
            echo "</td>
            <td>
                <div class=\"d-flex justify-content-end\">
                    <a class=\"btn btn-success btn-sm bg-success text-white\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_candidate_state_export", ["id" => twig_get_attribute($this->env, $this->source, $context["position"], "getId", [], "method", false, false, false, 17)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class='bx bx-download me-1'></i> Télécharger</a>
                </div>
            </td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
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
        return "back/partials/tables/state/_index.html.twig";
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
        return array (  84 => 23,  72 => 17,  66 => 14,  62 => 13,  59 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table id=\"data-list-state\" class=\"table table-striped nowrap\" style=\"width: 100%\">
    <thead>
    <tr>
        <th>Postes</th>
        <th>Nombre de candidats</th>
        <th>Télécharger la liste des candidats</th>
        <th>Détails</th>
    </tr>
    </thead>
    <tbody>
    {% for position in positions %}
        <tr>
            <td>{{ position.getName() }}</td>
            <td>{{ position.getSubmittedApplicationCount() }}</td>
            <td>
                <div class=\"d-flex justify-content-end\">
                    <a class=\"btn btn-success btn-sm bg-success text-white\" href=\"{{ path('admin_candidate_state_export', {'id': position.getId()}) }}\" class=\"btn btn-primary\"><i class='bx bx-download me-1'></i> Télécharger</a>
                </div>
            </td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
    {% endfor %}
    </tbody>
</table>", "back/partials/tables/state/_index.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\back\\partials\\tables\\state\\_index.html.twig");
    }
}
