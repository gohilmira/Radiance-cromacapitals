<?php
class Order extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
         $this->panel_url=$this->admin_url=$this->conn->company_info('admin_path');
         $this->limit=10;
    }

    public function index(){
        $searchdata['from_table']='orders'; 
        
        
        if(isset($_REQUEST['username']) && $_REQUEST['username']!=''){
            $spo=$this->profile->column_like($_REQUEST['username'],'username'); 
            
            if($spo){
                $conditions['u_code'] = $spo;
            }
           
        } 
         
        if(isset($_REQUEST['id']) && $_REQUEST['id']!=''){
            $likeconditions['id']=$_REQUEST['id'];
        }
        // if(isset($_REQUEST['payment_status']) && $_REQUEST['payment_status']!=''){
        //     $conditions['payment_status'] = $_REQUEST['payment_status'];
        // }
        if(isset($_REQUEST['payment_status']) && $_REQUEST['payment_status']!=''){
            $conditions['status'] = $_REQUEST['payment_status'];
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
        $data = $this->paging->search_response($searchdata,$this->limit,$this->admin_url.'/order'); 
         
        $data['statusPyament']=isset($_REQUEST['payment_status']);
        $this->show->admin_panel('order_all',$data);    
        
        
    }
    
    public function delete(){
        $order_id=$_GET['id'];
        $this->db->where('id',$order_id);
        $this->db->delete('orders');
        
        $this->db->where('order_id',$order_id);
        $this->db->delete('order_items');
        
        $smsg="Order Deleted Successfully.";
        $this->session->set_flashdata("success", $smsg);
        redirect(base_url($this->panel_url.'/order'));
    }
    
    
    public function view(){
        
        $vd_id=$_REQUEST['id'];
        //$data['order_details']=$order_details=$this->conn->runQuery('*','orders',"id='$vd_id'")[0];
        $date=date('Y-m-d H:i:s');
         
            if(isset($_POST['approve_btn'])){
               $order_status=$_POST['order_status'];
                if($order_detailsp['status']!=$order_status){
                    $payment_status=$_POST['payment_status'];
                    
                    $this->db->set('payment_status',$payment_status);
                    $this->db->set('status',$order_status);
                    $date_column=$this->order->date_column($order_status);
                    $this->db->set($date_column,$date);
                    $this->db->where('id',$vd_id);
                    $this->db->update('orders');
                }
                
                $smsg=" Data Updated Successfully.";
                $this->session->set_flashdata("success", $smsg);
                redirect(base_url($this->panel_url.'/order/view?id='.$vd_id));
            }
         $data['vd_id']=$vd_id;
         $this->show->admin_panel('order_view',$data);
         
    }
    
     public function gst_report(){
        $searchdata['from_table']='orders'; 
        
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
        
         if(!empty($likeconditions)){
            $searchdata['likecondition'] = $likeconditions;
        }
        
        if(!empty($conditions)){
            $searchdata['conditions'] = $conditions;
        }
         $data = $this->paging->search_response($searchdata,$this->limit,$this->admin_url.'/order/gst-report'); 
         $this->show->admin_panel('gst_report',$data);
    } 
    
    
    public function bill(){
        $this->show->admin_panel('order_bill');
    } 
    
    public function bill_new(){
        
        $this->show->admin_panel('order_product_bill_new');
    }
    
}