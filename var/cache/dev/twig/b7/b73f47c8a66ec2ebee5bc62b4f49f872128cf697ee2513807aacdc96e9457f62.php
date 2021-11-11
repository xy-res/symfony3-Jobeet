<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c90c635dc75b7be14e501a18a88de31e1da2920e2104a84ee79128cd18df06ce extends Twig_Template
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
        $__internal_c75f06182f149643ee6e980a1e392586d752768c15df023f7e3a986e442d1f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c75f06182f149643ee6e980a1e392586d752768c15df023f7e3a986e442d1f7c->enter($__internal_c75f06182f149643ee6e980a1e392586d752768c15df023f7e3a986e442d1f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b3e9836b5fda8639355ae55f801e7214349a19b380af0881142941f981950f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e9836b5fda8639355ae55f801e7214349a19b380af0881142941f981950f18->enter($__internal_b3e9836b5fda8639355ae55f801e7214349a19b380af0881142941f981950f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c75f06182f149643ee6e980a1e392586d752768c15df023f7e3a986e442d1f7c->leave($__internal_c75f06182f149643ee6e980a1e392586d752768c15df023f7e3a986e442d1f7c_prof);

        
        $__internal_b3e9836b5fda8639355ae55f801e7214349a19b380af0881142941f981950f18->leave($__internal_b3e9836b5fda8639355ae55f801e7214349a19b380af0881142941f981950f18_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b59dc1a6130ffd62d7362b66a0541fefe20c0fe7f74d368207220b23d8a2b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b59dc1a6130ffd62d7362b66a0541fefe20c0fe7f74d368207220b23d8a2b47->enter($__internal_6b59dc1a6130ffd62d7362b66a0541fefe20c0fe7f74d368207220b23d8a2b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_11d32ea8065057d5a9f941c4789602090b01bceeb53d4ec5f97d01b41c8c0a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d32ea8065057d5a9f941c4789602090b01bceeb53d4ec5f97d01b41c8c0a46->enter($__internal_11d32ea8065057d5a9f941c4789602090b01bceeb53d4ec5f97d01b41c8c0a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_11d32ea8065057d5a9f941c4789602090b01bceeb53d4ec5f97d01b41c8c0a46->leave($__internal_11d32ea8065057d5a9f941c4789602090b01bceeb53d4ec5f97d01b41c8c0a46_prof);

        
        $__internal_6b59dc1a6130ffd62d7362b66a0541fefe20c0fe7f74d368207220b23d8a2b47->leave($__internal_6b59dc1a6130ffd62d7362b66a0541fefe20c0fe7f74d368207220b23d8a2b47_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0be3677e2730974e47777463ced2dfb3780fa8d8bdc083c660e774417cd64dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be3677e2730974e47777463ced2dfb3780fa8d8bdc083c660e774417cd64dea->enter($__internal_0be3677e2730974e47777463ced2dfb3780fa8d8bdc083c660e774417cd64dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1decfeb47bf671b17637e38901276bda8382e2436c364687ce7db13d61d08a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1decfeb47bf671b17637e38901276bda8382e2436c364687ce7db13d61d08a61->enter($__internal_1decfeb47bf671b17637e38901276bda8382e2436c364687ce7db13d61d08a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1decfeb47bf671b17637e38901276bda8382e2436c364687ce7db13d61d08a61->leave($__internal_1decfeb47bf671b17637e38901276bda8382e2436c364687ce7db13d61d08a61_prof);

        
        $__internal_0be3677e2730974e47777463ced2dfb3780fa8d8bdc083c660e774417cd64dea->leave($__internal_0be3677e2730974e47777463ced2dfb3780fa8d8bdc083c660e774417cd64dea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_080f1b623c7c5c7937176fe768c5a1819b7701ceb9995dd784100d1e242f4a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080f1b623c7c5c7937176fe768c5a1819b7701ceb9995dd784100d1e242f4a4c->enter($__internal_080f1b623c7c5c7937176fe768c5a1819b7701ceb9995dd784100d1e242f4a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dde679b3f7bcba99bd024d0f9f0db2ecd768f5ab6823342c6bd3e1632ec1add9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde679b3f7bcba99bd024d0f9f0db2ecd768f5ab6823342c6bd3e1632ec1add9->enter($__internal_dde679b3f7bcba99bd024d0f9f0db2ecd768f5ab6823342c6bd3e1632ec1add9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dde679b3f7bcba99bd024d0f9f0db2ecd768f5ab6823342c6bd3e1632ec1add9->leave($__internal_dde679b3f7bcba99bd024d0f9f0db2ecd768f5ab6823342c6bd3e1632ec1add9_prof);

        
        $__internal_080f1b623c7c5c7937176fe768c5a1819b7701ceb9995dd784100d1e242f4a4c->leave($__internal_080f1b623c7c5c7937176fe768c5a1819b7701ceb9995dd784100d1e242f4a4c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
