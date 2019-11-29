<?php
namespace App\Controller\admin;

use App\Controller\AppController;

/**
 * Footer Controller
 *
 * @property \App\Model\Table\FooterTable $Footer
 *
 * @method \App\Model\Entity\Footer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FooterController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $footer = $this->paginate($this->Footer);
        $this->layout ='admin';
        $this->set(compact('footer'));
    }

    /**
     * View method
     *
     * @param string|null $id Footer id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->layout ='admin';
        $footer = $this->Footer->get($id, [
            'contain' => []
        ]);

        $this->set('footer', $footer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $footer = $this->Footer->newEntity();
        if ($this->request->is('post')) {
            $footer = $this->Footer->patchEntity($footer, $this->request->getData());
            if ($this->Footer->save($footer)) {
                $this->Flash->success(__('The footer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The footer could not be saved. Please, try again.'));
        }
        $this->set(compact('footer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Footer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->layout ='admin';
        $footer = $this->Footer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $footer = $this->Footer->patchEntity($footer, $this->request->getData());
            if ($this->Footer->save($footer)) {
                $this->Flash->success(__('The footer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The footer could not be saved. Please, try again.'));
        }
        $this->set(compact('footer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Footer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $footer = $this->Footer->get($id);
        if ($this->Footer->delete($footer)) {
            $this->Flash->success(__('The footer has been deleted.'));
        } else {
            $this->Flash->error(__('The footer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
