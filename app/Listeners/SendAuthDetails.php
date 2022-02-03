<?php

namespace App\Listeners;

use App\Events\UserRegitered;

use Xcholars\Mail\Mailer;

class SendAuthDetails
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
        $this->mail->send('sendAuthDetails', $event->user->getAttributes(), function ($mail) use($event)
        {
            $mail->from('newspair@example.com', app_name());

            $mail->to($event->user->email, $event->user->fullName);

            $mail->subject('High Point Academy Admission Approved');
        });
    }

}
