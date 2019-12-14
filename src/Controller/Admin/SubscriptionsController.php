<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\I18n\Number;
use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;
use Cake\Http\Client;


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
        $this->layout = 'admin';
        $subscriptions = $this->paginate($this->Subscriptions);
        $subscribers = $this->request->getSession()->read('subscribers');
        $BlogPost = $this->loadModel('BlogPost');
        $blogPosts = $BlogPost->find('all')->toArray();
        $this->set('blogs', $blogPosts);
        $this->set('subscribers', $subscribers);
        debug($this->request->getSession()->read('formdata'));
        $this->set('formdata', $this->request->getSession()->read('formdata'));
        $this->set('email', $this->request->getSession()->read('sendermail'));
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
    public function submitNewsletterForm() {
        $this->layout = "admin";
        $form_data = $this->request->getData();
        debug($form_data);
        $this->request->getSession()->write('formdata', $form_data );
        return $this->redirect(['action' => 'index']);
    }
    public function emailNewsletter()
    {
        $this->layout = "admin";
        $this->request->allowMethod('post');
        //get the data from front end with the users to send the email to.
        $formData = $this->request->getData();
        $sender_list = [];
        $message = "";
        //get the keys of the data = ids
        $data_keys = array_keys($formData); // [message, 1,2,3,4,5,6]
        //iterate over the keys list and foreach key, find the value is 1, then add it to the senders list
        foreach($data_keys as $key) {
            if($key !== "message") {
                if($formData[$key]) {
                    array_push($sender_list, $this->Subscriptions->find()->select(['email_address'])->where(['id' => $key])->toList());
                }
            } else {
                $message = $formData[$key];
            }
        }
        $this->sendEmails($sender_list, $message);
        $this->request->getSession()->write('formdata', $formData );
        return $this->redirect(['action' => 'index']);
    }
    private function sendEmails($sender_list = [], $message = "") {
        //iterate over each sender and send an email.
        foreach ($sender_list as $sender) {
            $sender_email = $sender[0]['email_address'];
            $this->request->getSession()->write('sendermail', $sender_email);

            $email = new Email('default');
            $email->setFrom(['allsortMary@gmail.com' => 'All Sorters'])
                ->setTo($sender_email)
                ->setTemplate('default')
                ->setViewVars(['title' => "Newsletter update from AllSorters", 'content'=> strip_tags($message)])
                ->setSubject("Newsletter update from AllSorters");
//            Email::deliver($sender_email, 'Hello World', 'Test message', ['from' => 'allsortMary@gmail.com']);
            if($email->send()) {
                $this->request->getSession()->write('mail', true);
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
}
