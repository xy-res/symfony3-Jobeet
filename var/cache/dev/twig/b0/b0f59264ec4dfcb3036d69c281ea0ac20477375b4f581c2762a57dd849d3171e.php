<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_9835c2c7d7786839b0bf3fa2a3c1ec598e9e1e79c77d1422c0cc79b943f2a98c extends Twig_Template
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
        $__internal_8c8e125197ee137ff2bb0706ae1b5b467a19022c8c03f72e00d7f53a42316dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8e125197ee137ff2bb0706ae1b5b467a19022c8c03f72e00d7f53a42316dc0->enter($__internal_8c8e125197ee137ff2bb0706ae1b5b467a19022c8c03f72e00d7f53a42316dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_a1003f91cbdbce59dd5fab3eac04e88cdd42fa2c3e50876b91ea9e09be1f6b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1003f91cbdbce59dd5fab3eac04e88cdd42fa2c3e50876b91ea9e09be1f6b65->enter($__internal_a1003f91cbdbce59dd5fab3eac04e88cdd42fa2c3e50876b91ea9e09be1f6b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_8c8e125197ee137ff2bb0706ae1b5b467a19022c8c03f72e00d7f53a42316dc0->leave($__internal_8c8e125197ee137ff2bb0706ae1b5b467a19022c8c03f72e00d7f53a42316dc0_prof);

        
        $__internal_a1003f91cbdbce59dd5fab3eac04e88cdd42fa2c3e50876b91ea9e09be1f6b65->leave($__internal_a1003f91cbdbce59dd5fab3eac04e88cdd42fa2c3e50876b91ea9e09be1f6b65_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
