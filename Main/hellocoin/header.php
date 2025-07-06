<!DOCTYPE html>
<html lang="en">
  
  <!-- Mirrored from mgrcoins.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2023 16:18:18 GMT -->
  <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Hello Coin</title>
      <link rel="stylesheet" href="<?= $panel_url;?>assets/mtr/app/bootstrap/css/bootstrap.css">
      <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
      <link rel="stylesheet" href="<?= $panel_url;?>assets/mtr/app/dist/app.css">
      <link rel="stylesheet" href="<?= $panel_url;?>assets/mtr/assets/font/font-awesome.css">
      <link href="<?= $panel_url;?>assets/mtr/app/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" href="<?= $panel_url;?>assets/mtr/app/dist/swiper-bundle.min.css" />
      <link rel="shortcut icon" href="<?= $panel_url;?>assets/mtr/assets/images/favicon.png">
      <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
      <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
      <meta name="csrf-token" content="xJFa6LlGVEk2Ml91b61KRaPGBHyyd9Wq81yNC3F0">
      <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/kineticjs/5.2.0/kinetic.min.js"></script> -->
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/<?= $panel_url;?>assets/mtr/app/js/jquery.min.js"></script> <script src="~/Scripts/jquery.countdown.js"></script> <script type="text/javascript"> $(document).ready(function () { var endDate = "June 7, 2087 15:03:25"; $('.countdown.simple').countdown({ date: endDate }); }); </script>
      <!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

      <!-- <style>
        .team-outer{
          background: #7153d9;
      border-radius: 20px;
      padding: 9px;
  }

  .slick-slide img {
    
      display: unset !important;
  }
  .promotions-carousel .slick-slide {
      margin-right: 20px;
  }

        .img-outer img{
          border-radius: 36px !important;
        }

        .content-outer{
          padding-top: 21px;
        }
      </style> -->
  </head>
  <body class="home-3 header-fixed">
    <!-- Preloading -->
    <div class="preloader">
      <div class="icon"></div>
    </div>
    <!-- end Preloading -->
    <!-- Scroll Top -->
    <div class="progress-wrap active-progress">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
      </svg>
    </div>
    <!-- end Scroll Top -->
    <!-- Header -->
    <header id="header_main" class="header ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="header__body d-flex justify-content-between header__body2">
              <div class="header__logo">
                <a href="index.html">
                <img id="site-logo" src="<?= $this->conn->company_info('logo');?>" alt="MGR" data-retina="http://mgrcoins.com/<?= $panel_url;?>assets/mtr/assets/images/logo@2x.png" width="210" height="110">
                </a>
              </div>
              <div class="header__right">
                <nav class="navbar navbar-expand-lg main-nav">
                  <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
                        <li class="menu-item-has-children">
                          <a href="<?= base_url();?>index" >Home</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                          <a href="#about">About Us</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                          <a href="#info">Information</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                          <a href="#roadmap">Road Map</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                          <a href="#portfolio">Portfolio</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                          <a href="#Tokenomics">Tokenomics</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                          <a href="#technology">Technology</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                          <a href="#faq">FAQ</a>
                        </li>
                      </ul>
                      <div class="button bb1">
                        <a class="btn-action" href="<?= base_url();?>register" data-bs-toggle="modal" data-bs-target="#register-popup">
                        Register Now  
                        </a>
                      </div>
                      <div class="button bb1">
                        <a class="btn-action" onclick="login();" href="<?= base_url();?>login">Login</a>
                      </div>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>