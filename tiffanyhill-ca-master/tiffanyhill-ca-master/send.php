<?php
	include 'includes/config.php';
	include 'includes/database.php';
	$brokerage='';
	$name = @ucwords(strtolower(trim($_POST['name'])));
	$phone = str_replace(array('(', ')', '-', ' ', '.'), '', @trim($_POST['phone']));
	$email = @trim(strtolower($_POST['email']));
	$message = @$_POST['message'];
	$casl = @$_POST['casl'];
	$howHear = @$_POST['howhear'];
	$realtor= @(int)$_POST['realtor'];
	if(isset($_POST['brokerage'])){
		$brokerage=@ucwords(strtolower(trim($_POST['brokerage'])));
	}



	if (empty($name)) {
		$output = array('success' => '0', 'element' => 'name', 'message' => 'Please enter your full name.');
	} elseif (strcspn($name, '0123456789') != strlen($name)) {
		$output = array('success' => '0', 'element' => 'first_name', 'message' => 'Please enter your full name.');
	} elseif (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$output = array('success' => '0', 'element' => 'email', 'message' => 'Please enter an valid email address.');
	}elseif (empty($howHear) ) {
		$output = array('success' => '0', 'element' => 'email', 'message' => 'Please tell us how did you hear about us?');
	} elseif (empty($casl)) {
		$output = array('success' => '0', 'element' => 'name', 'message' => 'In accordance with Canadian Anti-Spam Legislation, you must consent to receive electronic communications.');
	}elseif (empty($realtor)) {
		$output = array('success' => '0', 'element' => 'name', 'message' => 'Please select If you are a realtor/broker or not.');
	}elseif ($realtor==1 && empty($brokerage)) {
		$output = array('success' => '0', 'element' => 'name', 'message' => 'Please enter your brokerage.');
	} else {
		if($realtor==2){
			$realtor=0;
		}
		$name = mysqli_real_escape_string($db, $name);
		$phone = mysqli_real_escape_string($db, $phone);
		$email = mysqli_real_escape_string($db, $email);
		$howHear = mysqli_real_escape_string($db, $howHear);

		$dups = mysqli_num_rows(mysqli_query($db, "SELECT * FROM `exp_registrations` WHERE `email` = '".$email."' AND `community` = 'Tiffany Hill' "));
		if($dups >= 1){
			$output = array('success' => '0', 'element' => '', 'message' => 'You have already registered for Tiffany Hill.');
		}else{
			$full_name = explode(' ', $name);
			if(!isset($full_name[1])){ $full_name[1] = ''; }
			$sql = 'INSERT INTO exp_registrations(`first_name`, `last_name`, `email`, `heard_from`, `phone`, `community`, `is_broker`, `brokerage`, `created`, `modified`) VALUES("' . $full_name[0] . '", "' . $full_name[1] . '", "' . $email . '", "'.$howHear.'", "' . $phone . '", "Tiffany Hill", "'.$realtor.'", "'.$brokerage.'", "' . date("Y-m-d H:i:s") . '", "' . date("Y-m-d H:i:s") . '")';
			if (mysqli_query($db, $sql)) {
				if(!empty($message)){
					$data['html'] = '<html><body>';
					$data['html'] .= '<p class="color:#000;line-height:1.2;font-family:Helvetica, sans-serif;font-size:14px;"><strong>Name</strong>: ' . $name . '<br />';
					$data['html'] .= '<strong>Phone</strong>: ' . $Phone . '<br />';
					$data['html'] .= '<strong>Email</strong>: ' . $Email . '</p>';
					$data['html'] .= '<pre class="color:#000;line-height:1.2;font-family:Helvetica, sans-serif;font-size:14px;white-space:pre-wrap;">' . $name . '</pre>';
					$data['html'] .= '</body></html>';
					//$data['to'] = 'tiffanyhill@rosehavenhomes.com';
					$data['to'] = 'yadimpact@gmail.com';
					$data['from'] = $email;
					$data['subject'] = 'Contact from Tiffany Hill Website';
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= 'From: '.$name.'<'.$data['from'].'>' . "\r\n";
					mail($data['to'], $data['subject'], $data['html'], $headers);
				}

				$lead = new stdClass();
				$lead->email = $email;
				$lead->firstName = $full_name[0];
				$lead->lastName = $full_name[1];
				$lead->communityInterestTiffanyHill = true;
				$lead->cASL = true;
				$lead->unsubscribed = false;
				$lead->cASLReason = 'Website';
				$lead->leadSource=$howHear;
				$lead->agent=false;
				if($realtor==1){
						$lead->agent=true;
				}

				if($brokerage!=''){
					$lead->company=$brokerage;
				}

				class PushLeads{
					private $host = "https://229-MZC-921.mktorest.com";
					private $clientId = "c0469ee8-ee3f-42aa-940e-b84a7c8bdca1";
					private $clientSecret = "7hnf1BlH77k9cFFShJi1aGKBEQFQdGie";
					public $input;
					public $programName;
					public $lookupField;
					public $reason;
					public $source;

					public function postData(){
						$url = $this->host . "/rest/v1/leads.json?access_token=" . $this->getToken();
						$ch = curl_init($url);
						$requestBody = $this->bodyBuilder();
						curl_setopt($ch, CURLOPT_URL, $url);
						curl_setopt($ch,  CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_HEADER, false);
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
						curl_setopt($ch, CURLOPT_HTTPHEADER, array('accept: application/json','Content-Type: application/json'));
						curl_setopt($ch, CURLOPT_POST, 1);
						if($requestBody!=''){
							curl_setopt($ch, CURLOPT_POSTFIELDS, $requestBody);
						}
						$response = curl_exec($ch);
						if(empty($response))die("Error: No response.");
						else
						{
							$json = json_decode($response);
						}
						curl_close($ch);
						return $json;
					}
					private function getToken(){
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL, $this->host . "/identity/oauth/token");
						curl_setopt($ch, CURLOPT_HEADER, false);
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
						curl_setopt($ch, CURLOPT_POST, true);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch, CURLOPT_USERPWD, $this->clientId.":".$this->clientSecret);
						curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
						curl_setopt($ch, CURLOPT_HTTPHEADER, array('accept: application/json'));
						$response = curl_exec($ch);
						if(empty($response))die("Error: No response.");
						else
						{
							$json = json_decode($response);
						}
						curl_close($ch);
						$token = $json->access_token;
						return $token;

					}
					private function bodyBuilder(){
						$body = new stdClass();
						if (isset($this->action)){
							$body->action = $this->action;
						}
						if (isset($this->lookupField)){
							$body->lookupField = $this->lookupField;
						}
						$body->input = $this->input;
						$json = json_encode($body);
						return $json;
					}
				}
				$upsert = new PushLeads();
				$upsert->action = "createOrUpdate";
				$upsert->lookupField = "email";
				$upsert->input = array($lead);
				$upsert->postData();

				$output = array('success' => '1', 'element' => '', 'message' => 'Thank you for registering for Tiffany Hill. Please add ecast@rosehavenhomes.com to your safe contact list so we&#8217;ll land in your inbox.');
			}else{
				$output = array('success' => '0', 'element' => '', 'message' => 'We&#8217;re experiencing technical difficulties at the moment.');
			}
		}
	}
	echo json_encode($output);
	exit;
?>
