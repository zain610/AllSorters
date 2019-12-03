<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

/**
 * Request Controller
 *
 * @property \App\Model\Table\RequestTable $Request
 *
 */
class RequestController extends AppController
{

    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->Auth->allow(['add']);
        $this->viewBuilder()->setLayout('client');

    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Client']
        ];
        $request = $this->paginate($this->Request);

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
        $request = $this->Request->get($id);

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
            $request->created = time();
            if ($this->Request->save($request)) {

                $email = new Email('default');
                $email->setTemplate('newClient');
                $email->setEmailFormat('html');
                $email->setTo('allsortMary@gmail.com');
                $email->setSubject('You Got a new client message');
                $email->setViewVars(['request' => $request]);
                $email->send();


                $this->Flash->success(__('Your message has been sent.'),['key'=>'success'] );

                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Something wrong. Please, try again.'),['key'=>'error'] );
        }
//        $this->Js->set('myArray', $request);
//        echo $this->Js->writeBuffer(array('onDomReady' => false));
        $this->set(compact('request'));
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
}
