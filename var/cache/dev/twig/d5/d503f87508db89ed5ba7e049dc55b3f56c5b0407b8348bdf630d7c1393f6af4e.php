<?php

/* base.html.twig */
class __TwigTemplate_be684cb0d8d79ff4e36298e3c1b2dd9842d7b97a837d7e0acd09aab345eb11b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'favicons' => array($this, 'block_favicons'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_942b5d5461feda8d89af88b1c6b88d8d86d5257a45288cba2022aca0faec8946 = $this->env->getExtension("native_profiler");
        $__internal_942b5d5461feda8d89af88b1c6b88d8d86d5257a45288cba2022aca0faec8946->enter($__internal_942b5d5461feda8d89af88b1c6b88d8d86d5257a45288cba2022aca0faec8946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "   <!DOCTYPE html>
   <html>
   <head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta name=\"keywords\" content=\"hotel, booking, accommodation, inn, spa, resort, travel, holiday, tourism, vacation\">

    <!-- Mobile Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    <!-- Favicons -->
    ";
        // line 18
        $this->displayBlock('favicons', $context, $blocks);
        // line 27
        echo "
  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext\" rel=\"stylesheet\" type=\"text/css\">    
  <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;subset=latin,latin-ext\" rel=\"stylesheet\" type=\"text/css\">

  ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 46
        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body id=\"";
        // line 49
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

  ";
        // line 51
        $this->displayBlock('header', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('body', $context, $blocks);
        // line 118
        echo "
";
        // line 119
        $this->displayBlock('footer', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('javascripts', $context, $blocks);
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('extra_javascripts', $context, $blocks);
        // line 207
        echo "</body>
</html>
";
        
        $__internal_942b5d5461feda8d89af88b1c6b88d8d86d5257a45288cba2022aca0faec8946->leave($__internal_942b5d5461feda8d89af88b1c6b88d8d86d5257a45288cba2022aca0faec8946_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_aeeed37fe8d6d9ae675983fc59e8da1b4129a15c8167fa5ebe8e41ed72a07a41 = $this->env->getExtension("native_profiler");
        $__internal_aeeed37fe8d6d9ae675983fc59e8da1b4129a15c8167fa5ebe8e41ed72a07a41->enter($__internal_aeeed37fe8d6d9ae675983fc59e8da1b4129a15c8167fa5ebe8e41ed72a07a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Jess Hotel";
        
        $__internal_aeeed37fe8d6d9ae675983fc59e8da1b4129a15c8167fa5ebe8e41ed72a07a41->leave($__internal_aeeed37fe8d6d9ae675983fc59e8da1b4129a15c8167fa5ebe8e41ed72a07a41_prof);

    }

    // line 18
    public function block_favicons($context, array $blocks = array())
    {
        $__internal_3ca981b4eacc2e89ee6a2339c90c4a6fd3decfcd837eda6ab1284e3dfaf4b8c8 = $this->env->getExtension("native_profiler");
        $__internal_3ca981b4eacc2e89ee6a2339c90c4a6fd3decfcd837eda6ab1284e3dfaf4b8c8->enter($__internal_3ca981b4eacc2e89ee6a2339c90c4a6fd3decfcd837eda6ab1284e3dfaf4b8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicons"));

        // line 19
        echo "      <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/assets/img/favicon.png\">
      <link rel=\"apple-touch-icon\" href=\"/assets/img/apple-touch-icon.png\">
      <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/assets/img/apple-touch-icon-76x76.png\">
      <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/assets/img/apple-touch-icon-120x120.png\">
      <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/assets/img/apple-touch-icon-152x152.png\">
      <link rel=\"apple-touch-icon\" sizes=\"167x167\" href=\"/assets/img/apple-touch-icon-167x167.png\">
      <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/assets/img/apple-touch-icon-180x180.png\">
  ";
        
        $__internal_3ca981b4eacc2e89ee6a2339c90c4a6fd3decfcd837eda6ab1284e3dfaf4b8c8->leave($__internal_3ca981b4eacc2e89ee6a2339c90c4a6fd3decfcd837eda6ab1284e3dfaf4b8c8_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c603ef9210afd4fd8815d25891dbe2e3ace38880d186a2f76068e8a15fb2109d = $this->env->getExtension("native_profiler");
        $__internal_c603ef9210afd4fd8815d25891dbe2e3ace38880d186a2f76068e8a15fb2109d->enter($__internal_c603ef9210afd4fd8815d25891dbe2e3ace38880d186a2f76068e8a15fb2109d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 33
        echo "

    ";
        // line 36
        echo "    <!-- Css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/font.awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/magnific.popup.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/owl.carousel.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/owl.theme.default.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/jquery-ui.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/responsive.css\">
";
        
        $__internal_c603ef9210afd4fd8815d25891dbe2e3ace38880d186a2f76068e8a15fb2109d->leave($__internal_c603ef9210afd4fd8815d25891dbe2e3ace38880d186a2f76068e8a15fb2109d_prof);

    }

    // line 49
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f1472905707af351b2ee4352709d4152449fa45ba1d79f9a4af7db039e2e29b4 = $this->env->getExtension("native_profiler");
        $__internal_f1472905707af351b2ee4352709d4152449fa45ba1d79f9a4af7db039e2e29b4->enter($__internal_f1472905707af351b2ee4352709d4152449fa45ba1d79f9a4af7db039e2e29b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_f1472905707af351b2ee4352709d4152449fa45ba1d79f9a4af7db039e2e29b4->leave($__internal_f1472905707af351b2ee4352709d4152449fa45ba1d79f9a4af7db039e2e29b4_prof);

    }

    // line 51
    public function block_header($context, array $blocks = array())
    {
        $__internal_e625aff190df3bda21c606de8765a36769258bee7019342f770cdad1c289e3a3 = $this->env->getExtension("native_profiler");
        $__internal_e625aff190df3bda21c606de8765a36769258bee7019342f770cdad1c289e3a3->enter($__internal_e625aff190df3bda21c606de8765a36769258bee7019342f770cdad1c289e3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 52
        echo "    <!-- Site Header -->
    <div class=\"site-header\">
        <!-- Header Top -->
        <div class=\"header-top\">
            <div class=\"wrapper\">
                <div class=\"header-contact\">
                    <ul>
                        <li>+228 22-50-43-17</li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a></li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a></li>
                    </ul>
                </div>
                <div class=\"header-lang\">
                    <ul>
                        <li class=\"active\"><a href=\"#\">EN</a></li>
                        <li><a href=\"#\">FR</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header Top End -->
        <!-- Header Bottom -->
        <div class=\"header-bottom\">
            <div class=\"wrapper\">
                <div class=\"header-logo\">
                    <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("hotel_index");
        echo "\"><img src=\"/assets/img/logojessconcu.png\" alt=\"Jess Hotel\"></a>
                </div>
                <div class=\"header-nav\">
                    <ul class=\"nav-left\">
                        <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("hotel_index");
        echo "\">HOME</a></li>
                        <li><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("hotel_about_us");
        echo "\">ABOUT US</a></li>
                        <li class=\"sub\"><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("hotel_rooms");
        echo "\">ROOMS</a>
                            <ul>
                                <li><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("hotel_rooms");
        echo "\">ROOMS LISTING</a></li>
                                <li><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("hotel_room_detail");
        echo "\">ROOMS DETAIL</a></li>
                            </ul>
                        </li>
                        <li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("hotel_services");
        echo "\">SERVICES</a></li>
                    </ul>
                    <ul class=\"nav-right\">
                        <li><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("hotel_gallery");
        echo "\">GALLERY</a></li>
                        <li><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("hotel_booking");
        echo "\">BOOKING</a></li>
                        <li><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("hotel_blog");
        echo "\">BLOG</a></li>
                        <li><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("hotel_contact");
        echo "\">CONTACT</a></li>
                    </ul>
                </div>
                <div class=\"header-toggle\">
                    <i class=\"fa fa-bars\"></i>
                </div>
            </div>
        </div>
        <!-- Header Bottom End -->
    </div>
    <!-- Site Header End -->
";
        
        $__internal_e625aff190df3bda21c606de8765a36769258bee7019342f770cdad1c289e3a3->leave($__internal_e625aff190df3bda21c606de8765a36769258bee7019342f770cdad1c289e3a3_prof);

    }

    // line 110
    public function block_body($context, array $blocks = array())
    {
        $__internal_502f0d98cb9873cdfcc84d6ea68c16c280b355a2bc44a3242408162b11037875 = $this->env->getExtension("native_profiler");
        $__internal_502f0d98cb9873cdfcc84d6ea68c16c280b355a2bc44a3242408162b11037875->enter($__internal_502f0d98cb9873cdfcc84d6ea68c16c280b355a2bc44a3242408162b11037875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 111
        echo "
        ";
        // line 112
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "
        ";
        // line 113
        $this->displayBlock('main', $context, $blocks);
        // line 116
        echo "
";
        
        $__internal_502f0d98cb9873cdfcc84d6ea68c16c280b355a2bc44a3242408162b11037875->leave($__internal_502f0d98cb9873cdfcc84d6ea68c16c280b355a2bc44a3242408162b11037875_prof);

    }

    // line 113
    public function block_main($context, array $blocks = array())
    {
        $__internal_657873605d5d8028045d487243e6acf943868fc2f614e2f29e8c44aa1de418c6 = $this->env->getExtension("native_profiler");
        $__internal_657873605d5d8028045d487243e6acf943868fc2f614e2f29e8c44aa1de418c6->enter($__internal_657873605d5d8028045d487243e6acf943868fc2f614e2f29e8c44aa1de418c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 114
        echo "
        ";
        
        $__internal_657873605d5d8028045d487243e6acf943868fc2f614e2f29e8c44aa1de418c6->leave($__internal_657873605d5d8028045d487243e6acf943868fc2f614e2f29e8c44aa1de418c6_prof);

    }

    // line 119
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b211c9cdb21a23359d277ac184e5df771d3f6a36a3f92a2c01f137bd4a466a8e = $this->env->getExtension("native_profiler");
        $__internal_b211c9cdb21a23359d277ac184e5df771d3f6a36a3f92a2c01f137bd4a466a8e->enter($__internal_b211c9cdb21a23359d277ac184e5df771d3f6a36a3f92a2c01f137bd4a466a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 120
        echo "    <!-- Site Footer -->
    <div class=\"site-footer\">
        <!-- Footer Top -->
        <div class=\"footer-top\">
            <div class=\"wrapper\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <h5>SOCIAL MEDIA</h5>
                        <h6>FOLLOW THE GRADIUM</h6>
                        <div class=\"widget-social-icons\">
                            <ul>
                                <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a></li>
                                <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <h5>NEWSLETTER</h5>
                        <h6>WE LOVE TO SHARE NEW OFFERS AND EXLUSIVE PROMOTIONS</h6>
                        <div class=\"widget-newsletter\">
                            <form>
                                <input type=\"text\" placeholder=\"ENTER YOUR E-MAIL ADDRESS\" required>
                                <button type=\"submit\"><i class=\"fa fa-paper-plane\"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->
        <!-- Footer Bottom -->
        <div class=\"footer-bottom\">
            <div class=\"wrapper\">
                <div class=\"footer-logo\">
                    <img src=\"assets/img/logo.png\" alt=\"Jess Hotel\">
                </div>
                <div class=\"footer-copyright\">
                    <p>COPYRIGHT © JESS HOTEL</p>
                </div>
                <div class=\"footer-contact\">
                    <ul>
                        <li><i class=\"fa fa-map-marker\"></i> AVENUE PYA PROLONGEE, TOTSI-ADIDOADIN, LOME-TOGO</li>
                        <li><i class=\"fa fa-phone\"></i> +228 2250-43-17</li>
                        <li><a href=\"mailto:info@hoteljesshouse.com\"><i class=\"fa fa-paper-plane\"></i> INFO@HOTELJESSHOUSE.COM</a></li>
                    </ul>
                </div>
                <div class=\"footer-nav\">
                    <ul>
                        <li><a href=\"#\">SITEMAP</a></li>
                        <li><a href=\"#\">PRIVACY POLICY</a></li>
                        <li><a href=\"#\">TERMS OF USE</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </div>
    <!-- Site Footer End -->
";
        
        $__internal_b211c9cdb21a23359d277ac184e5df771d3f6a36a3f92a2c01f137bd4a466a8e->leave($__internal_b211c9cdb21a23359d277ac184e5df771d3f6a36a3f92a2c01f137bd4a466a8e_prof);

    }

    // line 182
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2f7cb0fc686e17d837c67d3e343e0429f8d4760d4f3f4d58808b493ae528384e = $this->env->getExtension("native_profiler");
        $__internal_2f7cb0fc686e17d837c67d3e343e0429f8d4760d4f3f4d58808b493ae528384e->enter($__internal_2f7cb0fc686e17d837c67d3e343e0429f8d4760d4f3f4d58808b493ae528384e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 183
        echo "    <!-- Scripts -->
    <script src=\"/assets/js/jquery.min.js\"></script>
    <script src=\"/assets/js/jquery-ui.min.js\"></script>
    <script src=\"/assets/js/jquery.fitvids.js\"></script>
    <script src=\"/assets/js/bootstrap.min.js\"></script>
    <script src=\"/assets/js/magnific.popup.min.js\"></script>
    <script src=\"/assets/js/imagesloaded.pkgd.js\"></script>
    <script src=\"/assets/js/isotope.pkgd.min.js\"></script>
    <script src=\"/assets/js/owl.carousel.min.js\"></script>
    <script src=\"/assets/js/booking.form.js\"></script>
    <script src=\"/assets/js/contact.form.js\"></script>

    <!-- Map Scripts -->
    <script src=\"http://maps.google.com/maps/api/js?sensor=false&amp;language=en\"></script>
    <script src=\"/assets/js/gmap3.min.js\"></script>

    <!-- Custom Scripts -->
    <script src=\"/assets/js/custom.js\"></script>

";
        
        $__internal_2f7cb0fc686e17d837c67d3e343e0429f8d4760d4f3f4d58808b493ae528384e->leave($__internal_2f7cb0fc686e17d837c67d3e343e0429f8d4760d4f3f4d58808b493ae528384e_prof);

    }

    // line 204
    public function block_extra_javascripts($context, array $blocks = array())
    {
        $__internal_cdbbfbc8900c81fb801fc380fec82e8de7cd90fcf07378531ebba89e0149c859 = $this->env->getExtension("native_profiler");
        $__internal_cdbbfbc8900c81fb801fc380fec82e8de7cd90fcf07378531ebba89e0149c859->enter($__internal_cdbbfbc8900c81fb801fc380fec82e8de7cd90fcf07378531ebba89e0149c859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        // line 205
        echo "
";
        
        $__internal_cdbbfbc8900c81fb801fc380fec82e8de7cd90fcf07378531ebba89e0149c859->leave($__internal_cdbbfbc8900c81fb801fc380fec82e8de7cd90fcf07378531ebba89e0149c859_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 205,  416 => 204,  390 => 183,  384 => 182,  317 => 120,  311 => 119,  303 => 114,  297 => 113,  289 => 116,  287 => 113,  283 => 112,  280 => 111,  274 => 110,  255 => 97,  251 => 96,  247 => 95,  243 => 94,  237 => 91,  231 => 88,  227 => 87,  222 => 85,  218 => 84,  214 => 83,  207 => 79,  178 => 52,  172 => 51,  161 => 49,  145 => 36,  141 => 33,  135 => 32,  121 => 19,  115 => 18,  103 => 10,  94 => 207,  92 => 204,  89 => 203,  87 => 182,  84 => 181,  82 => 119,  79 => 118,  77 => 110,  74 => 109,  72 => 51,  67 => 49,  60 => 46,  58 => 32,  51 => 27,  49 => 18,  38 => 10,  32 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
   #}
   <!DOCTYPE html>
   <html>
   <head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Jess Hotel{% endblock %}</title>

    <meta name=\"keywords\" content=\"hotel, booking, accommodation, inn, spa, resort, travel, holiday, tourism, vacation\">

    <!-- Mobile Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    <!-- Favicons -->
    {% block favicons %}
      <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/assets/img/favicon.png\">
      <link rel=\"apple-touch-icon\" href=\"/assets/img/apple-touch-icon.png\">
      <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/assets/img/apple-touch-icon-76x76.png\">
      <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/assets/img/apple-touch-icon-120x120.png\">
      <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/assets/img/apple-touch-icon-152x152.png\">
      <link rel=\"apple-touch-icon\" sizes=\"167x167\" href=\"/assets/img/apple-touch-icon-167x167.png\">
      <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/assets/img/apple-touch-icon-180x180.png\">
  {% endblock %}

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext\" rel=\"stylesheet\" type=\"text/css\">    
  <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;subset=latin,latin-ext\" rel=\"stylesheet\" type=\"text/css\">

  {% block stylesheets %}


    {# <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\"> #}
    <!-- Css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/font.awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/magnific.popup.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/owl.carousel.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/owl.theme.default.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/jquery-ui.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/responsive.css\">
{% endblock %}
<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>

<body id=\"{% block body_id %}{% endblock %}\">

  {% block header %}
    <!-- Site Header -->
    <div class=\"site-header\">
        <!-- Header Top -->
        <div class=\"header-top\">
            <div class=\"wrapper\">
                <div class=\"header-contact\">
                    <ul>
                        <li>+228 22-50-43-17</li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a></li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a></li>
                    </ul>
                </div>
                <div class=\"header-lang\">
                    <ul>
                        <li class=\"active\"><a href=\"#\">EN</a></li>
                        <li><a href=\"#\">FR</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header Top End -->
        <!-- Header Bottom -->
        <div class=\"header-bottom\">
            <div class=\"wrapper\">
                <div class=\"header-logo\">
                    <a href=\"{{ path('hotel_index') }}\"><img src=\"/assets/img/logojessconcu.png\" alt=\"Jess Hotel\"></a>
                </div>
                <div class=\"header-nav\">
                    <ul class=\"nav-left\">
                        <li><a href=\"{{ path('hotel_index') }}\">HOME</a></li>
                        <li><a href=\"{{ path('hotel_about_us') }}\">ABOUT US</a></li>
                        <li class=\"sub\"><a href=\"{{ path('hotel_rooms') }}\">ROOMS</a>
                            <ul>
                                <li><a href=\"{{ path('hotel_rooms') }}\">ROOMS LISTING</a></li>
                                <li><a href=\"{{ path('hotel_room_detail') }}\">ROOMS DETAIL</a></li>
                            </ul>
                        </li>
                        <li><a href=\"{{ path('hotel_services') }}\">SERVICES</a></li>
                    </ul>
                    <ul class=\"nav-right\">
                        <li><a href=\"{{ path('hotel_gallery') }}\">GALLERY</a></li>
                        <li><a href=\"{{ path('hotel_booking') }}\">BOOKING</a></li>
                        <li><a href=\"{{ path('hotel_blog') }}\">BLOG</a></li>
                        <li><a href=\"{{ path('hotel_contact') }}\">CONTACT</a></li>
                    </ul>
                </div>
                <div class=\"header-toggle\">
                    <i class=\"fa fa-bars\"></i>
                </div>
            </div>
        </div>
        <!-- Header Bottom End -->
    </div>
    <!-- Site Header End -->
{% endblock %}

{% block body %}

        {{ include('default/_flash_messages.html.twig') }}
        {% block main %}

        {% endblock %}

{% endblock %}

{% block footer %}
    <!-- Site Footer -->
    <div class=\"site-footer\">
        <!-- Footer Top -->
        <div class=\"footer-top\">
            <div class=\"wrapper\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <h5>SOCIAL MEDIA</h5>
                        <h6>FOLLOW THE GRADIUM</h6>
                        <div class=\"widget-social-icons\">
                            <ul>
                                <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a></li>
                                <li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <h5>NEWSLETTER</h5>
                        <h6>WE LOVE TO SHARE NEW OFFERS AND EXLUSIVE PROMOTIONS</h6>
                        <div class=\"widget-newsletter\">
                            <form>
                                <input type=\"text\" placeholder=\"ENTER YOUR E-MAIL ADDRESS\" required>
                                <button type=\"submit\"><i class=\"fa fa-paper-plane\"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->
        <!-- Footer Bottom -->
        <div class=\"footer-bottom\">
            <div class=\"wrapper\">
                <div class=\"footer-logo\">
                    <img src=\"assets/img/logo.png\" alt=\"Jess Hotel\">
                </div>
                <div class=\"footer-copyright\">
                    <p>COPYRIGHT © JESS HOTEL</p>
                </div>
                <div class=\"footer-contact\">
                    <ul>
                        <li><i class=\"fa fa-map-marker\"></i> AVENUE PYA PROLONGEE, TOTSI-ADIDOADIN, LOME-TOGO</li>
                        <li><i class=\"fa fa-phone\"></i> +228 2250-43-17</li>
                        <li><a href=\"mailto:info@hoteljesshouse.com\"><i class=\"fa fa-paper-plane\"></i> INFO@HOTELJESSHOUSE.COM</a></li>
                    </ul>
                </div>
                <div class=\"footer-nav\">
                    <ul>
                        <li><a href=\"#\">SITEMAP</a></li>
                        <li><a href=\"#\">PRIVACY POLICY</a></li>
                        <li><a href=\"#\">TERMS OF USE</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </div>
    <!-- Site Footer End -->
{% endblock %}

{% block javascripts %}
    <!-- Scripts -->
    <script src=\"/assets/js/jquery.min.js\"></script>
    <script src=\"/assets/js/jquery-ui.min.js\"></script>
    <script src=\"/assets/js/jquery.fitvids.js\"></script>
    <script src=\"/assets/js/bootstrap.min.js\"></script>
    <script src=\"/assets/js/magnific.popup.min.js\"></script>
    <script src=\"/assets/js/imagesloaded.pkgd.js\"></script>
    <script src=\"/assets/js/isotope.pkgd.min.js\"></script>
    <script src=\"/assets/js/owl.carousel.min.js\"></script>
    <script src=\"/assets/js/booking.form.js\"></script>
    <script src=\"/assets/js/contact.form.js\"></script>

    <!-- Map Scripts -->
    <script src=\"http://maps.google.com/maps/api/js?sensor=false&amp;language=en\"></script>
    <script src=\"/assets/js/gmap3.min.js\"></script>

    <!-- Custom Scripts -->
    <script src=\"/assets/js/custom.js\"></script>

{% endblock %}

{% block extra_javascripts %}

{% endblock %}
</body>
</html>
";
    }
}
