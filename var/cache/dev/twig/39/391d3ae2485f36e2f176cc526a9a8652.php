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

/* back/partials/_navbar.html.twig */
class __TwigTemplate_128a66535777af529fd1ce4f4842da17 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/_navbar.html.twig"));

        // line 1
        $context["navbarMenus"] = ["Profile" => [["name" => "Mes informations", "link" => "app_user_edit_profile", "params" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3)], "icon" => "fas fa-user-edit"], ["name" => "Mot de passe", "link" => "app_user_edit_password", "params" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4)], "icon" => "fas fa-key"], ["name" => "Se déconnecter", "link" => "app_logout", "icon" => "fas fa-sign-out-alt"]], "Utilisateurs" => [["name" => "Utilisateurs", "link" => "admin_user", "icon" => "fas fa-users"], ["name" => "Candidats", "link" => "admin_candidate", "icon" => "fas fa-user-tie"], ["name" => "Etat", "link" => "admin_candidate_state", "icon" => "fas fa-briefcase"]], "Candidats" => [["name" => "Diplômes", "link" => "admin_education", "icon" => "fas fa-graduation-cap"], ["name" => "Certifications", "link" => "admin_certification", "icon" => "fas fa-certificate"], ["name" => "Stages", "link" => "admin_internship", "icon" => "fas fa-briefcase"], ["name" => "Expériences", "link" => "admin_experience", "icon" => "fas fa-briefcase"]], "Référentiels" => [["name" => "Domaines", "link" => "admin_field_of_study", "icon" => "fas fa-code-branch"], ["name" => "Diplômes", "link" => "admin_degree", "icon" => "fas fa-graduation-cap"], ["name" => "Postes", "link" => "admin_position", "icon" => "fas fa-briefcase"], ["name" => "Niveau", "link" => "admin_level", "icon" => "fas fa-layer-group"], ["name" => "Compétences", "link" => "admin_skill", "icon" => "fas fa-cogs"], ["name" => "Civilité", "link" => "admin_civility", "icon" => "fas fa-id-card"], ["name" => "Situations familiales", "link" => "admin_marital_status", "icon" => "fas fa-id-card-alt"]]];
        // line 28
        echo "
<nav class=\"navbar bg-white border-bottom fixed-top\">
  <div class=\"container\">
    <a class=\"navbar-brand d-flex align-items-center gap-2\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">
      <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-bcm.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"24\" />
      <span>e-recrutement</span>
    </a>
    <button
      class=\"navbar-toggler d-lg-none\"
      type=\"button\"
      data-bs-toggle=\"offcanvas\"
      data-bs-target=\"#offcanvasNavbar\"
      aria-controls=\"offcanvasNavbar\"
      aria-label=\"Toggle navigation\"
    >
      <i class=\"bx bx-menu-alt-right\"></i>
    </button>

    <div class=\"d-none d-lg-block\">
      <ul class=\"navbar-nav ms-auto\">
        <li class=\"dropdown\">
          <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            <div class=\"pic\"><i class=\"fas fa-user text-white\"></i></div>
          </a>
          <ul class=\"dropdown-menu px-2\">
            <li>
              <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\">
                <i class='bx bx-user'></i> Modifier mes informations
              </a>
            </li>
            <li>
              <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_password", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\">
                <i class=\"bx bx-cog\"></i> Modifier mon mot de passe
              </a>
            </li>
            <li>
              <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                <i class=\"bx bx-log-out\"></i>  Se déconnecter
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>

    <div
      class=\"offcanvas offcanvas-end d-lg-none\"
      tabindex=\"-1\"
      id=\"offcanvasNavbar\"
      aria-labelledby=\"offcanvasNavbarLabel\"
    >
      <div class=\"offcanvas-header\">
        <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">
          <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-bcm.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"24\" />
          <span>e-recrutement</span>
        </h5>
        <button
          type=\"button\"
          class=\"btn-close\"
          data-bs-dismiss=\"offcanvas\"
          aria-label=\"Close\"
        >
          <i class=\"bx bx-x\"></i>
        </button>
      </div>
      <div class=\"offcanvas-body\">
        <ul class=\"navbar-nav justify-content-end flex-grow-1\">

          <li class=\"nav-item pb-2 mb-2 border-bottom\">
            <a class=\"nav-link user-panel\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97)]), "html", null, true);
        echo "\">
              <div class=\"pic d-flex ms-0\"><i class=\"fas fa-user text-white\"></i></div>
              ";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "getFirstName", [], "method", false, false, false, 99), "html", null, true);
        echo "
            </a>
          </li>

          <li class=\"nav-item pb-2 mb-2 border-bottom\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">
              <i class=\"nav-icon fas fa-tachometer-alt\"></i>
              Tableau de bord
            </a>
          </li>

          ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navbarMenus"]) || array_key_exists("navbarMenus", $context) ? $context["navbarMenus"] : (function () { throw new RuntimeError('Variable "navbarMenus" does not exist.', 110, $this->source); })()));
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
            // line 111
            echo "            <li class=\"nav-header ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 111) > 1)) {
                echo "border-top";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</li>
            ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["items"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 113
                echo "              <li>
                <a class=\"nav-link\" href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 114), ((twig_get_attribute($this->env, $this->source, $context["item"], "params", [], "any", true, true, false, 114)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "params", [], "any", false, false, false, 114), [])) : ([]))), "html", null, true);
                echo "\">
                  <i class=\"nav-icon ";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 115), "html", null, true);
                echo "\"></i>
                  ";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 116), "html", null, true);
                echo "
                </a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "          ";
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
        // line 121
        echo "
        </ul>
      </div>
    </div>
  </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/_navbar.html.twig";
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
        return array (  223 => 121,  209 => 120,  199 => 116,  195 => 115,  191 => 114,  188 => 113,  184 => 112,  175 => 111,  158 => 110,  149 => 104,  141 => 99,  136 => 97,  117 => 81,  97 => 64,  89 => 59,  81 => 54,  56 => 32,  52 => 31,  47 => 28,  45 => 4,  44 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set navbarMenus = {
  'Profile': [
    {'name': 'Mes informations', 'link': 'app_user_edit_profile', 'params': {'id': app.user.id}, 'icon': 'fas fa-user-edit'},
    {'name': 'Mot de passe', 'link': 'app_user_edit_password', 'params': {'id': app.user.id}, 'icon': 'fas fa-key'},
    {'name': 'Se déconnecter', 'link': 'app_logout', 'icon': 'fas fa-sign-out-alt'}
  ],
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

<nav class=\"navbar bg-white border-bottom fixed-top\">
  <div class=\"container\">
    <a class=\"navbar-brand d-flex align-items-center gap-2\" href=\"{{ path('admin_dashboard') }}\">
      <img src=\"{{asset('img/logo-bcm.png')}}\" alt=\"logo\" width=\"24\" />
      <span>e-recrutement</span>
    </a>
    <button
      class=\"navbar-toggler d-lg-none\"
      type=\"button\"
      data-bs-toggle=\"offcanvas\"
      data-bs-target=\"#offcanvasNavbar\"
      aria-controls=\"offcanvasNavbar\"
      aria-label=\"Toggle navigation\"
    >
      <i class=\"bx bx-menu-alt-right\"></i>
    </button>

    <div class=\"d-none d-lg-block\">
      <ul class=\"navbar-nav ms-auto\">
        <li class=\"dropdown\">
          <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            <div class=\"pic\"><i class=\"fas fa-user text-white\"></i></div>
          </a>
          <ul class=\"dropdown-menu px-2\">
            <li>
              <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"{{ path('app_user_edit_profile', {id: app.user.id}) }}\">
                <i class='bx bx-user'></i> Modifier mes informations
              </a>
            </li>
            <li>
              <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"{{ path('app_user_edit_password', {id: app.user.id}) }}\">
                <i class=\"bx bx-cog\"></i> Modifier mon mot de passe
              </a>
            </li>
            <li>
              <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"{{ path('app_logout') }}\">
                <i class=\"bx bx-log-out\"></i>  Se déconnecter
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>

    <div
      class=\"offcanvas offcanvas-end d-lg-none\"
      tabindex=\"-1\"
      id=\"offcanvasNavbar\"
      aria-labelledby=\"offcanvasNavbarLabel\"
    >
      <div class=\"offcanvas-header\">
        <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">
          <img src=\"{{asset('img/logo-bcm.png')}}\" alt=\"logo\" width=\"24\" />
          <span>e-recrutement</span>
        </h5>
        <button
          type=\"button\"
          class=\"btn-close\"
          data-bs-dismiss=\"offcanvas\"
          aria-label=\"Close\"
        >
          <i class=\"bx bx-x\"></i>
        </button>
      </div>
      <div class=\"offcanvas-body\">
        <ul class=\"navbar-nav justify-content-end flex-grow-1\">

          <li class=\"nav-item pb-2 mb-2 border-bottom\">
            <a class=\"nav-link user-panel\" href=\"{{ path('app_user_edit_profile', {id: app.user.id}) }}\">
              <div class=\"pic d-flex ms-0\"><i class=\"fas fa-user text-white\"></i></div>
              {{ app.user.getFirstName() }}
            </a>
          </li>

          <li class=\"nav-item pb-2 mb-2 border-bottom\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('admin_dashboard') }}\">
              <i class=\"nav-icon fas fa-tachometer-alt\"></i>
              Tableau de bord
            </a>
          </li>

          {% for category, items in navbarMenus %}
            <li class=\"nav-header {% if loop.index > 1 %}border-top{% endif %}\">{{ category }}</li>
            {% for item in items %}
              <li>
                <a class=\"nav-link\" href=\"{{ path(item.link, item.params | default({})) }}\">
                  <i class=\"nav-icon {{ item.icon }}\"></i>
                  {{ item.name }}
                </a>
              </li>
            {% endfor %}
          {% endfor %}

        </ul>
      </div>
    </div>
  </div>
</nav>
", "back/partials/_navbar.html.twig", "/var/www/html/erecrutement/templates/back/partials/_navbar.html.twig");
    }
}
