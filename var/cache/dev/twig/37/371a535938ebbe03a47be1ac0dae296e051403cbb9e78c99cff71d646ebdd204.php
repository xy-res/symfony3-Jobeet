<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3a14654ba20886865bfb4fc268dccda008689c6f7cc12fd9bb3482afc47e917d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2549454abec8784a9ec0dd635feaee00776a8c5102849d496da7f45638b0560f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2549454abec8784a9ec0dd635feaee00776a8c5102849d496da7f45638b0560f->enter($__internal_2549454abec8784a9ec0dd635feaee00776a8c5102849d496da7f45638b0560f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_fdd73bbd42ec12bc724c3580658b15ee0c806728c1cbd1b9dca4c12910ce66e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd73bbd42ec12bc724c3580658b15ee0c806728c1cbd1b9dca4c12910ce66e0->enter($__internal_fdd73bbd42ec12bc724c3580658b15ee0c806728c1cbd1b9dca4c12910ce66e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2549454abec8784a9ec0dd635feaee00776a8c5102849d496da7f45638b0560f->leave($__internal_2549454abec8784a9ec0dd635feaee00776a8c5102849d496da7f45638b0560f_prof);

        
        $__internal_fdd73bbd42ec12bc724c3580658b15ee0c806728c1cbd1b9dca4c12910ce66e0->leave($__internal_fdd73bbd42ec12bc724c3580658b15ee0c806728c1cbd1b9dca4c12910ce66e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94c660c044ebdd63c8961a90e3904da1fbf71cbc5a161277705ae59aca8c8a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c660c044ebdd63c8961a90e3904da1fbf71cbc5a161277705ae59aca8c8a76->enter($__internal_94c660c044ebdd63c8961a90e3904da1fbf71cbc5a161277705ae59aca8c8a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d54f465451a38dfb8905bbbade8f5eaf6ff84ea480bad53b8754645a47452f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d54f465451a38dfb8905bbbade8f5eaf6ff84ea480bad53b8754645a47452f4->enter($__internal_7d54f465451a38dfb8905bbbade8f5eaf6ff84ea480bad53b8754645a47452f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7d54f465451a38dfb8905bbbade8f5eaf6ff84ea480bad53b8754645a47452f4->leave($__internal_7d54f465451a38dfb8905bbbade8f5eaf6ff84ea480bad53b8754645a47452f4_prof);

        
        $__internal_94c660c044ebdd63c8961a90e3904da1fbf71cbc5a161277705ae59aca8c8a76->leave($__internal_94c660c044ebdd63c8961a90e3904da1fbf71cbc5a161277705ae59aca8c8a76_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aba4bdac5ff90a97e5f3ab784962f83b9741f57283881799f49e30c443c01e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba4bdac5ff90a97e5f3ab784962f83b9741f57283881799f49e30c443c01e65->enter($__internal_aba4bdac5ff90a97e5f3ab784962f83b9741f57283881799f49e30c443c01e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4315170be85bb95d6147a735b14a0f232a25c79393286509b42e51748f756bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4315170be85bb95d6147a735b14a0f232a25c79393286509b42e51748f756bd4->enter($__internal_4315170be85bb95d6147a735b14a0f232a25c79393286509b42e51748f756bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4315170be85bb95d6147a735b14a0f232a25c79393286509b42e51748f756bd4->leave($__internal_4315170be85bb95d6147a735b14a0f232a25c79393286509b42e51748f756bd4_prof);

        
        $__internal_aba4bdac5ff90a97e5f3ab784962f83b9741f57283881799f49e30c443c01e65->leave($__internal_aba4bdac5ff90a97e5f3ab784962f83b9741f57283881799f49e30c443c01e65_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
