
<style>

.card.card-body.card-bg-1.user_card_body span {
    color: #fff;
    font-weight: 500;
}

.card.card-body.card-bg-1.user_card_body label {
    color: #fff;
    font-size: 14px;
}

input.user_btn_button.btn-remove {
    background: #d7a31f;
    color: #fff;
    border: none;
    padding: 6px 10px;
    border-radius: 6px;
}

.card.card-body.card-bg-1.user_card_body {
  
    background: linear-gradient(180deg,#04083F 0%,rgba(0,0,28,0.7) 100%);
    border: 3px solid #D7A31F;
}

</style>
    <!-- Banner Section Starts Here -->
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">Withdrawal</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <li><a href="<?= base_url();?>index">Home</a>//</li>
                   
                </ul>
            </div>
        </div>
        <div class="shapes">
            <img src="<?= $panel_url;?>assets/images/banner/inner-bg.png" alt="banner" class="shape shape1">
            <img src="<?= $panel_url;?>assets/images/banner/inner-thumb.png" alt="banner" class="shape shape2 d-none d-lg-block">
        </div>
    </div>
    <!-- Banner Section Ends Here -->


  
 <!-- Transection Section Starts Here -->
 <section class="transection-section section-bg padding-top padding-bottom">
        <div class="container">
            <!-- <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="section__header max-p text-center">
                        <h2 class="section__header-title">Latest Deposit & Withdraw </h2>
                      
                    </div>
                </div>
            </div> -->
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <!-- <ul class="transection__tab__menu nav-tabs nav border-0 justify-content-center">
                        <li><a data-bs-toggle="tab" href="#deposit" class="cmn--btn2 active">Last Deposit</a></li>
                        <li><a data-bs-toggle="tab" href="#widthdraw" class="cmn--btn2">Last Widthdraw</a></li>
                    </ul> -->
                    <div class="tab-content">
                        <div class="tab-pane show fade active" id="deposit">
                       
<div class="row">
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


    
       <?php
       $days_allowed=$this->conn->setting('wd_days');
       if($days_allowed){
            $daysjson_decode=json_decode($days_allowed);
            if(in_array(date('l'),$daysjson_decode)){
            $wd_start_time=$this->conn->setting('wd_start_time');
            $str_time=date('H:i:s',strtotime($wd_start_time));
            $wd_end_time=$this->conn->setting('wd_end_time');
            $end_time=date('H:i:s',strtotime($wd_end_time));
            $nw_tm=date('H:i:s');
            if($nw_tm>=$str_time && $nw_tm<=$end_time){
            ?>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card card-body  card-bg-1 user_card_body">
                        <form action="" method="post">

                        <?php
                        $userid=$this->session->userdata('user_id');
                        $currency=$this->conn->company_info('currency');
                        $available_wallets=$this->conn->setting('withdrawal_wallets');
                        
                        if($available_wallets){
                            $useable_wallet=json_decode($available_wallets);
                        
                            if(count((array)$useable_wallet)>1){
                                foreach($useable_wallet as $wlt_key=>$wlt_name){
                                    $balance = $this->update_ob->wallet($userid,$wlt_key);
                                    echo "$wlt_name : $currency $balance <br>";                           
                                   
                                }
                                ?>
                                <div class="form-group row">
                                <label for="input-1" class="col-sm-2 col-form-label">Select Wallet*</label>
                                <div class="col-sm-10">
                                <select name="selected_wallet" id="" class="form-control">
                                    <option value="">Select Wallet</option>
                                    <?php
                                    foreach($useable_wallet as $wlt_key=>$wlt_name){
                                        ?>
                                        <option value="<?= $wlt_key;?>"><?= $wlt_name;?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                </div>
                                </div>
                                <?php
                            }else{
                                foreach($useable_wallet as $wlt_key=>$wlt_name){
                                    $balance = $this->update_ob->wallet($userid,$wlt_key);
                                    echo "<span class=''>$wlt_name : $currency $balance</span>";
                                    ?><input type="hidden" name="selected_wallet" value="<?= $wlt_key;?>"><?php
                                }
                            }
                        }
                        ?>
                        <?php
                          /*$account_number=$this->conn->runQuery('account_no','user_accounts',"status=1 and u_code='$userid'");
                       
                        ?>
                
                       <?php 
                      $with_drawal_mode=$this->conn->setting('withdrawals_mode')=='in_cripto';
                       if($with_drawal_mode){
                       
                       ?>
                       <span class=" " ></span>
                             <div class="form-group row">
                                <label for="input-1" class="col-sm-2 col-form-label">Crypto*</label>
                                <div class="col-sm-10">
                                <select name="selected_address" id="selected_address" class="form-control selected_cripto" data-response="cipto_res" required> 
                                    <option value="">Select</option> 
                                    <option value="TRX">TRON</option> 
                                    <option value="BTC">BTC</option>
                                    <option value="ETH">ETH</option>
                                   
                                </select>
                                 <span class=" " id="cipto_res"><?php echo form_error('selected_address');?></span>
                                </div>
                                
                                </div>
                                
                           <?php 

                            }
                             
                          $with_drawal_mode=$this->conn->setting('withdrawals_mode')=='in_bank';
                          if($with_drawal_mode){
                            ?>
                            &nbsp; &nbsp; &nbsp; &nbsp;<span class=" " id="">Your Amount will be paid in this Account no.:<?=  $account_number[0]->account_no; ?></span>
                            <?php
                            
                             }*/  
                        ?>
                            
                            <div class="form-group">
                            <label for="input-1" class="">Amount*</label>
                             
                            <input type="number" name="amount" id="amount" value="<?= set_value('amount');?>" class="form-control" placeholder="Enter Amount" aria-describedby="helpId">
                            <span class="text-danger"><?= form_error('amount');?></span>  
                             
                            </div>
                            
                            <?php
                if($profile_edited!='readonly'){
                    $withdrawal_with_otp=$this->conn->setting('withdrawal_with_otp');
                    if($withdrawal_with_otp=='yes'){
                      $display=(isset($_SESSION['otp']) ? 'block':'none');
                      ?>
                      <button type="button" data-response_area="action_areap" class="user_btn_button send_otp_withdrawal" >Send OTP</button>
                      
                      <div id="action_areap" style="display:<?= $display;?>"> 
                        <div class="form-group">
                          <label for="">Enter OTP </label>
                          <input type="text" name="otp_input1" id="otp_input1" value="<?= set_value('otp_input1');?>" class="form-control user_input_text" placeholder="Enter OTP" aria-describedby="helpId">
                          <span class=" " ><?= form_error('otp_input1');?></span> 
                        </div> 
                               
                        <div class="user_form_row_data  ">
                        <div class="user_submit_button mb-2 mt-2">
                             <input type="submit" class="user_btn_button btn-remove" name="withdrawal_btn"  value="Withdraw"  onclick="return confirm('Are you sure? you wants to Submit.')" >
                           
                        </div>
                        
                    </div>
                       
                      </div>
                      <?php
                    }else{
                      ?>
                            
                        <div class="user_form_row_data  ">
                    <div class="user_submit_button mb-2 mt-2">
                         <input type="submit" class="user_btn_button btn-remove" name="withdrawal_btn"  value="Withdraw"  onclick="return confirm('Are you sure? you wants to Submit.')" >
                       
                    </div>
                    
                </div>
                       
                      <?php
                    } 
              }
              
                
                ?>

                     
                        </form>
                      
                        
                    </div>
                   

                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 font_color1">
                    <div class="user_main_card mb-3">
                    <?php
                         //   $this->load->view($panel_directory.'/pages/payment_section/my_accounts');
                        ?>
                </div>
                  </div>
                <?php
                      
            }
            }
       }
       ?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 font_color1">
    <div class="user_main_card mb-3">
        <p class="text-white">  <?= $this->conn->setting('wd_conditions');?></p>
    </div>
  </div>

                          
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    
    <!-- Transection Section Ends Here -->


    