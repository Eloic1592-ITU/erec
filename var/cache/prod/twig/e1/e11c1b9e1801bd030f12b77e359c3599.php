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

/* front/submission/details.html.twig */
class __TwigTemplate_7f1ef7c24ff5cc737024100e51657d1d extends Template
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
        return "front/layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/submission/details.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    Details
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "  ";
        // line 12
        echo "  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/css/intlTelInput.css\">

  ";
        // line 15
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/select2/css/select2.min.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css"), "html", null, true);
        echo "\" />

  ";
        // line 19
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/navbar.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/submission.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/inforecap.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/multistep.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\" />
";
    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        echo twig_include($this->env, $context, "front/partials/_navbar.html.twig");
        echo "
    
    <main class=\"flex-shrink-0 pt-5 mb-5\">
      <div class=\"container pt-5\">
        <div class=\"py-4 mb-4 border-bottom-dashed\">
          <h1 class=\"mt-1\">Détails de ma candidature</h1>

          ";
        // line 35
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 35), "hasSubmittedApplication", [], "any", false, false, false, 35)) {
            // line 36
            echo "            <p>
              Veuillez vérifier le contenu de votre candidature si toutes les informations sont correctes avant de la soumettre.
            </p>
          ";
        }
        // line 40
        echo "
          <div class=\"d-flex justify-content-end\">
            <button onclick=\"divToPrintDetails();\" class=\"btn btn-warning d-flex align-items-center gap-2\">
              <i class='bx bx-printer'></i> <span>Imprimer ma candidature</span>
            </button>
          </div>

          <div id=\"divToPrintDetails\" class=\"d-none\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PdfController::printDetails"));
        echo "
          </div>

        </div>
        ";
        // line 52
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 52), "hasSubmittedApplication", [], "any", false, false, false, 52)) {
            // line 53
            echo "          <div class=\"row mb-4\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">
            <div class=\"col-lg-12 d-flex gap-2 justify-content-between\">
              <a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_submission");
            echo "\" class=\"btn btn-primary d-flex align-items-center gap-2\">
                <i class=\"bx bx-edit\"></i> <span class=\"d-none d-lg-flex\">Modifier ma candidature</span>
              </a>
              
              <a id=\"submit-application-submit\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_application", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" class=\"btn btn-success d-flex align-items-center gap-2 submit\">
                <i class=\"bx bx-envelope\"></i> <span class=\"d-none d-lg-flex\">Envoyer ma candidature</span>
              </a>

              <button id=\"submit-application-loader\" class=\"btn btn-success d-none\" type=\"button\" disabled>
                <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
                <span role=\"status\">Envoie en cours...</span>
              </button>
            </div>
          </div>
        ";
        }
        // line 70
        echo "        <div class=\"row\">
          <div class=\"col-lg-12\">
              <div class=\"d-flex flex-column gap-3\">
                ";
        // line 73
        echo twig_include($this->env, $context, "front/partials/recap/_recap1.html.twig");
        echo "
                ";
        // line 74
        echo twig_include($this->env, $context, "front/partials/recap/_recap2.html.twig");
        echo "
                ";
        // line 75
        echo twig_include($this->env, $context, "front/partials/recap/_recap3.html.twig");
        echo "
                ";
        // line 76
        echo twig_include($this->env, $context, "front/partials/recap/_recap4.html.twig");
        echo "
                ";
        // line 77
        echo twig_include($this->env, $context, "front/partials/recap/_recap5.html.twig");
        echo "
                ";
        // line 78
        echo twig_include($this->env, $context, "front/partials/recap/_recap6.html.twig");
        echo "
                ";
        // line 79
        echo twig_include($this->env, $context, "front/partials/recap/_recap7.html.twig");
        echo "
                ";
        // line 80
        echo twig_include($this->env, $context, "front/partials/recap/_recap8.html.twig");
        echo "
                ";
        // line 81
        echo twig_include($this->env, $context, "front/partials/recap/_recap9.html.twig");
        echo "
              </div>
          </div>
        </div>
        ";
        // line 85
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 85), "hasSubmittedApplication", [], "any", false, false, false, 85)) {
            // line 86
            echo "          <div class=\"row my-4\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">
            <div class=\"col-lg-12 d-flex gap-2 justify-content-between\">
              <a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_submission");
            echo "\" class=\"btn btn-primary d-flex align-items-center gap-2\">
                <i class=\"bx bx-edit\"></i> <span class=\"d-none d-lg-flex\">Modifier ma candidature</span>
              </a>
              
              <a id=\"submit-application-submit\" href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_application", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\" class=\"btn btn-success d-flex align-items-center gap-2 submit\">
                <i class=\"bx bx-envelope\"></i> <span class=\"d-none d-lg-flex\">Envoyer ma candidature</span>
              </a>

              <button id=\"submit-application-loader\" class=\"btn btn-success d-none\" type=\"button\" disabled>
                <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
                <span role=\"status\">Envoie en cours...</span>
              </button>
            </div>
          </div>
        ";
        }
        // line 103
        echo "      </div>
    </main>
    
    ";
        // line 106
        echo twig_include($this->env, $context, "front/partials/_footer.html.twig");
        echo "
    
";
    }

    // line 111
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "  ";
        // line 113
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 116
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-validation/jquery.validate.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 119
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customValidationMethods.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 122
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 125
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select2Init.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 128
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/js/intlTelInput.min.js\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 131
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/intlTelInputInit.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 134
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 137
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customAlert.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 140
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/submitLoader.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 143
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/aosInit.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      \$('#submit-application-submit').on('click', function (e) {
        e.preventDefault();
        submitLoaderOn(\"submit-application\");

        window.location.href = \$(this).attr('href');
      });
    });
  </script>    

  ";
        // line 157
        echo "  <script>
    const divToPrintDetails = () => {
      const divToPrintDetails = document.getElementById('divToPrintDetails');
      const popupWin = window.open('','_blank');
      popupWin.document.open();
      popupWin.document.write(`
        <html>
          <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <link rel=\"stylesheet\" href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/font-awesome/css/all.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/inforecap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
          </head>
          <body onload=\"window.print()\">
            \${divToPrintDetails.innerHTML}
          </body>
        </html>
      `);
      popupWin.document.close();
    }
  </script>
  
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/submission/details.html.twig";
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
        return array (  380 => 171,  376 => 170,  372 => 169,  368 => 168,  364 => 167,  352 => 157,  333 => 143,  325 => 140,  317 => 137,  311 => 134,  303 => 131,  297 => 128,  289 => 125,  281 => 122,  273 => 119,  265 => 116,  257 => 113,  255 => 112,  251 => 111,  244 => 106,  239 => 103,  225 => 92,  218 => 88,  214 => 86,  212 => 85,  205 => 81,  201 => 80,  197 => 79,  193 => 78,  189 => 77,  185 => 76,  181 => 75,  177 => 74,  173 => 73,  168 => 70,  154 => 59,  147 => 55,  143 => 53,  141 => 52,  134 => 48,  124 => 40,  118 => 36,  116 => 35,  105 => 28,  101 => 27,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  78 => 19,  73 => 16,  68 => 15,  64 => 12,  62 => 11,  58 => 10,  53 => 6,  49 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/submission/details.html.twig", "/var/www/html/erecrutement/templates/front/submission/details.html.twig");
    }
}
