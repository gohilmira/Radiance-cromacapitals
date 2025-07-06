<style>
    .account__form__wrapper {
    width: 100%;
    margin: auto;
    max-width: 500px;
    background: #25294a;
    padding: 20px;
    border-radius: 4px;
}

h3.title {
    text-align: center;
    margin-bottom: 15px;
    font-size: 24px;
}

a.forgot-pass.text--base {
    color: #f8467b;
    text-decoration: none;
}

.d-flex.flex-wrap.align-items-center {
    justify-content: flex-end;
    margin-top: 10px;
    
}

button.btn.cmn--btn.mt-2 {
    width: 100%;
    color: #fff;
    background-image: linear-gradient(135deg, #f5317f 0%, #ff7c6e 100%);
}
</style>
 <?php

if(!isset($_SESSION['forgot_user'])){
    $this->session->set_flashdata('error'," Please Enter Username.");
    redirect(base_url('forgot'),"refresh");
}

 if(isset($_POST['verify'])){
    $forgot_otp = $_POST['forgot_otp'];

    if($forgot_otp && $_SESSION['forgot_otp']==$_POST['forgot_otp']){
        $_SESSION['forgot_otp_verified']=true;
        $this->session->set_flashdata('success',"OTP Verified Successfully.");
            redirect(base_url('change_password'),"refresh");
        
    }else{
        $this->session->set_flashdata('error'," Incorrect OTP. Please Enter Valid OTP.");
    }

 }

 ?>

    <!-- Banner Section Starts Here -->

        
    <!-- Banner Section Ends Here -->


    <!-- Account Section Starts Here -->
    <div class="account-section padding-top padding-bottom  form_bg">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="account__form__wrapper">
                        <h3 class="title">Verify</h3>
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
                              
                                <input type="text" class="form-control form--control" placeholder="Enter OTP" id="forgot_otp" name="forgot_otp" value="">
                            </div>
                           
                           
                             <div class=" d-flex flex-wrap align-items-center">
                                
                                <a href="<?= base_url('login');?>" class="forgot-pass text--base">Cancel</a>
                            </div>
                           
                            <button class="btn cmn--btn mt-2" type="submit"  name="verify">Verify</button>
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


   