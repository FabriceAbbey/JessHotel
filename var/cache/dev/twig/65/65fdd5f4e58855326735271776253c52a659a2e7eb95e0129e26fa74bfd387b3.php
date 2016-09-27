<?php

/* hotel/rooms.html.twig */
class __TwigTemplate_aedfdf3b4286863d3789a94646a88a8b5021962f4f4a55de81f385c01660782b extends Twig_Template
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
        $__internal_bd736d5711ff3be62777e9e0414f85b5f763d97fb2e705b3c8d1dd627d50d4d7 = $this->env->getExtension("native_profiler");
        $__internal_bd736d5711ff3be62777e9e0414f85b5f763d97fb2e705b3c8d1dd627d50d4d7->enter($__internal_bd736d5711ff3be62777e9e0414f85b5f763d97fb2e705b3c8d1dd627d50d4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hotel/rooms.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd736d5711ff3be62777e9e0414f85b5f763d97fb2e705b3c8d1dd627d50d4d7->leave($__internal_bd736d5711ff3be62777e9e0414f85b5f763d97fb2e705b3c8d1dd627d50d4d7_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_dae9e8e13b706d553eea93252b1476e340967ba627665b8cebe2d63667b90f6a = $this->env->getExtension("native_profiler");
        $__internal_dae9e8e13b706d553eea93252b1476e340967ba627665b8cebe2d63667b90f6a->enter($__internal_dae9e8e13b706d553eea93252b1476e340967ba627665b8cebe2d63667b90f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "jess_rooms";
        
        $__internal_dae9e8e13b706d553eea93252b1476e340967ba627665b8cebe2d63667b90f6a->leave($__internal_dae9e8e13b706d553eea93252b1476e340967ba627665b8cebe2d63667b90f6a_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_b551993192ee965cc4f29044c19f3bb494b8b91a2cc4b582803ee2d15b20c099 = $this->env->getExtension("native_profiler");
        $__internal_b551993192ee965cc4f29044c19f3bb494b8b91a2cc4b582803ee2d15b20c099->enter($__internal_b551993192ee965cc4f29044c19f3bb494b8b91a2cc4b582803ee2d15b20c099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
                <div class=\"rooms-item\">
                    <div class=\"item-photo\">
                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-1.jpg\"></a>
                    </div>
                    <div class=\"item-desc\">
                        <h2><a href=\"rooms-detail.html\">Single Room</a></h2>
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
                            <h3>\$ 160.00</h3>
                            <h4>\$ 180.00</h4>
                            <h5>PER NIGHT</h5>
                            <a href=\"rooms-detail.html\" class=\"btn\">ROOM DETAIL</a>
                        </div>
                    </div>
                </div>
                <div class=\"rooms-item\">
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
                </div>
            </div>
            <!-- Rooms List End -->
            <!-- Pager -->
            <div class=\"widget-pager\">
                <ul>
                    <li><a href=\"#\">1</a></li>
                    <li class=\"active\"><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                </ul>
            </div>
            <!-- Pager End -->
        </div>
    </div>
    <!-- Section Rooms End -->
</div>
<!-- Site Main End -->
";
        
        $__internal_b551993192ee965cc4f29044c19f3bb494b8b91a2cc4b582803ee2d15b20c099->leave($__internal_b551993192ee965cc4f29044c19f3bb494b8b91a2cc4b582803ee2d15b20c099_prof);

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
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
                <div class=\"rooms-item\">
                    <div class=\"item-photo\">
                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-1.jpg\"></a>
                    </div>
                    <div class=\"item-desc\">
                        <h2><a href=\"rooms-detail.html\">Single Room</a></h2>
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
                            <h3>\$ 160.00</h3>
                            <h4>\$ 180.00</h4>
                            <h5>PER NIGHT</h5>
                            <a href=\"rooms-detail.html\" class=\"btn\">ROOM DETAIL</a>
                        </div>
                    </div>
                </div>
                <div class=\"rooms-item\">
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
                </div>
            </div>
            <!-- Rooms List End -->
            <!-- Pager -->
            <div class=\"widget-pager\">
                <ul>
                    <li><a href=\"#\">1</a></li>
                    <li class=\"active\"><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                </ul>
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
