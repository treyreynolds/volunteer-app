<?php
App::uses('UserGroupsController', 'Controller');

/**
 * TestUserGroupsController *
 */
class TestUserGroupsController extends UserGroupsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * UserGroupsController Test Case
 *
 */
class UserGroupsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_group');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserGroups = new TestUserGroupsController();
		$this->UserGroups->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserGroups);

		parent::tearDown();
	}

}
