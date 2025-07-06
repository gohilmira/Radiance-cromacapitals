<?php
$profile = $this->session->userdata("profile");
?>
<div id="content" class="app-content">



<style>
    option{
        background-color: #283948;
    }
</style>
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

    $userid = $this->session->userdata('user_id');
    ?>


    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="card card-body  card-bg">



          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Method</label>
              <select class="form-control select_address" name="address" id="address" data-response="payment_type" required>
                <option value="">Select Method</option>
                <?php $payment_method = $check = $this->conn->runQuery('*', 'payment_method', "status='1' and is_parent='1'");
                if ($payment_method) {
                  foreach ($payment_method as $payment_method1) {
                ?>
                    <option value="<?= $payment_method1->slug; ?>"><?= $payment_method1->name; ?></option>
                <?php

                  }
                }
                ?>
              </select>
            </div>


            <div class="form-group">
              <label for="">Payment Type</label>
              <select class="form-control payment_type" name="payment_type" id="payment_type" data-response="address_res" required>
                <option value="">Select</option>

              </select>
              <span class=" text-warning"><?= form_error('payment_type'); ?></span>
            </div>



            <div class="form-group">
              <label for="">Amount</label>
              <input type="number" name="amount" value="<?= set_value('amount'); ?>" class="form-control" placeholder="" aria-describedby="helpId">
              <span class=" text-warning"><?= form_error('amount'); ?></span>
            </div>

            <div class="form-group">
              <label for="">UTR Number</label>
              <input type="text" name="utr_number" id="utr_number" value="<?= set_value('amount'); ?>" class="form-control" placeholder="" aria-describedby="helpId">
              <span class="text-warning "><?= form_error('utr_number'); ?></span>
            </div>

            <div class="form-group">
              <label for="">Payment Slip</label>
              <input type="file" name="payment_slip" id="payment_slip" value="" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class=" text-warning  "><?= (isset($upload_error) ? $upload_error : ''); ?></small>
            </div>


            <br>
            <input type="submit" class="user_btn_button btn btn-success" name="request_btn" value="Save">


          </form>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">


        <div class="card">
          <div class="card-header">
            QR Code
          </div>
          <div class=" card-body">
            <img id="address_res" style="width:75%;" src=""><br>

            <b style="color:green" id="res_address"></b>

            <div class="input-group card-bg-2" id="address_div" style="display:none;">
              <input type="text" id="referral_address" class="form-control" value="">
              <div class="input-group-append">
                <div class="input-group-btn ml-2">
                  <button type="submit" class="btn btn-default" onclick="copyLink11('left')">
                    <i class="fa fa-copy" style="color: #D3B916; font-size: 18px;"></i>
                  </button>

                </div>
              </div>
            </div>
          </div>

          <!-- <div id="address_res" class=" card-body">          
         <img  style="width:100%;" src="<?= base_url() ?>/images/qr_code/btc_new.png">
          </div>
           <div id="address_res1" class=" card-body" style="display:none;"> 
         
            <img  style="width:100%;" src="<?= base_url() ?>/images/qr_code/eth_new.png">
            
          </div>-->
        </div>

      </div>
    </div>
  </div>
</div>
<script>
  function copyLink11(iid) {

    / Get the text field /
    var copyText = document.getElementById("referral_address");

    / Select the text field /
    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/

    / Copy the text inside the text field /
    document.execCommand("copy");

    / Alert the copied text /
    alert("Copied the text: " + copyText.value);
  }
</script>