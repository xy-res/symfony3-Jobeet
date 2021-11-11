<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_68f76abea6118cea5736d0f52a0fd202a265b257092251a30bf572abe1978c33 extends Twig_Template
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
        $__internal_ee516763b2d434f8c6cbccd302fa4947171293febbe56915bb40cd4593bee1b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee516763b2d434f8c6cbccd302fa4947171293febbe56915bb40cd4593bee1b6->enter($__internal_ee516763b2d434f8c6cbccd302fa4947171293febbe56915bb40cd4593bee1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_842c7f54cd6f3dd8c3e4cabc3d785f11849dede35688c538e27004f1b1e72058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842c7f54cd6f3dd8c3e4cabc3d785f11849dede35688c538e27004f1b1e72058->enter($__internal_842c7f54cd6f3dd8c3e4cabc3d785f11849dede35688c538e27004f1b1e72058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ee516763b2d434f8c6cbccd302fa4947171293febbe56915bb40cd4593bee1b6->leave($__internal_ee516763b2d434f8c6cbccd302fa4947171293febbe56915bb40cd4593bee1b6_prof);

        
        $__internal_842c7f54cd6f3dd8c3e4cabc3d785f11849dede35688c538e27004f1b1e72058->leave($__internal_842c7f54cd6f3dd8c3e4cabc3d785f11849dede35688c538e27004f1b1e72058_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
