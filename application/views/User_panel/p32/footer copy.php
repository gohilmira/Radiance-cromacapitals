
</div>
</div>

<footer class="page-footer">
			<p class="mb-0">Copyright © 2023 <?= $this->conn->company_info('company_name');?>. All right reserved.</p>
			
			
		</footer>
	</div>
	

	<!-- Bootstrap JS -->

	<!--plugins-->
	
	<script src="<?= $panel_url;?>assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="<?= $panel_url;?>assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="<?= $panel_url;?>assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="<?= $panel_url;?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?= $panel_url;?>assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?= $panel_url;?>assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="<?= $panel_url;?>assets/plugins/chartjs/js/Chart.extension.js"></script>
	<script src="<?= $panel_url;?>assets/js/index.js"></script>
	<!--app JS-->
	<script src="<?= $panel_url;?>assets/js/app.js"></script>
	
	        
        <script src="<?= $panel_url;?>assets/css/js/script.js"></script>
        
         <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
			<script>
$(document).ready(function(){
    $('[data-toggle="popover1"]').popover();   
});


    $('.no_space').keyup(function (e) {         
         var TCode = $(this).val();
        var res_area = $(this).attr('data-response');
	    if( /[^a-zA-Z0-9@!#$%&?|_\-\/]/.test( TCode ) ) {
			$(this).val('');
			
			$('#'+res_area).html('Space Not Allowed.').css('color','red');
			return false;
		}                
    });
</script>    
          	<script>
          	
         	  $(".right_side_hamburger_button").click(function() {
        $(".user_panel_header").toggleClass("active");
     });
    // $(".dropdowm_mlm_list").click(function() {
    //     $(this).find(".text_dropdown").slideToggle("fast");
    //     $(".dropdowm_mlm_list").not(this).find(".text_dropdown").slideUp("fast");
    // });
   $('.select_address').change(function(){
            var ths = $(this);
            var res_area = $(ths).attr('data-response');
            var s =$(this).children('option:selected').attr('value');
            $.ajax({
              type: "post",
              url: "<?= $panel_path.'fund/get_payment_method';?>",
              data: {connection_type:s},          
              success: function (response) {  
                //alert(response);
                $('#'+res_area).html(response);  
                
              }
            });
        });
   
    $('.payment_type').change(function(){
            // alert(s);
            var ths = $(this);
            var res_area = $(ths).attr('data-response');            
            var s =$(this).children('option:selected').attr('value');
            $.ajax({
              type: "post",
              url: "<?= $panel_path.'fund/get_payment_method_image';?>",
              data: {connection_type:s},          
              success: function (response) {
                 var res = JSON.parse(response); 
               //alert(res.address);
                 //var loc = $(this).attr("src");
               $('#'+res_area).attr("src",res.msg);
                 $('#address_div ').show(); 
                $('#'+res_area).html(response);  
                //$('#res_address').html("Address :"+res.address);  
                $('#referral_address').val(res.address);  
                $('#res_address').html("Address :"+res.address);  
                
              }
            });
           
        }); 
   
   
   
       function MobileinputSpace(event) {
        var k = event ? event.which : window.event.keyCode;
        if (k == 10) return false;
    }
   
   
   $('.selected_cripto').change(function(){
           
            var ths = $(this);
            var res_area = $(ths).attr('data-response');
            
            var s =$(this).children('option:selected').attr('value');
            //alert(s);
            $.ajax({
              type: "post",
              url: "<?= $panel_path.'fund/cripto_detail';?>",
              data: {selected_address:s},          
              success: function (response) {  
                //alert(response);
                $('#'+res_area).html(response);  
                
              }
            });
        });
        
   
    $('.add_to_cart').click(function (e) { 
        $(this).html('<i class="fa fa-spinner fa-spin"></i>');
        var ths = $(this);
        var productId = $(this).attr('data-productId');    
        var qty = $('#qty_'+productId).val();    
       
       $.ajax({
         type: "post",
         url:  "<?= $panel_path.'product/add_to_cart';?>",
         data: {productId:productId,qty:qty},      
         success: function (response) {
           var res = JSON.parse(response);
           if(res.error==false){
               location.reload();
           }else{
                $(ths).html('Add to cart');
                alert(response);
           }
           
         }
       });
      });
      
       $('.update_cart').click(function (e) { 
            $(this).html('<i class="fa fa-spinner fa-spin"></i>');
            var ths = $(this);
            var productId = $(this).attr('data-productId');    
            var rowid = $(this).attr('data-rowid');    
            var qty = $('#qty_'+productId).val();    
           
           $.ajax({
             type: "post",
             url:  "<?= $panel_path.'product/update';?>",
             data: {productId:productId,qty:qty,rowid:rowid},      
             success: function (response) {
                 // alert(response);
               var res = JSON.parse(response);
               if(res.error==false){
                   location.reload();
               }else{
                    $(ths).html('Update');
                   alert(response);
               }
               
             }
           });
          });
          
        $('.remove_from_cart').click(function (e) { 
            $(this).html('<i class="fa fa-spinner fa-spin"></i>');
            var ths = $(this);
            var rowid = $(this).attr('data-rowid'); 
           // var productId = $(this).attr('data-productId'); 
           $.ajax({
             type: "post",
             url:  "<?= $panel_path.'product/remove';?>",
             data: {rowid:rowid},      
             success: function (response) {
                
               location.reload();
             }
           });
          });
   
   
   
   
    $('.check_username_exist').change(function (e) { 
        var ths = $(this);
        var res_area = $(ths).attr('data-response');
        var username = $(this).val();        
        $.ajax({
          type: "post",
          url: "<?= $panel_path.'profile/verify_username';?>",
          data: {username:username},          
          success: function (response) {  
           // alert(response);
            var res = JSON.parse(response); 

            if(res.error==true){
              $('#'+res_area).html(res.msg).css('color','red');
              
            }else{
              $('#'+res_area).html(res.msg).css('color','green');              
            }
          }
        });
    });

$('.send_otp').click(function (e) { 
  $(this).html('<i class="fa fa-refresh fa-spin"></i>'); 
  var res_area = $(this).attr('data-response_area');
  
  $.ajax({
          type: "post",
          url: "<?= $panel_path.'profile/send_otp';?>",
          data: {gen_otp:1},          
          success: function (response) {  
           // alert(response);
            $(this).html('Resend OTP'); 
            $('#'+res_area).css('display','block');
          }
        });

   
});

$('.send_otp_withdrawal').click(function (e) { 
  $(this).html('<i class="fa fa-refresh fa-spin"></i>'); 
  var res_area = $(this).attr('data-response_area');
  
  $.ajax({
          type: "post",
          url: "<?= $panel_path.'fund/send_otp';?>",
          data: {gen_otp:1},          
          success: function (response) {  
           // alert(response);
            $(this).html('Resend OTP'); 
            $('#'+res_area).css('display','block');
          }
        });

   
});

$('.pin_transfer_btn').click(function (e) { 
  $(this).html('<i class="fa fa-refresh fa-spin"></i>'); 
  //$(this).prop('disabled', true); 
  
  var tx_username = $(this).attr('data-tx_username');
  var selected_pin = $(this).attr('data-selected_pin');
  var no_of_pins = $(this).attr('data-no_of_pins');
  
  $.ajax({
          type: "post",
          url: "<?= $panel_path.'pin/ajax_pin_transfer';?>",
          data: {pin_transfer_btn:1,tx_username:$('#'+tx_username).val(),selected_pin:$('#'+selected_pin).val(),no_of_pins:$('#'+no_of_pins).val()},          
          success: function (response) {  
            alert(response);
            var resp = JSON.parse(response);
            if(resp.error==true){
              $('#'+tx_username+'_error').html(resp.tx_username);
              $('#'+selected_pin+'_error').html(resp.selected_pin);
              $('#'+no_of_pins+'_error').html(resp.no_of_pins);
              $(this).html('Transfer');
            }else{
              $('#message_success').html(resp.msg);
              $(this).hide();
              //location.reload();
            } 
                
          }
        });

   return false;
});

        $('.selected_pins').change(function(){
            
            var ths = $(this);
            var res_area = $(ths).attr('data-response');
            var s =$(this).children('option:selected').attr('value');
            //alert(s);
            $.ajax({
              type: "post",
              url: "<?= $panel_path.'invest/pin_detail';?>",
              data: {selected_pin:s},          
              success: function (response) {  
                //alert(response);
                $('#'+res_area).html(response);  
                
              }
            });
        });
        
        $('.check_balance').change(function (e) {
         
            var ths = $(this);
            var res_area = $(ths).attr('data-response');
            var wallet = $(this).val();  
            //alert(res_area);      
            $.ajax({
              type: "post",
              url: "<?= $panel_path.'fund/wallet_balance';?>",
              data: {wallet:wallet},          
              success: function (response) {  
                //alert(response);
                var res = JSON.parse(response);          
                if(res.error==true){
                  $('#'+res_area).html(res.message).css('color','red');              
                }else{
                  $('#'+res_area).html(res.message).css('color','green');              
                }
              }
            });
        });

        
            function copyLink(iid) {
                  / Get the text field /
                  var copyText = document.getElementById("referral_link_right");
                
                  / Select the text field /
                  copyText.select();
                  copyText.setSelectionRange(0, 99999); /*For mobile devices*/
                
                  / Copy the text inside the text field /
                  document.execCommand("copy");
                
                  / Alert the copied text /
                  alert("Copied the text: " + copyText.value);
                }
                
                function copyLink1(iid) {
        
                  / Get the text field /
                  var copyText = document.getElementById("referral_link_left");
                
                  / Select the text field /
                  copyText.select();
                  copyText.setSelectionRange(0, 99999); /*For mobile devices*/
                
                  / Copy the text inside the text field /
                  document.execCommand("copy");
                
                  / Alert the copied text /
                  alert("Copied the text: " + copyText.value);
                }
  <?php
    	$get_alert=$this->conn->runQuery('*','notice_board',"type='popup' and status='1'");
    	
    	if($get_alert){
    	    ?>
    	   
    	   	$("#panel_popup").modal();
    	    <?php
    	}
        if(!$this->session->has_userdata('need_set')){
    	    ?>
    	    
    	    $('#need_form').modal({
                   backdrop: 'static',
                   keyboard: false
            });
    	    //$("#need_form").modal();
    	    <?php
    	}
    	?>

  </script>
   <?php
        $this->load->view($panel_directory.'/pages/payment_section/scripts');
    ?>            
   
</body>



</html>