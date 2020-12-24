<?php

include 'includes/config.php';

$email = trim(strtolower($_GET['email']));

$errors = array();

if(!empty($email)){
	mysql_connect($config['Database']['server'], $config['Database']['username'], $config['Database']['password']) or die(mysql_error());
	mysql_select_db($config['Database']['database']) or die(mysql_error());

	$dups = mysql_num_rows(mysql_query("SELECT * FROM `users` WHERE `email` = '".$email."' AND `is_subscribed` = 1"));

	if($dups >= 1){
		$sql = "UPDATE users SET is_subscribed='4' WHERE email='".$email."'";
		if (mysql_query($sql)) {
			$output = array('success' => '1', 'message' => 'Registration was successful, Thank you!');

			$html = '';

			$html .= '<p>Thank-you for your interest in Tiffany Hill Phase 3. We have received your information and will keep you up to date with the latest community news and progress.<p>';
			$html .= '<p>Please ensure that no-reply@tiffanyhill.ca is on your safe senders list.<p>';
			$html .= '<p>Thank you again and we look forward to being in touch.<p>';
			$html .= '<p>Regards,<br />Tiffany Hill</p>';

			$data['to'] = $email;
			$data['from'] = 'no-reply@tiffanyhill.ca';
			$data['subject'] = 'Thank-you for your interest in Tiffany Hill Phase 3!';
			$data['html'] = $html;
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: Tiffany Hill<'.$data['from'].'>' . "\r\n";
			
			mail($data['to'], $data['subject'], $data['html'], $headers);
		}
	}
}
header("Location: http://tiffanyhill.ca/confirm");
exit;