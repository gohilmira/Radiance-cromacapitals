<style>
    option{
        background-color: #283948;
    }
</style>
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Fund Transfer History
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

        <div class="ca_rd">
            <div class="row">
                <h5 class="user_card_title filter_title fs-4"><i class="fa fa-filter"></i>Filter</h5>

                <?php
                error_reporting(0);
                if ($this->session->has_userdata($search_parameter)) {
                    $get_data = $this->session->userdata($search_parameter);
                    $likecondition = (array_key_exists($search_string, $get_data) ? $get_data[$search_string] : array());
                } else {
                    $likecondition = array();
                }
                ?>
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


                                        <br>
                                        <div class="user_form_row_data">
                                            <div class="user_submit_button ">

                                                <input type="submit" name="submit" value="Filter" id="" class="user_btn_button btn btn-primary">

                                                <a href="<?= $panel_path . 'fund/transfer-history' ?>" class="user_btn_button btn btn-danger"> Reset </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
            <div class="row">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Tx user</th>
                                        <th>Tx Type</th>
                                        <th>Credit/Debit</th>
                                        <th>Balance</th>
                                        <th>Remark</th>
                                        <th>Date&Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    if ($table_data) {
                                        foreach ($table_data as $t_data) {

                                            if ($t_data['tx_type'] == 'credit') {
                                                $no_of_pins = $t_data['credit'];
                                            } else {
                                                $no_of_pins = $t_data['debit'];
                                            }

                                            if ($t_data['tx_u_code'] != '') {
                                                $tx_profile = $this->profile->profile_info($t_data['tx_u_code']);
                                            } else {
                                                $tx_profile = $this->profile->profile_info($t_data['u_code']);
                                            }
                                            $sr_no++;
                                    ?>
                                            <tr>
                                                <td><?= $sr_no; ?></td>
                                                <td><?= ($tx_profile ? $tx_profile->name : ''); ?></td>
                                                <td><?= $t_data['tx_type']; ?></td>
                                                <td><?= $t_data['debit_credit']; ?></td>
                                                <td><?= $t_data['amount']; ?></td>
                                                <td><?= $t_data['remark']; ?></td>
                                                <td><?= $t_data['added_on']; ?></td>
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

            echo $this->pagination->create_links(); ?>
        </div>

        <!-- /main charts -->
    </div>
    <!-- /content area -->




</div>



