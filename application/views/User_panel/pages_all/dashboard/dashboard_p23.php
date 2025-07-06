
<style>
  input[type="text"]{
    display: inline-block;
   /* width: 500px;*/
    height: 44px;
    box-sizing: border-box;
    outline: none;
    border: 1px solid lightgray;
    border-radius: 3px;
    padding: 5px 10px 10px ;
    transition: all 0.1s ease-out;
  }
  
 @media (max-width:480px){
     input[type="text"]{
         width:100% !important;
         padding: 10px 10px 10px 7px;
     }
 }
  
</style>

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
	<!--<?php
    $get_alert_mar=$this->conn->runQuery('*','notice_board',"type='marquee' and status='1' order by id desc");
    if($get_alert_mar){
    ?>
    <marquee behavior="scroll" direction="left" scrollamount="10" class="card-bg-1 card"><?= $get_alert_mar[0]->description;?></marquee>
<?php
}else{?>
	<marquee behavior="scroll" direction="left" scrollamount="10" class="card-bg-1 card"><?= $this->conn->company_info('news');?></marquee>

<?php } ?>-->

<?php
           $panel_pa=$this->conn->company_info('panel_directory');
              $this->load->view($panel_pa.'/pages/dashboard/alert');
            ?>

            
                    
                
        <div class="container-fluid background_color_user_panel">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="page_header_title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-success alert-intro" role="alert">
							<?php
    $get_alert_mar=$this->conn->runQuery('*','notice_board',"type='marquee' and status='1' order by id desc");
    if($get_alert_mar){
    ?>
    <marquee behavior="scroll" direction="left" scrollamount="10" class=""><?= $get_alert_mar[0]->description;?></marquee>
<?php
}else{?>
	<marquee behavior="scroll" direction="left" scrollamount="10" class=""><?= $this->conn->company_info('news');?></marquee>

<?php } ?>
						</div>
						
						
						
						
						
                    <div class="row">
                         <?php
                                     $ttl=array();
                                    foreach($incomes as $income){    
                                        $slug =  $income->wallet_column; 
                                       
                                        ?>
                                        
                                        
                                        
                                        
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="card_user_panel_right user_color">
                                <div class="card_body_user_panel">
                                    <!-- <img src="./assets/images/wallet.png" alt="wallet"> -->
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                </div>
                                <div class="user_price_detail">
                                    <p> <?= $income->name;?> </p>
                                    <h2> <?=$currency;?>&nbsp;<?= $ttl[]=(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0); ?></h2>
                                </div>
                            </div>
                        </div>
                         <?php }?>
                        <!--<div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="card_user_panel_right user_color2">
                                <div class="card_body_user_panel">
                                    
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <div class="user_price_detail">
                                    <p> Total Users </p>
                                    <h2><i class="fa fa-inr" aria-hidden="true"></i> 18</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="card_user_panel_right user_color3">
                                <div class="card_body_user_panel">
                                   
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                </div>
                                <div class="user_price_detail">
                                    <p> Total Income</p>
                                    <h2><i class="fa fa-inr" aria-hidden="true"></i> 90</h2>
                                </div>
                            </div>
                        </div>-->
                    </div>
                     <div class=" section_boxes">
        <div class="row">
            <?php
              foreach($wallets as $section){ 
                  $slug =  $section->wallet_column;                               
                          ?>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="box_third_profile">
                    <div class="image_third_icon_profile">
                        <a href="#"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
                    </div>
                    <div class="total_third_content">
                        <div class="title_third_content">
                            <p><?= $section->name;?></p>
                        </div>
                        <div class="money_third_content">
                            <h2> <?= $currency;?>&nbsp;<?= round(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0,2); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            	<?php }?>
            <!--<div class="col-lg-4 col-md-12 col-sm-12">
                <div class="box_third_profile">
                    <div class="image_third_icon_profile">
                        <a href="#"><i class="fa fa-users" aria-hidden="true"></i></a>
                    </div>
                    <div class="total_third_content">
                        <div class="title_third_content">
                            <p>total products</p>
                        </div>
                        <div class="money_third_content">
                            <h2><i class="fa fa-inr" aria-hidden="true"></i> 534</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="box_third_profile">
                    <div class="image_third_icon_profile">
                        <a href="#"><i class="fa fa-users" aria-hidden="true"></i></a>
                    </div>
                    <div class="total_third_content">
                        <div class="title_third_content">
                            <p>total products</p>
                        </div>
                        <div class="money_third_content">
                            <h2><i class="fa fa-inr" aria-hidden="true"></i> 534</h2>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
                    
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="user_team_section">
                                <h2> Team Section</h2>
                                
                                 <?php
                                                                      foreach($team as $section){ 
                                                                          $slug =  $section->wallet_column;                               
                                                                  ?>
                                <div class="user_list_team">
                                    <ul>
                                        <li><i class="fa fa-users"></i>
                                            <span><?= (!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0); ?></span><?= $section->name;?> </li>
                                       
                                    </ul>
                                </div>
                                 <?php
                                                            }
                                                            ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
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
 <input style="width:100%;" type="text" id="referral_link_right" class="" value="<?php echo $right_link=base_url('register?ref='.$profile->username);?>"  aria-describedby="basic-addon1">
  
   <button type="submit" class="btn "  onclick="copyLink('right')" style="padding: 9px 9px 9px;">
                                            <i class="fa fa-copy" style="color: #efb919;font-size: 18px;"></i>
                                        </button>
                                        <a href="<?php echo $right_link; ?>" target="_blank" class=""> <button type="submit" class="btn " style="color: #fff; background-color:#efb919;padding: 9px 9px 9px ;">
                                                <i class="fa fa-link" style="color: #fff; font-size: 18px;"></i></a></button>
                                        
                                       <a  href="whatsapp://send?text=<?php echo $right_link; ?>" target="_blank"  data-action="share/whatsapp/share" > <button type="submit" class="btn" style="padding: 9px 9px 9px;">
                                            <i class="fa fa-whatsapp" style="color: green;font-size: 18px;"></i></a> </button>
</div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="location_link p-3">
                                <h2>We're here to help you!</h2>
                                <p>Ask a question or file a support ticket, manage request, report an issues. Our team support team will get back to you by email.</p>
                                <div class="user_support">
                                    <a href="<?= $panel_path.'support';?>">Get Support Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
       
           <br>

   