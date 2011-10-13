<?php

class DATABASE_CONFIG {

	public $development = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => 'alottola',
		'database' => 'cakeblog',
		'prefix' => '',
		//'encoding' => 'utf8',
	);

	public $production = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'ec2-174-129-255-219.compute-1.amazonaws.com',
		'port' => '3420',
		'login' => 'dizz',
		'password' => 'alottola',
		'database' => 'cakeblog',
		'prefix' => '',
		//'encoding' => 'utf8',
	);

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
		'prefix' => '',
		//'encoding' => 'utf8',
	);
}
