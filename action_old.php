<?php 
session_start(); 
$token = bin2hex(random_bytes(32));
$_SESSION['token'] = $token;

// Importing classes
require "./classes/class_db_yourcoach.php";
$yourcoach_db = new YourCoach_DB;
?>

<!DOCTYPE html>
<html>
<?php 

const Curl_Add_Message = "https://pweb.solutions/api/yourcoachstudio/addnewmessage/";
const Curl_Add_Client = "https://pweb.solutions/api/yourcoachstudio/addnewclient/";

if (isset($_POST["action"])) {
	$action = $_POST["action"];

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX Contact Me XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

if ($action == "contact_form") {

	$contact_text = $_POST["contact_text"];
	$contact_mail = $_POST["contact_mail"];
	$contact_name = $_POST["contact_name"];

	/*
	$gravemail = md5( strtolower( trim( $_POST["contact_mail"] ) ) );
	$gravsrc = "http://www.gravatar.com/avatar/".$gravemail;
	$gravcheck = "http://www.gravatar.com/avatar/".$gravemail."?d=404";
	$response = get_headers($gravcheck);
	print_r($response);
	if ($response[0] != "HTTP/1.0 404 Not Found"){
		$gravimg = $gravsrc;
	}
	*/
		
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "From: admin@yourcoach.ie" . "\r\n" .
	"Reply-To: admin@yourcoach.ie" . "\r\n" .
	"X-Mailer: PHP/" . phpversion();
	
	$to = "patrick.pulfer1@gmail.com, info@yourcoach.ie, patrick@pweb.solutions";
	$subject = "Contact Form Request";
	
	$message = '<html><body>';
	$message = '<img src="https://yourcoach.ie/resources/img/logos/logo1.png" width="20%" />';	
	$message .= '<h2 style="color: #008551";>New Contact Form Request</h2>';
	$message .= '<p><span style="color:#0078ae;"><b>Gravatar:</b></span><br>';
	$message .= '<img src="https://www.gravatar.com/avatar/'.md5(strtolower(trim($_POST['contact_mail']))).'size=350">';
	$message .= '<br><br><span style="color:#0078ae;"><b>Name:</b></span> '.$_POST["contact_name"];
	$message .= '<br><span style="color:#0078ae;"><b>Email:</b></span> '.$_POST["contact_mail"];
	$message .= '<br><span style="color:#0078ae;"><b>Message:</b></span><br>'.$_POST["contact_text"];
	$message .= '</p></body></html>';
		
	mail($to,$subject,$message,$headers);
	
	$yourcoach_db->form_message($contact_name, $contact_mail, $contact_text, 'website_message', $_SESSION['token']);

}


// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX Subscribe Me XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

elseif($action == "subscribe_me") {
	
	// Email alert
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
		$headers .= "From: admin@yourcoach.ie" . "\r\n" .
		"Reply-To: admin@yourcoach.ie" . "\r\n" .
		"X-Mailer: PHP/" . phpversion();
		
		$to = "patrick.pulfer1@gmail.com, info@yourcoach.ie, patrick@pweb.solutions";
		$subject = "Contact Form Request";
		
		$message = '<html><body>';
		$message = '<img src="https://yourcoach.ie/resources/img/logos/logo1.png" width="20%" />';	
		$message .= '<h2 style="color: #008551";>New Subscriber</h2>';
		$message .= '<p><span style="color:#0078ae;"><b>Gravatar:</b></span><br>';
		$message .= '<img src="https://www.gravatar.com/avatar/'.md5(strtolower(trim($_POST['contact_mail']))).'size=350">';
		$message .= '<br><br><span style="color:#0078ae;"><b>Name:</b></span> '.$_POST["contact_name"];
		$message .= '<br><span style="color:#0078ae;"><b>Email:</b></span> '.$_POST["contact_mail"];
		$message .= '</p></body></html>';
		mail($to,$subject,$message,$headers);

	// Insert into Database
		echo $yourcoach_db->form_subscribe($_POST["contact_name"], $_POST["contact_mail"], 'website_subscribe', $_SESSION['token']);


/*

		$contact_mail = $_POST["contact_mail"];
		$contact_name = $_POST["contact_name"];

$curl_post_data2 = json_encode(
    array(
        'Password' => 'r6myrR7RYsMUZeu9',
	 			'Source' => 'website_subscribe_me',
				'Customer' => array(
						'Name' => $contact_name,
						'Email' => $contact_mail,
						)
		)
	);

$ch = curl_init();

curl_setopt_array($ch, array(
	CURLOPT_URL => Curl_Add_Client,
	CURLOPT_RETURNTRANSFER => TRUE,
  CURLOPT_POST => true,
	CURLOPT_POSTFIELDS => $curl_post_data2,
	CURLOPT_HTTPHEADER => array(
          'Content-Type: application/json',
	)
));

$response = curl_exec($ch);
 
if ($response === false){
   $response = curl_error($ch);
   echo stripslashes($response);
 }

curl_close($ch);
	
	echo "<head>";
	echo "<meta http-equiv=\"refresh\" content=\"0; URL='https://www.yourcoach.ie/?p=thanks' \" />";
	echo "</head><body>Processing...</body>";
*/
	
}

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX Done XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

else {
	header("Location: https://www.yourcoach.ie");
	die();
}
	
}
else {
	echo "failed!";	
}
	
?>

</html>
