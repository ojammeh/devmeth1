<?php
App::uses('AppController', 'Controller');
/**
 * SubmitAssignments Controller
 *
 * @property SubmitAssignment $SubmitAssignment
 */
class SubmitAssignmentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SubmitAssignment->recursive = 0;
		$this->set('submitAssignments', $this->paginate());
	}
	
	//view for lecturers to view submitted assignments
	public function submitted_assign() {
		$this->SubmitAssignment->recursive = 0;
		$this->set('submitAssignments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SubmitAssignment->id = $id;
		if (!$this->SubmitAssignment->exists()) {
			throw new NotFoundException(__('Invalid submit assignment'));
		}
		$this->set('submitAssignment', $this->SubmitAssignment->read(null, $id));
	}


/**
 * add method
 *
 * @return void
 */
	public function add($id) {
		 $assignmentID = $id;
		if ($this->request->is('post')) {
			$this->request->data['SubmitAssignment']['student_id'] = $this->Auth->user('user_no'); //Added this line
			$this->request->data['SubmitAssignment']['assignment_id'] = $assignmentID;//
             is_uploaded_file($this->data['SubmitAssignment']['file_content']['tmp_name']);
            $fileData = addslashes(fread(fopen($this->data['SubmitAssignment']['file_content']['tmp_name'], "r"), 
                                     $this->data['SubmitAssignment']['file_content']['size']));
			
			$this->request->data['SubmitAssignment']['file_name'] = $this->data['SubmitAssignment']['file_content']['name'];
            $this->request->data['SubmitAssignment']['file_type'] = $this->data['SubmitAssignment']['file_content']['type'];
            $this->request->data['SubmitAssignment']['file_size'] = $this->data['SubmitAssignment']['file_content']['size'];
            $this->request->data['SubmitAssignment']['file_content'] = $fileData;
			
			$this->SubmitAssignment->create();
			if ($this->SubmitAssignment->save($this->request->data)) {
				$this->Session->setFlash(__('The submit assignment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submit assignment could not be saved. Please, try again.'));
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
		$this->SubmitAssignment->id = $id;
		if (!$this->SubmitAssignment->exists()) {
			throw new NotFoundException(__('Invalid submit assignment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SubmitAssignment->save($this->request->data)) {
				$this->Session->setFlash(__('The submit assignment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submit assignment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SubmitAssignment->read(null, $id);
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
		$this->SubmitAssignment->id = $id;
		if (!$this->SubmitAssignment->exists()) {
			throw new NotFoundException(__('Invalid submit assignment'));
		}
		if ($this->SubmitAssignment->delete()) {
			$this->Session->setFlash(__('Submit assignment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Submit assignment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	function download($id) {
    	Configure::write('debug', 0);
		$file = $this->SubmitAssignment->find('first', array('conditions' => array('submit_id' => $id)));
		
    	header('Content-type: ' . $file['SubmitAssignment']['file_type']);
    	header('Content-Disposition: attachment; filename="'.$file['SubmitAssignment']['file_name'].'"');
    	echo $file['SubmitAssignment']['file_content'];		
    	exit();
	}
}
