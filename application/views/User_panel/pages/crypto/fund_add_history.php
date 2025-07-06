<div class="container pages">
<div class="row pt-2 pb-2">
        <div class="col-sm-12">
		  
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $panel_path.'dashboard';?>">home</a></li>            
            <li class="breadcrumb-item"><a href="#">Add Fund History</a></li>            
            <!--<li class="breadcrumb-item active" aria-current="page">Generate Coupon History</li>-->
         </ol>
	   </div>
	  
</div>

<?php
if($this->session->has_userdata($search_parameter)){
	$get_data=$this->session->userdata($search_parameter);
	$likecondition = (array_key_exists($search_string,$get_data) ? $get_data[$search_string]:array());
	 
}else{
	$likecondition=array();
}
 ?>
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
            $this->show->show_alert($erroralert);?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
        
        <div class="user_main_card mb-3">
           
            <div class="user_card_body">
                 <h5 class="user_card_title_group"><i class="fa fa-filter"></i>Filter</h5>
                 <form action="" method="get">
                 <div class="user_form_row">
                     <div class="row">
                     <div class="col-12 mb-2">
                         <div class="data_detail_page_group">
                        <!-- <div class="detail_input_group">
                           <div class="input-group ">
                               <input name="name" type="text" id="" value='<?= isset($_REQUEST['name']) && $_REQUEST['name']!='' ? $_REQUEST['name']:'';?>' class="form-control user_input_text" placeholder="Search by Name">
                           </div>
                        </div>-->
                  
                    <div class="detail_input_group">
                      <div class="input-group ">
                               <input name="username" type="text" id="" value='<?= isset($_REQUEST['username']) && $_REQUEST['username']!='' ? $_REQUEST['username']:'';?>' class="form-control user_input_text" placeholder="Enter Tx User">
                           </div>
                          
                     </div>
                     <div class="detail_input_group">
                        <div class="input-group ">
                               <input name="start_date" type="date" id="" class="form-control user_input_text" value="<?= (isset($_REQUEST['start_date']) ? $_REQUEST['start_date']:''); ?>" placeholder="From Registration Date">
                              
                           </div>
                     </div>
                     <div class="detail_input_group">
                        <div class="input-group ">
                               <input name="end_date" type="date" id="end_date" class="form-control user_input_text" value="<?= (isset($_REQUEST['end_date']) ? $_REQUEST['end_date']:''); ?>" placeholder="To Registration Date">
                               
                           </div>
                           
                     </div>
                     <div class="detail_input_group">
                        <select name="limit" id="" class="form-control user_input_select">
                           <option selected="selected" value="0">--ALL--</option>
                           <option value="20" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==20 ? 'selected':'';?> >20</option>
                          <option value="50" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==50 ? 'selected':'';?> >50</option>
                          <option value="100" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==100 ? 'selected':'';?> >100</option>
                          <option value="200" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==200 ? 'selected':'';?> >200</option>
                       </select>
                     </div>
                    
                
                 <div class="user_form_row_data">
                   <div class="user_submit_button ">
                      
                       <input type="submit" name="submit" value="Filter" id="" class="user_btn_button">
                   </div>
                   <div class="user_submit_button">
                      <!-- <input type="submit" name="" value="Reset" id="" class="user_btn_button">-->
                       <a href="<?= $panel_path.'fund/add-fund-history'?>" class="user_btn_button" > Reset </a>
                       
                   </div>
                   </div>
               </div>
           </div>
            </div>
           </form>
            </div>
       </div>
       </div>
        <br>

   <div class="user_main_card mb-3">
       
            <div class="user_card_body ">
             <!-- <div class="reward_detail_page">
                    <div class="excel_button_user">
                        <button ><span> <i class="fa fa-file-excel-o" aria-hidden="true"></i>Excel Export</span></button>
                    </div>
                    <div class="serch_bar_ecxel">
                        <span>Search:</span>
                        <input type="search" class="form-control" placeholder="" aria-controls="responsive-table">
                        <select class="form-control d-inline ml-2" id="" style="width: 200px">
                            <option value="">-- Status Filter --</option>
                            <option value="pending">Pending</option>
                            <option value="approved">Approved</option>
                            <option value="rejected">Rejected</option>
                           
                        </select>
                    </div>
                </div>-->
                <div class="user_card_body">
                   <div class="user_table_data">
                        <table class="<?= $this->conn->setting('table_classes'); ?>">
        <thead>
            <tr>
                <th>Sr No.</th>
                 <th>Tx Id</th>
               
                <th>Request Amount</th>
             <!-- <th>Transaction Charge</th>-->
            <!--  <th>Paid Amount</th>-->
              <th>Credit Amount</th>
              
                <th>Status</th>
                <th>Payment Address</th>
                
                <th>Request Time</th>
              <th>Approve Time</th>
            </tr>
        </thead>
        <tbody>
            <?php

        if($table_data){
                foreach($table_data as $t_data){
    
                    if($t_data['tx_type']=='credit'){                    
                        $no_of_pins=$t_data['credit'];
                    }else{
                        $no_of_pins=$t_data['debit'];
                    }
    
                        if($t_data['tx_u_code']!=''){
                            $tx_profile=$this->profile->profile_info($t_data['tx_u_code']);
                        }else{
                            $tx_profile=$this->profile->profile_info($t_data['u_code']);
                        }
                          $tx_profile_use=$this->profile->profile_info($t_data['tx_u_code']);
                        $sr_no++;
                  
                  $ids=$t_data['cryp_paymentId'];
                ?>
                <tr>
                    <td><?=  $sr_no;?></td>
                    <td><?= $t_data['cryp_paymentId'];?></td>
                   
                    <td><?= $t_data['request_amount'];?></td>
                   <!-- <td><?= $t_data['tx_charge'];?></td>-->
                   <!--<td><?= $t_data['cryp_paymentAmount'];?></td>-->
                   <td><?= $t_data['amount'];?></td>
                     <td><?php $sts=$t_data['cryp_status'];
                     if($sts=="expired"){
                    ?>
                     <a class="btn btn-sm btn-info" href="<?= $panel_path.'crypto/add_fund_expire?id='.$ids;?>">Click To Review Transaction</a>             
                    
                    <?php
                     }else{
                     echo $sts; 
                     } ?>  
                     </td>
                      <td><?= $t_data['cryp_paymentWallet'];?></td>
                    <td><?= $t_data['date'];?></td> 
                    <td><?php 
                       if($sts=="paid"){
                       echo $t_data['updated_on'];
                       }
                      ?></td>   
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
 
    
    <?php 
    
    echo $this->pagination->create_links();?>
    
    
</div>
</div>
</div>