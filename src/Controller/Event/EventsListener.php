<?php


namespace App\Controller\Event;



use Cake\Event\EventListenerInterface;
use Cake\Log\Log;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class EventsListener implements EventListenerInterface
{

    /**
     * Returns a list of events this object is implementing. When the class is registered
     * in an event manager, each individual method will be associated with the respective event.
     *
     * ### Example:
     *
     * ```
     *  public function implementedEvents()
     *  {
     *      return [
     *          'Order.complete' => 'sendEmail',
     *          'Article.afterBuy' => 'decrementInventory',
     *          'User.onRegister' => ['callable' => 'logRegistration', 'priority' => 20, 'passParams' => true]
     *      ];
     *  }
     *
     * @return array Associative array or event key names pointing to the function
     * that should be called in the object when the respective event is fired
     */
    public function implementedEvents()
    {
        // TODO: Implement implementedEvents() method.
        return array(
            'Controller.Events.beforeEventsIndex' => 'handlePastEvents'
        );
    }
    public function handlePastEvents($event) {
        $event->subject()->set('eventsaddon', '1 2 3');
        Log::write('debug', $event);
        TableRegistry::get('Events')
            ->query()
            ->update()
            ->set(['Archived' => 1, 'Published' => 0])
            ->where(['Date < CURDATE()'] )->execute();

    }
}
