<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use app\Mail\first_email;

class mail_event
{
    protected $user;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(mail_event $event)
    {
        $ee = Mail::to('shorunke99@gmail.com')->send(new first_email($user));
        //
    }
}
