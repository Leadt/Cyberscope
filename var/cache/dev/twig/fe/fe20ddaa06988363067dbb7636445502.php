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

/* post/formPost.html.twig */
class __TwigTemplate_cbc99e712a2f0c4108c7fc6328bc57f3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/formPost.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/formPost.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un post
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
\t\ttextarea,
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
\t\t\tmax-width: 80%;
\t\t\tmin-height: 260px;
\t\t\tpadding: 20px 0;
\t\t\tmargin: auto;
\t\t\tborder-radius: 5px;
\t\t\tborder: solid 1px #ccc;
\t\t\tbox-shadow: 1px 2px 5px rgba(0, 0, 0, 0.31);
\t\t\tbackground: #ebebeb;
\t\t}
\t\tform {
\t\t\tmargin: 0 30px;
\t\t}

\t\ttextarea {
\t\t\trows: 1000;
\t\t\theight: 80px;
\t\t\twidth: 100%;
\t\t\tmargin: 13px 0 0 -5px;
\t\t\tpadding-left: 12px;
\t\t\tborder-radius: 5px 5px 5px 5px;
\t\t\tborder: solid 1px #cbc9c9;
\t\t\tbox-shadow: 1px 2px 5px rgba(0, 0, 0, 0.09);
\t\t\tbackground: #fff;
\t\t}
\t\tinput[type=text] {
\t\t\twidth: 100%;
\t\t\theight: 36px;
\t\t\tmargin: 13px 0 0 -5px;
\t\t\tpadding-left: 10px;
\t\t\tborder-radius: 5px 5px 5px 5px;
\t\t\tborder: solid 1px #cbc9c9;
\t\t\tbox-shadow: 1px 2px 5px rgba(0, 0, 0, 0.09);
\t\t\tbackground: #fff;
\t\t}
\t\t.block {
\t\t\tmargin-top: 10px;
\t\t\ttext-align: center;
\t\t}
\t\t.button-create,
\t\t.a-delete {
\t\t\twidth: 100%;
\t\t\tmargin: 10px auto;
\t\t\tborder-radius: 5px;
\t\t\tborder: none;
\t\t\tfont-size: 14px;
\t\t\tfont-weight: 600;
\t\t\tcolor: #fff;
\t\t}
\t\t.button-create {
\t\t\tbackground: #dcb124;
\t\t\tpadding: 10px 0;
\t\t}

\t\tbutton:hover {
\t\t\tbackground: #b18f1d;
\t\t}
\t\t.a-delete {
\t\t\tbackground: #B22222;
\t\t\ttext-decoration: none;
\t\t\tpadding: 10px 80px;
\t\t}
\t\t.a-delete:hover {
\t\t\tcolor: white;
\t\t\ttext-decoration: none;
\t\t\tbackground: #8B0000;

\t\t}
\t</style>

</form></br><div class=\"main-block\">
<h1>Ajout post</h1>
<form action=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\" method=\"post\">

\t<hr>
\t<input type=\"text\" name=\"titre\" id=\"titre\" placeholder=\"Titre\" required/>
\t<textarea name=\"description\" id=\"description\" placeholder=\"Description\" required/></textarea>
<br>
<br>
Ajouter une illustration
<br>
<input type=\"file\" name=\"photo\" id=\"photo\" accept=\".png,.jpeg,.jpg,.svg\"/>

<hr>

<div class=\"block\">
\t<button class=\"button-create\" type=\"submit\" href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">Créer</button>

</div></form><div class=\"block\">
<a class=\"a-delete\" href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">Annuler</a></div></div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "post/formPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 122,  191 => 119,  174 => 105,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un post
{% endblock %}

{% block body %}
\t<style>
\t\th1,
\t\tform,
\t\tinput,
\t\ttextarea,
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
\t\t\tmax-width: 80%;
\t\t\tmin-height: 260px;
\t\t\tpadding: 20px 0;
\t\t\tmargin: auto;
\t\t\tborder-radius: 5px;
\t\t\tborder: solid 1px #ccc;
\t\t\tbox-shadow: 1px 2px 5px rgba(0, 0, 0, 0.31);
\t\t\tbackground: #ebebeb;
\t\t}
\t\tform {
\t\t\tmargin: 0 30px;
\t\t}

\t\ttextarea {
\t\t\trows: 1000;
\t\t\theight: 80px;
\t\t\twidth: 100%;
\t\t\tmargin: 13px 0 0 -5px;
\t\t\tpadding-left: 12px;
\t\t\tborder-radius: 5px 5px 5px 5px;
\t\t\tborder: solid 1px #cbc9c9;
\t\t\tbox-shadow: 1px 2px 5px rgba(0, 0, 0, 0.09);
\t\t\tbackground: #fff;
\t\t}
\t\tinput[type=text] {
\t\t\twidth: 100%;
\t\t\theight: 36px;
\t\t\tmargin: 13px 0 0 -5px;
\t\t\tpadding-left: 10px;
\t\t\tborder-radius: 5px 5px 5px 5px;
\t\t\tborder: solid 1px #cbc9c9;
\t\t\tbox-shadow: 1px 2px 5px rgba(0, 0, 0, 0.09);
\t\t\tbackground: #fff;
\t\t}
\t\t.block {
\t\t\tmargin-top: 10px;
\t\t\ttext-align: center;
\t\t}
\t\t.button-create,
\t\t.a-delete {
\t\t\twidth: 100%;
\t\t\tmargin: 10px auto;
\t\t\tborder-radius: 5px;
\t\t\tborder: none;
\t\t\tfont-size: 14px;
\t\t\tfont-weight: 600;
\t\t\tcolor: #fff;
\t\t}
\t\t.button-create {
\t\t\tbackground: #dcb124;
\t\t\tpadding: 10px 0;
\t\t}

\t\tbutton:hover {
\t\t\tbackground: #b18f1d;
\t\t}
\t\t.a-delete {
\t\t\tbackground: #B22222;
\t\t\ttext-decoration: none;
\t\t\tpadding: 10px 80px;
\t\t}
\t\t.a-delete:hover {
\t\t\tcolor: white;
\t\t\ttext-decoration: none;
\t\t\tbackground: #8B0000;

\t\t}
\t</style>

</form></br><div class=\"main-block\">
<h1>Ajout post</h1>
<form action=\"{{ path('app_homepage') }}\" method=\"post\">

\t<hr>
\t<input type=\"text\" name=\"titre\" id=\"titre\" placeholder=\"Titre\" required/>
\t<textarea name=\"description\" id=\"description\" placeholder=\"Description\" required/></textarea>
<br>
<br>
Ajouter une illustration
<br>
<input type=\"file\" name=\"photo\" id=\"photo\" accept=\".png,.jpeg,.jpg,.svg\"/>

<hr>

<div class=\"block\">
\t<button class=\"button-create\" type=\"submit\" href=\"{{path('app_homepage')}}\">Créer</button>

</div></form><div class=\"block\">
<a class=\"a-delete\" href=\"{{path('app_homepage')}}\">Annuler</a></div></div>{% endblock %}
", "post/formPost.html.twig", "/Users/leadrouet/Desktop/ENSC/2A/S8/P2i/Cyberscope/templates/post/formPost.html.twig");
    }
}
