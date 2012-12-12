<?php
App::uses('AppModel', 'Model');
/**
 * Course Model
 *
 */
class Course extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'course_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'course_id';
	
	   /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'course_name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            'message' => 'Please Enter Course Name',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
);
}
