<?php
App::uses('AppController', 'Controller');
/**
 * Applications Controller
 *
 * @property Application $Application
 */
class ApplicationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Application->recursive = 0;
		$this->set('applications', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		$this->set('application', $this->Application->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->loadModel('Country');
		
		if ($this->request->is('post')) {			
			debug($this->request->data);
			
			$this->Application->create();
			if ($this->Application->save($this->request->data)) {
				$this->Session->setFlash(__("The application has been saved"), "default", array(), "success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__("The application could not be saved. Please, try again."), "default", array(), "error");
			}
		}
		$users = $this->Application->User->find('list');
		$countries = array_values($this->Country->find('list'));
		$this->set(compact('users','countries'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Application->save($this->request->data)) {
				$this->Session->setFlash(__('The application has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The application could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Application->read(null, $id);
		}
		$users = $this->Application->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		if ($this->Application->delete()) {
			$this->Session->setFlash(__('Application deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Application was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Application->recursive = 0;
		$this->set('applications', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		$this->set('application', $this->Application->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Application->create();
			if ($this->Application->save($this->request->data)) {
				$this->Session->setFlash(__('The application has been saved'), "default", array(), "success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__("The application could not be saved. Please, try again."), "default", array(), "error");
			}
		}
		$users = $this->Application->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Application->save($this->request->data)) {
				$this->Session->setFlash(__('The application has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The application could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Application->read(null, $id);
		}
		$users = $this->Application->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		if ($this->Application->delete()) {
			$this->Session->setFlash(__('Application deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Application was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
