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

/* front/partials/recap/_recap5.html.twig */
class __TwigTemplate_d817eeabf594d6e54e405cf4cf4486c3 extends Template
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
        if (($context["internships"] ?? null)) {
            // line 2
            echo "<div class=\"p-4 p-lg-5 mb-4 bg-white rounded-4 strong-shadow\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">       
    <div id=\"recap5\" class=\"d-flex flex-column gap-2\">
        <h5 class=\"text-primary border-bottom mt-2 mb-0 pb-2\">Stages suivis</h5>

        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["internships"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["internship"]) {
                // line 7
                echo "        <div class=\"d-flex flex-column gap-1\">
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Thème</p>
                    <p class=\"info-value\">";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getTheme", [], "method", false, false, false, 11), "html", null, true);
                echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Organisation ou Société</p>
                    <p class=\"info-value\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getOrganization", [], "method", false, false, false, 15), "html", null, true);
                echo "</p>
                </div>
            </div>
            <div class=\"info-group\">
                <div class=\"info\">
                    <p class=\"info-label\">Année de stage</p>
                    <p class=\"info-value\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getInternshipYear", [], "method", false, false, false, 21), "html", null, true);
                echo "</p>
                </div>
                <div class=\"info\">
                    <p class=\"info-label\">Durée</p>
                    <p class=\"info-value\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "getDuration", [], "method", false, false, false, 25), "html", null, true);
                echo " mois</p>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['internship'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>
</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/partials/recap/_recap5.html.twig";
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
        return array (  89 => 30,  78 => 25,  71 => 21,  62 => 15,  55 => 11,  49 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/partials/recap/_recap5.html.twig", "/var/www/html/erecrutement/templates/front/partials/recap/_recap5.html.twig");
    }
}
