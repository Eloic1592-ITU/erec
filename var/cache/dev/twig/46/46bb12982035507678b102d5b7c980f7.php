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
class __TwigTemplate_3602feae370f618d14989f5a96337ab6 extends Template
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

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/forms/education/_form.html.twig"));

        // line 1
        echo "<div class=\"my-4 education-form\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["id" => ("education-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4)), "class" => "needs-validation", "novalidate" => "", "data-edit-url" =>         // line 7
(isset($context["edit_url"]) || array_key_exists("edit_url", $context) ? $context["edit_url"] : (function () { throw new RuntimeError('Variable "edit_url" does not exist.', 7, $this->source); })()), "data-delete-url" =>         // line 8
(isset($context["delete_url"]) || array_key_exists("delete_url", $context) ? $context["delete_url"] : (function () { throw new RuntimeError('Variable "delete_url" does not exist.', 8, $this->source); })())]]);
        // line 10
        echo "
        <div class=\"row\">
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "degree", [], "any", false, false, false, 14), 'label');
        echo " <span class=\"star\">*</span>
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "degree", [], "any", false, false, false, 15), 'widget');
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "degree", [], "any", false, false, false, 16), 'errors');
        echo "
            </div>
            </div>
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "degreeFile", [], "any", false, false, false, 21), 'label');
        echo " <span class=\"star\">*</span>
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "degreeFile", [], "any", false, false, false, 22), 'widget');
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "degreeFile", [], "any", false, false, false, 23), 'errors');
        echo "
            </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "field_of_study", [], "any", false, false, false, 31), 'label');
        echo " <span class=\"star\">*</span>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "field_of_study", [], "any", false, false, false, 32), 'widget', ["attr" => ["data-toggle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]]);
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "field_of_study", [], "any", false, false, false, 33), 'errors');
        echo "
            </div>
            </div>
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "specialty", [], "any", false, false, false, 38), 'label');
        echo " <span class=\"star\">*</span>
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "specialty", [], "any", false, false, false, 39), 'widget');
        echo "
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "specialty", [], "any", false, false, false, 40), 'errors');
        echo "
            </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
            <div class=\"mb-3\">
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "other_field_of_study", [], "any", false, false, false, 48), 'label');
        echo "
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "other_field_of_study", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => ("form-control other-field-of-study-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "vars", [], "any", false, false, false, 49), "value", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49))]]);
        echo "
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "other_field_of_study", [], "any", false, false, false, 50), 'errors');
        echo "
            </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "institution", [], "any", false, false, false, 58), 'label');
        echo " <span class=\"star\">*</span>
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "institution", [], "any", false, false, false, 59), 'widget');
        echo "
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "institution", [], "any", false, false, false, 60), 'errors');
        echo "
            </div>
            </div>
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "graduation_year", [], "any", false, false, false, 65), 'label');
        echo " <span class=\"star\">*</span>
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "graduation_year", [], "any", false, false, false, 66), 'widget');
        echo "
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "graduation_year", [], "any", false, false, false, 67), 'errors');
        echo "
            </div>
            </div>
        </div>

        <div class=\"d-flex justify-content-between\">
            <button type=\"submit\" class=\"btn btn-primary d-flex align-items-center gap-1\"><i class=\"bx bx-edit\"></i> <span class=\"d-none d-lg-flex\">Mettre à jour ce diplôme</span></button>
            <button type=\"button\" class=\"btn btn-danger d-flex align-items-center gap-1 delete-education\" data-id=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["education"]) || array_key_exists("education", $context) ? $context["education"] : (function () { throw new RuntimeError('Variable "education" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_education_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["education"]) || array_key_exists("education", $context) ? $context["education"] : (function () { throw new RuntimeError('Variable "education" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)]), "html", null, true);
        echo "\"><i class=\"bx bx-trash\"></i> <span class=\"d-none d-lg-flex\">Supprimer ce diplôme</span></button>
        </div>
    ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
        echo "
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  187 => 76,  180 => 74,  170 => 67,  166 => 66,  162 => 65,  154 => 60,  150 => 59,  146 => 58,  135 => 50,  131 => 49,  127 => 48,  116 => 40,  112 => 39,  108 => 38,  100 => 33,  96 => 32,  92 => 31,  81 => 23,  77 => 22,  73 => 21,  65 => 16,  61 => 15,  57 => 14,  51 => 10,  49 => 8,  48 => 7,  47 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"my-4 education-form\">
    {{ form_start(form, {
        'attr': {
            'id': 'education-' ~ form.vars.value.id,
            'class': 'needs-validation',
            'novalidate': '',
            'data-edit-url': edit_url,
            'data-delete-url': delete_url,
        }
    }) }}
        <div class=\"row\">
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                {{ form_label(form.degree) }} <span class=\"star\">*</span>
                {{ form_widget(form.degree) }}
                {{ form_errors(form.degree) }}
            </div>
            </div>
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                {{ form_label(form.degreeFile) }} <span class=\"star\">*</span>
                {{ form_widget(form.degreeFile) }}
                {{ form_errors(form.degreeFile) }}
            </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                {{ form_label(form.field_of_study) }} <span class=\"star\">*</span>
                {{ form_widget(form.field_of_study, { 'attr': { 'data-toggle': form.vars.value.id } }) }}
                {{ form_errors(form.field_of_study) }}
            </div>
            </div>
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                {{ form_label(form.specialty) }} <span class=\"star\">*</span>
                {{ form_widget(form.specialty) }}
                {{ form_errors(form.specialty) }}
            </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
            <div class=\"mb-3\">
                {{ form_label(form.other_field_of_study) }}
                {{ form_widget(form.other_field_of_study, { 'attr': { 'class': 'form-control other-field-of-study-' ~ form.vars.value.id } }) }}
                {{ form_errors(form.other_field_of_study) }}
            </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                {{ form_label(form.institution) }} <span class=\"star\">*</span>
                {{ form_widget(form.institution) }}
                {{ form_errors(form.institution) }}
            </div>
            </div>
            <div class=\"col-lg-6\">
            <div class=\"mb-3\">
                {{ form_label(form.graduation_year) }} <span class=\"star\">*</span>
                {{ form_widget(form.graduation_year) }}
                {{ form_errors(form.graduation_year) }}
            </div>
            </div>
        </div>

        <div class=\"d-flex justify-content-between\">
            <button type=\"submit\" class=\"btn btn-primary d-flex align-items-center gap-1\"><i class=\"bx bx-edit\"></i> <span class=\"d-none d-lg-flex\">Mettre à jour ce diplôme</span></button>
            <button type=\"button\" class=\"btn btn-danger d-flex align-items-center gap-1 delete-education\" data-id=\"{{ education.id }}\" data-url=\"{{ path('app_education_delete', {'id': education.id}) }}\"><i class=\"bx bx-trash\"></i> <span class=\"d-none d-lg-flex\">Supprimer ce diplôme</span></button>
        </div>
    {{ form_end(form) }}
</div>", "front/partials/forms/education/_form.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\forms\\education\\_form.html.twig");
    }
}
