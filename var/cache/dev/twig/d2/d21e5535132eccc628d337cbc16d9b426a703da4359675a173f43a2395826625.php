<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3b2838bb713e0482f97d9d9e4a1d162f56b09e1c43e8669cdbc185481def3bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b76e6073258c4059e5c81cf1fd6b3f6f2b3b1f3559a9e295300596196d420b4c = $this->env->getExtension("native_profiler");
        $__internal_b76e6073258c4059e5c81cf1fd6b3f6f2b3b1f3559a9e295300596196d420b4c->enter($__internal_b76e6073258c4059e5c81cf1fd6b3f6f2b3b1f3559a9e295300596196d420b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b76e6073258c4059e5c81cf1fd6b3f6f2b3b1f3559a9e295300596196d420b4c->leave($__internal_b76e6073258c4059e5c81cf1fd6b3f6f2b3b1f3559a9e295300596196d420b4c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8598e30d672dccbf89991ac7401e3d441aa9c5d4667c759fed2897ce825ca9db = $this->env->getExtension("native_profiler");
        $__internal_8598e30d672dccbf89991ac7401e3d441aa9c5d4667c759fed2897ce825ca9db->enter($__internal_8598e30d672dccbf89991ac7401e3d441aa9c5d4667c759fed2897ce825ca9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8598e30d672dccbf89991ac7401e3d441aa9c5d4667c759fed2897ce825ca9db->leave($__internal_8598e30d672dccbf89991ac7401e3d441aa9c5d4667c759fed2897ce825ca9db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_83580158d2a4e9730dea0876b07193001eb57c5c5c9da46974a49288aab0f2de = $this->env->getExtension("native_profiler");
        $__internal_83580158d2a4e9730dea0876b07193001eb57c5c5c9da46974a49288aab0f2de->enter($__internal_83580158d2a4e9730dea0876b07193001eb57c5c5c9da46974a49288aab0f2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_83580158d2a4e9730dea0876b07193001eb57c5c5c9da46974a49288aab0f2de->leave($__internal_83580158d2a4e9730dea0876b07193001eb57c5c5c9da46974a49288aab0f2de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f61cf11c4d0a26534196522c12d168dbd1505e6df42963cccb040bc3fade6a5 = $this->env->getExtension("native_profiler");
        $__internal_3f61cf11c4d0a26534196522c12d168dbd1505e6df42963cccb040bc3fade6a5->enter($__internal_3f61cf11c4d0a26534196522c12d168dbd1505e6df42963cccb040bc3fade6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3f61cf11c4d0a26534196522c12d168dbd1505e6df42963cccb040bc3fade6a5->leave($__internal_3f61cf11c4d0a26534196522c12d168dbd1505e6df42963cccb040bc3fade6a5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
