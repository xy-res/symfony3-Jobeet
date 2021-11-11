<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2867206b76ebf5b7bfb8b1a11c64c11726dde62a2420441a86e55cdda0040bc7 extends Twig_Template
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
        $__internal_8a013fa13df93a298be6a3df2a20992510cbe45292a0a565410f16ac913c3c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a013fa13df93a298be6a3df2a20992510cbe45292a0a565410f16ac913c3c83->enter($__internal_8a013fa13df93a298be6a3df2a20992510cbe45292a0a565410f16ac913c3c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_bb35dd1a82db7689e9a5d0876908cb6d2ad6e15fd9f9d309d9996785e9f9d195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb35dd1a82db7689e9a5d0876908cb6d2ad6e15fd9f9d309d9996785e9f9d195->enter($__internal_bb35dd1a82db7689e9a5d0876908cb6d2ad6e15fd9f9d309d9996785e9f9d195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8a013fa13df93a298be6a3df2a20992510cbe45292a0a565410f16ac913c3c83->leave($__internal_8a013fa13df93a298be6a3df2a20992510cbe45292a0a565410f16ac913c3c83_prof);

        
        $__internal_bb35dd1a82db7689e9a5d0876908cb6d2ad6e15fd9f9d309d9996785e9f9d195->leave($__internal_bb35dd1a82db7689e9a5d0876908cb6d2ad6e15fd9f9d309d9996785e9f9d195_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
