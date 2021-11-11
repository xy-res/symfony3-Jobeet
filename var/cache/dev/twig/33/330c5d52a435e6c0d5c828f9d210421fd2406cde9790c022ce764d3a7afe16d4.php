<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_31921a778c2d69716c12892e3066a675698d7b08735a99118bfc8e4a67c2c459 extends Twig_Template
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
        $__internal_06ffb8212a8ffe7c135e19205cff33585a0eb6e8f7fc4a7d404a663d753f1f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ffb8212a8ffe7c135e19205cff33585a0eb6e8f7fc4a7d404a663d753f1f95->enter($__internal_06ffb8212a8ffe7c135e19205cff33585a0eb6e8f7fc4a7d404a663d753f1f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_543dc05a52fc4b5c8458b01b96f0e033730becdd4576c550c947f9a37f0ee636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543dc05a52fc4b5c8458b01b96f0e033730becdd4576c550c947f9a37f0ee636->enter($__internal_543dc05a52fc4b5c8458b01b96f0e033730becdd4576c550c947f9a37f0ee636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_06ffb8212a8ffe7c135e19205cff33585a0eb6e8f7fc4a7d404a663d753f1f95->leave($__internal_06ffb8212a8ffe7c135e19205cff33585a0eb6e8f7fc4a7d404a663d753f1f95_prof);

        
        $__internal_543dc05a52fc4b5c8458b01b96f0e033730becdd4576c550c947f9a37f0ee636->leave($__internal_543dc05a52fc4b5c8458b01b96f0e033730becdd4576c550c947f9a37f0ee636_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
