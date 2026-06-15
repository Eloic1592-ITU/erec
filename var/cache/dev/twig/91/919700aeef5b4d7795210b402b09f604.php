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

/* front/partials/forms/education/_form.html.twig */
class __TwigTemplate_0bfb23915a9190df62adbca94c2985bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/forms/education/_form.html.twig"));

        // line 1
        echo "<div class=\"my-4 education-form\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => ("education-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["form"] ?? null), "vars", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4)), "class" => "needs-validation", "novalidate" => "", "data-edit-url" =>         // line 7
($context["edit_url"] ?? null), "data-delete-url" =>         // line 8
($context["delete_url"] ?? null)]]);
        // line 10
        echo "
        <div class=\"row\">
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "degree", [], "any", false, false, false, 14), 'label');
        echo " <span class=\"star\">*</span>
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "degree", [], "any", false, false, false, 15), 'widget');
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "degree", [], "any", false, false, false, 16), 'errors');
        echo "
            </div>
            </div>
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "degreeFile", [], "any", false, false, false, 21), 'label');
        echo " <span class=\"star\">*</span>
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "degreeFile", [], "any", false, false, false, 22), 'widget');
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "degreeFile", [], "any", false, false, false, 23), 'errors');
        echo "
            </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_of_study", [], "any", false, false, false, 31), 'label');
        echo " <span class=\"star\">*</span>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_of_study", [], "any", false, false, false, 32), 'widget', ["attr" => ["data-toggle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]]);
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_of_study", [], "any", false, false, false, 33), 'errors');
        echo "
            </div>
            </div>
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "specialty", [], "any", false, false, false, 38), 'label');
        echo " <span class=\"star\">*</span>
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "specialty", [], "any", false, false, false, 39), 'widget');
        echo "
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "specialty", [], "any", false, false, false, 40), 'errors');
        echo "
            </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
            <div class=\"mb-3\">
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "other_field_of_study", [], "any", false, false, false, 48), 'label');
        echo "
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "other_field_of_study", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => ("form-control other-field-of-study-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 49), "value", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49))]]);
        echo "
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "other_field_of_study", [], "any", false, false, false, 50), 'errors');
        echo "
            </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "institution", [], "any", false, false, false, 58), 'label');
        echo " <span class=\"star\">*</span>
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "institution", [], "any", false, false, false, 59), 'widget');
        echo "
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "institution", [], "any", false, false, false, 60), 'errors');
        echo "
            </div>
            </div>
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "graduation_year", [], "any", false, false, false, 65), 'label');
        echo " <span class=\"star\">*</span>
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "graduation_year", [], "any", false, false, false, 66), 'widget');
        echo "
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "graduation_year", [], "any", false, false, false, 67), 'errors');
        echo "
            </div>
            </div>
        </div>

        <div class=\"d-flex justify-content-between\">
            <button type=\"submit\" class=\"btn btn-primary d-flex align-items-center gap-1\"><i class=\"bx bx-edit\"></i> <span class=\"d-none d-lg-flex\">Mettre à jour ce diplôme</span></button>
            <button type=\"button\" class=\"btn btn-danger d-flex align-items-center gap-1 delete-education\" data-id=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["education"] ?? null), "id", [], "any", false, false, false, 74), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_education_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["education"] ?? null), "id", [], "any", false, false, false, 74)]), "html", null, true);
        echo "\"><i class=\"bx bx-trash\"></i> <span class=\"d-none d-lg-flex\">Supprimer ce diplôme</span></button>
        </div>
    ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/forms/education/_form.html.twig";
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
        return array (  184 => 76,  177 => 74,  167 => 67,  163 => 66,  159 => 65,  151 => 60,  147 => 59,  143 => 58,  132 => 50,  128 => 49,  124 => 48,  113 => 40,  109 => 39,  105 => 38,  97 => 33,  93 => 32,  89 => 31,  78 => 23,  74 => 22,  70 => 21,  62 => 16,  58 => 15,  54 => 14,  48 => 10,  46 => 8,  45 => 7,  44 => 4,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/forms/education/_form.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\forms\\education\\_form.html.twig");
    }
}
