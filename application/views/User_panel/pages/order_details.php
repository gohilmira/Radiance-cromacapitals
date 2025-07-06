<?php
$profile = $this->session->userdata("profile");
$user_id = $this->session->userdata("user_id");
$currency = $this->conn->company_info("currency");
?>

<div id="content" class="app-content">
        <!-- Page header -->
        <div class="page-header">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                    <h4 class="page-title mb-0">
                        Staking History
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
                <div class="col-lg-4 mb-4">
                    <div class="card card-body">

                        <?php
                        $userid = $this->session->userdata('user_id');
                        $ttl = $this->conn->runQuery('sum(order_amount)as total,sum(order_bv)as bv', 'orders', "u_code='$user_id'");
                        $ttl_amnt = $ttl[0]->total;
                        $ttl_tx_charge = $ttl[0]->bv;
                        ?>
                        <div class="direct_in ">
                            <div class="income_direct">
                                <h3>Total Stake Amount</h3>
                                <p class="fs-4"><?= $currency; ?>&nbsp;<?= round($ttl_amnt) ?></p>
                            </div>
                        </div>

                    </div>
                </div>
                
                  <div class="col-lg-4 mb-4">
                    <div class="card card-body">

                        <?php
                        $userid = $this->session->userdata('user_id');
                        $order_token_amount = $this->conn->runQuery('sum(order_token_amount)as total', 'orders', "u_code='$user_id'");
                        $rdns_coin = $order_token_amount[0]->total;
                        ?>
                        <div class="direct_in ">
                            <div class="income_direct">
                                <h3>Radiance Coin Amount</h3>
                                <p class="fs-4"><?= $currency; ?>&nbsp;<?= round($rdns_coin) ?></p>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
            
            

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-responsive-sm">
                                <tbody>
                                    <tr>
                                        <th>S No.</th>
                                        <th>Stake amount($)</th>
                                        <th>Radiance Coin amount($)</th>
                                        <th>ROI(%)</th>
                                        <th>Ending Date</th>
                                        <th>Stake Date</th>
                                    </tr>
                                    <?php
                                    $my_orders = $this->conn->runQuery('*', 'orders', "u_code='$user_id' ");

                                    if ($my_orders) {
                                        $sno = 0;
                                        foreach ($my_orders as $my_order) {
                                            $sno++;
                                            $pin_id = $my_order->pin_id;
                                            // $pinmonths = $this->conn->runQuery('roi_month','pin_details',"id='$pin_id'")[0]->roi_month;
                                            $tx_type = $my_order->tx_type;
                                            if($tx_type=='purchase'){
                                                $type= 'Activation';
                                            }else{
                                                $type= 'Upgrade';
                                            }
                                    ?>
                                            <tr>
                                                <td><?= $sno; ?></td>
                                                <td><?= $currency; ?><?= round($my_order->order_amount); ?></td>
                                                <td><?= $currency; ?><?= round($my_order->order_token_amount); ?></td>
                                                <td><?= $my_order->monthly_roi; ?></td>
                                                <td><?= $my_order->expire_date; ?></td>
                                                <td><?= $my_order->added_on; ?></td>
                                                <!--<td><?= $my_order->status == 1 ? "Approved" : "Pending"; ?> </td>-->
                                                <!-- <td><?= $pinmonths; ?> Months</td> -->
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