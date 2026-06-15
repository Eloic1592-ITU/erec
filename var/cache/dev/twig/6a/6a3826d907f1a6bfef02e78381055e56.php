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

/* front/submission/index.html.twig */
class __TwigTemplate_5437abaebcbb813ea45a35eb5fe15725 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/submission/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/submission/index.html.twig"));

        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/submission/index.html.twig", 2);
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
        echo "    Accueil
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/navbar.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    ";
        echo twig_include($this->env, $context, "front/partials/_navbar.html.twig");
        echo "

    <main class=\"mb-5\">
      <div class=\"container pt-5\">
        <div class=\"row\">
          <div class=\"col-lg-12 d-flex flex-column align-items-center justify-content-center\">
            <h1 class=\"mt-1 mb-5 text-center\">Bonjour ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "getUserFullName", [], "method", false, false, false, 24), "html", null, true);
        echo "</h1>
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bell.png"), "html", null, true);
        echo "\" alt=\"bell\" width=\"20%\" />

            ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "hasSubmittedApplication", [], "any", false, false, false, 27)) {
            // line 28
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details");
            echo "\" class=\"btn btn-primary btn-lg mt-5\">Voir les details de ma candidature</a>
            ";
        } else {
            // line 30
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_submission");
            echo "\" class=\"btn btn-success btn-lg mt-5\">Créer ma candidature maintenant</a>
            ";
        }
        // line 32
        echo "          </div>
        </div>
      </div>
    </main>

    ";
        // line 37
        echo twig_include($this->env, $context, "front/partials/_footer.html.twig");
        echo "
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "
  ";
        // line 45
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

  ";
        // line 48
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customAlert.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 51
        echo "  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "flashes", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 54
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 55
                echo "          showAlert(
            \"\",
            \"";
                // line 57
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["message"], "js"), "html", null, true);
                echo "\",
            \"";
                // line 58
                echo ((($context["label"] == "success")) ? ("success") : ("error"));
                echo "\"
          )
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    });
  </script>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/submission/index.html.twig";
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
        return array (  235 => 62,  229 => 61,  220 => 58,  216 => 57,  212 => 55,  207 => 54,  203 => 53,  199 => 51,  193 => 48,  189 => 45,  186 => 43,  176 => 42,  163 => 37,  156 => 32,  150 => 30,  144 => 28,  142 => 27,  137 => 25,  133 => 24,  123 => 18,  113 => 17,  101 => 13,  97 => 12,  92 => 11,  82 => 10,  71 => 6,  61 => 5,  38 => 2,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/navbar.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/home.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/footer.css') }}\" />
{% endblock %}

{# ---------------------------- Body ---------------------------- #}
{% block body %}
    {{ include('front/partials/_navbar.html.twig') }}

    <main class=\"mb-5\">
      <div class=\"container pt-5\">
        <div class=\"row\">
          <div class=\"col-lg-12 d-flex flex-column align-items-center justify-content-center\">
            <h1 class=\"mt-1 mb-5 text-center\">Bonjour {{ app.user.getUserFullName() }}</h1>
            <img src=\"{{ asset('img/bell.png') }}\" alt=\"bell\" width=\"20%\" />

            {% if app.user.hasSubmittedApplication %}
              <a href=\"{{ path('app_details') }}\" class=\"btn btn-primary btn-lg mt-5\">Voir les details de ma candidature</a>
            {% else %}
              <a href=\"{{ path('app_submission') }}\" class=\"btn btn-success btn-lg mt-5\">Créer ma candidature maintenant</a>
            {% endif %}
          </div>
        </div>
      </div>
    </main>

    {{ include('front/partials/_footer.html.twig') }}
    
{% endblock %}

{# ---------------------------- JS ---------------------------- #}
{% block javascripts %}

  {# sweetalert2 CDN #}
  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

  {# Custom Alert #}
  <script src=\"{{ asset('js/customAlert.js') }}\"></script>

  {# Notification Flashes #}
  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      {% for label, messages in app.flashes %}
        {% for message in messages %}
          showAlert(
            \"\",
            \"{{ message|e('js') }}\",
            \"{{ label == 'success' ? 'success' : 'error' }}\"
          )
        {% endfor %}
      {% endfor %}
    });
  </script>
    
{% endblock %}

", "front/submission/index.html.twig", "/var/www/html/erecrutement/templates/front/submission/index.html.twig");
    }
}
