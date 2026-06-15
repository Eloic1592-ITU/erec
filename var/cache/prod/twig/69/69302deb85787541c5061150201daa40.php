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

/* front/user/edit_profile.html.twig */
class __TwigTemplate_23ca7e5f2cdd36b651e9808881d82724 extends Template
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
        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/user/edit_profile.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    mot de passe
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/navbar.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/editpass.css"), "html", null, true);
        echo "\" />
";
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        echo twig_include($this->env, $context, "front/partials/_navbar.html.twig");
        echo "

    <main class=\"my-5\">
      <div class=\"container pt-5\">
        <div class=\"row d-flex flex-column align-items-center justify-content-center\">
          <div class=\"col-lg-8\">
            <div class=\"py-2 px-4 mb-4 bg-white rounded-4 strong-shadow\">
              <div class=\"container-fluid py-3\">
                <h1 class=\"mt-1 text-center border-bottom-dashed\">Modifier mes informations</h1>  
                ";
        // line 27
        echo twig_include($this->env, $context, "partials/forms/user/_edit_profile.html.twig");
        echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>


    ";
        // line 36
        echo twig_include($this->env, $context, "front/partials/_footer.html.twig");
        echo "
    
";
    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "
  ";
        // line 44
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 47
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-validation/jquery.validate.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 50
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customValidationMethods.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 53
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 56
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customAlert.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 59
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/editProfile.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 62
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/showHidePassword.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 65
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/submitLoader.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 68
        echo "  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 70));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 71
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 72
                echo "          showAlert(
            \"";
                // line 73
                echo ((($context["label"] == "success")) ? ("Succès") : ("Erreur"));
                echo "\",
            \"";
                // line 74
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["message"], "js"), "html", null, true);
                echo "\",
            \"";
                // line 75
                echo ((($context["label"] == "success")) ? ("success") : ("error"));
                echo "\"
          )
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "    });
  </script>
    
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/user/edit_profile.html.twig";
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
        return array (  221 => 79,  215 => 78,  206 => 75,  202 => 74,  198 => 73,  195 => 72,  190 => 71,  186 => 70,  182 => 68,  174 => 65,  166 => 62,  158 => 59,  150 => 56,  144 => 53,  136 => 50,  128 => 47,  120 => 44,  117 => 42,  113 => 41,  106 => 36,  94 => 27,  81 => 18,  77 => 17,  71 => 13,  67 => 12,  62 => 11,  58 => 10,  53 => 6,  49 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/user/edit_profile.html.twig", "/var/www/html/erecrutement/templates/front/user/edit_profile.html.twig");
    }
}
