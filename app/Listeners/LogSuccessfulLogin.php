<?php

namespace App\Listeners;

class LogSuccessfulLogin
{
    public function __construct()
    {
        //
    }

    public function handle($event)
    {
        $event->user->login_at = carbon();
        $event->user->save();
    }
}
