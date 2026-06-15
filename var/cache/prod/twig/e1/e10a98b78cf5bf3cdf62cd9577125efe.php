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

/* front/position/index.html.twig */
class __TwigTemplate_1f789889f9ab6be4858ceeacd4584b51 extends Template
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
        return "front/layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/position/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    Accueil
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/position.css"), "html", null, true);
        echo "\" />
";
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    
    <div class=\"positions\">
        <div class=\"d-flex flex-column gap-2\">
\t    ";
        // line 19
        if (((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", true, true, false, 19) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 19), "id", [], "any", true, true, false, 19)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19)))) {
            // line 20
            echo "                <h5 class=\"text-success mb-3 text-center\">Veuillez reconfirmer votre choix de poste</h5>
            ";
        }
        // line 22
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["positions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            echo "  
                <a class=\"position\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_landing", ["ref" => twig_get_attribute($this->env, $this->source, $context["position"], "getReference", [], "method", false, false, false, 23)]), "html", null, true);
            echo "\">
                    ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "getName", [], "method", false, false, false, 24), "html", null, true);
            echo "
                    <i class='bx bx-right-arrow-alt'></i>
                </a>   
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    
        </div>
    </div>
    
";
    }

    // line 34
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/position/index.html.twig";
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
        return array (  117 => 35,  113 => 34,  105 => 27,  95 => 24,  91 => 23,  84 => 22,  80 => 20,  78 => 19,  73 => 16,  69 => 15,  62 => 11,  58 => 10,  53 => 6,  49 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/position/index.html.twig", "/var/www/html/erecrutement/templates/front/position/index.html.twig");
    }
}
