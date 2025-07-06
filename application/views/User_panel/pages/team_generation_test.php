<?php
error_reporting(0);
$user_id=$this->session->userdata("user_id"); 
$team_details=$this->team->my_level_team($user_id);
$all_activess=$this->team->actives();
$currency = $this->conn->company_info('currency');
// print_r($top_legs);die;
?>
<div id="content" class="app-content">

        <!-- start page title -->

        <!-- end page title -->

        <div class="row">

            <div class="col-xl-12">
               



                <div class="card">
                    <div class="card-body" >
                        <h4 class="card-title mb-4"></h4>
                        <div class="table-responsive">
                            <table class="table table-nowrap table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Level</th>
                                        <th scope="col">Total </th>
                                        <th scope="col">Active </th>
                                        <th scope="col">Non Active</th>
                                        <th scope="col">Team Business</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php
                                for ($i = 1; $i <= 30; $i++) {
                                    $lvl = $team_details[$i];
                                    if (!empty($lvl)) {
                                        $lvl_active = array_intersect($all_activess, is_array($lvl) ? $lvl : []);
                                        ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $Total_lvel = count($team_details[$i]); ?></td>
                                            <td><?= $activelvel = count($lvl_active); ?></td>
                                            <td><?= $Total_lvel - $activelvel; ?></td>
                                            <td><?= $currency;?><?= $this->business->business_volume($lvl_active); ?></td>
                                            <td><a style="color: #77ff77;" href="<?= $panel_path . 'team/level_view?lvl=' . $i; ?>"
                                                   class="user_btn_button">View</a></td>
                                        </tr>
                                        <?php
                                    } else {
                                        break;
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
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>