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
class __TwigTemplate_65d150a735441b845fac3f7a926b9a02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/forms/certification/_form_init.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/forms/certification/_form_init.html.twig"));

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
        if (twig_test_empty((isset($context["certificationForms"]) || array_key_exists("certificationForms", $context) ? $context["certificationForms"] : (function () { throw new RuntimeError('Variable "certificationForms" does not exist.', 20, $this->source); })()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["certificationForms"]) || array_key_exists("certificationForms", $context) ? $context["certificationForms"] : (function () { throw new RuntimeError('Variable "certificationForms" does not exist.', 26, $this->source); })()));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 121, $this->source); })()), 'form_start', ["attr" => ["id" => "certification-new", "class" => "needs-validation", "novalidate" => ""]]);
        // line 127
        echo "
            
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"mb-3\">
                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 132, $this->source); })()), "certification", [], "any", false, false, false, 132), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 133, $this->source); })()), "certification", [], "any", false, false, false, 133), 'widget');
        echo "
                    ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 134, $this->source); })()), "certification", [], "any", false, false, false, 134), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"mb-3\">
                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 142, $this->source); })()), "certificationFile", [], "any", false, false, false, 142), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 143, $this->source); })()), "certificationFile", [], "any", false, false, false, 143), 'widget');
        echo "
                    ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 144, $this->source); })()), "certificationFile", [], "any", false, false, false, 144), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"mb-3\">
                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 152, $this->source); })()), "specialty", [], "any", false, false, false, 152), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 153, $this->source); })()), "specialty", [], "any", false, false, false, 153), 'widget');
        echo "
                    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 154, $this->source); })()), "specialty", [], "any", false, false, false, 154), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 162, $this->source); })()), "institution", [], "any", false, false, false, 162), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 163, $this->source); })()), "institution", [], "any", false, false, false, 163), 'widget');
        echo "
                    ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 164, $this->source); })()), "institution", [], "any", false, false, false, 164), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 169, $this->source); })()), "certification_year", [], "any", false, false, false, 169), 'label');
        echo " <span class=\"star\">*</span>
                    ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 170, $this->source); })()), "certification_year", [], "any", false, false, false, 170), 'widget');
        echo "
                    ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 171, $this->source); })()), "certification_year", [], "any", false, false, false, 171), 'errors');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["newCertificationForm"]) || array_key_exists("newCertificationForm", $context) ? $context["newCertificationForm"] : (function () { throw new RuntimeError('Variable "newCertificationForm" does not exist.', 187, $this->source); })()), 'form_end');
        echo "
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  351 => 187,  332 => 171,  328 => 170,  324 => 169,  316 => 164,  312 => 163,  308 => 162,  297 => 154,  293 => 153,  289 => 152,  278 => 144,  274 => 143,  270 => 142,  259 => 134,  255 => 133,  251 => 132,  244 => 127,  242 => 121,  235 => 116,  226 => 109,  217 => 102,  208 => 99,  200 => 94,  196 => 93,  177 => 77,  173 => 76,  169 => 75,  161 => 70,  157 => 69,  153 => 68,  142 => 60,  138 => 59,  134 => 58,  123 => 50,  119 => 49,  115 => 48,  104 => 40,  100 => 39,  96 => 38,  90 => 34,  88 => 30,  87 => 28,  84 => 27,  80 => 26,  77 => 25,  73 => 23,  70 => 22,  68 => 21,  66 => 20,  63 => 19,  57 => 15,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Yes or No Question ou \"yon\" #}
<div class=\"yon my-4 text-center\">
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

{# Message d'alert #}
{{ include('front/partials/steps/_step_alert_success.html.twig') }}

<div class=\"form-items\">
    {# Formulaires d'édition pour les certification / Attestation existants #}
    <div id=\"certification-forms\" class=\"step-4-forms\">
        {% if certificationForms is empty %}
        {# ... #}
        {% else %}
        <h4 class=\"border-bottom mt-4 pb-2\">Mes Certifications / Attestations enregistrées</h4>
        {% endif %}

        {% for certificationForm in certificationForms %}
        <div class=\"my-4 certification-form\">
            {{ form_start(certificationForm, {
            'attr': {
                'id': 'certification-' ~ certificationForm.vars.value.id,
                'class': 'needs-validation',
                'novalidate': '',
            }
            }) }}
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"mb-3\">
                        {{ form_label(certificationForm.certification) }} <span class=\"star\">*</span>
                        {{ form_widget(certificationForm.certification) }}
                        {{ form_errors(certificationForm.certification) }}
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"mb-3\">
                        {{ form_label(certificationForm.certificationFile) }} <span class=\"star\">*</span>
                        {{ form_widget(certificationForm.certificationFile) }}
                        {{ form_errors(certificationForm.certificationFile) }}
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"mb-3\">
                        {{ form_label(certificationForm.specialty) }} <span class=\"star\">*</span>
                        {{ form_widget(certificationForm.specialty) }}
                        {{ form_errors(certificationForm.specialty) }}
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"mb-3\">
                        {{ form_label(certificationForm.institution) }} <span class=\"star\">*</span>
                        {{ form_widget(certificationForm.institution) }}
                        {{ form_errors(certificationForm.institution) }}
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"mb-3\">
                        {{ form_label(certificationForm.certification_year) }} <span class=\"star\">*</span>
                        {{ form_widget(certificationForm.certification_year) }}
                        {{ form_errors(certificationForm.certification_year) }}
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
                data-id=\"{{ certificationForm.vars.value.id }}\" 
                data-url=\"{{ path('app_certification_delete', {'id': certificationForm.vars.value.id}) }}\"
                >
                <i class=\"bx bx-trash\"></i> <span class=\"d-none d-lg-flex\">Supprimer cette certification / attestation</span>
                </button>
            </div>
            {{ form_end(certificationForm) }}
        </div>
        {% endfor %}
    </div>

    <div class=\"d-flex justify-content-center\">
        <button 
            id=\"remove-all-certifications-form\" 
            type=\"button\" 
            class=\"remove-all-form btn btn-outline-danger d-flex align-items-center gap-1\"
            data-url=\"{{ path('app_certifications_delete_all') }}\"
        >
            <i class=\"bx bx-x\"></i> <span class=\"\">Supprimer tous les certificats / attestations</span>
        </button>
    </div>

    {# Formulaire pour ajouter une nouvelle certification / Attestation #}
    <div class=\"new-certification-form\">
        <h4 class=\"border-bottom mt-4 pb-2\">Ajouter une certification / attestation</h4>

        <p>Veuillez renseigner <b>au plus</b> vos <b>3</b> certificats et/ou attestations les plus pertinents.</p>
        
        {{ form_start(newCertificationForm, {
        'attr': {
            'id': 'certification-new', 
            'class': 'needs-validation',
            'novalidate': '',
        }
        }) }}
            
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"mb-3\">
                    {{ form_label(newCertificationForm.certification) }} <span class=\"star\">*</span>
                    {{ form_widget(newCertificationForm.certification) }}
                    {{ form_errors(newCertificationForm.certification) }}
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"mb-3\">
                    {{ form_label(newCertificationForm.certificationFile) }} <span class=\"star\">*</span>
                    {{ form_widget(newCertificationForm.certificationFile) }}
                    {{ form_errors(newCertificationForm.certificationFile) }}
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"mb-3\">
                    {{ form_label(newCertificationForm.specialty) }} <span class=\"star\">*</span>
                    {{ form_widget(newCertificationForm.specialty) }}
                    {{ form_errors(newCertificationForm.specialty) }}
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    {{ form_label(newCertificationForm.institution) }} <span class=\"star\">*</span>
                    {{ form_widget(newCertificationForm.institution) }}
                    {{ form_errors(newCertificationForm.institution) }}
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"mb-3\">
                    {{ form_label(newCertificationForm.certification_year) }} <span class=\"star\">*</span>
                    {{ form_widget(newCertificationForm.certification_year) }}
                    {{ form_errors(newCertificationForm.certification_year) }}
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
        
        {{ form_end(newCertificationForm) }}
    </div>
</div>", "front/partials/forms/certification/_form_init.html.twig", "/var/www/html/erecrutement/templates/front/partials/forms/certification/_form_init.html.twig");
    }
}
