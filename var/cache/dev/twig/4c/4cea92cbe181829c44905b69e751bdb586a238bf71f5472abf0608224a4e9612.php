<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6bdf9b39a6b88486f44de228d2c1505520296a8297e7b1f4bd9d5136c9b3fd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5297fbee046b7d2cc3f436880e2849363c6e88f3ad5a81dcf643cfe79238257f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5297fbee046b7d2cc3f436880e2849363c6e88f3ad5a81dcf643cfe79238257f->enter($__internal_5297fbee046b7d2cc3f436880e2849363c6e88f3ad5a81dcf643cfe79238257f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ca025828f68ad34c17634ec131ace1ba734c33ddf9a6938390d79333227228a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca025828f68ad34c17634ec131ace1ba734c33ddf9a6938390d79333227228a7->enter($__internal_ca025828f68ad34c17634ec131ace1ba734c33ddf9a6938390d79333227228a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5297fbee046b7d2cc3f436880e2849363c6e88f3ad5a81dcf643cfe79238257f->leave($__internal_5297fbee046b7d2cc3f436880e2849363c6e88f3ad5a81dcf643cfe79238257f_prof);

        
        $__internal_ca025828f68ad34c17634ec131ace1ba734c33ddf9a6938390d79333227228a7->leave($__internal_ca025828f68ad34c17634ec131ace1ba734c33ddf9a6938390d79333227228a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_545135e870412333d3aacc374cb4ecf05391b5efa76df43ba9f15fe098eb1f4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_545135e870412333d3aacc374cb4ecf05391b5efa76df43ba9f15fe098eb1f4f->enter($__internal_545135e870412333d3aacc374cb4ecf05391b5efa76df43ba9f15fe098eb1f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b707578ef8959cf88c43dde8a483a0c33e0268ad4d66715a531065cc89f2278d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b707578ef8959cf88c43dde8a483a0c33e0268ad4d66715a531065cc89f2278d->enter($__internal_b707578ef8959cf88c43dde8a483a0c33e0268ad4d66715a531065cc89f2278d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b707578ef8959cf88c43dde8a483a0c33e0268ad4d66715a531065cc89f2278d->leave($__internal_b707578ef8959cf88c43dde8a483a0c33e0268ad4d66715a531065cc89f2278d_prof);

        
        $__internal_545135e870412333d3aacc374cb4ecf05391b5efa76df43ba9f15fe098eb1f4f->leave($__internal_545135e870412333d3aacc374cb4ecf05391b5efa76df43ba9f15fe098eb1f4f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72644ff4457bca71310f2d6dfa0713164bb38951657e90e7c49fa7382579609c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72644ff4457bca71310f2d6dfa0713164bb38951657e90e7c49fa7382579609c->enter($__internal_72644ff4457bca71310f2d6dfa0713164bb38951657e90e7c49fa7382579609c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dcd8cf0caa5817bc4a3b13f14ea668f71d70b9856c3c61a5bc480217e91f658a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd8cf0caa5817bc4a3b13f14ea668f71d70b9856c3c61a5bc480217e91f658a->enter($__internal_dcd8cf0caa5817bc4a3b13f14ea668f71d70b9856c3c61a5bc480217e91f658a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dcd8cf0caa5817bc4a3b13f14ea668f71d70b9856c3c61a5bc480217e91f658a->leave($__internal_dcd8cf0caa5817bc4a3b13f14ea668f71d70b9856c3c61a5bc480217e91f658a_prof);

        
        $__internal_72644ff4457bca71310f2d6dfa0713164bb38951657e90e7c49fa7382579609c->leave($__internal_72644ff4457bca71310f2d6dfa0713164bb38951657e90e7c49fa7382579609c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d45add0d4ce823d88e14ba5535e6fb53f4d419b110fc04fb9e34e9d8ec285af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45add0d4ce823d88e14ba5535e6fb53f4d419b110fc04fb9e34e9d8ec285af3->enter($__internal_d45add0d4ce823d88e14ba5535e6fb53f4d419b110fc04fb9e34e9d8ec285af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_774c83087977b3a68205e0e3177d77da01d02b28ecc8c63b79a9faab12f04921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774c83087977b3a68205e0e3177d77da01d02b28ecc8c63b79a9faab12f04921->enter($__internal_774c83087977b3a68205e0e3177d77da01d02b28ecc8c63b79a9faab12f04921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_774c83087977b3a68205e0e3177d77da01d02b28ecc8c63b79a9faab12f04921->leave($__internal_774c83087977b3a68205e0e3177d77da01d02b28ecc8c63b79a9faab12f04921_prof);

        
        $__internal_d45add0d4ce823d88e14ba5535e6fb53f4d419b110fc04fb9e34e9d8ec285af3->leave($__internal_d45add0d4ce823d88e14ba5535e6fb53f4d419b110fc04fb9e34e9d8ec285af3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
