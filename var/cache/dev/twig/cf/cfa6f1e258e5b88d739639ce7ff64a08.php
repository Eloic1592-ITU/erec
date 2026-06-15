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

/* back/candidate/index.html.twig */
class __TwigTemplate_a67c85f6589f5d83b9b6ba887d254463 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "back/layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/candidate/index.html.twig"));

        $this->parent = $this->loadTemplate("back/layouts/base.html.twig", "back/candidate/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Dashboard
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/back/user.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    
    ";
        // line 17
        echo twig_include($this->env, $context, "back/partials/_header.html.twig");
        echo "

    <div class=\"container\">

        <div class=\"row mb-3\">
            <div class=\"col-lg-6 d-flex flex-column justify-content-between\">
                <div class=\"card px-2\">
                    <div class=\"card-body\">
                        <p class=\"m-0\">
                            Cette section vous permet de visualiser, gérer, et administrer les candidats inscrits sur la plateforme. Elle est conçue pour offrir un aperçu détaillé des candidatures soumises, ainsi que des outils pour administrer les accès et les statuts des candidats.
                        </p>
                    </div>
                </div>

                <div class=\"card mb-lg-0\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Informations Disponibles</h3>
                    </div>
                    <div class=\"card-body\">
                        <ul>
                            <li><span class=\"text-primary\">Informations Personnelles :</span> Accédez aux données personnelles de chaque candidat, telles que leur nom, âge, et coordonnées.</li>
                            <li><span class=\"text-primary\">Diplômes :</span> Consultez les diplômes obtenus, avec des détails sur les institutions académiques fréquentées et les spécialisations choisies.</li>
                            <li><span class=\"text-primary\">Certifications :</span> Visualisez les certifications attestant des compétences supplémentaires des candidats.</li>
                            <li><span class=\"text-primary\">Stages :</span> Découvrez les stages effectués par les candidats, incluant les entreprises où ils ont travaillé et les responsabilités assumées.</li>
                            <li><span class=\"text-primary\">Expériences Professionnelles :</span> Parcourez les postes précédemment occupés par les candidats et les compétences mises en œuvre.</li>
                            <li><span class=\"text-primary\">Compétences :</span> Évaluez les compétences des candidats, incluant les langues maîtrisées et les outils techniques utilisés.</li>
                            <li><span class=\"text-success\">Documents :</span> Consultez et téléchargez les CV et lettres de motivation des candidats directement depuis cette page.</li>
                        </ul>
                        
                        <p class=\"px-2\">Utilisez cette page pour évaluer rapidement et efficacement les profils des candidats et faire avancer le processus de sélection.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"card h-100\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Statistique des candidats par postes demandés</h3>
                    </div>
                    <div class=\"card-body d-flex align-items-center\">
                        <div id=\"positionChart\" style=\"width: 100%; height: 400px;\"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Liste de tous les candidats</h3>
                    </div>
                    <div class=\"card-body p-0\">
                        ";
        // line 69
        echo twig_include($this->env, $context, "back/partials/tables/candidate/_index.html.twig");
        echo "
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Statistique des candidats par domaines d'études</h3>
                    </div>
                    <div class=\"card-body p-0\">
                        <div id=\"studyFieldChart\" style=\"width: 100%; height: 400px;\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Statistique des candidats par diplômes</h3>
                    </div>
                    <div class=\"card-body p-0\">
                        <div id=\"degreeChart\" style=\"width: 100%; height: 400px;\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "    <script>
        // Initialisation du graphique en secteurs pour les domaines d'études
        const studyFieldChart = echarts.init(document.getElementById('studyFieldChart'));
        const studyFieldOption = {
            tooltip: {
                trigger: 'item'
            },
            series: [
                {
                    name: 'Candidats',
                    type: 'pie',
                    radius: '50%',
                    data: ";
        // line 115
        echo json_encode(twig_array_map($this->env, ($context["studyFieldStats"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ["name" => twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "name", [], "any", false, false, false, 115), "value" => twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "candidate_count", [], "any", false, false, false, 115)]; }));
        echo ",
                    emphasis: {
                        itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };
        studyFieldChart.setOption(studyFieldOption);

        // Initialisation du graphique en secteurs pour les diplômes
        const degreeChart = echarts.init(document.getElementById('degreeChart'));
        const degreeOption = {
            tooltip: {
                trigger: 'item'
            },
            series: [
                {
                    name: 'Candidats',
                    type: 'pie',
                    radius: '50%',
                    data: ";
        // line 139
        echo json_encode(twig_array_map($this->env, ($context["degreeStats"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ["name" => twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "name", [], "any", false, false, false, 139), "value" => twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "candidate_count", [], "any", false, false, false, 139)]; }));
        echo ",
                    emphasis: {
                        itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };
        degreeChart.setOption(degreeOption);

        // Initialisation du graphique en secteurs pour les postes demandés
        const positionChart = echarts.init(document.getElementById('positionChart'));
        const positionOption = {
            tooltip: {
                trigger: 'item'
            },
            series: [
                {
                    name: 'Candidats',
                    type: 'pie',
                    radius: '50%',
                    data: ";
        // line 163
        echo json_encode(twig_array_map($this->env, ($context["positionStats"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ["name" => twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "name", [], "any", false, false, false, 163), "value" => twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "candidate_count", [], "any", false, false, false, 163)]; }));
        echo ",
                    emphasis: {
                        itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };
        positionChart.setOption(positionOption);
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/candidate/index.html.twig";
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
        return array (  265 => 163,  238 => 139,  211 => 115,  197 => 103,  190 => 102,  152 => 69,  97 => 17,  94 => 16,  87 => 15,  77 => 11,  70 => 10,  62 => 6,  55 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/candidate/index.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\back\\candidate\\index.html.twig");
    }
}
