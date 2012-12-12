<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'userID';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'userID';

	
    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'user_no' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            	'message' => 'Please Enter A Valid ID Number',),
		'isUnique'=>array(
            	'rule'=>'isUnique',
            	'message'=>'This ID is already recorded with us.',
            ),
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
          //  ),
        ),
        'first_name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            'message' => 'Please Enter Your First Name',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
		'last_name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            'message' => 'Please Enter Your Last Name',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
		'password' => array(
            'notempty' => array(
                'rule' => array('notempty'),
           		'message' => 'Please Enter Your Password',),
			'stringLength'=>array(
            	'rule'=>array('between', 6, 40),
            	'message'=>'Password cannot be less than 6 characters long.',
            ),
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
          //  ),
        ),
		 'user_email' => array(
			'isUnique'=>array(
            	'rule'=>'isUnique',
            	'message'=>'This email already existed.',
            ),
        	'email'=>array(
            	'rule'=>array('email', true),
            	'message'=>'Please supply a valid email address.',
            ),
        	'stringLength'=>array(
            	'rule'=>array('between', 1, 40),
            	'message'=>'This field must be between 1 and 40 characters long.',
            ),
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
          //  ),
        ),
		'user_role' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            'message' => 'No Role Selected',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
	);
	
	public function beforeSave($options = array()) {
    	if (isset($this->data[$this->alias]['password'])) {
        	$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
   		 	}
    	return true;
	}
}
