<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3a9b015d9bac6065cec79bd972bc36a29f8140d77aa36df53fb75a32c7bc6ac8 extends Twig_Template
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
        $__internal_bf7c7eb8b1d7ac5593b54fe8f16d3caedd4a91a17ed2b2e353513173354b5c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf7c7eb8b1d7ac5593b54fe8f16d3caedd4a91a17ed2b2e353513173354b5c01->enter($__internal_bf7c7eb8b1d7ac5593b54fe8f16d3caedd4a91a17ed2b2e353513173354b5c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f78ffbff4f3901de99e057e799af0074c3e50cd6cdf152517f5a3be3ce529c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78ffbff4f3901de99e057e799af0074c3e50cd6cdf152517f5a3be3ce529c40->enter($__internal_f78ffbff4f3901de99e057e799af0074c3e50cd6cdf152517f5a3be3ce529c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_bf7c7eb8b1d7ac5593b54fe8f16d3caedd4a91a17ed2b2e353513173354b5c01->leave($__internal_bf7c7eb8b1d7ac5593b54fe8f16d3caedd4a91a17ed2b2e353513173354b5c01_prof);

        
        $__internal_f78ffbff4f3901de99e057e799af0074c3e50cd6cdf152517f5a3be3ce529c40->leave($__internal_f78ffbff4f3901de99e057e799af0074c3e50cd6cdf152517f5a3be3ce529c40_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
