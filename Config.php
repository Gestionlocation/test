<?php
class Conf{
	
	static $debug = 1;
	
	static $databases = array(
		'ma' => array(
			'host' => 'localhost',
			'database' => 'getit',
			'user' => 'root',
			'password' => ''
			
		),
		'ar' => array(
			'host' => 'localhost',
			'database' => 'adminv2',
			'user' => 'root',
			'password' => ''
			
		),
		'default' => array(
			'host' => 'localhost',
			'database' => 'adminv2',
			'user' => 'root',
			'password' => ''
			
		),
		'langue' =>array(
			'host' => 'localhost',
			'database' => 'item',
			'user' => 'root',
			'password' => ''
		)
	);
	
	static $lang = "ma";
	static $langarray = array('fr','en','ma','ar');
	static $notloadlayout = array('login','test404');
}


?>