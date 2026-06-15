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

/* front/partials/forms/certification/_form.html.twig */
class __TwigTemplate_50542dd097833930453a9f8a4fa72c68 extends Template
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
        echo "<div class=\"my-4 certification-form\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => ("certification-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["form"] ?? null), "vars", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4)), "class" => "needs-validation", "novalidate" => "", "data-edit-url" =>         // line 7
($context["certification_edit_url"] ?? null), "data-delete-url" =>         // line 8
($context["certification_delete_url"] ?? null)]]);
        // line 10
        echo "
        
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"mb-3\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "certification", [], "any", false, false, false, 15), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "certification", [], "any", false, false, false, 16), 'widget');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "certification", [], "any", false, false, false, 17), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"mb-3\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "certificationFile", [], "any", false, false, false, 25), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "certificationFile", [], "any", false, false, false, 26), 'widget');
        echo "
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "certificationFile", [], "any", false, false, false, 27), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"mb-3\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "specialty", [], "any", false, false, false, 35), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "specialty", [], "any", false, false, false, 36), 'widget');
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "specialty", [], "any", false, false, false, 37), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "institution", [], "any", false, false, false, 45), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "institution", [], "any", false, false, false, 46), 'widget');
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "institution", [], "any", false, false, false, 47), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "certification_year", [], "any", false, false, false, 52), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "certification_year", [], "any", false, false, false, 53), 'widget');
        echo "
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "certification_year", [], "any", false, false, false, 54), 'errors');
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
                <span class=\"d-none d-lg-flex\">Mettre à jour cette certification / attestation</span>
            </button>
            <button 
                type=\"button\" 
                class=\"btn btn-danger d-flex align-items-center gap-1 delete-certification\" 
                data-id=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["certification"] ?? null), "id", [], "any", false, false, false, 70), "html", null, true);
        echo "\" 
                data-url=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certification_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["certification"] ?? null), "id", [], "any", false, false, false, 71)]), "html", null, true);
        echo "\"
            >
                <i class=\"bx bx-trash\"></i> 
                <span class=\"d-none d-lg-flex\">Supprimer cette certification / attestation</span>
            </button>
        </div>

    ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/forms/certification/_form.html.twig";
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
        return array (  166 => 78,  156 => 71,  152 => 70,  133 => 54,  129 => 53,  125 => 52,  117 => 47,  113 => 46,  109 => 45,  98 => 37,  94 => 36,  90 => 35,  79 => 27,  75 => 26,  71 => 25,  60 => 17,  56 => 16,  52 => 15,  45 => 10,  43 => 8,  42 => 7,  41 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/forms/certification/_form.html.twig", "/var/www/html/erecrutement/templates/front/partials/forms/certification/_form.html.twig");
    }
}
