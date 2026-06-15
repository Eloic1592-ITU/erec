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

/* security/register.html.twig */
class __TwigTemplate_cc837d23a4b282042ef4d7f8d165d9f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <!-- x-icon -->
    <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-bcm.png"), "html", null, true);
        echo "\" type=\"image/x-icon\" />

    <title>BFM | e-recrutement | Inscription</title>

    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/font-awesome/css/all.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/customSweetalert.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/register.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/position.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/loader.css"), "html", null, true);
        echo "\" />
  </head>
  <body>

    ";
        // line 22
        echo twig_include($this->env, $context, "partials/_loader.html.twig");
        echo "

    <main>
      <img class=\"vector-1\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Polygon 1.png"), "html", null, true);
        echo "\" alt=\"poly-1\" />
      <img class=\"vector-2\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Polygon 2.png"), "html", null, true);
        echo "\" alt=\"poly-2\" />
      <div class=\"logo\">
        <div class=\"text-center p-5 icone icone-lg\">
          <img class=\"mb-2\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-bcm.png"), "html", null, true);
        echo "\" alt=\"bfm\" />
          <h2 class=\"text-uppercase\">Banky Foiben'i Madagasikara</h2>
        </div>
        <div class=\"blob\"></div>
      </div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-7 come position-relative\">
            <img
              class=\"team-pic\"
              src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team_pic.png"), "html", null, true);
        echo "\"
              alt=\"team_pic\"
            />
            <h1>REJOIGNEZ</h1>
            <h1>NOTRE <span>EQUIPE</span></h1>
          </div>
          <div class=\"col-lg-5\">
            <div class=\"text-center px-5 py-5 icone icone-sm\">
              <img class=\"mb-2\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-bcm.png"), "html", null, true);
        echo "\" alt=\"bfm\" />
              <h2 class=\"text-uppercase\">Banky Foiben'i Madagasikara</h2>
            </div>
            <h1 class=\"text-center title\">Créer un compte</h1>
            <p class=\"text-center mb-4 subtitle\">
              Inscription au poste de : <span class=\"text-primary\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["positionName"]) || array_key_exists("positionName", $context) ? $context["positionName"] : (function () { throw new RuntimeError('Variable "positionName" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "</span>
            </p>
            <div class=\"row justify-content-center\">
              <div class=\"col-lg-10\">
                ";
        // line 56
        echo twig_include($this->env, $context, "partials/forms/security/_register.html.twig");
        echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    ";
        // line 65
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 68
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 71
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-validation/jquery.validate.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 74
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customValidationMethods.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 77
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

    ";
        // line 80
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customAlert.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 83
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/registration.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 86
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/showHidePassword.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 89
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/submitLoader.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 92
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/fullPageLoader.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 95
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js\"></script>

    ";
        // line 98
        echo "    <script>
      document.addEventListener('DOMContentLoaded', (event) => {
        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "flashes", [], "any", false, false, false, 100));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 101
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 102
                echo "            showAlert(
              \"\",
              \"";
                // line 104
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["message"], "js"), "html", null, true);
                echo "\",
              \"";
                // line 105
                echo ((($context["label"] == "success")) ? ("success") : ("error"));
                echo "\"
            )
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "      });

      document.addEventListener(\"DOMContentLoaded\", function() {
        Inputmask(\"999 999 999 999\").mask(document.querySelector('input[name=\"registration[cin]\"]'));
      });
    </script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/register.html.twig";
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
        return array (  254 => 109,  248 => 108,  239 => 105,  235 => 104,  231 => 102,  226 => 101,  222 => 100,  218 => 98,  214 => 95,  208 => 92,  202 => 89,  196 => 86,  190 => 83,  184 => 80,  180 => 77,  174 => 74,  168 => 71,  162 => 68,  156 => 65,  145 => 56,  138 => 52,  130 => 47,  119 => 39,  106 => 29,  100 => 26,  96 => 25,  90 => 22,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <!-- x-icon -->
    <link rel=\"icon\" href=\"{{ asset('img/logo-bcm.png') }}\" type=\"image/x-icon\" />

    <title>BFM | e-recrutement | Inscription</title>

    <link rel=\"stylesheet\" href=\"{{ asset('vendor/font-awesome/css/all.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/index.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/customSweetalert.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/register.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/position.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/loader.css') }}\" />
  </head>
  <body>

    {{ include('partials/_loader.html.twig') }}

    <main>
      <img class=\"vector-1\" src=\"{{ asset('img/Polygon 1.png') }}\" alt=\"poly-1\" />
      <img class=\"vector-2\" src=\"{{ asset('img/Polygon 2.png') }}\" alt=\"poly-2\" />
      <div class=\"logo\">
        <div class=\"text-center p-5 icone icone-lg\">
          <img class=\"mb-2\" src=\"{{ asset('img/logo-bcm.png') }}\" alt=\"bfm\" />
          <h2 class=\"text-uppercase\">Banky Foiben'i Madagasikara</h2>
        </div>
        <div class=\"blob\"></div>
      </div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-7 come position-relative\">
            <img
              class=\"team-pic\"
              src=\"{{ asset('img/team_pic.png') }}\"
              alt=\"team_pic\"
            />
            <h1>REJOIGNEZ</h1>
            <h1>NOTRE <span>EQUIPE</span></h1>
          </div>
          <div class=\"col-lg-5\">
            <div class=\"text-center px-5 py-5 icone icone-sm\">
              <img class=\"mb-2\" src=\"{{ asset('img/logo-bcm.png') }}\" alt=\"bfm\" />
              <h2 class=\"text-uppercase\">Banky Foiben'i Madagasikara</h2>
            </div>
            <h1 class=\"text-center title\">Créer un compte</h1>
            <p class=\"text-center mb-4 subtitle\">
              Inscription au poste de : <span class=\"text-primary\">{{ positionName }}</span>
            </p>
            <div class=\"row justify-content-center\">
              <div class=\"col-lg-10\">
                {{ include('partials/forms/security/_register.html.twig') }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    {# jQuery v1.11.1 #}
    <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>

    {# Bootstrap JS #}
    <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

    {# jQuery Validation #}
    <script src=\"{{ asset('vendor/jquery-validation/jquery.validate.js') }}\"></script>

    {# jQuery Custom Validation Methods #}
    <script src=\"{{ asset('js/customValidationMethods.js') }}\"></script>

    {# sweetalert2 CDN #}
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

    {# Custom Alert #}
    <script src=\"{{ asset('js/customAlert.js') }}\"></script>

    {# Registration Srcipt #}
    <script src=\"{{ asset('js/registration.js') }}\"></script>

    {# Show Hide Password #}
    <script src=\"{{ asset('js/showHidePassword.js') }}\"></script>

    {# Submit Button Loader #}
    <script src=\"{{ asset('js/submitLoader.js') }}\"></script>

    {# Full Page Loader #}
    <script src=\"{{ asset('js/fullPageLoader.js') }}\"></script>

    {# jquery inputmask #}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js\"></script>

    {# Other Custom Scripts #}
    <script>
      document.addEventListener('DOMContentLoaded', (event) => {
        {% for label, messages in app.flashes %}
          {% for message in messages %}
            showAlert(
              \"\",
              \"{{ message|e('js') }}\",
              \"{{ label == 'success' ? 'success' : 'error' }}\"
            )
          {% endfor %}
        {% endfor %}
      });

      document.addEventListener(\"DOMContentLoaded\", function() {
        Inputmask(\"999 999 999 999\").mask(document.querySelector('input[name=\"registration[cin]\"]'));
      });
    </script>
  </body>
</html>
", "security/register.html.twig", "/var/www/html/erecrutement/templates/security/register.html.twig");
    }
}
