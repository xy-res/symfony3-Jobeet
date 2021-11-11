<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_d3afc29d157b6d6dbdafe5bee47b4fc34fd39e214e43486a07b61d94362a0e09 extends Twig_Template
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
        $__internal_c8f8ca1c81e0d6061320b7981b4ad05371e52a3fd96a8cbea9324ab98b4ceb8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f8ca1c81e0d6061320b7981b4ad05371e52a3fd96a8cbea9324ab98b4ceb8a->enter($__internal_c8f8ca1c81e0d6061320b7981b4ad05371e52a3fd96a8cbea9324ab98b4ceb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_6cb35f94b77a7f75933399dd60c144ddea5bdd32ebe529e0bd728dfa6ffa80e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb35f94b77a7f75933399dd60c144ddea5bdd32ebe529e0bd728dfa6ffa80e6->enter($__internal_6cb35f94b77a7f75933399dd60c144ddea5bdd32ebe529e0bd728dfa6ffa80e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c8f8ca1c81e0d6061320b7981b4ad05371e52a3fd96a8cbea9324ab98b4ceb8a->leave($__internal_c8f8ca1c81e0d6061320b7981b4ad05371e52a3fd96a8cbea9324ab98b4ceb8a_prof);

        
        $__internal_6cb35f94b77a7f75933399dd60c144ddea5bdd32ebe529e0bd728dfa6ffa80e6->leave($__internal_6cb35f94b77a7f75933399dd60c144ddea5bdd32ebe529e0bd728dfa6ffa80e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
