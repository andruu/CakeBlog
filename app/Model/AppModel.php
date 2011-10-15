<?php
class AppModel extends Model {
	
	public function __construct($id = false, $table = null, $ds = null) {
		$this->useDbConfig = Configure::read('Site.ENV');
		parent::__construct($id, $table, $ds);
	}
	
	/**
	 * Wrapper find to cache sql queries
	 * @param array $conditions
	 * @param array $fields
	 * @param string $order
	 * @param string $recursive
	 * @return array
	 */
	function find($conditions = null, $fields = array(), $order = null, $recursive = null) {
		if (Configure::read('Cache.disable') === false && Configure::read('Cache.check') === true && isset($fields['cache']) && $fields['cache'] !== false) {
			$key = $fields['cache'];
			$expires = '+1 hour';

			if (is_array($fields['cache'])) {
				$key = $fields['cache'][0];

				if (isset($fields['cache'][1])) {
					$expires = $fields['cache'][1];
				}
			}

			// Set cache settings
			Cache::config('sql_cache', array(
				'prefix' 	=> strtolower($this->name) .'-',
				'duration'	=> $expires
			));

			// Load from cache
			$results = Cache::read($key, 'sql_cache');

			if (!is_array($results)) {
				$results = parent::find($conditions, $fields, $order, $recursive);
				Cache::write($key, $results, 'sql_cache');
			}

			return $results;
		}

		// Not cacheing
		return parent::find($conditions, $fields, $order, $recursive);
	}
	
	public function slug_exists ($slug = null) {
		if ($this->findBySlug($slug)) {
			return true;
		} else {
			return false;
		}
	}
	
}