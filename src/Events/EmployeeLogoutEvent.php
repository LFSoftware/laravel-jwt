<?php

namespace Codecasts\Auth\JWT\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EmployeeLogoutEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $storeId;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $storeId)
    {
        $this->user = $user;
        $this->storeId = $storeId;
    }
}
