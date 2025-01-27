<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Log\Log;
use Cake\Mailer\Email;
use Cake\Routing\Router;
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
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('BlogPost');
        $this->loadModel('post_comment');
        $this->Auth->allow(['index','view','advanceSearch']);
    }

    public function isAuthorized($user)
    {
        return true;
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
        $blogPost = $this->paginate(
            $this->BlogPost->find('all')
            ->order('Date DESC')
        );
        $this->viewBuilder()->setLayout('client_default');

        //$this->set(compact('blogPost'));
        //$blogPost = $this->paginate($this->BlogPost);

        //$this->set(compact('blogPost'));
        $this->loadModel("Webpages");
        $webpages = $this->Webpages->find('all');
        $this->set(compact('blogPost','webpages'));
    }
    public function view($id = null){
        $this->loadComponent('Paginator');
        $this->viewBuilder()->setLayout('client_default');
        $blogPost = $this->BlogPost->get($id, [
            'contain' => ['image']
        ]);


        $this->set('blogPost', $blogPost);

        $this->loadModel('PostComment');
        $comment = $this->PostComment->find('all',['conditions'=>['and'=>['Blog_post_id'=>$id],['showed'=>1]]])->toList();
        $this->set('comments',$comment);
        $newComment = $this->PostComment->newEntity();
        $this->set(compact('newComment'));
        if ($this->request->is('post')) {
            if($this->request->getData()['User_Name']==''||$this->request->getData()['User_Email']==''||$this->request->getData()['Comment_Details']=='') {
                if ($this->request->getData()['User_Name'] == '') {
                    $this->set('nameError', 'Please enter your name.');
                }
                if ($this->request->getData()['User_Email'] == '') {
                    $this->set('emailError', 'Please enter your email.');
                }
                if ($this->request->getData()['Comment_Details'] == '') {
                    $this->set('commentError', 'Comments field cannot be empty.');
                }
                $this->Flash->error(__('Sorry, your comment cannot be submitted,please try it again.'));
            }
            else {
                $newComment->User_Name = $this->request->getData()['User_Name'];
                $newComment->User_Email = $this->request->getData()['User_Email'];
                $newComment->Comment_Details = $this->request->getData()['Comment_Details'];
                $newComment->showed = 0;
                $newComment->created= time();
                $newComment->Blog_post_id = $blogPost->blog_post_id;
                $sendNotificationEvent = new Event('User.postComment', $newComment);
                $this->getEventManager()->dispatch($sendNotificationEvent);

                $email = new Email('default');
                $email->setLayout('');
                $email->setTemplate('newcomment');
                $email->setEmailFormat('html');

                $email->setTo('allsortMary@gmail.com');
                $email->setSubject('New comments');
                $email->setViewVars(['username' => $this->request->getData()['User_Name'],'userEmail'=>$this->request->getData()['User_Email'],'userComment'=>$this->request->getData()['Comment_Details']]);


                if ($this->PostComment->save($newComment) && $email->send()) {
                    $this->Flash->success('Your comment has been submitted',['key'=>'comment_sent']);

                    return $this->redirect(['action' => 'view', $id]);
                }

            }
        }




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

//        $this->viewBuilder()->setLayout('client');
        $this->layout ='client_default';
        $this->viewBuilder()->setTemplate('search');

    }
}
