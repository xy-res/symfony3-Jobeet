<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_03f16f7935efc3b1571bcde34bde9ba802edc11a2c7439350b6aca1ef39ef8a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5b0e7f0caf5c5f80b50d5e9aa26b48bcbf0fb902bae07d0c45b4ec39c267ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b0e7f0caf5c5f80b50d5e9aa26b48bcbf0fb902bae07d0c45b4ec39c267ec0->enter($__internal_f5b0e7f0caf5c5f80b50d5e9aa26b48bcbf0fb902bae07d0c45b4ec39c267ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_84fba150224b2ce7fb684a8c974ea798d5e62313a839f1bcb86d7481c2a6605c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fba150224b2ce7fb684a8c974ea798d5e62313a839f1bcb86d7481c2a6605c->enter($__internal_84fba150224b2ce7fb684a8c974ea798d5e62313a839f1bcb86d7481c2a6605c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5b0e7f0caf5c5f80b50d5e9aa26b48bcbf0fb902bae07d0c45b4ec39c267ec0->leave($__internal_f5b0e7f0caf5c5f80b50d5e9aa26b48bcbf0fb902bae07d0c45b4ec39c267ec0_prof);

        
        $__internal_84fba150224b2ce7fb684a8c974ea798d5e62313a839f1bcb86d7481c2a6605c->leave($__internal_84fba150224b2ce7fb684a8c974ea798d5e62313a839f1bcb86d7481c2a6605c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9bf79e6640a1d53c05ae8336e3d5debd4f8114f4a6f8d86572e81b3a0a13a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9bf79e6640a1d53c05ae8336e3d5debd4f8114f4a6f8d86572e81b3a0a13a55->enter($__internal_e9bf79e6640a1d53c05ae8336e3d5debd4f8114f4a6f8d86572e81b3a0a13a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8c231bd850265a1846fbca7cbadedc5219532e0dbc3b35613cc1278f6fe0d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c231bd850265a1846fbca7cbadedc5219532e0dbc3b35613cc1278f6fe0d6d->enter($__internal_f8c231bd850265a1846fbca7cbadedc5219532e0dbc3b35613cc1278f6fe0d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f8c231bd850265a1846fbca7cbadedc5219532e0dbc3b35613cc1278f6fe0d6d->leave($__internal_f8c231bd850265a1846fbca7cbadedc5219532e0dbc3b35613cc1278f6fe0d6d_prof);

        
        $__internal_e9bf79e6640a1d53c05ae8336e3d5debd4f8114f4a6f8d86572e81b3a0a13a55->leave($__internal_e9bf79e6640a1d53c05ae8336e3d5debd4f8114f4a6f8d86572e81b3a0a13a55_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3998e5275c8e162c69e9fbfbcff5d8fb4621f06c5812203ebf22149a42b1d4bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3998e5275c8e162c69e9fbfbcff5d8fb4621f06c5812203ebf22149a42b1d4bc->enter($__internal_3998e5275c8e162c69e9fbfbcff5d8fb4621f06c5812203ebf22149a42b1d4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f46a299c36620f314b17208f5055ad431d6963b14c04f28d16022b5ddf9f0b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46a299c36620f314b17208f5055ad431d6963b14c04f28d16022b5ddf9f0b5a->enter($__internal_f46a299c36620f314b17208f5055ad431d6963b14c04f28d16022b5ddf9f0b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f46a299c36620f314b17208f5055ad431d6963b14c04f28d16022b5ddf9f0b5a->leave($__internal_f46a299c36620f314b17208f5055ad431d6963b14c04f28d16022b5ddf9f0b5a_prof);

        
        $__internal_3998e5275c8e162c69e9fbfbcff5d8fb4621f06c5812203ebf22149a42b1d4bc->leave($__internal_3998e5275c8e162c69e9fbfbcff5d8fb4621f06c5812203ebf22149a42b1d4bc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
