<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Webpages Controller
 *
 * @property \App\Model\Table\WebpagesTable $Webpages
 *
 * @method \App\Model\Entity\Webpage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WebpagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->layout ='admin';
        $webpages = $this->paginate($this->Webpages);

        $this->set(compact('webpages'));
    }

    public function initialize()
    {
        parent::initialize();

        $this->loadModel('webpages');
    }

    /**
     * View method
     *
     * @param string|null $id Webpage id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->layout ='admin';
        $webpage = $this->Webpages->get($id, [
            'contain' => []
        ]);

        $this->set('webpage', $webpage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
//    public function add()
//    {
//        $this->layout ='admin';
//        $webpage = $this->Webpages->newEntity();
//        if ($this->request->is('post')) {
//            $webpage = $this->Webpages->patchEntity($webpage, $this->request->getData());
//            if ($this->Webpages->save($webpage)) {
//                $this->Flash->success(__('The webpage has been saved.'));
//
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('The webpage could not be saved. Please, try again.'));
//        }
//        $this->set(compact('webpage'));
//    }

    /**
     * Edit method
     *
     * @param string|null $id Webpage id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->layout ='admin';
        $webpage = $this->Webpages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $webpage = $this->Webpages->patchEntity($webpage, $this->request->getData());
            if ($this->Webpages->save($webpage)) {
                $this->Flash->success(__('The webpage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The webpage could not be saved. Please, try again.'));
        }
        $this->set(compact('webpage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Webpage id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
//    public function delete($id = null)
//    {
//        $this->request->allowMethod(['post', 'delete']);
//        $webpage = $this->Webpages->get($id);
//        if ($this->Webpages->delete($webpage)) {
//            $this->Flash->success(__('The webpage has been deleted.'));
//        } else {
//            $this->Flash->error(__('The webpage could not be deleted. Please, try again.'));
//        }
//
//        return $this->redirect(['action' => 'index']);
//    }
}
