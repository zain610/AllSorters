<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Review Controller
 *
 * @property \App\Model\Table\ReviewTable $Review
 *
 * @method \App\Model\Entity\Review[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReviewController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadModel('Review');
        $this->Auth->allow(['index','home']);
        $this->loadModel("Webpages");

        $this->viewBuilder()->setLayout('client_default');
        $this->loadModel('BlogPost');

    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->loadComponent('Paginator');
        $this->paginate = array(
            'limit' => 5,
        );
        $review = $this->paginate(
            $this->Review->find('all')
                ->order('Month_Year DESC')
        );

        $webpages = $this->Webpages->find('all');
        $this->set(compact('review','webpages'));
        $blogs = $this->BlogPost->find('all')->order(['created' => 'DESC']);
//        $this->paginate = ['limit'=>2];
//        $this->set('blogs', $this->paginate($blogs));

        $this->viewBuilder()->setLayout('client_default');
    }

    /**
     * View method
     *
     * @param string|null $id Review id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $review = $this->Review->get($id, [
            'contain' => []
        ]);

        $this->set('review', $review);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $review = $this->Review->newEntity();
        if ($this->request->is('post')) {
            $review = $this->Review->patchEntity($review, $this->request->getData());
            if ($this->Review->save($review)) {
                $this->Flash->success(__('The review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The review could not be saved. Please, try again.'));
        }
        $this->set(compact('review'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Review id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $review = $this->Review->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $review = $this->Review->patchEntity($review, $this->request->getData());
            if ($this->Review->save($review)) {
                $this->Flash->success(__('The review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The review could not be saved. Please, try again.'));
        }
        $this->set(compact('review'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Review id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $review = $this->Review->get($id);
        if ($this->Review->delete($review)) {
            $this->Flash->success(__('The review has been deleted.'));
        } else {
            $this->Flash->error(__('The review could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
