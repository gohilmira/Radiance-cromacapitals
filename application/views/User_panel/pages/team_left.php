
<?php

$likecondition = ($this->session->userdata($search_string) ? $this->session->userdata($search_string) : array());

?>


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
                        Left
                    </h4>

                </div>

                <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
                    <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">

                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->



        <div class="content pt-0">


            <div class="ca_rd">
                <div class="row">
                    <h5 class="user_card_title filter_title fs-4"><i class="fa fa-filter"></i>Filter</h5>
                    <form action="<?= $panel_path . 'team/team-left' ?>" method="post">
                            <div class="user_form_row">
                                <div class="row">
                                    <div class="col-12 mb-2">
                                        <div class="data_detail_page_group">
                                            <div class="row">

                                            <div class="detail_input_group col-md-3">
                                                <div class="input-group " style="padding-bottom: 6px;">
                                                    <input type="text" Placeholder="Enter Name" name="<?= $search_string; ?>[name]" class="form-control user_input_text" value='<?= (array_key_exists("name", $likecondition) ? $likecondition['name'] : ''); ?>'>
                                                </div>
                                            </div>

                                            <div class="detail_input_group col-md-3">
                                                <div class="input-group " style="padding-bottom: 6px;">
                                                    <input type="text" Placeholder="Enter Username" name="<?= $search_string; ?>[username]" class="form-control user_input_text" value='<?= (array_key_exists("username", $likecondition) ? $likecondition['username'] : ''); ?>'>
                                                </div>

                                            </div>


                                            <br>
                                            <div class="user_form_row_data">
                                                <div class="user_submit_button ">

                                                    <input type="submit" name="submit" value="Filter" id="" class="user_btn_button btn btn-primary">

                                                    <a href="<?= $panel_path . 'team/team-left' ?>" class="user_btn_button btn btn-danger"> Reset </a>

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
                                            <th>S No.</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Join Date</th>
                                            <th>Active Status</th>
                                        </tr>
                                    <tbody>
                                        <?php
                                        if ($table_data) {
                                            foreach ($table_data as $t_data) {
                                                $sr_no++;
                                        ?>
                                                <tr>
                                                    <td><?= $sr_no; ?></td>
                                                    <td><?= $t_data['name']; ?></td>
                                                    <td><?= $t_data['username']; ?></td>
                                                    <td><?= $t_data['email']; ?></td>
                                                    <td><?= $t_data['added_on']; ?></td>
                                                    <td><?php
                                                        if ($t_data['active_status'] == 1) {
                                                            echo "Active<br>";
                                                            echo $t_data['active_date'];
                                                        } else {
                                                            echo "Inactive";
                                                        }
                                                        ?></td>
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

        </div>


    </div>
