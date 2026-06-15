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

/* security/error.html.twig */
class __TwigTemplate_fbb09f305b41c004032373f6b350a9cd extends Template
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
        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "security/error.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  Accueil
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/position.css"), "html", null, true);
        echo "\" />
";
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "  <div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
      <div class=\"row\">
        <div class=\"col mt-4 alert-danger py-5 px-3 text-center\">
          ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 20), "attributes", [], "any", false, true, false, 20), "get", ["exception"], "method", true, true, false, 20) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 20), "attributes", [], "any", false, true, false, 20), "get", ["exception"], "method", false, true, false, 20), "statusCode", [], "any", true, true, false, 20))) {
            // line 21
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 21), "attributes", [], "any", false, false, false, 21), "get", ["exception"], "method", false, false, false, 21), "statusCode", [], "any", false, false, false, 21) == "404")) {
                // line 22
                echo "                  <h1 class=\"display-2 fw-bold\">ERREUR 404</h1>
                  <h5>La page que vous recherchez n'existe pas... ou plus !</h5>
              ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 24
($context["app"] ?? null), "request", [], "any", false, false, false, 24), "attributes", [], "any", false, false, false, 24), "get", ["exception"], "method", false, false, false, 24), "statusCode", [], "any", false, false, false, 24) == "403")) {
                // line 25
                echo "                  <h1 class=\"display-2 fw-bold\">ERREUR 403</h1>
                  <h5>Vous ne pouvez pas afficher cette page ou cette section !</h5>
              ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 27
($context["app"] ?? null), "request", [], "any", false, false, false, 27), "attributes", [], "any", false, false, false, 27), "get", ["exception"], "method", false, false, false, 27), "statusCode", [], "any", false, false, false, 27) == "500")) {
                // line 28
                echo "                  <h1 class=\"display-2 fw-bold\">ERREUR 500</h1>
                  <h5>Oups !?! Alors là, on a un problème... La page ou la section ne s'affiche pas.</h5>
              ";
            } else {
                // line 31
                echo "                  <h5>Oups !?! Désolé, il y a une erreur.</h5>
              ";
            }
            // line 33
            echo "          ";
        } else {
            // line 34
            echo "              <h5>Oups !?! Désolé, il y a une erreur.</h5>
          ";
        }
        // line 36
        echo "
        </div>
        <div class=\"mt-3 text-center\">
          <a class=\"btn btn-primary p-3 lead\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_positions");
        echo "\">Page d'accueil</a>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/error.html.twig";
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
        return array (  131 => 48,  127 => 47,  117 => 39,  112 => 36,  108 => 34,  105 => 33,  101 => 31,  96 => 28,  94 => 27,  90 => 25,  88 => 24,  84 => 22,  81 => 21,  79 => 20,  73 => 16,  69 => 15,  62 => 11,  58 => 10,  53 => 6,  49 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/error.html.twig", "/var/www/html/erecrutement/templates/security/error.html.twig");
    }
}
