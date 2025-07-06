<div id="content" class="app-content">

      <!-- Page header -->
      <div class="page-header">
         <div class="page-header-content d-lg-flex">
            <div class="d-flex">
               <h4 class="page-title mb-4">
                  News
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
            <div class="col-lg-7 col-md-12 col-sm-12">
               <div class="card card-body">
                  <div class="recent_new">
                     <h4>Lastest News</h4>
                     <?php
                     $news_event = $this->conn->runQuery('*', 'notice_board', "status='1' order by id asc");
                     if ($news_event) {
                        foreach ($news_event as $news_event1) {
                     ?>
                           <div class="news_page">
                              <h4><?= $news_event1->title; ?></h4>
                              <span><?= $news_event1->added_on; ?></span>
                              <p><?= $news_event1->description; ?></p>
                           </div>
                     <?php
                        }
                     }
                     ?>
                  </div>
               </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
               <div class="card card-body">
                  <div class="recent_event_deatil">
                     <h4>Recent Events</h4>
                     <div class="recent_activity">
                        <h5>About The Event
                        </h5>
                        <?php
                        $news_event = $this->conn->runQuery('*', 'notice_board', "status='1' order by id desc limit 5");
                        if ($news_event) {
                           foreach ($news_event as $news_event1) {
                        ?>
                              <h6><strong><?= $news_event1->title; ?></strong></h6>
                              <h6> <strong><?= $news_event1->added_on; ?></strong></h6>
                              <p><?= $news_event1->description; ?></p>
                        <?php
                           }
                        }
                        ?>
                     </div>

                  </div>
               </div>
            </div>
         </div>

         <!-- /main charts -->
      </div>
   </div>
</div>
<!-- /content area -->