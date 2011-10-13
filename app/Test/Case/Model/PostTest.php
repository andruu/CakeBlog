<?php
/* Post Test cases generated on: 2011-10-13 09:07:52 : 1318511272*/
App::uses('Post', 'Model');

/**
 * Post Test Case
 *
 */
class PostTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.post');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Post = ClassRegistry::init('Post');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Post);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
