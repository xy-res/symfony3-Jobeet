<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b92b510ad15e43217efec13c3d5adc9a9cb2aaddff263dde4ff37c7cf648f6aa extends Twig_Template
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
        $__internal_6b382bd26789a08b22bcbe4b6fe078464e7fc42ee482ed8ab8e9d402d73167e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b382bd26789a08b22bcbe4b6fe078464e7fc42ee482ed8ab8e9d402d73167e1->enter($__internal_6b382bd26789a08b22bcbe4b6fe078464e7fc42ee482ed8ab8e9d402d73167e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_68ff0c6a41f86a9441415f3e32741ee28dd174379c9a8769d8d696c8af30aff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ff0c6a41f86a9441415f3e32741ee28dd174379c9a8769d8d696c8af30aff9->enter($__internal_68ff0c6a41f86a9441415f3e32741ee28dd174379c9a8769d8d696c8af30aff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6b382bd26789a08b22bcbe4b6fe078464e7fc42ee482ed8ab8e9d402d73167e1->leave($__internal_6b382bd26789a08b22bcbe4b6fe078464e7fc42ee482ed8ab8e9d402d73167e1_prof);

        
        $__internal_68ff0c6a41f86a9441415f3e32741ee28dd174379c9a8769d8d696c8af30aff9->leave($__internal_68ff0c6a41f86a9441415f3e32741ee28dd174379c9a8769d8d696c8af30aff9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
