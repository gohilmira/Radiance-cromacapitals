<?php
error_reporting(0);
?>
<div id="content" class="app-content">
    <!-- <div class="row pt-2 pb-2">
      <div class="col-sm-12">

        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= $panel_path . 'dashboard'; ?>">home /</a></li>
          <li class="breadcrumb-item"><a href="">Invest /</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Topup</li>
        </ol>
      </div>

    </div> -->

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
    </head>

    <body>
      <div class="pin_topup_page">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12">
              <div class="card card-body">
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
                    <span id="total_pins" class="text_span"><i class="fa fa-thumb-tack" aria-hidden="true"></i>&nbsp; <?= $cnt_pins; ?></span>
                  <?php } ?>
                </div>
                <form action="" method="post">
                  <?php

                  $currency = $this->conn->company_info('currency');
                  if ($this->conn->setting('topup_type') == 'amount') {


                    $available_wallets = $this->conn->setting('invest_wallets');

                    if ($available_wallets) {
                      $useable_wallet = json_decode($available_wallets);

                      if (count((array)$useable_wallet) > 1) {


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
                              <option value="<?= $wlt_key; ?>"><?= $wlt_name; ?></option>
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

                        ?><input type="hidden" name="selected_wallet" value="<?= $wlt_key; ?>"><?php
                                                                                                        }
                                                                                                      }
                                                                                                    }
                                                                                                  }
                                                                                                          ?>
                  <span class="text-danger"><?= form_error('selected_wallet'); ?></span>

                  <div class="form-group">
                    <label>Username*</label>
                    <input type="text" name="tx_username" value="<?= set_value('tx_username'); ?>" data-response="username_res" class="form-control check_username_exist" placeholder="Enter Username" aria-describedby="helpId">
                    <span class="" id="username_res"></span>
                    <span class="text-danger" id="username_res"><?= form_error('tx_username'); ?></span>
                  </div>
                  <div class="form-group">
                    <label>Select Package*</label>
                    <select class="form-control selected_pins" name="selected_pin" id="selected_pin" data-response="total_pins" required="">
                      <option value="">Select Package</option>
                      <?php
                      $all_pin = $this->conn->runQuery("pin_rate,pin_type", 'pin_details', "status=1");
                      if ($all_pin) {
                        foreach ($all_pin as $pindetails) {
                      ?><option value="<?= $pindetails->pin_type; ?>"><?= $pindetails->pin_type; ?></option><?php
                                                                                                                  }
                                                                                                                }
                                                                                                                    ?>
                    </select>
                    <span class="text-danger"><?= form_error('selected_pin'); ?></span>
                  </div>
                  <div class="form-group">
                    <label>Amount*</label>
                    <input type="text" name="amount" value="<?= set_value('amount'); ?>" class="form-control" placeholder="Enter Amount" aria-describedby="helpId">
                    <span class="text-danger"><?= form_error('amount'); ?></span>
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
                            <input type="text" name="otp_input1" id="otp_input1" value="<?= set_value('otp_input1'); ?>" class="form-control user_input_text" placeholder="Enter OTP" aria-describedby="helpId">
                            <span class=" "><?= form_error('otp_input1'); ?></span>
                          </div>

                        </div>

                        <input type="submit" class="user_btn_button btn-remove" name="topup_btn" onclick="return confirm('Are you sure? you wants to Submit.')" value="Topup">

                      </div>
                    <?php
                    } else {
                    ?>

                      <input type="submit" class="user_btn_button btn-remove detail btn btn-success mt-1" name="topup_btn" onclick="return confirm('Are you sure? you wants to Submit.')" value="Topup">

                  <?php
                    }
                  }
                  ?>

                </form>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                <h4>steps for topup </h4>
                </div>
                <div class="card-body bg-secondary text-white">
                <p><i class="fa fa-check-square" aria-hidden="true"></i>You can topup any user id</p>
                <p><i class="fa fa-check-square" aria-hidden="true"></i> Enter username which you want to topup</p>
                <p><i class="fa fa-check-square" aria-hidden="true"></i> Select package from the drop down menu And then click on topup button.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
  </div>
</div>

<script>
  (function($) {
    $(".btn-remove").click(function() {
      $(this).css("display", "none");
    });
  })(jQuery);
</script>