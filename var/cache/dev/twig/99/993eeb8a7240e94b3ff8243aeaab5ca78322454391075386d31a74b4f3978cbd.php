<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5b38ae81796688ef03d9ccccf2cf7ca0c794007ccdc62429a738ff5e7e75a7a9 extends Twig_Template
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
        $__internal_6c685ebca173f9c87f0cc069ee9e8a22b0e695f6527d85a43f04f832364f9e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c685ebca173f9c87f0cc069ee9e8a22b0e695f6527d85a43f04f832364f9e67->enter($__internal_6c685ebca173f9c87f0cc069ee9e8a22b0e695f6527d85a43f04f832364f9e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ad397c698488b33ef365ee0a642024ea57f47914d8ab53fc184aa8e41dc609f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad397c698488b33ef365ee0a642024ea57f47914d8ab53fc184aa8e41dc609f0->enter($__internal_ad397c698488b33ef365ee0a642024ea57f47914d8ab53fc184aa8e41dc609f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6c685ebca173f9c87f0cc069ee9e8a22b0e695f6527d85a43f04f832364f9e67->leave($__internal_6c685ebca173f9c87f0cc069ee9e8a22b0e695f6527d85a43f04f832364f9e67_prof);

        
        $__internal_ad397c698488b33ef365ee0a642024ea57f47914d8ab53fc184aa8e41dc609f0->leave($__internal_ad397c698488b33ef365ee0a642024ea57f47914d8ab53fc184aa8e41dc609f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
