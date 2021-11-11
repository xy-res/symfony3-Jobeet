<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9c839e6962e475e969c71bbadc33b9411369e900382837047407bdd785cd15cb extends Twig_Template
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
        $__internal_799e7e1d76f048a72bfae8adffc96a80461e6838e896ddf514ac6a685cd444f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799e7e1d76f048a72bfae8adffc96a80461e6838e896ddf514ac6a685cd444f4->enter($__internal_799e7e1d76f048a72bfae8adffc96a80461e6838e896ddf514ac6a685cd444f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ad4467b517688df86006a6c6c4ad29034fd4a117ab0d64f8280288a0d7aff96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4467b517688df86006a6c6c4ad29034fd4a117ab0d64f8280288a0d7aff96f->enter($__internal_ad4467b517688df86006a6c6c4ad29034fd4a117ab0d64f8280288a0d7aff96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_799e7e1d76f048a72bfae8adffc96a80461e6838e896ddf514ac6a685cd444f4->leave($__internal_799e7e1d76f048a72bfae8adffc96a80461e6838e896ddf514ac6a685cd444f4_prof);

        
        $__internal_ad4467b517688df86006a6c6c4ad29034fd4a117ab0d64f8280288a0d7aff96f->leave($__internal_ad4467b517688df86006a6c6c4ad29034fd4a117ab0d64f8280288a0d7aff96f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
