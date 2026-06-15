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

/* mail/reset_password.html.twig */
class __TwigTemplate_76044e6d70dbe9a4d7336f36bb5d94b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/reset_password.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <title>Réinitialisation de mot de passe</title>
    <style>
        * {
            font-family: \"Roboto\", sans-serif !important;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 24px 40px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .header {
            text-align: center;
            padding-bottom: 24px;
        }

        .header h1 {
            color: #334155;
        }

        .header .logo {
            display: block;
            margin: 0 auto;
            width: 100%;
        }

        .header .logo img {
            width: 50px;
        }

        .header .logo h2 {
            color: #12659b;
            margin-top: 16px;
        }

        .content {
            margin-top: 24px;
        }

        .content .content-focus {
            display: inline-block;
            width: 100%;
            text-align: center;
        }

        .content .content-focus .btn-mail {
            display: inline-block;
            background-color: #12659b;
            color: white;
            text-decoration: none;
            text-align: center;
            font-size: 20px;
            margin: 32px auto;
            padding: 16px 24px;
            border-radius: 8px;
        }

        .footer {
            margin-top: 24px;
            text-align: center;
            color: #888;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <div class=\"logo\">
                <img src=\"https://utfs.io/f/bd9cb5ab-edee-4628-8e2c-ca43ca8896f2-xig2zu.png\" alt=\"logo\">
                <h2>Banky Foiben'i Madagasikara</h2>
            </div>

            <h1>Réinitialisation de mot de passe</h1>
        </div>
        <div class=\"content\">
            <p>Bonjour ";
        // line 85
        echo twig_escape_filter($this->env, ($context["firstName"] ?? null), "html", null, true);
        echo ",</p>
            <p>Pour réinitialiser votre mot de passe, veuillez cliquer sur le bouton suivant :</p>
            <div class=\"content-focus\">
                <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" class=\"btn-mail\">Réinitialiser mon mot de passe</a>
            </div>
            <p>Merci,</p>
        </div>
        <div class=\"footer\">
            <p>--<br> L'équipe de recrutement</p>
        </div>
    </div>
</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mail/reset_password.html.twig";
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
        return array (  132 => 88,  126 => 85,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mail/reset_password.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\mail\\reset_password.html.twig");
    }
}
