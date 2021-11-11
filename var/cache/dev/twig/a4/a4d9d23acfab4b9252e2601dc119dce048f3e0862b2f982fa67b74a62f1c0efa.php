<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_084eef3f8f05e7c24a5a60e1a27c4cae4649e19fc4080a7d9876262a196b613b extends Twig_Template
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
        $__internal_56e470f7b94bb9ad94153da346f86e436b250a3ae66f39cb92bc353df3f26a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e470f7b94bb9ad94153da346f86e436b250a3ae66f39cb92bc353df3f26a12->enter($__internal_56e470f7b94bb9ad94153da346f86e436b250a3ae66f39cb92bc353df3f26a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_bfb8bdee98a515d3889717a19bbe2efea61fa80cf8fe228956d48074c9d2f076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb8bdee98a515d3889717a19bbe2efea61fa80cf8fe228956d48074c9d2f076->enter($__internal_bfb8bdee98a515d3889717a19bbe2efea61fa80cf8fe228956d48074c9d2f076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_56e470f7b94bb9ad94153da346f86e436b250a3ae66f39cb92bc353df3f26a12->leave($__internal_56e470f7b94bb9ad94153da346f86e436b250a3ae66f39cb92bc353df3f26a12_prof);

        
        $__internal_bfb8bdee98a515d3889717a19bbe2efea61fa80cf8fe228956d48074c9d2f076->leave($__internal_bfb8bdee98a515d3889717a19bbe2efea61fa80cf8fe228956d48074c9d2f076_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
