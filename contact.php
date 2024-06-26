<?php
	if (!isset($_SESSION)) session_start();		
	if(!$_POST) exit;
	
	//PHP Mailer
	require_once(dirname(__FILE__)."/tools/phpMailer/class.phpmailer.php");
	
	///////////////////////////////////////////////////////////////////////////

		//Simple Configuration Options
	
		//Enter name & email address that you want to emails to be sent to.
		//Example $toAddress = "example@yourdomain.com";
	
		$toName = "迪雅生活";
		$toAddress = "sldeer@sldeer.com";
	
		//Twitter Direct Message notification control
		//Set $twitter_active to false to disable, true to enable Twitter Notification
		$twitter_active = false;

		/*
		Get your consumer key and consumer secret from http://dev.twitter.com/apps/new
		Application Name: Ajax Contact Form
		Description: Ajax Contact Form Direct Messaging Funcionality
		Application Website: (your website address)
		Application Type: Browser
		Callback URL: (Blank)
		Default Access type: Read and Write
		*/
		$twitter_user = ""; //Your Twitter user name
		$consumer_key = "";
		$consumer_secret = "";

		//Access Token and Access Token Secret is under "Your access token"
		$token = "";
		$secret = "";
	
	///////////////////////////////////////////////////////////////////////////
	
	//Only edit below this line if either instructed to do so by the author or have extensive PHP knowledge.
	
	//Form Fields
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$verify = isset($_POST["verify"]) ? $_POST["verify"] : "";
	
	//Captcha
	$session_captcha = $_SESSION["captcha"];
	
	//Verify form
	$error = "";
	if ($verify!=$session_captcha) {
		//Verify captcha
		$error = "輸入的驗證碼錯誤>_<";
	} else {
		//Verify form fields
		if(trim($name)=="") {
			$error = "請輸入您的名字或公司名稱";
		} elseif(trim($email)=="") {
			$error = "請輸入您的e-mai";
		} elseif(!isEmail($email)) {
			$error = "您輸入的e-mail格式錯誤";
		} elseif(trim($phone)=="") {
			$error = "請輸入您的電話";
		} elseif(!is_numeric($phone)) {
			$error = "您輸入的電話號碼格式錯誤";
		} elseif(trim($message)=="") {
			$error = "請輸入您要詢問的內容喔^_^";
		}
		
		//Send message via E-mail
		if (!strlen($error)) {
			if(get_magic_quotes_gpc()) {
				$message = stripslashes($message);
			}
			
			$email_subject = "聯絡迪雅: ".$subject;
			
			$email_body = "<p>You have been contacted by <b>".$name."</b> with regards to <b>".$subject."</b>, who passed verification and the message is as follows.</p>
							<p>----------</p>
							<p>".preg_replace("/[\r\n]/i", "<br />", $message)."</p>
							<p>----------</p>
							<p>
								E-mail Address: <a href=\"mailto:".$email."\">".$email."</a>
								<br />Phone: <b>".$phone."</b>
							</p>";
			
			$objmail = new PHPMailer();
			
			//Use this line if you want to use PHP mail function
			$objmail->IsMail();
			
			//Use the codes below if you want to use SMTP mail
			/*			
			$objmail->IsSMTP();		
			$objmail->SMTPAuth = true;
			$objmail->Host = "mail.yourdomain.com";
			$objmail->Port = 587;	//You can remove that line if you don't need to set the SMTP port
			$objmail->Username = "example@yourdomain.com";
			$objmail->Password = "email_address_password";
			*/
			
			$objmail->From = $email;
			$objmail->FromName = $name;
			$objmail->AddAddress($toAddress, $toName);	
			$objmail->AddReplyTo($email, $name);
			$objmail->Subject = $email_subject;
			$objmail->MsgHTML($email_body);
			if(!$objmail->Send()) {
				$error = "Message sending error: ".$objmail->ErrorInfo;
			}	
		}
		
		//Twitter Direct Message
		if ($twitter_active) {
			$twitter_message = $name." - ".$message.". You can contact ".$name." via email, ".$email." or via phone ".$phone.".";
			twitterMessage($twitter_user, $twitter_message, $consumer_key, $consumer_secret, $token, $secret);
		}
	}
	
	//Result
	if ($error!="") {
		echo $error."<script>notificationReady('fail');</script>";
	} else {
		echo " <strong>".$name."</strong>謝謝您的來信, 您的詢問內容已成功寄至我們的信箱,請稍待我們會回覆給您!
				<script>notificationReady('success');</script>";
	}
	
	//Check if e-mail address
	function isEmail($value) {
		return preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $value);
	}
	
	//Twitter Direct Message
	function twitterMessage($user, $message, $consumer_key, $consumer_secret, $token, $secret) {
		require_once(dirname(__FILE__)."/tools/twitter/EpiCurl.php");
		require_once(dirname(__FILE__)."/tools/twitter/EpiOAuth.php");
		require_once(dirname(__FILE__)."/tools/twitter/EpiTwitter.php");
		
		//Authorize	
		$objTwitter = new EpiTwitter($consumer_key, $consumer_secret, $token, $secret);
		
		//Send message
		$direct_message = $objTwitter->post_direct_messagesNew( array('user' => $user, 'text' => $message));
		
		//Response text
		$tweet_info = $direct_message->responseText;
	}
?>