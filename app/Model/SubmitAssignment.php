<?php
App::uses('AppModel', 'Model');
/**
 * SubmitAssignment Model
 *
 */
class SubmitAssignment extends AppModel {
	
	var $name ='SubmitAssignment';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'submit_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'submit_id';
	
	    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'file_content' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            'message' => 'No File Attach',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
		);
	public function isUploadedFile($params) {
   	 $val = array_shift($params);
   	 if ((isset($val['error']) && $val['error'] == 0) ||
        	(!empty( $val['tmp_name']) && $val['tmp_name'] != 'none')
    	) {
       		 return is_uploaded_file($val['tmp_name']);
    	}
    	return false;
	}

}
