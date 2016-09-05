<?php

		
		error_reporting(0);
		require 'PHPMailer-master/PHPMailerAutoload.php';

		

		class Mailer{

			public $bodyMain;

		public function __construct($bodyMain){

	
			$this->Email($this->$bodyMain = $bodyMain);



		}


		public function Email($body){

			$mail = new PHPMailer(); 
			$mail->IsSMTP(); 

			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'ssl'; 
			$mail->Host = "smtp.gmail.com";
			$mail->Port = 465; // or 587
			$mail->IsHTML(true);
			$mail->Username = "#";
			$mail->Password = "#";
			$mail->SetFrom("#");
			$mail->Subject = "#";
			$mail->Body = $body;
			$mail->AddAddress("#");



			if(!$mail->send()){
				echo('Mail Not Sent'.'<br>'. $mail->ErrorInfo);
			}else{
				echo('Mail Sent');
			}

				
			}


		}


		$mail = new Mailer("Message Content");

		echo ($mail);



?>