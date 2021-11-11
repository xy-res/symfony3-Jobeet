<?php

/* IbwJobeetBundle:Job:list.html.twig */
class __TwigTemplate_95f3da5224f0bc834f096a5f0b80766a9316a6337b361aae0192db09f11990d1 extends Twig_Template
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
        $__internal_96ef1d1dd298d86a08ea10b94ccdd9440d9ed3f24483d9e74bcb9dd665dbe3ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ef1d1dd298d86a08ea10b94ccdd9440d9ed3f24483d9e74bcb9dd665dbe3ff->enter($__internal_96ef1d1dd298d86a08ea10b94ccdd9440d9ed3f24483d9e74bcb9dd665dbe3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle:Job:list.html.twig"));

        $__internal_16868a96d82cb81e826d9dddc0f98d51f5d84fa475e719754ed8c1118d0fd5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16868a96d82cb81e826d9dddc0f98d51f5d84fa475e719754ed8c1118d0fd5b9->enter($__internal_16868a96d82cb81e826d9dddc0f98d51f5d84fa475e719754ed8c1118d0fd5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IbwJobeetBundle:Job:list.html.twig"));

        // line 1
        echo "<table class=\"jobs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
            <td class=\"location\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo "</td>
            <td class=\"position\">
                <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ibw_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "company" => $this->getAttribute($context["entity"], "companyslug", array()), "location" => $this->getAttribute($context["entity"], "locationslug", array()), "position" => $this->getAttribute($context["entity"], "positionslug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "
                </a>
            </td>
            <td class=\"company\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</table>";
        
        $__internal_96ef1d1dd298d86a08ea10b94ccdd9440d9ed3f24483d9e74bcb9dd665dbe3ff->leave($__internal_96ef1d1dd298d86a08ea10b94ccdd9440d9ed3f24483d9e74bcb9dd665dbe3ff_prof);

        
        $__internal_16868a96d82cb81e826d9dddc0f98d51f5d84fa475e719754ed8c1118d0fd5b9->leave($__internal_16868a96d82cb81e826d9dddc0f98d51f5d84fa475e719754ed8c1118d0fd5b9_prof);

    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 13,  65 => 10,  59 => 7,  55 => 6,  50 => 4,  45 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"jobs\">
    {% for entity in jobs %}
        <tr class=\"{{ cycle(['even', 'odd'], loop.index) }}\">
            <td class=\"location\">{{ entity.location }}</td>
            <td class=\"position\">
                <a href=\"{{ path('ibw_job_show', { 'id': entity.id, 'company': entity.companyslug, 'location': entity.locationslug, 'position': entity.positionslug }) }}\">
                    {{ entity.position }}
                </a>
            </td>
            <td class=\"company\">{{ entity.company }}</td>
        </tr>
    {% endfor %}
</table>", "IbwJobeetBundle:Job:list.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\src\\Ibw\\JobeetBundle/Resources/views/Job/list.html.twig");
    }
}
