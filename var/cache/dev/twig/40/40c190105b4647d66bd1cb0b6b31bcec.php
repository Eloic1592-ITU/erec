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

/* back/partials/tables/candidate/_skills_microsoft.html.twig */
class __TwigTemplate_50fdd7574b24e8f26ab0400ff282eea7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/tables/candidate/_skills_microsoft.html.twig"));

        // line 1
        echo "<table id=\"data-list-skills-microsoft\" class=\"table table-striped nowrap\" style=\"width: 100%\">
    <thead>
        <tr>
            <th style=\"width: 50%\">Tech Microsoft</th>
            <th style=\"width: 50%\">Niveau</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Microsoft Word</td>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 12), "getMicrosoftWordLevel", [], "method", false, false, false, 12), "html", null, true);
        echo "</td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
        <tr>
            <td>Microsoft Excel</td>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 17), "getMicrosoftExcelLevel", [], "method", false, false, false, 17), "html", null, true);
        echo "</td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
        <tr>
            <td>Microsoft PowerPoint</td>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 22), "getMicrosoftPowerPointLevel", [], "method", false, false, false, 22), "html", null, true);
        echo "</td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
        <tr>
            <td>Microsoft OneNote</td>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 27), "getMicrosoftOneNoteLevel", [], "method", false, false, false, 27), "html", null, true);
        echo "</td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
        <tr>
            <td>Microsoft Outlook</td>
            <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 32), "getMicrosoftOutlookLevel", [], "method", false, false, false, 32), "html", null, true);
        echo "</td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
        <tr>
            <td>Microsoft Publisher</td>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 37), "getMicrosoftPublisherLevel", [], "method", false, false, false, 37), "html", null, true);
        echo "</td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
        <tr>
            <td>Microsoft Access</td>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 42), "getMicrosoftAccessLevel", [], "method", false, false, false, 42), "html", null, true);
        echo "</td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
        <tr>
            <td>Microsoft Visio</td>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 47), "getMicrosoftVisioLevel", [], "method", false, false, false, 47), "html", null, true);
        echo "</td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
        <tr>
            <td>Microsoft Project</td>
            <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 52), "getMicrosoftProjectLevel", [], "method", false, false, false, 52), "html", null, true);
        echo "</td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
    </tbody>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/tables/candidate/_skills_microsoft.html.twig";
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
        return array (  117 => 52,  109 => 47,  101 => 42,  93 => 37,  85 => 32,  77 => 27,  69 => 22,  61 => 17,  53 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/tables/candidate/_skills_microsoft.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\back\\partials\\tables\\candidate\\_skills_microsoft.html.twig");
    }
}
