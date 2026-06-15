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
class __TwigTemplate_5eab13e060f85e048ed9ecf0ee8380ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/submission/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/submission/details.html.twig"));

        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/submission/details.html.twig", 2);
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
        echo "    Details
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "hasSubmittedApplication", [], "any", false, false, false, 35)) {
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
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "hasSubmittedApplication", [], "any", false, false, false, 52)) {
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_application", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59)]), "html", null, true);
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
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "hasSubmittedApplication", [], "any", false, false, false, 85)) {
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_application", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92)]), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "  ";
        // line 113
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 116
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-validation/jquery.validate.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 119
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customValidationMethods.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 122
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/select2/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 125
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select2Init.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 128
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/js/intlTelInput.min.js\"></script>

  ";
        // line 131
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/intlTelInputInit.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 134
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

  ";
        // line 137
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customAlert.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 140
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/submitLoader.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 143
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/aosInit.js"), "html", null, true);
        echo "\"></script>

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  412 => 171,  408 => 170,  404 => 169,  400 => 168,  396 => 167,  384 => 157,  367 => 143,  361 => 140,  355 => 137,  351 => 134,  345 => 131,  341 => 128,  335 => 125,  329 => 122,  323 => 119,  317 => 116,  311 => 113,  309 => 112,  299 => 111,  286 => 106,  281 => 103,  267 => 92,  260 => 88,  256 => 86,  254 => 85,  247 => 81,  243 => 80,  239 => 79,  235 => 78,  231 => 77,  227 => 76,  223 => 75,  219 => 74,  215 => 73,  210 => 70,  196 => 59,  189 => 55,  185 => 53,  183 => 52,  176 => 48,  166 => 40,  160 => 36,  158 => 35,  147 => 28,  137 => 27,  125 => 23,  121 => 22,  117 => 21,  113 => 20,  108 => 19,  103 => 16,  98 => 15,  94 => 12,  92 => 11,  82 => 10,  71 => 6,  61 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# ---------------------------- Layout ---------------------------- #}
{% extends 'front/layouts/base.html.twig' %}

{# ---------------------------- Title ---------------------------- #}
{% block title %}
    Details
{% endblock %}

{# ---------------------------- CSS ---------------------------- #}
{% block stylesheets %}
  {# International Telephone Input CDN #}
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/css/intlTelInput.css\">

  {# select2 and select2-bootstrap-4-theme CDN #}
  <link rel=\"stylesheet\" href=\"{{ asset('vendor/select2/css/select2.min.css') }}\" />
  <link rel=\"stylesheet\" href=\"{{ asset('vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}\" />

  {# Custom CSS #}
  <link rel=\"stylesheet\" href=\"{{ asset('css/navbar.css') }}\" />
  <link rel=\"stylesheet\" href=\"{{ asset('css/submission.css') }}\" />
  <link rel=\"stylesheet\" href=\"{{ asset('css/inforecap.css') }}\" />
  <link rel=\"stylesheet\" href=\"{{ asset('css/multistep.css') }}\" />
  <link rel=\"stylesheet\" href=\"{{ asset('css/footer.css') }}\" />
{% endblock %}

{# ---------------------------- Body ---------------------------- #}
{% block body %}
    {{ include('front/partials/_navbar.html.twig') }}
    
    <main class=\"flex-shrink-0 pt-5 mb-5\">
      <div class=\"container pt-5\">
        <div class=\"py-4 mb-4 border-bottom-dashed\">
          <h1 class=\"mt-1\">Détails de ma candidature</h1>

          {% if not app.user.hasSubmittedApplication %}
            <p>
              Veuillez vérifier le contenu de votre candidature si toutes les informations sont correctes avant de la soumettre.
            </p>
          {% endif %}

          <div class=\"d-flex justify-content-end\">
            <button onclick=\"divToPrintDetails();\" class=\"btn btn-warning d-flex align-items-center gap-2\">
              <i class='bx bx-printer'></i> <span>Imprimer ma candidature</span>
            </button>
          </div>

          <div id=\"divToPrintDetails\" class=\"d-none\">
            {{ render(controller('App\\\\Controller\\\\PdfController::printDetails')) }}
          </div>

        </div>
        {% if not app.user.hasSubmittedApplication %}
          <div class=\"row mb-4\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">
            <div class=\"col-lg-12 d-flex gap-2 justify-content-between\">
              <a href=\"{{ path('app_submission') }}\" class=\"btn btn-primary d-flex align-items-center gap-2\">
                <i class=\"bx bx-edit\"></i> <span class=\"d-none d-lg-flex\">Modifier ma candidature</span>
              </a>
              
              <a id=\"submit-application-submit\" href=\"{{ path('submit_application', { 'id': app.user.id }) }}\" class=\"btn btn-success d-flex align-items-center gap-2 submit\">
                <i class=\"bx bx-envelope\"></i> <span class=\"d-none d-lg-flex\">Envoyer ma candidature</span>
              </a>

              <button id=\"submit-application-loader\" class=\"btn btn-success d-none\" type=\"button\" disabled>
                <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
                <span role=\"status\">Envoie en cours...</span>
              </button>
            </div>
          </div>
        {% endif %}
        <div class=\"row\">
          <div class=\"col-lg-12\">
              <div class=\"d-flex flex-column gap-3\">
                {{ include('front/partials/recap/_recap1.html.twig') }}
                {{ include('front/partials/recap/_recap2.html.twig') }}
                {{ include('front/partials/recap/_recap3.html.twig') }}
                {{ include('front/partials/recap/_recap4.html.twig') }}
                {{ include('front/partials/recap/_recap5.html.twig') }}
                {{ include('front/partials/recap/_recap6.html.twig') }}
                {{ include('front/partials/recap/_recap7.html.twig') }}
                {{ include('front/partials/recap/_recap8.html.twig') }}
                {{ include('front/partials/recap/_recap9.html.twig') }}
              </div>
          </div>
        </div>
        {% if not app.user.hasSubmittedApplication %}
          <div class=\"row my-4\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">
            <div class=\"col-lg-12 d-flex gap-2 justify-content-between\">
              <a href=\"{{ path('app_submission') }}\" class=\"btn btn-primary d-flex align-items-center gap-2\">
                <i class=\"bx bx-edit\"></i> <span class=\"d-none d-lg-flex\">Modifier ma candidature</span>
              </a>
              
              <a id=\"submit-application-submit\" href=\"{{ path('submit_application', { 'id': app.user.id }) }}\" class=\"btn btn-success d-flex align-items-center gap-2 submit\">
                <i class=\"bx bx-envelope\"></i> <span class=\"d-none d-lg-flex\">Envoyer ma candidature</span>
              </a>

              <button id=\"submit-application-loader\" class=\"btn btn-success d-none\" type=\"button\" disabled>
                <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
                <span role=\"status\">Envoie en cours...</span>
              </button>
            </div>
          </div>
        {% endif %}
      </div>
    </main>
    
    {{ include('front/partials/_footer.html.twig') }}
    
{% endblock %}

{# ---------------------------- JS ---------------------------- #}
{% block javascripts %}
  {# jQuery v1.11.1 #}
  <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>

  {# jQuery Validation #}
  <script src=\"{{ asset('vendor/jquery-validation/jquery.validate.js') }}\"></script>

  {# jQuery Custom Validation Methods #}
  <script src=\"{{ asset('js/customValidationMethods.js') }}\"></script>

  {# select2 #}
  <script src=\"{{ asset('vendor/select2/js/select2.full.min.js') }}\"></script>

  {# Select2 Init #}
  <script src=\"{{ asset('js/select2Init.js') }}\"></script>

  {# International Telephone Input CDN #}
  <script src=\"https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/js/intlTelInput.min.js\"></script>

  {# Initiate Int Tel Input #}
  <script src=\"{{ asset('js/intlTelInputInit.js') }}\"></script>

  {# sweetalert2 CDN #}
  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

  {# Custom Alert #}
  <script src=\"{{ asset('js/customAlert.js') }}\"></script>

  {# Submit Button Loader #}
  <script src=\"{{ asset('js/submitLoader.js') }}\"></script>

  {# AOS init #}
  <script src=\"{{ asset('js/aosInit.js') }}\"></script>

  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      \$('#submit-application-submit').on('click', function (e) {
        e.preventDefault();
        submitLoaderOn(\"submit-application\");

        window.location.href = \$(this).attr('href');
      });
    });
  </script>    

  {# Print details Script #}
  <script>
    const divToPrintDetails = () => {
      const divToPrintDetails = document.getElementById('divToPrintDetails');
      const popupWin = window.open('','_blank');
      popupWin.document.open();
      popupWin.document.write(`
        <html>
          <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <link rel=\"stylesheet\" href=\"{{ asset('vendor/font-awesome/css/all.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('vendor/boxicons/css/boxicons.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/inforecap.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/index.css') }}\">
          </head>
          <body onload=\"window.print()\">
            \${divToPrintDetails.innerHTML}
          </body>
        </html>
      `);
      popupWin.document.close();
    }
  </script>
  
{% endblock %}

", "front/submission/details.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\submission\\details.html.twig");
    }
}
