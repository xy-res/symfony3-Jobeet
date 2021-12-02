<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2697a0a61a2dc96ac053fe80eb82e27923f19f0161161d0fa5f2aa5303e900bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5abd374846e7b2d42ffa8d914686fdd0a4ab3b1de004e9aee43728b5636caaab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5abd374846e7b2d42ffa8d914686fdd0a4ab3b1de004e9aee43728b5636caaab->enter($__internal_5abd374846e7b2d42ffa8d914686fdd0a4ab3b1de004e9aee43728b5636caaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_90d2527effc7e03ea2cef81431c679c994eb6287f07c00094155ad291cb270df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d2527effc7e03ea2cef81431c679c994eb6287f07c00094155ad291cb270df->enter($__internal_90d2527effc7e03ea2cef81431c679c994eb6287f07c00094155ad291cb270df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5abd374846e7b2d42ffa8d914686fdd0a4ab3b1de004e9aee43728b5636caaab->leave($__internal_5abd374846e7b2d42ffa8d914686fdd0a4ab3b1de004e9aee43728b5636caaab_prof);

        
        $__internal_90d2527effc7e03ea2cef81431c679c994eb6287f07c00094155ad291cb270df->leave($__internal_90d2527effc7e03ea2cef81431c679c994eb6287f07c00094155ad291cb270df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51c553ad63fea6870674e9cb04a771c5567c97f32f882297ec8f58bce6ca71f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c553ad63fea6870674e9cb04a771c5567c97f32f882297ec8f58bce6ca71f8->enter($__internal_51c553ad63fea6870674e9cb04a771c5567c97f32f882297ec8f58bce6ca71f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c102837afde6a2b5be2c75d3ffb490291a2e60b785015530867505a92d95f932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c102837afde6a2b5be2c75d3ffb490291a2e60b785015530867505a92d95f932->enter($__internal_c102837afde6a2b5be2c75d3ffb490291a2e60b785015530867505a92d95f932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c102837afde6a2b5be2c75d3ffb490291a2e60b785015530867505a92d95f932->leave($__internal_c102837afde6a2b5be2c75d3ffb490291a2e60b785015530867505a92d95f932_prof);

        
        $__internal_51c553ad63fea6870674e9cb04a771c5567c97f32f882297ec8f58bce6ca71f8->leave($__internal_51c553ad63fea6870674e9cb04a771c5567c97f32f882297ec8f58bce6ca71f8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0360239811f059d26d7abb690d0f6c4b7b6188019ac2b8e4a158ead7cd93661a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0360239811f059d26d7abb690d0f6c4b7b6188019ac2b8e4a158ead7cd93661a->enter($__internal_0360239811f059d26d7abb690d0f6c4b7b6188019ac2b8e4a158ead7cd93661a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_afe911a10bacbd03b1d3dfd8fe4abbfb54b3c907fad3173f3e19c85b4240f647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe911a10bacbd03b1d3dfd8fe4abbfb54b3c907fad3173f3e19c85b4240f647->enter($__internal_afe911a10bacbd03b1d3dfd8fe4abbfb54b3c907fad3173f3e19c85b4240f647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_afe911a10bacbd03b1d3dfd8fe4abbfb54b3c907fad3173f3e19c85b4240f647->leave($__internal_afe911a10bacbd03b1d3dfd8fe4abbfb54b3c907fad3173f3e19c85b4240f647_prof);

        
        $__internal_0360239811f059d26d7abb690d0f6c4b7b6188019ac2b8e4a158ead7cd93661a->leave($__internal_0360239811f059d26d7abb690d0f6c4b7b6188019ac2b8e4a158ead7cd93661a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47e9a49e2445207b97376058c7f36cd18be12f5d3b67c11ce4474d2448b4a5f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e9a49e2445207b97376058c7f36cd18be12f5d3b67c11ce4474d2448b4a5f4->enter($__internal_47e9a49e2445207b97376058c7f36cd18be12f5d3b67c11ce4474d2448b4a5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9cf0a414daf645ed2138b075e9655cd7c5d7e67af0b6b5e1b2b6501b9fab68e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf0a414daf645ed2138b075e9655cd7c5d7e67af0b6b5e1b2b6501b9fab68e0->enter($__internal_9cf0a414daf645ed2138b075e9655cd7c5d7e67af0b6b5e1b2b6501b9fab68e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9cf0a414daf645ed2138b075e9655cd7c5d7e67af0b6b5e1b2b6501b9fab68e0->leave($__internal_9cf0a414daf645ed2138b075e9655cd7c5d7e67af0b6b5e1b2b6501b9fab68e0_prof);

        
        $__internal_47e9a49e2445207b97376058c7f36cd18be12f5d3b67c11ce4474d2448b4a5f4->leave($__internal_47e9a49e2445207b97376058c7f36cd18be12f5d3b67c11ce4474d2448b4a5f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony3-Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
