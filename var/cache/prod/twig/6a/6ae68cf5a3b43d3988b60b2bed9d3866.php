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

/* security/reset_password.html.twig */
class __TwigTemplate_429e3fce82d2fa0ecef28b3eb6f4c5cb extends Template
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

    <title>BFM | e-recrutement | Réinitialisation de mot de passe</title>
    
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
              <h3>Réinitialisation de mot de passe</h3>
              <hr />
              <p>Veuiller saisir votre nouveau mot de passe</p>

              ";
        // line 58
        echo twig_include($this->env, $context, "partials/forms/security/_reset_password.html.twig");
        echo "
            </div>
          </div>
        </div>
      </div>
    </main>

    ";
        // line 66
        echo "    ";
        echo twig_include($this->env, $context, "partials/modals/_positions.html.twig");
        echo "

    ";
        // line 69
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 72
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 75
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-validation/jquery.validate.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 78
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customValidationMethods.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 81
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 84
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customAlert.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 87
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/resetPassword.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 90
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/showHidePassword.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 93
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/submitLoader.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 96
        echo "    <script ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo ">
      document.addEventListener('DOMContentLoaded', (event) => {
        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 98));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 99
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 100
                echo "            showAlert(
              \"\",
              \"";
                // line 102
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["message"], "js"), "html", null, true);
                echo "\",
              \"";
                // line 103
                echo ((($context["label"] == "success")) ? ("success") : ("error"));
                echo "\"
            )
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "      });
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
        return "security/reset_password.html.twig";
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
        return array (  253 => 107,  247 => 106,  238 => 103,  234 => 102,  230 => 100,  225 => 99,  221 => 98,  215 => 96,  207 => 93,  199 => 90,  191 => 87,  183 => 84,  177 => 81,  169 => 78,  161 => 75,  153 => 72,  145 => 69,  139 => 66,  129 => 58,  119 => 50,  115 => 48,  109 => 46,  107 => 45,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/reset_password.html.twig", "/var/www/html/erecrutement/templates/security/reset_password.html.twig");
    }
}
