<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Places Controller
 *
 * @property \App\Model\Table\PlacesTable $Places
 *
 * @method \App\Model\Entity\Place[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlacesController extends AppController
{

    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('monopage');
    }

    public $paginate = [
        'page' => 1,
        'limit' => 50,
        'maxLimit' => 150,
        /*        'fields' => [
          'id', 'name', 'description'
          ],
         */ 'sortWhitelist' => [
            'id', 'name'
        ]
    ];

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $places = $this->paginate($this->Places);

        $this->set(compact('places'));
        $this->set('_serialize', ['places']);
    }

    /**
     * View method
     *
     * @param string|null $id Place id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $place = $this->Places->get($id, [
            'contain' => []
        ]);

        $this->set('place', $place);
        $this->set('_serialize', ['place']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $place = $this->Places->newEntity();
        if ($this->request->is('post')) {
            $place = $this->Places->patchEntity($place, $this->request->getData());
            if ($this->Places->save($place)) {
                $this->Flash->success(__('The place has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The place could not be saved. Please, try again.'));
        }
        $this->set(compact('place'));
        $this->set('_serialize', ['place']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Place id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $place = $this->Places->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $place = $this->Places->patchEntity($place, $this->request->getData());
            if ($this->Places->save($place)) {
                $this->Flash->success(__('The place has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The place could not be saved. Please, try again.'));
        }
        $this->set(compact('place'));
        $this->set('_serialize', ['place']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Place id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $place = $this->Places->get($id);
        if ($this->Places->delete($place)) {
            $this->Flash->success(__('The place has been deleted.'));
        } else {
            $this->Flash->error(__('The place could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
        $param = $this->request->getParam('pass.0');

        
        if($user['id_role'] === 1){
            if (in_array($action, ['index', 'view','add','edit','delete'])){
                return true;
            }
        }

        
        elseif ($user['id_role'] === 2){
            if (in_array($action, ['index', 'view','add','edit'])){
                return true;
            }
        }
        
        elseif ($user['id_role'] === 3){
            if (in_array($action, ['display', 'view', 'index', 'changelang'])){
                return true;
            }
        }
        else {
            return false;
        }
    }
    
}
