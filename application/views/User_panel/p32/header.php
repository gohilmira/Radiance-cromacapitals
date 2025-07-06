<?php

$userid = $this->session->userdata('user_id');

$profile = $this->session->userdata("profile");

$kyc_details = $this->conn->runQuery('*', "user_accounts", "status='1' and u_code='$userid'");

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<!-- Mirrored from seantheme.com/hud/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 06:25:50 GMT -->

<head>
    <meta charset="utf-8">
    <title>
        <?= $this->conn->company_info('company_name'); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content>
    <meta name="author" content>
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $this->conn->company_info('symbol'); ?>">
    <link href="<?= $panel_url; ?>css/vendor.min.css" rel="stylesheet">
    <link href="<?= $panel_url; ?>css/app.min.css" rel="stylesheet">


    <link href="<?= $panel_url; ?>plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet">

<style>
    .new-e{
        text-align: center;
        margin-top: 18px;
        margin-left: 29%;
    }
    @media only screen and (max-width: 600px) {
        .new-e {
            text-align: center;
            margin-top: 17px;
            margin-left: 10%;
            margin-right: -22px;
            font-size: 12px;
        }
    }
    
</style>
</head>

<body>

    <div id="app" class="app">

        <div id="header" class="app-header">

            <div class="desktop-toggler">
                <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed"
                    data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>


            <div class="mobile-toggler">
                <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled"
                    data-toggle-target=".app">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
                <img src="<?= $this->conn->company_info('logo'); ?>" alt="" width="42">
            </div>


            <div class="brand">
                <a href="<?= $panel_path . 'dashboard'; ?>" class="brand-logo">

                    <img src="<?= $this->conn->company_info('logo'); ?>" alt="" width="50">
                </a>

            </div>

            <h5 class="new-e"><?= $this->session->userdata('profile')->email; ?></h5>

            <div class="menu">
                <div class="menu-item dropdown">
                    <a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"
                        class="menu-link">
                        <!--<div class="menu-icon"><i class="bi bi-search nav-icon"></i></div>-->
                    </a>
                </div>


                <div class="menu-item dropdown dropdown-mobile-full">
                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                        <div class="menu-img online">
                            <img src="<?= base_url('images/users/') . $profile->img; ?>" alt="Profile" height="60">
                        </div>
                        <div class="menu-text d-sm-block d-none w-170px"><span class="__cf_email__">
                                <?= $this->session->userdata('profile')->name; ?>
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
                        <a class="dropdown-item d-flex align-items-center"
                            href="<?= $panel_path . 'profile'; ?>">PROFILE <i
                                class="bi bi-person-circle ms-auto text-theme fs-16px my-n1"></i></a>

                        <a class="dropdown-item d-flex align-items-center" href="<?= $panel_path . 'logout'; ?>">LOGOUT
                            <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
                    </div>
                </div>
            </div>


            <form class="menu-search" method="POST" name="header_search_form">
                <div class="menu-search-container">
                    <div class="menu-search-icon"><i class="bi bi-search"></i></div>
                    <div class="menu-search-input">
                        <input type="text" class="form-control form-control-lg" placeholder="Search menu...">
                    </div>
                    <div class="menu-search-icon">
                        <a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"><i
                                class="bi bi-x-lg"></i></a>
                    </div>
                </div>
            </form>

        </div>


        <div id="sidebar" class="app-sidebar">

            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

                <div class="menu">

                    <div class="menu-item active">
                        <a href="<?= $panel_path . 'dashboard'; ?>" class="menu-link">
                            <span class="menu-icon"><i class="bi bi-cpu"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </div>

                    <?php
                    if ($this->conn->plan_setting('profile_section') == 1) {
                        ?>
                        <div class="menu-item has-sub">
                            <a href="#" class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <span class="menu-text">My Account</span>
                                <span class="menu-caret"><b class="caret"></b></span>
                            </a>
                            <div class="menu-submenu">
                                <?php if ($this->conn->plan_setting('welcome_letter') == 0) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'profile/letter'; ?>" class="menu-link">
                                            <span class="menu-text">Welcome Letter</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('profile_page') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'profile'; ?>" class="menu-link">
                                            <span class="menu-text">Profile</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'profile/edit-profile'; ?>" class="menu-link">
                                            <span class="menu-text">Edit Profile</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('id_card') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'profile/id-card'; ?>" class="menu-link">
                                            <span class="menu-text">vCard</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('change_password') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'profile/change-password'; ?>" class="menu-link">
                                            <span class="menu-text">Change Password</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('add_account_section') == 0) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'payment/add-account'; ?>" class="menu-link">
                                            <span class="menu-text">Accounts</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('change_tx_password') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'profile/tx-change-password'; ?>" class="menu-link">
                                            <span class="menu-text">Change Tx Password</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('set_tx_password') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'profile/set_user_password'; ?>" class="menu-link">
                                            <span class="menu-text">Set Tx Password</span>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>


                    <?php
                    if ($this->conn->plan_setting('team_section') == 1) {
                        ?>

                        <div class="menu-item has-sub">
                            <a href="javascript:;" class="menu-link">
                                <div class="menu-icon">
                                    <i class="bi bi-bag-check"></i>
                                    <span
                                        class="w-5px h-5px rounded-3 bg-theme position-absolute top-0 end-0 mt-3px me-3px"></span>
                                </div>
                                <div class="menu-text d-flex align-items-center">My Network</div>
                                <span class="menu-caret"><b class="caret"></b></span>
                            </a>
                            <div class="menu-submenu">
                                <?php if ($this->conn->plan_setting('direct_team') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'team/team-direct'; ?>" class="menu-link">
                                            <div class="menu-text">Directs</div>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('generation_team') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'team/team-generation'; ?>" class="menu-link">
                                            <div class="menu-text">My Team</div>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('left_team') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'team/team-left'; ?>" class="menu-link">
                                            <div class="menu-text">Left Team</div>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('right_team') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'team/team-right'; ?>" class="menu-link">
                                            <div class="menu-text">Right Team</div>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('tree') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'team/team-tree'; ?>" class="menu-link">
                                            <div class="menu-text">Tree</div>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('matrix') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'team/team-matrix-generation'; ?>" class="menu-link">
                                            <div class="menu-text">Matrix</div>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('single_leg_team') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'team/team-single-leg'; ?>" class="menu-link">
                                            <div class="menu-text">Single Leg</div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>

                    <?php
                    $topup_type = $this->conn->setting('topup_type');
                    if ($this->conn->plan_setting('fund_section') == 1 && $topup_type == 'amount') {
                        ?>
                        <div class="menu-item has-sub">
                            <a href="#" class="menu-link">
                                <span class="menu-icon"><i class="bi bi-controller"></i></span>
                                <span class="menu-text">Fund</span>
                                <span class="menu-caret"><b class="caret"></b></span>
                            </a>
                            <div class="menu-submenu">
                                <?php if ($this->conn->plan_setting('fund_add') == 0) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'fund/fund_add'; ?>" class="menu-link">
                                            <span class="menu-text">Add Fund</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'fund/fund-add-history'; ?>" class="menu-link">
                                            <span class="menu-text">Add Fund History</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('fund_request') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'fund/fund-request'; ?>" class="menu-link">
                                            <span class="menu-text">Fund Request</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('fund_deposit') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'fund/fund-deposit'; ?>" class="menu-link">
                                            <span class="menu-text">Deposit Fund</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('transfer_fund') == 0) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'fund/fund-transfer'; ?>" class="menu-link">
                                            <span class="menu-text">Transfer Fund</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'fund/transfer-history'; ?>" class="menu-link">
                                            <span class="menu-text">Fund Transfer History</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('fund_convert') == 0) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'fund/fund-convert'; ?>" class="menu-link">
                                            <span class="menu-text">Fund Convert</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'fund/convert-history'; ?>" class="menu-link">
                                            <span class="menu-text">Fund Convert History</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('fund_request') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'fund/request_history'; ?>" class="menu-link">
                                            <span class="menu-text">Fund Request History</span>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if ($this->conn->plan_setting('withdraw_fund') == 1 && $this->conn->setting('earning_type') == 'withdrawal') { ?>
                        <div class="menu-item has-sub">
                            <a href="#" class="menu-link">
                                <span class="menu-icon"><i class="bi bi-pen"></i></span>
                                <span class="menu-text">Withdrawal</span>
                                <span class="menu-caret"><b class="caret"></b></span>
                            </a>
                            <div class="menu-submenu">
                                <?php if ($this->conn->plan_setting('withdraw') == 1 && $this->conn->setting('earning_type') == 'withdrawal') { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'fund/fund-withdraw'; ?>" class="menu-link">
                                            <span class="menu-text">Withdrawal</span>
                                        </a>
                                    </div>
                                <?php } ?>
                                <div class="menu-item">
                                    <a href="<?= $panel_path . 'transactions/withdrawals'; ?>" class="menu-link">
                                        <span class="menu-text">Withdrawal Report</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <?php
                    if ($this->conn->plan_setting('task_section') == 1) {
                        ?>
                        <div class="menu-item has-sub">
                            <a href="#" class="menu-link">
                                <span class="menu-icon"><i class="bi bi-grid-3x3"></i></span>
                                <span class="menu-text">Tables</span>
                                <span class="menu-caret"><b class="caret"></b></span>
                            </a>
                            <div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="table_elements.html" class="menu-link">
                                        <span class="menu-text">Table Elements</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_plugins.html" class="menu-link">
                                        <span class="menu-text">Table Plugins</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <?php
                    if ($this->conn->plan_setting('task_section') == 1) {
                        ?>
                        <div class="menu-item has-sub">
                            <a href="#" class="menu-link">
                                <span class="menu-icon"><i class="bi bi-pie-chart"></i></span>
                                <span class="menu-text">Watch Ads</span>
                                <span class="menu-caret"><b class="caret"></b></span>
                            </a>
                            <div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="<?= $panel_path . 'task/all'; ?>" class="menu-link">
                                        <span class="menu-text">Watch Ads</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="<?= $panel_path . 'task/request_history'; ?>" class="menu-link">
                                        <span class="menu-text">Watch Ads Request History</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    } ?>


                    <?php
                    if ($this->conn->plan_setting('pin_section') == 1 && $topup_type == 'pin') {
                        ?>
                        <div class="menu-item has-sub">
                            <a href="#" class="menu-link">
                                <span class="menu-icon"><i class="bi bi-layout-sidebar"></i></span>
                                <span class="menu-text">Layout</span>
                                <span class="menu-caret"><b class="caret"></b></span>
                            </a>
                            <div class="menu-submenu">
                                <?php if ($this->conn->plan_setting('generate_pin') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'pin/pin-generate'; ?>" class="menu-link">
                                            <span class="menu-text">Generate pin</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('transfer_pin') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'pin/pin-transfer'; ?>" class="menu-link">
                                            <span class="menu-text">Pin Transfer</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('pin_request') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'pin/epin-request'; ?>" class="menu-link">
                                            <span class="menu-text">Pin Request</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('pin_history') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'pin/pin-history'; ?>" class="menu-link">
                                            <span class="menu-text">Pin History</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('pin_box') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'pin/pin-box'; ?>" class="menu-link">
                                            <span class="menu-text">Pinbox</span>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>

                    <?php
                    if ($this->conn->plan_setting('invest_section') == 1) {
                        ?>
                        <div class="menu-item has-sub">
                            <a href="#" class="menu-link">
                                <span class="menu-icon"><i class="bi bi-collection"></i></span>
                                <span class="menu-text">Staking</span>
                                <span class="menu-caret"><b class="caret"></b></span>
                            </a>
                            <div class="menu-submenu">
                                <?php if ($this->conn->plan_setting('investment') == 1) { ?>

                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'invest/investment'; ?>" class="menu-link">
                                            <span class="menu-text">Activation</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('investment_history') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'invest/topup-history'; ?>" class="menu-link">
                                            <span class="menu-text">Topup History</span>
                                        </a>
                                    </div>
                                <?php }
                                if ($this->conn->plan_setting('reinvestment') == 1) { ?>
                                    <div class="menu-item">
                                        <a href="<?= $panel_path . 'invest/reinvestment'; ?>" class="menu-link">
                                            <span class="menu-text">Upgrade</span>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>




                    <?php if ($this->conn->plan_setting('income_section') == 1) { ?>
                        <div class="menu-item has-sub">
                            <a href="#" class="menu-link">
                                <span class="menu-icon"><i class="bi bi-collection"></i></span>
                                <span class="menu-text">Income Reports</span>
                                <span class="menu-caret"><b class="caret"></b></span>
                            </a>
                            <div class="menu-submenu">
                                <?php
                                $reg_plan = $this->session->userdata('reg_plan');

                                $all_income = $this->conn->runQuery('*', 'wallet_types', "wallet_type='income' and status='1' and $reg_plan='1' ");
                                if ($all_income) {
                                    foreach ($all_income as $income) {
                                        ?>
                                        <div class="menu-item">
                                            <a href="<?= $panel_path . 'income/details?source=' . $income->slug; ?>"
                                                class="menu-link">
                                                <span class="menu-text">
                                                    <?= $income->name; ?>
                                                </span>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    <?php } ?>




                    <?php
                    if ($this->conn->plan_setting('order_section') == 1) {
                        ?>
                        <div class="menu-item">
                            <a href="<?= $panel_path . 'orders'; ?>" class="menu-link">
                                <span class="menu-icon"><i class="bi bi-people"></i></span>
                                <span class="menu-text">Staking History</span>
                            </a>
                        </div>
                    <?php } ?>


                    <!-- <div class="menu-item">
                        <a href="<?php echo $right_link = base_url('register?ref=' . $profile->username); ?>" class="menu-link">
                            <span class="menu-icon"><i class="bi bi-calendar4"></i></span>
                            <span class="menu-text">Register New User</span>
                        </a>
                    </div> -->

                    <?php
                    if ($this->conn->plan_setting('reward_section') == 1) {
                        ?>
                        <div class="menu-item">
                            <a href="<?= $panel_path . 'team/reward'; ?>" class="menu-link">
                                <span class="menu-icon"><i class="bi bi-gear"></i></span>
                                <span class="menu-text">Reward</span>
                            </a>
                        </div>
                    <?php } ?>

                    <?php
                    if ($this->conn->plan_setting('income_report_section') == 1) {
                        ?>
                        <div class="menu-item">
                            <a href="<?= $panel_path . '/report/income'; ?>" class="menu-link">
                                <span class="menu-icon"><i class="bi bi-gem"></i></span>
                                <span class="menu-text">Report</span>
                            </a>
                        </div>
                    <?php } ?>


                    <?php
                    if ($this->conn->plan_setting('news_alert_section') == 1) {
                        ?>
                        <div class="menu-item">
                            <a href="<?= $panel_path . 'profile/news'; ?>" class="menu-link">
                                <span class="menu-icon"><i class="bi bi-gem"></i></span>
                                <span class="menu-text">News & Event</span>
                            </a>
                        </div>
                    <?php } ?>
                    <?php
                    if ($this->conn->plan_setting('support_section') == 1) {
                        ?>
                        <div class="menu-item">
                            <a href="<?= $panel_path . 'support'; ?>" class="menu-link">
                                <span class="menu-icon"><i class="bi bi-gem"></i></span>
                                <span class="menu-text">Support</span>
                            </a>
                        </div>
                    <?php } ?>
                </div>


                <div class="p-3 px-4 mt-auto">
                    <a href="<?= $panel_path . 'logout'; ?>" class="btn d-block btn-outline-theme">
                        <i class="fa fa-code-branch me-2 ms-n2 opacity-5"></i> Logout
                    </a>
                </div>

            </div>

        </div>


        <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app"
            data-toggle-class="app-sidebar-mobile-toggled"></button>