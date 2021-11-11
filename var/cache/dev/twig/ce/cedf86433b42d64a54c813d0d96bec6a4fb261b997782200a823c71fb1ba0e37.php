<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e6aa7d87c9c817fe795350c9e7686208bcdd3cf4dd1799251450ce5cf0d76102 extends Twig_Template
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
        $__internal_e726a35f067d93f064e19e7de32d520f9c6ee889238ff68f7a2ddd8466bcd540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e726a35f067d93f064e19e7de32d520f9c6ee889238ff68f7a2ddd8466bcd540->enter($__internal_e726a35f067d93f064e19e7de32d520f9c6ee889238ff68f7a2ddd8466bcd540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_88af3ce29eed4bc4c2173e3b5e35d518665ce32d33c57cd6090907f4cb09e213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88af3ce29eed4bc4c2173e3b5e35d518665ce32d33c57cd6090907f4cb09e213->enter($__internal_88af3ce29eed4bc4c2173e3b5e35d518665ce32d33c57cd6090907f4cb09e213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e726a35f067d93f064e19e7de32d520f9c6ee889238ff68f7a2ddd8466bcd540->leave($__internal_e726a35f067d93f064e19e7de32d520f9c6ee889238ff68f7a2ddd8466bcd540_prof);

        
        $__internal_88af3ce29eed4bc4c2173e3b5e35d518665ce32d33c57cd6090907f4cb09e213->leave($__internal_88af3ce29eed4bc4c2173e3b5e35d518665ce32d33c57cd6090907f4cb09e213_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
