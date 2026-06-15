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
class __TwigTemplate_ee47225894243b288f57d88a2d60893a extends Template
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
        if (($context["otherInfo"] ?? null)) {
            // line 2
            echo "<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">      
    <div id=\"recap1\">
        <div class=\"d-flex flex-column gap-2\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Niveau de langue</h5>

            <div class=\"d-flex d-lg-none flex-column gap-3\">
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Niveau de lecture</p>
                        <p class=\"info-value\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMalagasyReadingLevel", [], "method", false, false, false, 11), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Communication écrite</p>
                        <p class=\"info-value\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMalagasyWritingLevel", [], "method", false, false, false, 15), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Communication orale</p>
                        <p class=\"info-value\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMalagasySpeakingLevel", [], "method", false, false, false, 21), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Niveau de lecture</p>
                        <p class=\"info-value\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getFrenchReadingLevel", [], "method", false, false, false, 25), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Communication écrite</p>
                        <p class=\"info-value\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getFrenchWritingLevel", [], "method", false, false, false, 31), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Communication orale</p>
                        <p class=\"info-value\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getFrenchSpeakingLevel", [], "method", false, false, false, 35), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Niveau de lecture</p>
                        <p class=\"info-value\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getEnglishReadingLevel", [], "method", false, false, false, 41), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Communication écrite</p>
                        <p class=\"info-value\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getEnglishWritingLevel", [], "method", false, false, false, 45), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Communication orale</p>
                        <p class=\"info-value\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getEnglishSpeakingLevel", [], "method", false, false, false, 51), "html", null, true);
            echo "</p>
                    </div>

                    ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageName", [], "method", false, false, false, 54)) {
                // line 55
                echo "                    <div class=\"info\">
                        <p class=\"info-label\">Niveau de lecture</p>
                        <p class=\"info-value\">";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageReadingLevel", [], "method", false, false, false, 57), "html", null, true);
                echo "</p>
                    </div>
                    ";
            }
            // line 60
            echo "                </div>

                ";
            // line 62
            if (twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageName", [], "method", false, false, false, 62)) {
                // line 63
                echo "                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Communication écrite ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageName", [], "method", false, false, false, 65), "html", null, true);
                echo "</p>
                        <p class=\"info-value\">";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageWritingLevel", [], "method", false, false, false, 66), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Communication orale ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageName", [], "method", false, false, false, 69), "html", null, true);
                echo "</p>
                        <p class=\"info-value\">";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageSpeakingLevel", [], "method", false, false, false, 70), "html", null, true);
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
                                <th scope=\"col\">Communication écrite</th>
                                <th scope=\"col\">Communication orale</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope=\"row\">Malagasy</th>
                                <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMalagasyReadingLevel", [], "method", false, false, false, 90), "html", null, true);
            echo "</td>
                                <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMalagasyWritingLevel", [], "method", false, false, false, 91), "html", null, true);
            echo "</td>
                                <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMalagasySpeakingLevel", [], "method", false, false, false, 92), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Français</th>
                                <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getFrenchReadingLevel", [], "method", false, false, false, 96), "html", null, true);
            echo "</td>
                                <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getFrenchWritingLevel", [], "method", false, false, false, 97), "html", null, true);
            echo "</td>
                                <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getFrenchSpeakingLevel", [], "method", false, false, false, 98), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Anglais</th>
                                <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getEnglishReadingLevel", [], "method", false, false, false, 102), "html", null, true);
            echo "</td>
                                <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getEnglishWritingLevel", [], "method", false, false, false, 103), "html", null, true);
            echo "</td>
                                <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getEnglishSpeakingLevel", [], "method", false, false, false, 104), "html", null, true);
            echo "</td>
                            </tr>

                            ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageName", [], "method", false, false, false, 107)) {
                // line 108
                echo "                            <tr>
                                <th scope=\"row\">";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageName", [], "method", false, false, false, 109), "html", null, true);
                echo "</th>
                                <td>";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageReadingLevel", [], "method", false, false, false, 110), "html", null, true);
                echo "</td>
                                <td>";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageWritingLevel", [], "method", false, false, false, 111), "html", null, true);
                echo "</td>
                                <td>";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getOtherLanguageSpeakingLevel", [], "method", false, false, false, 112), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftWordLevel", [], "method", false, false, false, 128), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft Excel</p>
                        <p class=\"info-value\">";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftExcelLevel", [], "method", false, false, false, 132), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft PowerPoint</p>
                        <p class=\"info-value\">";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftPowerPointLevel", [], "method", false, false, false, 138), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft OneNote</p>
                        <p class=\"info-value\">";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftOneNoteLevel", [], "method", false, false, false, 142), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft Outlook</p>
                        <p class=\"info-value\">";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftOutlookLevel", [], "method", false, false, false, 148), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft Publisher</p>
                        <p class=\"info-value\">";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftPublisherLevel", [], "method", false, false, false, 152), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft Access</p>
                        <p class=\"info-value\">";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftAccessLevel", [], "method", false, false, false, 158), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft Visio</p>
                        <p class=\"info-value\">";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftVisioLevel", [], "method", false, false, false, 162), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"info-group\">
                    <div class=\"info\">
                        <p class=\"info-label\">Microsoft Project</p>
                        <p class=\"info-value\">";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftProjectLevel", [], "method", false, false, false, 168), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftWordLevel", [], "method", false, false, false, 185), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td>Microsoft Excel</td>
                                <td>";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftExcelLevel", [], "method", false, false, false, 190), "html", null, true);
            echo "</td>
                            </tr>
                                
                            <tr>
                                <td>Microsoft PowerPoint</td>
                                <td>";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftPowerPointLevel", [], "method", false, false, false, 195), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td>Microsoft OneNote</td>
                                <td>";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftOneNoteLevel", [], "method", false, false, false, 200), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td>Microsoft Outlook</td>
                                <td>";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftOutlookLevel", [], "method", false, false, false, 205), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td>Microsoft Publisher</td>
                                <td>";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftPublisherLevel", [], "method", false, false, false, 210), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td>Microsoft Access</td>
                                <td>";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftAccessLevel", [], "method", false, false, false, 215), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td>Microsoft Visio</td>
                                <td>";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftVisioLevel", [], "method", false, false, false, 220), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td>Microsoft Project</td>
                                <td>";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "getMicrosoftProjectLevel", [], "method", false, false, false, 225), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "otherSkills", [], "any", false, false, false, 236));
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

        <div class=\"d-flex flex-column gap-2 mt-4\">
            <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Autres compétences non informatiques</h5>
            <div class=\"tags\">
                ";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["otherInfo"] ?? null), "otherNotInfoSkills", [], "any", false, false, false, 245), ","));
            foreach ($context['_seq'] as $context["_key"] => $context["skillOth"]) {
                // line 246
                echo "                    <span class=\"tag\">";
                echo twig_escape_filter($this->env, $context["skillOth"], "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skillOth'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "            </div>
        </div>
    </div>
</div>
";
        }
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
        return array (  459 => 248,  450 => 246,  446 => 245,  438 => 239,  429 => 237,  425 => 236,  411 => 225,  403 => 220,  395 => 215,  387 => 210,  379 => 205,  371 => 200,  363 => 195,  355 => 190,  347 => 185,  327 => 168,  318 => 162,  311 => 158,  302 => 152,  295 => 148,  286 => 142,  279 => 138,  270 => 132,  263 => 128,  248 => 115,  242 => 112,  238 => 111,  234 => 110,  230 => 109,  227 => 108,  225 => 107,  219 => 104,  215 => 103,  211 => 102,  204 => 98,  200 => 97,  196 => 96,  189 => 92,  185 => 91,  181 => 90,  163 => 74,  156 => 70,  152 => 69,  146 => 66,  142 => 65,  138 => 63,  136 => 62,  132 => 60,  126 => 57,  122 => 55,  120 => 54,  114 => 51,  105 => 45,  98 => 41,  89 => 35,  82 => 31,  73 => 25,  66 => 21,  57 => 15,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/recap/_recap7.html.twig", "/var/www/html/erecrutement/templates/front/partials/recap/_recap7.html.twig");
    }
}
