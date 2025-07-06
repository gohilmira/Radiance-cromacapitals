<div class="container pages">

<div class="row pt-2 pb-2">
        <div class="col-sm-12">
		  
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $panel_path.'dashboard';?>">home</a></li>            
            <li class="breadcrumb-item"><a href="#">Team</a></li>            
            <li class="breadcrumb-item active" aria-current="page"> Left Team</li>
         </ol>
	   </div>
	    
</div>
 
<?php

             $likecondition=($this->session->userdata($search_string) ? $this->session->userdata($search_string):array());
             
             ?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <div class="card card-bg-1">
        <form action="<?= $panel_path.'team/team-left'?>" method="post">
             <div class="form-inline ml-4 mr-4">
                                       
                    <input type="text" Placeholder="Enter Name" name="<?= $search_string;?>[name]" class="input_user_panel" value='<?= (array_key_exists("name", $likecondition) ? $likecondition['name']:'');?>'>                       
                                       
                    <input type="text" Placeholder="Enter Username" name="<?= $search_string;?>[username]" class="input_user_panel" value='<?= (array_key_exists("username", $likecondition) ? $likecondition['username']:'');?>'>                   
                 
                  <select name="limit" class="select_user_panel">
                 <option value="20" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==20 ? 'selected':'';?> >20</option>
                 <option value="50" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==50 ? 'selected':'';?> >50</option>
                 <option value="100" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==100 ? 'selected':'';?> >100</option>
                 <option value="200" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==200 ? 'selected':'';?> >200</option>
             </select>&nbsp;
                 <input type="submit" name="submit" class="reset_user_panel_button" value="Filter" />
                <input type="submit" name="submit" class="reset_user_panel_button" value="Reset" />
            </div>
        </form>
         </div>
<br>
<div class="card card-body card-bg-1">     
<div class="table-responsive">
    <table class="<?= $this->conn->setting('table_classes'); ?>">
        <thead>
            <tr>
                <th>S No.</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>                
                <th>Join Date</th>
                <th>Active Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
        if($table_data){
            foreach($table_data as $t_data){
                $sr_no++;
            ?>
            <tr>
                <td><?= $sr_no;?></td>
                <td><?= $t_data['name'];?></td>
                <td><?= $t_data['username'];?></td>
                <td><?= $t_data['email'];?></td>                               
                <td><?= $t_data['added_on'];?></td>               
                <td><?php
                if($t_data['active_status']==1){
                    echo "Active<br>";
                    echo $t_data['active_date'];
                }else{
                    echo "Inactive";
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

    <?php 
    
    echo $this->pagination->create_links();?>
    </div>
</div>
</div>