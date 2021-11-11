<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e3ed5c2c098b8ccca625018a53a10d9f2c1936203c88ea0aa75a8bde50dbc910 extends Twig_Template
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
        $__internal_87f5560b038b569a3bbd8bd4b8780c17e1664b54e718fbd22382a60fb2ee2f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f5560b038b569a3bbd8bd4b8780c17e1664b54e718fbd22382a60fb2ee2f57->enter($__internal_87f5560b038b569a3bbd8bd4b8780c17e1664b54e718fbd22382a60fb2ee2f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_ae5516711bbbfda8027eee958467c868e6b06fab3f684bc9e6044fb8205b0324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5516711bbbfda8027eee958467c868e6b06fab3f684bc9e6044fb8205b0324->enter($__internal_ae5516711bbbfda8027eee958467c868e6b06fab3f684bc9e6044fb8205b0324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_87f5560b038b569a3bbd8bd4b8780c17e1664b54e718fbd22382a60fb2ee2f57->leave($__internal_87f5560b038b569a3bbd8bd4b8780c17e1664b54e718fbd22382a60fb2ee2f57_prof);

        
        $__internal_ae5516711bbbfda8027eee958467c868e6b06fab3f684bc9e6044fb8205b0324->leave($__internal_ae5516711bbbfda8027eee958467c868e6b06fab3f684bc9e6044fb8205b0324_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
