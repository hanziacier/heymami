<?php

return array (
	'default' => array (
		'hostname' => $_SERVER['SINASRV_DB_HOST'],
		'database' => $_SERVER['SINASRV_DB_NAME'],
		'username' => $_SERVER['SINASRV_DB_USER'],
		'password' => $_SERVER['SINASRV_DB_PASS'],
		'tablepre' => 'hey_',
		'charset' => 'utf8',
		'type' => 'mysql',
		'debug' => true,
		'pconnect' => 0,
		'autoconnect' => 0
		),
);

?>