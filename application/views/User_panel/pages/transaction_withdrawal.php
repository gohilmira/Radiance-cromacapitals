<?php

$userid = $this->session->userdata('user_id');
$total_withdrawal = $this->conn->runQuery("SUM(amount) as amt", 'transaction', "u_code='$userid' and tx_type='withdrawal'");
$total_paid_withdrawal = $this->conn->runQuery("SUM(amount) as amt", 'transaction', "u_code='$userid' and tx_type='withdrawal' and status='1'");
$total_reject_withdrawal = $this->conn->runQuery("SUM(amount) as amt", 'transaction', "u_code='$userid' and tx_type='withdrawal' and status='2'");
?>
<style>
    option{
        background-color: #283948;
    }
</style>
<div id="content" class="app-content">

        <!-- Page header -->
        <div class="page-header">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                    <h4 class="page-title mb-4">
                        Withdrawal Report
                    </h4>
                </div>

                <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
                    <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">

                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content pt-0">

            <!-- Main charts -->


            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="card ">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="withdrawal_ecxel">
                                    <button type="submit" name="export_to_excel" class="user_btn_button btn btn-success mb-1">Export to excel </button>
                                    <input type="hidden" name="userid" value="<?= $userid; ?>">
                                </div>
                            </form>
                            <ul>
                                <li>
                                    <h6>Total Withdrawal</h6>
                                    <p><?= $this->conn->company_info('currency'); ?>&nbsp;<?= ($total_withdrawal[0]->amt != '' ? $total_withdrawal[0]->amt : 0); ?></p>
                                </li>
                                <li>
                                    <h6>Paid Withdrawal</h6>
                                    <p><?= $this->conn->company_info('currency'); ?>&nbsp;<?= ($total_paid_withdrawal[0]->amt != '' ? $total_paid_withdrawal[0]->amt : 0); ?></p>
                                </li>
                                <li>
                                    <h6>Reject Withdrawal</h6>
                                    <p><?= $this->conn->company_info('currency'); ?>&nbsp;<?= ($total_reject_withdrawal[0]->amt != '' ? $total_reject_withdrawal[0]->amt : 0); ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="card card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="col">S No.</th>
                                        <th scope="col">Amount ($)</th>
                                        <th scope="col">Withdrawal Charges ($)</th>
                                        <th scope="col">Payable Amount ($)</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Transaction</th>
                                        <th scope="col">Radiance Coin($)</th>
                                        <th scope="col">Reason</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                    <?php
                                    $user = $this->session->userdata('profile');
                                    $my_orders = $this->conn->runQuery('*', 'orders', "u_code='$userid' ");
                                    if ($table_data) {

                                        foreach ($table_data as $t_data) {
                                            $tx_profile = false;
                                            $tx_profile = $this->profile->profile_info($t_data['tx_u_code']);
                                            $sr_no++;
                                            $status = $t_data['status'];
                                    ?>
                                            <tr>
                                                <td><?= $sr_no; ?></td>
                                                <td><?= $ttl = $t_data['amount'] + $t_data['tx_charge']; ?></td>

                                                <td><?= $t_data['tx_charge']; ?></td>
                                                <td><?= $t_data['amount']; ?></td>
                                                <td><?php
                                                    switch ($t_data['status']) {
                                                        case 1:
                                                            echo 'Approved';
                                                            break;
                                                        case 0:
                                                            echo 'Pending';
                                                            break;
                                                        case 2:
                                                            echo 'Rejected';
                                                            break;
                                                    }
                                                    ?></td>
                                                    <td>
                                                        <?php
                                                        if($status==1){
                                                        ?>
                                                        <a href="<?= $t_data['tx_hash'];?>" target="_blank" style="color:#76feff;">View on Bscscan</a>
                                                        <?php
                                                        }else{
                                                            echo "No Data";
                                                        }
                                                        ?>
                                                    </td>
                                                    
                                                    
                                                <td><?= $my_orders['order_token_amount']; ?></td>
                                                <td><?= $t_data['reason']; ?></td>
                                                <td><?= $t_data['date']; ?></td>

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

            <!-- /main charts -->
        </div>
    </div>
</div>
<!-- /content area -->