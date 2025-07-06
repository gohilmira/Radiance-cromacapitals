<?php
class Invest extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

       /* if($this->conn->plan_setting('invest_section')!=1){
            $panel_path=$this->conn->company_info('panel_path');
            redirect(base_url($panel_path.'/dashboard'));
            $this->currency=$this->conn->company_info('currency');
           
        }*/
         $this->admin_url=$this->conn->company_info('admin_path');
    }
 public function member(){
       //  $this->show->user_panel('coming_soon');

       if(isset($_POST['register'])){
           
            $requires=$this->conn->runQuery("*",'advanced_info',"title='Registration'");
            $value_by_lebel= array_column($requires, 'value', 'label');
         
            if(array_key_exists('is_sponsor_required', $value_by_lebel) && $value_by_lebel['is_sponsor_required']=='yes'){
                
                $this->form_validation->set_rules('u_sponsor', 'Sponsor', 'required|callback_is_sponsor_available');                
               $register['u_sponsor']=$this->profile->id_by_username($_POST['u_sponsor']);
            }else{
                $register['u_sponsor']= 1;
            }
            $sponsor_id=$register['u_sponsor'];
            
             if(array_key_exists('user_gen_method', $value_by_lebel) && $value_by_lebel['user_gen_method']=='manual'){
                 $this->form_validation->set_rules('usename', 'Usename', 'required|trim|callback_is_username_valid');
                 $register['username']= $value_by_lebel['user_gen_prefix'].$_POST['usename'];
             }else{
                 $register['username'] = $this->get_username();
                 
             }
            
              $this->form_validation->set_rules('name', 'Name', 'required');
             
            //   if(array_key_exists('tx_pass_gen_type', $value_by_lebel)  && $value_by_lebel['tx_pass_gen_type']=='manual'){
            //       $this->form_validation->set_rules('tx_password', 'Transaction Password', 'trim|required');
            //         $this->form_validation->set_rules('tx_confirm_password', 'Transaction Password Confirmation', 'trim|required|matches[tx_password]');
            //         $pw=$register['tx_password'] = $_POST['tx_password'];
            //   }else{
                  
            //       $register['tx_password'] =$pw;
            //   }
             
              
              
              
              if(array_key_exists('country_code', $value_by_lebel) && $value_by_lebel['country_code']=='yes'){
                   $this->form_validation->set_rules('country_code', 'Country', 'trim|required');
                  $register['country'] = $_POST['country_code'];
              }
              
              
              if(array_key_exists('reg_type', $value_by_lebel) && $value_by_lebel['reg_type']=='binary'){
                   $this->form_validation->set_rules('position', 'Position', 'trim|required');
                  $register['position'] = $_POST['position'];
                  $register['Parentid'] = $this->binary->new_parent($register['u_sponsor'],$_POST['position']);
              }              
              
              
              
              if(array_key_exists('pass_gen_type', $value_by_lebel)  && $value_by_lebel['pass_gen_type']=='manual'){
                  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
                    $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|min_length[6]|matches[password]');
                    $pw=$register['password'] = md5($_POST['password']);
              }else{
                  $pw=random_string($value_by_lebel['pass_gen_fun'], $value_by_lebel['pass_gen_digit']);
                  $register['password'] = md5($pw);
              }
              
             
              //$this->form_validation->set_rules('accept_terms', 'Accept terms', 'required');
              
                if($this->form_validation->run() != False){
                    $pwd = md5($_POST['password']);
                    // $register['tx_password'] =$user_name= $_POST['tx_password'];
                    $register['password'] = $pwd;
                        
                    $register['name'] =$user_name= $_POST['name'];
                    $register['user_type'] = 'user';
                    $code=$this->conn->get_insert_id('users',$register);
                  
                    if($code){
                        
                       /* $inser_wallet=array();
                        $inser_wallet['u_code']=$code;
                        if($this->db->insert('user_wallets',$inser_wallet)){
                            $this->update_ob->add_direct($sponsor_id);
                            $this->update_ob->add_gen($sponsor_id);
                            $this->update_ob->add_gen_user($sponsor_id,$code);
                            
                            $ge=array();
                            $ge['u_code']=$code;
                            $ge['gen_team']="[]";
                            $this->db->insert('user_teams',$ge);
                            
                             if($this->conn->setting('reg_type')=='binary'){
                                $this->update_ob->update_binary($sponsor_id);
                            }
                        }
                        */

                    $this->session->set_flashdata("success", "Your Account has been registered. You can login now. Username : ".$register['username']." & Password :".$_POST['password']);
                    $website=$this->conn->company_info('title');

                         $company_url=$this->conn->company_info('base_url');
                         $msg2="Dear ".$register['name']." , Welcome to $website. Your User ID : ".$register['username'].", Password : ".$_POST['password']." . For more visit $company_url .";
                         
                        //  $this->message->sms($mobile,$msg2);
                         //$this->message->send_mail($register['email'],'Registration success',$msg2);
                        
                         redirect(base_url('admin/invest/success?username='.$register['username'].'&pass='.$_POST['password'].'&name='.$_POST['name']),"refresh");
                        
                        
                    }else{
                         $this->session->set_flashdata("error", "Somthing Wrong! Please try again.");
                    }
                         
                        
               
                } 
         }
       $this->show->admin_panel('invest_add_member');
    }
    
    
     public  function check_sponsor_exist(){
        $res['error']=true;
        $where = array(
            'username' => $_POST['u_sponsor']          
        );  
        $details  =  $this->conn->runQuery('id,name,active_status','users', $where);        
        if($details){
            if($this->conn->setting('only_active_sponsor')=='yes'){
                if($details[0]->active_status==1){
                    $res['msg']=$details[0]->name;
                    $res['error']=false;
                }else{
                    $res['msg']="Sponsor not active";
                }
            }else{
                $res['msg']=$details[0]->name;
                $res['error']=false;
            }
        }else{              
            $res['msg']="Sponsor not exist";
        }
        print_r(json_encode($res));
    }

    
      public function success(){
       $this->show->admin_panel('success');  
    }
    public function investment(){
       //  $this->show->user_panel('coming_soon');

        if(isset($_POST['topup_btn'])){
            $pinvalidation='';

            if($this->conn->setting('topup_type')=='amount'){
                $this->form_validation->set_rules('selected_wallet', 'Wallet', 'required|callback_check_wallet_useable|callback_check_wallet_balance');
            }elseif($this->conn->setting('topup_type')=='pin'){
                $pinvalidation="|callback_check_pin_available";
            }
            

            $this->form_validation->set_rules('tx_username', 'Username', 'required|callback_valid_username|callback_already_topup');
            $this->form_validation->set_rules('selected_pin', 'Package', "required|callback_valid_package");

            if($this->form_validation->run() != False){
                $mx_id=$this->conn->runQuery('MAX(active_id) as mx','users',"active_status='1'")[0]->mx;
                $active_id = ($mx_id ? $mx_id:0)+1;
                
                $currenct_payout_id=$this->wallet->currenct_payout_id();
                $tx_username=$_POST['tx_username'];
                $tx_u_code=$this->profile->id_by_username($tx_username);
                $pin_type=$_POST['selected_pin'];
                $pin_details=$this->pin->pin_details($pin_type);
                
                $wallet_type="main_wallet";
                
                $orders['u_code']=$tx_u_code;
                $orders['tx_type']='purchase';
                $orders['order_amount']=$pin_details->pin_rate;
                $orders['order_bv']=$pin_details->business_volumn;
                $orders['pv']=$pin_details->pin_value;
                $orders['status']=1;
                $orders['payout_id']=$currenct_payout_id;
                $orders['payout_status']=0;
                $orders['active_id']=$active_id;

                if($this->db->insert('orders',$orders)){
                    
                    $update=array(
                        'active_id' => $active_id,
                        'active_status' => 1,
                        'active_date' => date('Y-m-d H:i:s'),
                    );
                    $this->db->where('id',$tx_u_code);
                    $this->db->update('users',$update);
                    
                    $this->db->set('active_id',$active_id);
                    $this->db->where('u_code',$tx_u_code);
                    $this->db->update('user_wallets');
                    

                    if($this->conn->setting('topup_type')=='amount'){
                        $username=$this->session->userdata('profile')->username;
                        
                        $transaction['u_code']=$this->session->userdata('user_id');
                        $transaction['tx_u_code']=$tx_u_code;
                        $transaction['tx_type']="topup";
                        $transaction['debit_credit']="debit";
                        $transaction['wallet_type']=$wallet_type;
                        $transaction['amount']=$pin_details->pin_rate;
                        $transaction['date']=date('Y-m-d H:i:s');
                        $transaction['status']=1;
                        $transaction['open_wallet']=$this->update_ob->wallet($this->session->userdata('user_id'),$wallet_type);
                        $transaction['closing_wallet']=$transaction['open_wallet']-$transaction['amount'];
                        $transaction['remark']="$username topup $tx_username of amount $pin_details->pin_rate";
                        
                        if($this->db->insert('transaction',$transaction)){
                            $amnt=$transaction['amount'];
                            $this->update_ob->add_amnt($this->session->userdata('user_id'),$wallet_type,-$amnt);
                            
                            
                            
                        }
                    }elseif($this->conn->setting('topup_type')=='pin'){
                        
                        ///////////////////////////////////////////////////////////////////////
                        //$username=$this->session->userdata('profile')->username;
                           ///////////////////////////////////////////////////////////////////////
                        $username=$this->session->userdata('profile')->username;
                            $transaction1['u_code']=$tx_u_code;
                            $transaction1['tx_u_code']=$this->session->userdata('user_id');
                            $transaction1['tx_type']="coupon";
                           
                            $transaction1['debit_credit']="credit";
                            $transaction1['wallet_type']='coupon';
                            $transaction1['amount']='1200';
                            $transaction1['date']=date('Y-m-d H:i:s');
                            $transaction1['status']=1;
                            $transaction1['open_wallet']=$this->update_ob->wallet($tx_u_code,'coupon');
                            $transaction1['closing_wallet']=$transaction1['open_wallet']+$transaction1['amount'];
                            $transaction1['remark']="Recieve share profit income of amount 1200";
                            
                            if($this->db->insert('transaction',$transaction1)){
                               
                                $amnts=$transaction1['amount'];
                                $this->update_ob->add_amnt($tx_u_code,'coupon',$amnts);
                                
                            }
                        
                        
                        //////////////////////////////////////////////////////////////////////
                        
                       /* $pin_update_details=$this->pin->user_pins_by_type($this->session->userdata('user_id'),$pin_type);
                        $pin_id=$pin_update_details[0]->id;
                        $update_details['use_status']=1;
                        $update_details['used_in']='topup';
                        $update_details['usefor']=$tx_u_code;
                        $this->db->where('id',$pin_id);
                        $this->db->update('epins',$update_details);
*/
                       /* 
                        $cnt_tx_pre_pins = ($pin_update_details ? count($pin_update_details):0);

                        $pin_history['user_id']=$this->session->userdata('user_id');
                        $pin_history['debit']=1;
                        $pin_history['prev_pin']=$cnt_tx_pre_pins;
                        $pin_history['curr_pin']=$cnt_tx_pre_pins-1;
                        $pin_history['pin_type']=$pin_details->pin_type;
                        $pin_history['tx_type']='debit';
                        $name=$this->session->userdata('profile')->name;
                        $username=$this->session->userdata('profile')->username;
                        $pin_history['remark']="$name ( $username ) Topup $tx_username ";
                        $this->db->insert('pin_history',$pin_history);
                        */
                        //$this->update_ob->used_pin($this->session->userdata('user_id'));
                    }

                    /*if($this->conn->setting('level_distribution_on_topup')=='yes'){
                        $this->distribute->level_destribute($tx_u_code,$pin_details->pin_rate,1);
                    }*/
                    
                   
                    $sponsor_info=$this->profile->sponsor_info($tx_u_code,'mobile,id');
                    
                    if($sponsor_info){
                        $sponsor_mobile = $sponsor_info->mobile;
                        $tx_profile_info=$this->profile->profile_info($tx_u_code,'name');
                        $tx_name=$tx_profile_info->name;
                        $website=$this->conn->company_info('title');
                        $msg="Congratulations!! $tx_name Has activated his Position. Team $website";
                        //$this->message->sms($sponsor_mobile,$msg);
                        $this->update_ob->active_gen($sponsor_info->id);
                        $this->update_ob->active_direct($sponsor_info->id);
                    }

                   // if($this->conn->plan_setting('matrix')=='1'){
                        $this->distribute->gen_pool($tx_u_code,$pin_details->pin_rate);
                         
                       /* $get_matrix_parent=$this->binary->get_matrix_parent(1);
                        $update_position['matrix_pool']=$get_matrix_parent['parent'];
                        $update_position['matrix_position']=$get_matrix_parent['position'];
                        $this->db->where('id',$tx_u_code);
                        $this->db->update('users',$update_position);*/
                   // }
                    
                    $plan_type=$this->session->userdata('reg_plan'); 
                    if($plan_type=='single_leg'){
                        // $this->update_ob->update_single_leg($tx_u_code,$active_id);
                    }
                    
                   
                    
                    $this->session->set_flashdata("success", "Package $pin_details->pin_type Activated successfully.");
                    redirect(base_url(uri_string()));
                }else{
                    $this->session->set_flashdata("error", "Something wrong.");
                }
            }
        }


       $this->show->admin_panel('invest_topup');
    }


 public function reinvestment(){
      

        if(isset($_POST['topup_btn'])){
            $pinvalidation='';

            if($this->conn->setting('topup_type')=='amount'){
                $this->form_validation->set_rules('selected_wallet', 'Wallet', 'required|callback_check_wallet_useable');
            }elseif($this->conn->setting('topup_type')=='pin'){
                $pinvalidation="|callback_check_pin_available";
            }
            

            $this->form_validation->set_rules('tx_username', 'Username', 'required|callback_valid_username|callback_check_topup');
            $this->form_validation->set_rules('selected_pin', 'Package', "required|callback_valid_package".$pinvalidation);
            $this->form_validation->set_rules('amount', 'Amount', "required|callback_valid_amount");
            if($this->form_validation->run() != False){
                 $mx_id=$this->conn->runQuery('MAX(active_id) as mx','users',"active_status='1'")[0]->mx;
                $active_id = ($mx_id ? $mx_id:0)+1;
                
                $currenct_payout_id=$this->wallet->currenct_payout_id();
                $tx_username=$_POST['tx_username'];
                $tx_u_code=$this->profile->id_by_username($tx_username);
                $pin_type=$_POST['selected_pin'];
                $pin_details=$this->pin->pin_details($pin_type);
                $amount=$_POST['amount']; 
                $orders['u_code']=$tx_u_code;
                $orders['tx_type']='repurchase';
                $orders['order_amount']=$amount;//$pin_details->pin_rate;
                $orders['order_bv']=$amount;//$pin_details->business_volumn;
                $orders['pv']=1;
                $orders['status']=1;
                $orders['payout_id']=$currenct_payout_id;
                $orders['payout_status']=0;
                $orders['active_id']=$active_id;

                if($this->db->insert('orders',$orders)){
                    
                    $update=array(
                            'retopup_status' => 1,
                            'retopup_date' => date('Y-m-d H:i:s'),
                        );
                        $this->db->where('id',$tx_u_code);
                        $this->db->update('users',$update);


                    if($this->conn->setting('topup_type')=='amount'){
                        //$username=$this->session->userdata('profile')->username;
                        
                        //$transaction['u_code']='';
                        
                        $transaction['tx_u_code']=$tx_u_code;
                        $transaction['tx_type']="retopup";
                        $transaction['debit_credit']="debit";
                        $transaction['wallet_type']=$_POST['selected_wallet'];
                        $transaction['amount']=$amount;
                        $transaction['date']=date('Y-m-d H:i:s');
                        $transaction['status']=1;
                        //$transaction['open_wallet']=$this->update_ob->wallet($this->session->userdata('user_id'),$_POST['selected_wallet']);
                        //$transaction['closing_wallet']=$transaction['open_wallet']-$transaction['amount'];
                        $transaction['remark']="Admin topup $tx_username of amount $amount";
                        
                        if($this->db->insert('transaction',$transaction)){
                            $amnt=$transaction['amount'];
                            //$this->update_ob->add_amnt($this->session->userdata('user_id'),$_POST['selected_wallet'],-$amnt);
                        }
                    }elseif($this->conn->setting('topup_type')=='pin'){
                        $pin_update_details=$this->pin->user_pins_by_type($this->session->userdata('user_id'),$pin_type);
                        $pin_id=$pin_update_details[0]->id;
                        $update_details['use_status']=1;
                        $update_details['used_in']='topup';
                        $update_details['usefor']=$tx_u_code;
                        $this->db->where('id',$pin_id);
                        $this->db->update('epins',$update_details);
                        $cnt_tx_pre_pins = ($pin_update_details ? count($pin_update_details):0);

                        $pin_history['user_id']=$this->session->userdata('user_id');
                        $pin_history['debit']=1;
                        $pin_history['prev_pin']=$cnt_tx_pre_pins;
                        $pin_history['curr_pin']=$cnt_tx_pre_pins-1;
                        $pin_history['pin_type']=$pin_details->pin_type;
                        $pin_history['tx_type']='debit';
                        $name=$this->session->userdata('profile')->name;
                        $username=$this->session->userdata('profile')->username;
                        $pin_history['remark']="$name ( $username ) Topup $tx_username ";
                        $this->db->insert('pin_history',$pin_history);
                        
                        $this->update_ob->used_pin($this->session->userdata('user_id'));
                    }
                    
                    
                     if($this->conn->setting('level_distribution_on_topup')=='yes'){
                        $this->distribute->level_destribute($tx_u_code,$amount,16);
                    }
                    
                   
                    $sponsor_info=$this->profile->sponsor_info($tx_u_code,'mobile,id');
                    
                    if($sponsor_info){
                        $sponsor_mobile = $sponsor_info->mobile;
                        $tx_profile_info=$this->profile->profile_info($tx_u_code,'name');
                        $tx_name=$tx_profile_info->name;
                        $website=$this->conn->company_info('title');
                        $msg="Congratulations!! $tx_name Has activated his Position. Team $website";
                        //$this->message->sms($sponsor_mobile,$msg);
                        $this->update_ob->active_gen($sponsor_info->id);
                        $this->update_ob->active_direct($sponsor_info->id);
                    }
                    
                    
                   
                   
                    if($this->conn->plan_setting('matrix')=='1'){
                        $get_matrix_parent=$this->binary->get_matrix_parent(1);
                        $update_position['matrix_pool']=$get_matrix_parent['parent'];
                        $update_position['matrix_position']=$get_matrix_parent['position'];
                        $this->db->where('id',$tx_u_code);
                        $this->db->update('users',$update_position);
                    }
                    
                    $plan_type=$this->session->userdata('reg_plan'); 
                    if($plan_type=='single_leg'){
                         $this->update_ob->update_single_leg($tx_u_code,$active_id);
                    }
                    
                     
                    
                    $this->session->set_flashdata("success", "Package $pin_details->pin_type Activated successfully.");
                    redirect(base_url(uri_string()));
                }else{
                    $this->session->set_flashdata("error", "Something wrong.");
                }
            }
        }


       $this->show->admin_panel('invest_retopup');
    }
  public function check_topup($str){
        if($str!=''){
        $chk=$this->conn->runQuery("id",'users',"username='$str' and active_status='1'");
            if($chk){
                return true;
            }else{
                $this->form_validation->set_message('check_topup', "First Topup .");
                return false;                
                
            }
        }else{
            $this->form_validation->set_message('check_topup', "Please enter username.");
            return false;
        }
        
    }
       
  public function valid_amount($str){
        $packages=$_POST['selected_pin'];
        $check_pin_detail=$this->conn->runQuery("pin_rate",'pin_details',"pin_type='$packages' and status=1")[0]->pin_rate;
        $check_max_rate=$this->conn->runQuery("maximum_pin_rate",'pin_details',"pin_type='$packages' and status=1")[0]->maximum_pin_rate;
         
        
        if($str>=$check_pin_detail && $str<=$check_max_rate){  
            if( $str % $check_pin_detail == 0){      
            	return true;
            }else{
                 $this->form_validation->set_message('valid_amount', "Invalid Amount! Amount must be multiple of $check_pin_detail .");
                 return false;
            }
        }else{
              $this->form_validation->set_message('valid_amount', "Invalid Amount! Please amount must be greater than $check_pin_detail and Maximum $check_max_rate.");
               return false;
        }
    }

   

     public function valid_username($str){
        $check_username=$this->conn->runQuery("id",'users',"username='$str'");
        if($check_username){
            return true;
        }else{
              $this->form_validation->set_message('valid_username', "Invalid Username! Please check username.");
               return false;
        }
    }
    
    
     
     public function valid_pool($str){
     
        
        $tx_u_code=$this->profile->id_by_username($str);
        $check_username=$this->conn->runQuery("id",'pool',"u_id='$tx_u_code'");
        if($check_username){
            return true;
        }else{
              $this->form_validation->set_message('valid_pool', "Already user in pool.");
               return false;
        }
    }
    
     
     
     public function valid_package($str){
        $check_username=$this->conn->runQuery("id",'pin_details',"pin_type='$str' and status=1");
        if($check_username){
            return true;
        }else{
              $this->form_validation->set_message('valid_package', "Invalid Package! Please select valid package.");
               return false;
        }
    }

    public function check_pin_available($str){
        $user_pins=$this->pin->user_pins_by_type($this->session->userdata('user_id'),$str);
            if($user_pins){
                return true;
            }else{
                $this->form_validation->set_message('check_pin_available', "Insufficient pin in account .");
                return false;
            }
    }

    public function check_wallet_useable($str){
        $available_wallets=$this->conn->setting('invest_wallets');
        $useable_wallet=json_decode($available_wallets);
        if(array_key_exists($str,$useable_wallet)){
            return true;
        }else{
              $this->form_validation->set_message('check_wallet_useable', "You can not Topup from this wallet");
               return false;
        }
    }

    public function check_wallet_balance($str){
       if(isset($_POST['selected_pin']) && $_POST['selected_pin']!=''){

        $checkable=$this->pin->pin_details($_POST['selected_pin'])->pin_rate;
            $balance=$this->update_ob->wallet($this->session->userdata('user_id'),$str);        
            if($balance>=$checkable){
                return true;
            }else{
                $this->form_validation->set_message('check_wallet_balance', "Insufficient Fund in wallet.");
                return false;
            }
       }else{
            $this->form_validation->set_message('check_wallet_balance', "Please Select valid pin.");
            return false;
       }
        
    }

    public function already_topup($str){
       if($str!=''){

        $chk=$this->conn->runQuery("id",'users',"username='$str' and active_status='1'");
            if($chk){
                $this->form_validation->set_message('already_topup', "User already have active package.");
                return false;                
            }else{
                return true;
            }
       }else{
            $this->form_validation->set_message('already_topup', "Please enter username.");
            return false;
       }
        
    }
    
    public function pin_detail(){
        $type=trim($_POST['selected_pin']);
        $u_id=$this->session->userdata('user_id');
        $res='';
        $get_pin_detail=$this->conn->runQuery('*',"epins","pin_type LIKE '%$type%' and use_status='0' and u_code='$u_id'");
        //echo  $sql = $this->db->last_query();
        if($get_pin_detail){
            $res=count($get_pin_detail);
        } else{
            $res=0;
        }
        echo $res;
    }
    
   public  function is_mobile_valid($str){
        $where = array(
            'mobile' => $str            
        );
        $result=$this->conn->runQuery('id','users', $where);
        if($result){            
            $mobile_users=$this->conn->setting('mobile_users');
            if(count($result)>=$mobile_users){
                  $this->form_validation->set_message('is_mobile_valid', "You exceed maximum number of mobile use limit! Please Try another.");
                 return false;                
            }else{
                return true;
            }
        }else{
            return true;
        }
    } 
    
    
     public  function is_sponsor_available($str){
        $where = array(
            'username' => $str            
        );       
        $details=$this->conn->runQuery('id,active_status','users', $where);
        if($details){
                 return true;
            
        }else{
              $this->form_validation->set_message('is_sponsor_available', "Sponsor not Exists! Please Try another.");
               return false;
        }
    }
    
     public  function is_email_valid($str){
        $where = array(
            'email' => $str            
        );
        $result=$this->conn->runQuery('id','users', $where);
        if($result){           
            $email_users=$this->conn->setting('email_users');
            if(count($result)>=$email_users){               
                  $this->form_validation->set_message('is_email_valid', "You exceed maximum number of email use limit! Please Try another.");
                   return false;
            }else{
                return true;
            }
        }else{
            return true;
        }
    }
      public  function is_username_valid($str){
        $where = array(
            'username' => $str            
        );       
        if($this->conn->runQuery('id','users', $where)){
            $this->form_validation->set_message('is_username_valid', "Username Already Exists! Please Try another.");
            return false;
        }else{
              
               return true;
        }
    }
    
    
    public function package(){
        $data=array();
        $limit=$this->limit;
        
        $conditions['u_code'] = $this->session->userdata('user_id');        
        $data['from_table']='orders';
        $data['base_url']=$base_url=base_url().$this->panel_url.'/invest/invest_history'; 
        
        if(isset($_REQUEST['reset'])){
             redirect(base_url($base_url));
        }
        if(isset($_REQUEST['status']) && $_REQUEST['status']!='all'){
            $conditions['status']=$_REQUEST['status'];
        }
          
        if(isset($_REQUEST['start_date']) && $_REQUEST['start_date']!='' && isset($_REQUEST['end_date']) && $_REQUEST['end_date']!=''){
            $data['where']="date>='".$_REQUEST['start_date']."' and date<='".$_REQUEST['end_date']."'";
        }
        if(isset($_REQUEST['limit']) && $_REQUEST['limit']!=''){
            $limit=$_REQUEST['limit'];
        }
        
        $data['conditions']=$conditions;
        $data = $this->paging->search_response($data,$limit,$base_url);
        
        $data['base_url']=$base_url;
        
        $this->show->user_panel('invest_history',$data);
        
    }
    public function get_username(){
        $selected='no';
        $user_gen_prefix=$this->conn->setting('user_gen_prefix');
        $user_gen_digit=$this->conn->setting('user_gen_digit');
        $user_gen_fun=$this->conn->setting('user_gen_fun');
        while($selected=='no'){
            $selected='yes';
            $username=$user_gen_prefix.random_string($user_gen_fun, $user_gen_digit);
            $check_username_exists=$this->conn->runQuery('username','users',"username='$username'");
            if($check_username_exists){
                $selected='no';
            }
        }        
        return $username;
    }

}