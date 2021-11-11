<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e2d81854e0f2b4224b6fa5b73e4718848477fea0e157b9426de63eb5e51e4dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7efebb6c949ac867004be071798da20af0e2254fcf8267c3ea025125ae13db75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7efebb6c949ac867004be071798da20af0e2254fcf8267c3ea025125ae13db75->enter($__internal_7efebb6c949ac867004be071798da20af0e2254fcf8267c3ea025125ae13db75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_dfd017da071d43d8ee173917dacf6d8eba5a084716a986b479b2876c5205a217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd017da071d43d8ee173917dacf6d8eba5a084716a986b479b2876c5205a217->enter($__internal_dfd017da071d43d8ee173917dacf6d8eba5a084716a986b479b2876c5205a217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7efebb6c949ac867004be071798da20af0e2254fcf8267c3ea025125ae13db75->leave($__internal_7efebb6c949ac867004be071798da20af0e2254fcf8267c3ea025125ae13db75_prof);

        
        $__internal_dfd017da071d43d8ee173917dacf6d8eba5a084716a986b479b2876c5205a217->leave($__internal_dfd017da071d43d8ee173917dacf6d8eba5a084716a986b479b2876c5205a217_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed1a3204c6d8efee97e50df33af879f3475ccaca5e3a51e6a248da0dc709c7c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1a3204c6d8efee97e50df33af879f3475ccaca5e3a51e6a248da0dc709c7c9->enter($__internal_ed1a3204c6d8efee97e50df33af879f3475ccaca5e3a51e6a248da0dc709c7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fb1e828bcc035dd5def3811e15de83541b5b2bcffb63b2408c38286865db4ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1e828bcc035dd5def3811e15de83541b5b2bcffb63b2408c38286865db4ae1->enter($__internal_fb1e828bcc035dd5def3811e15de83541b5b2bcffb63b2408c38286865db4ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_fb1e828bcc035dd5def3811e15de83541b5b2bcffb63b2408c38286865db4ae1->leave($__internal_fb1e828bcc035dd5def3811e15de83541b5b2bcffb63b2408c38286865db4ae1_prof);

        
        $__internal_ed1a3204c6d8efee97e50df33af879f3475ccaca5e3a51e6a248da0dc709c7c9->leave($__internal_ed1a3204c6d8efee97e50df33af879f3475ccaca5e3a51e6a248da0dc709c7c9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_18a7590672b541e7087dffdc84dbb26c3723ebbfb15f9c594fad7fb0ee61e898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a7590672b541e7087dffdc84dbb26c3723ebbfb15f9c594fad7fb0ee61e898->enter($__internal_18a7590672b541e7087dffdc84dbb26c3723ebbfb15f9c594fad7fb0ee61e898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1116c3ac8e9f9fe93c975871f937c19a8487af1a42c974c6181e03640459cf4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1116c3ac8e9f9fe93c975871f937c19a8487af1a42c974c6181e03640459cf4f->enter($__internal_1116c3ac8e9f9fe93c975871f937c19a8487af1a42c974c6181e03640459cf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1116c3ac8e9f9fe93c975871f937c19a8487af1a42c974c6181e03640459cf4f->leave($__internal_1116c3ac8e9f9fe93c975871f937c19a8487af1a42c974c6181e03640459cf4f_prof);

        
        $__internal_18a7590672b541e7087dffdc84dbb26c3723ebbfb15f9c594fad7fb0ee61e898->leave($__internal_18a7590672b541e7087dffdc84dbb26c3723ebbfb15f9c594fad7fb0ee61e898_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b10c7b61d18cb2dfc6055727c896b242a8a3e0854b49def161e7bc07ebace78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b10c7b61d18cb2dfc6055727c896b242a8a3e0854b49def161e7bc07ebace78->enter($__internal_6b10c7b61d18cb2dfc6055727c896b242a8a3e0854b49def161e7bc07ebace78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eaaed51bd7784e3975e3e19a2281e06ce7c2c625fbf39326d4fee03066b688f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaaed51bd7784e3975e3e19a2281e06ce7c2c625fbf39326d4fee03066b688f2->enter($__internal_eaaed51bd7784e3975e3e19a2281e06ce7c2c625fbf39326d4fee03066b688f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_eaaed51bd7784e3975e3e19a2281e06ce7c2c625fbf39326d4fee03066b688f2->leave($__internal_eaaed51bd7784e3975e3e19a2281e06ce7c2c625fbf39326d4fee03066b688f2_prof);

        
        $__internal_6b10c7b61d18cb2dfc6055727c896b242a8a3e0854b49def161e7bc07ebace78->leave($__internal_6b10c7b61d18cb2dfc6055727c896b242a8a3e0854b49def161e7bc07ebace78_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
