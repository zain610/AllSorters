<?php
namespace App\Controller\Admin;

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

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->layout ='admin';
        $this->loadComponent('Paginator');
        $publishedEvents = $this->Paginator->paginate(
            $this->Events->find('all')->where(['Events.Published' => 1])->contain([])
        );
        $this->set(compact('publishedEvents'));
    }
    public function initialize()
    {
        parent::initialize();

        $this->loadModel('Events');
        $this->Auth->allow(['index']);
    }

    public function isAuthorized()
    {
        return true;
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
        $this->layout ='admin';
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
        $this->layout ='admin';
        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            $event->Published = 1;
            $event->Archived = 0;
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
        $this->layout ='admin';
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

        // If an event is archived, it is "unpublished" as well
        $event->Archived = 1;
        $event->Published = 0;

        if ($this->Events->save($event)) {
            $this->Flash->success(__('Your event has been archived.'));
        } else {
            $this->Flash->error(__('Unable to archive your event.'));
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
            $this->Flash->success(__('Your event has been restored.'));
        } else {
            $this->Flash->error(__('Unable to restore your event.'));
        }

        return $this->redirect(['action' => 'archiveIndex']);
    }
    public function archiveIndex()
    {
        $this->layout ='admin';
        $archivedEvents = TableRegistry::get('Events')->find('all')->where(['Events.Archived' => 1])->contain([]);
        $this->set('archivedEvents', $this->paginate($archivedEvents));
    }

    public function content($id = null)
    {
        $this->layout ='admin';
        $webpage = $this->Webpages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $webpage = $this->Webpages->patchEntity($webpage, $this->request->getData());
            if ($this->Webpages->save($webpage)) {
                $this->Flash->success(__('The webpage content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The webpage content could not be saved. Please, try again.'));
        }
        $this->set(compact('webpage'));
    }
}
