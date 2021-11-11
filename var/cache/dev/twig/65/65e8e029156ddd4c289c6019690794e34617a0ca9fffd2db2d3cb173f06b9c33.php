<?php

/* IbwJobeetBundle:Job:index.html.twig */
class __TwigTemplate_7e74b8499004d557cf8335fb82fb9c5133808c1845d6674c620044be169fbd4d extends Twig_Template
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
        $__internal_2808db785c84bf1225959cac6fa1b4d7ab5b8d3183d997e389d16625465a5cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2808db785c84bf1225959cac6fa1b4d7ab5b8d3183d997e389d16625465a5cb6->enter($__internal_2808db785c84bf1225959cac6fa1b4d7ab5b8d3183d997e389d16625465a5cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle:Job:index.html.twig"));

        $__internal_beee7daf1f87b2e9e5890678976e4dae1b60c93a921cfe7c33bc5318716181ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beee7daf1f87b2e9e5890678976e4dae1b60c93a921cfe7c33bc5318716181ca->enter($__internal_beee7daf1f87b2e9e5890678976e4dae1b60c93a921cfe7c33bc5318716181ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle:Job:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2808db785c84bf1225959cac6fa1b4d7ab5b8d3183d997e389d16625465a5cb6->leave($__internal_2808db785c84bf1225959cac6fa1b4d7ab5b8d3183d997e389d16625465a5cb6_prof);

        
        $__internal_beee7daf1f87b2e9e5890678976e4dae1b60c93a921cfe7c33bc5318716181ca->leave($__internal_beee7daf1f87b2e9e5890678976e4dae1b60c93a921cfe7c33bc5318716181ca_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43e6ca1b6db3d4a00d3f2be5f2c4fed8b59270e614ebaf49674c3cc45f13e229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e6ca1b6db3d4a00d3f2be5f2c4fed8b59270e614ebaf49674c3cc45f13e229->enter($__internal_43e6ca1b6db3d4a00d3f2be5f2c4fed8b59270e614ebaf49674c3cc45f13e229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e41799ed0e724fc9ced4d30945d0f092469eedac8ae0523e2c7bece09c154a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41799ed0e724fc9ced4d30945d0f092469eedac8ae0523e2c7bece09c154a48->enter($__internal_e41799ed0e724fc9ced4d30945d0f092469eedac8ae0523e2c7bece09c154a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ibwjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e41799ed0e724fc9ced4d30945d0f092469eedac8ae0523e2c7bece09c154a48->leave($__internal_e41799ed0e724fc9ced4d30945d0f092469eedac8ae0523e2c7bece09c154a48_prof);

        
        $__internal_43e6ca1b6db3d4a00d3f2be5f2c4fed8b59270e614ebaf49674c3cc45f13e229->leave($__internal_43e6ca1b6db3d4a00d3f2be5f2c4fed8b59270e614ebaf49674c3cc45f13e229_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_071a658287919ec5c3e88cdb1ca06dfbdcc28be6cdc78831f64be20622a8e711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071a658287919ec5c3e88cdb1ca06dfbdcc28be6cdc78831f64be20622a8e711->enter($__internal_071a658287919ec5c3e88cdb1ca06dfbdcc28be6cdc78831f64be20622a8e711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_eb7465dfc4116219ccce23bf5c7a3dbbe484128960693b34e1fb256ce54b452c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7465dfc4116219ccce23bf5c7a3dbbe484128960693b34e1fb256ce54b452c->enter($__internal_eb7465dfc4116219ccce23bf5c7a3dbbe484128960693b34e1fb256ce54b452c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div id=\"jobs\">
        <table class=\"jobs\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 13
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
                    <td class=\"location\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo "</td>
                    <td class=\"position\">
                      <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ibw_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "company" => $this->getAttribute($context["entity"], "companyslug", array()), "location" => $this->getAttribute($context["entity"], "locationslug", array()), "position" => $this->getAttribute($context["entity"], "positionslug", array()))), "html", null, true);
            echo "\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td class=\"company\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </table>
    </div>
";
        
        $__internal_eb7465dfc4116219ccce23bf5c7a3dbbe484128960693b34e1fb256ce54b452c->leave($__internal_eb7465dfc4116219ccce23bf5c7a3dbbe484128960693b34e1fb256ce54b452c_prof);

        
        $__internal_071a658287919ec5c3e88cdb1ca06dfbdcc28be6cdc78831f64be20622a8e711->leave($__internal_071a658287919ec5c3e88cdb1ca06dfbdcc28be6cdc78831f64be20622a8e711_prof);

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
        return array (  134 => 23,  117 => 20,  111 => 17,  107 => 16,  102 => 14,  97 => 13,  80 => 12,  76 => 10,  67 => 9,  55 => 6,  50 => 5,  41 => 4,  11 => 1,);
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
        <table class=\"jobs\">
            {% for entity in entities %}
                <tr class=\"{{ cycle(['even', 'odd'], loop.index) }}\">
                    <td class=\"location\">{{ entity.location }}</td>
                    <td class=\"position\">
                      <a href=\"{{ path('ibw_job_show', { 'id': entity.id, 'company': entity.companyslug, 'location': entity.locationslug, 'position': entity.positionslug}) }}\">
                            {{ entity.position }}
                        </a>
                    </td>
                    <td class=\"company\">{{ entity.company }}</td>
                </tr>
            {% endfor %}
        </table>
    </div>
{% endblock %}", "IbwJobeetBundle:Job:index.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\src\\Ibw\\JobeetBundle/Resources/views/Job/index.html.twig");
    }
}
