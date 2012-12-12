<?php
App::uses('Assignment', 'Model');

/**
 * Assignment Test Case
 *
 */
class AssignmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.assignment',
		'app.upload_by',
		'app.submit_by'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Assignment = ClassRegistry::init('Assignment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Assignment);

		parent::tearDown();
	}

}
