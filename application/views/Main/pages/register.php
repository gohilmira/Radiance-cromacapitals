
    <!--====sign up section start====-->
    <section class="account padding-top padding-bottom sec-bg-color2">
    <div class="container">
               <!-- <div class="form_header">
                    <a href="index.html" class="registration_logo">
                        <img src="<?= $this->conn->company_info('logo');?>" class="" alt="<?= $this->conn->company_info('company_name');?>" style="width:<?php echo $this->conn->company_info('logo_width');?>;height:<?php echo $this->conn->company_info('logo_height');?>">
                    </a>
                </div>-->
                <form action="#" method="POST" class="mt-60">
                    <h1 class="form_title">Let's1 Create Your Account</h1>
                     <?php 
                             $requires=$this->conn->runQuery("*",'advanced_info',"title='Registration'");
                             $value_by_lebel= array_column($requires, 'value', 'label');
                            ?>
                     <?php if(array_key_exists('is_sponsor_required', $value_by_lebel) && $value_by_lebel['is_sponsor_required']=='yes'){ ?>        
                    <div class="mb-3">
                        <label for="email" class="form-label">Sponsor ID</label>
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
                    </div>
                    <?php if(array_key_exists('user_gen_method', $value_by_lebel) && $value_by_lebel['user_gen_method']=='manual'){?> 
                    <div class="mb-3">
                        <label for="email" class="form-label">Username</label>
                         <input name="usename" id="usename" type="text" class="form-control" autocomplete="off" placeholder="Enter  Username" data-response="username_res" value="<?php echo set_value('usename');?>">
                                 
                    </div>
                     <div class="error-massage-id"  id="username_res">
                        <?php echo form_error('usename');?>
                    </div> 
                    <?php
                        }
                    ?> 
                            
                            
                       <div class="mb-3">
                        <label for="email" class="form-label">Name</label>
                        <input autocomplete="off"  type="text" class="form-control form--control" autocomplete="none" id="name" autocomplete="none" name="name" placeholder="Name" data-response="name_res" value="<?php echo set_value('name');?>">
                             
                    </div>
                    
                
                        
                          <?php if(array_key_exists('country_code', $value_by_lebel) && $value_by_lebel['country_code']=='yes'){?>
                              <div class="mb-3"><label for="Country" class="form-label">Select Country</label>
                                <select id="country_code" data-response="mobile_code" class="form-control country" name="country_code">
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

                     <div class="error-massage-id"  id="name_res">
                      <?php echo form_error('name');?>
                     </div>
                            
                     <?php if(array_key_exists('mobile_users', $value_by_lebel) && $value_by_lebel['mobile_users']>0){?>
                    <div class="mb-3">
                        <label for="email" class="form-label">Mobile</label>
                        <input name="mobile" id="mobile" type="number" class="form-control no_space check_mobile_valid form-control" autocomplete="off" placeholder=" Mobile" data-response="mobile_res" value="<?= set_value('mobile');?>">
                            
                    </div>
                    <div class="error-massage-id"  id="mobile_res">
                     <?php echo form_error('mobile');?>
                    </div>
                    <?php
                      }
                    ?>
                     <?php if(array_key_exists('reg_type', $value_by_lebel) && $value_by_lebel['reg_type']=='binary'){?>
                           <label for="email" class="form-label">Select Position</label> <div class="form-group ">
                                <select id="position" class="select_data form-control" name="position">
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
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                       <input name="email" id="email" type="email" class="form-control check_email_valid form--control" autocomplete="off" placeholder="Email" data-response="email_res" value="<?= set_value('email');?>">
                                
                    </div>
                     <div class="error-massage-id"  id="email_res">
                          <?php echo form_error('email');?>
                    </div>
                     <?php
                           }
                        ?>
                      <?php if(array_key_exists('pass_gen_type', $value_by_lebel) && $value_by_lebel['pass_gen_type']=='manual'){ ?>    
                    <div class="mb-3">
                        <label for="password-field" class="form-label">Password</label>
                        <div class="show_password">
                             <input type="password" class="form-control no_space" id="password" name="password" placeholder="password" data-response="password_res"  value="<?php echo set_value('password');?>" />
                           <!-- <i class="fas fa-eye toggle-password"></i>-->
                           <span class="text-danger" id="password_res"><?php echo form_error('password');?></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="con_password" class="form-label">Confirm Password</label>
                       <input type="password" class="form-control no_space" id="confirm_password" name="confirm_password" placeholder="Confirm password"  data-response="confirm_password_res" value="<?php echo set_value('confirm_password');?>" />
                       <span class="text-danger" id="confirm_password_res"><?php echo form_error('confirm_password');?></span>
                    </div>
                    <?php } ?>
                    <button type="submit" class="btn btn-primary" name="register">Register Now!</button>
                    <div class="form_footer">
                        <!-- <span>OR</span>
                        <div class="social_container d-flex align-items-center">
                            <div class="facebook">
                                <a href="#" class="para d-flex align-items-center justify-content-evenly"><img src="assets/images/contact/facebook.png" alt="Sign Up With Facebook"> FACEBOOK</a>
                            </div>
                            <div class="google">
                                <a href="#" class="para d-flex align-items-center justify-content-evenly"><img src="assets/images/contact/google.png" alt="Sign Up With Google"> GOOGLE</a>
                            </div>
                        </div> -->
                        <p class="para">Already have an account. <a href="<?= base_url('login');?>">Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--====sign up section end====-->
