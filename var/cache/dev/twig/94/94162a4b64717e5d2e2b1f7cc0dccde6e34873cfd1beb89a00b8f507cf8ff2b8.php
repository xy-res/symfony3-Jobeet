<?php

/* IbwJobeetBundle::layout.html.twig */
class __TwigTemplate_5cbfdc7175ef8ed47fb0320b1ec4ac5f85ec972086aa72343f59e66884b6f1e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0433faa1b3f6e7fde8a8530d1d65154eb4e7b3abcec2b198f3e5ce801398680f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0433faa1b3f6e7fde8a8530d1d65154eb4e7b3abcec2b198f3e5ce801398680f->enter($__internal_0433faa1b3f6e7fde8a8530d1d65154eb4e7b3abcec2b198f3e5ce801398680f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle::layout.html.twig"));

        $__internal_c88d20a84f2e90a5b998c886991cf1c9720b9285b9f86ef0089bcc03f3ff6ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88d20a84f2e90a5b998c886991cf1c9720b9285b9f86ef0089bcc03f3ff6ae7->enter($__internal_c88d20a84f2e90a5b998c886991cf1c9720b9285b9f86ef0089bcc03f3ff6ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>
            ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ibwjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"container\">
            <div id=\"header\">
                <div class=\"content\">
                  <h1><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ibw_jobeet_homepage");
        echo "\">
                    <img alt=\"Jobeet Job Board\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ibwjobeet/images/logo.jpg"), "html", null, true);
        echo "\" />
                        </a>
                    </h1>

                    <div id=\"sub_header\">
                        <div class=\"post\">
                            <h2>Ask for people</h2>
                            <div>
                                <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ibw_job_new");
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 50
            echo "                   <div class=\"flash_notice\">
                       ";
            // line 51
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                   </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
               ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 56
            echo "                   <div class=\"flash_error\">
                       ";
            // line 57
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                   </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
               <div class=\"content\">
                   ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "               </div>
           </div>

           <div id=\"footer\">
               <div class=\"content\">
                   <span class=\"symfony\">
                       <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ibwjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
                           powered by <a href=\"http://www.symfony.com/\">
                           <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ibwjobeet/images/symfony.gif"), "html", null, true);
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
        
        $__internal_0433faa1b3f6e7fde8a8530d1d65154eb4e7b3abcec2b198f3e5ce801398680f->leave($__internal_0433faa1b3f6e7fde8a8530d1d65154eb4e7b3abcec2b198f3e5ce801398680f_prof);

        
        $__internal_c88d20a84f2e90a5b998c886991cf1c9720b9285b9f86ef0089bcc03f3ff6ae7->leave($__internal_c88d20a84f2e90a5b998c886991cf1c9720b9285b9f86ef0089bcc03f3ff6ae7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8511828748fdbd1b494ef882880e675aceec975390cd259e2f23f355d3cb155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8511828748fdbd1b494ef882880e675aceec975390cd259e2f23f355d3cb155->enter($__internal_b8511828748fdbd1b494ef882880e675aceec975390cd259e2f23f355d3cb155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1923fd6fa31b7c9e009c77fc9eb35eff5145be375077e40d088e137f65f043d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1923fd6fa31b7c9e009c77fc9eb35eff5145be375077e40d088e137f65f043d5->enter($__internal_1923fd6fa31b7c9e009c77fc9eb35eff5145be375077e40d088e137f65f043d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "                Jobeet - Your best job board
            ";
        
        $__internal_1923fd6fa31b7c9e009c77fc9eb35eff5145be375077e40d088e137f65f043d5->leave($__internal_1923fd6fa31b7c9e009c77fc9eb35eff5145be375077e40d088e137f65f043d5_prof);

        
        $__internal_b8511828748fdbd1b494ef882880e675aceec975390cd259e2f23f355d3cb155->leave($__internal_b8511828748fdbd1b494ef882880e675aceec975390cd259e2f23f355d3cb155_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed8486c138013480ccd68513044c1ade460377142de19524acd439d3a3c37575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8486c138013480ccd68513044c1ade460377142de19524acd439d3a3c37575->enter($__internal_ed8486c138013480ccd68513044c1ade460377142de19524acd439d3a3c37575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_54d8901e2c5780ca6ddf5e73c24a0d132b74aa813b7679cb9115e22ad7db1838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d8901e2c5780ca6ddf5e73c24a0d132b74aa813b7679cb9115e22ad7db1838->enter($__internal_54d8901e2c5780ca6ddf5e73c24a0d132b74aa813b7679cb9115e22ad7db1838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ibwjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
        
        $__internal_54d8901e2c5780ca6ddf5e73c24a0d132b74aa813b7679cb9115e22ad7db1838->leave($__internal_54d8901e2c5780ca6ddf5e73c24a0d132b74aa813b7679cb9115e22ad7db1838_prof);

        
        $__internal_ed8486c138013480ccd68513044c1ade460377142de19524acd439d3a3c37575->leave($__internal_ed8486c138013480ccd68513044c1ade460377142de19524acd439d3a3c37575_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ec9a9ea4c833c84e6e4dd8778c34fe27a651c09691612f06366dde3b717b888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec9a9ea4c833c84e6e4dd8778c34fe27a651c09691612f06366dde3b717b888->enter($__internal_7ec9a9ea4c833c84e6e4dd8778c34fe27a651c09691612f06366dde3b717b888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_32defaeda32416f0b317c93d54e8448b9e64004ec7cbdfca2eed76172270dd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32defaeda32416f0b317c93d54e8448b9e64004ec7cbdfca2eed76172270dd94->enter($__internal_32defaeda32416f0b317c93d54e8448b9e64004ec7cbdfca2eed76172270dd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "        ";
        
        $__internal_32defaeda32416f0b317c93d54e8448b9e64004ec7cbdfca2eed76172270dd94->leave($__internal_32defaeda32416f0b317c93d54e8448b9e64004ec7cbdfca2eed76172270dd94_prof);

        
        $__internal_7ec9a9ea4c833c84e6e4dd8778c34fe27a651c09691612f06366dde3b717b888->leave($__internal_7ec9a9ea4c833c84e6e4dd8778c34fe27a651c09691612f06366dde3b717b888_prof);

    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        $__internal_4c543f0d118e2e4bd369c134bf03769e35f7ff7b68453a9655b5bac7d862adef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c543f0d118e2e4bd369c134bf03769e35f7ff7b68453a9655b5bac7d862adef->enter($__internal_4c543f0d118e2e4bd369c134bf03769e35f7ff7b68453a9655b5bac7d862adef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_214658b2d5bafcbac2a09f4b582d4a25300957ba4b887344a8e670a85a809d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214658b2d5bafcbac2a09f4b582d4a25300957ba4b887344a8e670a85a809d12->enter($__internal_214658b2d5bafcbac2a09f4b582d4a25300957ba4b887344a8e670a85a809d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 63
        echo "                   ";
        
        $__internal_214658b2d5bafcbac2a09f4b582d4a25300957ba4b887344a8e670a85a809d12->leave($__internal_214658b2d5bafcbac2a09f4b582d4a25300957ba4b887344a8e670a85a809d12_prof);

        
        $__internal_4c543f0d118e2e4bd369c134bf03769e35f7ff7b68453a9655b5bac7d862adef->leave($__internal_4c543f0d118e2e4bd369c134bf03769e35f7ff7b68453a9655b5bac7d862adef_prof);

    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 63,  232 => 62,  222 => 14,  213 => 13,  200 => 11,  191 => 10,  180 => 6,  171 => 5,  147 => 72,  142 => 70,  134 => 64,  132 => 62,  128 => 60,  119 => 57,  116 => 56,  112 => 55,  109 => 54,  100 => 51,  97 => 50,  93 => 49,  71 => 30,  60 => 22,  56 => 21,  46 => 15,  43 => 13,  41 => 10,  37 => 8,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>
            {% block title %}
                Jobeet - Your best job board
            {% endblock %}
        </title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/ibwjobeet/css/main.css') }}\" type=\"text/css\" media=\"all\" />
        {% endblock %}
        {% block javascripts %}
        {% endblock %}
        <link rel=\"shortcut icon\" href=\"{{ asset('bundles/ibwjobeet/images/favicon.ico') }}\" />
    </head>
    <body>
        <div id=\"container\">
            <div id=\"header\">
                <div class=\"content\">
                  <h1><a href=\"{{ path('ibw_jobeet_homepage') }}\">
                    <img alt=\"Jobeet Job Board\" src=\"{{ asset('bundles/ibwjobeet/images/logo.jpg') }}\" />
                        </a>
                    </h1>

                    <div id=\"sub_header\">
                        <div class=\"post\">
                            <h2>Ask for people</h2>
                            <div>
                                <a href=\"{{ path('ibw_job_new') }}\">Post a Job</a>
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
               {% for flashMessage in app.session.flashbag.get('notice') %}
                   <div class=\"flash_notice\">
                       {{ flashMessage }}
                   </div>
               {% endfor %}

               {% for flashMessage in app.session.flashbag.get('error') %}
                   <div class=\"flash_error\">
                       {{ flashMessage }}
                   </div>
               {% endfor %}

               <div class=\"content\">
                   {% block content %}
                   {% endblock %}
               </div>
           </div>

           <div id=\"footer\">
               <div class=\"content\">
                   <span class=\"symfony\">
                       <img src=\"{{ asset('bundles/ibwjobeet/images/jobeet-mini.png') }}\" />
                           powered by <a href=\"http://www.symfony.com/\">
                           <img src=\"{{ asset('bundles/ibwjobeet/images/symfony.gif') }}\" alt=\"symfony framework\" />
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
</html>", "IbwJobeetBundle::layout.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\src\\Ibw\\JobeetBundle\\Resources\\views\\layout.html.twig");
    }
}
