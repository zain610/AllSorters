<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\I18n\Number;
use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;

//        'gmail' => [
//
//            'host' => 'ssl://stmp.gmail.com',
//            'port' => 465,
//            'username' => 'allsortMary@gmail.com',
//            'password' => 'allsortMary77',
//            'className' => 'Smtp',
//            'tls' => true
//        ]


/**
 * Subscriptions Controller
 *
 * @property \App\Model\Table\SubscriptionsTable $Subscriptions
 *
 * @method \App\Model\Entity\Subscription[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubscriptionsController extends AppController
{
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
        $this->set('subscribers', $subscribers);
        $this->set('mail', $this->request->getSession()->read('mail'));
        $this->set('email', $this->request->getSession()->read('sendermail'));
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

                return $this->redirect(['prefix' => false, 'controller' => 'Articles', 'action' => 'home']);
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
        $this->request->allowMethod(['post', 'delete']);
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
        $this->request->getSession()->write('subscribers', $sender_list );
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
}
