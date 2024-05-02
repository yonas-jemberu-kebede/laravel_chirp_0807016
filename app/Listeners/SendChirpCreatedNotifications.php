<?php

namespace App\Listeners;

use App\Events\ChirpCreated;
use App\Models\User;
use App\Notifications\NewChirp;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendChirpCreatedNotifications implements ShouldQueue
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
     * @param  \App\Events\ChirpCreate  $event
     * @return void
     */
    public function handle(ChirpCreated $event)
    {
        foreach(user::whereNot('id',$event->chirp->user_id)->cursor() as $user){
            $user->notify(new NewChirp($event->chirp));
        }
    }
}
