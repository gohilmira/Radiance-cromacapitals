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
    // date(date)=DATE(NOW())
    $total=$this->conn->runQuery('SUM(amount) as total','transaction',"u_code='$user_id' and tx_type='income'")[0]->total;
    $my_package=$this->business->package($user_id);
   
         $u_sponsorssss=$this->conn->runQuery('u_sponsor','users',"id='$user_id' and 1=1");
         $spons_id=$u_sponsorssss[0]->u_sponsor;
         $u_spos=$this->conn->runQuery('username,name','users',"id='$spons_id' and 1=1");
         $sponsor_name=$u_spos[0]->name;
         $sponsor_username=$u_spos[0]->username;
                       
?>
 
 <main class="page-content">
            
<div class="container-fluid">
   <!-- first-row -->
   <div class="row">
       <div class="col-lg-12 col-md-6 col-sm-12">
        <div class="alert alert-primary alert-intro" role="alert">
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
		</div>
        <?php
        $ttl=array();
        foreach($incomes as $income){    
        $slug =  $income->wallet_column; 
        ?>                    
        <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card_user_panel">
            <div class="text_user_panel"><?= $income->name;?></div>
            <div class="total_deatil"><?=$currency;?>&nbsp;<?= $ttl[]=(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0); ?></div>
        </div>
        </div>
        <?php
         }
        ?>
        <!--<div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card_user_panel">
                <div class="text_user_panel">Total Budget</div>
                <div class="total_deatil">9,000</div>
            </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card_user_panel">
            <div class="text_user_panel">Balance</div>
            <div class="total_deatil">10,000</div>
        </div>
    </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card_user_panel">
                <div class="text_user_panel">Customer status</div>
                <div class="total_deatil">69,000</div>
            </div>
        </div>-->
  </div>
  
  <!--Second_row -->
      <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card_detail_panel">
                <div class="card_header_detail">
                    <h4>Overview Of Revenue and profit</h4>
                </div>
                <div class="card_body_detail">
                    <div class="row">
                       <!-- <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="sub_detail">
                                <p>This Year Sales</p>
                                <h5>35,789</h5>
                            </div>
                        </div>-->
                        <?php
                        foreach($withdrawals as $section){ 
                          $slug1 =  $section->wallet_column; 
                          ?>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="sub_detail">
                                <p><?= $section->name;?></p>
                                <h5><?=  ($slug=='c1' ? $currency : '');?>&nbsp;<?= round(!empty($wallet_balance) && isset($wallet_balance->$slug1) ? $wallet_balance->$slug1:0,2); ?></h5>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="sub_detail">
                                <p>Total Income</p>
                                <h5><?= ($total) ? ($total):0;?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
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
          <div class="col-lg-3 col-md-12 col-sm-12">
            <div class="card_detail_panel">
                <div class="card_new_body_detail">
                   <div class="icon_current_data_detail">
                    <i class="fa fa-<?= $icon; ?>" aria-hidden="true"></i>
                  </div>
                  <div class="total_data mt-2">
                   <div class="current_money_detail">
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
         <!-- <div class="col-lg-3 col-md-12 col-sm-12">
            <div class="card_detail_panel">
                <div class="card_new_body_detail">
                   <div class="icon_current_data_detail">
                    <i class="fa fa-money" aria-hidden="true"></i>
                  </div>
                  <div class="total_data mt-2">
                   <div class="current_money_detail">
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
                    	          $cl="#dfc240";
                    	           $icon="user";
                    	     }elseif($slug=='c10'){
                    	          $cl="";
                    	          $icon="users";
                    	     }elseif($slug=='c11'){
                    	          $cl="#dfc240";
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
                                 <span><?= (!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0); ?></span><?= $section->name;?> </li>
                        </ul>
                    </div>
                     <?php
                      }
                    ?>
                    <!--<div class="user_list_team">
                        <ul>
                            <li><i class="fa fa-users" style="color:#fb6b25;"></i>
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
                   
                                	<div class="input-group card-bg-2 ">
                            		  <div class="input-group-prepend">
                            			<span class="input-group-text text-black label_font">Left Referral</span>
                            		  </div>
                            		   <input type="text" style="height:50px;" id="referral_link_left" class="form-control" value="<?php echo $left_link=base_url('register?ref='.$profile->username."&position=1");?>">
                            		  <div class="input-group-append">
                            			<div class="input-group-btn ml-2" >
                            				<button type="submit" class="btn btn-default"  onclick="copyLink1('left')">
                            					<i class="fa fa-copy" style="color: #D3B916; font-size: 18px;"></i>
                            				</button>
                            				<a href="<?php echo $left_link; ?>" target="_blank" ><button type="submit" class="btn btn-default">
                            						<i class="fa fa-link" style="color: #1686D3; font-size: 18px;"></i>
                            				</a></button>
                            				<a class="" href="whatsapp://send?text=<?php echo $left_link; ?>" target="_blank"  data-action="share/whatsapp/share"><button type="submit" class="btn btn-default">
                            					<i class="fa fa-whatsapp" style="color: green; font-size: 18px;"></i>
                            				</a></button>
                            			</div>
                            		  </div>
                            		  
                            		</div>
                            		<br>
                            			<div class="input-group card-bg-2 ">
                            		  <div class="input-group-prepend">
                            			<span class="input-group-text text-black label_font" style="background-color">Right Referral</span>
                            		  </div>
                            		  <input type="text" style="height:50px;" id="referral_link_right" class="form-control" value="<?php echo $right_link=base_url('register?ref='.$profile->username."&position=2");?>">
                            		  <div class="input-group-append">
                            			<div class="input-group-btn ml-2" >
                            				<button type="submit" class="btn btn-default"  onclick="copyLink('right')">
                            					<i class="fa fa-copy" style="color: #D3B916; font-size: 18px;"></i>
                            				</button>
                            				<a href="<?php echo $right_link; ?>" target="_blank" ><button type="submit" class="btn btn-default">
                            						<i class="fa fa-link" style="color: #1686D3; font-size: 18px;"></i>
                            				</a></button>
                            				<a class="" href="whatsapp://send?text=<?php echo $right_link; ?>" target="_blank"  data-action="share/whatsapp/share"><button type="submit" class="btn btn-default">
                            					<i class="fa fa-whatsapp" style="color: green; font-size: 18px;"></i>
                            				</a></button>
                            			</div>
                            		  </div>
                            		</div>
                              
                                    </div>
                                </div>
                                <div class="card_new_design">
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
       