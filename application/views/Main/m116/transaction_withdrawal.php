

    <!-- Banner Section Starts Here -->
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">Withdrawal Report</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <li><a href="<?= base_url();?>index">Home</a>//</li>
                    <li>Income</li>
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
                                        <th>Amount</th>
                                        <!-- <th>Admin Charges</th> -->
                                        <th>Payble Amount</th>
                                        <th>Status</th>
                                        <th>Reason</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
								$currency=$this->conn->company_info('currency'); 
                                if($table_data){
								foreach($table_data as $t_data){
                                   $tx_profile=$this->profile->profile_info($t_data['u_code']);
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
                                        <td data-label="Amount"><span class="amount"><?=  $currency;?><?= $tt=$t_data['amount']+$t_data['tx_charge'];?></span></td>
                                        <!-- <td data-label="Admin Charges"><span class="wallet"><?=  $currency;?><?= $t_data['tx_charge'];?></span></td> -->
                                        <td data-label="Payble Amount"><span class="wallet"><?=  $currency;?><?= $t_data['amount'];?></span></td>
                                        <td data-label="Status"><span class="wallet"> <?php 
                                        switch($t_data['status']){
                                            case 1 :
                                                echo 'Approved';
                                                break;
                                            case 0 :
                                                echo 'Pending';
                                                break;
                                            case 2 :
                                                echo 'Rejected';
                                                break;
                                        }
                                        ?></span></td>
                                        <td data-label="Reason"><span class="wallet"><?= $t_data['reason'];?></span></td>
                                        <td data-label="Date"><span class="date"><?= $t_data['date'];?></span></td>
                                    </tr>
                                   <?php
                                }
                            }
                                   ?>
                                   
                                </tbody>
                                <?php 
    
    echo $this->pagination->create_links();?>
                            </table>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    
    <!-- Transection Section Ends Here -->


    