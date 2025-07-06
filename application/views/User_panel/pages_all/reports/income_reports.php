 <br>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

	 	<div class="container pages">
	 	    <br>
		<div class="row">
		<div class="col-md-12">
			
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="#">Report</a>
					</li>
					<li class="breadcrumb-item active">
						Income
					</li>
				</ol>
		</div>
	<!--	<div class="col-md-3 text-right">
		   
		</div>-->
		</div>	
			<div class="row">
			    
				<div class="col-md-12">
				    <form action="" method="get">
    				    <div class="card card-bg-1">
                            
                                <div class="form-inline1 ml-4 mr-4">
                                    <input type="date" class=" "  Placeholder="From"  name="start_date" value="<?= (isset($_REQUEST['start_date']) ? $_REQUEST['start_date']:''); ?>"/>
                                    <input type="date" class=" "  Placeholder="End date"  name="end_date" value="<?= (isset($_REQUEST['end_date']) ? $_REQUEST['end_date']:''); ?>" />
                                    <select name="month">
                                        <option value="all">All</option>
                                        <?php
                                        for ($i = 0; $i < 12; $i++) {
                                            $mnth=date("Y-m", strtotime( date( 'Y-m-01' )." -$i months"));
                                            ?>
                                            <option value="<?= $mnth;?>" <?= (isset($_REQUEST['month']) && $_REQUEST['month']==$mnth ? 'selected':''); ?> ><?= date("M", strtotime( date( 'Y-m-01' )." -$i months"));;?></option>
                                            <?php
                                        }
                                        
                                        ?>
                                    </select>
                                    <?php
                                    print_r($months);
                                    ?>
                                    <input type="submit" name="submit" class="text-muted " value="Filter" />
                                    <button ><a href="<?= $panel_path.'report/income';?>" class=" m-1 text-muted" > Reset </a></button>
                                    
                                </div>
                            
                        </div> 
                        <br>
    				    <div class="card card-bg-1">
    				        <div class="form-inline1 ml-4 mr-4">
                                <input name="today" type="submit" value="Today" <?= isset($_REQUEST['today']) ? 'disabled':'';?>/>
                                <input name="yesterday" type="submit" value="Yesterday" <?= isset($_REQUEST['yesterday']) ? 'disabled':'';?>/>
                                <input name="curr_week" type="submit" value="Current Week" <?= isset($_REQUEST['curr_week']) ? 'disabled':'';?>/>
                                <input name="last_week" type="submit" value="Last Week" <?= isset($_REQUEST['last_week']) ? 'disabled':'';?>/>
                                 <div class="btn-group">
		   <!-- <button type="button" class="btn btn-facebook  btn-sm"><i class="fa fa-facebook mr-1"></i>Facebook</button>
		    <button class="btn btn-success btn-sm" >  <i class="fa fa-whatsapp mr-1" ></i> </button>-->
		    <button class="btn btn-info btn-sm" onclick="printDiv('report_section')"><i class="fa fa-print fs-16" ></i> Print </button>
		      <button class="btn btn-primary btn-sm" id="download"> download pdf</button>
		    </div>
                            </div>
                            
                        </div>
				 
				</form>
				</div>
				<?php
				if(isset($_REQUEST['submit']) || isset($_REQUEST['today']) || isset($_REQUEST['yesterday']) || isset($_REQUEST['curr_week']) || isset($_REQUEST['last_week'])){
				
				
				
				?>
				
    				<div class="col-md-12 " id="report_section">
    				     <br>
        				    <div class=" row" id="income">
        				        
        				        <div class="col-md-2">
                				
                				</div>
                				<div class="card card-body col-md-8">
                				   
                				     <div class="text-right text-dark">
            				            <?= $this->session->userdata('profile')->name;?> (<?= $this->session->userdata('profile')->username;?>)
            				        </div>
            				        <table class="table table-sm borderless" style="border:none;">
                        				<thead>
                        					<tr>
                        						<th>
                        							Income Name
                        						</th>
                        						<th class="text-right" >
                        							Income Amount
                        						</th>
                        					</tr>
                        				</thead>
                        				<tbody>
                        				    <?php
                        				        $currency=$this->conn->company_info('currency');
                        				        $u_code=$this->session->userdata('user_id');
                        				        $plan_type=$this->session->userdata('reg_plan');
                        				        $all_incomes=$this->conn->runQuery('*','wallet_types',"wallet_type='income' and $plan_type='1'");
                        				        if($all_incomes){
                        				            $sn=0;
                        				            $ttl_amnt=0;
                        				            foreach($all_incomes as $income_details){
                        				                $sn++;
                        				                $slug=$income_details->slug;
                        				                
                        				                //$income_where='';
                        				                $get_amnt=$this->conn->runQuery('SUM(amount) as amnt','transaction',"tx_type='income' and source='$slug' and u_code='$u_code' ".$income_where )[0]->amnt;
                        				                $ttl_amnt += $income_amnt = $get_amnt!='' ? $get_amnt:0;
                        				                ?>
                        				                <tr>
                                    						 
                                    						<td>
                                    							<?= $income_details->name;?>
                                    						</td>
                                    						<td class="text-right">
                                    							<?= $currency;?> <?= $income_amnt;?>
                                    						</td>
                                    					</tr>
                        				                <?php
                        				            }
                        				        }
                        				        ?>
                        					
                        					 
                        				</tbody>
                        				<tfoot >
                        				    <tr>
                        						<!--<td colspan=1>
                        						     
                        						</td>-->
                        						<td  >
                        						    <strong>Total</strong>  
                        						</td>
                        						<td class="text-right">
                        								<strong><?= $currency;?> <?= $ttl_amnt;?></strong>  
                        						</td>
                        						 
                        					</tr>
                        				</tfoot>
                        			</table>
                				</div>
        				    </div>
        				    
    				     
    				</div>
    				    
    				    
    				
				<?php }?>
			</div>
		</div>
	 
	
 <script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
		
			window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const income = this.document.getElementById("income");
            console.log(income);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(income).set(opt).save();
        })
}	
		
	</script>