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

/* home.twig */
class __TwigTemplate_9781d4e104c4bfe23251628c99787be897829396931b07d14c0722c33b9650be extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contents' => [$this, 'block_contents'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("html.twig", "home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        if (((isset($context["name"]) || array_key_exists("name", $context)) &&  !(null === ($context["name"] ?? null)))) {
            // line 4
            echo "<h1>Hello ";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</h1>
";
        }
        // line 6
        if ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("home")) {
            // line 7
            echo "\t<div class=\"table-responsive\">
\t\t<table class=\"table table-sm\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Code</th>
\t\t\t\t\t<th scope=\"col\">Result</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>url_for('hello', {'name': 'foo'})</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("hello", ["name" => "foo"]), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>full_url_for('home')</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->fullUrlFor("home"), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>is_current_url('home')</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 37
            echo (($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("home")) ? ("TRUE") : ("FALSE"));
            echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>current_url()</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getCurrentUrl(), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>get_uri().scheme</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getUri(), "scheme", [], "any", false, false, false, 53), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
    </div>
\t";
            // line 59
            if (((isset($context["csrf"]) || array_key_exists("csrf", $context)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "value", [], "any", false, false, false, 59)))) {
                // line 60
                echo "    <h2 class=\"mt-4\">
\t\tCSRF Twig extension
    </h2>
    <pre>
        &lt;input type=\"hidden\" name=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "keys", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "name", [], "any", false, false, false, 64), "html", null, true);
                echo "\">
        &lt;input type=\"hidden\" name=\"";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "keys", [], "any", false, false, false, 65), "value", [], "any", false, false, false, 65), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "value", [], "any", false, false, false, 65), "html", null, true);
                echo "\">
\t</pre>
\t";
            }
            // line 68
            echo "\t";
        }
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 68,  143 => 65,  137 => 64,  131 => 60,  129 => 59,  120 => 53,  109 => 45,  98 => 37,  87 => 29,  76 => 21,  60 => 7,  58 => 6,  52 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'html.twig' %}
{% block contents %}
{% if name is defined and name is not null %}
<h1>Hello {{ name }}</h1>
{% endif %}
{% if is_current_url('home')  %}
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-sm\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Code</th>
\t\t\t\t\t<th scope=\"col\">Result</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>url_for('hello', {'name': 'foo'})</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ url_for('hello', {'name': 'foo'}) }}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>full_url_for('home')</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ full_url_for('home') }}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>is_current_url('home')</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ is_current_url('home') ? 'TRUE' : 'FALSE' }}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>current_url()</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ current_url() }}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>get_uri().scheme</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ get_uri().scheme }}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
    </div>
\t{% if csrf is defined and csrf.value is not null %}
    <h2 class=\"mt-4\">
\t\tCSRF Twig extension
    </h2>
    <pre>
        &lt;input type=\"hidden\" name=\"{{csrf.keys.name}}\" value=\"{{csrf.name}}\">
        &lt;input type=\"hidden\" name=\"{{csrf.keys.value}}\" value=\"{{csrf.value}}\">
\t</pre>
\t{% endif %}
\t{% endif %}
{% endblock %}", "home.twig", "C:\\laragon\\www\\slim4setup\\src\\example\\views\\home.twig");
    }
}
