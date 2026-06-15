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

/* front/user/edit_password.html.twig */
class __TwigTemplate_98420cc1c95270d6fed5e89b351090d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/user/edit_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/user/edit_password.html.twig"));

        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/user/edit_password.html.twig", 2);
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
        echo "    mot de passe
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/editpass.css"), "html", null, true);
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

    <main class=\"my-5\">
        <div class=\"container pt-5\">
          <div class=\"row d-flex flex-column align-items-center justify-content-center\">
            <div class=\"col-lg-8\">
              <div class=\"py-2 px-4 mb-4 bg-white rounded-4 strong-shadow\">
                <div class=\"container-fluid py-3\">
                  <h1 class=\"mt-1 text-center border-bottom-dashed\">Modifier mon mot de passe</h1>  
                  ";
        // line 27
        echo twig_include($this->env, $context, "partials/forms/user/_edit_password.html.twig");
        echo "
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>


    ";
        // line 36
        echo twig_include($this->env, $context, "front/partials/_footer.html.twig");
        echo "
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "
  ";
        // line 44
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 47
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-validation/jquery.validate.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 50
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customValidationMethods.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 53
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

  ";
        // line 56
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customAlert.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 59
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/editPassword.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 62
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/showHidePassword.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 65
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/submitLoader.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 68
        echo "  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "flashes", [], "any", false, false, false, 70));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 71
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 72
                echo "          showAlert(
            \"\",
            \"";
                // line 74
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["message"], "js"), "html", null, true);
                echo "\",
            \"";
                // line 75
                echo ((($context["label"] == "success")) ? ("success") : ("error"));
                echo "\"
          )
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
        return "front/user/edit_password.html.twig";
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
        return array (  256 => 79,  250 => 78,  241 => 75,  237 => 74,  233 => 72,  228 => 71,  224 => 70,  220 => 68,  214 => 65,  208 => 62,  202 => 59,  196 => 56,  192 => 53,  186 => 50,  180 => 47,  174 => 44,  171 => 42,  161 => 41,  148 => 36,  136 => 27,  123 => 18,  113 => 17,  101 => 13,  97 => 12,  92 => 11,  82 => 10,  71 => 6,  61 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# ---------------------------- Layout ---------------------------- #}
{% extends 'front/layouts/base.html.twig' %}

{# ---------------------------- Title ---------------------------- #}
{% block title %}
    mot de passe
{% endblock %}

{# ---------------------------- CSS ---------------------------- #}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/navbar.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/footer.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/editpass.css') }}\" />
{% endblock %}

{# ---------------------------- Body ---------------------------- #}
{% block body %}
    {{ include('front/partials/_navbar.html.twig') }}

    <main class=\"my-5\">
        <div class=\"container pt-5\">
          <div class=\"row d-flex flex-column align-items-center justify-content-center\">
            <div class=\"col-lg-8\">
              <div class=\"py-2 px-4 mb-4 bg-white rounded-4 strong-shadow\">
                <div class=\"container-fluid py-3\">
                  <h1 class=\"mt-1 text-center border-bottom-dashed\">Modifier mon mot de passe</h1>  
                  {{ include('partials/forms/user/_edit_password.html.twig') }}
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>


    {{ include('front/partials/_footer.html.twig') }}
    
{% endblock %}

{# ---------------------------- JS ---------------------------- #}
{% block javascripts %}

  {# jQuery v1.11.1 #}
  <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>

  {# jquery Validation #}
  <script src=\"{{ asset('vendor/jquery-validation/jquery.validate.js') }}\"></script>

  {# jQuery Custom Validation Methods #}
  <script src=\"{{ asset('js/customValidationMethods.js') }}\"></script>

  {# sweetalert2 CDN #}
  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

  {# Custom Alert #}
  <script src=\"{{ asset('js/customAlert.js') }}\"></script>

  {# Registration Srcipt #}
  <script src=\"{{ asset('js/editPassword.js') }}\"></script>

  {# Show Hide Password #}
  <script src=\"{{ asset('js/showHidePassword.js') }}\"></script>

  {# Submit Button Loader #}
  <script src=\"{{ asset('js/submitLoader.js') }}\"></script>

  {# Other Custom Scripts #}
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

", "front/user/edit_password.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\user\\edit_password.html.twig");
    }
}
