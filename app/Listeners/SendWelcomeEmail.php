<?php

namespace App\Listeners;

use App\Events\UserRegitered;

use Xcholars\Mail\Mailer;

class SendWelcomeEmail
{
    private $mail;

   /**
    * Create the event listener.
    *
    * @return void
    */
    public function __construct(Mailer $mail)
    {
        $this->mail = $mail;
    }

   /**
    * Handle the event.
    *
    * @param object App\Events\OrderShipped $event
    * @return void
    */
    public function handle(UserRegitered $event)
    {
        $this->mail->send('WelcomeEmail', $event->user->getAttributes(), function ($mail) use($event)
        {
            $mail->from('newspair@example.com', 'Welcome Email');

            $mail->to('pairplanet@gmail.com', 'john doe');

            $mail->subject('Weilcome to' . app_name());
      });
    }

}
