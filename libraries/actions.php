<!DOCTYPE html>
<html>
<?php 

if (isset($_POST["action"])) {
	$action = $_POST["action"];

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX Contact Me XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

	if ($action == "contact_form") {

		// Sanitize Strings
			$form_name = filter_var($_POST['contact_name'], FILTER_SANITIZE_STRING);
			$form_email = filter_var($_POST['contact_mail'], FILTER_SANITIZE_EMAIL);
			$form_message = filter_var($_POST['contact_text'], FILTER_SANITIZE_STRING);

	    // SPAM FILTERS
			if (preg_match('/viagra|poker|casino|bitcoin|http|и/', strtolower($form_message))
			OR  preg_match('/viagra|poker|casino|bitcoin|http|и/', strtolower($form_name))
			) {
                echo "<meta http-equiv=\"refresh\" content=\"1; URL='https://".$_SERVER['HTTP_HOST']."' \" />";
				echo '<br><br><br>PWeb SPAM Protection - Invalid Message!';
                exit();
            }  
            if ($_SESSION['token'] !== $_POST["token"]) {
                echo "<meta http-equiv=\"refresh\" content=\"1; URL='https://".$_SERVER['HTTP_HOST']."' \" />";
				echo '<br><br><br>Invalid Session!';
                exit();
			}
	
		// Notification Email			
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
			$headers .= "From: admin@yourcoach.ie" . "\r\n" .
			"Reply-To: admin@yourcoach.ie" . "\r\n" .
			"X-Mailer: PHP/" . phpversion();	
			$subject = "Contact Form Request";
			$message = '<html><body>';
			$message = '<img src="https://yourcoach.ie/resources/img/logos/logo_2020.png" width="20%" />';	
			$message .= '<h2 style="color: #008551";>New Contact Form Request</h2>';
			$message .= '<p><span style="color:#0078ae;"><b>Gravatar:</b></span><br>';
			$message .= '<img src="https://www.gravatar.com/avatar/'.md5(strtolower(trim($form_email))).'size=350">';
			$message .= '<br><br><span style="color:#0078ae;"><b>Name:</b></span> '.$form_name;
			$message .= '<br><span style="color:#0078ae;"><b>Email:</b></span> '.$form_email;
			$message .= '<br><span style="color:#0078ae;"><b>Message:</b></span><br>'.$form_message;
			$message .= '</p></body></html>';
			mail($_yourcoach_mail_to,$subject,$message,$headers);
		
		// Add to Database
			$yourcoach_db->form_message($form_name, $form_email, $form_message, 'website_message');
	}


// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX Subscribe Me XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

	elseif($action == "subscribe_me") {
		
		// Sanitize Strings
			$form_name = filter_var($_POST['contact_name'], FILTER_SANITIZE_STRING);
			$form_email = filter_var($_POST['contact_mail'], FILTER_SANITIZE_EMAIL);
			$form_message = filter_var($_POST['contact_text'], FILTER_SANITIZE_STRING);

		// Email alert
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
			$headers .= "From: admin@yourcoach.ie" . "\r\n" .
			"Reply-To: admin@yourcoach.ie" . "\r\n" .
			"X-Mailer: PHP/" . phpversion();
			$subject = "New Subscriber";			
			$message = '<html><body>';
			$message = '<img src="https://yourcoach.ie/resources/img/logos/logo_2020.png" width="20%" />';	
			$message .= '<h2 style="color: #008551";>New Subscriber</h2>';
			$message .= '<p><span style="color:#0078ae;"><b>Gravatar:</b></span><br>';
			$message .= '<img src="https://www.gravatar.com/avatar/'.md5(strtolower(trim($_POST['contact_mail']))).'size=350">';
			$message .= '<br><br><span style="color:#0078ae;"><b>Name:</b></span> '.$_POST["contact_name"];
			$message .= '<br><span style="color:#0078ae;"><b>Email:</b></span> '.$_POST["contact_mail"];
			$message .= '</p></body></html>';
			mail($_yourcoach_mail_to,$subject,$message,$headers);

		// Insert into Database
			$yourcoach_db->form_subscribe($form_name, $form_email, 'website_subscribe_me', $_SESSION['token']);
	}

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX Done XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

}
else {echo "failed!";}
	
?>

</html>
