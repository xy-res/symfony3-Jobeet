<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f1436766ee8e4529b0d11de669c5abc28238e99cf16e3a19291d8ccc3863b601 extends Twig_Template
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
        $__internal_c5efed5ac3cc9bbcf70ff1eb92189acfc4a66272d5408ce3c96a1e6b4805b34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5efed5ac3cc9bbcf70ff1eb92189acfc4a66272d5408ce3c96a1e6b4805b34b->enter($__internal_c5efed5ac3cc9bbcf70ff1eb92189acfc4a66272d5408ce3c96a1e6b4805b34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_2f4742fe89e053718cd5e89d180f209a6accd19bfa718a9f3d0a060499edcaf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4742fe89e053718cd5e89d180f209a6accd19bfa718a9f3d0a060499edcaf5->enter($__internal_2f4742fe89e053718cd5e89d180f209a6accd19bfa718a9f3d0a060499edcaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c5efed5ac3cc9bbcf70ff1eb92189acfc4a66272d5408ce3c96a1e6b4805b34b->leave($__internal_c5efed5ac3cc9bbcf70ff1eb92189acfc4a66272d5408ce3c96a1e6b4805b34b_prof);

        
        $__internal_2f4742fe89e053718cd5e89d180f209a6accd19bfa718a9f3d0a060499edcaf5->leave($__internal_2f4742fe89e053718cd5e89d180f209a6accd19bfa718a9f3d0a060499edcaf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
