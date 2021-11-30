<?php

/* base.html.twig */
class __TwigTemplate_fb9d94bc9cf75537140d68c7ddbca5bd46fe3cc635b72f7da37d793f5c0b9c0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f304db0e183eac0e657828e4e253dc359f69ef5bea75032d921f80af03078839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f304db0e183eac0e657828e4e253dc359f69ef5bea75032d921f80af03078839->enter($__internal_f304db0e183eac0e657828e4e253dc359f69ef5bea75032d921f80af03078839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0f245ae6fc53787f3728eecd40ba11409dc1a8d602549bba0be8aba37952d5b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f245ae6fc53787f3728eecd40ba11409dc1a8d602549bba0be8aba37952d5b3->enter($__internal_0f245ae6fc53787f3728eecd40ba11409dc1a8d602549bba0be8aba37952d5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f304db0e183eac0e657828e4e253dc359f69ef5bea75032d921f80af03078839->leave($__internal_f304db0e183eac0e657828e4e253dc359f69ef5bea75032d921f80af03078839_prof);

        
        $__internal_0f245ae6fc53787f3728eecd40ba11409dc1a8d602549bba0be8aba37952d5b3->leave($__internal_0f245ae6fc53787f3728eecd40ba11409dc1a8d602549bba0be8aba37952d5b3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_771eae5b5d99b240c728ab4f72aa7be4dcfa4d5d8b4054219744426582e8c4ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771eae5b5d99b240c728ab4f72aa7be4dcfa4d5d8b4054219744426582e8c4ad->enter($__internal_771eae5b5d99b240c728ab4f72aa7be4dcfa4d5d8b4054219744426582e8c4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e7fe1d037892c36b22e1a7574ab54e246e67f59e5299489efd07c7c346e85ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fe1d037892c36b22e1a7574ab54e246e67f59e5299489efd07c7c346e85ec9->enter($__internal_e7fe1d037892c36b22e1a7574ab54e246e67f59e5299489efd07c7c346e85ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e7fe1d037892c36b22e1a7574ab54e246e67f59e5299489efd07c7c346e85ec9->leave($__internal_e7fe1d037892c36b22e1a7574ab54e246e67f59e5299489efd07c7c346e85ec9_prof);

        
        $__internal_771eae5b5d99b240c728ab4f72aa7be4dcfa4d5d8b4054219744426582e8c4ad->leave($__internal_771eae5b5d99b240c728ab4f72aa7be4dcfa4d5d8b4054219744426582e8c4ad_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a38329a91f495171ae1237170a610b2ba73691971fc01064d998af2f98d10e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a38329a91f495171ae1237170a610b2ba73691971fc01064d998af2f98d10e6->enter($__internal_7a38329a91f495171ae1237170a610b2ba73691971fc01064d998af2f98d10e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9f442ca86af9bbb289698ac97a1b747903d8aa2e4a64ef90a7bfa50a39b3a3a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f442ca86af9bbb289698ac97a1b747903d8aa2e4a64ef90a7bfa50a39b3a3a2->enter($__internal_9f442ca86af9bbb289698ac97a1b747903d8aa2e4a64ef90a7bfa50a39b3a3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9f442ca86af9bbb289698ac97a1b747903d8aa2e4a64ef90a7bfa50a39b3a3a2->leave($__internal_9f442ca86af9bbb289698ac97a1b747903d8aa2e4a64ef90a7bfa50a39b3a3a2_prof);

        
        $__internal_7a38329a91f495171ae1237170a610b2ba73691971fc01064d998af2f98d10e6->leave($__internal_7a38329a91f495171ae1237170a610b2ba73691971fc01064d998af2f98d10e6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9898782565c0a6479a3e9e0a8ec2c4c7ca68994a06dd1d0157b2194007703401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9898782565c0a6479a3e9e0a8ec2c4c7ca68994a06dd1d0157b2194007703401->enter($__internal_9898782565c0a6479a3e9e0a8ec2c4c7ca68994a06dd1d0157b2194007703401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c39a49cfdb3ea3cef53c42197a345f4c3466fcdaaae352210f61ead2975e265b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39a49cfdb3ea3cef53c42197a345f4c3466fcdaaae352210f61ead2975e265b->enter($__internal_c39a49cfdb3ea3cef53c42197a345f4c3466fcdaaae352210f61ead2975e265b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c39a49cfdb3ea3cef53c42197a345f4c3466fcdaaae352210f61ead2975e265b->leave($__internal_c39a49cfdb3ea3cef53c42197a345f4c3466fcdaaae352210f61ead2975e265b_prof);

        
        $__internal_9898782565c0a6479a3e9e0a8ec2c4c7ca68994a06dd1d0157b2194007703401->leave($__internal_9898782565c0a6479a3e9e0a8ec2c4c7ca68994a06dd1d0157b2194007703401_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7109151fb91ac000334fb8832879f0cc28a426d16b1f55d9494191a3f16c4dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7109151fb91ac000334fb8832879f0cc28a426d16b1f55d9494191a3f16c4dc8->enter($__internal_7109151fb91ac000334fb8832879f0cc28a426d16b1f55d9494191a3f16c4dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_023036832d860b384c1196098ab497d85c1b59473f902992062e6593dc17f954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023036832d860b384c1196098ab497d85c1b59473f902992062e6593dc17f954->enter($__internal_023036832d860b384c1196098ab497d85c1b59473f902992062e6593dc17f954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_023036832d860b384c1196098ab497d85c1b59473f902992062e6593dc17f954->leave($__internal_023036832d860b384c1196098ab497d85c1b59473f902992062e6593dc17f954_prof);

        
        $__internal_7109151fb91ac000334fb8832879f0cc28a426d16b1f55d9494191a3f16c4dc8->leave($__internal_7109151fb91ac000334fb8832879f0cc28a426d16b1f55d9494191a3f16c4dc8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony3-Jobeet\\app\\Resources\\views\\base.html.twig");
    }
}
