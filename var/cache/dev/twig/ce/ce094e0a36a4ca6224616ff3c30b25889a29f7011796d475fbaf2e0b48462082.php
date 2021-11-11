<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ad3fa144b1bf2eb634e7bba0fe3de7bc5b7f81b32c15336c2bd01fda66383bff extends Twig_Template
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
        $__internal_56d2e247562eab3410f73e1e7bb971ff045b0d5968c9c7529a31083c86b12bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d2e247562eab3410f73e1e7bb971ff045b0d5968c9c7529a31083c86b12bc4->enter($__internal_56d2e247562eab3410f73e1e7bb971ff045b0d5968c9c7529a31083c86b12bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_6b826e28b7e7ba0881ea4196a34dbd360118e03f932eb1df01556e0bad0002fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b826e28b7e7ba0881ea4196a34dbd360118e03f932eb1df01556e0bad0002fc->enter($__internal_6b826e28b7e7ba0881ea4196a34dbd360118e03f932eb1df01556e0bad0002fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_56d2e247562eab3410f73e1e7bb971ff045b0d5968c9c7529a31083c86b12bc4->leave($__internal_56d2e247562eab3410f73e1e7bb971ff045b0d5968c9c7529a31083c86b12bc4_prof);

        
        $__internal_6b826e28b7e7ba0881ea4196a34dbd360118e03f932eb1df01556e0bad0002fc->leave($__internal_6b826e28b7e7ba0881ea4196a34dbd360118e03f932eb1df01556e0bad0002fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
