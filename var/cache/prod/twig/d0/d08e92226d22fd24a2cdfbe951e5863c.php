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

/* partials/forms/security/_reset_password.html.twig */
class __TwigTemplate_778879fb37a16f84e650f58311b04da2 extends Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "reset-password-form", "class" => "needs-validation", "novalidate" => ""]]);
        // line 7
        echo "

    <div class=\"input-group input-group-lg flex-nowrap mb-3\">
        <span class=\"input-group-text\" id=\"emai\"><i class=\"fas fa-key\"></i></span>
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 11), 'widget');
        echo "
        <span class=\"input-group-text input-group-text-end show-pass\"><i class='bx bx-show'></i></span>
        <span class=\"input-group-text input-group-text-end hide-pass d-none\"><i class='bx bx-hide'></i></span>
    </div>

    <div class=\"alert alert-danger text-start d-none\" role=\"alert\" id=\"validation-alert\">
        <!-- Le message d'erreur de jQuery validate s'affichera ici -->
    </div>

    <hr class=\"mt-4\" />

    <div class=\"w-100 text-end\">
        <a class=\"security-link\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Retour à la page de connexion</a>
    </div>

    <button id=\"reset-password-submit\" type=\"submit\" class=\"btn w-100 btn-lg btn-primary mt-3\">
        Enregistrer
    </button>

    <button id=\"reset-password-loader\" class=\"d-flex justify-content-center align-items-center gap-2 btn btn-primary btn-lg ms-auto mt-3 w-100 d-none\" type=\"button\" disabled>
        <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
        <span role=\"status\">Enregistrement...</span>
    </button>

";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/forms/security/_reset_password.html.twig";
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
        return array (  75 => 35,  60 => 23,  45 => 11,  39 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/forms/security/_reset_password.html.twig", "/var/www/html/erecrutement/templates/partials/forms/security/_reset_password.html.twig");
    }
}
