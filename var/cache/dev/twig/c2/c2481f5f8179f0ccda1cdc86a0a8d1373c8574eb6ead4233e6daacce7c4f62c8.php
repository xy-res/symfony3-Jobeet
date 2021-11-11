<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9c4df629ea4f9bdf1e345c8ffa02c50f97fb79a4acba0778cabf2c9e6ae68a1a extends Twig_Template
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
        $__internal_5f1e941d7c9d0de78618639575c9f0093fa29c031115c2c710c55690115854ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1e941d7c9d0de78618639575c9f0093fa29c031115c2c710c55690115854ba->enter($__internal_5f1e941d7c9d0de78618639575c9f0093fa29c031115c2c710c55690115854ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_42474b1072772462497a625361f0d5bcfd0768dd920a772333554ed29a2f62ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42474b1072772462497a625361f0d5bcfd0768dd920a772333554ed29a2f62ba->enter($__internal_42474b1072772462497a625361f0d5bcfd0768dd920a772333554ed29a2f62ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5f1e941d7c9d0de78618639575c9f0093fa29c031115c2c710c55690115854ba->leave($__internal_5f1e941d7c9d0de78618639575c9f0093fa29c031115c2c710c55690115854ba_prof);

        
        $__internal_42474b1072772462497a625361f0d5bcfd0768dd920a772333554ed29a2f62ba->leave($__internal_42474b1072772462497a625361f0d5bcfd0768dd920a772333554ed29a2f62ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
