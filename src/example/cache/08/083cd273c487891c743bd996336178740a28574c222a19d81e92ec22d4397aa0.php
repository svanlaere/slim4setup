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

/* html.twig */
class __TwigTemplate_286ac8ea7cf3b3ab5081d7357a63179a70a9addc9316866cd328d487919f6b6d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'contents' => [$this, 'block_contents'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"nl\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t\t<!-- Bootstrap CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->fullUrlFor("home"), "html", null, true);
        echo "assets/css/bootstrap.min.css\">

\t\t<title>Home</title>
\t</head>

\t<body>

\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        echo "\">Slim 4 Setup</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t<li class=\"nav-item";
        // line 26
        if ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("home")) {
            echo " active";
        }
        echo "\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t\t";
        // line 29
        if ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("home")) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item";
        // line 34
        if ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("hello", ["name" => "Slim"])) {
            echo " active";
        }
        echo "\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("hello", ["name" => "Slim"]), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\tHello Slim
\t\t\t\t\t\t\t\t";
        // line 37
        if ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("hello", ["name" => "Slim"])) {
            // line 38
            echo "\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<form class=\"form-inline my-2 my-lg-0\">
\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

\t\t<div class=\"container mt-4\"> ";
        // line 54
        $this->displayBlock('contents', $context, $blocks);
        // line 55
        echo "\t\t\t</div>

\t\t\t<!-- Optional JavaScript -->
\t\t\t<!-- jQuery first, then Popper.js, then Bootstrap JS -->
\t\t\t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->fullUrlFor("home"), "html", null, true);
        echo "assets/js/jquery.slim.min.js\"></script>
\t\t\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->fullUrlFor("home"), "html", null, true);
        echo "assets/js/popper.min.js\"></script>
\t\t\t<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->fullUrlFor("home"), "html", null, true);
        echo "assets/js/bootstrap.min.js\"></script>
\t\t\t";
        // line 62
        $this->displayBlock('scripts', $context, $blocks);
        // line 63
        echo "\t\t</body>
\t</html>
";
    }

    // line 54
    public function block_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 62
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 62,  154 => 54,  148 => 63,  146 => 62,  142 => 61,  138 => 60,  134 => 59,  128 => 55,  126 => 54,  110 => 40,  106 => 38,  104 => 37,  99 => 35,  93 => 34,  89 => 32,  85 => 30,  83 => 29,  78 => 27,  72 => 26,  62 => 19,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"nl\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t\t<!-- Bootstrap CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ full_url_for('home') }}assets/css/bootstrap.min.css\">

\t\t<title>Home</title>
\t</head>

\t<body>

\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ url_for('home') }}\">Slim 4 Setup</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t<li class=\"nav-item{% if is_current_url('home') %} active{% endif %}\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ url_for('home') }}\">
\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t\t{% if is_current_url('home') %}
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item{% if is_current_url('hello', {name: 'Slim'}) %} active{% endif %}\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ url_for('hello', {name: 'Slim'}) }}\">
\t\t\t\t\t\t\t\tHello Slim
\t\t\t\t\t\t\t\t{% if is_current_url('hello', {name: 'Slim'}) %}
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<form class=\"form-inline my-2 my-lg-0\">
\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

\t\t<div class=\"container mt-4\"> {% block contents %}{% endblock %}
\t\t\t</div>

\t\t\t<!-- Optional JavaScript -->
\t\t\t<!-- jQuery first, then Popper.js, then Bootstrap JS -->
\t\t\t<script src=\"{{ full_url_for('home') }}assets/js/jquery.slim.min.js\"></script>
\t\t\t<script src=\"{{ full_url_for('home') }}assets/js/popper.min.js\"></script>
\t\t\t<script src=\"{{ full_url_for('home') }}assets/js/bootstrap.min.js\"></script>
\t\t\t{% block scripts %}{% endblock %}
\t\t</body>
\t</html>
", "html.twig", "C:\\laragon\\www\\slim4setup\\src\\example\\views\\html.twig");
    }
}
