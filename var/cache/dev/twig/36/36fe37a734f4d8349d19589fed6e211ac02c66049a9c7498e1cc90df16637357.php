<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5f766dc1ba623aa00771436ea30ac7826055479f6629570edd362d5ce775847d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb3e61f8e9b22342311de889b2b42dec228e62e00defa65c7151a28d1219ceee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb3e61f8e9b22342311de889b2b42dec228e62e00defa65c7151a28d1219ceee->enter($__internal_cb3e61f8e9b22342311de889b2b42dec228e62e00defa65c7151a28d1219ceee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_4f9ab778f1992ba16cbfdc59b4e36978da046239b730810b7e771c39e0643c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9ab778f1992ba16cbfdc59b4e36978da046239b730810b7e771c39e0643c8f->enter($__internal_4f9ab778f1992ba16cbfdc59b4e36978da046239b730810b7e771c39e0643c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cb3e61f8e9b22342311de889b2b42dec228e62e00defa65c7151a28d1219ceee->leave($__internal_cb3e61f8e9b22342311de889b2b42dec228e62e00defa65c7151a28d1219ceee_prof);

        
        $__internal_4f9ab778f1992ba16cbfdc59b4e36978da046239b730810b7e771c39e0643c8f->leave($__internal_4f9ab778f1992ba16cbfdc59b4e36978da046239b730810b7e771c39e0643c8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
