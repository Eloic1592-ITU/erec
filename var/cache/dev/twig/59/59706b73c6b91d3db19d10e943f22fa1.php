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

/* pdf/submission_details.html.twig */
class __TwigTemplate_5c1021bda791ef7bb201709f4d7d52fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/submission_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/submission_details.html.twig"));

        // line 1
        echo "<div class=\"px-4\">
    <h1 class=\"my-4 text-center\">Détails de candidature</h1>

    ";
        // line 4
        if ((isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">     
        <div id=\"recap1\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Poste demandé</h5>
            <div class=\"d-flex flex-column gap-1\">
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Poste demandé</p>
                        <p class=\"info-value\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "referencePosition", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Lieux d'affectation</p>
                        <p class=\"info-value\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 16, $this->source); })()), "getPrimaryLocation", [], "method", false, false, false, 16), "html", null, true);
            echo "</p>
                    </div>
                </div>
                ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, (isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 19, $this->source); })()), "getSecondaryLocation", [], "method", false, false, false, 19) || twig_get_attribute($this->env, $this->source, (isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 19, $this->source); })()), "getTertiaryLocation", [], "method", false, false, false, 19))) {
                // line 20
                echo "                <div class=\"info-group\">
                    ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, (isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 21, $this->source); })()), "getSecondaryLocation", [], "method", false, false, false, 21)) {
                    // line 22
                    echo "                    <div class=\"info\">
                        <p class=\"info-label\">2ème lieux d'affectation souhaité</p>
                        <p class=\"info-value\">";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 24, $this->source); })()), "getSecondaryLocation", [], "method", false, false, false, 24), "html", null, true);
                    echo "</p>
                    </div>
                    ";
                }
                // line 27
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 27, $this->source); })()), "getTertiaryLocation", [], "method", false, false, false, 27)) {
                    // line 28
                    echo "                    <div class=\"info\">
                        <p class=\"info-label\">3ème lieux d'affectation souhaité</p>
                        <p class=\"info-value\">";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jobApplication"]) || array_key_exists("jobApplication", $context) ? $context["jobApplication"] : (function () { throw new RuntimeError('Variable "jobApplication" does not exist.', 30, $this->source); })()), "getTertiaryLocation", [], "method", false, false, false, 30), "html", null, true);
                    echo "</p>
                    </div>
                    ";
                }
                // line 33
                echo "                </div>
                ";
            }
            // line 35
            echo "            </div>
        </div>
    </div>
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if ((isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">      
        <div id=\"recap2\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Informations personnelles</h5>
            <div class=\"d-flex flex-column gap-1\">
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Civilité</p>
                        <p class=\"info-value\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 48, $this->source); })()), "civility", [], "any", false, false, false, 48), "getName", [], "method", false, false, false, 48), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Nom</p>
                        <p class=\"info-value\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "getLastName", [], "method", false, false, false, 52), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Prénom(s)</p>
                        <p class=\"info-value\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "getFirstName", [], "method", false, false, false, 58), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Date de naissance</p>
                        <p class=\"info-value\">";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "getBirthDate", [], "method", false, false, false, 62), "d/m/Y"), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Lieu de naissance</p>
                        <p class=\"info-value\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 68, $this->source); })()), "getBirthCity", [], "method", false, false, false, 68), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 68, $this->source); })()), "getCountry", [], "method", false, false, false, 68), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">N° CIN</p>
                        <p class=\"info-value\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "getCin", [], "method", false, false, false, 72), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Date de délivrance du CIN</p>
                        <p class=\"info-value\">";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 78, $this->source); })()), "getCinIssueDate", [], "method", false, false, false, 78), "d/m/Y"), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Lieu de délivrance</p>
                        <p class=\"info-value\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 82, $this->source); })()), "getCinIssuePlace", [], "method", false, false, false, 82), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Adresse</p>
                        <p class=\"info-value\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 88, $this->source); })()), "getAddress", [], "method", false, false, false, 88), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Code postal</p>
                        <p class=\"info-value\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 92, $this->source); })()), "getPostalCode", [], "method", false, false, false, 92), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Ville</p>
                        <p class=\"info-value\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 98, $this->source); })()), "getCity", [], "method", false, false, false, 98), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Pays</p>
                        <p class=\"info-value\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 102, $this->source); })()), "getCountry", [], "method", false, false, false, 102), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Nationalité</p>
                        <p class=\"info-value\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 108, $this->source); })()), "getNationality", [], "method", false, false, false, 108), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Situation familiale actuelle</p>
                        <p class=\"info-value\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 112, $this->source); })()), "maritalStatus", [], "any", false, false, false, 112), "getName", [], "method", false, false, false, 112), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Nombre d'enfants</p>
                        <p class=\"info-value\">";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 118, $this->source); })()), "getNumberOfChildren", [], "method", false, false, false, 118), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Téléphone 1</p>
                        <p class=\"info-value\">";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 122, $this->source); })()), "getPhone1", [], "method", false, false, false, 122), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    ";
            // line 126
            if (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 126, $this->source); })()), "getPhone2", [], "method", false, false, false, 126)) {
                // line 127
                echo "                    <div class=\"info\">
                        <p class=\"info-label\">Téléphone 2</p>
                        <p class=\"info-value\">";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 129, $this->source); })()), "getPhone2", [], "method", false, false, false, 129), "html", null, true);
                echo "</p>
                    </div>
                    ";
            }
            // line 132
            echo "                    <div class=\"info\">
                        <p class=\"info-label\">Courier électronique</p>
                        <p class=\"info-value\">";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "user", [], "any", false, false, false, 134), "getEmail", [], "method", false, false, false, 134), "html", null, true);
            echo "</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    ";
        }
        // line 142
        echo "
    ";
        // line 143
        if ((isset($context["educations"]) || array_key_exists("educations", $context) ? $context["educations"] : (function () { throw new RuntimeError('Variable "educations" does not exist.', 143, $this->source); })())) {
            // line 144
            echo "    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">      
        <div id=\"recap3\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Diplôme académiques</h5>

            ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["educations"]) || array_key_exists("educations", $context) ? $context["educations"] : (function () { throw new RuntimeError('Variable "educations" does not exist.', 148, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["education"]) {
                // line 149
                echo "            <div class=\"d-flex flex-column gap-1\">
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Diplôme</p>
                        <p class=\"info-value\">";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["education"], "degree", [], "any", false, false, false, 153), "getName", [], "method", false, false, false, 153), "html", null, true);
                echo "</p>
                    </div>

                    ";
                // line 156
                if (twig_get_attribute($this->env, $this->source, $context["education"], "getOtherFieldOfStudy", [], "method", false, false, false, 156)) {
                    // line 157
                    echo "                    <div class=\"info\">
                        <p class=\"info-label\">Filière / Domaine</p>
                        <p class=\"info-value\">";
                    // line 159
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getOtherFieldOfStudy", [], "method", false, false, false, 159), "html", null, true);
                    echo "</p>
                    </div>
                    ";
                } else {
                    // line 162
                    echo "                    <div class=\"info\">
                        <p class=\"info-label\">Filière / Domaine</p>
                        <p class=\"info-value\">";
                    // line 164
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["education"], "fieldOfStudy", [], "any", false, false, false, 164), "getName", [], "method", false, false, false, 164), "html", null, true);
                    echo "</p>
                    </div>
                    ";
                }
                // line 167
                echo "
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Spécialité / Option</p>
                        <p class=\"info-value\">";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getSpecialty", [], "method", false, false, false, 172), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Etablissement / Institution</p>
                        <p class=\"info-value\">";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getInstitution", [], "method", false, false, false, 176), "html", null, true);
                echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Année d'obtention du diplôme</p>
                        <p class=\"info-value\">";
                // line 182
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["education"], "getGraduationYear", [], "method", false, false, false, 182), "html", null, true);
                echo "</p>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['education'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "        </div>
    </div>
    ";
        }
        // line 190
        echo "
    ";
        // line 191
        if ((isset($context["certifications"]) || array_key_exists("certifications", $context) ? $context["certifications"] : (function () { throw new RuntimeError('Variable "certifications" does not exist.', 191, $this->source); })())) {
            // line 192
            echo "    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">    
        <div id=\"recap4\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Certificats ou attestations</h5>

            ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["certifications"]) || array_key_exists("certifications", $context) ? $context["certifications"] : (function () { throw new RuntimeError('Variable "certifications" does not exist.', 196, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["certification"]) {
                // line 197
                echo "            <div class=\"d-flex flex-column gap-1\">
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Certificat / Attestation</p>
                        <p class=\"info-value\">";
                // line 201
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certification"], "getCertification", [], "method", false, false, false, 201), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Spécialitér</p>
                        <p class=\"info-value\">";
                // line 205
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certification"], "getSpecialty", [], "method", false, false, false, 205), "html", null, true);
                echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Etablissement / Institution</p>
                        <p class=\"info-value\">";
                // line 211
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certification"], "getInstitution", [], "method", false, false, false, 211), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Année d'obtention</p>
                        <p class=\"info-value\">";
                // line 215
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certification"], "getCertificationYear", [], "method", false, false, false, 215), "html", null, true);
                echo "</p>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "        </div>
    </div>
    ";
        }
        // line 223
        echo "
    ";
        // line 224
        if ((isset($context["internships"]) || array_key_exists("internships", $context) ? $context["internships"] : (function () { throw new RuntimeError('Variable "internships" does not exist.', 224, $this->source); })())) {
            // line 225
            echo "    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">       
        <div id=\"recap5\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Stages suivis</h5>

            ";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["internships"]) || array_key_exists("internships", $context) ? $context["internships"] : (function () { throw new RuntimeError('Variable "internships" does not exist.', 229, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["internship"]) {
                // line 230
                echo "            <div class=\"d-flex flex-column gap-1\">
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Thème</p>
                        <p class=\"info-value\">";
                // line 234
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getTheme", [], "method", false, false, false, 234), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Organisation ou Société</p>
                        <p class=\"info-value\">";
                // line 238
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getOrganization", [], "method", false, false, false, 238), "html", null, true);
                echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Année de stage</p>
                        <p class=\"info-value\">";
                // line 244
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getInternshipYear", [], "method", false, false, false, 244), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Durée</p>
                        <p class=\"info-value\">";
                // line 248
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getDuration", [], "method", false, false, false, 248), "html", null, true);
                echo " mois</p>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['internship'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "        </div>
    </div>
    ";
        }
        // line 256
        echo "
    ";
        // line 257
        if ((isset($context["workExperiences"]) || array_key_exists("workExperiences", $context) ? $context["workExperiences"] : (function () { throw new RuntimeError('Variable "workExperiences" does not exist.', 257, $this->source); })())) {
            // line 258
            echo "    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">    
        <div id=\"recap6\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Expériences professionnelles</h5>

            ";
            // line 262
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["workExperiences"]) || array_key_exists("workExperiences", $context) ? $context["workExperiences"] : (function () { throw new RuntimeError('Variable "workExperiences" does not exist.', 262, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["workExperience"]) {
                // line 263
                echo "            <div class=\"d-flex flex-column gap-1\">
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Poste occupé</p>
                        <p class=\"info-value\">";
                // line 267
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getPosition", [], "method", false, false, false, 267), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Organisme ou Société</p>
                        <p class=\"info-value\">";
                // line 271
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getOrganization", [], "method", false, false, false, 271), "html", null, true);
                echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Lieu</p>
                        <p class=\"info-value\">";
                // line 277
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getLocation", [], "method", false, false, false, 277), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Début</p>
                        <p class=\"info-value\">";
                // line 281
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getStartDate", [], "method", false, false, false, 281), "d/m/Y"), "html", null, true);
                echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Fin</p>
                        <p class=\"info-value\">";
                // line 287
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getEndDate", [], "method", false, false, false, 287), "d/m/Y"), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Personne de référence</p>
                        <p class=\"info-value\">";
                // line 291
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferenceName", [], "method", false, false, false, 291), "html", null, true);
                echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Fonction de la personne de référence</p>
                        <p class=\"info-value\">";
                // line 297
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferencePosition", [], "method", false, false, false, 297), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">e-mail de la personne de référence</p>
                        <p class=\"info-value\">";
                // line 301
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferenceEmail", [], "method", false, false, false, 301), "html", null, true);
                echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Téléphone de la personne de référence</p>
                        <p class=\"info-value\">";
                // line 307
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workExperience"], "getReferencePhone", [], "method", false, false, false, 307), "html", null, true);
                echo "</p>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workExperience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 312
            echo "        </div>
    </div>
    ";
        }
        // line 315
        echo "
    ";
        // line 316
        if ((isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 316, $this->source); })())) {
            // line 317
            echo "    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">      
        <div id=\"recap1\">
            <div class=\"d-flex flex-column gap-2\">
                <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Niveau de langue</h5>

                <div class=\"d-flex d-lg-none flex-column gap-3\">
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de lecture Malagasy</p>
                            <p class=\"info-value\">";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 326, $this->source); })()), "getMalagasyReadingLevel", [], "method", false, false, false, 326), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau d'écriture Malagasy</p>
                            <p class=\"info-value\">";
            // line 330
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 330, $this->source); })()), "getMalagasyWritingLevel", [], "method", false, false, false, 330), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de parole Malagasy</p>
                            <p class=\"info-value\">";
            // line 336
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 336, $this->source); })()), "getMalagasySpeakingLevel", [], "method", false, false, false, 336), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de lecture Français</p>
                            <p class=\"info-value\">";
            // line 340
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 340, $this->source); })()), "getFrenchReadingLevel", [], "method", false, false, false, 340), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau d'écriture Français</p>
                            <p class=\"info-value\">";
            // line 346
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 346, $this->source); })()), "getFrenchWritingLevel", [], "method", false, false, false, 346), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de parole Français</p>
                            <p class=\"info-value\">";
            // line 350
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 350, $this->source); })()), "getFrenchSpeakingLevel", [], "method", false, false, false, 350), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de lecture Anglais</p>
                            <p class=\"info-value\">";
            // line 356
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 356, $this->source); })()), "getEnglishReadingLevel", [], "method", false, false, false, 356), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau d'écriture Anglais</p>
                            <p class=\"info-value\">";
            // line 360
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 360, $this->source); })()), "getEnglishWritingLevel", [], "method", false, false, false, 360), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de parole Anglais</p>
                            <p class=\"info-value\">";
            // line 366
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 366, $this->source); })()), "getEnglishSpeakingLevel", [], "method", false, false, false, 366), "html", null, true);
            echo "</p>
                        </div>

                        ";
            // line 369
            if (twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 369, $this->source); })()), "getOtherLanguageName", [], "method", false, false, false, 369)) {
                // line 370
                echo "                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de lecture Anglais</p>
                            <p class=\"info-value\">";
                // line 372
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 372, $this->source); })()), "getOtherLanguageReadingLevel", [], "method", false, false, false, 372), "html", null, true);
                echo "</p>
                        </div>
                        ";
            }
            // line 375
            echo "                    </div>

                    ";
            // line 377
            if (twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 377, $this->source); })()), "getOtherLanguageName", [], "method", false, false, false, 377)) {
                // line 378
                echo "                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau d'écriture ";
                // line 380
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 380, $this->source); })()), "getOtherLanguageName", [], "method", false, false, false, 380), "html", null, true);
                echo "</p>
                            <p class=\"info-value\">";
                // line 381
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 381, $this->source); })()), "getOtherLanguageWritingLevel", [], "method", false, false, false, 381), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de parole ";
                // line 384
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 384, $this->source); })()), "getOtherLanguageName", [], "method", false, false, false, 384), "html", null, true);
                echo "</p>
                            <p class=\"info-value\">";
                // line 385
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 385, $this->source); })()), "getOtherLanguageSpeakingLevel", [], "method", false, false, false, 385), "html", null, true);
                echo "</p>
                        </div>
                    </div>
                    ";
            }
            // line 389
            echo "                </div>

                <div class=\"d-none d-lg-block row\">
                    <div class=\"col-lg-12\">
                        <table class=\"table language-lvl w-100\">
                            <thead>
                                <tr>
                                    <th scope=\"col\">Langue</th>
                                    <th scope=\"col\">Niveau de lecture</th>
                                    <th scope=\"col\">Niveau d'écriture</th>
                                    <th scope=\"col\">Niveau de parole</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope=\"row\">Malagasy</th>
                                    <td>";
            // line 405
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 405, $this->source); })()), "getMalagasyReadingLevel", [], "method", false, false, false, 405), "html", null, true);
            echo "</td>
                                    <td>";
            // line 406
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 406, $this->source); })()), "getMalagasyWritingLevel", [], "method", false, false, false, 406), "html", null, true);
            echo "</td>
                                    <td>";
            // line 407
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 407, $this->source); })()), "getMalagasySpeakingLevel", [], "method", false, false, false, 407), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">Français</th>
                                    <td>";
            // line 411
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 411, $this->source); })()), "getFrenchReadingLevel", [], "method", false, false, false, 411), "html", null, true);
            echo "</td>
                                    <td>";
            // line 412
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 412, $this->source); })()), "getFrenchWritingLevel", [], "method", false, false, false, 412), "html", null, true);
            echo "</td>
                                    <td>";
            // line 413
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 413, $this->source); })()), "getFrenchSpeakingLevel", [], "method", false, false, false, 413), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">Anglais</th>
                                    <td>";
            // line 417
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 417, $this->source); })()), "getEnglishReadingLevel", [], "method", false, false, false, 417), "html", null, true);
            echo "</td>
                                    <td>";
            // line 418
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 418, $this->source); })()), "getEnglishWritingLevel", [], "method", false, false, false, 418), "html", null, true);
            echo "</td>
                                    <td>";
            // line 419
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 419, $this->source); })()), "getEnglishSpeakingLevel", [], "method", false, false, false, 419), "html", null, true);
            echo "</td>
                                </tr>

                                ";
            // line 422
            if (twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 422, $this->source); })()), "getOtherLanguageName", [], "method", false, false, false, 422)) {
                // line 423
                echo "                                <tr>
                                    <th scope=\"row\">";
                // line 424
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 424, $this->source); })()), "getOtherLanguageName", [], "method", false, false, false, 424), "html", null, true);
                echo "</th>
                                    <td>";
                // line 425
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 425, $this->source); })()), "getOtherLanguageReadingLevel", [], "method", false, false, false, 425), "html", null, true);
                echo "</td>
                                    <td>";
                // line 426
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 426, $this->source); })()), "getOtherLanguageWritingLevel", [], "method", false, false, false, 426), "html", null, true);
                echo "</td>
                                    <td>";
                // line 427
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 427, $this->source); })()), "getOtherLanguageSpeakingLevel", [], "method", false, false, false, 427), "html", null, true);
                echo "</td>
                                </tr>
                                ";
            }
            // line 430
            echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"d-flex flex-column gap-2\">
                <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Compétences en Informatique Bureautique</h5>

                <div class=\"d-flex d-lg-none flex-column gap-3\">
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Word</p>
                            <p class=\"info-value\">";
            // line 443
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 443, $this->source); })()), "getMicrosoftWordLevel", [], "method", false, false, false, 443), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Excel</p>
                            <p class=\"info-value\">";
            // line 447
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 447, $this->source); })()), "getMicrosoftExcelLevel", [], "method", false, false, false, 447), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft PowerPoint</p>
                            <p class=\"info-value\">";
            // line 453
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 453, $this->source); })()), "getMicrosoftPowerPointLevel", [], "method", false, false, false, 453), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft OneNote</p>
                            <p class=\"info-value\">";
            // line 457
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 457, $this->source); })()), "getMicrosoftOneNoteLevel", [], "method", false, false, false, 457), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Outlook</p>
                            <p class=\"info-value\">";
            // line 463
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 463, $this->source); })()), "getMicrosoftOutlookLevel", [], "method", false, false, false, 463), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Publisher</p>
                            <p class=\"info-value\">";
            // line 467
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 467, $this->source); })()), "getMicrosoftPublisherLevel", [], "method", false, false, false, 467), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Access</p>
                            <p class=\"info-value\">";
            // line 473
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 473, $this->source); })()), "getMicrosoftAccessLevel", [], "method", false, false, false, 473), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Visio</p>
                            <p class=\"info-value\">";
            // line 477
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 477, $this->source); })()), "getMicrosoftVisioLevel", [], "method", false, false, false, 477), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Project</p>
                            <p class=\"info-value\">";
            // line 483
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 483, $this->source); })()), "getMicrosoftProjectLevel", [], "method", false, false, false, 483), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>

                <div class=\"d-none d-lg-block row\">
                    <div class=\"col-lg-12\">
                        <table class=\"table language-lvl w-100\">
                            <thead>
                                <tr>
                                    <th scope=\"col\">Technologie</th>
                                    <th scope=\"col\">Niveau</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Microsoft Word</td>
                                    <td>";
            // line 500
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 500, $this->source); })()), "getMicrosoftWordLevel", [], "method", false, false, false, 500), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Excel</td>
                                    <td>";
            // line 505
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 505, $this->source); })()), "getMicrosoftExcelLevel", [], "method", false, false, false, 505), "html", null, true);
            echo "</td>
                                </tr>
                                    
                                <tr>
                                    <td>Microsoft PowerPoint</td>
                                    <td>";
            // line 510
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 510, $this->source); })()), "getMicrosoftPowerPointLevel", [], "method", false, false, false, 510), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>Microsoft OneNote</td>
                                    <td>";
            // line 515
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 515, $this->source); })()), "getMicrosoftOneNoteLevel", [], "method", false, false, false, 515), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Outlook</td>
                                    <td>";
            // line 520
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 520, $this->source); })()), "getMicrosoftOutlookLevel", [], "method", false, false, false, 520), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Publisher</td>
                                    <td>";
            // line 525
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 525, $this->source); })()), "getMicrosoftPublisherLevel", [], "method", false, false, false, 525), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Access</td>
                                    <td>";
            // line 530
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 530, $this->source); })()), "getMicrosoftAccessLevel", [], "method", false, false, false, 530), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Visio</td>
                                    <td>";
            // line 535
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 535, $this->source); })()), "getMicrosoftVisioLevel", [], "method", false, false, false, 535), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Project</td>
                                    <td>";
            // line 540
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 540, $this->source); })()), "getMicrosoftProjectLevel", [], "method", false, false, false, 540), "html", null, true);
            echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"d-flex flex-column gap-2\">
                <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Autres compétences informatiques</h5>
                <div class=\"tags\">
                    ";
            // line 551
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 551, $this->source); })()), "otherSkills", [], "any", false, false, false, 551));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 552
                echo "                    <span class=\"tag\">";
                echo twig_escape_filter($this->env, $context["skill"], "html", null, true);
                echo "</span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 554
            echo "                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 559
        echo "
    ";
        // line 560
        if ((isset($context["engagement"]) || array_key_exists("engagement", $context) ? $context["engagement"] : (function () { throw new RuntimeError('Variable "engagement" does not exist.', 560, $this->source); })())) {
            // line 561
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["engagement"]) || array_key_exists("engagement", $context) ? $context["engagement"] : (function () { throw new RuntimeError('Variable "engagement" does not exist.', 561, $this->source); })()), "getSecondPosition", [], "method", false, false, false, 561) || twig_get_attribute($this->env, $this->source, (isset($context["engagement"]) || array_key_exists("engagement", $context) ? $context["engagement"] : (function () { throw new RuntimeError('Variable "engagement" does not exist.', 561, $this->source); })()), "getThirdPosition", [], "method", false, false, false, 561))) {
                // line 562
                echo "            <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\"> 
                <div id=\"recap1\" class=\"d-flex flex-column gap-2\">
                    <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Autres postes souhaités</h5>
                    <div class=\"d-flex flex-column gap-1\">
                        <div class=\"info-group\">
                            ";
                // line 567
                if (twig_get_attribute($this->env, $this->source, (isset($context["engagement"]) || array_key_exists("engagement", $context) ? $context["engagement"] : (function () { throw new RuntimeError('Variable "engagement" does not exist.', 567, $this->source); })()), "getSecondPosition", [], "method", false, false, false, 567)) {
                    // line 568
                    echo "                            <div class=\"info\">
                                <p class=\"info-label\">2ème poste souhaités</p>
                                <p class=\"info-value\">";
                    // line 570
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["engagement"]) || array_key_exists("engagement", $context) ? $context["engagement"] : (function () { throw new RuntimeError('Variable "engagement" does not exist.', 570, $this->source); })()), "getSecondPosition", [], "method", false, false, false, 570), "html", null, true);
                    echo "</p>
                            </div>
                            ";
                }
                // line 573
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["engagement"]) || array_key_exists("engagement", $context) ? $context["engagement"] : (function () { throw new RuntimeError('Variable "engagement" does not exist.', 573, $this->source); })()), "getThirdPosition", [], "method", false, false, false, 573)) {
                    // line 574
                    echo "                            <div class=\"info\">
                                <p class=\"info-label\">3ème poste souhaités</p>
                                <p class=\"info-value\">";
                    // line 576
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["engagement"]) || array_key_exists("engagement", $context) ? $context["engagement"] : (function () { throw new RuntimeError('Variable "engagement" does not exist.', 576, $this->source); })()), "getThirdPosition", [], "method", false, false, false, 576), "html", null, true);
                    echo "</p>
                            </div>
                            ";
                }
                // line 579
                echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            }
            // line 584
            echo "    ";
        }
        // line 585
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pdf/submission_details.html.twig";
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
        return array (  1051 => 585,  1048 => 584,  1041 => 579,  1035 => 576,  1031 => 574,  1028 => 573,  1022 => 570,  1018 => 568,  1016 => 567,  1009 => 562,  1006 => 561,  1004 => 560,  1001 => 559,  994 => 554,  985 => 552,  981 => 551,  967 => 540,  959 => 535,  951 => 530,  943 => 525,  935 => 520,  927 => 515,  919 => 510,  911 => 505,  903 => 500,  883 => 483,  874 => 477,  867 => 473,  858 => 467,  851 => 463,  842 => 457,  835 => 453,  826 => 447,  819 => 443,  804 => 430,  798 => 427,  794 => 426,  790 => 425,  786 => 424,  783 => 423,  781 => 422,  775 => 419,  771 => 418,  767 => 417,  760 => 413,  756 => 412,  752 => 411,  745 => 407,  741 => 406,  737 => 405,  719 => 389,  712 => 385,  708 => 384,  702 => 381,  698 => 380,  694 => 378,  692 => 377,  688 => 375,  682 => 372,  678 => 370,  676 => 369,  670 => 366,  661 => 360,  654 => 356,  645 => 350,  638 => 346,  629 => 340,  622 => 336,  613 => 330,  606 => 326,  595 => 317,  593 => 316,  590 => 315,  585 => 312,  574 => 307,  565 => 301,  558 => 297,  549 => 291,  542 => 287,  533 => 281,  526 => 277,  517 => 271,  510 => 267,  504 => 263,  500 => 262,  494 => 258,  492 => 257,  489 => 256,  484 => 253,  473 => 248,  466 => 244,  457 => 238,  450 => 234,  444 => 230,  440 => 229,  434 => 225,  432 => 224,  429 => 223,  424 => 220,  413 => 215,  406 => 211,  397 => 205,  390 => 201,  384 => 197,  380 => 196,  374 => 192,  372 => 191,  369 => 190,  364 => 187,  353 => 182,  344 => 176,  337 => 172,  330 => 167,  324 => 164,  320 => 162,  314 => 159,  310 => 157,  308 => 156,  302 => 153,  296 => 149,  292 => 148,  286 => 144,  284 => 143,  281 => 142,  270 => 134,  266 => 132,  260 => 129,  256 => 127,  254 => 126,  247 => 122,  240 => 118,  231 => 112,  224 => 108,  215 => 102,  208 => 98,  199 => 92,  192 => 88,  183 => 82,  176 => 78,  167 => 72,  158 => 68,  149 => 62,  142 => 58,  133 => 52,  126 => 48,  117 => 41,  115 => 40,  112 => 39,  106 => 35,  102 => 33,  96 => 30,  92 => 28,  89 => 27,  83 => 24,  79 => 22,  77 => 21,  74 => 20,  72 => 19,  66 => 16,  59 => 12,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"px-4\">
    <h1 class=\"my-4 text-center\">Détails de candidature</h1>

    {% if jobApplication %}
    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">     
        <div id=\"recap1\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Poste demandé</h5>
            <div class=\"d-flex flex-column gap-1\">
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Poste demandé</p>
                        <p class=\"info-value\">{{ app.user.referencePosition.name }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Lieux d'affectation</p>
                        <p class=\"info-value\">{{ jobApplication.getPrimaryLocation() }}</p>
                    </div>
                </div>
                {% if jobApplication.getSecondaryLocation() or jobApplication.getTertiaryLocation() %}
                <div class=\"info-group\">
                    {% if jobApplication.getSecondaryLocation() %}
                    <div class=\"info\">
                        <p class=\"info-label\">2ème lieux d'affectation souhaité</p>
                        <p class=\"info-value\">{{ jobApplication.getSecondaryLocation() }}</p>
                    </div>
                    {% endif %}
                    {% if jobApplication.getTertiaryLocation() %}
                    <div class=\"info\">
                        <p class=\"info-label\">3ème lieux d'affectation souhaité</p>
                        <p class=\"info-value\">{{ jobApplication.getTertiaryLocation() }}</p>
                    </div>
                    {% endif %}
                </div>
                {% endif %}
            </div>
        </div>
    </div>
    {% endif %}

    {% if profile %}
    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">      
        <div id=\"recap2\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Informations personnelles</h5>
            <div class=\"d-flex flex-column gap-1\">
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Civilité</p>
                        <p class=\"info-value\">{{ profile.civility.getName() }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Nom</p>
                        <p class=\"info-value\">{{ app.user.getLastName() }}</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Prénom(s)</p>
                        <p class=\"info-value\">{{ app.user.getFirstName() }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Date de naissance</p>
                        <p class=\"info-value\">{{ app.user.getBirthDate()|date('d/m/Y') }}</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Lieu de naissance</p>
                        <p class=\"info-value\">{{ profile.getBirthCity() }} - {{ profile.getCountry() }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">N° CIN</p>
                        <p class=\"info-value\">{{ app.user.getCin() }}</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Date de délivrance du CIN</p>
                        <p class=\"info-value\">{{ profile.getCinIssueDate()|date('d/m/Y') }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Lieu de délivrance</p>
                        <p class=\"info-value\">{{ profile.getCinIssuePlace() }}</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Adresse</p>
                        <p class=\"info-value\">{{ profile.getAddress() }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Code postal</p>
                        <p class=\"info-value\">{{ profile.getPostalCode() }}</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Ville</p>
                        <p class=\"info-value\">{{ profile.getCity() }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Pays</p>
                        <p class=\"info-value\">{{ profile.getCountry() }}</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Nationalité</p>
                        <p class=\"info-value\">{{ profile.getNationality() }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Situation familiale actuelle</p>
                        <p class=\"info-value\">{{ profile.maritalStatus.getName() }}</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Nombre d'enfants</p>
                        <p class=\"info-value\">{{ profile.getNumberOfChildren() }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Téléphone 1</p>
                        <p class=\"info-value\">{{ profile.getPhone1() }}</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    {% if profile.getPhone2() %}
                    <div class=\"info\">
                        <p class=\"info-label\">Téléphone 2</p>
                        <p class=\"info-value\">{{ profile.getPhone2() }}</p>
                    </div>
                    {% endif %}
                    <div class=\"info\">
                        <p class=\"info-label\">Courier électronique</p>
                        <p class=\"info-value\">{{ app.user.getEmail() }}</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    {% endif %}

    {% if educations %}
    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">      
        <div id=\"recap3\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Diplôme académiques</h5>

            {% for education in educations %}
            <div class=\"d-flex flex-column gap-1\">
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Diplôme</p>
                        <p class=\"info-value\">{{ education.degree.getName() }}</p>
                    </div>

                    {% if education.getOtherFieldOfStudy() %}
                    <div class=\"info\">
                        <p class=\"info-label\">Filière / Domaine</p>
                        <p class=\"info-value\">{{ education.getOtherFieldOfStudy() }}</p>
                    </div>
                    {% else %}
                    <div class=\"info\">
                        <p class=\"info-label\">Filière / Domaine</p>
                        <p class=\"info-value\">{{ education.fieldOfStudy.getName() }}</p>
                    </div>
                    {% endif %}

                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Spécialité / Option</p>
                        <p class=\"info-value\">{{ education.getSpecialty() }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Etablissement / Institution</p>
                        <p class=\"info-value\">{{ education.getInstitution() }}</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Année d'obtention du diplôme</p>
                        <p class=\"info-value\">{{ education.getGraduationYear() }}</p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
    {% endif %}

    {% if certifications %}
    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">    
        <div id=\"recap4\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Certificats ou attestations</h5>

            {% for certification in certifications %}
            <div class=\"d-flex flex-column gap-1\">
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Certificat / Attestation</p>
                        <p class=\"info-value\">{{ certification.getCertification() }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Spécialitér</p>
                        <p class=\"info-value\">{{ certification.getSpecialty() }}</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Etablissement / Institution</p>
                        <p class=\"info-value\">{{ certification.getInstitution() }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Année d'obtention</p>
                        <p class=\"info-value\">{{ certification.getCertificationYear() }}</p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
    {% endif %}

    {% if internships %}
    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">       
        <div id=\"recap5\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Stages suivis</h5>

            {% for internship in internships %}
            <div class=\"d-flex flex-column gap-1\">
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Thème</p>
                        <p class=\"info-value\">{{ internship.getTheme() }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Organisation ou Société</p>
                        <p class=\"info-value\">{{ internship.getOrganization() }}</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Année de stage</p>
                        <p class=\"info-value\">{{ internship.getInternshipYear() }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Durée</p>
                        <p class=\"info-value\">{{ internship.getDuration() }} mois</p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
    {% endif %}

    {% if workExperiences %}
    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">    
        <div id=\"recap6\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Expériences professionnelles</h5>

            {% for workExperience in workExperiences %}
            <div class=\"d-flex flex-column gap-1\">
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Poste occupé</p>
                        <p class=\"info-value\">{{ workExperience.getPosition() }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Organisme ou Société</p>
                        <p class=\"info-value\">{{ workExperience.getOrganization() }}</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Lieu</p>
                        <p class=\"info-value\">{{ workExperience.getLocation() }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Début</p>
                        <p class=\"info-value\">{{ workExperience.getStartDate()|date('d/m/Y') }}</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Fin</p>
                        <p class=\"info-value\">{{ workExperience.getEndDate()|date('d/m/Y') }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Personne de référence</p>
                        <p class=\"info-value\">{{ workExperience.getReferenceName() }}</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Fonction de la personne de référence</p>
                        <p class=\"info-value\">{{ workExperience.getReferencePosition() }}</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">e-mail de la personne de référence</p>
                        <p class=\"info-value\">{{ workExperience.getReferenceEmail() }}</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Téléphone de la personne de référence</p>
                        <p class=\"info-value\">{{ workExperience.getReferencePhone() }}</p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
    {% endif %}

    {% if otherInfo %}
    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">      
        <div id=\"recap1\">
            <div class=\"d-flex flex-column gap-2\">
                <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Niveau de langue</h5>

                <div class=\"d-flex d-lg-none flex-column gap-3\">
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de lecture Malagasy</p>
                            <p class=\"info-value\">{{ otherInfo.getMalagasyReadingLevel() }}</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau d'écriture Malagasy</p>
                            <p class=\"info-value\">{{ otherInfo.getMalagasyWritingLevel() }}</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de parole Malagasy</p>
                            <p class=\"info-value\">{{ otherInfo.getMalagasySpeakingLevel() }}</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de lecture Français</p>
                            <p class=\"info-value\">{{ otherInfo.getFrenchReadingLevel() }}</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau d'écriture Français</p>
                            <p class=\"info-value\">{{ otherInfo.getFrenchWritingLevel() }}</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de parole Français</p>
                            <p class=\"info-value\">{{ otherInfo.getFrenchSpeakingLevel() }}</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de lecture Anglais</p>
                            <p class=\"info-value\">{{ otherInfo.getEnglishReadingLevel() }}</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau d'écriture Anglais</p>
                            <p class=\"info-value\">{{ otherInfo.getEnglishWritingLevel() }}</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de parole Anglais</p>
                            <p class=\"info-value\">{{ otherInfo.getEnglishSpeakingLevel() }}</p>
                        </div>

                        {% if otherInfo.getOtherLanguageName() %}
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de lecture Anglais</p>
                            <p class=\"info-value\">{{ otherInfo.getOtherLanguageReadingLevel() }}</p>
                        </div>
                        {% endif %}
                    </div>

                    {% if otherInfo.getOtherLanguageName() %}
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau d'écriture {{ otherInfo.getOtherLanguageName() }}</p>
                            <p class=\"info-value\">{{ otherInfo.getOtherLanguageWritingLevel() }}</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de parole {{ otherInfo.getOtherLanguageName() }}</p>
                            <p class=\"info-value\">{{ otherInfo.getOtherLanguageSpeakingLevel() }}</p>
                        </div>
                    </div>
                    {% endif %}
                </div>

                <div class=\"d-none d-lg-block row\">
                    <div class=\"col-lg-12\">
                        <table class=\"table language-lvl w-100\">
                            <thead>
                                <tr>
                                    <th scope=\"col\">Langue</th>
                                    <th scope=\"col\">Niveau de lecture</th>
                                    <th scope=\"col\">Niveau d'écriture</th>
                                    <th scope=\"col\">Niveau de parole</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope=\"row\">Malagasy</th>
                                    <td>{{ otherInfo.getMalagasyReadingLevel() }}</td>
                                    <td>{{ otherInfo.getMalagasyWritingLevel() }}</td>
                                    <td>{{ otherInfo.getMalagasySpeakingLevel() }}</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">Français</th>
                                    <td>{{ otherInfo.getFrenchReadingLevel() }}</td>
                                    <td>{{ otherInfo.getFrenchWritingLevel() }}</td>
                                    <td>{{ otherInfo.getFrenchSpeakingLevel() }}</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">Anglais</th>
                                    <td>{{ otherInfo.getEnglishReadingLevel() }}</td>
                                    <td>{{ otherInfo.getEnglishWritingLevel() }}</td>
                                    <td>{{ otherInfo.getEnglishSpeakingLevel() }}</td>
                                </tr>

                                {% if otherInfo.getOtherLanguageName() %}
                                <tr>
                                    <th scope=\"row\">{{ otherInfo.getOtherLanguageName() }}</th>
                                    <td>{{ otherInfo.getOtherLanguageReadingLevel() }}</td>
                                    <td>{{ otherInfo.getOtherLanguageWritingLevel() }}</td>
                                    <td>{{ otherInfo.getOtherLanguageSpeakingLevel() }}</td>
                                </tr>
                                {% endif %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"d-flex flex-column gap-2\">
                <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Compétences en Informatique Bureautique</h5>

                <div class=\"d-flex d-lg-none flex-column gap-3\">
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Word</p>
                            <p class=\"info-value\">{{ otherInfo.getMicrosoftWordLevel() }}</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Excel</p>
                            <p class=\"info-value\">{{ otherInfo.getMicrosoftExcelLevel() }}</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft PowerPoint</p>
                            <p class=\"info-value\">{{ otherInfo.getMicrosoftPowerPointLevel() }}</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft OneNote</p>
                            <p class=\"info-value\">{{ otherInfo.getMicrosoftOneNoteLevel() }}</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Outlook</p>
                            <p class=\"info-value\">{{ otherInfo.getMicrosoftOutlookLevel() }}</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Publisher</p>
                            <p class=\"info-value\">{{ otherInfo.getMicrosoftPublisherLevel() }}</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Access</p>
                            <p class=\"info-value\">{{ otherInfo.getMicrosoftAccessLevel() }}</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Visio</p>
                            <p class=\"info-value\">{{ otherInfo.getMicrosoftVisioLevel() }}</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Project</p>
                            <p class=\"info-value\">{{ otherInfo.getMicrosoftProjectLevel() }}</p>
                        </div>
                    </div>
                </div>

                <div class=\"d-none d-lg-block row\">
                    <div class=\"col-lg-12\">
                        <table class=\"table language-lvl w-100\">
                            <thead>
                                <tr>
                                    <th scope=\"col\">Technologie</th>
                                    <th scope=\"col\">Niveau</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Microsoft Word</td>
                                    <td>{{ otherInfo.getMicrosoftWordLevel() }}</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Excel</td>
                                    <td>{{ otherInfo.getMicrosoftExcelLevel() }}</td>
                                </tr>
                                    
                                <tr>
                                    <td>Microsoft PowerPoint</td>
                                    <td>{{ otherInfo.getMicrosoftPowerPointLevel() }}</td>
                                </tr>

                                <tr>
                                    <td>Microsoft OneNote</td>
                                    <td>{{ otherInfo.getMicrosoftOneNoteLevel() }}</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Outlook</td>
                                    <td>{{ otherInfo.getMicrosoftOutlookLevel() }}</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Publisher</td>
                                    <td>{{ otherInfo.getMicrosoftPublisherLevel() }}</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Access</td>
                                    <td>{{ otherInfo.getMicrosoftAccessLevel() }}</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Visio</td>
                                    <td>{{ otherInfo.getMicrosoftVisioLevel() }}</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Project</td>
                                    <td>{{ otherInfo.getMicrosoftProjectLevel() }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"d-flex flex-column gap-2\">
                <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Autres compétences informatiques</h5>
                <div class=\"tags\">
                    {% for skill in otherInfo.otherSkills %}
                    <span class=\"tag\">{{ skill }}</span>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
    {% endif %}

    {% if engagement %}
        {% if engagement.getSecondPosition() or engagement.getThirdPosition() %}
            <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\"> 
                <div id=\"recap1\" class=\"d-flex flex-column gap-2\">
                    <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Autres postes souhaités</h5>
                    <div class=\"d-flex flex-column gap-1\">
                        <div class=\"info-group\">
                            {% if engagement.getSecondPosition() %}
                            <div class=\"info\">
                                <p class=\"info-label\">2ème poste souhaités</p>
                                <p class=\"info-value\">{{ engagement.getSecondPosition() }}</p>
                            </div>
                            {% endif %}
                            {% if engagement.getThirdPosition() %}
                            <div class=\"info\">
                                <p class=\"info-label\">3ème poste souhaités</p>
                                <p class=\"info-value\">{{ engagement.getThirdPosition() }}</p>
                            </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}
    {% endif %}
</div>", "pdf/submission_details.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\pdf\\submission_details.html.twig");
    }
}
