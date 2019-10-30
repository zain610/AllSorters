<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\I18n\Date;
use Cake\I18n\FrozenTime;
use Cake\I18n\Time;
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
        $this->set('data', $this->request->getSession()->read('data'));
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
    public function edit( $id = null)
    {
        $this->layout ='admin';
        $event = $this->Events->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $date = $this->request->getData('date');
            $time = $this->request->getData('time');
            $this->request->getSession()->write('data', $data);
            $event->Date = $date;
            $event->Time = $time;
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        //convert the Date and Time objects from TimeFrozen to just plain accessible objects
        $dateObject = get_object_vars($event->Date);
        $timeObject = get_object_vars($event->Time);

        //extract date and time from these objects. For some mystical reason, they are both called date
        //also convert the string to time and then parse a format
        $date = date('Y-m-d' ,strtotime($dateObject['date']));
        $time = date('H:i:s' ,strtotime($timeObject['date']));

        $event->date = $date;
        $event->time = $time;
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
}

