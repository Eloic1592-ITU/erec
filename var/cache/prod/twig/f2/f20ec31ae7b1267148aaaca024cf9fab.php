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

/* security/login.html.twig */
class __TwigTemplate_f37dfae6220c5dbab34edf9c3205904c extends Template
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

    <title>BFM | e-recrutement | Connexion</title>
    
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/font-awesome/css/all.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/customSweetalert.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/position.css"), "html", null, true);
        echo "\" />
  </head>
  <body class=\"d-flex align-items-center justify-content-center\">
    <main class=\"d-flex justify-content-center items-center\">
      <div class=\"container\">
        <div class=\"row d-none d-lg-flex justify-content-center mb-5\">
          <div class=\"col-lg-12\">
            <div class=\"text-center welcome-text\">
              <h2 class=\"text-primary\">
                Bienvenue sur le site de candidature en ligne de Banky Foiben'i
                Madagasikara
              </h2>
              <h5 class=\"text-white\">
                Rejoignez notre équipe pour bâtir une Banque Centrale Forte,
                Moderne et qui contribue au bien-être des citoyens
              </h5>
            </div>
          </div>
        </div>
        <div class=\"row d-flex justify-content-center\">
          <div class=\"col-lg-4 border border-end border-2 border-white col-register\">
            <div class=\"d-flex flex-column text-center p-4\">
              <h3>Créer un compte ?</h3>
              <hr />
              <p>
                Vous pouvez vous inscrire directement en cliquant sur le bouton ci-dessous et bénéficier de notre service de recrutement en ligne.
              </p>
              ";
        // line 45
        if ((array_key_exists("refPosition", $context) && ($context["refPosition"] ?? null))) {
            // line 46
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registeration", ["ref" => ($context["refPosition"] ?? null)]), "html", null, true);
            echo "\" class=\"btn btn-lg btn-success w-100\">S'inscrire maintenant</a>
              ";
        } else {
            // line 48
            echo "                <button type=\"button\" class=\"btn btn-lg btn-success w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#positionsModal\">S'inscrire maintenant</button>
              ";
        }
        // line 50
        echo "            </div>
          </div>
          <div class=\"col-lg-4 border border-2 border-white col-login\">
            <div class=\"d-flex flex-column text-center p-4\">
              <h3>Vous avez déjà un compte ?</h3>
              <hr />
              <p class=\"text-start\">Connectez-vous à votre compte.</p>
              ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 57)) {
            // line 58
            echo "                <div class=\"mb-3\">
                  You are logged in as ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 59), "userIdentifier", [], "any", false, false, false, 59), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                </div>
              ";
        }
        // line 62
        echo "
              <form id=\"login-form\" method=\"post\" action=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
                <div class=\"input-group input-group-lg flex-nowrap mb-3\">
                  <span class=\"input-group-text\" id=\"emai\"><i class=\"fas fa-user\"></i></span>
                  <input type=\"email\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" placeholder=\"Adresse e-mail\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"email\" required autofocus />
                </div>
                <div class=\"input-group input-group-lg flex-nowrap\">
                  <span class=\"input-group-text\" id=\"mdp\"><i class=\"fas fa-key\"></i></span>
                  <input type=\"password\" placeholder=\"Mot de passe\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required />
                  <span class=\"input-group-text input-group-text-end show-pass\"><i class='bx bx-show'></i></span>
                  <span class=\"input-group-text input-group-text-end hide-pass d-none\"><i class='bx bx-hide'></i></span>
                </div>

                <input 
                  type=\"hidden\" 
                  name=\"_csrf_token\"
                  value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                />

                <hr class=\"mt-4\" />
                <div class=\"w-100 text-end\">
                  <a class=\"security-link\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Mot de passe oublié ?</a>
                </div>
                <div class=\"w-100 text-end\">
                  <button id=\"login-submit\" type=\"submit\" class=\"btn btn-lg btn-primary mt-3 w-100\">
                    Se connecter
                  </button>

                  <button id=\"login-loader\" class=\"d-flex justify-content-center align-items-center gap-2 btn btn-primary btn-lg ms-auto mt-3 w-100 d-none\" type=\"button\" disabled>
                    <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
                    <span role=\"status\">connexion en cours...</span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

    ";
        // line 103
        echo "    ";
        echo twig_include($this->env, $context, "partials/modals/_positions.html.twig");
        echo "

    ";
        // line 106
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 109
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 112
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 115
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customAlert.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>
    
    ";
        // line 118
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/showHidePassword.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 121
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/submitLoader.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 124
        echo "    <script ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo ">
      document.addEventListener('DOMContentLoaded', (event) => {
        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 126));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 127
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 128
                echo "            showAlert(
              \"\",
              \"";
                // line 130
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["message"], "js"), "html", null, true);
                echo "\",
              \"";
                // line 131
                echo ((($context["label"] == "success")) ? ("success") : ("error"));
                echo "\"
            )
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "
        ";
        // line 136
        if (($context["error"] ?? null)) {
            // line 137
            echo "          showAlert(
            \"\",
            \"Le l'adresse e-mail ou le mot de passe est incorrect.\",
            \"error\"
          )
        ";
        }
        // line 143
        echo "
        // Événement de soumission du formulaire de connexion
        \$('#login-form').on('submit', function() {
            submitLoaderOn('login');
        });
      });

        
    </script>
  </body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  298 => 143,  290 => 137,  288 => 136,  285 => 135,  279 => 134,  270 => 131,  266 => 130,  262 => 128,  257 => 127,  253 => 126,  247 => 124,  239 => 121,  231 => 118,  223 => 115,  217 => 112,  209 => 109,  201 => 106,  195 => 103,  173 => 83,  165 => 78,  150 => 66,  144 => 63,  141 => 62,  133 => 59,  130 => 58,  128 => 57,  119 => 50,  115 => 48,  109 => 46,  107 => 45,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/var/www/html/erecrutement/templates/security/login.html.twig");
    }
}
