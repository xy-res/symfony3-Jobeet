<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_47fe85e48b7877cae90b7bc41541ebe4fc5c0d766d0bf2abc739005784095bb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_974d63c5b825592666fe81b1f0f5a1ec1c1468d0b3f11a244a5be093737fb1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974d63c5b825592666fe81b1f0f5a1ec1c1468d0b3f11a244a5be093737fb1e1->enter($__internal_974d63c5b825592666fe81b1f0f5a1ec1c1468d0b3f11a244a5be093737fb1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_6184e83fa4a46011fe2b129a0abb7ee95eead1820a80dd761f9249bbc8926436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6184e83fa4a46011fe2b129a0abb7ee95eead1820a80dd761f9249bbc8926436->enter($__internal_6184e83fa4a46011fe2b129a0abb7ee95eead1820a80dd761f9249bbc8926436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_974d63c5b825592666fe81b1f0f5a1ec1c1468d0b3f11a244a5be093737fb1e1->leave($__internal_974d63c5b825592666fe81b1f0f5a1ec1c1468d0b3f11a244a5be093737fb1e1_prof);

        
        $__internal_6184e83fa4a46011fe2b129a0abb7ee95eead1820a80dd761f9249bbc8926436->leave($__internal_6184e83fa4a46011fe2b129a0abb7ee95eead1820a80dd761f9249bbc8926436_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a21e34281e258ccd923b8cf3d96b2d7f83873585c0bdfb5d421a5de32dc351b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21e34281e258ccd923b8cf3d96b2d7f83873585c0bdfb5d421a5de32dc351b5->enter($__internal_a21e34281e258ccd923b8cf3d96b2d7f83873585c0bdfb5d421a5de32dc351b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8cb2989059755e9a9fa1ed6416edcaa3b7f1672f1ffba6e6421ced3c78098cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb2989059755e9a9fa1ed6416edcaa3b7f1672f1ffba6e6421ced3c78098cdc->enter($__internal_8cb2989059755e9a9fa1ed6416edcaa3b7f1672f1ffba6e6421ced3c78098cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8cb2989059755e9a9fa1ed6416edcaa3b7f1672f1ffba6e6421ced3c78098cdc->leave($__internal_8cb2989059755e9a9fa1ed6416edcaa3b7f1672f1ffba6e6421ced3c78098cdc_prof);

        
        $__internal_a21e34281e258ccd923b8cf3d96b2d7f83873585c0bdfb5d421a5de32dc351b5->leave($__internal_a21e34281e258ccd923b8cf3d96b2d7f83873585c0bdfb5d421a5de32dc351b5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_742f6e19eb062bf633b42f489096d6748e066c86df7fca5ab28261d47edc8eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742f6e19eb062bf633b42f489096d6748e066c86df7fca5ab28261d47edc8eda->enter($__internal_742f6e19eb062bf633b42f489096d6748e066c86df7fca5ab28261d47edc8eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd5ab84b6c729819bc321179ee139887c320c8adc3d5dd8a0b205c103edf9fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5ab84b6c729819bc321179ee139887c320c8adc3d5dd8a0b205c103edf9fcd->enter($__internal_cd5ab84b6c729819bc321179ee139887c320c8adc3d5dd8a0b205c103edf9fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cd5ab84b6c729819bc321179ee139887c320c8adc3d5dd8a0b205c103edf9fcd->leave($__internal_cd5ab84b6c729819bc321179ee139887c320c8adc3d5dd8a0b205c103edf9fcd_prof);

        
        $__internal_742f6e19eb062bf633b42f489096d6748e066c86df7fca5ab28261d47edc8eda->leave($__internal_742f6e19eb062bf633b42f489096d6748e066c86df7fca5ab28261d47edc8eda_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddce9c224307082ae496f9b17bff49a48abfd4639f412396260b76aa940cb067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddce9c224307082ae496f9b17bff49a48abfd4639f412396260b76aa940cb067->enter($__internal_ddce9c224307082ae496f9b17bff49a48abfd4639f412396260b76aa940cb067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31eb7d71176613f04b032d157384adbf463fea09e07dafd1812ca81e94162423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31eb7d71176613f04b032d157384adbf463fea09e07dafd1812ca81e94162423->enter($__internal_31eb7d71176613f04b032d157384adbf463fea09e07dafd1812ca81e94162423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_31eb7d71176613f04b032d157384adbf463fea09e07dafd1812ca81e94162423->leave($__internal_31eb7d71176613f04b032d157384adbf463fea09e07dafd1812ca81e94162423_prof);

        
        $__internal_ddce9c224307082ae496f9b17bff49a48abfd4639f412396260b76aa940cb067->leave($__internal_ddce9c224307082ae496f9b17bff49a48abfd4639f412396260b76aa940cb067_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
