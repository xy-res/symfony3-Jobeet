<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8dec9c0b97fb699b82dce6b9533d4a69599b781c87f13690cfdb39277b72e8ab extends Twig_Template
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
        $__internal_7058a36060b7f382ed2f98b56034e0ea2436933e461af2104013d4f59a0fb252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7058a36060b7f382ed2f98b56034e0ea2436933e461af2104013d4f59a0fb252->enter($__internal_7058a36060b7f382ed2f98b56034e0ea2436933e461af2104013d4f59a0fb252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_3675ac806818f848cd31cc42aba31e82ce99a90d5ee19d5efc35c347ea80adc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3675ac806818f848cd31cc42aba31e82ce99a90d5ee19d5efc35c347ea80adc0->enter($__internal_3675ac806818f848cd31cc42aba31e82ce99a90d5ee19d5efc35c347ea80adc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7058a36060b7f382ed2f98b56034e0ea2436933e461af2104013d4f59a0fb252->leave($__internal_7058a36060b7f382ed2f98b56034e0ea2436933e461af2104013d4f59a0fb252_prof);

        
        $__internal_3675ac806818f848cd31cc42aba31e82ce99a90d5ee19d5efc35c347ea80adc0->leave($__internal_3675ac806818f848cd31cc42aba31e82ce99a90d5ee19d5efc35c347ea80adc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
