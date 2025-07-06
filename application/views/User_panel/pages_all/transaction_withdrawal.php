
<div class="container pages">        

<?php 
         $userid=$this->session->userdata('user_id');
         $total_withdrawal=$this->conn->runQuery("SUM(amount) as amt",'transaction',"u_code='$userid' and tx_type='withdrawal'");
         $total_pending_withdrawal=$this->conn->runQuery("SUM(amount) as amt",'transaction',"u_code='$userid' and tx_type='withdrawal' and status='0'");
         $total_reject_withdrawal=$this->conn->runQuery("SUM(amount) as amt",'transaction',"u_code='$userid' and tx_type='withdrawal' and status='2'");
         ?>
 
<div class="nk-content nk-content-fluid">
    <br>
	<div class="container-xl wide-lg">
		<div class="nk-content-body">
			<div class="components-preview wide-md mx-auto">
			 <div class="card-header text-right font_color1" style="color:#333;">
                Total Withdrawal : <?= ($total_withdrawal[0]->amt!=''? $total_withdrawal[0]->amt : 0); ?>
                 | Paid Withdrawal : <?= ($total_pending_withdrawal[0]->amt!=''? $total_pending_withdrawal[0]->amt : 0);?>
                 | Reject Withdrawal : <?= ($total_reject_withdrawal[0]->amt!=''? $total_reject_withdrawal[0]->amt : 0);?>
               
            </div>
			<br>
			   <div class="card card-bg-1" style="background-color:<?= $this->config->item('user_back_color')?>;">
            <form action="" method="get">
                 <div class="form-inline ml-4 mr-4">
                                          
                       
                     <select name="status" class="select_user_panel">
                         <option value="all">Select Status</option>
                         <option value="0">Pending</option>
                         <option value="1">Approved</option>
                         <option value="2">Rejected</option>
                         
                     </select> 
                     <select name="limit" class="select_user_panel">
                         <option value="20" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==20 ? 'selected':'';?> >20</option>
                         <option value="50" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==50 ? 'selected':'';?> >50</option>
                         <option value="100" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==100 ? 'selected':'';?> >100</option>
                         <option value="200" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==200 ? 'selected':'';?> >200</option>
                     </select>
                    
                     
                    <input type="date" class="input_user_panel "  Placeholder="From"  name="start_date" value="<?= (isset($_REQUEST['start_date']) ? $_REQUEST['start_date']:''); ?>"/>
                    <input type="date" class="input_user_panel "  Placeholder="End date"  name="end_date" value="<?= (isset($_REQUEST['end_date']) ? $_REQUEST['end_date']:''); ?>" />
                         
                     
                     
                     <input type="submit" name="submit" class="reset_user_panel_button " value="Filter" />
                     <input type="submit" name="reset" class="reset_user_panel_button " value="Reset" />
                     <!--<a href="<?= $base_url;?>" class=" " > Reset </a>-->
                     <!--<input type="submit" name="export_to_excel" class="btn btn-sm m-1" value="Export to excel" />-->
                      
                </div>
            </form>
        </div>
		  
			 
                 
                                <div class="nk-block nk-block-lg">
                                   <div class="nk-block-head nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title"></h4>
                                            <!--<div class="nk-block-des">
                                                <p>Similar to others table, use the modifier classes <code class="code-class">.thead-light</code> or <code class="code-class">.thead-dark</code> to make <code class="code-tag">&lt;thead&gt;</code> appear light or dark.</p>
                                            </div>--->
                                        </div>
                                    </div>
                                    <div class="card card-preview">
                                        <div class="card-inner">
                                            <div class="table-responsive" >
                                                <table class="<?= $this->conn->setting('table_classes'); ?>">
											<thead>
												<tr>
												 <th class="text-left border-right" >S No.</th>
                                                 <th  class="text-right" >Amount (<?= $this->conn->company_info('currency');?>)</th>
                                                <th  class="text-right" >TDS(3.5%)</th>
                                                <th  class="text-right" >Admin charges @ (<?= $this->conn->company_info('currency');?>)</th>
                                                <th  class="text-right" >Payable Amount (<?= $this->conn->company_info('currency');?>)</th>
                                                <th  class="text-left" >Status</th>
                                                <th  class="text-left" >Reason</th>
                                                <th  class="text-left" >Date </th>
													 
												</tr>
											</thead>
													 <tbody>
															<?php
														$user=$this->session->userdata('profile');
														if($table_data){
															
															foreach($table_data as $t_data){
																$tx_profile=false;
																$tx_profile=$this->profile->profile_info($t_data['tx_u_code']);
																$sr_no++;
																?>
																<tr>
																<td class="text-right"><?= $sr_no;?></td>
																<td class="text-right"><?= $t_data['amount']+$t_data['tx_charge'];?></td>
                                                                <td class="text-right"><?= $t_data['amount']/100*3.5;?></td>
                                                                <td class="text-right"><?= $t_data['amount']/100*11.5;?></td>
                                                                <td class="text-right"><?= $t_data['amount'];?></td> 
																	<td class="text-right">
																		<?php 
																		switch($t_data['status']){
																			case 1 :
																				echo 'Approved';
																				break;
																			case 0 :
																				echo 'Pending';
																				break;
																			case 2 :
																				echo 'Rejected';
																				break;
																		}
																		?>
																	</td>
																	<td class="text-left"><small><?= $t_data['reason'];?></small></td>                                
																	<td class="text-left"><?= $t_data['date'];?></td>                                
																			   
																</tr>
																<?php
															}
														}
															?>
															
														</tbody>                                
                                                </table>
                                            </div>
                                        </div>
                                    </div><!-- .card-preview -->
                                   
                                </div><!-- .nk-block -->
								
                            </div><!-- .components-preview -->
                        </div>
                    </div>
                </div>
                
    <?php echo $this->pagination->create_links();?>
    </div>