<?php
App::uses('SubmitAssignment', 'Model');

/**
 * SubmitAssignment Test Case
 *
 */
class SubmitAssignmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.submit_assignment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubmitAssignment = ClassRegistry::init('SubmitAssignment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubmitAssignment);

		parent::tearDown();
	}

}
