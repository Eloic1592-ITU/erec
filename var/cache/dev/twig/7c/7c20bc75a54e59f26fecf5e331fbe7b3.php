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
class __TwigTemplate_5e90052504a959723b4dfca9369e27df extends Template
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

        // line 1
        echo         // line 2
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "edit-profile-form", "class" => "needs-validation", "novalidate" => "", "method" => "post"]]);
        // line 10
        echo "
    <div class=\"mb-3\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "last_name", [], "any", false, false, false, 12), 'label');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "last_name", [], "any", false, false, false, 13), 'widget');
        echo "  
        <div class=\"invalid-feedback\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "last_name", [], "any", false, false, false, 15), 'errors');
        echo "
        </div>
    </div>
    <div class=\"mb-3\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "first_name", [], "any", false, false, false, 19), 'label');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "first_name", [], "any", false, false, false, 20), 'widget');
        echo "
        <div class=\"invalid-feedback\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "first_name", [], "any", false, false, false, 22), 'errors');
        echo "
        </div>
    </div>
    <div class=\"mb-3\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth_date", [], "any", false, false, false, 26), 'label');
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth_date", [], "any", false, false, false, 27), 'widget');
        echo "
        <div class=\"invalid-feedback\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth_date", [], "any", false, false, false, 29), 'errors');
        echo "
        </div>
    </div>
    <div>
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 33), 'label');
        echo "
        <div class=\"input-group flex-nowrap\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 35), 'widget');
        echo "
            <span class=\"input-group-text input-group-text-end show-pass\"><i class='bx bx-show'></i></span>
            <span class=\"input-group-text input-group-text-end hide-pass d-none\"><i class='bx bx-hide'></i></span>
        </div>
        <div class=\"invalid-feedback\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 40), 'errors');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  126 => 55,  108 => 40,  100 => 35,  95 => 33,  88 => 29,  83 => 27,  79 => 26,  72 => 22,  67 => 20,  63 => 19,  56 => 15,  51 => 13,  47 => 12,  43 => 10,  41 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/forms/user/_edit_profile.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\partials\\forms\\user\\_edit_profile.html.twig");
    }
}
