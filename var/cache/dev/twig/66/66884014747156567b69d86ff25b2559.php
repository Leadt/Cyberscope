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

/* inscription/index.html.twig */
class __TwigTemplate_0ac10fabcd0c258abcd53b6e992929a2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "inscription/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription
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
\t\t\tmax-width: 540px;
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
\t\t.button-sign {
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
</form></br><div class=\"main-block\">
<h1>Inscription</h1>
<form action=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" method=\"post\">

\t<hr>
\t<label id=\"icon\" for=\"name\">
\t\t<i class=\"fas fa-user\"></i>
\t</label>
\t<input type=\"text\" name=\"pseudo_user\" id=\"pseudo_user\" placeholder=\"Pseudo\" required/>
\t<label id=\"icon\" for=\"name\">
\t\t<i class=\"fas fa-user\"></i>
\t</label>
\t<input type=\"text\" name=\"nom_user\" id=\"no_userm\" placeholder=\"Nom\" required/>
\t<label id=\"icon\" for=\"name\">
\t\t<i class=\"fas fa-user\"></i>
\t</label>
\t<input type=\"text\" name=\"prenom_user\" id=\"prenom_user\" placeholder=\"Prénom\" required/>

\t<label id=\"icon\" for=\"name\">
\t\t<i class=\"fas fa-unlock-alt\"></i>
\t</label>
\t<input type=\"password\" name=\"mdp_user\" id=\"mdp_user\" placeholder=\"Mot de passe\" required/>

\t<label id=\"icon\" for=\"photo\">
\t\t<i class=\"fa fa-user-circle\"></i>
\t</label>
\tPhoto de profil
\t<br>
\t<input type=\"file\" name=\"photo_user\" id=\"photo_user\" placeholder=\"Photo de profil\" accept=\".png,.jpeg,.jpg,.svg\"/>

\t<hr>
\t<div class=\"btn-block\">
\t\t<button class=\"button-sign\" type=\"submit\" href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">S'inscrire</button>
\t</div>
</form></div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inscription/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 122,  161 => 92,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription
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
\t\t\tmax-width: 540px;
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
\t\t.button-sign {
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
</form></br><div class=\"main-block\">
<h1>Inscription</h1>
<form action=\"{{ path('app_register') }}\" method=\"post\">

\t<hr>
\t<label id=\"icon\" for=\"name\">
\t\t<i class=\"fas fa-user\"></i>
\t</label>
\t<input type=\"text\" name=\"pseudo_user\" id=\"pseudo_user\" placeholder=\"Pseudo\" required/>
\t<label id=\"icon\" for=\"name\">
\t\t<i class=\"fas fa-user\"></i>
\t</label>
\t<input type=\"text\" name=\"nom_user\" id=\"no_userm\" placeholder=\"Nom\" required/>
\t<label id=\"icon\" for=\"name\">
\t\t<i class=\"fas fa-user\"></i>
\t</label>
\t<input type=\"text\" name=\"prenom_user\" id=\"prenom_user\" placeholder=\"Prénom\" required/>

\t<label id=\"icon\" for=\"name\">
\t\t<i class=\"fas fa-unlock-alt\"></i>
\t</label>
\t<input type=\"password\" name=\"mdp_user\" id=\"mdp_user\" placeholder=\"Mot de passe\" required/>

\t<label id=\"icon\" for=\"photo\">
\t\t<i class=\"fa fa-user-circle\"></i>
\t</label>
\tPhoto de profil
\t<br>
\t<input type=\"file\" name=\"photo_user\" id=\"photo_user\" placeholder=\"Photo de profil\" accept=\".png,.jpeg,.jpg,.svg\"/>

\t<hr>
\t<div class=\"btn-block\">
\t\t<button class=\"button-sign\" type=\"submit\" href=\"{{path('app_homepage')}}\">S'inscrire</button>
\t</div>
</form></div>{% endblock %}
", "inscription/index.html.twig", "/Users/leadrouet/Desktop/ENSC/2A/S8/P2i/Cyberscope/templates/inscription/index.html.twig");
    }
}
