<?php
/**
 * AddPosts Migration
 *
 * @since 10/13/2011 09:06:01
 */
class AddPosts extends AppMigration {

/**
 * Up Method
 *
 * @return void
 * @access public
 */
	function up() {
		$this->createTable('posts', array(
			'user_id' => 'integer',
			'title' => 'string',
			'slug' => 'string',
			'body' => 'text'
		));
	}

/**
 * Down Method
 *
 * @return void
 * @access public
 */
	function down() {
		$this->dropTable('posts');
	}
}
