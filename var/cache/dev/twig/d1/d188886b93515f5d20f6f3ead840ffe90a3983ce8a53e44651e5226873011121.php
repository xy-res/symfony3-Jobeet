<?php

/* base.html.twig */
class __TwigTemplate_86772047284e53516357911e5f667eafa7a7a01ef5aee93d237fd57d276efa77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e6f7832d4d407c58bdea98c4a90865a592862f235733a2cc25065551ae5c3a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e6f7832d4d407c58bdea98c4a90865a592862f235733a2cc25065551ae5c3a9->enter($__internal_6e6f7832d4d407c58bdea98c4a90865a592862f235733a2cc25065551ae5c3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d3de1c3536a15898c5e4d73bd3dfb490e580586ff448e5e1809cae71b46fdd45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3de1c3536a15898c5e4d73bd3dfb490e580586ff448e5e1809cae71b46fdd45->enter($__internal_d3de1c3536a15898c5e4d73bd3dfb490e580586ff448e5e1809cae71b46fdd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6e6f7832d4d407c58bdea98c4a90865a592862f235733a2cc25065551ae5c3a9->leave($__internal_6e6f7832d4d407c58bdea98c4a90865a592862f235733a2cc25065551ae5c3a9_prof);

        
        $__internal_d3de1c3536a15898c5e4d73bd3dfb490e580586ff448e5e1809cae71b46fdd45->leave($__internal_d3de1c3536a15898c5e4d73bd3dfb490e580586ff448e5e1809cae71b46fdd45_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ddbdf8434cfb42ea610b4e3a3eb6e8a56b439ff069749f2e3e0bc030abc051e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ddbdf8434cfb42ea610b4e3a3eb6e8a56b439ff069749f2e3e0bc030abc051e->enter($__internal_5ddbdf8434cfb42ea610b4e3a3eb6e8a56b439ff069749f2e3e0bc030abc051e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a29d646bc6563d2174507d3075cf427d9303e97119416951527bfd0ec87d1749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29d646bc6563d2174507d3075cf427d9303e97119416951527bfd0ec87d1749->enter($__internal_a29d646bc6563d2174507d3075cf427d9303e97119416951527bfd0ec87d1749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a29d646bc6563d2174507d3075cf427d9303e97119416951527bfd0ec87d1749->leave($__internal_a29d646bc6563d2174507d3075cf427d9303e97119416951527bfd0ec87d1749_prof);

        
        $__internal_5ddbdf8434cfb42ea610b4e3a3eb6e8a56b439ff069749f2e3e0bc030abc051e->leave($__internal_5ddbdf8434cfb42ea610b4e3a3eb6e8a56b439ff069749f2e3e0bc030abc051e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_585c74b181a7ea19faadffc6ff91c5aeae2292310e8b04bb524251c426e1593a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585c74b181a7ea19faadffc6ff91c5aeae2292310e8b04bb524251c426e1593a->enter($__internal_585c74b181a7ea19faadffc6ff91c5aeae2292310e8b04bb524251c426e1593a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0d36579476dcc1fde3b7bf84e433b73e01b89f9be520520068018fb7acda26a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d36579476dcc1fde3b7bf84e433b73e01b89f9be520520068018fb7acda26a9->enter($__internal_0d36579476dcc1fde3b7bf84e433b73e01b89f9be520520068018fb7acda26a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0d36579476dcc1fde3b7bf84e433b73e01b89f9be520520068018fb7acda26a9->leave($__internal_0d36579476dcc1fde3b7bf84e433b73e01b89f9be520520068018fb7acda26a9_prof);

        
        $__internal_585c74b181a7ea19faadffc6ff91c5aeae2292310e8b04bb524251c426e1593a->leave($__internal_585c74b181a7ea19faadffc6ff91c5aeae2292310e8b04bb524251c426e1593a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_479425c01a9662856a67ee560716cc41bf998104fe9fe95539479fa23555411c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_479425c01a9662856a67ee560716cc41bf998104fe9fe95539479fa23555411c->enter($__internal_479425c01a9662856a67ee560716cc41bf998104fe9fe95539479fa23555411c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de469216b4aef989d412d1221bd043e96461f0eb045863d3273d23008adf4799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de469216b4aef989d412d1221bd043e96461f0eb045863d3273d23008adf4799->enter($__internal_de469216b4aef989d412d1221bd043e96461f0eb045863d3273d23008adf4799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de469216b4aef989d412d1221bd043e96461f0eb045863d3273d23008adf4799->leave($__internal_de469216b4aef989d412d1221bd043e96461f0eb045863d3273d23008adf4799_prof);

        
        $__internal_479425c01a9662856a67ee560716cc41bf998104fe9fe95539479fa23555411c->leave($__internal_479425c01a9662856a67ee560716cc41bf998104fe9fe95539479fa23555411c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c18dcf65f4f5e090c4b15c13cbca45410be2804146d6c219a9bc2bf687c27c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c18dcf65f4f5e090c4b15c13cbca45410be2804146d6c219a9bc2bf687c27c2->enter($__internal_5c18dcf65f4f5e090c4b15c13cbca45410be2804146d6c219a9bc2bf687c27c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3a4f609739a116b3959b0a2f3443318920fcc4c26d979ac847a998ada2f4d27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4f609739a116b3959b0a2f3443318920fcc4c26d979ac847a998ada2f4d27c->enter($__internal_3a4f609739a116b3959b0a2f3443318920fcc4c26d979ac847a998ada2f4d27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3a4f609739a116b3959b0a2f3443318920fcc4c26d979ac847a998ada2f4d27c->leave($__internal_3a4f609739a116b3959b0a2f3443318920fcc4c26d979ac847a998ada2f4d27c_prof);

        
        $__internal_5c18dcf65f4f5e090c4b15c13cbca45410be2804146d6c219a9bc2bf687c27c2->leave($__internal_5c18dcf65f4f5e090c4b15c13cbca45410be2804146d6c219a9bc2bf687c27c2_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\app\\Resources\\views\\base.html.twig");
    }
}
