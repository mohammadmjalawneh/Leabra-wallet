<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />

    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />



    <title>Libra | Your Money Wallet ...</title>

    <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('style/css/reset.css')}}" />
    <!-- BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('style/css/bootstrap.css')}}" />
    <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('style/css/style.css')}}" />

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- [favicon] end -->

    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png" />
    <link rel='stylesheet' id='thickbox-css'  href="{{asset('style/js/thickbox/thickbox.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='usquare-css-css'  href="{{asset('style/sliders/usquare/css/frontend/usquare_style.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7CMuli%7CDroid+Sans%7CArbutus+Slab%7CAbel&#038;ver=3.5.1' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css'  href="{{asset('style/css/responsive.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='polaroid-slider-css'  href="{{asset('style/sliders/polaroid/css/polaroid.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='ahortcodes-css'  href="{{asset('style/css/shortcodes.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-css'  href="{{asset('style/css/contact_form.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='custom-css'  href="{{asset('style/css/custom.css')}}" type='text/css' media='all' />

    <style type="text/css">
        body { background-color: #ffffff; background-image: url('style/images/bg-pattern.png'); background-repeat: repeat; background-position: top left; background-attachment: scroll; }
    </style>

    <script type='text/javascript' src="{{asset('style/js/jquery/jquery.js')}}"></script>
    

</head>
<!-- END HEAD -->
<!-- START BODY -->
<body class="home page no_js responsive stretched">

    <!-- START BG SHADOW -->
    <div class="bg-shadow">

        <!-- START WRAPPER -->
        <div id="wrapper" class="container group">

            <!-- START TOP BAR -->
            <div id="topbar">
                <div class="container">
                    <div class="row">
                        <div id="nav" class="span12 light">

                            <!-- START MAIN NAVIGATION -->

                            <ul id="menu-menu" class="level-1">
                                <li>
                                    <a href="/">HOME</a>
                                </li>
                                @yield('navmenu')
                                <li>
                                    <li>
                                        <a href="#aboutus">About</a>
                                    </li>
                                </li>
                                <li>
                                    <a href="/admin">Admin Dashboard</a>
                                </li>
                                <li>
                                    <a href="#Map">CONTACT</a>
                                </li>
                            </ul>
                            <!-- END MAIN NAVIGATION -->

                            <!-- START TOPBAR LOGIN -->

                            <div id="topbar_login" class="not_logged_in">

                                @yield('logstate')
                                <!-- END TOPBAR LOGIN -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END TOP BAR -->

                <!-- START HEADER -->
                <div id="header" class="group margin-bottom">

                    <div class="group container">
                        <div class="row" id="logo-headersidebar-container">
                            <!-- START LOGO -->
                            <div id="logo" class="span6 group">
                                <a id="logo-img" href="/" title="Libra">
                                    <img src="{{url('style/images/libra-logo1.png')}}" title="Libra" alt="Libra" />
                                </a>
                                <p id='tagline'>Leave every thing for Us...</p>
                            </div>
                            <!-- END LOGO -->

                            <!-- START HEADER SIDEBAR -->
                            <div id="header-sidebar" class="span6 group">
                                <div class="widget-first widget header-text-image">
                                    <div class="text-image" style="text-align:left">
                                        <img src="{{url('style/images/phone1.png')}}" alt="CUSTOMER SUPPORT" />
                                    </div>

                                    <div class="text-content">
                                        <h3>CUSTOMER SUPPORT</h3>
                                        <p></p>
                                        <a href="tel:+962-6566-8888">+962 - 6566 - 8888</a>
                                    </div>
                                </div>

                                <div class="widget-last widget widget_text">
                                    <div class="textwidget">
                                        <div class="socials-default-small facebook-small default">
                                            <a href="# " class="socials-default-small default facebook" >facebook</a>
                                        </div>

                                        <div class="socials-default-small skype-small default">
                                            <a href="# " class="socials-default-small default skype" >skype</a>
                                        </div>

                                        <div class="socials-default-small linkedin-small default">
                                            <a href="#" class="socials-default-small default linkedin" >linkedin</a>
                                        </div>

                                        <div class="socials-default-small twitter-small default">
                                            <a href="#" class="socials-default-small default twitter" >twitter</a>
                                        </div>

                                        <div class="socials-default-small flickr-small default">
                                            <a href="#" class="socials-default-small default flickr" >flickr</a>
                                        </div>

                                        <div class="socials-default-small rss-small default">
                                            <a href="#" class="socials-default-small default rss" >rss</a>
                                        </div>

                                        <div class="socials-default-small pinterest-small default">
                                            <a href="#" class="socials-default-small default pinterest" >pinterest</a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- END HEADER -->
    @if (!empty(Session::has('complete')))
    <div class="alert alert-danger">{{ Session::get('complete') }}</div>
    @endif
    @yield('main')
    <!-- START FOOTER -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="footer-widgets-area with-sidebar-right">
                    <div id="aboutus" class="widget-first widget span2 widget_text"><h3>About us</h3>
                        <div class="textwidget">
                            Aliquam pellentesque pellentesque turpis, ut <a href="#">bibendum sapien</a> sollicitudin nec
                            plasiren.
                            Pellentesque posuere ornare placerat. Suspendisse potenti.
                        </div>
                    </div>

                    <div class="widget span2 widget_nav_menu">
                        <h3>A menu widget</h3>

                        <div class="menu-widget-footer-container">
                            <ul id="menu-widget-footer" class="menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="accordion-style.html">About</a>
                                </li>

                                <li class="menu-item menu-item-type-post_type">
                                    <a href="testimonials.html">Testimonials</a>
                                </li>

                                <li class="menu-item menu-item-type-post_type">
                                    <a href="portfolio-3-columns.html">Portfolio</a>
                                </li>

                                <li class="menu-item menu-item-type-post_type">
                                    <a href="#Map">Map Location</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="#">Policy</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="#">Utilities</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="widget-last widget span2 widget_nav_menu">
                        <h3>Socialize</h3>

                        <div class="menu-socialize-container">
                            <ul id="menu-socialize" class="menu">

                                <li class="menu-item menu-item-type-custom">
                                    <a href="#">Facebook</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="#">Twitter</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="#">LinkedIn</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="#">Google+</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="#">Pinterest</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="#">Flickr</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="footer-widgets-sidebar with-sidebar-right">
                        <div  class="widget-first widget span6 yit_quick_contact" id="Map">
                            <h3>Map Location</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.5852171877646!2d-0.32356688480313855!3d51.42904562425106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760b873e11fcbd%3A0x94c9abaa9bd34b47!2sTeddington%20Studios%2C%20Broom%20Rd%2C%20Teddington%20TW11%209FB%2C%20UK!5e0!3m2!1sen!2sjo!4v1611691329792!5m2!1sen!2sjo" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <script type="text/javascript">
                                var messages_form_228 = {
                                    name: "Insert the name",
                                    email: "Insert a valid email",
                                    message: "Insert a message"
                                };
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END FOOTER -->

        <!-- START COPYRIGHT -->
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="left span6">
                        <p>
                            <a href="http://yithemes.com/"><img src="http://yithemes.com/cdn/images/various/footer_yith_grey.png" alt="Your Inspiration Themes" style="position:relative; top:9px; margin: -22px 5px 0 0;"></a>&nbsp;Copyright 2012 - <strong>Libra theme</strong> by
                            Your Inspiration Themes
                        </p>
                    </div>
                    <div class="right span6">
                        <p>
                            <a href="http://yithemes.com/themes/wordpress/libra-corporate-portfolio-wp-theme/?ap_id=libra-html"><strong>Download the free version for Wordpress</strong></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END COPYRIGHT -->

        <div class="wrapper-border"></div>

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END BG SHADOW -->

<script type='text/javascript' src="{{asset('style/js/comment-reply.min.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/underscore.min.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/jquery/jquery.masonry.min.js')}}"></script>
<script type='text/javascript' src="{{asset('style/sliders/polaroid/js/jquery.polaroid.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/jquery.colorbox-min.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/jquery.easing.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/jquery.carouFredSel-6.1.0-packed.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/jQuery.BlackAndWhite.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/jquery.touchSwipe.min.js')}}"></script>
<script type='text/javascript' src="{{asset('style/sliders/polaroid/js/jquery.transform-0.8.0.min.js')}}"></script>
<script type='text/javascript' src="{{asset('style/sliders/polaroid/js/jquery.preloader.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/responsive.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/mobilemenu.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/jquery.superfish.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/jquery.placeholder.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/contact.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/jquery.tipsy.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/jquery.cycle.min.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/shortcodes.js')}}"></script>
<script type='text/javascript' src="{{asset('style/js/jquery.custom.js')}}"></script>

</body>
<!-- END BODY -->
</html>