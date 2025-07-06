	<div class="container pages">
<div class="row pt-2 pb-2">
        <div class="col-sm-12">
		  <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $panel_path.'dashboard';?>">home</a></li>            
            <li class="breadcrumb-item"><a href="#">News & Event</a></li>            
            <li class="breadcrumb-item active" aria-current="page">News & Event</li>
         </ol>
	   </div>
	  
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-header text-uppercase">News & Events</div>
          <?php
          $news_event=$this->conn->runQuery('*','notice_board',"status='1' order by id desc");
           if($news_event){
            foreach($news_event as $news_event1){
             ?>
          <div class="card-body text-muted">
            <ul class="list-unstyled">
              <li class="media">
                
                <?php 
                if(!empty($news_event1->img_path)){
                    ?>
                    <img class="mr-3 rounded" src="<?= $news_event1->img_path;?>" width="100px" height="100px" alt="user avatar"/>
                    
                <?php
                    }else{
                    ?>
                   <input type="submit" class="btn btn-danger btn-sm" style="width:; background-color: #dfc240; border: none"; value="<?= $news_event1->added_on;?>">
                <?php  }
                
                ?>&nbsp;&nbsp;&nbsp;<div class="media-body">
                
                 <h5 class="mt-0 mb-1 ">
                  
                 <?= $news_event1->title;?></h5>
                <h6 class="mt-0 mb-1 "> <?= $news_event1->description;?></h6>
                </div>
                
              </li>
              
             
            </ul>
          </div>
          
          <?php
                }
           }
          
          ?>
        </div>
    </div>
  </div><!--End Row-->
   </div>