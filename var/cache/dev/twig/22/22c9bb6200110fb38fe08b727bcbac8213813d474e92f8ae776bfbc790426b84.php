<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_07620a6e2f468ccb7d65774c0025d4848029e379e68da8cde83bd90ab25b4fb2 extends Twig_Template
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
        $__internal_0ca766fac2319517f96cd8f3bf7e47c307bca657f3021a580215807d02b0beb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca766fac2319517f96cd8f3bf7e47c307bca657f3021a580215807d02b0beb5->enter($__internal_0ca766fac2319517f96cd8f3bf7e47c307bca657f3021a580215807d02b0beb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_80dc6c36cbbd439940d89abe44e4b263d49ed058c1551efb2194aba1cc2bf6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dc6c36cbbd439940d89abe44e4b263d49ed058c1551efb2194aba1cc2bf6b4->enter($__internal_80dc6c36cbbd439940d89abe44e4b263d49ed058c1551efb2194aba1cc2bf6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0ca766fac2319517f96cd8f3bf7e47c307bca657f3021a580215807d02b0beb5->leave($__internal_0ca766fac2319517f96cd8f3bf7e47c307bca657f3021a580215807d02b0beb5_prof);

        
        $__internal_80dc6c36cbbd439940d89abe44e4b263d49ed058c1551efb2194aba1cc2bf6b4->leave($__internal_80dc6c36cbbd439940d89abe44e4b263d49ed058c1551efb2194aba1cc2bf6b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
