<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_8b42721c6d63495c3ed30c44c0ebfeb47d1976a128a198b05586dfed7d3f3f4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e21c49b14e77bf02a714fab8e4c14571651c926975921818b6902b0fedac08a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e21c49b14e77bf02a714fab8e4c14571651c926975921818b6902b0fedac08a5->enter($__internal_e21c49b14e77bf02a714fab8e4c14571651c926975921818b6902b0fedac08a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_fa6c304eec36a769c5ecb0ec0f49f7f5d60f0c29e08d158d672da22b08032215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6c304eec36a769c5ecb0ec0f49f7f5d60f0c29e08d158d672da22b08032215->enter($__internal_fa6c304eec36a769c5ecb0ec0f49f7f5d60f0c29e08d158d672da22b08032215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e21c49b14e77bf02a714fab8e4c14571651c926975921818b6902b0fedac08a5->leave($__internal_e21c49b14e77bf02a714fab8e4c14571651c926975921818b6902b0fedac08a5_prof);

        
        $__internal_fa6c304eec36a769c5ecb0ec0f49f7f5d60f0c29e08d158d672da22b08032215->leave($__internal_fa6c304eec36a769c5ecb0ec0f49f7f5d60f0c29e08d158d672da22b08032215_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
