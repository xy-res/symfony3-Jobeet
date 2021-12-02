<?php

/* base.html.twig */
class __TwigTemplate_fb9d94bc9cf75537140d68c7ddbca5bd46fe3cc635b72f7da37d793f5c0b9c0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db9aaf1adc73d3b5f51fcc9a5be64c6f92f4162bc7d4ff385b745602a68d0ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9aaf1adc73d3b5f51fcc9a5be64c6f92f4162bc7d4ff385b745602a68d0ea6->enter($__internal_db9aaf1adc73d3b5f51fcc9a5be64c6f92f4162bc7d4ff385b745602a68d0ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a49d32811d724b7b0591bac6758d82234b41d4b84b2b7acbebedff420edad644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49d32811d724b7b0591bac6758d82234b41d4b84b2b7acbebedff420edad644->enter($__internal_a49d32811d724b7b0591bac6758d82234b41d4b84b2b7acbebedff420edad644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <title>
        ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
<div id=\"container\">
    <div id=\"header\">
        <div class=\"content\">
            <h1><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("job_index");
        echo "\">
                    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
                </a></h1>

            <div id=\"sub_header\">
                <div class=\"post\">
                    <h2>Ask for people</h2>
                    <div>
                        <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("job_index");
        echo "\">Post a Job</a>
                    </div>
                </div>

                <div class=\"search\">
                    <h2>Ask for a job</h2>
                    <form action=\"\" method=\"get\">
                        <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                        <input type=\"submit\" value=\"search\" />
                        <div class=\"help\">
                            Enter some keywords (city, country, position, ...)
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id=\"content\">
        ";
        // line 49
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "notice"), "method")) {
            // line 50
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 51
                echo "                <div class=\"flash_notice\">
                    ";
                // line 52
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "        ";
        }
        // line 56
        echo "
        ";
        // line 57
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "error"), "method")) {
            // line 58
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 59
                echo "                <div class=\"flash_error\">
                    ";
                // line 60
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        ";
        }
        // line 64
        echo "
        <div class=\"content\">
            ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "        </div>
    </div>

    <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
            </a>
          </span>
            <ul>
                <li><a href=\"\">About Jobeet</a></li>
                <li class=\"feed\"><a href=\"\">Full feed</a></li>
                <li><a href=\"\">Jobeet API</a></li>
                <li class=\"last\"><a href=\"\">Affiliates</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_db9aaf1adc73d3b5f51fcc9a5be64c6f92f4162bc7d4ff385b745602a68d0ea6->leave($__internal_db9aaf1adc73d3b5f51fcc9a5be64c6f92f4162bc7d4ff385b745602a68d0ea6_prof);

        
        $__internal_a49d32811d724b7b0591bac6758d82234b41d4b84b2b7acbebedff420edad644->leave($__internal_a49d32811d724b7b0591bac6758d82234b41d4b84b2b7acbebedff420edad644_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7eeb7c85f014d166793c345cd815ae90fd99f546c5fa83a58bd1b9ec8327d185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eeb7c85f014d166793c345cd815ae90fd99f546c5fa83a58bd1b9ec8327d185->enter($__internal_7eeb7c85f014d166793c345cd815ae90fd99f546c5fa83a58bd1b9ec8327d185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26e9d798532bf43907d4fdff7b618cbd10254b4e42f21285117d8aeeaddf89d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e9d798532bf43907d4fdff7b618cbd10254b4e42f21285117d8aeeaddf89d1->enter($__internal_26e9d798532bf43907d4fdff7b618cbd10254b4e42f21285117d8aeeaddf89d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "            Jobeet - Your best job board
        ";
        
        $__internal_26e9d798532bf43907d4fdff7b618cbd10254b4e42f21285117d8aeeaddf89d1->leave($__internal_26e9d798532bf43907d4fdff7b618cbd10254b4e42f21285117d8aeeaddf89d1_prof);

        
        $__internal_7eeb7c85f014d166793c345cd815ae90fd99f546c5fa83a58bd1b9ec8327d185->leave($__internal_7eeb7c85f014d166793c345cd815ae90fd99f546c5fa83a58bd1b9ec8327d185_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7816282e76f22007cec26e947e1f68a371ab8641229683bed60d0681300aa346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7816282e76f22007cec26e947e1f68a371ab8641229683bed60d0681300aa346->enter($__internal_7816282e76f22007cec26e947e1f68a371ab8641229683bed60d0681300aa346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_21c0bfc9cf31310aadd22bd312d98cbfba1fb95c55372335dcb85cc8cb20c8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c0bfc9cf31310aadd22bd312d98cbfba1fb95c55372335dcb85cc8cb20c8a6->enter($__internal_21c0bfc9cf31310aadd22bd312d98cbfba1fb95c55372335dcb85cc8cb20c8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_21c0bfc9cf31310aadd22bd312d98cbfba1fb95c55372335dcb85cc8cb20c8a6->leave($__internal_21c0bfc9cf31310aadd22bd312d98cbfba1fb95c55372335dcb85cc8cb20c8a6_prof);

        
        $__internal_7816282e76f22007cec26e947e1f68a371ab8641229683bed60d0681300aa346->leave($__internal_7816282e76f22007cec26e947e1f68a371ab8641229683bed60d0681300aa346_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_efe69885550c7ff6b25f9742387c3c373c9244e34411d0db6fd04499b09165ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe69885550c7ff6b25f9742387c3c373c9244e34411d0db6fd04499b09165ad->enter($__internal_efe69885550c7ff6b25f9742387c3c373c9244e34411d0db6fd04499b09165ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4c9a1dbde9e4ae9f57b3a5b11dc223b16bd70152f4a4cded35844d026e19a373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9a1dbde9e4ae9f57b3a5b11dc223b16bd70152f4a4cded35844d026e19a373->enter($__internal_4c9a1dbde9e4ae9f57b3a5b11dc223b16bd70152f4a4cded35844d026e19a373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    ";
        
        $__internal_4c9a1dbde9e4ae9f57b3a5b11dc223b16bd70152f4a4cded35844d026e19a373->leave($__internal_4c9a1dbde9e4ae9f57b3a5b11dc223b16bd70152f4a4cded35844d026e19a373_prof);

        
        $__internal_efe69885550c7ff6b25f9742387c3c373c9244e34411d0db6fd04499b09165ad->leave($__internal_efe69885550c7ff6b25f9742387c3c373c9244e34411d0db6fd04499b09165ad_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfc18758243f1b33f4d47ce2b6f9d4cf516ddc02541d5bd16c61ab52fe028f58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc18758243f1b33f4d47ce2b6f9d4cf516ddc02541d5bd16c61ab52fe028f58->enter($__internal_bfc18758243f1b33f4d47ce2b6f9d4cf516ddc02541d5bd16c61ab52fe028f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df23c886577beaff0f4c25c05399305ea1e448ac7a851bb1a8f12239fb0bb382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df23c886577beaff0f4c25c05399305ea1e448ac7a851bb1a8f12239fb0bb382->enter($__internal_df23c886577beaff0f4c25c05399305ea1e448ac7a851bb1a8f12239fb0bb382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "            ";
        
        $__internal_df23c886577beaff0f4c25c05399305ea1e448ac7a851bb1a8f12239fb0bb382->leave($__internal_df23c886577beaff0f4c25c05399305ea1e448ac7a851bb1a8f12239fb0bb382_prof);

        
        $__internal_bfc18758243f1b33f4d47ce2b6f9d4cf516ddc02541d5bd16c61ab52fe028f58->leave($__internal_bfc18758243f1b33f4d47ce2b6f9d4cf516ddc02541d5bd16c61ab52fe028f58_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 67,  244 => 66,  234 => 15,  225 => 14,  212 => 12,  203 => 11,  192 => 7,  183 => 6,  159 => 76,  154 => 74,  146 => 68,  144 => 66,  140 => 64,  137 => 63,  128 => 60,  125 => 59,  120 => 58,  118 => 57,  115 => 56,  112 => 55,  103 => 52,  100 => 51,  95 => 50,  93 => 49,  71 => 30,  61 => 23,  57 => 22,  47 => 16,  44 => 14,  42 => 11,  38 => 9,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
<head>
    <title>
        {% block title %}
            Jobeet - Your best job board
        {% endblock %}
    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" type=\"text/css\" media=\"all\" />
    {% endblock %}
    {% block javascripts %}
    {% endblock %}
    <link rel=\"shortcut icon\" href=\"{{ asset('images/favicon.ico') }}\" />
</head>
<body>
<div id=\"container\">
    <div id=\"header\">
        <div class=\"content\">
            <h1><a href=\"{{ path('job_index') }}\">
                    <img src=\"{{ asset('images/logo.jpg') }}\" alt=\"Jobeet Job Board\" />
                </a></h1>

            <div id=\"sub_header\">
                <div class=\"post\">
                    <h2>Ask for people</h2>
                    <div>
                        <a href=\"{{ path('job_index') }}\">Post a Job</a>
                    </div>
                </div>

                <div class=\"search\">
                    <h2>Ask for a job</h2>
                    <form action=\"\" method=\"get\">
                        <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                        <input type=\"submit\" value=\"search\" />
                        <div class=\"help\">
                            Enter some keywords (city, country, position, ...)
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id=\"content\">
        {% if app.session.flashbag.has('notice') %}
            {% for message in app.session.flashBag.get('notice') %}
                <div class=\"flash_notice\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endif %}

        {% if app.session.flashbag.has('error') %}
            {% for message in app.session.flashBag.get('error') %}
                <div class=\"flash_error\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endif %}

        <div class=\"content\">
            {% block body %}
            {% endblock %}
        </div>
    </div>

    <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"{{ asset('images/jobeet-mini.png') }}\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"{{ asset('images/symfony.gif') }}\" alt=\"symfony framework\" />
            </a>
          </span>
            <ul>
                <li><a href=\"\">About Jobeet</a></li>
                <li class=\"feed\"><a href=\"\">Full feed</a></li>
                <li><a href=\"\">Jobeet API</a></li>
                <li class=\"last\"><a href=\"\">Affiliates</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>", "base.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony3-Jobeet\\app\\Resources\\views\\base.html.twig");
    }
}
