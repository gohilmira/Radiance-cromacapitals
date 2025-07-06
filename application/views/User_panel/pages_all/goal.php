              <div class="container pages"> 
                        <div class="row pt-2 pb-2">
                            <div class="col-sm-12">
                                   
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a></li>            
                                    <li class="breadcrumb-item active" aria-current="page"> Goal</li>
                                </ol>
                            </div>
                          
                        </div>
                	<div class="card card-body card-bg-1">       
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
					<div class="col-md-12">

						<!-- Horizontal form -->
						<div class="panel">
							
	
		<div class="">
	   <div class="row">
	   <h4 class="mt-0 header-title">Goal</h4>
          <div class="table-responsive">
                                <table class="<?= $this->conn->setting('table_classes'); ?>">
                                    <thead>
                                    <tr>
                                       
                                        <th>Level</th>
                                        <th>My Team</th>
                                        <th>Level Wise No. of Team Requried</th>
                                        <th>Status</th>
										
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $all_team=array();
                                    $userid=$this->session->userdata('user_id');
                                    $get_node_id=$this->conn->runQuery('id','pool',"u_id='$userid'");
                                    if($get_node_id){
                                    	$nd_id=$get_node_id[0]->id;
                                    	$all_team=$this->team->my_pool_level_team($nd_id,10);
                                    }
                                    
                                    
                                    
                                    //print_R($all_team);
                                    $arr = $this->conn->runQuery("*",'plan',"1='1'");
                                    if($arr){
									for($i=0;$i<10;$i++){
									     $p=$i+1;
									    //$lvl_per=$arr[$i]->total_income;
                                        $my_team=$all_team[$p]!='' ? COUNT($all_team[$p]) : 0 ;
                                       
                                  ?>
                                    <tr>
                                        <td><?= $arr[$i]->rank?></td>
                                        <td><?= $my_team;?></td>
                                        
                                        <td><?= $ttl_rq=$arr[$i]->team_required?></td>
                                       
                                       <td><?php if($my_team>=$ttl_rq){?> Approved <?php }else{ ?>Pending <?php } ?></td>
                                    </tr>
                                   <?php } }?>
                                    
                                    </tbody>
                                </table>
								</div>
        
        </div>
        </div>
		 
							</div>
						</div>
					

					</div>

					
				</div>
    	</div>