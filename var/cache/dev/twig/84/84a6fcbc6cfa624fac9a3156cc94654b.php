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

/* front/partials/_navbar.html.twig */
class __TwigTemplate_6589dc24a44ffe0db67ea52888c79d52 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg fixed-top\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
      <i class=\"fas fa-home text-white fs-5\"></i>
    </a>
    <button class=\"navbar-toggler py-1 px-2\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <i class=\"bx bx-menu-alt-right\"></i>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
      ";
        // line 10
        if ((array_key_exists("is_submission_page", $context) && (isset($context["is_submission_page"]) || array_key_exists("is_submission_page", $context) ? $context["is_submission_page"] : (function () { throw new RuntimeError('Variable "is_submission_page" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "      ";
        } else {
            // line 12
            echo "        <ul class=\"navbar-nav\">
          <li class=\"nav-item\">

            ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "hasSubmittedApplication", [], "any", false, false, false, 15)) {
                // line 16
                echo "              ";
                // line 17
                echo "            ";
            } else {
                // line 18
                echo "              <a class=\"nav-link candidacy\" aria-current=\"page\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_submission");
                echo "\">
                <i class=\"bx bx-plus\"></i> Nouvelle candidature
              </a>
            ";
            }
            // line 22
            echo "
          </li>
        </ul>
      ";
        }
        // line 26
        echo "      <ul class=\"navbar-nav ms-auto\">
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "              ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "getFirstName", [], "method", false, false, false, 30), "html", null, true);
            echo "
            ";
        } else {
            // line 32
            echo "              Candidat
            ";
        }
        // line 34
        echo "            <div class=\"pic\"><i class=\"fas fa-user text-white\"></i></div>
          </a>
          <ul class=\"dropdown-menu px-2\">
            <li>
              <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
        echo "\">
                <i class='bx bx-user'></i> Modifier mes informations
              </a>
            </li>
            <li>
              <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_password", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">
                <i class=\"bx bx-cog\"></i> Modifier mon mot de passe
              </a>
            </li>
            ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "hasSubmittedApplication", [], "any", false, false, false, 47)) {
            // line 48
            echo "              <li>
                <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details");
            echo "\">
                  <i class='bx bxs-user-detail'></i> Les détails de ma candidature
                </a>
              </li>
            ";
        }
        // line 54
        echo "            <li>
              <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                <i class=\"bx bx-log-out\"></i>  Se déconnecter
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/_navbar.html.twig";
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
        return array (  142 => 55,  139 => 54,  131 => 49,  128 => 48,  126 => 47,  119 => 43,  111 => 38,  105 => 34,  101 => 32,  95 => 30,  93 => 29,  88 => 26,  82 => 22,  74 => 18,  71 => 17,  69 => 16,  67 => 15,  62 => 12,  59 => 11,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg fixed-top\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
      <i class=\"fas fa-home text-white fs-5\"></i>
    </a>
    <button class=\"navbar-toggler py-1 px-2\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <i class=\"bx bx-menu-alt-right\"></i>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
      {% if is_submission_page is defined and is_submission_page %}
      {% else %}
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\">

            {% if app.user.hasSubmittedApplication %}
              {# ... #}
            {% else %}
              <a class=\"nav-link candidacy\" aria-current=\"page\" href=\"{{ path('app_submission') }}\">
                <i class=\"bx bx-plus\"></i> Nouvelle candidature
              </a>
            {% endif %}

          </li>
        </ul>
      {% endif %}
      <ul class=\"navbar-nav ms-auto\">
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            {% if app.user %}
              {{ app.user.getFirstName() }}
            {% else %}
              Candidat
            {% endif %}
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
            {% if app.user.hasSubmittedApplication %}
              <li>
                <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"{{ path('app_details') }}\">
                  <i class='bx bxs-user-detail'></i> Les détails de ma candidature
                </a>
              </li>
            {% endif %}
            <li>
              <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"{{ path('app_logout') }}\">
                <i class=\"bx bx-log-out\"></i>  Se déconnecter
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>", "front/partials/_navbar.html.twig", "/var/www/html/erecrutement/templates/front/partials/_navbar.html.twig");
    }
}
