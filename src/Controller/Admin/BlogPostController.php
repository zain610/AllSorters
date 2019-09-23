<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

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
        $this->layout ='admin';
        $this->loadComponent('Paginator');
        $publishedBlogPosts = $this->Paginator->paginate(
            $this->BlogPost->find('all')->where(['BlogPost.Published' => 1])->contain([])
        );
        $this->set(compact('publishedBlogPosts'));

    }

    public function initialize()
    {
        parent::initialize();

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
        $this->layout ='admin';
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

        $this->layout ='admin';
        $blogPost = $this->BlogPost->newEntity();
        if ($this->request->is('post')) {
            $blogPost = $this->BlogPost->patchEntity($blogPost, $this->request->getData());
            $blogPost->Date = time();
            if ($this->BlogPost->save($blogPost)) {
                $this->Flash->success(__('The blog post has been saved.'));
                $blogPost->Published = 1;
                $blogPost->Archived = 0;

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog post could not be saved. Please, try again.'));
        }
        //$image = $this->BlogPost->Image->find('list', ['limit' => 200]);
        //$this->set(compact('blogPost', 'image'));

        $this->set('blogPost', $blogPost);

        $this->render('add');

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
        $this->layout ='admin';
        $blogPost = $this->BlogPost->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blogPost = $this->BlogPost->patchEntity($blogPost, $this->request->getData());
            if ($this->BlogPost->save($blogPost)) {
                $this->Flash->success(__('The blog post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog post could not be saved. Please, try again.'));
        }
//        $image = $this->BlogPost->Image->find('list', ['limit' => 200]);
        $this->set(compact('blogPost'));
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
    public function archive($id = null)
    {
        $blogPost = $this->BlogPost->get($id);
        if ($blogPost == null) {
            throw new NotFoundException();
        }

        // If an article is archived, it is "unpublished" as well
        $blogPost->Archived = 1;
        $blogPost->Published = 0;

        if ($this->BlogPost->save($blogPost)) {
            $this->Flash->success(__('Your Blog Post has been archived.'));
        } else {
            $this->Flash->error(__('Unable to archive your Blog Post.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function restore($id = null)
    {
        $blogPost = $this->BlogPost->get($id);
        if ($blogPost == null) {
            throw new NotFoundException();
        }

        $blogPost->Archived = 0;
        $blogPost->Published = 1;

        if ($this->BlogPost->save($blogPost)) {
            $this->Flash->success(__('Your Blog Post has been restored.'));
        } else {
            $this->Flash->error(__('Unable to restore your Blog Post.'));
        }

        return $this->redirect(['action' => 'archiveIndex']);
    }
    public function archiveIndex()
    {
        $this->layout ='admin';
        $archivedBlogPosts = TableRegistry::get('BlogPost')->find('all')->where(['BlogPost.Archived' => 1])->contain([]);
        $this->set('archivedBlogPosts', $this->paginate($archivedBlogPosts));
    }
}
