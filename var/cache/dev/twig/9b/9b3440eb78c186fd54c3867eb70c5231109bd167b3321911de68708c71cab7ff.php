<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_39522ff2f11238a43a458b542059abf4b1c583f17a738cff1783dad86ba997a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_cd2fe4cc19339b4a82123df1b4aacab74169185adf492503e2b3d7a99af9e407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2fe4cc19339b4a82123df1b4aacab74169185adf492503e2b3d7a99af9e407->enter($__internal_cd2fe4cc19339b4a82123df1b4aacab74169185adf492503e2b3d7a99af9e407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_2bbf6a0483671ae15242ac2fce73503c3b72d182981a70b764ed58c15f98c9e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbf6a0483671ae15242ac2fce73503c3b72d182981a70b764ed58c15f98c9e7->enter($__internal_2bbf6a0483671ae15242ac2fce73503c3b72d182981a70b764ed58c15f98c9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd2fe4cc19339b4a82123df1b4aacab74169185adf492503e2b3d7a99af9e407->leave($__internal_cd2fe4cc19339b4a82123df1b4aacab74169185adf492503e2b3d7a99af9e407_prof);

        
        $__internal_2bbf6a0483671ae15242ac2fce73503c3b72d182981a70b764ed58c15f98c9e7->leave($__internal_2bbf6a0483671ae15242ac2fce73503c3b72d182981a70b764ed58c15f98c9e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_558846fe1968a9b381b5ab3beb3c9693082eba87031aad70d9647eac0460e264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558846fe1968a9b381b5ab3beb3c9693082eba87031aad70d9647eac0460e264->enter($__internal_558846fe1968a9b381b5ab3beb3c9693082eba87031aad70d9647eac0460e264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_99e14670763fd9c43b5380a0e7377b266fef3236d2502c1d7348886acd1c29b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e14670763fd9c43b5380a0e7377b266fef3236d2502c1d7348886acd1c29b6->enter($__internal_99e14670763fd9c43b5380a0e7377b266fef3236d2502c1d7348886acd1c29b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_99e14670763fd9c43b5380a0e7377b266fef3236d2502c1d7348886acd1c29b6->leave($__internal_99e14670763fd9c43b5380a0e7377b266fef3236d2502c1d7348886acd1c29b6_prof);

        
        $__internal_558846fe1968a9b381b5ab3beb3c9693082eba87031aad70d9647eac0460e264->leave($__internal_558846fe1968a9b381b5ab3beb3c9693082eba87031aad70d9647eac0460e264_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3ec4fc081a222f632990e6b7ac863347af030a61157ef1c4ba72cf515d90be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ec4fc081a222f632990e6b7ac863347af030a61157ef1c4ba72cf515d90be3->enter($__internal_d3ec4fc081a222f632990e6b7ac863347af030a61157ef1c4ba72cf515d90be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5339b894a5cfa54f37448f11d636bb0cea989ac1d4cdf0804d088cc5f7502518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5339b894a5cfa54f37448f11d636bb0cea989ac1d4cdf0804d088cc5f7502518->enter($__internal_5339b894a5cfa54f37448f11d636bb0cea989ac1d4cdf0804d088cc5f7502518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5339b894a5cfa54f37448f11d636bb0cea989ac1d4cdf0804d088cc5f7502518->leave($__internal_5339b894a5cfa54f37448f11d636bb0cea989ac1d4cdf0804d088cc5f7502518_prof);

        
        $__internal_d3ec4fc081a222f632990e6b7ac863347af030a61157ef1c4ba72cf515d90be3->leave($__internal_d3ec4fc081a222f632990e6b7ac863347af030a61157ef1c4ba72cf515d90be3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
