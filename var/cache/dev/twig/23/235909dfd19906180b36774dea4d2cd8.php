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

/* partials/forms/user/_edit_profile.html.twig */
class __TwigTemplate_f21d64ad0a3ebd1b58802b8a9f0d9b27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/forms/user/_edit_profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/forms/user/_edit_profile.html.twig"));

        // line 1
        echo         // line 2
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["id" => "edit-profile-form", "class" => "needs-validation", "novalidate" => "", "method" => "post"]]);
        // line 10
        echo "
    <div class=\"mb-3\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "last_name", [], "any", false, false, false, 12), 'label');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "last_name", [], "any", false, false, false, 13), 'widget');
        echo "  
        <div class=\"invalid-feedback\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "last_name", [], "any", false, false, false, 15), 'errors');
        echo "
        </div>
    </div>
    <div class=\"mb-3\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "first_name", [], "any", false, false, false, 19), 'label');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "first_name", [], "any", false, false, false, 20), 'widget');
        echo "
        <div class=\"invalid-feedback\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "first_name", [], "any", false, false, false, 22), 'errors');
        echo "
        </div>
    </div>
    <div class=\"mb-3\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "birth_date", [], "any", false, false, false, 26), 'label');
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "birth_date", [], "any", false, false, false, 27), 'widget');
        echo "
        <div class=\"invalid-feedback\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "birth_date", [], "any", false, false, false, 29), 'errors');
        echo "
        </div>
    </div>
    <div>
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "plainPassword", [], "any", false, false, false, 33), 'label');
        echo "
        <div class=\"input-group flex-nowrap\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "plainPassword", [], "any", false, false, false, 35), 'widget');
        echo "
            <span class=\"input-group-text input-group-text-end show-pass\"><i class='bx bx-show'></i></span>
            <span class=\"input-group-text input-group-text-end hide-pass d-none\"><i class='bx bx-hide'></i></span>
        </div>
        <div class=\"invalid-feedback\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), 'errors');
        echo "
        </div>
    </div>
    <div class=\"form-text mb-3\">
        Pour des raisons de sécurité, vous devez entrer votre mot de passe pour valider la modification.
    </div>

    <div class=\"d-flex justify-content-end\">
        <button id=\"edit-profile-submit\" type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>

        <button id=\"edit-profile-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
            <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
            <span role=\"status\">Enregistrement...</span>
        </button>
    </div>
";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/forms/user/_edit_profile.html.twig";
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
        return array (  129 => 55,  111 => 40,  103 => 35,  98 => 33,  91 => 29,  86 => 27,  82 => 26,  75 => 22,  70 => 20,  66 => 19,  59 => 15,  54 => 13,  50 => 12,  46 => 10,  44 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ 
    form_start(form, {
        'attr': { 
            'id': \"edit-profile-form\",
            'class': \"needs-validation\",
            'novalidate': \"\",
            'method': 'post', 
        }
    }) 
}}
    <div class=\"mb-3\">
        {{ form_label(form.last_name) }}
        {{ form_widget(form.last_name) }}  
        <div class=\"invalid-feedback\">
            {{ form_errors(form.last_name) }}
        </div>
    </div>
    <div class=\"mb-3\">
        {{ form_label(form.first_name) }}
        {{ form_widget(form.first_name) }}
        <div class=\"invalid-feedback\">
            {{ form_errors(form.first_name) }}
        </div>
    </div>
    <div class=\"mb-3\">
        {{ form_label(form.birth_date) }}
        {{ form_widget(form.birth_date) }}
        <div class=\"invalid-feedback\">
            {{ form_errors(form.birth_date) }}
        </div>
    </div>
    <div>
        {{ form_label(form.plainPassword) }}
        <div class=\"input-group flex-nowrap\">
            {{ form_widget(form.plainPassword) }}
            <span class=\"input-group-text input-group-text-end show-pass\"><i class='bx bx-show'></i></span>
            <span class=\"input-group-text input-group-text-end hide-pass d-none\"><i class='bx bx-hide'></i></span>
        </div>
        <div class=\"invalid-feedback\">
            {{ form_errors(form.plainPassword) }}
        </div>
    </div>
    <div class=\"form-text mb-3\">
        Pour des raisons de sécurité, vous devez entrer votre mot de passe pour valider la modification.
    </div>

    <div class=\"d-flex justify-content-end\">
        <button id=\"edit-profile-submit\" type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>

        <button id=\"edit-profile-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
            <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
            <span role=\"status\">Enregistrement...</span>
        </button>
    </div>
{{ form_end(form) }}

", "partials/forms/user/_edit_profile.html.twig", "/var/www/html/erecrutement/templates/partials/forms/user/_edit_profile.html.twig");
    }
}
