<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * About Controller
 *
 * @property \App\Model\Table\AboutTable $About
 *
 * @method \App\Model\Entity\About[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AboutController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $about = $this->paginate($this->About);

        $this->set(compact('about'));
    }

    /**
     * View method
     *
     * @param string|null $id About id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $about = $this->About->get($id, [
            'contain' => []
        ]);

        $this->set('about', $about);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $about = $this->About->newEntity();
        if ($this->request->is('post')) {
            $about = $this->About->patchEntity($about, $this->request->getData());
            if ($this->About->save($about)) {
                $this->Flash->success(__('The about has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The about could not be saved. Please, try again.'));
        }
        $this->set(compact('about'));
    }

    /**
     * Edit method
     *
     * @param string|null $id About id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
}
