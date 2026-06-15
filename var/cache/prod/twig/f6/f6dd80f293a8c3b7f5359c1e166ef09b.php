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

/* front/partials/recap/_recap1.html.twig */
class __TwigTemplate_bc6aef9a69656ba0b8906d75a72d854b extends Template
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
        if (($context["jobApplication"] ?? null)) {
            // line 2
            echo "<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">     
    <div id=\"recap1\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Poste demandé</h5>
        <div class=\"d-flex flex-column gap-1\">
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Poste demandé</p>
                    <p class=\"info-value\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9), "referencePosition", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Lieu d'affectation</p>
                    <p class=\"info-value\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getPrimaryLocation", [], "method", false, false, false, 13), "html", null, true);
            echo "</p>
                </div>
            </div>
            ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getSecondaryLocation", [], "method", false, false, false, 16) || twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getTertiaryLocation", [], "method", false, false, false, 16))) {
                // line 17
                echo "            <div class=\"info-group\">
                ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getSecondaryLocation", [], "method", false, false, false, 18)) {
                    // line 19
                    echo "                <div class=\"info\">
                    <p class=\"info-label\">2ème lieu d'affectation souhaité</p>
                    <p class=\"info-value\">";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getSecondaryLocation", [], "method", false, false, false, 21), "html", null, true);
                    echo "</p>
                </div>
                ";
                }
                // line 24
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getTertiaryLocation", [], "method", false, false, false, 24)) {
                    // line 25
                    echo "                <div class=\"info\">
                    <p class=\"info-label\">3ème lieu d'affectation souhaité</p>
                    <p class=\"info-value\">";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["jobApplication"] ?? null), "getTertiaryLocation", [], "method", false, false, false, 27), "html", null, true);
                    echo "</p>
                </div>
                ";
                }
                // line 30
                echo "            </div>
            ";
            }
            // line 32
            echo "        </div>
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
        return "front/partials/recap/_recap1.html.twig";
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
        return array (  95 => 32,  91 => 30,  85 => 27,  81 => 25,  78 => 24,  72 => 21,  68 => 19,  66 => 18,  63 => 17,  61 => 16,  55 => 13,  48 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/recap/_recap1.html.twig", "/var/www/html/erecrutement/templates/front/partials/recap/_recap1.html.twig");
    }
}
