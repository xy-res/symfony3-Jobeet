<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ded63a06244dac38f4caf2e3298ac4a45c5293af9901d6cd75d5abceec7ce429 extends Twig_Template
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
        $__internal_4dbeb113c562865a8c99510aec2e8f84ff906b742f1d355f17b42c873864ba55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dbeb113c562865a8c99510aec2e8f84ff906b742f1d355f17b42c873864ba55->enter($__internal_4dbeb113c562865a8c99510aec2e8f84ff906b742f1d355f17b42c873864ba55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a2a87bcc1254faaee5b99b115fac640b497155dd5cfe0ecbdef69b3888a1f3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a87bcc1254faaee5b99b115fac640b497155dd5cfe0ecbdef69b3888a1f3f3->enter($__internal_a2a87bcc1254faaee5b99b115fac640b497155dd5cfe0ecbdef69b3888a1f3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_4dbeb113c562865a8c99510aec2e8f84ff906b742f1d355f17b42c873864ba55->leave($__internal_4dbeb113c562865a8c99510aec2e8f84ff906b742f1d355f17b42c873864ba55_prof);

        
        $__internal_a2a87bcc1254faaee5b99b115fac640b497155dd5cfe0ecbdef69b3888a1f3f3->leave($__internal_a2a87bcc1254faaee5b99b115fac640b497155dd5cfe0ecbdef69b3888a1f3f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
