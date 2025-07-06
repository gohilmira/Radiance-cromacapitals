 <?php
   $profile = $this->session->userdata("profile");
   $user_id = $profile->id;
   ?>



<div id="content" class="app-content">

       <!-- Page header -->
       <div class="page-header">
          <div class="page-header-content d-lg-flex">
             <div class="d-flex">
                <h4 class="page-title mb-4">
                   Edit Profile
                </h4>

                <!-- <a href="#page_header"
								class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
								data-bs-toggle="collapse">
								<i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
							</a> -->
             </div>

             <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
                <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">

                </div>
             </div>
          </div>
       </div>
       <!-- /page header -->


       <!-- Content area -->
       <div class="content pt-0">

          <!-- Main charts -->

          <div class="row">
             <div class="col-lg-4">
                <div class="row">
                   <div class="clo-xl-12 my-2">
                      <div class="card card-body ">

                         <div class="d-flex">
                            <div class="m-auto">
                               <?php if ($profile->img != '') { ?>
                                  <img src="<?= base_url('images/users/') . $profile->img; ?>" class="img-fluid rounded-circle" alt="" style="width:25%;">

                               <?php } else { ?>
                                  <img style="width:25%;" src="<?= $this->conn->company_info('logo'); ?>" class="img-fluid rounded-circle" alt="">

                               <?php } ?>
                            </div>

                            <div>
                               <p><?= $profile->username; ?></p>
                               <h6><?= $profile->name; ?>, <?= $profile->country; ?></h6>
                            </div>
                         </div>

                      </div>
                   </div>
                </div>
             </div>
             
             
                  
                  
             <div class="col-xl-8 col-lg-12">
                <div class="basic-form">
                   <?php
                     $success['param'] = 'success';
                     $success['alert_class'] = 'alert-success';
                     $success['type'] = 'success';
                     $this->show->show_alert($success);
                     ?>
                   <?php
                     $erroralert['param'] = 'error';
                     $erroralert['alert_class'] = 'alert-danger';
                     $erroralert['type'] = 'error';
                     $this->show->show_alert($erroralert);
                     ?>
                   <div class="card card_ac">
                      <div class="card-header">
                         <h4 class="card-title">Edit Profile</h4>
                      </div>
                      <div class="card-body">

                         <form action="" method="post" enctype='multipart/form-data'>

                            <div class="row">

                               <div class="mb-3 col-md-6">
                                  <label class="form-label">User Name</label>
                                  <input type="text" class="form-control" id="exampleInputname" placeholder="" value="<?= $profile->username; ?>" readonly>
                               </div>
                               <div class="mb-3 col-md-6">
                                  <label class="form-label"> Name</label>
                                  <input type="text" class="form-control" id="exampleInputname" placeholder="Name" name="name" value="<?= $profile->name; ?>">
                               </div>
                               <div class="mb-3 col-md-12">

                                  <label class="form-label fs-4">Email</label>
                                  <input type="email" name="email" value="<?= $profile->email; ?>" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
                               </div>
                               
                               <div class="mb-3 col-md-12">

                                  <label class="form-label fs-4">Wallet Address</label>
                                  <input type="text" name="user_address" value="<?= $profile->user_address; ?>" class="form-control" id="exampleInputEmail1" placeholder="Wallet Address">
                               </div>

                               <div class="mb-3 col-md-12">
                                  <label class="form-label">Profile Pic</label>
                                  <input type="file" name="profile_pic" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
                                  <span class="text-danger"><?= (isset($upload_error) ? $upload_error : ''); ?></span>
                               </div>
                               <div class="mb-3 col-md-12">
                                  <label class="form-label">Contact Number</label>
                                  <input type="number" name="mobile" value="<?= $profile->mobile; ?>" class="form-control" id="exampleInputEmail1" placeholder="Contact Number">
                               </div>

                            </div>


                            <?php
                              //  if($profile_edited!='readonly'){
                              $edit_profile_with_otp = $this->conn->setting('edit_profile_with_otp');
                              if ($edit_profile_with_otp == 'yes') {
                                 $display = (isset($_SESSION['otp']) ? 'block' : 'none');
                              ?>
                               <button type="button" data-response_area="action_areap" class="user_btn_button send_otp_edit mb-3">Send OTP</button>

                               <div id="action_areap" style="display:<?= $display; ?>">
                                  <!--<p> Resend OTP in <span id="countdowntimer">30 </span> Seconds</p>-->
                                  <!-- <button type="button" data-response_area="action_areap" id="proceed" class="user_btn_button send_otp" >Re-Send OTP</button>-->

                                  <div class="col-sm-10 mb-3">
                                     <label for="">Enter OTP </label>
                                     <input type="text" name="otp_input1" id="otp_input1" value="<?= set_value('otp_input1'); ?>" class="btn btn-success" placeholder="Enter OTP" aria-describedby="helpId">
                                     <span class=" "><?= form_error('otp_input1'); ?></span>
                                  </div>
                                  <div class="col-sm-10 mb-3">
                                     <button type="submit" name="edit_btn" class="btn btn-success" style="margin-right: 5px;">Save</button>
                                     <a href="<?= $panel_path . 'profile/edit-profile'; ?>" class="cancel_data btn btn-danger"> Cancel</a>
                                  </div>
                               </div>
                            <?php
                              } else {
                              ?>
                               <div class="col-sm-10 mb-3">
                                  <button type="submit" name="edit_btn" class="btn btn-success" style="margin-right: 5px;">Save</button>
                                  <a href="<?= $panel_path . 'profile/edit-profile'; ?>" class="cancel_data btn btn-danger">Cancel</a>
                               </div>
                            <?php
                              }
                              //   }


                              ?>
                         </form>
                      </div>
                   </div>
                   
                   
                </div>
             </div>
          </div>
          
           <div class="col-lg-4">
                <div class="row">
                   <div class="clo-xl-12 my-2">
                      <div class="card card-body ">
                      <div class="card-header">
                         <h4 class="card-title">Edit Password</h4>
                      </div>
                     <div class="card-body">
               <form action="" method="post">
                     <div class="card_content_profile">
                       <div class="mb-3 col-md-10">
                           <label class="form-label">Old Password</label>
                           <input type="password" class="form-control" value="" name="old_password" Placeholder="old Password">
                           <span class="text-danger "><?php echo form_error('old_password'); ?></span>
                        </div>

                        <div class="mb-3 col-md-10">
                           <label class="form-label">New Password</label>
                           <input type="password" class="form-control" name="password" value="" Placeholder="New Password">
                           <span class="text-danger "><?php echo form_error('password'); ?></span>
                        </div>
                        <div class="mb-3 col-md-10">
                           <label class="form-label">Confirm Password</label>
                           <input type="password" class="form-control" name="confirm_password" value="" Placeholder="Confirm Password">
                           <span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
                        </div>
                        
                        <?php
                              //  if($profile_edited!='readonly'){
                              $edit_password_with_otp = $this->conn->setting('edit_password_with_otp');
                              if ($edit_password_with_otp == 'yes') {
                                 $display = (isset($_SESSION['otp']) ? 'block' : 'none');
                              ?>
                               <button type="button" data-response_area="action_areap" class="user_btn_button send_otp mb-3">Send OTP</button>

                               <div id="action_areap" style="display:<?= $display; ?>">
                                  <!--<p> Resend OTP in <span id="countdowntimer">30 </span> Seconds</p>-->
                                  <!-- <button type="button" data-response_area="action_areap" id="proceed" class="user_btn_button send_otp" >Re-Send OTP</button>-->

                                  <div class="col-sm-10 mb-3">
                                     <label for="">Enter OTP </label>
                                     <input type="text" name="otp_input1" id="otp_input1" value="<?= set_value('otp_input1'); ?>" class="btn btn-success" placeholder="Enter OTP" aria-describedby="helpId">
                                     <span class=" "><?= form_error('otp_input1'); ?></span>
                                  </div>
                                   <div class="col-sm-10">
                           <button type="submit" name="password_btn" class="btn btn-success">Updated</button>
                           <a href="<?= $panel_path . 'profile/edit-profile'; ?>" class="cancel_data btn btn-danger"> Cancel</a>
                        </div>
                               </div>
                            <?php
                              } else {
                              ?>
                              <div class="col-sm-10">
                           <button type="submit" name="password_btn" class="btn btn-success">Updated</button>
                           <a href="<?= $panel_path . 'profile/edit-profile'; ?>" class="cancel_data btn btn-danger"> Cancel</a>
                        </div>
                            <?php
                              }
                              //   }


                              ?>
                     
                     </div>
                  </form>
                </div>
              </div>
              </div>
              </div>
              </div>

          <!-- /main charts -->
       </div>
    </div>
 </div>
 <!-- /content area -->