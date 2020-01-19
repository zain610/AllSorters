<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * ControllersInfo Controller
 *
 * @property \App\Model\Table\ControllersInfoTable $ControllersInfo
 *
 * @method \App\Model\Entity\ControllersInfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ControllersInfoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->loadModel('ControllersInfo');
        $this->layout ='admin';

    }
    public function index()
    {
        $this->loadComponent('Paginator');
        $controllers = $this->paginate($this->ControllersInfo);
        $this->set(compact('controllers'));
    }

    /**
     * View method
     *
     * @param string|null $id Controllers Info id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $controllersInfo = $this->ControllersInfo->get($id, [
            'contain' => []
        ]);

        $this->set('controllersInfo', $controllersInfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $controllersInfo = $this->ControllersInfo->newEntity();

        if ($this->request->is('post')) {
            $controllersInfo = $this->ControllersInfo->patchEntity($controllersInfo, $this->request->getData());
            debug($controllersInfo);
            if ($this->ControllersInfo->save($controllersInfo)) {
                $this->Flash->success(__('The controllers info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The controllers info could not be saved. Please, try again.'));
        }
        $this->set(compact('controllersInfo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Controllers Info id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $controllersInfo = $this->ControllersInfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $controllersInfo = $this->ControllersInfo->patchEntity($controllersInfo, $this->request->getData());
            if ($this->ControllersInfo->save($controllersInfo)) {
                $this->Flash->success(__('The controllers info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The controllers info could not be saved. Please, try again.'));
        }
        $this->set(compact('controllersInfo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Controllers Info id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $controllersInfo = $this->ControllersInfo->get($id);
        if ($this->ControllersInfo->delete($controllersInfo)) {
            $this->Flash->success(__('The controllers info has been deleted.'));
        } else {
            $this->Flash->error(__('The controllers info could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
