<?php
error_reporting(0);
?>

<div id="content" class="app-content">


  <!-- start page title -->

  <!-- end page title -->

  <div class="row">
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
    <div class="col-xl-6">
      <!-- end card -->


      <div class="card">
        <div class="card-body">
          <?php
          $userid = $this->session->userdata('user_id');
          $available_pins = $this->conn->runQuery('count(pin) as cnt', 'epins', "use_status=0 and u_code='$userid'");
          $cnt_pins = ($available_pins ? $available_pins[0]->cnt : 0);
          ?>

          <div class="pin_top_page_content">

            <?php
            if ($this->conn->setting('topup_type') == 'pin') {
              ?>
              <h5>Pin Available</h5>
              <span id="total_pins" class="text_span"><i class="fa fa-thumb-tack" aria-hidden="true"></i>&nbsp;
                <?= $cnt_pins; ?>
              </span>
            <?php } ?>
          </div>
          <form action="" method="post">
            <?php
            $profile = $this->session->userdata("profile");
            $currency = $this->conn->company_info('currency');
            if ($this->conn->setting('topup_type') == 'amount') {


              $available_wallets = $this->conn->setting('invest_wallets');

              if ($available_wallets) {
                $useable_wallet = json_decode($available_wallets);

                if (count((array) $useable_wallet) > 1) {


                  foreach ($useable_wallet as $wlt_key => $wlt_name) {
                    $balance = round($this->update_ob->wallet($userid, $wlt_key), 2);
                    echo "$wlt_name : $currency $balance <br>";
                  }

                  ?>
                  <div class="form-group">
                    <label for="">Select Wallet</label>
                    <select name="selected_wallet" id="" class="form-control">
                      <option value="">Select Wallet</option>
                      <?php
                      foreach ($useable_wallet as $wlt_key => $wlt_name) {
                        ?>
                        <option value="<?= $wlt_key; ?>">
                          <?= $wlt_name; ?>
                        </option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                  <?php
                } else {
                  foreach ($useable_wallet as $wlt_key => $wlt_name) {
                    $balance = round($this->update_ob->wallet($userid, $wlt_key), 2);
                    echo "<span id='wallet' >$wlt_name : $currency $balance</span>";

                    ?><input type="hidden" name="selected_wallet" value="<?= $wlt_key; ?>">
                    <?php
                  }
                }
              }
            }
            ?>

            <div class="row mb-4">
              <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">User ID <b
                  class="text-danger">*</b></label>
              <div class="col-sm-9">
                <input type="text" name="tx_username" value="<?= $profile->username; ?>" data-response="username_res"
                  class="form-control check_username_exist" placeholder="Enter User ID" aria-describedby="helpId"
                  readonly>
                <span class="" id="username_res"></span>
                <span class="text-danger" id="username_res">
                  <?= form_error('tx_username'); ?>
                </span>
              </div>
            </div>
            <div class="row mb-4">
              <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Select Package <b
                  class="text-danger">*</b></label>
              <div class="col-sm-9">
                <select id="selected_pin" class="form-select selected_pins" name="selected_pin"
                  data-response="total_pins" required="">
                  <option selected="">Select Package</option>
                  <?php
                  $all_pin = $this->conn->runQuery("*", 'pin_details', "status=1");
                  if ($all_pin) {
                    foreach ($all_pin as $pindetails) {
                      ?>
                      <option value="<?= $pindetails->pin_type; ?>">
                        <?= $pindetails->pin_type; ?> 
                      </option>
                      <?php
                    }
                  }
                  ?>
                </select>
                <span class="text-danger">
                  <?= form_error('selected_pin'); ?>
                </span>
              </div>
            </div>


            <!-- <input type="hidden" name="selected_pin" value="Bluemoon"> -->

            <div class="row mb-4">
              <label for="horizontal-password-input" class="col-sm-3 col-form-label">Amount <b
                  class="text-danger">*</b></label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="horizontal-password-input" placeholder="Enter Amount"
                  value="<?= set_value('amount'); ?>" name="amount">
                <span class="text-danger">
                  <?= form_error('amount'); ?>
                </span>
              </div>
            </div>

            <?php
            if ($profile_edited != 'readonly') {
              $invest_toup_with_otp = $this->conn->setting('invest_toup_with_otp');
              if ($invest_toup_with_otp == 'yes') {
                $display = (isset($_SESSION['otp']) ? 'block' : 'none');
                ?>
                <button type="button" data-response_area="action_areap" class="user_btn_button send_otp">Send OTP</button>

                <div id="action_areap" style="display:<?= $display; ?>">
                  <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">Enter Otp*</label>
                    <div class="col-sm-10">
                      <input type="text" name="otp_input1" id="otp_input1" value="<?= set_value('otp_input1'); ?>"
                        class="form-control user_input_text" placeholder="Enter OTP" aria-describedby="helpId">
                      <span class=" ">
                        <?= form_error('otp_input1'); ?>
                      </span>
                    </div>

                  </div>

                  <input type="submit" class="user_btn_button btn-remove btn btn-primary" name="topup_btn"
                    onclick="return confirm('Are you sure? you wants to Submit.')" value="Topup">

                </div>
                <?php
              } else {
                ?>
                <div class="row justify-content-end">
                  <div class="col-sm-9">
                    <div>
                      <button type="submit" class="btn btn-primary w-md" name="topup_btn"
                        onclick="return confirm('Are you sure? you wants to Submit.')">Activate</button>
                    </div>
                  </div>
                </div>
                <?php
              }
            }
            ?>
          </form>
        </div>
      </div>
      <!-- end card -->
      <!-- end card -->
    </div>

    <div class="col-xl-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-4">STEPS FOR ACTIVATION</h4>
          <div class="table-responsive">
            <p><i class="fa-solid fa-check-to-slot me-2"></i>You Can Stake Minimum of $50</p>
            <p><i class="fa-solid fa-check-to-slot me-2" aria-hidden="true"></i> Enter Amount in $ to
              Activate</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end row -->

</div> <!-- container-fluid -->
</div>






<script>
  (function ($) {
    $(".btn-remove").click(function () {
      $(this).css("display", "none");
    });
  })(jQuery);
</script>