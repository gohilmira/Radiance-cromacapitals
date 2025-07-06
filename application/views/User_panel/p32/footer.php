<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>

</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?= $panel_url; ?>js/vendor.min.js" type="829ba8780cd59385d052ca16-text/javascript"></script>
<script src="<?= $panel_url; ?>js/app.min.js" type="829ba8780cd59385d052ca16-text/javascript"></script>


<script src="<?= $panel_url; ?>plugins/jvectormap-next/jquery-jvectormap.min.js" type="829ba8780cd59385d052ca16-text/javascript"></script>
<script src="<?= $panel_url; ?>plugins/jvectormap-content/world-mill.js" type="829ba8780cd59385d052ca16-text/javascript"></script>
<script src="<?= $panel_url; ?>plugins/apexcharts/dist/apexcharts.min.js" type="829ba8780cd59385d052ca16-text/javascript"></script>
<script src="<?= $panel_url; ?>js/demo/dashboard.demo.js" type="829ba8780cd59385d052ca16-text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3" type="829ba8780cd59385d052ca16-text/javascript"></script>
<script type="829ba8780cd59385d052ca16-text/javascript">
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-Y3Q0VGQKY3');
</script>

<script src="<?= $panel_url; ?>js/rocket-loader.min.js" data-cf-settings="829ba8780cd59385d052ca16-|49" defer></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"81e195465e960d85","version":"2023.10.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","b":1}' crossorigin="anonymous"></script>


  <!-- Required vendors -->
  <script src="<?= $panel_url; ?>assets/vendor/global/global.min.js"></script>
	<script src="<?= $panel_url; ?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="<?= $panel_url; ?>assets/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="<?= $panel_url; ?>assets/vendor/owl-carousel/owl.carousel.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="<?= $panel_url; ?>assets/vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="<?= $panel_url; ?>assets/js/dashboard/dashboard-1.js"></script>
	
    <script src="<?= $panel_url; ?>assets/js/custom.min.js"></script>
	<script src="<?= $panel_url; ?>assets/js/deznav-init.js"></script>
	<script src="<?= $panel_url; ?>assets/js/demo.js"></script>
    <script src="<?= $panel_url; ?>assets/js/styleSwitcher.js"></script>
	<script>
		  
		
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			function checkDirection() {
				var htmlClassName = document.getElementsByTagName('html')[0].getAttribute('class');
				if(htmlClassName == 'rtl') {
					return true;
				} else {
					return false;
				
				}
			}
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:15,
				nav:false,
				dots: false,
				left:true,
				rtl: checkDirection(),
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					800:{
						items:2
					},	
					991:{
						items:2
					},			
					
					1200:{
						items:2
					},
					1600:{
						items:2
					}
				}
			})		
			jQuery('.testimonial-two').owlCarousel({
				loop:true,
				autoplay:true,
				margin:15,
				nav:false,
				dots: true,
				left:true,
				rtl: checkDirection(),
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},	
					991:{
						items:3
					},			
					
					1200:{
						items:3
					},
					1600:{
						items:4
					}
				}
			})					
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000); 
		});
	</script>

<script src="<?= $panel_url; ?>assets/cdn.jsdelivr.net/npm/bootstrap%405.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= $panel_url; ?>assets/cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?= $panel_url; ?>assets/code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="<?= $panel_url; ?>assets/js/jquery.nice-select.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="<?= $panel_url; ?>assets/js/main.js"></script>
<script src="<?= $panel_url; ?>assets/js/chart.js"></script>

<script src="<?= $panel_url; ?>assets/js/app.js"></script>


<script src="<?= $panel_url; ?>assets/css/js/script.js"></script>

<script>
    (function($) {
        $(".btn-remove").click(function() {

            $(this).css("display", "none");
        });
    })(jQuery);

    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>
<script>
    $(document).ready(function() {
        $('[data-toggle="popover1"]').popover();
    });


    $('.no_space').keyup(function(e) {
        var TCode = $(this).val();
        var res_area = $(this).attr('data-response');
        if (/[^a-zA-Z0-9@!#$%&?|_\-\/]/.test(TCode)) {
            $(this).val('');

            $('#' + res_area).html('Space Not Allowed.').css('color', 'red');
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
    $('.select_address').change(function() {
        var ths = $(this);
        var res_area = $(ths).attr('data-response');
        var s = $(this).children('option:selected').attr('value');
        $.ajax({
            type: "post",
            url: "<?= $panel_path . 'fund/get_payment_method'; ?>",
            data: {
                connection_type: s
            },
            success: function(response) {
                //alert(response);
                $('#' + res_area).html(response);

            }
        });
    });

    $('.payment_type').change(function() {
        // alert(s);
        var ths = $(this);
        var res_area = $(ths).attr('data-response');
        var s = $(this).children('option:selected').attr('value');
        $.ajax({
            type: "post",
            url: "<?= $panel_path . 'fund/get_payment_method_image'; ?>",
            data: {
                connection_type: s
            },
            success: function(response) {
                var res = JSON.parse(response);
                //alert(res.address);
                //var loc = $(this).attr("src");
                $('#' + res_area).attr("src", res.msg);
                $('#address_div ').show();
                $('#' + res_area).html(response);
                //$('#res_address').html("Address :"+res.address);  
                $('#referral_address').val(res.address);
                $('#res_address').html("Address :" + res.address);

            }
        });

    });



    function MobileinputSpace(event) {
        var k = event ? event.which : window.event.keyCode;
        if (k == 10) return false;
    }


    $('.selected_cripto').change(function() {

        var ths = $(this);
        var res_area = $(ths).attr('data-response');

        var s = $(this).children('option:selected').attr('value');
        //alert(s);
        $.ajax({
            type: "post",
            url: "<?= $panel_path . 'fund/cripto_detail'; ?>",
            data: {
                selected_address: s
            },
            success: function(response) {
                //alert(response);
                $('#' + res_area).html(response);

            }
        });
    });


    $('.add_to_cart').click(function(e) {
        $(this).html('<i class="fa fa-spinner fa-spin"></i>');
        var ths = $(this);
        var productId = $(this).attr('data-productId');
        var qty = $('#qty_' + productId).val();

        $.ajax({
            type: "post",
            url: "<?= $panel_path . 'product/add_to_cart'; ?>",
            data: {
                productId: productId,
                qty: qty
            },
            success: function(response) {
                var res = JSON.parse(response);
                if (res.error == false) {
                    location.reload();
                } else {
                    $(ths).html('Add to cart');
                    alert(response);
                }

            }
        });
    });

    $('.update_cart').click(function(e) {
        $(this).html('<i class="fa fa-spinner fa-spin"></i>');
        var ths = $(this);
        var productId = $(this).attr('data-productId');
        var rowid = $(this).attr('data-rowid');
        var qty = $('#qty_' + productId).val();

        $.ajax({
            type: "post",
            url: "<?= $panel_path . 'product/update'; ?>",
            data: {
                productId: productId,
                qty: qty,
                rowid: rowid
            },
            success: function(response) {
                // alert(response);
                var res = JSON.parse(response);
                if (res.error == false) {
                    location.reload();
                } else {
                    $(ths).html('Update');
                    alert(response);
                }

            }
        });
    });

    $('.remove_from_cart').click(function(e) {
        $(this).html('<i class="fa fa-spinner fa-spin"></i>');
        var ths = $(this);
        var rowid = $(this).attr('data-rowid');
        // var productId = $(this).attr('data-productId'); 
        $.ajax({
            type: "post",
            url: "<?= $panel_path . 'product/remove'; ?>",
            data: {
                rowid: rowid
            },
            success: function(response) {

                location.reload();
            }
        });
    });




    $('.check_username_exist').change(function(e) {
        var ths = $(this);
        var res_area = $(ths).attr('data-response');
        var username = $(this).val();
        $.ajax({
            type: "post",
            url: "<?= $panel_path . 'profile/verify_username'; ?>",
            data: {
                username: username
            },
            success: function(response) {
                // alert(response);
                var res = JSON.parse(response);

                if (res.error == true) {
                    $('#' + res_area).html(res.msg).css('color', 'red');

                } else {
                    $('#' + res_area).html(res.msg).css('color', 'green');
                }
            }
        });
    });

    $('.send_otp').click(function(e) {
        $(this).html('<i class="fa fa-refresh fa-spin"></i>');
        var res_area = $(this).attr('data-response_area');

        $.ajax({
            type: "post",
            url: "<?= $panel_path . 'profile/send_otp'; ?>",
            data: {
                gen_otp: 1
            },
            success: function(response) {
                // alert(response);
                $(this).html('Resend OTP');
                $('#' + res_area).css('display', 'block');
            }
        });


    });
    
    $('.send_otp_edit').click(function(e) {
        $(this).html('<i class="fa fa-refresh fa-spin"></i>');
        var res_area = $(this).attr('data-response_area');

        $.ajax({
            type: "post",
            url: "<?= $panel_path . 'profile/send_otp_edit'; ?>",
            data: {
                gen_otp: 1
            },
            success: function(response) {
                // alert(response);
                $(this).html('Resend OTP');
                $('#' + res_area).css('display', 'block');
            }
        });


    });


    $('.send_otp_account').click(function(e) {
        $(this).html('<i class="fa fa-refresh fa-spin"></i>');
        var res_area = $(this).attr('data-response_area');

        $.ajax({
            type: "post",
            url: "<?= $panel_path . 'payment/send_otp'; ?>",
            data: {
                gen_otp: 1
            },
            success: function(response) {
                // alert(response);
                $(this).html('Resend OTP');
                $('#' + res_area).css('display', 'block');
            }
        });


    });


    $('.send_otp_update').click(function(e) {
        $(this).html('<i class="fa fa-refresh fa-spin"></i>');
        var res_area = $(this).attr('data-response_area');

        $.ajax({
            type: "post",
            url: "<?= $panel_path . 'payment/send_otp_update'; ?>",
            data: {
                gen_otp: 1
            },
            success: function(response) {
                // alert(response);
                $(this).html('Resend OTP');
                $('#' + res_area).css('display', 'block');
            }
        });


    });





    $('.send_otp_withdrawal').click(function(e) {
        // alert();
        $(this).html('<i class="fa fa-refresh fa-spin"></i>');
        var res_area = $(this).attr('data-response_area');

        $.ajax({
            type: "post",
            url: "<?= $panel_path . 'fund/send_otp'; ?>",
            data: {
                gen_otp: 1
            },
            success: function(response) {
                // alert(response);
                $(this).html('Resend OTP');
                $('#' + res_area).css('display', 'block');
            }
        });


    });

    $('.send_otp_withdrawal_principal').click(function(e) {
        alert();
        $(this).html('<i class="fa fa-refresh fa-spin"></i>');
        var res_area = $(this).attr('data-response_area');

        $.ajax({
            type: "post",
            url: "<?= $panel_path . 'fund/send_otp_principal'; ?>",
            data: {
                gen_otp: 1
            },
            success: function(response) {
                // alert(response);
                $(this).html('Resend OTP');
                $('#' + res_area).css('display', 'block');
            }
        });


    });

    $('.pin_transfer_btn').click(function(e) {
        $(this).html('<i class="fa fa-refresh fa-spin"></i>');
        //$(this).prop('disabled', true); 

        var tx_username = $(this).attr('data-tx_username');
        var selected_pin = $(this).attr('data-selected_pin');
        var no_of_pins = $(this).attr('data-no_of_pins');

        $.ajax({
            type: "post",
            url: "<?= $panel_path . 'pin/ajax_pin_transfer'; ?>",
            data: {
                pin_transfer_btn: 1,
                tx_username: $('#' + tx_username).val(),
                selected_pin: $('#' + selected_pin).val(),
                no_of_pins: $('#' + no_of_pins).val()
            },
            success: function(response) {
                alert(response);
                var resp = JSON.parse(response);
                if (resp.error == true) {
                    $('#' + tx_username + '_error').html(resp.tx_username);
                    $('#' + selected_pin + '_error').html(resp.selected_pin);
                    $('#' + no_of_pins + '_error').html(resp.no_of_pins);
                    $(this).html('Transfer');
                } else {
                    $('#message_success').html(resp.msg);
                    $(this).hide();
                    //location.reload();
                }

            }
        });

        return false;
    });

    $('.check_balance').change(function(e) {

        var ths = $(this);
        var res_area = $(ths).attr('data-response');
        var wallet = $(this).val();
        //alert(res_area);      
        $.ajax({
            type: "post",
            url: "<?= $panel_path . 'fund/wallet_balance'; ?>",
            data: {
                wallet: wallet
            },
            success: function(response) {
                //alert(response);
                var res = JSON.parse(response);
                if (res.error == true) {
                    $('#' + res_area).html(res.message).css('color', 'red');
                } else {
                    $('#' + res_area).html(res.message).css('color', 'green');
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
    $get_alert = $this->conn->runQuery('*', 'notice_board', "type='popup' and status='1'");

    if ($get_alert) {
    ?>

        $("#panel_popup").modal();
    <?php
    }
    if (!$this->session->has_userdata('need_set')) {
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
$this->load->view($panel_directory . '/pages/payment_section/scripts');
?>
</body>

<!-- Mirrored from jobie.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 10:00:04 GMT -->
</html>
