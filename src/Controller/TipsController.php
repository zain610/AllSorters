<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tips Controller
 *
 * @property \App\Model\Table\TipsTable $Tips
 *
 * @method \App\Model\Entity\Tip[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipsController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadModel('Tips');
        $this->Auth->allow(['index']);
        $this->Auth->allow(['home']);
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
        $tips = $this->paginate($this->Tips);

        $this->set(compact('tips'));
        $this->loadModel('tips');
        $this->Auth->allow(['index']);
        $this->Auth->allow(['home']);
        $this->viewBuilder()->setLayout('client_default');
        $this->loadModel("Webpages");
        $webpages = $this->Webpages->find('all');
        $this->set(compact('tips','webpages'));
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
     * @param string|null $id Tip id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tip = $this->Tips->get($id, [
            'contain' => []
        ]);

        $this->set('tip', $tip);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tip = $this->Tips->newEntity();
        if ($this->request->is('post')) {
            $tip = $this->Tips->patchEntity($tip, $this->request->getData());
            if ($this->Tips->save($tip)) {
                $this->Flash->success(__('The tip has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tip could not be saved. Please, try again.'));
        }
        $this->set(compact('tip'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tip id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tip = $this->Tips->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tip = $this->Tips->patchEntity($tip, $this->request->getData());
            if ($this->Tips->save($tip)) {
                $this->Flash->success(__('The tip has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tip could not be saved. Please, try again.'));
        }
        $this->set(compact('tip'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tip id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tip = $this->Tips->get($id);
        if ($this->Tips->delete($tip)) {
            $this->Flash->success(__('The tip has been deleted.'));
        } else {
            $this->Flash->error(__('The tip could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
