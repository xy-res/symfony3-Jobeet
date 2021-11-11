<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a32a2300229e65097bb9c052c2988d133c1507631ac9bb906f431e2ec968fcfa extends Twig_Template
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
        $__internal_95380228ec2b355014b782e72f2b47f06fa9a4d5e5789af785b3c7bddd562dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95380228ec2b355014b782e72f2b47f06fa9a4d5e5789af785b3c7bddd562dc2->enter($__internal_95380228ec2b355014b782e72f2b47f06fa9a4d5e5789af785b3c7bddd562dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1e38240ebdf524c841d6597ab53dd01fad0b2b58baee013f9918438478eaca27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e38240ebdf524c841d6597ab53dd01fad0b2b58baee013f9918438478eaca27->enter($__internal_1e38240ebdf524c841d6597ab53dd01fad0b2b58baee013f9918438478eaca27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_95380228ec2b355014b782e72f2b47f06fa9a4d5e5789af785b3c7bddd562dc2->leave($__internal_95380228ec2b355014b782e72f2b47f06fa9a4d5e5789af785b3c7bddd562dc2_prof);

        
        $__internal_1e38240ebdf524c841d6597ab53dd01fad0b2b58baee013f9918438478eaca27->leave($__internal_1e38240ebdf524c841d6597ab53dd01fad0b2b58baee013f9918438478eaca27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
