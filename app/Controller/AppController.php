<?php
// Set base path
define('BASE_PATH', Router::url('/'));
class AppController extends Controller {
	public $components = array(
		'Session',
		'DebugKit.Toolbar',
		'Auth' => array(
			'authenticate' => array(
				'Form' => array(
					'fields' => array('username' => 'email')
				)
			)
		)
	);
	
	public $helpers = array(
		'Js' => array('Jquery'),
		'Html',
		'Form',
		'Session',
	);
}
?>