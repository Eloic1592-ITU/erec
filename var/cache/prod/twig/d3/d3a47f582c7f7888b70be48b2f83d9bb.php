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

/* back/partials/tables/field-of-study/_index.html.twig */
class __TwigTemplate_70c44e9edee1fea65727778c0884a0ab extends Template
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
        <th>Statut</th>
        <th>Actions</th>
        <th>Détails</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allfieldOfStudy"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fieldOfStudy"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fieldOfStudy"], "getId", [], "method", false, false, false, 14), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fieldOfStudy"], "getName", [], "method", false, false, false, 15), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 17
            if ( !twig_get_attribute($this->env, $this->source, $context["fieldOfStudy"], "isDeleted", [], "method", false, false, false, 17)) {
                // line 18
                echo "                    <span class=\"badge text-bg-success rounded-pill\">Activé</span> 
                ";
            } else {
                // line 20
                echo "                    <span class=\"badge text-bg-danger rounded-pill\">Desactivé</span>
                ";
            }
            // line 22
            echo "            </td>
            <td>
                <div class=\"d-flex justify-content-end gap-1\">
                    <button 
                        class=\"btn-action bg-warning\" 
                        data-bs-toggle=\"modal\" 
                        data-bs-target=\"#field-of-study-";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fieldOfStudy"], "getId", [], "method", false, false, false, 28), "html", null, true);
            echo "\"
                    >
                        <i class=\"bx bx-edit\"></i> 
                        <span>Modifier</span>
                    </button>

                    ";
            // line 34
            if ( !twig_get_attribute($this->env, $this->source, $context["fieldOfStudy"], "isDeleted", [], "method", false, false, false, 34)) {
                // line 35
                echo "                        <button 
                            class=\"btn-action btn-state bg-danger delete-field-of-study\"
                            data-state=\"désactiver ce domaine d'études\" 
                            data-url=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_field_of_study_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["fieldOfStudy"], "getId", [], "method", false, false, false, 38)]), "html", null, true);
                echo "\"
                        >
                            <span>Désactiver</span>
                        </button>
                    ";
            } else {
                // line 43
                echo "                        <button 
                            class=\"btn-action btn-state bg-success delete-field-of-study\"
                            data-state=\"réactiver ce domaine d'études\" 
                            data-url=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_field_of_study_activate", ["id" => twig_get_attribute($this->env, $this->source, $context["fieldOfStudy"], "getId", [], "method", false, false, false, 46)]), "html", null, true);
                echo "\"
                        >
                            <span>Activer</span>
                        </button>
                    ";
            }
            // line 51
            echo "
                </div>
            </td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldOfStudy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </tbody>
</table>

";
        // line 61
        echo twig_include($this->env, $context, "back/partials/modals/_newFieldOfStudy.html.twig");
        echo "

";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fieldOfStudyForms"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["fieldOfStudyForm"]) {
            // line 65
            echo "    ";
            echo twig_include($this->env, $context, "back/partials/modals/_editFieldOfStudy.html.twig");
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldOfStudyForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/tables/field-of-study/_index.html.twig";
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
        return array (  159 => 65,  142 => 64,  137 => 61,  132 => 57,  121 => 51,  113 => 46,  108 => 43,  100 => 38,  95 => 35,  93 => 34,  84 => 28,  76 => 22,  72 => 20,  68 => 18,  66 => 17,  61 => 15,  57 => 14,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/tables/field-of-study/_index.html.twig", "/var/www/html/erecrutement/templates/back/partials/tables/field-of-study/_index.html.twig");
    }
}
