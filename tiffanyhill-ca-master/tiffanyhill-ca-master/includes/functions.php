<?php

function sendgrid($data) {
	if (empty($data['to']) || empty($data['subject']) || empty($data['html'])) {
		return false;
	}
	
	if (empty($data['from'])) {
		$data['from'] = 'no-reply@' . str_replace('www.', '', $_SERVER['SERVER_NAME']);
	}
	
	$params = array(
		'api_user' => 'engien_tiffhill',
		'api_key' => 'v9UXY2FbXk',
		'to' => $data['to'],
		'subject' => $data['subject'],
		'html' => $data['html'],
		'from' => $data['from']
	);


	$request = 'http://sendgrid.com/api/mail.send.json';

	$session = curl_init($request);
	curl_setopt($session, CURLOPT_POST, true);
	curl_setopt($session, CURLOPT_POSTFIELDS, $params);
	curl_setopt($session, CURLOPT_HEADER, false);
	curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

	// Obtain response
	$result = curl_exec($session);
	curl_close($session);
    $response = json_decode($result, true);
	
	// Use php mail as fallback
	if ($response['message'] != 'success') {
		$headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: Rosehaven Homes <'.$data['from'].'>' . "\r\n";

        mail($data['to'], $data['subject'], $data['html'], $headers);
		$response['fallback'] = 'Sendgrid failed, using php mail';
	}
	
	return $response;
}

function getUrlVar(){
	$var=explode("?",$_SERVER['REQUEST_URI']);
	if(isset($var[1])){
		$var1=explode("&", $var[1]);
		foreach($var1 as $var){
			$res=explode("=", $var);
			$_GET[$res[0]]=$res[1];
		}
	}
}