
<style>


.card.card-body h4 {
    font-size: 16px;
    padding-top: 20px;
   
}

a.submit.ttm-btn.ttm-btn-size-md.ttm-btn-shape-round.ttm-btn-style-fill.ttm-btn-bgcolor-skincolor.mb-2.btn-block {
    padding: 10px;
    color: #000;
    font-size: 18px;
    border-radius: 4px;
    background-image: linear-gradient(135deg, #f5317f 0%, #ff7c6e 100%);
    color:#fff;
}
h3.text-center.text-white {
    font-size: 32px;
}
</style>


<!-- page-title -->
        <div class="ttm-page-title-row  form_bg">
            <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
            <div class="container">
               <div class="row">
				<div class="col-lg-3">
			</div>
                <div class="col-lg-6">
				
         <div class="user-form-content log-in-width">

				<center>
				<div  class="card card-body" style=" background:#2d325a; padding:20px;  margin-top: 100px;">
					  <h3 class="text-center text-white" style="color:#fff">Success</h3>
							 
					  <?php 
						 $success['param']='success';
						 $success['alert_class']='alert-success';
						 $success['type']='success';
						 echo "<h4 style='color:#fff;'> Your Account has been registered. You can login now.<br> Username : ".$_GET['username']." <br> Password :".$_GET['pass']."</h4>";
						  //$this->show->show_alert($success);
						   ?>
						   <br>
						 <a class="submit  mybtn2" href="login" data-toggle="modal" data-target="#signin">Login</a>
                         <br>
                         <a class="submit  mybtn2" href="register" data-toggle="modal" data-target="#signin">Register</a>    
					  </div>
					  </center>
		</div>
                </div>
                <div class="col-lg-3 ">
                    
                    
                </div>
			</div> 
            </div><!-- /.container -->                      
        </div><!-- page-title end-->