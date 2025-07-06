<?php
class Withdrawal extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
         $this->admin_url=$this->conn->company_info('admin_path');
      //  $this->load->library('excel');
        $this->limit=10;
    }

    public function index(){

        $this->pending();
        
    }


    /*public function pending(){
        $data['limit']=10;
        $data['search_string']='withdrawal_search';
        $conditions['tx_type']='withdrawal';
        $conditions['status']=0;
        $data['from_table']='transaction';
        $data['base_url']=$this->panel_url.'/withdrawal/pending'; 
        
        if(!empty($conditions)){
            $data['conditions']=$conditions;
        }

        $res=$this->paging->searching_data($data);
        $data['table_data']=$res['table_data'];
        if(isset($_POST['export_to_excel'])){
            /* $dta[0]=array('Debit Ac No','Beneficiary Ac No','Beneficiary Name','Amt','Pay Mod','Date','IFSC');
            $whr="tx_type='withdrawal' and status='0'";
           $get_data=$this->conn->runQuery('bank_details,amount,date','transaction', $whr);          
           if($get_data){
                
               for($f=0;$f<count($get_data);$f++){
                $bank_details=json_decode($get_data[$f]->bank_details); 
                $dta['Debit Ac No']=0;//$bank_details->account_no;
                $dta['Beneficiary Ac No']=$bank_details->account_no;
                $dta['Beneficiary Name']=$bank_details->account_holder_name;
                $dta['Amt']=$get_data[$f]->amount;
                $dta['Pay Mod']='N';
                $dta['Date']= $get_data[$f]->date;
                $dta['IFSC']= $bank_details->ifsc_code;
                $exdataval[$f]=$dta;

               }
           }
             
            $this->export->export_to_excel($exdataval);

        }
        
        $data['sr_no']=$res['sr_no'];
        $data['total_rows']=$res['total_rows'];  

        $this->show->admin_panel('withdrawal_pending',$data);
    }
    
    public function approved(){

        $data['limit']=10;
        $data['search_string']='withdrawal_search';
        $conditions['tx_type']='withdrawal';
        $conditions['status']=1;
        

        $data['from_table']='transaction';
        $data['base_url']=$this->panel_url.'/withdrawal/approved';  
        
        
        if(!empty($conditions)){
            $data['conditions']=$conditions;
        }       


        $res=$this->paging->searching_data($data);
        $data['table_data']=$res['table_data'];      
        $data['total_rows']=$res['total_rows'];      
        $data['sr_no']=$res['sr_no'];
              
       
        $this->show->admin_panel('withdrawal_approved',$data);
    }
    
    public function cancelled(){
        $data['limit']=10;
        $data['search_string']='withdrawal_search';
        $conditions['tx_type']='withdrawal';
        $conditions['status']=2;
        $data['from_table']='transaction';
        $data['base_url']=$this->panel_url.'/withdrawal/pending'; 
        
        if(!empty($conditions)){
            $data['conditions']=$conditions;
        }       


        $res=$this->paging->searching_data($data);
        $data['table_data']=$res['table_data'];
        $data['sr_no']=$res['sr_no'];
        $data['total_rows']=$res['total_rows'];  
        $this->show->admin_panel('withdrawal_cancelled',$data);
        
    }*/
    
      public function pending(){
           if(isset($_REQUEST['export_to_excel'])){
          
         $whr="tx_type='withdrawal' and status='0'";
           $get_data=$this->conn->runQuery('u_code,bank_details,tx_charge,remark,amount,added_on','transaction', $whr);  
         
           if($get_data){
                
               for($f=0;$f<count($get_data);$f++){
                $tx_profile=$this->profile->profile_info($get_data[$f]->u_code);
                $bank_details=json_decode($get_data[$f]->bank_details,true);
               
                $dta['Tx User']=$tx_profile->username.'( '.$tx_profile->name.')';
                $dta['Amount']=$get_data[$f]->amount+$get_data[$f]->tx_charge;
                $dta['Tx Charge']=$get_data[$f]->tx_charge;
                $dta['PAYABLE AMOUNT']=$get_data[$f]->amount;
                $dta['Account Holder Name']=$bank_details->account_holder_name;
                $dta['Account Number']=$bank_details->account_number;
                 $dta['Ifsc']=$bank_details->bank_ifsc;
                $dta['Date']= $get_data[$f]->added_on;
                $exdataval[$f]=$dta;

               }
           }
             
            $this->export->export_to_excel($exdataval);

        }
        
        $searchdata['search_string']='withdrawal_search';
        $conditions['tx_type']='withdrawal';
        $conditions['status']=0;      
        // $searchdata['order_by']='date desc';
        $searchdata['from_table']='transaction';        
        
        if(!empty($condition)){
            $searchdata['condition']=$condition;
        }
         
         if(isset($_REQUEST['name']) && $_REQUEST['name']!=''){
           $spo=$this->profile->column_like($_REQUEST['name'],'name');     
            
            if($spo){
                $conditions['u_code'] = $spo;
            }
        }
        if(isset($_REQUEST['username']) && $_REQUEST['username']!=''){
          
          
            $spo=$this->profile->column_like($_REQUEST['username'],'username');     
            
            if($spo){
                $conditions['u_code'] = $spo;
            }
           
        }      
         if(isset($_REQUEST['limit']) && $_REQUEST['limit']!=''){
            $limit=$_REQUEST['limit'];
            $this->limit= $limit;
        }
        if(!empty($likeconditions)){
            $searchdata['likecondition'] = $likeconditions;
        }
        
        if(!empty($conditions)){
            $searchdata['conditions'] = $conditions;
        }
        $data = $this->paging->search_response($searchdata,$this->limit,$this->admin_url.'/withdrawal/pending'); 
         
            
        $this->show->admin_panel('withdrawal_pending',$data);
        
       
       
    }
    
     public function approved(){

       $searchdata['search_string']='withdrawal_approved_search';
        $conditions['tx_type']='withdrawal';
        $conditions['status']=1;      
        $searchdata['order_by']='date desc'; 
        $searchdata['from_table']='transaction';
       // $data['base_url']=$this->panel_url.'/withdrawal/approved';
          
         if(isset($_REQUEST['name']) && $_REQUEST['name']!=''){
           $spo=$this->profile->column_like($_REQUEST['name'],'name');     
            
            if($spo){
                $conditions['u_code'] = $spo;
            }
        }
       if(isset($_REQUEST['username']) && $_REQUEST['username']!=''){
          
          
            $spo=$this->profile->column_like($_REQUEST['username'],'username');     
            
            if($spo){
                $conditions['u_code'] = $spo;
            }
           
        }
       if(isset($_REQUEST['limit']) && $_REQUEST['limit']!=''){
            $limit=$_REQUEST['limit'];
            $this->limit= $limit;
        }
          if(!empty($likeconditions)){
            $searchdata['likecondition'] = $likeconditions;
        }
        
        if(!empty($conditions)){
            $searchdata['conditions'] = $conditions;
        }
        
         $searchdata['order_by']='updated_on desc';
        
        $data = $this->paging->search_response($searchdata,$this->limit,$this->admin_url.'/withdrawal/approved'); 
         
            
        $this->show->admin_panel('withdrawal_approved',$data);
          if(isset($_REQUEST['export_to_excel'])){
          
         $whr="tx_type='withdrawal' and status='1'";
           $get_data=$this->conn->runQuery('u_code,bank_details,tx_charge,remark,amount,added_on','transaction', $whr);  
         
           if($get_data){
                
               for($f=0;$f<count($get_data);$f++){
                $tx_profile=$this->profile->profile_info($get_data[$f]->u_code);
                $bank_details=json_decode($get_data[$f]->bank_details,true);
               
                $dta['Tx User']=$tx_profile->username.'( '.$tx_profile->name.')';
                $dta['Amount']=$get_data[$f]->amount+$get_data[$f]->tx_charge;
                $dta['Tx Charge']=$get_data[$f]->tx_charge;
                $dta['PAYABLE AMOUNT']=$get_data[$f]->amount;
                $dta['ACCOUNT DETAILS']=$bank_details->google_pay_id;
                $dta['Date']= $get_data[$f]->added_on;
                $exdataval[$f]=$dta;

               }
           }
             
            $this->export->export_to_excel($exdataval);

        }
        
    }
    
    
    public function cancelled(){
          
       $searchdata['search_string']='withdrawal_cancel_search';
        $conditions['tx_type']='withdrawal';
        $conditions['status']=2;      
         $searchdata['order_by']='date desc';
        $searchdata['from_table']='transaction';
       // $data['base_url']=$this->panel_url.'/withdrawal/approved';  
       
          
         if(isset($_REQUEST['name']) && $_REQUEST['name']!=''){
           $spo=$this->profile->column_like($_REQUEST['name'],'name');     
            
            if($spo){
                $conditions['u_code'] = $spo;
            }
        }
        if(isset($_REQUEST['username']) && $_REQUEST['username']!=''){
          
          
            $spo=$this->profile->column_like($_REQUEST['username'],'username');     
            
            if($spo){
                $conditions['u_code'] = $spo;
            }
           
        }
        if(isset($_REQUEST['limit']) && $_REQUEST['limit']!=''){
            $limit=$_REQUEST['limit'];
            $this->limit= $limit;
        }
          if(!empty($likeconditions)){
            $searchdata['likecondition'] = $likeconditions;
        }
        
        if(!empty($conditions)){
            $searchdata['conditions'] = $conditions;
        }
        
       
         $data = $this->paging->search_response($searchdata,$this->limit,$this->admin_url.'/withdrawal/cancelled'); 
         
            
        $this->show->admin_panel('withdrawal_cancelled',$data);
        
         if(isset($_REQUEST['export_to_excel'])){
          
         $whr="tx_type='withdrawal' and status='2'";
           $get_data=$this->conn->runQuery('u_code,bank_details,tx_charge,remark,amount,added_on','transaction', $whr);  
         
           if($get_data){
                
               for($f=0;$f<count($get_data);$f++){
                $tx_profile=$this->profile->profile_info($get_data[$f]->u_code);
                $bank_details=json_decode($get_data[$f]->bank_details,true);
               
                $dta['Tx User']=$tx_profile->username.'( '.$tx_profile->name.')';
                $dta['Amount']=$get_data[$f]->amount+$get_data[$f]->tx_charge;
                $dta['Tx Charge']=$get_data[$f]->tx_charge;
                $dta['PAYABLE AMOUNT']=$get_data[$f]->amount;
                $dta['ACCOUNT DETAILS']=$bank_details->google_pay_id;
                $dta['Date']= $get_data[$f]->added_on;
                $exdataval[$f]=$dta;

               }
           }
             
            $this->export->export_to_excel($exdataval);

        }
        
        
        
    }
    
    public function view(){
        if(isset($_REQUEST['id'])){
            $this->session->set_userdata('admin_withdrawal_id',$_REQUEST['id']);
        }
        $wd_id=$this->session->userdata('admin_withdrawal_id');

        if(isset($_POST['approve_btn'])){
            $this->approve($wd_id);
            $this->session->set_flashdata("success", "Withdrawal Approved.");
            redirect(base_url($this->conn->company_info('admin_path').'/withdrawal/approved'));
        }

        if(isset($_POST['cancel_btn'])){
            $this->form_validation->set_rules('reason', 'Reason', 'required');
            if($this->form_validation->run() != False){
                 $chk_exists=$this->conn->runQuery('u_code,amount,tx_charge,wallet_type','transaction',"status=0 and id='$wd_id'");
                if($chk_exists){
                    $u_code=$chk_exists[0]->u_code;
                    
                    $amnt=$chk_exists[0]->amount;
                    $tx_charge=$chk_exists[0]->tx_charge;
                    $ttl_amnt=$amnt+$tx_charge;
                    $wallet_type=$chk_exists[0]->wallet_type;
                    
                    
                    $set['status']=2;
                    $set['reason']=$_POST['reason'];
                    $set['added_on']=date('Y-m-d H:i:s');
                    $this->db->where('id',$wd_id);
                    if($this->db->update('transaction',$set)){
                       $this->update_ob->add_amnt($u_code,$wallet_type,$ttl_amnt); 
                       $this->update_ob->add_amnt($u_code,'total_withdrawal',-$ttl_amnt); 
                       
                    }
                }
                
                redirect(base_url($this->conn->company_info('admin_path').'/withdrawal/cancelled'));
            }
        }

        $data['wd_id']=$wd_id;
        $this->show->admin_panel('withdrawal_view',$data);
        
    }
	
	public function action_multiple(){
        if(isset($_POST['withdrawal_btn'])){
            
            if(isset($_POST['wd_ids'])){
               // print_r($_POST['wd_ids']);
                $wd_id=$_POST['wd_ids'];
                $set['status']=1;
                $set['added_on']=date('Y-m-d H:i:s');
                $this->db->where_in('id',$wd_id);
                $this->db->update('transaction',$set);
                
                /*$implode=implode(',',$wd_id);
                foreach($wd_id as $wd_id1){
                
                //$chk_exists=$this->conn->runQuery('amount,tx_charge,wallet_type,u_code','transaction',"id IN($implode)");
                $chk_exists=$this->conn->runQuery('amount,tx_charge,wallet_type,u_code','transaction',"id='$wd_id1'");
            
                echo $this->db->last_query();
                }
                die();*/
                $this->session->set_flashdata("success", "Withdrawal Approved.");
                redirect($this->admin_url.'/withdrawal/approved');
            }else{
                $this->session->set_flashdata("error", "Invalid Request. Please Select User1");
                redirect($this->admin_url.'/withdrawal/pending'); 
            }
        }

        if(isset($_POST['reject_btn'])){
            
            if(isset($_POST['wd_ids'])){
                if(isset($_POST['reject_reason']) && $_POST['reject_reason']!=''){
                    $wd_id=$_POST['wd_ids'];
                    if(!empty($wd_id)){
                        foreach($wd_id as $wdid){
                            $chk_exists=$this->conn->runQuery('amount,tx_charge,wallet_type,u_code','transaction',"status=0 and id='$wdid'");
                            if($chk_exists){
                                $u_code=$chk_exists[0]->u_code;
                                $amnt=$chk_exists[0]->amount;
                                $tx_charge=$chk_exists[0]->tx_charge;
                                $ttl_amnt=$amnt+$tx_charge;
                                $wallet_type=$chk_exists[0]->wallet_type;
                                
                                $set=array();
                                $set['status']=2;
                                $set['reason']=$_POST['reject_reason'];
                                $set['added_on']=date('Y-m-d H:i:s');
                                $this->db->where('id',$wdid);
                                if($this->db->update('transaction',$set)){
                                   $this->update_ob->add_amnt($u_code,$wallet_type,$ttl_amnt); 
                                   $this->update_ob->add_amnt($u_code,'total_withdrawal',-$ttl_amnt); 
                                   
                                }
                            }
                        }
                    }
                    $this->session->set_flashdata("success", "Withdrawal Rejected.");
                    redirect($this->admin_url.'/withdrawal/cancelled');
                }else{
                    $this->session->set_flashdata("error", "Invalid Request. Please Give Reject reason.");
                    redirect($this->admin_url.'/withdrawal/pending'); 
                }
            }else{
                $this->session->set_flashdata("error", "Invalid Request. Please Select User");
                redirect($this->admin_url.'/withdrawal/pending'); 
            }
        }
    }
    public function approve($wd_id){
        $chk_exists=$this->conn->runQuery('id,amount,tx_charge','transaction',"status=0 and id='$wd_id'");
        if($chk_exists){
            $set['status']=1;
            $set['added_on']=date('Y-m-d H:i:s');
            $this->db->where('id',$wd_id);
            $this->db->update('transaction',$set);
            
             ////////////////////////////////////////////////////////////
            $amts=$chk_exists[0]->amount;
            $txs_char=$chk_exists[0]->tx_charge;
            $total_amount=$amts+$txs_char;
            $pay_amts=$total_amount*1/100;
            $check_rank1=$this->conn->runQuery('COUNT(id) as ids','users',"my_rank='p-1'")[0]->ids;
            $check_rank2=$this->conn->runQuery('COUNT(id) as ids','users',"my_rank='p-2'")[0]->ids;
            $check_rank3=$this->conn->runQuery('COUNT(id) as ids','users',"my_rank='p-3'")[0]->ids;
            $check_rank4=$this->conn->runQuery('COUNT(id) as ids','users',"my_rank='p-4'")[0]->ids;
            $check_rank5=$this->conn->runQuery('COUNT(id) as ids','users',"my_rank='p-5'")[0]->ids;
            if($check_rank1>0){
                $per_ids=$pay_amts/$check_rank1;
                $check_ranks1=$this->conn->runQuery('*','users',"my_rank='p-1'");
                if($check_ranks1){
                    foreach($check_ranks1 as $check_ranks111){
                        $user_id=$check_ranks111->id;
                        //////////////////////////////////////
                        $source="royalty";
                        $arr1['source']=$source;		               
                        $arr1['u_code']=$user_id;
                        $arr1['tx_type']='income';
                        $arr1['debit_credit']='credit';
                        $arr1['wallet_type']='main_wallet';
                        $arr1['amount']=$per_ids;	              
                        $arr1['date']=date('Y-m-d H:i:s');
                        $arr1['status']=1;
                        $arr1['remark']= "Recieve $per_ids  Royalty Bonus ";          
                        $qury=$this->conn->get_insert_id('transaction',$arr1);
                        $this->update_ob->add_amnt($user_id,$source,$per_ids);
                        $this->update_ob->add_amnt($user_id,'main_wallet',$per_ids);
                        /////////////////////////////////////////
                        
                    }
                }
            }
            
            /////////////////////////////////////////////////////////////
            
        }
    }

  public function franchise_pending(){
        $searchdata['search_string']='withdrawal_search';
        $conditions['tx_type']='withdrawal';
        $conditions['status']=0;      
        // $searchdata['order_by']='date desc';
        $searchdata['from_table']='transaction_franchise';        
        
        if(!empty($condition)){
            $searchdata['condition']=$condition;
        }
         
         if(isset($_REQUEST['name']) && $_REQUEST['name']!=''){
           $spo=$this->profile->column_like_franchise($_REQUEST['name'],'name');     
            
            if($spo){
                $conditions['u_code'] = $spo;
            }
        }
        if(isset($_REQUEST['username']) && $_REQUEST['username']!=''){
          
          
            $spo=$this->profile->column_like_franchise($_REQUEST['username'],'username');     
            
            if($spo){
                $conditions['u_code'] = $spo;
            }
           
        }      
         
        if(!empty($likeconditions)){
            $searchdata['likecondition'] = $likeconditions;
        }
        
        if(!empty($conditions)){
            $searchdata['conditions'] = $conditions;
        }
        $data = $this->paging->search_response($searchdata,$this->limit,$this->admin_url.'/withdrawal/franchise-pending'); 
         
            
        $this->show->admin_panel('franchise_withdrawal_pending',$data);
              
    }   
    
    public function franchise_approved(){

       $searchdata['search_string']='withdrawal_approved_search';
        $conditions['tx_type']='withdrawal';
        $conditions['status']=1;      
        $searchdata['order_by']='date desc'; 
        $searchdata['from_table']='transaction_franchise';
       // $data['base_url']=$this->panel_url.'/withdrawal/approved';
          
         if(isset($_REQUEST['name']) && $_REQUEST['name']!=''){
           $spo=$this->profile->column_like_franchise($_REQUEST['name'],'name');     
            
            if($spo){
                $conditions['u_code'] = $spo;
            }
        }
       if(isset($_REQUEST['username']) && $_REQUEST['username']!=''){
          
          
            $spo=$this->profile->column_like_franchise($_REQUEST['username'],'username');     
            
            if($spo){
                $conditions['u_code'] = $spo;
            }
           
        }
       
          if(!empty($likeconditions)){
            $searchdata['likecondition'] = $likeconditions;
        }
        
        if(!empty($conditions)){
            $searchdata['conditions'] = $conditions;
        }
        
         $searchdata['order_by']='updated_on desc';
        
        $data = $this->paging->search_response($searchdata,$this->limit,$this->admin_url.'/withdrawal/franchise-approved'); 
         
            
        $this->show->admin_panel('franchise_withdrawal_approved',$data);
    }
    
    
     public function franchise_view(){
        if(isset($_REQUEST['id'])){
            $this->session->set_userdata('admin_withdrawal_id',$_REQUEST['id']);
        }
        $wd_id=$this->session->userdata('admin_withdrawal_id');

        if(isset($_POST['approve_btn'])){
            $this->approves($wd_id);
            $this->session->set_flashdata("success", "Franchise Withdrawal Approved.");
            redirect(base_url($this->conn->company_info('admin_path').'/withdrawal/franchise-approved'));
        }
         

        $data['wd_id']=$wd_id;
        $this->show->admin_panel('franchise_withdrawal_view',$data);
        
    }
    
      public function approves($wd_id){
        $chk_exists=$this->conn->runQuery('id','transaction_franchise',"status=0 and id='$wd_id'");
        if($chk_exists){
            $set['status']=1;
            $set['approve_date']=date('Y-m-d H:i:s');
            $set['added_on']=date('Y-m-d H:i:s');
            $this->db->where('id',$wd_id);
            $this->db->update('transaction_franchise',$set);
            
           
            
            
            
        }
    }
  
    
}