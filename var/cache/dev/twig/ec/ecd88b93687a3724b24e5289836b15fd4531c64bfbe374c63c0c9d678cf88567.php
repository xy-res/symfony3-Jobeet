<?php

/* IbwJobeetBundle:Category:show.html.twig */
class __TwigTemplate_757b10b9a811ccec417d83c1c5582dfa4a55f146abad6d4e64e76df8e5e7d433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IbwJobeetBundle::layout.html.twig", "IbwJobeetBundle:Category:show.html.twig", 1);
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
        $__internal_e76c5466f5b96aa4ceae99c95cbf587cb579e4bca6803999a4797a88ee7f7d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76c5466f5b96aa4ceae99c95cbf587cb579e4bca6803999a4797a88ee7f7d29->enter($__internal_e76c5466f5b96aa4ceae99c95cbf587cb579e4bca6803999a4797a88ee7f7d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle:Category:show.html.twig"));

        $__internal_4d75d01a23c2c3ce295cd438c65930a5ed820241ba41ea2ee8e08132787b5617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d75d01a23c2c3ce295cd438c65930a5ed820241ba41ea2ee8e08132787b5617->enter($__internal_4d75d01a23c2c3ce295cd438c65930a5ed820241ba41ea2ee8e08132787b5617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle:Category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e76c5466f5b96aa4ceae99c95cbf587cb579e4bca6803999a4797a88ee7f7d29->leave($__internal_e76c5466f5b96aa4ceae99c95cbf587cb579e4bca6803999a4797a88ee7f7d29_prof);

        
        $__internal_4d75d01a23c2c3ce295cd438c65930a5ed820241ba41ea2ee8e08132787b5617->leave($__internal_4d75d01a23c2c3ce295cd438c65930a5ed820241ba41ea2ee8e08132787b5617_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f7710b334baa83d198af84c83d4bb767147ddca736f79dec67ad81e1c655c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f7710b334baa83d198af84c83d4bb767147ddca736f79dec67ad81e1c655c76->enter($__internal_0f7710b334baa83d198af84c83d4bb767147ddca736f79dec67ad81e1c655c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_969434300ca4d4abaf18216a300dfe87bc7651d4673df1d9175e1c220a47d4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969434300ca4d4abaf18216a300dfe87bc7651d4673df1d9175e1c220a47d4f4->enter($__internal_969434300ca4d4abaf18216a300dfe87bc7651d4673df1d9175e1c220a47d4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo " category
";
        
        $__internal_969434300ca4d4abaf18216a300dfe87bc7651d4673df1d9175e1c220a47d4f4->leave($__internal_969434300ca4d4abaf18216a300dfe87bc7651d4673df1d9175e1c220a47d4f4_prof);

        
        $__internal_0f7710b334baa83d198af84c83d4bb767147ddca736f79dec67ad81e1c655c76->leave($__internal_0f7710b334baa83d198af84c83d4bb767147ddca736f79dec67ad81e1c655c76_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e13e7ddc2542435041d448a56c81f1038d017836c61c30b2f6c938303f75e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e13e7ddc2542435041d448a56c81f1038d017836c61c30b2f6c938303f75e74->enter($__internal_2e13e7ddc2542435041d448a56c81f1038d017836c61c30b2f6c938303f75e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1cc8a8eaeee620270ecfad5b1c85e22ae6c8f2a9e3666a2414023e850564ff25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc8a8eaeee620270ecfad5b1c85e22ae6c8f2a9e3666a2414023e850564ff25->enter($__internal_1cc8a8eaeee620270ecfad5b1c85e22ae6c8f2a9e3666a2414023e850564ff25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ibwjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1cc8a8eaeee620270ecfad5b1c85e22ae6c8f2a9e3666a2414023e850564ff25->leave($__internal_1cc8a8eaeee620270ecfad5b1c85e22ae6c8f2a9e3666a2414023e850564ff25_prof);

        
        $__internal_2e13e7ddc2542435041d448a56c81f1038d017836c61c30b2f6c938303f75e74->leave($__internal_2e13e7ddc2542435041d448a56c81f1038d017836c61c30b2f6c938303f75e74_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_f9bd0d38a41c2c552d7e27eba9744d4fcb6517fa95964b663306af7991aedc69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9bd0d38a41c2c552d7e27eba9744d4fcb6517fa95964b663306af7991aedc69->enter($__internal_f9bd0d38a41c2c552d7e27eba9744d4fcb6517fa95964b663306af7991aedc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7ff19332dc72b7a74a5f016406694e088ad28bc2e1cbbc52708103e211499ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff19332dc72b7a74a5f016406694e088ad28bc2e1cbbc52708103e211499ea1->enter($__internal_7ff19332dc72b7a74a5f016406694e088ad28bc2e1cbbc52708103e211499ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"category\">
        <div class=\"feed\">
            <a href=\"\">Feed
            </a>
        </div>
        <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</h1>
    </div>
 
    ";
        // line 21
        echo twig_include($this->env, $context, "IbwJobeetBundle:Job:list.html.twig", array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array())));
        echo "
 
    ";
        // line 23
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 24
            echo "        <div class=\"pagination\">
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => 1)), "html", null, true);
            echo "\">
                <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ibwjobeet/images/first.png"), "html", null, true);
            echo "\" alt=\"First page\" title=\"First page\" />
            </a>
 
            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => (isset($context["previous_page"]) ? $context["previous_page"] : $this->getContext($context, "previous_page")))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ibwjobeet/images/previous.png"), "html", null, true);
            echo "\" alt=\"Previous page\" title=\"Previous page\" />
            </a>
 
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page"))));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 34
                echo "                ";
                if (($context["page"] == (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")))) {
                    // line 35
                    echo "                    ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
                ";
                } else {
                    // line 37
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => $context["page"])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                ";
                }
                // line 39
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo " 
            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => (isset($context["next_page"]) ? $context["next_page"] : $this->getContext($context, "next_page")))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ibwjobeet/images/next.png"), "html", null, true);
            echo "\" alt=\"Next page\" title=\"Next page\" />
            </a>
 
            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ibwjobeet/images/last.png"), "html", null, true);
            echo "\" alt=\"Last page\" title=\"Last page\" />
            </a>
        </div>
    ";
        }
        // line 50
        echo " 
    <div class=\"pagination_desc\">
        <strong>";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["total_jobs"]) ? $context["total_jobs"] : $this->getContext($context, "total_jobs")), "html", null, true);
        echo "</strong> jobs in this category
 
        ";
        // line 54
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 55
            echo "            - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")), "html", null, true);
            echo "</strong>
        ";
        }
        // line 57
        echo "    </div>
";
        
        $__internal_7ff19332dc72b7a74a5f016406694e088ad28bc2e1cbbc52708103e211499ea1->leave($__internal_7ff19332dc72b7a74a5f016406694e088ad28bc2e1cbbc52708103e211499ea1_prof);

        
        $__internal_f9bd0d38a41c2c552d7e27eba9744d4fcb6517fa95964b663306af7991aedc69->leave($__internal_f9bd0d38a41c2c552d7e27eba9744d4fcb6517fa95964b663306af7991aedc69_prof);

    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 57,  204 => 55,  202 => 54,  197 => 52,  193 => 50,  186 => 46,  182 => 45,  176 => 42,  172 => 41,  169 => 40,  163 => 39,  155 => 37,  149 => 35,  146 => 34,  142 => 33,  136 => 30,  132 => 29,  126 => 26,  122 => 25,  119 => 24,  117 => 23,  112 => 21,  106 => 18,  99 => 13,  90 => 12,  78 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Jobs in the {{ category.name }} category
{% endblock %}
 
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/ibwjobeet/css/jobs.css') }}\" type=\"text/css\" media=\"all\" />
{% endblock %}
 
{% block content %}
    <div class=\"category\">
        <div class=\"feed\">
            <a href=\"\">Feed
            </a>
        </div>
        <h1>{{ category.name }}</h1>
    </div>
 
    {{ include ('IbwJobeetBundle:Job:list.html.twig', {'jobs': category.activejobs}) }}
 
    {% if last_page > 1 %}
        <div class=\"pagination\">
            <a href=\"{{ path('IbwJobeetBundle_category', { 'slug': category.slug, 'page': 1 }) }}\">
                <img src=\"{{ asset('bundles/ibwjobeet/images/first.png') }}\" alt=\"First page\" title=\"First page\" />
            </a>
 
            <a href=\"{{ path('IbwJobeetBundle_category', { 'slug': category.slug, 'page': previous_page }) }}\">
                <img src=\"{{ asset('bundles/ibwjobeet/images/previous.png') }}\" alt=\"Previous page\" title=\"Previous page\" />
            </a>
 
            {% for page in 1..last_page %}
                {% if page == current_page %}
                    {{ page }}
                {% else %}
                    <a href=\"{{ path('IbwJobeetBundle_category', { 'slug': category.slug, 'page': page }) }}\">{{ page }}</a>
                {% endif %}
            {% endfor %}
 
            <a href=\"{{ path('IbwJobeetBundle_category', { 'slug': category.slug, 'page': next_page }) }}\">
                <img src=\"{{ asset('bundles/ibwjobeet/images/next.png') }}\" alt=\"Next page\" title=\"Next page\" />
            </a>
 
            <a href=\"{{ path('IbwJobeetBundle_category', { 'slug': category.slug, 'page': last_page }) }}\">
                <img src=\"{{ asset('bundles/ibwjobeet/images/last.png') }}\" alt=\"Last page\" title=\"Last page\" />
            </a>
        </div>
    {% endif %}
 
    <div class=\"pagination_desc\">
        <strong>{{ total_jobs }}</strong> jobs in this category
 
        {% if last_page > 1 %}
            - page <strong>{{ current_page }}/{{ last_page }}</strong>
        {% endif %}
    </div>
{% endblock %}", "IbwJobeetBundle:Category:show.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\src\\Ibw\\JobeetBundle/Resources/views/Category/show.html.twig");
    }
}
