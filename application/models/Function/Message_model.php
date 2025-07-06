<?php
class Message_model extends CI_Model{

   /* public function sms($mobile,$sms){
        $msg=urlencode($sms);
        
        $url = "http://smartsms.smseasy.in/domestic/sendsms/bulksms_v2.php?apikey=ZXJhY29tOnl4UloyUUV2&type=TEXT&sender=YUNDAY&mobile=$mobile&message=$msg";
        $this->curl->simple_get($url);
    }*/
    
    /*public function sms($mobile,$sms){
        $sms=$sms." Bharat E Park";
        $mobile="91".$mobile;
        $msg=urlencode($sms); 
        $url="http://otp.smseasy.in/api/mt/SendSMS?user=BEPARK&password=BEPARK&senderid=BEPARK&channel=trans&DCS=0&flashsms=0&number=$mobile&text=$msg&route=1";
        //die();
        /////////////////////////////////////////////////////////
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => $url, 
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS =>"{\r\n    \"Username\":\"577BDD\",\r\n    \"Password\":\"M2UM93\",\r\n    \"mobile\":\"$mobile\"\r\n    \r\n    }",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Cookie: __cfduid=d5c5dc10889577854e9e9d0b9251db8291617346991"
          ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        ////////////////////////////////////////////////////////
       
    }*/
   
   public function sms($mobile,$sms){
        // $sms=$sms." YUNDAY";
        // $mobile="91".$mobile;
        // $msg=urlencode($sms); 
        // $url="http://otp.smseasy.in/api/mt/SendSMS?user=eracom&password=eracom&senderid=YUNDAY&channel=trans&DCS=0&flashsms=0&number=$mobile&text=$msg&route=1";
        // //die();
        // /////////////////////////////////////////////////////////
        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => $url, 
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => "",
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 0,
        //   CURLOPT_FOLLOWLOCATION => true,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => "GET",
        //   CURLOPT_POSTFIELDS =>"{\r\n    \"Username\":\"577BDD\",\r\n    \"Password\":\"M2UM93\",\r\n    \"mobile\":\"$mobile\"\r\n    \r\n    }",
        //   CURLOPT_HTTPHEADER => array(
        //     "Content-Type: application/json",
        //     "Cookie: __cfduid=d5c5dc10889577854e9e9d0b9251db8291617346991"
        //   ),
        // ));
        // $response = curl_exec($curl);
        // curl_close($curl);
        // ////////////////////////////////////////////////////////
       
    }
    
    
    
    
    
    public function watsapp_sms($mobile,$country_code,$massage){
        
         $mobile=$country_code.$mobile;
         $msg=$massage;
    
         $curl = curl_init();

						curl_setopt_array($curl, array(
						  CURLOPT_URL => "https://wapi.smseasy.in/api/sendText?token=63317630ee2eb174cbb622f9&phone=.$mobile.&message=$msg",
						  CURLOPT_RETURNTRANSFER => true,
						  CURLOPT_ENCODING => '',
						  CURLOPT_MAXREDIRS => 10,
						  CURLOPT_TIMEOUT => 0,
						  CURLOPT_FOLLOWLOCATION => true,
						  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
						  CURLOPT_CUSTOMREQUEST => 'GET',
						  CURLOPT_HTTPHEADER => array(
							'Content-Type: application/json',
							'Cookie: JSESSIONID=90BBA8BA62FDC7A94474DCAC2D6D14DD'
						  ),
						));

						$response = curl_exec($curl);
						curl_close($curl);
					//	echo $response;
						$ress=json_decode($response,true);
        
        
        
        
        
        return json_encode(array('error'=>false));
    }
    
    
    
    
 function sendnotification($to, $title='fhusdhfuh', $message="test", $img = "https://www.google.co.in/images/branding/googleg/1x/googleg_standard_color_128dp.png", $datapayload = ""){
 $msg = urlencode($message);
 $datapayload = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

$pay_load=json_encode($datapayload);
$data = array(
    'title'=>$title,
    'sound' => "default",
    'msg'=>$msg,
    'data'=>$pay_load,
    'body'=>$message,
    'color' => "#79bc64"
);
if($img){
    $data["image"] = $img;
    $data["style"] = "picture";
    $data["picture"] = $img;
}
$fields = array(
    'to'=>$to,
    'notification'=>$data,
    'data'=>$pay_load,
    "priority" => "high",
);
$headers = array(
    'Authorization: key=AAAA2aL07Oo:APA91bHLCoBA9aztGsvM6W09FG7DVcuBUOUS8pIt8iJQag2juGPHMXFig230LWyqYMSQOkaVoxPgG1g8BiT0qmhTTpD2TP_oDC32OFjBi9Z0Cls4l0zf4UV74nq5Qr4Ek1Ao7GqAAcYU',
    'Content-Type: application/json'
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
$result = curl_exec($ch);
curl_close( $ch );
return $result;
    
}
    
    
    
    function testin_noti(){
        
         $url = "https://fcm.googleapis.com/fcm/send";
        $topico = "e76GNNW9Q4-e840U3C5dFC:APA91bGOmB-PTwXQmUf641f_jCObGRS6Y8b0yar1xkw4-MaqLeECIjtHJ5MKk1JGAR7vHlR15rfSeQlR3QQ1z7l_tNcwvE4aX7wB2-K2nYWGV78MJNPUnPIVQ83MSfw9c5RWnCdbC14q";
        $api_key = "AAAA2aL07Oo:APA91bHLCoBA9aztGsvM6W09FG7DVcuBUOUS8pIt8iJQag2juGPHMXFig230LWyqYMSQOkaVoxPgG1g8BiT0qmhTTpD2TP_oDC32OFjBi9Z0Cls4l0zf4UV74nq5Qr4Ek1Ao7GqAAcYU"; //FIREBASE KEY
        $titulo = "Notification Title";
        $corpo = "Notification Message...";
        $legenda = "SubTitle...";
     

            $headers = array
            (
                'Authorization: key='.$api_key,
                'Content-Type: application/json;charset=UTF-8'
            );
         
            $data = array
            (
              'data' =>
              array (
                'title' => $titulo,
                'body' => $corpo,
                'subtitle' => $legenda,
              ),
              'to' => $topico,
              'priority' => 'high',
              //'restricted_package_name' => 'com.onlyoneapp.test', //IF YOU WANT SEND TO ONLY ONE APP
            );
       

            $content = json_encode($data);
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
            curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, false );
            $result = curl_exec($curl);
            curl_close($curl);
            $arr = array();
            $arr = json_decode($result,true);
         
            if ($arr === FALSE) {
                echo "Json invalido!"."<br>";
            } else if (empty($arr)) {
                echo "Json invalido!"."<br>";
            }else{
                if (array_key_exists ('message_id', $arr)){
                    echo "Mensagem enviada! <br>Mensagem id: ".$arr['message_id']."<br>";
                }else{
                    echo "Ocorreu um erro ao enviar a notificação!"."<br>";
                }
            }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    function send_mail1($email,$Subject,$message){
        $mailer_username="d24e1e90f8b0e00d00a8fbea436e4202";//$this->conn->company_info('mailer_username');
		$mailer_password="48ab46705c49278f273e89bc770db91c";//$this->conn->company_info('mailer_password');
		$mailer_setFrom=$this->conn->company_info('mailer_setFrom');
		$mailer_ReplyTo=$this->conn->company_info('mailer_ReplyTo');
		$company=$this->conn->company_info('title');
		
		//$this->load->library('email');  
	    $from_email=$mailer_setFrom; 
	    $config = array();
	   // $config['protocol']     = "smtp"; // you can use 'mail' instead of 'sendmail or smtp'
	    $config['smtp_host']    = "in-v3.mailjet.com";// you can use 'smtp.googlemail.com' or 'smtp.gmail.com' instead of 'ssl://smtp.googlemail.com'
	    $config['smtp_port']    =  25;
	    $config['smtp_timeout'] = '60';
	    $config['smtp_crypto']  = 'ssl';
	    
	    $config['smtp_user']    = $mailer_username; // client email gmail id
	    $config['smtp_pass']    = $mailer_password; // client password
	    
	    $config['charset']      = 'utf-8';
	    $config['newline']      = "\r\n";
	    $config['mailtype']     = "html";
	    $config['validate']     = TRUE;
	    $this->email->initialize($config); // intializing email library, whitch is defiend in system
	
	    $this->email->set_mailtype("html");
	
	    $this->email->from($from_email);
	    $this->email->to($email);
	    $this->email->subject($Subject); 
	    $msg='hello';//$this->temp($message,$Subject);
	    
	    $this->email->message($msg);  // we can use html tag also beacause use $config['mailtype'] = 'HTML'
	    //Send mail
	    if($this->email->send()){
	    	 return true;
	    }
	    else{
	         return false;
	    }
    }
  
     public function send_mail($email,$Subject,$message){

		$mailer_username='noreply@radiance.cromacapitals.org'; //$this->conn->company_info('mailer_username');
		$mailer_password='Nilesh123@#'; //$this->conn->company_info('mailer_password');
		$mailer_setFrom='noreply@radiance.cromacapitals.org';  //$this->conn->company_info('mailer_setFrom');
		$mailer_ReplyTo='noreply@radiance.cromacapitals.org';  //$this->conn->company_info('mailer_ReplyTo');
		$company=$this->conn->company_info('title');
		
		$this->load->library('email');  
	    $from_email=$mailer_setFrom; 
	    $config = array();
	    //$config['protocol']     = "smtp"; // you can use 'mail' instead of 'sendmail or smtp'
	    $config['smtp_host']    = "smtpout.secureserver.net";// you can use 'smtp.googlemail.com' or 'smtp.gmail.com' instead of 'ssl://smtp.googlemail.com'
	    $config['smtp_port']    =  465;
	    $config['smtp_timeout'] = '60';
	    $config['smtp_crypto']  = 'ssl';
	    
	    $config['smtp_user']    = $mailer_username; // client email gmail id
	    $config['smtp_pass']    = $mailer_password; // client password
	    
	    $config['charset']      = 'utf-8';
	    $config['newline']      = "\r\n";
	    $config['mailtype']     = "html";
	    $config['validate']     = TRUE;
	    $this->email->initialize($config); // intializing email library, whitch is defiend in system
	
	    $this->email->set_mailtype("html");
	
	    $this->email->from($from_email);
	    $this->email->to($email);
	    $this->email->subject($Subject); 
	    $msg=$this->temp($message,$Subject);
	    
	    $this->email->message($msg);  // we can use html tag also beacause use $config['mailtype'] = 'HTML'
	    //Send mail
	    if($this->email->send()){
	    	 return true;
	    
	    }
	    else{
	         return false;
	    }
}
 
	public function temp($message,$Subject){
		  
		
		 
		$mailer_ReplyTo=$this->conn->company_info('mailer_ReplyTo');
		$company=$this->conn->company_info('company_name');
		
		$res='<!docytpe html>
		<html>
		<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
		.container{
			padding:40px;
		}
		h1{
			text-align:center;
		}
		
		h2{
			text-align:center;
			background-color:#37326C;
			color:white;
		}
		
		h3{
			
			text-align:center;
			background-color:#FEC601;
			color:white;
		}
		
		h4{
			text-align:center;
			
			
		}
		h5{
			text-align:center;
		color:#ff8000;
		
		}
		P {
		font-family: "trebuchet MS";
		color: #222222; 
		font-size: 15pt;
		text-align: justify;  
		line-height: 18px;  
		
		margin-top: 10px;
		}
		
		.content-text {
		
		color: #222222; 
		font-size: 10pt;
		text-align: center;
		line-height: 20px; 
		
		}
		.email{
			color:blue;
		}
		</style>
		
		</head>
		<body>
		
		
				
				
			
		<div class="container">
		 
		
		         <h1>Important Message.</h1>             
		         <h2>'.$company.'</h2>             
		         <h3>'.$Subject.'</h3>
		
		
		 '.$message.'
		
		
				 
		      
		
		<hr>
		
		<h4>'.$company.'</h4>
		<h4>Ceo & Founder</h4>
		<h4>Email: <span class="email">'.$mailer_ReplyTo.'</span></h4>
		 
		
		<hr>
		<p class="content-text">The content of this email is confidential and intended for the recipient specified in message only. it is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. if you received this message by mistake, please reply  to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future. </p>
		
		 </div>       
				
		 
		  
		</body>
		</html>';
		 return $res;
	}
	 
	 
	 
	 
	
	
	 public function send_mail3($email,$Subject,$message) {

		$mailer_username='info@welifecare.co.in';
		$mailer_password='Raj@12345#';
		$mailer_setFrom='info@welifecare.co.in';
		$mailer_ReplyTo='info@welifecare.co.in';
		$company=$this->conn->company_info('title');
		
		//$this->load->library('email');  
	    $from_email=$mailer_setFrom; 
	    $config = array();
	   // $config['protocol']     = "smtp"; // you can use 'mail' instead of 'sendmail or smtp'
	    $config['smtp_host']    = "smtpout.secureserver.net";// you can use 'smtp.googlemail.com' or 'smtp.gmail.com' instead of 'ssl://smtp.googlemail.com'
	    $config['smtp_port']    =  465;
	    $config['smtp_timeout'] = '60';
	    $config['smtp_crypto']  = 'ssl';
	    
	    $config['smtp_user']    = $mailer_username; // client email gmail id
	    $config['smtp_pass']    = $mailer_password; // client password
	    
	    $config['charset']      = 'utf-8';
	    $config['newline']      = "\r\n";
	    $config['mailtype']     = "html";
	    $config['validate']     = TRUE;
	    $this->email->initialize($config); // intializing email library, whitch is defiend in system
	
	    $this->email->set_mailtype("html");
	
	    $this->email->from($from_email);
	    $this->email->to($email);
	    $this->email->subject($Subject); 
	    $msg=$this->temp3($message,$Subject);
	    
	    $this->email->message($msg);  // we can use html tag also beacause use $config['mailtype'] = 'HTML'
	    //Send mail
	    if($this->email->send()){
	    	 return true;
	    }
	    else{
	         return false;
	    }
}
	public function temp3($message,$Subject){
		  
		
		 
		$mailer_ReplyTo=$this->conn->company_info('mailer_ReplyTo');
		$company=$this->conn->company_info('company_name');
		
		$res='<!docytpe html>
		<html>
		<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
		.container{
			padding:40px;
		}
		h1{
			text-align:center;
		}
		
		h2{
			text-align:center;
			background-color:#37326C;
			color:white;
		}
		
		h3{
			
			text-align:center;
			background-color:#FEC601;
			color:white;
		}
		
		h4{
			text-align:center;
			
			
		}
		h5{
			text-align:center;
		color:#ff8000;
		
		}
		P {
		font-family: "trebuchet MS";
		color: #222222; 
		font-size: 15pt;
		text-align: justify;  
		line-height: 18px;  
		
		margin-top: 10px;
		}
		
		.content-text {
		
		color: #222222; 
		font-size: 10pt;
		text-align: center;
		line-height: 20px; 
		
		}
		.email{
			color:blue;
		}
		</style>
		
		</head>
		<body>
		
		
				
				
			
		<div class="container">
		 
		
		         <h1>Important Message.</h1>             
		         <h2>'.$company.'</h2>             
		         <h3>'.$Subject.'</h3>
		
		
		 '.$message.'
		
		
				 
		      
		
		<hr>
		
		<h4>'.$company.'</h4>
		<h4>Ceo & Founder</h4>
		<h4>Email: <span class="email">'.$mailer_ReplyTo.'</span></h4>
		 
		
		<hr>
		<p class="content-text">The content of this email is confidential and intended for the recipient specified in message only. it is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. if you received this message by mistake, please reply  to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future. </p>
		
		 </div>       
				
		 
		  
		</body>
		</html>';
		 return $res;
	}
	
	
	
	
	
	
	
    public function send_mail5($email,$Subject,$message) {

		$mailer_username='coinexperia5@gmail.com';    //$this->conn->company_info('mailer_username');
		$mailer_password='jkp3vy8i';      //$this->conn->company_info('mailer_password');
		$mailer_setFrom='coinexperia5@gmail.com';      //$this->conn->company_info('mailer_setFrom');
		$mailer_ReplyTo='coinexperia5@gmail.com';     //$this->conn->company_info('mailer_ReplyTo');
		$company=$this->conn->company_info('title');
		
		$this->load->library('email');  
	    $from_email=$mailer_setFrom; 
	    $config = array();
	    $config['protocol']     = "sendmail"; // you can use 'mail' instead of 'sendmail or smtp'
	    $config['smtp_host']    = "smtp.gmail.com";// you can use 'smtp.googlemail.com' or 'smtp.gmail.com' instead of 'ssl://smtp.googlemail.com'
	    $config['smtp_port']    =  465;
	    $config['smtp_timeout'] = '60';
	    $config['smtp_crypto']  = 'ssl';
	    
	    $config['smtp_user']    = $mailer_username; // client email gmail id
	    $config['smtp_pass']    = $mailer_password; // client password
	    
	    $config['charset']      = 'utf-8';
	    $config['newline']      = "\r\n";
	    $config['mailtype']     = "html";
	    $config['validate']     = TRUE;
	    $this->email->initialize($config); // intializing email library, whitch is defiend in system
	
	    $this->email->set_mailtype("html");
	
	    $this->email->from($from_email);
	    $this->email->to($email);
	    $this->email->subject($Subject); 
	    $msg=$this->temp5($message,$Subject);
	    
	    $this->email->message($msg);  // we can use html tag also beacause use $config['mailtype'] = 'HTML'
	    //Send mail
	    if($this->email->send()){
	    	 return true;
	    
	    }
	    else{
	         return false;
	    }
}
	public function temp5($message,$Subject){
		  
		
		 
		$mailer_ReplyTo=$this->conn->company_info('mailer_ReplyTo');
		$company=$this->conn->company_info('company_name');
		
		$res='<!docytpe html>
		<html>
		<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
		.container{
			padding:40px;
		}
		h1{
			text-align:center;
		}
		
		h2{
			text-align:center;
			background-color:#37326C;
			color:white;
		}
		
		h3{
			
			text-align:center;
			background-color:#FEC601;
			color:white;
		}
		
		h4{
			text-align:center;
			
			
		}
		h5{
			text-align:center;
		color:#ff8000;
		
		}
		P {
		font-family: "trebuchet MS";
		color: #222222; 
		font-size: 15pt;
		text-align: justify;  
		line-height: 18px;  
		
		margin-top: 10px;
		}
		
		.content-text {
		
		color: #222222; 
		font-size: 10pt;
		text-align: center;
		line-height: 20px; 
		
		}
		.email{
			color:blue;
		}
		</style>
		
		</head>
		<body>
		
		
				
				
			
		<div class="container">
		 
		
		         <h1>Important Message.</h1>             
		         <h2>'.$company.'</h2>             
		         <h3>'.$Subject.'</h3>
		
		
		 '.$message.'
		
		
				 
		      
		
		<hr>
		
		<h4>'.$company.'</h4>
		<h4>Ceo & Founder</h4>
		<h4>Email: <span class="email">'.$mailer_ReplyTo.'</span></h4>
		 
		
		<hr>
		<p class="content-text">The content of this email is confidential and intended for the recipient specified in message only. it is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. if you received this message by mistake, please reply  to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future. </p>
		
		 </div>       
				
		 
		  
		</body>
		</html>';
		 return $res;
	}
	 
	 

}

