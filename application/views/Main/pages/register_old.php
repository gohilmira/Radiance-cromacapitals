<!-- Banner Section Starts Here -->

<style>
.form_inner_content {
    width: 100%;
    margin: 20px auto;
    text-align: center;
    position: relative;
    z-index: 0;
    box-shadow: 0 0 35px rgb(0 0 0 / 10%);
    padding: 50px 40px;
    background: linear-gradient(#04083f 0%, #020424 100%);
    border-radius: 15px;
}


.form_inner_content h3 {
    margin: 0;
    padding-bottom: 15px;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: .8px;
}

input.form-control {
    height: 42px;
    border-radius: 0px;
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
    color: #000;
    overflow: hidden;
    text-transform: capitalize;
    display: inline-block;
    transition: all 0.3s ease;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    border-radius: 4px;
    border: none;
    padding: 10px;
   
    background: linear-gradient(90deg, #de9f17 0%, #d19c15 33%, #fff58a 67%, #ffd147 100%);
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

 .form-group{
     margin-bottom:10px !important;
 }
 .error-massage-id{
     text-align: initial;
   
 }

select.select_data {
    width: 100% !important;
    font-size: 14px !important;
    font-weight: 400 !important;
    border-radius: 0px !important; 
    border: 1px solid #d3d0d0 !important;
    padding: 5px 10px  !important;
   height:42px !important;
   
}
.error-massage-id p {
    font-size: 13px;
    text-align: initial;
    color: red;
}

.error-massage-id{
    margin-bottom:10px;
}
</style>
    
    
    
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">Register</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <li><a href="<?= base_url();?>index">Home</a>//</li>
                    <li>Register</li>

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
                        <h3 class="title">Register</h3>
                        <span id="ref"></span>
                        <span id="ref1"></span>
                        
                        <form class="form account__form" action="<?= base_url('register');?>" method="post" enctype="multipart/form-data">
                        
                        <?php 
                             $requires=$this->conn->runQuery("*",'advanced_info',"title='Registration'");
                             $value_by_lebel= array_column($requires, 'value', 'label');
                            ?>
                            <?php if(array_key_exists('is_sponsor_required', $value_by_lebel) && $value_by_lebel['is_sponsor_required']=='yes'){ ?>
                                <div class="form-group ">
                                    <input name="u_sponsor" type="user" id='u_sponsor' class="form-control check_sponsor_exist form--control" placeholder="Sponsor ID" data-response="sponsor_res" value="<?php
                                       if(isset($_REQUEST['ref'])){
							    $refff=$_REQUEST['ref'];
							    $top_id=$this->conn->runQuery('username,name','users',"username='$refff'");
							    echo $top_id[0]->username;
							    $name=$top_id[0]->name;
						    
						    $this->session->set_userdata('refer_name',$name);
							}elseif(set_value('u_sponsor')!=""){
							    
							     echo set_value('u_sponsor');
							}else{
							    $top_id=$this->conn->runQuery('username,name','users',"1=1");
							    echo $top_id[0]->username;
							}
							
                    												
                    	?>" 
                         aria-label="User">
                                   
                                </div>
                                
                           <?php	
                			if(isset($_REQUEST['ref'])){
                			    ?>
                			    
                			 <div class="error-massage-id">
                                    <?= $this->session->userdata('refer_name');?>
                                </div>    
                		
                			<?php
                			}else{
                			?>
                		
                			<div class="error-massage-id"  id="sponsor_res">
                                     <?php echo form_error('u_sponsor');?>
                                </div> 
                			<?php
                			}
                			?>      
                                
                                
                            <?php
                               }
                            ?>

<?php if(array_key_exists('user_gen_method', $value_by_lebel) && $value_by_lebel['user_gen_method']=='manual'){?> 
                                <div class="form-group ">
                                    <input name="usename" id="usename" type="text" class="form-control" autocomplete="off" placeholder="Enter  Username" data-response="username_res" value="<?php echo set_value('usename');?>">
                                 
                                </div>
                                <div class="error-massage-id"  id="username_res">
                                    <?php echo form_error('usename');?>
                                </div> 
                            <?php
                                }
                            ?> 
                         <div class="form-group ">
                                 <input autocomplete="off"  type="text" class="form-control form--control" autocomplete="none" id="name" autocomplete="none" name="name" placeholder="Name" data-response="name_res" value="<?php echo set_value('name');?>">
                             
                            </div>
                            <div class="error-massage-id"  id="name_res">
                                  <?php echo form_error('name');?>
                            </div>
                            

                            <?php if(array_key_exists('mobile_users', $value_by_lebel) && $value_by_lebel['mobile_users']>0){?>
                            <div class="form-group ">
                                <input name="mobile" id="mobile" type="number" class="form-control no_space check_mobile_valid form--control" autocomplete="off" placeholder=" Mobile" data-response="mobile_res" value="<?= set_value('mobile');?>">
                            
                            </div>
                            <div class="error-massage-id"  id="mobile_res">
                                  <?php echo form_error('mobile');?>
                            </div>
                        <?php
                          }
                        ?>
                            <?php if(array_key_exists('country_code', $value_by_lebel) && $value_by_lebel['country_code']=='yes'){?>
                            <div class="form-group ">
                                <select id="country_code" data-response="mobile_code" class="select_data country" name="country_code">
                                    <option value="">Select Country</option>
                                        <?php
                                        $countries=$this->conn->runQuery('*','countries','1=1');
                                        if($countries){
                                            foreach($countries as $country){
                                                ?> <option data-sortname="<?= $country->sortname;?>" data-phonecode="<?= $country->phonecode;?>" value="<?= $country->name;?>"  ><?= $country->name;?></option><?php
                                            }
                                        }
                                        ?>
                                </select>
                            </div>
                        <?php } ?>

                        
                       <?php if(array_key_exists('reg_type', $value_by_lebel) && $value_by_lebel['reg_type']=='binary'){?>
                            <div class="form-group ">
                                <select id="position" class="select_data" name="position">
                                    <option value="">Select Position</option>
                                    <?php
                                        if(isset($_REQUEST['position'])){
                                            $position=$_REQUEST['position'];
                                            if($position==1){
                                        ?>
                                        
                                        <option value="1"  <?php if($position==1){ echo "selected";}?>>Left</option>
                                        
                                        <?php }else{  ?>
                                        <option value="2" <?php if($position==2){ echo "selected";}?>>Right</option>
                                        
                                            
                                        <?php   
                                        }
                                         }else{
                                       ?>
                                       <option value="1"  >Left</option>
                                     <option value="2" >Right</option>
                                       
                                       <?php     
                                        }
                                    ?>
                                    
                                </select>
                        </div>
                        <?php
                            }
                        ?>

                        
                        <?php if(array_key_exists('email_users', $value_by_lebel) && $value_by_lebel['email_users']>0){?>
                            <div class="form-group ">
                                <input name="email" id="email" type="email" class="form-control check_email_valid form--control" autocomplete="off" placeholder="Email" data-response="email_res" value="<?= set_value('email');?>">
                                
                            </div>
                            <div class="error-massage-id"  id="email_res">
                                  <?php echo form_error('email');?>
                            </div>
                        <?php
                           }
                        ?>
                        
                        
                        <?php if(array_key_exists('pass_gen_type', $value_by_lebel) && $value_by_lebel['pass_gen_type']=='manual'){ ?>
							
							<div class="form-group">
								 <input type="password" class="form-control no_space" id="password" name="password" placeholder="password" data-response="password_res"  value="<?php echo set_value('password');?>" />
                                                    <span class="text-danger" id="password_res"><?php echo form_error('password');?></span>
							</div>
							
							<div class="form-group">
								<input type="password" class="form-control no_space" id="confirm_password" name="confirm_password" placeholder="Confirm password"  data-response="confirm_password_res" value="<?php echo set_value('confirm_password');?>" />
                                                    <span class="text-danger" id="confirm_password_res"><?php echo form_error('confirm_password');?></span>
							</div>
							<?php } ?>
                            
                           
                           <!-- <div class="form--check me-4">
                                <input type="checkbox" id="rem-me">
                                <label for="rem-me">I agree with all  <a href="policy.html" class="text--base ms-2">Terms & Condition</a></label>
                            </div>-->
                            <button type="submit" class="btn cmn--btn mt-4 btn-remove" name="register">Register</button>
                          
                        </form>
                       
                        <p class="mt-4">Already you have an account in here? <a class="ms-2 text--base" href="<?= base_url('login');?>">Sign In</a></p>
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

    <script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 15) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
   