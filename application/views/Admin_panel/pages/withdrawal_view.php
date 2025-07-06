<?php
error_reporting(0);
$withdrawal_details=$this->conn->runQuery('*','transaction',"id='$wd_id' and status=0");
if(!$withdrawal_details){
    redirect($admin_path.'withdrawal/pending');
}
$t_data=$withdrawal_details[0];


$company_payment_methods=$this->conn->runQuery('*','company_payment_methods',"status='1'");
                            
    $fields=array();
    if($company_payment_methods){
        foreach($company_payment_methods as $payment_method_detais){
            $fields[$payment_method_detais->unique_name]=json_decode($payment_method_detais->fields_required,true);
        }
    }
?>
<div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">  Withdrwal Details </h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $admin_path.'dashboard';?>">home</a></li>            
            <li class="breadcrumb-item"><a href="#"> Withdrwals</a></li>            
            <li class="breadcrumb-item"><a href="#"> Pending</a></li>            
            <li class="breadcrumb-item active" aria-current="page">  Withdrwal Detail </li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       
     </div>
</div>
<h6 class="text-uppercase"> Withdrwal Detail</h6>
<hr>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
       

<div class="table-responsive">
<table class="table table-hover">
        <?php
          $tx_profile=$this->profile->profile_info($t_data->u_code);
          $user_id=$t_data->u_code;
          $bank_details=json_decode($t_data->bank_details,true); 
        
        ?>
            <tr>               
                <th> User</th><td>:</td><td><?= $tx_profile->name.'( '.$tx_profile->username.' )';?></td>
            </tr>
            <tr>
                <th>Amount</th><td>:</td><td><?= $t_data->amount;?></td>
            </tr>
            <tr> 
                <th>Account Details</th><td>:</td><td>
                <?= $tx_profile->withdraw_address;?>
                </td>               
            </tr>
            <tr>
                
                
                <th>Status </th><td>:</td><td><span class="badge badge-warning badge-sm"><?= $t_data->status == 1 ? 'Approved' : ($t_data->status == 2 ? 'Rejected' : 'Pending'); ?></span></td>


                </tr>
            <tr>
                <th>Date </th><td>:</td><td><?= $t_data->date;?></td>  
                 
            </tr>
         
        
    </table>
    
</div>



   
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <form action="" method="post">
            <div class="form-group">
              <label for="">Reason (Give Reason on cancellation)</label>
              <textarea name="reason" id="" class="form-control"></textarea>
              <small class="text-muted"><?= form_error('reason');?></small>
            </div>
            <div class="form-group">  
        <button type="submit" name="approve_btn" class="btn btn-success btn-remove">Approve</button>
        <button type="submit" name="cancel_btn" class="btn btn-danger btn-remove">Cancel</button>
            </div>
    </form>
    </div>
</div>
