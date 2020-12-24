<?php

include 'includes/config.php';


$email = @trim(strtolower($_POST['email']));
$confirm_email = @trim(strtolower($_POST['cemail']));

if (empty($email)) {
	$output = array('success' => '0', 'element' => 'email', 'message' => 'Email can\'t be empty');
} elseif (empty($confirm_email)) {
	$output = array('success' => '0', 'element' => 'confirm_email', 'message' => 'Confirmation Email can\'t be empty');
} elseif ($email !== $confirm_email) {
	$output = array('success' => '0', 'element' => '', 'message' => 'The emails you have entered does not match');
} else {
	mysql_connect($config['Database']['server'], $config['Database']['username'], $config['Database']['password']) or die(mysql_error());
	mysql_select_db($config['Database']['database']) or die(mysql_error());

	$email = mysql_real_escape_string($email);
	$confirm_email = mysql_real_escape_string($confirm_email);

	$find = "SELECT * FROM users WHERE `email`= '$email' AND is_subscribed IN (1,3)";
	if(mysql_num_rows(mysql_query($find)) == 0) {
		$output = array('success' => '0', 'element' => '', 'message' => 'The email you have entered do not match any in our records.');
	}
	else{
		if($email == $confirm_email){ $sql = "UPDATE users SET is_subscribed=0 WHERE email='".$email."'"; }
		if (mysql_query($sql)) {
			$output = array('success' => '1', 'message' => 'Thank You! You have unsubscribed from Tiffany Hill and will no longer be receiving any information or updates. If you wish to register again, please fill out our registration page.');	
		} 
	}
}

echo json_encode($output);
exit;