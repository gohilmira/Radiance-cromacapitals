<div class="container pages">
<div class="row pt-2 pb-2">
        <div class="col-sm-12">
    	  <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $panel_path.'dashboard';?>">home</a></li>            
            <li class="breadcrumb-item"><a href="#">Fund Transfer</a></li>            
            <li class="breadcrumb-item active" aria-current="page">Fund Convert History</li>
          </ol>
	   </div>
	  
</div>

<?php
error_reporting(0);
if($this->session->has_userdata($search_parameter)){
	$get_data=$this->session->userdata($search_parameter);
	$likecondition = (array_key_exists($search_string,$get_data) ? $get_data[$search_string]:array());
	 
}else{
	$likecondition=array();
}
 ?>

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
                         <div class="detail_input_group">
                           <div class="input-group ">
                               <input name="name" type="text" id="" value='<?= isset($_REQUEST['name']) && $_REQUEST['name']!='' ? $_REQUEST['name']:'';?>' class="form-control user_input_text" placeholder="Search by Name">
                           </div>
                        </div>
                  
                    <div class="detail_input_group">
                      <div class="input-group ">
                               <input name="username" type="text" id="" value='<?= isset($_REQUEST['username']) && $_REQUEST['username']!='' ? $_REQUEST['username']:'';?>' class="form-control user_input_text" placeholder="Search by User ID">
                           </div>
                          
                     </div>
                    <!-- <div class="detail_input_group">
                        <div class="input-group ">
                               <input name="start_date" type="date" id="" class="form-control user_input_text" value="<?= (isset($_REQUEST['start_date']) ? $_REQUEST['start_date']:''); ?>" placeholder="From Registration Date">
                              
                           </div>
                     </div>
                     <div class="detail_input_group">
                        <div class="input-group ">
                               <input name="end_date" type="date" id="end_date" class="form-control user_input_text" value="<?= (isset($_REQUEST['end_date']) ? $_REQUEST['end_date']:''); ?>" placeholder="To Registration Date">
                               
                           </div>
                           
                     </div>-->
                     <!--<div class="detail_input_group">
                        <select name="limit" id="" class="form-control user_input_select">
                           <option selected="selected" value="0">--ALL--</option>
                           <option value="20" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==20 ? 'selected':'';?> >20</option>
                          <option value="50" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==50 ? 'selected':'';?> >50</option>
                          <option value="100" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==100 ? 'selected':'';?> >100</option>
                          <option value="200" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==200 ? 'selected':'';?> >200</option>
                       </select>
                     </div>-->
                    
                
                 <div class="user_form_row_data">
                   <div class="user_submit_button ">
                      
                       <input type="submit" name="submit" value="Filter" id="" class="user_btn_button">
                   </div>
                   <div class="user_submit_button">
                      <!-- <input type="submit" name="" value="Reset" id="" class="user_btn_button">-->
                       <a href="<?= $panel_path.'fund/convert-history'?>" class="user_btn_button" > Reset </a>
                       
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
 <div class="card card-body card-bg-1">
<div class="table-responsive">
    <table class="<?= $this->conn->setting('table_classes'); ?>">
        <thead>
            <tr>
                <th>Sr No.</th>
                <th>Tx user</th>
                <th>Tx Type</th>
                <th>Credit/Debit</th>
                <th>Balance</th>
                <th>Remark</th>
                <th>Date&Time</th>
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
                        $sr_no++;
                ?>
                <tr>
                    <td><?=  $sr_no;?></td>
                    <td><?= ($tx_profile ? $tx_profile->name:'');?></td>
                    <td><?= $t_data['tx_type'];?></td>               
                    <td><?= $t_data['debit_credit'];?></td> 
                    <td><?= $t_data['amount'];?></td>               
                    <td><?= $t_data['remark'];?></td> 
                    <td><?= $t_data['added_on'];?></td>   
                </tr>
                <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>


    <?php 
    
    echo $this->pagination->create_links();?>
    </div>
</div>
</div>
</div>