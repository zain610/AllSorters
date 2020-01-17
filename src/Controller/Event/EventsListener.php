<?php


namespace App\Controller\Event;



use App\Controller\Admin\SubscriptionsController;
use App\Mailer\NewsletterMailer;
use Cake\Event\EventListenerInterface;
use Cake\Log\Log;
use Cake\Mailer\Email;
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
//            'User.postComment' => 'sendNotification',
            'Controller.Events.beforeEventsIndex' => 'handlePastEvents'

        );
    }
    public function handlePastEvents($event) {
        TableRegistry::get('Events')
            ->query()
            ->update()
            ->set(['Archived' => 1, 'Published' => 0])
            ->where(['Date < CURDATE()'] )->execute();

    }

    public function sendNotification($event) {
        //get comment information and construct an email notification for Mary
        $blog = TableRegistry::get('BlogPost')
            ->get($event->subject->Blog_post_id)
            ->toArray();
        $comment_user = $event->subject->User_Name;
        $comment_details = $event->subject->Comment_Details;
        Log::write('debug', $blog['title']);

//        send email
        $email = new Email('default');
        //send email to Mary - TODO: replace placeholder email with Mary's actual email address. Please find a fix for using diff templates.
        //Currently I am unable to use another template for sending emails except the default one.
        $email->setFrom(['allsortMary@gmail.com' => 'All Sorters'])
            ->setTo('znshroff@gmail.com')
            ->setTemplate('test_template','default')
            ->setEmailFormat('html')
            ->setViewVars(['message' => $comment_user.' has posted a new comment on blog '.$blog['title'], 'title' => "Blog Comment notification from AllSorters"])
            ->setSubject("Notification from AllSorters")
            ->setAttachments([
                'logo.png' => [
                    'file' => __DIR__.'/../../../webroot/img/Allsorters_logo.png',
                    'mimetype' =>'image/png',
                    'contentId' => 'allsorters-logo-id'
                ]
            ]);
        $email->send();
        return true;


    }
}
