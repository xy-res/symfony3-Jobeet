<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_c00d31d1deae9319bcc36b9aed717f814b25e360889bca79261d7d4ea8f639ca extends Twig_Template
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
        $__internal_8566721753ba9e98e638572cf4a1ed4759e9db9c57e769da99cb6c0d8277afbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8566721753ba9e98e638572cf4a1ed4759e9db9c57e769da99cb6c0d8277afbb->enter($__internal_8566721753ba9e98e638572cf4a1ed4759e9db9c57e769da99cb6c0d8277afbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_338fa11a369c372f9e7227b2364ae230f77b7b2c0eef7443c37805e967afeb45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338fa11a369c372f9e7227b2364ae230f77b7b2c0eef7443c37805e967afeb45->enter($__internal_338fa11a369c372f9e7227b2364ae230f77b7b2c0eef7443c37805e967afeb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_8566721753ba9e98e638572cf4a1ed4759e9db9c57e769da99cb6c0d8277afbb->leave($__internal_8566721753ba9e98e638572cf4a1ed4759e9db9c57e769da99cb6c0d8277afbb_prof);

        
        $__internal_338fa11a369c372f9e7227b2364ae230f77b7b2c0eef7443c37805e967afeb45->leave($__internal_338fa11a369c372f9e7227b2364ae230f77b7b2c0eef7443c37805e967afeb45_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
