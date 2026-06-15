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

/* security/error.html.twig */
class __TwigTemplate_3eb912deb52ac119db1d0386f7415878 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/error.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/error.html.twig"));

        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "security/error.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/position.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "  <div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
      <div class=\"row\">
        <div class=\"col mt-4 alert-danger py-5 px-3 text-center\">
          ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 20), "attributes", [], "any", false, true, false, 20), "get", ["exception"], "method", true, true, false, 20) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 20), "attributes", [], "any", false, true, false, 20), "get", ["exception"], "method", false, true, false, 20), "statusCode", [], "any", true, true, false, 20))) {
            // line 21
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "attributes", [], "any", false, false, false, 21), "get", ["exception"], "method", false, false, false, 21), "statusCode", [], "any", false, false, false, 21) == "404")) {
                // line 22
                echo "                  <h1 class=\"display-2 fw-bold\">ERREUR 404</h1>
                  <h5>La page que vous recherchez n'existe pas... ou plus !</h5>
              ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 24
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "attributes", [], "any", false, false, false, 24), "get", ["exception"], "method", false, false, false, 24), "statusCode", [], "any", false, false, false, 24) == "403")) {
                // line 25
                echo "                  <h1 class=\"display-2 fw-bold\">ERREUR 403</h1>
                  <h5>Vous ne pouvez pas afficher cette page ou cette section !</h5>
              ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 27
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "attributes", [], "any", false, false, false, 27), "get", ["exception"], "method", false, false, false, 27), "statusCode", [], "any", false, false, false, 27) == "500")) {
                // line 28
                echo "                  <h1 class=\"display-2 fw-bold\">ERREUR 500</h1>
                  <h5>Oups !?! Alors là, on a un problème... La page ou la section ne s'affiche pas.</h5>
              ";
            } else {
                // line 31
                echo "                  <h5>Oups !?! Désolé, il y a une erreur.</h5>
              ";
            }
            // line 33
            echo "          ";
        } else {
            // line 34
            echo "              <h5>Oups !?! Désolé, il y a une erreur.</h5>
          ";
        }
        // line 36
        echo "
        </div>
        <div class=\"mt-3 text-center\">
          <a class=\"btn btn-primary p-3 lead\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_positions");
        echo "\">Page d'accueil</a>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/error.html.twig";
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
        return array (  185 => 48,  175 => 47,  159 => 39,  154 => 36,  150 => 34,  147 => 33,  143 => 31,  138 => 28,  136 => 27,  132 => 25,  130 => 24,  126 => 22,  123 => 21,  121 => 20,  115 => 16,  105 => 15,  92 => 11,  82 => 10,  71 => 6,  61 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# ---------------------------- Layout ---------------------------- #}
{% extends 'front/layouts/base.html.twig' %}

{# ---------------------------- Title ---------------------------- #}
{% block title %}
  Accueil
{% endblock %}

{# ---------------------------- CSS ---------------------------- #}
{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('css/position.css') }}\" />
{% endblock %}

{# ---------------------------- Body ---------------------------- #}
{% block body %}
  <div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
      <div class=\"row\">
        <div class=\"col mt-4 alert-danger py-5 px-3 text-center\">
          {% if app.request.attributes.get('exception') is defined and app.request.attributes.get('exception').statusCode is defined %}
              {% if app.request.attributes.get('exception').statusCode == '404' %}
                  <h1 class=\"display-2 fw-bold\">ERREUR 404</h1>
                  <h5>La page que vous recherchez n'existe pas... ou plus !</h5>
              {% elseif app.request.attributes.get('exception').statusCode == '403' %}
                  <h1 class=\"display-2 fw-bold\">ERREUR 403</h1>
                  <h5>Vous ne pouvez pas afficher cette page ou cette section !</h5>
              {% elseif app.request.attributes.get('exception').statusCode == '500' %}
                  <h1 class=\"display-2 fw-bold\">ERREUR 500</h1>
                  <h5>Oups !?! Alors là, on a un problème... La page ou la section ne s'affiche pas.</h5>
              {% else %}
                  <h5>Oups !?! Désolé, il y a une erreur.</h5>
              {% endif %}
          {% else %}
              <h5>Oups !?! Désolé, il y a une erreur.</h5>
          {% endif %}

        </div>
        <div class=\"mt-3 text-center\">
          <a class=\"btn btn-primary p-3 lead\" href=\"{{ path('app_positions') }}\">Page d'accueil</a>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{# ---------------------------- JS ---------------------------- #}
{% block javascripts %}
  {# ... #}
{% endblock %}
", "security/error.html.twig", "/var/www/html/erecrutement/templates/security/error.html.twig");
    }
}
