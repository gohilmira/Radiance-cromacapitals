<?php
error_reporting(0);
$plan_type = $this->session->userdata('reg_plan');
$profile = $this->session->userdata("profile");
$user_id = $this->session->userdata('user_id');
$plan = $this->conn->runQuery("*", 'plan', "1=1");
$website_settings = $this->conn->plan_setting("dashboard");
$currency = $this->conn->company_info('currency');
$incomes = $this->conn->runQuery("*", 'wallet_types', "wallet_type='income' and  status='1' and $plan_type='1'");
$team = $this->conn->runQuery("*", 'wallet_types', "wallet_type='team' and  status='1' and $plan_type='1'");
$wallets = $this->conn->runQuery("*", 'wallet_types', "wallet_type IN ('wallet') and  status='1'  and $plan_type='1'");
$wallets_pin = $this->conn->runQuery("*", 'wallet_types', "wallet_type IN ('pin') and  status='1'  and $plan_type='1'");
$withdrawals = $this->conn->runQuery("*", 'wallet_types', "wallet_type = 'withdrawal' and  status='1'  and $plan_type='1'");
$payouts = $this->conn->runQuery("*", 'wallet_types', "wallet_type = 'payout' and  status='1'  and $plan_type='1'");
$w_balance = $this->conn->runQuery('*', 'user_wallets', "u_code='$user_id'");
$wallet_balance = $w_balance ? $w_balance[0] : array();
$latest_earnings = $this->conn->runQuery('*', 'transaction', "u_code='$user_id' and tx_type='income' order by id desc LIMIT 6");
$total = $this->conn->runQuery('SUM(amount) as total', 'transaction', "u_code='$user_id' and tx_type='income'")[0]->total;
$my_package = $this->business->package($user_id);

$u_sponsorssss = $this->conn->runQuery('u_sponsor', 'users', "id='$user_id' and 1=1");

$spons_id = $u_sponsorssss[0]->u_sponsor;


$u_spos = $this->conn->runQuery('username,name', 'users', "id='$spons_id' and 1=1");

$sponsor_name = $u_spos[0]->name;
$sponsor_username = $u_spos[0]->username;
$sponsor_name = $u_spos["name"];
$sponsor_username = $u_spos["username"];

$my_left_business = $this->team->team_by_business($user_id, 1);
$my_right_business = $this->team->team_by_business($user_id, 2);

?>


<?php
if ($currency == 'Rs') {

    $fas = "fa fa-inr";
} elseif ($currency == '$') {
    $fas = "fa fa-dollar";
}

$user_capping = $this->conn->runQuery("capping", 'users', "id='$user_id' and active_status='1'")[0];
$user_capping_value = isset($user_capping->capping) ? $user_capping->capping : 0;
$contract_return = $user_capping_value * $my_package;

$return_remaining = $contract_return - $total;

?>


<div id="content" class="app-content">

    <div class="row">


        <?php
        $panel_pa = $this->conn->company_info('panel_directory');
        $this->load->view($panel_pa . '/pages/dashboard/alert');
        ?>
        <div class="row">

            <?php
            $rank = $this->conn->runQuery("my_rank", 'users', "id='$user_id'");
            if ($rank != NULL || !empty($rank)) {

                $ranks = $rank[0]->my_rank;

                $plantable = $this->conn->runQuery('rank', 'plan', "id='$ranks'")[0];

                $myrank = $plantable->rank;
            } else {
                $myrank = "NONE";
            }
            ?>

            <?php
            $success['param'] = 'success';
            $success['alert_class'] = 'alert-success';
            $success['type'] = 'success';
            $this->show->show_alert($success);
            ?>
            <?php
            $erroralert['param'] = 'error';
            $erroralert['alert_class'] = 'alert-danger';
            $erroralert['type'] = 'error';
            $this->show->show_alert($erroralert);
            ?>


            <?php
            foreach ($incomes as $income) {
                $slug = $income->wallet_column;
                $source = $income->slug;
                if ($slug == $slug) {
                    $col = '3';
                    $today_income_all = $this->conn->runQuery('SUM(amount) as today', 'transaction', "u_code='$user_id' and source='$source' and tx_type='income' and date(date)=DATE(NOW())")[0]->today;
                } elseif ($slug == $slug) {
                    $col = '3';
                    $today_income_all = $this->conn->runQuery('SUM(amount) as today', 'transaction', "u_code='$user_id' and source='$source' and tx_type='income' and date(date)=DATE(NOW())")[0]->today;
                } elseif ($slug == $slug) {
                    $col = '3';
                    $today_income_all = $this->conn->runQuery('SUM(amount) as today', 'transaction', "u_code='$user_id' and  source='$source' and tx_type='income' and date(date)=DATE(NOW())")[0]->today;
                } elseif ($slug == $slug) {
                    $col = '3';
                    $today_income_all = $this->conn->runQuery('SUM(amount) as today', 'transaction', "u_code='$user_id' and source='$source' and tx_type='income' and date(date)=DATE(NOW())")[0]->today;
                } else {
                    $col = '6';
                }
                ?>


                <div class="col-xl-2 col-lg-6">

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="d-flex fw-bold small mb-3">
                                <span class="flex-grow-1">
                                    <?= $income->name; ?>
                                </span>
                                <a href="#" data-toggle="card-expand"
                                    class="text-inverse text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>


                            <div class="row align-items-center mb-2">
                                <div class="col-7">
                                    <h3 class="mb-0">
                                        <?= $currency; ?>&nbsp;
                                        <?= $ttl[] = round(!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug : 0, 2); ?>
                                    </h3>
                                </div>
                                <div class="col-5">
                                    <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors"
                                        data-height="30"></div>
                                </div>
                            </div>


                            <div class="small text-inverse text-opacity-50 text-truncate">
                                <?= $currency; ?>&nbsp;
                                <?= $today_income_all ? $today_income_all : 0; ?>
                            </div>

                        </div>


                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>

                    </div>

                </div>

            <?php } ?>
            
            <div class="col-xl-2 col-lg-6">

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="d-flex fw-bold small mb-3">
                                <span class="flex-grow-1">
                                   Total Income
                                </span>
                                <a href="#" data-toggle="card-expand"
                                    class="text-inverse text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>


                            <div class="row align-items-center mb-2">
                                <div class="col-7">
                                    <h3 class="mb-0">
                                        <?= $currency; ?>&nbsp;
                                        <?= round($total ,2); ?>
                                    </h3>
                                </div>
                                <div class="col-5">
                                    <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors"
                                        data-height="30"></div>
                                </div>
                            </div>


                            <div class="small text-inverse text-opacity-50 text-truncate">
                                <?= $currency; ?>&nbsp;
                                <?= $today_income_all ? $today_income_all : 0; ?>
                            </div>

                        </div>


                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>

                    </div>

                </div>


            <div class="col-xl-4 col-lg-6">

                <div class="card mb-3">

                    <div class="card-body">

                        <div class="d-flex fw-bold small mb-3">
                            <h2 class="flex-grow-1">Deposit</h2>
                            <a href="#" data-toggle="card-expand"
                                class="text-inverse text-opacity-50 text-decoration-none"><i
                                    class="bi bi-fullscreen"></i></a>
                        </div>


                        <div class="row align-items-center mb-2">
                            <div class="col-7">
                                <h3 class="mb-0">
                                    <?= $currency; ?>
                                    <?= $my_package ? $my_package : 0; ?>
                                </h3>
                            </div>
                            <div class="col-5">
                                <div class="mt-n2" data-render="apexchart" data-type="line" data-title="Visitors"
                                    data-height="30"></div>
                            </div>
                        </div>


                        <div class="small text-inverse text-opacity-50 text-truncate">

                            <a href="<?= $panel_path . 'profile'; ?>" type="button" class="btn btn-theme">View
                                Profile</a>
                        </div>

                    </div>


                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>

                </div>

            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="row">
                    <?php
                    $plan_type = $this->conn->setting('reg_type');
                    if ($plan_type == 'binary') {
                        ?>
                        <div class="col-xl-12 col-lg-6 mt-1">
                            <div id="inputGroup" class="mb-5">

                                <div class="card">
                                    <div class="card-body">
                                        <h4>Referral Link</h4>

                                        <h6>Left</h6>
                                        <div class="input-group flex-nowrap">
                                            <input id="referral_link_left" type="text" class="form-control"
                                                value="<?php echo $left_link = base_url('register?ref=' . $profile->username . "&position=1"); ?>">
                                            <button class="input-group-text" type="button" onclick="copyLink1('left')"
                                                ;>Copy</button>
                                        </div>
                                        <br>
                                        <h6>Right</h6>
                                        <div class="input-group flex-nowrap">
                                            <input id="referral_link_right" type="text" class="form-control"
                                                value="<?php echo $right_link = base_url('register?ref=' . $profile->username . "&position=2"); ?>">
                                            <button class="input-group-text" type="button" onclick="copyLink('right')"
                                                ;>Copy</button>
                                        </div>
                                    </div>

                                    <div class="card-arrow">
                                        <div class="card-arrow-top-left"></div>
                                        <div class="card-arrow-top-right"></div>
                                        <div class="card-arrow-bottom-left"></div>
                                        <div class="card-arrow-bottom-right"></div>
                                    </div>
                                    <div class="hljs-container">
                                        <pre><code class="xml hljs language-xml" data-url="assets/data/form-elements/code-13.json"></code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-xl-12 col-lg-6">
                            <div id="inputGroup" class="mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Referral Link</h4>
                                        <br>
                                        <!--<h5>Left</h5>-->
                                        <div class="input-group flex-nowrap">
                                            <input id="referral_link_left" type="text" class="form-control"
                                                value="<?php echo $left_link = base_url('register?ref=' . $profile->username . "&position=1"); ?>">
                                            <button class="input-group-text" type="button" onclick="copyLink1('left')"
                                                ;>Copy</button>
                                        </div>

                                    </div>

                                    <div class="card-arrow">
                                        <div class="card-arrow-top-left"></div>
                                        <div class="card-arrow-top-right"></div>
                                        <div class="card-arrow-bottom-left"></div>
                                        <div class="card-arrow-bottom-right"></div>
                                    </div>
                                    <div class="hljs-container">
                                        <pre><code class="xml hljs language-xml" data-url="assets/data/form-elements/code-13.json"></code></pre>
                                    </div>
                                </div>
                            </div>



                        </div>
                    <?php } ?>



                </div>
            </div>
            
            <div class="col-xl-6">

                <div class="card mb-3 new-h">

                    <div class="card-body">

                        <div class="d-flex fw-bold small mb-3">
                            <span class="flex-grow-1 fs-5">Latest Sponser</span>
                            <a href="#" data-toggle="card-expand"
                                class="text-inverse text-opacity-50 text-decoration-none"><i
                                    class="bi bi-fullscreen"></i></a>
                        </div>


                      <div class="row">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Join Date</th>
                                            <th>Status</th>
                                            <th>Staking</th>
                                            <?php $plan_ty = $this->conn->setting('reg_type');
                                            if ($plan_ty == 'binary') {
                                            ?>
                                                <th>Current Business</th>
                                                <th>Previous Business</th>
                                                <th>Position</th>
                                            <?php } ?>

                                        </tr>
                                        <?php
                                        $table_data = $this->conn->runQuery('*', 'users', "u_sponsor='$user_id' order by id desc LIMIT 3");
                                        // print_r($table_data);die;
                                        $currency = $this->conn->company_info('currency');

                                        if ($table_data) {
                                            foreach ($table_data as $t_data) {
                                                $sr_no++;

                                                $gen_team = $this->team->my_generation_with_personal($t_data->id);

                                        ?>
                                                <tr>
                                                    <td><?= $sr_no; ?></td>
                                                    <td><?= $t_data->name; ?></td>
                                                    <td><?= $t_data->username; ?></td>
                                                    <td><?= $t_data->added_on; ?></td>
                                                    <td><?php
                                                        if ($t_data->active_status == 1) {
                                                            echo "Active<br>";
                                                            echo $t_data->active_date;
                                                        } else {
                                                            echo "Inactive";
                                                        }
                                                        ?></td>
                                                    <td><?= $currency;?><?= $t_data->active_status == 1 ? $this->business->package($t_data->id) : 0; ?></td>
                                                    <?php $plan_ty = $this->conn->setting('reg_type');
                                                    if ($plan_ty == 'binary') {
                                                    ?>
                                                        <td><?= $t_data->active_status == 1 ? $this->business->current_session_bv($gen_team) : 0; ?></td>
                                                        <td><?= $t_data->active_status == 1 ? $this->business->previous_bv($gen_team) : 0; ?></td>
                                                        <td><?= $t_data->position == 1 ? 'Left' : 'Right'; ?></td>
                                                    <?php } ?>
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
           
                    </div>


                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>

                </div>

            </div>
            
            <div class="col-xl-6">

                <div class="card mb-3 new-h">

                    <div class="card-body">

                        <div class="d-flex fw-bold small mb-3">
                            <span class="flex-grow-1 fs-5">Matching Section </span>
                            <a href="#" data-toggle="card-expand"
                                class="text-inverse text-opacity-50 text-decoration-none"><i
                                    class="bi bi-fullscreen"></i></a>
                        </div>

                <div class="row">
                    <div class="col-xl-3 col-lg-6">

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="d-flex fw-bold small mb-3">
                                <span class="flex-grow-1">
                                   Left Business
                                </span>
                                <a href="#" data-toggle="card-expand"
                                    class="text-inverse text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>


                            <div class="row align-items-center mb-2">
                                <div class="col-7">
                                    <h3 class="mb-0">
                                        <?= $currency; ?>&nbsp;
                                        <?= $my_left_business; ?>
                                    </h3>
                                </div>
                                <div class="col-5">
                                    <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors"
                                        data-height="30"></div>
                                </div>
                            </div>

                        </div>
                        
                        


                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>

                    

                        <div class="card-body">

                            <div class="d-flex fw-bold small mb-3">
                                <span class="flex-grow-1">
                                   Right Business
                                </span>
                                <a href="#" data-toggle="card-expand"
                                    class="text-inverse text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>


                            <div class="row align-items-center mb-2">
                                <div class="col-7">
                                    <h3 class="mb-0">
                                        <?= $currency; ?>&nbsp;
                                        <?= $my_right_business; ?>
                                    </h3>
                                </div>
                                <div class="col-5">
                                    <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors"
                                        data-height="30"></div>
                                </div>
                            </div>

                        </div>
                        
                        


                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>

                    </div>

                </div>
                
                <?php
                   $matching = $this->conn->runQuery('SUM(matching) as total', 'binary_matching', "u_code='$user_id'")[0]->total;
                   $top_legs1=$this->business->top_legs($user_id);
                   if (!empty($top_legs1)) {
                        $max_leg_business = max($top_legs1);
                        $carry_forward = $max_leg_business - $matching;
                    }else{
                        $carry_forward = 0;
                    }
                   
                   
                ?>
                  <div class="col-xl-3 col-lg-6">

                    <div class="card mb-3" style="margin-top:63px;">

                        <div class="card-body">

                            <div class="d-flex fw-bold small mb-3">
                                <span class="flex-grow-1">
                                   Carry Forward
                                </span>
                                <a href="#" data-toggle="card-expand"
                                    class="text-inverse text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>


                            <div class="row align-items-center mb-2">
                                <div class="col-7">
                                    <h3 class="mb-0">
                                        <?= $currency; ?>&nbsp;
                                        <?= $carry_forward; ?>
                                    </h3>
                                </div>
                                <div class="col-5">
                                    <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors"
                                        data-height="30"></div>
                                </div>
                            </div>

                        </div>
                        
                        


                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>

                    </div>

                </div>
                </div>
                
                
                     
            </div>

                </div>

            </div>




            <div class="col-xl-4 col-top">
                <?php
                $plan_type = $this->conn->setting('reg_type');
                if ($plan_type == 'binary') {
                    ?>
                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="d-flex fw-bold small mb-3">
                                <h4 class="flex-grow-1">Team Section</h4>
                                <a href="#" data-toggle="card-expand"
                                    class="text-inverse text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>


                            <div class="table-responsive">
                                <table class="w-100 mb-0 small align-middle text-nowrap">
                                    <tbody>
                                        <?php
                                        foreach ($team as $section) {
                                            $slug = $section->wallet_column;
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex mb-2 align-items-center justify-content-between">
                                                        <div>
                                                            <h6>
                                                                <?= $section->name; ?>
                                                            </h6>
                                                        </div>
                                                        <div>
                                                            <h6>
                                                                <?= (!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug : 0); ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>


                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>

                    </div>
                <?php } else { ?>
                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="d-flex fw-bold small mb-3">
                                <h4 class="flex-grow-1">Team Section</h4>
                                <a href="#" data-toggle="card-expand"
                                    class="text-inverse text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>


                            <div class="table-responsive">
                                <table class="w-100 mb-0 small align-middle text-nowrap">
                                    <tbody>
                                        <?php
                                        foreach ($team as $section) {
                                            $slug = $section->wallet_column;
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex mb-2 align-items-center justify-content-between">
                                                        <div>
                                                            <h6>
                                                                <?= $section->name; ?>
                                                            </h6>
                                                        </div>
                                                        <div>
                                                            <h6>
                                                                <?= (!empty($wallet_balance) && isset($wallet_balance->$slug) ? $wallet_balance->$slug : 0); ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>


                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>

                    </div>
                <?php } ?>



                <div class="card mb-3">
                    <div class="card-body">

                        <div class="d-flex fw-bold small mb-3">
                            <!--<h4 class="flex-grow-1">Team Section</h4>-->
                            <!--<a href="#" data-toggle="card-expand"-->
                            <!--    class="text-inverse text-opacity-50 text-decoration-none"><i-->
                            <!--        class="bi bi-fullscreen"></i></a>-->
                        </div>

                        <?php
                        $main_value = $this->conn->runQuery('c1', 'user_wallets', "u_code='$user_id'")[0]->c1;
                        ?>
                        <div class="table-responsive">
                            <table class="w-100 mb-0 small align-middle text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex mb-2 align-items-center justify-content-between">
                                                <div>
                                                    <h2 class="flex-grow-1" style="color:#249d79;">
                                                        Income Wallet
                                                    </h2>
                                                </div>
                                                <div>
                                                    <h2 style="color:#249d79;">
                                                        <?= round($main_value,2); ?>
                                                    </h2>
                                                </div>
                                            </div </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div </div>
                    </div>



                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>

                </div>

            </div>


            <div class="col-xl-8">

                <div id="stripedRows" class="mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h4>Latest Earnings</h4>


                            <table class="table table-striped mb-0">
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
                                    if ($latest_earnings) {
                                        foreach ($latest_earnings as $earnings) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?= $earnings->date; ?>
                                                </td>
                                                <td>
                                                    <?= $earnings->source; ?> Income
                                                </td>
                                                <td>
                                                    <?= $currency; ?>
                                                    <?= $earnings->amount; ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                        <div class="hljs-container">
                            <pre><code class="xml hljs language-xml" data-url="assets/data/table-elements/code-3.json"></code></pre>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>