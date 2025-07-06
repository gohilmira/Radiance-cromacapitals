<style>
    h3.level_setting_heading {
    text-align: center;
    text-transform: capitalize;
}
thead.table_head_level {
    background: #172b4d;
}
th.level_setting_table_data {
    color: #fff;
}
tbody.level_setting_body {
    background: #172b4d;
}
input.btn.btn-info.button_change {
    margin-top: 10px;
}

</style>

<?php
$get_direct_plan=$this->conn->runQuery('*','plan',"id>=1 and id<=2");
$get_direct_plan_bonanza=$this->conn->runQuery('*','plan',"id>=1 and id<=9");
?>
            <br>
            <nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="#"> Plan settings</a>
					</li>
				 
				</ol>
			</nav>
	<div class="row">
	
		
		<div class="col-md-6 card card-body">
		    <h3 class="level_setting_heading">Level plan setting </h3>
		    <form action="" method="post">
			<div class="table-responsive">
    			<table class="table">
    				<thead class="table_head_level">
    					<tr class="text-right">
    						<th class="level_setting_table_data">
    							#
    						</th>
    						<th  class="level_setting_table_data">
    							Level
    						</th>
    						 
    					</tr>
    				</thead>
    				<tbody class="level_setting_body">
    				    <?php
    				     
    				    foreach($get_direct_plan as $plan_details){
    				         
    				        ?>
    				        <tr  class="text-right">
    				            <td  class="level_setting_table_heading text-white">
    				                <?= $plan_details->package_name;?>
    				            </td>
    				            <td class="level_setting_table_heading_data">
    				                <input name="direct_<?= $plan_details->id;?>" class="form-control text-right" value="<?= $plan_details->level_income;?>" />
    				            </td>
    				            
    				        </tr>
    				        <?php
    				    }
    				    
    				    
    				    ?>
    				</tbody>
    			</table>
			</div>
			<input class="btn btn-info button_change" type="submit" name="change_direct_btn" value="Change" />
			 </form>
		</div>
	
	<!--<div class="col-md-12 card card-body">
		    <h3 class="level_setting_heading">Bonanza setting </h3>
		    <form action="" method="post">
			<div class="table-responsive">
    			<table class="table">
    				<thead class="table_head_level">
    					<tr class="text-right">
    						<th class="level_setting_table_data">
    							Rank
    						</th>
    							<th  class="level_setting_table_data">
    							Reward
    						</th>
    						<th  class="level_setting_table_data">
    						    Reward Business	
    						</th>
    						<th  class="level_setting_table_data">
    						 Start Date
    						</th>
    						
    						<th  class="level_setting_table_data">
    						 End Date
    						</th>
    						
    						 
    					</tr>
    				</thead>
    				<tbody class="level_setting_body">
    				    <?php
    				     
    				    foreach($get_direct_plan_bonanza as $plan_details){
    				         
    				        ?>
    				        <tr  class="text-right">
    				           
    				            
    				           <td class="level_setting_table_heading_data">
    				                <input name="rank_name_<?= $plan_details->id;?>" class="form-control text-right" value="<?= $plan_details->rank;?>" />
    				            </td>
    				            <td class="level_setting_table_heading_data">
    				                <input name="reward_<?= $plan_details->id;?>" class="form-control text-right" value="<?= $plan_details->reward;?>" />
    				            </td>
    				            
    				            <td class="level_setting_table_heading_data">
    				                <input name="reward_business_<?= $plan_details->id;?>" class="form-control text-right" value="<?= $plan_details->reward_business;?>" />
    				            </td>
    				            <td class="level_setting_table_heading_data">
    				                <input type='date' name="bonanza_start_<?= $plan_details->id;?>" class="form-control text-right" value="<?= $plan_details->bonanza_start_date;?>" />
    				            </td>
    				            <td class="level_setting_table_heading_data">
    				                <input type='date' name="bonanza_end_<?= $plan_details->id;?>" class="form-control text-right" value="<?= $plan_details->bonanza_end_date;?>" />
    				            </td>
    				            
    				        </tr>
    				        <?php
    				    }
    				    
    				    
    				    ?>
    				</tbody>
    			</table>
			</div>
			<input class="btn btn-info button_change" type="submit" name="change_reward_btn" value="Change" />
			 </form>
		</div>
		-->
	
	</div>
 
