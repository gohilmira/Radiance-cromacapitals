<?php
class Action_management_model extends CI_Model{
   
      public function topup($u_code,$data){
             
          
            $currenct_payout_id=$this->wallet->currenct_payout_id();
            $tx_username = array_key_exists('tx_username',$data) ? $data['tx_username']:'';
            
            if($tx_username!=''){
                $tx_u_code=$this->profile->id_by_username($tx_username);
                $pin_type=array_key_exists('selected_pin',$data) ? $data['selected_pin']:''; 
                if($pin_type!=''){
                    $pin_details=$this->pin->pin_details($pin_type);
                    
                    $mx_id=$this->conn->runQuery('MAX(active_id) as mx','users',"active_status='1'")[0]->mx;
                    $active_id = ($mx_id ? $mx_id:0)+1;
                    $update=array(
                        'active_id' => $active_id,
                        'active_status' => 1,
                        'active_date' => date('Y-m-d H:i:s'),
                    );
                    $this->db->where('id',$tx_u_code);
                    $this->db->update('users',$update);
                    
                    $orders=array();
                    $orders['u_code']=$tx_u_code;
                    $orders['tx_type']='purchase';
                    $orders['order_amount']=$pin_details->pin_rate;
                    $orders['order_bv']=$pin_details->business_volumn;
                    $orders['pv']=$pin_details->pin_value;
                    $orders['status']=1;
                    $orders['payout_id']=$currenct_payout_id;
                    $orders['payout_status']=0;
                    $orders['active_id']=$active_id;
                    $this->db->insert('orders',$orders);
                    
                    if($this->conn->setting('level_distribution_on_topup')=='yes'){
                        $this->distribute->level_destribute($tx_u_code,$pin_details->pin_rate,15);
                    }
                    
                    $sponsor_info=$this->profile->sponsor_info($tx_u_code,'mobile,id');
                            
                    if($sponsor_info){
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
                }
            }
            return true;
      }
}

