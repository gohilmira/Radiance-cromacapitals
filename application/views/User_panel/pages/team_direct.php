<style>
    option{
        background-color: #283948;
    }
</style>
<?php error_reporting(0); ?>

<div id="content" class="app-content">

        <!-- Page header -->
        <div class="page-header">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                    <h4 class="page-title mb-4">
                        Sponsor
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
                    <form action="<?= $panel_path . 'team/team-direct' ?>" method="get">
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
                                                <select name="active_status" id="" class="form-control user_input_select">
                                                    <option value="">-- Status --</option>
                                                    <option value="1" <?php if ($select_status == "1") echo "selected"; ?>>Active</option>
                                                    <option value="0" <?php if ($select_status == "0") echo "selected"; ?>>Inactive</option>
                                                </select>
                                            </div>
                                        </div>


                                        <br>
                                        <div class="user_form_row_data">
                                            <div class="user_submit_button ">

                                                <input type="submit" name="submit" value="Filter" id="" class="user_btn_button btn btn-success">
                                                <a href="<?= $panel_path . 'team/team-direct' ?>" class="user_btn_button btn btn-danger "> Reset </a>

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
                                        $currency = $this->conn->company_info('currency');

                                        if ($table_data) {
                                            foreach ($table_data as $t_data) {
                                                $sr_no++;

                                                $gen_team = $this->team->my_generation_with_personal($t_data['id']);

                                        ?>
                                                <tr>
                                                    <td><?= $sr_no; ?></td>
                                                    <td><?= $t_data['name']; ?></td>
                                                    <td><?= $t_data['username']; ?></td>
                                                    <td><?= $t_data['added_on']; ?></td>
                                                    <td><?php
                                                        if ($t_data['active_status'] == 1) {
                                                            echo "Active<br>";
                                                            echo $t_data['active_date'];
                                                        } else {
                                                            echo "Inactive";
                                                        }
                                                        ?></td>
                                                    <td><?= $currency;?><?= $t_data['active_status'] == 1 ? $this->business->package($t_data['id']) : 0; ?></td>
                                                    <?php $plan_ty = $this->conn->setting('reg_type');
                                                    if ($plan_ty == 'binary') {
                                                    ?>
                                                        <td><?= $t_data['active_status'] == 1 ? $this->business->current_session_bv($gen_team) : 0; ?></td>
                                                        <td><?= $t_data['active_status'] == 1 ? $this->business->previous_bv($gen_team) : 0; ?></td>
                                                        <td><?= $t_data['position'] == 1 ? 'Left' : 'Right'; ?></td>
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
                <?php echo $this->pagination->create_links(); ?>

            </div>

            <!-- /main charts -->
        </div>
        <!-- /content area -->

    </div>
</div>