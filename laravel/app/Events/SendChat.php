<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SendChat implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */

        public $message;

    /**
     *      *
     * @return void
     */
    public function __construct($news_message)
    {
        $this->message = $news_message;
    }

    /**
     *     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('news');
        // return new PrivateChannel('channel-name');
    }
    
    /**
     *      *
     * @return array
     */
    public function broadcastWith(){
        return ['message'=>$this->message];
    }
}
