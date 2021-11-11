<?php

/* ::base.html.twig */
class __TwigTemplate_f26296c38a436925b47db7e16faab5d777f1d4b8d38a5c7c756130acd737287c extends Twig_Template
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
        $__internal_106bd77d0cfd842fd8fc123545d26908779d2b1c4f91762697c897f3d4fc9001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_106bd77d0cfd842fd8fc123545d26908779d2b1c4f91762697c897f3d4fc9001->enter($__internal_106bd77d0cfd842fd8fc123545d26908779d2b1c4f91762697c897f3d4fc9001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0dbaaf8360e7922d707fe3de4092abeefe72e8c28d5a120e42a55fdf5f48e6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbaaf8360e7922d707fe3de4092abeefe72e8c28d5a120e42a55fdf5f48e6f3->enter($__internal_0dbaaf8360e7922d707fe3de4092abeefe72e8c28d5a120e42a55fdf5f48e6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_106bd77d0cfd842fd8fc123545d26908779d2b1c4f91762697c897f3d4fc9001->leave($__internal_106bd77d0cfd842fd8fc123545d26908779d2b1c4f91762697c897f3d4fc9001_prof);

        
        $__internal_0dbaaf8360e7922d707fe3de4092abeefe72e8c28d5a120e42a55fdf5f48e6f3->leave($__internal_0dbaaf8360e7922d707fe3de4092abeefe72e8c28d5a120e42a55fdf5f48e6f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a546c1e4f950ab47641dabd8845d0097bcfbe24ee2f7c69a025f75f984d42197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a546c1e4f950ab47641dabd8845d0097bcfbe24ee2f7c69a025f75f984d42197->enter($__internal_a546c1e4f950ab47641dabd8845d0097bcfbe24ee2f7c69a025f75f984d42197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2567b6daf09a49c5eef1daf3c890f90debb1c8735022680b2300240d3dac3ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2567b6daf09a49c5eef1daf3c890f90debb1c8735022680b2300240d3dac3ecb->enter($__internal_2567b6daf09a49c5eef1daf3c890f90debb1c8735022680b2300240d3dac3ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2567b6daf09a49c5eef1daf3c890f90debb1c8735022680b2300240d3dac3ecb->leave($__internal_2567b6daf09a49c5eef1daf3c890f90debb1c8735022680b2300240d3dac3ecb_prof);

        
        $__internal_a546c1e4f950ab47641dabd8845d0097bcfbe24ee2f7c69a025f75f984d42197->leave($__internal_a546c1e4f950ab47641dabd8845d0097bcfbe24ee2f7c69a025f75f984d42197_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_874a679a903720b4484472b7f61cc9572ada0e40b035aa002a7755d0855533d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874a679a903720b4484472b7f61cc9572ada0e40b035aa002a7755d0855533d3->enter($__internal_874a679a903720b4484472b7f61cc9572ada0e40b035aa002a7755d0855533d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d5b31ada3944b4cefad04e4e10855d4ded62bade8e14ca8c8a99033edb28a97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b31ada3944b4cefad04e4e10855d4ded62bade8e14ca8c8a99033edb28a97a->enter($__internal_d5b31ada3944b4cefad04e4e10855d4ded62bade8e14ca8c8a99033edb28a97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d5b31ada3944b4cefad04e4e10855d4ded62bade8e14ca8c8a99033edb28a97a->leave($__internal_d5b31ada3944b4cefad04e4e10855d4ded62bade8e14ca8c8a99033edb28a97a_prof);

        
        $__internal_874a679a903720b4484472b7f61cc9572ada0e40b035aa002a7755d0855533d3->leave($__internal_874a679a903720b4484472b7f61cc9572ada0e40b035aa002a7755d0855533d3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_65b9ce30d968006aa723b628f27ce8932192763d0c63b494c855b79f0b9a3631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b9ce30d968006aa723b628f27ce8932192763d0c63b494c855b79f0b9a3631->enter($__internal_65b9ce30d968006aa723b628f27ce8932192763d0c63b494c855b79f0b9a3631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de47f8660a10c70d33418d61b43aa15f0e1122a5c9f4e8ba4be3fdcac6699ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de47f8660a10c70d33418d61b43aa15f0e1122a5c9f4e8ba4be3fdcac6699ffc->enter($__internal_de47f8660a10c70d33418d61b43aa15f0e1122a5c9f4e8ba4be3fdcac6699ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de47f8660a10c70d33418d61b43aa15f0e1122a5c9f4e8ba4be3fdcac6699ffc->leave($__internal_de47f8660a10c70d33418d61b43aa15f0e1122a5c9f4e8ba4be3fdcac6699ffc_prof);

        
        $__internal_65b9ce30d968006aa723b628f27ce8932192763d0c63b494c855b79f0b9a3631->leave($__internal_65b9ce30d968006aa723b628f27ce8932192763d0c63b494c855b79f0b9a3631_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_390fcb1d5866d729b6cb59fc00a51b98fa707a518a71fc75612cdb819a3a8937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_390fcb1d5866d729b6cb59fc00a51b98fa707a518a71fc75612cdb819a3a8937->enter($__internal_390fcb1d5866d729b6cb59fc00a51b98fa707a518a71fc75612cdb819a3a8937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_506b57a59221d5caadbc24c5fd8a7bf356f4f837efecaf915f8a29756ce8a706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506b57a59221d5caadbc24c5fd8a7bf356f4f837efecaf915f8a29756ce8a706->enter($__internal_506b57a59221d5caadbc24c5fd8a7bf356f4f837efecaf915f8a29756ce8a706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_506b57a59221d5caadbc24c5fd8a7bf356f4f837efecaf915f8a29756ce8a706->leave($__internal_506b57a59221d5caadbc24c5fd8a7bf356f4f837efecaf915f8a29756ce8a706_prof);

        
        $__internal_390fcb1d5866d729b6cb59fc00a51b98fa707a518a71fc75612cdb819a3a8937->leave($__internal_390fcb1d5866d729b6cb59fc00a51b98fa707a518a71fc75612cdb819a3a8937_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\app/Resources\\views/base.html.twig");
    }
}
