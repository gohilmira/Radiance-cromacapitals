<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <title>
    <?= $this->conn->company_info('title'); ?>
  </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Sites meta Data -->
  <meta name="application-name"
    content="Bitrader - Professional Multipurpose HTML Template for Your Crypto, Forex, Stocks &amp; Day Trading Business">
  <meta name="author" content="thetork">
  <meta name="keywords" content="Bitrader, Crypto, Forex, and Stocks Trading Business">
  <meta name="description"
    content="Experience the power of Bitrader, the ultimate HTML template designed to transform your trading business. With its sleek design and advanced features, Bitrader empowers you to showcase your expertise, engage clients, and dominate the markets. Elevate your online presence and unlock new trading possibilities with Bitrader.">

  <!-- OG meta data -->
  <meta property="og:title"
    content="Bitrader - Professional Multipurpose HTML Template for Your Crypto, Forex, Stocks &amp; Day Trading Business">
  <meta property="og:site_name" content="Bitrader">
  <meta property="og:url" content="https://thetork.com/demos/html/bitrader/">
  <meta property="og:description"
    content="Welcome to Bitrader, the game-changing HTML template meticulously crafted to revolutionize your trading business. With its sleek and modern design, Bitrader provides a cutting-edge platform to showcase your expertise, attract clients, and stay ahead in the competitive trading markets.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?= $this->conn->company_info('logo'); ?>">



  <link rel="shortcut icon" href="<?= $this->conn->company_info('logo'); ?>" type="image/x-icon">

  <link rel="stylesheet" href="<?= $panel_url; ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $panel_url; ?>assets/css/aos.css">
  <link rel="stylesheet" href="<?= $panel_url; ?>assets/css/all.min.css">

  <link rel="stylesheet" href="<?= $panel_url; ?>assets/css/swiper-bundle.min.css">



  <!-- main css for template -->
  <link rel="stylesheet" href="<?= $panel_url; ?>assets/css/style.css">
</head>

<body>

  <!-- ===============>> Preloader start here <<================= -->
  <div class="preloader">
    <img width="90" src="<?= $this->conn->company_info('logo'); ?>" alt="preloader icon">
  </div>
  <!-- ===============>> Preloader end here <<================= -->



  <!-- ===============>> light&dark switch start here <<================= -->
  <div class="lightdark-switch">
    <span class="switch-btn d-none" id="btnSwitch"><img src="<?= $panel_url; ?>assets/images/icon/moon.svg"
        alt="light-dark-switchbtn" class="swtich-icon"></span>
  </div>
  <!-- ===============>> light&dark switch start here <<================= -->





  <!-- ===============>> Header section start here <<================= -->
  <header class="header-section header-section--style2">
    <div class="header-bottom">
      <div class="container">
        <div class="header-wrapper">
          <div class="logo">
            <a href="<?= base_url(); ?>index">
              <img width="90" src="<?= $this->conn->company_info('logo'); ?>" alt="logo">
            </a>
          </div>
          <div class="menu-area">
            <ul class="menu menu--style1">
              <li class="megamenu">
                <a href="<?= base_url(); ?>index">Home</a>
              </li>

              <li>
                <a href="<?= base_url(); ?>about">About Us</a>
              </li>

              <li>
                <a href="<?= base_url(); ?>contact">Contact Us</a>
              </li>
              <li>
                <a href="<?= base_url(); ?>login" class="trk-btn trk-btn--border trk-btn--primary">
                     <span>Login</span>
                </a>
              </li>
              <li>
                <a href="<?= base_url(); ?>register" class="trk-btn trk-btn--border trk-btn--primary">
                    <span>Register</span>
                </a>
              </li>
            </ul>

          </div>
          <div class="header-action">
            <div class="menu-area">
              <!--<div class="header-btn">-->
              <!--  <a href="<?= base_url(); ?>login" class="trk-btn trk-btn--border trk-btn--primary">-->
              <!--    <span>Login</span>-->
              <!--  </a>-->
              <!--  <a href="<?= base_url(); ?>register" class="trk-btn trk-btn--border trk-btn--primary">-->
              <!--    <span>Register</span>-->
              <!--  </a>-->
              <!--</div>-->

              <!-- toggle icons -->
              <div class="header-bar d-lg-none header-bar--style1">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ===============>> Header section end here <<================= -->