<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7321a682799f4fdc22a8777b35422ff73062c4d4b308bc852c1ce434b6475982 extends Twig_Template
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
        $__internal_01150b22166bfa5b0665c1f0f3e818096d17467eb4d9c3ca57c47ee9ea81a422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01150b22166bfa5b0665c1f0f3e818096d17467eb4d9c3ca57c47ee9ea81a422->enter($__internal_01150b22166bfa5b0665c1f0f3e818096d17467eb4d9c3ca57c47ee9ea81a422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_0e0ac0c3e3ddb9ebb0398d8ff3aa4f61478d2b217e008fbaac479a273a70500d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0ac0c3e3ddb9ebb0398d8ff3aa4f61478d2b217e008fbaac479a273a70500d->enter($__internal_0e0ac0c3e3ddb9ebb0398d8ff3aa4f61478d2b217e008fbaac479a273a70500d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_01150b22166bfa5b0665c1f0f3e818096d17467eb4d9c3ca57c47ee9ea81a422->leave($__internal_01150b22166bfa5b0665c1f0f3e818096d17467eb4d9c3ca57c47ee9ea81a422_prof);

        
        $__internal_0e0ac0c3e3ddb9ebb0398d8ff3aa4f61478d2b217e008fbaac479a273a70500d->leave($__internal_0e0ac0c3e3ddb9ebb0398d8ff3aa4f61478d2b217e008fbaac479a273a70500d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
