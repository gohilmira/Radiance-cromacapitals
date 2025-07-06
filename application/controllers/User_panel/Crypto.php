<?php

class Crypto extends CI_Controller{
    public function __construct()
    {
         
        parent::__construct();
        $api_key=$this->conn->company_info('api_key');
        $this->payment_type =  "CRYPADD";
        $this->api_key =$api_key;
        
    }
    
    public function check(){
		$url = "https://test.eracom.in/sendcryp/";
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		
		$headers = [
		  "Content-Type: application/x-www-form-urlencoded"
		];
		
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		
		 $data = http_build_query([
		  "api_key" => $this->api_key,
		  "action" => "get_payment",
		  "payment_id" => 112
		]);
		
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		
		$result = json_decode(curl_exec($curl), true);
		curl_close($curl);
	
		print_R($result);             
                    
                    
    }
    
    public function auto_approve(){
        $type = $this->payment_type; 
        $get_all_pending_paments = $this->conn->runQuery('*','transaction'," tx_type='$type' and status='0' ");
        if($get_all_pending_paments){
            foreach($get_all_pending_paments as $payment_details){
                $cryp_status = $payment_details->cryp_status;
			    $u_code = $payment_details->u_code;
			    $wallet_type = $payment_details->wallet_type;
			    $amount = $payment_details->amount;
			    $cryp_paymentId = $payment_details->cryp_paymentId;
			     $url = "https://test.eracom.in/sendcryp/";
                    $curl = curl_init($url);
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_POST, true);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    
                    $headers = [
                      "Content-Type: application/x-www-form-urlencoded"
                    ];
                    
                    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                    
                    $data = http_build_query([
                      "api_key" => $this->api_key,
                      "action" => "get_payment",
                      "payment_id" => $cryp_paymentId
                    ]);
                    
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                    
                    $result = json_decode(curl_exec($curl), true);
                    curl_close($curl);
                
                  //  print_R($result);
                    //die();
				if($result['success']==true){
				    $ary = array();
				    if($result['status']=='expired'){
				        $ary['status'] = 3;
                      	$ary['approveData'] = json_encode($result);
				        $ary['cryp_status'] = $result['status'];
				        $ary['updated_on']=date('Y-m-d H:i:s');
				        $this->db->where('cryp_paymentId',$cryp_paymentId);
				        $this->db->update('transaction',$ary);
				    }
				    
				    if($result['status']=='paid'){
                      	
                      	$ary['amount'] = $result['paidAmount']+$result['fee'];
                        $ary['paidAmount'] = $result['paidAmount']+$result['fee'];
                      	$ary['approveData'] = json_encode($result);
				        $ary['status'] = 1;
				        $ary['cryp_status'] = $result['status'];
				        $ary['updated_on']=date('Y-m-d H:i:s');
				        
				        $ary['open_wallet']=$this->update_ob->wallet($u_code,'fund_wallet');
				        $ary['closing_wallet']=$ary['open_wallet']+$ary['amount'];
				        
				        $this->db->where('cryp_paymentId',$cryp_paymentId);
                      	$paid=$result['paidAmount']+$result['fee'];
                      	//$fee = $this->fee($paid);
                      	$addable = $paid;
                      	
                      	
                      	
                      	
                      	
    				    if($this->db->update('transaction',$ary)){
    				        $this->update_ob->add_amnt($u_code,$wallet_type,$addable);
    				    }
				    }
				}
            }
        }
    }
  
  	public function fee($amnt){
    	if($amnt<200){
        	return 1;
        }else{
        	return $amnt*0.5/100;
        }
    }
    
    public function add_fund_expire(){ 
      
        if(isset($_GET['id'])){
         
         $txid=$_GET['id']; 
       // die();  
        $trsac_detail=$this->conn->runQuery('*','transaction',"cryp_paymentId='$txid' and tx_type='CRYPADD' ");
        if($trsac_detail){       
         $amts=$trsac_detail[0]->amount;
        $u_code = $this->session->userdata('user_id');
        $type = $this->payment_type;
        $url = "https://test.eracom.in/sendcryp/";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
        $headers = [
          "Content-Type: application/x-www-form-urlencoded"
        ];
        
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                    
        $data = http_build_query([
          "api_key" => $this->api_key,
          "action" => "review_transaction",
          "txId" => $txid
          ]);
          
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                    
        $result = json_decode(curl_exec($curl), true);
        curl_close($curl);   
        // print_R($result); 
          //die();
         if($result['success']==true){
           
         	$this->session->set_flashdata("success", "Transaction Review Successfully");          
         
				$ary = array();
				$ary['status'] = 0;
				$ary['cryp_status'] ="";
				$this->db->where('cryp_paymentId',$txid);
				if($this->db->update('transaction',$ary)){
				  
				}          
           
         }else{
         $this->session->set_flashdata("error", "Request can not be submitted.");
         }  
        ?>
          <script>window.location.href = 'https://test.mlmreadymade.com/demo_new/user/crypto/add-fund-history';</script> 
     <?php         
//redirect(base_url(uri_string()));
         //$this->show->user_panel('fund/add-fund-history');
          
        }else{
        $this->session->set_flashdata("error", "Invalid Transaction Id");
                ?>
          <script>window.location.href = 'https://test.mlmreadymade.com/demo_new/user/crypto/add-fund-history';</script> 
     <?php        
        } 
          
          
        }else{
        $this->session->set_flashdata("error", "Invalid Request");
                 ?>
          <script>window.location.href = 'https://test.mlmreadymade.com/demo_new/user/fund/add-fund-history';</script> 
     <?php        
        }
          
    }
        
    public function add_fund(){
        $u_code = $this->session->userdata('user_id');
        $type = $this->payment_type; 
        
        if(isset($_POST['request_btn'])){
            $this->form_validation->set_rules('amount', 'Amount', 'required|greater_than[99]');
            if($this->form_validation->run() != False){
                $amnt = $this->input->post('amount');
              	
              	$fee = 0;//$this->fee($amnt);
                $payable = $amnt+$fee;
              
                $url = "https://test.eracom.in/sendcryp/";
                    $curl = curl_init($url);
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_POST, true);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    
                    $headers = [
                      "Content-Type: application/x-www-form-urlencoded"
                    ];
                    
                    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                    
                    $data = http_build_query([
                      "api_key" => $this->api_key,
                      "action" => "create_payment",
                      "payment_amount" => $payable,
                      "token" => "USDT-TRC20",
                      "network" => "tron"
                    ]);
                    
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                    
                    $result = json_decode(curl_exec($curl), true);
                    curl_close($curl);
                
                  //  print_R($result);
                    //die();
				if($result['success']==true){
				        $inserttrans['wallet_type']='fund_wallet';
    				   $inserttrans['tx_type']=$type;
                       $inserttrans['payment_type']='crypto';
                       $inserttrans['cripto_type']="USDT";
                      // $inserttrans['cripto_address']=$result;
                                       
    				   $inserttrans['debit_credit']="credit";             
    				   $inserttrans['u_code']=$u_code;
    				   $inserttrans['request_amount']=$amnt;
                  		$inserttrans['tx_charge']=$fee;
    				   $inserttrans['txs_res']=json_encode($result);
    				    
    				   $inserttrans['date']=date('Y-m-d H:i:s');
    				   $inserttrans['status']=0;
    				   $inserttrans['added_on']=date('Y-m-d H:i:s');
    				    $inserttrans['updated_on']=date('Y-m-d H:i:s');
    				   $inserttrans['remark']="Add $amnt $crncy from your crypto wallet";
					    
					    $inserttrans['cryp_status']=$result['status'];
					    $inserttrans['cryp_paymentId']=$result['paymentId'];
					    $inserttrans['cryp_paymentAmount']=$result['paymentAmount'];
					    $inserttrans['cryp_paymentWallet']=$result['paymentWallet'];
					    $inserttrans['cryp_expiryDate']=$result['expiryDate'];
					    
					
					if($this->db->insert('transaction',$inserttrans)){
					    $smsg="Send full amount to give address before ".$result['expiryDate'];
						$this->session->set_flashdata("success", $smsg);
						redirect(base_url(uri_string()));
					}
				}                
            }           
        }
        
        $check_exists = $this->conn->runQuery('*','transaction',"u_code='$u_code' and tx_type='$type' and status='0'");
        
        if($check_exists){
           $data['amount'] = $check_exists[0]->cryp_paymentAmount;
           $data['address'] = $check_exists[0]->cryp_paymentWallet;
           $this->show->user_panel('crypto/fund_add',$data);
           
        }else{
           
           $this->show->user_panel('crypto/fund_request');
            
        }
        
    }
    
       public function add_fund_history(){ 
        
           $conditions['u_code'] = $this->session->userdata('user_id');        
           $searchdata['from_table']='transaction';
           $conditions['tx_type']='CRYPADD';
        
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
         
            if(isset($_REQUEST['use_status']) && $_REQUEST['use_status']!=''){
                $conditions['use_status'] = $_REQUEST['use_status'];
            } 
           if(isset($_REQUEST['start_date']) && isset($_REQUEST['end_date']) && $_REQUEST['start_date']!='' && $_REQUEST['end_date']!='' ){
    			$start_date=date('Y-m-d 00:00:00',strtotime($_REQUEST['start_date']));
    			$end_date=date('Y-m-d 23:59:00',strtotime($_REQUEST['end_date']));
    			$where="(added_on BETWEEN '$start_date' and '$end_date')";
                $searchdata['where'] = $where;
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
            
            $data = $this->paging->search_response($searchdata,$this->limit,$this->panel_url.'/crypto/add-fund-history');
           
            $this->show->user_panel('crypto/fund_add_history',$data);  
            ///////////////////////////////////////////////////////////////////////////
            
    }
    

    
    
}