<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_6dd5fde8c04f95064acde6414427ce19f673a4f093528a1d70952c8ae57addfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f280d46093ef73b69f4c65e8160db99653413ccb53886e092f86570f036e0fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f280d46093ef73b69f4c65e8160db99653413ccb53886e092f86570f036e0fa->enter($__internal_6f280d46093ef73b69f4c65e8160db99653413ccb53886e092f86570f036e0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_b52cca6dc2e1a419df68d6a5ea6c7810694d357ca14439765f281f8eb9518f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52cca6dc2e1a419df68d6a5ea6c7810694d357ca14439765f281f8eb9518f90->enter($__internal_b52cca6dc2e1a419df68d6a5ea6c7810694d357ca14439765f281f8eb9518f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f280d46093ef73b69f4c65e8160db99653413ccb53886e092f86570f036e0fa->leave($__internal_6f280d46093ef73b69f4c65e8160db99653413ccb53886e092f86570f036e0fa_prof);

        
        $__internal_b52cca6dc2e1a419df68d6a5ea6c7810694d357ca14439765f281f8eb9518f90->leave($__internal_b52cca6dc2e1a419df68d6a5ea6c7810694d357ca14439765f281f8eb9518f90_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4ed0f7e18e517bb78550cece3fb476345a0b557ef3bbc097a326e9e772f45676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed0f7e18e517bb78550cece3fb476345a0b557ef3bbc097a326e9e772f45676->enter($__internal_4ed0f7e18e517bb78550cece3fb476345a0b557ef3bbc097a326e9e772f45676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_13e4203b09359fc6d9c6eab6f892b2160346c89507bc87493ecc727ef99d24fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e4203b09359fc6d9c6eab6f892b2160346c89507bc87493ecc727ef99d24fa->enter($__internal_13e4203b09359fc6d9c6eab6f892b2160346c89507bc87493ecc727ef99d24fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_13e4203b09359fc6d9c6eab6f892b2160346c89507bc87493ecc727ef99d24fa->leave($__internal_13e4203b09359fc6d9c6eab6f892b2160346c89507bc87493ecc727ef99d24fa_prof);

        
        $__internal_4ed0f7e18e517bb78550cece3fb476345a0b557ef3bbc097a326e9e772f45676->leave($__internal_4ed0f7e18e517bb78550cece3fb476345a0b557ef3bbc097a326e9e772f45676_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_61b8f1511f439ba5ee7a49b62dc86a71a2386d996c0cc643cfe9154e89ce2fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b8f1511f439ba5ee7a49b62dc86a71a2386d996c0cc643cfe9154e89ce2fa5->enter($__internal_61b8f1511f439ba5ee7a49b62dc86a71a2386d996c0cc643cfe9154e89ce2fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c69930b5f741e9da6962aac6d52c47256d69accd199abbf7d8d12f71ae0f66ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69930b5f741e9da6962aac6d52c47256d69accd199abbf7d8d12f71ae0f66ce->enter($__internal_c69930b5f741e9da6962aac6d52c47256d69accd199abbf7d8d12f71ae0f66ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c69930b5f741e9da6962aac6d52c47256d69accd199abbf7d8d12f71ae0f66ce->leave($__internal_c69930b5f741e9da6962aac6d52c47256d69accd199abbf7d8d12f71ae0f66ce_prof);

        
        $__internal_61b8f1511f439ba5ee7a49b62dc86a71a2386d996c0cc643cfe9154e89ce2fa5->leave($__internal_61b8f1511f439ba5ee7a49b62dc86a71a2386d996c0cc643cfe9154e89ce2fa5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
