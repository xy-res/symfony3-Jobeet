<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_4f0793fc4b0888fa842a89754f2a0556a272e7f2049a48ce1f0866dae79babcd extends Twig_Template
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
        $__internal_43564f629558022124b092fc45c200ffac049d925abc1a8bf1b7b4a8f86cf1a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43564f629558022124b092fc45c200ffac049d925abc1a8bf1b7b4a8f86cf1a8->enter($__internal_43564f629558022124b092fc45c200ffac049d925abc1a8bf1b7b4a8f86cf1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_04795018e42406f59d6cdd0352c281f906d8a886c83c0d36a072ef79d9f02e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04795018e42406f59d6cdd0352c281f906d8a886c83c0d36a072ef79d9f02e88->enter($__internal_04795018e42406f59d6cdd0352c281f906d8a886c83c0d36a072ef79d9f02e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_43564f629558022124b092fc45c200ffac049d925abc1a8bf1b7b4a8f86cf1a8->leave($__internal_43564f629558022124b092fc45c200ffac049d925abc1a8bf1b7b4a8f86cf1a8_prof);

        
        $__internal_04795018e42406f59d6cdd0352c281f906d8a886c83c0d36a072ef79d9f02e88->leave($__internal_04795018e42406f59d6cdd0352c281f906d8a886c83c0d36a072ef79d9f02e88_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
