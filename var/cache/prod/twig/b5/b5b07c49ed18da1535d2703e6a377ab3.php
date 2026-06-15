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

/* front/partials/forms/internship/_form.html.twig */
class __TwigTemplate_6d19bd726308b1c1cf95296373092c20 extends Template
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
        echo "<div class=\"my-4 internship-form\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => ("internship-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["form"] ?? null), "vars", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4)), "class" => "needs-validation", "novalidate" => "", "data-edit-url" =>         // line 7
($context["internship_edit_url"] ?? null), "data-delete-url" =>         // line 8
($context["internship_delete_url"] ?? null)]]);
        // line 10
        echo "
    
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "theme", [], "any", false, false, false, 15), 'label');
        echo " <span class=\"star\">*</span>
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "theme", [], "any", false, false, false, 16), 'widget');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "theme", [], "any", false, false, false, 17), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "organization", [], "any", false, false, false, 22), 'label');
        echo " <span class=\"star\">*</span>
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "organization", [], "any", false, false, false, 23), 'widget');
        echo "
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "organization", [], "any", false, false, false, 24), 'errors');
        echo "
                </div>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "internship_year", [], "any", false, false, false, 32), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "internship_year", [], "any", false, false, false, 33), 'widget');
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "internship_year", [], "any", false, false, false, 34), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "duration", [], "any", false, false, false, 39), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "duration", [], "any", false, false, false, 40), 'widget');
        echo "
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "duration", [], "any", false, false, false, 41), 'errors');
        echo "
                </div>
            </div>  
        </div>
        
        <div class=\"d-flex justify-content-between\">
            <button 
                type=\"submit\" 
                class=\"btn btn-primary d-flex align-items-center gap-1\"
            >
                <i class=\"bx bx-edit\"></i> 
                <span class=\"d-none d-lg-flex\">Mettre à jour ce stage</span>
            </button>
            <button 
                type=\"button\" 
                class=\"btn btn-danger d-flex align-items-center gap-1 delete-internship\" 
                data-id=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["internship"] ?? null), "id", [], "any", false, false, false, 57), "html", null, true);
        echo "\" 
                data-url=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_internship_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["internship"] ?? null), "id", [], "any", false, false, false, 58)]), "html", null, true);
        echo "\"
            >
                <i class=\"bx bx-trash\"></i> 
                <span class=\"d-none d-lg-flex\">Supprimer ce stage</span>
            </button>
        </div>
    ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/forms/internship/_form.html.twig";
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
        return array (  143 => 64,  134 => 58,  130 => 57,  111 => 41,  107 => 40,  103 => 39,  95 => 34,  91 => 33,  87 => 32,  76 => 24,  72 => 23,  68 => 22,  60 => 17,  56 => 16,  52 => 15,  45 => 10,  43 => 8,  42 => 7,  41 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/forms/internship/_form.html.twig", "/var/www/html/erecrutement/templates/front/partials/forms/internship/_form.html.twig");
    }
}
