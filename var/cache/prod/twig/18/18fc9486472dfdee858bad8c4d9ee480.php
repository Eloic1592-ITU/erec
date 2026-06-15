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

/* back/partials/tables/user/_index.html.twig */
class __TwigTemplate_42a404be1e34684537bbd97e22480d24 extends Template
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
        <th>Nom</th>
        <th>Prénom(s)</th>
        <th>Date de Naissance</th>
        <th>Email</th>
        <th>CIN</th>
        <th>Roles</th>
        <th>Statut</th>
        <th>Actions</th>
        <th>Détails</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "        <tr>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 19), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getLastName", [], "method", false, false, false, 20), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getFirstName", [], "method", false, false, false, 21), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getBirthDate", [], "method", false, false, false, 22), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getEmail", [], "method", false, false, false, 23), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getCin", [], "method", false, false, false, 24), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 26
            $context["roles"] = twig_get_attribute($this->env, $this->source, $context["user"], "getRoles", [], "method", false, false, false, 26);
            // line 27
            echo "
                ";
            // line 28
            if ((twig_length_filter($this->env, ($context["roles"] ?? null)) > 1)) {
                // line 29
                echo "                    Administrateur
                ";
            } else {
                // line 31
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["user"], "getHasSubmittedApplication", [], "method", false, false, false, 31)) {
                    // line 32
                    echo "                        Candidat
                    ";
                } else {
                    // line 34
                    echo "                        Utilisateur
                    ";
                }
                // line 36
                echo "                ";
            }
            // line 37
            echo "            </td>
            <td>
                ";
            // line 39
            if ( !twig_get_attribute($this->env, $this->source, $context["user"], "isDeleted", [], "method", false, false, false, 39)) {
                // line 40
                echo "                    <span class=\"badge text-bg-success rounded-pill\">Activé</span> 
                ";
            } else {
                // line 42
                echo "                    <span class=\"badge text-bg-danger rounded-pill\">Desactivé</span>
                ";
            }
            // line 44
            echo "            </td>
            <td>
                <div class=\"d-flex justify-content-center gap-1\">
                    ";
            // line 47
            if ((twig_length_filter($this->env, ($context["roles"] ?? null)) > 1)) {
                // line 48
                echo "                        ";
                // line 49
                echo "                    ";
            } else {
                // line 50
                echo "                        ";
                if ( !twig_get_attribute($this->env, $this->source, $context["user"], "isDeleted", [], "method", false, false, false, 50)) {
                    // line 51
                    echo "                            <button 
                                class=\"btn-action btn-state bg-danger delete-user\"
                                data-state=\"désactiver cet utilisateur\" 
                                data-url=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 54)]), "html", null, true);
                    echo "\"
                            >
                                <span>Désactiver</span>
                            </button>
                        ";
                } else {
                    // line 59
                    echo "                            <button 
                                class=\"btn-action btn-state bg-success delete-user\"
                                data-state=\"réactiver cet utilisateur\" 
                                data-url=\"";
                    // line 62
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_activate", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 62)]), "html", null, true);
                    echo "\"
                            >
                                <span>Activer</span>
                            </button>
                        ";
                }
                // line 67
                echo "                    ";
            }
            // line 68
            echo "                </div>
            </td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    </tbody>
</table>

";
        // line 76
        echo twig_include($this->env, $context, "partials/modals/_positions.html.twig");
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/tables/user/_index.html.twig";
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
        return array (  185 => 76,  180 => 73,  170 => 68,  167 => 67,  159 => 62,  154 => 59,  146 => 54,  141 => 51,  138 => 50,  135 => 49,  133 => 48,  131 => 47,  126 => 44,  122 => 42,  118 => 40,  116 => 39,  112 => 37,  109 => 36,  105 => 34,  101 => 32,  98 => 31,  94 => 29,  92 => 28,  89 => 27,  87 => 26,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  59 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/tables/user/_index.html.twig", "/var/www/html/erecrutement/templates/back/partials/tables/user/_index.html.twig");
    }
}
