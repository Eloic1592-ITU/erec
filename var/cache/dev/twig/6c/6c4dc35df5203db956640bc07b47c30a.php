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

/* mail/application_confirmation.html.twig */
class __TwigTemplate_55f88c40d9e9b0efe41921dcf58723d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/application_confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/application_confirmation.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <title>Confirmation de candidature</title>
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

            <h1>Confirmation de candidature</h1>
        </div>
        <div class=\"content\">
            <p>Bonjour ";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 67, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 67, $this->source); })()), "html", null, true);
        echo ",</p>
            <p>Nous avons bien reçu votre candidature et allons l'étudier avec la plus grande attention. Nous ne manquerons pas de vous contacter si votre profil répond à nos attentes.</p>
            <p>Dans le cas où nous ne pouvons vous offrir de poste en relation avec vos compétences, nous garderons votre dossier dans nos fichiers de façon à pouvoir vous recontacter si d'autres opportunités en adéquation avec votre profil se présenteraient.</p>
            <p>Par ailleurs, nous vous invitons à consulter régulièrement notre actualité et les offres d'emploi sur notre site et à postuler le cas échéant.</p>
            <p>Nous vous souhaitons pleine réussite dans vos démarches.</p>
            <p>Bien cordialement,</p>
        </div>
        <div class=\"footer\">
            <p>--<br> L'équipe RH</p>
        </div>
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mail/application_confirmation.html.twig";
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
        return array (  111 => 67,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <title>Confirmation de candidature</title>
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

            <h1>Confirmation de candidature</h1>
        </div>
        <div class=\"content\">
            <p>Bonjour {{ firstName }} {{ lastName }},</p>
            <p>Nous avons bien reçu votre candidature et allons l'étudier avec la plus grande attention. Nous ne manquerons pas de vous contacter si votre profil répond à nos attentes.</p>
            <p>Dans le cas où nous ne pouvons vous offrir de poste en relation avec vos compétences, nous garderons votre dossier dans nos fichiers de façon à pouvoir vous recontacter si d'autres opportunités en adéquation avec votre profil se présenteraient.</p>
            <p>Par ailleurs, nous vous invitons à consulter régulièrement notre actualité et les offres d'emploi sur notre site et à postuler le cas échéant.</p>
            <p>Nous vous souhaitons pleine réussite dans vos démarches.</p>
            <p>Bien cordialement,</p>
        </div>
        <div class=\"footer\">
            <p>--<br> L'équipe RH</p>
        </div>
    </div>
</body>
</html>
", "mail/application_confirmation.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\mail\\application_confirmation.html.twig");
    }
}
