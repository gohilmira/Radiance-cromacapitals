
<style>

.user-form-content.log-in-width {
    margin-top: 156px;
}

.card.card-body h4 {
    font-size: 16px;
    padding-top: 20px;
}

a.submit.ttm-btn.ttm-btn-size-md.ttm-btn-shape-round.ttm-btn-style-fill.ttm-btn-bgcolor-skincolor.mb-2.btn-block {
    padding: 10px;
    color: #000;
    font-size: 18px;
    border-radius: 4px;
    background: linear-gradient(90deg, #de9f17 0%, #d19c15 33%, #fff58a 67%, #ffd147 100%);
}
h3.text-center.text-white {
    font-size: 32px;
}
</style>


<!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
            <div class="container">
               <div class="row">
				<div class="col-lg-3">
			</div>
                <div class="col-lg-6" style="padding:50px">
				
         <div class="user-form-content log-in-width">

				<center>
				<div  class="card card-body" style="background:#030636;padding:20px;">
					  <h3 class="text-center text-white" style="color:#fff">Success</h3>
							 
					  <?php 
						 $success['param']='success';
						 $success['alert_class']='alert-success';
						 $success['type']='success';
						 echo "<h4 style='color:#fff;'> Your Account has been registered. You can login now.<br> Username : ".$_GET['username']." <br> Password :".$_GET['pass']."</h4>";
						  //$this->show->show_alert($success);
						   ?>
						   <br>
						 <a class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-round  ttm-btn-style-fill ttm-btn-bgcolor-skincolor mb-2 btn-block" href="login">Login</a><a class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-round  ttm-btn-style-fill ttm-btn-bgcolor-skincolor mb-2 btn-block" href="register">Register</a>    
					  </div>
					  </center>
		</div>
                </div>
                <div class="col-lg-3 ">
                    
                    
                </div>
			</div> 
            </div><!-- /.container -->                      
        </div><!-- page-title end-->