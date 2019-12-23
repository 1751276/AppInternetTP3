<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sales Controller
 *
 * @property \App\Model\Table\SalesTable $Sales
 *
 * @method \App\Model\Entity\Sale[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories', 'Subcategories']
        ];
        $sales = $this->paginate($this->Sales);

        $this->set(compact('sales'));
        $this->set('_serialize', ['sales']);
    }

    /**
     * View method
     *
     * @param string|null $id Sale id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sale = $this->Sales->get($id, [
            'contain' => ['Categories', 'Subcategories']
        ]);

        $this->set('sale', $sale);
        $this->set('_serialize', ['sale']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sale = $this->Sales->newEntity();
        if ($this->request->is('post')) {
            $sale = $this->Sales->patchEntity($sale, $this->request->getData());
            if ($this->Sales->save($sale)) {
                $this->Flash->success(__('The sale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale could not be saved. Please, try again.'));
        }
        // Bâtir la liste des catégories  
        $this->loadModel('Categories');
        $categories = $this->Categories->find('list', ['limit' => 200]);
        $subcategories = $this->Sales->Subcategories->find('list', ['limit' => 200]);

        // Extraire le id de la première catégorie
        $categories = $categories->toArray();
        reset($categories);
        $category_id = key($categories);

        // Bâtir la liste des sous-catégories reliées à cette catégorie
        $subcategories = $this->Sales->Subcategories->find('list', [
            'conditions' => ['Subcategories.category_id' => $category_id],
        ]);

        $this->set(compact('sale', 'subcategories', 'categories'));
        $this->set('_serialize', ['sale', 'subcategories', 'categories']);
       
    }

    /**
     * Edit method
     *
     * @param string|null $id Sale id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sale = $this->Sales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sale = $this->Sales->patchEntity($sale, $this->request->getData());
            if ($this->Sales->save($sale)) {
                $this->Flash->success(__('The sale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale could not be saved. Please, try again.'));
        }
        $categories = $this->Sales->Categories->find('list', ['limit' => 200]);
        $subcategories = $this->Sales->Subcategories->find('list', ['limit' => 200]);
        $this->set(compact('sale', 'categories', 'subcategories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sale id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sale = $this->Sales->get($id);
        if ($this->Sales->delete($sale)) {
            $this->Flash->success(__('The sale has been deleted.'));
        } else {
            $this->Flash->error(__('The sale could not be deleted. Please, try again.'));
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
