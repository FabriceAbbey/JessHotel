<?php

/* hotel/services.html.twig */
class __TwigTemplate_1ec55b411cbf970779ec5324126eb74b25567833e87312b584ba82a75983fd1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hotel/services.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_196fbde00886ea323ffc77c17e18f0ee1fb32204d919f273434a0ed29fa71dd5 = $this->env->getExtension("native_profiler");
        $__internal_196fbde00886ea323ffc77c17e18f0ee1fb32204d919f273434a0ed29fa71dd5->enter($__internal_196fbde00886ea323ffc77c17e18f0ee1fb32204d919f273434a0ed29fa71dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hotel/services.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_196fbde00886ea323ffc77c17e18f0ee1fb32204d919f273434a0ed29fa71dd5->leave($__internal_196fbde00886ea323ffc77c17e18f0ee1fb32204d919f273434a0ed29fa71dd5_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1603462e530e8732244ce6f9072c4f1d4a08c7a651b4f8240ea3fc36e58223da = $this->env->getExtension("native_profiler");
        $__internal_1603462e530e8732244ce6f9072c4f1d4a08c7a651b4f8240ea3fc36e58223da->enter($__internal_1603462e530e8732244ce6f9072c4f1d4a08c7a651b4f8240ea3fc36e58223da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "jess_rooms";
        
        $__internal_1603462e530e8732244ce6f9072c4f1d4a08c7a651b4f8240ea3fc36e58223da->leave($__internal_1603462e530e8732244ce6f9072c4f1d4a08c7a651b4f8240ea3fc36e58223da_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_918a1641d026803a94ea839b97865db019305b7165e544586ebe86e0af1d2fe7 = $this->env->getExtension("native_profiler");
        $__internal_918a1641d026803a94ea839b97865db019305b7165e544586ebe86e0af1d2fe7->enter($__internal_918a1641d026803a94ea839b97865db019305b7165e544586ebe86e0af1d2fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "<!-- Site Main -->
<div class=\"site-main\">
    <!-- Section Page Title -->
    <div class=\"section\">
        <div class=\"widget-page-title\">
            <div class=\"widget-background\" data-background=\"/assets/img/photo-title.jpg\"></div>
            <div class=\"wrapper-inner\">
                <!-- Title -->
                <h5>OUR FACILITIES</h5>
                <h1>Services Page</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices. Nunc et magna velit.</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class=\"widget-breadcrumb\">
                    <ul>
                        <li><a href=\"#\">HOME</a></li>
                        <li><a href=\"#\">PAGES</a></li>
                        <li>SERVICES PAGE</li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Services -->
    <div class=\"section\">
        <div class=\"wrapper-inner\">
            <!-- Services List -->
            <div class=\"widget-services-list\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 38
            echo "                <div class=\"services-item\">
                    <div class=\"item-photo\">
                        <div class=\"photo-big\" data-background=\"/assets/img/photo-services-1-1.jpg\"></div>
                        <div class=\"photo-small\" data-background=\"/assets/img/photo-services-1-2.jpg\"></div>
                        <a href=\"#\" class=\"btn btn-default\">LEARN MORE</a>
                    </div>
                    <div class=\"item-desc\">
                        <h5>OUR FACILITIES</h5>
                        <h2>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "name", array()), "html", null, true);
            echo "</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                ";
        // line 117
        echo "            </div>
            <!-- Services List End -->
        </div>
    </div>
    <!-- Section Services End -->
</div>
<!-- Site Main End -->
";
        
        $__internal_918a1641d026803a94ea839b97865db019305b7165e544586ebe86e0af1d2fe7->leave($__internal_918a1641d026803a94ea839b97865db019305b7165e544586ebe86e0af1d2fe7_prof);

    }

    public function getTemplateName()
    {
        return "hotel/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 117,  112 => 52,  100 => 46,  90 => 38,  86 => 37,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'jess_rooms' %}

{% block main %}
<!-- Site Main -->
<div class=\"site-main\">
    <!-- Section Page Title -->
    <div class=\"section\">
        <div class=\"widget-page-title\">
            <div class=\"widget-background\" data-background=\"/assets/img/photo-title.jpg\"></div>
            <div class=\"wrapper-inner\">
                <!-- Title -->
                <h5>OUR FACILITIES</h5>
                <h1>Services Page</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices. Nunc et magna velit.</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class=\"widget-breadcrumb\">
                    <ul>
                        <li><a href=\"#\">HOME</a></li>
                        <li><a href=\"#\">PAGES</a></li>
                        <li>SERVICES PAGE</li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Services -->
    <div class=\"section\">
        <div class=\"wrapper-inner\">
            <!-- Services List -->
            <div class=\"widget-services-list\">
                {% for service in services %}
                <div class=\"services-item\">
                    <div class=\"item-photo\">
                        <div class=\"photo-big\" data-background=\"/assets/img/photo-services-1-1.jpg\"></div>
                        <div class=\"photo-small\" data-background=\"/assets/img/photo-services-1-2.jpg\"></div>
                        <a href=\"#\" class=\"btn btn-default\">LEARN MORE</a>
                    </div>
                    <div class=\"item-desc\">
                        <h5>OUR FACILITIES</h5>
                        <h2>{{ service.name }}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                    </div>
                </div>
                {% endfor %}
                {# <div class=\"services-item\">
                    <div class=\"item-photo\">
                        <div class=\"photo-big\" data-background=\"/assets/img/photo-services-2-1.jpg\"></div>
                        <div class=\"photo-small\" data-background=\"/assets/img/photo-services-2-2.jpg\"></div>
                        <a href=\"#\" class=\"btn btn-default\">LEARN MORE</a>
                    </div>
                    <div class=\"item-desc\">
                        <h5>OUR FACILITIES</h5>
                        <h2>Private Dining</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                    </div>
                </div>
                <div class=\"services-item\">
                    <div class=\"item-photo\">
                        <div class=\"photo-big\" data-background=\"/assets/img/photo-services-3-1.jpg\"></div>
                        <div class=\"photo-small\" data-background=\"/assets/img/photo-services-3-2.jpg\"></div>
                        <a href=\"#\" class=\"btn btn-default\">LEARN MORE</a>
                    </div>
                    <div class=\"item-desc\">
                        <h5>OUR FACILITIES</h5>
                        <h2>Conference &amp; Events</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                    </div>
                </div>
                <div class=\"services-item\">
                    <div class=\"item-photo\">
                        <div class=\"photo-big\" data-background=\"/assets/img/photo-services-4-1.jpg\"></div>
                        <div class=\"photo-small\" data-background=\"/assets/img/photo-services-4-2.jpg\"></div>
                        <a href=\"#\" class=\"btn btn-default\">LEARN MORE</a>
                    </div>
                    <div class=\"item-desc\">
                        <h5>OUR FACILITIES</h5>
                        <h2>Wedding Venue</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                    </div>
                </div>
                <div class=\"services-item\">
                    <div class=\"item-photo\">
                        <div class=\"photo-big\" data-background=\"/assets/img/photo-services-5-1.jpg\"></div>
                        <div class=\"photo-small\" data-background=\"/assets/img/photo-services-5-2.jpg\"></div>
                        <a href=\"#\" class=\"btn btn-default\">LEARN MORE</a>
                    </div>
                    <div class=\"item-desc\">
                        <h5>OUR FACILITIES</h5>
                        <h2>Spa &amp; Beauty Center</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                    </div>
                </div>
                <div class=\"services-item\">
                    <div class=\"item-photo\">
                        <div class=\"photo-big\" data-background=\"/assets/img/photo-services-6-1.jpg\"></div>
                        <div class=\"photo-small\" data-background=\"/assets/img/photo-services-6-2.jpg\"></div>
                        <a href=\"#\" class=\"btn btn-default\">LEARN MORE</a>
                    </div>
                    <div class=\"item-desc\">
                        <h5>OUR FACILITIES</h5>
                        <h2>Swimming Pool</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                    </div>
                </div> #}
            </div>
            <!-- Services List End -->
        </div>
    </div>
    <!-- Section Services End -->
</div>
<!-- Site Main End -->
{% endblock %}
";
    }
}
