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

/* back/candidate/skills.html.twig */
class __TwigTemplate_77e0f80073414d779452b85bd00e98fe extends Template
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
        $this->parent = $this->loadTemplate("back/layouts/base.html.twig", "back/candidate/skills.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    Dashboard | Diplôme académiques
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/inforecap.css"), "html", null, true);
        echo "\" />
";
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    
    ";
        // line 17
        echo twig_include($this->env, $context, "back/partials/_header.html.twig");
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Niveau de langue</h3>
                    </div>
                    <div class=\"card-body p-0\">
                        ";
        // line 27
        echo twig_include($this->env, $context, "back/partials/tables/candidate/_skills_language.html.twig");
        echo "
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Compétences en Tech Microsoft</h3>
                    </div>
                    <div class=\"card-body p-0\">
                        ";
        // line 40
        echo twig_include($this->env, $context, "back/partials/tables/candidate/_skills_microsoft.html.twig");
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Autres compétences informatiques</h3>
                    </div>
                    <div class=\"card-body p-4\">
                        ";
        // line 50
        echo twig_include($this->env, $context, "back/partials/tables/candidate/_skills_other.html.twig");
        echo "
                    </div>
                </div>
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Autres compétences non informatiques</h3>
                    </div>
                    <div class=\"card-body p-4\">
                        ";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, true, false, 58), "otherNotInfoSkills", [], "any", true, true, false, 58) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 58), "otherNotInfoSkills", [], "any", false, false, false, 58)))) {
            // line 59
            echo "                            <div class=\"tags\">
                                ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "otherInfo", [], "any", false, false, false, 60), "otherNotInfoSkills", [], "any", false, false, false, 60), ","));
            foreach ($context['_seq'] as $context["_key"] => $context["skillOth"]) {
                // line 61
                echo "                                    <span class=\"tag\">";
                echo twig_escape_filter($this->env, $context["skillOth"], "html", null, true);
                echo "</span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skillOth'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                            </div>
                        ";
        }
        // line 65
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    
";
    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/candidate/skills.html.twig";
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
        return array (  165 => 75,  161 => 74,  151 => 65,  147 => 63,  138 => 61,  134 => 60,  131 => 59,  129 => 58,  118 => 50,  105 => 40,  89 => 27,  76 => 17,  73 => 16,  69 => 15,  62 => 11,  58 => 10,  53 => 6,  49 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/candidate/skills.html.twig", "/var/www/html/erecrutement/templates/back/candidate/skills.html.twig");
    }
}
