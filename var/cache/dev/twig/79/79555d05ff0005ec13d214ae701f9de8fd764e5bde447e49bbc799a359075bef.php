<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ce5e298ea7c566ba912d0cb4d5695f690b63e95c6189996a45de6c3ac1516709 extends Twig_Template
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
        $__internal_adab71df65bc7a5cf49f19256707c15a230d38f6968594c1735bd85b9a7d02ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adab71df65bc7a5cf49f19256707c15a230d38f6968594c1735bd85b9a7d02ff->enter($__internal_adab71df65bc7a5cf49f19256707c15a230d38f6968594c1735bd85b9a7d02ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_70f616a3338addb8dcbad4b841f4dd219fa53dc6f121983dc0c93bd463951bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f616a3338addb8dcbad4b841f4dd219fa53dc6f121983dc0c93bd463951bc8->enter($__internal_70f616a3338addb8dcbad4b841f4dd219fa53dc6f121983dc0c93bd463951bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adab71df65bc7a5cf49f19256707c15a230d38f6968594c1735bd85b9a7d02ff->leave($__internal_adab71df65bc7a5cf49f19256707c15a230d38f6968594c1735bd85b9a7d02ff_prof);

        
        $__internal_70f616a3338addb8dcbad4b841f4dd219fa53dc6f121983dc0c93bd463951bc8->leave($__internal_70f616a3338addb8dcbad4b841f4dd219fa53dc6f121983dc0c93bd463951bc8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd5e9b500e8a2a5530049857a70265059d2b48701bc05299e245fd8ac7c46339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5e9b500e8a2a5530049857a70265059d2b48701bc05299e245fd8ac7c46339->enter($__internal_dd5e9b500e8a2a5530049857a70265059d2b48701bc05299e245fd8ac7c46339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0731187dbbd28506bccbe23a5cf7e928675ec6e46e5a136b048fc999ea956da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0731187dbbd28506bccbe23a5cf7e928675ec6e46e5a136b048fc999ea956da8->enter($__internal_0731187dbbd28506bccbe23a5cf7e928675ec6e46e5a136b048fc999ea956da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0731187dbbd28506bccbe23a5cf7e928675ec6e46e5a136b048fc999ea956da8->leave($__internal_0731187dbbd28506bccbe23a5cf7e928675ec6e46e5a136b048fc999ea956da8_prof);

        
        $__internal_dd5e9b500e8a2a5530049857a70265059d2b48701bc05299e245fd8ac7c46339->leave($__internal_dd5e9b500e8a2a5530049857a70265059d2b48701bc05299e245fd8ac7c46339_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a3f9f4e108db39b5b5c9d8f9a0c1f767c800487ca7f43783fbb3d59a2f50cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3f9f4e108db39b5b5c9d8f9a0c1f767c800487ca7f43783fbb3d59a2f50cda->enter($__internal_0a3f9f4e108db39b5b5c9d8f9a0c1f767c800487ca7f43783fbb3d59a2f50cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_056b1034ed2d190d11ab55c979952c3c6913fadbd2b8303fd4bccd224eadb95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056b1034ed2d190d11ab55c979952c3c6913fadbd2b8303fd4bccd224eadb95e->enter($__internal_056b1034ed2d190d11ab55c979952c3c6913fadbd2b8303fd4bccd224eadb95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_056b1034ed2d190d11ab55c979952c3c6913fadbd2b8303fd4bccd224eadb95e->leave($__internal_056b1034ed2d190d11ab55c979952c3c6913fadbd2b8303fd4bccd224eadb95e_prof);

        
        $__internal_0a3f9f4e108db39b5b5c9d8f9a0c1f767c800487ca7f43783fbb3d59a2f50cda->leave($__internal_0a3f9f4e108db39b5b5c9d8f9a0c1f767c800487ca7f43783fbb3d59a2f50cda_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c52cff582284cc274e6bafd23749cb128822c326052891ca52aa687f9489a0f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52cff582284cc274e6bafd23749cb128822c326052891ca52aa687f9489a0f2->enter($__internal_c52cff582284cc274e6bafd23749cb128822c326052891ca52aa687f9489a0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f1202b7091f25c0b153f9b713ce816656e991e6f74d5b3c15d8dbda53cd14f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1202b7091f25c0b153f9b713ce816656e991e6f74d5b3c15d8dbda53cd14f78->enter($__internal_f1202b7091f25c0b153f9b713ce816656e991e6f74d5b3c15d8dbda53cd14f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f1202b7091f25c0b153f9b713ce816656e991e6f74d5b3c15d8dbda53cd14f78->leave($__internal_f1202b7091f25c0b153f9b713ce816656e991e6f74d5b3c15d8dbda53cd14f78_prof);

        
        $__internal_c52cff582284cc274e6bafd23749cb128822c326052891ca52aa687f9489a0f2->leave($__internal_c52cff582284cc274e6bafd23749cb128822c326052891ca52aa687f9489a0f2_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
