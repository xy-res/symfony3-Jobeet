<?php

/* job/index.html.twig */
class __TwigTemplate_d5b5e09fae005d38eb68c588d1454091697d2daadd41c000448559a216c9f937 extends Twig_Template
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
        $__internal_4381c21213ae524013af4f679e347fbce60c7271ab140a5fdccb33fffa064f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4381c21213ae524013af4f679e347fbce60c7271ab140a5fdccb33fffa064f7f->enter($__internal_4381c21213ae524013af4f679e347fbce60c7271ab140a5fdccb33fffa064f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $__internal_ed83a3d91f5898e76e30d192dfb0c35d20ffb84a790ab1332671142cfaef5757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed83a3d91f5898e76e30d192dfb0c35d20ffb84a790ab1332671142cfaef5757->enter($__internal_ed83a3d91f5898e76e30d192dfb0c35d20ffb84a790ab1332671142cfaef5757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4381c21213ae524013af4f679e347fbce60c7271ab140a5fdccb33fffa064f7f->leave($__internal_4381c21213ae524013af4f679e347fbce60c7271ab140a5fdccb33fffa064f7f_prof);

        
        $__internal_ed83a3d91f5898e76e30d192dfb0c35d20ffb84a790ab1332671142cfaef5757->leave($__internal_ed83a3d91f5898e76e30d192dfb0c35d20ffb84a790ab1332671142cfaef5757_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0257d3fc3ae3e0dc7523ec666f0f21e4e998f3f0abc19a241e123ef2be09fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0257d3fc3ae3e0dc7523ec666f0f21e4e998f3f0abc19a241e123ef2be09fad->enter($__internal_e0257d3fc3ae3e0dc7523ec666f0f21e4e998f3f0abc19a241e123ef2be09fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa4f8944ee277d712e791c184fa78665e71ad3a387cf283f1fe329ad5b29d265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4f8944ee277d712e791c184fa78665e71ad3a387cf283f1fe329ad5b29d265->enter($__internal_aa4f8944ee277d712e791c184fa78665e71ad3a387cf283f1fe329ad5b29d265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>How_to_apply</th>
                <th>Token</th>
                <th>Is_public</th>
                <th>Is_activated</th>
                <th>Email</th>
                <th>Expires_at</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 30
            echo "            <tr>
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ibw_job_show", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "howtoapply", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "token", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            if ($this->getAttribute($context["job"], "ispublic", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 42
            if ($this->getAttribute($context["job"], "isactivated", array())) {
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
            if ($this->getAttribute($context["job"], "expiresat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "expiresat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 45
            if ($this->getAttribute($context["job"], "createdat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 46
            if ($this->getAttribute($context["job"], "updatedat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ibw_job_show", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ibw_job_edit", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ibw_job_new");
        echo "\">Create a new job</a>
        </li>
    </ul>
";
        
        $__internal_aa4f8944ee277d712e791c184fa78665e71ad3a387cf283f1fe329ad5b29d265->leave($__internal_aa4f8944ee277d712e791c184fa78665e71ad3a387cf283f1fe329ad5b29d265_prof);

        
        $__internal_e0257d3fc3ae3e0dc7523ec666f0f21e4e998f3f0abc19a241e123ef2be09fad->leave($__internal_e0257d3fc3ae3e0dc7523ec666f0f21e4e998f3f0abc19a241e123ef2be09fad_prof);

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
                <th>How_to_apply</th>
                <th>Token</th>
                <th>Is_public</th>
                <th>Is_activated</th>
                <th>Email</th>
                <th>Expires_at</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for job in jobs %}
            <tr>
                <td><a href=\"{{ path('ibw_job_show', { 'id': job.id }) }}\">{{ job.id }}</a></td>
                <td>{{ job.type }}</td>
                <td>{{ job.company }}</td>
                <td>{{ job.logo }}</td>
                <td>{{ job.url }}</td>
                <td>{{ job.position }}</td>
                <td>{{ job.location }}</td>
                <td>{{ job.description }}</td>
                <td>{{ job.howtoapply }}</td>
                <td>{{ job.token }}</td>
                <td>{% if job.ispublic %}Yes{% else %}No{% endif %}</td>
                <td>{% if job.isactivated %}Yes{% else %}No{% endif %}</td>
                <td>{{ job.email }}</td>
                <td>{% if job.expiresat %}{{ job.expiresat|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if job.createdat %}{{ job.createdat|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if job.updatedat %}{{ job.updatedat|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('ibw_job_show', { 'id': job.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('ibw_job_edit', { 'id': job.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ibw_job_new') }}\">Create a new job</a>
        </li>
    </ul>
{% endblock %}
", "job/index.html.twig", "E:\\xampp\\htdocs\\tutorial\\symfony_learn_jobeet\\app\\Resources\\views\\job\\index.html.twig");
    }
}
