<?php
/**
 * AddUsers Migration
 *
 * @since 10/13/2011 09:02:47
 */
class AddUsers extends AppMigration {

/**
 * Up Method
 *
 * @return void
 * @access public
 */
	function up() {
		$this->createTable('users', array(
			'name' => 'string',
			'email' => 'string',
			'password' => 'string'
		));
	}

/**
 * Down Method
 *
 * @return void
 * @access public
 */
	function down() {
		$this->dropTable('users');
	}
}
