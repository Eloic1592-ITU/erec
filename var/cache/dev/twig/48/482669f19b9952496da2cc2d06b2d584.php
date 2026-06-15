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

/* back/user/index.html.twig */
class __TwigTemplate_55d73c18b3295ef8b9d1b0844203f660 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "back/layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user/index.html.twig"));

        $this->parent = $this->loadTemplate("back/layouts/base.html.twig", "back/user/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Dashboard | Utilisateurs
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/back/user.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/position.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    
  ";
        // line 18
        echo twig_include($this->env, $context, "back/partials/_header.html.twig");
        echo "

  <div class=\"container\">
    <div class=\"row mb-lg-3\">
      <div class=\"col-lg-7 d-flex flex-column justify-content-between\">
        <div class=\"card h-100 px-2\">
          <div class=\"card-body\">
            <p class=\"m-0\">
              Cette section vous permet de visualiser, gérer, et administrer les utilisateurs de la plateforme. Cette page est conçue pour fournir un aperçu complet de l'ensemble des utilisateurs inscrits, ainsi que des outils pour administrer les statuts, et les accès des utilisateurs.
            </p>
          </div>
        </div>
        <div class=\"card\">
          <div class=\"card-header\">
            <h3 class=\"card-title\">Statistiques des Utilisateurs</h3>
          </div>
          <div class=\"card-body\">
            <ul class=\"list-group\">
              <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                Nombre d'administrateurs (Admins)
                <span class=\"badge bg-pink rounded-pill\">";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["adminCount"]) || array_key_exists("adminCount", $context) ? $context["adminCount"] : (function () { throw new RuntimeError('Variable "adminCount" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</span>
              </li>
              <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                Nombre d'utilisateurs simples (Utilisateurs)
                <span class=\"badge bg-primary rounded-pill\">";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["usersOnlyCount"]) || array_key_exists("usersOnlyCount", $context) ? $context["usersOnlyCount"] : (function () { throw new RuntimeError('Variable "usersOnlyCount" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "</span>
              </li>
              <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                Utilisateurs ayant soumis leur candidature (Candidats)
                <span class=\"badge bg-teal rounded-pill\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["submittedUserCount"]) || array_key_exists("submittedUserCount", $context) ? $context["submittedUserCount"] : (function () { throw new RuntimeError('Variable "submittedUserCount" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"col-lg-5\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div id=\"userRolesChart\" style=\"min-height: 400px;\" class=\"echart\"></div>
          </div>
        </div>
          
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center justify-content-between\">
            <h3 class=\"card-title\">Liste de tous les utilisateurs</h3>
            <button 
              data-bs-toggle=\"modal\" 
              data-bs-target=\"#positionsModal\"
              class=\"btn btn-primary btn-sm d-flex align-items-center gap-1\"
            >
              <i class=\"bx bx-plus\"></i> 
              Ajouter
            </button>
          </div>
          <div class=\"card-body p-0\">
            ";
        // line 76
        echo twig_include($this->env, $context, "back/partials/tables/user/_index.html.twig");
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "  

  <script>
    document.addEventListener(\"DOMContentLoaded\", () => {
      const userRolesChart = echarts.init(document.querySelector(\"#userRolesChart\"));
      userRolesChart.setOption({
        tooltip: {
          trigger: 'item'
        },
        legend: {
          top: '5%',
          left: 'center'
        },
        series: [{
          name: 'Répartition des rôles',
          type: 'pie',
          radius: ['40%', '70%'],
          avoidLabelOverlap: false,
          label: {
            show: false,
            position: 'center'
          },
          emphasis: {
            label: {
              show: true,
              fontSize: '18',
              fontWeight: 'bold'
            }
          },
          labelLine: {
            show: false
          },
          data: [
            { value: ";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["adminCount"]) || array_key_exists("adminCount", $context) ? $context["adminCount"] : (function () { throw new RuntimeError('Variable "adminCount" does not exist.', 120, $this->source); })()), "html", null, true);
        echo ", name: 'Admins' },
            { value: ";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["usersOnlyCount"]) || array_key_exists("usersOnlyCount", $context) ? $context["usersOnlyCount"] : (function () { throw new RuntimeError('Variable "usersOnlyCount" does not exist.', 121, $this->source); })()), "html", null, true);
        echo ", name: 'Utilisateurs' },
            { value: ";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["submittedUserCount"]) || array_key_exists("submittedUserCount", $context) ? $context["submittedUserCount"] : (function () { throw new RuntimeError('Variable "submittedUserCount" does not exist.', 122, $this->source); })()), "html", null, true);
        echo ", name: 'Candidats' }
          ],
          color: [
            'rgba(255, 99, 132, 0.6)', // Couleur pour Admins
            'rgba(54, 162, 235, 0.6)',  // Couleur pour Users
            'rgba(75, 192, 192, 0.6)',  // Couleur pour Candidats
          ]
        }]
      });
    });
  </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/user/index.html.twig";
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
        return array (  263 => 122,  259 => 121,  255 => 120,  220 => 87,  210 => 86,  192 => 76,  159 => 46,  152 => 42,  145 => 38,  122 => 18,  119 => 17,  109 => 16,  97 => 12,  92 => 11,  82 => 10,  71 => 6,  61 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# ---------------------------- Layout ---------------------------- #}
{% extends 'back/layouts/base.html.twig' %}

{# ---------------------------- Title ---------------------------- #}
{% block title %}
    Dashboard | Utilisateurs
{% endblock %}

{# ---------------------------- CSS ---------------------------- #}
{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('css/back/user.css') }}\" />
  <link rel=\"stylesheet\" href=\"{{ asset('css/position.css') }}\" />
{% endblock %}

{# ---------------------------- Body ---------------------------- #}
{% block body %}
    
  {{ include('back/partials/_header.html.twig') }}

  <div class=\"container\">
    <div class=\"row mb-lg-3\">
      <div class=\"col-lg-7 d-flex flex-column justify-content-between\">
        <div class=\"card h-100 px-2\">
          <div class=\"card-body\">
            <p class=\"m-0\">
              Cette section vous permet de visualiser, gérer, et administrer les utilisateurs de la plateforme. Cette page est conçue pour fournir un aperçu complet de l'ensemble des utilisateurs inscrits, ainsi que des outils pour administrer les statuts, et les accès des utilisateurs.
            </p>
          </div>
        </div>
        <div class=\"card\">
          <div class=\"card-header\">
            <h3 class=\"card-title\">Statistiques des Utilisateurs</h3>
          </div>
          <div class=\"card-body\">
            <ul class=\"list-group\">
              <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                Nombre d'administrateurs (Admins)
                <span class=\"badge bg-pink rounded-pill\">{{ adminCount }}</span>
              </li>
              <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                Nombre d'utilisateurs simples (Utilisateurs)
                <span class=\"badge bg-primary rounded-pill\">{{ usersOnlyCount }}</span>
              </li>
              <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                Utilisateurs ayant soumis leur candidature (Candidats)
                <span class=\"badge bg-teal rounded-pill\">{{ submittedUserCount }}</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"col-lg-5\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div id=\"userRolesChart\" style=\"min-height: 400px;\" class=\"echart\"></div>
          </div>
        </div>
          
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center justify-content-between\">
            <h3 class=\"card-title\">Liste de tous les utilisateurs</h3>
            <button 
              data-bs-toggle=\"modal\" 
              data-bs-target=\"#positionsModal\"
              class=\"btn btn-primary btn-sm d-flex align-items-center gap-1\"
            >
              <i class=\"bx bx-plus\"></i> 
              Ajouter
            </button>
          </div>
          <div class=\"card-body p-0\">
            {{ include('back/partials/tables/user/_index.html.twig') }}
          </div>
        </div>
      </div>
    </div>
  </div>
    
{% endblock %}

{# ---------------------------- JS ---------------------------- #}
{% block javascripts %}
  

  <script>
    document.addEventListener(\"DOMContentLoaded\", () => {
      const userRolesChart = echarts.init(document.querySelector(\"#userRolesChart\"));
      userRolesChart.setOption({
        tooltip: {
          trigger: 'item'
        },
        legend: {
          top: '5%',
          left: 'center'
        },
        series: [{
          name: 'Répartition des rôles',
          type: 'pie',
          radius: ['40%', '70%'],
          avoidLabelOverlap: false,
          label: {
            show: false,
            position: 'center'
          },
          emphasis: {
            label: {
              show: true,
              fontSize: '18',
              fontWeight: 'bold'
            }
          },
          labelLine: {
            show: false
          },
          data: [
            { value: {{ adminCount }}, name: 'Admins' },
            { value: {{ usersOnlyCount }}, name: 'Utilisateurs' },
            { value: {{ submittedUserCount }}, name: 'Candidats' }
          ],
          color: [
            'rgba(255, 99, 132, 0.6)', // Couleur pour Admins
            'rgba(54, 162, 235, 0.6)',  // Couleur pour Users
            'rgba(75, 192, 192, 0.6)',  // Couleur pour Candidats
          ]
        }]
      });
    });
  </script>

{% endblock %}

", "back/user/index.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\back\\user\\index.html.twig");
    }
}
