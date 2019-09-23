<?php
namespace App\Controller\admin;

use App\Controller\AppController;

/**
 * Contractor Controller
 *
 * @property \App\Model\Table\ContractorTable $Contractor
 *
 * @method \App\Model\Entity\Contractor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContractorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $contractor = $this->paginate($this->Contractor);
        $this->layout ='admin';
        $this->set(compact('contractor'));
    }

    /**
     * View method
     *
     * @param string|null $id Contractor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contractor = $this->Contractor->get($id, [
            'contain' => ['Job']
        ]);
        $this->layout ='admin';
        $this->set('contractor', $contractor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contractor = $this->Contractor->newEntity();
        $this->layout ='admin';
        if ($this->request->is('post')) {
            $contractor = $this->Contractor->patchEntity($contractor, $this->request->getData());
            if ($this->Contractor->save($contractor)) {
                $this->Flash->success(__('The contractor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contractor could not be saved. Please, try again.'));
        }
        $job = $this->Contractor->Job->find('list', ['limit' => 200]);
        $this->set(compact('contractor', 'job'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contractor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contractor = $this->Contractor->get($id, [
            'contain' => ['Job']
        ]);
        $this->layout ='admin';
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contractor = $this->Contractor->patchEntity($contractor, $this->request->getData());
            if ($this->Contractor->save($contractor)) {
                $this->Flash->success(__('The contractor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contractor could not be saved. Please, try again.'));
        }
        $job = $this->Contractor->Job->find('list', ['limit' => 200]);
        $this->set(compact('contractor', 'job'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contractor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $this->layout ='admin';
        $contractor = $this->Contractor->get($id);
        if ($this->Contractor->delete($contractor)) {
            $this->Flash->success(__('The contractor has been deleted.'));
        } else {
            $this->Flash->error(__('The contractor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
