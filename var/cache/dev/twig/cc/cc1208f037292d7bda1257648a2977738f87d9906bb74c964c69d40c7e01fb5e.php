<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e04fc370e7ad82304ee648ebe8e3a9100fcb76281b6c66d74e0c6e853ae8bf8e extends Twig_Template
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
        $__internal_c37da4a8e56425bbdb9f02b4e252d1a3541f8301ae643da2ec8d17509e823b8d = $this->env->getExtension("native_profiler");
        $__internal_c37da4a8e56425bbdb9f02b4e252d1a3541f8301ae643da2ec8d17509e823b8d->enter($__internal_c37da4a8e56425bbdb9f02b4e252d1a3541f8301ae643da2ec8d17509e823b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c37da4a8e56425bbdb9f02b4e252d1a3541f8301ae643da2ec8d17509e823b8d->leave($__internal_c37da4a8e56425bbdb9f02b4e252d1a3541f8301ae643da2ec8d17509e823b8d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87a1bf49c5fd0cf5e50e1442bc1b80b87dddc9314b62e5664f5d45414195c9ea = $this->env->getExtension("native_profiler");
        $__internal_87a1bf49c5fd0cf5e50e1442bc1b80b87dddc9314b62e5664f5d45414195c9ea->enter($__internal_87a1bf49c5fd0cf5e50e1442bc1b80b87dddc9314b62e5664f5d45414195c9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_87a1bf49c5fd0cf5e50e1442bc1b80b87dddc9314b62e5664f5d45414195c9ea->leave($__internal_87a1bf49c5fd0cf5e50e1442bc1b80b87dddc9314b62e5664f5d45414195c9ea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b69ec5392b01f0d156ecce75f3fdd40c7a2614882676fccb8544962b4753b4b = $this->env->getExtension("native_profiler");
        $__internal_6b69ec5392b01f0d156ecce75f3fdd40c7a2614882676fccb8544962b4753b4b->enter($__internal_6b69ec5392b01f0d156ecce75f3fdd40c7a2614882676fccb8544962b4753b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6b69ec5392b01f0d156ecce75f3fdd40c7a2614882676fccb8544962b4753b4b->leave($__internal_6b69ec5392b01f0d156ecce75f3fdd40c7a2614882676fccb8544962b4753b4b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_803544f6ec98be4e1aa0cfa4e0b43d0f9f6adaabfe27b8a792ba76a887214320 = $this->env->getExtension("native_profiler");
        $__internal_803544f6ec98be4e1aa0cfa4e0b43d0f9f6adaabfe27b8a792ba76a887214320->enter($__internal_803544f6ec98be4e1aa0cfa4e0b43d0f9f6adaabfe27b8a792ba76a887214320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_803544f6ec98be4e1aa0cfa4e0b43d0f9f6adaabfe27b8a792ba76a887214320->leave($__internal_803544f6ec98be4e1aa0cfa4e0b43d0f9f6adaabfe27b8a792ba76a887214320_prof);

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
