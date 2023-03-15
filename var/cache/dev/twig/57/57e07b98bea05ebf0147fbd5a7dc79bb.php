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
        // line 23
        echo "
\t\t<style>

\t\t\tfooter {
\t\t\t\twidth: 100%;
\t\t\t\theight: 1px;
\t\t\t}
\t\t\thtml,
\t\t\tbody,
\t\t\tdiv {
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t\tfont-family: \"Helvetica Neue\", Helvetica, sans-serif;
\t\t\t}

\t\t\t#menu {

\t\t\t\tposition: relative;
\t\t\t\ttext-align: center;
\t\t\t\tmargin: 10px;
\t\t\t}

\t\t\t#menu-line {
\t\t\t\tdisplay: block;
\t\t\t\tposition: absolute;
\t\t\t\tleft: 50%;
\t\t\t\ttop: 25px;
\t\t\t\twidth: 0;
\t\t\t\theight: 5px;
\t\t\t\tbackground-color: black;
\t\t\t}

\t\t\tul {
\t\t\t\tz-index: 100;
\t\t\t}

\t\t\tul li {
\t\t\t\tdisplay: inline-block;
\t\t\t\tmargin-right: 30px;
\t\t\t}

\t\t\tul li a {
\t\t\t\tdisplay: block;
\t\t\t\tfont-size: 20px;
\t\t\t\ttext-transform: uppercase;
\t\t\t\ttext-decoration: none;
\t\t\t\tcolor: black;
\t\t\t}
\t\t</style>

\t\t";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "\t</head>
\t<body>
\t\t<div id=\"menu\">
\t\t\t<ul id=\"menu-list\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">CyberCom</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur");
        echo "\">Mon compte</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connexion</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div id=\"menu-line\"></div>
\t\t</div>


\t\t<script>

\t\t\t\$(function () {

var currentIndex = 0;
var _offset = 10;

var \$menuLi = \$(\"#menu-list li\");
var \$line = \$(\"#menu-line\");

\$menuLi.on(\"click\", function () {

var _\$this = \$(this);

TweenMax.killTweensOf(\$line);

if (_\$this.index() > currentIndex) {

TweenMax.to(\$line, 0.5, {
css: {
width: (_\$this.position().left + _\$this.outerWidth()) - \$line.position().left + _offset / 2
},
onComplete: function () {
currentIndex = _\$this.index();
TweenMax.to(\$line, 0.5, {
css: {
left: _\$this.position().left - _offset / 2,
width: _\$this.outerWidth() + _offset
}
})
}
});

} else {

TweenMax.to(\$line, 0.5, {
css: {
left: _\$this.position().left - _offset / 2,
width: (\$line.position().left + \$line.outerWidth()) - _\$this.position().left + _offset / 2
},
onComplete: function () {
currentIndex = _\$this.index();
TweenMax.to(\$line, 0.5, {
css: {
width: _\$this.outerWidth() + _offset
}
})
}
});

}

});

});
\t\t</script>


\t\t";
        // line 153
        $this->displayBlock('body', $context, $blocks);
        // line 154
        echo "
\t\t<!-- Footer -->
\t\t<div class=\"container mt-5\">
\t\t\t<footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
\t\t\t\t<div class=\"col-md-4 d-flex align-items-center\">
\t\t\t\t\t<span class=\"me-1\" style=\"color: red;\">
\t\t\t\t\t\t<i class=\"fas fa-heart\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text-muted me-1\">Léa</span>
\t\t\t\t</div>


\t\t\t</footer>
\t\t</div>
\t\t<!-- End Footer -->

\t</body>
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
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 153
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
        return array (  295 => 153,  284 => 74,  277 => 73,  268 => 21,  258 => 14,  254 => 13,  249 => 12,  242 => 11,  228 => 6,  203 => 154,  201 => 153,  133 => 88,  127 => 85,  121 => 82,  114 => 77,  112 => 73,  60 => 23,  57 => 11,  53 => 8,  51 => 6,  44 => 1,);
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
\t\t{% endblock %}

\t\t<style>

\t\t\tfooter {
\t\t\t\twidth: 100%;
\t\t\t\theight: 1px;
\t\t\t}
\t\t\thtml,
\t\t\tbody,
\t\t\tdiv {
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t\tfont-family: \"Helvetica Neue\", Helvetica, sans-serif;
\t\t\t}

\t\t\t#menu {

\t\t\t\tposition: relative;
\t\t\t\ttext-align: center;
\t\t\t\tmargin: 10px;
\t\t\t}

\t\t\t#menu-line {
\t\t\t\tdisplay: block;
\t\t\t\tposition: absolute;
\t\t\t\tleft: 50%;
\t\t\t\ttop: 25px;
\t\t\t\twidth: 0;
\t\t\t\theight: 5px;
\t\t\t\tbackground-color: black;
\t\t\t}

\t\t\tul {
\t\t\t\tz-index: 100;
\t\t\t}

\t\t\tul li {
\t\t\t\tdisplay: inline-block;
\t\t\t\tmargin-right: 30px;
\t\t\t}

\t\t\tul li a {
\t\t\t\tdisplay: block;
\t\t\t\tfont-size: 20px;
\t\t\t\ttext-transform: uppercase;
\t\t\t\ttext-decoration: none;
\t\t\t\tcolor: black;
\t\t\t}
\t\t</style>

\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}

\t\t{% endblock %}
\t</head>
\t<body>
\t\t<div id=\"menu\">
\t\t\t<ul id=\"menu-list\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_homepage') }}\">CyberCom</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_utilisateur') }}\">Mon compte</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_login') }}\">Connexion</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div id=\"menu-line\"></div>
\t\t</div>


\t\t<script>

\t\t\t\$(function () {

var currentIndex = 0;
var _offset = 10;

var \$menuLi = \$(\"#menu-list li\");
var \$line = \$(\"#menu-line\");

\$menuLi.on(\"click\", function () {

var _\$this = \$(this);

TweenMax.killTweensOf(\$line);

if (_\$this.index() > currentIndex) {

TweenMax.to(\$line, 0.5, {
css: {
width: (_\$this.position().left + _\$this.outerWidth()) - \$line.position().left + _offset / 2
},
onComplete: function () {
currentIndex = _\$this.index();
TweenMax.to(\$line, 0.5, {
css: {
left: _\$this.position().left - _offset / 2,
width: _\$this.outerWidth() + _offset
}
})
}
});

} else {

TweenMax.to(\$line, 0.5, {
css: {
left: _\$this.position().left - _offset / 2,
width: (\$line.position().left + \$line.outerWidth()) - _\$this.position().left + _offset / 2
},
onComplete: function () {
currentIndex = _\$this.index();
TweenMax.to(\$line, 0.5, {
css: {
width: _\$this.outerWidth() + _offset
}
})
}
});

}

});

});
\t\t</script>


\t\t{% block body %}{% endblock %}

\t\t<!-- Footer -->
\t\t<div class=\"container mt-5\">
\t\t\t<footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
\t\t\t\t<div class=\"col-md-4 d-flex align-items-center\">
\t\t\t\t\t<span class=\"me-1\" style=\"color: red;\">
\t\t\t\t\t\t<i class=\"fas fa-heart\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text-muted me-1\">Léa</span>
\t\t\t\t</div>


\t\t\t</footer>
\t\t</div>
\t\t<!-- End Footer -->

\t</body>
</html>
", "base.html.twig", "/Users/leadrouet/Desktop/ENSC/2A/S8/P2i/Cyberscope/templates/base.html.twig");
    }
}
