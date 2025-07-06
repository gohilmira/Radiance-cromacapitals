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

//$this->message->sms(7015769572,'hello');

 if(isset($_POST['verify'])){
    $tx_username = $_POST['username'];

    if($tx_username){
        $check_exists=$this->conn->runQuery('mobile,id','users',"username='$tx_username'");
        if($check_exists){
            $_SESSION['forgot_otp']=$otp=mt_rand(100000,999999);
            $_SESSION['forgot_user']=$check_exists[0]->id;
            $company_name=$this->conn->company_info('title');
            $company_url=$this->conn->company_info('base_url');
          
            //$sms="$otp is your OTP for forgot password. Thanks $company_name team. For more visit company_name.com,";
            
            
            $sms="$otp is your OTP for forgot password. Thanks $company_name team. For more visit $company_url,";
           // $msg=urlencode($sms);
            $this->message->sms($check_exists[0]->mobile,$sms);
            $this->session->set_flashdata('success'," OTP has been sent to your registered Email.");
            redirect(base_url('verify'),"refresh");
        }else{
            $this->session->set_flashdata('error'," Username not exists. Please Enter valid Username.");
        }
    }else{
        $this->session->set_flashdata('error'," Please Enter Username.");
    }

 }

 ?>

    <!-- Banner Section Starts Here -->
    
   

    <!-- Account Section Starts Here -->
    <div class="account-section padding-top padding-bottom  form_bg">
        <div class="container">

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

            <div class="row">
               
                <div class="col-lg-12 ">
                    <div class="account__form__wrapper">
                        <h3 class="title">Forgot Password</h3>
                        <form class="form account__form" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control form--control" name="username" placeholder="Username">
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


   