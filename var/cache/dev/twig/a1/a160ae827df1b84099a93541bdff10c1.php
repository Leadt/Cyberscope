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

/* utilisateur/index.html.twig */
class __TwigTemplate_f37b870f9b7db9b5bde0350786b9d3e5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon compte
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
\t</style>

\t<link rel=\"stylesheet\" href=\"https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css\">
\t<link rel=\"stylesheet\" href=\"https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css\">

\t<main>
\t\t<section class=\"relative block h-500-px\">
\t\t\t<div class=\"absolute top-0 w-full h-full bg-center bg-cover\" style=\" background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');\">
\t\t\t\t<span id=\"blackOverlay\" class=\"w-full h-full absolute opacity-50 bg-black\"></span>
\t\t\t</div>
\t\t\t<div class=\"top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px\" style=\"transform: translateZ(0px)\">
\t\t\t\t<svg class=\"absolute bottom-0 overflow-hidden\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"none\" version=\"1.1\" viewbox=\"0 0 2560 100\" x=\"0\" y=\"0\">
\t\t\t\t\t<polygon class=\"text-blueGray-200 fill-current\" points=\"2560 0 2560 100 0 100\"></polygon>
\t\t\t\t</svg>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"relative py-16 bg-blueGray-200\">
\t\t\t<div class=\"container mx-auto px-4\">
\t\t\t\t<div class=\"relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64\">
\t\t\t\t\t<div class=\"px-6\">
\t\t\t\t\t\t<div class=\"flex flex-wrap justify-center\">
\t\t\t\t\t\t\t<div class=\"w-full lg:w-3/12 px-4 lg:order-2 flex justify-center\">
\t\t\t\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg\" class=\"shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center\">
\t\t\t\t\t\t\t\t<div class=\"py-6 px-3 mt-32 sm:mt-0\">
\t\t\t\t\t\t\t\t\t<button class=\"bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150\" type=\"button\">
\t\t\t\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-full lg:w-4/12 px-4 lg:order-1\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-center py-4 lg:pt-4 pt-8\">
\t\t\t\t\t\t\t\t\t<div class=\"mr-4 p-3 text-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-xl font-bold block uppercase tracking-wide text-blueGray-600\">Nombre
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-sm text-blueGray-400\">Posts</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center mt-12\">
\t\t\t\t\t\t\t<h3 class=\"text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2\">
\t\t\t\t\t\t\t\tNom prénom
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2 text-lg text-blueGray-400\"></i>
\t\t\t\t\t\t\t\tPseudo
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-2 text-blueGray-600 mt-10\">Rôle/job
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-2 text-blueGray-600\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-university mr-2 text-lg text-blueGray-400\"></i>Lieu de travail
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-10 py-10 border-t border-blueGray-200 text-center\">
\t\t\t\t\t\t\t<div class=\"flex flex-wrap justify-center\">
\t\t\t\t\t\t\t\t<div class=\"w-full lg:w-9/12 px-4\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-4 text-lg leading-relaxed text-blueGray-700\">
\t\t\t\t\t\t\t\t\t\tDescription (voir si je rajoute dans la bdd)
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<footer class=\"relative bg-blueGray-200 pt-8 pb-6 mt-8\">
\t\t\t\t<div class=\"container mx-auto px-4\">
\t\t\t\t\t<div class=\"flex flex-wrap items-center md:justify-between justify-center\">
\t\t\t\t\t\t<div class=\"w-full md:w-6/12 px-4 mx-auto text-center\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t</section>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte
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
\t</style>

\t<link rel=\"stylesheet\" href=\"https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css\">
\t<link rel=\"stylesheet\" href=\"https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css\">

\t<main>
\t\t<section class=\"relative block h-500-px\">
\t\t\t<div class=\"absolute top-0 w-full h-full bg-center bg-cover\" style=\" background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');\">
\t\t\t\t<span id=\"blackOverlay\" class=\"w-full h-full absolute opacity-50 bg-black\"></span>
\t\t\t</div>
\t\t\t<div class=\"top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px\" style=\"transform: translateZ(0px)\">
\t\t\t\t<svg class=\"absolute bottom-0 overflow-hidden\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"none\" version=\"1.1\" viewbox=\"0 0 2560 100\" x=\"0\" y=\"0\">
\t\t\t\t\t<polygon class=\"text-blueGray-200 fill-current\" points=\"2560 0 2560 100 0 100\"></polygon>
\t\t\t\t</svg>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"relative py-16 bg-blueGray-200\">
\t\t\t<div class=\"container mx-auto px-4\">
\t\t\t\t<div class=\"relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64\">
\t\t\t\t\t<div class=\"px-6\">
\t\t\t\t\t\t<div class=\"flex flex-wrap justify-center\">
\t\t\t\t\t\t\t<div class=\"w-full lg:w-3/12 px-4 lg:order-2 flex justify-center\">
\t\t\t\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg\" class=\"shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center\">
\t\t\t\t\t\t\t\t<div class=\"py-6 px-3 mt-32 sm:mt-0\">
\t\t\t\t\t\t\t\t\t<button class=\"bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150\" type=\"button\">
\t\t\t\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-full lg:w-4/12 px-4 lg:order-1\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-center py-4 lg:pt-4 pt-8\">
\t\t\t\t\t\t\t\t\t<div class=\"mr-4 p-3 text-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-xl font-bold block uppercase tracking-wide text-blueGray-600\">Nombre
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-sm text-blueGray-400\">Posts</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center mt-12\">
\t\t\t\t\t\t\t<h3 class=\"text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2\">
\t\t\t\t\t\t\t\tNom prénom
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-2 text-lg text-blueGray-400\"></i>
\t\t\t\t\t\t\t\tPseudo
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-2 text-blueGray-600 mt-10\">Rôle/job
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-2 text-blueGray-600\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-university mr-2 text-lg text-blueGray-400\"></i>Lieu de travail
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-10 py-10 border-t border-blueGray-200 text-center\">
\t\t\t\t\t\t\t<div class=\"flex flex-wrap justify-center\">
\t\t\t\t\t\t\t\t<div class=\"w-full lg:w-9/12 px-4\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-4 text-lg leading-relaxed text-blueGray-700\">
\t\t\t\t\t\t\t\t\t\tDescription (voir si je rajoute dans la bdd)
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<footer class=\"relative bg-blueGray-200 pt-8 pb-6 mt-8\">
\t\t\t\t<div class=\"container mx-auto px-4\">
\t\t\t\t\t<div class=\"flex flex-wrap items-center md:justify-between justify-center\">
\t\t\t\t\t\t<div class=\"w-full md:w-6/12 px-4 mx-auto text-center\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t</section>
\t</main>
{% endblock %}
", "utilisateur/index.html.twig", "/Users/leadrouet/Desktop/ENSC/2A/S8/P2i/Cyberscope/templates/utilisateur/index.html.twig");
    }
}
