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
        $__internal_d82a556f72750ddfa6da29db3f85ce02125e0488654389104b09f3ac4435e032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82a556f72750ddfa6da29db3f85ce02125e0488654389104b09f3ac4435e032->enter($__internal_d82a556f72750ddfa6da29db3f85ce02125e0488654389104b09f3ac4435e032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $__internal_e04d028a226c83324e796f0e8d990daa8f3fba569acb8242bf6114296f84ce72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04d028a226c83324e796f0e8d990daa8f3fba569acb8242bf6114296f84ce72->enter($__internal_e04d028a226c83324e796f0e8d990daa8f3fba569acb8242bf6114296f84ce72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d82a556f72750ddfa6da29db3f85ce02125e0488654389104b09f3ac4435e032->leave($__internal_d82a556f72750ddfa6da29db3f85ce02125e0488654389104b09f3ac4435e032_prof);

        
        $__internal_e04d028a226c83324e796f0e8d990daa8f3fba569acb8242bf6114296f84ce72->leave($__internal_e04d028a226c83324e796f0e8d990daa8f3fba569acb8242bf6114296f84ce72_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f5fdb0aee5cfd3d697dda1a04b9a7e7c0d08af055713d1456d32f51fb9cb3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5fdb0aee5cfd3d697dda1a04b9a7e7c0d08af055713d1456d32f51fb9cb3ca->enter($__internal_9f5fdb0aee5cfd3d697dda1a04b9a7e7c0d08af055713d1456d32f51fb9cb3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6a2b938fdee011842b8660781146e5a5a1f8f5aca2611d7c41f4c234201e4958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2b938fdee011842b8660781146e5a5a1f8f5aca2611d7c41f4c234201e4958->enter($__internal_6a2b938fdee011842b8660781146e5a5a1f8f5aca2611d7c41f4c234201e4958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6a2b938fdee011842b8660781146e5a5a1f8f5aca2611d7c41f4c234201e4958->leave($__internal_6a2b938fdee011842b8660781146e5a5a1f8f5aca2611d7c41f4c234201e4958_prof);

        
        $__internal_9f5fdb0aee5cfd3d697dda1a04b9a7e7c0d08af055713d1456d32f51fb9cb3ca->leave($__internal_9f5fdb0aee5cfd3d697dda1a04b9a7e7c0d08af055713d1456d32f51fb9cb3ca_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a283315d97e8a01f905ba55b5544ae68e35fe119d1c43395708441c455d3c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a283315d97e8a01f905ba55b5544ae68e35fe119d1c43395708441c455d3c99->enter($__internal_1a283315d97e8a01f905ba55b5544ae68e35fe119d1c43395708441c455d3c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_396268adfb92295c07224b5f88ac406c0a05a4479f4e6d9c4298f940ba394818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_396268adfb92295c07224b5f88ac406c0a05a4479f4e6d9c4298f940ba394818->enter($__internal_396268adfb92295c07224b5f88ac406c0a05a4479f4e6d9c4298f940ba394818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h1><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></h1>
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
                    ";
            // line 29
            if ($this->getAttribute($context["category"], "moreJobs", array())) {
                // line 30
                echo "                        <div class=\"more_jobs\">
                            and <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "moreJobs", array()), "html", null, true);
                echo "</a> more...
                        </div>
                    ";
            }
            // line 34
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
";
        
        $__internal_396268adfb92295c07224b5f88ac406c0a05a4479f4e6d9c4298f940ba394818->leave($__internal_396268adfb92295c07224b5f88ac406c0a05a4479f4e6d9c4298f940ba394818_prof);

        
        $__internal_1a283315d97e8a01f905ba55b5544ae68e35fe119d1c43395708441c455d3c99->leave($__internal_1a283315d97e8a01f905ba55b5544ae68e35fe119d1c43395708441c455d3c99_prof);

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
        return array (  175 => 36,  168 => 34,  160 => 31,  157 => 30,  155 => 29,  152 => 28,  135 => 25,  129 => 22,  125 => 21,  120 => 19,  115 => 18,  98 => 17,  90 => 14,  83 => 9,  79 => 8,  76 => 7,  67 => 6,  55 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
                        <h1><a href=\"{{ path('category_show', { 'slug': category.slug }) }}\">{{ category.name }}</a></h1>
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
                    {% if category.moreJobs %}
                        <div class=\"more_jobs\">
                            and <a href=\"{{ path('category_show', { 'slug': category.slug }) }}\">{{ category.moreJobs }}</a> more...
                        </div>
                    {% endif %}
                </div>
            {% endfor %}
        </div>
{% endblock %}
", "job/index.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony3-Jobeet\\app\\Resources\\views\\job\\index.html.twig");
    }
}
