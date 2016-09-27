<?php

/* hotel/index.html.twig */
class __TwigTemplate_c99fcff8ddc211b16f2ad81a094744b4b75b58a4451c5ef942273a5819146ad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hotel/index.html.twig", 1);
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
        $__internal_43f28858de2ae7c2b77a90a8c90008528f817a717cfb6a4689ea5bacb60c4979 = $this->env->getExtension("native_profiler");
        $__internal_43f28858de2ae7c2b77a90a8c90008528f817a717cfb6a4689ea5bacb60c4979->enter($__internal_43f28858de2ae7c2b77a90a8c90008528f817a717cfb6a4689ea5bacb60c4979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hotel/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43f28858de2ae7c2b77a90a8c90008528f817a717cfb6a4689ea5bacb60c4979->leave($__internal_43f28858de2ae7c2b77a90a8c90008528f817a717cfb6a4689ea5bacb60c4979_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_613461aa8d1fe00f5e864fcf9038c8afc847cf7e05bcf8296e79db9b5f23bb6d = $this->env->getExtension("native_profiler");
        $__internal_613461aa8d1fe00f5e864fcf9038c8afc847cf7e05bcf8296e79db9b5f23bb6d->enter($__internal_613461aa8d1fe00f5e864fcf9038c8afc847cf7e05bcf8296e79db9b5f23bb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_613461aa8d1fe00f5e864fcf9038c8afc847cf7e05bcf8296e79db9b5f23bb6d->leave($__internal_613461aa8d1fe00f5e864fcf9038c8afc847cf7e05bcf8296e79db9b5f23bb6d_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_e7377b5458c5915a0588022fbd6721a30b7cc61abf0504d7031cec6ecedae2c6 = $this->env->getExtension("native_profiler");
        $__internal_e7377b5458c5915a0588022fbd6721a30b7cc61abf0504d7031cec6ecedae2c6->enter($__internal_e7377b5458c5915a0588022fbd6721a30b7cc61abf0504d7031cec6ecedae2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
        !-- Site Loading -->
        <div class=\"site-loading\">
            <img src=\"/assets/img/loading.gif\" alt=\"Loading\">
        </div>
        <!-- Site Loading End -->

        <!-- Site Back Top -->
        <div class=\"site-backtop\" title=\"Back to top\">
            <i class=\"fa fa-angle-up\"></i>
        </div>
        <!-- Site Back Top End -->

        <!-- Site Main -->
        <div class=\"site-main\">
            <!-- Section Slider -->
            <div class=\"section\">
                <div class=\"widget-slider\">
                    <div class=\"wrapper-full\">
                        <!-- Slider Carousel -->
                        <div class=\"widget-carousel owl-carousel owl-theme\">
                            <div class=\"slider-item\" data-background=\"/assets/img/photo-slide-1.jpg\">
                                <div class=\"wrapper\">
                                    <div class=\"item-inner\">
                                        <h5>WELCOME TO THE GRANDIUM</h5>
                                        <h1>Experience the Freedom</h1>
                                        <h2>in London</h2>
                                    </div>
                                </div>
                            </div>
                            <div class=\"slider-item\" data-background=\"/assets/img/photo-slide-2.jpg\">
                                <div class=\"wrapper\">
                                    <div class=\"item-inner\">
                                        <h5>WELCOME TO THE GRANDIUM</h5>
                                        <h1>A Place to Relax</h1>
                                        <h2>in Maldives</h2>
                                    </div>
                                </div>
                            </div>
                            <div class=\"slider-item\" data-background=\"/assets/img/photo-slide-3.jpg\">
                                <div class=\"wrapper\">
                                    <div class=\"item-inner\">
                                        <h5>WELCOME TO THE GRANDIUM</h5>
                                        <h1>Touch The Sea</h1>
                                        <h2>in Monaco</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Carousel End -->
                        <!-- Slider Booking -->
                        <div class=\"slider-booking\">
                            <div class=\"wrapper\">
                                <h5>BOOK NOW YOUR HOTEL</h5>
                                <form>
                                    <ul>
                                        <li>
                                            <i class=\"fa fa-calendar-plus-o\"></i>
                                            <input type=\"text\" name=\"checkin\" placeholder=\"CHECK IN\" class=\"datepicker\" required>
                                        </li>
                                        <li>
                                            <i class=\"fa fa-calendar-plus-o\"></i>
                                            <input type=\"text\" name=\"checkout\" placeholder=\"CHECK OUT\" class=\"datepicker\" required>
                                        </li>
                                        <li>
                                            <i class=\"fa fa-caret-down\"></i>
                                            <select name=\"adults\" required>
                                                <option value=\"\">ADULTS</option>
                                                <option value=\"1\">1 ADULT</option>
                                                <option value=\"2\">2 ADULT</option>
                                                <option value=\"3\">3 ADULT</option>
                                            </select>
                                        </li>
                                        <li>
                                            <i class=\"fa fa-caret-down\"></i>
                                            <select name=\"childrens\" required>
                                                <option value=\"\">CHILDRENS</option>
                                                <option value=\"1\">1 CHILDREN</option>
                                                <option value=\"2\">2 CHILDREN</option>
                                                <option value=\"3\">3 CHILDREN</option>
                                            </select>
                                        </li>
                                        <li>
                                            <button type=\"submit\" class=\"btn\">BOOK NOW</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <!-- Slider Booking End -->
                    </div>
                </div>
            </div>
            <!-- Section Slider End -->

            <!-- Section Rooms -->
            <div class=\"section\">
                <div class=\"widget-rooms-carousel top-over\">
                    <div class=\"wrapper-inner\">
                        <!-- Rooms Title -->
                        <div class=\"widget-title\">
                            <h5>OUR ROOMS</h5>
                            <h2>Experience The Freedom</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        </div>
                        <!-- Rooms Title End -->
                        <!-- Rooms Carousel -->
                        <div class=\"widget-carousel owl-carousel owl-theme\">
                            <div class=\"rooms-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\">
                                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-1.jpg\"></a>
                                    </div>
                                    <div class=\"item-desc\">
                                        <h2><a href=\"rooms-detail.html\">Single Room</a></h2>
                                        <h3>\$ 160.00</h3>
                                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                        <i class=\"fa fa-star\"></i>
                                    </div>
                                </div>
                            </div>
                            <div class=\"rooms-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\">
                                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-2.jpg\"></a>
                                    </div>
                                    <div class=\"item-desc\">
                                        <h2><a href=\"rooms-detail.html\">Double Room</a></h2>
                                        <h3>\$ 300.00</h3>
                                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                        <i class=\"fa fa-star\"></i>
                                    </div>
                                </div>
                            </div>
                            <div class=\"rooms-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\">
                                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-3.jpg\"></a>
                                    </div>
                                    <div class=\"item-desc\">
                                        <h2><a href=\"rooms-detail.html\">Deluxe Single Room</a></h2>
                                        <h3>\$ 420.00</h3>
                                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                        <i class=\"fa fa-star\"></i>
                                    </div>
                                </div>
                            </div>
                            <div class=\"rooms-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\">
                                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-4.jpg\"></a>
                                    </div>
                                    <div class=\"item-desc\">
                                        <h2><a href=\"rooms-detail.html\">Deluxe Double Room</a></h2>
                                        <h3>\$ 540.00</h3>
                                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                        <i class=\"fa fa-star\"></i>
                                    </div>
                                </div>
                            </div>
                            <div class=\"rooms-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\">
                                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-5.jpg\"></a>
                                    </div>
                                    <div class=\"item-desc\">
                                        <h2><a href=\"rooms-detail.html\">Royal Suit Room</a></h2>
                                        <h3>\$ 680.00</h3>
                                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                        <i class=\"fa fa-star\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Rooms Carousel End -->
                    </div>
                </div>
            </div>
            <!-- Section Rooms End -->

            <!-- Section About Promo -->
            <div class=\"section\">
                <div class=\"widget-about-promo\" data-background=\"/assets/img/photo-about.jpg\">
                    <div class=\"wrapper-inner\">
                        <div class=\"widget-inner\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h5>ABOUT THE GRANDIUM</h5>
                                    <h2>Your Perfect Escape</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices. Nunc et magna velit.</p>
                                    <p>Nulla vel nisi felis. Vivamus vitae ex a magna cursus pretium. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque nec ante euismod, posuere turpis facilisis, fringilla odio. Nunc eget purus at dolor venenatis cursus et non arcu. Praesent rutrum condimentum risus, sed interdum purus euismod eget.</p>
                                    <a href=\"aboutus.html\" class=\"btn\">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section About Promo End -->

            <!-- Section Features -->
            <div class=\"section\">
                <div class=\"widget-features-grid\">
                    <div class=\"wrapper-inner\">
                        <!-- Features Title -->
                        <div class=\"widget-title\">
                            <h5>OUR FACILITIES</h5>
                            <h2>Explore The Grandium</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        </div>
                        <!-- Features Title End -->
                        <!-- Features Content -->
                        <div class=\"widget-inner\">
                            <div class=\"row\">
                                <div class=\"col-lg-4 col-sm-6\">
                                    <div class=\"features-item\" data-background=\"/assets/img/photo-services-1-2.jpg\">
                                        <a href=\"#\">
                                            <h3>Sky Bar &amp; Lounge</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-sm-6\">
                                    <div class=\"features-item\" data-background=\"/assets/img/photo-services-2-1.jpg\">
                                        <a href=\"#\">
                                            <h3>Private Dining</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-sm-6\">
                                    <div class=\"features-item\" data-background=\"/assets/img/photo-services-3-1.jpg\">
                                        <a href=\"#\">
                                            <h3>Conference &amp; Events</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-sm-6\">
                                    <div class=\"features-item\" data-background=\"/assets/img/photo-services-4-1.jpg\">
                                        <a href=\"#\">
                                            <h3>Wedding Venue</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-sm-6\">
                                    <div class=\"features-item\" data-background=\"/assets/img/photo-services-5-1.jpg\">
                                        <a href=\"#\">
                                            <h3>Spa &amp; Beauty Center</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-sm-6\">
                                    <div class=\"features-item\" data-background=\"/assets/img/photo-services-6-1.jpg\">
                                        <a href=\"#\">
                                            <h3>Swimming Pool</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Features Content End -->
                    </div>
                </div>
            </div>
            <!-- Section Features End -->

            <!-- Section Gallery -->
            <div class=\"section\">
                <div class=\"widget-gallery-carousel\">
                    <div class=\"wrapper-full-inner\">
                        <!-- Gallery Title -->
                        <div class=\"widget-title\">
                            <h5>GALLERY</h5>
                            <h2>Discover The Grandium</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        </div>
                        <!-- Gallery Title End -->
                        <!-- Gallery Carousel -->
                        <div class=\"widget-carousel owl-carousel owl-theme\">
                            <div class=\"gallery-item\">
                                <a href=\"/assets/img/photo-services-6-1.jpg\" data-background=\"/assets/img/photo-services-6-1.jpg\" title=\"Photo Name\" class=\"popup-gallery\">
                                    <span class=\"item-text\">Swimming Pool</span>
                                </a>
                            </div>
                            <div class=\"gallery-item\">
                                <a href=\"/assets/img/photo-services-1-2.jpg\" data-background=\"/assets/img/photo-services-1-2.jpg\" title=\"Photo Name\" class=\"popup-gallery\">
                                    <span class=\"item-text\">Sky Bar &amp; Lounge</span>
                                </a>
                            </div>
                            <div class=\"gallery-item\">
                                <a href=\"/assets/img/photo-services-2-1.jpg\" data-background=\"/assets/img/photo-services-2-1.jpg\" title=\"Photo Name\" class=\"popup-gallery\">
                                    <span class=\"item-text\">Private Dining</span>
                                </a>
                            </div>
                            <div class=\"gallery-item\">
                                <a href=\"/assets/img/photo-services-3-1.jpg\" data-background=\"/assets/img/photo-services-3-1.jpg\" title=\"Photo Name\" class=\"popup-gallery\">
                                    <span class=\"item-text\">Conference &amp; Events</span>
                                </a>
                            </div>
                            <div class=\"gallery-item\">
                                <a href=\"/assets/img/photo-services-4-1.jpg\" data-background=\"/assets/img/photo-services-4-1.jpg\" title=\"Photo Name\" class=\"popup-gallery\">
                                    <span class=\"item-text\">Wedding Venue</span>
                                </a>
                            </div>
                            <div class=\"gallery-item\">
                                <a href=\"/assets/img/photo-services-5-1.jpg\" data-background=\"/assets/img/photo-services-5-1.jpg\" title=\"Photo Name\" class=\"popup-gallery\">
                                    <span class=\"item-text\">Spa &amp; Beauty Center</span>
                                </a>
                            </div>
                        </div>
                        <!-- Gallery Carousel End -->
                    </div>
                </div>
            </div>
            <!-- Section Gallery End -->

            <!-- Section Video -->
            <div class=\"section\">
                <div class=\"widget-video-full\" data-background=\"/assets/img/thumb-video-full.jpg\">
                    <div class=\"wrapper-full-inner\">
                        <!-- Video Title -->
                        <div class=\"widget-title\">
                            <h5>OVERVIEW</h5>
                            <h2>Video Tour</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        </div>
                        <!-- Video Title End -->
                        <!-- Video Content -->
                        <div class=\"widget-inner\">
                            <a href=\"https://vimeo.com/39493181\" class=\"video-play popup-video\"><i class=\"fa fa-play\"></i></a>
                        </div>
                        <!-- Video Content End -->
                    </div>
                </div>
            </div>
            <!-- Section Video End -->

            <!-- Section Offers -->
            <div class=\"section\">
                <div class=\"widget-offers-grid\" data-background=\"/assets/img/photo-offers.jpg\">
                    <div class=\"wrapper-inner\">
                        <!-- Offers Title -->
                        <div class=\"widget-title\">
                            <h5>OFFERS</h5>
                            <h2>The Grandium Special Offers</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        </div>
                        <!-- Offers Title End -->
                        <!-- Offers Content -->
                        <div class=\"widget-inner\">
                            <div class=\"offers-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\" data-background=\"/assets/img/photo-offers-1.jpg\"></div>
                                    <div class=\"item-desc\">
                                        <h3>Stay 3 Nights - Save 20%</h3>
                                        <p>Etiam posuere tortor quis nisl maximus placerat. Phasellus in magna ut libero hendrerit molestie. In placerat vulputate mi, ut placerat massa hendrerit ut.</p>
                                        <a href=\"#\" class=\"btn-link\">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"offers-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\" data-background=\"/assets/img/photo-offers-2.jpg\"></div>
                                    <div class=\"item-desc\">
                                        <h3>Weddings Special Offer 2016</h3>
                                        <p>Etiam posuere tortor quis nisl maximus placerat. Phasellus in magna ut libero hendrerit molestie. In placerat vulputate mi, ut placerat massa hendrerit ut.</p>
                                        <a href=\"#\" class=\"btn-link\">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"offers-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\" data-background=\"/assets/img/photo-offers-3.jpg\"></div>
                                    <div class=\"item-desc\">
                                        <h3>Spa Treatment Launch Offer</h3>
                                        <p>Etiam posuere tortor quis nisl maximus placerat. Phasellus in magna ut libero hendrerit molestie. In placerat vulputate mi, ut placerat massa hendrerit ut.</p>
                                        <a href=\"#\" class=\"btn-link\">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"offers-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\" data-background=\"/assets/img/photo-offers-4.jpg\"></div>
                                    <div class=\"item-desc\">
                                        <h3>Free Glass of Wine with Daily Classics Menu</h3>
                                        <p>Etiam posuere tortor quis nisl maximus placerat. Phasellus in magna ut libero hendrerit molestie. In placerat vulputate mi, ut placerat massa hendrerit ut.</p>
                                        <a href=\"#\" class=\"btn-link\">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Offers Content End -->
                    </div>
                </div>
            </div>
            <!-- Section Offers End -->

            <!-- Section Blog -->
            <div class=\"section\">
                <div class=\"widget-blog-carousel\">
                    <div class=\"wrapper-full-inner\">
                        <!-- Blog Title -->
                        <div class=\"widget-title\">
                            <h5>BLOG</h5>
                            <h2>Latest News</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        </div>
                        <!-- Blog Title End -->
                        <!-- Blog Carousel -->
                        <div class=\"widget-carousel owl-carousel owl-theme\">
                            <div class=\"blog-item\">
                                <div class=\"item-media\">
                                    <div class=\"item-date\"><b>24</b>DEC</div>
                                    <div class=\"media-photo\">
                                        <a href=\"blog-single.html\" data-background=\"/assets/img/photo-blog-1.jpg\"></a>    
                                    </div>
                                </div>
                                <div class=\"item-desc\">
                                    <h3><a href=\"blog-single.html\">Best Things to Do In London Enjoy the Nightlife</a></h3>
                                    <h5>EVENTS</h5>
                                    <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                    <a href=\"blog-single.html\" class=\"btn-link\">READ MORE</a>
                                </div>
                            </div>
                            <div class=\"blog-item\">
                                <div class=\"item-media\">
                                    <div class=\"item-date\"><b>21</b>NOV</div>
                                    <div class=\"media-photo\">
                                        <a href=\"blog-single.html\" data-background=\"/assets/img/photo-blog-2.jpg\"></a>    
                                    </div>
                                </div>
                                <div class=\"item-desc\">
                                    <h3><a href=\"blog-single.html\">A Walk from The Grandium Hotel Around</a></h3>
                                    <h5>TRAVEL</h5>
                                    <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                    <a href=\"blog-single.html\" class=\"btn-link\">READ MORE</a>
                                </div>
                            </div>
                            <div class=\"blog-item\">
                                <div class=\"item-media\">
                                    <div class=\"item-date\"><b>19</b>OCT</div>
                                    <div class=\"media-photo\">
                                        <a href=\"blog-single.html\" data-background=\"/assets/img/photo-blog-3.jpg\"></a>    
                                    </div>
                                </div>
                                <div class=\"item-desc\">
                                    <h3><a href=\"blog-single.html\">Top Events in London This February</a></h3>
                                    <h5>EVENTS</h5>
                                    <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                    <a href=\"blog-single.html\" class=\"btn-link\">READ MORE</a>
                                </div>
                            </div>
                            <div class=\"blog-item\">
                                <div class=\"item-media\">
                                    <div class=\"item-date\"><b>17</b>SEP</div>
                                    <div class=\"media-gallery\">
                                        <div class=\"media-carousel owl-carousel owl-theme owl-type1\">
                                            <a href=\"blog-single-gallery.html\" data-background=\"/assets/img/photo-blog-4.jpg\"></a>
                                            <a href=\"blog-single-gallery.html\" data-background=\"/assets/img/photo-blog-1.jpg\"></a>
                                            <a href=\"blog-single-gallery.html\" data-background=\"/assets/img/photo-blog-2.jpg\"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item-desc\">
                                    <h3><a href=\"blog-single-gallery.html\">Enjoy Wimbledon Finals Week The Grandium Hotel</a></h3>
                                    <h5>EVENTS</h5>
                                    <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                    <a href=\"blog-single-gallery.html\" class=\"btn-link\">READ MORE</a>
                                </div>
                            </div>
                            <div class=\"blog-item\">
                                <div class=\"item-media\">
                                    <div class=\"item-date\"><b>14</b>AUG</div>
                                    <div class=\"media-video video-full\">
                                        <iframe src=\"http://player.vimeo.com/video/39493181?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=0\" width=\"500\" height=\"281\"></iframe>
                                    </div>
                                </div>
                                <div class=\"item-desc\">
                                    <h3><a href=\"blog-single-vimeo.html\">The Ultimate Father's Day Gift: The Grandium Hotel</a></h3>
                                    <h5>ACCOMONDATION</h5>
                                    <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                    <a href=\"blog-single-vimeo.html\" class=\"btn-link\">READ MORE</a>
                                </div>
                            </div>
                            <div class=\"blog-item\">
                                <div class=\"item-media\">
                                    <div class=\"item-date\"><b>12</b>MAY</div>
                                    <div class=\"media-video video-full\">
                                        <iframe src=\"http://www.youtube.com/embed/SqeYP8EU79M\" width=\"560\" height=\"315\" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class=\"item-desc\">
                                    <h3><a href=\"blog-single-youtube.html\">Father's Day Dining &amp; Afternoon Tea Specials</a></h3>
                                    <h5>SERVICES</h5>
                                    <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                    <a href=\"blog-single-youtube.html\" class=\"btn-link\">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Carousel End -->
                    </div>
                </div>
            </div>
            <!-- Section Blog End -->

            <!-- Section Testimonials -->
            <div class=\"section\">
                <div class=\"widget-testimonials-carousel\">
                    <div class=\"wrapper-inner\">
                        <!-- Testimonials Title -->
                        <div class=\"widget-title\">
                            <h5>TESTIMONIALS</h5>
                            <h2>Happy Clients</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        </div>
                        <!-- Testimonials Title End -->
                        <!-- Testimonials Carousel -->
                        <div class=\"widget-carousel owl-carousel owl-theme\">
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-1.jpg\"></div>
                                    <h5>MARILYN SUTTLE</h5>
                                    <h6>UK, BRIGHTON</h6>
                                </div>
                            </div>
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-2.jpg\"></div>
                                    <h5>JACK MASON</h5>
                                    <h6>IRELAND</h6>
                                </div>
                            </div>
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-3.jpg\"></div>
                                    <h5>MICHAEL FELDSTEIN</h5>
                                    <h6>POLAND</h6>
                                </div>
                            </div>
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-4.jpg\"></div>
                                    <h5>JOHN FEDERICO</h5>
                                    <h6>ITALY</h6>
                                </div>
                            </div>
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-1.jpg\"></div>
                                    <h5>MARILYN SUTTLE</h5>
                                    <h6>UK, BRIGHTON</h6>
                                </div>
                            </div>
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-2.jpg\"></div>
                                    <h5>JACK MASON</h5>
                                    <h6>IRELAND</h6>
                                </div>
                            </div>
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-3.jpg\"></div>
                                    <h5>MICHAEL FELDSTEIN</h5>
                                    <h6>POLAND</h6>
                                </div>
                            </div>
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-4.jpg\"></div>
                                    <h5>JOHN FEDERICO</h5>
                                    <h6>ITALY</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonials Carousel End -->
                    </div>
                </div>
            </div>
            <!-- Section Testimonials End -->
        </div>
        <!-- Site Main End -->
    ";
        
        $__internal_e7377b5458c5915a0588022fbd6721a30b7cc61abf0504d7031cec6ecedae2c6->leave($__internal_e7377b5458c5915a0588022fbd6721a30b7cc61abf0504d7031cec6ecedae2c6_prof);

    }

    public function getTemplateName()
    {
        return "hotel/index.html.twig";
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

{% block body_id 'blog_index' %}

    {% block main %}

        !-- Site Loading -->
        <div class=\"site-loading\">
            <img src=\"/assets/img/loading.gif\" alt=\"Loading\">
        </div>
        <!-- Site Loading End -->

        <!-- Site Back Top -->
        <div class=\"site-backtop\" title=\"Back to top\">
            <i class=\"fa fa-angle-up\"></i>
        </div>
        <!-- Site Back Top End -->

        <!-- Site Main -->
        <div class=\"site-main\">
            <!-- Section Slider -->
            <div class=\"section\">
                <div class=\"widget-slider\">
                    <div class=\"wrapper-full\">
                        <!-- Slider Carousel -->
                        <div class=\"widget-carousel owl-carousel owl-theme\">
                            <div class=\"slider-item\" data-background=\"/assets/img/photo-slide-1.jpg\">
                                <div class=\"wrapper\">
                                    <div class=\"item-inner\">
                                        <h5>WELCOME TO THE GRANDIUM</h5>
                                        <h1>Experience the Freedom</h1>
                                        <h2>in London</h2>
                                    </div>
                                </div>
                            </div>
                            <div class=\"slider-item\" data-background=\"/assets/img/photo-slide-2.jpg\">
                                <div class=\"wrapper\">
                                    <div class=\"item-inner\">
                                        <h5>WELCOME TO THE GRANDIUM</h5>
                                        <h1>A Place to Relax</h1>
                                        <h2>in Maldives</h2>
                                    </div>
                                </div>
                            </div>
                            <div class=\"slider-item\" data-background=\"/assets/img/photo-slide-3.jpg\">
                                <div class=\"wrapper\">
                                    <div class=\"item-inner\">
                                        <h5>WELCOME TO THE GRANDIUM</h5>
                                        <h1>Touch The Sea</h1>
                                        <h2>in Monaco</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Carousel End -->
                        <!-- Slider Booking -->
                        <div class=\"slider-booking\">
                            <div class=\"wrapper\">
                                <h5>BOOK NOW YOUR HOTEL</h5>
                                <form>
                                    <ul>
                                        <li>
                                            <i class=\"fa fa-calendar-plus-o\"></i>
                                            <input type=\"text\" name=\"checkin\" placeholder=\"CHECK IN\" class=\"datepicker\" required>
                                        </li>
                                        <li>
                                            <i class=\"fa fa-calendar-plus-o\"></i>
                                            <input type=\"text\" name=\"checkout\" placeholder=\"CHECK OUT\" class=\"datepicker\" required>
                                        </li>
                                        <li>
                                            <i class=\"fa fa-caret-down\"></i>
                                            <select name=\"adults\" required>
                                                <option value=\"\">ADULTS</option>
                                                <option value=\"1\">1 ADULT</option>
                                                <option value=\"2\">2 ADULT</option>
                                                <option value=\"3\">3 ADULT</option>
                                            </select>
                                        </li>
                                        <li>
                                            <i class=\"fa fa-caret-down\"></i>
                                            <select name=\"childrens\" required>
                                                <option value=\"\">CHILDRENS</option>
                                                <option value=\"1\">1 CHILDREN</option>
                                                <option value=\"2\">2 CHILDREN</option>
                                                <option value=\"3\">3 CHILDREN</option>
                                            </select>
                                        </li>
                                        <li>
                                            <button type=\"submit\" class=\"btn\">BOOK NOW</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <!-- Slider Booking End -->
                    </div>
                </div>
            </div>
            <!-- Section Slider End -->

            <!-- Section Rooms -->
            <div class=\"section\">
                <div class=\"widget-rooms-carousel top-over\">
                    <div class=\"wrapper-inner\">
                        <!-- Rooms Title -->
                        <div class=\"widget-title\">
                            <h5>OUR ROOMS</h5>
                            <h2>Experience The Freedom</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        </div>
                        <!-- Rooms Title End -->
                        <!-- Rooms Carousel -->
                        <div class=\"widget-carousel owl-carousel owl-theme\">
                            <div class=\"rooms-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\">
                                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-1.jpg\"></a>
                                    </div>
                                    <div class=\"item-desc\">
                                        <h2><a href=\"rooms-detail.html\">Single Room</a></h2>
                                        <h3>\$ 160.00</h3>
                                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                        <i class=\"fa fa-star\"></i>
                                    </div>
                                </div>
                            </div>
                            <div class=\"rooms-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\">
                                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-2.jpg\"></a>
                                    </div>
                                    <div class=\"item-desc\">
                                        <h2><a href=\"rooms-detail.html\">Double Room</a></h2>
                                        <h3>\$ 300.00</h3>
                                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                        <i class=\"fa fa-star\"></i>
                                    </div>
                                </div>
                            </div>
                            <div class=\"rooms-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\">
                                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-3.jpg\"></a>
                                    </div>
                                    <div class=\"item-desc\">
                                        <h2><a href=\"rooms-detail.html\">Deluxe Single Room</a></h2>
                                        <h3>\$ 420.00</h3>
                                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                        <i class=\"fa fa-star\"></i>
                                    </div>
                                </div>
                            </div>
                            <div class=\"rooms-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\">
                                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-4.jpg\"></a>
                                    </div>
                                    <div class=\"item-desc\">
                                        <h2><a href=\"rooms-detail.html\">Deluxe Double Room</a></h2>
                                        <h3>\$ 540.00</h3>
                                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                        <i class=\"fa fa-star\"></i>
                                    </div>
                                </div>
                            </div>
                            <div class=\"rooms-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\">
                                        <a href=\"rooms-detail.html\" data-background=\"/assets/img/photo-room-5.jpg\"></a>
                                    </div>
                                    <div class=\"item-desc\">
                                        <h2><a href=\"rooms-detail.html\">Royal Suit Room</a></h2>
                                        <h3>\$ 680.00</h3>
                                        <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                        <i class=\"fa fa-star\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Rooms Carousel End -->
                    </div>
                </div>
            </div>
            <!-- Section Rooms End -->

            <!-- Section About Promo -->
            <div class=\"section\">
                <div class=\"widget-about-promo\" data-background=\"/assets/img/photo-about.jpg\">
                    <div class=\"wrapper-inner\">
                        <div class=\"widget-inner\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h5>ABOUT THE GRANDIUM</h5>
                                    <h2>Your Perfect Escape</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices. Nunc et magna velit.</p>
                                    <p>Nulla vel nisi felis. Vivamus vitae ex a magna cursus pretium. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque nec ante euismod, posuere turpis facilisis, fringilla odio. Nunc eget purus at dolor venenatis cursus et non arcu. Praesent rutrum condimentum risus, sed interdum purus euismod eget.</p>
                                    <a href=\"aboutus.html\" class=\"btn\">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section About Promo End -->

            <!-- Section Features -->
            <div class=\"section\">
                <div class=\"widget-features-grid\">
                    <div class=\"wrapper-inner\">
                        <!-- Features Title -->
                        <div class=\"widget-title\">
                            <h5>OUR FACILITIES</h5>
                            <h2>Explore The Grandium</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        </div>
                        <!-- Features Title End -->
                        <!-- Features Content -->
                        <div class=\"widget-inner\">
                            <div class=\"row\">
                                <div class=\"col-lg-4 col-sm-6\">
                                    <div class=\"features-item\" data-background=\"/assets/img/photo-services-1-2.jpg\">
                                        <a href=\"#\">
                                            <h3>Sky Bar &amp; Lounge</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-sm-6\">
                                    <div class=\"features-item\" data-background=\"/assets/img/photo-services-2-1.jpg\">
                                        <a href=\"#\">
                                            <h3>Private Dining</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-sm-6\">
                                    <div class=\"features-item\" data-background=\"/assets/img/photo-services-3-1.jpg\">
                                        <a href=\"#\">
                                            <h3>Conference &amp; Events</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-sm-6\">
                                    <div class=\"features-item\" data-background=\"/assets/img/photo-services-4-1.jpg\">
                                        <a href=\"#\">
                                            <h3>Wedding Venue</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-sm-6\">
                                    <div class=\"features-item\" data-background=\"/assets/img/photo-services-5-1.jpg\">
                                        <a href=\"#\">
                                            <h3>Spa &amp; Beauty Center</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-sm-6\">
                                    <div class=\"features-item\" data-background=\"/assets/img/photo-services-6-1.jpg\">
                                        <a href=\"#\">
                                            <h3>Swimming Pool</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Features Content End -->
                    </div>
                </div>
            </div>
            <!-- Section Features End -->

            <!-- Section Gallery -->
            <div class=\"section\">
                <div class=\"widget-gallery-carousel\">
                    <div class=\"wrapper-full-inner\">
                        <!-- Gallery Title -->
                        <div class=\"widget-title\">
                            <h5>GALLERY</h5>
                            <h2>Discover The Grandium</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        </div>
                        <!-- Gallery Title End -->
                        <!-- Gallery Carousel -->
                        <div class=\"widget-carousel owl-carousel owl-theme\">
                            <div class=\"gallery-item\">
                                <a href=\"/assets/img/photo-services-6-1.jpg\" data-background=\"/assets/img/photo-services-6-1.jpg\" title=\"Photo Name\" class=\"popup-gallery\">
                                    <span class=\"item-text\">Swimming Pool</span>
                                </a>
                            </div>
                            <div class=\"gallery-item\">
                                <a href=\"/assets/img/photo-services-1-2.jpg\" data-background=\"/assets/img/photo-services-1-2.jpg\" title=\"Photo Name\" class=\"popup-gallery\">
                                    <span class=\"item-text\">Sky Bar &amp; Lounge</span>
                                </a>
                            </div>
                            <div class=\"gallery-item\">
                                <a href=\"/assets/img/photo-services-2-1.jpg\" data-background=\"/assets/img/photo-services-2-1.jpg\" title=\"Photo Name\" class=\"popup-gallery\">
                                    <span class=\"item-text\">Private Dining</span>
                                </a>
                            </div>
                            <div class=\"gallery-item\">
                                <a href=\"/assets/img/photo-services-3-1.jpg\" data-background=\"/assets/img/photo-services-3-1.jpg\" title=\"Photo Name\" class=\"popup-gallery\">
                                    <span class=\"item-text\">Conference &amp; Events</span>
                                </a>
                            </div>
                            <div class=\"gallery-item\">
                                <a href=\"/assets/img/photo-services-4-1.jpg\" data-background=\"/assets/img/photo-services-4-1.jpg\" title=\"Photo Name\" class=\"popup-gallery\">
                                    <span class=\"item-text\">Wedding Venue</span>
                                </a>
                            </div>
                            <div class=\"gallery-item\">
                                <a href=\"/assets/img/photo-services-5-1.jpg\" data-background=\"/assets/img/photo-services-5-1.jpg\" title=\"Photo Name\" class=\"popup-gallery\">
                                    <span class=\"item-text\">Spa &amp; Beauty Center</span>
                                </a>
                            </div>
                        </div>
                        <!-- Gallery Carousel End -->
                    </div>
                </div>
            </div>
            <!-- Section Gallery End -->

            <!-- Section Video -->
            <div class=\"section\">
                <div class=\"widget-video-full\" data-background=\"/assets/img/thumb-video-full.jpg\">
                    <div class=\"wrapper-full-inner\">
                        <!-- Video Title -->
                        <div class=\"widget-title\">
                            <h5>OVERVIEW</h5>
                            <h2>Video Tour</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        </div>
                        <!-- Video Title End -->
                        <!-- Video Content -->
                        <div class=\"widget-inner\">
                            <a href=\"https://vimeo.com/39493181\" class=\"video-play popup-video\"><i class=\"fa fa-play\"></i></a>
                        </div>
                        <!-- Video Content End -->
                    </div>
                </div>
            </div>
            <!-- Section Video End -->

            <!-- Section Offers -->
            <div class=\"section\">
                <div class=\"widget-offers-grid\" data-background=\"/assets/img/photo-offers.jpg\">
                    <div class=\"wrapper-inner\">
                        <!-- Offers Title -->
                        <div class=\"widget-title\">
                            <h5>OFFERS</h5>
                            <h2>The Grandium Special Offers</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        </div>
                        <!-- Offers Title End -->
                        <!-- Offers Content -->
                        <div class=\"widget-inner\">
                            <div class=\"offers-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\" data-background=\"/assets/img/photo-offers-1.jpg\"></div>
                                    <div class=\"item-desc\">
                                        <h3>Stay 3 Nights - Save 20%</h3>
                                        <p>Etiam posuere tortor quis nisl maximus placerat. Phasellus in magna ut libero hendrerit molestie. In placerat vulputate mi, ut placerat massa hendrerit ut.</p>
                                        <a href=\"#\" class=\"btn-link\">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"offers-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\" data-background=\"/assets/img/photo-offers-2.jpg\"></div>
                                    <div class=\"item-desc\">
                                        <h3>Weddings Special Offer 2016</h3>
                                        <p>Etiam posuere tortor quis nisl maximus placerat. Phasellus in magna ut libero hendrerit molestie. In placerat vulputate mi, ut placerat massa hendrerit ut.</p>
                                        <a href=\"#\" class=\"btn-link\">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"offers-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\" data-background=\"/assets/img/photo-offers-3.jpg\"></div>
                                    <div class=\"item-desc\">
                                        <h3>Spa Treatment Launch Offer</h3>
                                        <p>Etiam posuere tortor quis nisl maximus placerat. Phasellus in magna ut libero hendrerit molestie. In placerat vulputate mi, ut placerat massa hendrerit ut.</p>
                                        <a href=\"#\" class=\"btn-link\">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"offers-item\">
                                <div class=\"item-inner\">
                                    <div class=\"item-photo\" data-background=\"/assets/img/photo-offers-4.jpg\"></div>
                                    <div class=\"item-desc\">
                                        <h3>Free Glass of Wine with Daily Classics Menu</h3>
                                        <p>Etiam posuere tortor quis nisl maximus placerat. Phasellus in magna ut libero hendrerit molestie. In placerat vulputate mi, ut placerat massa hendrerit ut.</p>
                                        <a href=\"#\" class=\"btn-link\">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Offers Content End -->
                    </div>
                </div>
            </div>
            <!-- Section Offers End -->

            <!-- Section Blog -->
            <div class=\"section\">
                <div class=\"widget-blog-carousel\">
                    <div class=\"wrapper-full-inner\">
                        <!-- Blog Title -->
                        <div class=\"widget-title\">
                            <h5>BLOG</h5>
                            <h2>Latest News</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        </div>
                        <!-- Blog Title End -->
                        <!-- Blog Carousel -->
                        <div class=\"widget-carousel owl-carousel owl-theme\">
                            <div class=\"blog-item\">
                                <div class=\"item-media\">
                                    <div class=\"item-date\"><b>24</b>DEC</div>
                                    <div class=\"media-photo\">
                                        <a href=\"blog-single.html\" data-background=\"/assets/img/photo-blog-1.jpg\"></a>    
                                    </div>
                                </div>
                                <div class=\"item-desc\">
                                    <h3><a href=\"blog-single.html\">Best Things to Do In London Enjoy the Nightlife</a></h3>
                                    <h5>EVENTS</h5>
                                    <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                    <a href=\"blog-single.html\" class=\"btn-link\">READ MORE</a>
                                </div>
                            </div>
                            <div class=\"blog-item\">
                                <div class=\"item-media\">
                                    <div class=\"item-date\"><b>21</b>NOV</div>
                                    <div class=\"media-photo\">
                                        <a href=\"blog-single.html\" data-background=\"/assets/img/photo-blog-2.jpg\"></a>    
                                    </div>
                                </div>
                                <div class=\"item-desc\">
                                    <h3><a href=\"blog-single.html\">A Walk from The Grandium Hotel Around</a></h3>
                                    <h5>TRAVEL</h5>
                                    <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                    <a href=\"blog-single.html\" class=\"btn-link\">READ MORE</a>
                                </div>
                            </div>
                            <div class=\"blog-item\">
                                <div class=\"item-media\">
                                    <div class=\"item-date\"><b>19</b>OCT</div>
                                    <div class=\"media-photo\">
                                        <a href=\"blog-single.html\" data-background=\"/assets/img/photo-blog-3.jpg\"></a>    
                                    </div>
                                </div>
                                <div class=\"item-desc\">
                                    <h3><a href=\"blog-single.html\">Top Events in London This February</a></h3>
                                    <h5>EVENTS</h5>
                                    <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                    <a href=\"blog-single.html\" class=\"btn-link\">READ MORE</a>
                                </div>
                            </div>
                            <div class=\"blog-item\">
                                <div class=\"item-media\">
                                    <div class=\"item-date\"><b>17</b>SEP</div>
                                    <div class=\"media-gallery\">
                                        <div class=\"media-carousel owl-carousel owl-theme owl-type1\">
                                            <a href=\"blog-single-gallery.html\" data-background=\"/assets/img/photo-blog-4.jpg\"></a>
                                            <a href=\"blog-single-gallery.html\" data-background=\"/assets/img/photo-blog-1.jpg\"></a>
                                            <a href=\"blog-single-gallery.html\" data-background=\"/assets/img/photo-blog-2.jpg\"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item-desc\">
                                    <h3><a href=\"blog-single-gallery.html\">Enjoy Wimbledon Finals Week The Grandium Hotel</a></h3>
                                    <h5>EVENTS</h5>
                                    <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                    <a href=\"blog-single-gallery.html\" class=\"btn-link\">READ MORE</a>
                                </div>
                            </div>
                            <div class=\"blog-item\">
                                <div class=\"item-media\">
                                    <div class=\"item-date\"><b>14</b>AUG</div>
                                    <div class=\"media-video video-full\">
                                        <iframe src=\"http://player.vimeo.com/video/39493181?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=0\" width=\"500\" height=\"281\"></iframe>
                                    </div>
                                </div>
                                <div class=\"item-desc\">
                                    <h3><a href=\"blog-single-vimeo.html\">The Ultimate Father's Day Gift: The Grandium Hotel</a></h3>
                                    <h5>ACCOMONDATION</h5>
                                    <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                    <a href=\"blog-single-vimeo.html\" class=\"btn-link\">READ MORE</a>
                                </div>
                            </div>
                            <div class=\"blog-item\">
                                <div class=\"item-media\">
                                    <div class=\"item-date\"><b>12</b>MAY</div>
                                    <div class=\"media-video video-full\">
                                        <iframe src=\"http://www.youtube.com/embed/SqeYP8EU79M\" width=\"560\" height=\"315\" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class=\"item-desc\">
                                    <h3><a href=\"blog-single-youtube.html\">Father's Day Dining &amp; Afternoon Tea Specials</a></h3>
                                    <h5>SERVICES</h5>
                                    <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                                    <a href=\"blog-single-youtube.html\" class=\"btn-link\">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Carousel End -->
                    </div>
                </div>
            </div>
            <!-- Section Blog End -->

            <!-- Section Testimonials -->
            <div class=\"section\">
                <div class=\"widget-testimonials-carousel\">
                    <div class=\"wrapper-inner\">
                        <!-- Testimonials Title -->
                        <div class=\"widget-title\">
                            <h5>TESTIMONIALS</h5>
                            <h2>Happy Clients</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        </div>
                        <!-- Testimonials Title End -->
                        <!-- Testimonials Carousel -->
                        <div class=\"widget-carousel owl-carousel owl-theme\">
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-1.jpg\"></div>
                                    <h5>MARILYN SUTTLE</h5>
                                    <h6>UK, BRIGHTON</h6>
                                </div>
                            </div>
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-2.jpg\"></div>
                                    <h5>JACK MASON</h5>
                                    <h6>IRELAND</h6>
                                </div>
                            </div>
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-3.jpg\"></div>
                                    <h5>MICHAEL FELDSTEIN</h5>
                                    <h6>POLAND</h6>
                                </div>
                            </div>
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-4.jpg\"></div>
                                    <h5>JOHN FEDERICO</h5>
                                    <h6>ITALY</h6>
                                </div>
                            </div>
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-1.jpg\"></div>
                                    <h5>MARILYN SUTTLE</h5>
                                    <h6>UK, BRIGHTON</h6>
                                </div>
                            </div>
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-2.jpg\"></div>
                                    <h5>JACK MASON</h5>
                                    <h6>IRELAND</h6>
                                </div>
                            </div>
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-3.jpg\"></div>
                                    <h5>MICHAEL FELDSTEIN</h5>
                                    <h6>POLAND</h6>
                                </div>
                            </div>
                            <div class=\"testimonials-item\">
                                <div class=\"item-comment\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                                </div>
                                <div class=\"item-customer\">
                                    <div class=\"customer-photo\" data-background=\"/assets/img/user-4.jpg\"></div>
                                    <h5>JOHN FEDERICO</h5>
                                    <h6>ITALY</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonials Carousel End -->
                    </div>
                </div>
            </div>
            <!-- Section Testimonials End -->
        </div>
        <!-- Site Main End -->
    {% endblock %}

{# {% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %} #}
";
    }
}
