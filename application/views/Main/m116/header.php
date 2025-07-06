<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- BootStrap Link -->
    <link rel="stylesheet" href="<?= $panel_url;?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $panel_url;?>assets/css/animate.css">

    <!-- Icon Link -->
    <link rel="stylesheet" href="<?= $panel_url;?>assets/css/all.min.css">
    <link rel="stylesheet" href="<?= $panel_url;?>assets/css/line-awesome.min.css">

    <!-- Plugings Link -->
    <link rel="stylesheet" href="<?= $panel_url;?>assets/css/slick.css">
    <link rel="stylesheet" href="<?= $panel_url;?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= $panel_url;?>assets/css/odometer.css">

    <!-- Custom Link -->
    <link rel="stylesheet" href="<?= $panel_url;?>assets/css/main.css">
    <link rel="shortcut icon" href="<?= $this->conn->company_info('symbol');?>" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title><?= $this->conn->company_info('company_name');?></title>
<style>
   
    a.View_Detail {
   
    margin-bottom: 10px;
    padding: 4px 10px;
    font-size: 14px;
    font-weight: 600;
    color: #000;
    border-radius: 4px;
    background: linear-gradient(90deg,#de9f17 0%,#d19c15 33%,#fff58a 67%,#ffd147 100%);
}
.table thead tr th{
    font-size:16px;
    white-space: nowrap;
}
    .banner-section {
    
    padding-top: 150px;
    padding-bottom: 100px;
}
    .header__top__wrapper {
    border-bottom:none !important;
}
input.form-control.form--control {
    padding: 10px;
}
.alert.alert-danger.alert-dismissible {
    display: flex;
    align-items: center;
}

button.btn.cmn--btn.mt-4 {
    width: 100%;
}
button.close {
    padding: 9px;
    margin-right: 5px;
    line-height: 14px;
    background: #d7a31f;
    border: none;
    color: #fff;
    border-radius: 2px;
}

/* wallet-particulars-css-start */

.wallet_particulars {
    padding: 16px 16px;
    text-align: center;
    background: linear-gradient(180deg, #04083F 0%, rgb(6 10 64) 100%);
    margin: 10px 0px;
    border-radius: 6px;
    border: 3px solid #D7A31F;
}

.wallet_image img {
    width: 46px;
}

.wallet_content {
    padding-top: 10px;
}

.wallet_content h4 {
    font-size: 18px;
    text-transform: capitalize;
    color: #ffff;
    margin-bottom: 5px;
}

.wallet_content h3 {
    font-size: 18px;
    color: #d49d17;
    font-weight: 600;
}
h2.all_inclusive {
    font-size: 41px;
}
/* wallet-particulars-css-end */

/* invest_data */
input.cus_input {
    background: #1a2156;
    color: #fff;
    border-radius: 5px;
    border: 1px solid transparent;
    padding: 17px 15px;
    width: 100%;
    margin-bottom: 15px;
}

ul.trx_btn_data.mb_20 {
    overflow: hidden;
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}

ul.trx_btn_data.mb_20 li {
    margin-right: 10px;
}

button.inactive_data {
    display: block;
    width: 100%;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 15px 8px;
    font-size: 13px;
    background: #1a2156;
}

.text_center_data {
    text-align: center;
}

button.join_now_btn_data {
    background: #d7a31f;
    color: #fff;
    border: 2px solid #d7a31f;
    padding: 10px 60px;
    border-radius: 5px;
    text-transform: capitalize;
}
.form_detail_data {
    margin-top: 10px;
}
/* invest_data_css */

/* get_detail_css */
h2.all_inclusive {
    font-size: 41px;
}

.get_your_detail {
    text-align: center;
    margin-bottom: 40px;
}

.get_invest_detail {
    padding: 16px 16px;
    text-align: center;
    background: linear-gradient(180deg, #04083F 0%, rgb(6 10 64) 100%);
    margin: 10px 0px;
    border-radius: 6px;
    border: 3px solid #D7A31F;
}

.get_invest_detail_image img {
    width: 60px;
}

.get_invest_detail_coment h4 {
    font-size: 18px;
    text-transform: capitalize;
    color: #ffff;
    margin-bottom: 5px;
}

.get_invest_detail_coment {
    padding-top: 15px;
}

.get_invest_detail_coment h3 {
    font-size: 18px;
    color: #d49d17;
    font-weight: 600;
}

/* global_blockchain_investment_css */


.global_blockchain_investment {
    padding: 16px 16px;
    text-align: center;
    background: linear-gradient(180deg, #04083F 0%, rgb(6 10 64) 100%);
    margin: 10px 0px;
    border-radius: 6px;
    border: 3px solid #D7A31F;
}

.global_blockchain_investment_content {
    padding-top: 15px;
}



.global_blockchain_investment_content h4 {
    font-size: 18px;
    text-transform: capitalize;
    color: #ffff;
    margin-bottom: 5px;
}

.global_blockchain_investment_content h3 {
    font-size: 18px;
    color: #d49d17;
    font-weight: 600;
}

.global_blockchain_investment_image img {
    width: 60px;
}


h4.community_status {
    padding-top: 10px;
    font-size: 32px;
    color: #dfaa27;
    margin: 0;
}

.community_level_data.teble-responsive table {
    width: 100%;
}

.community_level_data.teble-responsive {
    overflow-x: auto;
}

.staking_button a {
    border: 1px solid #d49d15;
    position: relative;
    z-index: 1;
    padding: 8px 35px;
    background: linear-gradient(90deg, #de9f17 0%, #d19c15 33%, #fff58a 67%, #ffd147 100%);
    color: #000;
    font-weight: 600;
    text-transform: capitalize;
    border-radius: 4px;
}

.staking_button {
    margin-top: 15px;
}
.community_level_data.teble-responsive table thead tr th {
    background: linear-gradient(180deg, #F6C94A 19%, #D39B15 81%);
    padding: 10px 20px;
    font-family: "Poppins", sans-serif;
    color: #1f1f23;
    border: none;
    font-size: 18px;
    font-weight: 600;
    white-space: pre;
}
.community_level_data.teble-responsive table tbody tr td {
background: #1A1A33;
    padding: 10px 20px;
    color: #fff;
    vertical-align: middle;
}
.alert-message span {
    margin-left: 5px;
}
.tab_matic_button {
    display: flex;
    align-items: center;
    justify-content: end;
}
.get_invest_detail_coment h3 a {
    color: #d7a31f;
   /* border: 1px solid #d7a31f;
    padding: 4px 10px;
    border-radius: 4px;  */
}
.alert.alert-success.alert-dismissible {
    display: flex;
    align-items: center;
}
.staking_button button{
    background: linear-gradient(90deg, #de9f17 0%, #d19c15 33%, #fff58a 67%, #ffd147 100%);
    border:none;
}
li.sponoser_button button {
    background: linear-gradient(90deg, #de9f17 0%, #d19c15 33%, #fff58a 67%, #ffd147 100%);
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    color: #1f1f23;
    position: relative;
    z-index: 1;
    font-size: 18px;
    font-weight: 600;
    text-transform: capitalize;
   
}

ul.data_detail_sponser {
    display: flex;
}

li.sponoser_button {
    margin-left: 10px;
}

@media only screen and (max-width: 768px) {
    .table tbody tr td{
    font-size: 14px;
}
.community_level_data.teble-responsive table thead tr th {
    background: linear-gradient(180deg, #F6C94A 19%, #D39B15 81%);
    padding: 4px 14px;
    font-size: 14px;
    white-space: nowrap;
}
.community_level_data.teble-responsive table tbody tr td{
    font-size: 14px;
}
ul.data_detail_sponser {
    flex-direction: column;
}
li.sponoser_button {
    margin-left: 0px;
}
span.wallet {
    white-space: nowrap;
}
li.sponoser_button button{
    padding: 8px 20px;
}
}

button.sponser_submit_button {
    margin-top: 10px;
    padding: -3px;
    padding: 5px 10px !important;
}


input.form-control {
    padding: 10px;
}

.form_sponser label {
    color: #00000e;
    text-transform: capitalize;
    font-size: 14px;
    margin-bottom: 5px;
}

button.close.data {
    padding: 6px;
    line-height: -4px;
}

button.close.data span {
    line-height: 12px !important;
}

button.close.data {
    padding: 10px;
}

/* tab-content */

@media (max-width: 991px){
.table tbody tr td {
    display: block;
}
.table tbody tr:last-child td:first-child {
    border-radius: 0 0 0 0px;
}
.table tbody tr:last-child td:last-child {
     border-radius: 0 0 0px 0; 
}
.tab-content {
    overflow-x: auto;
}
td.no_data {
    white-space: nowrap;
}
td.data_s {
    white-space: nowrap;
}
}


.btn-info:hover {
    color: #000;
    background-color: #2faafa;
    border-color: #2faafa;
}
.earn_refer_title {
    padding: 25px 25px;
    border: 3px solid #D7A31F;
    box-shadow: 0 0 0 2px rgb(215 163 31 / 70%);
    border-radius: 12px;
   margin-bottom:40px;
    background: linear-gradient(180deg, #04083F 0%, rgba(0, 0, 28, 0.7) 100%);
}

input#referral_link_right {
    border-radius: 4px;
    padding: 6px;
    border: none;
}

.plan__item-header .plan-parcent {
    font-size: 27px;
}
    </style>
</head>
<body>

<!--<div class="preloader">
        <div class="preinnner">
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
        </div>
    </div>-->
    <div class="overlay"></div>

    <!-- Header Section Starts Here -->
    <div class="header">
       <!-- <div class="header-top">
            <div class="container">
                <div class="header__top__wrapper d-flex flex-wrap align-items-center justify-content-center justify-content-md-between text-center">
                    <ul class="contacts d-flex flex-wrap justify-content-center">
                        <li><a href="https://template.viserlab.com/cdn-cgi/l/email-protection#4d292820220d2a202c2421632e2220"><i class="las la-envelope-open"></i> <span class="__cf_email__" data-cfemail="87e3e2eae8c7e0eae6eeeba9e4e8ea"> contact@g-globe.com</span></a></li>
                        <!-- <li><a href="tel:129075"><i class="las la-phone-volume"></i> 123  -  456  -  7890</a></li> --
                    </ul>
                    <div class="right__area d-flex flex-wrap align-items-center mt-3 mt-md-0">
                        <select name="language" class="nice-select custom--scrollbar">
                            <option>English</option>
                            <option>Bangla</option>
                        </select>
                        <a href="dashboard.html" class="user__thumb ms-3 me-3 me-lg-0">
                            <img src="assets/images/dashboard/user.png" alt="dashboard">
                        </a>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom-area">
                    <div class="logo"><a href="<?= base_url();?>index"><img src="<?= $this->conn->company_info('logo');?>" class="" alt="<?= $this->conn->company_info('company_name');?>" style="width:<?php echo $this->conn->company_info('logo_width');?>;height:<?php echo $this->conn->company_info('logo_height');?>"></a></div>
                     <ul class="menu">
                        <li>
                            <a href="<?= base_url();?>index">Home</a>
                            
                        </li>
                        <li>
                            <a href="<?= base_url();?>about">About</a>
                        </li>
                        
                        <li>
                            <a href="<?= base_url();?>plan">Plan</a>
                        </li>
                     
                        <li>
                            <a href="<?= base_url();?>contact">Contact</a>
                        </li>
    
                        <li class="d-none d-lg-block">
                           
                        </li>
    
                        <li class="p-0 d-lg-none mt-3 mt-lg-0">
                            <div class="button__wrapper">
                                <a href="<?= base_url();?>login" class="cmn--btn">Login</a>
                                <a href="<?= base_url();?>register" class="cmn--btn">Register</a>
                            </div>
                        </li>
                    </ul>    
    
                     <div class="button__wrapper d-none d-lg-block">
                         <a href="<?= base_url();?>login" class="cmn--btn">Login</a>
                         <a href="<?= base_url();?>register" class="cmn--btn">Register</a>
                    </div> 
                    
    
                     <div class="header-trigger-wrapper d-flex d-lg-none align-items-center">
                        <div class="mobile-nav-right d-flex align-items-center"></div>
                         <a href="#0" class="search--btn me-4 text--base"><i class="<!--fas fa-search-->"></i></a> 
                        <div class="header-trigger d-block d--none">
                            <span></span>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <!-- Header Section Ends Here -->


    <!-- Search Form Starts Here --
    <div class="search__form__wrapper">
        <div class="form__inner">
            <form class="search__form">
                <div class="form-group">
                    <input type="text" class="form-control form--control" placeholder="Search Here...">
                    <button type="submit" class="cmn--btn btn">Search</button>
                </div>
            </form>
            <button class="btn-close btn-close-white"></button>
        </div>
    </div>
    <!-- Search Form Ends Here -->