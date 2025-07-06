
<style>
    option{
        background-color: #283948;
    }
</style>
<div id="content" class="app-content">

    
            <div class="nk-content nk-content-fluid">
                <div class="container-xl wide-lg">
                    <div class="nk-content-body">
                        <div class="components-preview wide-md mx-auto">

                            <br>

                            <div class="user_main_card mb-3">
                                <div class="user_card_body">
                                    <h5 class="user_card_title filter_title"><i class="fa fa-filter"></i>Filter</h5>
                                    <form action="<?= $panel_path . 'fund/request_history' ?>" method="get">
                                        <div class="user_form_row">
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-6 col-md-4 mb-2">
                                                    <select name="limit" id="" class="form-control user_input_select">
                                                        <option value="20" <?= isset($_REQUEST['limit']) && $_REQUEST['limit'] == 20 ? 'selected' : ''; ?>>20</option>
                                                        <option value="50" <?= isset($_REQUEST['limit']) && $_REQUEST['limit'] == 50 ? 'selected' : ''; ?>>50</option>
                                                        <option value="100" <?= isset($_REQUEST['limit']) && $_REQUEST['limit'] == 100 ? 'selected' : ''; ?>>100</option>
                                                        <option value="200" <?= isset($_REQUEST['limit']) && $_REQUEST['limit'] == 200 ? 'selected' : ''; ?>>200</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-md-4 mb-2">
                                                    <select name="status" class="form-control user_input_select">
                                                        <option value="all">Select Status</option>
                                                        <option value="0">Pending</option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Rejected</option>

                                                    </select>
                                                </div>

                                                <div class="col-lg-3 col-sm-6 col-md-4 mb-2">

                                                    <div class="input-group ">
                                                        <input name="start_date" type="date" id="" value='<?= (isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : ''); ?>"' class="form-control user_input_text">
                                                    </div>

                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-md-4 mb-2">

                                                    <div class="input-group ">
                                                        <input name="end_date" type="date" id="" value='<?= (isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : ''); ?>"' class="form-control user_input_text">
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="user_form_row_data">
                                                <div class="user_submit_button mb-2">
                                                    <input type="submit" name="submit" value="Filter" id="" class="user_btn_button btn btn-success">
                                                 
                                                    <a href="<?= $panel_path . 'fund/request_history' ?>" class="user_btn_button btn btn-danger"> Reset </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 mb-2">
                            <div class="card mb-3">
                            <div class="card-body">
	                        <div class="table-responsive">
	                            <table class="table table-hover table-responsive-sm">
                                                <thead>
                                                    <tr>
                                                        <th>S No.</th>


                                                        <th>Amount (<?= $this->conn->company_info('currency'); ?>)</th>
                                                        <th> Method</th>
                                                        <th> Type</th>
                                                        <th>UTR Number</th>
                                                        <th>Payment Slip</th>
                                                        <th>Status</th>
                                                        <th>Reason</th>
                                                        <th>Date </th>

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



                                                                <td><?= $t_data['amount']; ?></td>
                                                                <td><?= $t_data['cripto_type']; ?></td>
                                                                <td><?= $t_data['payment_type']; ?></td>
                                                                <td><?= $t_data['cripto_address']; ?></td>
                                                                <td><a href="<?= $t_data['payment_slip']; ?>" target="_blank"><img src="<?= $t_data['payment_slip']; ?>" style="height:50px;width:50px;"></td>
                                                                <td>
                                                                    <?php
                                                                    switch ($t_data['status']) {
                                                                        case '1':
                                                                            echo 'Approved';
                                                                            break;
                                                                        case '0':
                                                                            echo 'Pending';
                                                                            break;
                                                                        case '2':
                                                                            echo 'Rejected';
                                                                            break;
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td class="text-left"><small><?= $t_data['reason']; ?></small></td>
                                                                <td class="text-left"><?= $t_data['updated_on']; ?></td>

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


                        </div><!-- .components-preview -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->pagination->create_links(); ?>