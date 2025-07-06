<?php
$profile = $this->session->userdata("profile");
$user_id = $this->session->userdata("user_id");
?>
<style>
   .goal_reward_tabel {

      background: var(--bg) !important;

      box-shadow: rgb(0 0 0 / 20%) 0px 5px 15px;
      border-radius: 8px;
      margin-bottom: 15px;
      padding: 16px;
      overflow: auto;
   }

   .goal_reward_tabel th {
      color: var(--text2);
      border: none;
   }
</style>




<div class="content-inner">

   <!-- Page header -->
   <div class="page-header">
      <div class="page-header-content d-lg-flex">
         <div class="d-flex">
            <h4 class="page-title mb-0">
               Royalty Reward
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

         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ca_rd">
               <div class="table-responsive">
               <table class="table">
                  <tbody>
                     <tr>
                        <th class="text-primary">Rank</th>
                        <th class="text-secondary">Our Left/Left Business ($)</th>
                        <th class="text-success">Our Right/Right Business ($)</th>
                        <th class="text-info">Income ($)/24hrs</th>
                        <th class="text-warning">Max. Income ($)</th>
                        <th class="text-danger">Status</th>
                     </tr>
                  </tbody>
                  <tbody>
                     <?php
                     $all_team = array();
                     $userid = $this->session->userdata('user_id');
                     $ttl_ben = $this->team->ben_pairs($userid);
                     $my_left_business = $this->team->team_by_business($userid, 1);
                     $my_right_business = $this->team->team_by_business($userid, 2);
                     $arr = $this->conn->runQuery("*", 'plan', "1='1'");
                     if ($arr) {
                        for ($i = 0; $i < 12; $i++) {
                           $p = $i + 1;
                           $our_rank = $arr[$i]->package_name;
                           $left_bv_req = $arr[$i]->reward_business;
                           $right_bv_req = $arr[$i]->reward_business;
                           $income24 = $arr[$i]->reward;
                           $max_income = $arr[$i]->max_reward;
                           $package_name = $arr[$i]->package_name;

                           $goalstatus = ($my_left_business >= $left_bv_req &&  $my_right_business >= $right_bv_req && $profile->active_status == 1 ? 'Achieved' : 'Pending');

                           if ($goalstatus == "Achieved") {
                              $check_rank_ = $this->conn->runQuery('u_code', 'rank', "rank_id='$p' and u_code='$user_id' and rank='$our_rank'");
                              if (!$check_rank_) {
                                 $rankinsert['u_code'] = $user_id;
                                 $rankinsert['rank'] = $our_rank;
                                 $rankinsert['is_complete'] = 1;
                                 $rankinsert['rank_id'] = $p;
                                 $this->db->insert('rank', $rankinsert);
                              }
                              $update_rank['my_rank'] = $our_rank;
                              $this->db->where('id', $user_id);
                              $this->db->update('users', $update_rank);
                           }

                     ?>
                           <tr>
                              <td><?= $arr[$i]->rank;; ?></td>
                              <td><?= $my_left_business; ?>/<?= $left_bv_req; ?></td>
                              <td><?= $my_right_business; ?>/<?= $right_bv_req; ?></td>
                              <td><?= $income24; ?></td>
                              <td><?= $max_income; ?></td>
                              <td><?= $goalstatus; ?></td>
                           </tr>
                     <?php }
                     } ?>
                  </tbody>

                  </table>
               </div>
            </div>
         </div>
      </div>



      <!-- /main charts -->
   </div>
   <!-- /content area -->






<div class="main_content_iner ">
   <div class="container-fluid p-0">
      <div class="row justify-content-center">

         <div class="col-lg-12 col-xl-12">
            <div class="white_box mb_30 " style="position: relative;">
              
            </div>
         </div>

      </div>
   </div>
</div>