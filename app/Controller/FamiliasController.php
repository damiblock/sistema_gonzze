<?php
class FamiliasController extends AppController{
	public $uses = array('Family');
	public $components = array('Paginator');
	public $paginate = array(
        'limit' => 10,
        'order' => array(
            'Family.familia' => 'asc'
        )
    );

	public function index(){
		$this->Paginator->settings = $this->paginate;

    	// similar to findAll(), but fetches paged results
    	$data = $this->Paginator->paginate('Family');
    	$this->set('families', $data);
	}

	public function agregar(){
		if ($this->request->is('post')) {
			$this->Family->create();
			if ($this->Family->save($this->request->data)) {
				$this->Session->setFlash(__('Familia agregada.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('No se pudo agregar la Familia.'));
    	}
	}

	public function editar($id = null){
		if (!$id) {
			throw new NotFoundException(__('Familia No Valida'));
		}
		$family = $this->Family->findById($id);
		if (!$family) {
			throw new NotFoundException(__('Familia No Valida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Family->id = $id;
			if ($this->Family->save($this->request->data)) {
				$this->Session->setFlash(__('Familia actualizada.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('No se pude actualizar la familia.'));
		}
		if (!$this->request->data) {
			$this->request->data = $family;
		}
	}

	public function eliminar($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }
	    if ($this->Family->delete($id)) {
	        $this->Session->setFlash(__('La Familia con el id: %s ha sido eliminada.', h($id)));
	        return $this->redirect(array('action' => 'index'));
	    }
	}

	public function detalles($id = null){
		if (!$id) {
			throw new NotFoundException(__('Familia No Valida'));
		}
		$family = $this->Family->findById($id);
		if (!$family) {
			throw new NotFoundException(__('Familia No Valida'));
		}
		$this->set('families', $family);
	}

	public function buscar(){
		if ($this->request->is('get')) {
			$this->Paginator->settings = $this->paginate;
			$families = $this->Paginator->paginate('Family', array('Family.familia LIKE' => "%{$this->params['url']['familia']}%"));
    		$this->set('families', $families);
		}
	}
}