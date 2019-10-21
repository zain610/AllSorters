<?php
namespace App\Mailer;
use Cake\Mailer\Mailer;

class NewsletterMailer extends Mailer {
    public function registered($sender) {
        $this
            ->to($sender) // add email recipient
            ->emailFormat('html') // email format
            ->subject(sprintf('Welcome %s', $sender)) //  subject of email
            ->viewVars([   // these variables will be passed to email template defined in step 5 with //name registered.ctp
                'useremail'=>$sender ])
            ->template('default');
    }
}
