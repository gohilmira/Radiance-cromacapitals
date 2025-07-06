<?php
$profile=$this->session->userdata("profile");
//print_r($upload_error);


?>
<div class="container pages">
<div class="row pt-2 pb-2">
        <div class="col-sm-12">
		    
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>|
            <li class="breadcrumb-item"><a href="#">Fund</a></li>|
            <li class="breadcrumb-item active" aria-current="page">Fund Request</li>
         </ol>
	   </div>
	   
</div>
 
 

<?php 
    $success['param']='success';
    $success['alert_class']='alert-success';
    $success['type']='success';
    $this->show->show_alert($success);
    ?>
        <?php 
    $erroralert['param']='error';
    $erroralert['alert_class']='alert-danger';
    $erroralert['type']='error';
    $this->show->show_alert($erroralert);

    $userid=$this->session->userdata('user_id');
    ?>


<div class="row">
    
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="card card-body  card-bg">
       
       
       
            <form action="" method="post" enctype="multipart/form-data">
                  
                
                
                
                
                <div class="form-group">
                  <label for="">Amount</label>
                  <input type="text" name="amount" value="<?= set_value('amount');?>" class="form-control" placeholder="Enter Amount" aria-describedby="helpId">  
                  <span class=" text-warning" ><?= form_error('amount');?></span>             
                </div>
                 
                 <br>  
                  <input type="submit" class="user_btn_button" name="request_btn" value="Continue">
               
                
            </form>
        </div>
    </div>
    
</div>
</div>
<script>
function copyLink11(iid) {
        
      / Get the text field /
      var copyText = document.getElementById("referral_address");
    
      / Select the text field /
      copyText.select();
      copyText.setSelectionRange(0, 99999); /*For mobile devices*/
    
      / Copy the text inside the text field /
      document.execCommand("copy");
    
      / Alert the copied text /
      alert("Copied the text: " + copyText.value);
    }
    
    
   
</script> 