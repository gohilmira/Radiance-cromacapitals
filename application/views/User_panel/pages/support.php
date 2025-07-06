 
<style>
    option{
        background-color: #283948;
    }
</style>
<div id="content" class="app-content">

      <!-- Page header -->
      <div class="page-header">
         <div class="page-header-content d-lg-flex">
            <div class="d-flex">
               <h4 class="page-title mb-4">
                  Support
               </h4>

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
            <form action="#" method="get">
               <div class="col-12 mb-4">
                  <div class="card card-body">
                     <div class="support_tcket_data">
                        <div class="row">

                           <div class="col-lg-6 col-md-12 col-sm-12">
                              <div class="ticket_data_detail">
                                 <div class="form-group">
                                    <label class="form-label">Ticket ID</label>

                                    <input type="text" placeholder="Ticket id" name="ticket" class="form-control" value='<?= isset($_REQUEST['name']) && $_REQUEST['name'] != '' ? $_REQUEST['name'] : ''; ?>'>
                                 </div>
                              </div>
                           </div>

                           <div class=" col-lg-6 col-md-12 col-sm-12">
                              <div class="ticket_data_detail">
                                 <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select class="form-control" name="status">
                                       <option value="">Select Status</option>
                                       <option value="0" <?= isset($_REQUEST['status']) && $_REQUEST['status'] == '0' ? 'selected' : ''; ?>>Not Replied</option>
                                       <option value="1" <?= isset($_REQUEST['status']) && $_REQUEST['status'] == '1' ? 'selected' : ''; ?>>Replied</option>

                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row pt-3">
                           <div class="col-12">
                              <div class="tickets_buttons email_buttons">
                                 <button type="submit" name="submit" class="btn btn-success">search</button>
                                 <a href="<?= $panel_path . 'support' ?>" class="btn btn-danger"> Reset </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">

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
               $user_id = $this->session->userdata('user_id');
               $profile = $this->profile->profile_info($user_id);

               $support = $this->conn->runQuery('COUNT(id) as ttl', 'support', "u_code='$user_id'")[0]->ttl;
               $support_not_replied = $this->conn->runQuery('COUNT(id) as ttl', 'support', "u_code='$user_id' and status='0'")[0]->ttl;
               $support_replied = $this->conn->runQuery('COUNT(id) as ttl', 'support', "u_code='$user_id' and status='1'")[0]->ttl;


               ?>
               <div class="support_page_new_design">
                  <div class="card card-body">
                     <div class="support_datail">
                        <h4>support detail</h4>
                        <ul class="ps-0">

                           <li>
                              Not Replied inquiry
                              <span class="red_color"><?= ($support_not_replied) ? ($support_not_replied) : 0; ?></span>
                           </li>
                           <li>
                              Replied inquiry
                              <span class="green_color"><?= ($support_replied) ? ($support_replied) : 0; ?></span>
                           </li>
                           <li>
                              Total inquiry
                              <span class="green_color"><?= ($support) ? ($support) : 0; ?></span>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="card card-body my-4">
                     <div class="urgent_email">
                        <div class="urgent_inner_content">
                           <h4>Urgent inquiry Information</h4>
                           <ul class="ps-0">
                              <li>Name: <?= $profile->name; ?></li>
                              <li>Email: <?= $profile->email; ?></li>
                              <li>Phone: <?= $profile->mobile; ?></li>
                           </ul>
                        </div>

                     </div>
                  </div>
                  <div class="card card-body">
                     <div class="recent_email_inquiry">
                        <h4>Latest ticket</h4>
                        <ul>
                           <?php
                           $support_latest = $this->conn->runQuery('*', 'support', "u_code='$user_id' order by id DESC limit 5");
                           if ($support_latest) {
                              foreach ($support_latest as $support) {
                           ?>
                                 <li>
                                    <div class="email_inquiry">
                                       <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>

                                    <div class="email_inquiry_text">
                                       <h6><?= $support->ticket; ?></h6>
                                       <p><?= $support->timestamp; ?></p>
                                       <p><?= $support->message; ?></p>
                                    </div>

                                 </li>
                           <?php
                              }
                           }
                           ?>
                        </ul>
                     </div>
                  </div>
               </div>

            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
               <div class=" ">
                  <div class="card card-body">
                     <h5 class="mb-2 fs-4">NEW SUPPORT TICKET</h5>
                     <p>Would you like to speak to one of our financial advisers over the phone?
                        Just submit your details and we'll be in touch shortly. You can also email us if you would prefer.</p>
                  </div>

                  <div class="collapse show">
                     <div class="card card-body">
                        <form action="" method="post">
                           <div class="row">
                              <div class="col-12">
                                 <div class="form-group">
                                    <label for="exampleInputname">name</label>
                                    <input type="text" class="form-control" id="exampleInputname" placeholder="demo" value="<?= $this->session->userdata('profile')->name; ?>" readonly>
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputname">Email</label>
                                    <input type="email" id="" class="form-control " value="companyname@gmail.com" value="<?= $this->session->userdata('profile')->email; ?>" readonly>
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputname">Description</label>
                                    <textarea required="" class="form-control" rows="4" name="description"></textarea>
                                 </div>
                                 <br>
                                 <div class="email_buttons">

                                    <button type="submit" name="send" class="btn btn-success">Send</button>

                                    <a href="<?= $panel_path . 'support' ?>" class="reset_cancel btn btn-danger"> Reset </a>
                                 </div>
                              </div>
                           </div>
                        </form>

                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                     <div class="card card-body">
                        <div class="table-responsive">
                           <table class="table">
                              <tbody>
                                 <tr>
                                    <th>Ticket Id</th>
                                    <th>Description</th>
                                    <th>Create Date</th>
                                    <th>Status</th>
                                    <th>Reply</th>
                                 </tr>
                                 <?php
                                 $user = $this->session->userdata('profile');
                                 if ($table_data) {
                                    foreach ($table_data as $t_data) {
                                       $sr_no++;
                                 ?>
                                       <tr>
                                          <td><?= $t_data['ticket']; ?></td>
                                          <td><?= $t_data['message']; ?></td>
                                          <td><?= $t_data['updated_on']; ?></td>
                                          <td><?php
                                                $rst = $t_data['reply_status'];
                                                if ($rst == 0) {
                                                ?>
                                                <button class="btn btn-danger">Not Replied</button>
                                             <?php
                                                } else {
                                             ?>
                                                <button class="btn btn-success">Replied</button>
                                             <?php
                                                }
                                             ?></th>
                                          <td><?= $t_data['reply']; ?></td>
                                       </tr>
                                 <?php
                                    }
                                 }
                                 ?>

                              </tbody>

                           </table>
                        </div>
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