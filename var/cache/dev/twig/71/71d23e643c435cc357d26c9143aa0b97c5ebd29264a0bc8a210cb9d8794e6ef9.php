<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_c23d4a10810d59c1f16e479ef1b902c85cffa1db01754808ccda920bea227764 extends Twig_Template
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
        $__internal_c2ff19793fdada3b59aa26c5bd3ebec224d33083b31397064e0ea979a593f427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ff19793fdada3b59aa26c5bd3ebec224d33083b31397064e0ea979a593f427->enter($__internal_c2ff19793fdada3b59aa26c5bd3ebec224d33083b31397064e0ea979a593f427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_9f96adda725fc3c3db102fde3c273b1b8f0505bb85ab484d4f29018450d12779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f96adda725fc3c3db102fde3c273b1b8f0505bb85ab484d4f29018450d12779->enter($__internal_9f96adda725fc3c3db102fde3c273b1b8f0505bb85ab484d4f29018450d12779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c2ff19793fdada3b59aa26c5bd3ebec224d33083b31397064e0ea979a593f427->leave($__internal_c2ff19793fdada3b59aa26c5bd3ebec224d33083b31397064e0ea979a593f427_prof);

        
        $__internal_9f96adda725fc3c3db102fde3c273b1b8f0505bb85ab484d4f29018450d12779->leave($__internal_9f96adda725fc3c3db102fde3c273b1b8f0505bb85ab484d4f29018450d12779_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
