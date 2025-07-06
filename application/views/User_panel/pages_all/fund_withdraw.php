<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<?php
$profile=$this->session->userdata("profile");


?>
<div class="container pages">
<div class="row pt-2 pb-2">
        <div class="col-sm-12">
		   
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">home</a></li>            
            <li class="breadcrumb-item"><a href="<?= $panel_path.'dashboard';?>">Fund</a></li>            
            <li class="breadcrumb-item active" aria-current="page"> Withdrawal</li>
         </ol>
	   </div>
	    
</div>

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
                    <div class="card card-body  card-bg-1">
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
                            <span class=""><?= form_error('amount');?></span>  
                             
                            </div>

                            <button type="submit" class="btn btne btn-remove" name="withdrawal_btn"  onclick="return confirm('Are you sure? you wants to Submit.')" >Withdraw</button>
                        </form>
                      
                        
                    </div>
                   

                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 font_color1">
                    <?php
                            $this->load->view($panel_directory.'/pages/payment_section/my_accounts');
                        ?>
                </div>
                <?php
                      
            }
            }
       }
       ?>
   
   <p class="font_color1">  <?= $this->conn->setting('wd_conditions');?></p>
    

</div>
</div>

<script>
   ( function($) {
  $(".btn-remove").click(function() {  
    $(this).css("display", "none");      
  });
} ) ( jQuery );
    </script>


 