<?php
App::uses('AppController', 'Controller');
/**
 * Lps Controller
 *
 * @property Lp $Lp
 */
class LpsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Lp->recursive = 0;
		$this->set('lps', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lp->exists($id)) {
			throw new NotFoundException(__('Invalid lp'));
		}
		$options = array('conditions' => array('Lp.' . $this->Lp->primaryKey => $id));
		$this->set('lp', $this->Lp->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lp->create();
			if ($this->Lp->save($this->request->data)) {
				$this->Session->setFlash(__('The lp has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lp could not be saved. Please, try again.'));
			}
		}
		$templates = $this->Lp->Template->find('list');
		$this->set(compact('templates'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lp->exists($id)) {
			throw new NotFoundException(__('Invalid lp'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Lp->save($this->request->data)) {
				$this->Session->setFlash(__('The lp has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lp.' . $this->Lp->primaryKey => $id));
			$this->request->data = $this->Lp->find('first', $options);
		}
		$templates = $this->Lp->Template->find('list');
		$this->set(compact('templates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Lp->id = $id;
		if (!$this->Lp->exists()) {
			throw new NotFoundException(__('Invalid lp'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lp->delete()) {
			$this->Session->setFlash(__('Lp deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Lp was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
