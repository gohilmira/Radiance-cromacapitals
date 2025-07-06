<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175669691-1"></script>
<style>

  
.wallet_e_desc {
    background: var(--first) !important;
    box-shadow: rgb(0 0 0 / 20%) 0px 5px 15px;
    border-radius: 8px;
    padding: 16px;
    /* display: grid; */
    margin-bottom: 15px;
    /* min-height: 203px; */
}

.wallet_e_desc h3 {
    color: #fff;
}

.wallet_e_desc h5 {
    color: #fff;
}
.section_card_boxes {
    background: var(--first) !important;
    box-shadow: rgb(218 158 22) 0px 6px 7px;
    border-radius: 8px;
    margin-bottom: 15px;
    padding: 16px;
}

.section_view_boxes {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.section_view_boxes_data h5 {
    font-size: 14px;
    text-transform: capitalize;
    margin: 0;
    color: var(--other_color) !important;
}

.section_view_boxes i {
    width: 40px;
    height: 40px;
    line-height: 40px;
    background: var(--second) !important;
    text-align: center;
    font-size: 18px;
    border-radius: 40px;
    color: #fff;
}

.section_card_boxes h2 {
    margin: 10px 0px;
    font-weight: 300;
    font-size: 28px;
    color: var(--text2);
}

.section_view_boxes p {
    margin: 0;
}

.section_card_boxes p {
    margin: 0px;
    text-transform: capitalize;
    font-size: 14px;
    color: var(--other_color);
}

.section_card_boxes span {
    color: #71dd37;
}

.sidebar_desc {
    background: var(--first) !important;
    box-shadow: rgb(0 0 0 / 20%) 0px 5px 15px;
    border-radius: 8px;
    margin-bottom: 15px;
    padding: 16px;
}

.sidebar_wallet_address span {
    font-size: 14px;
    font-weight: 400;
    color: var(--text2);
}

.sidebar_wallet_address a {
    font-size: 12px;
    background: var(--second) !important;
    padding: 2px 5px;
    border-radius: 20px;
    color: #fff;
}
button.btn.btn-primary {
  background-color: #4b2feb;
    border-color: #4b2feb;
}
.wallet_sidebar h3 {
    font-size: 28px;
    margin: 15px 0px;
    color: var(--text2);
}

.rep_head_wallet h4 {
    font-size: 18px;
    color: var(--text2);
}

.wallet_input {
    display: flex;
}

.wallet_user_date {
    margin-top: 10px;
}

.wallet_user_date p i {
    margin-right: 5px;
    color: #71dd37;
}

.sidebar_input_data span{
    color: var(--other_color);
}

.wallet_user_date p {
    margin: 0;
    text-transform: capitalize;
    font-size: 12px;
    margin-bottom: 10px;
    color: var(--text2);
}

.sidebar_input_data {
    margin: 20px 0px;
}

.sidebar_input_data form input {
    width: 100%;
    padding: 6px;
    border: 1px solid #fff;
    border-radius: 7px;
    margin-bottom: 10px;
    background:none;
     color:#fff;
}

select.select_data {
    width: 100%;
    padding: 6px;
    border: 1px solid #dcd7d7b5;
    border-radius: 7px;
   
}

button.request_data {
    border: none;
    padding: 8px;
    background: var(--second) !important;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 500;
    color: #fff;
}
.recent_data_eraning {
    overflow-y: auto;
}
.recent_earning {
    background: var(--first) !important;
    box-shadow: rgb(0 0 0 / 20%) 0px 5px 15px;
    border-radius: 8px;
    margin-bottom: 15px;
    padding: 24px;
}
.recent_earning h4 {
    font-size: 16px;
    margin-bottom:20px;
    color: var(--text2);
}
.recent_data_eraning td {
   color: var(--text2);
    border: 1px solid #f8f4f40f !important;
}
table.table.table-bordered.table-hover th, td {
    font-size: 14px;
}
table.table.table-bordered.table-hover > thead > tr > th {
    padding: 8px 15px;
    border: 1px solid #f8f4f40f !important;
    white-space: nowrap;
    overflow: hidden;
    color: var(--text2);
}
table.table.table-bordered.table-hover > thead > tr > td {
    padding: 8px 15px;
}
table.table.table-bordered.table-hover {
    margin-bottom: 0px;
}


.sidebar_wallet_address {
    white-space: nowrap;
}
.wallet_input input {
    height: 38px;
    margin-right: 2px;
}

.wallet_input {
    display: flex;
    align-items: baseline;
}
.refreal_data_links h3 {
    font-size: 18px;
    color: #fff;
}

/* Tabs */
.tabs {
  width: 600px;
  background-color: #09F;
  border-radius: 5px 5px 5px 5px;
}
ul#tabs-nav {
  list-style: none;
  margin: 0;
  padding: 5px;
  overflow: auto;
}
ul#tabs-nav li {
  float: left;
  font-weight: bold;
  margin-right: 2px;
  padding: 8px 10px;
  border-radius: 5px 5px 5px 5px;
  cursor: pointer;
}
ul#tabs-nav li:hover,
ul#tabs-nav li.active {
   background: var(--second) !important;
}
ul#tabs-nav li a:hover, 
ul#tabs-nav li a.active {
 
    color: #fff;
}
#tabs-nav li a {
    text-decoration: none;
    color: var(--text2);
}
.tab-content {
    padding: 10px;
    border: 1px solid #d5d8da2e;
    background: var(--first) !important;
}

.tabs_data {
    background: var(--first) !important;
    box-shadow: rgb(0 0 0 / 20%) 0px 5px 15px;
    border-radius: 8px;
    margin-bottom: 15px;
    padding: 16px;

}
.tabs_content_data {
   
    margin-bottom: 10px;
}
.box_content_tabs {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

.tabs_content_data {
    display: flex;
    align-items: center;
}

.dollor_tab i {
    width: 35px;
    height: 35px;
    background-color: var(--second);
    text-align: center;
    line-height: 35px;
    color: #fff;
    border-radius: 40px;
}

.dollor_tab {
    margin-right: 10px;
}

.dollor_tab_content h4 {
    font-size: 16px;
    margin-bottom: 0;
    color: var(--text2);
}

.dollor_tab_content span {
    color: var(--text2);
}

.e_wallet_data {
    background: var(--first) !important;
    box-shadow: rgb(218 158 22) 0px 6px 7px;
    border-radius: 8px;
    padding: 16px;
    display: grid;
    margin-bottom: 15px;
    min-height: 203px;

}
.e_wallet {
    font-size: 14px;
    font-weight: 400;
    color: var(--text2);
    text-transform: capitalize;
}
.e_wallet_data h5 {
    font-size: 14px;
    margin: 10px 0px;
    font-weight: 600;
}

.e_wallet_images {
    width: 80px;
    height: 70px;
    float: left;
    background: #df3b3b;
    border-radius: 20px;
    margin-bottom: 20px;
    text-align: center;
    line-height: 60px;
    position: relative;
}

.e_wallet_images img {
    width: 56%;
}
.request_topup {
    text-align: end;
}
.e_wallet_images::after {
    width: 50px;
    height: 50px;
    position: absolute;
    left: 20px;
    bottom: -23px;
    
    content: "";
    background: #e75d5d;
    opacity: .6;
    -webkit-filter: blur(24px);
    filter: blur(19px);
    border-radius: 5px;
}

.e_wallet_data h4 {
    display: block;
}
.sponser_name_team {
    background: var(--first) !important;
    box-shadow: rgb(0 0 0 / 20%) 0px 5px 15px;
    border-radius: 8px;
    padding: 16px;
    display: grid;
    margin-bottom: 15px;
    min-height: 203px;
}

.package_sponser_name {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.sponser_inner_content h6 {
    font-size: 22px;
    text-transform: capitalize;
    color: var(--text2);
}

.sponser_inner_content h4 {
    font-size: 22px;
    color: var(--text2);
}

.team_pv {
    display: flex;
    align-items: flex-end;
    flex-wrap: wrap;
    margin-top: 20px;
}

.team_pv_data {
    width: 24%;
    height: auto;
    float: left;
    margin-right: 1%;
    color: var(--text2);
    font-size: 13px;
    margin-bottom: 5px;
}

.team_pv_data h6 {
    margin-top: 5px;
    color: var(--text2);
}

.e_wallet_images.wallet1 {
    background: #68cadf;
}
.e_wallet_images.wallet1:after {
    background: #68cadf;
    content: "";
 
}

.e_wallet_images.wallet2 {
    background: #71aaff;
}
.e_wallet_images.wallet2:after {
    background: #71aaff;
    content: "";
 
}
h5.wallet_income_1 {
    color: #e03d3d;
   

}
h5.wallet_income_2 {
    color: #68cadf;
   
}
h5.wallet_income_3 {
    color: #71aaff;
  
}
.user_name {
    background: red;
}

.user_name {
    background: var(--first);
    border: 1px solid #eaf0f700 !important;
    box-shadow: rgb(0 0 0 / 20%) 0px 5px 15px;
    border-radius: 8px;
    margin-bottom: 15px;
    padding: 16px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.user_detail_dashboard h1 {
    font-size: 24px;
    font-weight: 500;
    color: var(--text2);
}

.user_detail_dashboard p {
    margin-bottom: 0px;
    color: var(--text2);
    font-size: 16px;
}
button.copy_button {
    color: #fff;
    padding: 9px 12px;
    border-radius: 5PX;
    background: var(--second) !important;
    border:none;
}
.dadhboard_plan h5 {
    font-size: 14px;
    text-transform: capitalize;
    color: #71dd37;
    margin-bottom: 5px;
}

.sidebar_input_data {
    margin: 43px 0px;
}
.dadhboard_plan strong {
    font-size: 18px;
    text-transform: capitalize;
    color: var(--text2);
}

@media only screen and (max-width: 768px) {
   .team_pv_data {
    width: 100%;
}
.sidebar_input_data{
    margin: 15px 0px;
}
.box_content_tabs {
    display: flex;
    align-items: initial;
    justify-content: space-between;
    flex-direction: column;
}
}


/*new_incomes*/
.income_box_chart {
    padding: 16px;
    margin-bottom: 10px;
    border-radius: 4px;
    display: flex;
    align-items: center;
}

.income_icon_image img {
    width: 40px;
}

.income_icon_image {
    margin-right: 15px;
}

.income_heading_money h4 {
    font-size: 16px;
    margin: 0;
    color:#fff;
    font-weight: 500;
    text-transform: capitalize;
}

.income_heading_money p {
    font-size: 20px;
    margin: 0;
    color:#fff;
}
.income_wallets {
    padding: 16px;
    margin-bottom: 10px;
    border-radius: 4px;
  background: #293550;
}

.all_wallets {
    padding: 16px;
    margin-bottom: 10px;
    border-radius: 4px;
    display: flex;
    align-items: center;
    background: #141e38;
}

.wallets_image img {
    width: 50px;
}
.wallets_image {
    margin-right: 16px;
}

.wallets_heading h4 {
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    margin: 0;
    color: #ffff;
}

.wallets_heading p {
    color: #fff;
    font-size: 20px;
    margin: 0;
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
    $wallets=$this->conn->runQuery("*",'wallet_types',"wallet_type IN ('wallet') and  status='1'  and $plan_type='1'");
    $wallets_pin=$this->conn->runQuery("*",'wallet_types',"wallet_type IN ('pin') and  status='1'  and $plan_type='1'");
    $withdrawals=$this->conn->runQuery("*",'wallet_types',"wallet_type = 'withdrawal' and  status='1'  and $plan_type='1'");
    $payouts=$this->conn->runQuery("*",'wallet_types',"wallet_type = 'payout' and  status='1'  and $plan_type='1'");
    $w_balance=$this->conn->runQuery('*','user_wallets',"u_code='$user_id'");
    $wallet_balance=$w_balance ? $w_balance[0]:array();
    $latest_earnings=$this->conn->runQuery('*','transaction',"u_code='$user_id' and tx_type='income' order by id desc LIMIT 6");
    $total=$this->conn->runQuery('SUM(amount) as total','transaction',"u_code='$user_id' and tx_type='income'")[0]->total;
    $my_package=$this->business->package($user_id);
   
         $u_sponsorssss=$this->conn->runQuery('u_sponsor','users',"id='$user_id' and 1=1");
         $spons_id=$u_sponsorssss[0]->u_sponsor;
         $u_spos=$this->conn->runQuery('username,name','users',"id='$spons_id' and 1=1");
         $sponsor_name=$u_spos[0]->name;
         $sponsor_username=$u_spos[0]->username;
        
                       
?>

<?php
    if($currency=='Rs'){
   
     $fas="fa fa-inr";
   
    }elseif($currency=='$'){
       $fas="fa fa-dollar"; 
    }
    
    ?>	
<div class="section_one">
        <div class="container">
           <div class="row">
            <?php
               foreach($incomes as $income){    
               $slug =  $income->wallet_column; 
                $source=$income->slug;
               if($slug=='c3'){
                  $color="#ec43f7de";
                 
              }else if($slug=='c4'){
                  $color="#dd6a3e";
                 
              }else if($slug=='c17'){
                  $color="#39a947";
                 
              }
               ?>   
               <div class="col-md-4">
                   <div class="income_box_chart" style="background:<?= $color?>;">
                       <div class="income_icon_image">
                            <img src="<?= base_url();?>/images/logo/income_pack.png">
                       </div>
                       <div class="income_heading_money">
                           <h4><?= $income->name;?></h4>
                           <p><?=$currency;?>&nbsp;<?= $ttl[]=round(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0,2); ?></p>
                       </div>
                   </div>
               </div>
               <?php
               }
              ?>
             <!--  <div class="col-md-4">
                   <div class="income_box_chart" style="background:#dd6a3e;">
                       <div class="income_icon_image">
                            <img src="<?= base_url();?>/images/logo/income_pack.png">
                       </div>
                       <div class="income_heading_money">
                           <h4>Direct income</h4>
                           <p>$0</p>
                       </div>
                   </div>
               </div>-->
             <!--  <div class="col-md-4">
                   <div class="income_box_chart" style="background:#39a947;">
                       <div class="income_icon_image">
                            <img src="<?= base_url();?>/images/logo/income_pack.png">
                       </div>
                       <div class="income_heading_money">
                           <h4>Direct income</h4>
                           <p>$0</p>
                       </div>
                   </div>
               </div>-->
           </div>   
            
        
           

           <div class="row">
             
              <div class="col-lg-7 col-md-12 col-sm-12">
                 <div class="recent_earning">
                    <h4>Latest Earnings</h4>
                    <div class="recent_data_eraning">
                       <table class="table table-bordered table-hover">
                          <thead>
                             <tr>
                                <th>Date</th>
                                <th>Amount type</th>
                                <th>Total amount</th>
                             </tr>
                          </thead>
                          <tbody>
                           <?php
                            $currency = $this->conn->company_info('currency');
                           if($latest_earnings){
                              foreach($latest_earnings as $earnings){
                              ?>
                             <tr>
                                <td><?= $earnings->date;?></td>
                                <td><?= $earnings->source;?>  Income</td>
                                <td><?= $currency;?><?= $earnings->amount;?></td>
                             </tr>
                            <?php
                             }
                           }
                            ?>
                            
                          </tbody>
                       </table>
                    </div>
                 </div>
              </div>
              <div class="col-lg-5 col-md-12 col-sm-12">
                  <div class="income_wallets">
                       <?php
                      foreach($wallets as $section){ 
                      $slug =  $section->wallet_column;                               
                    ?>
                      <div class="all_wallets">
                          <div class="wallets_image">
                              <img src="<?= base_url();?>/images/logo/wallet_1.png">
                          </div>
                          <div class="wallets_heading">
                              <h4><?= $section->name;?></h4>
                              <p><?= $currency;?>&nbsp;<?= round(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0,2); ?></p>
                          </div>
                      </div>
                       <?php
                          } 
                         ?>
                      <!-- <div class="all_wallets">
                          <div class="wallets_image">
                              <img src="<?= base_url();?>/images/logo/wallet_1.png">
                          </div>
                          <div class="wallets_heading">
                              <h4>main wallet</h4>
                              <p>$0</p>
                          </div>
                      </div>
                       <div class="all_wallets">
                          <div class="wallets_image">
                              <img src="<?= base_url();?>/images/logo/wallet_1.png">
                          </div>
                          <div class="wallets_heading">
                              <h4>main wallet</h4>
                              <p>$0</p>
                          </div>
                      </div>-->
                  </div>
              </div>
           </div>

           
           <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
           <div class="wallet_e_desc">
              
                      
             <?php
               $this->load->view('User_panel/pages/dashboard/news_section');
             ?>
              </div>
                <!-- <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="e_wallet_data">
                       <div class="e_wallet_images">
                          <img src="<?= base_url();?>/images/logo/ewallet.png">
                       </div>
                       <?php
                       $payout_approved=$this->conn->runQuery('SUM(amount) as total','transaction',"u_code='$user_id' and tx_type='withdrawal' and status='1'")[0]->total;
                       $payout_pending=$this->conn->runQuery('SUM(amount) as total','transaction',"u_code='$user_id' and tx_type='withdrawal' and status='0'")[0]->total;
                       $payout_rejected=$this->conn->runQuery('SUM(amount) as total','transaction',"u_code='$user_id' and tx_type='withdrawal' and status='2'")[0]->total;
                       ?>
                       <div class="e_wallet">payout rejected</div>
                      
                       
                       <h5 class="wallet_income_1"><?= $currency;?>&nbsp;<?= $payout_rejected!='' ? $payout_rejected:0;?></h5>
                     
                    </div>
                 </div>
                -->

                 
                <!-- <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="e_wallet_data">
                       <div class="e_wallet_images wallet1">
                          <img src="<?= base_url();?>/images/logo/ewallet3.png">
                       </div>
                       <div class="e_wallet">payout released</div>
                       <h5 class="wallet_income_2"><?= $currency;?>&nbsp;<?= $payout_approved!='' ? $payout_approved:0;?></h5>
                    </div>
                 </div>
                 <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="e_wallet_data">
                       <div class="e_wallet_images wallet2">
                          <img src="<?= base_url();?>/images/logo/ewallet4.png">
                       </div>
                       <div class="e_wallet">payout pending</div>
                       <h5 class="wallet_income_3"><?= $currency;?>&nbsp;<?= $payout_pending!='' ? $payout_pending:0;?></h5>
                    </div>
                 </div>-->
              </div>
           
     
        <?php
         $plan_type=$this->conn->setting('reg_type');
         if($plan_type=='binary'){
         ?>
     <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="sponser_name_team">
           <div class="package_sponser_name">
              <div class="sponser_inner_content">
                
                 <h4>Team Section</h4>
              </div>
              <div class="sponser_inner_content_image">
                 <img src="<?= base_url();?>/images/logo/remove_team.png">
              </div>
           </div>
           <div class="team_pv">
           <?php
               foreach($team as $section){ 
                  $slug =  $section->wallet_column; 
                  ?>
              <div class="team_pv_data">
                 <span><?= $section->name;?> </span>
                 <h6><?= (!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0); ?></h6>
              </div>
              <?php
               }
              ?>
               
           </div>
        </div>
     </div>
     </div>
     <?php
         }else{
     ?>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="sponser_name_team">
           <div class="package_sponser_name">
              <div class="sponser_inner_content">
                 <h6>Team</h6>
                
              </div>
              <div class="sponser_inner_content_image">
                 <img src="<?= base_url();?>/images/logo/remove_team.png">
              </div>
           </div>
           <div class="team_pv">
           <?php
               foreach($team as $section){ 
                  $slug =  $section->wallet_column; 
                  ?>
              <div class="team_pv_data">
                 <span><?= $section->name;?> </span>
                 <h6><?= (!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0); ?></h6>
              </div>
              <?php
               }
              ?>
               
           </div>
        </div>
     </div>
     </div>
   <?php
         }
   ?>

<?php
         $plan_type=$this->conn->setting('reg_type');
         if($plan_type=='binary'){
         ?>
           <div class="row">
              <div class="col-12">
                <div class="tabs_data">
                    <ul id="tabs-nav">
                      <li><a href="#tab1">Overall</a></li>
                      <li><a href="#tab2">Binary</a></li>
                      <li><a href="#tab3">News</a></li>
                    
                    </ul> <!-- END tabs-nav -->

                    <div id="tabs-content">
                      <div id="tab1" class="tab-content">
                       <div class="box_content_tabs">
                          <div class="tabs_content_data">
                             <div class="dollor_tab">
                             <i class="fa fa-users" style="color:;"></i>
                             </div>
                             <div class="dollor_tab_content">
                               <h4>Total Income</h4>
                               <span><?= ($total) ? ($total):0;?></span>
                             </div>
                          </div>
                          <?php
                      foreach($wallets as $section){ 
                      $slug =  $section->wallet_column;                               
                    ?>
                     <div class="tabs_content_data">
                            <div class="dollor_tab">
                            <i class="fa fa-user" style="color:#147e14;"></i>
                            </div>
                            <div class="dollor_tab_content">
                           
                              <h4><?= $section->name;?></h4>
                              <span><?= round(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0,2); ?></span>
                             
                            </div>
                         </div>
                         <?php
                          } 
                         ?>
                  
                          <div class="tabs_content_data">
                            <div class="dollor_tab">
                            <i class="fa fa-user" style="color:#147e14;"></i>
                            </div>
                            <div class="dollor_tab_content">
                            <?php
                               foreach($withdrawals as $section){ 
                                 $slug1 =  $section->wallet_column; 
                                 ?>
                              <h4>Total Withdrawal</h4>
                              <span><?= round(!empty($wallet_balance) && isset($wallet_balance->$slug1) ? $wallet_balance->$slug1:0,2); ?></span>
                              <?php
                               }
                              ?>
                            </div>
                         </div>
                        
                         
                       </div>
                      </div>
                     
                      <div id="tab2" class="tab-content">
                        <div class="box_content_tabs">
                            <div class="tabs_content_data">
                               <div class="dollor_tab">
                               <i class="fa fa-users" style="color:;"></i>
                               </div>
                               <div class="dollor_tab_content">
                                 <h4>Matching</h4>
                                 <span><?= $wallet_balance->c24!='' ? $wallet_balance->c24:0;?></span>
                               </div>
                            </div>
                            <div class="tabs_content_data">
                              <div class="dollor_tab">
                              <i class="fa fa-users" style="color:;"></i>
                              </div>
                              <div class="dollor_tab_content">
                                <h4>Carry</h4>
                                <span><?= $wallet_balance->c25!='' ? $wallet_balance->c25:0;?></span>
                              </div>
                           </div>
                           <div class="tabs_content_data">
                              <div class="dollor_tab">
                              <i class="fa fa-users" style="color:;"></i>
                              </div>
                              <div class="dollor_tab_content">
                                <h4>Flash</h4>
                                <span>
                                 <?php
                                 $binary_flash=$this->conn->runQuery('SUM(flash) as ttl_flash','binary_matching',"u_code='$user_id'")[0]->ttl_flash;
                                 echo $binary_flash!='' ? $binary_flash:0;
                                 ?>
                                </span>
                              </div>
                           </div>
                           

                         </div>
                      </div>

                      <div id="tab3" class="tab-content">
                        <div class="box_content_tabs">
                            <div class="tabs_content_data">
                               <!-- <div class="dollor_tab">
                               <i class="fa fa-users" style="color:;"></i>
                               </div> -->
                               <?php
                               $this->load->view('User_panel/pages/dashboard/news_section');
                             ?>
                               <div class="dollor_tab_content">

                             
											
                                 <!-- <h4>  </h4>
                                 <span> </span> -->
                               </div>
                            </div>
                           
                          
                           

                         </div>
                      </div>

                      
                     
                    </div> <!-- END tabs-content -->
                  </div> <!-- END tabs -->
              </div>
           </div>
           <?php
         }elseif($plan_type=='generation'){
          
         if($plan_type=='generation' || $plan_type=='universal'){
         ?>
           <div class="row">
              <div class="col-12">
                <div class="tabs_data">
                    <ul id="tabs-nav">
                      <li><a href="#tab1">Overall</a></li>
                      <li><a href="#tab2">Support</a></li>
                      <li><a href="#tab3">News</a></li>
                    
                    </ul> <!-- END tabs-nav -->

                    <div id="tabs-content">
                      <div id="tab1" class="tab-content">
                       <div class="box_content_tabs">
                          <div class="tabs_content_data">
                             <div class="dollor_tab">
                             <i class="fa fa-users" style="color:;"></i>
                             </div>
                             <div class="dollor_tab_content">
                               <h4>Total Income</h4>
                               <span><?= ($total) ? ($total):0;?></span>
                             </div>
                          </div>
                          <?php
                      foreach($wallets as $section){ 
                      $slug =  $section->wallet_column;                               
                    ?>
                     <div class="tabs_content_data">
                            <div class="dollor_tab">
                            <i class="fa fa-user" style="color:#147e14;"></i>
                            </div>
                            <div class="dollor_tab_content">
                           
                              <h4><?= $section->name;?></h4>
                              <span><?= round(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug:0,2); ?></span>
                             
                            </div>
                         </div>
                         <?php
                          } 
                         ?>
                  
                        <div class="tabs_content_data">
                            <div class="dollor_tab">
                                <i class="fa fa-user" style="color:#147e14;"></i>
                            </div>
                            <div class="dollor_tab_content">
                                <?php
                                foreach($withdrawals as $section){ 
                                    $slug1 =  $section->wallet_column; 
                                ?>
                                <h4>Total Withdrawal</h4>
                                <span><?= round(!empty($wallet_balance) && isset($wallet_balance->$slug1) ? $wallet_balance->$slug1:0,2); ?></span>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        
                        <!--<div class="tabs_content_data">
                            <div class="dollor_tab">
                                <i class="fa fa-user" style="color:#147e14;"></i>
                            </div>
                            <div class="dollor_tab_content">
                                
                                <h4>Team Business</h4>
                                <span><?php $top_legs1=$this->business->top_legs($user_id);
                                            echo array_sum($top_legs1);
                                       ?>
                                </span>
                               
                            </div>
                        </div> -->
                       </div>
                      </div>
                     
                      <!-- <div id="tab2" class="tab-content">
                        <div class="box_content_tabs">
                            <div class="tabs_content_data">
                               <div class="dollor_tab">
                               <i class="fa fa-users" style="color:;"></i>
                               </div>
                               <div class="dollor_tab_content">
                                 <h4>Matching</h4>
                                 <span><?= $wallet_balance->c24!='' ? $wallet_balance->c24:0;?></span>
                               </div>
                            </div>
                            <div class="tabs_content_data">
                              <div class="dollor_tab">
                              <i class="fa fa-users" style="color:;"></i>
                              </div>
                              <div class="dollor_tab_content">
                                <h4>Carry</h4>
                                <span><?= $wallet_balance->c25!='' ? $wallet_balance->c25:0;?></span>
                              </div>
                           </div>
                           <div class="tabs_content_data">
                              <div class="dollor_tab">
                              <i class="fa fa-users" style="color:;"></i>
                              </div>
                              <div class="dollor_tab_content">
                                <h4>Flash</h4>
                                <span>
                                 <?php
                                 $binary_flash=$this->conn->runQuery('SUM(flash) as ttl_flash','binary_matching',"u_code='$user_id'")[0]->ttl_flash;
                                 echo $binary_flash!='' ? $binary_flash:0;
                                 ?>
                                </span>
                              </div>
                           </div>
                           

                         </div>
                      </div> -->

                      <div id="tab2" class="tab-content">
                        <div class="box_content_tabs">
                            <div class="tabs_content_data">
                               <div class="dollor_tab">
                               <div class="dollor_tab_content">
                              <h3><span>We're here to help you!</span></h3>
                              <p><span>Ask a question or file a support ticket, manage request, report an issues. Our team support team will get back to you by email.</span></p>
                              <div class="user_support">
                                  <a href="<?= $panel_path.'support';?>" class="user_anchor">Get Support Now</a>
                              </div>
                           </div>
                           </div>
                           </div>
                           </div>
                           </div>



                      <div id="tab3" class="tab-content">
                        <div class="box_content_tabs">
                            <div class="tabs_content_data">
                               <!-- <div class="dollor_tab">
                               <i class="fa fa-users" style="color:;"></i>
                               </div> -->
                               <?php
                               $this->load->view('User_panel/pages/dashboard/news_section');
                             ?>
                               <div class="dollor_tab_content">

                             
											
                                 <!-- <h4>  </h4>
                                 <span> </span> -->
                               </div>
                            </div>
                           
                          
                           

                         </div>
                      </div>

                      
                     
                    </div> <!-- END tabs-content -->
                  </div> <!-- END tabs -->
              </div>
           </div>
           <?php
         }
          
         }
           ?>
        </div>
     </div>
     <?php
   //   public function check_transfer_balance($str){
   //      $wlt=$_POST['selected_wallet'];
   //      $balance=$this->update_ob->wallet($this->session->userdata('user_id'),$wlt);        
   //      if($balance>=$str){
   //          return true;
   //      }else{
   //          $this->form_validation->set_message('check_transfer_balance', "Insufficient Fund in wallet.");
   //          return false;
   //      }
   //  }

//     public function check_wallet_useable_withdrawal($str){
//       $available_wallets=$this->conn->setting('withdrawal_wallets');
//       $useable_wallet=json_decode($available_wallets);
//       if(array_key_exists($str,$useable_wallet)){
//           return true;
//       }else{
//             $this->form_validation->set_message('check_wallet_useable', "You can not Withdraw fund from this wallet");
//              return false;
//       }
//   }
     ?>
     <br>
     <br>
     <script>
    // Show the first tab and hide the rest
$('#tabs-nav li:first-child').addClass('active');
$('.tab-content').hide();
$('.tab-content:first').show();

// Click function
$('#tabs-nav li').click(function(){
  $('#tabs-nav li').removeClass('active');
  $(this).addClass('active');
  $('.tab-content').hide();
  
  var activeTab = $(this).find('a').attr('href');
  $(activeTab).fadeIn();
  return false;
});

$('button.copyButton').click(function(){
    $(this).siblings('input.linkToCopy').select();      
    document.execCommand("copy");
});
</script>