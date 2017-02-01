<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class RedisTwitterUserSubscribe implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $username;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($track)
    {
        $this->track = $track;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        //return new PrivateChannel('channel-name');
        //return ['subscription'];
        return ['twitter:tracking'];
    }

    public function broadcastAs()
    {
        return 'twitter.tracking';
    }

}
