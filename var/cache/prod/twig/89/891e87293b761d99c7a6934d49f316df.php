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
class __TwigTemplate_cafd9f945dde200ac5102897c816bf78 extends Template
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
        $context["sidebarMenus"] = ["Utilisateurs" => [["name" => "Utilisateurs", "link" => "admin_user", "icon" => "fas fa-users"], ["name" => "Candidats", "link" => "admin_candidate", "icon" => "fas fa-user-tie"], ["name" => "Etat", "link" => "admin_candidate_state", "icon" => "fas fa-briefcase"]], "Candidats" => [["name" => "Diplômes", "link" => "admin_education", "icon" => "fas fa-graduation-cap"], ["name" => "Certifications", "link" => "admin_certification", "icon" => "fas fa-certificate"], ["name" => "Stages", "link" => "admin_internship", "icon" => "fas fa-briefcase"], ["name" => "Expériences", "link" => "admin_experience", "icon" => "fas fa-briefcase"]], "Référentiels" => [["name" => "Domaines", "link" => "admin_field_of_study", "icon" => "fas fa-code-branch"], ["name" => "Diplômes", "link" => "admin_degree", "icon" => "fas fa-graduation-cap"], ["name" => "Postes", "link" => "admin_position", "icon" => "fas fa-briefcase"], ["name" => "Niveau", "link" => "admin_level", "icon" => "fas fa-layer-group"], ["name" => "Compétences", "link" => "admin_skill", "icon" => "fas fa-cogs"], ["name" => "Civilité", "link" => "admin_civility", "icon" => "fas fa-id-card"], ["name" => "Situations familiales", "link" => "admin_marital_status", "icon" => "fas fa-id-card-alt"]]];
        // line 23
        echo "
<aside class=\"sidebar d-none d-lg-flex flex-column flex-shrink-0\">
  ";
        // line 25
        $context["currentRoute"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25);
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
        echo (((($context["currentRoute"] ?? null) === "app_user_edit_profile")) ? ("active") : (""));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\">
        <div class=\"pic ms-0\"><i class=\"fas fa-user text-white\"></i></div>
        ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 35), "getFirstName", [], "method", false, false, false, 35), "html", null, true);
        echo "
      </a>
    </li>

    <li class=\"nav-item pb-2 mb-2 border-bottom\">
      <a class=\"nav-link ";
        // line 40
        echo (((($context["currentRoute"] ?? null) === "admin_dashboard")) ? ("active") : (""));
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
        $context['_seq'] = twig_ensure_traversable(($context["sidebarMenus"] ?? null));
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
                echo (((($context["currentRoute"] ?? null) === twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 50))) ? ("active") : (""));
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
        return array (  152 => 57,  138 => 56,  128 => 52,  124 => 51,  118 => 50,  115 => 49,  111 => 48,  102 => 47,  85 => 46,  74 => 40,  66 => 35,  59 => 33,  50 => 27,  45 => 26,  43 => 25,  39 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/_sidebar.html.twig", "/var/www/html/erecrutement/templates/back/partials/_sidebar.html.twig");
    }
}
