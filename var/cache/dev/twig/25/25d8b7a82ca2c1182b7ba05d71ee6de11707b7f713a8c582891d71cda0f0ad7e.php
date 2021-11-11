<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_bcc2518aea8cb9ab80d94fdf8c1fb361d7b01c3da59b314863ad98fc79d6f4b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_ce33fc8fb1dc1cbee0af885ca4ae540fd6160d27a823ad8ffdef1268796a6215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce33fc8fb1dc1cbee0af885ca4ae540fd6160d27a823ad8ffdef1268796a6215->enter($__internal_ce33fc8fb1dc1cbee0af885ca4ae540fd6160d27a823ad8ffdef1268796a6215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_c6f09ba8d1b3012f9cdd879e63325c65e43019ca628ccae9f805548fae44e99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f09ba8d1b3012f9cdd879e63325c65e43019ca628ccae9f805548fae44e99d->enter($__internal_c6f09ba8d1b3012f9cdd879e63325c65e43019ca628ccae9f805548fae44e99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce33fc8fb1dc1cbee0af885ca4ae540fd6160d27a823ad8ffdef1268796a6215->leave($__internal_ce33fc8fb1dc1cbee0af885ca4ae540fd6160d27a823ad8ffdef1268796a6215_prof);

        
        $__internal_c6f09ba8d1b3012f9cdd879e63325c65e43019ca628ccae9f805548fae44e99d->leave($__internal_c6f09ba8d1b3012f9cdd879e63325c65e43019ca628ccae9f805548fae44e99d_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_96c1b4c4ffd128e57238021796ea8935802dfb713e6e257098c657d8fc8e60eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c1b4c4ffd128e57238021796ea8935802dfb713e6e257098c657d8fc8e60eb->enter($__internal_96c1b4c4ffd128e57238021796ea8935802dfb713e6e257098c657d8fc8e60eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_73720d494e33f168f0ad508f90bd63452e533c3e1c101557af0eb69c43eb58df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73720d494e33f168f0ad508f90bd63452e533c3e1c101557af0eb69c43eb58df->enter($__internal_73720d494e33f168f0ad508f90bd63452e533c3e1c101557af0eb69c43eb58df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_73720d494e33f168f0ad508f90bd63452e533c3e1c101557af0eb69c43eb58df->leave($__internal_73720d494e33f168f0ad508f90bd63452e533c3e1c101557af0eb69c43eb58df_prof);

        
        $__internal_96c1b4c4ffd128e57238021796ea8935802dfb713e6e257098c657d8fc8e60eb->leave($__internal_96c1b4c4ffd128e57238021796ea8935802dfb713e6e257098c657d8fc8e60eb_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6386077fa6f0258a9cf134da5810f6d0929f5cbfff08c4181bc12c7988f2f2bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6386077fa6f0258a9cf134da5810f6d0929f5cbfff08c4181bc12c7988f2f2bf->enter($__internal_6386077fa6f0258a9cf134da5810f6d0929f5cbfff08c4181bc12c7988f2f2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0709d6b967994fd2aa7b7d2d4b7da777f9de8cadf74ce6334fb75767e76013d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0709d6b967994fd2aa7b7d2d4b7da777f9de8cadf74ce6334fb75767e76013d3->enter($__internal_0709d6b967994fd2aa7b7d2d4b7da777f9de8cadf74ce6334fb75767e76013d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0709d6b967994fd2aa7b7d2d4b7da777f9de8cadf74ce6334fb75767e76013d3->leave($__internal_0709d6b967994fd2aa7b7d2d4b7da777f9de8cadf74ce6334fb75767e76013d3_prof);

        
        $__internal_6386077fa6f0258a9cf134da5810f6d0929f5cbfff08c4181bc12c7988f2f2bf->leave($__internal_6386077fa6f0258a9cf134da5810f6d0929f5cbfff08c4181bc12c7988f2f2bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
