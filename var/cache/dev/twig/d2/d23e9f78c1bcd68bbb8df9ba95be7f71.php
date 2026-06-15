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

/* back/layouts/base.html.twig */
class __TwigTemplate_73d931d53db7f11943d49eb448eacaa0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/layouts/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/layouts/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- x-icon -->
    <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-bcm.png"), "html", null, true);
        echo "\" type=\"image/x-icon\" />

    ";
        // line 11
        echo "    <title>BFM | e-recrutement | ";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 14
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/font-awesome/css/all.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/DataTables/css/dataTables.bootstrap5.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/DataTables/css/responsive.bootstrap5.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/animate/animate.css"), "html", null, true);
        echo "\">

    ";
        // line 22
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/back/index.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/customSweetalert.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/backToTop.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/back/loader.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/back/sidebar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/back/navbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/back/table.css"), "html", null, true);
        echo "\">

    ";
        // line 31
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "</head>
<body>

    ";
        // line 35
        echo twig_include($this->env, $context, "back/partials/_loader.html.twig");
        echo "

    <div class=\"d-flex flex-nowrap\">
    
        ";
        // line 39
        echo twig_include($this->env, $context, "back/partials/_navbar.html.twig");
        echo "
        ";
        // line 40
        echo twig_include($this->env, $context, "back/partials/_sidebar.html.twig");
        echo "

        <main class=\"main-content\">
            ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "        </main>
    </div>

    ";
        // line 47
        echo twig_include($this->env, $context, "partials/_back_to_top.html.twig");
        echo "

    ";
        // line 50
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery-3.7.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/DataTables/js/datatables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/DataTables/js/dataTables.bootstrap5.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/DataTables/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/DataTables/js/responsive.bootstrap5.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 58
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 63
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-validation/jquery.validate.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 66
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customValidationMethods.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 69
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

    ";
        // line 72
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customAlert.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 75
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/table.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/fullPageLoader.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/submitLoader.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/referentiel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/backToTop.js"), "html", null, true);
        echo "\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "flashes", [], "any", false, false, false, 83));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 84
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 85
                echo "                    showAlert(
                        \"\",
                        \"";
                // line 87
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["message"], "js"), "html", null, true);
                echo "\",
                        \"";
                // line 88
                echo ((($context["label"] == "success")) ? ("success") : ("error"));
                echo "\"
                    )
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        });
    </script>

    ";
        // line 96
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/layouts/base.html.twig";
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
        return array (  352 => 96,  334 => 43,  316 => 31,  298 => 11,  286 => 97,  283 => 96,  278 => 92,  272 => 91,  263 => 88,  259 => 87,  255 => 85,  250 => 84,  246 => 83,  239 => 79,  235 => 78,  231 => 77,  227 => 76,  222 => 75,  216 => 72,  212 => 69,  206 => 66,  200 => 63,  195 => 60,  191 => 59,  186 => 58,  181 => 55,  177 => 54,  173 => 53,  169 => 52,  165 => 51,  160 => 50,  155 => 47,  150 => 44,  148 => 43,  142 => 40,  138 => 39,  131 => 35,  126 => 32,  123 => 31,  118 => 28,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  93 => 22,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  67 => 14,  61 => 11,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- x-icon -->
    <link rel=\"icon\" href=\"{{ asset('img/logo-bcm.png') }}\" type=\"image/x-icon\" />

    {# Title #}
    <title>BFM | e-recrutement | {% block title %}{% endblock %}</title>

    {# Vendor CSS #}
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/font-awesome/css/all.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/boxicons/css/boxicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/DataTables/css/dataTables.bootstrap5.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/DataTables/css/responsive.bootstrap5.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/animate/animate.css') }}\">

    {# Custom CSS #}
    <link rel=\"stylesheet\" href=\"{{ asset('css/back/index.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/customSweetalert.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/backToTop.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/back/loader.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/back/sidebar.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/back/navbar.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/back/table.css') }}\">

    {# Extra CSS #}
    {% block stylesheets %}{% endblock %}
</head>
<body>

    {{ include('back/partials/_loader.html.twig') }}

    <div class=\"d-flex flex-nowrap\">
    
        {{ include('back/partials/_navbar.html.twig') }}
        {{ include('back/partials/_sidebar.html.twig') }}

        <main class=\"main-content\">
            {% block body %}{% endblock %}
        </main>
    </div>

    {{ include('partials/_back_to_top.html.twig') }}

    {# Vendor JS #}
    <script src=\"{{ asset('vendor/jquery/jquery-3.7.1.js') }}\"></script>
    <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/DataTables/js/datatables.js') }}\"></script>
    <script src=\"{{ asset('vendor/DataTables/js/dataTables.bootstrap5.js') }}\"></script>
    <script src=\"{{ asset('vendor/DataTables/js/dataTables.responsive.js') }}\"></script>
    <script src=\"{{ asset('vendor/DataTables/js/responsive.bootstrap5.js') }}\"></script>

    {# Charts #}
    <script src=\"{{ asset('vendor/apexcharts/apexcharts.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/chart.js/chart.umd.js') }}\"></script>
    <script src=\"{{ asset('vendor/echarts/echarts.min.js') }}\"></script>

    {# jQuery Validation #}
    <script src=\"{{ asset('vendor/jquery-validation/jquery.validate.js') }}\"></script>

    {# jQuery Custom Validation Methods #}
    <script src=\"{{ asset('js/customValidationMethods.js') }}\"></script>

    {# sweetalert2 CDN #}
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

    {# Custom Alert #}
    <script src=\"{{ asset('js/customAlert.js') }}\"></script>

    {# Custom JS #}
    <script src=\"{{ asset('js/table.js') }}\"></script>
    <script src=\"{{ asset('js/fullPageLoader.js') }}\"></script>
    <script src=\"{{ asset('js/submitLoader.js') }}\"></script>
    <script src=\"{{ asset('js/referentiel.js') }}\"></script>
    <script src=\"{{ asset('js/backToTop.js') }}\"></script>

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

    {# Extra JS #}
    {% block javascripts %}{% endblock %}
</body>
</html>
", "back/layouts/base.html.twig", "/var/www/html/erecrutement/templates/back/layouts/base.html.twig");
    }
}
