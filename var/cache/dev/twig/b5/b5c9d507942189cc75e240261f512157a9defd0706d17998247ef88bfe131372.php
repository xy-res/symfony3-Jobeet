<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a9176dd160aec8e1de333faee3904b041a2b8330e7a830cb611afa27ae1af28b extends Twig_Template
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
        $__internal_125c02a6d2ce2ce416d9bc8dabcd5b30bf5498beccb30ae9c6c5708c969e287c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125c02a6d2ce2ce416d9bc8dabcd5b30bf5498beccb30ae9c6c5708c969e287c->enter($__internal_125c02a6d2ce2ce416d9bc8dabcd5b30bf5498beccb30ae9c6c5708c969e287c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_81fd4ff482a2df5fed9128f1b6d5063bf16684399d49ac1d1ffd0ad7d1bf40d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81fd4ff482a2df5fed9128f1b6d5063bf16684399d49ac1d1ffd0ad7d1bf40d6->enter($__internal_81fd4ff482a2df5fed9128f1b6d5063bf16684399d49ac1d1ffd0ad7d1bf40d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_125c02a6d2ce2ce416d9bc8dabcd5b30bf5498beccb30ae9c6c5708c969e287c->leave($__internal_125c02a6d2ce2ce416d9bc8dabcd5b30bf5498beccb30ae9c6c5708c969e287c_prof);

        
        $__internal_81fd4ff482a2df5fed9128f1b6d5063bf16684399d49ac1d1ffd0ad7d1bf40d6->leave($__internal_81fd4ff482a2df5fed9128f1b6d5063bf16684399d49ac1d1ffd0ad7d1bf40d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
