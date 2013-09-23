<?php
class MarcasController extends AppController{
	public $uses = array('Branch');
	public $components = array('Paginator');
	public $paginate = array(
        'limit' => 10,
        'order' => array(
            'Branch.marca' => 'asc'
        )
    );

	public function index(){
		$this->Paginator->settings = $this->paginate;

    	// similar to findAll(), but fetches paged results
    	$data = $this->Paginator->paginate('Branch');
    	$this->set('branches', $data);
	}

	public function agregar(){
		$this->set('families', $this->Branch->Family->find('list', array('fields' => array('id', 'familia'))));
		if ($this->request->is('post')) {
			$this->Branch->create();
			if ($this->Branch->save($this->request->data)) {
				$this->Session->setFlash(__('Marca agregada.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('No se pudo agregar la Marca.'));
    	}
	}

	public function editar($id = null){
		if (!$id) {
			throw new NotFoundException(__('Marca No Valida'));
		}
		$branch = $this->Branch->findById($id);
		$this->set('families', $this->Branch->Family->find('list', array('fields' => array('id', 'familia'))));
		if (!$branch) {
			throw new NotFoundException(__('Marca No Valida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Branch->id = $id;
			if ($this->Branch->save($this->request->data)) {
				$this->Session->setFlash(__('Marca actualizada.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('No se pude actualizar la familia.'));
		}
		if (!$this->request->data) {
			$this->request->data = $branch;
		}
	}

	public function eliminar($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }
	    if ($this->Branch->delete($id)) {
	        $this->Session->setFlash(__('La Marca con el id: %s ha sido eliminada.', h($id)));
	        return $this->redirect(array('action' => 'index'));
	    }
	}
}