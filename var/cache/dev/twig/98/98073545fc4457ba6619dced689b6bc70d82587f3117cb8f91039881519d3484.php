<?php

/* IbwJobeetBundle:Job:index.html.twig */
class __TwigTemplate_f80d9362bb03ed1517075cc6a583d02e221645925c7c694122a2dacac3af9f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IbwJobeetBundle::layout.html.twig", "IbwJobeetBundle:Job:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IbwJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20e2849b9328102c39830b8835017a355698f96deafbfac7efd19314e6a64ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e2849b9328102c39830b8835017a355698f96deafbfac7efd19314e6a64ca6->enter($__internal_20e2849b9328102c39830b8835017a355698f96deafbfac7efd19314e6a64ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle:Job:index.html.twig"));

        $__internal_6f6eb4acef543997aec5a81b3005d3a3f6cbb557a2f45b617a0619ea660d6fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6eb4acef543997aec5a81b3005d3a3f6cbb557a2f45b617a0619ea660d6fe9->enter($__internal_6f6eb4acef543997aec5a81b3005d3a3f6cbb557a2f45b617a0619ea660d6fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle:Job:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20e2849b9328102c39830b8835017a355698f96deafbfac7efd19314e6a64ca6->leave($__internal_20e2849b9328102c39830b8835017a355698f96deafbfac7efd19314e6a64ca6_prof);

        
        $__internal_6f6eb4acef543997aec5a81b3005d3a3f6cbb557a2f45b617a0619ea660d6fe9->leave($__internal_6f6eb4acef543997aec5a81b3005d3a3f6cbb557a2f45b617a0619ea660d6fe9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4016461d5d271a0bcfb0be04083dbed848cc742077e717ca46753045a887bf24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4016461d5d271a0bcfb0be04083dbed848cc742077e717ca46753045a887bf24->enter($__internal_4016461d5d271a0bcfb0be04083dbed848cc742077e717ca46753045a887bf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_85ae50d2b8df0c96d67b5087ccf9638f2e63be7756aac8a3c48971f822f21ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ae50d2b8df0c96d67b5087ccf9638f2e63be7756aac8a3c48971f822f21ccd->enter($__internal_85ae50d2b8df0c96d67b5087ccf9638f2e63be7756aac8a3c48971f822f21ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ibwjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_85ae50d2b8df0c96d67b5087ccf9638f2e63be7756aac8a3c48971f822f21ccd->leave($__internal_85ae50d2b8df0c96d67b5087ccf9638f2e63be7756aac8a3c48971f822f21ccd_prof);

        
        $__internal_4016461d5d271a0bcfb0be04083dbed848cc742077e717ca46753045a887bf24->leave($__internal_4016461d5d271a0bcfb0be04083dbed848cc742077e717ca46753045a887bf24_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_c96aa7079db926dc535d30e3546676daea51c612f6d492ddcb4bcccc3387f117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c96aa7079db926dc535d30e3546676daea51c612f6d492ddcb4bcccc3387f117->enter($__internal_c96aa7079db926dc535d30e3546676daea51c612f6d492ddcb4bcccc3387f117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_772af94d5ab9a7651961497b1e78f3d0efa4601cef98fd2d3914c6c64206a98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772af94d5ab9a7651961497b1e78f3d0efa4601cef98fd2d3914c6c64206a98d->enter($__internal_772af94d5ab9a7651961497b1e78f3d0efa4601cef98fd2d3914c6c64206a98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div id=\"jobs\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "            <div>
                <div class=\"category\">
                     <h1><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></h1>
                </div>
                ";
            // line 16
            echo twig_include($this->env, $context, "IbwJobeetBundle:Job:list.html.twig", array("jobs" => $this->getAttribute($context["category"], "activejobs", array())));
            echo "
                ";
            // line 17
            if ($this->getAttribute($context["category"], "morejobs", array())) {
                // line 18
                echo "                    <div class=\"more_jobs\">
                        and <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "morejobs", array()), "html", null, true);
                echo "</a>
                        more...
                    </div>
                ";
            }
            // line 23
            echo "            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
        
        $__internal_772af94d5ab9a7651961497b1e78f3d0efa4601cef98fd2d3914c6c64206a98d->leave($__internal_772af94d5ab9a7651961497b1e78f3d0efa4601cef98fd2d3914c6c64206a98d_prof);

        
        $__internal_c96aa7079db926dc535d30e3546676daea51c612f6d492ddcb4bcccc3387f117->leave($__internal_c96aa7079db926dc535d30e3546676daea51c612f6d492ddcb4bcccc3387f117_prof);

    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 25,  125 => 23,  116 => 19,  113 => 18,  111 => 17,  107 => 16,  100 => 14,  96 => 12,  79 => 11,  76 => 10,  67 => 9,  55 => 6,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'IbwJobeetBundle::layout.html.twig' %}

 
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/ibwjobeet/css/jobs.css') }}\" type=\"text/css\" media=\"all\" />
{% endblock %}
 
{% block content %}
    <div id=\"jobs\">
        {% for category in categories %}
            <div>
                <div class=\"category\">
                     <h1><a href=\"{{ path('IbwJobeetBundle_category', { 'slug': category.slug }) }}\">{{ category.name }}</a></h1>
                </div>
                {{ include ('IbwJobeetBundle:Job:list.html.twig', {'jobs': category.activejobs}) }}
                {% if category.morejobs %}
                    <div class=\"more_jobs\">
                        and <a href=\"{{ path('IbwJobeetBundle_category', { 'slug': category.slug }) }}\">{{ category.morejobs }}</a>
                        more...
                    </div>
                {% endif %}
            </div>
        {% endfor %}
    </div>
{% endblock %}", "IbwJobeetBundle:Job:index.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\src\\Ibw\\JobeetBundle\\Resources\\views\\Job\\index.html.twig");
    }
}
