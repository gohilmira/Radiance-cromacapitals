
<?php
$user_id=$this->session->userdata('user_id');
$company_payment_methods=$this->conn->runQuery('*','company_payment_methods',"status='1'");
$user_payment_methods=$this->conn->runQuery('*','user_payment_methods',"status='1' and u_code='$user_id'");
?>

<style>
    table.user_table_info_record.pin_record th, td {
        border: 1px solid #dddde5;
}
@media only screen and (max-width: 700px) {
 .user_main_card.mb-3.detail_data_pins form {
     width: 100%; 
 }
}

</style>

<style>

.card.card-body.card-bg-1.user_card_body span {
    color: #fff;
    font-weight: 500;
}

.card.card-body.card-bg-1.user_card_body label {
    color: #fff;
    font-size: 14px;
}

input.user_btn_button.btn-remove {
    background: #d7a31f;
    color: #fff;
    border: none;
    padding: 6px 10px;
    border-radius: 6px;
}

.card.card-body.card-bg-1.user_card_body {
  
    background: linear-gradient(180deg,#04083F 0%,rgba(0,0,28,0.7) 100%);
    border: 3px solid #D7A31F;
}

</style>
    <!-- Banner Section Starts Here -->
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">Add Account</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <li><a href="<?= base_url();?>index">Home</a>//</li>
                   
                </ul>
            </div>
        </div>
        <div class="shapes">
            <img src="<?= $panel_url;?>assets/images/banner/inner-bg.png" alt="banner" class="shape shape1">
            <img src="<?= $panel_url;?>assets/images/banner/inner-thumb.png" alt="banner" class="shape shape2 d-none d-lg-block">
        </div>
    </div>
    <!-- Banner Section Ends Here -->


  
 <!-- Transection Section Starts Here -->
 <section class="transection-section section-bg padding-top padding-bottom">
        <div class="container">
            <!-- <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="section__header max-p text-center">
                        <h2 class="section__header-title">Latest Deposit & Withdraw </h2>
                      
                    </div>
                </div>
            </div> -->
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <!-- <ul class="transection__tab__menu nav-tabs nav border-0 justify-content-center">
                        <li><a data-bs-toggle="tab" href="#deposit" class="cmn--btn2 active">Last Deposit</a></li>
                        <li><a data-bs-toggle="tab" href="#widthdraw" class="cmn--btn2">Last Widthdraw</a></li>
                    </ul> -->
                    <div class="tab-content">
                        <div class="tab-pane show fade active" id="deposit">
                          



<div class="user_content">
    <div class="container">
        <div class="row pt-2 pb-2">
        <div class="col-sm-12">
		   
		    <ol class="breadcrumb ml-3 mr-3">
            <li class="breadcrumb-item"><a href="<?= $panel_path.'dashboard';?>">Home /</a></li>            
                    
            <li class="breadcrumb-item active" aria-current="page">Add-Account</li>
         </ol>
	   </div>
	 
</div>
        <div class="user_main_card mb-3 detail_data_pins">
       	<form role="form" method="post" action="" />
            <div class="user_card_body user_content_page pins_detail">
               
                 <div class="user_form_row user_form_content">
                     <div class="row">
                     
                     <div class="col-lg-12 mb-2">
                        <label class="label_user_title">Select Payment Type</label>
                        <select class="form-control d-inline form-control" name="account_type" id="account_type" data-response="add_account_sec" data-blursection="blursection" data-loader="account_add_loader">
                             <option value="">---Select Type---</option>
    							    <?php
    							    foreach($company_payment_methods as $method_details){
    							    ?>
    							    <option value="<?= $method_details->unique_name;?>" ><?= $method_details->method_name;?></option>
    							    <?php } ?>
                        </select>
                    </div>
                     <div id="add_account_sec">
    						      
    						  </div>
                 </div>
                 
           </div>
          
            <div class="user_form_row_data user_form_content ">
                <div class="user_submit_button mb-2 mt-2">
                    <input type="submit" name="add_btn" value="Add Account" id="" class="user_btn_button btn-remove">
                </div>
                
            </div>
       </div>
       </form>
        
       <div class="counting_of_pins">
        <div class="user_card_body">
            <div class="user_table_data">
              <!--  <table class="user_table_info_record pin_record">
                     <tbody>
                        <tr>
                            <th>S No. </th>
                            <th>Default</th>
                            <th>Account</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1 </td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td>2</td>
                        </tr>
                     </tbody>
                </table>-->
                 <?php
                          //  $this->load->view($panel_directory.'/pages/payment_section/my_accounts');
                        ?>
                <!--<button class="detail_pin_button">Add Account</button>-->
            </div> 
        </div> 

       </div>
        

    </div>



</div>
</div>


                          
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    
    <!-- Transection Section Ends Here -->


    <script>
   ( function($) {
  $(".btn-remove").click(function() {  
    $(this).css("display", "none");      
  });
} ) ( jQuery );

    
    $('#account_type').change(function (e) { 
        alert();
        var ths = $(this);
        
        var res_area = $(ths).attr('data-response');
        var blursection = $(ths).attr('data-blursection');
        var loader = $(ths).attr('data-loader');
        $('#'+blursection).css('filter','blur(8px)');
        $('#'+loader).css('display','block');
        //$("#"+res_area).html('<div class="loading"><center><img class="loading-image" src="<?= base_url('images/loader/ajax-loader.gif');?>"> </center></div>');
       // $('#'+res_area).html('<i class="fa fa-spinner fa-spin"></i>');
        var acc_type = $(this).val();        
        $.ajax({
          type: "post",
          url: "<?= $main_path.'payment/get_section';?>",
          data: {acc_type:acc_type},          
          success: function (response) {  
             // alert(response);
              $('#'+res_area).html(response);
              $('#'+blursection).css('filter','blur(0px)');
              $('#'+loader).css('display','none');
          }
        }); 
    });
</script>