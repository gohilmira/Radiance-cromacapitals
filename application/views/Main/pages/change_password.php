<?php

if(!isset($_SESSION['forgot_user'])){
    
    redirect(base_url('forgot'),"refresh");
    die();
}

if($_SESSION['forgot_otp_verified']!==true){
    
    redirect(base_url('verify'),"refresh");
    die();
}

 if(isset($_POST['change_btn'])){
    
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
    $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|min_length[6]|matches[password]');
    $update['password'] = md5($_POST['password']);
    if($this->form_validation->run() != False){
        
        $this->db->where('id',$_SESSION['forgot_user']);
        $this->db->update('users',$update);

        unset($_SESSION['forgot_otp']);
        unset($_SESSION['forgot_user']);
        unset($_SESSION['forgot_otp_verified']);

        $this->session->set_flashdata('success'," Password successfully Changed.");
        redirect(base_url('forgot'),"refresh");
        
    }

 }

 ?>

    <!-- Banner Section Starts Here -->
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">Change Password</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <li><a href="<?= base_url();?>index">Home</a>//</li>
                    <li>Change Password</li>
                </ul>
            </div>
        </div>
        <div class="shapes">
            <img src="<?= $panel_url;?>assets/images/banner/inner-bg.png" alt="banner" class="shape shape1">
            <img src="<?= $panel_url;?>assets/images/banner/inner-thumb.png" alt="banner" class="shape shape2 d-none d-lg-block">
        </div>
    </div>
    <!-- Banner Section Ends Here -->


    <!-- Account Section Starts Here -->
    <div class="account-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-xl-5 d-none d-lg-block">
                    <div class="section__thumb rtl me-5">
                        <img src="<?= $panel_url;?>assets/images/account/thumb.png" alt="account">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="account__form__wrapper">
                        <h3 class="title">Change Password</h3>
                        <?php 
                        
                        $success['param']='success';
                        $success['alert_class']='alert-success';
                        $success['type']='success';
                        $this->show->show_alert($success);
                        ?>
                            <?php 
                        $erroralert['param']='error';
                        $erroralert['alert_class']='alert-danger';
                        $erroralert['type']='error';
                        $this->show->show_alert($erroralert);
                        ?>

                        <form class="form account__form" method="POST">
                           
                            <div class="form-group">
                            <input type="password" class="form-control form--control" id="password" name="password" placeholder="password" data-response="password_res" value="<?php echo set_value('password');?>" />
                                
                                <span class="eye-icon"><i class="las la-eye"></i></span>
                                <span class="text-danger" id="password_res"><?php echo form_error('password');?></span>
                            </div>
                            <div class="form-group">
                               
                                <input type="password"class="form-control form--control" id="confirm_password" name="confirm_password" placeholder="Confirm password" data-response="confirm_password_res" value="<?php echo set_value('confirm_password');?>" />
                                <span class="eye-icon"><i class="las la-eye"></i></span>
                                <span class="text-danger" id="confirm_password_res"><?php echo form_error('confirm_password');?></span>
                               
                            </div>
                            <div class="form--check me-4">
                                <input type="checkbox" id="rem-me">
                                <label for="rem-me">I agree with all  <a href="policy.html" class="text--base ms-2">Terms & Condition</a></label>
                            </div>
                            
                            <button class="btn cmn--btn mt-4" type="submit"  name="change_btn">Save</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Account Section Ends Here -->


    <!-- Brand Section Starts Here --
    <div class="padding-bottom">
        <div class="container">
            <div class="brand__slider">
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="assets/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="assets/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="assets/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="assets/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="assets/images/brand/item1.png" alt="brand">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Section Ends Here -->


   