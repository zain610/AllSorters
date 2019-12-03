<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Mailer\Email;

/**
 * Request Controller
 *
 * @property \App\Model\Table\RequestTable $Request
 *
 * @method \App\Model\Entity\Request[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RequestController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->layout ='admin';
        $request = $this->paginate($this->Request);

        $this->set('response Sent', $this->getRequest()->getSession()->read('sent'));
        $this->set(compact('request'));
    }

    /**
     * View method
     *
     * @param string|null $id Request id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->layout = 'admin';
        $request = $this->Request->get($id);
        if($this->request->is(['post', 'put'])) {

            $response = $this->Request->patchEntity($request, $this->request->getData());
            if ($this->Request->save($request)) {
                $this->Flash->success(__('The request has been saved.'));
                $this->sendEmail($response->Request_Email, $response->Response, $response->Query_info);
                return $this->redirect(['action' => 'index']);
            }
            $this->set('response', $response);
        }
        $this->set('request', $request);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $request = $this->Request->newEntity();
        if ($this->request->is('post')) {
            $request = $this->Request->patchEntity($request, $this->request->getData());
            if ($this->Request->save($request)) {
                $this->Flash->success(__('The request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The request could not be saved. Please, try again.'));
        }
        $client = $this->Request->Client->find('list', ['limit' => 200]);
        $this->set(compact('request', 'client'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Request id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $request = $this->Request->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $request = $this->Request->patchEntity($request, $this->request->getData());
            if ($this->Request->save($request)) {
                $this->Flash->success(__('The request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The request could not be saved. Please, try again.'));
        }
        $client = $this->Request->Client->find('list', ['limit' => 200]);
        $this->set(compact('request', 'client'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Request id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $request = $this->Request->get($id);
        if ($this->Request->delete($request)) {
            $this->Flash->success(__('The request has been deleted.'));
        } else {
            $this->Flash->error(__('The request could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function sendEmail($sendEmail = "", $message="", $subject="") {
        $email = new Email('default');
        $email->setFrom(['allsortMary@gmail.com' => 'All Sorters'])
            ->setTo($sendEmail)
            ->emailFormat('html')
            ->setTemplate('default')
            ->setViewVars(['title' => "", 'content'=> $message])
            ->setSubject("Query: ". $subject. " Response");
//            Email::deliver($sender_email, 'Hello World', 'Test message', ['from' => 'allsortMary@gmail.com']);
        if($email->send()) {
            $this->Flash->success(__('The Mail has been sent.'));
        } else {
            $this->Flash->error(__('There was an error sending the Email'));
        }


    }
}
