<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/jugaro/jugaro/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Mar 2023 07:17:06 GMT -->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="forntEnd-Developer" content="Mamunur Rashid">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Yono</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.html" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Plugin css -->
	<link rel="stylesheet" href="assets/css/plugin.css">

	<!-- stylesheet -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
	<!-- preloader area start -->
	<div class="preloader" id="preloader">
		<div class="loader loader-1">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>
		</div>
	</div>
	<!-- preloader area end -->

	<!-- Header Area Start  -->
	<header class="header">
		<div class="overlay"></div>
		<!-- Top Header Area Start -->
		<section class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="content">
							<div class="left-content">
								<ul class="left-list">
									<li>
										<p>
											<i class="fas fa-headset"></i> Support
										</p>
									</li>
								</ul>
								<ul class="top-social-links">
									<li>
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-pinterest-p"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-linkedin-in"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-instagram"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="right-content">
								<ul class="right-list">
									<li>
										<div class="language-selector">
											<select name="language" class="language">
												<option value="1">EN</option>
												<option value="2">IN</option>
												<option value="3">BN</option>
											</select>
										</div>
									</li>
									<li>
										<div class="notofication" data-toggle="modal" data-target="#usernotification">
											<i class="far fa-bell"></i>
										</div>
									</li>
									<li>
										<div class="message" data-toggle="modal" data-target="#usermessage">
											<i class="far fa-envelope"></i>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Top Header Area End -->
		<!--Main-Menu Area Start-->
		<div class="mainmenu-area mainmenu-area2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav class="navbar navbar-expand-lg navbar-light">
							<a class="navbar-brand d-lg-none" href="<?= base_url();?>index">
								<img class="l2" src="<?= $this->conn->company_info('logo');?>" alt="">
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu"
								aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse fixed-height" id="main_menu">
								<div class="main-menu-inner">
									<ul class="navbar-nav mr-auto">
										<li class="nav-item d">
											<a class="nav-link active " href="<?= base_url();?>index" role="button" data-toggle=""
												aria-haspopup="true" aria-expanded="false">
												Home
											</a>
										</li>
								
										<li class="nav-item">
											<a class="nav-link" href="<?= base_url();?>Roadmap">Roadmap</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="<?= base_url();?>Tokonomics">Tokonomics</a>
										</li>


									</ul>
									<a class="navbar-brand  d-none d-lg-block" href="index.html">
										<img class="l2" src="<?= $this->conn->company_info('logo');?>" alt="">
									</a>
									<ul class="navbar-nav ml-auto">

										<li class="nav-item">
											<a class="nav-link" href="<?= base_url();?>contact">Contact</a>
										</li>
										<li>
											<a href="<?= base_url();?>register" class="mybtn1" >Register</a>
										</li>
										<?php
										error_reporting(0);
										$session= $this->session->userdata('profile')->name;
										
										if($session){
											// echo $session ;?>
											 <li><a href="<?= base_url();?>user/dashboard" class="mybtn1" >Dashboard</a></li><?php
										}else{
											//echo "login";?>
										<li><a href="<?= base_url();?>login" class="mybtn1" >login</a></li>
										<?php }
										?>
												
										
									</ul>
								</div>

							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!--Main-Menu Area Start-->
	</header>
    
	<!-- Header Area End  -->