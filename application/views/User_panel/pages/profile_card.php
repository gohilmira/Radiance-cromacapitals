<?php
$u_code=$this->session->userdata('user_id');
$profile=$this->profile->profile_info($u_code);
?>
<br>
<br>

<div class="container">
<center>
    <input type='button' id='btn' value='Download' class="btn"  style="background-color:var(--text1);color:white; margin-bottom:20px;" onclick='printDiv();'>
</center>
    <div id="DivIdToPrint">
     <style>

		
.v_card_demo {
	width: 100%;
	max-width: 350px;
	border: 1px solid #0a404c29;
	position: relative;
	overflow: hidden;
	z-index: 0;
	margin: auto;
	background: var(--first) !important;
	border-radius: 20px;
	box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
}

.v_card_heading {
	padding: 15px 20px;
}

.v_card_heading h3 {
	font-size: 22px;
	text-align: center;
	text-transform: capitalize;
	color: var(--text2);
}

.v_card_image img {
	max-width: 100%;
	width: 124px;
	height: 124px;
	border-radius: 50%;
	border: 2px solid #D59B2D;
	margin-bottom: 5px;
	margin: auto;
}


.v_card_heading:before {
	position: absolute;
	content: "";
	background-color: var(--text1);
	height: 239px;
	width: 239px;
	top: -170px;
	right: -140px;
	border-radius: 50%;
	opacity: 1;
	transition: .7s;
	z-index: -1;
}


.v_card_content:after {
	position: absolute;
	content: "";
	background-color: var(--text1);
	height: 239px;
	width: 239px;
	bottom: -159px;
	left: -152px;
	border-radius: 50%;
	opacity: 1;
	transition: .7s;
	z-index: -1;
}

.v_card_image {
	text-align: center;
}

.v_card_inner_data {
	text-align: center;
}

.v_card_inner_data ul {
	list-style: none;
	padding: 0;
	margin: 0;
}
.v_card_inner_data {
    margin-bottom: 20px;
    margin-top: 10px;
}

.v_card_content {
	padding: 10px 20px;
}

.v_card_signature {
    text-align: end;
    padding-top: 20px;
}

.v_card_inner_data ul li h4 {
	font-size: 16px;
	margin-bottom: 0;
	color: var(--text2);
	text-transform: capitalize;
}

.v_card_inner_data ul li p {
	margin: 0;
	font-size: 16px;
	font-weight: 500;
}


.v_card_signature h6 {
	color: var(--text2);
} 				
@media screen and (max-width: 576px) {
	.v_card_heading:before {
		top: -195px;
		right: -152px;
	}
	.v_card_content:after {
		bottom: -168px;
		left: -176px;
} 

.v_card_inner_data ul li {
    font-size: 13px;
}

.v_card_content {
	padding: 10px 20px;
} 				
}
        
    				/* RTL */
    				.rtl {
    					direction: rtl;
    					font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    				}
        
    				.rtl table {
    					text-align: right;
    				}
    				
    				.rtl table tr td:nth-child(2) {
    					text-align: left;
    				}
    				.text-color{
    				     color:;
    				     color:#aa3b61;
    				}
    			/*	td.best6 {
    background: #0f143c;
    border: 2px dotted #0f143c;
}*/
	@media only screen and (max-width: 480px) {
.invoice-box1 table td{
    display: block;
}
}

.v_card_inner_data ul li  {
    font-size: 14px;
    color: var(--text2) !important;
}

        </style>
        
        
        
		<div class="container">
        <div class="row">
           <div class="col-12">
              <div class="v_card_demo">
                 <div class="v_card_heading">
                    <h3><?= $this->conn->company_info('company_name');?></h3>
                 </div>
                 <div class="v_card_content">
                    <div class="v_card_image">
					<?php  if($profile->img!=''){?>
                       <img src="<?=  base_url('images/users/').$profile->img;?>" alt="images">
					   <?php }else{ ?>
						<img src="<?=  $this->conn->company_info('logo');?>" alt="images">
						<?php
					   }
						?>
                    </div>

					
                    <div class="v_card_inner_data">
                       <ul>
                          <li><h4>Username : <?= $profile->username;?></h4></li>
                          <li>Name : <?= $profile->name;?></li>
                          <li>Moblie No : <?= $profile->mobile;?></li>
                          <li>Joining Date : <?= $profile->added_on;?></li>
                       </ul>
                    </div>
                    <div class="v_card_signature">
                       <h6>Signature</h6>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    </div>
    </div>
    <br><br>
    <script>
        function printDiv(){
        var divToPrint=document.getElementById('DivIdToPrint'); ////////////  <- div id /////////////
        var newWin=window.open('','Print-Window');
        newWin.document.open();
        newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
        newWin.document.close();
        setTimeout(function(){newWin.close();},10);
        }
    </script>
     
 




	 