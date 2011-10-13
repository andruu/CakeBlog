<?php
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
}
?>