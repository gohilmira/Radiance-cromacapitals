
<?php
$user_id=$this->session->userdata('user_id');
$all_orders=$this->conn->runQuery("*",'orders',"u_code='$user_id' and status='1'");
?>
    <!-- Banner Section Starts Here -->
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">All Investment</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <li><a href="<?= base_url();?>index">Home</a>//</li>
                    <li>Investment</li>
                </ul>
            </div>
        </div>
        <div class="shapes">
            <img src="<?= $panel_url;?>assets/images/banner/inner-bg.png" alt="banner" class="shape shape1">
            <img src="<?= $panel_url;?>assets/images/banner/inner-thumb.png" alt="banner" class="shape shape2 d-none d-lg-block">
        </div>
    </div>
    <!-- Banner Section Ends Here -->


  
 <!-- Transection Section Starts Here -->
 <section class="transection-section section-bg padding-top padding-bottom">
        <div class="container">
            <!-- <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="section__header max-p text-center">
                        <h2 class="section__header-title">Latest Deposit & Withdraw </h2>
                      
                    </div>
                </div>
            </div> -->
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <!-- <ul class="transection__tab__menu nav-tabs nav border-0 justify-content-center">
                        <li><a data-bs-toggle="tab" href="#deposit" class="cmn--btn2 active">Last Deposit</a></li>
                        <li><a data-bs-toggle="tab" href="#widthdraw" class="cmn--btn2">Last Widthdraw</a></li>
                    </ul> -->
                    <div class="tab-content">
                        <div class="tab-pane show fade active" id="deposit">

                           <table class="table transection__table">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Package Amount</th>
                                        <th>Investment Type</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                if($all_orders){
								foreach($all_orders as $t_data){
                                   $tx_profile=$this->profile->profile_info($t_data->u_code);
                                    $sr_no++;
                                ?>
                                    <tr>
                                        <td data-label="User Name">
                                            <div class="user d-flex flex-wrap align-items-center">
                                                <!-- <div class="thumb">
                                                   <img src="<?= $panel_url;?>assets/images/dashboard/item1.png" alt="dashboard"> 
                                                    <?= $sr_no;?>
                                                </div> -->
                                                <p class="name"><?= $tx_profile->username;?></p>
                                            </div>
                                        </td>
                                        <td data-label="Amount"><span class="amount">$<?= $t_data->order_amount;?></span></td>
                                        <td data-label="Investmet type"><span class="wallet"><?= $t_data->tx_type;?></span></td>
                                        <td data-label="Status"><span class="wallet"><?= $t_data->status==1 ? "Approved" : "Pending"; ?> </span></td>
                                        <td data-label="Date"><span class="date"><?= $t_data->added_on;?></span></td>
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
            </div>

            <?php 
    
    echo $this->pagination->create_links();?>
        </div>
        
    </section>

    
    <!-- Transection Section Ends Here -->


    