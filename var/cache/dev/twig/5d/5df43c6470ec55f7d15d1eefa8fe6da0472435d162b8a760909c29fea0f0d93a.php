<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7777822de53ec48cde1e6b1498729b3ec5f3b2a103f56987a7f61b6302817298 extends Twig_Template
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
        $__internal_38e8408f540ca7b7c3809c51f82cfc670ffdfc50a62dba1f0fac2bd3c7dc05db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e8408f540ca7b7c3809c51f82cfc670ffdfc50a62dba1f0fac2bd3c7dc05db->enter($__internal_38e8408f540ca7b7c3809c51f82cfc670ffdfc50a62dba1f0fac2bd3c7dc05db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_6b6bdd85f27a8da07ae57bcb8791d68693779280d50e4b66cb7b766678168e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6bdd85f27a8da07ae57bcb8791d68693779280d50e4b66cb7b766678168e76->enter($__internal_6b6bdd85f27a8da07ae57bcb8791d68693779280d50e4b66cb7b766678168e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_38e8408f540ca7b7c3809c51f82cfc670ffdfc50a62dba1f0fac2bd3c7dc05db->leave($__internal_38e8408f540ca7b7c3809c51f82cfc670ffdfc50a62dba1f0fac2bd3c7dc05db_prof);

        
        $__internal_6b6bdd85f27a8da07ae57bcb8791d68693779280d50e4b66cb7b766678168e76->leave($__internal_6b6bdd85f27a8da07ae57bcb8791d68693779280d50e4b66cb7b766678168e76_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
