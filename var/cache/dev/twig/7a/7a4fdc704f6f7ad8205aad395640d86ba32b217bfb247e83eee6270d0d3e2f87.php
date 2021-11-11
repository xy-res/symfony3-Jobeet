<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d3e7f3e20c37d8e0875f013100a41064bd469efd8b232cfd89924093d3d65924 extends Twig_Template
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
        $__internal_e91b08878692bed5755ec0a8fcb3aeb343c21cab4ffedd70d830ceb96b7f61b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e91b08878692bed5755ec0a8fcb3aeb343c21cab4ffedd70d830ceb96b7f61b9->enter($__internal_e91b08878692bed5755ec0a8fcb3aeb343c21cab4ffedd70d830ceb96b7f61b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c16a252124f7010b56079a8dcf70dba116421bffc63e744d3f29c341f768bf05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16a252124f7010b56079a8dcf70dba116421bffc63e744d3f29c341f768bf05->enter($__internal_c16a252124f7010b56079a8dcf70dba116421bffc63e744d3f29c341f768bf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e91b08878692bed5755ec0a8fcb3aeb343c21cab4ffedd70d830ceb96b7f61b9->leave($__internal_e91b08878692bed5755ec0a8fcb3aeb343c21cab4ffedd70d830ceb96b7f61b9_prof);

        
        $__internal_c16a252124f7010b56079a8dcf70dba116421bffc63e744d3f29c341f768bf05->leave($__internal_c16a252124f7010b56079a8dcf70dba116421bffc63e744d3f29c341f768bf05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
