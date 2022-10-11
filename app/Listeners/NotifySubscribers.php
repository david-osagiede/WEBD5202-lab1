<?php

namespace App\Listeners;

use App\Events\ThreadCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifySubscribers
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
     * @param  \App\Events\ThreadCreated  $event
     * @return void
     */
    public function handle(ThreadCreated $event)
    {
        //event->thread->subscribers->forEach(function ($subscribers)))

        var_dump($event->thread['name'] . ' was published to the forum');
    }
}
