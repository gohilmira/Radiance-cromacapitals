<?php
$user_id=$this->session->userdata('user_id');
$company_payment_methods=$this->conn->runQuery('*','company_payment_methods',"status='1'");
$user_payment_methods=$this->conn->runQuery('*','user_payment_methods',"status='1' and u_code='$user_id'");
?>
<div class="container pages">
    <br>
        <nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="#">Home</a>
				</li>
				<li class="breadcrumb-item">
					<a href="#">Accounts</a>
				</li>
				<li class="breadcrumb-item active">
					Account-Details
				</li>
			</ol>
		</nav>
		 
	<style>
 

 

.bg-image {
  background-image: url("<?= base_url('images/loader/ajax-loader.gif');?>");  
  filter: blur(0px);
}

/* Position text in the middle of the page/image */
.bg-text {
  /*background-color: rgb(0,0,0);*/ /* Fallback color */
 /* background-color: rgba(0,0,0, 0.4);*/ /* Black w/opacity/see-through */
  color: black;
  font-weight: bold;
  /*border: 3px solid #f1f1f1;*/
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 200;
  width: 80%;
  padding: 20px;
  text-align: center;
}
#blursection {
    z-index: 1;
}

</style>	
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			
			<div class="row">
			  <?php
			       // if($user_payment_methods[0]->u_code){
			            
			       ?>
			
					<?php
				//	}else{
			?>
				<div class="col-md-6 card card-body "  >
				    <?= validation_errors('<span class="text-danger">','</span>'); ?>
				    <div id="account_add_loader" class="bg-text" style="display:none;"><img class="loading-image" src="<?= base_url('images/loader/ajax-loader.gif');?>"></div>
				        
				        
				        <div  id="blursection" > 
				    
    					<form role="form" method="post" action="" />
    						<div class="form-group">
    							<label for="account_type">
    								Select Type
    							</label>
    							<select name="account_type" class="form-control" id="account_type" data-response="add_account_sec" data-blursection="blursection" data-loader="account_add_loader">
    							    <option value="">Select Type</option>
    							    <?php
    							    foreach($company_payment_methods as $method_details){
    							    ?>
    							    <option value="<?= $method_details->unique_name;?>" ><?= $method_details->method_name;?></option>
    							    <?php } ?>
    							</select>
    							 
    						</div>
    						  <div id="add_account_sec">
    						      
    						  </div>
    						 
    						<button type="submit" name="add_btn" class="btn btne">
    							Add Account
    						</button>
    					</form>
				        </div>
				</div>
			<?php
				//	}
				?>
				<div class="col-md-6 ">
    				<div class="card card-body table-responsive" >
    				    <?php
                            $this->load->view($panel_directory.'/pages/payment_section/my_accounts');
                        ?>
    				</div>
				</div>
			</div>
		
		</div>
	</div>
</div>
</div>