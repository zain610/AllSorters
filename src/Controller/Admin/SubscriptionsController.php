<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\I18n\Number;
use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;
use Cake\Http\Client;

//use Tools\Mailer\Email;
use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

/**
 * Subscriptions Controller
 *
 * @property \App\Model\Table\SubscriptionsTable $Subscriptions
 *
 * @method \App\Model\Entity\Subscription[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubscriptionsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
//        $cssToInlineStyles = new CssToInlineStyles();
//        $html = file_get_contents(__DIR__ . '/../../Template/Layout/Email/html/default.ctp');
//        $css = file_get_contents(__DIR__.'/../../../webroot/css/email_styling.css');
//        debug($cssToInlineStyles->convert($html, $css));
        $this->layout = 'admin';
        $subscriptions = $this->paginate($this->Subscriptions);
        $subscribers = $this->request->getSession()->read('subscribers');
        $BlogPost = $this->loadModel('BlogPost');
        $blogPosts = $BlogPost->find('all')->toArray();
        $this->set('blogs', $blogPosts);
        $this->set('subscribers', $subscribers);
        $this->set('formdata', $this->request->getSession()->read('formdata'));
        $this->set('email', $this->request->getSession()->read('mail'));
        $this->set('id', $this->request->getSession()->read('id'));
        $this->set(compact('subscriptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Subscription id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subscription = $this->Subscriptions->get($id, [
            'contain' => []
        ]);

        $this->set('subscription', $subscription);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subscription = $this->Subscriptions->newEntity();
        if ($this->request->is('post')) {
            $subscription = $this->Subscriptions->patchEntity($subscription, $this->request->getData());
            if ($this->Subscriptions->save($subscription)) {
                $this->Flash->success(__('The subscription has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subscription could not be saved. Please, try again.'));
        }
        $this->set(compact('subscription'));

    }

    /**
     * Delete method
     *
     * @param string|null $id Subscription id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['get','post', 'delete']);
        $subscription = $this->Subscriptions->get($id);
        if ($this->Subscriptions->delete($subscription)) {
            $this->Flash->success(__('The subscription has been deleted.'));
        } else {
            $this->Flash->error(__('The subscription could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function emailNewsletter()
    {
        $this->layout = "admin";
        $this->request->allowMethod('post');
        $BlogPost = $this->loadModel('BlogPost');
        //get the data from front end with the users to send the email to and blogs info.
        $formData = $this->request->getData();
        $parsedData = [];
        $parsedData['sender'] = [];
        $parsedData['blogs'] = [];
        $message = "";
        //get the keys of the data = ids
        $data_keys = array_keys($formData); // [message, 1,2,3,4,5,6]
        //iterate over the keys list and foreach key, find the value is 1, then add it to the senders list
        foreach($data_keys as $key) {
            //check if the key contains sid
            if(strpos($key, "sid")!== false) {
                //get the ids which were selected by the user
                if($formData[$key]) {
                    //strip the "sid" from the keys and fetch subscriber info.
                    $subscriber_id = trim($key, "sid");
                    array_push($parsedData['sender'], $this->Subscriptions->find()->select(['email_address'])->where(['id' => $subscriber_id])->toList()[0]);
                }
            } elseif (strpos($key, "bid")!== false) {
                //get the blog ids selected by the user
                if($formData[$key]) {
                    //strip the "bid" from the keys and fetch the blogs info.
                    $blog_id = trim($key, "bid");
                    array_push($parsedData['blogs'], $BlogPost->find()->where(['blog_post_id' => $blog_id ])->toArray()[0]);

                }
            } elseif (strpos($key, "message") !== false) {
                //store the message
                $parsedData['message']= $formData[$key];

            }
        }
        //send all the extracted information to the next step - sendEmails
        $this->sendEmails($parsedData);
        $this->request->getSession()->write('formdata', $parsedData['blogs'] );
        return $this->redirect(['action' => 'index']);
    }
    private function sendEmails($data) {
        //iterate over each sender and send an email.
        $message = strip_tags($data['message']);
        $title = "Test number infinite";
        $blogs = $data['blogs'];

        if(!empty($data['sender'])) {
            foreach ($data['sender'] as $sender) {
                $sender_email = $sender['email_address'];
                $this->request->getSession()->write('sendermail', $sender_email);


                $email = new Email('default');
                $email->setFrom(['allsortMary@gmail.com' => 'All Sorters'])
                    ->setTo($sender_email)
                    ->setTemplate('default')
                    ->setEmailFormat('html')
                    ->setViewVars(['message' => strip_tags($data['message']), 'title' => "Newsletter update from AllSorters", 'blogs' => $blogs])
                    ->setSubject("Newsletter update from AllSorters")
                    ->setAttachments([
                        'logo.png' => [
                            'file' => __DIR__.'/../../../webroot/img/Allsorters_logo.png',
                            'mimetype' =>'image/png',
                            'contentId' => 'allsorters-logo-id'
                        ]
                    ]);
//            Email::deliver($sender_email, 'Hello World', 'Test message', ['from' => 'allsortMary@gmail.com']);
            }
//            $this->Email->helpers(['EmailProcessing' => ['email' => $this->Email]]);

            if($email->send()) {
                $this->request->getSession()->write('mail', $email->getViewVars());
            } else {
                $this->request->getSession()->write('mail', false);
            }

        }

    }


    public function deleteSubscriber() {
        $layout = 'ajax'; // you need to have a no html page, only the data.
        $this->autoRender = false; // no need to render the page, just plain data.
        $this->request->allowMethod(["delete", "post"]);
        $id = $this->request->getData();

        $subscription_to_delete = $this->Subscriptions->get($id, [
            'contain' => []
        ]);
        if ($this->Subscriptions->delete($subscription_to_delete)) {
            $this->Flash->success(__('The subscription has been deleted.'));
        } else {
            $this->Flash->error(__('The subscription could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);


    }
//    private function cssToInlineStyle() {
//        $html =file_get_contents(__DIR__ . '/')
//    }
}
