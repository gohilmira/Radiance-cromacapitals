
<div class="row pt-2 pb-2">
        <div class="col-sm-12">
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $panel_path.'dashboard';?>">home</a></li>            
            <li class="breadcrumb-item"><a href="#">Fund History</a></li>
         </ol>
	   </div>
	   
</div>
        <?php
            $txs_type_array=json_decode($this->conn->setting('transaction_types'));
        ?>
    <div class="card card-body card-bg-1">
        <form action="" method="get">
            <div class="form-inline1">
                <input type="text" Placeholder="Tx User"  name="name" value="<?= (isset($_REQUEST['name']) ? $_REQUEST['name']:''); ?>"/>
                <!--<input type="text" Placeholder="Username"  name="username" value="<?= (isset($_REQUEST['username']) ? $_REQUEST['username']:''); ?>"/>
               -->
                <input type="date" class=" "  Placeholder="From"  name="start_date" value="<?= (isset($_REQUEST['start_date']) ? $_REQUEST['start_date']:''); ?>"/>
                <input type="date" class=" "  Placeholder="End date"  name="end_date" value="<?= (isset($_REQUEST['end_date']) ? $_REQUEST['end_date']:''); ?>" />
                <select name="limit">
                     <option value="10" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==10 ? 'selected':'';?> >10</option>
                     <option value="20" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==20 ? 'selected':'';?> >20</option>
                     <option value="50" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==50 ? 'selected':'';?> >50</option>
                     <option value="100" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==100 ? 'selected':'';?> >100</option>
                      <option value="200" <?= isset($_REQUEST['limit']) && $_REQUEST['limit']==200 ? 'selected':'';?> >200</option>
                  </select>&nbsp;
                  
                  
                <input type="submit" name="submit" class=" " value="Filter" />
                <button ><a href="<?= $panel_path.'transactions';?>" class=" m-1" > Reset </a></button>
                
            </div>
        </form>
    </div>    
         <?php
    $userid=$this->session->userdata('user_id'); 
    $ttl=$this->conn->runQuery('sum(amount) as total,sum(tx_charge) as charge','transaction',"u_code='$userid' and status='1'");
    $ttl_amnt=$ttl[0]->total;
    $ttl_tx_charge=$ttl[0]->charge;
    ?>
     <div class="card">
         
        <div class="card-header text-right"> 
            Total Amount : <?=round($ttl_amnt)?>
            | Total Extra Charges : <?=round($ttl_tx_charge)?>
        </div>
        
        <div class="table-responsive">
            <table class="<?= $this->conn->setting('table_classes'); ?>">
                <thead>
                    <tr>
                        <th>S No.</th>
                        <th>Tx user</th>
                        <th>Username</th>
                                         
                        <th>Amount (<?= $this->conn->company_info('currency');?>)</th>
                        <th>Extra Charges (<?= $this->conn->company_info('currency');?>)</th>
                         
                        <th>Remark</th>
                        <th>Date </th>
                         
                    </tr>
                </thead>
                <tbody>
                    <?php
        
                if($table_data){
                    
                    foreach($table_data as $t_data){               
        
                            if($t_data['tx_u_code']!=''){
                                $tx_profile=$this->profile->profile_info($t_data['tx_u_code']);
                            }else{
                                $tx_profile=$this->profile->profile_info($t_data['u_code']);
                            }
                    $sr_no++; 
                    
                    $tx_type=$t_data['tx_type'];
                    ?>
                    <tr>
                        <td><?= $sr_no;?></td>
                        <td><?= $tx_profile->name;?></td>
                        <td><?= $tx_profile->username;?></td>
                                                     
                        <td><?= $t_data['amount'];?></td>                               
                        <td><?= $t_data['tx_charge'];?></td>                               
                          
                        <td><small><?= $t_data['remark'];?></small></td>                                
                        <td><?= $t_data['date'];?></td>                                
                                   
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
            
            <br>  <br>
            