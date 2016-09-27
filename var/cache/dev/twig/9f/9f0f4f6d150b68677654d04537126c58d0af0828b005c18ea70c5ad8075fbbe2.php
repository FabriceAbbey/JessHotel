<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4efed7c35c903c47a2ec1b032085b558904efa843ac5e0b7f79a6f92de9140b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c7e86f587bc3092b4e5b49a9959657a1c9718b8ce9f39d385484208b3c9d991 = $this->env->getExtension("native_profiler");
        $__internal_7c7e86f587bc3092b4e5b49a9959657a1c9718b8ce9f39d385484208b3c9d991->enter($__internal_7c7e86f587bc3092b4e5b49a9959657a1c9718b8ce9f39d385484208b3c9d991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c7e86f587bc3092b4e5b49a9959657a1c9718b8ce9f39d385484208b3c9d991->leave($__internal_7c7e86f587bc3092b4e5b49a9959657a1c9718b8ce9f39d385484208b3c9d991_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41d0dd995618f8c28802d0242cfc43077ca86d12d3764639ea4f1e5e7ade50e7 = $this->env->getExtension("native_profiler");
        $__internal_41d0dd995618f8c28802d0242cfc43077ca86d12d3764639ea4f1e5e7ade50e7->enter($__internal_41d0dd995618f8c28802d0242cfc43077ca86d12d3764639ea4f1e5e7ade50e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_41d0dd995618f8c28802d0242cfc43077ca86d12d3764639ea4f1e5e7ade50e7->leave($__internal_41d0dd995618f8c28802d0242cfc43077ca86d12d3764639ea4f1e5e7ade50e7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb92b15ae3879a4fe55302c2534d1e78dc9e236497e6c3f729c187893db226f4 = $this->env->getExtension("native_profiler");
        $__internal_eb92b15ae3879a4fe55302c2534d1e78dc9e236497e6c3f729c187893db226f4->enter($__internal_eb92b15ae3879a4fe55302c2534d1e78dc9e236497e6c3f729c187893db226f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eb92b15ae3879a4fe55302c2534d1e78dc9e236497e6c3f729c187893db226f4->leave($__internal_eb92b15ae3879a4fe55302c2534d1e78dc9e236497e6c3f729c187893db226f4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_81525e4599f80e49909a86444089f34318a437ea2d12c085d13bc42e02a026ed = $this->env->getExtension("native_profiler");
        $__internal_81525e4599f80e49909a86444089f34318a437ea2d12c085d13bc42e02a026ed->enter($__internal_81525e4599f80e49909a86444089f34318a437ea2d12c085d13bc42e02a026ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_81525e4599f80e49909a86444089f34318a437ea2d12c085d13bc42e02a026ed->leave($__internal_81525e4599f80e49909a86444089f34318a437ea2d12c085d13bc42e02a026ed_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
