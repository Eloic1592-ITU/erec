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
class __TwigTemplate_9a8d8faeb7636c1010068118cb32aa6f extends Template
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

        // line 1
        $context["sidebarMenus"] = ["Utilisateurs" => [["name" => "Utilisateurs", "link" => "admin_user", "icon" => "fas fa-users"], ["name" => "Candidats", "link" => "admin_candidate", "icon" => "fas fa-user-tie"], ["name" => "Etat", "link" => "admin_candidate_state", "icon" => "fas fa-briefcase"]], "Candidats" => [["name" => "Diplômes", "link" => "admin_education", "icon" => "fas fa-graduation-cap"], ["name" => "Certifications", "link" => "admin_certification", "icon" => "fas fa-certificate"], ["name" => "Stages", "link" => "admin_internship", "icon" => "fas fa-briefcase"], ["name" => "Expériences", "link" => "admin_experience", "icon" => "fas fa-briefcase"]], "Référentiels" => [["name" => "Domaines", "link" => "admin_field_of_study", "icon" => "fas fa-code-branch"], ["name" => "Diplômes", "link" => "admin_degree", "icon" => "fas fa-graduation-cap"], ["name" => "Postes", "link" => "admin_position", "icon" => "fas fa-briefcase"], ["name" => "Niveau", "link" => "admin_level", "icon" => "fas fa-layer-group"], ["name" => "Compétences", "link" => "admin_skill", "icon" => "fas fa-cogs"], ["name" => "Civilité", "link" => "admin_civility", "icon" => "fas fa-id-card"], ["name" => "Situations familiales", "link" => "admin_marital_status", "icon" => "fas fa-id-card-alt"]]];
        // line 23
        echo "
<aside class=\"sidebar d-none d-lg-flex flex-column flex-shrink-0\">
  <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"brand-link border-bottom\">
    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-bcm.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"24\" />
    <span>e-recrutement</span>
  </a>
  <ul class=\"nav nav-pills flex-column mb-auto p-2\">

    <li class=\"nav-item pb-2 mb-2 border-bottom\">
      <a class=\"nav-link user-panel\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\">
        <div class=\"pic ms-0\"><i class=\"fas fa-user text-white\"></i></div>
        ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34), "getFirstName", [], "method", false, false, false, 34), "html", null, true);
        echo "
      </a>
    </li>

    <li class=\"nav-item pb-2 mb-2 border-bottom\">
      <a class=\"nav-link active\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">
        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
        Tableau de bord
      </a>
    </li>

    ";
        // line 45
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
            // line 46
            echo "      <li class=\"nav-header ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 46) > 1)) {
                echo "border-top";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</li>
      ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["items"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                echo "        <li>
          <a class=\"nav-link\" href=\"";
                // line 49
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 49));
                echo "\">
            <i class=\"nav-icon ";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 50), "html", null, true);
                echo "\"></i>
            ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 51), "html", null, true);
                echo "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
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
        // line 56
        echo "    
  </ul>
</aside>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  146 => 56,  132 => 55,  122 => 51,  118 => 50,  114 => 49,  111 => 48,  107 => 47,  98 => 46,  81 => 45,  72 => 39,  64 => 34,  59 => 32,  50 => 26,  46 => 25,  42 => 23,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/_sidebar.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\back\\partials\\_sidebar.html.twig");
    }
}
