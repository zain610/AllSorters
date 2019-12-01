<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Slideshow Controller
 *
 * @property \App\Model\Table\SlideshowTable $Slideshow
 *@property \App\Model\Table\ImageTable $Image
 * @method \App\Model\Entity\Slideshow[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SlideshowController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Image']
        ];
        $slideshow = $this->paginate($this->Slideshow);
        $image = $this->paginate($this->Image);
        $this->set(compact('slideshow','image'));
    }

    /**
     * View method
     *
     * @param string|null $id Slideshow id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $slideshow = $this->Slideshow->get($id, [
            'contain' => ['Image']
        ]);

        $this->set('slideshow', $slideshow);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $slideshow = $this->Slideshow->newEntity();
        if ($this->request->is('post')) {
            $slideshow = $this->Slideshow->patchEntity($slideshow, $this->request->getData());
            if ($this->Slideshow->save($slideshow)) {
                $this->Flash->success(__('The slideshow has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The slideshow could not be saved. Please, try again.'));
        }
        $image = $this->Slideshow->Image->find('list', ['limit' => 200]);
        $this->set(compact('slideshow', 'image'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Slideshow id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $slideshow = $this->Slideshow->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $slideshow = $this->Slideshow->patchEntity($slideshow, $this->request->getData());
            if ($this->Slideshow->save($slideshow)) {
                $this->Flash->success(__('The slideshow has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The slideshow could not be saved. Please, try again.'));
        }
        $image = $this->Slideshow->Image->find('list', ['limit' => 200]);
        $this->set(compact('slideshow', 'image'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Slideshow id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $slideshow = $this->Slideshow->get($id);
        if ($this->Slideshow->delete($slideshow)) {
            $this->Flash->success(__('The slideshow has been deleted.'));
        } else {
            $this->Flash->error(__('The slideshow could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
