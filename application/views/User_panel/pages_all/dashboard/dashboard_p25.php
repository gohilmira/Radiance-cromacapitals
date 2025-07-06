
<?php
    $plan_type=$this->session->userdata('reg_plan'); 
    $profile=$this->session->userdata("profile");
    $user_id=$this->session->userdata('user_id');
    $plan=$this->conn->runQuery("*",'plan',"1=1");
    $website_settings=$this->conn->plan_setting("dashboard"); 
    $currency = $this->conn->company_info('currency');
    $incomes=$this->conn->runQuery("*",'wallet_types',"wallet_type='income' and  status='1' and $plan_type='1'");
    $team=$this->conn->runQuery("*",'wallet_types',"wallet_type='team' and  status='1' and $plan_type='1'");
    $wallets=$this->conn->runQuery("*",'wallet_types',"wallet_type IN ('wallet','pin') and  status='1'  and $plan_type='1'");
    $withdrawals=$this->conn->runQuery("*",'wallet_types',"wallet_type = 'withdrawal' and  status='1'  and $plan_type='1'");
    $payouts=$this->conn->runQuery("*",'wallet_types',"wallet_type = 'payout' and  status='1'  and $plan_type='1'");
    $w_balance=$this->conn->runQuery('*','user_wallets',"u_code='$user_id'");
    $wallet_balance=$w_balance ? $w_balance[0]:array();
    $total=$this->conn->runQuery('SUM(amount) as total','transaction',"u_code='$user_id' and tx_type='income' and date(date)=DATE(NOW())")[0]->total;
?> 
 
 
 
 
 <main class="page-content">
 <?php
   $panel_pa=$this->conn->company_info('panel_directory');
      $this->load->view($panel_pa.'/pages/dashboard/alert');
    ?>           
<div class="container-fluid">
     <!--First-row-->
    <div class="row">
        <!-- <?php
    $get_alert_mar=$this->conn->runQuery('*','notice_board',"type='marquee' and status='1' order by id desc");
    if($get_alert_mar){
    ?>
    <marquee behavior="scroll" direction="left" scrollamount="10" class="card-bg-1 card"><?= $get_alert_mar[0]->description;?></marquee>
    <?php
    }else{?>
    	<marquee behavior="scroll" direction="left" scrollamount="10" class="card-bg-1 card"><?= $this->conn->company_info('news');?></marquee>
    
    <?php } ?>-->
    <?php
    $ttl=array();
    foreach($incomes as $income){    
        $slug =  $income->wallet_column; 
       ?>
        <div class="col-lg-3">
            <div class="card_new_design">
                <div class="card_new_body">
                    <div class="heading_card_body">
                        <div class="heading_first">
                            <p><?= $income->name;?> </p>
                            <h3><?=$currency;?>&nbsp;<?= $ttl[]=(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0); ?></h3>
                        </div>
                        <div class="heading_icon">
                            <div class="userpanel_icon">
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
           }
        ?>
        <!--<div class="col-lg-3">
            <div class="card_new_design">
                <div class="card_new_body">
                    <div class="heading_card_body">
                        <div class="heading_first">
                            <p>Total Balance</p>
                            <h3>57,865</h3>
                        </div>
                        <div class="heading_icon">
                            <div class="userpanel_icon">
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card_new_design">
                <div class="card_new_body">
                    <div class="heading_card_body">
                        <div class="heading_first">
                            <p>Total Balance</p>
                            <h3>57,865</h3>
                        </div>
                        <div class="heading_icon">
                            <div class="userpanel_icon">
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card_new_design">
                <div class="card_new_body">
                    <div class="heading_card_body">
                        <div class="heading_first">
                            <p>Total Balance</p>
                            <h3>57,865</h3>
                        </div>
                        <div class="heading_icon">
                            <div class="userpanel_icon">
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
    <!--second-row-->
    <div class="row">
        <!--<div class="col-lg-4">
            <div class="card_new_design">
                <div class="card_new_body">
                   <!-- <div class="heading_first">
                        <p class="current_balance">your current balance</p>
                        <h3>$72745.00</h3>
                    </div>-->
                   <!-- <div class="total_detail_balance">-->
                        <!--<p class="mb-1 d-flex">
                            <span><i class="fa fa-money" aria-hidden="true"></i></span>
                            <span class="reserved_data">Received Amount :</span> 
                            <span class="ml-auto reserved_data_price">+ 1,50,50</span>
                        </p>-->
                        <!--<p class="mb-1 d-flex">
                            <span><i class="fa fa-money" aria-hidden="true"></i></span>
                            <span class="reserved_data">Sent Amount : </span> 
                            <span class="ml-auto reserved_data_price">-1,50,50</span>
                        </p>-->
                      <!--  <p class="mb-1 d-flex">
                            <span><i class="fa fa-money" aria-hidden="true"></i></span>
                            <span class="reserved_data">Total Amount : </span> 
                            <span class="ml-auto reserved_data_price">+ 1,50,50</span>
                        </p>-->
                   <!-- </div>--
                   <!-- <div class="row mt-2">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="#" class="btn_transfer">Transfer</a>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <a href="#" class="btn_transfer">Receive</a>
                        </div>
                    </div>-
                </div>
            </div>
        </div>-->
        <?php
        foreach($wallets as $section){ 
            $slug =  $section->wallet_column;      
            if($slug=='c1'){
                 $currencys = $this->conn->company_info('currency');
                       $icon='money';     
            }elseif($slug=='c19'){
                $currencys='';
                $icon='thumb-tack'; 
            }
            ?>
        <div class="col-lg-6">
            <div class="card_new_design">
                <div class="card_new_body">
                    <div class="icon_current_data">
                        <i class="fa fa-<?= $icon;?>" aria-hidden="true"></i>
                    </div>
                    <div class="total_data mt-2">
                        
                        <div class="current_money">
                            <p><?= $section->name;?></p>
                            <h3><?= $currencys;?>&nbsp;<?= round(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0,2); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <!--<div class="col-lg-4">
            <div class="card_new_design">
                <div class="card_new_body">
                    <div class="icon_current_data">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <div class="total_data mt-2">
                        
                        <div class="current_money">
                            <p>Available Balance</p>
                            <h3>Rs. 3.88</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
    <!--Third-row-->
    <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="user_team_section">
                    <h2> Team Section</h2>
                    <?php
                      foreach($team as $section){ 
                          $slug =  $section->wallet_column; 
                          //print_R($slug);
                           if($slug=='c8'){
                    	         $cl="";
                    	          $icon="users";
                    	     }elseif($slug=='c9'){
                    	          $cl="#0db50d";
                    	           $icon="user";
                    	     }elseif($slug=='c10'){
                    	          $cl="";
                    	          $icon="users";
                    	     }elseif($slug=='c11'){
                    	          $cl="#0db50d";
                    	          $icon="users";
                    	     }elseif($slug=='c12'){
                    	           $cl="";
                    	           $icon="users";
                    	     }elseif($slug=='c13'){
                    	           $cl="";
                    	           $icon="user-plus";
                    	     }elseif($slug=='c14'){
                    	           $cl="";
                    	           $icon="user-plus";
                    	     }elseif($slug=='c24'){
                    	          $cl="";
                    	          $icon="users";
                    	     }elseif($slug=='c25'){
                    	          $cl="";
                    	          $icon="users";
                    	     }  
                      ?>
                    <div class="user_list_team">
                        <ul>
                           <li><i class="fa fa-<?=$icon;?>" style="color:<?= $cl;?>;"></i>
                    	   <span><?= (!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0); ?></span><?= $section->name;?>  </li>
                        </ul>
                    </div>
                    <?php
                      }
                    ?>
                    <!--<div class="user_list_team">
                        <ul>
                            <li><i class="fa fa-user" style="color:#0db50d;"></i>
                                <span>4</span>Active Directs </li>
                        </ul>
                    </div>
                   
                    <div class="user_list_team">
                        <ul>
                            <li><i class="fa fa-users"></i>
                                <span>12</span>Total generation </li>
                        </ul>
                    </div>
                    <div class="user_list_team">
                        <ul>
                            <li><i class="fa fa-users" style="color:#0db50d;"></i>
                                <span>5</span>Active generation </li>
                        </ul>
                    </div>
                    <div class="user_list_team">
                        <ul>
                            <li><i class="fa fa-user-plus"></i>
                                <span>2</span>Left team </li>
                        </ul>
                    </div>
                    <div class="user_list_team">
                        <ul>
                            <li><i class="fa fa-user-plus"></i>
                                <span>0</span>Right team </li>
                        </ul>
                    </div>
                    <div class="user_list_team">
                        <ul>
                            <li><i class="fa fa-users"></i>
                                <span>0</span>Carry </li>
                        </ul>
                    </div>-->
                </div>
            </div>
           <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card_new_design">
                <div class="card_new_body">

                    <div class="earn_refer_title">
                        <div class="user_eran_heading">
                            <h5>Refer Us &amp; Earn</h5>
                            <p>Use the bellow link to invite your friends.</p>
                        </div>
                        <div class="user_invite">
                            <a href="<?php echo base_url('register?ref='.$profile->username);?>">Invite</a>
                        </div>
                    </div>
                    <div class="text-input">
                     <input style="width:100%;" type="text" id="referral_link_right" class="" value="<?php echo $right_link=base_url('register?ref='.$profile->username);?>"  aria-describedby="basic-addon1">
                      
                       <button type="submit" class="btn "  onclick="copyLink('right')" style="padding: 9px 9px 9px;padding-bottom:-1px">
                            <i class="fa fa-copy" style="color: #efb919;font-size: 18px;"></i>
                        </button>
                        <a href="<?php echo $right_link; ?>" target="_blank" class=""> <button type="submit" class="btn " style="color: #fff; background-color:#efb919;padding: 9px 9px 9px ;">
                                <i class="fa fa-link" style="color: #fff; font-size: 18px;"></i></a></button>
                        
                       <a  href="whatsapp://send?text=<?php echo $right_link; ?>" target="_blank"  data-action="share/whatsapp/share" > <button type="submit" class="btn" style="padding: 9px 9px 9px;">
                            <i class="fa fa-whatsapp" style="color: green;font-size: 18px;"></i></a> </button>
                    </div>
                </div>
            </div>
            <div class="card_new_design">
                 <!--<div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="earn_refer_section ">
                                <div class="earn_refer_title">
                                    <div class="user_eran_heading">
                                        <h5>Refer Us & Earn</h5>
                                        <p>Use the bellow link to invite your friends.</p>
                                    </div>
                                    <div class="user_invite">
                                        <a href="#">Invite</a>
                                    </div>
                                </div>
                                
                                <div class="text-input">
 <input style="width:500px;" type="text" id="referral_link_right" class="" value="<?php echo $right_link=base_url('register?ref='.$profile->username);?>"  aria-describedby="basic-addon1">
  
   <button type="submit" class="btn "  onclick="copyLink('right')" style="padding: 9px 9px 9px;">
                                            <i class="fa fa-copy" style="color: #efb919;font-size: 18px;"></i>
                                        </button>
                                        <a href="<?php echo $right_link; ?>" target="_blank" class=""> <button type="submit" class="btn " style="color: #fff; background-color:#efb919;padding: 9px 9px 9px ;">
                                                <i class="fa fa-link" style="color: #fff; font-size: 18px;"></i></a></button>
                                        
                                       <a  href="whatsapp://send?text=<?php echo $right_link; ?>" target="_blank"  data-action="share/whatsapp/share" > <button type="submit" class="btn" style="padding: 9px 9px 9px;">
                                            <i class="fa fa-whatsapp" style="color: green;font-size: 18px;"></i></a> </button>
</div>
                              
                            </div>
                        </div>-->
                <div class="card_new_body">

                    <div class="location_link">
                       <h2>We're here to help you!</h2>
                        <p>Ask a question or file a support ticket, manage request, report an issues. Our team support team will get back to you by email.</p>
                         <div class="user_support">
                         <a href="<?= $panel_path.'support';?>">Get Support Now</a>
                      </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
       
