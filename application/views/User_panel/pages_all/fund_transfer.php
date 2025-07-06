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
                <li class="breadcrumb-item active" aria-current="page"> Fund Transfer</li>
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
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="card card-body card-bg-1">
        

        <?php
        echo form_open($panel_path.'fund/fund-transfer');
        
        $userid=$this->session->userdata('user_id');
        $currency=$this->conn->company_info('currency');
        $available_wallets=$this->conn->setting('transfer_wallets');
        
        if($available_wallets){
            $useable_wallet=json_decode($available_wallets);
           
            if(count((array)$useable_wallet)>1){
                foreach($useable_wallet as $wlt_key=>$wlt_name){
                    $balance = $this->update_ob->wallet($userid,$wlt_key);
                    echo "<p class='text-dark'>$wlt_name : $currency</p> round($balance) <br>";                           
                   
                }

                ?>
                 
                <div class="form-group">
                <label for="" class='text-dark'>Select Wallet</label>
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
                <?php
            }else{
                foreach($useable_wallet as $wlt_key=>$wlt_name){
                    $balance = $this->update_ob->wallet($userid,$wlt_key);
                    echo "<span class='text-dark'>$wlt_name : $currency $balance</span>";
                    ?><input type="hidden" name="selected_wallet" value="<?= $wlt_key;?>"><?php
                }
            }
        }
        ?>
        <span class=" " ><?= form_error('selected_wallet');?></span>
            <div class="form-group">
              <label for="" class="text-dark ">Username</label>
              <input type="text" name="tx_username" value="<?= set_value('tx_username');?>" data-response="username_res" class="form-control check_username_exist"  placeholder="Enter Username" aria-describedby="helpId"> 
              <span class="text-dark " id="username_res"><?= form_error('tx_username');?></span>             
            </div>
            <div class="form-group">
              <label for="" class="text-dark ">Enter Amount</label>
              <input type="number" name="amount" id="amount" value="<?= set_value('amount');?>" class="form-control" placeholder="Enter Amount" aria-describedby="helpId">
              <span class="text-dark "><?= form_error('amount');?></span>  
            </div>           

            <button type="submit" class="btn btne btn-remove" name="transfer_btn" >Transfer</button>
        </form>
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

