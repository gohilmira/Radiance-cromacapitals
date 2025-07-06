        <?php
        $u_code = $this->session->userdata('user_id');

        $ttl_income = $this->conn->runQuery('(SUM(amount) - SUM(tx_charge)) as amnt,SUM(amount) as ttl', 'transaction', "u_code='$u_code' and tx_type='income' and source='$source'");
        $total =  $ttl_income[0]->ttl != '' ? $ttl_income[0]->ttl : 0;
        $payable =  $ttl_income[0]->amnt != '' ? $ttl_income[0]->amnt : 0;


        ?>

<style>
    option{
        background-color: #283948;
    }
</style>
<div id="content" class="app-content">

                <div class="page-header">
                    <div class="page-header-content d-lg-flex">
                        <div class="d-flex">
                            <h4 class="page-title mb-4">
                                Matching Income
                            </h4>


                        </div>

                        <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
                            <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">

                            </div>
                        </div>
                    </div>
                </div>


                <div class="content pt-0">

                    <div class="ca_rd">
                        <div class="row">
                            <h5 class="user_card_title filter_title fs-4"><i class="fa fa-filter"></i>Filter</h5>
                            <form action="" method="get">
                                <div class="user_form_row">
                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            <div class="data_detail_page_group">
                                                <div class="row">
                                                    <div class="detail_input_group col-md-3">
                                                        <div class="input-group " style="padding-bottom: 6px;">
                                                            <input name="name" type="text" id="" value='<?= isset($_REQUEST['name']) && $_REQUEST['name'] != '' ? $_REQUEST['name'] : ''; ?>' class="form-control user_input_text" placeholder="Search by Name">
                                                        </div>
                                                    </div>

                                                    <div class="detail_input_group col-md-3">
                                                        <div class="input-group " style="padding-bottom: 6px;">
                                                            <input name="username" type="text" id="" value='<?= isset($_REQUEST['username']) && $_REQUEST['username'] != '' ? $_REQUEST['username'] : ''; ?>' class="form-control user_input_text" placeholder="Search by User ID">
                                                        </div>

                                                    </div>
                                                    <div class="detail_input_group col-md-3">
                                                        <div class="input-group " style="padding-bottom: 6px;">
                                                            <input name="start_date" type="date" id="" class="form-control user_input_text" value="<?= (isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : ''); ?>" placeholder="From Registration Date">

                                                        </div>
                                                    </div>
                                                    <div class="detail_input_group col-md-3">
                                                        <div class="input-group " style="padding-bottom: 6px;">
                                                            <input name="end_date" type="date" id="end_date" class="form-control user_input_text" value="<?= (isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : ''); ?>" placeholder="To Registration Date">

                                                        </div>

                                                    </div>
                                                    <div class="detail_input_group col-md-3">
                                                        <select name="limit" id="" class="form-control user_input_select">
                                                            <option selected="selected" value="0">--ALL--</option>
                                                            <option value="20" <?= isset($_REQUEST['limit']) && $_REQUEST['limit'] == 20 ? 'selected' : ''; ?>>20</option>
                                                            <option value="50" <?= isset($_REQUEST['limit']) && $_REQUEST['limit'] == 50 ? 'selected' : ''; ?>>50</option>
                                                            <option value="100" <?= isset($_REQUEST['limit']) && $_REQUEST['limit'] == 100 ? 'selected' : ''; ?>>100</option>
                                                            <option value="200" <?= isset($_REQUEST['limit']) && $_REQUEST['limit'] == 200 ? 'selected' : ''; ?>>200</option>
                                                        </select>
                                                    </div>

                                                    <div class="user_form_row_data"><br>
                                                        <div class="user_submit_button ">

                                                            <input type="submit" name="submit" value="Filter" id="" class="user_btn_button btn btn-success">
                                                            <a href="<?= $panel_path . 'income/details' ?>" class="user_btn_button btn btn-danger"> Reset </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </form>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <div class="card card-body text-center">
                                    <h3>Total Income</h3>
                                    <p><?= $total ? $total : 0; ?></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card card-body text-center">
                                    <h3>Payable Income</h3>
                                    <p><?= $payable ? $payable : 0; ?></p>
                                </div>
                            </div>
                            <?php
                            $is_payout = $this->conn->setting('earning_type');
                            if ($is_payout == 'payout') {
                                $generated_amts = $this->wallet->generated_payout_by_income($u_code, $source);
                                $pending_amts = $this->wallet->pending_payout_by_income($u_code, $source);
                            ?>
                                | Generated Payout : <?= $generated_amts != '' ? $generated_amts : 0; ?>
                                | Expected Payout : <?= $pending_amts != '' ? $pending_amts : 0; ?>
                            <?php
                            }

                            ?>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-left border-right">S No.</th>
                                                    <th class="text-left">User</th>
                                                    <th class="text-left">From</th>
                                                    <th class="text-right">Amount (<?= $this->conn->company_info('currency'); ?>)</th>
                                                    <!-- <th  class="text-right" >Extra Charges (<?= $this->conn->company_info('currency'); ?>)</th>-->
                                                    <th class="text-left">Remark</th>
                                                    <th class="text-left">Date </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $user = $this->session->userdata('profile');
                                                if ($table_data) {

                                                    foreach ($table_data as $t_data) {
                                                        $tx_profile = false;
                                                        $tx_profile = $this->profile->profile_info($t_data['tx_u_code']);
                                                        $sr_no++;
                                                ?>
                                                        <tr>
                                                            <td class="text-left border-right"><?= $sr_no; ?></td>
                                                            <td class="text-left"><?= $user->name; ?> (<?= $user->username; ?>) </td>
                                                            <td class="text-left"><?= $tx_profile ? $tx_profile->name : ''; ?> ( <?= $tx_profile ? $tx_profile->username : ''; ?> )</td>
                                                            <td class="text-right"><?= round($t_data['amount'], 2); ?></td>
                                                            <!-- <td class="text-right"><?= round($t_data['tx_charge'], 2); ?></td>-->
                                                            <td class="text-left"><small><?= $t_data['remark']; ?></small></td>
                                                            <td class="text-left"><?= $t_data['date']; ?></td>

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

                </div>
            </div>
        </div>
        <?php echo $this->pagination->create_links(); ?>