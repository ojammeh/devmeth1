<?php
App::uses('AppModel', 'Model');
/**
 * Assignment Model
 *
 */
 
 //	class Upload extends AppModel {
  //		var $name = 'Upload';
  //		var $actsAs = array('FileUpload.FileUpload');
//	}

class Assignment extends AppModel {
	
	var $name = "Assignment";
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'assignment_id';
	

/**
 * Display field
 *
 * @var string 
 */
	
	/**
     * Validation rules
     *
     * @var array
     */
    public $validate = array( 
        'assignment_name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            'message' => 'Please enter assignment name',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
		'course_id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            'message' => 'Please select your module',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
/*	'file_content' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            	'message' => 'No File Attach',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ), */
    );

}
