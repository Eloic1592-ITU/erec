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

/* front/layouts/base.html.twig */
class __TwigTemplate_3c3512a59dc8747f817b54fcb40368d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" class=\"h-100\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- x-icon -->
    <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-bcm.png"), "html", null, true);
        echo "\" type=\"image/x-icon\" />

    <title>BFM | e-recrutement | ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/aos/aos.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/font-awesome/css/all.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/animate/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/loader.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/backToTop.css"), "html", null, true);
        echo "\" />

    ";
        // line 22
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/customSweetalert.css"), "html", null, true);
        echo "\">

    ";
        // line 26
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "</head>
<body class=\"d-flex flex-column h-100\">
    
    ";
        // line 30
        echo twig_include($this->env, $context, "partials/_loader.html.twig");
        echo "

    ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
    ";
        // line 34
        echo twig_include($this->env, $context, "partials/_back_to_top.html.twig");
        echo "

    ";
        // line 37
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/aos/aos.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 40
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 43
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/fullPageLoader.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 46
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/backToTop.js"), "html", null, true);
        echo "\" ";
        echo $this->extensions['App\Twig\NonceSecurityExtension']->addNonceAttribute();
        echo "></script>

    ";
        // line 49
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "</body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/layouts/base.html.twig";
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
        return array (  182 => 49,  176 => 32,  170 => 26,  164 => 10,  158 => 50,  155 => 49,  147 => 46,  139 => 43,  131 => 40,  123 => 37,  118 => 34,  115 => 33,  113 => 32,  108 => 30,  103 => 27,  100 => 26,  95 => 23,  90 => 22,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  60 => 13,  55 => 10,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/layouts/base.html.twig", "/var/www/html/erecrutement/templates/front/layouts/base.html.twig");
    }
}
