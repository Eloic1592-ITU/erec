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

/* back/dashboard/index.html.twig */
class __TwigTemplate_325eb05f9b92795c80cb22efb042a2a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("back/layouts/base.html.twig", "back/dashboard/index.html.twig", 2);
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
        echo "    Dashboard
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/back/dashboard.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    
  ";
        // line 17
        echo twig_include($this->env, $context, "back/partials/_header.html.twig");
        echo "

  <div class=\"container d-flex flex-column gap-4\">

    <div class=\"dashboard-section p-4 mb-3 bg-white rounded-4 sweet-shadow d-flex justify-content-between\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h1>Bienvenue ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "getFirstName", [], "any", false, false, false, 24), "html", null, true);
        echo " !</h1>
          <p> 
            Nous sommes ravis de vous accueillir sur la plateforme de recrutement. Utilisez les sections ci-dessous pour gérer efficacement les <a href=\"#utilisateurs\">utilisateurs</a>, les <a href=\"#candidats\">informations sur les candidats</a> et les <a href=\"#referentiels\">référentiels</a>.
          </p>
        </div>
        <div class=\"col-lg-4 d-none d-lg-block text-end\">
          <img class=\"ms-auto me-2\" width=\"20%\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bell.png"), "html", null, true);
        echo "\" alt=\"bell\" />
        </div>
      </div>
    </div>

    <div id=\"utilisateurs\" class=\"dashboard-section\">
      <h2>Gestion des Utilisateurs</h2>
      <p>
        La section 'Gestion des Utilisateurs' vous permet de superviser et administrer les utilisateurs inscrits sur la plateforme. Vous y trouverez la liste des candidats avec toutes leurs informations. </br>
        Dans la liste des états des candidats, vous pouvez télécharger la liste des candidats par poste demandé pour facilement vérifier leur statut d'admission.
      </p>

      <div class=\"row my-4\">
        <div class=\"col-lg-12\">
          <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user");
        echo "\" class=\"info-box\">
            <span class=\"info-box-icon bg-primary\"><i class=\"fas fa-users\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Utilisateurs</span>
              <span class=\"info-box-number\">Total : ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-6 col-xl-6\">
          <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_candidate");
        echo "\" class=\"info-box\">
            <span class=\"info-box-icon bg-default\"><i class=\"fas fa-user-tie\"></i></span>

            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Candidats</span>
              <span class=\"info-box-number\">Total : ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["candidats"]) || array_key_exists("candidats", $context) ? $context["candidats"] : (function () { throw new RuntimeError('Variable "candidats" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-6 col-xl-6\">
          <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_candidate_state");
        echo "\" class=\"info-box\">
            <span class=\"info-box-icon bg-primary\"><i class=\"fas fa-briefcase\"></i></span>

            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Etat par postes</span>
              <span class=\"info-box-number\">Postes : ";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["positions"]) || array_key_exists("positions", $context) ? $context["positions"] : (function () { throw new RuntimeError('Variable "positions" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div id=\"candidats\" class=\"dashboard-section\">
      <h2>Informations sur les Candidats</h2>
      <p>
        La section \"Informations sur les Candidats\" centralise toutes les données pertinentes concernant les candidats. Vous y trouverez des informations détaillées sur leurs diplômes, certifications, stages ainsi que leurs expériences professionnelles. Cette section permet de suivre et d'évaluer efficacement les candidatures, offrant ainsi une vue d'ensemble complète sur chaque candidat.
      </p>

      <div class=\"row my-4\">
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_education");
        echo "\" class=\"info-box\">
            <span class=\"info-box-icon bg-default\"><i class=\"fas fa-graduation-cap\"></i></span>

            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Diplômes</span>
              <span class=\"info-box-number\">Total : ";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["educations"]) || array_key_exists("educations", $context) ? $context["educations"] : (function () { throw new RuntimeError('Variable "educations" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_certification");
        echo "\" class=\"info-box\">
            <span class=\"info-box-icon bg-default\"><i class=\"fas fa-certificate\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Certifications</span>
              <span class=\"info-box-number\">Total :  ";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["certifications"]) || array_key_exists("certifications", $context) ? $context["certifications"] : (function () { throw new RuntimeError('Variable "certifications" does not exist.', 97, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_internship");
        echo "\" class=\"info-box\">
            <span class=\"info-box-icon bg-success\"><i class=\"fas fa-briefcase\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Stages</span>
              <span class=\"info-box-number\">Total : ";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["internships"]) || array_key_exists("internships", $context) ? $context["internships"] : (function () { throw new RuntimeError('Variable "internships" does not exist.', 106, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_experience");
        echo "\" class=\"info-box\">
            <span class=\"info-box-icon bg-success\"><i class=\"fas fa-briefcase\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Expériences</span>
              <span class=\"info-box-number\">Total : ";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["experiences"]) || array_key_exists("experiences", $context) ? $context["experiences"] : (function () { throw new RuntimeError('Variable "experiences" does not exist.', 115, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div id=\"referentiels\" class=\"dashboard-section\">
      <h2>Gestion des Référentiels</h2>
      <p>
        La section \"Gestion des Référentiels\" est dédiée à la gestion des éléments de référence nécessaires pour le bon fonctionnement de la plateforme de recrutement. Cela inclut la gestion des domaines, des diplômes, des postes, des niveaux, des compétences, de la civilité et de l'état civil. En maintenant ces référentiels à jour, vous assurez la cohérence et la standardisation des données utilisées à travers la plateforme.
      </p>

      <div class=\"row my-4\">
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_field_of_study");
        echo "\" class=\"info-box\">
            <span class=\"info-box-icon bg-primary\"><i class=\"fas fa-code-branch\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Domaines</span>
              <span class=\"info-box-number\">Total : ";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["allfieldOfStudy"]) || array_key_exists("allfieldOfStudy", $context) ? $context["allfieldOfStudy"] : (function () { throw new RuntimeError('Variable "allfieldOfStudy" does not exist.', 134, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_degree");
        echo "\" class=\"info-box\">
            <span class=\"info-box-icon bg-default\"><i class=\"fas fa-graduation-cap\"></i></span>

            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Diplômes</span>
              <span class=\"info-box-number\">Total : ";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["allDegree"]) || array_key_exists("allDegree", $context) ? $context["allDegree"] : (function () { throw new RuntimeError('Variable "allDegree" does not exist.', 144, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_position");
        echo "\" class=\"info-box\">
            <span class=\"info-box-icon bg-default\"><i class=\"fas fa-briefcase\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Postes</span>
              <span class=\"info-box-number\">Total :  ";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["positions"]) || array_key_exists("positions", $context) ? $context["positions"] : (function () { throw new RuntimeError('Variable "positions" does not exist.', 153, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_level");
        echo "\" class=\"info-box\">
            <span class=\"info-box-icon bg-success\"><i class=\"fas fa-layer-group\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Niveau</span>
              <span class=\"info-box-number\">Total : ";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["levels"]) || array_key_exists("levels", $context) ? $context["levels"] : (function () { throw new RuntimeError('Variable "levels" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_skill");
        echo "\" class=\"info-box\">
            <span class=\"info-box-icon bg-primary\"><i class=\"fas fa-cogs\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Compétences</span>
              <span class=\"info-box-number\">Total : ";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["skills"]) || array_key_exists("skills", $context) ? $context["skills"] : (function () { throw new RuntimeError('Variable "skills" does not exist.', 171, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_civility");
        echo "\" class=\"info-box\">
            <span class=\"info-box-icon bg-primary\"><i class=\"fas fa-id-card\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Civilité</span>
              <span class=\"info-box-number\">Total : ";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["civilities"]) || array_key_exists("civilities", $context) ? $context["civilities"] : (function () { throw new RuntimeError('Variable "civilities" does not exist.', 180, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_marital_status");
        echo "\" class=\"info-box\">
            <span class=\"info-box-icon bg-primary\"><i class=\"fas fa-id-card-alt\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">État civil</span>
              <span class=\"info-box-number\">Total : ";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["allMaritalStatus"]) || array_key_exists("allMaritalStatus", $context) ? $context["allMaritalStatus"] : (function () { throw new RuntimeError('Variable "allMaritalStatus" does not exist.', 189, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 200
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 201
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/dashboard/index.html.twig";
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
        return array (  409 => 201,  399 => 200,  380 => 189,  373 => 185,  365 => 180,  358 => 176,  350 => 171,  343 => 167,  335 => 162,  328 => 158,  320 => 153,  313 => 149,  305 => 144,  297 => 139,  289 => 134,  282 => 130,  264 => 115,  257 => 111,  249 => 106,  242 => 102,  234 => 97,  227 => 93,  219 => 88,  211 => 83,  193 => 68,  185 => 63,  177 => 58,  169 => 53,  161 => 48,  154 => 44,  137 => 30,  128 => 24,  118 => 17,  115 => 16,  105 => 15,  92 => 11,  82 => 10,  71 => 6,  61 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# ---------------------------- Layout ---------------------------- #}
{% extends 'back/layouts/base.html.twig' %}

{# ---------------------------- Title ---------------------------- #}
{% block title %}
    Dashboard
{% endblock %}

{# ---------------------------- CSS ---------------------------- #}
{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('css/back/dashboard.css') }}\" />
{% endblock %}

{# ---------------------------- Body ---------------------------- #}
{% block body %}
    
  {{ include('back/partials/_header.html.twig') }}

  <div class=\"container d-flex flex-column gap-4\">

    <div class=\"dashboard-section p-4 mb-3 bg-white rounded-4 sweet-shadow d-flex justify-content-between\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h1>Bienvenue {{ app.user.getFirstName }} !</h1>
          <p> 
            Nous sommes ravis de vous accueillir sur la plateforme de recrutement. Utilisez les sections ci-dessous pour gérer efficacement les <a href=\"#utilisateurs\">utilisateurs</a>, les <a href=\"#candidats\">informations sur les candidats</a> et les <a href=\"#referentiels\">référentiels</a>.
          </p>
        </div>
        <div class=\"col-lg-4 d-none d-lg-block text-end\">
          <img class=\"ms-auto me-2\" width=\"20%\" src=\"{{ asset('img/bell.png') }}\" alt=\"bell\" />
        </div>
      </div>
    </div>

    <div id=\"utilisateurs\" class=\"dashboard-section\">
      <h2>Gestion des Utilisateurs</h2>
      <p>
        La section 'Gestion des Utilisateurs' vous permet de superviser et administrer les utilisateurs inscrits sur la plateforme. Vous y trouverez la liste des candidats avec toutes leurs informations. </br>
        Dans la liste des états des candidats, vous pouvez télécharger la liste des candidats par poste demandé pour facilement vérifier leur statut d'admission.
      </p>

      <div class=\"row my-4\">
        <div class=\"col-lg-12\">
          <a href=\"{{ path('admin_user') }}\" class=\"info-box\">
            <span class=\"info-box-icon bg-primary\"><i class=\"fas fa-users\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Utilisateurs</span>
              <span class=\"info-box-number\">Total : {{ users }}</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-6 col-xl-6\">
          <a href=\"{{ path('admin_candidate') }}\" class=\"info-box\">
            <span class=\"info-box-icon bg-default\"><i class=\"fas fa-user-tie\"></i></span>

            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Candidats</span>
              <span class=\"info-box-number\">Total : {{ candidats }}</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-6 col-xl-6\">
          <a href=\"{{ path('admin_candidate_state') }}\" class=\"info-box\">
            <span class=\"info-box-icon bg-primary\"><i class=\"fas fa-briefcase\"></i></span>

            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Etat par postes</span>
              <span class=\"info-box-number\">Postes : {{ positions }}</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div id=\"candidats\" class=\"dashboard-section\">
      <h2>Informations sur les Candidats</h2>
      <p>
        La section \"Informations sur les Candidats\" centralise toutes les données pertinentes concernant les candidats. Vous y trouverez des informations détaillées sur leurs diplômes, certifications, stages ainsi que leurs expériences professionnelles. Cette section permet de suivre et d'évaluer efficacement les candidatures, offrant ainsi une vue d'ensemble complète sur chaque candidat.
      </p>

      <div class=\"row my-4\">
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"{{ path('admin_education') }}\" class=\"info-box\">
            <span class=\"info-box-icon bg-default\"><i class=\"fas fa-graduation-cap\"></i></span>

            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Diplômes</span>
              <span class=\"info-box-number\">Total : {{ educations }}</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"{{ path('admin_certification') }}\" class=\"info-box\">
            <span class=\"info-box-icon bg-default\"><i class=\"fas fa-certificate\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Certifications</span>
              <span class=\"info-box-number\">Total :  {{ certifications }}</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"{{ path('admin_internship') }}\" class=\"info-box\">
            <span class=\"info-box-icon bg-success\"><i class=\"fas fa-briefcase\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Stages</span>
              <span class=\"info-box-number\">Total : {{ internships }}</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"{{ path('admin_experience') }}\" class=\"info-box\">
            <span class=\"info-box-icon bg-success\"><i class=\"fas fa-briefcase\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Expériences</span>
              <span class=\"info-box-number\">Total : {{ experiences }}</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div id=\"referentiels\" class=\"dashboard-section\">
      <h2>Gestion des Référentiels</h2>
      <p>
        La section \"Gestion des Référentiels\" est dédiée à la gestion des éléments de référence nécessaires pour le bon fonctionnement de la plateforme de recrutement. Cela inclut la gestion des domaines, des diplômes, des postes, des niveaux, des compétences, de la civilité et de l'état civil. En maintenant ces référentiels à jour, vous assurez la cohérence et la standardisation des données utilisées à travers la plateforme.
      </p>

      <div class=\"row my-4\">
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"{{ path('admin_field_of_study') }}\" class=\"info-box\">
            <span class=\"info-box-icon bg-primary\"><i class=\"fas fa-code-branch\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Domaines</span>
              <span class=\"info-box-number\">Total : {{ allfieldOfStudy }}</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"{{ path('admin_degree') }}\" class=\"info-box\">
            <span class=\"info-box-icon bg-default\"><i class=\"fas fa-graduation-cap\"></i></span>

            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Diplômes</span>
              <span class=\"info-box-number\">Total : {{ allDegree }}</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"{{ path('admin_position') }}\" class=\"info-box\">
            <span class=\"info-box-icon bg-default\"><i class=\"fas fa-briefcase\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Postes</span>
              <span class=\"info-box-number\">Total :  {{ positions }}</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"{{ path('admin_level') }}\" class=\"info-box\">
            <span class=\"info-box-icon bg-success\"><i class=\"fas fa-layer-group\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Niveau</span>
              <span class=\"info-box-number\">Total : {{ levels }}</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"{{ path('admin_skill') }}\" class=\"info-box\">
            <span class=\"info-box-icon bg-primary\"><i class=\"fas fa-cogs\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Compétences</span>
              <span class=\"info-box-number\">Total : {{ skills }}</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"{{ path('admin_civility') }}\" class=\"info-box\">
            <span class=\"info-box-icon bg-primary\"><i class=\"fas fa-id-card\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">Civilité</span>
              <span class=\"info-box-number\">Total : {{ civilities }}</span>
            </div>
          </a>
        </div>
        <div class=\"col-md-6 col-lg-4 col-xl-3\">
          <a href=\"{{ path('admin_marital_status') }}\" class=\"info-box\">
            <span class=\"info-box-icon bg-primary\"><i class=\"fas fa-id-card-alt\"></i></span>
            <div class=\"info-box-content\">
              <span class=\"info-box-text\">État civil</span>
              <span class=\"info-box-number\">Total : {{ allMaritalStatus }}</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
    
{% endblock %}

{# ---------------------------- JS ---------------------------- #}
{% block javascripts %}
  {# ... #}
{% endblock %}

", "back/dashboard/index.html.twig", "/var/www/html/erecrutement/templates/back/dashboard/index.html.twig");
    }
}
