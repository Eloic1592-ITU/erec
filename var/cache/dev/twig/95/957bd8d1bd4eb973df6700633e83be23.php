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

/* back/partials/_sidebar.html.twig */
class __TwigTemplate_2e2da9bb7237fae2b4fda0b0daf749bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/_sidebar.html.twig"));

        // line 1
        $context["sidebarMenus"] = ["Utilisateurs" => [["name" => "Utilisateurs", "link" => "admin_user", "icon" => "fas fa-users"], ["name" => "Candidats", "link" => "admin_candidate", "icon" => "fas fa-user-tie"], ["name" => "Etat", "link" => "admin_candidate_state", "icon" => "fas fa-briefcase"]], "Candidats" => [["name" => "Diplômes", "link" => "admin_education", "icon" => "fas fa-graduation-cap"], ["name" => "Certifications", "link" => "admin_certification", "icon" => "fas fa-certificate"], ["name" => "Stages", "link" => "admin_internship", "icon" => "fas fa-briefcase"], ["name" => "Expériences", "link" => "admin_experience", "icon" => "fas fa-briefcase"]], "Référentiels" => [["name" => "Domaines", "link" => "admin_field_of_study", "icon" => "fas fa-code-branch"], ["name" => "Diplômes", "link" => "admin_degree", "icon" => "fas fa-graduation-cap"], ["name" => "Postes", "link" => "admin_position", "icon" => "fas fa-briefcase"], ["name" => "Niveau", "link" => "admin_level", "icon" => "fas fa-layer-group"], ["name" => "Compétences", "link" => "admin_skill", "icon" => "fas fa-cogs"], ["name" => "Civilité", "link" => "admin_civility", "icon" => "fas fa-id-card"], ["name" => "Situations familiales", "link" => "admin_marital_status", "icon" => "fas fa-id-card-alt"]]];
        // line 23
        echo "
<aside class=\"sidebar d-none d-lg-flex flex-column flex-shrink-0\">
  ";
        // line 25
        $context["currentRoute"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25);
        // line 26
        echo "  <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"brand-link border-bottom\">
    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-bcm.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"24\" />
    <span>e-recrutement</span>
  </a>
  <ul class=\"nav nav-pills flex-column mb-auto p-2\">

    <li class=\"nav-item pb-2 mb-2 border-bottom\">
      <a class=\"nav-link user-panel ";
        // line 33
        echo ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 33, $this->source); })()) === "app_user_edit_profile")) ? ("active") : (""));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\">
        <div class=\"pic ms-0\"><i class=\"fas fa-user text-white\"></i></div>
        ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "getFirstName", [], "method", false, false, false, 35), "html", null, true);
        echo "
      </a>
    </li>

    <li class=\"nav-item pb-2 mb-2 border-bottom\">
      <a class=\"nav-link ";
        // line 40
        echo ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 40, $this->source); })()) === "admin_dashboard")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">
        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
        Tableau de bord
      </a>
    </li>

    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sidebarMenus"]) || array_key_exists("sidebarMenus", $context) ? $context["sidebarMenus"] : (function () { throw new RuntimeError('Variable "sidebarMenus" does not exist.', 46, $this->source); })()));
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
        foreach ($context['_seq'] as $context["category"] => $context["items"]) {
            // line 47
            echo "      <li class=\"nav-header ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 47) > 1)) {
                echo "border-top";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</li>
      ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["items"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 49
                echo "        <li>
          <a class=\"nav-link ";
                // line 50
                echo ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 50, $this->source); })()) === twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 50))) ? ("active") : (""));
                echo "\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 50));
                echo "\">
            <i class=\"nav-icon ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 51), "html", null, true);
                echo "\"></i>
            ";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 52), "html", null, true);
                echo "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    
  </ul>
</aside>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/_sidebar.html.twig";
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
        return array (  158 => 57,  144 => 56,  134 => 52,  130 => 51,  124 => 50,  121 => 49,  117 => 48,  108 => 47,  91 => 46,  80 => 40,  72 => 35,  65 => 33,  56 => 27,  51 => 26,  49 => 25,  45 => 23,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set sidebarMenus = {
  'Utilisateurs': [
    {'name': 'Utilisateurs', 'link': 'admin_user', 'icon': 'fas fa-users'},
    {'name': 'Candidats', 'link': 'admin_candidate', 'icon': 'fas fa-user-tie'},
    {'name': 'Etat', 'link': 'admin_candidate_state', 'icon': 'fas fa-briefcase'}
  ],
  'Candidats': [
    {'name': 'Diplômes', 'link': 'admin_education', 'icon': 'fas fa-graduation-cap'},
    {'name': 'Certifications', 'link': 'admin_certification', 'icon': 'fas fa-certificate'},
    {'name': 'Stages', 'link': 'admin_internship', 'icon': 'fas fa-briefcase'},
    {'name': 'Expériences', 'link': 'admin_experience', 'icon': 'fas fa-briefcase'}
  ],
  'Référentiels': [
    {'name': 'Domaines', 'link': 'admin_field_of_study', 'icon': 'fas fa-code-branch'},
    {'name': 'Diplômes', 'link': 'admin_degree', 'icon': 'fas fa-graduation-cap'},
    {'name': 'Postes', 'link': 'admin_position', 'icon': 'fas fa-briefcase'},
    {'name': 'Niveau', 'link': 'admin_level', 'icon': 'fas fa-layer-group'},
    {'name': 'Compétences', 'link': 'admin_skill', 'icon': 'fas fa-cogs'},
    {'name': 'Civilité', 'link': 'admin_civility', 'icon': 'fas fa-id-card'},
    {'name': 'Situations familiales', 'link': 'admin_marital_status', 'icon': 'fas fa-id-card-alt'}
  ]
} %}

<aside class=\"sidebar d-none d-lg-flex flex-column flex-shrink-0\">
  {% set currentRoute = app.request.get('_route') %}
  <a href=\"{{ path('admin_dashboard') }}\" class=\"brand-link border-bottom\">
    <img src=\"{{asset('img/logo-bcm.png')}}\" alt=\"logo\" width=\"24\" />
    <span>e-recrutement</span>
  </a>
  <ul class=\"nav nav-pills flex-column mb-auto p-2\">

    <li class=\"nav-item pb-2 mb-2 border-bottom\">
      <a class=\"nav-link user-panel {{ currentRoute is same as('app_user_edit_profile') ? 'active' : ''  }}\" href=\"{{ path('app_user_edit_profile', {id: app.user.id}) }}\">
        <div class=\"pic ms-0\"><i class=\"fas fa-user text-white\"></i></div>
        {{ app.user.getFirstName() }}
      </a>
    </li>

    <li class=\"nav-item pb-2 mb-2 border-bottom\">
      <a class=\"nav-link {{ currentRoute is same as('admin_dashboard') ? 'active' : ''  }}\" href=\"{{ path('admin_dashboard') }}\">
        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
        Tableau de bord
      </a>
    </li>

    {% for category, items in sidebarMenus %}
      <li class=\"nav-header {% if loop.index > 1 %}border-top{% endif %}\">{{ category }}</li>
      {% for item in items %}
        <li>
          <a class=\"nav-link {{ currentRoute is same as(item.link) ? 'active' : ''  }}\" href=\"{{ path(item.link) }}\">
            <i class=\"nav-icon {{ item.icon }}\"></i>
            {{ item.name }}
          </a>
        </li>
      {% endfor %}
    {% endfor %}
    
  </ul>
</aside>
", "back/partials/_sidebar.html.twig", "/var/www/html/erecrutement/templates/back/partials/_sidebar.html.twig");
    }
}
