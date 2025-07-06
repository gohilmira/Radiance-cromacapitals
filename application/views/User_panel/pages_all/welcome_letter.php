<?php
$u_code=$this->session->userdata('user_id');
$profile=$this->profile->profile_info($u_code);
$my_package=$this->business->package($u_code);
?>

    
    <style>
        .welcome_color_bacakground {
            background: #0d1239;
        }
        
        .welcome_letter_data {
            padding: 20px 0px;
        }
        
        .welcome_logo_letter {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .welcome_logo_letter a img {
            width: 110px;
            height: 110px;
            background:#0a404c;
            z-index: 1000;
            padding: 4px;
            border-radius: 50%;
            border: 2px dotted #eec710;
        }
        
        
        .date_welcome_letter p {
            color: #fff;
            text-transform: capitalize;
            font-size: 14px;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            margin-bottom: 3px;
        }
        
        .date_welcome_letter p span {
            font-size: 13px;
            font-weight: 400;
            width: 50%;
            word-break: break-all;
        }
        
        .infomation_welcome_letter {
            padding: 20px 0px;
        }
        
        .regard_welcome_letter {
            margin-top: 62px;
        }
        
        .container.welcome_color {
            border:4px solid #0d1239;
            border-radius: 6px;
        }
        
        @media only screen and (max-width: 576px) {
            .date_welcome_letter {
                text-align: center;
            }
        }
    </style>
    
    <div class="container pages">
<div class="row pt-2 pb-2">
        <div class="col-sm-12">
		  
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>            
            <li class="breadcrumb-item active" aria-current="page">Welcome Letter</li>
         </ol>
	   </div>
	   
</div>
    <center>
		<a href="" class="btn btn-success" onclick='printDiv();' title="Print Form"><i class="fa fa-print"></i></a>
		</center>
<div id="DivIdToPrint" class=" ">
    <div class="dashboard_welcome_letter" style="margin-bottom: 40px;">
        <div class="container welcome_color">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 welcome_color_bacakground">
                    <div class="welcome_letter_data">
                        <div class="welcome_logo_letter">
                            <a href="#"><img src="<?=  $this->conn->company_info('logo');?>" class="img-thumbnail"  style="width:<?php echo $this->conn->company_info('logo_width');?>;height:<?php echo $this->conn->company_info('logo_height');?>"></a>
                        </div>
                        <div class="date_welcome_letter">
                            <p>To: <span><?= $profile->username;?></span></p>
                        </div>
                        <div class="date_welcome_letter">
                            <p>Name: <span> <?= $profile->name;?></span></p>
                        </div>
                        <div class="date_welcome_letter">
                            <p>Email: <span><?= $this->conn->company_info('company_email');?></span></p>
                        </div>
                        <div class="date_welcome_letter">
                            <p>Mobile no: <span><?= $this->conn->company_info('company_mobile');?></span></p>
                        </div>
                        <div class="date_welcome_letter">
                            <p>Purchase Date: <span><?= $profile->added_on;?></span></p>
                        </div>
                        <div class="date_welcome_letter">
                            <p>Purchase Amount: <span> <?= $my_package;?></span></p>
                        </div>

                    </div>

                </div>
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="infomation_welcome_letter">
                         <?php
     
                         $welcome_condition=$this->conn->runQuery('*','legal_data','lega_page_type="welcome_letter"');
                         if($welcome_condition){
                         foreach($welcome_condition as $welcome_condition1){
                        
                         ?> 
                        <h5 class=' font_color1' ><?php echo $welcome_condition1->legal_title;?></h5>
                        <p class='font_color1'><?php echo $welcome_condition1->legal_desc;?>
                        </p>
                        <?php  
                             }
                          }
                        ?>
                        
                        <div class="regard_welcome_letter">
                            <h4 class='' >Regards</h4>
                            <h6 class='' ><?= $this->conn->company_info('company_name');?> </h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<br>
    <br>
 <script>

////////////////div print function /////////////////////////
//////////btn onclick  call this function ////////

function printDiv(){

  var divToPrint=document.getElementById('DivIdToPrint'); ////////////  <- div id /////////////

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}
  ///////////////////////// end function //////////
</script>