<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class PingPong implements ShouldBroadcastNow
{
    public function __construct(public string $msg) {}

    public function broadcastOn(): Channel
    {
        return new Channel('test');   // 公開チャンネル
    }

    public function broadcastAs(): string
    {
        return 'PingPong';            // .PingPong で受信
    }

    public function broadcastWith(): array
    {
        return ['msg' => $this->msg];
    }
}
