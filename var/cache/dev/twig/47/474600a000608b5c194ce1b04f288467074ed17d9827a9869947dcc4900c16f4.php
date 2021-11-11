<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3b718acfa007d3872018d56cf8d1f76f57f875fc8625743800a82002c105f80a extends Twig_Template
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
        $__internal_a253dc04eb842ee682420408a93ac8d5acf0a0318a1108b97e7b0b0f8a32abbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a253dc04eb842ee682420408a93ac8d5acf0a0318a1108b97e7b0b0f8a32abbd->enter($__internal_a253dc04eb842ee682420408a93ac8d5acf0a0318a1108b97e7b0b0f8a32abbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a83d19f73202af389b3079ade6cdf8ef960251ec1247f26689796819e10236f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83d19f73202af389b3079ade6cdf8ef960251ec1247f26689796819e10236f9->enter($__internal_a83d19f73202af389b3079ade6cdf8ef960251ec1247f26689796819e10236f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a253dc04eb842ee682420408a93ac8d5acf0a0318a1108b97e7b0b0f8a32abbd->leave($__internal_a253dc04eb842ee682420408a93ac8d5acf0a0318a1108b97e7b0b0f8a32abbd_prof);

        
        $__internal_a83d19f73202af389b3079ade6cdf8ef960251ec1247f26689796819e10236f9->leave($__internal_a83d19f73202af389b3079ade6cdf8ef960251ec1247f26689796819e10236f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
