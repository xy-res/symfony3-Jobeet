<?php

/* IbwJobeetBundle:Job:show.html.twig */
class __TwigTemplate_35a7ae2211c32fb103c0ad7546de7524922a5db7077d6e414437acffac355b5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IbwJobeetBundle::layout.html.twig", "IbwJobeetBundle:Job:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_ea6bfbb806ab44a0e98f000ef7865b2580da59c49d10388f2e9364be4189c67c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6bfbb806ab44a0e98f000ef7865b2580da59c49d10388f2e9364be4189c67c->enter($__internal_ea6bfbb806ab44a0e98f000ef7865b2580da59c49d10388f2e9364be4189c67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle:Job:show.html.twig"));

        $__internal_4a19a1b244bef2850416ecf508c3ab4b2d52a993f314ebf558ceac1e07f532cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a19a1b244bef2850416ecf508c3ab4b2d52a993f314ebf558ceac1e07f532cf->enter($__internal_4a19a1b244bef2850416ecf508c3ab4b2d52a993f314ebf558ceac1e07f532cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle:Job:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea6bfbb806ab44a0e98f000ef7865b2580da59c49d10388f2e9364be4189c67c->leave($__internal_ea6bfbb806ab44a0e98f000ef7865b2580da59c49d10388f2e9364be4189c67c_prof);

        
        $__internal_4a19a1b244bef2850416ecf508c3ab4b2d52a993f314ebf558ceac1e07f532cf->leave($__internal_4a19a1b244bef2850416ecf508c3ab4b2d52a993f314ebf558ceac1e07f532cf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fae014180fa56d093d2ba8ccceaa0db9e2ec30f7d7f56f62f001bea2bbe2ed8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae014180fa56d093d2ba8ccceaa0db9e2ec30f7d7f56f62f001bea2bbe2ed8a->enter($__internal_fae014180fa56d093d2ba8ccceaa0db9e2ec30f7d7f56f62f001bea2bbe2ed8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78cdbd4c5d2e114b398ae40ebf7996cf3c1664ab11e373fe8c961fb011b9577b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cdbd4c5d2e114b398ae40ebf7996cf3c1664ab11e373fe8c961fb011b9577b->enter($__internal_78cdbd4c5d2e114b398ae40ebf7996cf3c1664ab11e373fe8c961fb011b9577b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
";
        
        $__internal_78cdbd4c5d2e114b398ae40ebf7996cf3c1664ab11e373fe8c961fb011b9577b->leave($__internal_78cdbd4c5d2e114b398ae40ebf7996cf3c1664ab11e373fe8c961fb011b9577b_prof);

        
        $__internal_fae014180fa56d093d2ba8ccceaa0db9e2ec30f7d7f56f62f001bea2bbe2ed8a->leave($__internal_fae014180fa56d093d2ba8ccceaa0db9e2ec30f7d7f56f62f001bea2bbe2ed8a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fac528327e0c22744dd8b94b1d6c35df097ae7f87feab0c85705dc46b1ff320f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac528327e0c22744dd8b94b1d6c35df097ae7f87feab0c85705dc46b1ff320f->enter($__internal_fac528327e0c22744dd8b94b1d6c35df097ae7f87feab0c85705dc46b1ff320f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_70609f963032f80d08329ea616fcd6229162ab47d0d9afaf26267d02f52c89fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70609f963032f80d08329ea616fcd6229162ab47d0d9afaf26267d02f52c89fe->enter($__internal_70609f963032f80d08329ea616fcd6229162ab47d0d9afaf26267d02f52c89fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ibwjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_70609f963032f80d08329ea616fcd6229162ab47d0d9afaf26267d02f52c89fe->leave($__internal_70609f963032f80d08329ea616fcd6229162ab47d0d9afaf26267d02f52c89fe_prof);

        
        $__internal_fac528327e0c22744dd8b94b1d6c35df097ae7f87feab0c85705dc46b1ff320f->leave($__internal_fac528327e0c22744dd8b94b1d6c35df097ae7f87feab0c85705dc46b1ff320f_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_fe81b39245fd923ffd102db0d28fd61d0c98bcb89856eea398145497a6872a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe81b39245fd923ffd102db0d28fd61d0c98bcb89856eea398145497a6872a2b->enter($__internal_fe81b39245fd923ffd102db0d28fd61d0c98bcb89856eea398145497a6872a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9a73218430307fb01a4dd45f023e626261991f770f927d26642a2eff9fcdc586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a73218430307fb01a4dd45f023e626261991f770f927d26642a2eff9fcdc586->enter($__internal_9a73218430307fb01a4dd45f023e626261991f770f927d26642a2eff9fcdc586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div id=\"job\">
        <h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo "</h1>
        <h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "location", array()), "html", null, true);
        echo "</h2>
        <h3>
            ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
            <small> - ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "type", array()), "html", null, true);
        echo "</small>
        </h3>
 
        ";
        // line 21
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array())) {
            // line 22
            echo "            <div class=\"logo\">
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "url", array()), "html", null, true);
            echo "\">
                    <img src=\"/uploads/jobs/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array()), "html", null, true);
            echo "\"
                        alt=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
            echo " logo\" />
                </a>
            </div>
        ";
        }
        // line 29
        echo " 
        <div class=\"description\">
            ";
        // line 31
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description", array()), "html", null, true));
        echo "
        </div>
 
        <h4>How to apply?</h4>
 
        <p class=\"how_to_apply\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "howtoapply", array()), "html", null, true);
        echo "</p>
 
        <div class=\"meta\">
            <small>posted on ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "createdat", array()), "m/d/Y"), "html", null, true);
        echo "</small>
        </div>
 
        <div style=\"padding: 20px 0\">
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ibw_job_edit", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id", array()))), "html", null, true);
        echo "\">
                Edit
            </a>
        </div>
    </div>
";
        
        $__internal_9a73218430307fb01a4dd45f023e626261991f770f927d26642a2eff9fcdc586->leave($__internal_9a73218430307fb01a4dd45f023e626261991f770f927d26642a2eff9fcdc586_prof);

        
        $__internal_fe81b39245fd923ffd102db0d28fd61d0c98bcb89856eea398145497a6872a2b->leave($__internal_fe81b39245fd923ffd102db0d28fd61d0c98bcb89856eea398145497a6872a2b_prof);

    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  161 => 39,  155 => 36,  147 => 31,  143 => 29,  136 => 25,  132 => 24,  128 => 23,  125 => 22,  123 => 21,  117 => 18,  113 => 17,  108 => 15,  104 => 14,  101 => 13,  92 => 12,  80 => 9,  75 => 8,  66 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
 
{% block title %}
    {{ job.company }} is looking for a {{ job.position }}
{% endblock %}
 
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/ibwjobeet/css/job.css') }}\" type=\"text/css\" media=\"all\" />
{% endblock %}
 
{% block content %}
    <div id=\"job\">
        <h1>{{ job.company }}</h1>
        <h2>{{ job.location }}</h2>
        <h3>
            {{ job.position }}
            <small> - {{ job.type }}</small>
        </h3>
 
        {% if job.logo %}
            <div class=\"logo\">
                <a href=\"{{ job.url }}\">
                    <img src=\"/uploads/jobs/{{ job.logo }}\"
                        alt=\"{{ job.company }} logo\" />
                </a>
            </div>
        {% endif %}
 
        <div class=\"description\">
            {{ job.description|nl2br }}
        </div>
 
        <h4>How to apply?</h4>
 
        <p class=\"how_to_apply\">{{ job.howtoapply }}</p>
 
        <div class=\"meta\">
            <small>posted on {{ job.createdat|date('m/d/Y') }}</small>
        </div>
 
        <div style=\"padding: 20px 0\">
            <a href=\"{{ path('ibw_job_edit', { 'id': job.id }) }}\">
                Edit
            </a>
        </div>
    </div>
{% endblock %}", "IbwJobeetBundle:Job:show.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\src\\Ibw\\JobeetBundle/Resources/views/Job/show.html.twig");
    }
}
