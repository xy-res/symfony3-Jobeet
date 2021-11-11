<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a0654b23622c230108bc66893b5ef160399ded2c68b732315054e9936a0f07fe extends Twig_Template
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
        $__internal_15963d43195fe8753dd4d419fbe2d1a03fc91b8ca845bd4792121aa177969ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15963d43195fe8753dd4d419fbe2d1a03fc91b8ca845bd4792121aa177969ed5->enter($__internal_15963d43195fe8753dd4d419fbe2d1a03fc91b8ca845bd4792121aa177969ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a35a9337ad50aac23c3b078508bb9e7d996f51d74321f23d36857aae61547245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35a9337ad50aac23c3b078508bb9e7d996f51d74321f23d36857aae61547245->enter($__internal_a35a9337ad50aac23c3b078508bb9e7d996f51d74321f23d36857aae61547245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_15963d43195fe8753dd4d419fbe2d1a03fc91b8ca845bd4792121aa177969ed5->leave($__internal_15963d43195fe8753dd4d419fbe2d1a03fc91b8ca845bd4792121aa177969ed5_prof);

        
        $__internal_a35a9337ad50aac23c3b078508bb9e7d996f51d74321f23d36857aae61547245->leave($__internal_a35a9337ad50aac23c3b078508bb9e7d996f51d74321f23d36857aae61547245_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
