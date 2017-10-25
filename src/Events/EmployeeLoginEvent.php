<?php

namespace Codecasts\Auth\JWT\Events;

use App\Models\Store;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EmployeeLoginEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $storeId;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, $store)
    {
        $this->user = $user;
        $this->storeId = $store;
    }
}
