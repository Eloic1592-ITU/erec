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

/* partials/forms/security/_forgot_password.html.twig */
class __TwigTemplate_cb5db8a96a3606221d6c5aeee437acb1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/forms/security/_forgot_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/forms/security/_forgot_password.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "forgot-password-form"]]);
        // line 5
        echo "

    <div class=\"input-group input-group-lg flex-nowrap mb-3\">
        <span class=\"input-group-text\" id=\"emai\"><i class=\"fas fa-user\"></i></span>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), 'widget');
        echo "
    </div>

    <hr class=\"mt-4\" />

    <div class=\"w-100 text-end\">
        <a class=\"security-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Retour à la page de connexion</a>
    </div>

    <button id=\"forgot-password-submit\" type=\"submit\" class=\"btn w-100 btn-lg btn-primary mt-3\">
        Envoyer un email de réinitialisation
    </button>

    <button id=\"forgot-password-loader\" class=\"d-flex justify-content-center align-items-center gap-2 btn btn-primary btn-lg ms-auto mt-3 w-100 d-none\" type=\"button\" disabled>
        <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
        <span role=\"status\">envoie en cours...</span>
    </button>

";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/forms/security/_forgot_password.html.twig";
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
        return array (  75 => 27,  60 => 15,  51 => 9,  45 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {
    'attr': {
        'id': 'forgot-password-form'
    }
}) }}

    <div class=\"input-group input-group-lg flex-nowrap mb-3\">
        <span class=\"input-group-text\" id=\"emai\"><i class=\"fas fa-user\"></i></span>
        {{ form_widget(form.email) }}
    </div>

    <hr class=\"mt-4\" />

    <div class=\"w-100 text-end\">
        <a class=\"security-link\" href=\"{{ path('app_login') }}\">Retour à la page de connexion</a>
    </div>

    <button id=\"forgot-password-submit\" type=\"submit\" class=\"btn w-100 btn-lg btn-primary mt-3\">
        Envoyer un email de réinitialisation
    </button>

    <button id=\"forgot-password-loader\" class=\"d-flex justify-content-center align-items-center gap-2 btn btn-primary btn-lg ms-auto mt-3 w-100 d-none\" type=\"button\" disabled>
        <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
        <span role=\"status\">envoie en cours...</span>
    </button>

{{ form_end(form) }}", "partials/forms/security/_forgot_password.html.twig", "/var/www/html/erecrutement/templates/partials/forms/security/_forgot_password.html.twig");
    }
}
