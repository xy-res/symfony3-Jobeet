<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_1fe37e7333fa2302574a681f9e5e027d2256d8d096a297ce8f660b3bf5fbc0d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d32c537a5d16d992a900ef0721316022666f8bdbfb23037390c6f69f3e420e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32c537a5d16d992a900ef0721316022666f8bdbfb23037390c6f69f3e420e3e->enter($__internal_d32c537a5d16d992a900ef0721316022666f8bdbfb23037390c6f69f3e420e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_05376fcf4d314d2c64e4ee9a49dababfd630b22e92d69d0accb0c6d186957ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05376fcf4d314d2c64e4ee9a49dababfd630b22e92d69d0accb0c6d186957ac4->enter($__internal_05376fcf4d314d2c64e4ee9a49dababfd630b22e92d69d0accb0c6d186957ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d32c537a5d16d992a900ef0721316022666f8bdbfb23037390c6f69f3e420e3e->leave($__internal_d32c537a5d16d992a900ef0721316022666f8bdbfb23037390c6f69f3e420e3e_prof);

        
        $__internal_05376fcf4d314d2c64e4ee9a49dababfd630b22e92d69d0accb0c6d186957ac4->leave($__internal_05376fcf4d314d2c64e4ee9a49dababfd630b22e92d69d0accb0c6d186957ac4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba45252a3c59a6cb21bef7aeda245dd8caa4bbfdec04c7c6310a38b3a632c001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba45252a3c59a6cb21bef7aeda245dd8caa4bbfdec04c7c6310a38b3a632c001->enter($__internal_ba45252a3c59a6cb21bef7aeda245dd8caa4bbfdec04c7c6310a38b3a632c001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ca9cb7cd901ab8256c846a203a98301dbf0bb5b2d3f45050b381cc395ea6658c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9cb7cd901ab8256c846a203a98301dbf0bb5b2d3f45050b381cc395ea6658c->enter($__internal_ca9cb7cd901ab8256c846a203a98301dbf0bb5b2d3f45050b381cc395ea6658c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ca9cb7cd901ab8256c846a203a98301dbf0bb5b2d3f45050b381cc395ea6658c->leave($__internal_ca9cb7cd901ab8256c846a203a98301dbf0bb5b2d3f45050b381cc395ea6658c_prof);

        
        $__internal_ba45252a3c59a6cb21bef7aeda245dd8caa4bbfdec04c7c6310a38b3a632c001->leave($__internal_ba45252a3c59a6cb21bef7aeda245dd8caa4bbfdec04c7c6310a38b3a632c001_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_99b08fe451d32ca9af8120885eebcdbacf961247ff998ea8cfbdc0c7329d779e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b08fe451d32ca9af8120885eebcdbacf961247ff998ea8cfbdc0c7329d779e->enter($__internal_99b08fe451d32ca9af8120885eebcdbacf961247ff998ea8cfbdc0c7329d779e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0732fd4c02f060a1832fece64a45ec9c48edb412502a362251fbae21f345b976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0732fd4c02f060a1832fece64a45ec9c48edb412502a362251fbae21f345b976->enter($__internal_0732fd4c02f060a1832fece64a45ec9c48edb412502a362251fbae21f345b976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_0732fd4c02f060a1832fece64a45ec9c48edb412502a362251fbae21f345b976->leave($__internal_0732fd4c02f060a1832fece64a45ec9c48edb412502a362251fbae21f345b976_prof);

        
        $__internal_99b08fe451d32ca9af8120885eebcdbacf961247ff998ea8cfbdc0c7329d779e->leave($__internal_99b08fe451d32ca9af8120885eebcdbacf961247ff998ea8cfbdc0c7329d779e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
