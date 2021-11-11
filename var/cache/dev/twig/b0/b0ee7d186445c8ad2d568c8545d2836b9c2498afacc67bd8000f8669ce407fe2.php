<?php

/* IbwJobeetBundle:Job:show.html.twig */
class __TwigTemplate_9e0a292fb766f63ef09e3753c288044e6bb86f1b701db81881ecfbf141266d96 extends Twig_Template
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
        $__internal_e65b2c4025d5e467d8be418772ab56627a8daa6cd48b4c3b9ae13598c19d8f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e65b2c4025d5e467d8be418772ab56627a8daa6cd48b4c3b9ae13598c19d8f86->enter($__internal_e65b2c4025d5e467d8be418772ab56627a8daa6cd48b4c3b9ae13598c19d8f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle:Job:show.html.twig"));

        $__internal_0ed485ffa9be5c27453f7a3cf74a4dc8b37d4de205986e8a692c081baf7c944f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed485ffa9be5c27453f7a3cf74a4dc8b37d4de205986e8a692c081baf7c944f->enter($__internal_0ed485ffa9be5c27453f7a3cf74a4dc8b37d4de205986e8a692c081baf7c944f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle:Job:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e65b2c4025d5e467d8be418772ab56627a8daa6cd48b4c3b9ae13598c19d8f86->leave($__internal_e65b2c4025d5e467d8be418772ab56627a8daa6cd48b4c3b9ae13598c19d8f86_prof);

        
        $__internal_0ed485ffa9be5c27453f7a3cf74a4dc8b37d4de205986e8a692c081baf7c944f->leave($__internal_0ed485ffa9be5c27453f7a3cf74a4dc8b37d4de205986e8a692c081baf7c944f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bebe0368e5ea32730908dc440c13ecfaaa554dd2fcf12f3bd1cfe1cfb53cfc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bebe0368e5ea32730908dc440c13ecfaaa554dd2fcf12f3bd1cfe1cfb53cfc0->enter($__internal_2bebe0368e5ea32730908dc440c13ecfaaa554dd2fcf12f3bd1cfe1cfb53cfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3408cc6957039f4ef55ab9bbd1909226e006022465605925754bcb0bf8143aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3408cc6957039f4ef55ab9bbd1909226e006022465605925754bcb0bf8143aea->enter($__internal_3408cc6957039f4ef55ab9bbd1909226e006022465605925754bcb0bf8143aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
";
        
        $__internal_3408cc6957039f4ef55ab9bbd1909226e006022465605925754bcb0bf8143aea->leave($__internal_3408cc6957039f4ef55ab9bbd1909226e006022465605925754bcb0bf8143aea_prof);

        
        $__internal_2bebe0368e5ea32730908dc440c13ecfaaa554dd2fcf12f3bd1cfe1cfb53cfc0->leave($__internal_2bebe0368e5ea32730908dc440c13ecfaaa554dd2fcf12f3bd1cfe1cfb53cfc0_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_106de3415b785bc594a503901509906d8fd9b44549bb518f90df0f07ba7c1d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_106de3415b785bc594a503901509906d8fd9b44549bb518f90df0f07ba7c1d36->enter($__internal_106de3415b785bc594a503901509906d8fd9b44549bb518f90df0f07ba7c1d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e4a5d06d57c5db8eeeb8270bf6941ef9189b8e86e058d7f9a85aa50fbbbacf2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a5d06d57c5db8eeeb8270bf6941ef9189b8e86e058d7f9a85aa50fbbbacf2d->enter($__internal_e4a5d06d57c5db8eeeb8270bf6941ef9189b8e86e058d7f9a85aa50fbbbacf2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ibwjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e4a5d06d57c5db8eeeb8270bf6941ef9189b8e86e058d7f9a85aa50fbbbacf2d->leave($__internal_e4a5d06d57c5db8eeeb8270bf6941ef9189b8e86e058d7f9a85aa50fbbbacf2d_prof);

        
        $__internal_106de3415b785bc594a503901509906d8fd9b44549bb518f90df0f07ba7c1d36->leave($__internal_106de3415b785bc594a503901509906d8fd9b44549bb518f90df0f07ba7c1d36_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_450e245797f8f35c5656a3142a4689ed0c010d4e420c1aa8a7825afa2d2abc4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_450e245797f8f35c5656a3142a4689ed0c010d4e420c1aa8a7825afa2d2abc4f->enter($__internal_450e245797f8f35c5656a3142a4689ed0c010d4e420c1aa8a7825afa2d2abc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7d9b4f0e25f307dd7f059c4c1d1cfe7c56e6e53bc67dead760541de06625f3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9b4f0e25f307dd7f059c4c1d1cfe7c56e6e53bc67dead760541de06625f3da->enter($__internal_7d9b4f0e25f307dd7f059c4c1d1cfe7c56e6e53bc67dead760541de06625f3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_7d9b4f0e25f307dd7f059c4c1d1cfe7c56e6e53bc67dead760541de06625f3da->leave($__internal_7d9b4f0e25f307dd7f059c4c1d1cfe7c56e6e53bc67dead760541de06625f3da_prof);

        
        $__internal_450e245797f8f35c5656a3142a4689ed0c010d4e420c1aa8a7825afa2d2abc4f->leave($__internal_450e245797f8f35c5656a3142a4689ed0c010d4e420c1aa8a7825afa2d2abc4f_prof);

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
{% endblock %}", "IbwJobeetBundle:Job:show.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\src\\Ibw\\JobeetBundle\\Resources\\views\\Job\\show.html.twig");
    }
}
