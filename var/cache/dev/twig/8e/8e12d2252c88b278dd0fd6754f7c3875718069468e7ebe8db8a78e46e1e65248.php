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
        $__internal_ae1d376aa337a1e8c908b924c8e9b363af1a4b0902ae56366edcefd13d77c018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1d376aa337a1e8c908b924c8e9b363af1a4b0902ae56366edcefd13d77c018->enter($__internal_ae1d376aa337a1e8c908b924c8e9b363af1a4b0902ae56366edcefd13d77c018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4ef5e218e876e467229677a6eee704f8818e29ad8c2f578e90172d2d63054a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef5e218e876e467229677a6eee704f8818e29ad8c2f578e90172d2d63054a9c->enter($__internal_4ef5e218e876e467229677a6eee704f8818e29ad8c2f578e90172d2d63054a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae1d376aa337a1e8c908b924c8e9b363af1a4b0902ae56366edcefd13d77c018->leave($__internal_ae1d376aa337a1e8c908b924c8e9b363af1a4b0902ae56366edcefd13d77c018_prof);

        
        $__internal_4ef5e218e876e467229677a6eee704f8818e29ad8c2f578e90172d2d63054a9c->leave($__internal_4ef5e218e876e467229677a6eee704f8818e29ad8c2f578e90172d2d63054a9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a36ae1823e7d9b05418199ae34a5944a6a24ae01f6337e4b305f76ca66039791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36ae1823e7d9b05418199ae34a5944a6a24ae01f6337e4b305f76ca66039791->enter($__internal_a36ae1823e7d9b05418199ae34a5944a6a24ae01f6337e4b305f76ca66039791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4b9ea44db9b29bc6ecac2ecb4c566829bc1827fb83fb4b9d3d1052b6a142ab01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9ea44db9b29bc6ecac2ecb4c566829bc1827fb83fb4b9d3d1052b6a142ab01->enter($__internal_4b9ea44db9b29bc6ecac2ecb4c566829bc1827fb83fb4b9d3d1052b6a142ab01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4b9ea44db9b29bc6ecac2ecb4c566829bc1827fb83fb4b9d3d1052b6a142ab01->leave($__internal_4b9ea44db9b29bc6ecac2ecb4c566829bc1827fb83fb4b9d3d1052b6a142ab01_prof);

        
        $__internal_a36ae1823e7d9b05418199ae34a5944a6a24ae01f6337e4b305f76ca66039791->leave($__internal_a36ae1823e7d9b05418199ae34a5944a6a24ae01f6337e4b305f76ca66039791_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9fd966e72b689a7cc795067d2e7ebf33ab26c822ba7927f89f51eb0059e715f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd966e72b689a7cc795067d2e7ebf33ab26c822ba7927f89f51eb0059e715f4->enter($__internal_9fd966e72b689a7cc795067d2e7ebf33ab26c822ba7927f89f51eb0059e715f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a638713970d034d139ca901fd48f7e4817773059344b94693a58fcb4f230121d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a638713970d034d139ca901fd48f7e4817773059344b94693a58fcb4f230121d->enter($__internal_a638713970d034d139ca901fd48f7e4817773059344b94693a58fcb4f230121d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a638713970d034d139ca901fd48f7e4817773059344b94693a58fcb4f230121d->leave($__internal_a638713970d034d139ca901fd48f7e4817773059344b94693a58fcb4f230121d_prof);

        
        $__internal_9fd966e72b689a7cc795067d2e7ebf33ab26c822ba7927f89f51eb0059e715f4->leave($__internal_9fd966e72b689a7cc795067d2e7ebf33ab26c822ba7927f89f51eb0059e715f4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_627ea20ac7868c967d94aba16f3934b2959720429f46dab539d518fe39dccb14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627ea20ac7868c967d94aba16f3934b2959720429f46dab539d518fe39dccb14->enter($__internal_627ea20ac7868c967d94aba16f3934b2959720429f46dab539d518fe39dccb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c64892bb85c62398559b04d924c712c372db4950379f8023f5a8c4fbaad3c60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64892bb85c62398559b04d924c712c372db4950379f8023f5a8c4fbaad3c60c->enter($__internal_c64892bb85c62398559b04d924c712c372db4950379f8023f5a8c4fbaad3c60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c64892bb85c62398559b04d924c712c372db4950379f8023f5a8c4fbaad3c60c->leave($__internal_c64892bb85c62398559b04d924c712c372db4950379f8023f5a8c4fbaad3c60c_prof);

        
        $__internal_627ea20ac7868c967d94aba16f3934b2959720429f46dab539d518fe39dccb14->leave($__internal_627ea20ac7868c967d94aba16f3934b2959720429f46dab539d518fe39dccb14_prof);

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
