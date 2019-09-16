<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Model\Table\BlogPostTable;
use Cake\Database\Query;
use Cake\Http\Exception\NotFoundException;
use Cake\ORM\TableRegistry;
use App\Model\Entity\BlogPost;


/**
 * BlogPost Controller
 *
 * @property \App\Model\Table\BlogPostTable $BlogPost
 *
 * @method \App\Model\Entity\BlogPost[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogPostController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['view', 'advancedSearch', 'simpleSearch']);
        $this->loadModel('BlogPost');
        $this->viewBuilder()->setLayout('admin');
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $blogPost = $this->paginate($this->BlogPost);

        $this->set(compact('blogPost'));
    }

    /**
     * View method
     *
     * @param string|null $id Blog Post id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    //default param -> $id = null
    public function view($slug = null)
    {
        $blogpost = $this->BlogPost->findBySlug($slug)->firstOrFail();

        // Only show published articles to guest users. Alternatively, admin users can see any article regardless
        // of the published status.
        if ($blogpost->published ) {
            $view = new BlogPost([
                'post_id' => $blogpost->id,
                //'user_id' => $this->Auth->user()['id']
            ]);
            $this->BlogPost->save($view);
            $this->viewBuilder()->setLayout('default');
            $this->set(compact('blogpost'));
        } else {
            throw new NotFoundException("Blog post not found");
        }


        //default
//        $blogPost = $this->BlogPost->get($id, [
//            'contain' => ['Image']
//        ]);
//
//        $this->set('blogPost', $blogPost);
    }

    /**
     * This checks for articles containing an exact phrase in either the title or the body.
     * @see advancedSearch() For a much more comprehensive search.
     */
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
        $articles = $this->BlogPost->find()->where([
            'OR' => [
                'title LIKE' => $queryTermsWithWildCard,
                'body LIKE' => $queryTermsWithWildCard,
            ]
        ]);

        // In a large CMS, this search is likely to return a large number of articles, so the results should be
        // paginated.
        $this->loadComponent('Paginator');
        $paginatedBlogPosts = $this->Paginator->paginate($blogposts);
        $this->set('blogposts', $paginatedBlogPosts);

        // Even though this simple search doesn't support searching by tags, the 'search' view which is used to
        // show these results to the user WILL support searching by tags. As such, it will also expect there to
        // be a $selectedTagId variable available, so lets pass in a dummy value of zero.
        //$this->set('selectedTagId', 0);

        // As above, although we don't support searching by tags in this simple search, the page which displays results
        // to the user will. As such, we will pass a list of tags to the view so that we can show a drop down list of
        // available tags for the user to select.
//        $tagList = $this->Articles->Tags->find('list');
//        $this->set('tagList', $tagList);

        // Pass the query the user asked for to the view, so we can say something like "Results for 'Blah'..." to
        // confirm that we did indeed search what they asked us to. It also means that we can populate the search
        // text input with the string, so the user can perform the search again.
        $this->set('query', $queryTerms);

        $this->viewBuilder()->setLayout('default');
        $this->viewBuilder()->setTemplate('search');
    }



    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blogpost = $this->BlogPost->newEntity();
        if ($this->request->is('post')) {
            $blogPost = $this->BlogPost->patchEntity($blogpost, $this->request->getData());

            //camelot
            //$blogPost->user_id = $this->Auth->user('id');

            if ($this->BlogPost->save($blogpost)) {
                $this->Flash->success(__('The blog post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog post could not be saved. Please, try again.'));
        }
        $image = $this->BlogPost->Image->find('list', ['limit' => 200]);
        $this->set(compact('blogPost', 'image'));

        $this->set('blogpost', $blogpost);

        $this->render('edit');

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
        $blogpost = $this->BlogPost->get($id, [
            'contain' => ['Image']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blogpost = $this->BlogPost->patchEntity($blogpost, $this->request->getData());
            if ($this->BlogPost->save($blogpost)) {
                $this->Flash->success(__('The blog post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog post could not be saved. Please, try again.'));
        }
        $image = $this->BlogPost->Image->find('list', ['limit' => 200]);
        $this->set(compact('blogpost', 'image'));
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
        $blogpost = $this->BlogPost->get($id);
        if ($this->BlogPost->delete($blogpost)) {
            $this->Flash->success(__('The blog post has been deleted.'));
        } else {
            $this->Flash->error(__('The blog post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    //camelot
    public function hide($id = null)
    {
        $blogpost = $this->BlogPost->get($id);
        if ($blogpost == null) {
            throw new NotFoundException();
        }

        $blogpost->published = false;

        if ($this->BlogPost->save($blogpost)) {
            $this->Flash->success(__('Your blog post is now hidden.'));
        } else {
            $this->Flash->error(__('Unable to hide your blog post.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function archive($id = null)
    {
        $blogpost = $this->BlogPost->get($id);
        if ($blogpost == null) {
            throw new NotFoundException();
        }

        // If an article is archived, it is "unpublished" as well
        $blogpost->archived = true;
        $blogpost->published = false;

        if ($this->BlogPost->save($blogpost)) {
            $this->Flash->success(__('Your blog post has been archived.'));
        } else {
            $this->Flash->error(__('Unable to archive your blog post.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function restore($id = null)
    {
        $blogpost = $this->BlogPost->get($id);
        if ($blogpost == null) {
            throw new NotFoundException();
        }

        $blogpost->archived = false;

        if ($this->BlogPost->save($blogpost)) {
            $this->Flash->success(__('Your blog post has been restored.'));
        } else {
            $this->Flash->error(__('Unable to restore your blog post.'));
        }

        return $this->redirect(['action' => 'archiveIndex']);
    }

    public function publish($id = null)
    {
        $blogpost = $this->BlogPost->get($id);
        if ($blogpost == null) {
            throw new NotFoundException();
        }

        $blogpost->published = true;

        if ($this->BlogPost->save($blogpost)) {
            $this->Flash->success(__('Your blog post has been published.'));
        } else {
            $this->Flash->error(__('Unable to publish your blog post.'));
        }

        return $this->redirect(['action' => 'index']);
    }


}
