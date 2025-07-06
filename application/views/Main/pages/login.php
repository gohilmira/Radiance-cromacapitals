 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<style>
/*.page-header{
     display: none;
}*/
.error-massage-id p {
   margin-bottom: 10px;
}
p.label_input_detail {
    margin-bottom: 15px;
}
body {
    
    .btn-block {
    display: block;
    background-color: #194089;
}
    
    margin-top: 100px;
}
.form_inner_content {
   max-width: 500px;
    margin: auto;
    border: 1px solid #d4d2d2;
    padding: 20px;
    border-radius: 4px;
    margin-top: 150px;
}

.form_inner_content h3 {
    margin: 0;
    padding-bottom: 15px;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: .8px;
    text-align: center;
    color: #ffff;
}

a.link_forgot_page {
    color: #fff;
}
input.form-control {
    height: 42px;
    border-radius: 40px;
}

.form-group {
    position: relative;
}

.form-group i {
    position: absolute;
    top: 43%;
    right: 9px;
}
.checkbox.form-group {
    display: flex;
    justify-content: space-between;
}

.form_check_data {
    display: flex;
    align-items: center;
}

input.form_check_input {
    width: 20px;
    height: 20px;
    vertical-align: top;
    border: 2px solid #c5c3c3;
    border-radius: 0;
    margin-right: 7px;
}

label.form_check_label {
    margin-bottom: 0;
}

button.submit_login {
    position: relative;
    display: inline-block;
    width: 100%;
    color: #fff;
    overflow: hidden;
    text-transform: capitalize;
    display: inline-block;
    transition: all 0.3s ease;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    border-radius: 40px;
    border: none;
    padding: 10px;
    background:#00d094;
}
button.submit_login:focus{
    outline:none;
}
.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: none;
    outline: 0;
    box-shadow: none;
}
.error-massage-id p {
    font-size: 13px;
    text-align: initial;
    color: red;
}
   .error-massage-id{
     text-align: initial;
   
 }
.form-group{
     margin-bottom:10px !important;
 }
.error-massage-id{
    margin-bottom:10px;
}
.footer.static-bottom.footer-dark.footer-custom-class {
    margin-top: 0;
    padding-top: 200px;
}
p.label_input_detail {
    position: relative;
}
input.data_input {
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    border: 1px solid #f1f1f1;
    padding: 10px 10px 10px 57px;
    border-radius: 40px;
    height: 50px;
}
span.input_data_text i {
    color: #fff;
    font-size: 20px;
}
span.input_data_text {
    position: absolute;
    top: 0px;
    width: 50px;
    border-top-left-radius: 30px;
    font-size: 23px;
    border-bottom-left-radius: 30px;
    height: 50px;
    background: #00d094;
    line-height: 50px;
    text-align: center;
    left:-2px;
}
</style>
 <div class="form_section_detail">
        <div class="container">
          <div class="row">
              <div class="col-lg-12">
                
                  <div class="form_inner_content">
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
                      <h3>Login</h3>
                      <form action="" method="post">
                        <p class="label_input_detail">
                         <span class="input_data_text"><i class="fa fa-user" aria-hidden="true"></i></span>
                         <input type="text" class="no_space data_input" id="email" name="email" placeholder="email" data-response="email_res" value="<?php echo set_value('email');?>">                    
                         <span class=" " id="email_res"><?php echo form_error('usename');?></span>
                    </p>
                        <div class="error-massage-id"  id="email_res">
                        <?php echo form_error('email');?>
                        </div>
                        <p class="label_input_detail">
                         <span class="input_data_text"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                         <input type="password" class="no_space data_input" id="password" name="password" placeholder="password" data-response="password" value="<?php echo set_value('password');?>">                    
                         <span class=" " id=""><?php echo form_error('password');?></span>
                    </p>
                        <div class="checkbox form-group ">
                           <!-- <div class="form_check_data">
                                <input class="form_check_input" type="checkbox" id="rememberme">
                                <label class="form_check_label" for="rememberme">
                                    Remember me
                                </label>
                            </div>-->
                            <!--<a href="<?= base_url('forgot');?>" class="link_forgot_page">Forgot your password?</a>-->
                        </div>
                        <div class="form-group">
                            <button type="submit" name="login" class="submit_login btn-remove">Login</button>
                        </div>
                       
                    </form>
                  </div>
              </div>
          </div>
        </div>
    </div>
	
	
	
	
<script>
    ( function($) {
  $(".btn-remove").click(function() {  
    $(this).css("display", "none");      
  });
} ) ( jQuery );
 
    
    
    
</script>




