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
class __TwigTemplate_87a8a2310cbfa81d603e4827338f014c extends Template
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
        echo "<div class=\"px-4\">
    <h1 class=\"my-4 text-center\">Détails de candidature</h1>

    ";
        // line 4
        if (($context["jobApplication"] ?? null)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12), "referencePosition", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Lieu d'affectation</p>
                        <p class=\"info-value\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getPrimaryLocation", [], "method", false, false, false, 16), "html", null, true);
            echo "</p>
                    </div>
                </div>
                ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getSecondaryLocation", [], "method", false, false, false, 19) || twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getTertiaryLocation", [], "method", false, false, false, 19))) {
                // line 20
                echo "                <div class=\"info-group\">
                    ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getSecondaryLocation", [], "method", false, false, false, 21)) {
                    // line 22
                    echo "                    <div class=\"info\">
                        <p class=\"info-label\">2ème lieu d'affectation souhaité</p>
                        <p class=\"info-value\">";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getSecondaryLocation", [], "method", false, false, false, 24), "html", null, true);
                    echo "</p>
                    </div>
                    ";
                }
                // line 27
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getTertiaryLocation", [], "method", false, false, false, 27)) {
                    // line 28
                    echo "                    <div class=\"info\">
                        <p class=\"info-label\">3ème lieu d'affectation souhaité</p>
                        <p class=\"info-value\">";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getTertiaryLocation", [], "method", false, false, false, 30), "html", null, true);
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
        if (($context["profile"] ?? null)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "civility", [], "any", false, false, false, 48), "getName", [], "method", false, false, false, 48), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Nom</p>
                        <p class=\"info-value\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 52), "getLastName", [], "method", false, false, false, 52), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Prénom(s)</p>
                        <p class=\"info-value\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 58), "getFirstName", [], "method", false, false, false, 58), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Date de naissance</p>
                        <p class=\"info-value\">";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 62), "getBirthDate", [], "method", false, false, false, 62), "d/m/Y"), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Lieu de naissance</p>
                        <p class=\"info-value\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getBirthCity", [], "method", false, false, false, 68), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getCountry", [], "method", false, false, false, 68), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">N° CIN</p>
                        <p class=\"info-value\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 72), "getCin", [], "method", false, false, false, 72), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Date de délivrance du CIN</p>
                        <p class=\"info-value\">";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getCinIssueDate", [], "method", false, false, false, 78), "d/m/Y"), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Lieu de délivrance</p>
                        <p class=\"info-value\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getCinIssuePlace", [], "method", false, false, false, 82), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Adresse</p>
                        <p class=\"info-value\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getAddress", [], "method", false, false, false, 88), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Code postal</p>
                        <p class=\"info-value\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getPostalCode", [], "method", false, false, false, 92), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Ville</p>
                        <p class=\"info-value\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getCity", [], "method", false, false, false, 98), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Pays</p>
                        <p class=\"info-value\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getCountry", [], "method", false, false, false, 102), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Nationalité</p>
                        <p class=\"info-value\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getNationality", [], "method", false, false, false, 108), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Situation familiale actuelle</p>
                        <p class=\"info-value\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "maritalStatus", [], "any", false, false, false, 112), "getName", [], "method", false, false, false, 112), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Nombre d'enfants</p>
                        <p class=\"info-value\">";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getNumberOfChildren", [], "method", false, false, false, 118), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Téléphone 1</p>
                        <p class=\"info-value\">";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getPhone1", [], "method", false, false, false, 122), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    ";
            // line 126
            if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getPhone2", [], "method", false, false, false, 126)) {
                // line 127
                echo "                    <div class=\"info\">
                        <p class=\"info-label\">Téléphone 2</p>
                        <p class=\"info-value\">";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getPhone2", [], "method", false, false, false, 129), "html", null, true);
                echo "</p>
                    </div>
                    ";
            }
            // line 132
            echo "                    <div class=\"info\">
                        <p class=\"info-label\">Courier électronique</p>
                        <p class=\"info-value\">";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 134), "getEmail", [], "method", false, false, false, 134), "html", null, true);
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
        if (($context["educations"] ?? null)) {
            // line 144
            echo "    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">      
        <div id=\"recap3\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Diplôme académiques</h5>

            ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["educations"] ?? null));
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
        if (($context["certifications"] ?? null)) {
            // line 192
            echo "    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">    
        <div id=\"recap4\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Certificats ou attestations</h5>

            ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["certifications"] ?? null));
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
        if (($context["internships"] ?? null)) {
            // line 225
            echo "    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">       
        <div id=\"recap5\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Stages suivis</h5>

            ";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["internships"] ?? null));
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
        if (($context["workExperiences"] ?? null)) {
            // line 258
            echo "    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">    
        <div id=\"recap6\" class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Expériences professionnelles</h5>

            ";
            // line 262
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["workExperiences"] ?? null));
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
        if (($context["otherInfo"] ?? null)) {
            // line 317
            echo "    <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\">      
        <div id=\"recap1\">
            <div class=\"d-flex flex-column gap-2\">
                <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Niveau de langue</h5>

                <div class=\"d-flex d-lg-none flex-column gap-3\">
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de lecture</p>
                            <p class=\"info-value\">";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMalagasyReadingLevel", [], "method", false, false, false, 326), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Communication écrite</p>
                            <p class=\"info-value\">";
            // line 330
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMalagasyWritingLevel", [], "method", false, false, false, 330), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Communication orale</p>
                            <p class=\"info-value\">";
            // line 336
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMalagasySpeakingLevel", [], "method", false, false, false, 336), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de lecture</p>
                            <p class=\"info-value\">";
            // line 340
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getFrenchReadingLevel", [], "method", false, false, false, 340), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Communication écrite</p>
                            <p class=\"info-value\">";
            // line 346
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getFrenchWritingLevel", [], "method", false, false, false, 346), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Communication orale</p>
                            <p class=\"info-value\">";
            // line 350
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getFrenchSpeakingLevel", [], "method", false, false, false, 350), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de lecture</p>
                            <p class=\"info-value\">";
            // line 356
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getEnglishReadingLevel", [], "method", false, false, false, 356), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Communication écrite</p>
                            <p class=\"info-value\">";
            // line 360
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getEnglishWritingLevel", [], "method", false, false, false, 360), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Communication orale</p>
                            <p class=\"info-value\">";
            // line 366
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getEnglishSpeakingLevel", [], "method", false, false, false, 366), "html", null, true);
            echo "</p>
                        </div>

                        ";
            // line 369
            if (twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageName", [], "method", false, false, false, 369)) {
                // line 370
                echo "                        <div class=\"info\">
                            <p class=\"info-label\">Niveau de lecture</p>
                            <p class=\"info-value\">";
                // line 372
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageReadingLevel", [], "method", false, false, false, 372), "html", null, true);
                echo "</p>
                        </div>
                        ";
            }
            // line 375
            echo "                    </div>

                    ";
            // line 377
            if (twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageName", [], "method", false, false, false, 377)) {
                // line 378
                echo "                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Communication écrite ";
                // line 380
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageName", [], "method", false, false, false, 380), "html", null, true);
                echo "</p>
                            <p class=\"info-value\">";
                // line 381
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageWritingLevel", [], "method", false, false, false, 381), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Communication orale ";
                // line 384
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageName", [], "method", false, false, false, 384), "html", null, true);
                echo "</p>
                            <p class=\"info-value\">";
                // line 385
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageSpeakingLevel", [], "method", false, false, false, 385), "html", null, true);
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
                                    <th scope=\"col\">Communication écrite</th>
                                    <th scope=\"col\">Communication orale</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope=\"row\">Malagasy</th>
                                    <td>";
            // line 405
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMalagasyReadingLevel", [], "method", false, false, false, 405), "html", null, true);
            echo "</td>
                                    <td>";
            // line 406
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMalagasyWritingLevel", [], "method", false, false, false, 406), "html", null, true);
            echo "</td>
                                    <td>";
            // line 407
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMalagasySpeakingLevel", [], "method", false, false, false, 407), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">Français</th>
                                    <td>";
            // line 411
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getFrenchReadingLevel", [], "method", false, false, false, 411), "html", null, true);
            echo "</td>
                                    <td>";
            // line 412
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getFrenchWritingLevel", [], "method", false, false, false, 412), "html", null, true);
            echo "</td>
                                    <td>";
            // line 413
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getFrenchSpeakingLevel", [], "method", false, false, false, 413), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">Anglais</th>
                                    <td>";
            // line 417
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getEnglishReadingLevel", [], "method", false, false, false, 417), "html", null, true);
            echo "</td>
                                    <td>";
            // line 418
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getEnglishWritingLevel", [], "method", false, false, false, 418), "html", null, true);
            echo "</td>
                                    <td>";
            // line 419
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getEnglishSpeakingLevel", [], "method", false, false, false, 419), "html", null, true);
            echo "</td>
                                </tr>

                                ";
            // line 422
            if (twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageName", [], "method", false, false, false, 422)) {
                // line 423
                echo "                                <tr>
                                    <th scope=\"row\">";
                // line 424
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageName", [], "method", false, false, false, 424), "html", null, true);
                echo "</th>
                                    <td>";
                // line 425
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageReadingLevel", [], "method", false, false, false, 425), "html", null, true);
                echo "</td>
                                    <td>";
                // line 426
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageWritingLevel", [], "method", false, false, false, 426), "html", null, true);
                echo "</td>
                                    <td>";
                // line 427
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageSpeakingLevel", [], "method", false, false, false, 427), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftWordLevel", [], "method", false, false, false, 443), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Excel</p>
                            <p class=\"info-value\">";
            // line 447
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftExcelLevel", [], "method", false, false, false, 447), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft PowerPoint</p>
                            <p class=\"info-value\">";
            // line 453
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftPowerPointLevel", [], "method", false, false, false, 453), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft OneNote</p>
                            <p class=\"info-value\">";
            // line 457
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftOneNoteLevel", [], "method", false, false, false, 457), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Outlook</p>
                            <p class=\"info-value\">";
            // line 463
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftOutlookLevel", [], "method", false, false, false, 463), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Publisher</p>
                            <p class=\"info-value\">";
            // line 467
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftPublisherLevel", [], "method", false, false, false, 467), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Access</p>
                            <p class=\"info-value\">";
            // line 473
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftAccessLevel", [], "method", false, false, false, 473), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Visio</p>
                            <p class=\"info-value\">";
            // line 477
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftVisioLevel", [], "method", false, false, false, 477), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"info-group\">
                        <div class=\"info\">
                            <p class=\"info-label\">Microsoft Project</p>
                            <p class=\"info-value\">";
            // line 483
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftProjectLevel", [], "method", false, false, false, 483), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftWordLevel", [], "method", false, false, false, 500), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Excel</td>
                                    <td>";
            // line 505
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftExcelLevel", [], "method", false, false, false, 505), "html", null, true);
            echo "</td>
                                </tr>
                                    
                                <tr>
                                    <td>Microsoft PowerPoint</td>
                                    <td>";
            // line 510
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftPowerPointLevel", [], "method", false, false, false, 510), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>Microsoft OneNote</td>
                                    <td>";
            // line 515
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftOneNoteLevel", [], "method", false, false, false, 515), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Outlook</td>
                                    <td>";
            // line 520
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftOutlookLevel", [], "method", false, false, false, 520), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Publisher</td>
                                    <td>";
            // line 525
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftPublisherLevel", [], "method", false, false, false, 525), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Access</td>
                                    <td>";
            // line 530
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftAccessLevel", [], "method", false, false, false, 530), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Visio</td>
                                    <td>";
            // line 535
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftVisioLevel", [], "method", false, false, false, 535), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>Microsoft Project</td>
                                    <td>";
            // line 540
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftProjectLevel", [], "method", false, false, false, 540), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "otherSkills", [], "any", false, false, false, 551));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 552
                echo "                        <span class=\"tag\">";
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

            <div class=\"d-flex flex-column gap-2\">
                <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Autres compétences non informatiques</h5>
                <div class=\"tags\">
                    ";
            // line 560
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "otherNotInfoSkills", [], "any", false, false, false, 560), ","));
            foreach ($context['_seq'] as $context["_key"] => $context["skillOth"]) {
                // line 561
                echo "                        <span class=\"tag\">";
                echo twig_escape_filter($this->env, $context["skillOth"], "html", null, true);
                echo "</span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skillOth'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 563
            echo "                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 568
        echo "
    ";
        // line 569
        if (($context["engagement"] ?? null)) {
            // line 570
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["engagement"] ?? null), "getSecondPosition", [], "method", false, false, false, 570) || twig_get_attribute($this->env, $this->source, ($context["engagement"] ?? null), "getThirdPosition", [], "method", false, false, false, 570))) {
                // line 571
                echo "            <div class=\"p-4 p-lg-5 mb-4 bg-white rounded-2\"> 
                <div id=\"recap1\" class=\"d-flex flex-column gap-2\">
                    <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Autres postes souhaités</h5>
                    <div class=\"d-flex flex-column gap-1\">
                        <div class=\"info-group\">
                            ";
                // line 576
                if (twig_get_attribute($this->env, $this->source, ($context["engagement"] ?? null), "getSecondPosition", [], "method", false, false, false, 576)) {
                    // line 577
                    echo "                            <div class=\"info\">
                                <p class=\"info-label\">2ème poste souhaité</p>
                                <p class=\"info-value\">";
                    // line 579
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["engagement"] ?? null), "getSecondPosition", [], "method", false, false, false, 579), "html", null, true);
                    echo "</p>
                            </div>
                            ";
                }
                // line 582
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["engagement"] ?? null), "getThirdPosition", [], "method", false, false, false, 582)) {
                    // line 583
                    echo "                            <div class=\"info\">
                                <p class=\"info-label\">3ème poste souhaité</p>
                                <p class=\"info-value\">";
                    // line 585
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["engagement"] ?? null), "getThirdPosition", [], "method", false, false, false, 585), "html", null, true);
                    echo "</p>
                            </div>
                            ";
                }
                // line 588
                echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            }
            // line 593
            echo "    ";
        }
        // line 594
        echo "</div>";
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
        return array (  1066 => 594,  1063 => 593,  1056 => 588,  1050 => 585,  1046 => 583,  1043 => 582,  1037 => 579,  1033 => 577,  1031 => 576,  1024 => 571,  1021 => 570,  1019 => 569,  1016 => 568,  1009 => 563,  1000 => 561,  996 => 560,  988 => 554,  979 => 552,  975 => 551,  961 => 540,  953 => 535,  945 => 530,  937 => 525,  929 => 520,  921 => 515,  913 => 510,  905 => 505,  897 => 500,  877 => 483,  868 => 477,  861 => 473,  852 => 467,  845 => 463,  836 => 457,  829 => 453,  820 => 447,  813 => 443,  798 => 430,  792 => 427,  788 => 426,  784 => 425,  780 => 424,  777 => 423,  775 => 422,  769 => 419,  765 => 418,  761 => 417,  754 => 413,  750 => 412,  746 => 411,  739 => 407,  735 => 406,  731 => 405,  713 => 389,  706 => 385,  702 => 384,  696 => 381,  692 => 380,  688 => 378,  686 => 377,  682 => 375,  676 => 372,  672 => 370,  670 => 369,  664 => 366,  655 => 360,  648 => 356,  639 => 350,  632 => 346,  623 => 340,  616 => 336,  607 => 330,  600 => 326,  589 => 317,  587 => 316,  584 => 315,  579 => 312,  568 => 307,  559 => 301,  552 => 297,  543 => 291,  536 => 287,  527 => 281,  520 => 277,  511 => 271,  504 => 267,  498 => 263,  494 => 262,  488 => 258,  486 => 257,  483 => 256,  478 => 253,  467 => 248,  460 => 244,  451 => 238,  444 => 234,  438 => 230,  434 => 229,  428 => 225,  426 => 224,  423 => 223,  418 => 220,  407 => 215,  400 => 211,  391 => 205,  384 => 201,  378 => 197,  374 => 196,  368 => 192,  366 => 191,  363 => 190,  358 => 187,  347 => 182,  338 => 176,  331 => 172,  324 => 167,  318 => 164,  314 => 162,  308 => 159,  304 => 157,  302 => 156,  296 => 153,  290 => 149,  286 => 148,  280 => 144,  278 => 143,  275 => 142,  264 => 134,  260 => 132,  254 => 129,  250 => 127,  248 => 126,  241 => 122,  234 => 118,  225 => 112,  218 => 108,  209 => 102,  202 => 98,  193 => 92,  186 => 88,  177 => 82,  170 => 78,  161 => 72,  152 => 68,  143 => 62,  136 => 58,  127 => 52,  120 => 48,  111 => 41,  109 => 40,  106 => 39,  100 => 35,  96 => 33,  90 => 30,  86 => 28,  83 => 27,  77 => 24,  73 => 22,  71 => 21,  68 => 20,  66 => 19,  60 => 16,  53 => 12,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pdf/submission_details.html.twig", "/var/www/html/erecrutement/templates/pdf/submission_details.html.twig");
    }
}
