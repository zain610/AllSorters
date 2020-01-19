<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Log\Log;

/**
 * Variable Controller
 *
 * @property \App\Model\Table\VariableTable $Variable
 *
 * @method \App\Model\Entity\Variable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VariableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->loadModel('Variable');
        $this->layout ='admin';

    }
    public function index()
    {
        $variable = $this->paginate($this->Variable);

        $this->set(compact('variable'));
    }

    /**
     * View method
     *
     * @param string|null $id Variable id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $variable = $this->Variable->get($id, [
            'contain' => []
        ]);

        $this->set('variable', $variable);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $variable = $this->Variable->newEntity();
        if ($this->request->is('post')) {
            $variable = $this->Variable->patchEntity($variable, $this->request->getData());
            Log::debug($variable);
            if ($this->Variable->save($variable)) {
                $this->Flash->success(__('The variable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The variable could not be saved. Please, try again.'));
        }

        $this->set(compact('variable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Variable id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $variable = $this->Variable->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $variable = $this->Variable->patchEntity($variable, $this->request->getData());
            if ($this->Variable->save($variable)) {
                $this->Flash->success(__('The variable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The variable could not be saved. Please, try again.'));
        }
        $this->set(compact('variable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Variable id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $variable = $this->Variable->get($id);
        if ($this->Variable->delete($variable)) {
            $this->Flash->success(__('The variable has been deleted.'));
        } else {
            $this->Flash->error(__('The variable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
