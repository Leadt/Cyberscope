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

/* post/index.html.twig */
class __TwigTemplate_29903d618d2b013fcae3d0121a74dc0a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Fil d'actualité
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
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t\t.card {
\t\t\tpadding: 20px;
\t\t\tmargin: 3%;
\t\t}
\t\t.card-pseudo {
\t\t\tcolor: grey;
\t\t}
\t\t.react {
\t\t\t--r: 40px;
\t\t\tdisplay: inline-grid;
\t\t\tcursor: pointer;
\t\t\twidth: var(--r);
\t\t\theight: var(--r);
\t\t\tborder-radius: 50%;
\t\t\tmargin: calc(var(--r) / 3);
\t\t\tline-height: var(--r);
\t\t\ttext-align: center;
\t\t\ttransform: rotate(0);
\t\t}

\t\t.react i:before {
\t\t\tcontent: attr(data-icon);
\t\t\tgrid-area: 1 / 1;
\t\t\tfont-style: normal;
\t\t\tfont-size: calc(0.6*var(--r));
\t\t}

\t\t.react i {
\t\t\tfilter:grayscale(100%);
\t\t\ttransform: scale(1);
\t\t\tgrid-area: 1 / 1;
\t\t\tdisplay: inherit;
\t\t\ttransition: transform 0.6s cubic-bezier(0.5,-12,1,-12);
\t\t}
\t\t.react:hover {
\t\t\ttransform: rotate(0.1deg);
\t\t\ttransition: transform 0.25s cubic-bezier(0.5,400,0.5,-400);
\t\t}
\t\t.react:before {
\t\t\tcontent: \"\";
\t\t\tgrid-area: 1 / 1;
\t\t\tborder-radius: 50%;
\t\t\tborder: solid orange calc(var(--r) / 2);
\t\t\ttransform: scale(0);
\t\t}
\t\t.react:after,
\t\t.react i:after {
\t\t\tcontent: \"\";
\t\t\tgrid-area: 1 / 1;
\t\t\tmargin: calc(var(--r)/-2);
\t\t\t--c1: radial-gradient(red 50%,#0000 60%);
\t\t\t--c2: radial-gradient(orange 50%,#0000 60%);
\t\t\tbackground: var(--c1), var(--c1), var(--c1), var(--c1), var(--c2), var(--c2), var(--c2), var(--c2);
\t\t\tbackground-size: calc(var(--r) / 6) calc(var(--r)/6);
\t\t\tbackground-position: calc(50% - var(--r) / 2) calc(50% - var(--r)/2), calc(50% + var(--r) / 2) calc(50% - var(--r)/2), calc(50% - var(--r) / 2) calc(50% + var(--r)/2), calc(50% + var(--r) / 2) calc(50% + var(--r)/2), calc(50% + 0px) calc(50% + var(--r)*0.707), calc(50% + var(--r) * 0.707) calc(50% + 0px), calc(50% - var(--r) * 0.707) calc(50% + 0px), calc(50% + 0px) calc(50% - var(--r)*0.707);
\t\t\tbackground-repeat: no-repeat;
\t\t\ttransform: scale(0);
\t\t}
\t\t.react i:after {
\t\t\tbackground-size: calc(var(--r) / 8) calc(var(--r)/8);
\t\t\ttransform: rotate(60deg) scale(0);
\t\t}

\t\tinput:checked + .react i {
\t\t\tfilter:grayscale(0);
\t\t\ttransform: scale(0.95);
\t\t\ttransition: filter 0.5s 0.5s, transform 1s cubic-bezier(0,26.67,0.5,26.67);
\t\t}
\t\tinput:checked + .react:before {
\t\t\tborder-width: 0;
\t\t\ttransform: scale(1);
\t\t\ttransition: transform 0.5s, border-width 0.5s 0.5s;
\t\t}
\t\tinput:checked + .react:after,
\t\tinput:checked + .react i:after {
\t\t\ttransform: scale(1);
\t\t\topacity: 0;
\t\t\tbackground-size: 0 0;
\t\t\ttransition: transform 0.5s 0.5s, opacity 0.4s 0.9s, background-size 0.5s 0.9s;
\t\t}
\t\tinput:checked + .react i:after {
\t\t\ttransform: rotate(55deg) scale(1);
\t\t}


\t\tinput {
\t\t\tposition: absolute;
\t\t\tvisibility: hidden;
\t\t\tclip-path: inset(50%)
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

\t<div class=\"container\">

\t\t<div class=\"btn-block\">
\t\t\t<button onclick=\"window.location.href = '";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formPost");
        echo "'\">Nouveau post</button>
\t\t</div>

\t\t<div class=\"card\" aria-hidden=\"true\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text placeholder-glow\">
\t\t\t\t\t<span class=\"placeholder col-4\"></span>
\t\t\t\t</p>

\t\t\t\t<span class=\"placeholder col-3\"></span>
\t\t\t</p>
\t\t\t<img class=\"5%\" src=\"images/ballon.jpg\" class=\"card-img-top\" alt=\"ballon\">

\t\t\t<h5>
\t\t\t\t<span class=\"placeholder col-6\"></span>
\t\t\t</h5>
\t\t\t<p class=\"card-text placeholder-glow\">
\t\t\t\t<span class=\"placeholder col-7\"></span>
\t\t\t\t<span class=\"placeholder col-4\"></span>
\t\t\t\t<span class=\"placeholder col-4\"></span>
\t\t\t\t<span class=\"placeholder col-6\"></span>
\t\t\t\t<span class=\"placeholder col-8\"></span>
\t\t\t</p>
\t\t\t<input type=\"checkbox\" id=\"r1\">
\t\t\t<label for=\"r1\" class=\"react\">
\t\t\t\t<i data-icon=\"💯\"></i>
\t\t\t</label>

\t\t\t<input type=\"checkbox\" id=\"r2\">
\t\t\t<label for=\"r2\" class=\"react\">
\t\t\t\t<i data-icon=\"❤️\"></i>
\t\t\t</label>

\t\t\t<input type=\"checkbox\" id=\"r3\">
\t\t\t<label for=\"r3\" class=\"react\">
\t\t\t\t<i data-icon=\"🐙\"></i>
\t\t\t</label>

\t\t\t<input type=\"checkbox\" id=\"r4\">
\t\t\t<label for=\"r4\" class=\"react\">
\t\t\t\t<i data-icon=\"👍\"></i>
\t\t\t</label>
\t\t\t<br>
\t\t\t<a href=\"#\" tabindex=\"-1\" class=\"btn btn-primary disabled placeholder col-2\"></a>


\t\t</div>
\t</div>

\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\t<p>
\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t<span>Titre</span>
\t\t\t\t</h5>
\t\t\t</p>

\t\t\t<span class=\"card-pseudo\">Pseudo</span>
\t\t</p>
\t\t<img class=\"5%\" src=\"images/ballon.jpg\" class=\"card-img-top\" alt=\"ballon\">

\t\t<p>
\t\t\t<span>Description</span>
\t\t</p>

\t\t<input type=\"checkbox\" id=\"r5\">
\t\t<label for=\"r5\" class=\"react\">
\t\t\t<i data-icon=\"💯\"></i>
\t\t</label>

\t\t<input type=\"checkbox\" id=\"r6\">
\t\t<label for=\"r6\" class=\"react\">
\t\t\t<i data-icon=\"❤️\"></i>
\t\t</label>

\t\t<input type=\"checkbox\" id=\"r7\">
\t\t<label for=\"r7\" class=\"react\">
\t\t\t<i data-icon=\"🐙\"></i>
\t\t</label>

\t\t<input type=\"checkbox\" id=\"r8\">
\t\t<label for=\"r8\" class=\"react\">
\t\t\t<i data-icon=\"👍\"></i>
\t\t</label>
\t\t<br>

\t\t<a href=\"#\" tabindex=\"-1\" class=\"btn btn-primary disabled \">Commentaire</a>
\t</div>
</div></div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 131,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fil d'actualité
{% endblock %}

{% block body %}
\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t\t.card {
\t\t\tpadding: 20px;
\t\t\tmargin: 3%;
\t\t}
\t\t.card-pseudo {
\t\t\tcolor: grey;
\t\t}
\t\t.react {
\t\t\t--r: 40px;
\t\t\tdisplay: inline-grid;
\t\t\tcursor: pointer;
\t\t\twidth: var(--r);
\t\t\theight: var(--r);
\t\t\tborder-radius: 50%;
\t\t\tmargin: calc(var(--r) / 3);
\t\t\tline-height: var(--r);
\t\t\ttext-align: center;
\t\t\ttransform: rotate(0);
\t\t}

\t\t.react i:before {
\t\t\tcontent: attr(data-icon);
\t\t\tgrid-area: 1 / 1;
\t\t\tfont-style: normal;
\t\t\tfont-size: calc(0.6*var(--r));
\t\t}

\t\t.react i {
\t\t\tfilter:grayscale(100%);
\t\t\ttransform: scale(1);
\t\t\tgrid-area: 1 / 1;
\t\t\tdisplay: inherit;
\t\t\ttransition: transform 0.6s cubic-bezier(0.5,-12,1,-12);
\t\t}
\t\t.react:hover {
\t\t\ttransform: rotate(0.1deg);
\t\t\ttransition: transform 0.25s cubic-bezier(0.5,400,0.5,-400);
\t\t}
\t\t.react:before {
\t\t\tcontent: \"\";
\t\t\tgrid-area: 1 / 1;
\t\t\tborder-radius: 50%;
\t\t\tborder: solid orange calc(var(--r) / 2);
\t\t\ttransform: scale(0);
\t\t}
\t\t.react:after,
\t\t.react i:after {
\t\t\tcontent: \"\";
\t\t\tgrid-area: 1 / 1;
\t\t\tmargin: calc(var(--r)/-2);
\t\t\t--c1: radial-gradient(red 50%,#0000 60%);
\t\t\t--c2: radial-gradient(orange 50%,#0000 60%);
\t\t\tbackground: var(--c1), var(--c1), var(--c1), var(--c1), var(--c2), var(--c2), var(--c2), var(--c2);
\t\t\tbackground-size: calc(var(--r) / 6) calc(var(--r)/6);
\t\t\tbackground-position: calc(50% - var(--r) / 2) calc(50% - var(--r)/2), calc(50% + var(--r) / 2) calc(50% - var(--r)/2), calc(50% - var(--r) / 2) calc(50% + var(--r)/2), calc(50% + var(--r) / 2) calc(50% + var(--r)/2), calc(50% + 0px) calc(50% + var(--r)*0.707), calc(50% + var(--r) * 0.707) calc(50% + 0px), calc(50% - var(--r) * 0.707) calc(50% + 0px), calc(50% + 0px) calc(50% - var(--r)*0.707);
\t\t\tbackground-repeat: no-repeat;
\t\t\ttransform: scale(0);
\t\t}
\t\t.react i:after {
\t\t\tbackground-size: calc(var(--r) / 8) calc(var(--r)/8);
\t\t\ttransform: rotate(60deg) scale(0);
\t\t}

\t\tinput:checked + .react i {
\t\t\tfilter:grayscale(0);
\t\t\ttransform: scale(0.95);
\t\t\ttransition: filter 0.5s 0.5s, transform 1s cubic-bezier(0,26.67,0.5,26.67);
\t\t}
\t\tinput:checked + .react:before {
\t\t\tborder-width: 0;
\t\t\ttransform: scale(1);
\t\t\ttransition: transform 0.5s, border-width 0.5s 0.5s;
\t\t}
\t\tinput:checked + .react:after,
\t\tinput:checked + .react i:after {
\t\t\ttransform: scale(1);
\t\t\topacity: 0;
\t\t\tbackground-size: 0 0;
\t\t\ttransition: transform 0.5s 0.5s, opacity 0.4s 0.9s, background-size 0.5s 0.9s;
\t\t}
\t\tinput:checked + .react i:after {
\t\t\ttransform: rotate(55deg) scale(1);
\t\t}


\t\tinput {
\t\t\tposition: absolute;
\t\t\tvisibility: hidden;
\t\t\tclip-path: inset(50%)
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

\t<div class=\"container\">

\t\t<div class=\"btn-block\">
\t\t\t<button onclick=\"window.location.href = '{{ path('app_formPost') }}'\">Nouveau post</button>
\t\t</div>

\t\t<div class=\"card\" aria-hidden=\"true\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text placeholder-glow\">
\t\t\t\t\t<span class=\"placeholder col-4\"></span>
\t\t\t\t</p>

\t\t\t\t<span class=\"placeholder col-3\"></span>
\t\t\t</p>
\t\t\t<img class=\"5%\" src=\"images/ballon.jpg\" class=\"card-img-top\" alt=\"ballon\">

\t\t\t<h5>
\t\t\t\t<span class=\"placeholder col-6\"></span>
\t\t\t</h5>
\t\t\t<p class=\"card-text placeholder-glow\">
\t\t\t\t<span class=\"placeholder col-7\"></span>
\t\t\t\t<span class=\"placeholder col-4\"></span>
\t\t\t\t<span class=\"placeholder col-4\"></span>
\t\t\t\t<span class=\"placeholder col-6\"></span>
\t\t\t\t<span class=\"placeholder col-8\"></span>
\t\t\t</p>
\t\t\t<input type=\"checkbox\" id=\"r1\">
\t\t\t<label for=\"r1\" class=\"react\">
\t\t\t\t<i data-icon=\"💯\"></i>
\t\t\t</label>

\t\t\t<input type=\"checkbox\" id=\"r2\">
\t\t\t<label for=\"r2\" class=\"react\">
\t\t\t\t<i data-icon=\"❤️\"></i>
\t\t\t</label>

\t\t\t<input type=\"checkbox\" id=\"r3\">
\t\t\t<label for=\"r3\" class=\"react\">
\t\t\t\t<i data-icon=\"🐙\"></i>
\t\t\t</label>

\t\t\t<input type=\"checkbox\" id=\"r4\">
\t\t\t<label for=\"r4\" class=\"react\">
\t\t\t\t<i data-icon=\"👍\"></i>
\t\t\t</label>
\t\t\t<br>
\t\t\t<a href=\"#\" tabindex=\"-1\" class=\"btn btn-primary disabled placeholder col-2\"></a>


\t\t</div>
\t</div>

\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\t<p>
\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t<span>Titre</span>
\t\t\t\t</h5>
\t\t\t</p>

\t\t\t<span class=\"card-pseudo\">Pseudo</span>
\t\t</p>
\t\t<img class=\"5%\" src=\"images/ballon.jpg\" class=\"card-img-top\" alt=\"ballon\">

\t\t<p>
\t\t\t<span>Description</span>
\t\t</p>

\t\t<input type=\"checkbox\" id=\"r5\">
\t\t<label for=\"r5\" class=\"react\">
\t\t\t<i data-icon=\"💯\"></i>
\t\t</label>

\t\t<input type=\"checkbox\" id=\"r6\">
\t\t<label for=\"r6\" class=\"react\">
\t\t\t<i data-icon=\"❤️\"></i>
\t\t</label>

\t\t<input type=\"checkbox\" id=\"r7\">
\t\t<label for=\"r7\" class=\"react\">
\t\t\t<i data-icon=\"🐙\"></i>
\t\t</label>

\t\t<input type=\"checkbox\" id=\"r8\">
\t\t<label for=\"r8\" class=\"react\">
\t\t\t<i data-icon=\"👍\"></i>
\t\t</label>
\t\t<br>

\t\t<a href=\"#\" tabindex=\"-1\" class=\"btn btn-primary disabled \">Commentaire</a>
\t</div>
</div></div>{% endblock %}
", "post/index.html.twig", "/Users/leadrouet/Desktop/ENSC/2A/S8/P2i/Cyberscope/templates/post/index.html.twig");
    }
}
