<?php

/* base.html.twig */
class __TwigTemplate_3c94cf07328e78424be4e359a5341221dd0973107c9b393e6ca2c5d8cfa44d5a extends Twig_Template
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
        $__internal_5d88840156588f33bf72455e76bd672896fea1b169a6bf37ae7013bbf8941aae = $this->env->getExtension("native_profiler");
        $__internal_5d88840156588f33bf72455e76bd672896fea1b169a6bf37ae7013bbf8941aae->enter($__internal_5d88840156588f33bf72455e76bd672896fea1b169a6bf37ae7013bbf8941aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('footer', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('javascripts', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('extra_javascripts', $context, $blocks);
        // line 202
        echo "</body>
</html>
";
        
        $__internal_5d88840156588f33bf72455e76bd672896fea1b169a6bf37ae7013bbf8941aae->leave($__internal_5d88840156588f33bf72455e76bd672896fea1b169a6bf37ae7013bbf8941aae_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_5958d21d7582a87b180941c045862917ff87337ef1b6f605d637b8c8640504e7 = $this->env->getExtension("native_profiler");
        $__internal_5958d21d7582a87b180941c045862917ff87337ef1b6f605d637b8c8640504e7->enter($__internal_5958d21d7582a87b180941c045862917ff87337ef1b6f605d637b8c8640504e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Jess Hotel";
        
        $__internal_5958d21d7582a87b180941c045862917ff87337ef1b6f605d637b8c8640504e7->leave($__internal_5958d21d7582a87b180941c045862917ff87337ef1b6f605d637b8c8640504e7_prof);

    }

    // line 18
    public function block_favicons($context, array $blocks = array())
    {
        $__internal_222cb15b95900611465fb4a025f277f74e0af872d8e665d3c8693e41add01df4 = $this->env->getExtension("native_profiler");
        $__internal_222cb15b95900611465fb4a025f277f74e0af872d8e665d3c8693e41add01df4->enter($__internal_222cb15b95900611465fb4a025f277f74e0af872d8e665d3c8693e41add01df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicons"));

        // line 19
        echo "      <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/assets/img/favicon.png\">
      <link rel=\"apple-touch-icon\" href=\"/assets/img/apple-touch-icon.png\">
      <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/assets/img/apple-touch-icon-76x76.png\">
      <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/assets/img/apple-touch-icon-120x120.png\">
      <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/assets/img/apple-touch-icon-152x152.png\">
      <link rel=\"apple-touch-icon\" sizes=\"167x167\" href=\"/assets/img/apple-touch-icon-167x167.png\">
      <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/assets/img/apple-touch-icon-180x180.png\">
  ";
        
        $__internal_222cb15b95900611465fb4a025f277f74e0af872d8e665d3c8693e41add01df4->leave($__internal_222cb15b95900611465fb4a025f277f74e0af872d8e665d3c8693e41add01df4_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57d94759426e11c1582b8bf5f0487c4c28e3811a94ae216b8e9f17187b815198 = $this->env->getExtension("native_profiler");
        $__internal_57d94759426e11c1582b8bf5f0487c4c28e3811a94ae216b8e9f17187b815198->enter($__internal_57d94759426e11c1582b8bf5f0487c4c28e3811a94ae216b8e9f17187b815198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_57d94759426e11c1582b8bf5f0487c4c28e3811a94ae216b8e9f17187b815198->leave($__internal_57d94759426e11c1582b8bf5f0487c4c28e3811a94ae216b8e9f17187b815198_prof);

    }

    // line 49
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_67c68e0e11143a6d1abeb5632ea579a3f8e3984243ca376fc18ea294afa923e1 = $this->env->getExtension("native_profiler");
        $__internal_67c68e0e11143a6d1abeb5632ea579a3f8e3984243ca376fc18ea294afa923e1->enter($__internal_67c68e0e11143a6d1abeb5632ea579a3f8e3984243ca376fc18ea294afa923e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_67c68e0e11143a6d1abeb5632ea579a3f8e3984243ca376fc18ea294afa923e1->leave($__internal_67c68e0e11143a6d1abeb5632ea579a3f8e3984243ca376fc18ea294afa923e1_prof);

    }

    // line 51
    public function block_header($context, array $blocks = array())
    {
        $__internal_0206a290a8b24c012e667d0b638c559878dda71cb5c0bc8c06e41a49e33cf852 = $this->env->getExtension("native_profiler");
        $__internal_0206a290a8b24c012e667d0b638c559878dda71cb5c0bc8c06e41a49e33cf852->enter($__internal_0206a290a8b24c012e667d0b638c559878dda71cb5c0bc8c06e41a49e33cf852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
                        <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("hotel_rooms");
        echo "\">ROOMS</a></li>
                        <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("hotel_services");
        echo "\">SERVICES</a></li>
                    </ul>
                    <ul class=\"nav-right\">
                        <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("hotel_gallery");
        echo "\">GALLERY</a></li>
                        <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("hotel_booking");
        echo "\">BOOKING</a></li>
                        <li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("hotel_blog");
        echo "\">BLOG</a></li>
                        <li><a href=\"";
        // line 92
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
        
        $__internal_0206a290a8b24c012e667d0b638c559878dda71cb5c0bc8c06e41a49e33cf852->leave($__internal_0206a290a8b24c012e667d0b638c559878dda71cb5c0bc8c06e41a49e33cf852_prof);

    }

    // line 105
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b7c7f97000947743939d0dfafe95fef5f3d6ad348c9b88a956f281b6d45da7b = $this->env->getExtension("native_profiler");
        $__internal_5b7c7f97000947743939d0dfafe95fef5f3d6ad348c9b88a956f281b6d45da7b->enter($__internal_5b7c7f97000947743939d0dfafe95fef5f3d6ad348c9b88a956f281b6d45da7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 106
        echo "
        ";
        // line 107
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "
        ";
        // line 108
        $this->displayBlock('main', $context, $blocks);
        // line 111
        echo "
";
        
        $__internal_5b7c7f97000947743939d0dfafe95fef5f3d6ad348c9b88a956f281b6d45da7b->leave($__internal_5b7c7f97000947743939d0dfafe95fef5f3d6ad348c9b88a956f281b6d45da7b_prof);

    }

    // line 108
    public function block_main($context, array $blocks = array())
    {
        $__internal_f970109608a35c1cc3d59daf92c5f53a6cfd7c08e433af49f221ca237b2718c7 = $this->env->getExtension("native_profiler");
        $__internal_f970109608a35c1cc3d59daf92c5f53a6cfd7c08e433af49f221ca237b2718c7->enter($__internal_f970109608a35c1cc3d59daf92c5f53a6cfd7c08e433af49f221ca237b2718c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 109
        echo "
        ";
        
        $__internal_f970109608a35c1cc3d59daf92c5f53a6cfd7c08e433af49f221ca237b2718c7->leave($__internal_f970109608a35c1cc3d59daf92c5f53a6cfd7c08e433af49f221ca237b2718c7_prof);

    }

    // line 114
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7d129863eacf8782169b85d03bacf4bf3bf2be2087a049646a6827ec78f0cd63 = $this->env->getExtension("native_profiler");
        $__internal_7d129863eacf8782169b85d03bacf4bf3bf2be2087a049646a6827ec78f0cd63->enter($__internal_7d129863eacf8782169b85d03bacf4bf3bf2be2087a049646a6827ec78f0cd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 115
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
        
        $__internal_7d129863eacf8782169b85d03bacf4bf3bf2be2087a049646a6827ec78f0cd63->leave($__internal_7d129863eacf8782169b85d03bacf4bf3bf2be2087a049646a6827ec78f0cd63_prof);

    }

    // line 177
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12f553ce8eabf94c0c10f6dafea054221a1fcd4b344b76389f62726c39f6ccfd = $this->env->getExtension("native_profiler");
        $__internal_12f553ce8eabf94c0c10f6dafea054221a1fcd4b344b76389f62726c39f6ccfd->enter($__internal_12f553ce8eabf94c0c10f6dafea054221a1fcd4b344b76389f62726c39f6ccfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 178
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
        
        $__internal_12f553ce8eabf94c0c10f6dafea054221a1fcd4b344b76389f62726c39f6ccfd->leave($__internal_12f553ce8eabf94c0c10f6dafea054221a1fcd4b344b76389f62726c39f6ccfd_prof);

    }

    // line 199
    public function block_extra_javascripts($context, array $blocks = array())
    {
        $__internal_7c0b0b3087de42f99087ef2afc598cfa6806eb3ad344f025d10c42b7bce349af = $this->env->getExtension("native_profiler");
        $__internal_7c0b0b3087de42f99087ef2afc598cfa6806eb3ad344f025d10c42b7bce349af->enter($__internal_7c0b0b3087de42f99087ef2afc598cfa6806eb3ad344f025d10c42b7bce349af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        // line 200
        echo "
";
        
        $__internal_7c0b0b3087de42f99087ef2afc598cfa6806eb3ad344f025d10c42b7bce349af->leave($__internal_7c0b0b3087de42f99087ef2afc598cfa6806eb3ad344f025d10c42b7bce349af_prof);

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
        return array (  411 => 200,  405 => 199,  379 => 178,  373 => 177,  306 => 115,  300 => 114,  292 => 109,  286 => 108,  278 => 111,  276 => 108,  272 => 107,  269 => 106,  263 => 105,  244 => 92,  240 => 91,  236 => 90,  232 => 89,  226 => 86,  222 => 85,  218 => 84,  214 => 83,  207 => 79,  178 => 52,  172 => 51,  161 => 49,  145 => 36,  141 => 33,  135 => 32,  121 => 19,  115 => 18,  103 => 10,  94 => 202,  92 => 199,  89 => 198,  87 => 177,  84 => 176,  82 => 114,  79 => 113,  77 => 105,  74 => 104,  72 => 51,  67 => 49,  60 => 46,  58 => 32,  51 => 27,  49 => 18,  38 => 10,  32 => 6,);
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
                        <li><a href=\"{{ path('hotel_rooms') }}\">ROOMS</a></li>
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
