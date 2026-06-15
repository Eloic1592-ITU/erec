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

/* back/civility/index.html.twig */
class __TwigTemplate_61d1ad5c728e630e67fd34cb8676bb8a extends Template
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
        $this->parent = $this->loadTemplate("back/layouts/base.html.twig", "back/civility/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    Dashboard | Civilités
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

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center justify-content-between\">
            <h3 class=\"card-title\">Liste des référentiels de civilités</h3>
            <button 
              data-bs-toggle=\"modal\" 
              data-bs-target=\"#civility-modal\"
              class=\"btn btn-primary btn-sm d-flex align-items-center gap-1\"
            >
              <i class=\"bx bx-plus\"></i> 
              Ajouter
            </button>
          </div>
          <div class=\"card-body p-0\">
            ";
        // line 35
        echo twig_include($this->env, $context, "back/partials/tables/civility/_index.html.twig");
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
    
";
    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/civility/index.html.twig";
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
        return array (  113 => 46,  109 => 45,  97 => 35,  76 => 17,  73 => 16,  69 => 15,  62 => 11,  58 => 10,  53 => 6,  49 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/civility/index.html.twig", "/var/www/html/erecrutement/templates/back/civility/index.html.twig");
    }
}
