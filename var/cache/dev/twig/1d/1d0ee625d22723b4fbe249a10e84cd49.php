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

/* partials/forms/user/_edit_password.html.twig */
class __TwigTemplate_3a87b0025b8757fcfcd0a8aae6791a57 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/forms/user/_edit_password.html.twig"));

        // line 1
        echo         // line 2
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "edit-password-form", "class" => "needs-validation", "novalidate" => "", "method" => "post"]]);
        // line 10
        echo "
    <div class=\"mb-3\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 12), 'label');
        echo "

        <div class=\"input-group flex-nowrap\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 15), 'widget');
        echo "
            <span class=\"input-group-text input-group-text-end show-pass\"><i class='bx bx-show'></i></span>
            <span class=\"input-group-text input-group-text-end hide-pass d-none\"><i class='bx bx-hide'></i></span>
        </div>

        <div class=\"invalid-feedback\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 21), 'errors');
        echo "
        </div>
    </div>
    <div class=\"mb-3\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "newPassword", [], "any", false, false, false, 25), "first", [], "any", false, false, false, 25), 'label');
        echo "

        <div class=\"input-group flex-nowrap\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "newPassword", [], "any", false, false, false, 28), "first", [], "any", false, false, false, 28), 'widget');
        echo "
            <span class=\"input-group-text input-group-text-end show-pass\"><i class='bx bx-show'></i></span>
            <span class=\"input-group-text input-group-text-end hide-pass d-none\"><i class='bx bx-hide'></i></span>
        </div>

        <div class=\"invalid-feedback\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "newPassword", [], "any", false, false, false, 34), "first", [], "any", false, false, false, 34), 'errors');
        echo "
        </div>
    </div>
    <div class=\"mb-3\">
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "newPassword", [], "any", false, false, false, 38), "second", [], "any", false, false, false, 38), 'label');
        echo "

        <div class=\"input-group flex-nowrap\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "newPassword", [], "any", false, false, false, 41), "second", [], "any", false, false, false, 41), 'widget');
        echo "
            <span class=\"input-group-text input-group-text-end show-pass\"><i class='bx bx-show'></i></span>
            <span class=\"input-group-text input-group-text-end hide-pass d-none\"><i class='bx bx-hide'></i></span>
        </div>
        
        <div class=\"invalid-feedback\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "newPassword", [], "any", false, false, false, 47), "second", [], "any", false, false, false, 47), 'errors');
        echo "
        </div>
    </div>
    <div class=\"d-flex justify-content-end\">
        <button id=\"edit-password-submit\" type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>

        <button id=\"edit-password-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
            <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
            <span role=\"status\">Enregistrement...</span>
        </button>
    </div>
";
        // line 58
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
        return "partials/forms/user/_edit_password.html.twig";
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
        return array (  120 => 58,  106 => 47,  97 => 41,  91 => 38,  84 => 34,  75 => 28,  69 => 25,  62 => 21,  53 => 15,  47 => 12,  43 => 10,  41 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/forms/user/_edit_password.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\partials\\forms\\user\\_edit_password.html.twig");
    }
}
