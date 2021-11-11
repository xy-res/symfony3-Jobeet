<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_228e8ac46aaaa0126db04bb93c2a70e5dc7b0abefc42b49737269282dc917e0d extends Twig_Template
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
        $__internal_9554239c84202ca5be7c030011b643651fdc849fb13c0093f0681b953a1a7895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9554239c84202ca5be7c030011b643651fdc849fb13c0093f0681b953a1a7895->enter($__internal_9554239c84202ca5be7c030011b643651fdc849fb13c0093f0681b953a1a7895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5a200620beb556837907ea0d5bec712b007e853cc73250e87fee4a0594d1dba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a200620beb556837907ea0d5bec712b007e853cc73250e87fee4a0594d1dba3->enter($__internal_5a200620beb556837907ea0d5bec712b007e853cc73250e87fee4a0594d1dba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9554239c84202ca5be7c030011b643651fdc849fb13c0093f0681b953a1a7895->leave($__internal_9554239c84202ca5be7c030011b643651fdc849fb13c0093f0681b953a1a7895_prof);

        
        $__internal_5a200620beb556837907ea0d5bec712b007e853cc73250e87fee4a0594d1dba3->leave($__internal_5a200620beb556837907ea0d5bec712b007e853cc73250e87fee4a0594d1dba3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
