<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3efd1c061cd0828d05b51086f138377affff3c49bb9b205f430fbdd2d9170336 extends Twig_Template
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
        $__internal_606feb6670c2c4e3a022bb5e91b5925826e39ca628fcb8a3b774576beb8186f0 = $this->env->getExtension("native_profiler");
        $__internal_606feb6670c2c4e3a022bb5e91b5925826e39ca628fcb8a3b774576beb8186f0->enter($__internal_606feb6670c2c4e3a022bb5e91b5925826e39ca628fcb8a3b774576beb8186f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_606feb6670c2c4e3a022bb5e91b5925826e39ca628fcb8a3b774576beb8186f0->leave($__internal_606feb6670c2c4e3a022bb5e91b5925826e39ca628fcb8a3b774576beb8186f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4173592ffd66a65a105b2e07fffda309f3b66ef3896a87036dcc35494015e2f9 = $this->env->getExtension("native_profiler");
        $__internal_4173592ffd66a65a105b2e07fffda309f3b66ef3896a87036dcc35494015e2f9->enter($__internal_4173592ffd66a65a105b2e07fffda309f3b66ef3896a87036dcc35494015e2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4173592ffd66a65a105b2e07fffda309f3b66ef3896a87036dcc35494015e2f9->leave($__internal_4173592ffd66a65a105b2e07fffda309f3b66ef3896a87036dcc35494015e2f9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79a6435d16ec3517b898e9d85ad3c2ac95dbb36511960296fe0ad03421819306 = $this->env->getExtension("native_profiler");
        $__internal_79a6435d16ec3517b898e9d85ad3c2ac95dbb36511960296fe0ad03421819306->enter($__internal_79a6435d16ec3517b898e9d85ad3c2ac95dbb36511960296fe0ad03421819306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_79a6435d16ec3517b898e9d85ad3c2ac95dbb36511960296fe0ad03421819306->leave($__internal_79a6435d16ec3517b898e9d85ad3c2ac95dbb36511960296fe0ad03421819306_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_392f2df728d6d75ac10d8a3eb9a9915456dbb961a731b4868851ef58e6c1b09b = $this->env->getExtension("native_profiler");
        $__internal_392f2df728d6d75ac10d8a3eb9a9915456dbb961a731b4868851ef58e6c1b09b->enter($__internal_392f2df728d6d75ac10d8a3eb9a9915456dbb961a731b4868851ef58e6c1b09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_392f2df728d6d75ac10d8a3eb9a9915456dbb961a731b4868851ef58e6c1b09b->leave($__internal_392f2df728d6d75ac10d8a3eb9a9915456dbb961a731b4868851ef58e6c1b09b_prof);

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
