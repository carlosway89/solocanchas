
<!DOCTYPE html>

<html>


    <!-- Mirrored from inthe7heaven.com/candidate-html/main-v1.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 05 May 2014 12:44:46 GMT -->
    <head>

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title><?php echo $title; ?></title>

        <!-- Google Fonts -->
        <link href='../../fonts.googleapis.com/css2088.css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='../../fonts.googleapis.com/css9d23.css?family=Great+Vibes' rel='stylesheet' type='text/css'>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

        <!-- Stylesheets -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/fontello.css" rel="stylesheet" type="text/css">
        <link href="css/flexslider.css" rel="stylesheet" type="text/css">
        <link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="css/responsive-calendar.css" rel="stylesheet" type="text/css">
        <link href="css/chosen.css" rel="stylesheet" type="text/css">
        <link href="js/jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css" />
        <link href="css/cloud-zoom.css" rel="stylesheet" type="text/css" />
        <link href="css/colorpicker.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">


        <!--[if IE 9]>
                <link rel="stylesheet" href="js/ie9.css">
        <![endif]-->

        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <link href="js/jackbox-ie8.css" rel="stylesheet" type="text/css" />
                <link rel="stylesheet" href="js/ie.css">
<![endif]-->

        <!--[if gt IE 8]>
                <link href="css/jackbox-ie9.css" rel="stylesheet" type="text/css" />
        <![endif]-->

        <!--[if IE 7]>
                <link rel="stylesheet" href="css/fontello-ie7.css">
        <![endif]-->

        <style type="text/css">
            .no-fouc {display:none;}
        </style>

        <!-- jQuery -->
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/jquery-ui-1.10.4.min.js"></script>

        <!-- Preloader -->
        <script src="js/jquery.queryloader2.min.js"></script>
        <script src="js/jsCustomHeader.js"></script>

                
        <!-- parse backbone require-->
        <script src="js/underscore.js"></script>
        <script src="js/handlebars.js"></script>
        <script src="js/backbone.js"></script>
        <script src="js/parse.js"></script>
        <script src="js/backbone-parse.js"></script>
        <script src="js/jquery-beat.min.js"></script>
        <script src="js/script.min.js"></script>
        <script src="js/xo.js"></script>
        <script data-main="js/main" src="js/require.js"></script>

    </head>

    <body class="tablet-sticky-header boxed-layout">

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "../../connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>		
        <!-- Container -->
        <div class="container">

            <!-- Header -->
            <header id="header" class="animate-onscroll">

                <!-- Main Header -->
                <div id="main-header">

                    <div class="container">

                        <div class="row">

                            <!-- Logo -->
                            <div id="logo" class="col-lg-4 col-md-3 col-sm-3">

                                <a href="main-v1.html"><img src="img/logo.png" alt="Logo" width="331" height="101" style="margin-top:-20px"></a>
                                
                                

                            </div>
                            <!-- /Logo -->

                            <!-- Main Quote -->
                            <div class="col-lg-4 col-md-4 col-sm-4">

<!--                                <blockquote>Nam elit agna,enderit sit amet, tinciunt ac,<br>viverra sed, nulla..</blockquote>-->

                            </div>
                            <!-- /Main Quote -->

                            <!-- Newsletter -->
                            <div class="col-lg-4 col-md-5 col-sm-5">

                                <form id="newsletter" action="http://inthe7heaven.com/candidate-html/php/newsletter-form.php" method="POST">

                                    <h5><i class="icons icon-laptop"></i> Acceder al <strong>Sistema</strong></h5>
                                    <div class="newsletter-form">

                                        <div class="newsletter-email">
                                            <input type="text" name="txt_fnd_usu_nombre" placeholder="Usuario">
                                        </div>

                                        <div class="newsletter-zip">
                                            <input type="text" name="txt_fnd_usu_contraseña" placeholder="Contraseña">
                                        </div>

                                        <div class="newsletter-submit">
                                            <input type="submit" value="">
                                            <i class="icons icon-right-thin"></i>
                                        </div>

                                    </div>

                                </form>

                            </div>
                            <!-- /Newsletter -->

                        </div>

                    </div>

                </div>
                <!-- /Main Header -->
                
                <!-- Lower Header -->
                <div id="lower-header">

                    <div class="container">

                        <div id="menu-button">
                            <div>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <span>Menu</span>
                        </div>

                        <ul id="navigation">

                            <!-- Home -->
                            <li class="home-button <?php if($menu_home == 'home') {  echo "current-menu-item"; } ?>">
                                <a href="<?php echo URL_MAIN ?>"><i class="icons icon-home"></i></a>
                            </li>
                            <!-- /Home -->

                            <!-- Pages -->
                            <li class="<?php if($menu_home == 'canchas') {  echo "current-menu-item"; } ?>">
                                <a href="<?php echo URL_MAIN ?>canchas">Canchas</a>
                <!--                <ul>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="issues.html">Issues</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="page-right-sidebar.html">Page with right sidebar</a></li>
                                    <li><a href="page-left-sidebar.html">Page with left sidebar</a></li>
                                    <li><a href="page-fullwidth.html">Full width page</a></li>
                                </ul>-->
                            </li>
                            <!-- /Pages -->

                            <!-- Events -->
                            <li>
                                <a href="<?php echo URL_MAIN ?>">Academias</a>
                <!--                <span>Academias</span>
                                <ul>
                                    <li><a href="event-calendar.html">Calendar</a></li>
                                    <li><a href="event-post-v1.html">Event post style 1</a></li>
                                    <li><a href="event-post-v2.html">Event post style 2</a></li>
                                </ul>-->
                            </li>
                            <!-- /Events -->

                            <!-- Media -->
                            <li>
                                <a href="<?php echo URL_MAIN ?>">Gimnasios</a>
                <!--                <span>Gimnasios</span>
                                <ul>
                                    <li>
                                        <span>Sortable Grid</span>
                                        <ul>
                                            <li><a href="media-sortable-1column-sidebar.html">1 Column with right sidebar</a></li>
                                            <li><a href="media-sortable-2columns.html">2 Columns</a></li>
                                            <li><a href="media-sortable-3columns.html">3 Columns</a></li>
                                            <li><a href="media-sortable-3columns-sidebar.html">3 Columns with left sidebar</a></li>
                                            <li><a href="media-sortable-4columns.html">4 Columns</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <span>Grid with pagination</span>
                                        <ul>
                                            <li><a href="media-grid-1column-sidebar.html">1 Column with right sidebar</a></li>
                                            <li><a href="media-grid-2columns.html">2 Columns</a></li>
                                            <li><a href="media-grid-3columns.html">3 Columns</a></li>
                                            <li><a href="media-grid-3columns-sidebar.html">3 Columns with left sidebar</a></li>
                                            <li><a href="media-grid-4columns.html">4 Columns</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <span>Classic gallery</span>
                                        <ul>
                                            <li><a href="media-classic-sortable-3columns.html">Sortable 3 Columns</a></li>
                                            <li><a href="media-classic-sortable-3columns-sidebar.html">Sortable 3 Columns with right sidebar</a></li>
                                            <li><a href="media-classic-sortable-4columns.html">Sortable 4 Columns</a></li>
                                            <li><a href="media-classic-3columns.html">3 Columns</a></li>
                                            <li><a href="media-classic-3columns-sidebar.html">3 Columns with left sidebar</a></li>
                                            <li><a href="media-classic-4columns.html">4 Columns</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <span>Single portfolio post</span>
                                        <ul>
                                            <li><a href="portfolio-single-fullwidth.html">Fullwidth</a></li>
                                            <li><a href="portfolio-single-sidebar.html">With Sidebar</a></li>
                                            <li><a href="portfolio-single-extended.html">Extended Image Slideshow</a></li>
                                        </ul>
                                    </li>
                                </ul>-->
                            </li>
                            <!-- /Media -->

                            <!-- Get Involved -->
                            <li >
                                <a href="get-involved.html">Campeonatos</a>
                            </li>
                            <!-- /Get Involved -->

                            <!-- Features -->
                            <li class="<?php if($menu_home == 'contacto') {  echo "current-menu-item"; } ?>">
                            
                                <a href="<?php echo URL_MAIN; ?>contactenos">Contáctenos</a>
                <!--                <span>Contactanos</span>
                                <ul>
                                    <li><a href="features-typography.html">Typography</a></li>
                                    <li><a href="features-shortcodes.html">Shortcodes</a></li>
                                </ul>-->
                            </li>
                            <!-- /Features -->

                            <!-- Blog -->
                <!--            <li>
                                <span>Blog</span>
                                <ul>
                                    <li><a href="blog-v1.html">Blog style 1 with right sidebar</a></li>
                                    <li><a href="blog-v2.html">Blog style 2 with left sidebar</a></li>
                                    <li><a href="blog-fullwidth.html">Full width blog</a></li>
                                    <li><span>Single blog post</span>
                                        <ul>
                                            <li><a href="blog-single-sidebar.html">With sidebar</a></li>
                                            <li><a href="blog-single-fullwidth.html">Full width</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>-->
                            <!-- /Blog -->

                            <!-- Shop -->
                <!--            <li>
                                <span>Shop</span>
                                <ul>
                                    <li><a href="shop-frontpage.html">Front page</a></li>
                                    <li><a href="shop-productpage.html">Product page</a></li>
                                    <li><a href="shop-cart.html">Shopping cart</a></li>
                                    <li><a href="shop-checkout.html">Checkout</a></li>
                                </ul>
                            </li>-->
                            <!-- /Shop -->

                            <!-- Donate -->
                            <li class="donate-button ">
                                <a href="#">Registro de Usuarios</a>
                            </li>
                            <!-- /Donate -->

                        </ul>
                    </div>
                </div>
                <!-- /Lower Header -->


            </header>
            <!-- /Header -->

<section id="content">

    <!-- Section -->
    <section class="section full-width-bg">
        <div class="row">

            <div class="col-lg-9 col-md-9 col-sm-8">
                <!-- Main Slider -->
                
                <!-- Revolution Slider -->
                <div class="tp-banner-container main-revolution">
                    <span class="Apple-tab-span"></span>
                    <div class="tp-banner">
                        <ul>
                            <li data-transition="papercut" data-slotamount="7">
                                <img src="img/slider/slider.jpg" alt="">
                <!--                <div class="tp-caption"  data-x="100" data-y="115" data-speed="700" data-start="1000" data-easing="easeOutBack"><h2>Unity<br>Liberty<br>Solidarity</h2></div>
                                <div class="tp-caption"  data-x="100" data-y="310" data-speed="500" data-start="1200" data-easing="easeOutBack"><a href="#" class="button big">Find out more</a></div>-->
                            </li>
                            <li data-transition="papercut" data-slotamount="7">
                                <img src="img/slider/slider2.jpg" alt="">
                <!--                <div class="tp-caption align-center" data-x="center" data-y="135" data-speed="700" data-start="1000" data-easing="easeOutBack"><h4 class="great-vibes">itâ€™s time for changes</h4></div>
                                <div class="tp-caption align-center" data-x="center" data-y="220" data-speed="500" data-start="1200" data-easing="easeOutBack"><h2>Building Our Future Together!</h2></div>
                                <div class="tp-caption align-center" data-x="center" data-y="300" data-speed="300" data-start="1400"><a href="#" class="button big button-arrow">Get Involved</a></div>-->
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Revolution Slider -->


                <!-- /Main Slider -->
            </div>

            <div class="col-lg-3 col-md-3 col-sm-4 sidebar">
                <div class="banner-wrapper">
                    <div class="banner donate-banner2 animate-onscroll">
                        <div class="side-segment">
                            <h5>Búsqueda de <strong>Canchas</strong></h5>
                        </div>
                        <!--  form busqueda de canchas-->
                        

                        <!-- end busquedas de canchas-->
                    </div>
                </div>                                          
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="banners-inline">

                    <div class="banner-wrapper">
                        <a class="banner animate-onscroll" href="#">
                            <i class="icons icon-calendar margen_ico"></i>
                            <h4 class="letra-h4">Buscar Eventos</h4>
                            <p>Lorem ipsum dolor sit amet</p>
                        </a>
                    </div>

                    <div class="banner-wrapper">
                        <a class="banner animate-onscroll" href="#">
                            <i class="icons icon-check margen_ico"></i>
                            <h4 class="letra-h4">Registra tu evento</h4>
                            <p>Nemo enim ipsam</p>
                        </a>
                    </div>

                    <div class="banner-wrapper">
                        <a class="banner animate-onscroll" href="#">
                            <i class="icons icon-picture margen_ico"></i>
                            <h4 class="letra-h4">Publica tus fotos</h4>
                            <p>Pellentesque sed dolor</p>
                        </a>
                    </div>

                    <div class="banner-wrapper">
                        <a class="banner animate-onscroll" href="#">
                            <i class="icons icon-picture margen_ico"></i>
                            <h4 class="letra-h4">Publica tus fotos</h4>
                            <p>Pellentesque sed dolor</p>
                        </a>
                    </div>                          
                </div>
            </div>
        </div>
    </section>
    <!-- /Section -->

    <!-- Section -->
    <section class="section full-width-bg gray-bg">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8">
                <div class="side-segment">
                    <h3 class="animate-onscroll no-margin-top"><i class="icons icon-news"></i> Últimas noticias</h3>
                </div>

                <!-- Blog Post -->
                <div class="blog-post big animate-onscroll">

                    <div class="post-image">
                        <img src="img/new-demo.jpg" alt="">
                    </div>

                    <h4 class="post-title"><a href="blog-single-sidebar.html">Las espectativas de los Brasileños</a></h4>

                    <div class="post-meta">
                        <span>by <a href="#">admin</a></span>
                        <span>October 01, 2013 11:28AM</span>
                    </div>

                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>

                    <a href="blog-single-sidebar.html" class="button read-more-button big button-arrow">Read More</a>

                </div>
                <!-- /Blog Post --> 

                <!-- Owl Carousel -->
                <div class="owl-carousel-container">
                    <div class="owl-header">
                        <div class="side-segment">
                            <h3 class="animate-onscroll">
                                <i class="icons icon-star"></i> Canchas Favoritas
                            </h3>
                        </div>

                        <div class="carousel-arrows animate-onscroll">
                            <span class="left-arrow"><i class="icons icon-left-dir"></i></span>
                            <span class="right-arrow"><i class="icons icon-right-dir"></i></span>
                        </div>
                    </div>

                    <div class="owl-carousel" data-max-items="3">
                        <!-- Owl Item -->
                        <div>
                            <!-- Blog Post -->
                            <div class="blog-post animate-onscroll">
                                <div class="post-image">
                                    <a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores">
                                        <img src="img/img-demo3.jpg" alt="">
                                    </a>
                                </div>

                                <h4 class="post-title"><a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores">VILLASPORTS PRECURSORES</a></h4>
                                <!--                                <div class="post-meta">
                                                                    <span>by <a href="#">admin</a></span>
                                                                    <span>October 01, 2013 11:28AM</span>
                                                                </div>-->
                                <!--                                <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel.</p>-->

                                <p>
                                    <i class="icons icon-location"></i> Jr. Jose Aguilar Segura s/n
                                </p>
                                <p>
                                    <i class="icons icon-home"></i> Trujillo, La Libertad
                                </p>
                                <p>
                                    <i class="icons icon-phone"></i> 4510001 / 984471883
                                </p>
                                <p>
                                    <i class="icons icon-flag-1"></i> 3 Canchas
                                </p>
                                <a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores" class="button read-more-button big button-arrow">Read More</a>

                            </div>
                            <!-- /Blog Post -->
                        </div>
                        <!-- /Owl Item -->

                        <!-- Owl Item -->
                        <div>
                            <!-- Blog Post -->
                            <div class="blog-post animate-onscroll">
                                <div class="post-image">
                                    <a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores">
                                        <img src="img/img-demo4.jpg" alt="">
                                    </a>
                                </div>

                                <h4 class="post-title"><a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores">VILLASPORTS PRECURSORES </a></h4>

                                <!--                                <div class="post-meta">
                                                                    <span>by <a href="#">admin</a></span>
                                                                    <span>October 01, 2013 11:28AM</span>
                                                                </div>-->
                                <!--                                <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel.</p>-->

                                <p>
                                    <i class="icons icon-location"></i> Jr. Jose Aguilar Segura s/n
                                </p>
                                <p>
                                    <i class="icons icon-home"></i> Trujillo, La Libertad
                                </p>
                                <p>
                                    <i class="icons icon-phone"></i> 4510001 / 984471883
                                </p>
                                <p>
                                    <i class="icons icon-flag-1"></i> 3 Canchas
                                </p>
                                <a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores" class="button read-more-button big button-arrow">Leer más</a>
                            </div>
                            <!-- /Blog Post -->
                        </div>
                        <!-- /Owl Item -->

                        <!-- Owl Item -->
                        <div>

                            <!-- Blog Post -->
                            <div class="blog-post animate-onscroll">
                                <div class="post-image">
                                    <a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores">
                                        <img src="img/img-demo5.jpg" alt="">
                                    </a>
                                </div>

                                <h4 class="post-title"><a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores">VILLASPORTS PRECURSORES</a></h4>

                                <!--                                <div class="post-meta">
                                                                    <span>by <a href="#">admin</a></span>
                                                                    <span>October 01, 2013 11:28AM</span>
                                                                </div>-->
                                <!--                                <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel.</p>-->

                                <p>
                                    <i class="icons icon-location"></i> Jr. Jose Aguilar Segura s/n
                                </p>
                                <p>
                                    <i class="icons icon-home"></i> Trujillo, La Libertad
                                </p>
                                <p>
                                    <i class="icons icon-phone"></i> 4510001 / 984471883
                                </p>
                                <p>
                                    <i class="icons icon-flag-1"></i> 3 Canchas
                                </p>
                                <a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores" class="button read-more-button big button-arrow">Leer más</a>
                            </div>
                            <!-- /Blog Post -->
                        </div>
                        <!-- /Owl Item -->

                        <!-- Owl Item -->
                        <div>
                            <!-- Blog Post -->
                            <div class="blog-post animate-onscroll">
                                <div class="post-image">
                                    <a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores">
                                        <img src="img/img-demo6.jpg" alt="">
                                    </a>
                                </div>

                                <h4 class="post-title"><a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores">VILLASPORTS PRECURSORES</a></h4>

                                <!--                                <div class="post-meta">
                                                                    <span>by <a href="#">admin</a></span>
                                                                    <span>October 01, 2013 11:28AM</span>
                                                                </div>-->
                                <!--                                <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel.</p>-->

                                <p>
                                    <i class="icons icon-location"></i> Jr. Jose Aguilar Segura s/n
                                </p>
                                <p>
                                    <i class="icons icon-home"></i> Trujillo, La Libertad
                                </p>
                                <p>
                                    <i class="icons icon-phone"></i> 4510001 / 984471883
                                </p>
                                <p>
                                    <i class="icons icon-flag-1"></i> 3 Canchas
                                </p>
                                <a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores" class="button read-more-button big button-arrow">Leer más</a>
                            </div>
                            <!-- /Blog Post -->
                        </div>
                        <!-- /Owl Item -->

                        <!-- Owl Item -->
                        <div>
                            <!-- Blog Post -->
                            <div class="blog-post animate-onscroll">
                                <div class="post-image">
                                    <a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores">
                                        <img src="img/img-demo7.jpg" alt="">
                                    </a>
                                </div>

                                <h4 class="post-title"><a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores">VILLASPORTS PRECURSORES </a></h4>

                                <!--                                <div class="post-meta">
                                                                    <span>by <a href="#">admin</a></span>
                                                                    <span>October 01, 2013 11:28AM</span>
                                                                </div>-->
                                <!--                                <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel.</p>-->

                                <p>
                                    <i class="icons icon-location"></i> Jr. Jose Aguilar Segura s/n
                                </p>
                                <p>
                                    <i class="icons icon-home"></i> Trujillo, La Libertad
                                </p>
                                <p>
                                    <i class="icons icon-phone"></i> 4510001 / 984471883
                                </p>
                                <p>
                                    <i class="icons icon-flag-1"></i> 3 Canchas
                                </p>
                                <a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores" class="button read-more-button big button-arrow">Leer más</a>
                            </div>
                            <!-- /Blog Post -->
                        </div>
                        <!-- /Owl Item -->

                        <!-- Owl Item -->
                        <div>
                            <!-- Blog Post -->
                            <div class="blog-post animate-onscroll">

                                <div class="post-image">
                                    <a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores">
                                        <img src="img/img-demo8.jpg" alt="">
                                    </a>
                                </div>

                                <h4 class="post-title"><a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores">VILLASPORTS PRECURSORES</a></h4>

                                <!--                                <div class="post-meta">
                                                                    <span>by <a href="#">admin</a></span>
                                                                    <span>October 01, 2013 11:28AM</span>
                                                                </div>-->
                                <!--                                <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel.</p>-->

                                <p>
                                    <i class="icons icon-location"></i> Jr. Jose Aguilar Segura s/n
                                </p>
                                <p>
                                    <i class="icons icon-home"></i> Trujillo, La Libertad
                                </p>
                                <p>
                                    <i class="icons icon-phone"></i> 4510001 / 984471883
                                </p>
                                <p>
                                    <i class="icons icon-flag-1"></i> 3 Canchas
                                </p>
                                <a href="<?php echo URL_MAIN ?>canchas/informacion/Villasports-Precursores" class="button read-more-button big button-arrow">Leer más</a>
                            </div>
                            <!-- /Blog Post -->
                        </div>
                        <!-- /Owl Item -->
                    </div>
                </div>

                <!-- /Owl Carousel -->                      <!-- Banner Rotator -->
                <div class="banner-rotator animate-onscroll">
                    <div class="flexslider banner-rotator-flexslider">
                        <ul class="slides">

                            <li id="flex_rotator_1">
                                <div class="banner-rotator-content">
                                    <h5>Campaign trial</h5>
                                    <h2>New York</h2>
                                    <span class="date">December 17th</span>
                                    <a href="#" class="button big button-arrow">Details</a>
                                </div>
                            </li>

                            <li id="flex_rotator_2">
                                <div class="banner-rotator-content">
                                    <h5>Campaign trial</h5>
                                    <h2>Corden</h2>
                                    <span class="date">April 12th</span>
                                    <a href="#" class="button big button-arrow">Details</a>
                                </div>
                            </li>

                            <li id="flex_rotator_3">
                                <div class="banner-rotator-content">
                                    <h5>Campaign trial</h5>
                                    <h2>Redhedge</h2>
                                    <span class="date">June 27th</span>
                                    <a href="#" class="button big button-arrow">Details</a>
                                </div>
                            </li>

                        </ul>

                    </div>

                </div>
                <!-- /Banner Rotator -->                        
            </div>



            <!-- Sidebar -->
            <div class="col-lg-3 col-md-3 col-sm-4 sidebar">

                <!-- Featured Video -->
                <div class="sidebar-box white featured-video animate-onscroll">
                    <div class="side-segment">
                        <h3><i class="icons icon-video"></i> Video de la Semana</h3>
                    </div>
                    <iframe src="http://player.vimeo.com/video/37811493" width="500" height="320"></iframe> 
                    <a href="#" class="button transparent button-arrow">Más Videos</a>
                </div>
                <!-- /Featured Video -->                        <!-- Upcoming Events -->
                <div class="sidebar-box white animate-onscroll">
                    <div class="side-segment">
                        <h3><i class="icons icon-calendar"></i> Últimos Eventos</h3>
                    </div>
                    <ul class="upcoming-events">

                        <!-- Event -->
                        <li>
                            <div class="date">
                                <span>
                                    <span class="day">25</span>
                                    <span class="month">DEC</span>
                                </span>
                            </div>

                            <div class="event-content">
                                <h6><a href="event-post-v2.html">Sed in lacus ut enim</a></h6>
                                <ul class="event-meta">
                                    <li><i class="icons icon-clock"></i> 4:00 pm - 6:00 pm</li>
                                    <li><i class="icons icon-location"></i> 340 W 50th St.New York</li>
                                </ul>
                            </div>
                        </li>
                        <!-- /Event -->

                        <!-- Event -->
                        <li>
                            <div class="date">
                                <span>
                                    <span class="day">5</span>
                                    <span class="month">JAN</span>
                                </span>
                            </div>

                            <div class="event-content">
                                <h6><a href="event-post-v2.html">Sed in lacus ut enim</a></h6>
                                <ul class="event-meta">
                                    <li><i class="icons icon-clock"></i> 4:00 pm - 6:00 pm</li>
                                    <li><i class="icons icon-location"></i> 340 W 50th St.New York</li>
                                </ul>
                            </div>
                        </li>
                        <!-- /Event -->

                        <!-- Event -->
                        <li>
                            <div class="date">
                                <span>
                                    <span class="day">8</span>
                                    <span class="month">JAN</span>
                                </span>
                            </div>

                            <div class="event-content">
                                <h6><a href="event-post-v2.html">Sed in lacus ut enim</a></h6>
                                <ul class="event-meta">
                                    <li><i class="icons icon-clock"></i> 4:00 pm - 6:00 pm</li>
                                    <li><i class="icons icon-location"></i> 340 W 50th St.New York</li>
                                </ul>
                            </div>
                        </li>
                        <!-- /Event -->

                    </ul>
                    <a href="#" class="button transparent button-arrow">Más eventos</a>
                </div>
                <!-- /Upcoming Events -->                       <!-- Image Banner -->
                <!--                <div class="sidebar-box image-banner animate-onscroll">
                                    <a href="issues.html">
                                        <img src="img/main-issues.jpg" alt="">
                                        <h3>The main issues</h3>
                                        <span class="button transparent button-arrow">Find out more</span>
                                    </a>
                                </div>
                                 /Image Banner                       Flickr Photos 
                                <div class="sidebar-box white flickr-photos animate-onscroll">
                                    <div class="side-segment">
                                        <h3><i class="icons icon-picture"></i> Flickr Photos</h3>
                                    </div>
                                    <ul class="flickr-feed">
                                    </ul>
                                </div>-->
                <!-- /Flickr Photos --> 


                <div class="sidebar-box white animate-onscroll">
                    <div class="side-segment">
                        <h3><i class="icons icon-comment"></i> Testimonios</h3>
                    </div>
                    <!-- Owl Carousel -->
                    <div class="owl-carousel-container testimonial-carousel animate-onscroll">

                        <div class="owl-carousel" data-max-items="1">

                            <!-- Owl Item -->
                            <div>

                                <!-- Testimonial -->
                                <div class="testimonial">

                                    <div class="testimonial-content">
                                        <p>"Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis."<br>
                                            Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna." </p>
                                    </div>

                                    <div class="testimonial-author">
                                        <img src="img/testimonials/profile1.jpg" alt="">
                                        <div class="author-meta">
                                            <span class="name">Gloria Mann,</span>
                                            <span class="location">Los Angeles</span>
                                        </div>
                                    </div>

                                </div>
                                <!-- /Testimonial -->

                            </div>
                            <!-- /Owl Item -->

                            <!-- Owl Item -->
                            <div>

                                <!-- Testimonial -->
                                <div class="testimonial">

                                    <div class="testimonial-content">
                                        <p>"Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros." </p>
                                    </div>

                                    <div class="testimonial-author">
                                        <img src="img/testimonials/profile2.jpg" alt="">
                                        <div class="author-meta">
                                            <span class="name">Gloria Mann,</span>
                                            <span class="location">Los Angeles</span>
                                        </div>
                                    </div>

                                </div>
                                <!-- /Testimonial -->

                            </div>
                            <!-- /Owl Item -->

                            <!-- Owl Item -->
                            <div>

                                <!-- Testimonial -->
                                <div class="testimonial">

                                    <div class="testimonial-content">
                                        <p>"Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis."<br>
                                            Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna." </p>
                                    </div>

                                    <div class="testimonial-author">
                                        <img src="img/testimonials/profile3.jpg" alt="">
                                        <div class="author-meta">
                                            <span class="name">Gloria Mann,</span>
                                            <span class="location">Los Angeles</span>
                                        </div>
                                    </div>

                                </div>
                                <!-- /Testimonial -->

                            </div>
                            <!-- /Owl Item -->

                        </div>

                        <div class="owl-header">

                            <div class="carousel-arrows">
                                <span class="left-arrow"><i class="icons icon-left-dir"></i></span>
                                <span class="right-arrow"><i class="icons icon-right-dir"></i></span>
                            </div>

                        </div>

                    </div>
                    <!-- /Owl Carousel -->  




                </div>
            </div>




            <!-- /Sidebar -->




        </div>

    </section>
    <!-- /Section -->

</section>










<!-- Footer -->
<footer id="footer">
    <!-- Main Footer -->
    <div id="main-footer">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 animate-onscroll">
                <div class="side-segment">
                    <h4>SoloCanchas</h4>
                </div>

                <p>
                    CanchasPerú es la única guía que reúne los mejores centros deportivos del pais, nuestros anunciantes cuentan 
                    con todo tipo de actividades relacionadas al entrenamiento y bienestar físico. El portal brinda toda la 
                    información necesaria para conocer y contactarse con centros deportivos a nivel nacional. 
                </p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 animate-onscroll">
                <div class="side-segment">
                    <h4>Enlaces</h4>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 menu-container">
                    <ul class="menu">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Canchas</a></li>
                        <li><a href="#">Academias</a></li>
                        <li><a href="#">Gimnasios</a></li> 
                        <li><a href="#">Campeonatos</a></li>
                        <li><a href="#">Contáctenos</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 twitter-widget-area animate-onscroll">
                <div class="side-segment">
                    <h4>Latest Tweets</h4>
                </div>

                <div class="twitter-widget">

                </div>
                <a href="#" class="button twitter-button">Follow us on twitter</a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 animate-onscroll">
                <div class="side-segment">
                    <h4>Like us on facebook</h4>
                </div>

                <iframe src="../../www.facebook.com/plugins/likebox34d7.html?href=http%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width=270&amp;height=240&amp;colorscheme=dark&amp;header=false&amp;show_faces=true&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:100%; height:240px;"></iframe>
            </div>
        </div>
    </div>
    <!-- /Main Footer -->

    <!-- Lower Footer -->
    <div id="lower-footer">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 animate-onscroll">
                <p class="copyright">© 2014 SoloCanchas. Todos los derechos reservados.</p>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 animate-onscroll">
                <div class="social-media">
                    <ul class="social-icons">
                        <li class="facebook"><a href="#" class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook"></i></a></li>
                        <li class="twitter"><a href="#" class="tooltip-ontop" title="Twitter"><i class="icons icon-twitter"></i></a></li>
                        <li class="google"><a href="#" class="tooltip-ontop" title="Google Plus"><i class="icons icon-gplus"></i></a></li>
                        <li class="youtube"><a href="#" class="tooltip-ontop" title="Youtube"><i class="icons icon-youtube-1"></i></a></li>
                        <li class="flickr"><a href="#" class="tooltip-ontop" title="Flickr"><i class="icons icon-flickr-4"></i></a></li>
                        <li class="email"><a href="#" class="tooltip-ontop" title="Email"><i class="icons icon-mail"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Lower Footer -->

</footer>
<!-- /Footer -->


<!-- Back To Top -->
<a href="#" id="button-to-top"><i class="icons icon-up-dir"></i></a>

<!-- Customize Box -->
<div class="customize-box">
    <h5>FACEBOOK</h5>
    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FSoloCanchasPeru&amp;width&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:590px;background: #FFF;" allowTransparency="true"></iframe>


    <div class="customize-box-button">
        <i class="icons icon-facebook"></i>
    </div>
</div>
<!-- /Customize Box -->

</div>
<!-- /Container --> 

<!-- JavaScript -->

<!-- Bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Modernizr -->
<script type="text/javascript" src="js/modernizr.js"></script>

<!-- Sliders/Carousels -->
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<!-- Revolution Slider  -->
<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- Calendar -->
<script type="text/javascript" src="js/responsive-calendar.min.js"></script>

<!-- Raty -->
<script type="text/javascript" src="js/jquery.raty.min.js"></script>

<!-- Chosen -->
<script type="text/javascript" src="js/chosen.jquery.min.js"></script>

<!-- jFlickrFeed -->
<script type="text/javascript" src="js/jflickrfeed.min.js"></script>

<!-- InstaFeed -->
<script type="text/javascript" src="js/instafeed.min.js"></script>

<!-- Twitter -->
<!--<script type="text/javascript" src="php/twitter/jquery.tweet.js"></script>-->

<!-- MixItUp -->
<script type="text/javascript" src="js/jquery.mixitup.js"></script>

<!-- JackBox -->
<script type="text/javascript" src="js/jackbox/js/jackbox-packed.min.js"></script>

<!-- CloudZoom -->
<script type="text/javascript" src="js/zoomsl-3.0.min.js"></script>

<!-- ColorPicker -->
<script type="text/javascript" src="js/colorpicker.js"></script>

<!-- Main Script -->
<script type="text/javascript" src="js/script.js"></script>

<!--[if lt IE 9]>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/script_ie.js"></script>
<![endif]-->




</body>

</html>