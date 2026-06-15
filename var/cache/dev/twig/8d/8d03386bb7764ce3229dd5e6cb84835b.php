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

/* back/partials/tables/skill/_index.html.twig */
class __TwigTemplate_82101918fd689ce844b392d90a37391e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/tables/skill/_index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/tables/skill/_index.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) || array_key_exists("skills", $context) ? $context["skills"] : (function () { throw new RuntimeError('Variable "skills" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "getId", [], "method", false, false, false, 14), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "getName", [], "method", false, false, false, 15), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 17
            if ( !twig_get_attribute($this->env, $this->source, $context["skill"], "isDeleted", [], "method", false, false, false, 17)) {
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
                        data-bs-target=\"#skill-";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "getId", [], "method", false, false, false, 28), "html", null, true);
            echo "\"
                    >
                        <i class=\"bx bx-edit\"></i> 
                        <span>Modifier</span>
                    </button>

                    ";
            // line 34
            if ( !twig_get_attribute($this->env, $this->source, $context["skill"], "isDeleted", [], "method", false, false, false, 34)) {
                // line 35
                echo "                        <button 
                            class=\"btn-action btn-state bg-danger delete-skill\"
                            data-state=\"désactiver cette compétence\" 
                            data-url=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_skill_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["skill"], "getId", [], "method", false, false, false, 38)]), "html", null, true);
                echo "\"
                        >
                            <span>Désactiver</span>
                        </button>
                    ";
            } else {
                // line 43
                echo "                        <button 
                            class=\"btn-action btn-state bg-success delete-skill\"
                            data-state=\"réactiver cette compétence\" 
                            data-url=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_skill_activate", ["id" => twig_get_attribute($this->env, $this->source, $context["skill"], "getId", [], "method", false, false, false, 46)]), "html", null, true);
                echo "\"
                        >
                            <span>Activer</span>
                        </button>
                    ";
            }
            // line 51
            echo "                </div>
            </td>
            <td><a class='btn btn-warning btn-sm bg-warning text-white w-100' href='#'><i class='bx bx-info-circle me-2'></i>Voir plus</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </tbody>
</table>

";
        // line 60
        echo twig_include($this->env, $context, "back/partials/modals/_newSkill.html.twig");
        echo "

";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skillForms"]) || array_key_exists("skillForms", $context) ? $context["skillForms"] : (function () { throw new RuntimeError('Variable "skillForms" does not exist.', 63, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["skillForm"]) {
            // line 64
            echo "    ";
            echo twig_include($this->env, $context, "back/partials/modals/_editSkill.html.twig");
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skillForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/tables/skill/_index.html.twig";
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
        return array (  164 => 64,  147 => 63,  142 => 60,  137 => 56,  127 => 51,  119 => 46,  114 => 43,  106 => 38,  101 => 35,  99 => 34,  90 => 28,  82 => 22,  78 => 20,  74 => 18,  72 => 17,  67 => 15,  63 => 14,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table id=\"data-list\" class=\"table table-striped nowrap\" style=\"width: 100%\">
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
    {% for skill in skills %}
        <tr>
            <td>{{ skill.getId() }}</td>
            <td>{{ skill.getName() }}</td>
            <td>
                {% if not skill.isDeleted() %}
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
                        data-bs-target=\"#skill-{{ skill.getId() }}\"
                    >
                        <i class=\"bx bx-edit\"></i> 
                        <span>Modifier</span>
                    </button>

                    {% if not skill.isDeleted() %}
                        <button 
                            class=\"btn-action btn-state bg-danger delete-skill\"
                            data-state=\"désactiver cette compétence\" 
                            data-url=\"{{ path('admin_skill_disable', {'id': skill.getId()}) }}\"
                        >
                            <span>Désactiver</span>
                        </button>
                    {% else %}
                        <button 
                            class=\"btn-action btn-state bg-success delete-skill\"
                            data-state=\"réactiver cette compétence\" 
                            data-url=\"{{ path('admin_skill_activate', {'id': skill.getId()}) }}\"
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
{{ include('back/partials/modals/_newSkill.html.twig') }}

{# Modals for Editing each items #}
{% for skillForm in skillForms %}
    {{ include('back/partials/modals/_editSkill.html.twig') }}
{% endfor %}", "back/partials/tables/skill/_index.html.twig", "/var/www/html/erecrutement/templates/back/partials/tables/skill/_index.html.twig");
    }
}
