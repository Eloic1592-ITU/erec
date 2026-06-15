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

/* back/partials/tables/position/_index.html.twig */
class __TwigTemplate_f4eb1a5f80ef61c04c1f0016a0a05fc4 extends Template
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
        <th>Reference</th>
        <th>Nom</th>
        <th>Statut</th>
        <th>Actions</th>
        <th>Détails</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["positions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 14
            echo "        <tr>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "getId", [], "method", false, false, false, 15), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "getReference", [], "method", false, false, false, 16), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "getName", [], "method", false, false, false, 17), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 19
            if ( !twig_get_attribute($this->env, $this->source, $context["position"], "isDeleted", [], "method", false, false, false, 19)) {
                // line 20
                echo "                    <span class=\"badge text-bg-success rounded-pill\">Activé</span> 
                ";
            } else {
                // line 22
                echo "                    <span class=\"badge text-bg-danger rounded-pill\">Desactivé</span>
                ";
            }
            // line 24
            echo "            </td>
            <td>
                <div class=\"d-flex justify-content-end gap-1\">
                    <button 
                        class=\"btn-action bg-warning\" 
                        data-bs-toggle=\"modal\" 
                        data-bs-target=\"#position-";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "getId", [], "method", false, false, false, 30), "html", null, true);
            echo "\"
                    >
                        <i class=\"bx bx-edit\"></i> 
                        <span>Modifier</span>
                    </button>

                    ";
            // line 36
            if ( !twig_get_attribute($this->env, $this->source, $context["position"], "isDeleted", [], "method", false, false, false, 36)) {
                // line 37
                echo "                        <button 
                            class=\"btn-action btn-state bg-danger delete-position\"
                            data-state=\"désactiver ce poste\" 
                            data-url=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_position_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["position"], "getId", [], "method", false, false, false, 40)]), "html", null, true);
                echo "\"
                        >
                            <span>Désactiver</span>
                        </button>
                    ";
            } else {
                // line 45
                echo "                        <button 
                            class=\"btn-action btn-state bg-success delete-position\"
                            data-state=\"réactiver ce poste\" 
                            data-url=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_position_activate", ["id" => twig_get_attribute($this->env, $this->source, $context["position"], "getId", [], "method", false, false, false, 48)]), "html", null, true);
                echo "\"
                        >
                            <span>Activer</span>
                        </button>
                    ";
            }
            // line 53
            echo "                </div>
            </td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </tbody>
</table>

";
        // line 62
        echo twig_include($this->env, $context, "back/partials/modals/_newPosition.html.twig");
        echo "

";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["positionForms"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["positionForm"]) {
            // line 66
            echo "    ";
            echo twig_include($this->env, $context, "back/partials/modals/_editPosition.html.twig");
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['positionForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/tables/position/_index.html.twig";
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
        return array (  163 => 66,  146 => 65,  141 => 62,  136 => 58,  126 => 53,  118 => 48,  113 => 45,  105 => 40,  100 => 37,  98 => 36,  89 => 30,  81 => 24,  77 => 22,  73 => 20,  71 => 19,  66 => 17,  62 => 16,  58 => 15,  55 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/tables/position/_index.html.twig", "/var/www/html/erecrutement/templates/back/partials/tables/position/_index.html.twig");
    }
}
