<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e7e3f000a6803b2d77d7a424f64c56f1a881cb209eb003adabfb1c11146895a5 extends Twig_Template
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
        $__internal_7215b442c898809aefea8a4c5298566a576e790291950df8bd1e6a7543c89abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7215b442c898809aefea8a4c5298566a576e790291950df8bd1e6a7543c89abf->enter($__internal_7215b442c898809aefea8a4c5298566a576e790291950df8bd1e6a7543c89abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b6a089c70483153d15da88f14b9c9a892d1452f10d88bf993ebc177f3bb880a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a089c70483153d15da88f14b9c9a892d1452f10d88bf993ebc177f3bb880a6->enter($__internal_b6a089c70483153d15da88f14b9c9a892d1452f10d88bf993ebc177f3bb880a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7215b442c898809aefea8a4c5298566a576e790291950df8bd1e6a7543c89abf->leave($__internal_7215b442c898809aefea8a4c5298566a576e790291950df8bd1e6a7543c89abf_prof);

        
        $__internal_b6a089c70483153d15da88f14b9c9a892d1452f10d88bf993ebc177f3bb880a6->leave($__internal_b6a089c70483153d15da88f14b9c9a892d1452f10d88bf993ebc177f3bb880a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
