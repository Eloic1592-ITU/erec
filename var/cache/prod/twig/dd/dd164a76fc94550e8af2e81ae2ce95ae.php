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
class __TwigTemplate_e8dbd799a3ec4a8cf8b17e3bdfe84eed extends Template
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
        $this->parent = $this->loadTemplate("back/layouts/base.html.twig", "back/dashboard/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    Dashboard
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/back/dashboard.css"), "html", null, true);
        echo "\" />
";
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 24), "getFirstName", [], "any", false, false, false, 24), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["users"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["candidats"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["positions"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["educations"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["certifications"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["internships"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["experiences"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["allfieldOfStudy"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["allDegree"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["positions"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["levels"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["skills"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["civilities"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["allMaritalStatus"] ?? null), "html", null, true);
        echo "</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
    
";
    }

    // line 200
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        echo "  ";
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
        return array (  355 => 201,  351 => 200,  338 => 189,  331 => 185,  323 => 180,  316 => 176,  308 => 171,  301 => 167,  293 => 162,  286 => 158,  278 => 153,  271 => 149,  263 => 144,  255 => 139,  247 => 134,  240 => 130,  222 => 115,  215 => 111,  207 => 106,  200 => 102,  192 => 97,  185 => 93,  177 => 88,  169 => 83,  151 => 68,  143 => 63,  135 => 58,  127 => 53,  119 => 48,  112 => 44,  95 => 30,  86 => 24,  76 => 17,  73 => 16,  69 => 15,  62 => 11,  58 => 10,  53 => 6,  49 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/dashboard/index.html.twig", "/var/www/html/erecrutement/templates/back/dashboard/index.html.twig");
    }
}
