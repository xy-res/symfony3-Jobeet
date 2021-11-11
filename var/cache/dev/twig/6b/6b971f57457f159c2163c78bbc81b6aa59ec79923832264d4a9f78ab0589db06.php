<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d547fad0deeda39c521fdfaa7901bbb200b18e123bf57b0818ce44cec12bb378 extends Twig_Template
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
        $__internal_b722a7b945b4d993b79560ac4defa01160c3687de5ea38f80670595cf71d3d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b722a7b945b4d993b79560ac4defa01160c3687de5ea38f80670595cf71d3d64->enter($__internal_b722a7b945b4d993b79560ac4defa01160c3687de5ea38f80670595cf71d3d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_b3aeab3bd253bbdedb264cda3715066e87a10e0d18c920092e9f16c1b65b3181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3aeab3bd253bbdedb264cda3715066e87a10e0d18c920092e9f16c1b65b3181->enter($__internal_b3aeab3bd253bbdedb264cda3715066e87a10e0d18c920092e9f16c1b65b3181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_b722a7b945b4d993b79560ac4defa01160c3687de5ea38f80670595cf71d3d64->leave($__internal_b722a7b945b4d993b79560ac4defa01160c3687de5ea38f80670595cf71d3d64_prof);

        
        $__internal_b3aeab3bd253bbdedb264cda3715066e87a10e0d18c920092e9f16c1b65b3181->leave($__internal_b3aeab3bd253bbdedb264cda3715066e87a10e0d18c920092e9f16c1b65b3181_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
