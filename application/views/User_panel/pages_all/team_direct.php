

<div class="container pages">
    <br> 
<div class="row pt-2 pb-2">
        <div class="col-sm-12">
		   
		    <ol class="breadcrumb ml-3 mr-3">
            <li class="breadcrumb-item"><a href="<?= $panel_path.'dashboard';?>">home</a></li>            
            <li class="breadcrumb-item"><a href="#">Team</a></li>            
            <li class="breadcrumb-item active" aria-current="page"> Direct Team</li>
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
    
        <div class="">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card card-bg-1">
                <form action="<?= $panel_path.'team/team-direct'?>" method="get">
                     <div class="form-inline ml-4 mr-4">
                                             
                            <input type="text" Placeholder="Enter Name" name="name" class="input_user_panel" value='<?= isset($_REQUEST['name']) && $_REQUEST['name']!='' ? $_REQUEST['name']:'';?>' />                       
                        
                                             
                            <input type="text" Placeholder="Enter Username" name="username" class="input_user_panel" value='<?= isset($_REQUEST['username']) && $_REQUEST['username']!='' ? $_REQUEST['username']:'';?>' />                      
                        
                          
                            
                            <input type="date" class="input_user_panel"  Placeholder="From"  name="start_date" value="<?= (isset($_REQUEST['start_date']) ? $_REQUEST['start_date']:''); ?>"/>
                            
                            <span class="input_user_panel">to</span>
                            
                            <input type="date" class="input_user_panel"  Placeholder="End date"  name="end_date" value="<?= (isset($_REQUEST['end_date']) ? $_REQUEST['end_date']:''); ?>" />
                            
                             <select name="limit" class="select_user_panel">
                             <option value="20" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==20 ? 'selected':'';?> >20</option>
                             <option value="50" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==50 ? 'selected':'';?> >50</option>
                             <option value="100" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==100 ? 'selected':'';?> >100</option>
                             <option value="200" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==200 ? 'selected':'';?> >200</option>
                         </select>&nbsp;
                      <input type="submit" name="submit" class="reset_user_panel_button " value="Filter" />&nbsp;
                   <a href="<?= $panel_path.'team/team-direct'?>" class="reset_user_panel_button" > Reset </a>
                    </div>
                </form>
                </div>
                <br>
         <div class="card card-body card-bg-1">       
        <div class="table-responsive">
            <table class="<?= $this->conn->setting('table_classes'); ?>">
                <thead>
                    <tr>
                        
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Join Date</th>
                        <th>Active Status</th>
                        <th>Package</th>
                       <?php $plan_ty=$this->conn->setting('reg_type'); 
                         if($plan_ty=='binary'){
                        ?>
                        <th>Current Business</th>
                        <th>Previous Business</th>
                        <th>Position</th>
                        <?php } ?>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($table_data){            
                    foreach($table_data as $t_data){
                        $sr_no++;
                        
                        $gen_team=$this->team->my_generation_with_personal($t_data['id']);
                         
                    ?>
                    <tr>
                        <td><?=  $sr_no;?></td>
                        <td><?= $t_data['name'];?></td>
                        <td><?= $t_data['username'];?></td>
                        <td><?= $t_data['email'];?></td>
                        <td><?= $t_data['mobile'];?></td>               
                        <td><?= $t_data['added_on'];?></td>               
                        <td><?php
                            if($t_data['active_status']==1){
                                echo "Active<br>";
                                echo $t_data['active_date'];
                            }else{
                                echo "Inactive";
                            }
                        ?></td>  
                        <td><?= $t_data['active_status']==1 ? $this->business->package($t_data['id']):0;?></td> 
                        <?php $plan_ty=$this->conn->setting('reg_type'); 
                         if($plan_ty=='binary'){
                        ?>
                        <td><?= $t_data['active_status']==1 ? $this->business->current_session_bv($gen_team):0;?></td> 
                        <td><?= $t_data['active_status']==1 ? $this->business->previous_bv($gen_team):0;?></td> 
                        <td><?= $t_data['position']==1 ? 'Left':'Right';?></td> 
                        <?php } ?>
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