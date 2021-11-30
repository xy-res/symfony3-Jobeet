<?php

/* job/index.html.twig */
class __TwigTemplate_7ac9ea8b345fe07f64b44276f0f8fe035d88715012d9fd36c0c0b67479da98af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/index.html.twig", 1);
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
        $__internal_d653fe82c27ae7879d8386e9a1e9e086a35e9dbebec7514d4901d3a8b6a8c422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d653fe82c27ae7879d8386e9a1e9e086a35e9dbebec7514d4901d3a8b6a8c422->enter($__internal_d653fe82c27ae7879d8386e9a1e9e086a35e9dbebec7514d4901d3a8b6a8c422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $__internal_60fca37a7d1051f3c6ddc2b51320ecf017b649782ac99c59608a8363beaf89c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60fca37a7d1051f3c6ddc2b51320ecf017b649782ac99c59608a8363beaf89c9->enter($__internal_60fca37a7d1051f3c6ddc2b51320ecf017b649782ac99c59608a8363beaf89c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d653fe82c27ae7879d8386e9a1e9e086a35e9dbebec7514d4901d3a8b6a8c422->leave($__internal_d653fe82c27ae7879d8386e9a1e9e086a35e9dbebec7514d4901d3a8b6a8c422_prof);

        
        $__internal_60fca37a7d1051f3c6ddc2b51320ecf017b649782ac99c59608a8363beaf89c9->leave($__internal_60fca37a7d1051f3c6ddc2b51320ecf017b649782ac99c59608a8363beaf89c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d808b2c990e87f4ac6c690051aa95847ecb404c4f6c6450e88739e5e75f0f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d808b2c990e87f4ac6c690051aa95847ecb404c4f6c6450e88739e5e75f0f08->enter($__internal_6d808b2c990e87f4ac6c690051aa95847ecb404c4f6c6450e88739e5e75f0f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee75748ab168e22999dac0fd4927f736e5a993f6e5b7dab43e1c43c66d2e81a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee75748ab168e22999dac0fd4927f736e5a993f6e5b7dab43e1c43c66d2e81a8->enter($__internal_ee75748ab168e22999dac0fd4927f736e5a993f6e5b7dab43e1c43c66d2e81a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Jobs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Company</th>
                <th>Logo</th>
                <th>Url</th>
                <th>Position</th>
                <th>Location</th>
                <th>Description</th>
                <th>Howtoapply</th>
                <th>Token</th>
                <th>Ispublic</th>
                <th>Isactivated</th>
                <th>Email</th>
                <th>Expiresat</th>
                <th>Createdat</th>
                <th>Updateat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jobs"] ?? $this->getContext($context, "jobs")));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 30
            echo "            <tr>
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("job_show", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "logo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "url", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "howToApply", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "token", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            if ($this->getAttribute($context["job"], "isPublic", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 42
            if ($this->getAttribute($context["job"], "isActivated", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            if ($this->getAttribute($context["job"], "expiresAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "expiresAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 45
            if ($this->getAttribute($context["job"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 46
            if ($this->getAttribute($context["job"], "updateAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "updateAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("job_show", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("job_edit", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("job_new");
        echo "\">Create a new job</a>
        </li>
    </ul>
";
        
        $__internal_ee75748ab168e22999dac0fd4927f736e5a993f6e5b7dab43e1c43c66d2e81a8->leave($__internal_ee75748ab168e22999dac0fd4927f736e5a993f6e5b7dab43e1c43c66d2e81a8_prof);

        
        $__internal_6d808b2c990e87f4ac6c690051aa95847ecb404c4f6c6450e88739e5e75f0f08->leave($__internal_6d808b2c990e87f4ac6c690051aa95847ecb404c4f6c6450e88739e5e75f0f08_prof);

    }

    public function getTemplateName()
    {
        return "job/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 64,  184 => 59,  172 => 53,  166 => 50,  157 => 46,  151 => 45,  145 => 44,  141 => 43,  133 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  89 => 32,  83 => 31,  80 => 30,  76 => 29,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Jobs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Company</th>
                <th>Logo</th>
                <th>Url</th>
                <th>Position</th>
                <th>Location</th>
                <th>Description</th>
                <th>Howtoapply</th>
                <th>Token</th>
                <th>Ispublic</th>
                <th>Isactivated</th>
                <th>Email</th>
                <th>Expiresat</th>
                <th>Createdat</th>
                <th>Updateat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for job in jobs %}
            <tr>
                <td><a href=\"{{ path('job_show', { 'id': job.id }) }}\">{{ job.id }}</a></td>
                <td>{{ job.type }}</td>
                <td>{{ job.company }}</td>
                <td>{{ job.logo }}</td>
                <td>{{ job.url }}</td>
                <td>{{ job.position }}</td>
                <td>{{ job.location }}</td>
                <td>{{ job.description }}</td>
                <td>{{ job.howToApply }}</td>
                <td>{{ job.token }}</td>
                <td>{% if job.isPublic %}Yes{% else %}No{% endif %}</td>
                <td>{% if job.isActivated %}Yes{% else %}No{% endif %}</td>
                <td>{{ job.email }}</td>
                <td>{% if job.expiresAt %}{{ job.expiresAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if job.createdAt %}{{ job.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if job.updateAt %}{{ job.updateAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('job_show', { 'id': job.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('job_edit', { 'id': job.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('job_new') }}\">Create a new job</a>
        </li>
    </ul>
{% endblock %}
", "job/index.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony3-Jobeet\\app\\Resources\\views\\job\\index.html.twig");
    }
}
