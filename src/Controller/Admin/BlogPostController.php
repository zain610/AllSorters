<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * BlogPost Controller
 *
 * @property \App\Model\Table\BlogPostTable $BlogPost
 *
 * @method \App\Model\Entity\BlogPost[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogPostController extends AppController
{
    public $helpers = array('Html', 'Form');

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->loadComponent('Paginator');
        $blogPost = $this->Paginator->paginate(
            $this->BlogPost->find('all')
        );
        $this->set(compact('blogPost'));
    }

    public function initialize()
    {
        parent::initialize();
        //$this->viewBuilder()->setLayout('admin');
        $this->loadModel('BlogPost');
        $this->Auth->allow(['index']);
    }

    public function isAuthorized()
    {
        return true;
    }

    /**
     * View method
     *
     * @param string|null $id Blog Post id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blogPost = $this->BlogPost->get($id, [
            'contain' => ['Image']
        ]);

        $this->set('blogPost', $blogPost);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blogPost = $this->BlogPost->newEntity();
        if ($this->request->is('post')) {
            $blogPost = $this->BlogPost->patchEntity($blogPost, $this->request->getData());
            if ($this->BlogPost->save($blogPost)) {
                $this->Flash->success(__('The blog post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog post could not be saved. Please, try again.'));
        }
        //$image = $this->BlogPost->Image->find('list', ['limit' => 200]);
        //$this->set(compact('blogPost', 'image'));

        $this->set('blogPost', $blogPost);

        $this->render('edit');

    }

    public function publish($id = null)
    {
        $blogPost = $this->BlogPost->get($id);
        if ($blogPost == null) {
            throw new NotFoundException();
        }

        $blogPost->published = true;

        if ($this->BlogPost->save($blogPost)) {
            $this->Flash->success(__('Your blog post has been published.'));
        } else {
            $this->Flash->error(__('Unable to publish your blog post.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    /**
     * Edit method
     *
     * @param string|null $id Blog Post id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blogPost = $this->BlogPost->get($id, [
            'contain' => ['Image']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blogPost = $this->BlogPost->patchEntity($blogPost, $this->request->getData());
            if ($this->BlogPost->save($blogPost)) {
                $this->Flash->success(__('The blog post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog post could not be saved. Please, try again.'));
        }
        $image = $this->BlogPost->Image->find('list', ['limit' => 200]);
        $this->set(compact('blogPost', 'image'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Blog Post id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blogPost = $this->BlogPost->get($id);
        if ($this->BlogPost->delete($blogPost)) {
            $this->Flash->success(__('The blog post has been deleted.'));
        } else {
            $this->Flash->error(__('The blog post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
