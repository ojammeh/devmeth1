<?php
App::uses('AppController', 'Controller');
/**
 * Assignments Controller
 *
 * @property Assignment $Assignment
 */
class AssignmentsController extends AppController {


/** 
 * index method 
 *
 * @return void
 */ 
	public function index() { 
		$this->Assignment->recursive = 0;
		$this->set('assignments', $this->paginate());
	}
	
	public function index_limit($id) {
		$courseID = $id;
		//$this->Assignment->recursive = 0;
		$this->set('assignments', $this->paginate = array('conditions' =>array('Assignment.course_id' => $courseID)));
               $this->index();
	}
	
	//view assignment method for both students and lecturers
	public function view_assignment() {
		$this->Assignment->recursive = 0;
		$this->set('assignments', $this->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Assignment->id = $id;
		if (!$this->Assignment->exists()) {
			throw new NotFoundException(__('Invalid assignment'));
		}
		$this->set('assignment', $this->Assignment->read(null, $id));
	}

	
	//view for student only
	public function my_view_assignment($id = null) {
		$this->Assignment->id = $id;
		if (!$this->Assignment->exists()) {
			throw new NotFoundException(__('Invalid submit assignment'));
		}
		$this->set('assignment', $this->Assignment->read(null, $id));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
	//	$this->Uploader = new Uploader();
	//$helpers = array('Cakeupload.Upload');
	
	 //   $this->loadModel('Customer'); //if it's not already loaded
     //   $this->Customer->recursive = -1;
     //   $customerData = $this->Customer->read(null, $id);

     //   $this->request->data['Loanaccount']['customer_id'] = $customerData['Customer']['id'];
	
		if ($this->request->is('post'))  {
			$this->request->data['Assignment']['lecturer_id'] = $this->Auth->user('user_no');//1;//$this->Auth->user('id'); //Added this line
		//	$this->request->data['Assignment']['course_id'] = 1;//
             is_uploaded_file($this->data['Assignment']['file_content']['tmp_name']);
            $fileData = addslashes(fread(fopen($this->data['Assignment']['file_content']['tmp_name'], "r"), 
                                     $this->data['Assignment']['file_content']['size']));
			
			$this->request->data['Assignment']['file_name'] = $this->data['Assignment']['file_content']['name'];
            $this->request->data['Assignment']['file_type'] = $this->data['Assignment']['file_content']['type'];
            $this->request->data['Assignment']['file_size'] = $this->data['Assignment']['file_content']['size'];
            $this->request->data['Assignment']['file_content'] = $fileData;
			
			$this->Assignment->create();
			if ($this->Assignment->save($this->request->data))
			{
				$this->Session->setFlash(__('The assignment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assignment could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Assignment->id = $id;
		if (!$this->Assignment->exists()) {
			throw new NotFoundException(__('Invalid assignment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Assignment->save($this->request->data)) {
				$this->Session->setFlash(__('The assignment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assignment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Assignment->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Assignment->id = $id;
		if (!$this->Assignment->exists()) {
			throw new NotFoundException(__('Invalid assignment'));
		}
		if ($this->Assignment->delete()) {
			$this->Session->setFlash(__('Assignment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Assignment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	function download($id) {
    	Configure::write('debug', 0);
	//	$this->Assignment->id = $id;
		$file = $this->Assignment->find('first', array('conditions' => array('assignment_id' => $id)));
   		// $file = $this->Assignment->findById($id);
		
    	header('Content-type: ' . $file['Assignment']['file_type']);
  //  	header('Content-length: ' . $file['Assignment']['file_size']); // some people reported problems with this line (see the comments), //commenting out this line helped in those cases
    	header('Content-Disposition: attachment; filename="'.$file['Assignment']['file_name'].'"');
    	echo $file['Assignment']['file_content'];		
    	exit();
	}

	}
	