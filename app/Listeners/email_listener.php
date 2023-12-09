<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\first_email;
use App\Models\User;

class email_listener
{
    //protected $aa;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
         //return $this->aa = $aa;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle( $event)
    {
        $aa = User::factory()->make();
        Mail::to('shorunke99@gmail.com')->send(new first_email($aa));
    }
}
