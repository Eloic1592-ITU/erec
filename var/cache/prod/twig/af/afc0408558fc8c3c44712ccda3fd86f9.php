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

/* back/partials/tables/candidate/_skills_language.html.twig */
class __TwigTemplate_df8945ef1b9c4b23dc682a383806019a extends Template
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
        echo "<table id=\"data-list-skills-language\" class=\"table table-striped nowrap\" style=\"width: 100%\">
    <thead>
        <tr>
            <th>Langue</th>
            <th>Niveau de lecture</th>
            <th>Communication écrite</th>
            <th>Communication orale</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Malagasy</td>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 14), "getMalagasyReadingLevel", [], "method", false, false, false, 14), "html", null, true);
        echo "</td>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 15), "getMalagasyWritingLevel", [], "method", false, false, false, 15), "html", null, true);
        echo "</td>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 16), "getMalagasySpeakingLevel", [], "method", false, false, false, 16), "html", null, true);
        echo "</td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
        <tr>
            <td>Français</td>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 21), "getFrenchReadingLevel", [], "method", false, false, false, 21), "html", null, true);
        echo "</td>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 22), "getFrenchWritingLevel", [], "method", false, false, false, 22), "html", null, true);
        echo "</td>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 23), "getFrenchSpeakingLevel", [], "method", false, false, false, 23), "html", null, true);
        echo "</td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
        <tr>
            <td>Anglais</td>
            <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 28), "getEnglishReadingLevel", [], "method", false, false, false, 28), "html", null, true);
        echo "</td>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 29), "getEnglishWritingLevel", [], "method", false, false, false, 29), "html", null, true);
        echo "</td>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 30), "getEnglishSpeakingLevel", [], "method", false, false, false, 30), "html", null, true);
        echo "</td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>

        ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 34), "getOtherLanguageName", [], "method", false, false, false, 34)) {
            // line 35
            echo "        <tr>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 36), "getOtherLanguageName", [], "method", false, false, false, 36), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 37), "getOtherLanguageReadingLevel", [], "method", false, false, false, 37), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 38), "getOtherLanguageWritingLevel", [], "method", false, false, false, 38), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 39), "getOtherLanguageSpeakingLevel", [], "method", false, false, false, 39), "html", null, true);
            echo "</td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
        ";
        }
        // line 43
        echo "    </tbody>
</table>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/tables/candidate/_skills_language.html.twig";
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
        return array (  123 => 43,  116 => 39,  112 => 38,  108 => 37,  104 => 36,  101 => 35,  99 => 34,  92 => 30,  88 => 29,  84 => 28,  76 => 23,  72 => 22,  68 => 21,  60 => 16,  56 => 15,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/tables/candidate/_skills_language.html.twig", "/var/www/html/erecrutement/templates/back/partials/tables/candidate/_skills_language.html.twig");
    }
}
