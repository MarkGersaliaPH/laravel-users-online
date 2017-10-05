<?php

namespace HighIdeas\UsersOnline\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;

class LogoutListener
{

    /**
     * Handle the event.
     *
     * @param  auth.logout  $event
     * @return void
     */
    public function handle($event)
    {
        $event->user->pullCache();
    }
}
