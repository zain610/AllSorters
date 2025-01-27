<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Favourites Controller
 *
 * @property \App\Model\Table\FavouritesTable $Favourites
 *
 * @method \App\Model\Entity\Favourite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FavouritesController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadModel('Favourites');
        $this->loadModel("Webpages");
        $this->Auth->allow(['index', 'home']);
        $this->viewBuilder()->setLayout('client_default');
        $this->loadModel('BlogPost');
        $this->loadModel('Review');
    }
    public function isAuthorized($user)
    {
        // return $user['id'] > 0;
        return $this->Auth->user('role') > 2;
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $favourites = $this->paginate($this->Favourites);
        $webpages = $this->Webpages->find('all');
        $this->set(compact('favourites','webpages'));
        $reviews = $this->Review->find('all');
        $this->paginate = ['limit'=>3];
        $this->set('reviews', $this->paginate($reviews));

        $blogs = $this->BlogPost->find('all')->order(['created' => 'DESC']);
        $this->paginate = ['limit'=>2];
        $this->set('blogs', $this->paginate($blogs));

    }

    /**
     * View method
     *
     * @param string|null $id Favourite id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $favourite = $this->Favourites->get($id, [
            'contain' => []
        ]);

        $this->set('favourite', $favourite);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $favourite = $this->Favourites->newEntity();
        if ($this->request->is('post')) {
            $favourite = $this->Favourites->patchEntity($favourite, $this->request->getData());
            if ($this->Favourites->save($favourite)) {
                $this->Flash->success(__('The favourite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The favourite could not be saved. Please, try again.'));
        }
        $this->set(compact('favourite'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Favourite id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $favourite = $this->Favourites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $favourite = $this->Favourites->patchEntity($favourite, $this->request->getData());
            if ($this->Favourites->save($favourite)) {
                $this->Flash->success(__('The favourite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The favourite could not be saved. Please, try again.'));
        }
        $this->set(compact('favourite'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Favourite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $favourite = $this->Favourites->get($id);
        if ($this->Favourites->delete($favourite)) {
            $this->Flash->success(__('The favourite has been deleted.'));
        } else {
            $this->Flash->error(__('The favourite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
