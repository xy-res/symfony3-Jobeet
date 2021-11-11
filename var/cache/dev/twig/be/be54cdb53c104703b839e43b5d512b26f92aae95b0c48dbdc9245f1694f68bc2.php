<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e8f8063ac6bd260ef6c0a28aa3322274ca59c2982db7b9d4765d55e558ca1d60 extends Twig_Template
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
        $__internal_11f8201ca7b1dbeb6615465ee95d8f61c99756816946c85f1eb5560b56013509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f8201ca7b1dbeb6615465ee95d8f61c99756816946c85f1eb5560b56013509->enter($__internal_11f8201ca7b1dbeb6615465ee95d8f61c99756816946c85f1eb5560b56013509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_26573fb963cbbcc5dce0db28702d9350fcf9cde60ecca1cf6cb33833d4801a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26573fb963cbbcc5dce0db28702d9350fcf9cde60ecca1cf6cb33833d4801a17->enter($__internal_26573fb963cbbcc5dce0db28702d9350fcf9cde60ecca1cf6cb33833d4801a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_11f8201ca7b1dbeb6615465ee95d8f61c99756816946c85f1eb5560b56013509->leave($__internal_11f8201ca7b1dbeb6615465ee95d8f61c99756816946c85f1eb5560b56013509_prof);

        
        $__internal_26573fb963cbbcc5dce0db28702d9350fcf9cde60ecca1cf6cb33833d4801a17->leave($__internal_26573fb963cbbcc5dce0db28702d9350fcf9cde60ecca1cf6cb33833d4801a17_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
