<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_62cfe270d0ab74f4ededfa675130c0cf85d52452cfc091181ac197ab0a0efa99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_c6c9709841efa82452c681f7f237cc6816077d37fe9270819db474aa1f7f7a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c9709841efa82452c681f7f237cc6816077d37fe9270819db474aa1f7f7a5e->enter($__internal_c6c9709841efa82452c681f7f237cc6816077d37fe9270819db474aa1f7f7a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_c94ab1721c2649fd80cd0f0b6bfb202606a9d4d9680402cf7fc194bf00359e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94ab1721c2649fd80cd0f0b6bfb202606a9d4d9680402cf7fc194bf00359e2f->enter($__internal_c94ab1721c2649fd80cd0f0b6bfb202606a9d4d9680402cf7fc194bf00359e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6c9709841efa82452c681f7f237cc6816077d37fe9270819db474aa1f7f7a5e->leave($__internal_c6c9709841efa82452c681f7f237cc6816077d37fe9270819db474aa1f7f7a5e_prof);

        
        $__internal_c94ab1721c2649fd80cd0f0b6bfb202606a9d4d9680402cf7fc194bf00359e2f->leave($__internal_c94ab1721c2649fd80cd0f0b6bfb202606a9d4d9680402cf7fc194bf00359e2f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0491240d37f2aaa9c88999e267a8bfe261b204556f72b6aec437885691d3bef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0491240d37f2aaa9c88999e267a8bfe261b204556f72b6aec437885691d3bef7->enter($__internal_0491240d37f2aaa9c88999e267a8bfe261b204556f72b6aec437885691d3bef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c56281141993f7105e00c3571e785cfb3c34c2d24c945349d50b9069e82abffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56281141993f7105e00c3571e785cfb3c34c2d24c945349d50b9069e82abffa->enter($__internal_c56281141993f7105e00c3571e785cfb3c34c2d24c945349d50b9069e82abffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c56281141993f7105e00c3571e785cfb3c34c2d24c945349d50b9069e82abffa->leave($__internal_c56281141993f7105e00c3571e785cfb3c34c2d24c945349d50b9069e82abffa_prof);

        
        $__internal_0491240d37f2aaa9c88999e267a8bfe261b204556f72b6aec437885691d3bef7->leave($__internal_0491240d37f2aaa9c88999e267a8bfe261b204556f72b6aec437885691d3bef7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3d6c4517ea5ca9c235af83c0f1eab9cb0c7e2a7601feaf7261ee981dc442e22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d6c4517ea5ca9c235af83c0f1eab9cb0c7e2a7601feaf7261ee981dc442e22->enter($__internal_e3d6c4517ea5ca9c235af83c0f1eab9cb0c7e2a7601feaf7261ee981dc442e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2b1daefb3af3f259fd5e9c108c309a23d58d14e0bd34edb1771fa6574911698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b1daefb3af3f259fd5e9c108c309a23d58d14e0bd34edb1771fa6574911698->enter($__internal_e2b1daefb3af3f259fd5e9c108c309a23d58d14e0bd34edb1771fa6574911698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e2b1daefb3af3f259fd5e9c108c309a23d58d14e0bd34edb1771fa6574911698->leave($__internal_e2b1daefb3af3f259fd5e9c108c309a23d58d14e0bd34edb1771fa6574911698_prof);

        
        $__internal_e3d6c4517ea5ca9c235af83c0f1eab9cb0c7e2a7601feaf7261ee981dc442e22->leave($__internal_e3d6c4517ea5ca9c235af83c0f1eab9cb0c7e2a7601feaf7261ee981dc442e22_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_97273b2972de356cbc35d459113dd529acccbf7835e6539105ab239b378d8e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97273b2972de356cbc35d459113dd529acccbf7835e6539105ab239b378d8e96->enter($__internal_97273b2972de356cbc35d459113dd529acccbf7835e6539105ab239b378d8e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1b5bcbeae32cc5735b67ede9ee62fe20f121f371d2f11277ca5457d3e2c628f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b5bcbeae32cc5735b67ede9ee62fe20f121f371d2f11277ca5457d3e2c628f->enter($__internal_d1b5bcbeae32cc5735b67ede9ee62fe20f121f371d2f11277ca5457d3e2c628f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_d1b5bcbeae32cc5735b67ede9ee62fe20f121f371d2f11277ca5457d3e2c628f->leave($__internal_d1b5bcbeae32cc5735b67ede9ee62fe20f121f371d2f11277ca5457d3e2c628f_prof);

        
        $__internal_97273b2972de356cbc35d459113dd529acccbf7835e6539105ab239b378d8e96->leave($__internal_97273b2972de356cbc35d459113dd529acccbf7835e6539105ab239b378d8e96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
