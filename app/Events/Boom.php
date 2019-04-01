<?php

namespace App\Events;

class BoomEvent extends Event
{
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        throw new Exception("BOOM");
    }
}