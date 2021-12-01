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
        $__internal_8ff1eeabbb655feba8205c5f5eb77c526535a34ff067f1bc6227d722e4734bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff1eeabbb655feba8205c5f5eb77c526535a34ff067f1bc6227d722e4734bcd->enter($__internal_8ff1eeabbb655feba8205c5f5eb77c526535a34ff067f1bc6227d722e4734bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $__internal_9848c6b1484235a6d21a5a9a2b066c3897266c8ee74679c57cc80bb6f60aa8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9848c6b1484235a6d21a5a9a2b066c3897266c8ee74679c57cc80bb6f60aa8b1->enter($__internal_9848c6b1484235a6d21a5a9a2b066c3897266c8ee74679c57cc80bb6f60aa8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ff1eeabbb655feba8205c5f5eb77c526535a34ff067f1bc6227d722e4734bcd->leave($__internal_8ff1eeabbb655feba8205c5f5eb77c526535a34ff067f1bc6227d722e4734bcd_prof);

        
        $__internal_9848c6b1484235a6d21a5a9a2b066c3897266c8ee74679c57cc80bb6f60aa8b1->leave($__internal_9848c6b1484235a6d21a5a9a2b066c3897266c8ee74679c57cc80bb6f60aa8b1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ab75abe8ba297d57d7dc5cdcf5ff502656a9f21b5675e67b2dd763bcc12dff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab75abe8ba297d57d7dc5cdcf5ff502656a9f21b5675e67b2dd763bcc12dff5->enter($__internal_2ab75abe8ba297d57d7dc5cdcf5ff502656a9f21b5675e67b2dd763bcc12dff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5b3a4d2b3ae9dbce15f9741b84a0eb0f708ececfbb604379862cbac02b6f53b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3a4d2b3ae9dbce15f9741b84a0eb0f708ececfbb604379862cbac02b6f53b8->enter($__internal_5b3a4d2b3ae9dbce15f9741b84a0eb0f708ececfbb604379862cbac02b6f53b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5b3a4d2b3ae9dbce15f9741b84a0eb0f708ececfbb604379862cbac02b6f53b8->leave($__internal_5b3a4d2b3ae9dbce15f9741b84a0eb0f708ececfbb604379862cbac02b6f53b8_prof);

        
        $__internal_2ab75abe8ba297d57d7dc5cdcf5ff502656a9f21b5675e67b2dd763bcc12dff5->leave($__internal_2ab75abe8ba297d57d7dc5cdcf5ff502656a9f21b5675e67b2dd763bcc12dff5_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_86ce523a47ec28db03d6482cb5037c00cdc0f3719a96d85e273645dc30773de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ce523a47ec28db03d6482cb5037c00cdc0f3719a96d85e273645dc30773de8->enter($__internal_86ce523a47ec28db03d6482cb5037c00cdc0f3719a96d85e273645dc30773de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87dc424bc969fb24385f0c25f1b085649925a04052f9b14fc79af4f7cd73cccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87dc424bc969fb24385f0c25f1b085649925a04052f9b14fc79af4f7cd73cccb->enter($__internal_87dc424bc969fb24385f0c25f1b085649925a04052f9b14fc79af4f7cd73cccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div id=\"jobs\">
        <table class=\"jobs\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jobs"] ?? $this->getContext($context, "jobs")));
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
            // line 10
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
                    <td class=\"location\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</td>
                    <td class=\"position\">
                        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("job_show", array("id" => $this->getAttribute($context["job"], "id", array()), "company" => $this->getAttribute($context["job"], "companySlug", array()), "location" => $this->getAttribute($context["job"], "companySlug", array()), "position" => $this->getAttribute($context["job"], "positionSlug", array()))), "html", null, true);
            echo "\">
                            ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td class=\"company\">";
            // line 17
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
        // line 20
        echo "        </table>
    </div>
";
        
        $__internal_87dc424bc969fb24385f0c25f1b085649925a04052f9b14fc79af4f7cd73cccb->leave($__internal_87dc424bc969fb24385f0c25f1b085649925a04052f9b14fc79af4f7cd73cccb_prof);

        
        $__internal_86ce523a47ec28db03d6482cb5037c00cdc0f3719a96d85e273645dc30773de8->leave($__internal_86ce523a47ec28db03d6482cb5037c00cdc0f3719a96d85e273645dc30773de8_prof);

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
        return array (  134 => 20,  117 => 17,  111 => 14,  107 => 13,  102 => 11,  97 => 10,  80 => 9,  76 => 7,  67 => 6,  55 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
        <table class=\"jobs\">
            {% for job in jobs %}
                <tr class=\"{{ cycle(['even', 'odd'], loop.index) }}\">
                    <td class=\"location\">{{ job.location }}</td>
                    <td class=\"position\">
                        <a href=\"{{ path('job_show', { 'id': job.id,'company':job.companySlug, 'location':job.companySlug,'position':job.positionSlug}) }}\">
                            {{ job.position }}
                        </a>
                    </td>
                    <td class=\"company\">{{ job.company }}</td>
                </tr>
            {% endfor %}
        </table>
    </div>
{% endblock %}
", "job/index.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony3-Jobeet\\app\\Resources\\views\\job\\index.html.twig");
    }
}
