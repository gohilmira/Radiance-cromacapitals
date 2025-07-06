<!DOCTYPE html>
<html lang="en-US">


<head>
    <!--required meta-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--title for this document-->
    <title><?= $this->conn->company_info('company_name');?></title>
    <!--favicon for this document-->
    <link rel="shortcut icon" href="<?= $this->conn->company_info('logo');?>" type="image/x-icon">
    <!--keywords for this  document-->
    <meta name="keywords" content="Fantasy, Sports, Stock, Exchange, HTML Template">
    <!--description for this document-->
    <meta name="description" content="Fantasy Sports Stock Exchange HTML Template">
    <!--author of this document-->
    <meta name="author" content="pixelaxis">

    <!--bootstrap 5 minified css source-->
    <link rel="stylesheet" href="<?= $panel_url;?>assets/css/vendor/bootstrap.min.css">
    <!--fontawesome 5 minified css source-->
    <link rel="stylesheet" href="<?= $panel_url;?>assets/icons/font_awesome/css/all.min.css">
    <!--flaticon css source-->
    <link rel="stylesheet" href="<?= $panel_url;?>assets/icons/flat_icon/flaticon.css">
    <!--owl carousel-2.3.4 minified css source-->
    <link rel="stylesheet" href="<?= $panel_url;?>assets/css/vendor/owl.carousel.min.css">
    <!--owl carousel-2.3.4 theme default minified css source-->
    <link rel="stylesheet" href="<?= $panel_url;?>assets/css/vendor/owl.theme.default.min.css">
    <!--magnific popup css source-->
    <link rel="stylesheet" href="<?= $panel_url;?>assets/css/vendor/magnific-popup.css">
    <!--jquery nice select css source-->
    <link rel="stylesheet" href="<?= $panel_url;?>assets/css/vendor/nice-select.css">
    <!--animate css source-->
    <link rel="stylesheet" href="<?= $panel_url;?>assets/css/vendor/animate.css">
    <!--custom css start-->
    <link rel="stylesheet" href="<?= $panel_url;?>assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        button.close {
    margin-right: 6px;
    padding: 2px 10px;
}

.alert-success, .alert-danger {
    display: flex;
    align-items: center;
}

.alert-icon {
    margin-right: 5px;
}

.alert-message {
    font-size: 12px;
}
    </style>
</head>
<body>
    <!--===preloader start===-->
   <!-- <div class="loader_wrapper" id="preloader" >
        <div class="loader">
            <div class="face">
                <div class="circle"></div>
            </div>
            <div class="face">
                <div class="circle sd"></div>
            </div>
            <div class="percent">
                <span class="counterr">100</span><span class="per">%</span>
            </div>
        </div>
    </div>-->
    <!--===preloader end===-->

    <!--====header navbar start====-->
    <header> 
        <nav class="navbar fixed-top navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="<?= $this->conn->company_info('logo');?>" class="" alt="<?= $this->conn->company_info('company_name');?>" style="width:<?php echo $this->conn->company_info('logo_width');?>;height:<?php echo $this->conn->company_info('logo_height');?>">
                </a>
                <div class="d-flex flex-row order-2 order-lg-3 user_info">
                    <div class="group_btn d-none d-sm-block">
                        <a href="<?= base_url();?>login" class="group_link log_in registration">LOG IN</a>
                        <a href="<?= base_url();?>register" class="group_link registration hover">SIGN UP</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navDefault" aria-controls="navDefault" aria-expanded="false" aria-label="Toggle navigation" id="toggleIcon">
                        <span class="bar_one"></span>
                        <span class="bar_two"></span>
                        <span class="bar_three"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end order-3 order-lg-2" id="navDefault">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url();?>index" id="navbarDropdownMenuLink">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url();?>about">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url();?>faq">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pd_right" href="<?= base_url();?>contact">CONTACT US</a>
                        </li>
                        <li class="nav-item d-block d-sm-none"> 
                            <a class="nav-link registration" href="<?= base_url();?>login">LOG IN</a>
                        </li>
                        <li class="nav-item d-block d-sm-none">
                            <a class="nav-link registration hover" href="<?= base_url();?>register">SIGN UP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--====header navbar end====-->