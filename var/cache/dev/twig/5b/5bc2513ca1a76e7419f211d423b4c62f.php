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

/* front/partials/recap/_recap7.html.twig */
class __TwigTemplate_2f07df477653f9fb619b2ce151f4b1eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/recap/_recap7.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/recap/_recap7.html.twig"));

        // line 1
        if ((isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">      
    <div id=\"recap1\">
        <div class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Niveau de langue</h5>

            <div class=\"d-flex d-lg-none flex-column gap-3\">
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Niveau de lecture Malagasy</p>
                        <p class=\"info-value\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 11, $this->source); })()), "getMalagasyReadingLevel", [], "method", false, false, false, 11), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Niveau d'écriture Malagasy</p>
                        <p class=\"info-value\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 15, $this->source); })()), "getMalagasyWritingLevel", [], "method", false, false, false, 15), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Niveau de parole Malagasy</p>
                        <p class=\"info-value\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 21, $this->source); })()), "getMalagasySpeakingLevel", [], "method", false, false, false, 21), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Niveau de lecture Français</p>
                        <p class=\"info-value\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 25, $this->source); })()), "getFrenchReadingLevel", [], "method", false, false, false, 25), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Niveau d'écriture Français</p>
                        <p class=\"info-value\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 31, $this->source); })()), "getFrenchWritingLevel", [], "method", false, false, false, 31), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Niveau de parole Français</p>
                        <p class=\"info-value\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 35, $this->source); })()), "getFrenchSpeakingLevel", [], "method", false, false, false, 35), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Niveau de lecture Anglais</p>
                        <p class=\"info-value\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 41, $this->source); })()), "getEnglishReadingLevel", [], "method", false, false, false, 41), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Niveau d'écriture Anglais</p>
                        <p class=\"info-value\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 45, $this->source); })()), "getEnglishWritingLevel", [], "method", false, false, false, 45), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Niveau de parole Anglais</p>
                        <p class=\"info-value\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 51, $this->source); })()), "getEnglishSpeakingLevel", [], "method", false, false, false, 51), "html", null, true);
            echo "</p>
                    </div>

                    ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 54, $this->source); })()), "getOtherLanguageName", [], "method", false, false, false, 54)) {
                // line 55
                echo "                    <div class=\"info\">
                        <p class=\"info-label\">Niveau de lecture Anglais</p>
                        <p class=\"info-value\">";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 57, $this->source); })()), "getOtherLanguageReadingLevel", [], "method", false, false, false, 57), "html", null, true);
                echo "</p>
                    </div>
                    ";
            }
            // line 60
            echo "                </div>

                ";
            // line 62
            if (twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 62, $this->source); })()), "getOtherLanguageName", [], "method", false, false, false, 62)) {
                // line 63
                echo "                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Niveau d'écriture ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 65, $this->source); })()), "getOtherLanguageName", [], "method", false, false, false, 65), "html", null, true);
                echo "</p>
                        <p class=\"info-value\">";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 66, $this->source); })()), "getOtherLanguageWritingLevel", [], "method", false, false, false, 66), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Niveau de parole ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 69, $this->source); })()), "getOtherLanguageName", [], "method", false, false, false, 69), "html", null, true);
                echo "</p>
                        <p class=\"info-value\">";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 70, $this->source); })()), "getOtherLanguageSpeakingLevel", [], "method", false, false, false, 70), "html", null, true);
                echo "</p>
                    </div>
                </div>
                ";
            }
            // line 74
            echo "            </div>

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
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 90, $this->source); })()), "getMalagasyReadingLevel", [], "method", false, false, false, 90), "html", null, true);
            echo "</td>
                                <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 91, $this->source); })()), "getMalagasyWritingLevel", [], "method", false, false, false, 91), "html", null, true);
            echo "</td>
                                <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 92, $this->source); })()), "getMalagasySpeakingLevel", [], "method", false, false, false, 92), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Français</th>
                                <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 96, $this->source); })()), "getFrenchReadingLevel", [], "method", false, false, false, 96), "html", null, true);
            echo "</td>
                                <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 97, $this->source); })()), "getFrenchWritingLevel", [], "method", false, false, false, 97), "html", null, true);
            echo "</td>
                                <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 98, $this->source); })()), "getFrenchSpeakingLevel", [], "method", false, false, false, 98), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Anglais</th>
                                <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 102, $this->source); })()), "getEnglishReadingLevel", [], "method", false, false, false, 102), "html", null, true);
            echo "</td>
                                <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 103, $this->source); })()), "getEnglishWritingLevel", [], "method", false, false, false, 103), "html", null, true);
            echo "</td>
                                <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 104, $this->source); })()), "getEnglishSpeakingLevel", [], "method", false, false, false, 104), "html", null, true);
            echo "</td>
                            </tr>

                            ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 107, $this->source); })()), "getOtherLanguageName", [], "method", false, false, false, 107)) {
                // line 108
                echo "                            <tr>
                                <th scope=\"row\">";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 109, $this->source); })()), "getOtherLanguageName", [], "method", false, false, false, 109), "html", null, true);
                echo "</th>
                                <td>";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 110, $this->source); })()), "getOtherLanguageReadingLevel", [], "method", false, false, false, 110), "html", null, true);
                echo "</td>
                                <td>";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 111, $this->source); })()), "getOtherLanguageWritingLevel", [], "method", false, false, false, 111), "html", null, true);
                echo "</td>
                                <td>";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 112, $this->source); })()), "getOtherLanguageSpeakingLevel", [], "method", false, false, false, 112), "html", null, true);
                echo "</td>
                            </tr>
                            ";
            }
            // line 115
            echo "                        </tbody>
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
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 128, $this->source); })()), "getMicrosoftWordLevel", [], "method", false, false, false, 128), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft Excel</p>
                        <p class=\"info-value\">";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 132, $this->source); })()), "getMicrosoftExcelLevel", [], "method", false, false, false, 132), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft PowerPoint</p>
                        <p class=\"info-value\">";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 138, $this->source); })()), "getMicrosoftPowerPointLevel", [], "method", false, false, false, 138), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft OneNote</p>
                        <p class=\"info-value\">";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 142, $this->source); })()), "getMicrosoftOneNoteLevel", [], "method", false, false, false, 142), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft Outlook</p>
                        <p class=\"info-value\">";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 148, $this->source); })()), "getMicrosoftOutlookLevel", [], "method", false, false, false, 148), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft Publisher</p>
                        <p class=\"info-value\">";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 152, $this->source); })()), "getMicrosoftPublisherLevel", [], "method", false, false, false, 152), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft Access</p>
                        <p class=\"info-value\">";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 158, $this->source); })()), "getMicrosoftAccessLevel", [], "method", false, false, false, 158), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft Visio</p>
                        <p class=\"info-value\">";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 162, $this->source); })()), "getMicrosoftVisioLevel", [], "method", false, false, false, 162), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft Project</p>
                        <p class=\"info-value\">";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 168, $this->source); })()), "getMicrosoftProjectLevel", [], "method", false, false, false, 168), "html", null, true);
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
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 185, $this->source); })()), "getMicrosoftWordLevel", [], "method", false, false, false, 185), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td>Microsoft Excel</td>
                                <td>";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 190, $this->source); })()), "getMicrosoftExcelLevel", [], "method", false, false, false, 190), "html", null, true);
            echo "</td>
                            </tr>
                                
                            <tr>
                                <td>Microsoft PowerPoint</td>
                                <td>";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 195, $this->source); })()), "getMicrosoftPowerPointLevel", [], "method", false, false, false, 195), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td>Microsoft OneNote</td>
                                <td>";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 200, $this->source); })()), "getMicrosoftOneNoteLevel", [], "method", false, false, false, 200), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td>Microsoft Outlook</td>
                                <td>";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 205, $this->source); })()), "getMicrosoftOutlookLevel", [], "method", false, false, false, 205), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td>Microsoft Publisher</td>
                                <td>";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 210, $this->source); })()), "getMicrosoftPublisherLevel", [], "method", false, false, false, 210), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td>Microsoft Access</td>
                                <td>";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 215, $this->source); })()), "getMicrosoftAccessLevel", [], "method", false, false, false, 215), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td>Microsoft Visio</td>
                                <td>";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 220, $this->source); })()), "getMicrosoftVisioLevel", [], "method", false, false, false, 220), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td>Microsoft Project</td>
                                <td>";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 225, $this->source); })()), "getMicrosoftProjectLevel", [], "method", false, false, false, 225), "html", null, true);
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
            // line 236
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["otherInfo"]) || array_key_exists("otherInfo", $context) ? $context["otherInfo"] : (function () { throw new RuntimeError('Variable "otherInfo" does not exist.', 236, $this->source); })()), "otherSkills", [], "any", false, false, false, 236));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 237
                echo "                <span class=\"tag\">";
                echo twig_escape_filter($this->env, $context["skill"], "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "            </div>
        </div>
    </div>
</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/recap/_recap7.html.twig";
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
        return array (  444 => 239,  435 => 237,  431 => 236,  417 => 225,  409 => 220,  401 => 215,  393 => 210,  385 => 205,  377 => 200,  369 => 195,  361 => 190,  353 => 185,  333 => 168,  324 => 162,  317 => 158,  308 => 152,  301 => 148,  292 => 142,  285 => 138,  276 => 132,  269 => 128,  254 => 115,  248 => 112,  244 => 111,  240 => 110,  236 => 109,  233 => 108,  231 => 107,  225 => 104,  221 => 103,  217 => 102,  210 => 98,  206 => 97,  202 => 96,  195 => 92,  191 => 91,  187 => 90,  169 => 74,  162 => 70,  158 => 69,  152 => 66,  148 => 65,  144 => 63,  142 => 62,  138 => 60,  132 => 57,  128 => 55,  126 => 54,  120 => 51,  111 => 45,  104 => 41,  95 => 35,  88 => 31,  79 => 25,  72 => 21,  63 => 15,  56 => 11,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if otherInfo %}
<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">      
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
{% endif %}", "front/partials/recap/_recap7.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\partials\\recap\\_recap7.html.twig");
    }
}
