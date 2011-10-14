<?php
class AppModel extends Model {
	
	public function __construct($id = false, $table = null, $ds = null) {
		$this->useDbConfig = Configure::read('Site.ENV');
		parent::__construct($id, $table, $ds);
	}
	
	public function slug_exists ($slug = null) {
		if ($this->findBySlug($slug)) {
			return true;
		} else {
			return false;
		}
	}
	
}