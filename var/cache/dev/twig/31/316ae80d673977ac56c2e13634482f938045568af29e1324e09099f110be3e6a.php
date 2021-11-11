<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_351bf3cd346d5b4ab11ba2c773d123344dec44f40a7794368f4f3e092c73b167 extends Twig_Template
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
        $__internal_2aedf74e94aca73a47ed2fef818cb10b2f573f06145f90b619360b49ce779489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aedf74e94aca73a47ed2fef818cb10b2f573f06145f90b619360b49ce779489->enter($__internal_2aedf74e94aca73a47ed2fef818cb10b2f573f06145f90b619360b49ce779489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_5fe1d8a002cb8976ddebd9545ada6e29f30e2da8e19af79c612de6c90a66a6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe1d8a002cb8976ddebd9545ada6e29f30e2da8e19af79c612de6c90a66a6a4->enter($__internal_5fe1d8a002cb8976ddebd9545ada6e29f30e2da8e19af79c612de6c90a66a6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_2aedf74e94aca73a47ed2fef818cb10b2f573f06145f90b619360b49ce779489->leave($__internal_2aedf74e94aca73a47ed2fef818cb10b2f573f06145f90b619360b49ce779489_prof);

        
        $__internal_5fe1d8a002cb8976ddebd9545ada6e29f30e2da8e19af79c612de6c90a66a6a4->leave($__internal_5fe1d8a002cb8976ddebd9545ada6e29f30e2da8e19af79c612de6c90a66a6a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
