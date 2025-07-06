<?php 
$profile=$this->session->userdata("profile"); 
$user_id=$this->session->userdata("user_id"); 
$currency = $this->conn->company_info('currency');
if($_GET['lvl']){
$lvl=$_GET['lvl'];
}
?>

<div id="content" class="app-content">
        <div class="col-xl-12">
            <div class="user_image_desc my-3">
                                    <a class="btn btn-success" href="<?= $panel_path . 'team/team-generation'; ?>">Go to My Team</a>
                                </div>
            <div class="card">
                
                    <div class="card-body" >
                        <h3 style="font-size:29px !important; text-align:center;"> level <?= $lvl;?></h3>
                        <div class="table-responsive">
                            <table class="table table-nowrap table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>Name </th>
                                    <th>Username </th>
                                    <th>Status </th>
                                    <th>Total Staking</th>
                                    <th>Sponsor</th>
                                     
                                </tr>
                                    <?php 
                                    $user_id=$this->session->userdata("user_id"); 
                                    $team_details=$this->team->my_level_team($user_id);
                                    $team_det=$team_details[$lvl];
                                    
                                    
                                    $all_userss=$team_details[$lvl];
                                    if($all_userss){
                                        $sr=1;
                                        foreach($all_userss as $all_userss1){
                                         $user_info=$all_userss1;      
                                        
                                         $profile = $this->profile->profile_info($all_userss1,'name,username,active_status,active_date');
                                         $sp_profile = $this->profile->sponsor_info($all_userss1,'id,username');
                                         $sp=$sp_profile->id;
                                         $sp_info=$this->profile->profile_info($sp,'name,username');
                                         $active_date = $profile->active_date;
                                    ?>
                                        <tr>
                                            <td><?= $sr;?></td>
                                            <td><?= $profile->name; ?> </td>
                                            <td><?= $profile->username; ?> </td>
                                            <td><?= $profile->active_status==1 ? "Active (".$profile->active_date.")" : "Inactive"; ?> </td>
                                            <td><?= $currency;?><?= $this->business->package($all_userss1);?></td>
                                            <td><?= $sp_info->username; ?>(<?= $sp_info->name; ?>) </td>
                                        </tr>
                                    <?php $sr++ ;
                                            
                                        } 
                                    }
                                    ?>   
                            </thead>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
