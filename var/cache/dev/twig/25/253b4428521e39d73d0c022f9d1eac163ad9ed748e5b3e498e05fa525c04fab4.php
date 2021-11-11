<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_14c5c3e2a8d2238710b24b953a2a526855ac3efc3e3818fe88e685307d0e4a18 extends Twig_Template
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
        $__internal_cfb723288829d10e7d4c2e3ba0cd6f62fa9c0d29a20db096cf8f9b4667f01538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfb723288829d10e7d4c2e3ba0cd6f62fa9c0d29a20db096cf8f9b4667f01538->enter($__internal_cfb723288829d10e7d4c2e3ba0cd6f62fa9c0d29a20db096cf8f9b4667f01538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_32349d975f407d50b5e28414fe918eb100807998f24b9033593cd41516970566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32349d975f407d50b5e28414fe918eb100807998f24b9033593cd41516970566->enter($__internal_32349d975f407d50b5e28414fe918eb100807998f24b9033593cd41516970566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_cfb723288829d10e7d4c2e3ba0cd6f62fa9c0d29a20db096cf8f9b4667f01538->leave($__internal_cfb723288829d10e7d4c2e3ba0cd6f62fa9c0d29a20db096cf8f9b4667f01538_prof);

        
        $__internal_32349d975f407d50b5e28414fe918eb100807998f24b9033593cd41516970566->leave($__internal_32349d975f407d50b5e28414fe918eb100807998f24b9033593cd41516970566_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
