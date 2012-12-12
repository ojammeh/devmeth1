<?php
/**
 * SubmitAssignmentFixture
 *
 */
class SubmitAssignmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'submit_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'assignment_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'student_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'date_submit' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'file_content' => array('type' => 'binary', 'null' => false, 'default' => null),
		'file_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'file_size' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15),
		'file_type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'comment' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 70, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'desc' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'submit_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'submit_id' => 1,
			'assignment_id' => 1,
			'student_id' => 1,
			'date_submit' => '2012-12-03 00:05:58',
			'file_content' => 'Lorem ipsum dolor sit amet',
			'file_name' => 'Lorem ipsum dolor sit amet',
			'file_size' => 1,
			'file_type' => 'Lorem ipsum dolor ',
			'comment' => 'Lorem ipsum dolor sit amet',
			'desc' => 'Lorem ipsum dolor sit amet'
		),
	);

}
