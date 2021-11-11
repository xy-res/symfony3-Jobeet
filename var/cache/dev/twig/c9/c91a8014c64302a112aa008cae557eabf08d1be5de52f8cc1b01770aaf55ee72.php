<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0ec15115cbc7bccd896f1b1f70dd7ad14850ab40a967e402d122caa980a41ea8 extends Twig_Template
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
        $__internal_6b53923074ca6af9af91a2eb87d84e927b01c36a95b37b9360e00686d806d627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b53923074ca6af9af91a2eb87d84e927b01c36a95b37b9360e00686d806d627->enter($__internal_6b53923074ca6af9af91a2eb87d84e927b01c36a95b37b9360e00686d806d627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_3d0a14d64a4bf7bd3f01441ccdff92c370aef79e1daae937a0c034770f6eb74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0a14d64a4bf7bd3f01441ccdff92c370aef79e1daae937a0c034770f6eb74a->enter($__internal_3d0a14d64a4bf7bd3f01441ccdff92c370aef79e1daae937a0c034770f6eb74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6b53923074ca6af9af91a2eb87d84e927b01c36a95b37b9360e00686d806d627->leave($__internal_6b53923074ca6af9af91a2eb87d84e927b01c36a95b37b9360e00686d806d627_prof);

        
        $__internal_3d0a14d64a4bf7bd3f01441ccdff92c370aef79e1daae937a0c034770f6eb74a->leave($__internal_3d0a14d64a4bf7bd3f01441ccdff92c370aef79e1daae937a0c034770f6eb74a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
