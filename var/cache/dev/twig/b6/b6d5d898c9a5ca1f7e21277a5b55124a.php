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
class __TwigTemplate_5967044b2c510de052b5530a2aa02dd5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partials/_header.html.twig"));

        // line 1
        echo "<div class=\"content-header\">
    <div class=\"container\">
        <div class=\"row d-flex align-items-center\">
            <div class=\"col-lg-6\">
                <h1 class=\"m-0\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 7
        if ((array_key_exists("breadcrumbs", $context) && (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "            <div class=\"col-lg-6\">
                <ol class=\"breadcrumb justify-content-start justify-content-lg-end m-0\">
                    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 10, $this->source); })()));
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  92 => 20,  87 => 17,  81 => 16,  75 => 14,  67 => 12,  64 => 11,  60 => 10,  56 => 8,  54 => 7,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-header\">
    <div class=\"container\">
        <div class=\"row d-flex align-items-center\">
            <div class=\"col-lg-6\">
                <h1 class=\"m-0\">{{ title }}</h1>
            </div>
            {% if breadcrumbs is defined and breadcrumbs %}
            <div class=\"col-lg-6\">
                <ol class=\"breadcrumb justify-content-start justify-content-lg-end m-0\">
                    {% for breadcrumb in breadcrumbs %}
                        {% if breadcrumb.url %}
                            <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.url }}\">{{ breadcrumb.name }}</a></li>
                        {% else %}
                            <li class=\"breadcrumb-item active\">{{ breadcrumb.name }}</li>
                        {% endif %}
                    {% endfor %}
                </ol>
            </div>
            {% endif %}
        </div>
    </div>
</div>", "back/partials/_header.html.twig", "/var/www/html/erecrutement/templates/back/partials/_header.html.twig");
    }
}
