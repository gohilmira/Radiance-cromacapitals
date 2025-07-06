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
    $my_package=$this->business->package($user_id);
   
   $u_sponsorssss=$this->conn->runQuery('u_sponsor','users',"id='$user_id' and 1=1");
     $spons_id=$u_sponsorssss[0]->u_sponsor;
     $u_spos=$this->conn->runQuery('username,name','users',"id='$spons_id' and 1=1");
       $sponsor_name=$u_spos[0]->name;
       $sponsor_username=$u_spos[0]->username;
                       
?>
    <style>





.box_profile {
    position: relative;
    background: #0f143c;
    margin-top: 34px;
    padding: 20px 10px;
  
    border-radius: 16px;
    margin-bottom: 15px;
}

/*.section_boxes {
    margin-top: 20px;
    margin-bottom: 10px;
}
*/
.box_profile .image_icon_profile {
    position: absolute;
    top: -36px;
    left: 40%;
    display: inline-block;
    width: 4rem;
    height: 4rem;
    text-align: center;
    border-radius: 50px;
   
   
    box-shadow: 0 4px 6px 0 #151e3c63, 0px 1px 11px 0px #151e3c85;
    background: #efb919;
    border: 2px dotted white;
}

.box_profile .image_icon_profile a i {
    font-size: 31px;
    font-weight: 500;
    color: #fff;
    padding: 13px;
}

.box_profile .total_content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 10px;
}

.box_profile .title_content p {
    color: #ffff;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 0px;
}

.box_profile .money_content h2 {
    color: #ffff;
    font-size: 16px;
   
    margin: 0;
}

    </style>

        <main class="page_content_new">
            <!--<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="new_panel_header_heading">
                            <h2>Dashboard</h2>
                        </div>
                    </div>
                </div>
            </div>-->
 <!-- user-profile -->
            <div class="profile_card_text_data">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
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
                            
                            
                            <div class="profile_card_panel_design">
                                <div class="profile-image_card data_detail">
                                    <?php 
                                    if($profile->img!=''){
                                    ?>
                                    <a href="#"><img src="<?=base_url('images/users/').$profile->img;?>" alt="images"></a>
                                    <?php
                                    }else{
                                        ?>
                                         <a href="#"><img src="<?= $this->conn->company_info('logo');?>" alt="images"></a>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="profile_image-date data_detail">
                                    <h6>User id:  <span><?= $this->session->userdata('profile')->username;?></span></h6>
                                   
                                    <h6>Full Name: <span><?= $this->session->userdata('profile')->name;?></span></h6>
                                   
                                     <h6>Sponsor: <span><?= $sponsor_username;?></span></h6>
                                   
                                </div>
                                <div class="profile-image-card-mobile data_detail">
                                    <h6>Mobile no:<span><?= $this->session->userdata('profile')->mobile;?></span></h6>
                                    
                                    <h6>Email:<span><?= $this->session->userdata('profile')->email;?></span></h6>
                                    
                                </div>
                                <div class="profile-image-card-joning-date data_detail">
                                    <h6>Joining Date:<span><?= $this->session->userdata('profile')->added_on;?></span></h6>
                                    
                                    <h6>Active Date:<span><?= $this->session->userdata('profile')->active_date;?></span></h6>
                                    
                                    <h6>Status:<span><?php  if($this->session->userdata('profile')->active_status==1){echo"<span style='color:green'>Active</span>";}else{echo"<span style='color:red'>InActive</span>";}?></span></h6>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- boxes_data --> 
                <div class="container section_boxes">
                    <div class="row">
                     <div class="col-lg-3 col-md-12 col-md-12">
                        <div class="box_four_profile">

                            <div class="image_four_icon_profile">
                                <a href="#"><i class="fa fa-google-wallet" aria-hidden="true"></i></a>
                            </div>

                            <div class="total_four_content">
                                <div class="title_four_content">
                                    <p>Current Package</p>
                                </div>
                                <div class="money_four_content">
                                    <h2>BV <?= $my_package;?></h2>
                                </div>
                            </div>
                        </div>
                       </div>    
                    <?php
                      foreach($wallets as $section){ 
                      $slug =  $section->wallet_column;                               
                    ?>
                    <div class="col-lg-3 col-md-12 col-md-12">
                        <div class="box_four_profile">

                            <div class="image_four_icon_profile">
                                <a href="#"><i class="fa fa-google-wallet" aria-hidden="true"></i></a>
                            </div>

                            <div class="total_four_content">
                                <div class="title_four_content">
                                    <p><?= $section->name;?></p>
                                </div>
                                <div class="money_four_content">
                                    <h2><?= $currency;?>&nbsp;<?= round(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0,2); ?></h2>
                                </div>
                            </div>
                        </div>

                    </div>
                        <?php 
                          
                      }
                        foreach($withdrawals as $section){ 
                          $slug1 =  $section->wallet_column;    
                        ?>
                        <div class="col-lg-3 col-md-12 col-md-12">
                        <div class="box_four_profile">

                            <div class="image_four_icon_profile">
                                <a href="#"><i class="fa fa-google-wallet" aria-hidden="true"></i></a>
                            </div>

                            <div class="total_four_content">
                                <div class="title_four_content">
                                    <p><?= $section->name;?></p>
                                </div>
                                <div class="money_four_content">
                                    <h2><?=  ($slug=='c1' ? $currency : '');?>&nbsp;<?= round(!empty($wallet_balance) && isset($wallet_balance->$slug1) ? $wallet_balance->$slug1:0,2); ?></h2>
                                </div>
                            </div>
                        </div>
                       </div>
                       <?php
                        }
                       ?>
                       
                    </div>
                </div>
                <div class="container section_boxes">
        <div class="row">
            
             <?php
                        $ttl=array();
                        foreach($incomes as $income){    
                        $slug =  $income->wallet_column; 
                    ?>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="box_data_income">
                    <div class="box_content_income">
                        <p><?= $income->name;?> </p>
                        <div class="box_data_icon">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="income_data_box">
                        <h5><?=$currency;?>&nbsp;<?= $ttl[]=(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0); ?></h5>
                    </div>
                </div>
                
                
                <!--<div class="box_profile">
                    <div class="image_icon_profile">
                        <a href="#"><i class="fa fa-money" aria-hidden="true"></i></a>
                    </div>
                    <div class="total_content">
                        <div class="title_content">
                            <p><?= $income->name;?> </p>
                        </div>
                        <div class="money_content">
                            <h2> <?=$currency;?>&nbsp;<?= $ttl[]=(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0); ?></h2>
                        </div>
                    </div>
                </div>-->
            </div>
              <?php
                        }
                        ?>
           

        </div>
    </div>
                
                
                 
                <div class="container">
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
                            <div class="user_list_team">
                                    <ul>
                                        <li><i class="fa fa-users"></i>
                                            <span>
                                                <?php
                                                $my_left_business=$this->team->team_by_business($user_id,1);                	 
                	                           $my_right_business=$this->team->team_by_business($user_id,2);
                                               $ttl_ben=$this->team->ben_pairs($user_id);
            	                               $ttl_matchings=min($my_left_business,$my_right_business);
            	                                $ben_business=$ttl_matchings-$ttl_ben;
            	                               echo $ben_business*15/100;
                                               ?> 
                                            </span>Live Matching Income </li>
                                       
                                    </ul>
                                </div>
                            
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
                            
                            
                            
                            <div class="card ">
								
								<div class="card-body">
									
									
										 <?php
                          $this->load->view('User_panel/pages/dashboard/news_section');
                        ?>
											
        									
										
									
							
								     </div>
							<!-- /Feed Activity -->
							
						</div>
                            
                        </div>
                        
                        	
						
							<!-- Recent Orders -->
							
						
                    </div> 
                    </div>
                    <div class="container">
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
                                
                                	<div class="input-group card-bg-2 ">
                            		  <div class="input-group-prepend">
                            			<span class="input-group-text text-white label_font" style="background-color:#0f143c !important;">Left Referral</span>
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
                            			<span class="input-group-text text-white label_font" style="background-color:#0f143c !important;">Right Referral</span>
                            		  </div>
                            		  <input type="text" style="height:50px;border:none;" id="referral_link_right" class="form-control" value="<?php echo $right_link=base_url('register?ref='.$profile->username."&position=2");?>">
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
                    </div>
                    
       <br>
           <br>

   
        </main>
        
        