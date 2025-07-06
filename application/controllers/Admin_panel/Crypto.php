<?php
class Crypto extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->currency=$this->conn->company_info('currency');
        $this->admin_url=$this->conn->company_info('admin_path');
        $this->limit=10;
    }


    public function index(){ 
        $this->show->admin_panel('api');
    }
   
     public function fund_add_history(){
        
        $searchdata['search_string']='fund_transfer_history_search';
        $conditions['tx_type']='CRYPADD';
       
        $searchdata['order_by']='id desc';
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
         
          if(!empty($likeconditions)){
            $searchdata['likecondition'] = $likeconditions;
        }
        
        if(!empty($conditions)){
            $searchdata['conditions'] = $conditions;
        }
        $data = $this->paging->search_response($searchdata,$this->limit,$this->admin_url.'/Crypto/fund-add-history'); 
         
            
        $this->show->admin_panel('fund_add_history',$data);
              
    }
}