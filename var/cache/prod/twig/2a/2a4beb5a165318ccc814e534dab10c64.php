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

/* back/candidate/work_experiences.html.twig */
class __TwigTemplate_4fd45024afce700084daa5b97e571ab1 extends Template
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
        $this->parent = $this->loadTemplate("back/layouts/base.html.twig", "back/candidate/work_experiences.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    Dashboard | Expériences professionnelles
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/back/user.css"), "html", null, true);
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
                        <h3 class=\"card-title\">Liste des postes déjà occupés par <span class=\"text-primary\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["candidate"] ?? null), "getFirstName", [], "method", false, false, false, 24), "html", null, true);
        echo "</span></h3>
                    </div>
                    <div class=\"card-body p-0\">
                        ";
        // line 27
        echo twig_include($this->env, $context, "back/partials/tables/candidate/_work_experiences.html.twig");
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    
";
    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/candidate/work_experiences.html.twig";
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
        return array (  108 => 38,  104 => 37,  92 => 27,  86 => 24,  76 => 17,  73 => 16,  69 => 15,  62 => 11,  58 => 10,  53 => 6,  49 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/candidate/work_experiences.html.twig", "/var/www/html/erecrutement/templates/back/candidate/work_experiences.html.twig");
    }
}
