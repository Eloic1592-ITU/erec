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
class __TwigTemplate_846e4329d99f9fe2165a36e42fc22418 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/tables/user/_index.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  188 => 76,  183 => 73,  173 => 68,  170 => 67,  162 => 62,  157 => 59,  149 => 54,  144 => 51,  141 => 50,  138 => 49,  136 => 48,  134 => 47,  129 => 44,  125 => 42,  121 => 40,  119 => 39,  115 => 37,  112 => 36,  108 => 34,  104 => 32,  101 => 31,  97 => 29,  95 => 28,  92 => 27,  90 => 26,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  62 => 18,  58 => 17,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/tables/user/_index.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\back\\partials\\tables\\user\\_index.html.twig");
    }
}
