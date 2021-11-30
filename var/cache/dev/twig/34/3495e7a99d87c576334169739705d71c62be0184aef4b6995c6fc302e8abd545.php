<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3749c747f49256713b11d7c3bc93dd51d20ae64c5ce1c08ec46258e123e2ff9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28814d9a67678cf1db86855e0be2215c9176db67fcb24e874f9ece97827a413d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28814d9a67678cf1db86855e0be2215c9176db67fcb24e874f9ece97827a413d->enter($__internal_28814d9a67678cf1db86855e0be2215c9176db67fcb24e874f9ece97827a413d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0884ac2847d756b843449ba8fb32d3db96cc74b8659e95aa581061561d21d7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0884ac2847d756b843449ba8fb32d3db96cc74b8659e95aa581061561d21d7c4->enter($__internal_0884ac2847d756b843449ba8fb32d3db96cc74b8659e95aa581061561d21d7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28814d9a67678cf1db86855e0be2215c9176db67fcb24e874f9ece97827a413d->leave($__internal_28814d9a67678cf1db86855e0be2215c9176db67fcb24e874f9ece97827a413d_prof);

        
        $__internal_0884ac2847d756b843449ba8fb32d3db96cc74b8659e95aa581061561d21d7c4->leave($__internal_0884ac2847d756b843449ba8fb32d3db96cc74b8659e95aa581061561d21d7c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c07ca1b7df8474a8459b51a3a5a185e607d8a2fc96417aefa9fa8d5f1327d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c07ca1b7df8474a8459b51a3a5a185e607d8a2fc96417aefa9fa8d5f1327d34->enter($__internal_4c07ca1b7df8474a8459b51a3a5a185e607d8a2fc96417aefa9fa8d5f1327d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c3ecc905663dc47deb77aff8a7e9854bcf98c8ca3aadfc5eea6d53c98885827b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ecc905663dc47deb77aff8a7e9854bcf98c8ca3aadfc5eea6d53c98885827b->enter($__internal_c3ecc905663dc47deb77aff8a7e9854bcf98c8ca3aadfc5eea6d53c98885827b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c3ecc905663dc47deb77aff8a7e9854bcf98c8ca3aadfc5eea6d53c98885827b->leave($__internal_c3ecc905663dc47deb77aff8a7e9854bcf98c8ca3aadfc5eea6d53c98885827b_prof);

        
        $__internal_4c07ca1b7df8474a8459b51a3a5a185e607d8a2fc96417aefa9fa8d5f1327d34->leave($__internal_4c07ca1b7df8474a8459b51a3a5a185e607d8a2fc96417aefa9fa8d5f1327d34_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony3-Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
