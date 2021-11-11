<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b791489f7246a91c5f3a98e978aafcea03a375a68e0334a67d88d6f0ee5e8936 extends Twig_Template
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
        $__internal_33c3a871a233a58bd799a641b2f2a400b39b9f3ce63e774bca526cf349bbfa5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c3a871a233a58bd799a641b2f2a400b39b9f3ce63e774bca526cf349bbfa5f->enter($__internal_33c3a871a233a58bd799a641b2f2a400b39b9f3ce63e774bca526cf349bbfa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_452e9a3460656f9f038c13c8d958a37e78decf393a4593dd2757748561d1a17a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452e9a3460656f9f038c13c8d958a37e78decf393a4593dd2757748561d1a17a->enter($__internal_452e9a3460656f9f038c13c8d958a37e78decf393a4593dd2757748561d1a17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_33c3a871a233a58bd799a641b2f2a400b39b9f3ce63e774bca526cf349bbfa5f->leave($__internal_33c3a871a233a58bd799a641b2f2a400b39b9f3ce63e774bca526cf349bbfa5f_prof);

        
        $__internal_452e9a3460656f9f038c13c8d958a37e78decf393a4593dd2757748561d1a17a->leave($__internal_452e9a3460656f9f038c13c8d958a37e78decf393a4593dd2757748561d1a17a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
