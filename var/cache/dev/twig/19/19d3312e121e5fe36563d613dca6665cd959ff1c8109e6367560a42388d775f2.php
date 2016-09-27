<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_2024d334d4f4d56433862b898966a73cb283f4a940a7e08f8a2c66c40ccc6b37 extends Twig_Template
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
        $__internal_2202e498b2b75bb8cb9c61bdf1f11854d0ced7f7da6156853b71d84a6b9c91b5 = $this->env->getExtension("native_profiler");
        $__internal_2202e498b2b75bb8cb9c61bdf1f11854d0ced7f7da6156853b71d84a6b9c91b5->enter($__internal_2202e498b2b75bb8cb9c61bdf1f11854d0ced7f7da6156853b71d84a6b9c91b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_2202e498b2b75bb8cb9c61bdf1f11854d0ced7f7da6156853b71d84a6b9c91b5->leave($__internal_2202e498b2b75bb8cb9c61bdf1f11854d0ced7f7da6156853b71d84a6b9c91b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
    }
}
