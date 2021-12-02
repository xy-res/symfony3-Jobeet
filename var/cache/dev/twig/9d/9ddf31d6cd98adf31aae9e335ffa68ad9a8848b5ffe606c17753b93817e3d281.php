<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_704e012d6d33d6eb9dde2044ae5787141640c48ca6d3c58baf387020732fd61a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_1fa47b1e900c4293c664858d60d828bb6ca81e91aee51831aa13519b05c7d22e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa47b1e900c4293c664858d60d828bb6ca81e91aee51831aa13519b05c7d22e->enter($__internal_1fa47b1e900c4293c664858d60d828bb6ca81e91aee51831aa13519b05c7d22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4a74aced7cf7dc6751d1f489952a920dc9e6174151067779b48cc16d65d6deaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a74aced7cf7dc6751d1f489952a920dc9e6174151067779b48cc16d65d6deaa->enter($__internal_4a74aced7cf7dc6751d1f489952a920dc9e6174151067779b48cc16d65d6deaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fa47b1e900c4293c664858d60d828bb6ca81e91aee51831aa13519b05c7d22e->leave($__internal_1fa47b1e900c4293c664858d60d828bb6ca81e91aee51831aa13519b05c7d22e_prof);

        
        $__internal_4a74aced7cf7dc6751d1f489952a920dc9e6174151067779b48cc16d65d6deaa->leave($__internal_4a74aced7cf7dc6751d1f489952a920dc9e6174151067779b48cc16d65d6deaa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4fa9d65e1d0ba1ef7a7ea26716a98bfdccbe2ddbfe600ad51d27e0cb3def79fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa9d65e1d0ba1ef7a7ea26716a98bfdccbe2ddbfe600ad51d27e0cb3def79fe->enter($__internal_4fa9d65e1d0ba1ef7a7ea26716a98bfdccbe2ddbfe600ad51d27e0cb3def79fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_84610e4163d74a91710c78185f293c715e43f9fb879ad60bfd115aa027c1ba90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84610e4163d74a91710c78185f293c715e43f9fb879ad60bfd115aa027c1ba90->enter($__internal_84610e4163d74a91710c78185f293c715e43f9fb879ad60bfd115aa027c1ba90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_84610e4163d74a91710c78185f293c715e43f9fb879ad60bfd115aa027c1ba90->leave($__internal_84610e4163d74a91710c78185f293c715e43f9fb879ad60bfd115aa027c1ba90_prof);

        
        $__internal_4fa9d65e1d0ba1ef7a7ea26716a98bfdccbe2ddbfe600ad51d27e0cb3def79fe->leave($__internal_4fa9d65e1d0ba1ef7a7ea26716a98bfdccbe2ddbfe600ad51d27e0cb3def79fe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d90b29df2fa5f18e5a02153fc8d1a10b9b85961481fbb1a0af73457c21aa5bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d90b29df2fa5f18e5a02153fc8d1a10b9b85961481fbb1a0af73457c21aa5bc->enter($__internal_7d90b29df2fa5f18e5a02153fc8d1a10b9b85961481fbb1a0af73457c21aa5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bde7fa1da6a98c4948c61b0b61f1d17f66d171099e400e377ea96096fcd6f8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde7fa1da6a98c4948c61b0b61f1d17f66d171099e400e377ea96096fcd6f8e5->enter($__internal_bde7fa1da6a98c4948c61b0b61f1d17f66d171099e400e377ea96096fcd6f8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bde7fa1da6a98c4948c61b0b61f1d17f66d171099e400e377ea96096fcd6f8e5->leave($__internal_bde7fa1da6a98c4948c61b0b61f1d17f66d171099e400e377ea96096fcd6f8e5_prof);

        
        $__internal_7d90b29df2fa5f18e5a02153fc8d1a10b9b85961481fbb1a0af73457c21aa5bc->leave($__internal_7d90b29df2fa5f18e5a02153fc8d1a10b9b85961481fbb1a0af73457c21aa5bc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58a28aaebe698fe5d0cbfdcdba9116262c30d2228e5228752ac2446b20333928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a28aaebe698fe5d0cbfdcdba9116262c30d2228e5228752ac2446b20333928->enter($__internal_58a28aaebe698fe5d0cbfdcdba9116262c30d2228e5228752ac2446b20333928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f6fd4c22d9593be7c58025a8caa06627dd2d06602ad54e2a4f674ff0b3d834f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fd4c22d9593be7c58025a8caa06627dd2d06602ad54e2a4f674ff0b3d834f7->enter($__internal_f6fd4c22d9593be7c58025a8caa06627dd2d06602ad54e2a4f674ff0b3d834f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f6fd4c22d9593be7c58025a8caa06627dd2d06602ad54e2a4f674ff0b3d834f7->leave($__internal_f6fd4c22d9593be7c58025a8caa06627dd2d06602ad54e2a4f674ff0b3d834f7_prof);

        
        $__internal_58a28aaebe698fe5d0cbfdcdba9116262c30d2228e5228752ac2446b20333928->leave($__internal_58a28aaebe698fe5d0cbfdcdba9116262c30d2228e5228752ac2446b20333928_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony3-Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
