<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Routing\Route\Route;
use Cake\Routing\Router;
use Cake\View\Helper\UrlHelper;
use Facebook\Authentication\AccessToken;
use Facebook\Facebook;
use Facebook\FacebookApp;
use PhpParser\Node\Expr\AssignOp\Concat;
use Cake\I18n\Time;



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
            $this->BlogPost->find('all')->where(['BlogPost.Published' => 1])->contain([])->orderDesc('Date')
        );

        $this->set(compact('publishedBlogPosts'));
        $this->set('message', $this->request->getSession()->read('message'));
        $this->set('title', 'Published Blogs');

    }

    public function initialize()
    {
        $this->set('title', 'Blogs');
        parent::initialize();
        $this->loadModel('BlogPost');
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
        $this->loadModel('PostComment');
        $comment = $this->PostComment->find('all',['conditions'=>['Blog_post_id'=>$id]])->toList();
        $this->set('comment',$comment);

        $this->set('blogPost', $blogPost);
        $this->set('title', 'View Blog # '.$id);

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
            $data = $this->request->getData('checkboxes');

            $formData = $this->request->getData();

            foreach ($data as $i => $value){
                if($value != null && $value != 0){
                    $formData['image']['_ids'][$i] = $value;
                }
            }
            $blogPost->Date = time();
            $blogPost->Published = 1;
            $blogPost->Archived = 0;
            $blogPost = $this->BlogPost->patchEntity($blogPost, $formData);
            if ($this->BlogPost->save($blogPost)) {
                $this->Flash->success(__('The blog post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog post could not be saved. Please, try again.'));
        }
        $image = $this->BlogPost->Image->find('list', [
            'limit' => 200
        ]);
        $img_ob = $this->BlogPost->Image->find('all');

        $this->set(compact('blogPost','image','img_ob'));
        $this->set('title', 'Add New Blog');



    }
    public function publishToFacebook($id = null, $message = "New Blog") {

//        Get referenced blog post using the id sent via client side
        $blogPost = $this->BlogPost->get($id);
//        check if the blog exists in database
        if ($blogPost == null) {
            throw new NotFoundException();
        }
//        initiate facebook object passing key params
        $fb = new \Facebook\Facebook([
            'app_id' => '726068664574442',
            'app_secret' => '092a9cdf771ccb1ff51fdaf73ef22420',
            'default_graph_version' => 'v2.4',
        ]);
        $client = $fb->getOAuth2Client();

        try {
            // Returns a long-lived access token
            $accessToken = $client->getLongLivedAccessToken('EAAKUWwjVoeoBAOFGfZB4VpnKKM4R6eucaPEc17LOfGFwuaaO0it21ZBmQV5xmNgKJfdYPMB3Cxd8icwXVRFtf0EI2NTMN9EXkwnHbnBQRhYQmBQbUuLZCgzocD1ZBWbYpM24IZAI0wq6O6ZAIJ5sbJ5XVpABKmsWcnPXqfjoFBQAKa6bZBrZAX0ZBek1H1ijfRBKrXzOMdM50ggZDZD');
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // There was an error communicating with Graph
            echo $e->getMessage();
            exit;
        }

        if (isset($accessToken)) {
            // Logged in.
            $_SESSION['facebook_access_token'] = (string) $accessToken;
            $fb->setDefaultAccessToken((string) $accessToken);
        }

        try {
            // Returns a `FacebookFacebookResponse` object
            $data = array('message' =>  "New Blog uploaded. Please check it out! :)", 'link' => 'http://ie.infotech.monash.edu/team106/development/blogpost/view/'.$id);
            $response =$fb->post('/me/feed', $data);
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // There was an error communicating with Graph
            echo $e->getMessage();
            exit;
        }
        debug($response->getGraphNode());

        $this->redirect(['action' => 'index']);
    }


    public function publish($id = null)
    {
        $blogPost = $this->BlogPost->get($id);
        if ($blogPost == null) {
            throw new NotFoundException();
        }

        $blogPost->Published = true;

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
            $data = $this->request->getData('checkbox');
            $formData = $this->request->getData();

            foreach ($data as $i => $value){
                if($value != null && $value != 0){
                    $formData['image']['_ids'][$i] = $value;
                }
            }
            $blogPost = $this->BlogPost->patchEntity($blogPost, $formData);
            if ($this->BlogPost->save($blogPost)) {
                $this->Flash->success(__('The blog post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog post could not be saved. Please, try again.'));
        }
        $image = $this->BlogPost->Image->find('list', [
            'limit' => 200

        ]);

        $img_ob = $this->BlogPost->Image->find('all');

        $this->set(compact('blogPost','image','img_ob'));
        $this->set('title', 'Edit Blog # '.$id);

    }

    /**K
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

        return $this->redirect($this->referer());
    }
// delete image function in view page
// cannot work need to fix
//    public function deleteImage($id = null){
//        $this->request->allowMethod(['post', 'delete']);
//        $blogPost = $this->BlogPost->get($id);
//        $image = $this->BlogPost->Image->get($id);
//        $this->BlogPost->Image->unlink($blogPost, $image);
//    }

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
        $archivedBlogPosts = TableRegistry::get('BlogPost')->find('all')->where(['BlogPost.Archived' => 1])->contain([])->orderDesc('Modified');
        $this->set('archivedBlogPosts', $this->paginate($archivedBlogPosts));
        $this->set('title', 'Archived Blogs');

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
        $blogs = $this->BlogPost->find()->where([
            'OR' => [
                'title LIKE' => $queryTermsWithWildCard,
                'Body LIKE' => $queryTermsWithWildCard
            ]
        ]);

        // In a large CMS, this search is likely to return a large number of articles, so the results should be
        // paginated.
        $this->loadComponent('Paginator');
        $paginatedBlogs = $this->Paginator->paginate($blogs);
        $this->set('blogs', $paginatedBlogs);


        // Pass the query the user asked for to the view, so we can say something like "Results for 'Blah'..." to
        // confirm that we did indeed search what they asked us to. It also means that we can populate the search
        // text input with the string, so the user can perform the search again.
        $this->set('query', $queryTerms);

        $this->viewBuilder()->setLayout('admin');
        $this->viewBuilder()->setTemplate('search');
    }
    public function advanceSearch() {
        $this->loadComponent('Paginator');
        $queryTermsString = $this->getRequest()->getQuery('query');

        // Split the query string based on one or more whitespace characters (\s+).
        // This is done using a "Regular Expression" (regex). They are often difficult to make sense of when starting out
        // building websites, but they do get easier to understand the more you work with them. Proof of this is that
        // when I started my career, I would have had no idea what /\s+/ meant. But after a lot of practice, I'm able
        // to write a regex that does pretty much what I need for simpler tasks like this (Split on all whitespace characters).
        $queryTermsArray = preg_split('/\s+/', $queryTermsString);

        // We want to search for each term independently. If the user provided multiple terms, such as "PHP HTML", then
        // we should find all articles where:
        //  (The title includes "PHP" OR the body includes "PHP")
        //   AND
        //  (The title includes "HTML" OR the body includes "HTML")
        // Notice how for each term, we need to build a condition such as "title LIKE ... OR body LIKE ...".
        // This is what happens in the loop below, we build a collection of these "OR" statements.
        $queryTermConditions = [];
        foreach($queryTermsArray as $term){
            $queryTermConditions[] = ['OR' => [
                'BlogPost.title LIKE' => "%{$term}%",
                'BlogPost.Body LIKE' => "%{$term}%",
            ]];
        }

        // Once we have a collection of or (title LIKE ... OR body LIKE ...) statements, then we need to combine each
        // one using an AND (see comments above for example). By default, if we provide an array of conditions to
        // the where() method, then it will join them all together using AND, which is exactly what we want.
        $blogsQuery = $this->BlogPost->find()->where($queryTermConditions);

        $this->set('blogs', $this->Paginator->paginate($blogsQuery));

        // Pass the query the user asked for to the view, so we can say something like "Results for 'Blah'..." to
        // confirm that we did indeed search what they asked us to. It also means that we can populate the search
        // text input with the string, so the user can perform the search again.
        $this->set('query', $queryTermsString);

        $this->viewBuilder()->setLayout('admin');
        $this->viewBuilder()->setTemplate('search');

    }
    public function publishcomment($id){
        $this->loadModel('PostComment');
        $comment = $this->PostComment->get($id);
        if($comment->showed==0){
            $comment->showed=1;
        }
        else{
            $comment->showed=0;
        }
        if($this->PostComment->save($comment)){
            $this->Flash->success(__('Change saved'));
        }
        else{
            $this->Flash->success(__('Changed cannot be saved. Please try Again.'));

        }

        return $this->redirect($this->referer());

    }
    public function displayComments() {
        $this->layout ='admin';

        $this->loadModel('post_comment');
        $comments = $this->paginate($this->post_comment->find('all')->contain(['BlogPost']));
        $this->set(compact('comments'));
        $this->set('title', 'View Blog Comments');

    }

}
