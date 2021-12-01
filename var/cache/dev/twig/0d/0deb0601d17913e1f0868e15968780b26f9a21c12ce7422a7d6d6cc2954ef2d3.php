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
        $__internal_b7b2b382f1c7255dd961e53fd881881e1181e116b40be1b5b9f0b750af73a746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b2b382f1c7255dd961e53fd881881e1181e116b40be1b5b9f0b750af73a746->enter($__internal_b7b2b382f1c7255dd961e53fd881881e1181e116b40be1b5b9f0b750af73a746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0dd6302852ee30c901c62376df2604c6e8424740c1c86fe652ba33da07cf38b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd6302852ee30c901c62376df2604c6e8424740c1c86fe652ba33da07cf38b1->enter($__internal_0dd6302852ee30c901c62376df2604c6e8424740c1c86fe652ba33da07cf38b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b7b2b382f1c7255dd961e53fd881881e1181e116b40be1b5b9f0b750af73a746->leave($__internal_b7b2b382f1c7255dd961e53fd881881e1181e116b40be1b5b9f0b750af73a746_prof);

        
        $__internal_0dd6302852ee30c901c62376df2604c6e8424740c1c86fe652ba33da07cf38b1->leave($__internal_0dd6302852ee30c901c62376df2604c6e8424740c1c86fe652ba33da07cf38b1_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd8feb4e07cd45090297d06a02b080beb221057bc6df7f1dfee4432c0350f40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8feb4e07cd45090297d06a02b080beb221057bc6df7f1dfee4432c0350f40a->enter($__internal_dd8feb4e07cd45090297d06a02b080beb221057bc6df7f1dfee4432c0350f40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd4d3ed67f32145a849d931e80e0e2bbf3e625cb6df00df597c7950775ff1140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4d3ed67f32145a849d931e80e0e2bbf3e625cb6df00df597c7950775ff1140->enter($__internal_dd4d3ed67f32145a849d931e80e0e2bbf3e625cb6df00df597c7950775ff1140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "            Jobeet - Your best job board
        ";
        
        $__internal_dd4d3ed67f32145a849d931e80e0e2bbf3e625cb6df00df597c7950775ff1140->leave($__internal_dd4d3ed67f32145a849d931e80e0e2bbf3e625cb6df00df597c7950775ff1140_prof);

        
        $__internal_dd8feb4e07cd45090297d06a02b080beb221057bc6df7f1dfee4432c0350f40a->leave($__internal_dd8feb4e07cd45090297d06a02b080beb221057bc6df7f1dfee4432c0350f40a_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6fb6a08f5c842361e52b0c1a021c87954d06b6813d50aecb3c61d06a21fec654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb6a08f5c842361e52b0c1a021c87954d06b6813d50aecb3c61d06a21fec654->enter($__internal_6fb6a08f5c842361e52b0c1a021c87954d06b6813d50aecb3c61d06a21fec654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_da4db28c758f77d9f4f71d1d8e5be79ec1dab7e0208062d129bf59bf0ef979d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4db28c758f77d9f4f71d1d8e5be79ec1dab7e0208062d129bf59bf0ef979d2->enter($__internal_da4db28c758f77d9f4f71d1d8e5be79ec1dab7e0208062d129bf59bf0ef979d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_da4db28c758f77d9f4f71d1d8e5be79ec1dab7e0208062d129bf59bf0ef979d2->leave($__internal_da4db28c758f77d9f4f71d1d8e5be79ec1dab7e0208062d129bf59bf0ef979d2_prof);

        
        $__internal_6fb6a08f5c842361e52b0c1a021c87954d06b6813d50aecb3c61d06a21fec654->leave($__internal_6fb6a08f5c842361e52b0c1a021c87954d06b6813d50aecb3c61d06a21fec654_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a895caa7defcdd32468ba155fb325190fd044a7c5e2f89a64d6538c1464c36b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a895caa7defcdd32468ba155fb325190fd044a7c5e2f89a64d6538c1464c36b1->enter($__internal_a895caa7defcdd32468ba155fb325190fd044a7c5e2f89a64d6538c1464c36b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6a2493b56e95c9882182935cae157c94b91ad775d3994e44f1dde5a63b91738b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2493b56e95c9882182935cae157c94b91ad775d3994e44f1dde5a63b91738b->enter($__internal_6a2493b56e95c9882182935cae157c94b91ad775d3994e44f1dde5a63b91738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    ";
        
        $__internal_6a2493b56e95c9882182935cae157c94b91ad775d3994e44f1dde5a63b91738b->leave($__internal_6a2493b56e95c9882182935cae157c94b91ad775d3994e44f1dde5a63b91738b_prof);

        
        $__internal_a895caa7defcdd32468ba155fb325190fd044a7c5e2f89a64d6538c1464c36b1->leave($__internal_a895caa7defcdd32468ba155fb325190fd044a7c5e2f89a64d6538c1464c36b1_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_362320578d640fa5eeb5ca9e68db2456502d76478824f42d8ebdb22df6fdaef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362320578d640fa5eeb5ca9e68db2456502d76478824f42d8ebdb22df6fdaef3->enter($__internal_362320578d640fa5eeb5ca9e68db2456502d76478824f42d8ebdb22df6fdaef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0aac334af6cafb6fdfc165eb1edba63381a7403fd1c6abac8bf15f55aaccc37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aac334af6cafb6fdfc165eb1edba63381a7403fd1c6abac8bf15f55aaccc37c->enter($__internal_0aac334af6cafb6fdfc165eb1edba63381a7403fd1c6abac8bf15f55aaccc37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "            ";
        
        $__internal_0aac334af6cafb6fdfc165eb1edba63381a7403fd1c6abac8bf15f55aaccc37c->leave($__internal_0aac334af6cafb6fdfc165eb1edba63381a7403fd1c6abac8bf15f55aaccc37c_prof);

        
        $__internal_362320578d640fa5eeb5ca9e68db2456502d76478824f42d8ebdb22df6fdaef3->leave($__internal_362320578d640fa5eeb5ca9e68db2456502d76478824f42d8ebdb22df6fdaef3_prof);

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
