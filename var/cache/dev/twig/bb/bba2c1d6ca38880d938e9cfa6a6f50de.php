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

/* partials/forms/security/_register.html.twig */
class __TwigTemplate_6622b500f6a3e4504e3e452176710b39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/forms/security/_register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/forms/security/_register.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registeration", ["ref" =>         // line 2
(isset($context["refPosition"]) || array_key_exists("refPosition", $context) ? $context["refPosition"] : (function () { throw new RuntimeError('Variable "refPosition" does not exist.', 2, $this->source); })())]), "attr" => ["id" => "registration-form", "class" => "needs-validation formulaire", "novalidate" => ""]]);
        // line 8
        echo "

    <div class=\"mb-3\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "last_name", [], "any", false, false, false, 11), 'label');
        echo " <span class=\"star\">*</span></label>
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "last_name", [], "any", false, false, false, 12), 'widget');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "last_name", [], "any", false, false, false, 13), 'errors');
        echo "
    </div>
    <div class=\"mb-3\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "first_name", [], "any", false, false, false, 16), 'label');
        echo " <span class=\"star\">*</span></label>
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "first_name", [], "any", false, false, false, 17), 'widget');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "first_name", [], "any", false, false, false, 18), 'errors');
        echo "
    </div>
    <div class=\"mb-3\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "birth_date", [], "any", false, false, false, 21), 'label');
        echo " <span class=\"star\">*</span></label>
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "birth_date", [], "any", false, false, false, 22), 'widget');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "birth_date", [], "any", false, false, false, 23), 'errors');
        echo "
    </div>
    <div class=\"mb-3\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "cin", [], "any", false, false, false, 26), 'label');
        echo " <span class=\"star\">*</span></label>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "cin", [], "any", false, false, false, 27), 'widget');
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "cin", [], "any", false, false, false, 28), 'errors');
        echo "
    </div>
    <div class=\"mb-3\">
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'label');
        echo " <span class=\"star\">*</span></label>
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'widget');
        echo "
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'errors');
        echo "
    </div>

    <div class=\"my-4\">   
        <button id=\"registration-submit\" type=\"submit\" class=\"btn btn-primary w-100\">S'inscrire</button>

        <button id=\"registration-loader\" class=\"btn btn-primary w-100 d-none\" type=\"button\" disabled>
            <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
            <span role=\"status\">Enregistrement...</span>
        </button>
    </div>

    <div class=\"w-100 text-center mt-4\">
        <p class=\"subtitle mb-0\">Vous avez déjà un compte ? <a class=\"security-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connectez-vous ici</a></p>
    </div>

";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/forms/security/_register.html.twig";
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
        return array (  137 => 49,  131 => 46,  115 => 33,  111 => 32,  107 => 31,  101 => 28,  97 => 27,  93 => 26,  87 => 23,  83 => 22,  79 => 21,  73 => 18,  69 => 17,  65 => 16,  59 => 13,  55 => 12,  51 => 11,  46 => 8,  44 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {
    'action': path('app_registeration', { 'ref': refPosition }),
    'attr': {
        'id': 'registration-form',
        'class': 'needs-validation formulaire',
        'novalidate': '',
    }
}) }}

    <div class=\"mb-3\">
        {{ form_label(form.last_name) }} <span class=\"star\">*</span></label>
        {{ form_widget(form.last_name) }}
        {{ form_errors(form.last_name) }}
    </div>
    <div class=\"mb-3\">
        {{ form_label(form.first_name) }} <span class=\"star\">*</span></label>
        {{ form_widget(form.first_name) }}
        {{ form_errors(form.first_name) }}
    </div>
    <div class=\"mb-3\">
        {{ form_label(form.birth_date) }} <span class=\"star\">*</span></label>
        {{ form_widget(form.birth_date) }}
        {{ form_errors(form.birth_date) }}
    </div>
    <div class=\"mb-3\">
        {{ form_label(form.cin) }} <span class=\"star\">*</span></label>
        {{ form_widget(form.cin) }}
        {{ form_errors(form.cin) }}
    </div>
    <div class=\"mb-3\">
        {{ form_label(form.email) }} <span class=\"star\">*</span></label>
        {{ form_widget(form.email) }}
        {{ form_errors(form.email) }}
    </div>

    <div class=\"my-4\">   
        <button id=\"registration-submit\" type=\"submit\" class=\"btn btn-primary w-100\">S'inscrire</button>

        <button id=\"registration-loader\" class=\"btn btn-primary w-100 d-none\" type=\"button\" disabled>
            <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
            <span role=\"status\">Enregistrement...</span>
        </button>
    </div>

    <div class=\"w-100 text-center mt-4\">
        <p class=\"subtitle mb-0\">Vous avez déjà un compte ? <a class=\"security-link\" href=\"{{ path('app_login') }}\">Connectez-vous ici</a></p>
    </div>

{{ form_end(form) }}", "partials/forms/security/_register.html.twig", "/var/www/html/erecrutement/templates/partials/forms/security/_register.html.twig");
    }
}
