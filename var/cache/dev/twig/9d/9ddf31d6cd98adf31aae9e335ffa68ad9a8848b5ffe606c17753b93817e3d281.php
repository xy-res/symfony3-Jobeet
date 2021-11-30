<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_704e012d6d33d6eb9dde2044ae5787141640c48ca6d3c58baf387020732fd61a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49e6fb8f57a849164046ed7cc5472aed6d6325d86a4bff669eaa75819a5c421a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e6fb8f57a849164046ed7cc5472aed6d6325d86a4bff669eaa75819a5c421a->enter($__internal_49e6fb8f57a849164046ed7cc5472aed6d6325d86a4bff669eaa75819a5c421a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3adc9962aa10a93f5f163e9d81c17c7e3dc15bc14bd819cb4cd35e7290cb7e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3adc9962aa10a93f5f163e9d81c17c7e3dc15bc14bd819cb4cd35e7290cb7e08->enter($__internal_3adc9962aa10a93f5f163e9d81c17c7e3dc15bc14bd819cb4cd35e7290cb7e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49e6fb8f57a849164046ed7cc5472aed6d6325d86a4bff669eaa75819a5c421a->leave($__internal_49e6fb8f57a849164046ed7cc5472aed6d6325d86a4bff669eaa75819a5c421a_prof);

        
        $__internal_3adc9962aa10a93f5f163e9d81c17c7e3dc15bc14bd819cb4cd35e7290cb7e08->leave($__internal_3adc9962aa10a93f5f163e9d81c17c7e3dc15bc14bd819cb4cd35e7290cb7e08_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1fcf4a83cdc12a46ff9e82a5f0edd98f8826a0ce2330fe47cdf6c518a7f7c254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fcf4a83cdc12a46ff9e82a5f0edd98f8826a0ce2330fe47cdf6c518a7f7c254->enter($__internal_1fcf4a83cdc12a46ff9e82a5f0edd98f8826a0ce2330fe47cdf6c518a7f7c254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9aea8b7e1085a14f716d20324749942bfa5329ced126b055f099d413bc7eca4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aea8b7e1085a14f716d20324749942bfa5329ced126b055f099d413bc7eca4f->enter($__internal_9aea8b7e1085a14f716d20324749942bfa5329ced126b055f099d413bc7eca4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9aea8b7e1085a14f716d20324749942bfa5329ced126b055f099d413bc7eca4f->leave($__internal_9aea8b7e1085a14f716d20324749942bfa5329ced126b055f099d413bc7eca4f_prof);

        
        $__internal_1fcf4a83cdc12a46ff9e82a5f0edd98f8826a0ce2330fe47cdf6c518a7f7c254->leave($__internal_1fcf4a83cdc12a46ff9e82a5f0edd98f8826a0ce2330fe47cdf6c518a7f7c254_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0691f1a4d5147356dd9edb24881ca15ae043593608f938da976c4fe97fa43d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0691f1a4d5147356dd9edb24881ca15ae043593608f938da976c4fe97fa43d75->enter($__internal_0691f1a4d5147356dd9edb24881ca15ae043593608f938da976c4fe97fa43d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_96e1c0c6cdf9588a61db72f232d50c3b2e9440533932219df6a9c8e69acdd0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e1c0c6cdf9588a61db72f232d50c3b2e9440533932219df6a9c8e69acdd0f2->enter($__internal_96e1c0c6cdf9588a61db72f232d50c3b2e9440533932219df6a9c8e69acdd0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_96e1c0c6cdf9588a61db72f232d50c3b2e9440533932219df6a9c8e69acdd0f2->leave($__internal_96e1c0c6cdf9588a61db72f232d50c3b2e9440533932219df6a9c8e69acdd0f2_prof);

        
        $__internal_0691f1a4d5147356dd9edb24881ca15ae043593608f938da976c4fe97fa43d75->leave($__internal_0691f1a4d5147356dd9edb24881ca15ae043593608f938da976c4fe97fa43d75_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0455a12fd670a9ace9ecd2414c44ee1d9bba6ecf475ec3b1f820547ae87562c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0455a12fd670a9ace9ecd2414c44ee1d9bba6ecf475ec3b1f820547ae87562c->enter($__internal_c0455a12fd670a9ace9ecd2414c44ee1d9bba6ecf475ec3b1f820547ae87562c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c32003eecb98ba7d6941fbb9c6e98b8499126edea1fdc314e66d6fbc972fcda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32003eecb98ba7d6941fbb9c6e98b8499126edea1fdc314e66d6fbc972fcda3->enter($__internal_c32003eecb98ba7d6941fbb9c6e98b8499126edea1fdc314e66d6fbc972fcda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c32003eecb98ba7d6941fbb9c6e98b8499126edea1fdc314e66d6fbc972fcda3->leave($__internal_c32003eecb98ba7d6941fbb9c6e98b8499126edea1fdc314e66d6fbc972fcda3_prof);

        
        $__internal_c0455a12fd670a9ace9ecd2414c44ee1d9bba6ecf475ec3b1f820547ae87562c->leave($__internal_c0455a12fd670a9ace9ecd2414c44ee1d9bba6ecf475ec3b1f820547ae87562c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony3-Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
