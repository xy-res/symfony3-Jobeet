<?php

/* job/new.html.twig */
class __TwigTemplate_97719ee62b628801f909daa23f851a8ef5450c30c96eaf2f97cdc79d4da7b1f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/new.html.twig", 1);
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
        $__internal_1d99d80c57c772332be140ebcab3cd806416d274884705b35be192dc9951b539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d99d80c57c772332be140ebcab3cd806416d274884705b35be192dc9951b539->enter($__internal_1d99d80c57c772332be140ebcab3cd806416d274884705b35be192dc9951b539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        $__internal_7091227ff556aaf85013c36fd2221708c20ad1565f9bf3a8a54180ed3971c3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7091227ff556aaf85013c36fd2221708c20ad1565f9bf3a8a54180ed3971c3ff->enter($__internal_7091227ff556aaf85013c36fd2221708c20ad1565f9bf3a8a54180ed3971c3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d99d80c57c772332be140ebcab3cd806416d274884705b35be192dc9951b539->leave($__internal_1d99d80c57c772332be140ebcab3cd806416d274884705b35be192dc9951b539_prof);

        
        $__internal_7091227ff556aaf85013c36fd2221708c20ad1565f9bf3a8a54180ed3971c3ff->leave($__internal_7091227ff556aaf85013c36fd2221708c20ad1565f9bf3a8a54180ed3971c3ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f112e2c11b4f82360f6da8fe793bd7d2954e291f1233ccd2e35c7e4f707d6603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f112e2c11b4f82360f6da8fe793bd7d2954e291f1233ccd2e35c7e4f707d6603->enter($__internal_f112e2c11b4f82360f6da8fe793bd7d2954e291f1233ccd2e35c7e4f707d6603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bbdaa8ed2b43f022b6fcdd8c9df90bd21b01b6c754950036816a8c509507eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbdaa8ed2b43f022b6fcdd8c9df90bd21b01b6c754950036816a8c509507eab->enter($__internal_1bbdaa8ed2b43f022b6fcdd8c9df90bd21b01b6c754950036816a8c509507eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Job creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ibw_job_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1bbdaa8ed2b43f022b6fcdd8c9df90bd21b01b6c754950036816a8c509507eab->leave($__internal_1bbdaa8ed2b43f022b6fcdd8c9df90bd21b01b6c754950036816a8c509507eab_prof);

        
        $__internal_f112e2c11b4f82360f6da8fe793bd7d2954e291f1233ccd2e35c7e4f707d6603->leave($__internal_f112e2c11b4f82360f6da8fe793bd7d2954e291f1233ccd2e35c7e4f707d6603_prof);

    }

    public function getTemplateName()
    {
        return "job/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Job creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ibw_job_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "job/new.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\app\\Resources\\views\\job\\new.html.twig");
    }
}
