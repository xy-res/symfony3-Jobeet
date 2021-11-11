<?php

/* IbwJobeetBundle::layout.html.twig */
class __TwigTemplate_e9b20f7c3da1d42b7f9669e23ba2e6d585f5c3cb4e8379e6b5db9d6a433602ce extends Twig_Template
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
        $__internal_c869277acafcb7cf4a21adbf4757840476a6111dd8a57926859ab089d0df0495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c869277acafcb7cf4a21adbf4757840476a6111dd8a57926859ab089d0df0495->enter($__internal_c869277acafcb7cf4a21adbf4757840476a6111dd8a57926859ab089d0df0495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle::layout.html.twig"));

        $__internal_c48a94d745e7fc5469c3b5819d0939939405c0885507d7f59d7f2c3556b7787f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48a94d745e7fc5469c3b5819d0939939405c0885507d7f59d7f2c3556b7787f->enter($__internal_c48a94d745e7fc5469c3b5819d0939939405c0885507d7f59d7f2c3556b7787f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle::layout.html.twig"));

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
        
        $__internal_c869277acafcb7cf4a21adbf4757840476a6111dd8a57926859ab089d0df0495->leave($__internal_c869277acafcb7cf4a21adbf4757840476a6111dd8a57926859ab089d0df0495_prof);

        
        $__internal_c48a94d745e7fc5469c3b5819d0939939405c0885507d7f59d7f2c3556b7787f->leave($__internal_c48a94d745e7fc5469c3b5819d0939939405c0885507d7f59d7f2c3556b7787f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f20662d1bfe2ee2e330fe221c335b50ec34f1a0d1ccaec39f474885b0ebda31c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20662d1bfe2ee2e330fe221c335b50ec34f1a0d1ccaec39f474885b0ebda31c->enter($__internal_f20662d1bfe2ee2e330fe221c335b50ec34f1a0d1ccaec39f474885b0ebda31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6def0e1d1313c493f33b65f298f3742355801e0e5312a4e1b72f67b2eddb18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6def0e1d1313c493f33b65f298f3742355801e0e5312a4e1b72f67b2eddb18c->enter($__internal_f6def0e1d1313c493f33b65f298f3742355801e0e5312a4e1b72f67b2eddb18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "                Jobeet - Your best job board
            ";
        
        $__internal_f6def0e1d1313c493f33b65f298f3742355801e0e5312a4e1b72f67b2eddb18c->leave($__internal_f6def0e1d1313c493f33b65f298f3742355801e0e5312a4e1b72f67b2eddb18c_prof);

        
        $__internal_f20662d1bfe2ee2e330fe221c335b50ec34f1a0d1ccaec39f474885b0ebda31c->leave($__internal_f20662d1bfe2ee2e330fe221c335b50ec34f1a0d1ccaec39f474885b0ebda31c_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_478a272a04e9975d4cade9cd86e9f02a51622b594cc2cd4382d7ebeaae992cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478a272a04e9975d4cade9cd86e9f02a51622b594cc2cd4382d7ebeaae992cfc->enter($__internal_478a272a04e9975d4cade9cd86e9f02a51622b594cc2cd4382d7ebeaae992cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_419964d9155bcbfe9e77fa78d5eaa569aa845683de70c38ae70abd2297ffda9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419964d9155bcbfe9e77fa78d5eaa569aa845683de70c38ae70abd2297ffda9e->enter($__internal_419964d9155bcbfe9e77fa78d5eaa569aa845683de70c38ae70abd2297ffda9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ibwjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
        
        $__internal_419964d9155bcbfe9e77fa78d5eaa569aa845683de70c38ae70abd2297ffda9e->leave($__internal_419964d9155bcbfe9e77fa78d5eaa569aa845683de70c38ae70abd2297ffda9e_prof);

        
        $__internal_478a272a04e9975d4cade9cd86e9f02a51622b594cc2cd4382d7ebeaae992cfc->leave($__internal_478a272a04e9975d4cade9cd86e9f02a51622b594cc2cd4382d7ebeaae992cfc_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de139e6d049ea9f40440e2c7b24510cacf90ef95c82b79264df6263bfd3c743d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de139e6d049ea9f40440e2c7b24510cacf90ef95c82b79264df6263bfd3c743d->enter($__internal_de139e6d049ea9f40440e2c7b24510cacf90ef95c82b79264df6263bfd3c743d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_57afedb50186581f4408645e2cf7dfc39608df56105c0a2b3b629b898b4f1ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57afedb50186581f4408645e2cf7dfc39608df56105c0a2b3b629b898b4f1ab0->enter($__internal_57afedb50186581f4408645e2cf7dfc39608df56105c0a2b3b629b898b4f1ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "        ";
        
        $__internal_57afedb50186581f4408645e2cf7dfc39608df56105c0a2b3b629b898b4f1ab0->leave($__internal_57afedb50186581f4408645e2cf7dfc39608df56105c0a2b3b629b898b4f1ab0_prof);

        
        $__internal_de139e6d049ea9f40440e2c7b24510cacf90ef95c82b79264df6263bfd3c743d->leave($__internal_de139e6d049ea9f40440e2c7b24510cacf90ef95c82b79264df6263bfd3c743d_prof);

    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4e7980155294590061aeaef98fbacd6096138a363ae807cfa279dc907280337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e7980155294590061aeaef98fbacd6096138a363ae807cfa279dc907280337->enter($__internal_e4e7980155294590061aeaef98fbacd6096138a363ae807cfa279dc907280337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_45b5555574551c14e3f55c15bf2981f12b6894e6a856a469270346b340a49928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b5555574551c14e3f55c15bf2981f12b6894e6a856a469270346b340a49928->enter($__internal_45b5555574551c14e3f55c15bf2981f12b6894e6a856a469270346b340a49928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 63
        echo "                   ";
        
        $__internal_45b5555574551c14e3f55c15bf2981f12b6894e6a856a469270346b340a49928->leave($__internal_45b5555574551c14e3f55c15bf2981f12b6894e6a856a469270346b340a49928_prof);

        
        $__internal_e4e7980155294590061aeaef98fbacd6096138a363ae807cfa279dc907280337->leave($__internal_e4e7980155294590061aeaef98fbacd6096138a363ae807cfa279dc907280337_prof);

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
</html>", "IbwJobeetBundle::layout.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\src\\Ibw\\JobeetBundle/Resources/views/layout.html.twig");
    }
}
