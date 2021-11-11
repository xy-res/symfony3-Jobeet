<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e1b6afef83fa9763faaaa12bd86ec5fdfa5ff8b717c96aeee3481f050b428c22 extends Twig_Template
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
        $__internal_1f782a04f2f18fcd88b5cd06971c777a1627a4f534abc33e284bba22132ae549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f782a04f2f18fcd88b5cd06971c777a1627a4f534abc33e284bba22132ae549->enter($__internal_1f782a04f2f18fcd88b5cd06971c777a1627a4f534abc33e284bba22132ae549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b421ec6ccddbf534bdb11245daed2b3944011496b594a76f2dc0a64cdc34c02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b421ec6ccddbf534bdb11245daed2b3944011496b594a76f2dc0a64cdc34c02c->enter($__internal_b421ec6ccddbf534bdb11245daed2b3944011496b594a76f2dc0a64cdc34c02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1f782a04f2f18fcd88b5cd06971c777a1627a4f534abc33e284bba22132ae549->leave($__internal_1f782a04f2f18fcd88b5cd06971c777a1627a4f534abc33e284bba22132ae549_prof);

        
        $__internal_b421ec6ccddbf534bdb11245daed2b3944011496b594a76f2dc0a64cdc34c02c->leave($__internal_b421ec6ccddbf534bdb11245daed2b3944011496b594a76f2dc0a64cdc34c02c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
