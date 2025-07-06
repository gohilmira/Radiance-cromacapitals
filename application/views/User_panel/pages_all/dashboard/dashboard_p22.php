<br>
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
	$get_alert=$this->conn->runQuery('*','notice_board',"type='popup' and status='1' order by id desc");
	
	    if($get_alert){
	        ?>
 <div class="modal fade" id="panel_popup">
      <div class="modal-dialog">
        <div class="modal-content border-warning">
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
            ?>


<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= $panel_path.'dashboard';?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<div class="row">
					<div class="col-lg-12 order-lg-last dashboard-content">
						<!--<h2>My Dashboard</h2>-->

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
						</div><!-- End .alert -->

						

<div class="box">
        <div class="container-fluid">
            <div class="separator"><center><Strong>WALLET SECTION</Strong></center></div>
            <div class="row cus_content">
                
                	<?php
              foreach($wallets as $section){ 
                  $slug =  $section->wallet_column;    
                   if($slug=="c1"){
                       $cl="green";
                       $fa="fa fa-credit-card";
                   }elseif($slug=="c19"){ 
                         $fa="fa fa-map-pin";
                      
                       $cl="#4B92D8";
                   }elseif($slug=="c27"){
                       $cl="#BE4BD8";
                      $fa="fa fa-credit-card";
                   }elseif($slug=="c28"){
                        $cl="#21B0A3";
                       $fa="fa fa-credit-card";
                   }else {
                       $cl="";
                       $fa="fa fa-credit-card";
                   }
                          ?>
                <div class="col-lg-4 col-md-6">
                    <div class="cus_box_head" >
                        <div class="box-body">
                            <div class="text-center cus_a">
                               <i class="<?= $fa; ?>"></i>
                            </div>
                            <div class="media p-0" style="background-color:<?= $cl;?>;">
                                <h4 class="no-margin text-bold"><?= ($slug!='c19' ? $currency : '');?>&nbsp;<?= round(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0,2); ?></h4>
                                <p class="mb-0"><?= $section->name;?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                 <div class="col-lg-4 col-md-6">
                    <div class="cus_box_head" >
                        <div class="box-body">
                            <div class="text-center cus_a">
                               <i class="fa fa-money"></i>
                            </div>
                            <div class="media p-0" style="background-color:#F34B5D;">
                                <h4 class="no-margin text-bold"><?= ($total!='' ? $total : 0 );?></h4>
                                <p class="mb-0">Per Day Total Income</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>	
    
    
    
    
    
    <div class="container-fluid">
      <div class="separator"><Strong>INCOME SECTION</Strong></div>
      <p>&nbsp;</p>
<div class="row cus_content">
    <?php
                                     $ttl=array();
                                    foreach($incomes as $income){    
                                        $slug =  $income->wallet_column; 
                                       
                                        ?>
<div class="col-lg-4 col-md-6 ">
<div class="row money">
     
<div class="col-lg-3 col-3">
<div class="ecommerce-div Investors2">
<!--<img src="https://digitaltron.io/themes/default/client/assets/images/box-2.png" alt="">-->
<i class="fa fa-money"></i>
</div>
</div>
<div class="col-lg-9 col-9 service-box-custom Investors">
<div class="rotate Investors1">
</div>
<div class="ecommerce-software1 ">
<div>
<h4 class="no-margin text-bold"><?=$currency;?>&nbsp;<?= $ttl[]=(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0); ?></h4>
<p class="no-margin" id="totalInvestAmount">
<?= $income->name;?>
</p>
</div>
</div>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
    
    
    
    
    <!--	<div class="mb-4"></div>-->
<!--<div class="box">
    <div class="container-fluid">
        <div class="row">

            	<?php
              foreach($wallets as $section){ 
                  $slug =  $section->wallet_column;                               
                          ?>
            <div class="col-md-4 col-xs-12">
                <div class="money_box">
                    
                    <i class="fa fa-users"></i>
                    <div class="box-content">
                        <h2><?= ($slug!='c19' ? $currency : '');?>&nbsp;<?= round(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0,2); ?></h2>
                        <span><?= $section->name;?></span>
                    </div>
                </div>
            </div>
            <?php }?>
            
            <?php
                                     $ttl=array();
                                    foreach($incomes as $income){    
                                        $slug =  $income->wallet_column; 
                                       
                                        ?>
            <div class="col-md-4 col-xs-12">
                <div class="money_box">
                   
                    <i class="fa fa-google-wallet"></i>
                    <div class="box-content">
                        <h2><?=$currency;?>&nbsp;<?= $ttl[]=(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0); ?></h2>
                        <span><?= $income->name;?></span>
                    </div>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
</div>
	<p>&nbsp;</p>-->					

						<div class="row">
							<div class="col-md-6">
                            		<div class="card gradient-violet"style="background:#1a3263; padding:52px 20px;">
                                		   <div class="card-header text-white border-light-1 text-center" style="background:#1a3263; font-size:18px; font-weight:700;">
                                                Team Section
                                				
                                				</div>
                                              <div class="table-responsive" style="padding:20px">
                                             <table class="table align-items-center table-flush table">
                                               <tbody>  
                                                          
                                                                    <?php
                                                                      foreach($team as $section){ 
                                                                          $slug =  $section->wallet_column;                               
                                                                  ?>
                                                                <tr>
                                                                      <th><span style="color:#fff"><?= $section->name;?></span></th>
                                                                      <th></th><th></th><td style="color:#fff"><?= (!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0); ?></td>
                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>
                                                        </tbody>
                                               
                                             </table>
                                           </div>
                                      </div>
							</div><!-- End .col-md-6 -->

							
							<div class="col-md-6">
							<div class="card flex-fill p-3" style="background:;">
								<div class="card-header">
									<h4 class="card-title text-muted">Total Income Chart</h4>
								</div>
								<div class="card-body text-muted">
								<?php
                   $panel_pa=$this->conn->company_info('panel_directory');
                      $this->load->view($panel_pa.'/pages/dashboard/income_roichart');
                    ?>
								</div>
							</div>
							</div>
							<!-- End .col-md-6 -->
							
						</div><!-- End .row -->
						
						
						
						
                        <div class="row p-4">
                         <div class="col-md-8 col-sm-12 col-xs-12">
								<div class="card" >
								<div class="card-header">
									<h4 class="card-title">Refer  Us & Earn</h4>
									<div class="title-sub">Use the bellow link to invite your friends.</div>
								</div>
								<div class="card-body bos">
									
									<div class="  ">
									    <div class="">
							<div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="">Referral</span>
                              </div>
                            	<input type="text" style="height:70px; width:" id="referral_link_right" class="form-control" value="<?php echo $right_link=base_url('register?ref='.$profile->username);?>"  aria-describedby="basic-addon1">
                            	 <div class="input-group-append referral">
                                         <div class="input-group-btn ml-4 mr-4" >
                                        <button type="submit" class="btn btn1  button1"  onclick="copyLink('right')">
                                            <i class="fa fa-copy" style="color: #fff;font-size: 18px;"></i>
                                        </button>
                                        <a href="<?php echo $right_link; ?>" target="_blank" class=""> <button type="submit" class="btn btn1 button2">
                                                <i class="fa fa-link" style="color: #fff;font-size: 18px;"></i></a></button>
                                        
                                        <a  href="whatsapp://send?text=<?php echo $right_link; ?>" target="_blank"  data-action="share/whatsapp/share" > <button type="submit" class="btn btn1 button3" >
                                            <i class="fa fa-whatsapp" style="color: white;font-size: 18px;"></i></a> </button>
                                       
                                    </div>
                                </div>
                        </div>
						
								</div><!-- End .input-group -->
						
						</div><!-- End .cart-discount -->
						
                            </div>
								</div>
							
							</div><!-- End .col-md-6 -->
							
							
								<!--<div class="col-md-4">
							<div class="card flex-fill p-3" style="background:#A52A2A;">
								<div class="card-header">
									<h4 class="card-title text-white">We’re here to help you!</h4>
								</div>
								<div class="card-body">
								<p class="text-soft text-white">Ask a question or file a support ticket, manage request, report an issues. Our team support team will get back to you by email.</p>
								 <a href="<?= $panel_path.'support';?>" class="btn btn-primary" style="background:#1a3263">Get Support Now</a>
								</div>
							</div>
							</div><!-- End .col-md-6 -->
							
						<div class="col-md-4">
								<div class="card overflow-hidden" style="background:#A52A2A;color:#fff !important">
								<div class="card-body" style="color:#fff !important">
									<div class="d-flex justify-content-between">
										<!--<h4 class="card-title text-white">project &amp; task</h4>-->
										<i class="mdi mdi-dots-horizontal "></i>
									</div>
									<p class="" style="color:#fff !important"> <?php
                          $this->load->view('User_panel/pages/dashboard/news_section');
                        ?></p>
									
								</div>
							</div>
							</div><!-- End .col-md-6 -->   
                            
                        </div>


						<!--<div class="card">
							

							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<h4 class="">Total Income Chart</h4>
										<address>
										 
										</address>
									</div>
									
								</div>
							</div>
						</div>-->
					</div><!-- End .col-lg-9 -->

					<!--<aside class="sidebar col-lg-3">
						<div class="widget widget-dashboard">
							<h3 class="widget-title">My Account</h3>

							<ul class="list">
								<li class="active"><a href="#">Account Dashboard</a></li>
								<li><a href="#">Account Information</a></li>
								<li><a href="#">Address Book</a></li>
								<li><a href="#">My Orders</a></li>
								<li><a href="#">Billing Agreements</a></li>
								<li><a href="#">Recurring Profiles</a></li>
								<li><a href="#">My Product Reviews</a></li>
								<li><a href="#">My Tags</a></li>
								<li><a href="#">My Wishlist</a></li>
								<li><a href="#">My Applications</a></li>
								<li><a href="#">Newsletter Subscriptions</a></li>
								<li><a href="#">My Downloadable Products</a></li>
							</ul>
						</div>
					</aside><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-2"></div>
		</main><!-- End .main -->