<?php 

require_once('PHPMailer-master/PHPMailerAutoload.php');

 echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n";


		$mail = new PHPMailer;
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->SMTPDebug = 2;
		
		$mail->Host = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
		$mail->Username = 'mohammedadil755@gmail.com';            // SMTP username
		$mail->Password = '30111995';                     // SMTP password
		$mail->SMTPSecure = 'tls';                            	// Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    	// TCP port to connect to
	$email='mohammedadil755@gmail.com';
        $user='adil';
        $name="MOhammed aidl moughal";
        $message="I ama awesome you niggger";
		$mail->From = $email;
		$mail->FromName = $user;
		$mail->addAddress('mohammedadil755@gmail.com', 'Ibrahim Stamili');
		$mail->SetFrom($email, $user);
		$mail->addReplyTo($email, $user);
		
		$mail->Subject = $name;
		$mail->Body = $message;
		$mail->AltBody = $message;
                $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
                $mail->Host = 'tls://smtp.gmail.com:587';
                $mail->SMTPAutoTLS = false;
		
		if (!$mail->send()){
			//mail not sent
			echo '	<div class="alert alert-error" id="inputerror">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Error!</strong>' .$mail->ErrorInfo.' 
						</div>
				';
			
			
		}else{
			//mail sent
			echo '	<div class="alert alert-success" id="inputerror">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Success!</strong>Your email was sent. Thank you for your feedback. 
						</div>
				';
		}
	
?>