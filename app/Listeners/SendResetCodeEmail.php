<?php

namespace App\Listeners;

use App\Events\EmailExist;

use Xcholars\Mail\Mailer;

class SendResetCodeEmail
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
    public function handle(EmailExist $event)
    {
        $this->mail->send('ResetCodeEmail', $event->user->getAttributes(), function ($mail) use($event)
        {
          $mail->from('newspair@example.com', 'Reset Code');

          $mail->to($event->user->email, $event->user->fullName);

          $mail->subject('Forgot Password Code');
      });
    }

}
