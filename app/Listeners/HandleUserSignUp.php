<?php

namespace App\Listeners;

use App\Events\UserSignUp;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandleUserSignUp
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserSignUp  $event
     * @return void
     */
    public function handle(UserSignUp $event)
    {
        dump($event->user->name . '! hello, welcome to ' . env('APP_DOMAIN', 'Laravel'));
    }
}
