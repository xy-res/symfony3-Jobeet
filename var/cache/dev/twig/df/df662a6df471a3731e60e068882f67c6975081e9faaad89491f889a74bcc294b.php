<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5bbf62872a324e4d3c772b5a37634c0fdd3a83d3f812c3f5a6845483d8c23e6d extends Twig_Template
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
        $__internal_c2f6bf84a34ef8b1dd555ccb0b0d2061f6c0b68a71f19db3450f3cf78c071b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f6bf84a34ef8b1dd555ccb0b0d2061f6c0b68a71f19db3450f3cf78c071b65->enter($__internal_c2f6bf84a34ef8b1dd555ccb0b0d2061f6c0b68a71f19db3450f3cf78c071b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f1784bf7ddbd618d76f8eeb4220cae65507c8ee6eb75cb161f4a5818e0ce0b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1784bf7ddbd618d76f8eeb4220cae65507c8ee6eb75cb161f4a5818e0ce0b3c->enter($__internal_f1784bf7ddbd618d76f8eeb4220cae65507c8ee6eb75cb161f4a5818e0ce0b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c2f6bf84a34ef8b1dd555ccb0b0d2061f6c0b68a71f19db3450f3cf78c071b65->leave($__internal_c2f6bf84a34ef8b1dd555ccb0b0d2061f6c0b68a71f19db3450f3cf78c071b65_prof);

        
        $__internal_f1784bf7ddbd618d76f8eeb4220cae65507c8ee6eb75cb161f4a5818e0ce0b3c->leave($__internal_f1784bf7ddbd618d76f8eeb4220cae65507c8ee6eb75cb161f4a5818e0ce0b3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
