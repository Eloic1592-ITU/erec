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

/* mail/registration.html.twig */
class __TwigTemplate_2e0e1db084fc6bb9bb64ed1764406d51 extends Template
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
<html>
<head>
    <meta charset=\"UTF-8\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <title>Confirmation d'inscription</title>
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
            margin-block: 16px;
        }

        .content .content-focus .form-group {
            display: block;
            width: 100%;
            margin-bottom: 8px;
            margin-top: 16px;
        }

        .content .content-focus .form-group:last-child {
            margin-bottom: 0px;
        }

        .content .content-focus .form-group span {
            display: block;
            color: #888;
        }

        .content .content-focus .form-group p {
            display: inline-block;
            background-color: white;
            text-decoration: none;
            text-align: center;
            font-size: 32px;
            margin: 8px auto;
            padding: 16px 24px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-weight: bold;
            color: #334155 !important;
        }

        .content .content-focus .form-group p a {
            text-decoration: none !important;
            color: #334155 !important;
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

            <h1>Confirmation d'inscription</h1>
        </div>
        <div class=\"content\">
            <p>Bonjour ";
        // line 108
        echo twig_escape_filter($this->env, ($context["firstName"] ?? null), "html", null, true);
        echo ",</p>
            <p>Nous vous remercions de l'intérêt que vous portez à notre institution. Votre compte a été créé avec succès avec les détails ci-après :</p>
            <div class=\"content-focus\">
                <div class=\"form-group\">
                    <span>Adresse e-mail</span>
                    <p>";
        // line 113
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "</p>
                </div>
                <div class=\"form-group\">
                    <span>Mot de passe</span>
                    <p>";
        // line 117
        echo twig_escape_filter($this->env, ($context["plainPassword"] ?? null), "html", null, true);
        echo "</p>
                </div>
            </div>
            <p>Nous vous invitons à modifier votre mot de passe lors de la première validation et veiller à la mise à jour des informations vous concernant.</p>
            <p>Bien cordialement,</p>
        </div>
        <div class=\"footer\">
            <p>--<br> L'équipe RH</p>
        </div>
    </div>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mail/registration.html.twig";
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
        return array (  161 => 117,  154 => 113,  146 => 108,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mail/registration.html.twig", "/var/www/html/erecrutement/templates/mail/registration.html.twig");
    }
}
