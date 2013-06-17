<?php
App::uses('AppController', 'Controller');
/**
 * Libraries Controller
 *
 * @property Library $Library
 */
class LibrariesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Library->recursive = 0;
		$this->set('libraries', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Library->exists($id)) {
			throw new NotFoundException(__('Invalid library'));
		}
		$options = array('conditions' => array('Library.' . $this->Library->primaryKey => $id));
		$this->set('library', $this->Library->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Library->create();
			if ($this->Library->save($this->request->data)) {
				$this->Session->setFlash(__('The library has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The library could not be saved. Please, try again.'));
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
		if (!$this->Library->exists($id)) {
			throw new NotFoundException(__('Invalid library'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Library->save($this->request->data)) {
				$this->Session->setFlash(__('The library has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The library could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Library.' . $this->Library->primaryKey => $id));
			$this->request->data = $this->Library->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Library->id = $id;
		if (!$this->Library->exists()) {
			throw new NotFoundException(__('Invalid library'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Library->delete()) {
			$this->Session->setFlash(__('Library deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Library was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
