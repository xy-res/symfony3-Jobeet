<?php

/* job/show.html.twig */
class __TwigTemplate_325dc279229d44bdd1db88f4058ad2809f68962e900c05d5576600c0d0b53d16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33e50543c347abcda89b0390382bfad249abedf8796cfc85d5f87b9ae74e2fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e50543c347abcda89b0390382bfad249abedf8796cfc85d5f87b9ae74e2fcd->enter($__internal_33e50543c347abcda89b0390382bfad249abedf8796cfc85d5f87b9ae74e2fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $__internal_e5198f90d7943d97152956574c47aad8095cc330f66e602fbb0bc4c0bb72a6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5198f90d7943d97152956574c47aad8095cc330f66e602fbb0bc4c0bb72a6da->enter($__internal_e5198f90d7943d97152956574c47aad8095cc330f66e602fbb0bc4c0bb72a6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33e50543c347abcda89b0390382bfad249abedf8796cfc85d5f87b9ae74e2fcd->leave($__internal_33e50543c347abcda89b0390382bfad249abedf8796cfc85d5f87b9ae74e2fcd_prof);

        
        $__internal_e5198f90d7943d97152956574c47aad8095cc330f66e602fbb0bc4c0bb72a6da->leave($__internal_e5198f90d7943d97152956574c47aad8095cc330f66e602fbb0bc4c0bb72a6da_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_653e1189f3a1b9df1c2e614f643429e78ccc403e96f1ad36c8bac3e7f3160e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_653e1189f3a1b9df1c2e614f643429e78ccc403e96f1ad36c8bac3e7f3160e67->enter($__internal_653e1189f3a1b9df1c2e614f643429e78ccc403e96f1ad36c8bac3e7f3160e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_204d1d694855b45f2b724ef7de5425fae7f87f641429b8ec0851e1989e0ddbe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204d1d694855b45f2b724ef7de5425fae7f87f641429b8ec0851e1989e0ddbe5->enter($__internal_204d1d694855b45f2b724ef7de5425fae7f87f641429b8ec0851e1989e0ddbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Job</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Company</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Logo</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "url", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "location", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>How_to_apply</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "howtoapply", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Token</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Is_public</th>
                <td>";
        // line 50
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "ispublic", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Is_activated</th>
                <td>";
        // line 54
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isactivated", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Expires_at</th>
                <td>";
        // line 62
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 66
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "createdat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>";
        // line 70
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "updatedat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ibw_job_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ibw_job_edit", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_204d1d694855b45f2b724ef7de5425fae7f87f641429b8ec0851e1989e0ddbe5->leave($__internal_204d1d694855b45f2b724ef7de5425fae7f87f641429b8ec0851e1989e0ddbe5_prof);

        
        $__internal_653e1189f3a1b9df1c2e614f643429e78ccc403e96f1ad36c8bac3e7f3160e67->leave($__internal_653e1189f3a1b9df1c2e614f643429e78ccc403e96f1ad36c8bac3e7f3160e67_prof);

    }

    public function getTemplateName()
    {
        return "job/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 85,  198 => 83,  192 => 80,  186 => 77,  174 => 70,  165 => 66,  156 => 62,  149 => 58,  138 => 54,  127 => 50,  120 => 46,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Job</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ job.id }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ job.type }}</td>
            </tr>
            <tr>
                <th>Company</th>
                <td>{{ job.company }}</td>
            </tr>
            <tr>
                <th>Logo</th>
                <td>{{ job.logo }}</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>{{ job.url }}</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>{{ job.position }}</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>{{ job.location }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ job.description }}</td>
            </tr>
            <tr>
                <th>How_to_apply</th>
                <td>{{ job.howtoapply }}</td>
            </tr>
            <tr>
                <th>Token</th>
                <td>{{ job.token }}</td>
            </tr>
            <tr>
                <th>Is_public</th>
                <td>{% if job.ispublic %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Is_activated</th>
                <td>{% if job.isactivated %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ job.email }}</td>
            </tr>
            <tr>
                <th>Expires_at</th>
                <td>{% if job.expiresat %}{{ job.expiresat|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>{% if job.createdat %}{{ job.createdat|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>{% if job.updatedat %}{{ job.updatedat|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ibw_job_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('ibw_job_edit', { 'id': job.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "job/show.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\app\\Resources\\views\\job\\show.html.twig");
    }
}
