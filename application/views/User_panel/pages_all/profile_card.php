<?php
$u_code=$this->session->userdata('user_id');
$profile=$this->profile->profile_info($u_code);
?>
<br>
<br>

<div class="container">
<center>
    <input type='button' id='btn' value='Download' class="btn"  style="background-color:#dfc240;color:white" onclick='printDiv();'>
</center>
    <div id="DivIdToPrint">
     <style>
    				.invoice-box1 {
    					max-width: 450px;
    					margin: auto;
    					padding: 10px;
    					border: 1px solid #eee;
    					box-shadow: 0 0 10px rgba(0, 0, 0, .15);
    					font-size: 16px;
    					line-height: 24px;
    					font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    					color: #555;
    					border: 2px dotted #0f143c;
    				}
        table.table.table-bordered.table-responsive.table_detail th, td {
            width: auto; 
        }
    				.invoice-box1 table {
    					width: 100%;
    					line-height: inherit;
    					text-align: left;
    				}
    				
    				.invoice-box1 table td {
    					padding: 5px;
    					vertical-align: top;
    					color: #000 !important;
    				}
    			
        
    				.invoice-box1 table tr td:nth-child(2) {
    					text-align: right;
    				}
        
    				.invoice-box1 table tr.top table td {
    					padding-bottom: 20px;
    				}
    				
    				.invoice-box1 table tr.top table td.title {
    					font-size: 45px;
    					line-height: 45px;
    					color: #333;
    				}
        
    				.invoice-box1 table tr.information table td {
    					padding-bottom: 40px;
    				}
    				
    				.invoice-box1 table tr.heading td {
    					background: #eee;
    					border-bottom: 1px solid #ddd;
    					font-weight: bold;
    				}
        
    				.invoice-box1 table tr.details td {
    					padding-bottom: 5px;
    				}
    				
    				.invoice-box table tr.item td{
    					border-bottom: 1px solid #eee;
    				}
    				
    				.invoice-box1 table tr.item.last td {
    					border-bottom: none;
    				}
    				
    				.invoice-box1 table tr.total td:nth-child(2) {
    					border-top: 2px solid #eee;
    					font-weight: bold;
    				}
    				
    				@media only screen and (max-width: 600px) {
    					.invoice-box1 table tr.top table td {
    						width: 100%;
    						display: block;
    						text-align: center;
    					}
    								
    					.invoice-box1 table tr.information table td {
    						width: 100%;
    						display: block;
    						text-align: center;
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

        </style>
        
        
        
        <div  class="invoice-box1 text-white" style="margin-bottom:40px !important;">
                <div style="background-color:#0d1239;padding-top:10px;padding-bottom:10px;">
                  
                      	<center><b style="color:#fff;"><?= $this->conn->company_info('company_name');?></b></center>
                    </div>
              
            <table cellpadding="0" cellspacing="0">
                
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                <?php  if($profile->img!=''){?>
                                <img src="<?=  base_url('images/users/').$profile->img;?>" class="img-circle" style="width:100%;max-width:80px;height:80px;border-radius: 50%;border:4px solid black;">
                                <?php }else{ ?>
    							<img src="<?=  $this->conn->company_info('logo');?>" class="img-circle" style="width:100%; max-width:100px;height:100px;border-radius: 50%;border:4px solid black;">
    							<?php } ?>
                                </td>
                           </tr>
                        </table>
                    </td>
                     <td colspan="3" class="best6">
                        <table>
                             
                            <tr class="item  font_color1">
                              <td>
    						
    							
    							 <?php echo 'Username';?>: <b style="padding-left: 5px;"><?= $profile->username;?></b><br>
                                 <?php echo 'Name';?>: <b style="padding-left: 5px;"><?= $profile->name;?></b><br>
                                 <?php echo 'Mobile';?>: <b style="padding-left: 5px;"> <?= $profile->mobile;?></b><br>
    							 <?php echo 'Join Date';?>: <b style="padding-left: 5px;"> <?= $profile->added_on;?></b><br>	</strong>
    						
    							Signature
                                </td>
                            </tr>
                        </table>
                    </td>
                    <!--<td colspan="3" class="best6">
                        <table>
                             
                            <tr class="item text-color">
                              <td>
    						    <strong>
    							 <?= $profile->username;?><br>
                                 <?= $profile->name;?><br>
                                <?= $profile->mobile;?><br>
                                <?= $profile->added_on;?><br>
    							  	</strong>
    						
    						    Signature
    							</td>
                            </tr>
                        </table>
                    </td>-->
                   
                </tr>
              
               
                
              </table>
    
                
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
     
 