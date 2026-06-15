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

/* front/submission/submission.html.twig */
class __TwigTemplate_45530865d7b7d1097e44dad98ee2c29b extends Template
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
        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/submission/submission.html.twig", 2);
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

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "front/partials/_navbar.html.twig");
        echo "
    
    <main class=\"flex-shrink-0 pt-5 mb-5\">
      <div class=\"container pt-5\">
        <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\">
          <div class=\"py-3\">
            <h1 class=\"mt-1 mb-4 mb-lg-5 text-center\">Nouvelle candidature</h1>
            <h5 class=\"mb-5 pb-4 text-center border-bottom-dashed d-none d-lg-block\">Veuillez remplir les champs qui sont marqués obligatoires (<span class=\"text-danger\">*</span>)</h5>
            <div class=\"progress px-1\">
              <div
                class=\"progress-bar\"
                role=\"progressbar\"
                style=\"width: 0%\"
                aria-valuenow=\"0\"
                aria-valuemin=\"0\"
                aria-valuemax=\"100\"
              ></div>
            </div>
            <div class=\"step-container d-none d-lg-flex justify-content-between\">
              <div class=\"step-circle\"><span>1</span></div>
              <div class=\"step-circle\"><span>2</span></div>
              <div class=\"step-circle\"><span>3</span></div>
              <div class=\"step-circle\"><span>4</span></div>
              <div class=\"step-circle\"><span>5</span></div>
              <div class=\"step-circle\"><span>6</span></div>
              <div class=\"step-circle\"><span>7</span></div>
              <div class=\"step-circle\"><span>8</span></div>
              <div class=\"step-circle\"><span>9</span></div>
            </div>
          </div>
          <div id=\"multi-step-form\">
            ";
        // line 61
        echo twig_include($this->env, $context, "front/partials/steps/_step1.html.twig");
        echo "
            ";
        // line 62
        echo twig_include($this->env, $context, "front/partials/steps/_step2.html.twig");
        echo "
            ";
        // line 63
        echo twig_include($this->env, $context, "front/partials/steps/_step3.html.twig");
        echo "
            ";
        // line 64
        echo twig_include($this->env, $context, "front/partials/steps/_step4.html.twig");
        echo "
            ";
        // line 65
        echo twig_include($this->env, $context, "front/partials/steps/_step5.html.twig");
        echo "
            ";
        // line 66
        echo twig_include($this->env, $context, "front/partials/steps/_step6.html.twig");
        echo "
            ";
        // line 67
        echo twig_include($this->env, $context, "front/partials/steps/_step7.html.twig");
        echo "
            ";
        // line 68
        echo twig_include($this->env, $context, "front/partials/steps/_step8.html.twig");
        echo "
            ";
        // line 69
        echo twig_include($this->env, $context, "front/partials/steps/_step9.html.twig");
        echo "
          </div>
        </div>
      </div>
    </main>
    
    ";
        // line 75
        echo twig_include($this->env, $context, "front/partials/_footer.html.twig");
        echo "
    
";
    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "  ";
        // line 82
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 85
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-validation/jquery.validate.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 88
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customValidationMethods.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 91
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 94
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select2Init.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 97
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/js/intlTelInput.min.js\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 100
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/intlTelInputInit.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 103
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 106
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customAlert.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 109
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/multistep.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 112
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/addRemoveForm.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 115
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/eventBus.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

  ";
        // line 118
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/submitLoader.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>
  
  ";
        // line 121
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/step1.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>
  <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/step2.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>
  <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/step3.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>
  <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/step4.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>
  <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/step5.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>
  <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/step6.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>
  <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/step7.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>
  <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/step8.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>
  <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/step9.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>
  
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/submission/submission.html.twig";
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
        return array (  346 => 129,  340 => 128,  334 => 127,  328 => 126,  322 => 125,  316 => 124,  310 => 123,  304 => 122,  297 => 121,  289 => 118,  281 => 115,  273 => 112,  265 => 109,  257 => 106,  251 => 103,  243 => 100,  237 => 97,  229 => 94,  221 => 91,  213 => 88,  205 => 85,  197 => 82,  195 => 81,  191 => 80,  184 => 75,  175 => 69,  171 => 68,  167 => 67,  163 => 66,  159 => 65,  155 => 64,  151 => 63,  147 => 62,  143 => 61,  109 => 30,  106 => 29,  102 => 28,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  78 => 19,  73 => 16,  68 => 15,  64 => 12,  62 => 11,  58 => 10,  53 => 6,  49 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/submission/submission.html.twig", "/var/www/html/erecrutement/templates/front/submission/submission.html.twig");
    }
}
