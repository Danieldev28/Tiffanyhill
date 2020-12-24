<?php
$db = mysqli_connect($config['Database']['server'], $config['Database']['username'], $config['Database']['password'], $config['Database']['database']) or die(mysqli_error());