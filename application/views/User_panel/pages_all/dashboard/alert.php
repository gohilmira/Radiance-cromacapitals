	<?php

	
	$get_alert=$this->conn->runQuery('*','notice_board',"type='popup' and status='1' order by id desc");
	
	
	
	 
	    if($get_alert){
	        $repeated_type=$get_alert[0]->repeated_type;
	
        	$show='yes';
        	if($repeated_type=='once'){
        	    
        	    if($this->session->has_userdata('alert_show_set')){
        	        $show='no';
        	      
        	    }else{
        	        $this->session->set_userdata('alert_show_set','yes');
        	        
        	    }
        	    
        	}else{
        	    $show='yes';
        	}
        	
        	$start_date=$get_alert[0]->start_date;
        	$end_date=$get_alert[0]->end_date;
        	$today_time=date('Y-m-d H:i:s');
        	
        	if($start_date!='' && $start_date>$today_time){
        	     $show='no';
        	}
        	if($end_date!='' && $end_date<$today_time){
        	      $show='no';
        	}
        	
	        if($show=='yes'){
    	        ?>
            	<div class="modal fade" id="panel_popup">
                  <div class="modal-dialog">
                        <div class="modal-content" style="border:#f13c47;margin-top:90px !important;">
                    <!--<div class="modal-content border-warning">-->
                      <?php
                      if($get_alert[0]->title!=''){
                          ?>
                          <div class="modal-header bg-warning">
                            <h5 class="modal-title text-white"><?= $get_alert[0]->title;?></h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <?php
                      }
                      ?>
                      
                      <div class="modal-body" style="color:black;">
                        <?php
                      if($get_alert[0]->description!=''){
                          ?>
                        <p ><?= $get_alert[0]->description;?></p>
                        <?php
                      }
                      if($get_alert[0]->img_path!=''){
                        ?>
                        <img src="<?= $get_alert[0]->img_path;?>" style="width:100%;">
                        <?php  
                      }
                      ?>
                      
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-inverse-warning" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                
            <?php
	        }
        }
        
       
            ?>