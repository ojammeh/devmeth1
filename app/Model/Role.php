<?php
App::uses('AppModel', 'Model');
/**
 * Role Model
 *
 */
class Role extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'roleID';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'roleID';
	
    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'role_name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            'message' => 'Please Enter Role Name',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
		);

}
