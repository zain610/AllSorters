<?php
namespace App\Controller;

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
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('BlogPost');
        $this->Auth->allow(['index','view']);
    }

    public function isAuthorized()
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
        $blogPost = $this->Paginator->paginate(
            $this->BlogPost->find('all')
        );
        $this->viewBuilder()->setLayout('client');
        $this->set(compact('blogPost'));
        //$blogPost = $this->paginate($this->BlogPost);

        //$this->set(compact('blogPost'));
    }
    public function view($id = null){
        $this->layout ='client';
        $blogPost = $this->BlogPost->get($id, [
            'contain' => ['image']
        ]);

        $this->set('blogPost', $blogPost);
    }

}
