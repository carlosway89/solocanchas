
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
        <link href="<?php echo URL_CSS; ?>bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo URL_CSS; ?>fontello.css" rel="stylesheet" type="text/css">
        <link href="<?php echo URL_CSS; ?>flexslider.css" rel="stylesheet" type="text/css">
        <link href="<?php echo URL_JS; ?>revolution-slider/css/settings.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo URL_CSS; ?>owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="<?php echo URL_CSS; ?>responsive-calendar.css" rel="stylesheet" type="text/css">
        <link href="<?php echo URL_CSS; ?>chosen.css" rel="stylesheet" type="text/css">
        <link href="<?php echo URL_JS; ?>jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL_CSS; ?>cloud-zoom.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL_CSS; ?>colorpicker.css" rel="stylesheet" type="text/css">
        <link href="<?php echo URL_CSS; ?>style.css" rel="stylesheet" type="text/css">


        <!--[if IE 9]>
                <link rel="stylesheet" href="<?php echo URL_JS; ?>ie9.css">
        <![endif]-->

        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <link href="<?php echo URL_JS; ?>jackbox-ie8.css" rel="stylesheet" type="text/css" />
                <link rel="stylesheet" href="<?php echo URL_JS; ?>ie.css">
<![endif]-->

        <!--[if gt IE 8]>
                <link href="<?php echo URL_CSS; ?>jackbox-ie9.css" rel="stylesheet" type="text/css" />
        <![endif]-->

        <!--[if IE 7]>
                <link rel="stylesheet" href="<?php echo URL_CSS; ?>fontello-ie7.css">
        <![endif]-->

        <style type="text/css">
            .no-fouc {display:none;}
        </style>

        <!-- jQuery -->
        <script src="<?php echo URL_JS; ?>jquery-1.11.0.min.js"></script>
        <script src="<?php echo URL_JS; ?>jquery-ui-1.10.4.min.js"></script>

        <!-- Preloader -->
        <script src="<?php echo URL_JS; ?>jquery.queryloader2.min.js"></script>
        <script src="<?php echo URL_JS; ?>jsCustomHeader.js"></script>

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

                                <a href="main-v1.html"><img src="<?php echo URL_IMG; ?>logo.png" alt="Logo" width="331" height="101" style="margin-top:-20px"></a>
                                
                                

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
                <?php $this->load->view("master/menu_view"); ?>
            </header>
            <!-- /Header -->
