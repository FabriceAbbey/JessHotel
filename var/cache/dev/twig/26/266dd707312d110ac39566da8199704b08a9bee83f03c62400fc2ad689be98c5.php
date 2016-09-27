<?php

/* hotel/rooms.html.twig */
class __TwigTemplate_47e2430f12d23e9b51a1abe79c9d6a063fc8d172185e0218c16b9e8480f78452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hotel/rooms.html.twig", 1);
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
        $__internal_5a0e2cb277e95c0ef0ddacd07d4281ca2a0c3c68bee4d6df4f98ee08df0b47f7 = $this->env->getExtension("native_profiler");
        $__internal_5a0e2cb277e95c0ef0ddacd07d4281ca2a0c3c68bee4d6df4f98ee08df0b47f7->enter($__internal_5a0e2cb277e95c0ef0ddacd07d4281ca2a0c3c68bee4d6df4f98ee08df0b47f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hotel/rooms.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a0e2cb277e95c0ef0ddacd07d4281ca2a0c3c68bee4d6df4f98ee08df0b47f7->leave($__internal_5a0e2cb277e95c0ef0ddacd07d4281ca2a0c3c68bee4d6df4f98ee08df0b47f7_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a82acb25d524349eadf039f2a8820e92d3879bbfb8cc5910eccf8e7c970ac2eb = $this->env->getExtension("native_profiler");
        $__internal_a82acb25d524349eadf039f2a8820e92d3879bbfb8cc5910eccf8e7c970ac2eb->enter($__internal_a82acb25d524349eadf039f2a8820e92d3879bbfb8cc5910eccf8e7c970ac2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "jess_rooms";
        
        $__internal_a82acb25d524349eadf039f2a8820e92d3879bbfb8cc5910eccf8e7c970ac2eb->leave($__internal_a82acb25d524349eadf039f2a8820e92d3879bbfb8cc5910eccf8e7c970ac2eb_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_99e81880191b0148c374b671c2af444556ae59f717882eea65a5510de3333b07 = $this->env->getExtension("native_profiler");
        $__internal_99e81880191b0148c374b671c2af444556ae59f717882eea65a5510de3333b07->enter($__internal_99e81880191b0148c374b671c2af444556ae59f717882eea65a5510de3333b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "<!-- Site Main -->
<div class=\"site-main\">
    <!-- Section Page Title -->
    <div class=\"section\">
        <div class=\"widget-page-title\">
            <div class=\"widget-background\" data-background=\"/assets/img/photo-title.jpg\"></div>
            <div class=\"wrapper-inner\">
                <!-- Title -->
                <h5>EXPERIENCE THE FREEDOM</h5>
                <h1>Rooms Page</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices. Nunc et magna velit.</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class=\"widget-breadcrumb\">
                    <ul>
                        <li><a href=\"#\">HOME</a></li>
                        <li><a href=\"#\">PAGES</a></li>
                        <li>ROOMS PAGE</li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Rooms -->
    <div class=\"section\">
        <div class=\"wrapper-inner\">
            <!-- Rooms List -->
            <div class=\"widget-rooms-list\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 38
            echo "                <div class=\"rooms-item\">
                    <div class=\"item-photo\">
                        <a href=\"/room/";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "id", array()), "html", null, true);
            echo "\" data-background=\"/assets/img/photo-room-1.jpg\"></a>
                    </div>
                    <div class=\"item-desc\">
                        <h2><a href=\"/room/";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "name", array()), "html", null, true);
            echo "</a></h2>
                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                        <div class=\"desc-features\">
                            <ul>
                                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["room"], "amenities", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                echo "                                <li><i class=\"fa fa-check\"></i>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                                ";
            // line 58
            echo "                            </ul>
                        </div>
                    </div>
                    <div class=\"item-price\">
                        <div class=\"price-inner\">
                            <i class=\"fa fa-star\"></i>
                            <h3>\$ ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "price", array()), "html", null, true);
            echo "</h3>
                            <h4>\$ 180.00</h4>
                            <h5>PER NIGHT</h5>
                            <a href=\"/room/";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "id", array()), "html", null, true);
            echo "\" class=\"btn\">ROOM DETAIL</a>
                        </div>
                    </div>
                </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                ";
        // line 196
        echo "            </div>
            <!-- Rooms List End -->
            <!-- Pager -->
            <div class=\"widget-pager\">
                
                <ul >
            ";
        // line 202
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1)) {
            // line 203
            echo "                <li><a href=\"/rooms/";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
            echo "/\">1</a></li>
";
            // line 205
            echo "                ";
        } else {
            echo "            
                <li class=\"disabled\"><a href=\"\">1</a></li>
";
            // line 208
            echo "                ";
        }
        // line 209
        echo "
            ";
        // line 234
        echo "        </ul>
               ";
        // line 241
        echo "            </div>
            <!-- Pager End -->
        </div>
    </div>
    <!-- Section Rooms End -->
</div>
<!-- Site Main End -->
";
        
        $__internal_99e81880191b0148c374b671c2af444556ae59f717882eea65a5510de3333b07->leave($__internal_99e81880191b0148c374b671c2af444556ae59f717882eea65a5510de3333b07_prof);

    }

    public function getTemplateName()
    {
        return "hotel/rooms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 241,  178 => 234,  175 => 209,  172 => 208,  166 => 205,  161 => 203,  159 => 202,  151 => 196,  149 => 72,  138 => 67,  132 => 64,  124 => 58,  122 => 50,  113 => 48,  109 => 47,  100 => 43,  94 => 40,  90 => 38,  86 => 37,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
                <h5>EXPERIENCE THE FREEDOM</h5>
                <h1>Rooms Page</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices. Nunc et magna velit.</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class=\"widget-breadcrumb\">
                    <ul>
                        <li><a href=\"#\">HOME</a></li>
                        <li><a href=\"#\">PAGES</a></li>
                        <li>ROOMS PAGE</li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Rooms -->
    <div class=\"section\">
        <div class=\"wrapper-inner\">
            <!-- Rooms List -->
            <div class=\"widget-rooms-list\">
                {% for room in rooms %}
                <div class=\"rooms-item\">
                    <div class=\"item-photo\">
                        <a href=\"/room/{{room.id}}\" data-background=\"/assets/img/photo-room-1.jpg\"></a>
                    </div>
                    <div class=\"item-desc\">
                        <h2><a href=\"/room/{{room.id}}\">{{room.name}}</a></h2>
                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                        <div class=\"desc-features\">
                            <ul>
                                {% for item in room.amenities %}
                                <li><i class=\"fa fa-check\"></i>{{ item }}</li>
                                {% endfor %}
                                {#<li><i class=\"fa fa-check\"></i> WI-FI</li>
                                <li><i class=\"fa fa-check\"></i> HAIR DRYER</li>
                                <li><i class=\"fa fa-check\"></i> LCD TV</li>
                                <li><i class=\"fa fa-check\"></i> SHOWER AND TAB</li>
                                <li><i class=\"fa fa-check\"></i> SECURITY SYSTEM</li>
                                <li><i class=\"fa fa-check\"></i> AIR CONDITIONING</li>
                                <li><i class=\"fa fa-check\"></i> MINI BAR</li>
                                <li><i class=\"fa fa-check\"></i> TEA AND COFFEE SET</li>#}
                            </ul>
                        </div>
                    </div>
                    <div class=\"item-price\">
                        <div class=\"price-inner\">
                            <i class=\"fa fa-star\"></i>
                            <h3>\$ {{room.price}}</h3>
                            <h4>\$ 180.00</h4>
                            <h5>PER NIGHT</h5>
                            <a href=\"/room/{{room.id}}\" class=\"btn\">ROOM DETAIL</a>
                        </div>
                    </div>
                </div>
                    {% endfor %}
                {#<div class=\"rooms-item\">
                    <div class=\"item-photo\">
                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-2.jpg\"></a>
                    </div>
                    <div class=\"item-desc\">
                        <h2><a href=\"rooms-detail.html\">Double Room</a></h2>
                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                        <div class=\"desc-features\">
                            <ul>
                                <li><i class=\"fa fa-check\"></i> BREAKFAST</li>
                                <li><i class=\"fa fa-check\"></i> WI-FI</li>
                                <li><i class=\"fa fa-check\"></i> HAIR DRYER</li>
                                <li><i class=\"fa fa-check\"></i> LCD TV</li>
                                <li><i class=\"fa fa-check\"></i> SHOWER AND TAB</li>
                                <li><i class=\"fa fa-check\"></i> SECURITY SYSTEM</li>
                                <li><i class=\"fa fa-check\"></i> AIR CONDITIONING</li>
                                <li><i class=\"fa fa-check\"></i> MINI BAR</li>
                                <li><i class=\"fa fa-check\"></i> TEA AND COFFEE SET</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item-price\">
                        <div class=\"price-inner\">
                            <i class=\"fa fa-star\"></i>
                            <h3>\$ 300.00</h3>
                            <h4>\$ 340.00</h4>
                            <h5>PER NIGHT</h5>
                            <a href=\"rooms-detail.html\" class=\"btn\">ROOM DETAIL</a>
                        </div>
                    </div>
                </div>
                <div class=\"rooms-item\">
                    <div class=\"item-photo\">
                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-3.jpg\"></a>
                    </div>
                    <div class=\"item-desc\">
                        <h2><a href=\"rooms-detail.html\">Deluxe Single Room</a></h2>
                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                        <div class=\"desc-features\">
                            <ul>
                                <li><i class=\"fa fa-check\"></i> BREAKFAST</li>
                                <li><i class=\"fa fa-check\"></i> WI-FI</li>
                                <li><i class=\"fa fa-check\"></i> HAIR DRYER</li>
                                <li><i class=\"fa fa-check\"></i> LCD TV</li>
                                <li><i class=\"fa fa-check\"></i> SHOWER AND TAB</li>
                                <li><i class=\"fa fa-check\"></i> SECURITY SYSTEM</li>
                                <li><i class=\"fa fa-check\"></i> AIR CONDITIONING</li>
                                <li><i class=\"fa fa-check\"></i> MINI BAR</li>
                                <li><i class=\"fa fa-check\"></i> TEA AND COFFEE SET</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item-price\">
                        <div class=\"price-inner\">
                            <i class=\"fa fa-star\"></i>
                            <h3>\$ 420.00</h3>
                            <h4>\$ 480.00</h4>
                            <h5>PER NIGHT</h5>
                            <a href=\"rooms-detail.html\" class=\"btn\">ROOM DETAIL</a>
                        </div>
                    </div>
                </div>
                <div class=\"rooms-item\">
                    <div class=\"item-photo\">
                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-4.jpg\"></a>
                    </div>
                    <div class=\"item-desc\">
                        <h2><a href=\"rooms-detail.html\">Deluxe Double Room</a></h2>
                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                        <div class=\"desc-features\">
                            <ul>
                                <li><i class=\"fa fa-check\"></i> BREAKFAST</li>
                                <li><i class=\"fa fa-check\"></i> WI-FI</li>
                                <li><i class=\"fa fa-check\"></i> HAIR DRYER</li>
                                <li><i class=\"fa fa-check\"></i> LCD TV</li>
                                <li><i class=\"fa fa-check\"></i> SHOWER AND TAB</li>
                                <li><i class=\"fa fa-check\"></i> SECURITY SYSTEM</li>
                                <li><i class=\"fa fa-check\"></i> AIR CONDITIONING</li>
                                <li><i class=\"fa fa-check\"></i> MINI BAR</li>
                                <li><i class=\"fa fa-check\"></i> TEA AND COFFEE SET</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item-price\">
                        <div class=\"price-inner\">
                            <i class=\"fa fa-star\"></i>
                            <h3>\$ 540.00</h3>
                            <h4>\$ 620.00</h4>
                            <h5>PER NIGHT</h5>
                            <a href=\"rooms-detail.html\" class=\"btn\">ROOM DETAIL</a>
                        </div>
                    </div>
                </div>
                <div class=\"rooms-item\">
                    <div class=\"item-photo\">
                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-5.jpg\"></a>
                    </div>
                    <div class=\"item-desc\">
                        <h2><a href=\"rooms-detail.html\">Royal Suit Room</a></h2>
                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                        <div class=\"desc-features\">
                            <ul>
                                <li><i class=\"fa fa-check\"></i> BREAKFAST</li>
                                <li><i class=\"fa fa-check\"></i> WI-FI</li>
                                <li><i class=\"fa fa-check\"></i> HAIR DRYER</li>
                                <li><i class=\"fa fa-check\"></i> LCD TV</li>
                                <li><i class=\"fa fa-check\"></i> SHOWER AND TAB</li>
                                <li><i class=\"fa fa-check\"></i> SECURITY SYSTEM</li>
                                <li><i class=\"fa fa-check\"></i> AIR CONDITIONING</li>
                                <li><i class=\"fa fa-check\"></i> MINI BAR</li>
                                <li><i class=\"fa fa-check\"></i> TEA AND COFFEE SET</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item-price\">
                        <div class=\"price-inner\">
                            <i class=\"fa fa-star\"></i>
                            <h3>\$ 680.00</h3>
                            <h4>\$ 760.00</h4>
                            <h5>PER NIGHT</h5>
                            <a href=\"rooms-detail.html\" class=\"btn\">ROOM DETAIL</a>
                        </div>
                    </div>
                </div>#}
            </div>
            <!-- Rooms List End -->
            <!-- Pager -->
            <div class=\"widget-pager\">
                
                <ul >
            {% if page > 1 %}
                <li><a href=\"/rooms/{{page}}/\">1</a></li>
{#                <li><a href=\"/rooms/{{page - 1}}/{{max_per_page}}/\">«</a></li>#}
                {% else %}            
                <li class=\"disabled\"><a href=\"\">1</a></li>
{#                <li class=\"disabled\"><a>«</a></li>#}
                {%endif%}

            {#{% if page - 2 > 1 %}
                <li class=\"disabled\"><a>..</a></li>
                {%endif%}
                {% for i in 1..total_pages %}

                {% if i == current_page %}
                    <li class=\"active\"><a>{{i}} <span class=\"sr-only\">(current)</span></a></li>
                    {% elseif i >= current_page - 2 and i <= current_page + 2 and total_items != 0%}
                    <li><a href=\"/{{ zone }}/bug/list/{{i}}/{{max_per_page}}/\">{{i}}</a></li>
                    {% endif %}
                {%endfor %}

            {% if current_page + 2 < total_pages %}
                <li class=\"disabled\"><a href=\"javascript:\">..</a></li>
                {%endif%}

            {% if current_page < total_pages %}
                <li><a href=\"/{{ zone }}/bug/list/{{current_page + 1}}/{{max_per_page}}/\">»</a></li>
                <li><a href=\"/{{ zone }}/bug/list/{{total_pages}}/{{max_per_page}}/\">last</a></li>
                {% elseif current_page == total_pages or total_items == 0%}              
                <li class=\"disabled\"><a>»</a></li>
                <li class=\"disabled\"><a href=\"/{{ zone }}/bug/list/{{total_pages}}/{{max_per_page}}/\">Last</a></li>
                {%endif%}
#}
        </ul>
               {# <ul>
                    <li><a href=\"#\">1</a></li>
                    <li class=\"active\"><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                </ul>#}
            </div>
            <!-- Pager End -->
        </div>
    </div>
    <!-- Section Rooms End -->
</div>
<!-- Site Main End -->
{% endblock %}
";
    }
}
