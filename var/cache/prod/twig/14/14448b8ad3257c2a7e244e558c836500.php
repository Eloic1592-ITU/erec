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

/* back/partials/_header.html.twig */
class __TwigTemplate_1f5b723144c2b1ff69070f821d48eaaf extends Template
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
        echo "<div class=\"content-header\">
    <div class=\"container\">
        <div class=\"row d-flex align-items-center\">
            <div class=\"col-lg-6\">
                <h1 class=\"m-0\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 7
        if ((array_key_exists("breadcrumbs", $context) && ($context["breadcrumbs"] ?? null))) {
            // line 8
            echo "            <div class=\"col-lg-6\">
                <ol class=\"breadcrumb justify-content-start justify-content-lg-end m-0\">
                    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 11
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "                            <li class=\"breadcrumb-item\"><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, false, 12), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "name", [], "any", false, false, false, 12), "html", null, true);
                    echo "</a></li>
                        ";
                } else {
                    // line 14
                    echo "                            <li class=\"breadcrumb-item active\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "name", [], "any", false, false, false, 14), "html", null, true);
                    echo "</li>
                        ";
                }
                // line 16
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                </ol>
            </div>
            ";
        }
        // line 20
        echo "        </div>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/partials/_header.html.twig";
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
        return array (  86 => 20,  81 => 17,  75 => 16,  69 => 14,  61 => 12,  58 => 11,  54 => 10,  50 => 8,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "back/partials/_header.html.twig", "/var/www/html/erecrutement/templates/back/partials/_header.html.twig");
    }
}
