<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GalleryPage Controller
 *
 * @property \App\Model\Table\GalleryPageTable $GalleryPage
 *
 * @method \App\Model\Entity\GalleryPage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GalleryPageController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('GalleryPage');
        $this->Auth->allow(['index','view']);
    }



    public function index()
    {

        $this->viewBuilder()->setLayout('client');
        $this->loadModel('Image');
        $image = $this->Image->find('all')->where(['Shown' => true]);

        //$this->set(compact('image'));
        $this->loadModel("Webpages");
        $webpages = $this->Webpages->find('all');
        $this->set(compact('image','webpages'));
    }

    /**
     * View method
     *
     * @param string|null $id Gallery Page id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $galleryPage = $this->GalleryPage->get($id, [
            'contain' => ['Image']
        ]);

        $this->set('galleryPage', $galleryPage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $galleryPage = $this->GalleryPage->newEntity();
        if ($this->request->is('post')) {
            $galleryPage = $this->GalleryPage->patchEntity($galleryPage, $this->request->getData());
            if ($this->GalleryPage->save($galleryPage)) {
                $this->Flash->success(__('The gallery page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gallery page could not be saved. Please, try again.'));
        }
        $image = $this->GalleryPage->Image->find('list', ['limit' => 200]);
        $this->set(compact('galleryPage', 'image'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gallery Page id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $galleryPage = $this->GalleryPage->get($id, [
            'contain' => ['Image']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $galleryPage = $this->GalleryPage->patchEntity($galleryPage, $this->request->getData());
            if ($this->GalleryPage->save($galleryPage)) {
                $this->Flash->success(__('The gallery page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gallery page could not be saved. Please, try again.'));
        }
        $image = $this->GalleryPage->Image->find('list', ['limit' => 200]);
        $this->set(compact('galleryPage', 'image'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gallery Page id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $galleryPage = $this->GalleryPage->get($id);
        if ($this->GalleryPage->delete($galleryPage)) {
            $this->Flash->success(__('The gallery page has been deleted.'));
        } else {
            $this->Flash->error(__('The gallery page could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
