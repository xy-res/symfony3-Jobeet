<?php

/* job/index.html.twig */
class __TwigTemplate_7ac9ea8b345fe07f64b44276f0f8fe035d88715012d9fd36c0c0b67479da98af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74f7ddc809331e0d6a39032f07ec7a043884c7c4fcd5d24f1835129ef3014500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f7ddc809331e0d6a39032f07ec7a043884c7c4fcd5d24f1835129ef3014500->enter($__internal_74f7ddc809331e0d6a39032f07ec7a043884c7c4fcd5d24f1835129ef3014500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $__internal_40902865fafd33f0f41d7af66e0fbca5104093b167e804d5f5f22a21f4603ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40902865fafd33f0f41d7af66e0fbca5104093b167e804d5f5f22a21f4603ea5->enter($__internal_40902865fafd33f0f41d7af66e0fbca5104093b167e804d5f5f22a21f4603ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74f7ddc809331e0d6a39032f07ec7a043884c7c4fcd5d24f1835129ef3014500->leave($__internal_74f7ddc809331e0d6a39032f07ec7a043884c7c4fcd5d24f1835129ef3014500_prof);

        
        $__internal_40902865fafd33f0f41d7af66e0fbca5104093b167e804d5f5f22a21f4603ea5->leave($__internal_40902865fafd33f0f41d7af66e0fbca5104093b167e804d5f5f22a21f4603ea5_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c3183e89c394649c116c04c1bf1e40492b018092c20dea54a2367475f5c8ff43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3183e89c394649c116c04c1bf1e40492b018092c20dea54a2367475f5c8ff43->enter($__internal_c3183e89c394649c116c04c1bf1e40492b018092c20dea54a2367475f5c8ff43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bf1b70007a366a3e30178a2643a9c58c29f96f64031f5068cf1199628800807f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1b70007a366a3e30178a2643a9c58c29f96f64031f5068cf1199628800807f->enter($__internal_bf1b70007a366a3e30178a2643a9c58c29f96f64031f5068cf1199628800807f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bf1b70007a366a3e30178a2643a9c58c29f96f64031f5068cf1199628800807f->leave($__internal_bf1b70007a366a3e30178a2643a9c58c29f96f64031f5068cf1199628800807f_prof);

        
        $__internal_c3183e89c394649c116c04c1bf1e40492b018092c20dea54a2367475f5c8ff43->leave($__internal_c3183e89c394649c116c04c1bf1e40492b018092c20dea54a2367475f5c8ff43_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc076b30e0fbd4dcbc3a003f20c7c94904e8317b22c1bccb7dd262a5b478da1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc076b30e0fbd4dcbc3a003f20c7c94904e8317b22c1bccb7dd262a5b478da1c->enter($__internal_bc076b30e0fbd4dcbc3a003f20c7c94904e8317b22c1bccb7dd262a5b478da1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6f7889243f25fbb31be38095a10344f7a46ee150adf799d25cc55436d2c83b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f7889243f25fbb31be38095a10344f7a46ee150adf799d25cc55436d2c83b4->enter($__internal_f6f7889243f25fbb31be38095a10344f7a46ee150adf799d25cc55436d2c83b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        <div id=\"jobs\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "                <div>
                    <div class=\"category\">
                        <div class=\"feed\">
                            <a href=\"\">Feed</a>
                        </div>
                        <h1>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</h1>
                    </div>
                    <table class=\"jobs\">
                        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "activejobs", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 18
                echo "                            <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">
                                <td class=\"location\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
                echo "</td>
                                <td class=\"position\">
                                    <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("job_show", array("id" => $this->getAttribute($context["job"], "id", array()), "company" => $this->getAttribute($context["job"], "companyslug", array()), "location" => $this->getAttribute($context["job"], "locationslug", array()), "position" => $this->getAttribute($context["job"], "positionslug", array()))), "html", null, true);
                echo "\">
                                        ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
                echo "
                                    </a>
                                </td>
                                <td class=\"company\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
                echo "</td>
                            </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    </table>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
";
        
        $__internal_f6f7889243f25fbb31be38095a10344f7a46ee150adf799d25cc55436d2c83b4->leave($__internal_f6f7889243f25fbb31be38095a10344f7a46ee150adf799d25cc55436d2c83b4_prof);

        
        $__internal_bc076b30e0fbd4dcbc3a003f20c7c94904e8317b22c1bccb7dd262a5b478da1c->leave($__internal_bc076b30e0fbd4dcbc3a003f20c7c94904e8317b22c1bccb7dd262a5b478da1c_prof);

    }

    public function getTemplateName()
    {
        return "job/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 31,  150 => 28,  133 => 25,  127 => 22,  123 => 21,  118 => 19,  113 => 18,  96 => 17,  90 => 14,  83 => 9,  79 => 8,  76 => 7,  67 => 6,  55 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/jobs.css') }}\" type=\"text/css\" media=\"all\" />
{% endblock %}
{% block body %}
        <div id=\"jobs\">
            {% for category in categories %}
                <div>
                    <div class=\"category\">
                        <div class=\"feed\">
                            <a href=\"\">Feed</a>
                        </div>
                        <h1>{{ category.name }}</h1>
                    </div>
                    <table class=\"jobs\">
                        {% for job in category.activejobs %}
                            <tr class=\"{{ cycle(['even', 'odd'], loop.index) }}\">
                                <td class=\"location\">{{ job.location }}</td>
                                <td class=\"position\">
                                    <a href=\"{{ path('job_show', { 'id': job.id, 'company': job.companyslug, 'location': job.locationslug, 'position': job.positionslug }) }}\">
                                        {{ job.position }}
                                    </a>
                                </td>
                                <td class=\"company\">{{ job.company }}</td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
            {% endfor %}
        </div>
{% endblock %}
", "job/index.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony3-Jobeet\\app\\Resources\\views\\job\\index.html.twig");
    }
}
