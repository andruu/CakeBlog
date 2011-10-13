<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Mongodb.MongodbSource',
		'host' => 'staff.mongohq.com',
		'database' => 'app1447600',
		'port' => 10021,
		'prefix' => '',
		'persistent' => 'true',
		'login' => 'dizz', 
		'password' => 'alottola',
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
