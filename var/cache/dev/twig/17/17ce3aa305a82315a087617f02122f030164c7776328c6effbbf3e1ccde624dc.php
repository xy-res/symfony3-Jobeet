<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_80ad8cc3115ab5e6b37bdf968cca3160b83fb067ebb30427bb22387485243f49 extends Twig_Template
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
        $__internal_dded62619408129c988a6cffa5108e73b6249e94c4ae70bb25856e0de8b51b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dded62619408129c988a6cffa5108e73b6249e94c4ae70bb25856e0de8b51b1b->enter($__internal_dded62619408129c988a6cffa5108e73b6249e94c4ae70bb25856e0de8b51b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_8f81fde7e0020ab6a5daa4313106923bea36a72431cacb156a98e53676c70d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f81fde7e0020ab6a5daa4313106923bea36a72431cacb156a98e53676c70d1c->enter($__internal_8f81fde7e0020ab6a5daa4313106923bea36a72431cacb156a98e53676c70d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_dded62619408129c988a6cffa5108e73b6249e94c4ae70bb25856e0de8b51b1b->leave($__internal_dded62619408129c988a6cffa5108e73b6249e94c4ae70bb25856e0de8b51b1b_prof);

        
        $__internal_8f81fde7e0020ab6a5daa4313106923bea36a72431cacb156a98e53676c70d1c->leave($__internal_8f81fde7e0020ab6a5daa4313106923bea36a72431cacb156a98e53676c70d1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
