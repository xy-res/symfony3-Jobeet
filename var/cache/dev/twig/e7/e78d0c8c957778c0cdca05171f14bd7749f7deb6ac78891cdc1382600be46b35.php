<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_64ec3235d7327506c7c731123281383cb42a5dbbc7befb315cdfedd61a52079f extends Twig_Template
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
        $__internal_e3633ddf8be6c3b899fa2a51f50691a4809c93debf34f0b5e70b69917467e12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3633ddf8be6c3b899fa2a51f50691a4809c93debf34f0b5e70b69917467e12e->enter($__internal_e3633ddf8be6c3b899fa2a51f50691a4809c93debf34f0b5e70b69917467e12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_af66adedd1f31520f719233a17c3ade93bd2ea08a2c7b2e46f724e742076e8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af66adedd1f31520f719233a17c3ade93bd2ea08a2c7b2e46f724e742076e8a3->enter($__internal_af66adedd1f31520f719233a17c3ade93bd2ea08a2c7b2e46f724e742076e8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e3633ddf8be6c3b899fa2a51f50691a4809c93debf34f0b5e70b69917467e12e->leave($__internal_e3633ddf8be6c3b899fa2a51f50691a4809c93debf34f0b5e70b69917467e12e_prof);

        
        $__internal_af66adedd1f31520f719233a17c3ade93bd2ea08a2c7b2e46f724e742076e8a3->leave($__internal_af66adedd1f31520f719233a17c3ade93bd2ea08a2c7b2e46f724e742076e8a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
