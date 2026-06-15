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
class __TwigTemplate_b4256243f8fb41927f3c1818bd5b4d68 extends Template
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
        if ((array_key_exists("is_submission_page", $context) && ($context["is_submission_page"] ?? null))) {
            // line 11
            echo "      ";
        } else {
            // line 12
            echo "        <ul class=\"navbar-nav\">
          <li class=\"nav-item\">

            ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15), "hasSubmittedApplication", [], "any", false, false, false, 15)) {
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "              ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 30), "getFirstName", [], "method", false, false, false, 30), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
        echo "\">
                <i class='bx bx-user'></i> Modifier mes informations
              </a>
            </li>
            <li>
              <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_password", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">
                <i class=\"bx bx-cog\"></i> Modifier mon mot de passe
              </a>
            </li>
            ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 47), "hasSubmittedApplication", [], "any", false, false, false, 47)) {
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
        return array (  139 => 55,  136 => 54,  128 => 49,  125 => 48,  123 => 47,  116 => 43,  108 => 38,  102 => 34,  98 => 32,  92 => 30,  90 => 29,  85 => 26,  79 => 22,  71 => 18,  68 => 17,  66 => 16,  64 => 15,  59 => 12,  56 => 11,  54 => 10,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/_navbar.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\_navbar.html.twig");
    }
}
