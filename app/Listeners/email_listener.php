<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\first_email;

class email_listener
{
    protected $user;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
         //return $this->user = $user;
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(mail_event $event)
    {
        $aa = $event->aa;
        Mail::to('shorunke99@gmail.com')->send(new first_email($user));
    }
}
