<?php
class Plan extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function generation_setting(){
        
        /*if(isset($_POST['change_generation_btn'])){
            $get_all_details=$this->conn->runQuery('*','plan',"max_bv_req>'0'");
            foreach($get_all_details as $plan_details){
                 $update=array();
                 $update['min_bv_req']=$_POST['min_'.$plan_details->id];
                 $update['max_bv_req']=$_POST['max_'.$plan_details->id];
                 $update['rank_per']=$_POST['per_'.$plan_details->id];
                 $update['self_bv_req']=$_POST['self_'.$plan_details->id];
                 $this->db->where('id',$plan_details->id);
                 $this->db->update('plan',$update);
            }
        }*/
        
        if(isset($_POST['change_direct_btn'])){
           
            $get_direct_plan=$this->conn->runQuery('*','plan',"1='1'");
            foreach($get_direct_plan as $plan_details){
                 $update=array();
                 $update['offer_direct_required']=$_POST['offer_direct_'.$plan_details->id];
                 $update['offer_reward']=$_POST['offer_reward_'.$plan_details->id];
                 
                 $this->db->where('id',$plan_details->id);
                 $this->db->update('plan',$update);
            }
        }
        /*if(isset($_POST['change_royalty_btn'])){
            $get_direct_plan=$this->conn->runQuery('*','plan',"id='1'");
            foreach($get_direct_plan as $plan_details){
                 $update=array();
                 $update['max_from_1_leg']=$_POST['max_from_leg_'.$plan_details->id];
                 $update['royalty_per']=$_POST['royalty_per_'.$plan_details->id];
                 
                 $this->db->where('id',$plan_details->id);
                 $this->db->update('plan',$update);
            }
        }
        if(isset($_POST['change_tour_fund_btn'])){
            $get_direct_plan=$this->conn->runQuery('*','plan',"id='1'");
            foreach($get_direct_plan as $plan_details){
                 $update=array();
                 $update['tour_fund_amnt']=$_POST['tour_fund_'.$plan_details->id];
                 $update['tour_fund_monthly']=$_POST['monthly_tour_'.$plan_details->id];
                 
                 $this->db->where('id',$plan_details->id);
                 $this->db->update('plan',$update);
            }
        }*/
        
        if(isset($_POST['change_reward_btn'])){
            $get_direct_plan=$this->conn->runQuery('*','plan',"1='1'");
            foreach($get_direct_plan as $plan_details){
                 $update=array();
                 $update['reward']=$_POST['reward_'.$plan_details->id];
                 $update['reward_business']=$_POST['reward_business_'.$plan_details->id];
                 $update['bonanza_start_date']=$_POST['bonanza_start_'.$plan_details->id];
                 $update['bonanza_end_date']=$_POST['bonanza_end_'.$plan_details->id];
                 $update['rank_name']=$_POST['rank_name_'.$plan_details->id];
                 
                 $this->db->where('id',$plan_details->id);
                 $this->db->update('plan',$update);
               
            }
        }
        
         $this->show->admin_panel('plan/generation',array());
         
    }
}