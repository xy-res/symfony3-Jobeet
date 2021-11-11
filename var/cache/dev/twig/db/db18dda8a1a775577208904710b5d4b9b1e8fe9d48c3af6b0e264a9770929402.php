<?php

/* :job:edit.html.twig */
class __TwigTemplate_ba265a1e3ff82e15107bd82b6b77437df33babf80b24011f8ec12d8b92fa48c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e4c8aed4f126d704d535dff5df3a1f242a0dd1eb85c53bc713a98289020a095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e4c8aed4f126d704d535dff5df3a1f242a0dd1eb85c53bc713a98289020a095->enter($__internal_9e4c8aed4f126d704d535dff5df3a1f242a0dd1eb85c53bc713a98289020a095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:edit.html.twig"));

        $__internal_9c781ea5e912aef86519ca737b0aaebb1ea8827485e98e2504e3ac6f5b1ec9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c781ea5e912aef86519ca737b0aaebb1ea8827485e98e2504e3ac6f5b1ec9ef->enter($__internal_9c781ea5e912aef86519ca737b0aaebb1ea8827485e98e2504e3ac6f5b1ec9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e4c8aed4f126d704d535dff5df3a1f242a0dd1eb85c53bc713a98289020a095->leave($__internal_9e4c8aed4f126d704d535dff5df3a1f242a0dd1eb85c53bc713a98289020a095_prof);

        
        $__internal_9c781ea5e912aef86519ca737b0aaebb1ea8827485e98e2504e3ac6f5b1ec9ef->leave($__internal_9c781ea5e912aef86519ca737b0aaebb1ea8827485e98e2504e3ac6f5b1ec9ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f803a590468256960301832b3c874ae96200085bd393b37a7718863c736aeab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f803a590468256960301832b3c874ae96200085bd393b37a7718863c736aeab->enter($__internal_0f803a590468256960301832b3c874ae96200085bd393b37a7718863c736aeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_573df72e70747a8a4b88f870cbab80fc88100265e7e5012ecb0b498667f4914f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573df72e70747a8a4b88f870cbab80fc88100265e7e5012ecb0b498667f4914f->enter($__internal_573df72e70747a8a4b88f870cbab80fc88100265e7e5012ecb0b498667f4914f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Job edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ibw_job_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_573df72e70747a8a4b88f870cbab80fc88100265e7e5012ecb0b498667f4914f->leave($__internal_573df72e70747a8a4b88f870cbab80fc88100265e7e5012ecb0b498667f4914f_prof);

        
        $__internal_0f803a590468256960301832b3c874ae96200085bd393b37a7718863c736aeab->leave($__internal_0f803a590468256960301832b3c874ae96200085bd393b37a7718863c736aeab_prof);

    }

    public function getTemplateName()
    {
        return ":job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Job edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('ibw_job_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":job:edit.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\app/Resources\\views/job/edit.html.twig");
    }
}
