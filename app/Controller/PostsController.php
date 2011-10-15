<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 */
class PostsController extends AppController {

	public function beforeFilter () {
		$this->Auth->allow('index', 'view');
		parent::beforeFilter();
	}


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Post->bindModel(array(
			'belongsTo' => array('User')
		));
		$this->Post->recursive = 0;
		$this->set('posts', $this->paginate());
		$this->set('title_for_layout', 'Latest Posts');
	}

/**
 * view method
 *
 * @param string $slug
 * @return void
 */
	public function view($slug = null) {
		if (!$this->Post->slug_exists($slug)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->Post->bindModel(array(
			'belongsTo' => array('User')
		));
		$post = $this->Post->findBySlug($slug);
		$this->set('post', $post);
		$this->set('title_for_layout', $post['Post']['title']);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved'), 'default', array('class' => 'alert-message success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'), 'default', array('class' => 'alert-message error'));
			}
		}
		$this->set('title_for_layout', 'Add new post');
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved'), 'default', array('class' => 'alert-message success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'), 'default', array('class' => 'alert-message error'));
			}
		} else {
			$this->request->data = $this->Post->read(null, $id);
		}
		$this->set('title_for_layout', 'Edit post');
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
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('Post deleted'), 'default', array('class' => 'alert-message success'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Post was not deleted'), 'default', array('class' => 'alert-message error'));
		$this->redirect(array('action' => 'index'));
	}
}
