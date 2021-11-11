<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3892d89617b06f9b0dbf43ae52f066ff9d0dcd458dc93d966d62c3793086e0b3 extends Twig_Template
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
        $__internal_10ff0e122c41b4e18ac906237447153213dec00c36266c1c50e60fa4f89081ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ff0e122c41b4e18ac906237447153213dec00c36266c1c50e60fa4f89081ee->enter($__internal_10ff0e122c41b4e18ac906237447153213dec00c36266c1c50e60fa4f89081ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_217742540259076687f0e9fadb4019c118702151c003bfb4372db135dc416d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217742540259076687f0e9fadb4019c118702151c003bfb4372db135dc416d4a->enter($__internal_217742540259076687f0e9fadb4019c118702151c003bfb4372db135dc416d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_10ff0e122c41b4e18ac906237447153213dec00c36266c1c50e60fa4f89081ee->leave($__internal_10ff0e122c41b4e18ac906237447153213dec00c36266c1c50e60fa4f89081ee_prof);

        
        $__internal_217742540259076687f0e9fadb4019c118702151c003bfb4372db135dc416d4a->leave($__internal_217742540259076687f0e9fadb4019c118702151c003bfb4372db135dc416d4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
