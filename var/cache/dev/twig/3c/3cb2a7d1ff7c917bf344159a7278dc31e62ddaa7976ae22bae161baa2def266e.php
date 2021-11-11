<?php

/* job/edit.html.twig */
class __TwigTemplate_f28ba025f607364e5ef0f12853dbc6de8bd5c23a7b31bb4bcb8c487334b2d30c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/edit.html.twig", 1);
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
        $__internal_8a8fd8bca5f5e5f25a7c3b0bc64b34ffe0256e27e8a603f6606c692ca387b11c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a8fd8bca5f5e5f25a7c3b0bc64b34ffe0256e27e8a603f6606c692ca387b11c->enter($__internal_8a8fd8bca5f5e5f25a7c3b0bc64b34ffe0256e27e8a603f6606c692ca387b11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/edit.html.twig"));

        $__internal_ffca8d3e3e76ceaf939812af68b3de8c34dafeca0e1c2825a72d99374984cd66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffca8d3e3e76ceaf939812af68b3de8c34dafeca0e1c2825a72d99374984cd66->enter($__internal_ffca8d3e3e76ceaf939812af68b3de8c34dafeca0e1c2825a72d99374984cd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a8fd8bca5f5e5f25a7c3b0bc64b34ffe0256e27e8a603f6606c692ca387b11c->leave($__internal_8a8fd8bca5f5e5f25a7c3b0bc64b34ffe0256e27e8a603f6606c692ca387b11c_prof);

        
        $__internal_ffca8d3e3e76ceaf939812af68b3de8c34dafeca0e1c2825a72d99374984cd66->leave($__internal_ffca8d3e3e76ceaf939812af68b3de8c34dafeca0e1c2825a72d99374984cd66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f725bedd0a1b8de5dbe8f7da9503c7063135e492f0c1042e0f228067a36ed56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f725bedd0a1b8de5dbe8f7da9503c7063135e492f0c1042e0f228067a36ed56->enter($__internal_8f725bedd0a1b8de5dbe8f7da9503c7063135e492f0c1042e0f228067a36ed56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2be53e4f4c113580b1270a30b182640598b28c688b9895ef7ed0a44fb5d27bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2be53e4f4c113580b1270a30b182640598b28c688b9895ef7ed0a44fb5d27bf->enter($__internal_f2be53e4f4c113580b1270a30b182640598b28c688b9895ef7ed0a44fb5d27bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f2be53e4f4c113580b1270a30b182640598b28c688b9895ef7ed0a44fb5d27bf->leave($__internal_f2be53e4f4c113580b1270a30b182640598b28c688b9895ef7ed0a44fb5d27bf_prof);

        
        $__internal_8f725bedd0a1b8de5dbe8f7da9503c7063135e492f0c1042e0f228067a36ed56->leave($__internal_8f725bedd0a1b8de5dbe8f7da9503c7063135e492f0c1042e0f228067a36ed56_prof);

    }

    public function getTemplateName()
    {
        return "job/edit.html.twig";
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
", "job/edit.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\app\\Resources\\views\\job\\edit.html.twig");
    }
}
