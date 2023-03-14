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

/* connexion/index.html.twig */
class __TwigTemplate_5be331d03ae100f81f1613d1dfcc3465 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "connexion/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<style>
\t\th1,
\t\tform,
\t\tinput,
\t\tp {
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\toutline: none;
\t\t\tfont-family: Roboto, Arial, sans-serif;
\t\t\tfont-size: 16px;
\t\t\tcolor: #666;
\t\t}
\t\th1 {
\t\t\tpadding: 10px 0;
\t\t\tfont-size: 32px;
\t\t\tfont-weight: 300;
\t\t\ttext-align: center;
\t\t}
\t\tp {
\t\t\tfont-size: 12px;
\t\t}
\t\thr {
\t\t\tcolor: #a9a9a9;
\t\t\topacity: 0.3;
\t\t}
\t\t.main-block {
\t\t\tmax-width: 440px;
\t\t\tmin-height: 260px;
\t\t\tpadding: 10px 0;
\t\t\tmargin: auto;
\t\t\tborder-radius: 5px;
\t\t\tborder: solid 1px #ccc;
\t\t\tbox-shadow: 1px 2px 5px rgba(0, 0, 0, 0.31);
\t\t\tbackground: #ebebeb;
\t\t}
\t\tform {
\t\t\tmargin: 0 30px;
\t\t}
\t\tlabel#icon {
\t\t\tmargin: 0;
\t\t\tborder-radius: 5px 0 0 5px;
\t\t}
\t\tinput[type=text],
\t\tinput[type=password] {
\t\t\twidth: calc(100% - 57px);
\t\t\theight: 36px;
\t\t\tmargin: 13px 0 0 -5px;
\t\t\tpadding-left: 10px;
\t\t\tborder-radius: 0 5px 5px 0;
\t\t\tborder: solid 1px #cbc9c9;
\t\t\tbox-shadow: 1px 2px 5px rgba(0, 0, 0, 0.09);
\t\t\tbackground: #fff;
\t\t}
\t\tinput[type=password] {
\t\t\tmargin-bottom: 15px;
\t\t}
\t\t#icon {
\t\t\tdisplay: inline-block;
\t\t\tpadding: 9.3px 15px;
\t\t\tbox-shadow: 1px 2px 5px rgba(0, 0, 0, 0.09);
\t\t\tbackground: #dcb124;
\t\t\tcolor: #fff;
\t\t\ttext-align: center;
\t\t}
\t\t.btn-block {
\t\t\tmargin-top: 10px;
\t\t\ttext-align: center;
\t\t}
\t\tbutton {
\t\t\twidth: 100%;
\t\t\tpadding: 10px 0;
\t\t\tmargin: 10px auto;
\t\t\tborder-radius: 5px;
\t\t\tborder: none;
\t\t\tbackground: #dcb124;
\t\t\tfont-size: 14px;
\t\t\tfont-weight: 600;
\t\t\tcolor: #fff;
\t\t}
\t\tbutton:hover {
\t\t\tbackground: #b18f1d;
\t\t}
\t</style>


\t";
        // line 92
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 92, $this->source); })())) {
            // line 93
            echo "\t\t<div class=\"alert alert-danger\">Connexion impossible</div>
\t";
        }
        // line 95
        echo "
\t";
        // line 96
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96)) {
            // line 97
            echo "\t\t<div class=\"mb-3\">
\t\t\tBienvenue
\t\t\t";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "userIdentifier", [], "any", false, false, false, 99), "html", null, true);
            echo ",
\t\t\t<a href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t</div>
\t";
        }
        // line 103
        echo "

</form></br><div class=\"main-block\">
<h1>Connexion</h1>
<form action=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">

\t<hr>
\t<label id=\"icon\" for=\"name\">
\t\t<i class=\"fas fa-user\"></i>
\t</label>
\t<input type=\"text\" name=\"pseudo\" id=\"pseudo\" placeholder=\"Pseudo\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "\" required/>
\t<label id=\"icon\" for=\"name\">
\t\t<i class=\"fas fa-unlock-alt\"></i>
\t</label>
\t<input type=\"password\" name=\"mdp\" id=\"mdp\" placeholder=\"Mot de passe\" required/>
\t<hr>
\t<div class=\"btn-block\">
\t\t<p>
\t\t\t<a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">S'inscrire</a>
\t\t</p>
\t\t<button type=\"submit\" href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">Se connecter</button>
\t</div>
</form></div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "connexion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 123,  212 => 121,  201 => 113,  192 => 107,  186 => 103,  180 => 100,  176 => 99,  172 => 97,  170 => 96,  167 => 95,  163 => 93,  161 => 92,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion
{% endblock %}

{% block body %}
\t<style>
\t\th1,
\t\tform,
\t\tinput,
\t\tp {
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\toutline: none;
\t\t\tfont-family: Roboto, Arial, sans-serif;
\t\t\tfont-size: 16px;
\t\t\tcolor: #666;
\t\t}
\t\th1 {
\t\t\tpadding: 10px 0;
\t\t\tfont-size: 32px;
\t\t\tfont-weight: 300;
\t\t\ttext-align: center;
\t\t}
\t\tp {
\t\t\tfont-size: 12px;
\t\t}
\t\thr {
\t\t\tcolor: #a9a9a9;
\t\t\topacity: 0.3;
\t\t}
\t\t.main-block {
\t\t\tmax-width: 440px;
\t\t\tmin-height: 260px;
\t\t\tpadding: 10px 0;
\t\t\tmargin: auto;
\t\t\tborder-radius: 5px;
\t\t\tborder: solid 1px #ccc;
\t\t\tbox-shadow: 1px 2px 5px rgba(0, 0, 0, 0.31);
\t\t\tbackground: #ebebeb;
\t\t}
\t\tform {
\t\t\tmargin: 0 30px;
\t\t}
\t\tlabel#icon {
\t\t\tmargin: 0;
\t\t\tborder-radius: 5px 0 0 5px;
\t\t}
\t\tinput[type=text],
\t\tinput[type=password] {
\t\t\twidth: calc(100% - 57px);
\t\t\theight: 36px;
\t\t\tmargin: 13px 0 0 -5px;
\t\t\tpadding-left: 10px;
\t\t\tborder-radius: 0 5px 5px 0;
\t\t\tborder: solid 1px #cbc9c9;
\t\t\tbox-shadow: 1px 2px 5px rgba(0, 0, 0, 0.09);
\t\t\tbackground: #fff;
\t\t}
\t\tinput[type=password] {
\t\t\tmargin-bottom: 15px;
\t\t}
\t\t#icon {
\t\t\tdisplay: inline-block;
\t\t\tpadding: 9.3px 15px;
\t\t\tbox-shadow: 1px 2px 5px rgba(0, 0, 0, 0.09);
\t\t\tbackground: #dcb124;
\t\t\tcolor: #fff;
\t\t\ttext-align: center;
\t\t}
\t\t.btn-block {
\t\t\tmargin-top: 10px;
\t\t\ttext-align: center;
\t\t}
\t\tbutton {
\t\t\twidth: 100%;
\t\t\tpadding: 10px 0;
\t\t\tmargin: 10px auto;
\t\t\tborder-radius: 5px;
\t\t\tborder: none;
\t\t\tbackground: #dcb124;
\t\t\tfont-size: 14px;
\t\t\tfont-weight: 600;
\t\t\tcolor: #fff;
\t\t}
\t\tbutton:hover {
\t\t\tbackground: #b18f1d;
\t\t}
\t</style>


\t{% if error %}
\t\t<div class=\"alert alert-danger\">Connexion impossible</div>
\t{% endif %}

\t{% if app.user %}
\t\t<div class=\"mb-3\">
\t\t\tBienvenue
\t\t\t{{ app.user.userIdentifier }},
\t\t\t<a href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t</div>
\t{% endif %}


</form></br><div class=\"main-block\">
<h1>Connexion</h1>
<form action=\"{{ path('app_login') }}\" method=\"post\">

\t<hr>
\t<label id=\"icon\" for=\"name\">
\t\t<i class=\"fas fa-user\"></i>
\t</label>
\t<input type=\"text\" name=\"pseudo\" id=\"pseudo\" placeholder=\"Pseudo\" value=\"{{ last_username }}\" required/>
\t<label id=\"icon\" for=\"name\">
\t\t<i class=\"fas fa-unlock-alt\"></i>
\t</label>
\t<input type=\"password\" name=\"mdp\" id=\"mdp\" placeholder=\"Mot de passe\" required/>
\t<hr>
\t<div class=\"btn-block\">
\t\t<p>
\t\t\t<a href=\"{{path('app_register')}}\">S'inscrire</a>
\t\t</p>
\t\t<button type=\"submit\" href=\"{{path('app_homepage')}}\">Se connecter</button>
\t</div>
</form></div>{% endblock %}
", "connexion/index.html.twig", "/Users/leadrouet/Desktop/ENSC/2A/S8/P2i/Cyberscope/templates/connexion/index.html.twig");
    }
}
