<?php
date_default_timezone_set('EST5EDT');

if($_SERVER['SERVER_NAME']=='localhost'){
	$database='rosehaven_tiffany_hill';
	$user='root';
	$pass='';
}else if($_SERVER['SERVER_NAME']=='tiffanyhill.ca' || $_SERVER['SERVER_NAME']=='www.tiffanyhill.ca'){
	$database='rosehave_nhomes_2017';
	$user='rosehave_tiffany';
	$pass='rHfgcxf4B57&m@*5S-exE%eG@GCVAYzNnAC9Cg+Gf_B_CUdZh^&htK4E9-Cgtr$Z7w#byPPK-d#VjyMVWE$Cae*eES!kX!#NG9*a';
}else if($_SERVER['SERVER_NAME']=='production.impactnorth.com'){
	$database='impactno_tiffany_hill';
	$user='impactno_master';
	$pass='U5ntV&tIdR3m';
}

$config = array(
	'Database' => array(
		'server' => 'localhost',
		'username' => $user,
		'password' => $pass,
		'database' => $database,
		'Casl' => array(
			'server' => 'localhost',
			'username' => 'rosehave_tiffany',
			'password' => 'rHfgcxf4B57&m@*5S-exE%eG@GCVAYzNnAC9Cg+Gf_B_CUdZh^&htK4E9-Cgtr$Z7w#byPPK-d#VjyMVWE$Cae*eES!kX!#NG9*a',
			'database' => 'rosehave_nhomes_2017'
		)
	),
	'Site' => array(
		'name' => 'Tiffany Hill',
		'url' => rtrim(dirname($_SERVER['PHP_SELF']), '/'),
		'email' => 'ecast@tiffanyhill.ca'
	),
);

$config['Site']['url']="http://".$_SERVER['SERVER_NAME'].$config['Site']['url'];
