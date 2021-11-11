<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e6289e41785ac8db89ea2a6f75286fe9c2b1fe6d7f478261187483f5f2932dcc extends Twig_Template
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
        $__internal_63a179dc07395151b3e6ef8462a3ea1b5454b11b09da5e19157f082c53f7e65d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a179dc07395151b3e6ef8462a3ea1b5454b11b09da5e19157f082c53f7e65d->enter($__internal_63a179dc07395151b3e6ef8462a3ea1b5454b11b09da5e19157f082c53f7e65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_50318f997c2e2d71a7971d59aa915e7b2a4c28020727ec9030fd273fe48d8bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50318f997c2e2d71a7971d59aa915e7b2a4c28020727ec9030fd273fe48d8bcc->enter($__internal_50318f997c2e2d71a7971d59aa915e7b2a4c28020727ec9030fd273fe48d8bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_63a179dc07395151b3e6ef8462a3ea1b5454b11b09da5e19157f082c53f7e65d->leave($__internal_63a179dc07395151b3e6ef8462a3ea1b5454b11b09da5e19157f082c53f7e65d_prof);

        
        $__internal_50318f997c2e2d71a7971d59aa915e7b2a4c28020727ec9030fd273fe48d8bcc->leave($__internal_50318f997c2e2d71a7971d59aa915e7b2a4c28020727ec9030fd273fe48d8bcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
