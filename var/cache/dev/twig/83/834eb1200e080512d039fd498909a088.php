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
class __TwigTemplate_7ee41fd9561d5e6e7b2efe9a6c8004ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/tables/position/_index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/tables/position/_index.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["positions"]) || array_key_exists("positions", $context) ? $context["positions"] : (function () { throw new RuntimeError('Variable "positions" does not exist.', 13, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["positionForms"]) || array_key_exists("positionForms", $context) ? $context["positionForms"] : (function () { throw new RuntimeError('Variable "positionForms" does not exist.', 65, $this->source); })()));
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  169 => 66,  152 => 65,  147 => 62,  142 => 58,  132 => 53,  124 => 48,  119 => 45,  111 => 40,  106 => 37,  104 => 36,  95 => 30,  87 => 24,  83 => 22,  79 => 20,  77 => 19,  72 => 17,  68 => 16,  64 => 15,  61 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table id=\"data-list\" class=\"table table-striped nowrap\" style=\"width: 100%\">
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
    {% for position in positions %}
        <tr>
            <td>{{ position.getId() }}</td>
            <td>{{ position.getReference() }}</td>
            <td>{{ position.getName() }}</td>
            <td>
                {% if not position.isDeleted() %}
                    <span class=\"badge text-bg-success rounded-pill\">Activé</span> 
                {% else %}
                    <span class=\"badge text-bg-danger rounded-pill\">Desactivé</span>
                {% endif %}
            </td>
            <td>
                <div class=\"d-flex justify-content-end gap-1\">
                    <button 
                        class=\"btn-action bg-warning\" 
                        data-bs-toggle=\"modal\" 
                        data-bs-target=\"#position-{{ position.getId() }}\"
                    >
                        <i class=\"bx bx-edit\"></i> 
                        <span>Modifier</span>
                    </button>

                    {% if not position.isDeleted() %}
                        <button 
                            class=\"btn-action btn-state bg-danger delete-position\"
                            data-state=\"désactiver ce poste\" 
                            data-url=\"{{ path('admin_position_disable', {'id': position.getId()}) }}\"
                        >
                            <span>Désactiver</span>
                        </button>
                    {% else %}
                        <button 
                            class=\"btn-action btn-state bg-success delete-position\"
                            data-state=\"réactiver ce poste\" 
                            data-url=\"{{ path('admin_position_activate', {'id': position.getId()}) }}\"
                        >
                            <span>Activer</span>
                        </button>
                    {% endif %}
                </div>
            </td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
    {% endfor %}
    </tbody>
</table>

{# Modal for Adding new item #}
{{ include('back/partials/modals/_newPosition.html.twig') }}

{# Modals for Editing each items #}
{% for positionForm in positionForms %}
    {{ include('back/partials/modals/_editPosition.html.twig') }}
{% endfor %}", "back/partials/tables/position/_index.html.twig", "/var/www/html/erecrutement/templates/back/partials/tables/position/_index.html.twig");
    }
}
