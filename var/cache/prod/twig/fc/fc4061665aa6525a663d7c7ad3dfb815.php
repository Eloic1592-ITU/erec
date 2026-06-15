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
class __TwigTemplate_9a5a47ee2a3625c2a459d96ea4c971ce extends Template
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
        $context['_seq'] = twig_ensure_traversable(($context["positions"] ?? null));
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
        return array (  78 => 23,  66 => 17,  60 => 14,  56 => 13,  53 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/tables/state/_index.html.twig", "/var/www/html/erecrutement/templates/back/partials/tables/state/_index.html.twig");
    }
}
