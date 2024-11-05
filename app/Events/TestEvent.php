<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TestEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return <\Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): Channel
    {

        return new Channel('test');
    }

    public function broadcastWith(): array
    {
        return [
            'test' => 'hola',
        ];
    }

    public function broadcastAs(): string
    {
        return '.notification';
    }
}
