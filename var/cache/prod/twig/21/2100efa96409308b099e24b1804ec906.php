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
class __TwigTemplate_8f3bc63dbaac536e5d96da087191e85f extends Template
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
        $this->parent = $this->loadTemplate("back/layouts/base.html.twig", "back/user/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    Dashboard | Utilisateurs
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/back/user.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/position.css"), "html", null, true);
        echo "\" />
";
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, ($context["adminCount"] ?? null), "html", null, true);
        echo "</span>
              </li>
              <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                Nombre d'utilisateurs simples (Utilisateurs)
                <span class=\"badge bg-primary rounded-pill\">";
        // line 42
        echo twig_escape_filter($this->env, ($context["usersOnlyCount"] ?? null), "html", null, true);
        echo "</span>
              </li>
              <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                Utilisateurs ayant soumis leur candidature (Candidats)
                <span class=\"badge bg-teal rounded-pill\">";
        // line 46
        echo twig_escape_filter($this->env, ($context["submittedUserCount"] ?? null), "html", null, true);
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
    }

    // line 86
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, ($context["adminCount"] ?? null), "html", null, true);
        echo ", name: 'Admins' },
            { value: ";
        // line 121
        echo twig_escape_filter($this->env, ($context["usersOnlyCount"] ?? null), "html", null, true);
        echo ", name: 'Utilisateurs' },
            { value: ";
        // line 122
        echo twig_escape_filter($this->env, ($context["submittedUserCount"] ?? null), "html", null, true);
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
        return array (  209 => 122,  205 => 121,  201 => 120,  166 => 87,  162 => 86,  150 => 76,  117 => 46,  110 => 42,  103 => 38,  80 => 18,  77 => 17,  73 => 16,  67 => 12,  62 => 11,  58 => 10,  53 => 6,  49 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/user/index.html.twig", "/var/www/html/erecrutement/templates/back/user/index.html.twig");
    }
}
