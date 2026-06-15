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

/* back/partials/forms/user/_new.html.twig */
class __TwigTemplate_a9e4517c0392bd650e2e48da915eda27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/forms/user/_new.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_new", ["ref" =>         // line 2
($context["refPosition"] ?? null)]), "attr" => ["id" => "registration-form", "class" => "needs-validation formulaire", "novalidate" => ""]]);
        // line 8
        echo "

    <div class=\"mb-3\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "last_name", [], "any", false, false, false, 11), 'label');
        echo " <span class=\"star\">*</span></label>
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "last_name", [], "any", false, false, false, 12), 'widget');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "last_name", [], "any", false, false, false, 13), 'errors');
        echo "
    </div>
    <div class=\"mb-3\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "first_name", [], "any", false, false, false, 16), 'label');
        echo " <span class=\"star\">*</span></label>
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "first_name", [], "any", false, false, false, 17), 'widget');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "first_name", [], "any", false, false, false, 18), 'errors');
        echo "
    </div>
    <div class=\"mb-3\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth_date", [], "any", false, false, false, 21), 'label');
        echo " <span class=\"star\">*</span></label>
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth_date", [], "any", false, false, false, 22), 'widget');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth_date", [], "any", false, false, false, 23), 'errors');
        echo "
    </div>
    <div class=\"mb-3\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cin", [], "any", false, false, false, 26), 'label');
        echo " <span class=\"star\">*</span></label>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cin", [], "any", false, false, false, 27), 'widget');
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cin", [], "any", false, false, false, 28), 'errors');
        echo "
    </div>
    <div class=\"mb-3\">
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 31), 'label');
        echo " <span class=\"star\">*</span></label>
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 32), 'widget');
        echo "
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 33), 'errors');
        echo "
    </div>


    <div class=\"d-flex justify-content-end gap-2\">
        
        <button id=\"registration-submit\" type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>

        <button id=\"registration-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
            <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
            <span role=\"status\">Enregistrement...</span>
        </button>
    </div>

";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/forms/user/_new.html.twig";
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
        return array (  129 => 47,  112 => 33,  108 => 32,  104 => 31,  98 => 28,  94 => 27,  90 => 26,  84 => 23,  80 => 22,  76 => 21,  70 => 18,  66 => 17,  62 => 16,  56 => 13,  52 => 12,  48 => 11,  43 => 8,  41 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/forms/user/_new.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\back\\partials\\forms\\user\\_new.html.twig");
    }
}
