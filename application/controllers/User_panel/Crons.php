<?php
header('Access-Control-Allow-Origin: *');
class Crons extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

   
    public function matching_closing()
    {
        $arr = array();
        $source = 'binary';
        $crncy = $this->conn->company_info('currency');
        $all_users = $this->conn->runQuery('id', 'users', "active_status=1 ");
        $plan = $this->conn->runQuery('*', 'plan', "id='1'")[0];

        if ($all_users) {
            foreach ($all_users as $user_details) {
                $user_id = $user_details->id;
                
               echo "<br>--userid--".$user_id;
               
                $my_actives =  $this->team->my_actives($user_id);
                $my_actives_left = $this->team->my_actives_position($user_id, 1);
                $ttl_actives_left = $my_actives_left != '' ? COUNT($my_actives_left) : 0;
                $my_actives_right = $this->team->my_actives_position($user_id, 2);
                $ttl_actives_right = $my_actives_right != '' ? COUNT($my_actives_right) : 0;
               
                // if($ttl_actives_left>=1 && $ttl_actives_right>=1){
                    $commonleft = array_intersect($my_actives, $my_actives_left);
                    $commonright = array_intersect($my_actives, $my_actives_right);
                    
                    echo "<pre>". print_r($commonleft,true). "</pre>";
                    echo "<pre>". print_r($commonright,true). "</pre>";
                    
                $my_left = $this->team->team_by_pv($user_id, 1);
                $my_right = $this->team->team_by_pv($user_id, 2);
                
                 echo "<pre>". print_r($my_left,true). "</pre>";
                 echo "<pre>". print_r($my_right,true). "</pre>";
                 
	            
                if(!empty($commonleft)){
                    $direct_left_business = $this->business->business_volume($commonleft);
                }else{
                    $direct_left_business=0;
                }
                
                echo "<br>direct_left_business----".$direct_left_business;
               
                
                if(!empty($commonright)){
                    $direct_right_business = $this->business->business_volume($commonright);
                }else{
                    $direct_right_business=0;
                }
                 echo "<br>direct_right_business----".$direct_right_business;
                
                $my_pre_left_business = $this->team->team_by_business($user_id, 1);
                $my_pre_right_business = $this->team->team_by_business($user_id, 2);

                echo "<br>my_pre_left_business----".$my_pre_left_business;
                echo "<br>my_pre_right_business----".$my_pre_right_business;

                $my_left_business = $my_pre_left_business-$direct_left_business;
                $my_right_business = $my_pre_right_business-$direct_right_business;

                echo "<br>my_left_business----".$my_left_business;
                echo "<br><br>my_right_business----".$my_right_business."<br>"; 
              
              
                if (($my_left >= 1 && $my_right >= 1) || ($my_left >= 1 && $my_right >= 1)) {
                    
                    $ttl_ben = $this->team->ben_pairs($user_id);

                    echo "<br>ttl_ben====".$ttl_ben;

                    $ttl_matchings = min($my_left_business, $my_right_business);
                    
                     echo "<pre>". print_r($ttl_matchings,true). "</pre>";

                    $ttl_max_matchings = max($my_left_business, $my_right_business);
                    
                     echo "<pre>". print_r($ttl_max_matchings,true). "</pre>";
                   
                    $carry_bes = ((int) $ttl_max_matchings - (int) $ttl_matchings);
                   
                   echo "<br>carry_bes===".$carry_bes;
                   
                    if ($my_left_business == $my_right_business) {
                        $pos = "left";
                    } elseif ($my_left_business > $my_right_business) {
                        $pos = "left";
                    } else {
                        $pos = "right";
                    }

                    $ben_business = ((int) $ttl_matchings - (int) $ttl_ben);
                    $my_pkgs = $this->business->package($user_id);
                    $my_orders = $this->business->ordersss($user_id);
                    
                    $my_max_order = max($my_orders);
                   
                     echo "<br>ben_business===".$ben_business;
                     echo "<br>my_pkgs===".$my_pkgs;
                     echo "<br>my_orders===".$my_orders;
                     echo "<br>my_max_order===".$my_max_order;
                    
                    $matchings = $this->conn->runQuery('matching_income', 'users', "id='$user_id' and active_status='1' ")[0]->matching_income;
                        $total_capping = $my_max_order;
                        $per_pair = $matchings;
                        $binary_amt1 = $ben_business * $per_pair / 100;
                        $binary_amt = $binary_amt1;
                        $flash = 0;
                        $ben_pair = $binary_amt / $per_pair;

                    

                    if ($total_capping > $binary_amt) {
                        $payable = $binary_amt;
                        $flash = 0;
                    } else {
                        $payable = $total_capping;
                        $flash = $binary_amt-$total_capping;
                    }

                    echo "<br>payable---" . $payable;
                    
                    if ($payable > 0) {
                        $arr1['source'] = $source;
                        $arr1['u_code'] = $user_id;
                        $arr1['tx_type'] = 'income';
                        $arr1['debit_credit'] = 'credit';
                        $arr1['wallet_type'] = 'income_wallet';

                        $arr1['amount'] = $payable;
                        $arr1['date'] = date('Y-m-d H:i:s');
                        $arr1['status'] = 1;

                        $arr1['remark'] = "Recieve $payable $crncy Matching Bonus ";
                        $qury = $this->conn->get_insert_id('transaction', $arr1);
                        
                        echo "<br>last" . $this->db->last_query();
                        
                        if ($qury) {
                            $mtching = array();
                            $mtching['matching'] = $ben_business;
                            $mtching['ben_matching'] = $ben_business;
                            $mtching['flash'] = $flash;
                            $mtching['u_code'] = $user_id;
                            $mtching['tx_id'] = $qury;
                            $mtching['status'] = 1;
                            $this->db->insert('binary_matching', $mtching);
                        }

                        $this->update_ob->add_amnt($user_id, $source, $payable);
                        $this->update_ob->any_update($user_id, 'matching', $ttl_matchings);
                        $this->update_ob->any_update($user_id, 'carry', $carry_bes);
                        $this->update_ob->add_amnt($user_id, 'main_wallet', $payable);


                        
                    }
                }
            }
            // }

        }
    }


    public function matching_value_update(){

        
        $curr_date = new DateTime();  // Current date and time
        $all_users = $this->conn->runQuery('id,active_date', 'users', "active_status=1 and matching_income=5");
        print_r($all_users);
        foreach($all_users as $userdetails){
            $userid = $userdetails->id;
            $active_date_string = $userdetails->active_date;
            echo "<br>---userid----".$userid;
            $fromstar = new DateTime($active_date_string);  // Assuming $active_date_string is a valid date string

            $dDiff = $fromstar->diff($curr_date);

            $ttl_dt_diff = $dDiff->format('%r%a');
            $days_difference = $ttl_dt_diff;
            echo "<br><br>days_difference====" .$days_difference;
            if($days_difference<=30){

                $my_actives =  $this->team->my_actives($userid);
                $my_actives_left = $this->team->my_actives_position($userid, 1);
                $my_actives_right = $this->team->my_actives_position($userid, 2);

                $commonleft = array_intersect($my_actives, $my_actives_left);
                $commonright = array_intersect($my_actives, $my_actives_right);

               echo "<pre>". print_r($my_actives,true). "</pre>";
               echo "<pre>". print_r($my_actives_left,true). "</pre>";
               echo "<pre>". print_r($my_actives_right,true). "</pre>";
               echo "<pre>". print_r($commonleft,true). "</pre>";
               echo "<pre>". print_r($commonright,true). "</pre>";
              
                
               
                
                    if(!empty($commonleft)){
                        $direct_left_business = $this->business->business_volume($commonleft);
                    }else{
                        $direct_left_business=0;
                    }
                    
                    echo "<br><br>direct_left_business====" .$direct_left_business;
                    
                    if(!empty($commonright)){
                        $direct_right_business = $this->business->business_volume($commonright);
                    }else{
                        $direct_right_business=0;
                    }
                    echo "<br><br>direct_right_business====" .$direct_right_business;
                    
                if($direct_right_business>=500 && $direct_left_business>=500){
                    $this->db->set('matching_income', 10)
                            ->where('id', $userid)
                            ->where('active_status', 1)
                            ->update('users');
                }

            }


        }
        // die;
    }

    public function royalty_closing()
    {
        $source = 'royalty';
        $datetime = date('Y-m-d H:i:s'); 
        $plan = $this->conn->runQuery('*', 'plan', "1=1");
        $user_details = $this->conn->runQuery('id', 'users', "active_status=1");
        $ids = array_column($user_details, 'id');
        array_multisort($ids, SORT_DESC, $user_details);
        if($user_details){
            foreach($user_details as $users){
                $userid = $users->id;

                $userdetail = $this->conn->runQuery('my_royalty,pre_match', 'users', "active_status=1 and id='$userid'")[0];
                $my_royalty = $userdetail->my_royalty;
                $pre_match = $userdetail->pre_match;

                $my_left_business = $this->team->team_by_business($userid, 1);
                $my_right_business = $this->team->team_by_business($userid, 2);

                    if($my_left_business>=$my_right_business){
                        $matching = $my_right_business;
                    }else{
                        $matching = $my_left_business;
                    }

                $current_match = $matching-$pre_match;
                $my_left = $this->team->team_by_pv($userid, 1);
                $my_right = $this->team->team_by_pv($userid, 2);
                    if($my_left>0 && $my_right>0){
                        for($i=0;$i<=9;$i++){
                            $rank = $plan[$i]->rank;
                            $req_match = $plan[$i]->matching;
                            $rank_status_left = $this->team->get_team_rank($userid,$rank,1);
                            $rank_status_right = $this->team->get_team_rank($userid,$rank,2);
                                if($rank_status_left=='false' && $rank_status_right=='false' && $req_match<=$current_match){
                                    $payable = $current_match*5/100;
                                    if ($payble > 0) {
                                        $income = array();
                                        $income['u_code'] = $userid;
                                        $income['tx_type'] = 'income';
                                        $income['source'] = $source;
                                        $income['debit_credit'] = 'credit';
                                        $income['amount'] = $payble;
                                        $income['date'] = $datetime;
                                        $income['added_on'] = $datetime;
                                        $income['status'] = 1;
                                        $income['tx_record'] = $rank;
                                        $income['txs_res'] = 1;
                                        $income['wallet_type'] = 'main_wallet';
                                        $income['remark'] = "Leadership Bonus from ($payble)";
                        
                                        if ($this->db->insert('transaction', $income)) {
                                            $income_lvl = $income['amount']; //-$income['tx_charge'];
                                            $this->update_ob->add_amnt($userid, $source, $income_lvl);
                                            $this->update_ob->add_amnt($userid, 'main_wallet', $income_lvl);
                                            
                                            $this->db->set('my_royalty',$rank)
                                                    ->set('pre_match',$matching)
                                                    ->where('id',$userid)
                                                    ->where('active_status',1)
                                                    ->update('users');
                                        }
                                    }
                                }
                        }
                    }
                
                


                $payble = $this->conn->runQuery('rewards', 'plan', "rank='$rank_id'")[0]->rewards;

                if ($payble > 0) {
					$income = array();
					$income['u_code'] = $user_id;
					$income['tx_type'] = 'income';
					$income['source'] = $source;
					$income['debit_credit'] = 'credit';
					$income['amount'] = $payble;
					$income['date'] = $datetime;
					$income['added_on'] = $datetime;
					$income['status'] = 1;
					$income['tx_record'] = $rank_id;
					$income['txs_res'] = 1;
					$income['wallet_type'] = 'main_wallet';
					$income['remark'] = "Reward Bonus from ($payble)";
	
					if ($this->db->insert('transaction', $income)) {
						$income_lvl = $income['amount']; //-$income['tx_charge'];
						$this->update_ob->add_amnt($user_id, $source, $income_lvl);
						$this->update_ob->add_amnt($user_id, 'main_wallet', $income_lvl);
	
					}
				}
            }
        }
      
    }

    public function roi_closing()
    {
        $datetime = date('Y-m-d H:i:s');
        $all_cr_array = $this->conn->runQuery('*', 'orders', "status=1 and validity_day>=0");
        // $pin_details = $this->conn->runQuery('roi', 'pin_details', "1=1");

        foreach ($all_cr_array as $user_details) {
            $source = "roi";
            $userid = $user_details->u_code;
            $tx = $user_details->id;
            $order_amount = $user_details->order_amount;
            $monthly_roi = $user_details->monthly_roi;
            $days = $user_details->validity_day;
            $next_days = $days - 1;
            $roi = $monthly_roi * 12 / 365;
            $perday = $order_amount * $roi / 100;
            $payable_amt1 = $perday;

            // echo "<br>userid-->".$userid;
            // echo "<br>order_amount-->".$order_amount;
            // echo "<br>monthly_roi-->".$monthly_roi;
            // echo "<br>roi-->".$roi;
            // echo "<br>perday-->".$perday;
            // echo "<br>payable_amt1-->".$payable_amt1;


            if ($payable_amt1 > 0 && $days > 0) {
                // echo "<br><br>hiii";
                $income = array();
                $income['u_code'] = $userid;
                $income['tx_type'] = 'income';
                $income['source'] = $source;
                $income['debit_credit'] = 'credit';
                $income['amount'] = $payable_amt1;
                $income['date'] = $datetime;
                $income['added_on'] = $datetime;
                $income['status'] = 1;
                $income['tx_record'] = $tx;
                $income['txs_res'] = 1;
                $income['wallet_type'] = 'main_wallet';
                $income['remark'] = "ROI income from ($order_amount)";

                if ($this->db->insert('transaction', $income)) {
                    $income_lvl = $income['amount']; //-$income['tx_charge'];
                    $this->update_ob->add_amnt($userid, $source, $income_lvl);
                    $this->update_ob->add_amnt($userid, 'main_wallet', $income_lvl);


                    $this->db->set('validity_day', $next_days)
                        ->where('id', $tx)
                        ->where('u_code', $userid)
                        ->update('orders');

                }
            }

            // die;
        }

    }

}