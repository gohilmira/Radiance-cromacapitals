<?php
error_reporting(0);
$profile = $this->session->userdata("profile");
$user_id = $this->session->userdata("user_id");
$my_left_business = $this->team->team_by_business($user_id, 1);
$my_right_business = $this->team->team_by_business($user_id, 2);
$currency = $this->conn->company_info('currency');
?>
<div id="content" class="app-content">
    <div class="row">
        <div id="stripedRows" class="mb-5">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                        <tbody>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Rank</th>
                                                <th>Left Business (<?= $currency; ?>)</th>
                                                <th>Right Business (<?= $currency; ?>)</th>
                                                <th>Validity</th>
                                                <th>Rewards</th>
                                                <!-- <th>Max. Income ($)</th> -->
                                                <th>Status</th>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <?php
                                            $datetime = date('Y-m-d H:i:s');
                                            $currentdate = new DateTime();
                                            // $all_team = array();
                                            $userid = $this->session->userdata('user_id');
                                            $active_date_string = $this->conn->runQuery('active_date', 'users', "active_status=1 and id='$userid'")[0]->active_date;

                                            // Convert $active_date_string to a DateTime object

                                            $curr_date = new DateTime();  // Current date and time
                                            $fromstar = new DateTime($active_date_string);  // Assuming $active_date_string is a valid date string

                                            $dDiff = $fromstar->diff($curr_date);

                                            $ttl_dt_diff = $dDiff->format('%r%a');
                                            // echo "$ttl_dt_diff";die;
                                            // $ttl_ben = $this->team->ben_pairs($userid);
                                            $arr = $this->conn->runQuery("*", 'plan', "1='1'");
                                            if ($arr) {
                                                for ($i = 0; $i < 10; $i++) {
                                                    $p = $i + 1;
                                                    $color='red';
                                                    $reward = $arr[$i]->rewards;
                                                    $our_rank = $arr[$i]->rank;
                                                    $left_bv_req = $arr[$i]->matching;
                                                    $right_bv_req = $arr[$i]->matching;
                                                    $days_limit = $arr[$i]->days_limit;


                                                    $goalstatus = ($my_left_business >= $left_bv_req &&  $my_right_business >= $right_bv_req && $ttl_dt_diff<=$days_limit && $profile->active_status == 1 ? 'Achieved' : 'Pending');

                                                    if ($goalstatus == "Achieved") {
                                                        $check_rank_ = $this->conn->runQuery('u_code', 'reward', "reward_id='$p' and u_code='$user_id' and reward='$our_rank'");
                                                        if (!$check_rank_) {
                                                            $rewardinsert['u_code'] = $user_id;
                                                            $rewardinsert['reward'] = $our_rank;
                                                            $rewardinsert['is_complete'] = 1;
                                                            $rewardinsert['reward_id'] = $p;

                                                            $update_rank['my_rank']=$our_rank;
                                                            $this->db->where('id',$user_id);
                                                            $this->db->update('users',$update_rank);
                                                            if ($this->db->insert('reward', $rewardinsert)) {
                                                                $income = array();
                                                                $income['u_code'] = $userid;
                                                                $income['tx_type'] = 'income';
                                                                $income['source'] = 'reward';
                                                                $income['debit_credit'] = 'credit';
                                                                $income['amount'] = $reward;

                                                                ///	$income['token']=$payable_amt1;					
                                                                $income['date'] = $datetime;
                                                                $income['added_on'] = date('Y-m-d H:i:s');
                                                                $income['status'] = 1;
                                                                $income['tx_record'] = $our_rank;
                                                                $income['txs_res'] = 1;
                                                                $income['wallet_type'] = 'roi_wallet';
                                                                $income['remark'] = "Recieve Matching Slab Bonus of amount $reward for Level $p";

                                                                if ($this->db->insert('transaction', $income)) {

                                                                    $this->update_ob->add_amnt($user_id, 'reward', $reward);
                                                                    $this->update_ob->add_amnt($user_id, 'main_wallet', $reward);
                                                                }
                                                            }
                                                        }
                                                        $color='green';
                                                        
                                                    }

                                            ?>
                                                    <tr>
                                                        <td><?= $p; ?></td>
                                                        <td><?= $our_rank; ?></td>
                                                        <td><?= $currency; ?> <?= $left_bv_req; ?></td>
                                                        <td><?= $currency; ?> <?= $right_bv_req; ?></td>
                                                        <td><?= $days_limit; ?> Days</td>
                                                        <td><?= $currency; ?> <?= $reward; ?></td>
                                                        <!-- <td><?= $max_income; ?></td> -->
                                                        <?php
                                                            if($goalstatus=="Pending" && $days_limit<$ttl_dt_diff){
                                                        ?>
                                                            <td style="color:<?= $color;?>;">Expired</td>
                                                        <?php
                                                            }else{
                                                        ?>
                                                            <td style="color:<?= $color;?>;"><?= $goalstatus; ?></td>
                                                        <?php
                                                            }
                                                        ?>
                                                        
                                                    </tr>
                                            <?php }
                                            } ?>
                                        </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>