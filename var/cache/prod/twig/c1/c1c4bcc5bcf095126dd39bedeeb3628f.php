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

/* back/partials/tables/certification/_index.html.twig */
class __TwigTemplate_c7674b41fb3433e1050a8237388fb4c2 extends Template
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
            <th>Certificat / Attestation</th>
            <th>Spécialitér</th>
            <th>Etablissement / Institution</th>
            <th>Année d'obtention</th>
            <th>Propriétaire</th>
            <th>Télécharger</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["certifications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["certification"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certification"], "getId", [], "method", false, false, false, 17), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certification"], "getCertification", [], "method", false, false, false, 18), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certification"], "getSpecialty", [], "method", false, false, false, 19), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certification"], "getInstitution", [], "method", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certification"], "getCertificationYear", [], "method", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["certification"], "user", [], "any", false, false, false, 22), "getLastName", [], "method", false, false, false, 22), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["certification"], "user", [], "any", false, false, false, 22), "getFirstName", [], "method", false, false, false, 22), "html", null, true);
            echo "</td>
                <td><a class='btn btn-success bg-success text-white w-100' href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/certification/" . twig_get_attribute($this->env, $this->source, $context["certification"], "getCertificationFilename", [], "method", false, false, false, 23))), "html", null, true);
            echo "\" target=\"_blank\"><i class='bx bx-download me-1'></i> Télécharger le certificat / attestation</a></td>
                <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </tbody>
</table>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/tables/certification/_index.html.twig";
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
        return array (  96 => 27,  86 => 23,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/tables/certification/_index.html.twig", "/var/www/html/erecrutement/templates/back/partials/tables/certification/_index.html.twig");
    }
}
