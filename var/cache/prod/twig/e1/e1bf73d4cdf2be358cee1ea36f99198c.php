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

/* front/submission/index.html.twig */
class __TwigTemplate_ed00bb41fbbd50ba472c470a1e1a35c8 extends Template
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
        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/submission/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    Accueil
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
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

    <main class=\"mb-5\">
      <div class=\"container pt-5\">
        <div class=\"row\">
          <div class=\"col-lg-12 d-flex flex-column align-items-center justify-content-center\">
            <h1 class=\"mt-1 mb-5 text-center\">Bonjour ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 24), "getUserFullName", [], "method", false, false, false, 24), "html", null, true);
        echo "</h1>
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bell.png"), "html", null, true);
        echo "\" alt=\"bell\" width=\"20%\" />

            ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27), "hasSubmittedApplication", [], "any", false, false, false, 27)) {
            // line 28
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details");
            echo "\" class=\"btn btn-primary btn-lg mt-5\">Voir les details de ma candidature</a>
            ";
        } else {
            // line 30
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_submission");
            echo "\" class=\"btn btn-success btn-lg mt-5\">Créer ma candidature maintenant</a>
            ";
        }
        // line 32
        echo "          </div>
        </div>
      </div>
    </main>

    ";
        // line 37
        echo twig_include($this->env, $context, "front/partials/_footer.html.twig");
        echo "
    
";
    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "
  ";
        // line 45
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 48
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customAlert.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 51
        echo "  <script ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo ">
    document.addEventListener('DOMContentLoaded', (event) => {
      ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 54
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 55
                echo "          showAlert(
            \"\",
            \"";
                // line 57
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["message"], "js"), "html", null, true);
                echo "\",
            \"";
                // line 58
                echo ((($context["label"] == "success")) ? ("success") : ("error"));
                echo "\"
          )
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    });
  </script>
    
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/submission/index.html.twig";
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
        return array (  187 => 62,  181 => 61,  172 => 58,  168 => 57,  164 => 55,  159 => 54,  155 => 53,  149 => 51,  141 => 48,  135 => 45,  132 => 43,  128 => 42,  121 => 37,  114 => 32,  108 => 30,  102 => 28,  100 => 27,  95 => 25,  91 => 24,  81 => 18,  77 => 17,  71 => 13,  67 => 12,  62 => 11,  58 => 10,  53 => 6,  49 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/submission/index.html.twig", "/var/www/html/erecrutement/templates/front/submission/index.html.twig");
    }
}
