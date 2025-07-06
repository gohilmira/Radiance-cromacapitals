<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from keenitsolutions.com/products/html/educavo/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Mar 2023 05:22:33 GMT -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title><?= $this->conn->company_info('company_name');?></title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="<?= $this->conn->company_info('logo');?>">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="<?= $panel_url;?>assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="<?= $panel_url;?>assets/css/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="<?= $panel_url;?>assets/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="<?= $panel_url;?>assets/css/owl.carousel.css">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="<?= $panel_url;?>assets/css/slick.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="<?= $panel_url;?>assets/css/off-canvas.css">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="<?= $panel_url;?>assets/fonts/linea-fonts.css">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="<?= $panel_url;?>assets/fonts/flaticon.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="<?= $panel_url;?>assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="<?= $panel_url;?>assets/css/rsmenu-main.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="<?= $panel_url;?>assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="<?= $panel_url;?>/style.css"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="<?= $panel_url;?>assets/css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css"></link>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="home-style3">
        
        <!--Preloader area start here-->
        <!-- <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="<?= $panel_url;?>assets/images/pre-logo.png" alt="">
                </div>
            </div> -->
        </div>
        <!--Preloader area End here-->

        <!--Full width header Start-->
        <div class="full-width-header header-style2 modify1">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Topbar Area Start -->
                <div class="topbar-area d-none">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-md-6">
                                <ul class="topbar-contact">
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <a href="mailto:support@rstheme.com">support@skillsdiksha.com</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-call"></i>
                                        <a href="tel:+0885898745">+91 730-000-6406</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 text-right">
                                <ul class="topbar-right">
                                    <li class="login-register">
                                        <i class="fa fa-sign-in"></i>
                                        <a href="<?= base_url();?>login">Login</a>/<a href="<?= base_url();?>register">Register</a>
                                    </li>
                                    <li class="btn-part">
                                        <a class="apply-btn" href="#">Apply Now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container-fluid">
                        <div class="row y-middle">
                            <div class="col-lg-4">
                                <div class="logo-cat-wrap">
                                    <div class="logo-part pr-90">
                                        <a href="index.html">
                                            <img src="<?= $panel_url;?>assets/images/logo.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 text-center">
                                <div class="rs-menu-area">
                                    <div class="main-menu pr-90 md-pr-15">
                                        <div class="mobile-menu">
                                            <a class="rs-menu-toggle">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </div>
                                        <nav class="rs-menu">
                                           <ul class="nav-menu">
                                                <li class=""> 
                                                    <a href="<?= base_url();?>index">Home</a>
                                                </li>
                                                <li class="">
                                                   <a href="<?= base_url();?>about">About</a>
                                                </li>
                                                <li class="">
                                                   <a href="<?= base_url();?>contact">Contact</a>
                                                </li>
                                                <li class="">
                                                    <a href="<?= base_url();?>login">Login</a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url();?>register">Register</a>
                                                </li>
                                           </ul> <!-- //.nav-menu -->
                                        </nav>                                         
                                    </div> <!-- //.main-menu -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->
            </header>
            <!--Header End-->
			</div>
        <!--Full width header End-->