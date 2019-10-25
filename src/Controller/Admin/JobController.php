<?php
namespace App\Controller\admin;

use App\Controller\AppController;

/**
 * Job Controller
 *
 * @property \App\Model\Table\JobTable $Job
 *
 * @method \App\Model\Entity\Job[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JobController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $job = $this->paginate($this->Job);
        $this->layout ='admin';
        $this->set(compact('job'));
    }

    /**
     * View method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $job = $this->Job->get($id, [
            'contain' => ['Contractor', 'Service']
        ]);
        $this->layout ='admin';
        $this->set('job', $job);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $job = $this->Job->newEntity();
        $this->layout ='admin';
        if ($this->request->is('post')) {
            $job = $this->Job->patchEntity($job, $this->request->getData());
            if ($this->Job->save($job)) {
                $this->Flash->success(__('The job has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job could not be saved. Please, try again.'));
        }
        $contractor = $this->Job->Contractor->find('list', ['limit' => 200]);
        $service = $this->Job->Service->find('list', ['limit' => 200]);
        $this->set(compact('job', 'contractor', 'service'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $job = $this->Job->get($id, [
            'contain' => ['Contractor', 'Service']
        ]);
        $this->layout ='admin';
        if ($this->request->is(['patch', 'post', 'put'])) {
            $job = $this->Job->patchEntity($job, $this->request->getData());
            if ($this->Job->save($job)) {
                $this->Flash->success(__('The job has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job could not be saved. Please, try again.'));
        }
        $contractor = $this->Job->Contractor->find('list', ['limit' => 200]);
        $service = $this->Job->Service->find('list', ['limit' => 200]);
        $this->set(compact('job', 'contractor', 'service'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $job = $this->Job->get($id);
        $this->layout ='admin';
        if ($this->Job->delete($job)) {
            $this->Flash->success(__('The job has been deleted.'));
        } else {
            $this->Flash->error(__('The job could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
