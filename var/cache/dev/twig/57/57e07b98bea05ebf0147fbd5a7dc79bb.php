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

/* base.html.twig */
class __TwigTemplate_01a3cbda6305fe4827d1bd4ea5328f16 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>

\t\t";
        // line 11
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 66
        echo "
\t\t";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "

\t\t<ul class=\"nav\">
\t\t\t<li class=\"navli\">
\t\t\t\t<a class=\"nava\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">
\t\t\t\t\tCyberCom
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"navli\">
\t\t\t\t<a class=\"nava\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur");
        echo "\">
\t\t\t\t\tMon compte
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"navli\">
\t\t\t\t<a class=\"nava\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
\t\t\t\t\tConnexion</a>
\t\t\t</li>
\t\t</ul>


\t\t";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        echo "<!-- Footer --><div class=\"container mt-5\">
\t\t\t<footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
\t\t\t\t<div class=\"col-md-4 d-flex align-items-center\">
\t\t\t\t\t<span class=\"me-1\" style=\"color: red;\">
\t\t\t\t\t\t<i class=\"fas fa-heart\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text-muted me-1\">Léa</span>
\t\t\t\t</div>


\t\t\t</footer>
\t\t</div><!-- End Footer --></head>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CyberCom
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t\t\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-32x32.png"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-16x16.png"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\" integrity=\"sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t\t<link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/css/app.css"), "html", null, true);
        echo "\">


\t\t\t<style>

\t\t\t\tfooter {
\t\t\t\t\twidth: 100%;
\t\t\t\t\theight: 1px;
\t\t\t\t}
\t\t\t\tbody {
\t\t\t\t\tbackground: #1A1E23;
\t\t\t\t}

\t\t\t\t@import url(\"https://fonts.googleapis.com/css?family=Raleway:400,400i,700\");

\t\t\t\t.nav {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tjustify-content: center
\t\t\t\t}
\t\t\t\t.navli {
\t\t\t\t\tpadding: 10px;
\t\t\t\t}

\t\t\t\t.nava {
\t\t\t\t\t--fill-color: #b18f1d;
\t\t\t\t\tposition: relative;
\t\t\t\t\tdisplay: block;
\t\t\t\t\tpadding: 4px 0;
\t\t\t\t\tfont: 700 2rem Raleway, sans-serif;
\t\t\t\t\ttext-decoration: none;
\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\t-webkit-text-stroke: 2px var(--fill-color);
\t\t\t\t\tbackground: linear-gradient(var(--fill-color) 0 100%) left / 0 no-repeat;
\t\t\t\t\tcolor: transparent;
\t\t\t\t\tbackground-clip: text;
\t\t\t\t\ttransition: 0.5s linear;
\t\t\t\t\ttext-align: justify;
\t\t\t\t}
\t\t\t\t.nava:hover {
\t\t\t\t\tbackground-size: 100%;
\t\t\t\t\tcolor: #dcb124;
\t\t\t\t}
\t\t\t</style>

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 91
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 91,  216 => 68,  209 => 67,  157 => 21,  147 => 14,  143 => 13,  138 => 12,  131 => 11,  117 => 6,  96 => 91,  87 => 85,  79 => 80,  71 => 75,  65 => 71,  63 => 67,  60 => 66,  57 => 11,  53 => 8,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}CyberCom
\t\t\t{% endblock %}
\t\t</title>

\t\t{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
\t\t{% block stylesheets %}
\t\t\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('apple-touch-icon.png') }}\">
\t\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('favicon-32x32.png') }}\">
\t\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('favicon-16x16.png') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\" integrity=\"sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t\t<link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('public/css/app.css') }}\">


\t\t\t<style>

\t\t\t\tfooter {
\t\t\t\t\twidth: 100%;
\t\t\t\t\theight: 1px;
\t\t\t\t}
\t\t\t\tbody {
\t\t\t\t\tbackground: #1A1E23;
\t\t\t\t}

\t\t\t\t@import url(\"https://fonts.googleapis.com/css?family=Raleway:400,400i,700\");

\t\t\t\t.nav {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tjustify-content: center
\t\t\t\t}
\t\t\t\t.navli {
\t\t\t\t\tpadding: 10px;
\t\t\t\t}

\t\t\t\t.nava {
\t\t\t\t\t--fill-color: #b18f1d;
\t\t\t\t\tposition: relative;
\t\t\t\t\tdisplay: block;
\t\t\t\t\tpadding: 4px 0;
\t\t\t\t\tfont: 700 2rem Raleway, sans-serif;
\t\t\t\t\ttext-decoration: none;
\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\t-webkit-text-stroke: 2px var(--fill-color);
\t\t\t\t\tbackground: linear-gradient(var(--fill-color) 0 100%) left / 0 no-repeat;
\t\t\t\t\tcolor: transparent;
\t\t\t\t\tbackground-clip: text;
\t\t\t\t\ttransition: 0.5s linear;
\t\t\t\t\ttext-align: justify;
\t\t\t\t}
\t\t\t\t.nava:hover {
\t\t\t\t\tbackground-size: 100%;
\t\t\t\t\tcolor: #dcb124;
\t\t\t\t}
\t\t\t</style>

\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}

\t\t{% endblock %}


\t\t<ul class=\"nav\">
\t\t\t<li class=\"navli\">
\t\t\t\t<a class=\"nava\" href=\"{{path('app_homepage') }}\">
\t\t\t\t\tCyberCom
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"navli\">
\t\t\t\t<a class=\"nava\" href=\"{{path('app_utilisateur') }}\">
\t\t\t\t\tMon compte
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"navli\">
\t\t\t\t<a class=\"nava\" href=\"{{path('app_login') }}\">
\t\t\t\t\tConnexion</a>
\t\t\t</li>
\t\t</ul>


\t\t{% block body %}{% endblock %}<!-- Footer --><div class=\"container mt-5\">
\t\t\t<footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
\t\t\t\t<div class=\"col-md-4 d-flex align-items-center\">
\t\t\t\t\t<span class=\"me-1\" style=\"color: red;\">
\t\t\t\t\t\t<i class=\"fas fa-heart\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text-muted me-1\">Léa</span>
\t\t\t\t</div>


\t\t\t</footer>
\t\t</div><!-- End Footer --></head>
</html>
", "base.html.twig", "/Users/leadrouet/Desktop/ENSC/2A/S8/P2i/Cyberscope/templates/base.html.twig");
    }
}
