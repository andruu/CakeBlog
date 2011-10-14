<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */
class Post extends AppModel {
	
	public $validate = array(
		'user_id' => array(
			'rule' => array('numeric')
		),
		'title' => array(
			'between' => array(
				'rule' => array('between', 5, 100),
				'message' => array('Post title must be between 5 and 100 characters.')
			),
			'unique' => array(
				'rule' => array('isUnique'),
				'message' => array('Post title is already taken.')
			)
		),
		'slug' => array(
			'between' => array(
				'rule' => array('between', 5, 100),
				'message' => array('Post slug must be between 5 and 100 characters.')
			),
			'unique' => array(
				'rule' => array('isUnique'),
				'message' => array('Post slug is already taken.')
			)
		),
		'body' => array(
			'rule' => array('notEmpty')
		)
	);
	
	public function beforeSave ($options = array()) {
		$this->data['Post']['user_id'] = AuthComponent::user('id');
		return true;
	}
}
