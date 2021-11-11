<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_2d9cdc9b0f1d6b71e834c6c6200e93c66d90a2199b4ad722bc83c6e5c7a8cc55 extends Twig_Template
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
        $__internal_2f6470103f7b3b498dbce3dba1df416ae0823c45ff0f97dcf7f181825f897121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f6470103f7b3b498dbce3dba1df416ae0823c45ff0f97dcf7f181825f897121->enter($__internal_2f6470103f7b3b498dbce3dba1df416ae0823c45ff0f97dcf7f181825f897121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_c8a8a9544f683252cf62a2c29c6d185eb4122cfb40e47f77b353df2d5ca74f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a8a9544f683252cf62a2c29c6d185eb4122cfb40e47f77b353df2d5ca74f75->enter($__internal_c8a8a9544f683252cf62a2c29c6d185eb4122cfb40e47f77b353df2d5ca74f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_2f6470103f7b3b498dbce3dba1df416ae0823c45ff0f97dcf7f181825f897121->leave($__internal_2f6470103f7b3b498dbce3dba1df416ae0823c45ff0f97dcf7f181825f897121_prof);

        
        $__internal_c8a8a9544f683252cf62a2c29c6d185eb4122cfb40e47f77b353df2d5ca74f75->leave($__internal_c8a8a9544f683252cf62a2c29c6d185eb4122cfb40e47f77b353df2d5ca74f75_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
