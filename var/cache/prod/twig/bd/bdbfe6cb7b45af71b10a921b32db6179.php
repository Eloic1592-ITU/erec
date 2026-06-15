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

/* front/partials/forms/certification/_form_init.html.twig */
class __TwigTemplate_5d0c7ab3e94bec3ce7c45faaeb1d027a extends Template
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
        // line 2
        echo "<div class=\"yon my-4 text-center\">
    <p>Avez-vous des certificats ou des attestations de formation ?</p>
    <div class=\"my-4 d-flex align-items-center justify-content-center gap-2\">
        <button type=\"button\" class=\"show-alert-btn btn btn-outline-danger d-flex align-items-center gap-1\">
            <i class=\"bx bx-x\"></i> Non
        </button>
        <button type=\"button\" class=\"form-items-btn btn btn-outline-primary d-flex align-items-center gap-1\">
            <i class=\"bx bx-check\"></i> Oui
        </button>
    </div>
</div>

";
        // line 15
        echo twig_include($this->env, $context, "front/partials/steps/_step_alert_success.html.twig");
        echo "

<div class=\"form-items\">
    ";
        // line 19
        echo "    <div id=\"certification-forms\" class=\"step-4-forms\">
        ";
        // line 20
        if (twig_test_empty(($context["certificationForms"] ?? null))) {
            // line 21
            echo "        ";
            // line 22
            echo "        ";
        } else {
            // line 23
            echo "        <h4 class=\"border-bottom mt-4 pb-2\">Mes Certifications / Attestations enregistrées</h4>
        ";
        }
        // line 25
        echo "
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["certificationForms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["certificationForm"]) {
            // line 27
            echo "        <div class=\"my-4 certification-form\">
            ";
            // line 28
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["certificationForm"], 'form_start', ["attr" => ["id" => ("certification-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 30
$context["certificationForm"], "vars", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)), "class" => "needs-validation", "novalidate" => ""]]);
            // line 34
            echo "
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"mb-3\">
                        ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["certificationForm"], "certification", [], "any", false, false, false, 38), 'label');
            echo " <span class=\"star\">*</span>
                        ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["certificationForm"], "certification", [], "any", false, false, false, 39), 'widget');
            echo "
                        ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["certificationForm"], "certification", [], "any", false, false, false, 40), 'errors');
            echo "
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"mb-3\">
                        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["certificationForm"], "certificationFile", [], "any", false, false, false, 48), 'label');
            echo " <span class=\"star\">*</span>
                        ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["certificationForm"], "certificationFile", [], "any", false, false, false, 49), 'widget');
            echo "
                        ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["certificationForm"], "certificationFile", [], "any", false, false, false, 50), 'errors');
            echo "
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"mb-3\">
                        ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["certificationForm"], "specialty", [], "any", false, false, false, 58), 'label');
            echo " <span class=\"star\">*</span>
                        ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["certificationForm"], "specialty", [], "any", false, false, false, 59), 'widget');
            echo "
                        ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["certificationForm"], "specialty", [], "any", false, false, false, 60), 'errors');
            echo "
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"mb-3\">
                        ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["certificationForm"], "institution", [], "any", false, false, false, 68), 'label');
            echo " <span class=\"star\">*</span>
                        ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["certificationForm"], "institution", [], "any", false, false, false, 69), 'widget');
            echo "
                        ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["certificationForm"], "institution", [], "any", false, false, false, 70), 'errors');
            echo "
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"mb-3\">
                        ";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["certificationForm"], "certification_year", [], "any", false, false, false, 75), 'label');
            echo " <span class=\"star\">*</span>
                        ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["certificationForm"], "certification_year", [], "any", false, false, false, 76), 'widget');
            echo "
                        ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["certificationForm"], "certification_year", [], "any", false, false, false, 77), 'errors');
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
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["certificationForm"], "vars", [], "any", false, false, false, 93), "value", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93), "html", null, true);
            echo "\" 
                data-url=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certification_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["certificationForm"], "vars", [], "any", false, false, false, 94), "value", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\"
                >
                <i class=\"bx bx-trash\"></i> <span class=\"d-none d-lg-flex\">Supprimer cette certification / attestation</span>
                </button>
            </div>
            ";
            // line 99
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["certificationForm"], 'form_end');
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certificationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "    </div>

    <div class=\"d-flex justify-content-center\">
        <button 
            id=\"remove-all-certifications-form\" 
            type=\"button\" 
            class=\"remove-all-form btn btn-outline-danger d-flex align-items-center gap-1\"
            data-url=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certifications_delete_all");
        echo "\"
        >
            <i class=\"bx bx-x\"></i> <span class=\"\">Supprimer tous les certificats / attestations</span>
        </button>
    </div>

    ";
        // line 116
        echo "    <div class=\"new-certification-form\">
        <h4 class=\"border-bottom mt-4 pb-2\">Ajouter une certification / attestation</h4>

        <p>Veuillez renseigner <b>au plus</b> vos <b>3</b> certificats et/ou attestations les plus pertinents.</p>
        
        ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["newCertificationForm"] ?? null), 'form_start', ["attr" => ["id" => "certification-new", "class" => "needs-validation", "novalidate" => ""]]);
        // line 127
        echo "
            
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"mb-3\">
                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newCertificationForm"] ?? null), "certification", [], "any", false, false, false, 132), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newCertificationForm"] ?? null), "certification", [], "any", false, false, false, 133), 'widget');
        echo "
                    ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newCertificationForm"] ?? null), "certification", [], "any", false, false, false, 134), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"mb-3\">
                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newCertificationForm"] ?? null), "certificationFile", [], "any", false, false, false, 142), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newCertificationForm"] ?? null), "certificationFile", [], "any", false, false, false, 143), 'widget');
        echo "
                    ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newCertificationForm"] ?? null), "certificationFile", [], "any", false, false, false, 144), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"mb-3\">
                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newCertificationForm"] ?? null), "specialty", [], "any", false, false, false, 152), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newCertificationForm"] ?? null), "specialty", [], "any", false, false, false, 153), 'widget');
        echo "
                    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newCertificationForm"] ?? null), "specialty", [], "any", false, false, false, 154), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newCertificationForm"] ?? null), "institution", [], "any", false, false, false, 162), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newCertificationForm"] ?? null), "institution", [], "any", false, false, false, 163), 'widget');
        echo "
                    ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newCertificationForm"] ?? null), "institution", [], "any", false, false, false, 164), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newCertificationForm"] ?? null), "certification_year", [], "any", false, false, false, 169), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newCertificationForm"] ?? null), "certification_year", [], "any", false, false, false, 170), 'widget');
        echo "
                    ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["newCertificationForm"] ?? null), "certification_year", [], "any", false, false, false, 171), 'errors');
        echo "
                </div>
            </div>
        </div>
        
        <div class=\"d-flex justify-content-end\">
            <button id=\"certification-new-submit\" type=\"submit\" class=\"add-form btn btn-primary d-flex align-items-center gap-1\">
                <i class=\"bx bx-plus\"></i> <span class=\"\">Ajouter un certificat / une attestation</span>
            </button>

            <button id=\"certification-new-loader\" class=\"btn btn-primary d-none\" type=\"button\" disabled>
                <span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>
                <span role=\"status\">Enregistrement...</span>
            </button>
        </div>
        
        ";
        // line 187
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["newCertificationForm"] ?? null), 'form_end');
        echo "
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/forms/certification/_form_init.html.twig";
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
        return array (  345 => 187,  326 => 171,  322 => 170,  318 => 169,  310 => 164,  306 => 163,  302 => 162,  291 => 154,  287 => 153,  283 => 152,  272 => 144,  268 => 143,  264 => 142,  253 => 134,  249 => 133,  245 => 132,  238 => 127,  236 => 121,  229 => 116,  220 => 109,  211 => 102,  202 => 99,  194 => 94,  190 => 93,  171 => 77,  167 => 76,  163 => 75,  155 => 70,  151 => 69,  147 => 68,  136 => 60,  132 => 59,  128 => 58,  117 => 50,  113 => 49,  109 => 48,  98 => 40,  94 => 39,  90 => 38,  84 => 34,  82 => 30,  81 => 28,  78 => 27,  74 => 26,  71 => 25,  67 => 23,  64 => 22,  62 => 21,  60 => 20,  57 => 19,  51 => 15,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/forms/certification/_form_init.html.twig", "/var/www/html/erecrutement/templates/front/partials/forms/certification/_form_init.html.twig");
    }
}
