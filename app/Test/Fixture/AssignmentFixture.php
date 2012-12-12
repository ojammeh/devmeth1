<?php
/**
 * AssignmentFixture
 *
 */
class AssignmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'assignmentID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'due_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'submitted_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'uploaded_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'upload_by_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'submit_by_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'file_submitted' => array('type' => 'binary', 'null' => true, 'default' => null),
		'file_uploaded' => array('type' => 'binary', 'null' => true, 'default' => null),
		'file_upload_name' => array('type' => 'binary', 'null' => true, 'default' => null),
		'file_submit_name' => array('type' => 'binary', 'null' => true, 'default' => null),
		'marks' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 3),
		'remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'assignmentID', 'unique' => 1)
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
			'assignmentID' => 1,
			'due_date' => '2012-11-27 12:52:35',
			'submitted_date' => '2012-11-27 12:52:35',
			'uploaded_date' => '2012-11-27 12:52:35',
			'upload_by_id' => 1,
			'submit_by_id' => 1,
			'file_submitted' => 'Lorem ipsum dolor sit amet',
			'file_uploaded' => 'Lorem ipsum dolor sit amet',
			'file_upload_name' => 'Lorem ipsum dolor sit amet',
			'file_submit_name' => 'Lorem ipsum dolor sit amet',
			'marks' => 1,
			'remarks' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'status' => 1
		),
	);

}
