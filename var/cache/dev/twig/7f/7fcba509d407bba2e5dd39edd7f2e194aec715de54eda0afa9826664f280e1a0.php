<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ec3ac6b739e785c8aef676a8943024fd86c75767a041f0f1b05816b8d359aa2f extends Twig_Template
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
        $__internal_d11db28544b3910a5a01ddd634e4c184bc137cff05d524bcb456ec4df1fb66af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11db28544b3910a5a01ddd634e4c184bc137cff05d524bcb456ec4df1fb66af->enter($__internal_d11db28544b3910a5a01ddd634e4c184bc137cff05d524bcb456ec4df1fb66af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_48a382e423f52d6142c4333c5db87dcbd718687c87991744d1464ab2196a593b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a382e423f52d6142c4333c5db87dcbd718687c87991744d1464ab2196a593b->enter($__internal_48a382e423f52d6142c4333c5db87dcbd718687c87991744d1464ab2196a593b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d11db28544b3910a5a01ddd634e4c184bc137cff05d524bcb456ec4df1fb66af->leave($__internal_d11db28544b3910a5a01ddd634e4c184bc137cff05d524bcb456ec4df1fb66af_prof);

        
        $__internal_48a382e423f52d6142c4333c5db87dcbd718687c87991744d1464ab2196a593b->leave($__internal_48a382e423f52d6142c4333c5db87dcbd718687c87991744d1464ab2196a593b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
