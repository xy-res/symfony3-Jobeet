<?php

/* :job:new.html.twig */
class __TwigTemplate_2c3323ae8a775ab9b4d406d0abc0956a93f43e8056e38ee6167c667f7b7750f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:new.html.twig", 1);
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
        $__internal_288072c4d70cc84fadacae72e05c382893aac62d9f291818c814b36369dc3627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288072c4d70cc84fadacae72e05c382893aac62d9f291818c814b36369dc3627->enter($__internal_288072c4d70cc84fadacae72e05c382893aac62d9f291818c814b36369dc3627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $__internal_eb1dfd2c6f4820ae6af4edef28628d62a4eebf64a274d18ae3c6bff016c0f440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1dfd2c6f4820ae6af4edef28628d62a4eebf64a274d18ae3c6bff016c0f440->enter($__internal_eb1dfd2c6f4820ae6af4edef28628d62a4eebf64a274d18ae3c6bff016c0f440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_288072c4d70cc84fadacae72e05c382893aac62d9f291818c814b36369dc3627->leave($__internal_288072c4d70cc84fadacae72e05c382893aac62d9f291818c814b36369dc3627_prof);

        
        $__internal_eb1dfd2c6f4820ae6af4edef28628d62a4eebf64a274d18ae3c6bff016c0f440->leave($__internal_eb1dfd2c6f4820ae6af4edef28628d62a4eebf64a274d18ae3c6bff016c0f440_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae30af522af789c3dd6ed76cda3c4483f24ac2bdfc076d8d8605a55f7e8d54ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae30af522af789c3dd6ed76cda3c4483f24ac2bdfc076d8d8605a55f7e8d54ec->enter($__internal_ae30af522af789c3dd6ed76cda3c4483f24ac2bdfc076d8d8605a55f7e8d54ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98bb0b5169ccd61729ba5fec6454e4c3043a61113139278201cedae79252d654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98bb0b5169ccd61729ba5fec6454e4c3043a61113139278201cedae79252d654->enter($__internal_98bb0b5169ccd61729ba5fec6454e4c3043a61113139278201cedae79252d654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_98bb0b5169ccd61729ba5fec6454e4c3043a61113139278201cedae79252d654->leave($__internal_98bb0b5169ccd61729ba5fec6454e4c3043a61113139278201cedae79252d654_prof);

        
        $__internal_ae30af522af789c3dd6ed76cda3c4483f24ac2bdfc076d8d8605a55f7e8d54ec->leave($__internal_ae30af522af789c3dd6ed76cda3c4483f24ac2bdfc076d8d8605a55f7e8d54ec_prof);

    }

    public function getTemplateName()
    {
        return ":job:new.html.twig";
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
", ":job:new.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\app/Resources\\views/job/new.html.twig");
    }
}
