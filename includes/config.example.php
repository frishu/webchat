<?php

$config = [
	
	'host' => 'localhost',
	'username' => '',
	'passwd' => ''
	'dbname' => ''

];

$db = new mysqli($config['host'], $config['username'], $config['passwd'], $config['dbname']);

