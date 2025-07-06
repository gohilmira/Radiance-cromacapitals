<?php
class Payment_model extends CI_Model{
   
     public function payment_success($payment_id){
         $ret=false;
         $get_data=$this->conn->runQuery('*','capture_payments',"id='$payment_id' and payment_status='0'");
         if($get_data){
            $this->db->set('payment_status',1);
            $this->db->where('id',$payment_id);
            $this->db->where('payment_status',0);
            $this->db->update('capture_payments');
                 
             $u_code=$get_data[0]->u_code;
             $used_to=$get_data[0]->used_to;
             $data=json_decode($get_data[0]->data,true);
             if($used_to=='topup'){
                 $ret=$this->action->topup($u_code,$data);
                 $this->db->set('apply_status',1);
                 $this->db->where('id',$payment_id);
                 $this->db->where('apply_status',0);
                 $this->db->update('capture_payments');
             }
         }
         return $ret;
     }
}

