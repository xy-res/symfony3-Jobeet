<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_0714226eb598172c6df150972fc839567e21a75121d37690b60d95aa14468277 extends Twig_Template
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
        $__internal_2f2990ae02e71da33b05f4f07612fec973af40f68bc9bcb663bdeb5134c502ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2990ae02e71da33b05f4f07612fec973af40f68bc9bcb663bdeb5134c502ad->enter($__internal_2f2990ae02e71da33b05f4f07612fec973af40f68bc9bcb663bdeb5134c502ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_dca6bdc009641ba9b6988fca93666c64619ec00f9a117786bca738bbbc134e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca6bdc009641ba9b6988fca93666c64619ec00f9a117786bca738bbbc134e3d->enter($__internal_dca6bdc009641ba9b6988fca93666c64619ec00f9a117786bca738bbbc134e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2f2990ae02e71da33b05f4f07612fec973af40f68bc9bcb663bdeb5134c502ad->leave($__internal_2f2990ae02e71da33b05f4f07612fec973af40f68bc9bcb663bdeb5134c502ad_prof);

        
        $__internal_dca6bdc009641ba9b6988fca93666c64619ec00f9a117786bca738bbbc134e3d->leave($__internal_dca6bdc009641ba9b6988fca93666c64619ec00f9a117786bca738bbbc134e3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
