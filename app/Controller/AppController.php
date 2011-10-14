<?php
// Set base path
define('BASE_PATH', Router::url('/'));
class AppController extends Controller {
	public $components = array(
		'Auth' => array(
			'flash' => array(
				'element' => 'default',
				'key' => 'auth',
				'params' => array(
					'class' => 'alert-message warning'
				)
			),
			'authenticate' => array(
				'Form' => array(
					'fields' => array('username' => 'email')
				)
			)
		),
		'Session',
		'DebugKit.Toolbar',
	);
	
	public $helpers = array(
		'Js' => array('Jquery'),
		'Html',
		'Form',
		'Session',
	);
}
?>