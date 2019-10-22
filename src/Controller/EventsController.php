<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 *
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventsController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadModel('Events');
        $this->Auth->allow(['index']);
        $this->Auth->allow(['home']);
        $this->viewBuilder()->setLayout('client');
    }
    public function isAuthorized($user)
    {
        // return $user['id'] > 0;
        return $this->Auth->user('role') > 2;
    }



    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $events = $this->paginate($this->Events);

        $this->set(compact('events'));
    }


    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => []
        ]);

        $this->set('event', $event);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $this->set(compact('event'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $this->set(compact('event'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function archive($id = null)
    {
        $event = $this->Events->get($id);
        if ($event == null) {
            throw new NotFoundException();
        }

        // If an article is archived, it is "unpublished" as well
        $event->Archived = 1;
        $event->Published = 0;

        if ($this->Events->save($event)) {
            $this->Flash->success(__('Your Event has been archived.'));
        } else {
            $this->Flash->error(__('Unable to archive your Event.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function restore($id = null)
    {
        $event = $this->Events->get($id);
        if ($event == null) {
            throw new NotFoundException();
        }

        $event->Archived = 0;
        $event->Published = 1;

        if ($this->Events->save($event)) {
            $this->Flash->success(__('Your Event has been restored.'));
        } else {
            $this->Flash->error(__('Unable to restore your Event.'));
        }

        return $this->redirect(['action' => 'archiveIndex']);
    }
    public function archiveIndex()
    {
        $this->layout ='admin';
        $archivedEvents = TableRegistry::get('Events')->find('all')->where(['Events.Archived' => 1])->contain([]);
        $this->set('archivedEvents', $this->paginate($archivedEvents));
    }
}
