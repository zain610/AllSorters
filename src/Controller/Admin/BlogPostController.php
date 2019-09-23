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
        $this->layout ='admin';

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
        $this->layout ='admin';
//        $blogPost = $this->BlogPost->find($id)->firstOrFail();
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

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog post could not be saved. Please, try again.'));
        }
        $image = $this->BlogPost->Image->find('list', [
            'keyField' => 'Image_id',
            'valueField' => 'path'
        ]);
        $this->set(compact('blogPost', 'image'));

//        $this->set('blogPost', $blogPost);
//
//        $this->render('add');

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
        $image = $this->BlogPost->Image->find('list', [
            'keyField' => 'Image_id',
            'valueField' => 'path'
        ]);
        $this->set(compact('blogPost','image'));
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

    public function simpleSearch()
    {
        // The URL for this simple search is "/articles/simple-search?query=...". We are interested in the "?query=..."
        // part which is the search text entered by the user.
        $queryTerms = $this->getRequest()->getQuery('query');

        // The only thing we need to do to these search terms is to turn them into a wildcard to work correctly with
        // the LIKE clause. Otherwise, it will only search for articles where the title or body is EXACTLY what the
        // user searched, rather than matching articles where the title or body CONTAINS the search terms.
        $queryTermsWithWildCard = '%' . $queryTerms . '%';

        // Note that we are happy for either the title or the body to match.
        // If we were to have used: where(['title LIKE' => ..., 'body LIKE' => ...]) without using another array and
        // the OR keyword, then the default query would ask for articles where BOTH the title AND the body match the
        // search terms, which is typically not what the user expects when performing a search.
        $blogposts = $this->BlogPost->find()->where([
            'OR' => [
                'title LIKE' => $queryTermsWithWildCard,
                'Description LIKE' => $queryTermsWithWildCard,
                'Body LIKE' => $queryTermsWithWildCard,
            ]
        ]);

        // In a large CMS, this search is likely to return a large number of articles, so the results should be
        // paginated.
        $this->loadComponent('Paginator');
        $paginatedBlogs = $this->Paginator->paginate($blogposts);
        $this->set('blogsPost', $paginatedBlogs);


        // Pass the query the user asked for to the view, so we can say something like "Results for 'Blah'..." to
        // confirm that we did indeed search what they asked us to. It also means that we can populate the search
        // text input with the string, so the user can perform the search again.
        $this->set('query', $queryTerms);

        $this->viewBuilder()->setLayout('client');
        $this->viewBuilder()->setTemplate('search');
    }



}
