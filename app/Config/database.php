<?php

class DATABASE_CONFIG {
	
	public function __construct () {
		$this->production = array(
			'datasource' => 'Database/Mysql',
			'persistent' => false,
			'host' => env('DB_HOST'),
			'port' => env('DB_PORT'),
			'login' => env('DB_USER'),
			'password' => env('DB_PASS'),
			'database' => 'cakeblog',
			'prefix' => '',
			//'encoding' => 'utf8',
		);
	}

	public $development = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
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
